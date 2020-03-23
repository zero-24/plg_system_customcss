<?php
/**
 * Joomla! Custom CSS Plugin
 *
 * @copyright  Copyright (C) 2013 - 2020 Tobias Zulauf All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or later
 */
 
defined('_JEXEC') or die;

use Joomla\CMS\Installer\InstallerScript;

/**
 * Installation class to perform additional changes during install/uninstall/update
 *
 * @since  3-2
 */
class plgSystemCustomCssInstallerScript extends InstallerScript
{
	/**
	 * Extension script constructor.
	 *
	 * @since  3-4
	 */
	public function __construct()
	{
		// Define the minumum versions to be supported.
		$this->minimumJoomla = '3.9';
		$this->minimumPhp    = '7.0';
	}
}