<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.admin
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
class RemcaHelper extends JHelperContent
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
		$config = JComponentHelper::getParams(JText::_('COM_REMCA_FIELD_CATEGORY_COMPONENT_DEFAULT'));
		$category_component = $config->get('category_component', JText::_('COM_REMCA_FIELD_CATEGORY_COMPONENT_DEFAULT'));	

		$active = $view_name == 'houses'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_HOUSES_SUBMENU'),
			'index.php?option=com_remca&view=houses',
			$view_name == 'houses',
			$active
		);
	
		$active = $view_name == 'photos'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_PHOTOS_SUBMENU'),
			'index.php?option=com_remca&view=photos',
			$view_name == 'photos',
			$active
		);
	
		$active = $view_name == 'mime_types'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_MIME_TYPES_SUBMENU'),
			'index.php?option=com_remca&view=mime_types',
			$view_name == 'mime_types',
			$active
		);
	
		$active = $view_name == 'mls_for_delete'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_MLS_FOR_DELETE_SUBMENU'),
			'index.php?option=com_remca&view=mls_for_delete',
			$view_name == 'mls_for_delete',
			$active
		);
	
		$active = $view_name == 'orders'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_ORDERS_SUBMENU'),
			'index.php?option=com_remca&view=orders',
			$view_name == 'orders',
			$active
		);
	
		$active = $view_name == 'orders_details'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_ORDERS_DETAILS_SUBMENU'),
			'index.php?option=com_remca&view=orders_details',
			$view_name == 'orders_details',
			$active
		);
	
		$active = $view_name == 'main_categories'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_MAIN_CATEGORIES_SUBMENU'),
			'index.php?option=com_remca&view=main_categories',
			$view_name == 'main_categories',
			$active
		);
	
		$active = $view_name == 'rent'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_RENT_SUBMENU'),
			'index.php?option=com_remca&view=rent',
			$view_name == 'rent',
			$active
		);
	
		$active = $view_name == 'rent_request'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_RENT_REQUEST_SUBMENU'),
			'index.php?option=com_remca&view=rent_request',
			$view_name == 'rent_request',
			$active
		);
	
		$active = $view_name == 'rent_sal'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_RENT_SAL_SUBMENU'),
			'index.php?option=com_remca&view=rent_sal',
			$view_name == 'rent_sal',
			$active
		);
	
		$active = $view_name == 'reviews'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_REVIEWS_SUBMENU'),
			'index.php?option=com_remca&view=reviews',
			$view_name == 'reviews',
			$active
		);
	
		$active = $view_name == 'track_source'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_TRACK_SOURCE_SUBMENU'),
			'index.php?option=com_remca&view=track_source',
			$view_name == 'track_source',
			$active
		);
	
		$active = $view_name == 'users_wishlist'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_USERS_WISHLIST_SUBMENU'),
			'index.php?option=com_remca&view=users_wishlist',
			$view_name == 'users_wishlist',
			$active
		);
	
		$active = $view_name == 'video_source'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_VIDEO_SOURCE_SUBMENU'),
			'index.php?option=com_remca&view=video_source',
			$view_name == 'video_source',
			$active
		);
	
		$active = $view_name == 'buying_requests'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_BUYING_REQUESTS_SUBMENU'),
			'index.php?option=com_remca&view=buying_requests',
			$view_name == 'buying_requests',
			$active
		);
	
		$active = $view_name == 'categories'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_CATEGORIES_SUBMENU'),
			'index.php?option=com_remca&view=categories',
			$view_name == 'categories',
			$active
		);
	
		$active = $view_name == 'const'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_CONST_SUBMENU'),
			'index.php?option=com_remca&view=const',
			$view_name == 'const',
			$active
		);
	
		$active = $view_name == 'const_language'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_CONST_LANGUAGE_SUBMENU'),
			'index.php?option=com_remca&view=const_language',
			$view_name == 'const_language',
			$active
		);
	
		$active = $view_name == 'feature'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_FEATURE_SUBMENU'),
			'index.php?option=com_remca&view=feature',
			$view_name == 'feature',
			$active
		);
	
		$active = $view_name == 'feature_houses'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_FEATURE_HOUSES_SUBMENU'),
			'index.php?option=com_remca&view=feature_houses',
			$view_name == 'feature_houses',
			$active
		);
	
		$active = $view_name == 'languages'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_LANGUAGES_SUBMENU'),
			'index.php?option=com_remca&view=languages',
			$view_name == 'languages',
			$active
		);
	
		$active = $view_name == 'lmunicipalities'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_LMUNICIPALITIES_SUBMENU'),
			'index.php?option=com_remca&view=lmunicipalities',
			$view_name == 'lmunicipalities',
			$active
		);
	
		$active = $view_name == 'lstates'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_LSTATES_SUBMENU'),
			'index.php?option=com_remca&view=lstates',
			$view_name == 'lstates',
			$active
		);
	
		$active = $view_name == 'countries'? true : false;
		JHtmlSidebar::addEntry(
			JText::_('COM_REMCA_COUNTRIES_SUBMENU'),
			'index.php?option=com_remca&view=countries',
			$view_name == 'countries',
			$active
		);
	
		if ($category_component != JText::_('COM_REMCA_FIELD_CATEGORY_COMPONENT_NO_CATEGORIES'))
		{	
			$active = $view_name == 'categories'? true : false;
			
			JHtmlSidebar::addEntry(
				JText::_('COM_REMCA_CATEGORIES_SUBMENU'),
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