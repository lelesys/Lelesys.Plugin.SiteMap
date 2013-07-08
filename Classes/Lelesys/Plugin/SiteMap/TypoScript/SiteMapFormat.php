<?php

namespace Lelesys\Plugin\SiteMap\TypoScript;

/*                                                                        *
 * This script belongs to the package "Lelesys.Plugin.SiteMap".           *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
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
