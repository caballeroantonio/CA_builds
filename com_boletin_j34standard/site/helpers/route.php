<?php
/**
 * @version 		$Id:$
 * @name			Boletines
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_boletin
 * @subpackage		com_boletin.site
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: route.php 571 2016-01-04 15:03:02Z BrianWade $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.site
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
 * Boletines Component Route Helper
 *
 */
abstract class BoletinHelperRoute
{
	protected static $lookup = array();
			
	/**
	 * @param	integer	The route of the Acuerdos Fiscales
	 */
	public static function getFacuerdoRoute($id, $cat_id = 0, $layout = 'default', $keep_item_id = false)
	{
		$needles = array(
			'facuerdo'  => array((int) $id)
		);
		// Remove lead string from the form field value
		$layout = str_replace('_:', '', $layout);	
				
		if ($layout == '' OR $layout == 'default')
		{
			//Create the link
			$link = 'index.php?option=com_boletin&view=facuerdo&id='. $id;
		}
		else
		{
			//Create the link with a layout
			$link = 'index.php?option=com_boletin&view=facuerdo&layout='.$layout.'&id='. $id;
		}

		if ($cat_id > 1)
		{
			$options['countItems'] = false;
			$options['table'] = '#__rem_facuerdos';		
			$categories = JCategories::getInstance('Boletin', $options);
		
			$category = $categories->get($cat_id);
			if ($category)
			{
				$needles['category'] = array_reverse($category->getPath());
				$needles['categories'] = $needles['category'];
				$link .= '&catid='.$cat_id;
			}
		}
		
		if ($item = self::findItem($needles, $keep_item_id, $layout))
		{
			$link .= '&Itemid='.$item;
		}

		return $link;
	}
		//se está repitiendo
	public static function getCategoryRoute__($cat_id, $keep_item_id = false)
	{
		if ($cat_id instanceof JCategoryNode)
		{
			$id = $cat_id->id;
			$category = $cat_id;
		}
		else
		{
			$id = (int) $cat_id;
			$options['countItems'] = false;
			$options['table'] = '';			
			$category = JCategories::getInstance('Boletin', $options)->get($id);
		}

		if($id < 1 OR !($category instanceof JCategoryNode))
		{
			$link = '';
		}
		else
		{
			$needles = array();
					
			$link = 'index.php?option=com_boletin&view=category&id='.$id;
		
			$cat_ids = array_reverse($category->getPath());
			$needles['category'] = $cat_ids;
			$needles['categories'] = $cat_ids;

			
			if ($item = self::findItem($needles, $keep_item_id))
			{
				$link .= '&Itemid='.$item;
			}
			else
			{
				//Create the link
				$link = 'index.php?option=com_boletin&view=category&id='.$id;
				if($category)
				{
					$cat_ids = array_reverse($category->getPath());
					
					$needles['category'] = $cat_ids;
					$needles['categories'] = $cat_ids;
					
					if ($item = self::findItem($needles, $keep_item_id))
					{
						$link .= '&Itemid='.$item;
					}
					else
					{
						if ($item = self::findItem(null, $keep_item_id))
						{
							$link .= '&Itemid='.$item;
						}
					}
				}
			}
		}

		return $link;
	}
	protected static function findItem($needles = null, $keep_item_id = false, $layout = 'default')
	{
		if($keep_item_id)
		{
			return null;	
		}	
			
		$app		= JFactory::getApplication();
		$menus		= $app->getMenu('site');

		// Prepare the reverse lookup array.
		if (self::$lookup === null)
		{
			self::$lookup = array();

			$component	= JComponentHelper::getComponent('com_boletin');
			$items		= $menus->getItems('component_id', $component->id);
			foreach ($items as $item)
			{
				if (isset($item->query) AND isset($item->query['view']))
				{
					$view = $item->query['view'];
					if (isset($item->query['layout']))
					{
						$item_layout = $item->query['layout'];
					
						if (!isset(self::$lookup[$view.'-'.$item_layout]))
						{
							self::$lookup[$view.'-'.$item_layout] = array();
						}
						if (isset($item->query['id']))
						{
							self::$lookup[$view.'-'.$item_layout][$item->query['id']] = $item->id;
						}						
					}
					else
					{
						if (!isset(self::$lookup[$view]))
						{
							self::$lookup[$view] = array();
						}
						if (isset($item->query['id']))
						{
							self::$lookup[$view][$item->query['id']] = $item->id;
						}
					}					
				}
			}
		}

		if ($needles)
		{
			foreach ($needles as $view => $ids)
			{
				if ($layout == '' OR $layout == 'default')
				{
					if (isset(self::$lookup[$view]))
					{
						foreach($ids as $id)
						{
							if (isset(self::$lookup[$view][(int)$id]))
							{
								return self::$lookup[$view][(int)$id];
							}
						}
					}
				}
				else
				{
					if (isset(self::$lookup[$view.'-'.$layout]))
					{
						foreach($ids as $id)
						{
							if (isset(self::$lookup[$view.'-'.$layout][(int)$id]))
							{
								return self::$lookup[$view.'-'.$layout][(int)$id];
							}
						}
					}				
				}
			}
		}
		return null;
		
	}
}
