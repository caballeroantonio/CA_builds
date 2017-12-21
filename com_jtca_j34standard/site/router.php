<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA (Release 1.0.0)
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_jtca
 * @subpackage		com_jtca.site
 * @copyright		Copyright (c) 2017 - 2020. All Rights Reserved
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: router.php 590 2016-01-13 16:03:06Z BrianWade $
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
 * Routing class for the TSJ CDMX Libros TxCA component
 *
 */
class JtCaRouter extends JComponentRouterBase
{
	/**
	 * Build the route for the TSJ CDMX Libros TxCA component
	 *
	 * @param	array	$query		An array of URL arguments
	 *
	 * @return	array	$segments	The URL arguments to use to assemble the subsequent URL.
	 */
	public function build(&$query)
	{
		$segments = array();

		$db = JFactory::getDbo();	
		$params	= JComponentHelper::getParams('com_jtca');
		$advanced = $params->get('sef_advanced_link', 0);

		if (empty($query['Itemid']))
		{
			$menu_item = $this->menu->getActive();
			$menu_item_given = false;
		}
		else
		{
			$menu_item = $this->menu->getItem($query['Itemid']);
			$menu_item_given = true;
		}
	
		// Check again
		if ($menu_item_given AND isset($menu_item) AND $menu_item->component != 'com_jtca')
		{
			$menu_item_given = false;
			unset($query['Itemid']);
		}
	
		$menu_view	= (empty($menu_item->query['view'])) ? null : $menu_item->query['view'];
		$menu_id	= (empty($menu_item->query['id'])) ? null : $menu_item->query['id'];

		if (isset($query['view']))
		{
			$view = $query['view'];
			// For a modal layout force the route to the view in the uri not that of the menu item
			if (isset($query['layout']) AND $query['layout'] == 'modal')
			{
				$segments[] = $query['view'];
				unset($query['view']);			
				unset($query['Itemid']);			
			}
			else
			{
				if (empty($query['Itemid']) || empty($menu_item) || $menu_item->component != 'com_jtca')
				{
					$segments[] = $query['view'];
					unset($query['view']);			
				}
			}
		}

		// Are we dealing with a jtca that is attached to a menu item?
		if (isset($view) AND ($menu_view == $view) AND (isset($query['id'])) AND ($menu_id == intval($query['id'])))
		{
			unset($query['view']);

			if (isset($query['layout']) AND $query['layout'] != 'edit')
			{
				unset($query['layout']);
			}			
			unset($query['id']);
			return $segments;
		}

		if (isset($view) )
		{
			switch ($view)
			{
				case 'lejemplo':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						if($advanced)
						{
							list($tmp, $id) = explode(':', $query['id'], 2);
						}
						else
						{
							$id = isset($query['id']) ? $query['id'] : null;
						}
						$segments[] = $view;					
						$segments[] = $id;
					}
					unset($query['view']);				
					unset($query['id']);
					break;
				case 'lejemplos':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				default:
					break;	
			}
		}


		$total = count($segments);

		for ($i = 0; $i < $total; $i++)
		{
			$segments[$i] = str_replace(':', '-', $segments[$i]);
		}
		
		return $segments;
	}
	/**
	 * Parse the segments of a URL.
	 *
	 * @param	array	$segments	The segments of the URL to parse.
	 *
	 * @return	array	$vars		The URL attributes to be used by the application.
	 */
	public function parse(&$segments)
	{
		$app	= JFactory::getApplication();
		$total = count($segments);
		$vars = array();

		for ($i = 0; $i < $total; $i++)
		{
			$segments[$i] = preg_replace('/-/', ':', $segments[$i], 1);
		}
		
		// Get the request view as this is need for multi view parsing
		$view = $app->input->getString('view', '');
		
		//Get the active menu item.
		$item	= $this->menu->getActive();
		$params = JComponentHelper::getParams('com_jtca');
		$advanced = $params->get('sef_advanced_link', 0);

		// Count route segments
		$count = count($segments);

		// Standard routing
		if (!isset($item))
		{
			$vars['view']	= $segments[0];
			if (count($segments) > 1)
			{
				$vars['id']		= $segments[$count - 1];
			}
			return $vars;
		}
		
		if (!$advanced)
		{
			$vars['id'] = (int) $segments[$count - 1];		
			$vars['view'] = $segments[$count - 2];	
			return $vars;	
		}		

		$id = (isset($item->query['id']) AND $item->query['id'] > 1) ? $item->query['id'] : 'root';
		$vars['id'] = $id;
		$found = 0;
		foreach($segments as $segment)
		{
			$segment = $advanced ? str_replace(':', '-',$segment) : $segment;

			if ($found == 0)
			{
				if ($item->query['view'] == 'lejemplo' OR $view == 'lejemplo')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lejemplos'));
								
						$db->setQuery($query);
						$nid = $db->loadResult();
					}
					else
					{
						$nid = $segment;
					}
					$vars['id'] = $nid;
					$vars['view'] = $view;
				}
				if ($item->query['view'] == 'lejemplos'OR $view == 'lejemplos')
				{
					$vars['view'] = $view;
				}				
			}
		
			$found = 0;
		}
		return $vars;
	}
}