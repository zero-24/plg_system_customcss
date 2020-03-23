<?php
/**
 * @author      Tobias Zulauf (http://www.jah-tz.de)
 * @copyright   Copyright (C) 2013 - 2020 Tobias Zulauf (jah-tz.de). All rights reserved.
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

// No direct access.
defined('_JEXEC') or die;

/**
 * Joomla! custom.css Plugin
 *
 * @since  3-1
 */
class plgSystemcustomcss extends JPlugin
{
	/**
	 * Add, if exists, the custom.css file from the css folder from the template
	 *
	 * @return  void
	 * @since   3-1
	 */
	public function onBeforeCompileHead()
	{
		$app       = JFactory::getApplication();
		$doc       = JFactory::getDocument();
		$custom    = 'templates/' . $app->getTemplate() . '/css/custom.css';
		$customMin = 'templates/' . $app->getTemplate() . '/css/custom.min.css';

		if ((JDEBUG || !is_file($customMin)) && is_file($custom))
		{
			// Add Stylesheets
			$doc->addStyleSheet($custom);
		}
		elseif (is_file($customMin))
		{
			// Add Stylesheets
			$doc->addStyleSheet($customMin);
		}
	}
}