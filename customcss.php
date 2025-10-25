<?php
/**
 * CustomCSS Plugin
 *
 * @copyright  Copyright (C) 2013 - 2020 Tobias Zulauf All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or later
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\CMSPlugin;

/**
 * CustomCSS Plugin
 *
 * @since  3-1
 */
class plgSystemcustomcss extends CMSPLugin
{
	/**
	 * Add, if exists, the custom.css file from the css folder from the template
	 *
	 * @return  void
	 * @since   3-1
	 */
	public function onBeforeCompileHead()
	{
		$app = Factory::getApplication();

		// Custom css is only relevant on HTML pages
		if ($app->getDocument()->getType() != 'html')
		{
			return;
		}

		$custom    = 'templates/' . $app->getTemplate() . '/css/custom.css';
		$customMin = 'templates/' . $app->getTemplate() . '/css/custom.min.css';

		if ((JDEBUG || !is_file($customMin)) && is_file($custom))
		{
			// Add Stylesheet custom.css
			$app->getDocument()->addStyleSheet($custom);

			return;
		}

		if (is_file($customMin))
		{
			// Add Stylesheets custom.min.css
			$app->getDocument()->addStyleSheet($customMin);

			return;
		}

		$templateLocation = 'site';

		if ($app->isClient('administrator'))
		{
			$templateLocation = 'administrator';
		}

		$mediaCustom    = 'media/templates/' . $templateLocation . '/' . $app->getTemplate() . '/css/custom.css';
		$mediaCustomMin = 'media/templates/' . $templateLocation . '/' . $app->getTemplate() . '/css/custom.min.css';

		if ((JDEBUG || !is_file($mediaCustomMin)) && is_file($mediaCustom))
		{
			// Add Stylesheet custom.css
			$app->getDocument()->addStyleSheet($mediaCustom);

			return;
		}

		if (is_file($mediaCustomMin))
		{
			// Add Stylesheets custom.min.css
			$app->getDocument()->addStyleSheet($mediaCustomMin);

			return;
		}
	}
}
