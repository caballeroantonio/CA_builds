<?php
/**
 * @version 		$Id:$
 * @name			Boletines
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_boletin
 * @subpackage		com_boletin.admin
 * @copyright		
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
class BoletinHelper extends JHelperContent
{
	protected $category_component;
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
		$config = JComponentHelper::getParams(JText::_('COM_BOLETIN_FIELD_CATEGORY_COMPONENT_DEFAULT'));
		$category_component = $config->get('category_component', JText::_('COM_BOLETIN_FIELD_CATEGORY_COMPONENT_DEFAULT'));	

		$active = $view_name == 'tsjcdmx_juzgado_acuerdos'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_SUBMENU'),
			'index.php?option=com_boletin&view=tsjcdmx_juzgado_acuerdos',
			$view_name == 'tsjcdmx_juzgado_acuerdos',
			$active
		);
	
		$active = $view_name == 'tsjcdmx_sala_acuerdos'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS_SUBMENU'),
			'index.php?option=com_boletin&view=tsjcdmx_sala_acuerdos',
			$view_name == 'tsjcdmx_sala_acuerdos',
			$active
		);
	
		$active = $view_name == 'prodecon_bacuerdos'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_BOLETIN_PRODECON_BACUERDOS_SUBMENU'),
			'index.php?option=com_boletin&view=prodecon_bacuerdos',
			$view_name == 'prodecon_bacuerdos',
			$active
		);
	
		$active = $view_name == 'profeco_proveedores'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_BOLETIN_PROFECO_PROVEEDORES_SUBMENU'),
			'index.php?option=com_boletin&view=profeco_proveedores',
			$view_name == 'profeco_proveedores',
			$active
		);
	
		$active = $view_name == 'srsps_bacuerdos'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_BOLETIN_SRSPS_BACUERDOS_SUBMENU'),
			'index.php?option=com_boletin&view=srsps_bacuerdos',
			$view_name == 'srsps_bacuerdos',
			$active
		);
	
		$active = $view_name == 'rsps_bacuerdos'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_BOLETIN_RSPS_BACUERDOS_SUBMENU'),
			'index.php?option=com_boletin&view=rsps_bacuerdos',
			$view_name == 'rsps_bacuerdos',
			$active
		);
	
		$active = $view_name == 'pjf_bacuerdos'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_BOLETIN_PJF_BACUERDOS_SUBMENU'),
			'index.php?option=com_boletin&view=pjf_bacuerdos',
			$view_name == 'pjf_bacuerdos',
			$active
		);
	
		$active = $view_name == 'tfca_bacuerdos'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_BOLETIN_TFCA_BACUERDOS_SUBMENU'),
			'index.php?option=com_boletin&view=tfca_bacuerdos',
			$view_name == 'tfca_bacuerdos',
			$active
		);
	
		$active = $view_name == 'tfjfa_bacuerdos'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_BOLETIN_TFJFA_BACUERDOS_SUBMENU'),
			'index.php?option=com_boletin&view=tfjfa_bacuerdos',
			$view_name == 'tfjfa_bacuerdos',
			$active
		);
	
		if ($category_component != JText::_('COM_BOLETIN_FIELD_CATEGORY_COMPONENT_NO_CATEGORIES'))
		{	
			$active = $view_name == 'categories'? true : false;
			
			JHtmlSidebar::addEntry(
				JText::_('COM_BOLETIN_CATEGORIES_SUBMENU'),
				'index.php?option=com_categories&extension='.$category_component,
				$view_name == 'categories',
				$active
			);
			if ($view_name=='categories')
			{
				JToolbarHelper::title(
					JText::sprintf('COM_CATEGORIES_CATEGORIES_TITLE',JText::_($category_component)),
					$category_component.'-categories');
			}	
		}		
	}
}