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
				case 'ljc01':
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
				case 'ljc01s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljc02':
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
				case 'ljc02s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljc03':
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
				case 'ljc03s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljc04':
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
				case 'ljc04s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljc05':
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
				case 'ljc05s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljc06':
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
				case 'ljc06s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljc07':
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
				case 'ljc07s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljc08':
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
				case 'ljc08s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljc09':
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
				case 'ljc09s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljc10':
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
				case 'ljc10s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljc12':
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
				case 'ljc12s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljc13':
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
				case 'ljc13s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljc14':
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
				case 'ljc14s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljc16':
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
				case 'ljc16s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljc17':
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
				case 'ljc17s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljc18':
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
				case 'ljc18s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljc19':
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
				case 'ljc19s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljc20':
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
				case 'ljc20s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljc21':
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
				case 'ljc21s':
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
				if ($item->query['view'] == 'ljc01' OR $view == 'ljc01')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc01s'));
								
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
				if ($item->query['view'] == 'ljc01s'OR $view == 'ljc01s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljc02' OR $view == 'ljc02')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc02s'));
								
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
				if ($item->query['view'] == 'ljc02s'OR $view == 'ljc02s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljc03' OR $view == 'ljc03')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc03s'));
								
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
				if ($item->query['view'] == 'ljc03s'OR $view == 'ljc03s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljc04' OR $view == 'ljc04')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc04s'));
								
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
				if ($item->query['view'] == 'ljc04s'OR $view == 'ljc04s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljc05' OR $view == 'ljc05')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc05s'));
								
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
				if ($item->query['view'] == 'ljc05s'OR $view == 'ljc05s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljc06' OR $view == 'ljc06')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc06s'));
								
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
				if ($item->query['view'] == 'ljc06s'OR $view == 'ljc06s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljc07' OR $view == 'ljc07')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc07s'));
								
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
				if ($item->query['view'] == 'ljc07s'OR $view == 'ljc07s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljc08' OR $view == 'ljc08')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc08s'));
								
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
				if ($item->query['view'] == 'ljc08s'OR $view == 'ljc08s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljc09' OR $view == 'ljc09')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc09s'));
								
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
				if ($item->query['view'] == 'ljc09s'OR $view == 'ljc09s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljc10' OR $view == 'ljc10')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc10s'));
								
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
				if ($item->query['view'] == 'ljc10s'OR $view == 'ljc10s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljc12' OR $view == 'ljc12')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc12s'));
								
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
				if ($item->query['view'] == 'ljc12s'OR $view == 'ljc12s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljc13' OR $view == 'ljc13')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc13s'));
								
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
				if ($item->query['view'] == 'ljc13s'OR $view == 'ljc13s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljc14' OR $view == 'ljc14')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc14s'));
								
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
				if ($item->query['view'] == 'ljc14s'OR $view == 'ljc14s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljc16' OR $view == 'ljc16')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc16s'));
								
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
				if ($item->query['view'] == 'ljc16s'OR $view == 'ljc16s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljc17' OR $view == 'ljc17')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc17s'));
								
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
				if ($item->query['view'] == 'ljc17s'OR $view == 'ljc17s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljc18' OR $view == 'ljc18')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc18s'));
								
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
				if ($item->query['view'] == 'ljc18s'OR $view == 'ljc18s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljc19' OR $view == 'ljc19')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc19s'));
								
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
				if ($item->query['view'] == 'ljc19s'OR $view == 'ljc19s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljc20' OR $view == 'ljc20')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc20s'));
								
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
				if ($item->query['view'] == 'ljc20s'OR $view == 'ljc20s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljc21' OR $view == 'ljc21')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljc21s'));
								
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
				if ($item->query['view'] == 'ljc21s'OR $view == 'ljc21s')
				{
					$vars['view'] = $view;
				}				
			}
		
			$found = 0;
		}
		return $vars;
	}
}