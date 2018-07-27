<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.loadmodule
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 * 
 * @CAversion		Id: loadmodule.php 571 2016-01-04 15:03:02Z BrianWade $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.loadmodule
 * @CAtemplate		joomla_3_4_standard (Release 1.0.1)
 * @CAcopyright		Copyright (c)2013 - 2016  Simply Open Source Ltd. (trading as Component Architect). All Rights Reserved
 * @Joomlacopyright Copyright (c)2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @CAlicense		GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html
 * 
 * This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
 */

defined('_JEXEC') or die;

/**
 * Plug-in to enable loading modules into description fields
 * This uses the {loadmodule} syntax
 *
 */
class PlgRemcaLoadmodule extends JPlugin
{
	protected static $modules = array();

	protected static $mods = array();


	/**
	 * Plugin that adds a loadmodule into the text and truncates text at that point
	 *
	 * @param   string   $context  The context of the content being passed to the plugin.
	 * @param   object   &$row     The inmueble object.  Note $house->text is also available
	 * @param   mixed    &$params  The inmueble  params
	 * @param   integer  $page     The 'page' number
	 *
	 * @return  mixed  Always returns void or true
	 */
	public function onHousePrepare($context, &$row, &$params, $page = 0)
	{
		// Don't run this plugin when the inmuebles are being indexed
		if ($context == 'com_finder.indexer')
		{
			return true;
		}
		// Simple performance check to determine whether bot should process further
		if (strpos($row->description, 'loadposition') === false && strpos($row->description, 'loadmodule') === false)
		{
			return true;
		}

		// Expression to search for (positions)
		$regex		= '/{loadposition\s(.*?)}/i';
		$style		= $this->params->def('house_style', 'none');

		// Expression to search for(modules)
		$regexmod	= '/{loadmodule\s(.*?)}/i';
		$stylemod	= $this->params->def('house_style', 'none');

		// Find all instances of plugin and put in $matches for loadposition
		// $matches[0] is full pattern match, $matches[1] is the position
		preg_match_all($regex, $row->description, $matches, PREG_SET_ORDER);

		// No matches, skip this
		if ($matches)
		{
			foreach ($matches as $match)
			{
				$matcheslist = explode(',', $match[1]);

				// We may not have a module style so fall back to the plugin default.
				if (!array_key_exists(1, $matcheslist))
				{
					$matcheslist[1] = $style;
				}

				$position = trim($matcheslist[0]);
				$style    = trim($matcheslist[1]);

				$output = $this->_load($position, $style);

				// We should replace only first occurrence in order to allow positions with the same name to regenerate their content:
				$row->description = preg_replace("|$match[0]|", addcslashes($output, '\\$'), $row->description, 1);
				$style = $this->params->def('house_style', 'none');
			}
		}

		// Find all instances of plugin and put in $matchesmod for loadmodule
		preg_match_all($regexmod, $row->description, $matchesmod, PREG_SET_ORDER);
		

		// If no matches, skip this
		if ($matchesmod)
		{
			foreach ($matchesmod as $matchmod)
			{
				$matchesmodlist = explode(',', $matchmod[1]);

				// We may not have a specific module so set to null
				if (!array_key_exists(1, $matchesmodlist))
				{
					$matchesmodlist[1] = null;
				}

				// We may not have a module style so fall back to the plugin default.
				if (!array_key_exists(2, $matchesmodlist))
				{
					$matchesmodlist[2] = $stylemod;
				}

				$module = trim($matchesmodlist[0]);
				$name   = htmlspecialchars_decode(trim($matchesmodlist[1]));
				$stylemod  = trim($matchesmodlist[2]);

				// $match[0] is full pattern match, $match[1] is the module,$match[2] is the title
				$output = $this->_loadmod($module, $name, $stylemod);

				// We should replace only first occurrence in order to allow positions with the same name to regenerate their content:
				$row->description = preg_replace("|$matchmod[0]|", addcslashes($output, '\\$'), $row->description, 1);
				$stylemod = $this->params->def('house_style', 'none');
			}
		}
	}
	/**
	 * Loads and renders the module
	 *
	 * @param   string  $position  The position assigned to the module
	 * @param   string  $style     The style assigned to the module
	 *
	 * @return  mixed
	 */
	protected function _load($position, $style = 'none')
	{
		self::$modules[$position] = '';
		$document	= JFactory::getDocument();
		$renderer	= $document->loadRenderer('module');
		$modules	= JModuleHelper::getModules($position);
		$params		= array('style' => $style);
		ob_start();

		foreach ($modules as $module)
		{
			echo $renderer->render($module, $params);
		}

		self::$modules[$position] = ob_get_clean();

		return self::$modules[$position];
	}

	/**
	 * This is always going to get the first instance of the module type unless
	 * there is a title.
	 *
	 * @param   string  $module  The module title
	 * @param   string  $title   The title of the module
	 * @param   string  $style   The style of the module
	 *
	 * @return  mixed
	 */
	protected function _loadmod($module, $title, $style = 'none')
	{
		self::$mods[$module] = '';
		$document	= JFactory::getDocument();
		$renderer	= $document->loadRenderer('module');
		$mod		= JModuleHelper::getModule($module, $title);

		// If the module without the mod_ isn't found, try it with mod_.
		// This allows people to enter it either way in the content
		if (!isset($mod))
		{
			$name = 'mod_' . $module;
			$mod  = JModuleHelper::getModule($name, $title);
		}

		$params = array('style' => $style);
		ob_start();

		echo $renderer->render($mod, $params);

		self::$mods[$module] = ob_get_clean();

		return self::$mods[$module];
	}
}
