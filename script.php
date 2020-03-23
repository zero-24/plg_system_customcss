<?php
/**
 * Joomla Custom CSS Plugin
 *
 * @copyright  Copyright (C) 2013 - 2020 Tobias Zulauf All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
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

	/**
	 * Method to update the component
	 *
	 * @since  3-2
	 */
	public function update($parent) 
	{
		$this->enabelePlugin();
	}

	/**
	 * method to run after an install/downloads/uninstall method
	 *
	 * @since  3-2
	 */
	public function postflight($type, $parent)
	{
		$this->enabelePlugin();
	}

	/**
	 * Method to enable the Plugin
	 *
	 * @since  3-2
	 */
	private function enabelePlugin()
	{
		// Enable the JCCSS plugin
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->update($db->quoteName('#__extensions'))
			->set($db->quoteName('enabled') . ' = 1')
			->where($db->quoteName('type') . ' = ' . $db->quote('plugin'))
			->where($db->quoteName('element') . ' = ' . $db->quote('customcss'));
		$db->setQuery($query);
		$db->execute();
	}
}
?>