<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.mod_remca
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 * 
 * @CAversion		Id: helper.php 571 2016-01-04 15:03:02Z BrianWade $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.mod_architectcomp
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

require_once JPATH_SITE.'/components/com_remca/helpers/route.php';

JModelLegacy::addIncludePath(JPATH_SITE.'/components/com_remca/models', 'RemcaModelHouses');

abstract class ModHousesHelper
{
	/**
	 * Helper for mod_remca
	 *
	 * @param json/registry	$params	Module parameters
	 * 
	 * @return array		$items	Items to display
	 */
	public static function getList(&$params)
	{
		// Get the dbo
		$db = JFactory::getDbo();

		// Get an instance of the generic houses model
		$model = JModelLegacy::getInstance('Houses', 'RemcaModel', array('ignore_request' => true));

		// Set application parameters in model
		$app = JFactory::getApplication();
		$app_params = $app->getParams();
		$model->setState('params', $app_params);

		// Set the filters based on the module params
		$model->setState('list.start', 0);
		$model->setState('list.limit', (int) $params->get('count', 5));
		$model->setState('filter.published', 1);
		// Category filter
		$model->setState('filter.category_id', $params->get('catid', array()));

		// Filter by language
		$model->setState('filter.language',JLanguageMultilang::isEnabled());


		//  Filter by featured
		$model->setState('filter.featured', $params->get('show_featured'));
		// Filter by language
		$model->setState('filter.language', JLanguageMultilang::isEnabled());
		
		$order_map = array(
			'm_dsc' => 'a.modified',
			'h_dsc' => 'a.hits',
			'n_asc' => 'a.name',
			'n_dsc' => 'a.name',
			'o_asc' => 'a.ordering',
		);
		$ordering = JArrayHelper::getValue($order_map, $params->get('ordering'), 'a.name');

		if (JString::substr($params->get('ordering'),-3,3) == 'dsc')
		{
			$dir = 'DESC';
		}
		else
		{
			$dir = 'ASC';
		}

		$model->setState('list.ordering', $ordering);
		$model->setState('list.direction', $dir);

		$items = $model->getItems();

		
		if ($params->get('itemid') <> '')
		{
			$item_id_str = '&Itemid='.(string) $params->get('itemid');
			$keep_item_id = false;
		}
		else
		{
			$item_id_str = '';
			$keep_item_id = true;
		}

		if ($params->get('house_layout') <> '')
		{
			$layout = str_replace('_:','',(string) $params->get('house_layout'));
			$layout_str = '&layout='.$layout;
		}
		else
		{
			$layout = '';
			$layout_str = '';
		}
				
		foreach ($items as &$item)
		{
			$item->slug = $item->id;
			
			$item->catslug = $item->catid.':'.$item->category_alias;

				if ($item_id_str == '')
				{
					// We know that user has the privilege to view the house
					$item->link = JRoute::_(RemcaHelperRoute::getHouseRoute($item->slug, $item->catid, $item->language, $layout));
				}
				else
				{
					$item->link = JRoute::_('index.php?option=com_remca&view=house'.$layout_str.$item_id_str.'&id='.$item->id);
				}					
		}

		return $items;
	}
}
