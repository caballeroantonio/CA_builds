<?php
/**
 * @version 		$Id:$$
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

abstract class ModRemcaHelper
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
		
		$component_object_names = explode(':',$params->get('componentobject'));
		
		JModelLegacy::addIncludePath(JPATH_SITE.'/components/com_remca/models', 'RemcaModel'.$component_object_names[1]);

		// Get an instance of the model
		$model = JModelLegacy::getInstance($component_object_names[1], 'RemcaModel', array('ignore_request' => true));

		// Set application parameters in model
		$app = JFactory::getApplication();
		$app_params = $app->getParams();
		$model->setState('params', $app_params);

		// Set the filters based on the module params
		$model->setState('list.start', 0);
		$model->setState('list.limit', (int) $params->get('count', 5));
		
		$model->setState('filter.state', 1);
		// Access filter
		$access = !JComponentHelper::getParams('com_remca')->get('show_'.JString::strtolower($component_object_names[0]).'_noauth');
		$authorised = JAccess::getAuthorisedViewLevels(JFactory::getUser()->get('id'));
		$model->setState('filter.access', $access);
		// User filter
		$user_id = JFactory::getUser()->get('id');
		switch ($params->get('user_id'))
		{
			case 'by_me':
				$model->setState('filter.created_by_id', (int) $user_id);
				break;
			case 'not_me':
				$model->setState('filter.created_by_id', $user_id);
				$model->setState('filter.created_by_id.include', false);
				break;

			case '0':
				break;

			default:
				$model->setState('filter.created_by_id', (int) $params->get('user_id'));
				break;
		}

		// Filter by language
		$model->setState('filter.language',JLanguageMultilang::isEnabled());

		// Set ordering but check that the component object for ordering matches the slected component object
		if (JString::strtolower($component_object_names[1]) == JString::substr($params->get('ordering'),0,JString::strlen($params->get('ordering'))-6))
		{
			$order_map = array(
				'houses m_dsc' => 'a.modified',
				'houses h_dsc' => 'a.hits',
				'houses n_asc' => 'a.name',
				'houses n_dsc' => 'a.name',
				'houses o_asc' => 'a.ordering',
			);
			$ordering = JArrayHelper::getValue($order_map, $params->get('ordering'));
		}
		else
		{
			$ordering = 'a.id';
		}
		
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
		
		foreach ($items as &$item)
		{
			if (isset($item->alias))
			{
				$item->slug = $item->id.':'.$item->alias;
			}
			else
			{
				$item->slug = $item->id;			
			}
			if (isset($item->catid))
			{
				$item->catslug = $item->catid.':'.$item->category_alias;
			}

			if (!isset($item->access) OR $access OR in_array($item->access, $authorised))
			{
				if ($item_id_str == '')
				{			
					// We know that user has the privilege to view the item
					$route_function = 'get'.$component_object_names[0].'Route';
					
					if (isset($item->catid) AND isset($item->language))
					{
						$item->link = JRoute::_(RemcaHelperRoute::$route_function($item->slug, $item->catid, $item->language));
					}
					else
					{
						if (isset($item->catid))
						{
							$item->link = JRoute::_(RemcaHelperRoute::$route_function($item->slug, $item->catid));
						}
						else
						{
							if (isset($item->language))
							{
								$item->link = JRoute::_(RemcaHelperRoute::$route_function($item->slug, $item->language));
							}
							else
							{
								$item->link = JRoute::_(RemcaHelperRoute::$route_function($item->slug));
							}
						}
					}
				}
				else
				{
					$item->link = JRoute::_('index.php?option=com_remca&view='.JString::strtolower($component_object_names[0]).$item_id_str.'&id='.$item->id);
				}
			}
			else
			{
				$item->link = JRoute::_('index.php?option=com_users&view=login');
			}
		}

		return $items;
	}
}
