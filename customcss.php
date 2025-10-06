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
	 * Add, if exists, the custom.css file from the css folder from the template
	 *
	 * @return  void
	 * @since   3-1
	 */
	public function onBeforeCompileHead()
	{
		// Custom css is only relevant on HTML pages
		if ($this->getApplication()->getDocument()->getType() != 'html')
		{
			return;
		}

		$custom    = 'templates/' . $this->getApplication()->getTemplate() . '/css/custom.css';
		$customMin = 'templates/' . $this->getApplication()->getTemplate() . '/css/custom.min.css';

		if ((JDEBUG || !is_file($customMin)) && is_file($custom))
		{
			// Add Stylesheet custom.css
			$this->getApplication()->getDocument()->addStyleSheet($custom);

			return;
		}

		if (is_file($customMin))
		{
			// Add Stylesheets custom.min.css
			$this->getApplication()->getDocument()->addStyleSheet($customMin);

			return;
		}

		$templateLocation = 'site';

		if ($this->getApplication()->isClient('administrator')) {
            $templateLocation = 'administrator';
        }

		$mediaCustom    = 'media/templates/' . $templateLocation . '/' . $this->getApplication()->getTemplate() . '/css/custom.css';
		$mediaCustomMin = 'media/templates/' . $templateLocation . '/' . $this->getApplication()->getTemplate() . '/css/custom.min.css';

		if ((JDEBUG || !is_file($mediaCustomMin)) && is_file($mediaCustom))
		{
			// Add Stylesheet custom.css
			$this->getApplication()->getDocument()->addStyleSheet($mediaCustom);

			return;
		}

		if (is_file($mediaCustomMin))
		{
			// Add Stylesheets custom.min.css
			$this->getApplication()->getDocument()->addStyleSheet($mediaCustomMin);

			return;
		}
	}
}
