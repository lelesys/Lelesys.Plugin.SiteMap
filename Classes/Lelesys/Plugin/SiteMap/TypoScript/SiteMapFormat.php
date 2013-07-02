<?php

namespace Lelesys\Plugin\SiteMap\TypoScript;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Lelesys.Plugin.SiteMap".*
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

/**
 * A TypoScript object which sets the header to application/xml
 *
 */
class SiteMapFormat extends \TYPO3\Neos\TypoScript\MenuImplementation {

	/**
	 * @return string
	 */
	public function evaluate() {
		$this['items'] = $this->getItems();
		$this->tsRuntime->getControllerContext()->getResponse()->setHeader('Content-Type', 'application/xml');
		return parent::evaluate();
	}

}

?>
