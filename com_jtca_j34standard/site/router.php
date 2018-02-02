<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA
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
				case 'lsc01':
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
				case 'lsc01s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljf01':
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
				case 'ljf01s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljp01':
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
				case 'ljp01s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljccm01':
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
				case 'ljccm01s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljoc01':
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
				case 'ljoc01s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpdng01':
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
				case 'ljpdng01s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpes01':
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
				case 'ljpes01s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadng01':
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
				case 'ljjadng01s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadg01':
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
				case 'ljjadg01s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp01':
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
				case 'lcp01s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp02':
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
				case 'lcp02s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp03':
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
				case 'lcp03s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp04':
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
				case 'lcp04s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp05':
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
				case 'lcp05s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp06':
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
				case 'lcp06s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp07':
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
				case 'lcp07s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp09':
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
				case 'lcp09s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp10':
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
				case 'lcp10s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp18':
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
				case 'lcp18s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp19':
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
				case 'lcp19s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp20':
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
				case 'lcp20s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp21':
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
				case 'lcp21s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp22':
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
				case 'lcp22s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp23':
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
				case 'lcp23s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp24':
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
				case 'lcp24s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp25':
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
				case 'lcp25s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp26':
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
				case 'lcp26s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp27':
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
				case 'lcp27s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp28':
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
				case 'lcp28s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp29':
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
				case 'lcp29s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp11':
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
				case 'lcp11s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp12':
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
				case 'lcp12s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp13':
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
				case 'lcp13s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp14':
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
				case 'lcp14s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp15':
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
				case 'lcp15s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp16':
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
				case 'lcp16s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp30':
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
				case 'lcp30s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp31':
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
				case 'lcp31s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp32':
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
				case 'lcp32s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp33':
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
				case 'lcp33s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp34':
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
				case 'lcp34s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp35':
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
				case 'lcp35s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp36':
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
				case 'lcp36s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp39':
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
				case 'lcp39s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp40':
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
				case 'lcp40s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lcp41':
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
				case 'lcp41s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lspe01':
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
				case 'lspe01s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lspe02':
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
				case 'lspe02s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lspe03':
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
				case 'lspe03s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lspe04':
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
				case 'lspe04s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lspe05':
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
				case 'lspe05s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lspe06':
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
				case 'lspe06s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lspe07':
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
				case 'lspe07s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lspe08':
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
				case 'lspe08s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsps01':
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
				case 'lsps01s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsc02':
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
				case 'lsc02s':
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
				case 'ljp02':
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
				case 'ljp02s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljccm02':
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
				case 'ljccm02s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpdng02':
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
				case 'ljpdng02s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpes02':
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
				case 'ljpes02s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadng02':
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
				case 'ljjadng02s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadg02':
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
				case 'ljjadg02s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsps02':
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
				case 'lsps02s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
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
				case 'lsc03':
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
				case 'lsc03s':
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
				case 'ljccm03':
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
				case 'ljccm03s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljoc03':
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
				case 'ljoc03s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpdng03':
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
				case 'ljpdng03s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpes03':
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
				case 'ljpes03s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadng03':
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
				case 'ljjadng03s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadg03':
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
				case 'ljjadg03s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsps03':
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
				case 'lsps03s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsc04':
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
				case 'lsc04s':
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
				case 'ljf04':
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
				case 'ljf04s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljp04':
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
				case 'ljp04s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljoc04':
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
				case 'ljoc04s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpdng04':
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
				case 'ljpdng04s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpes04':
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
				case 'ljpes04s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadng04':
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
				case 'ljjadng04s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadg04':
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
				case 'ljjadg04s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsps04':
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
				case 'lsps04s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsc05':
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
				case 'lsc05s':
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
				case 'ljf05':
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
				case 'ljf05s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljp05':
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
				case 'ljp05s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljccm05':
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
				case 'ljccm05s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljoc05':
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
				case 'ljoc05s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpdng05':
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
				case 'ljpdng05s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpes05':
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
				case 'ljpes05s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadng05':
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
				case 'ljjadng05s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadg05':
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
				case 'ljjadg05s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsps05':
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
				case 'lsps05s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsc06':
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
				case 'lsc06s':
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
				case 'ljf06':
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
				case 'ljf06s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljp06':
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
				case 'ljp06s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljccm06':
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
				case 'ljccm06s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljoc06':
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
				case 'ljoc06s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpdng06':
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
				case 'ljpdng06s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpes06':
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
				case 'ljpes06s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadng06':
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
				case 'ljjadng06s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadg06':
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
				case 'ljjadg06s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsps06':
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
				case 'lsps06s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsc07':
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
				case 'lsc07s':
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
				case 'ljf07':
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
				case 'ljf07s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljccm07':
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
				case 'ljccm07s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljoc07':
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
				case 'ljoc07s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpdng07':
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
				case 'ljpdng07s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpes07':
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
				case 'ljpes07s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadng07':
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
				case 'ljjadng07s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsps07':
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
				case 'lsps07s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsc08':
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
				case 'lsc08s':
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
				case 'ljf08':
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
				case 'ljf08s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljp08':
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
				case 'ljp08s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljccm08':
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
				case 'ljccm08s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljoc08':
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
				case 'ljoc08s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpdng08':
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
				case 'ljpdng08s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpes08':
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
				case 'ljpes08s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadng08':
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
				case 'ljjadng08s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsc14':
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
				case 'lsc14s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsps08':
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
				case 'lsps08s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsc09':
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
				case 'lsc09s':
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
				case 'ljf09':
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
				case 'ljf09s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljp09':
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
				case 'ljp09s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljccm09':
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
				case 'ljccm09s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljoc09':
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
				case 'ljoc09s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpdng09':
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
				case 'ljpdng09s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpes09':
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
				case 'ljpes09s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadng09':
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
				case 'ljjadng09s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadg09':
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
				case 'ljjadg09s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsps09':
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
				case 'lsps09s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsc10':
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
				case 'lsc10s':
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
				case 'ljf10':
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
				case 'ljf10s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljp10':
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
				case 'ljp10s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljccm10':
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
				case 'ljccm10s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljoc10':
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
				case 'ljoc10s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpdng10':
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
				case 'ljpdng10s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpes10':
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
				case 'ljpes10s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadng10':
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
				case 'ljjadng10s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadg10':
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
				case 'ljjadg10s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsps10':
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
				case 'lsps10s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsc11':
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
				case 'lsc11s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljf11':
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
				case 'ljf11s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljp11':
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
				case 'ljp11s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljccm11':
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
				case 'ljccm11s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljoc11':
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
				case 'ljoc11s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpdng11':
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
				case 'ljpdng11s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpes11':
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
				case 'ljpes11s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadng11':
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
				case 'ljjadng11s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadg11':
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
				case 'ljjadg11s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsps11':
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
				case 'lsps11s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsc12':
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
				case 'lsc12s':
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
				case 'ljf12':
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
				case 'ljf12s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljp12':
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
				case 'ljp12s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljccm12':
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
				case 'ljccm12s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljoc12':
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
				case 'ljoc12s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpdng12':
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
				case 'ljpdng12s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpes12':
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
				case 'ljpes12s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadng12':
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
				case 'ljjadng12s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsps12':
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
				case 'lsps12s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsc13':
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
				case 'lsc13s':
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
				case 'ljf13':
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
				case 'ljf13s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljp13':
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
				case 'ljp13s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljccm13':
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
				case 'ljccm13s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljoc13':
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
				case 'ljoc13s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpdng13':
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
				case 'ljpdng13s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpes13':
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
				case 'ljpes13s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadg13':
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
				case 'ljjadg13s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsps13':
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
				case 'lsps13s':
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
				case 'ljf14':
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
				case 'ljf14s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljp14':
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
				case 'ljp14s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljoc14':
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
				case 'ljoc14s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpdng14':
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
				case 'ljpdng14s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpes14':
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
				case 'ljpes14s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadg14':
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
				case 'ljjadg14s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'lsps14':
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
				case 'lsps14s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljf15':
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
				case 'ljf15s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljccm15':
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
				case 'ljccm15s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpdng15':
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
				case 'ljpdng15s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpes15':
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
				case 'ljpes15s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadg15':
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
				case 'ljjadg15s':
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
				case 'ljf16':
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
				case 'ljf16s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljp16':
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
				case 'ljp16s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljccm16':
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
				case 'ljccm16s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpdng16':
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
				case 'ljpdng16s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpes16':
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
				case 'ljpes16s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadg16':
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
				case 'ljjadg16s':
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
				case 'ljf17':
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
				case 'ljf17s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljp17':
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
				case 'ljp17s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljccm17':
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
				case 'ljccm17s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpdng17':
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
				case 'ljpdng17s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpes17':
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
				case 'ljpes17s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadg17':
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
				case 'ljjadg17s':
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
				case 'ljf18':
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
				case 'ljf18s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljp18':
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
				case 'ljp18s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpdng18':
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
				case 'ljpdng18s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljjadg18':
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
				case 'ljjadg18s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljpes18':
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
				case 'ljpes18s':
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
				case 'ljf19':
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
				case 'ljf19s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljp19':
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
				case 'ljp19s':
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
				case 'ljf20':
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
				case 'ljf20s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljp20':
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
				case 'ljp20s':
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
				case 'ljf21':
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
				case 'ljf21s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljp21':
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
				case 'ljp21s':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'ljf22':
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
				case 'ljf22s':
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
				if ($item->query['view'] == 'lsc01' OR $view == 'lsc01')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsc01s'));
								
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
				if ($item->query['view'] == 'lsc01s'OR $view == 'lsc01s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljf01' OR $view == 'ljf01')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf01s'));
								
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
				if ($item->query['view'] == 'ljf01s'OR $view == 'ljf01s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljp01' OR $view == 'ljp01')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljp01s'));
								
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
				if ($item->query['view'] == 'ljp01s'OR $view == 'ljp01s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljccm01' OR $view == 'ljccm01')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljccm01s'));
								
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
				if ($item->query['view'] == 'ljccm01s'OR $view == 'ljccm01s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljoc01' OR $view == 'ljoc01')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljoc01s'));
								
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
				if ($item->query['view'] == 'ljoc01s'OR $view == 'ljoc01s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpdng01' OR $view == 'ljpdng01')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpdng01s'));
								
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
				if ($item->query['view'] == 'ljpdng01s'OR $view == 'ljpdng01s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpes01' OR $view == 'ljpes01')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpes01s'));
								
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
				if ($item->query['view'] == 'ljpes01s'OR $view == 'ljpes01s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadng01' OR $view == 'ljjadng01')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadng01s'));
								
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
				if ($item->query['view'] == 'ljjadng01s'OR $view == 'ljjadng01s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadg01' OR $view == 'ljjadg01')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadg01s'));
								
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
				if ($item->query['view'] == 'ljjadg01s'OR $view == 'ljjadg01s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp01' OR $view == 'lcp01')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp01s'));
								
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
				if ($item->query['view'] == 'lcp01s'OR $view == 'lcp01s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp02' OR $view == 'lcp02')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp02s'));
								
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
				if ($item->query['view'] == 'lcp02s'OR $view == 'lcp02s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp03' OR $view == 'lcp03')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp03s'));
								
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
				if ($item->query['view'] == 'lcp03s'OR $view == 'lcp03s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp04' OR $view == 'lcp04')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp04s'));
								
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
				if ($item->query['view'] == 'lcp04s'OR $view == 'lcp04s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp05' OR $view == 'lcp05')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp05s'));
								
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
				if ($item->query['view'] == 'lcp05s'OR $view == 'lcp05s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp06' OR $view == 'lcp06')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp06s'));
								
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
				if ($item->query['view'] == 'lcp06s'OR $view == 'lcp06s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp07' OR $view == 'lcp07')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp07s'));
								
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
				if ($item->query['view'] == 'lcp07s'OR $view == 'lcp07s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp09' OR $view == 'lcp09')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp09s'));
								
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
				if ($item->query['view'] == 'lcp09s'OR $view == 'lcp09s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp10' OR $view == 'lcp10')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp10s'));
								
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
				if ($item->query['view'] == 'lcp10s'OR $view == 'lcp10s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp18' OR $view == 'lcp18')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp18s'));
								
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
				if ($item->query['view'] == 'lcp18s'OR $view == 'lcp18s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp19' OR $view == 'lcp19')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp19s'));
								
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
				if ($item->query['view'] == 'lcp19s'OR $view == 'lcp19s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp20' OR $view == 'lcp20')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp20s'));
								
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
				if ($item->query['view'] == 'lcp20s'OR $view == 'lcp20s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp21' OR $view == 'lcp21')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp21s'));
								
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
				if ($item->query['view'] == 'lcp21s'OR $view == 'lcp21s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp22' OR $view == 'lcp22')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp22s'));
								
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
				if ($item->query['view'] == 'lcp22s'OR $view == 'lcp22s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp23' OR $view == 'lcp23')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp23s'));
								
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
				if ($item->query['view'] == 'lcp23s'OR $view == 'lcp23s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp24' OR $view == 'lcp24')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp24s'));
								
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
				if ($item->query['view'] == 'lcp24s'OR $view == 'lcp24s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp25' OR $view == 'lcp25')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp25s'));
								
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
				if ($item->query['view'] == 'lcp25s'OR $view == 'lcp25s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp26' OR $view == 'lcp26')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp26s'));
								
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
				if ($item->query['view'] == 'lcp26s'OR $view == 'lcp26s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp27' OR $view == 'lcp27')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp27s'));
								
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
				if ($item->query['view'] == 'lcp27s'OR $view == 'lcp27s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp28' OR $view == 'lcp28')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp28s'));
								
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
				if ($item->query['view'] == 'lcp28s'OR $view == 'lcp28s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp29' OR $view == 'lcp29')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp29s'));
								
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
				if ($item->query['view'] == 'lcp29s'OR $view == 'lcp29s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp11' OR $view == 'lcp11')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp11s'));
								
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
				if ($item->query['view'] == 'lcp11s'OR $view == 'lcp11s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp12' OR $view == 'lcp12')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp12s'));
								
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
				if ($item->query['view'] == 'lcp12s'OR $view == 'lcp12s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp13' OR $view == 'lcp13')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp13s'));
								
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
				if ($item->query['view'] == 'lcp13s'OR $view == 'lcp13s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp14' OR $view == 'lcp14')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp14s'));
								
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
				if ($item->query['view'] == 'lcp14s'OR $view == 'lcp14s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp15' OR $view == 'lcp15')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp15s'));
								
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
				if ($item->query['view'] == 'lcp15s'OR $view == 'lcp15s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp16' OR $view == 'lcp16')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp16s'));
								
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
				if ($item->query['view'] == 'lcp16s'OR $view == 'lcp16s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp30' OR $view == 'lcp30')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp30s'));
								
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
				if ($item->query['view'] == 'lcp30s'OR $view == 'lcp30s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp31' OR $view == 'lcp31')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp31s'));
								
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
				if ($item->query['view'] == 'lcp31s'OR $view == 'lcp31s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp32' OR $view == 'lcp32')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp32s'));
								
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
				if ($item->query['view'] == 'lcp32s'OR $view == 'lcp32s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp33' OR $view == 'lcp33')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp33s'));
								
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
				if ($item->query['view'] == 'lcp33s'OR $view == 'lcp33s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp34' OR $view == 'lcp34')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp34s'));
								
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
				if ($item->query['view'] == 'lcp34s'OR $view == 'lcp34s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp35' OR $view == 'lcp35')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp35s'));
								
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
				if ($item->query['view'] == 'lcp35s'OR $view == 'lcp35s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp36' OR $view == 'lcp36')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp36s'));
								
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
				if ($item->query['view'] == 'lcp36s'OR $view == 'lcp36s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp39' OR $view == 'lcp39')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp39s'));
								
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
				if ($item->query['view'] == 'lcp39s'OR $view == 'lcp39s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp40' OR $view == 'lcp40')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp40s'));
								
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
				if ($item->query['view'] == 'lcp40s'OR $view == 'lcp40s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lcp41' OR $view == 'lcp41')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lcp41s'));
								
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
				if ($item->query['view'] == 'lcp41s'OR $view == 'lcp41s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lspe01' OR $view == 'lspe01')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lspe01s'));
								
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
				if ($item->query['view'] == 'lspe01s'OR $view == 'lspe01s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lspe02' OR $view == 'lspe02')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lspe02s'));
								
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
				if ($item->query['view'] == 'lspe02s'OR $view == 'lspe02s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lspe03' OR $view == 'lspe03')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lspe03s'));
								
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
				if ($item->query['view'] == 'lspe03s'OR $view == 'lspe03s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lspe04' OR $view == 'lspe04')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lspe04s'));
								
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
				if ($item->query['view'] == 'lspe04s'OR $view == 'lspe04s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lspe05' OR $view == 'lspe05')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lspe05s'));
								
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
				if ($item->query['view'] == 'lspe05s'OR $view == 'lspe05s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lspe06' OR $view == 'lspe06')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lspe06s'));
								
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
				if ($item->query['view'] == 'lspe06s'OR $view == 'lspe06s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lspe07' OR $view == 'lspe07')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lspe07s'));
								
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
				if ($item->query['view'] == 'lspe07s'OR $view == 'lspe07s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lspe08' OR $view == 'lspe08')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lspe08s'));
								
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
				if ($item->query['view'] == 'lspe08s'OR $view == 'lspe08s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsps01' OR $view == 'lsps01')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsps01s'));
								
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
				if ($item->query['view'] == 'lsps01s'OR $view == 'lsps01s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsc02' OR $view == 'lsc02')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsc02s'));
								
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
				if ($item->query['view'] == 'lsc02s'OR $view == 'lsc02s')
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
				if ($item->query['view'] == 'ljp02' OR $view == 'ljp02')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljp02s'));
								
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
				if ($item->query['view'] == 'ljp02s'OR $view == 'ljp02s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljccm02' OR $view == 'ljccm02')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljccm02s'));
								
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
				if ($item->query['view'] == 'ljccm02s'OR $view == 'ljccm02s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpdng02' OR $view == 'ljpdng02')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpdng02s'));
								
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
				if ($item->query['view'] == 'ljpdng02s'OR $view == 'ljpdng02s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpes02' OR $view == 'ljpes02')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpes02s'));
								
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
				if ($item->query['view'] == 'ljpes02s'OR $view == 'ljpes02s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadng02' OR $view == 'ljjadng02')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadng02s'));
								
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
				if ($item->query['view'] == 'ljjadng02s'OR $view == 'ljjadng02s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadg02' OR $view == 'ljjadg02')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadg02s'));
								
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
				if ($item->query['view'] == 'ljjadg02s'OR $view == 'ljjadg02s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsps02' OR $view == 'lsps02')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsps02s'));
								
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
				if ($item->query['view'] == 'lsps02s'OR $view == 'lsps02s')
				{
					$vars['view'] = $view;
				}				
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
				if ($item->query['view'] == 'lsc03' OR $view == 'lsc03')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsc03s'));
								
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
				if ($item->query['view'] == 'lsc03s'OR $view == 'lsc03s')
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
				if ($item->query['view'] == 'ljccm03' OR $view == 'ljccm03')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljccm03s'));
								
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
				if ($item->query['view'] == 'ljccm03s'OR $view == 'ljccm03s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljoc03' OR $view == 'ljoc03')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljoc03s'));
								
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
				if ($item->query['view'] == 'ljoc03s'OR $view == 'ljoc03s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpdng03' OR $view == 'ljpdng03')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpdng03s'));
								
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
				if ($item->query['view'] == 'ljpdng03s'OR $view == 'ljpdng03s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpes03' OR $view == 'ljpes03')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpes03s'));
								
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
				if ($item->query['view'] == 'ljpes03s'OR $view == 'ljpes03s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadng03' OR $view == 'ljjadng03')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadng03s'));
								
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
				if ($item->query['view'] == 'ljjadng03s'OR $view == 'ljjadng03s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadg03' OR $view == 'ljjadg03')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadg03s'));
								
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
				if ($item->query['view'] == 'ljjadg03s'OR $view == 'ljjadg03s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsps03' OR $view == 'lsps03')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsps03s'));
								
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
				if ($item->query['view'] == 'lsps03s'OR $view == 'lsps03s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsc04' OR $view == 'lsc04')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsc04s'));
								
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
				if ($item->query['view'] == 'lsc04s'OR $view == 'lsc04s')
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
				if ($item->query['view'] == 'ljf04' OR $view == 'ljf04')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf04s'));
								
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
				if ($item->query['view'] == 'ljf04s'OR $view == 'ljf04s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljp04' OR $view == 'ljp04')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljp04s'));
								
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
				if ($item->query['view'] == 'ljp04s'OR $view == 'ljp04s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljoc04' OR $view == 'ljoc04')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljoc04s'));
								
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
				if ($item->query['view'] == 'ljoc04s'OR $view == 'ljoc04s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpdng04' OR $view == 'ljpdng04')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpdng04s'));
								
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
				if ($item->query['view'] == 'ljpdng04s'OR $view == 'ljpdng04s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpes04' OR $view == 'ljpes04')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpes04s'));
								
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
				if ($item->query['view'] == 'ljpes04s'OR $view == 'ljpes04s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadng04' OR $view == 'ljjadng04')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadng04s'));
								
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
				if ($item->query['view'] == 'ljjadng04s'OR $view == 'ljjadng04s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadg04' OR $view == 'ljjadg04')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadg04s'));
								
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
				if ($item->query['view'] == 'ljjadg04s'OR $view == 'ljjadg04s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsps04' OR $view == 'lsps04')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsps04s'));
								
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
				if ($item->query['view'] == 'lsps04s'OR $view == 'lsps04s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsc05' OR $view == 'lsc05')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsc05s'));
								
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
				if ($item->query['view'] == 'lsc05s'OR $view == 'lsc05s')
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
				if ($item->query['view'] == 'ljf05' OR $view == 'ljf05')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf05s'));
								
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
				if ($item->query['view'] == 'ljf05s'OR $view == 'ljf05s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljp05' OR $view == 'ljp05')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljp05s'));
								
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
				if ($item->query['view'] == 'ljp05s'OR $view == 'ljp05s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljccm05' OR $view == 'ljccm05')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljccm05s'));
								
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
				if ($item->query['view'] == 'ljccm05s'OR $view == 'ljccm05s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljoc05' OR $view == 'ljoc05')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljoc05s'));
								
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
				if ($item->query['view'] == 'ljoc05s'OR $view == 'ljoc05s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpdng05' OR $view == 'ljpdng05')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpdng05s'));
								
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
				if ($item->query['view'] == 'ljpdng05s'OR $view == 'ljpdng05s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpes05' OR $view == 'ljpes05')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpes05s'));
								
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
				if ($item->query['view'] == 'ljpes05s'OR $view == 'ljpes05s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadng05' OR $view == 'ljjadng05')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadng05s'));
								
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
				if ($item->query['view'] == 'ljjadng05s'OR $view == 'ljjadng05s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadg05' OR $view == 'ljjadg05')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadg05s'));
								
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
				if ($item->query['view'] == 'ljjadg05s'OR $view == 'ljjadg05s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsps05' OR $view == 'lsps05')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsps05s'));
								
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
				if ($item->query['view'] == 'lsps05s'OR $view == 'lsps05s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsc06' OR $view == 'lsc06')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsc06s'));
								
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
				if ($item->query['view'] == 'lsc06s'OR $view == 'lsc06s')
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
				if ($item->query['view'] == 'ljf06' OR $view == 'ljf06')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf06s'));
								
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
				if ($item->query['view'] == 'ljf06s'OR $view == 'ljf06s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljp06' OR $view == 'ljp06')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljp06s'));
								
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
				if ($item->query['view'] == 'ljp06s'OR $view == 'ljp06s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljccm06' OR $view == 'ljccm06')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljccm06s'));
								
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
				if ($item->query['view'] == 'ljccm06s'OR $view == 'ljccm06s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljoc06' OR $view == 'ljoc06')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljoc06s'));
								
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
				if ($item->query['view'] == 'ljoc06s'OR $view == 'ljoc06s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpdng06' OR $view == 'ljpdng06')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpdng06s'));
								
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
				if ($item->query['view'] == 'ljpdng06s'OR $view == 'ljpdng06s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpes06' OR $view == 'ljpes06')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpes06s'));
								
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
				if ($item->query['view'] == 'ljpes06s'OR $view == 'ljpes06s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadng06' OR $view == 'ljjadng06')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadng06s'));
								
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
				if ($item->query['view'] == 'ljjadng06s'OR $view == 'ljjadng06s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadg06' OR $view == 'ljjadg06')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadg06s'));
								
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
				if ($item->query['view'] == 'ljjadg06s'OR $view == 'ljjadg06s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsps06' OR $view == 'lsps06')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsps06s'));
								
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
				if ($item->query['view'] == 'lsps06s'OR $view == 'lsps06s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsc07' OR $view == 'lsc07')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsc07s'));
								
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
				if ($item->query['view'] == 'lsc07s'OR $view == 'lsc07s')
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
				if ($item->query['view'] == 'ljf07' OR $view == 'ljf07')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf07s'));
								
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
				if ($item->query['view'] == 'ljf07s'OR $view == 'ljf07s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljccm07' OR $view == 'ljccm07')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljccm07s'));
								
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
				if ($item->query['view'] == 'ljccm07s'OR $view == 'ljccm07s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljoc07' OR $view == 'ljoc07')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljoc07s'));
								
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
				if ($item->query['view'] == 'ljoc07s'OR $view == 'ljoc07s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpdng07' OR $view == 'ljpdng07')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpdng07s'));
								
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
				if ($item->query['view'] == 'ljpdng07s'OR $view == 'ljpdng07s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpes07' OR $view == 'ljpes07')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpes07s'));
								
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
				if ($item->query['view'] == 'ljpes07s'OR $view == 'ljpes07s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadng07' OR $view == 'ljjadng07')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadng07s'));
								
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
				if ($item->query['view'] == 'ljjadng07s'OR $view == 'ljjadng07s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsps07' OR $view == 'lsps07')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsps07s'));
								
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
				if ($item->query['view'] == 'lsps07s'OR $view == 'lsps07s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsc08' OR $view == 'lsc08')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsc08s'));
								
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
				if ($item->query['view'] == 'lsc08s'OR $view == 'lsc08s')
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
				if ($item->query['view'] == 'ljf08' OR $view == 'ljf08')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf08s'));
								
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
				if ($item->query['view'] == 'ljf08s'OR $view == 'ljf08s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljp08' OR $view == 'ljp08')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljp08s'));
								
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
				if ($item->query['view'] == 'ljp08s'OR $view == 'ljp08s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljccm08' OR $view == 'ljccm08')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljccm08s'));
								
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
				if ($item->query['view'] == 'ljccm08s'OR $view == 'ljccm08s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljoc08' OR $view == 'ljoc08')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljoc08s'));
								
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
				if ($item->query['view'] == 'ljoc08s'OR $view == 'ljoc08s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpdng08' OR $view == 'ljpdng08')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpdng08s'));
								
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
				if ($item->query['view'] == 'ljpdng08s'OR $view == 'ljpdng08s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpes08' OR $view == 'ljpes08')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpes08s'));
								
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
				if ($item->query['view'] == 'ljpes08s'OR $view == 'ljpes08s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadng08' OR $view == 'ljjadng08')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadng08s'));
								
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
				if ($item->query['view'] == 'ljjadng08s'OR $view == 'ljjadng08s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsc14' OR $view == 'lsc14')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsc14s'));
								
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
				if ($item->query['view'] == 'lsc14s'OR $view == 'lsc14s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsps08' OR $view == 'lsps08')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsps08s'));
								
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
				if ($item->query['view'] == 'lsps08s'OR $view == 'lsps08s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsc09' OR $view == 'lsc09')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsc09s'));
								
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
				if ($item->query['view'] == 'lsc09s'OR $view == 'lsc09s')
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
				if ($item->query['view'] == 'ljf09' OR $view == 'ljf09')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf09s'));
								
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
				if ($item->query['view'] == 'ljf09s'OR $view == 'ljf09s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljp09' OR $view == 'ljp09')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljp09s'));
								
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
				if ($item->query['view'] == 'ljp09s'OR $view == 'ljp09s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljccm09' OR $view == 'ljccm09')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljccm09s'));
								
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
				if ($item->query['view'] == 'ljccm09s'OR $view == 'ljccm09s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljoc09' OR $view == 'ljoc09')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljoc09s'));
								
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
				if ($item->query['view'] == 'ljoc09s'OR $view == 'ljoc09s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpdng09' OR $view == 'ljpdng09')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpdng09s'));
								
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
				if ($item->query['view'] == 'ljpdng09s'OR $view == 'ljpdng09s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpes09' OR $view == 'ljpes09')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpes09s'));
								
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
				if ($item->query['view'] == 'ljpes09s'OR $view == 'ljpes09s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadng09' OR $view == 'ljjadng09')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadng09s'));
								
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
				if ($item->query['view'] == 'ljjadng09s'OR $view == 'ljjadng09s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadg09' OR $view == 'ljjadg09')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadg09s'));
								
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
				if ($item->query['view'] == 'ljjadg09s'OR $view == 'ljjadg09s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsps09' OR $view == 'lsps09')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsps09s'));
								
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
				if ($item->query['view'] == 'lsps09s'OR $view == 'lsps09s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsc10' OR $view == 'lsc10')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsc10s'));
								
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
				if ($item->query['view'] == 'lsc10s'OR $view == 'lsc10s')
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
				if ($item->query['view'] == 'ljf10' OR $view == 'ljf10')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf10s'));
								
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
				if ($item->query['view'] == 'ljf10s'OR $view == 'ljf10s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljp10' OR $view == 'ljp10')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljp10s'));
								
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
				if ($item->query['view'] == 'ljp10s'OR $view == 'ljp10s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljccm10' OR $view == 'ljccm10')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljccm10s'));
								
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
				if ($item->query['view'] == 'ljccm10s'OR $view == 'ljccm10s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljoc10' OR $view == 'ljoc10')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljoc10s'));
								
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
				if ($item->query['view'] == 'ljoc10s'OR $view == 'ljoc10s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpdng10' OR $view == 'ljpdng10')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpdng10s'));
								
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
				if ($item->query['view'] == 'ljpdng10s'OR $view == 'ljpdng10s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpes10' OR $view == 'ljpes10')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpes10s'));
								
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
				if ($item->query['view'] == 'ljpes10s'OR $view == 'ljpes10s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadng10' OR $view == 'ljjadng10')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadng10s'));
								
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
				if ($item->query['view'] == 'ljjadng10s'OR $view == 'ljjadng10s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadg10' OR $view == 'ljjadg10')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadg10s'));
								
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
				if ($item->query['view'] == 'ljjadg10s'OR $view == 'ljjadg10s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsps10' OR $view == 'lsps10')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsps10s'));
								
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
				if ($item->query['view'] == 'lsps10s'OR $view == 'lsps10s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsc11' OR $view == 'lsc11')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsc11s'));
								
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
				if ($item->query['view'] == 'lsc11s'OR $view == 'lsc11s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljf11' OR $view == 'ljf11')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf11s'));
								
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
				if ($item->query['view'] == 'ljf11s'OR $view == 'ljf11s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljp11' OR $view == 'ljp11')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljp11s'));
								
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
				if ($item->query['view'] == 'ljp11s'OR $view == 'ljp11s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljccm11' OR $view == 'ljccm11')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljccm11s'));
								
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
				if ($item->query['view'] == 'ljccm11s'OR $view == 'ljccm11s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljoc11' OR $view == 'ljoc11')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljoc11s'));
								
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
				if ($item->query['view'] == 'ljoc11s'OR $view == 'ljoc11s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpdng11' OR $view == 'ljpdng11')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpdng11s'));
								
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
				if ($item->query['view'] == 'ljpdng11s'OR $view == 'ljpdng11s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpes11' OR $view == 'ljpes11')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpes11s'));
								
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
				if ($item->query['view'] == 'ljpes11s'OR $view == 'ljpes11s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadng11' OR $view == 'ljjadng11')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadng11s'));
								
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
				if ($item->query['view'] == 'ljjadng11s'OR $view == 'ljjadng11s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadg11' OR $view == 'ljjadg11')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadg11s'));
								
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
				if ($item->query['view'] == 'ljjadg11s'OR $view == 'ljjadg11s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsps11' OR $view == 'lsps11')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsps11s'));
								
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
				if ($item->query['view'] == 'lsps11s'OR $view == 'lsps11s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsc12' OR $view == 'lsc12')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsc12s'));
								
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
				if ($item->query['view'] == 'lsc12s'OR $view == 'lsc12s')
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
				if ($item->query['view'] == 'ljf12' OR $view == 'ljf12')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf12s'));
								
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
				if ($item->query['view'] == 'ljf12s'OR $view == 'ljf12s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljp12' OR $view == 'ljp12')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljp12s'));
								
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
				if ($item->query['view'] == 'ljp12s'OR $view == 'ljp12s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljccm12' OR $view == 'ljccm12')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljccm12s'));
								
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
				if ($item->query['view'] == 'ljccm12s'OR $view == 'ljccm12s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljoc12' OR $view == 'ljoc12')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljoc12s'));
								
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
				if ($item->query['view'] == 'ljoc12s'OR $view == 'ljoc12s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpdng12' OR $view == 'ljpdng12')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpdng12s'));
								
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
				if ($item->query['view'] == 'ljpdng12s'OR $view == 'ljpdng12s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpes12' OR $view == 'ljpes12')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpes12s'));
								
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
				if ($item->query['view'] == 'ljpes12s'OR $view == 'ljpes12s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadng12' OR $view == 'ljjadng12')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadng12s'));
								
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
				if ($item->query['view'] == 'ljjadng12s'OR $view == 'ljjadng12s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsps12' OR $view == 'lsps12')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsps12s'));
								
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
				if ($item->query['view'] == 'lsps12s'OR $view == 'lsps12s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsc13' OR $view == 'lsc13')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsc13s'));
								
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
				if ($item->query['view'] == 'lsc13s'OR $view == 'lsc13s')
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
				if ($item->query['view'] == 'ljf13' OR $view == 'ljf13')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf13s'));
								
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
				if ($item->query['view'] == 'ljf13s'OR $view == 'ljf13s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljp13' OR $view == 'ljp13')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljp13s'));
								
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
				if ($item->query['view'] == 'ljp13s'OR $view == 'ljp13s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljccm13' OR $view == 'ljccm13')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljccm13s'));
								
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
				if ($item->query['view'] == 'ljccm13s'OR $view == 'ljccm13s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljoc13' OR $view == 'ljoc13')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljoc13s'));
								
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
				if ($item->query['view'] == 'ljoc13s'OR $view == 'ljoc13s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpdng13' OR $view == 'ljpdng13')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpdng13s'));
								
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
				if ($item->query['view'] == 'ljpdng13s'OR $view == 'ljpdng13s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpes13' OR $view == 'ljpes13')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpes13s'));
								
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
				if ($item->query['view'] == 'ljpes13s'OR $view == 'ljpes13s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadg13' OR $view == 'ljjadg13')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadg13s'));
								
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
				if ($item->query['view'] == 'ljjadg13s'OR $view == 'ljjadg13s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsps13' OR $view == 'lsps13')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsps13s'));
								
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
				if ($item->query['view'] == 'lsps13s'OR $view == 'lsps13s')
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
				if ($item->query['view'] == 'ljf14' OR $view == 'ljf14')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf14s'));
								
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
				if ($item->query['view'] == 'ljf14s'OR $view == 'ljf14s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljp14' OR $view == 'ljp14')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljp14s'));
								
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
				if ($item->query['view'] == 'ljp14s'OR $view == 'ljp14s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljoc14' OR $view == 'ljoc14')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljoc14s'));
								
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
				if ($item->query['view'] == 'ljoc14s'OR $view == 'ljoc14s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpdng14' OR $view == 'ljpdng14')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpdng14s'));
								
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
				if ($item->query['view'] == 'ljpdng14s'OR $view == 'ljpdng14s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpes14' OR $view == 'ljpes14')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpes14s'));
								
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
				if ($item->query['view'] == 'ljpes14s'OR $view == 'ljpes14s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadg14' OR $view == 'ljjadg14')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadg14s'));
								
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
				if ($item->query['view'] == 'ljjadg14s'OR $view == 'ljjadg14s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'lsps14' OR $view == 'lsps14')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_lsps14s'));
								
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
				if ($item->query['view'] == 'lsps14s'OR $view == 'lsps14s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljf15' OR $view == 'ljf15')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf15s'));
								
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
				if ($item->query['view'] == 'ljf15s'OR $view == 'ljf15s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljccm15' OR $view == 'ljccm15')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljccm15s'));
								
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
				if ($item->query['view'] == 'ljccm15s'OR $view == 'ljccm15s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpdng15' OR $view == 'ljpdng15')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpdng15s'));
								
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
				if ($item->query['view'] == 'ljpdng15s'OR $view == 'ljpdng15s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpes15' OR $view == 'ljpes15')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpes15s'));
								
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
				if ($item->query['view'] == 'ljpes15s'OR $view == 'ljpes15s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadg15' OR $view == 'ljjadg15')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadg15s'));
								
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
				if ($item->query['view'] == 'ljjadg15s'OR $view == 'ljjadg15s')
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
				if ($item->query['view'] == 'ljf16' OR $view == 'ljf16')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf16s'));
								
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
				if ($item->query['view'] == 'ljf16s'OR $view == 'ljf16s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljp16' OR $view == 'ljp16')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljp16s'));
								
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
				if ($item->query['view'] == 'ljp16s'OR $view == 'ljp16s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljccm16' OR $view == 'ljccm16')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljccm16s'));
								
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
				if ($item->query['view'] == 'ljccm16s'OR $view == 'ljccm16s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpdng16' OR $view == 'ljpdng16')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpdng16s'));
								
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
				if ($item->query['view'] == 'ljpdng16s'OR $view == 'ljpdng16s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpes16' OR $view == 'ljpes16')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpes16s'));
								
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
				if ($item->query['view'] == 'ljpes16s'OR $view == 'ljpes16s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadg16' OR $view == 'ljjadg16')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadg16s'));
								
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
				if ($item->query['view'] == 'ljjadg16s'OR $view == 'ljjadg16s')
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
				if ($item->query['view'] == 'ljf17' OR $view == 'ljf17')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf17s'));
								
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
				if ($item->query['view'] == 'ljf17s'OR $view == 'ljf17s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljp17' OR $view == 'ljp17')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljp17s'));
								
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
				if ($item->query['view'] == 'ljp17s'OR $view == 'ljp17s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljccm17' OR $view == 'ljccm17')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljccm17s'));
								
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
				if ($item->query['view'] == 'ljccm17s'OR $view == 'ljccm17s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpdng17' OR $view == 'ljpdng17')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpdng17s'));
								
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
				if ($item->query['view'] == 'ljpdng17s'OR $view == 'ljpdng17s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpes17' OR $view == 'ljpes17')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpes17s'));
								
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
				if ($item->query['view'] == 'ljpes17s'OR $view == 'ljpes17s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadg17' OR $view == 'ljjadg17')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadg17s'));
								
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
				if ($item->query['view'] == 'ljjadg17s'OR $view == 'ljjadg17s')
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
				if ($item->query['view'] == 'ljf18' OR $view == 'ljf18')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf18s'));
								
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
				if ($item->query['view'] == 'ljf18s'OR $view == 'ljf18s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljp18' OR $view == 'ljp18')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljp18s'));
								
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
				if ($item->query['view'] == 'ljp18s'OR $view == 'ljp18s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpdng18' OR $view == 'ljpdng18')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpdng18s'));
								
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
				if ($item->query['view'] == 'ljpdng18s'OR $view == 'ljpdng18s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljjadg18' OR $view == 'ljjadg18')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljjadg18s'));
								
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
				if ($item->query['view'] == 'ljjadg18s'OR $view == 'ljjadg18s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljpes18' OR $view == 'ljpes18')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljpes18s'));
								
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
				if ($item->query['view'] == 'ljpes18s'OR $view == 'ljpes18s')
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
				if ($item->query['view'] == 'ljf19' OR $view == 'ljf19')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf19s'));
								
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
				if ($item->query['view'] == 'ljf19s'OR $view == 'ljf19s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljp19' OR $view == 'ljp19')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljp19s'));
								
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
				if ($item->query['view'] == 'ljp19s'OR $view == 'ljp19s')
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
				if ($item->query['view'] == 'ljf20' OR $view == 'ljf20')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf20s'));
								
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
				if ($item->query['view'] == 'ljf20s'OR $view == 'ljf20s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljp20' OR $view == 'ljp20')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljp20s'));
								
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
				if ($item->query['view'] == 'ljp20s'OR $view == 'ljp20s')
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
				if ($item->query['view'] == 'ljf21' OR $view == 'ljf21')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf21s'));
								
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
				if ($item->query['view'] == 'ljf21s'OR $view == 'ljf21s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljp21' OR $view == 'ljp21')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljp21s'));
								
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
				if ($item->query['view'] == 'ljp21s'OR $view == 'ljp21s')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'ljf22' OR $view == 'ljf22')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('jt_ljf22s'));
								
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
				if ($item->query['view'] == 'ljf22s'OR $view == 'ljf22s')
				{
					$vars['view'] = $view;
				}				
			}
		
			$found = 0;
		}
		return $vars;
	}
}