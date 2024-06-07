<?php
/**
 * CustomCSS Plugin
 *
 * @copyright  Copyright (C) 2013 - 2020 Tobias Zulauf All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or later
 */

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;

/**
 * CustomCSS Plugin
 *
 * @since  3-1
 */
class plgSystemcustomcss extends CMSPLugin
{
	/**
	 * Application object.
	 *
	 * @var    CMSApplication
	 * @since  3-4
	 */
	protected $app;

	/**
	 * Add, if exists, the custom.css file from the css folder from the template
	 *
	 * @return  void
	 * @since   3-1
	 */
	public function onBeforeCompileHead()
	{
		// Custom css is only relevant on HTML pages
		if ($this->app->getDocument()->getType() != 'html')
		{
			return;
		}

		$custom    = 'templates/' . $this->app->getTemplate() . '/css/custom.css';
		$customMin = 'templates/' . $this->app->getTemplate() . '/css/custom.min.css';

		if ((JDEBUG || !is_file($customMin)) && is_file($custom))
		{
			// Add Stylesheet custom.css
			$this->app->getDocument()->addStyleSheet($custom);

			return;
		}

		if (is_file($customMin))
		{
			// Add Stylesheets custom.min.css
			$this->app->getDocument()->addStyleSheet($customMin);

			return;
		}

		$templateLocation = 'site';

		if ($this->app->isClient('administrator')) {
            $templateLocation = 'administrator';
        }

		$mediaCustom    = 'media/templates/' . $templateLocation . '/' . $this->app->getTemplate() . '/css/custom.css';
		$mediaCustomMin = 'media/templates/' . $templateLocation . '/' . $this->app->getTemplate() . '/css/custom.min.css';

		if ((JDEBUG || !is_file($mediaCustomMin)) && is_file($mediaCustom))
		{
			// Add Stylesheet custom.css
			$this->app->getDocument()->addStyleSheet($mediaCustom);

			return;
		}

		if (is_file($mediaCustomMin))
		{
			// Add Stylesheets custom.min.css
			$this->app->getDocument()->addStyleSheet($mediaCustomMin);

			return;
		}
	}
}
