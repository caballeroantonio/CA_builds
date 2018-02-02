<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA
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
	
		$active = $view_name == 'lsc01s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSC01S_SUBMENU'),
			'index.php?option=com_jtca&view=lsc01s',
			$view_name == 'lsc01s',
			$active
		);
	
		$active = $view_name == 'ljf01s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF01S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf01s',
			$view_name == 'ljf01s',
			$active
		);
	
		$active = $view_name == 'ljp01s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJP01S_SUBMENU'),
			'index.php?option=com_jtca&view=ljp01s',
			$view_name == 'ljp01s',
			$active
		);
	
		$active = $view_name == 'ljccm01s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJCCM01S_SUBMENU'),
			'index.php?option=com_jtca&view=ljccm01s',
			$view_name == 'ljccm01s',
			$active
		);
	
		$active = $view_name == 'ljoc01s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJOC01S_SUBMENU'),
			'index.php?option=com_jtca&view=ljoc01s',
			$view_name == 'ljoc01s',
			$active
		);
	
		$active = $view_name == 'ljpdng01s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPDNG01S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpdng01s',
			$view_name == 'ljpdng01s',
			$active
		);
	
		$active = $view_name == 'ljpes01s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPES01S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpes01s',
			$view_name == 'ljpes01s',
			$active
		);
	
		$active = $view_name == 'ljjadng01s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADNG01S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadng01s',
			$view_name == 'ljjadng01s',
			$active
		);
	
		$active = $view_name == 'ljjadg01s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADG01S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadg01s',
			$view_name == 'ljjadg01s',
			$active
		);
	
		$active = $view_name == 'lcp01s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP01S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp01s',
			$view_name == 'lcp01s',
			$active
		);
	
		$active = $view_name == 'lcp02s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP02S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp02s',
			$view_name == 'lcp02s',
			$active
		);
	
		$active = $view_name == 'lcp03s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP03S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp03s',
			$view_name == 'lcp03s',
			$active
		);
	
		$active = $view_name == 'lcp04s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP04S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp04s',
			$view_name == 'lcp04s',
			$active
		);
	
		$active = $view_name == 'lcp05s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP05S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp05s',
			$view_name == 'lcp05s',
			$active
		);
	
		$active = $view_name == 'lcp06s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP06S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp06s',
			$view_name == 'lcp06s',
			$active
		);
	
		$active = $view_name == 'lcp07s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP07S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp07s',
			$view_name == 'lcp07s',
			$active
		);
	
		$active = $view_name == 'lcp09s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP09S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp09s',
			$view_name == 'lcp09s',
			$active
		);
	
		$active = $view_name == 'lcp10s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP10S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp10s',
			$view_name == 'lcp10s',
			$active
		);
	
		$active = $view_name == 'lcp18s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP18S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp18s',
			$view_name == 'lcp18s',
			$active
		);
	
		$active = $view_name == 'lcp19s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP19S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp19s',
			$view_name == 'lcp19s',
			$active
		);
	
		$active = $view_name == 'lcp20s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP20S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp20s',
			$view_name == 'lcp20s',
			$active
		);
	
		$active = $view_name == 'lcp21s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP21S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp21s',
			$view_name == 'lcp21s',
			$active
		);
	
		$active = $view_name == 'lcp22s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP22S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp22s',
			$view_name == 'lcp22s',
			$active
		);
	
		$active = $view_name == 'lcp23s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP23S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp23s',
			$view_name == 'lcp23s',
			$active
		);
	
		$active = $view_name == 'lcp24s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP24S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp24s',
			$view_name == 'lcp24s',
			$active
		);
	
		$active = $view_name == 'lcp25s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP25S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp25s',
			$view_name == 'lcp25s',
			$active
		);
	
		$active = $view_name == 'lcp26s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP26S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp26s',
			$view_name == 'lcp26s',
			$active
		);
	
		$active = $view_name == 'lcp27s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP27S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp27s',
			$view_name == 'lcp27s',
			$active
		);
	
		$active = $view_name == 'lcp28s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP28S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp28s',
			$view_name == 'lcp28s',
			$active
		);
	
		$active = $view_name == 'lcp29s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP29S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp29s',
			$view_name == 'lcp29s',
			$active
		);
	
		$active = $view_name == 'lcp11s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP11S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp11s',
			$view_name == 'lcp11s',
			$active
		);
	
		$active = $view_name == 'lcp12s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP12S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp12s',
			$view_name == 'lcp12s',
			$active
		);
	
		$active = $view_name == 'lcp13s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP13S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp13s',
			$view_name == 'lcp13s',
			$active
		);
	
		$active = $view_name == 'lcp14s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP14S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp14s',
			$view_name == 'lcp14s',
			$active
		);
	
		$active = $view_name == 'lcp15s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP15S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp15s',
			$view_name == 'lcp15s',
			$active
		);
	
		$active = $view_name == 'lcp16s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP16S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp16s',
			$view_name == 'lcp16s',
			$active
		);
	
		$active = $view_name == 'lcp30s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP30S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp30s',
			$view_name == 'lcp30s',
			$active
		);
	
		$active = $view_name == 'lcp31s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP31S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp31s',
			$view_name == 'lcp31s',
			$active
		);
	
		$active = $view_name == 'lcp32s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP32S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp32s',
			$view_name == 'lcp32s',
			$active
		);
	
		$active = $view_name == 'lcp33s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP33S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp33s',
			$view_name == 'lcp33s',
			$active
		);
	
		$active = $view_name == 'lcp34s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP34S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp34s',
			$view_name == 'lcp34s',
			$active
		);
	
		$active = $view_name == 'lcp35s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP35S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp35s',
			$view_name == 'lcp35s',
			$active
		);
	
		$active = $view_name == 'lcp36s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP36S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp36s',
			$view_name == 'lcp36s',
			$active
		);
	
		$active = $view_name == 'lcp39s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP39S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp39s',
			$view_name == 'lcp39s',
			$active
		);
	
		$active = $view_name == 'lcp40s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP40S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp40s',
			$view_name == 'lcp40s',
			$active
		);
	
		$active = $view_name == 'lcp41s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LCP41S_SUBMENU'),
			'index.php?option=com_jtca&view=lcp41s',
			$view_name == 'lcp41s',
			$active
		);
	
		$active = $view_name == 'lspe01s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPE01S_SUBMENU'),
			'index.php?option=com_jtca&view=lspe01s',
			$view_name == 'lspe01s',
			$active
		);
	
		$active = $view_name == 'lspe02s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPE02S_SUBMENU'),
			'index.php?option=com_jtca&view=lspe02s',
			$view_name == 'lspe02s',
			$active
		);
	
		$active = $view_name == 'lspe03s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPE03S_SUBMENU'),
			'index.php?option=com_jtca&view=lspe03s',
			$view_name == 'lspe03s',
			$active
		);
	
		$active = $view_name == 'lspe04s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPE04S_SUBMENU'),
			'index.php?option=com_jtca&view=lspe04s',
			$view_name == 'lspe04s',
			$active
		);
	
		$active = $view_name == 'lspe05s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPE05S_SUBMENU'),
			'index.php?option=com_jtca&view=lspe05s',
			$view_name == 'lspe05s',
			$active
		);
	
		$active = $view_name == 'lspe06s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPE06S_SUBMENU'),
			'index.php?option=com_jtca&view=lspe06s',
			$view_name == 'lspe06s',
			$active
		);
	
		$active = $view_name == 'lspe07s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPE07S_SUBMENU'),
			'index.php?option=com_jtca&view=lspe07s',
			$view_name == 'lspe07s',
			$active
		);
	
		$active = $view_name == 'lspe08s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPE08S_SUBMENU'),
			'index.php?option=com_jtca&view=lspe08s',
			$view_name == 'lspe08s',
			$active
		);
	
		$active = $view_name == 'lsps01s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPS01S_SUBMENU'),
			'index.php?option=com_jtca&view=lsps01s',
			$view_name == 'lsps01s',
			$active
		);
	
		$active = $view_name == 'lsc02s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSC02S_SUBMENU'),
			'index.php?option=com_jtca&view=lsc02s',
			$view_name == 'lsc02s',
			$active
		);
	
		$active = $view_name == 'ljc02s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC02S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc02s',
			$view_name == 'ljc02s',
			$active
		);
	
		$active = $view_name == 'ljp02s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJP02S_SUBMENU'),
			'index.php?option=com_jtca&view=ljp02s',
			$view_name == 'ljp02s',
			$active
		);
	
		$active = $view_name == 'ljccm02s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJCCM02S_SUBMENU'),
			'index.php?option=com_jtca&view=ljccm02s',
			$view_name == 'ljccm02s',
			$active
		);
	
		$active = $view_name == 'ljpdng02s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPDNG02S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpdng02s',
			$view_name == 'ljpdng02s',
			$active
		);
	
		$active = $view_name == 'ljpes02s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPES02S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpes02s',
			$view_name == 'ljpes02s',
			$active
		);
	
		$active = $view_name == 'ljjadng02s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADNG02S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadng02s',
			$view_name == 'ljjadng02s',
			$active
		);
	
		$active = $view_name == 'ljjadg02s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADG02S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadg02s',
			$view_name == 'ljjadg02s',
			$active
		);
	
		$active = $view_name == 'lsps02s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPS02S_SUBMENU'),
			'index.php?option=com_jtca&view=lsps02s',
			$view_name == 'lsps02s',
			$active
		);
	
		$active = $view_name == 'lejemplos'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LEJEMPLOS_SUBMENU'),
			'index.php?option=com_jtca&view=lejemplos',
			$view_name == 'lejemplos',
			$active
		);
	
		$active = $view_name == 'lsc03s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSC03S_SUBMENU'),
			'index.php?option=com_jtca&view=lsc03s',
			$view_name == 'lsc03s',
			$active
		);
	
		$active = $view_name == 'ljc03s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC03S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc03s',
			$view_name == 'ljc03s',
			$active
		);
	
		$active = $view_name == 'ljccm03s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJCCM03S_SUBMENU'),
			'index.php?option=com_jtca&view=ljccm03s',
			$view_name == 'ljccm03s',
			$active
		);
	
		$active = $view_name == 'ljoc03s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJOC03S_SUBMENU'),
			'index.php?option=com_jtca&view=ljoc03s',
			$view_name == 'ljoc03s',
			$active
		);
	
		$active = $view_name == 'ljpdng03s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPDNG03S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpdng03s',
			$view_name == 'ljpdng03s',
			$active
		);
	
		$active = $view_name == 'ljpes03s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPES03S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpes03s',
			$view_name == 'ljpes03s',
			$active
		);
	
		$active = $view_name == 'ljjadng03s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADNG03S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadng03s',
			$view_name == 'ljjadng03s',
			$active
		);
	
		$active = $view_name == 'ljjadg03s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADG03S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadg03s',
			$view_name == 'ljjadg03s',
			$active
		);
	
		$active = $view_name == 'lsps03s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPS03S_SUBMENU'),
			'index.php?option=com_jtca&view=lsps03s',
			$view_name == 'lsps03s',
			$active
		);
	
		$active = $view_name == 'lsc04s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSC04S_SUBMENU'),
			'index.php?option=com_jtca&view=lsc04s',
			$view_name == 'lsc04s',
			$active
		);
	
		$active = $view_name == 'ljc04s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC04S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc04s',
			$view_name == 'ljc04s',
			$active
		);
	
		$active = $view_name == 'ljf04s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF04S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf04s',
			$view_name == 'ljf04s',
			$active
		);
	
		$active = $view_name == 'ljp04s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJP04S_SUBMENU'),
			'index.php?option=com_jtca&view=ljp04s',
			$view_name == 'ljp04s',
			$active
		);
	
		$active = $view_name == 'ljoc04s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJOC04S_SUBMENU'),
			'index.php?option=com_jtca&view=ljoc04s',
			$view_name == 'ljoc04s',
			$active
		);
	
		$active = $view_name == 'ljpdng04s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPDNG04S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpdng04s',
			$view_name == 'ljpdng04s',
			$active
		);
	
		$active = $view_name == 'ljpes04s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPES04S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpes04s',
			$view_name == 'ljpes04s',
			$active
		);
	
		$active = $view_name == 'ljjadng04s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADNG04S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadng04s',
			$view_name == 'ljjadng04s',
			$active
		);
	
		$active = $view_name == 'ljjadg04s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADG04S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadg04s',
			$view_name == 'ljjadg04s',
			$active
		);
	
		$active = $view_name == 'lsps04s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPS04S_SUBMENU'),
			'index.php?option=com_jtca&view=lsps04s',
			$view_name == 'lsps04s',
			$active
		);
	
		$active = $view_name == 'lsc05s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSC05S_SUBMENU'),
			'index.php?option=com_jtca&view=lsc05s',
			$view_name == 'lsc05s',
			$active
		);
	
		$active = $view_name == 'ljc05s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC05S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc05s',
			$view_name == 'ljc05s',
			$active
		);
	
		$active = $view_name == 'ljf05s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF05S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf05s',
			$view_name == 'ljf05s',
			$active
		);
	
		$active = $view_name == 'ljp05s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJP05S_SUBMENU'),
			'index.php?option=com_jtca&view=ljp05s',
			$view_name == 'ljp05s',
			$active
		);
	
		$active = $view_name == 'ljccm05s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJCCM05S_SUBMENU'),
			'index.php?option=com_jtca&view=ljccm05s',
			$view_name == 'ljccm05s',
			$active
		);
	
		$active = $view_name == 'ljoc05s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJOC05S_SUBMENU'),
			'index.php?option=com_jtca&view=ljoc05s',
			$view_name == 'ljoc05s',
			$active
		);
	
		$active = $view_name == 'ljpdng05s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPDNG05S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpdng05s',
			$view_name == 'ljpdng05s',
			$active
		);
	
		$active = $view_name == 'ljpes05s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPES05S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpes05s',
			$view_name == 'ljpes05s',
			$active
		);
	
		$active = $view_name == 'ljjadng05s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADNG05S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadng05s',
			$view_name == 'ljjadng05s',
			$active
		);
	
		$active = $view_name == 'ljjadg05s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADG05S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadg05s',
			$view_name == 'ljjadg05s',
			$active
		);
	
		$active = $view_name == 'lsps05s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPS05S_SUBMENU'),
			'index.php?option=com_jtca&view=lsps05s',
			$view_name == 'lsps05s',
			$active
		);
	
		$active = $view_name == 'lsc06s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSC06S_SUBMENU'),
			'index.php?option=com_jtca&view=lsc06s',
			$view_name == 'lsc06s',
			$active
		);
	
		$active = $view_name == 'ljc06s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC06S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc06s',
			$view_name == 'ljc06s',
			$active
		);
	
		$active = $view_name == 'ljf06s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF06S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf06s',
			$view_name == 'ljf06s',
			$active
		);
	
		$active = $view_name == 'ljp06s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJP06S_SUBMENU'),
			'index.php?option=com_jtca&view=ljp06s',
			$view_name == 'ljp06s',
			$active
		);
	
		$active = $view_name == 'ljccm06s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJCCM06S_SUBMENU'),
			'index.php?option=com_jtca&view=ljccm06s',
			$view_name == 'ljccm06s',
			$active
		);
	
		$active = $view_name == 'ljoc06s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJOC06S_SUBMENU'),
			'index.php?option=com_jtca&view=ljoc06s',
			$view_name == 'ljoc06s',
			$active
		);
	
		$active = $view_name == 'ljpdng06s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPDNG06S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpdng06s',
			$view_name == 'ljpdng06s',
			$active
		);
	
		$active = $view_name == 'ljpes06s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPES06S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpes06s',
			$view_name == 'ljpes06s',
			$active
		);
	
		$active = $view_name == 'ljjadng06s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADNG06S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadng06s',
			$view_name == 'ljjadng06s',
			$active
		);
	
		$active = $view_name == 'ljjadg06s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADG06S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadg06s',
			$view_name == 'ljjadg06s',
			$active
		);
	
		$active = $view_name == 'lsps06s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPS06S_SUBMENU'),
			'index.php?option=com_jtca&view=lsps06s',
			$view_name == 'lsps06s',
			$active
		);
	
		$active = $view_name == 'lsc07s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSC07S_SUBMENU'),
			'index.php?option=com_jtca&view=lsc07s',
			$view_name == 'lsc07s',
			$active
		);
	
		$active = $view_name == 'ljc07s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC07S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc07s',
			$view_name == 'ljc07s',
			$active
		);
	
		$active = $view_name == 'ljf07s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF07S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf07s',
			$view_name == 'ljf07s',
			$active
		);
	
		$active = $view_name == 'ljccm07s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJCCM07S_SUBMENU'),
			'index.php?option=com_jtca&view=ljccm07s',
			$view_name == 'ljccm07s',
			$active
		);
	
		$active = $view_name == 'ljoc07s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJOC07S_SUBMENU'),
			'index.php?option=com_jtca&view=ljoc07s',
			$view_name == 'ljoc07s',
			$active
		);
	
		$active = $view_name == 'ljpdng07s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPDNG07S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpdng07s',
			$view_name == 'ljpdng07s',
			$active
		);
	
		$active = $view_name == 'ljpes07s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPES07S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpes07s',
			$view_name == 'ljpes07s',
			$active
		);
	
		$active = $view_name == 'ljjadng07s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADNG07S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadng07s',
			$view_name == 'ljjadng07s',
			$active
		);
	
		$active = $view_name == 'lsps07s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPS07S_SUBMENU'),
			'index.php?option=com_jtca&view=lsps07s',
			$view_name == 'lsps07s',
			$active
		);
	
		$active = $view_name == 'lsc08s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSC08S_SUBMENU'),
			'index.php?option=com_jtca&view=lsc08s',
			$view_name == 'lsc08s',
			$active
		);
	
		$active = $view_name == 'ljc08s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC08S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc08s',
			$view_name == 'ljc08s',
			$active
		);
	
		$active = $view_name == 'ljf08s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF08S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf08s',
			$view_name == 'ljf08s',
			$active
		);
	
		$active = $view_name == 'ljp08s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJP08S_SUBMENU'),
			'index.php?option=com_jtca&view=ljp08s',
			$view_name == 'ljp08s',
			$active
		);
	
		$active = $view_name == 'ljccm08s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJCCM08S_SUBMENU'),
			'index.php?option=com_jtca&view=ljccm08s',
			$view_name == 'ljccm08s',
			$active
		);
	
		$active = $view_name == 'ljoc08s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJOC08S_SUBMENU'),
			'index.php?option=com_jtca&view=ljoc08s',
			$view_name == 'ljoc08s',
			$active
		);
	
		$active = $view_name == 'ljpdng08s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPDNG08S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpdng08s',
			$view_name == 'ljpdng08s',
			$active
		);
	
		$active = $view_name == 'ljpes08s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPES08S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpes08s',
			$view_name == 'ljpes08s',
			$active
		);
	
		$active = $view_name == 'ljjadng08s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADNG08S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadng08s',
			$view_name == 'ljjadng08s',
			$active
		);
	
		$active = $view_name == 'lsc14s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSC14S_SUBMENU'),
			'index.php?option=com_jtca&view=lsc14s',
			$view_name == 'lsc14s',
			$active
		);
	
		$active = $view_name == 'lsps08s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPS08S_SUBMENU'),
			'index.php?option=com_jtca&view=lsps08s',
			$view_name == 'lsps08s',
			$active
		);
	
		$active = $view_name == 'lsc09s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSC09S_SUBMENU'),
			'index.php?option=com_jtca&view=lsc09s',
			$view_name == 'lsc09s',
			$active
		);
	
		$active = $view_name == 'ljc09s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC09S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc09s',
			$view_name == 'ljc09s',
			$active
		);
	
		$active = $view_name == 'ljf09s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF09S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf09s',
			$view_name == 'ljf09s',
			$active
		);
	
		$active = $view_name == 'ljp09s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJP09S_SUBMENU'),
			'index.php?option=com_jtca&view=ljp09s',
			$view_name == 'ljp09s',
			$active
		);
	
		$active = $view_name == 'ljccm09s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJCCM09S_SUBMENU'),
			'index.php?option=com_jtca&view=ljccm09s',
			$view_name == 'ljccm09s',
			$active
		);
	
		$active = $view_name == 'ljoc09s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJOC09S_SUBMENU'),
			'index.php?option=com_jtca&view=ljoc09s',
			$view_name == 'ljoc09s',
			$active
		);
	
		$active = $view_name == 'ljpdng09s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPDNG09S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpdng09s',
			$view_name == 'ljpdng09s',
			$active
		);
	
		$active = $view_name == 'ljpes09s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPES09S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpes09s',
			$view_name == 'ljpes09s',
			$active
		);
	
		$active = $view_name == 'ljjadng09s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADNG09S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadng09s',
			$view_name == 'ljjadng09s',
			$active
		);
	
		$active = $view_name == 'ljjadg09s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADG09S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadg09s',
			$view_name == 'ljjadg09s',
			$active
		);
	
		$active = $view_name == 'lsps09s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPS09S_SUBMENU'),
			'index.php?option=com_jtca&view=lsps09s',
			$view_name == 'lsps09s',
			$active
		);
	
		$active = $view_name == 'lsc10s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSC10S_SUBMENU'),
			'index.php?option=com_jtca&view=lsc10s',
			$view_name == 'lsc10s',
			$active
		);
	
		$active = $view_name == 'ljc10s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC10S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc10s',
			$view_name == 'ljc10s',
			$active
		);
	
		$active = $view_name == 'ljf10s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF10S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf10s',
			$view_name == 'ljf10s',
			$active
		);
	
		$active = $view_name == 'ljp10s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJP10S_SUBMENU'),
			'index.php?option=com_jtca&view=ljp10s',
			$view_name == 'ljp10s',
			$active
		);
	
		$active = $view_name == 'ljccm10s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJCCM10S_SUBMENU'),
			'index.php?option=com_jtca&view=ljccm10s',
			$view_name == 'ljccm10s',
			$active
		);
	
		$active = $view_name == 'ljoc10s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJOC10S_SUBMENU'),
			'index.php?option=com_jtca&view=ljoc10s',
			$view_name == 'ljoc10s',
			$active
		);
	
		$active = $view_name == 'ljpdng10s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPDNG10S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpdng10s',
			$view_name == 'ljpdng10s',
			$active
		);
	
		$active = $view_name == 'ljpes10s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPES10S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpes10s',
			$view_name == 'ljpes10s',
			$active
		);
	
		$active = $view_name == 'ljjadng10s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADNG10S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadng10s',
			$view_name == 'ljjadng10s',
			$active
		);
	
		$active = $view_name == 'ljjadg10s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADG10S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadg10s',
			$view_name == 'ljjadg10s',
			$active
		);
	
		$active = $view_name == 'lsps10s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPS10S_SUBMENU'),
			'index.php?option=com_jtca&view=lsps10s',
			$view_name == 'lsps10s',
			$active
		);
	
		$active = $view_name == 'lsc11s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSC11S_SUBMENU'),
			'index.php?option=com_jtca&view=lsc11s',
			$view_name == 'lsc11s',
			$active
		);
	
		$active = $view_name == 'ljf11s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF11S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf11s',
			$view_name == 'ljf11s',
			$active
		);
	
		$active = $view_name == 'ljp11s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJP11S_SUBMENU'),
			'index.php?option=com_jtca&view=ljp11s',
			$view_name == 'ljp11s',
			$active
		);
	
		$active = $view_name == 'ljccm11s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJCCM11S_SUBMENU'),
			'index.php?option=com_jtca&view=ljccm11s',
			$view_name == 'ljccm11s',
			$active
		);
	
		$active = $view_name == 'ljoc11s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJOC11S_SUBMENU'),
			'index.php?option=com_jtca&view=ljoc11s',
			$view_name == 'ljoc11s',
			$active
		);
	
		$active = $view_name == 'ljpdng11s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPDNG11S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpdng11s',
			$view_name == 'ljpdng11s',
			$active
		);
	
		$active = $view_name == 'ljpes11s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPES11S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpes11s',
			$view_name == 'ljpes11s',
			$active
		);
	
		$active = $view_name == 'ljjadng11s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADNG11S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadng11s',
			$view_name == 'ljjadng11s',
			$active
		);
	
		$active = $view_name == 'ljjadg11s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADG11S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadg11s',
			$view_name == 'ljjadg11s',
			$active
		);
	
		$active = $view_name == 'lsps11s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPS11S_SUBMENU'),
			'index.php?option=com_jtca&view=lsps11s',
			$view_name == 'lsps11s',
			$active
		);
	
		$active = $view_name == 'lsc12s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSC12S_SUBMENU'),
			'index.php?option=com_jtca&view=lsc12s',
			$view_name == 'lsc12s',
			$active
		);
	
		$active = $view_name == 'ljc12s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC12S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc12s',
			$view_name == 'ljc12s',
			$active
		);
	
		$active = $view_name == 'ljf12s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF12S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf12s',
			$view_name == 'ljf12s',
			$active
		);
	
		$active = $view_name == 'ljp12s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJP12S_SUBMENU'),
			'index.php?option=com_jtca&view=ljp12s',
			$view_name == 'ljp12s',
			$active
		);
	
		$active = $view_name == 'ljccm12s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJCCM12S_SUBMENU'),
			'index.php?option=com_jtca&view=ljccm12s',
			$view_name == 'ljccm12s',
			$active
		);
	
		$active = $view_name == 'ljoc12s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJOC12S_SUBMENU'),
			'index.php?option=com_jtca&view=ljoc12s',
			$view_name == 'ljoc12s',
			$active
		);
	
		$active = $view_name == 'ljpdng12s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPDNG12S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpdng12s',
			$view_name == 'ljpdng12s',
			$active
		);
	
		$active = $view_name == 'ljpes12s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPES12S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpes12s',
			$view_name == 'ljpes12s',
			$active
		);
	
		$active = $view_name == 'ljjadng12s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADNG12S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadng12s',
			$view_name == 'ljjadng12s',
			$active
		);
	
		$active = $view_name == 'lsps12s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPS12S_SUBMENU'),
			'index.php?option=com_jtca&view=lsps12s',
			$view_name == 'lsps12s',
			$active
		);
	
		$active = $view_name == 'lsc13s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSC13S_SUBMENU'),
			'index.php?option=com_jtca&view=lsc13s',
			$view_name == 'lsc13s',
			$active
		);
	
		$active = $view_name == 'ljc13s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC13S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc13s',
			$view_name == 'ljc13s',
			$active
		);
	
		$active = $view_name == 'ljf13s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF13S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf13s',
			$view_name == 'ljf13s',
			$active
		);
	
		$active = $view_name == 'ljp13s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJP13S_SUBMENU'),
			'index.php?option=com_jtca&view=ljp13s',
			$view_name == 'ljp13s',
			$active
		);
	
		$active = $view_name == 'ljccm13s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJCCM13S_SUBMENU'),
			'index.php?option=com_jtca&view=ljccm13s',
			$view_name == 'ljccm13s',
			$active
		);
	
		$active = $view_name == 'ljoc13s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJOC13S_SUBMENU'),
			'index.php?option=com_jtca&view=ljoc13s',
			$view_name == 'ljoc13s',
			$active
		);
	
		$active = $view_name == 'ljpdng13s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPDNG13S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpdng13s',
			$view_name == 'ljpdng13s',
			$active
		);
	
		$active = $view_name == 'ljpes13s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPES13S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpes13s',
			$view_name == 'ljpes13s',
			$active
		);
	
		$active = $view_name == 'ljjadg13s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADG13S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadg13s',
			$view_name == 'ljjadg13s',
			$active
		);
	
		$active = $view_name == 'lsps13s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPS13S_SUBMENU'),
			'index.php?option=com_jtca&view=lsps13s',
			$view_name == 'lsps13s',
			$active
		);
	
		$active = $view_name == 'ljc14s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC14S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc14s',
			$view_name == 'ljc14s',
			$active
		);
	
		$active = $view_name == 'ljf14s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF14S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf14s',
			$view_name == 'ljf14s',
			$active
		);
	
		$active = $view_name == 'ljp14s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJP14S_SUBMENU'),
			'index.php?option=com_jtca&view=ljp14s',
			$view_name == 'ljp14s',
			$active
		);
	
		$active = $view_name == 'ljoc14s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJOC14S_SUBMENU'),
			'index.php?option=com_jtca&view=ljoc14s',
			$view_name == 'ljoc14s',
			$active
		);
	
		$active = $view_name == 'ljpdng14s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPDNG14S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpdng14s',
			$view_name == 'ljpdng14s',
			$active
		);
	
		$active = $view_name == 'ljpes14s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPES14S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpes14s',
			$view_name == 'ljpes14s',
			$active
		);
	
		$active = $view_name == 'ljjadg14s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADG14S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadg14s',
			$view_name == 'ljjadg14s',
			$active
		);
	
		$active = $view_name == 'lsps14s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LSPS14S_SUBMENU'),
			'index.php?option=com_jtca&view=lsps14s',
			$view_name == 'lsps14s',
			$active
		);
	
		$active = $view_name == 'ljf15s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF15S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf15s',
			$view_name == 'ljf15s',
			$active
		);
	
		$active = $view_name == 'ljccm15s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJCCM15S_SUBMENU'),
			'index.php?option=com_jtca&view=ljccm15s',
			$view_name == 'ljccm15s',
			$active
		);
	
		$active = $view_name == 'ljpdng15s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPDNG15S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpdng15s',
			$view_name == 'ljpdng15s',
			$active
		);
	
		$active = $view_name == 'ljpes15s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPES15S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpes15s',
			$view_name == 'ljpes15s',
			$active
		);
	
		$active = $view_name == 'ljjadg15s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADG15S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadg15s',
			$view_name == 'ljjadg15s',
			$active
		);
	
		$active = $view_name == 'ljc16s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC16S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc16s',
			$view_name == 'ljc16s',
			$active
		);
	
		$active = $view_name == 'ljf16s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF16S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf16s',
			$view_name == 'ljf16s',
			$active
		);
	
		$active = $view_name == 'ljp16s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJP16S_SUBMENU'),
			'index.php?option=com_jtca&view=ljp16s',
			$view_name == 'ljp16s',
			$active
		);
	
		$active = $view_name == 'ljccm16s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJCCM16S_SUBMENU'),
			'index.php?option=com_jtca&view=ljccm16s',
			$view_name == 'ljccm16s',
			$active
		);
	
		$active = $view_name == 'ljpdng16s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPDNG16S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpdng16s',
			$view_name == 'ljpdng16s',
			$active
		);
	
		$active = $view_name == 'ljpes16s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPES16S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpes16s',
			$view_name == 'ljpes16s',
			$active
		);
	
		$active = $view_name == 'ljjadg16s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADG16S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadg16s',
			$view_name == 'ljjadg16s',
			$active
		);
	
		$active = $view_name == 'ljc17s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC17S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc17s',
			$view_name == 'ljc17s',
			$active
		);
	
		$active = $view_name == 'ljf17s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF17S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf17s',
			$view_name == 'ljf17s',
			$active
		);
	
		$active = $view_name == 'ljp17s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJP17S_SUBMENU'),
			'index.php?option=com_jtca&view=ljp17s',
			$view_name == 'ljp17s',
			$active
		);
	
		$active = $view_name == 'ljccm17s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJCCM17S_SUBMENU'),
			'index.php?option=com_jtca&view=ljccm17s',
			$view_name == 'ljccm17s',
			$active
		);
	
		$active = $view_name == 'ljpdng17s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPDNG17S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpdng17s',
			$view_name == 'ljpdng17s',
			$active
		);
	
		$active = $view_name == 'ljpes17s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPES17S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpes17s',
			$view_name == 'ljpes17s',
			$active
		);
	
		$active = $view_name == 'ljjadg17s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADG17S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadg17s',
			$view_name == 'ljjadg17s',
			$active
		);
	
		$active = $view_name == 'ljc18s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC18S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc18s',
			$view_name == 'ljc18s',
			$active
		);
	
		$active = $view_name == 'ljf18s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF18S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf18s',
			$view_name == 'ljf18s',
			$active
		);
	
		$active = $view_name == 'ljp18s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJP18S_SUBMENU'),
			'index.php?option=com_jtca&view=ljp18s',
			$view_name == 'ljp18s',
			$active
		);
	
		$active = $view_name == 'ljpdng18s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPDNG18S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpdng18s',
			$view_name == 'ljpdng18s',
			$active
		);
	
		$active = $view_name == 'ljjadg18s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJJADG18S_SUBMENU'),
			'index.php?option=com_jtca&view=ljjadg18s',
			$view_name == 'ljjadg18s',
			$active
		);
	
		$active = $view_name == 'ljpes18s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJPES18S_SUBMENU'),
			'index.php?option=com_jtca&view=ljpes18s',
			$view_name == 'ljpes18s',
			$active
		);
	
		$active = $view_name == 'ljc19s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC19S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc19s',
			$view_name == 'ljc19s',
			$active
		);
	
		$active = $view_name == 'ljf19s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF19S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf19s',
			$view_name == 'ljf19s',
			$active
		);
	
		$active = $view_name == 'ljp19s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJP19S_SUBMENU'),
			'index.php?option=com_jtca&view=ljp19s',
			$view_name == 'ljp19s',
			$active
		);
	
		$active = $view_name == 'ljc20s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC20S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc20s',
			$view_name == 'ljc20s',
			$active
		);
	
		$active = $view_name == 'ljf20s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF20S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf20s',
			$view_name == 'ljf20s',
			$active
		);
	
		$active = $view_name == 'ljp20s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJP20S_SUBMENU'),
			'index.php?option=com_jtca&view=ljp20s',
			$view_name == 'ljp20s',
			$active
		);
	
		$active = $view_name == 'ljc21s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJC21S_SUBMENU'),
			'index.php?option=com_jtca&view=ljc21s',
			$view_name == 'ljc21s',
			$active
		);
	
		$active = $view_name == 'ljf21s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF21S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf21s',
			$view_name == 'ljf21s',
			$active
		);
	
		$active = $view_name == 'ljp21s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJP21S_SUBMENU'),
			'index.php?option=com_jtca&view=ljp21s',
			$view_name == 'ljp21s',
			$active
		);
	
		$active = $view_name == 'ljf22s'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_JTCA_LJF22S_SUBMENU'),
			'index.php?option=com_jtca&view=ljf22s',
			$view_name == 'ljf22s',
			$active
		);
	
	}
}