<?php

namespace Lelesys\Plugin\SiteMap\ViewHelpers;

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Neos\Domain\Service\ContentContext;
use TYPO3\TYPO3CR\Domain\Model\NodeInterface;

/**
 *
 * @api
 */
class PageUrlViewHelper extends \TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * @Flow\Inject
	 * @var \TYPO3\TYPO3CR\Domain\Repository\NodeRepository
	 */
	protected $nodeRepository;

	/**
	 * Render the link.
	 *
	 * @param mixed $node A TYPO3\TYPO3CR\Domain\Model\PersistentNodeInterface object or a string node path
	 * @param string $format Format to use for the URL, for example "html" or "json"
	 * @param boolean $absolute If set, an absolute URI is rendered
	 * @return string The rendered link
	 */
	public function render($node = NULL, $format = NULL, $absolute = FALSE) {
		$currentContext = $this->nodeRepository->getContext();
		if ($currentContext === NULL) {
			$currentContext = new ContentContext('live');
			$this->nodeRepository->setContext($currentContext);
		}
		if ($node === NULL) {
			$node = $currentContext->getCurrentNode();
		} elseif (is_string($node)) {
			if (substr($node, 0, 2) === '~/') {
				$node = $currentContext->getCurrentSiteNode()->getNode(substr($node, 2));
			} else {
				if (substr($node, 0, 1) === '/') {
					$node = $currentContext->getNode($node);
				} else {
					$node = $currentContext->getCurrentNode()->getNode($node);
				}
			}
		}

		if ($node instanceof NodeInterface) {
			$request = $this->controllerContext->getRequest()->getMainRequest();

			if ($format === NULL) {
				$format = $request->getFormat();
			}

			$uriBuilder = clone $this->controllerContext->getUriBuilder();
			$uriBuilder->setRequest($request);
			$uri = $uriBuilder
					->reset()
					->setCreateAbsoluteUri($absolute)
					->setFormat($format)
					->uriFor('show', array('node' => $node), 'Frontend\Node', 'TYPO3.Neos');
			return $uri;
		}
	}

}

?>