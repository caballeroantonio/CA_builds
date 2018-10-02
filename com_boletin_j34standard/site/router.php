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
 * Routing class for the Boletines component
 *
 */
class BoletinRouter extends JComponentRouterBase
{
	/**
	 * Build the route for the Boletines component
	 *
	 * @param	array	$query		An array of URL arguments
	 *
	 * @return	array	$segments	The URL arguments to use to assemble the subsequent URL.
	 */
	public function build(&$query)
	{
		$segments = array();

		$db = JFactory::getDbo();	
		$params	= JComponentHelper::getParams('com_boletin');
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
		if ($menu_item_given AND isset($menu_item) AND $menu_item->component != 'com_boletin')
		{
			$menu_item_given = false;
			unset($query['Itemid']);
		}
	
		$menu_view	= (empty($menu_item->query['view'])) ? null : $menu_item->query['view'];
		$menu_cat_id	= (empty($menu_item->query['catid'])) ? null : $menu_item->query['catid'];
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
				if (empty($query['Itemid']) || empty($menu_item) || $menu_item->component != 'com_boletin')
				{
					$segments[] = $query['view'];
					unset($query['view']);			
				}
			}
		}

		// Are we dealing with a boletin that is attached to a menu item?
		if (isset($view) AND ($menu_view == $view) AND (isset($query['id'])) AND ($menu_id == intval($query['id'])))
		{
			unset($query['view']);
			if (isset($query['catid']))
			{
				unset($query['catid']);
			}

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
				case 'category':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						if (isset($query['catid']))
						{
							$cat_id = $query['catid'];
						}
						else
						{
							if(isset($query['id']))
							{
								$cat_id = $query['id'];
							}
							else
							{
								$cat_id = null;
							}
						}	
									
						$menu_cat_id = $menu_id;
						$options['countItems'] = false;
						$options['table'] = '';				
						$categories = JCategories::getInstance('Boletin',$options);
						$category = $categories->get($cat_id);

						if (!$category)
						{
							// We couldn't find the category we were given.  Bail.
							return $segments;
						}		
						$path = array_reverse($category->getPath());

						$array = array();
						foreach($path as $id)
						{
							if((int) $id == (int)$menu_cat_id)
							{
								break;
							}
							if($advanced)
							{
								list($tmp, $id) = explode(':', $id, 2);
							}
							$array[] = $id;
						}
						array_splice($array,1, 0, 'category');
						$segments = array_reverse($array);
					}
					unset($query['view']);
					unset($query['id']);
					unset($query['catid']);
													
					break;			
				case 'tsjcdmx_juzgados_familiares_antiguo':
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
				case 'tsjcdmx_juzgados_familiares_antiguos':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'tsjcdmx_juzgados_civiles_antiguo':
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
				case 'tsjcdmx_juzgados_civiles_antiguos':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'tsjcdmx_juzgado_acuerdo':
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
				case 'tsjcdmx_juzgado_acuerdos':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'tsjcdmx_sala_acuerdo':
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
				case 'tsjcdmx_sala_acuerdos':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'prodecon_bacuerdo':
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
				case 'prodecon_bacuerdos':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'profeco_proveedor':
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
				case 'profeco_proveedores':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'srsps_bacuerdo':
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
				case 'srsps_bacuerdos':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'rsps_bacuerdo':
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
				case 'rsps_bacuerdos':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'pjf_bacuerdo':
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
				case 'pjf_bacuerdos':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'tfca_bacuerdo':
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
				case 'tfca_bacuerdos':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						$segments[] = $view;											
					}
					unset($query['view']);				
					break;					
				case 'tfjfa_bacuerdo':
					if (!isset($query['id']) OR $menu_id != (int) $query['id'] OR $menu_view != $view)
					{
						if (isset($query['catid']))
						{
							$cat_id = $query['catid'];
						}
						else
						{
							if(isset($query['id']))
							{
								$cat_id = $query['id'];
							}
							else
							{
								$cat_id = null;
							}
						}	

						$menu_cat_id = $menu_id;
						$options['countItems'] = false;
						$options['table'] = '';				
						$categories = JCategories::getInstance('Boletin',$options);
						$category = $categories->get($cat_id);
						if($category)
						{
							//TODO Throw error that the category either not exists or is unpublished
							$path = array_reverse($category->getPath());

							$array = array();
							foreach($path as $id)
							{
								if((int) $id == (int)$menu_cat_id)
								{
									break;
								}
								if($advanced)
								{
									list($tmp, $id) = explode(':', $id, 2);
								}
								$array[] = $id;
							}
							$segments = array_merge($segments, array_reverse($array));
						}
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
					unset($query['catid']);
					break;
				case 'tfjfa_bacuerdos':
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

		if (!isset($query['layout']) OR $query['layout'] == 'default')
		{
			if (isset($menu_item->query['layout']) AND $menu_item->query['layout'] == 'blog' AND isset($query['id']))
			{
				$query['layout'] = 'article';
			}
		};

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
		$params = JComponentHelper::getParams('com_boletin');
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
		// From the categories view, we can only jump to a category.	
		$options['countItems'] = false;
		$options['table'] = '';	
		if ($item->query['view'] == 'categories' OR $item->query['view'] == 'category')
		{
			$categories = JCategories::getInstance('Boletin',$options)->get($id)->getChildren();
		}
		else
		{
			$categories = array();	
		}
		$vars['catid'] = $id;
		$vars['id'] = $id;
		$found = 0;
		foreach($segments as $segment)
		{
			$segment = $advanced ? str_replace(':', '-',$segment) : $segment;
			foreach($categories as $category)
			{
				if ($category->slug == $segment 
					OR $category->alias == $segment
					)
				{
					$vars['id'] = $category->id;
					$vars['catid'] = $category->id;
					$vars['view'] = 'category';
					$categories = $category->getChildren();
					$found = 1;
					break;
				}
			}

			if ($found == 0)
			{
				if ($item->query['view'] == 'tsjcdmx_juzgados_familiares_antiguo' OR $view == 'tsjcdmx_juzgados_familiares_antiguo')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('#__boletin_tsjcdmx_juzgados_familiares_antiguos'));
								
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
				if ($item->query['view'] == 'tsjcdmx_juzgados_familiares_antiguos'OR $view == 'tsjcdmx_juzgados_familiares_antiguos')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'tsjcdmx_juzgados_civiles_antiguo' OR $view == 'tsjcdmx_juzgados_civiles_antiguo')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('#__boletin_tsjcdmx_juzgados_civiles_antiguos'));
								
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
				if ($item->query['view'] == 'tsjcdmx_juzgados_civiles_antiguos'OR $view == 'tsjcdmx_juzgados_civiles_antiguos')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'tsjcdmx_juzgado_acuerdo' OR $view == 'tsjcdmx_juzgado_acuerdo')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('#__boletin_tsjcdmx_juzgado_acuerdos'));
								
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
				if ($item->query['view'] == 'tsjcdmx_juzgado_acuerdos'OR $view == 'tsjcdmx_juzgado_acuerdos')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'tsjcdmx_sala_acuerdo' OR $view == 'tsjcdmx_sala_acuerdo')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('#__boletin_tsjcdmx_sala_acuerdos'));
								
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
				if ($item->query['view'] == 'tsjcdmx_sala_acuerdos'OR $view == 'tsjcdmx_sala_acuerdos')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'prodecon_bacuerdo' OR $view == 'prodecon_bacuerdo')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('#__boletin_prodecon_bacuerdos'));
								
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
				if ($item->query['view'] == 'prodecon_bacuerdos'OR $view == 'prodecon_bacuerdos')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'profeco_proveedor' OR $view == 'profeco_proveedor')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('#__boletin_profeco_proveedores'));
								
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
				if ($item->query['view'] == 'profeco_proveedores'OR $view == 'profeco_proveedores')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'srsps_bacuerdo' OR $view == 'srsps_bacuerdo')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('#__boletin_srsps_bacuerdos'));
								
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
				if ($item->query['view'] == 'srsps_bacuerdos'OR $view == 'srsps_bacuerdos')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'rsps_bacuerdo' OR $view == 'rsps_bacuerdo')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('#__boletin_rsps_bacuerdos'));
								
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
				if ($item->query['view'] == 'rsps_bacuerdos'OR $view == 'rsps_bacuerdos')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'pjf_bacuerdo' OR $view == 'pjf_bacuerdo')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('#__boletin_pjf_bacuerdos'));
								
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
				if ($item->query['view'] == 'pjf_bacuerdos'OR $view == 'pjf_bacuerdos')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'tfca_bacuerdo' OR $view == 'tfca_bacuerdo')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('#__boletin_tfca_bacuerdos'));
								
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
				if ($item->query['view'] == 'tfca_bacuerdos'OR $view == 'tfca_bacuerdos')
				{
					$vars['view'] = $view;
				}				
				if ($item->query['view'] == 'tfjfa_bacuerdo' OR $view == 'tfjfa_bacuerdo')
				{
					if($advanced)
					{
						$db = JFactory::getDbo();
							
						$query = $db->getQuery(true);
						$query->select($db->quoteName('id'));
						$query->from($db->quoteName('#__boletin_tfjfa_bacuerdos'));
						$query->where($db->quoteName('catid') . ' = ' . (int) $vars['catid']);
								
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
				if ($item->query['view'] == 'tfjfa_bacuerdos'OR $view == 'tfjfa_bacuerdos')
				{
					$vars['view'] = $view;
				}				
			}
		
			$found = 0;
		}
		return $vars;
	}
}