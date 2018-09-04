<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.site
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: compobjectplural.php 571 2016-01-04 15:03:02Z BrianWade $
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

use Joomla\Registry\Registry;

/**
 * This models supports retrieving lists of favoritos.
 *
 */
class RemcaModelWisheslist extends JModelList
{
	/**
	 * @var    string	$context	Context string for the model type.  This is used to handle uniqueness within sessions data.
	 */
	protected $context = 'com_remca.wisheslist';

	/**
	 * Constructor.
	 *
	 * @param	array	An optional associative array of configuration settings.
	 * 
	 */
	public function __construct($config = array())
	{
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'id', 'a.id',
				'created', 'a.created',
				'created_by', 'a.created_by',
				'created_by_name', 'ua.name',
				'modified', 'a.modified',
				'modified_by', 'a.modified_by',
				'modified_by_name', 'uam.name',	
				);
		}

		parent::__construct($config);
	}
	/**
	 * Method to auto-populate the model state.
	 *
	 * Note. Calling getState in this method will result in recursion.
	 *
	 * @return	void
	 * 
	 */
	protected function populateState($ordering = null, $direction = null)
	{
		$app = JFactory::getApplication();
		// Load the parameters. Merge Global and Menu Item params into new object
		$params = $app->getParams();
		$menu_params = new JRegistry;

		if ($menu = $app->getMenu()->getActive())
		{
			$menu_params->loadString($menu->params);
		}

		$merged_params = clone $menu_params;
		$merged_params->merge($params);

		$this->setState('params', $merged_params);

		$params = $this->state->params;	
		
		$user		= JFactory::getUser();
		
		$item_id = $app->input->getInt('id', 0) . ':' .$app->input->getInt('Itemid', 0);

		// Check to see if a single favorito has been specified either as a parameter or in the url Request
		$pk = $params->get('wishlist_id', '') == '' ? $app->input->getInt('id', '') : $params->get('wishlist_id');
		$this->setState('filter.wishlist_id', $pk);
		
		// List state information
		if ($app->input->getString('layout', 'default') == 'blog')
		{
			$limit = $params->def('wishlist_num_leading', 1) + $params->def('wishlist_num_intro', 4) + $params->def('wishlist_num_links', 4);
		}
		else
		{		
			$limit = $app->getUserStateFromRequest($this->context.'.list.' . $item_id . '.limit', 'limit', $params->get('wishlist_num_per_page'),'integer');
		}
		$this->setState('list.limit', $limit);

		$value = $app->input->get('limitstart', 0, 'uint');
		$this->setState('list.start', $value);

		$search = $app->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');
		$this->setState('filter.search', $search);
		

		$order_col = $app->getUserStateFromRequest($this->context. '.filter_order', 'filter_order', $params->get('wishlist_initial_sort','a.id'), 'string');
		if (!in_array($order_col, $this->filter_fields))
		{
			$order_col = $params->get('wishlist_initial_sort','a.id');
		}

		$this->setState('list.ordering', $order_col);

		$list_order = $app->getUserStateFromRequest($this->context. '.filter_order_Dir', 'filter_order_Dir',  $params->get('wishlist_initial_direction','ASC'), 'cmd');
		if (!in_array(JString::strtoupper($list_order), array('ASC', 'DESC', '')))
		{
			$list_order =  $params->get('wishlist_initial_direction','ASC');
		}
		$this->setState('list.direction', $list_order);
		
				
		if ((!$user->authorise('core.edit.state', 'com_remca')) AND  (!$user->authorise('core.edit', 'com_remca')))
		{
			// filter on status of published for those who do not have edit or edit.state rights.
			$this->setState('filter.published', 1);
		}
		else
		{
			$this->setState('filter.published', array(0, 1, 2));
		}		

		
		if ($params->get('filter_wishlist_archived'))
		{
			$this->setState('filter.archived', $params->get('filter_wishlist_archived'));
			
		}
		$this->setState('layout', $app->input->getString('layout'));
	}

	/**
	 * Method to get a store id based on model configuration state.
	 *
	 * This is necessary because the model is used by the component and
	 * different modules that might need different sets of data or different
	 * ordering requirements.
	 *
	 * @param	string		$id	A prefix for the store id.
	 *
	 * @return	string		A store id.
	 * 
	 */
	protected function getStoreId($id = '')
	{
		// Compile the store id.
		$id .= ':'.$this->getState('filter.search');				
		$id .= ':'.serialize($this->getState('filter.published'));
		$id .= ':'.$this->getState('filter.archived');			
		$id .= ':'.serialize($this->getState('filter.created_by_id'));
		$id .= ':'.$this->getState('filter.created_by_id.include');
		$id .= ':'.$this->getState('filter.created_by_name');
		$id .= ':'.$this->getState('filter.created_by_name.include');	
		$id .= ':'.serialize($this->getState('filter.wishlist_id'));
		$id .= ':'.$this->getState('filter.wishlist_id.include');				
		

		return parent::getStoreId($id);
	}

	/**
	 * Get the main query for retrieving a list of wisheslist subject to the model state.
	 *
	 * @return	JDatabaseQuery
	 * 
	 */
	protected function getListQuery()
	{
		// Get the current user for authorisation checks
		$user	= JFactory::getUser();
		// Create a new query object.
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		$query->where("created_by = '{$user->id}'");
		// Set date values
		$null_date = $db->quote($db->getNullDate());
		$now_date = $db->quote(JFactory::getDate()->toSQL());
		
		// Select the required fields from the table.
		$query->select(
			$this->getState(
					'list.select',
					'a.*'
					)
				);


		$query->from($db->quoteName('#__rem_wisheslist').' AS a');


		$query->select($db->quoteName('ua.name').' AS created_by_name');
		$query->join('LEFT', $db->quoteName('#__users').' AS ua on '.$db->quoteName('ua.id').' = '.$db->quoteName('a.created_by'));

		// use created if modified is 0
		$query->select('CASE WHEN '.$db->quoteName('a.modified').' = ' . $null_date . ' THEN '.$db->quoteName('a.created').' ELSE '.$db->quoteName('a.modified').' END AS modified');
		$query->select($db->quoteName('uam.name').' AS modified_by_name');
		$query->join('LEFT', $db->quoteName('#__users').' AS uam on '.$db->quoteName('uam.id').' = '.$db->quoteName('a.modified_by'));
		
		
		



		// Filter by published status
		$published = $this->getState('filter.published');
		$archived = $this->getState('filter.archived');		
		if (is_numeric($archived))
		{
			$query->where($db->quoteName('a.state').' = '. (int) $archived);
			
		}
		else
		{
			if (is_numeric($published))
			{
				$query->where($db->quoteName('a.state').' = '. (int) $published);
				
			}
			else 
			{
				if (is_array($published))
				{
					JArrayHelper::toInteger($published);
					$published = implode(',', $published);
					// Use wishlist state 
					$query->where($db->quoteName('a.state').' IN ('.$published.')');
				}
			}
		}

		
		// Filter by and return name for id_house level.
		$query->select($db->quoteName('i.name').' AS i_house_name');
		$query->select($db->quoteName('i.ordering').' AS i_house_ordering');

		$query->join('LEFT', $db->quoteName('#__rem_houses').' AS i ON '.$db->quoteName('i.id').' = '.$db->quoteName('a.id_house'));	
					

		// Filter by a single or group of wisheslist.
		$wishlist_id = $this->getState('filter.wishlist_id');
		if ($wishlist_id != '')
		{
			if (is_numeric($wishlist_id))
			{
				$type = $this->getState('filter.wishlist_id.include', true) ? '= ' : '<> ';
				$query->where($db->quoteName('a.id').' '.$type.(int) $wishlist_id);
			}
			else
			{
				if (is_array($wishlist_id))
				{
					JArrayHelper::toInteger($wishlist_id);
					$wishlist_id = implode(',', $wishlist_id);
					$type = $this->getState('filter.wishlist_id.include', true) ? 'IN' : 'NOT IN';
					$query->where($db->quoteName('a.id').' '.$type.' ('.$wishlist_id.')');
				}
			}
		}
		
		// Filter by created_by
		$created_by_id = $this->getState('filter.created_by_id');
		$created_by_where = '';

		if (is_numeric($created_by_id))
		{
			$type = $this->getState('filter.created_by_id.include', true) ? '= ' : '<> ';
			$created_by_where = $db->quoteName('a.created_by').' '.$type.(int) $created_by_id;
		}
		else 
		{
			if (is_array($created_by_id))
			{
				JArrayHelper::toInteger($created_by_id);
				$created_by_id = implode(',', $created_by_id);

				if ($created_by_id)
				{
					$type = $this->getState('filter.created_by_id.include', true) ? 'IN' : 'NOT IN';
					$created_by_where = $db->quoteName('a.created_by').' '.$type.' ('.$created_by_id.')';
				}
			}
		}


		if (!empty($created_by_where) )
		{
			$query->where('('.$created_by_where.')');
		}
		
		// Filter by created_by_name
		$created_by_name = $this->getState('filter.created_by_name');
		$created_by_name_where = '';

		if (is_string($created_by_name))
		{
			$type = $this->getState('filter.created_by_name.include', true) ? '= ' : '<> ';
			$created_by_name_where = $db->quoteName('ua.name').' '.$type.$db->quote($created_by_name);
		}
		else
		{
			if (is_array($created_by_name))
			{
				$first = current($created_by_name);

				if (!empty($first))
				{
					JArrayHelper::toString($created_by_name);

					foreach ($created_by_name as $key => $alias)
					{
						$created_by_name[$key] = $db->quote($alias);
					}

					$created_by_name = implode(',', $created_by_name);

					if ($created_by_name)
					{
						$type = $this->getState('filter.created_by_name.include', true) ? 'IN' : 'NOT IN';
						$created_by_name_where = $db->quoteName('ua.name').' '.$type.' ('.$created_by_name .
							')';
					}
				}
			}
		}

		if (!empty($created_by_name_where) )
		{
			$query->where('('.$created_by_name_where.')');
		}

		// process the filter for list views with user-entered filters
		$params = $this->getState('params');

		if ((is_object($params)) AND ($params->get('show_wishlist_filter_field') != 'hide') AND ($filter = $this->getState('filter.search')))
		{
			// clean filter variable
			$filter = JString::strtolower($filter);
			$filter = $db->quote('%'.$db->escape($filter, true).'%', false);

			switch ($params->get('show_wishlist_filter_field'))
			{
				case 'created_by':
					$query->where('LOWER('.$db->quoteName('ua.name').') LIKE '.$filter.' ');
					break;	
				default:
					break;
				
			}
		}

		// Add the list ordering clause.
		if (is_object($params))
		{
			$initial_sort = $params->get('field_initial_sort');
		}
		else
		{
			$initial_sort = '';
		}
		// Fall back to old style if the parameter hasn't been set yet.
		if (empty($initial_sort) OR $this->getState('list.ordering') != '')
		{
			$order_col	= '';
			$order_dirn	= $this->getState('list.direction');

			// Allow for multi field order (routines defining these must cater for quotes on field names	
			if (strpos($this->getState('list.ordering'),',') !== False)
			{
				$order_col = trim($this->getState('list.ordering'));
			}			
		


			if ($order_col == '')
			{
				$order_col = is_string($this->getState('list.ordering')) ? $db->quoteName($this->getState('list.ordering')) : $db->quoteName('a.id');
				$order_col .= ' '.$order_dirn;
			}
			$query->order($db->escape($order_col));			
					
		}
		else
		{
			$query->order($db->quoteName('a.'.$initial_sort).' '.$db->escape($this->getState('list.direction', 'ASC')));
			
		}	
		return $query;
	}

	/**
	 * Method to get a list of favoritos.
	 *
	 * Overriden to inject convert the params fields into an object.
	 *
	 * @return	mixed	An array of objects on success, false on failure.
	 * 
	 */
	public function getItems()
	{
		$db = $this->getDbo();
  		$query = $db->getQuery(true);
		
		$user	= JFactory::getUser();
		$user_id	= $user->get('id');
		$guest	= $user->get('guest');

		// Get the global params
		$global_params = JComponentHelper::getParams('com_remca', true);
		
		if ($items = parent::getItems())
		{
			// Convert the parameter fields into objects.
			foreach ($items as &$item)
			{
				$query->clear();

				$wishlist_params = new Registry;


				
				
		
							

				
							
				if (!is_object($this->getState('params')))
				{
					$item->params = $wishlist_params;
				}
				else
				{
					$item->params = clone $this->getState('params');

					// Wishlist params override menu item params only if menu param = 'use_wishlist'
					// Otherwise, menu item params control the layout
					// If menu item is 'use_wishlist' and there is no wishlist param, use global

					// create an array of just the params set to 'use_wishlist'
					$menu_params_array = $this->getState('params')->toArray();
					$wishlist_array = array();

					foreach ($menu_params_array as $key => $value)
					{
						if ($value === 'use_wishlist')
						{
							// if the wishlist has a value, use it
							if ($wishlist_params->get($key) != '')
							{
								// get the value from the wishlist
								$wishlist_array[$key] = $wishlist_params->get($key);
							}
							else
							{
								// otherwise, use the global value
								$wishlist_array[$key] = $global_params->get($key);
							}
						}
					}

					// merge the selected wishlist params
					if (count($wishlist_array) > 0)
					{
						$wishlist_params = new Registry;
						$wishlist_params->loadArray($wishlist_array);
						$item->params->merge($wishlist_params);
					}


					// get display date
					switch ($item->params->get('list_show_wishlist_date'))
					{
						case 'modified':
							$item->display_date = $item->modified;
							break;
						case 'created':
							$item->display_date = $item->created;
							break;
						default:
							$item->display_date = 0;
							break;
					}
				}
				// Compute the asset access permissions.
				// Technically guest could edit an wishlist, but lets not check that to improve performance a little.
				if (!$guest) 
				{
					$asset	= 'com_remca';

					// Check general edit permission first.
					if ($user->authorise('core.edit', $asset))
					{
						$item->params->set('access-edit', true);
					}
					// Now check if edit.own is available.
					else
					{ 
						if (!empty($user_id) AND $user->authorise('core.edit.own', $asset)) 
						{
							// Check for a valid user and that they are the owner.
							if ($user_id == $item->created_by) 
							{
								$item->params->set('access-edit', true);
							}
						}
					}
					if ($user->authorise('core.create', $asset))
					{
						$item->params->set('access-create', true);
					}	
						
					
					if ($user->authorise('core.delete', $asset)) 
					{
						$item->params->set('access-delete', true);
					}
					// Now check if delete.own is available.
					else
					{ 
						if (!empty($user_id) AND $user->authorise('core.delete.own', $asset)) 
						{
							// Check for a valid user and that they are the owner.
							if ($user_id == $item->created_by) 
							{
								$item->params->set('access-delete', true);
							}
						}
					}
				}


			}
		}
		return $items;
	}
	
        /*
         * Function that allows download database information
         */
        public function getListQuery4Export($limit = 50, $offset = 0){
            $query = $this->getListQuery();
            $query->setLimit($limit, $offset);
            return $query;
        }
}