<?php
/**
 * Joomla! Custom CSS Plugin
 *
 * @copyright  Copyright (C) 2013 - 2020 Tobias Zulauf All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or later
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\CMSPlugin;

/**
 * Joomla! custom.css Plugin
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
	 * Database object.
	 *
	 * @var    JDatabaseDriver
	 * @since  3-4
	 */
	protected $db;

	/**
	 * Add, if exists, the custom.css file from the css folder from the template
	 *
	 * @return  void
	 * @since   3-1
	 */
	public function onBeforeCompileHead()
	{
		$custom    = 'templates/' . $this->app->getTemplate() . '/css/custom.css';
		$customMin = 'templates/' . $this->app->getTemplate() . '/css/custom.min.css';

		if ((JDEBUG || !is_file($customMin)) && is_file($custom))
		{
			// Add Stylesheet custom.css
			$this->doc->addStyleSheet($custom);

			return;
		}
		
		if (is_file($customMin))
		{
			// Add Stylesheets custom.min.css
			$this->doc->addStyleSheet($customMin);

			return;
		}
	}
}