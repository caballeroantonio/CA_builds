<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA (Release 1.0.0)
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_jtca
 * @subpackage		com_jtca.admin
 * @copyright		Copyright (c) 2017 - 2020. All Rights Reserved
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 * 
 * @CAversion		Id: architectcomp.php 571 2016-01-04 15:03:02Z BrianWade $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.admin
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
 * Architectcomp_name component helper.
 *
 */
class JtCaHelper extends JHelperContent
{
	/**
	 * Constructor.
	 *
	 * @param	array An optional associative array of configuration settings.
	 * 
	 */
	public function __construct()
	{

	}	
	/**
	 * Gets a list of the actions that can be performed.
	 *
	 * @param   string   $component  The component name.
	 * @param   string   $section    The access section name.
	 * @param   integer  $id         The item ID.
	 *
	 * @return  JObject
	 */
	public static function getActions($component = '', $section = '', $id = 0)
	{
		$user	= JFactory::getUser();
		$result	= new JObject;

		if ($section AND $id)
		{
			$asset_name = $component . '.' . $section . '.' . (int) $id;
		}
		else
		{
			$section = 'component';
			$asset_name = $component;
		}
	
		if ($section == 'category')
		{
			$actions = JAccess::getActions($component, $section);
		}
		else
		{
			$actions = JAccess::getActions($component);
		}
		
		foreach ($actions as $action)
		{
			$result->set($action->name, $user->authorise($action->name, $asset_name));
		}

		return $result;
	}
	/**
	 * Configure the Linkbar.
	 *
	 * @param	string	The name of the active view.
	 *
	 * @return	void
	 * 
	 */
	public static function addSubmenu($view_name)
	{

		$active = $view_name == 'ljc01s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC01S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc01s',
			$view_name == 'ljc01s',
			$active
		);
	
		$active = $view_name == 'ljc02s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC02S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc02s',
			$view_name == 'ljc02s',
			$active
		);
	
		$active = $view_name == 'ljc03s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC03S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc03s',
			$view_name == 'ljc03s',
			$active
		);
	
		$active = $view_name == 'ljc04s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC04S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc04s',
			$view_name == 'ljc04s',
			$active
		);
	
		$active = $view_name == 'ljc05s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC05S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc05s',
			$view_name == 'ljc05s',
			$active
		);
	
		$active = $view_name == 'ljc06s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC06S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc06s',
			$view_name == 'ljc06s',
			$active
		);
	
		$active = $view_name == 'ljc07s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC07S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc07s',
			$view_name == 'ljc07s',
			$active
		);
	
		$active = $view_name == 'ljc08s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC08S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc08s',
			$view_name == 'ljc08s',
			$active
		);
	
		$active = $view_name == 'ljc09s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC09S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc09s',
			$view_name == 'ljc09s',
			$active
		);
	
		$active = $view_name == 'ljc10s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC10S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc10s',
			$view_name == 'ljc10s',
			$active
		);
	
		$active = $view_name == 'ljc12s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC12S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc12s',
			$view_name == 'ljc12s',
			$active
		);
	
		$active = $view_name == 'ljc13s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC13S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc13s',
			$view_name == 'ljc13s',
			$active
		);
	
		$active = $view_name == 'ljc14s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC14S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc14s',
			$view_name == 'ljc14s',
			$active
		);
	
		$active = $view_name == 'ljc16s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC16S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc16s',
			$view_name == 'ljc16s',
			$active
		);
	
		$active = $view_name == 'ljc17s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC17S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc17s',
			$view_name == 'ljc17s',
			$active
		);
	
		$active = $view_name == 'ljc18s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC18S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc18s',
			$view_name == 'ljc18s',
			$active
		);
	
		$active = $view_name == 'ljc19s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC19S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc19s',
			$view_name == 'ljc19s',
			$active
		);
	
		$active = $view_name == 'ljc20s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC20S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc20s',
			$view_name == 'ljc20s',
			$active
		);
	
		$active = $view_name == 'ljc21s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC21S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc21s',
			$view_name == 'ljc21s',
			$active
		);
	
	}
}