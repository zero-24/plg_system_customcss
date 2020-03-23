<?php
/**
 * @author      Tobias Zulauf (http://www.jah-tz.de)
 * @copyright   Copyright (C) 2013 - 2015 Tobias Zulauf (jah-tz.de). All rights reserved.
 * @license     GNU General Public License, http://www.gnu.org/copyleft/gpl.html
 * @version     3-3
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
 
defined('_JEXEC') or die;

class plgSystemCustomCssInstallerScript
{
	/**
	 * method to update the component
	 *
	 * @return void
	 */
	public function update($parent) 
	{
		$this->enabelePlugin();
	}

	/**
	 * method to run after an install/downloads/uninstall method
	 *
	 * @return void
	 */
	public function postflight($type, $parent)
	{
		$this->enabelePlugin();
	}

	/**
	 * Method to enable the Plugin
	 *
	 * @return void
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