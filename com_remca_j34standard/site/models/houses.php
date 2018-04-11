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
 * This models supports retrieving lists of houses.
 *
 */
class RemcaModelHouses extends JModelList
{
	/**
	 * @var    string	$context	Context string for the model type.  This is used to handle uniqueness within sessions data.
	 */
	protected $context = 'com_remca.houses';

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
				'name', 'a.name',
				'id_country','a.id_country',
				'c1_country_name', 'c1.name',				
				'id_lstate','a.id_lstate',
				's_lstate_name', 's.name',				
				'id_lmunicipality','a.id_lmunicipality',
				'm_lmunicipality_name', 'm.name',				
				'checked_out', 'a.checked_out',
				'checked_out_time', 'a.checked_out_time',
				'catid', 'a.catid', 'category_title',
				'featured', 'a.featured',
				'language', 'a.language',
				'hits', 'a.hits',
				'rating',
				'ordering', 'a.ordering',
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

		// Check to see if a single house has been specified either as a parameter or in the url Request
		$pk = $params->get('house_id', '') == '' ? $app->input->getInt('id', '') : $params->get('house_id');
		$this->setState('filter.house_id', $pk);
		
		// List state information
		if ($app->input->getString('layout', 'default') == 'blog')
		{
			$limit = $params->def('house_num_leading', 1) + $params->def('house_num_intro', 4) + $params->def('house_num_links', 4);
		}
		else
		{		
			$limit = $app->getUserStateFromRequest($this->context.'.list.' . $item_id . '.limit', 'limit', $params->get('house_num_per_page'),'integer');
		}
		$this->setState('list.limit', $limit);

		$value = $app->input->get('limitstart', 0, 'uint');
		$this->setState('list.start', $value);

		$search = $app->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');
		$this->setState('filter.search', $search);
		
		$category_id = $app->getUserStateFromRequest($this->context.'.filter.category_id', 'filter_category_id');
		$this->setState('filter.category_id', $category_id);		

		$order_col = $app->getUserStateFromRequest($this->context. '.filter_order', 'filter_order', $params->get('house_initial_sort','a.ordering'), 'string');
		if (!in_array($order_col, $this->filter_fields))
		{
			$order_col = $params->get('house_initial_sort','a.ordering');
		}

		$this->setState('list.ordering', $order_col);

		$list_order = $app->getUserStateFromRequest($this->context. '.filter_order_Dir', 'filter_order_Dir',  $params->get('house_initial_direction','ASC'), 'cmd');
		if (!in_array(JString::strtoupper($list_order), array('ASC', 'DESC', '')))
		{
			$list_order =  $params->get('house_initial_direction','ASC');
		}
		$this->setState('list.direction', $list_order);
		
		$id_country = $app->getUserStateFromRequest($this->context.'.filter.id_country', 'filter_id_country', 0, 'int');
		$this->setState('filter.id_country', $id_country);
		$id_lstate = $app->getUserStateFromRequest($this->context.'.filter.id_lstate', 'filter_id_lstate', 0, 'int');
		$this->setState('filter.id_lstate', $id_lstate);
		$id_lmunicipality = $app->getUserStateFromRequest($this->context.'.filter.id_lmunicipality', 'filter_id_lmunicipality', 0, 'int');
		$this->setState('filter.id_lmunicipality', $id_lmunicipality);
				
		if ((!$user->authorise('core.edit.state', 'com_remca')) AND  (!$user->authorise('core.edit', 'com_remca')))
		{
			// filter on status of published for those who do not have edit or edit.state rights.
			$this->setState('filter.published', 1);
		}
		else
		{
			$this->setState('filter.published', array(0, 1, 2));
		}		

		$this->setState('filter.language',JLanguageMultilang::isEnabled());
		
		// check for category selection
		if ($params->get('filter_house_categories') AND implode(',', $params->get('filter_house_categories'))  == true)
		{
			$selected_categories = $params->get('filter_house_categories');
			$this->setState('filter.category_id', $selected_categories);
		}			
		if ($params->get('filter_house_featured') <> "")
		{
			$this->setState('filter.featured', $params->get('filter_house_featured'));
			
		}
		if ($params->get('filter_house_archived'))
		{
			$this->setState('filter.archived', $params->get('filter_house_archived'));
			
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
		$id .= ':'.$this->getState('filter.featured');
		$id .= ':'.serialize($this->getState('filter.category_id'));
		$id .= ':'.serialize($this->getState('filter.category_id.include'));
		$id	.= ':'.$this->getState('filter.id_country');	
		$id	.= ':'.$this->getState('filter.id_lstate');	
		$id	.= ':'.$this->getState('filter.id_lmunicipality');	
		$id .= ':'.serialize($this->getState('filter.house_id'));
		$id .= ':'.$this->getState('filter.house_id.include');				
		

		return parent::getStoreId($id);
	}

	/**
	 * Get the main query for retrieving a list of houses subject to the model state.
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


		$query->from($db->quoteName('#__rem_houses').' AS a');
		// Join over the categories.
		$query->select($db->quoteName('c.title').' AS category_title, '.
						$db->quoteName('c.alias').' AS category_alias, '.	
						$db->quoteName('c.access').' AS category_access, '.
						$db->quoteName('c.path').' AS category_route'
		);
		$query->join('LEFT', $db->quoteName('#__categories').' AS c ON '.$db->quoteName('c.id').' = '.$db->quoteName('a.catid'));
		// Join over the categories to get parent category titles
		$query->select($db->quoteName('parent.title').' AS parent_title, '.
						$db->quoteName('parent.id').' AS parent_id, '.
						$db->quoteName('parent.alias').' AS parent_alias, '.
						$db->quoteName('parent.path').' AS parent_route'
		);
		$query->join('LEFT', $db->quoteName('#__categories').' as parent ON '.$db->quoteName('parent.id').' = '.$db->quoteName('c.parent_id'));



		
			// Filter by language
		if ($this->getState('filter.language'))
		{
			$query->where($db->quoteName('a.language').' IN (' . $db->quote(JFactory::getLanguage()->getTag()) . ',' . $db->quote('*') . ')');
		}
		
		// Join on vote rating table
		$query->select('ROUND('.$db->quoteName('v.rating_sum').' / '.$db->quoteName('v.rating_count').', 0) AS rating, '.$db->quoteName('v.rating_count').' as rating_count');
		$query->join('LEFT', $db->quoteName('#__rem_rating').' AS v ON '.$db->quoteName('a.id').' = '.$db->quoteName('v.content_id').' AND '.$db->quoteName('v.content_type').' = '.$db->quote('houses'));



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
					// Use house state 
					$query->where($db->quoteName('a.state').' IN ('.$published.')');
				}
			}
		}

		// Filter by featured state
		$featured = $this->getState('filter.featured');
		switch ($featured)
		{
			case '0':
				$query->where($db->quoteName('a.featured').' = 0');
				break;

			case '1':
				$query->where($db->quoteName('a.featured').' = 1');
				break;

			default:
				// Normally we do not discriminate
				// between featured/unfeatured items.
				break;
		}
		
		// Filter by and return name for id_country level.
		$query->select($db->quoteName('c1.name').' AS c1_country_name');
		$query->select($db->quoteName('c1.ordering').' AS c1_country_ordering');

		$query->join('LEFT', $db->quoteName('#__rem_countries').' AS c1 ON '.$db->quoteName('c1.id').' = '.$db->quoteName('a.id_country'));	
		// Filter by and return name for id_lstate level.
		$query->select($db->quoteName('s.name').' AS s_lstate_name');
		$query->select($db->quoteName('s.ordering').' AS s_lstate_ordering');

		$query->join('LEFT', $db->quoteName('#__rem_lstates').' AS s ON '.$db->quoteName('s.id').' = '.$db->quoteName('a.id_lstate'));	
		// Filter by and return name for id_lmunicipality level.
		$query->select($db->quoteName('m.name').' AS m_lmunicipality_name');
		$query->select($db->quoteName('m.ordering').' AS m_lmunicipality_ordering');

		$query->join('LEFT', $db->quoteName('#__rem_lmunicipalities').' AS m ON '.$db->quoteName('m.id').' = '.$db->quoteName('a.id_lmunicipality'));	
		// Filter by and return name for id_rent level.
		$query->select($db->quoteName('r.name').' AS r_rent_name');
		$query->select($db->quoteName('r.id').' AS r_rent_id');

		$query->join('LEFT', $db->quoteName('#__rem_rents').' AS r ON '.$db->quoteName('r.id').' = '.$db->quoteName('a.id_rent'));	
		// Filter by and return name for owner_id level.
		$query->select($db->quoteName('u.name').' AS u_user_name');
		$query->select($db->quoteName('u.id').' AS u_user_id');

		$query->join('LEFT', $db->quoteName('#__users').' AS u ON '.$db->quoteName('u.id').' = '.$db->quoteName('a.owner_id'));	
					
		if ($id_country = $this->getState('filter.id_country'))
		{
			$query->where($db->quoteName('a.id_country').' = ' . (int) $id_country);
		}	
		if ($id_lstate = $this->getState('filter.id_lstate'))
		{
			$query->where($db->quoteName('a.id_lstate').' = ' . (int) $id_lstate);
		}	
		if ($id_lmunicipality = $this->getState('filter.id_lmunicipality'))
		{
			$query->where($db->quoteName('a.id_lmunicipality').' = ' . (int) $id_lmunicipality);
		}	

		// Filter by a single or group of houses.
		$house_id = $this->getState('filter.house_id');
		if ($house_id != '')
		{
			if (is_numeric($house_id))
			{
				$type = $this->getState('filter.house_id.include', true) ? '= ' : '<> ';
				$query->where($db->quoteName('a.id').' '.$type.(int) $house_id);
			}
			else
			{
				if (is_array($house_id))
				{
					JArrayHelper::toInteger($house_id);
					$house_id = implode(',', $house_id);
					$type = $this->getState('filter.house_id.include', true) ? 'IN' : 'NOT IN';
					$query->where($db->quoteName('a.id').' '.$type.' ('.$house_id.')');
				}
			}
		}
		// Filter by a single or group of categories
		$category_id = $this->getState('filter.category_id');

		if (is_numeric($category_id))
		{
			$type = $this->getState('filter.category_id.include', true) ? '= ' : '<> ';

			// Add subcategory check
			$include_sub_categories = $this->getState('filter.subcategories', false);
			$category_equals = $db->quoteName('a.catid').' '.$type.(int) $category_id;

			if ($include_sub_categories)
			{
				$levels = (int) $this->getState('filter.max_category_levels', '1');
				// Create a subquery for the subcategory list
				$sub_query = $db->getQuery(true);
				$sub_query->select($db->quoteName('sub.id'));
				$sub_query->from($db->quoteName('#__categories').' as sub');
				$sub_query->join('INNER', $db->quoteName('#__categories').' as this ON '.$db->quoteName('sub.lft').' > '.$db->quoteName('this.lft').' AND '.$db->quoteName('sub.rgt').' < '.$db->quoteName('this.rgt'));
				$sub_query->where($db->quoteName('this.id').' = '.(int) $category_id);
				$sub_query->where($db->quoteName('sub.level').' <= '.$db->quoteName('this.level').' + '.$levels);

				// Add the subquery to the main query
				$query->where('('.$category_equals.' OR '.$db->quoteName('a.catid').' IN ('.$sub_query->__toString().'))');
			}
			else
			{
				$query->where($category_equals);
			}
		}
		else
		{
			if (is_array($category_id) AND (count($category_id) > 0))
			{
				JArrayHelper::toInteger($category_id);
				$category_id = implode(',', $category_id);
				if (!empty($category_id))
				{
					$type = $this->getState('filter.category_id.include', true) ? 'IN' : 'NOT IN';
					$query->where($db->quoteName('a.catid').' '.$type.' ('.$category_id.')');
				}
			}
		}
		

		// process the filter for list views with user-entered filters
		$params = $this->getState('params');

		if ((is_object($params)) AND ($params->get('show_house_filter_field') != 'hide') AND ($filter = $this->getState('filter.search')))
		{
			// clean filter variable
			$filter = JString::strtolower($filter);
			$hits_filter = (int) $filter;
			$filter = $db->quote('%'.$db->escape($filter, true).'%', false);

			switch ($params->get('show_house_filter_field'))
			{
				case 'hits':
					$query->where($db->quoteName('a.hits').' >= '.(int) $hits_filter.' ');
					break;
				case 'name':
				default: // default to 'name' if parameter is not valid
					$query->where('LOWER('.$db->quoteName('a.name').') LIKE '.$filter);
					break;
				
			}
		}
		// Filter by language
		if ($this->getState('filter.language'))
		{
			$query->where($db->quoteName('a.language').' IN ('.$db->quote(JFactory::getLanguage()->getTag()).','.$db->quote('*').')');
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
		
			if ($this->getState('list.ordering') == 'category_title')
			{
				$order_col = $db->quoteName('c.title').' '.$order_dirn.', '.$db->quoteName('a.ordering');
			}		


			if ($this->getState('list.ordering') == 'a.ordering' OR $this->getState('list.ordering') == 'ordering')
			{
				$order_col	= '';
				$order_col	.= $db->quoteName('a.ordering').' '.$order_dirn;		
			}

			if ($order_col == '')
			{
				$order_col = is_string($this->getState('list.ordering')) ? $db->quoteName($this->getState('list.ordering')) : $db->quoteName('a.ordering');
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
	 * Method to get a list of houses.
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

				$house_params = new Registry;

				// Convert the images field to an array.
				$registry = new Registry;
				$registry->loadString($item->images);
				$item->images = $registry->toArray();
				$registry = null; //release memory	

				
				
				
				
				
				
				
				
				
				
				
				if (isset($item->id_currency) AND $item->id_currency !='')
				{
					$sql = 'SELECT '.$db->quoteName('list.currency').' AS value FROM (SELECT id, CONCAT_WS(\' - \', iso2, currency) \'currency\' FROM #__rem_countries WHERE published_cur) AS list';
					$sql .= ' WHERE '.$db->quoteName('list.id').' IN ('.JString::trim($item->id_currency, ',').');';
					$db->setQuery($sql);				
					$item->id_currency = $db->loadResult();
				}
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
		
							

				
							
				if (!is_object($this->getState('params')))
				{
					$item->params = $house_params;
				}
				else
				{
					$item->params = clone $this->getState('params');

					// House params override menu item params only if menu param = 'use_house'
					// Otherwise, menu item params control the layout
					// If menu item is 'use_house' and there is no house param, use global

					// create an array of just the params set to 'use_house'
					$menu_params_array = $this->getState('params')->toArray();
					$house_array = array();

					foreach ($menu_params_array as $key => $value)
					{
						if ($value === 'use_house')
						{
							// if the house has a value, use it
							if ($house_params->get($key) != '')
							{
								// get the value from the house
								$house_array[$key] = $house_params->get($key);
							}
							else
							{
								// otherwise, use the global value
								$house_array[$key] = $global_params->get($key);
							}
						}
					}

					// merge the selected house params
					if (count($house_array) > 0)
					{
						$house_params = new Registry;
						$house_params->loadArray($house_array);
						$item->params->merge($house_params);
					}


					// get display date
					switch ($item->params->get('list_show_house_date'))
					{
						default:
							$item->display_date = 0;
							break;
					}
				}
				// Compute the asset access permissions.
				// Technically guest could edit an house, but lets not check that to improve performance a little.
				if (!$guest) 
				{
					$asset	= 'com_remca.house.'.$item->id;

					// Check general edit permission first.
					if ($user->authorise('core.edit', $asset))
					{
						$item->params->set('access-edit', true);
					}
					if ($user->authorise('core.create', $asset))
					{
						$item->params->set('access-create', true);
					}	
						
					
					if ($user->authorise('core.delete', $asset)) 
					{
						$item->params->set('access-delete', true);
					}
				}


			}
		}
		return $items;
	}
	/**
	 * Build a list of countries
	 *
	 * @return	JDatabaseQuery
	 */
	public function getCountries()
	{
		// Create a new query object.
		$db = $this->getDbo();
		$query = $db->getQuery(true);

		$params = JFactory::getApplication()->getParams();
		$group_filter = $params->get('group_filters');
		
		// Construct the query
		$query->select($db->quoteName('c1.id').' AS value');
		
		if(!$group_filter)
			$query->select($db->quoteName('c1.name').' AS text');
		else
			$query->select('CONCAT('.$db->quoteName('c1.name').', " (", count(*), ")")  AS text');
			
		$query->from($db->quoteName('#__rem_countries').' AS c1');
		$query->where($db->quoteName('c1.name').' != \'\'');
		
		#only if FO have state
		$query->where('c1.state = 1');
									   
		$query->order($db->quoteName('c1.name'));

		if($group_filter){
			$query->where($db->quoteName('a.id_country').' != 0');
			// Filter by language
			if ($this->getState('filter.language'))
			{
				$query->where($db->quoteName('a.language').' IN ('.$db->quote(JFactory::getLanguage()->getTag()).','.$db->quote('*').')');
			}
			$query->join('INNER', $db->quoteName('#__rem_houses').' AS a ON '.$db->quoteName('a.id_country').' = '.$db->quoteName('c1.id'));
			$query->group($db->quoteName('c1.id').', '.
				$db->quoteName('c1.name'));
		}


		// Setup the query
		$db->setQuery($query);

		// Return the result
		return $db->loadObjectList();
	}
	/**
	 * Build a list of lstates
	 *
	 * @return	JDatabaseQuery
	 */
	public function getLstates()
	{
		// Create a new query object.
		$db = $this->getDbo();
		$query = $db->getQuery(true);

		$params = JFactory::getApplication()->getParams();
		$group_filter = $params->get('group_filters');
		
		// Construct the query
		$query->select($db->quoteName('s.id').' AS value');
		
		if(!$group_filter)
			$query->select($db->quoteName('s.name').' AS text');
		else
			$query->select('CONCAT('.$db->quoteName('s.name').', " (", count(*), ")")  AS text');
			
		$query->from($db->quoteName('#__rem_lstates').' AS s');
		$query->where($db->quoteName('s.name').' != \'\'');
		
		#only if FO have state
		$query->where('s.state = 1');
									   
		$query->order($db->quoteName('s.name'));

		if($group_filter){
			$query->where($db->quoteName('a.id_lstate').' != 0');
			// Filter by language
			if ($this->getState('filter.language'))
			{
				$query->where($db->quoteName('a.language').' IN ('.$db->quote(JFactory::getLanguage()->getTag()).','.$db->quote('*').')');
			}
			$query->join('INNER', $db->quoteName('#__rem_houses').' AS a ON '.$db->quoteName('a.id_lstate').' = '.$db->quoteName('s.id'));
			$query->group($db->quoteName('s.id').', '.
				$db->quoteName('s.name'));
		}


		// Setup the query
		$db->setQuery($query);

		// Return the result
		return $db->loadObjectList();
	}
	/**
	 * Build a list of lmunicipalities
	 *
	 * @return	JDatabaseQuery
	 */
	public function getLmunicipalities()
	{
		// Create a new query object.
		$db = $this->getDbo();
		$query = $db->getQuery(true);

		$params = JFactory::getApplication()->getParams();
		$group_filter = $params->get('group_filters');
		
		// Construct the query
		$query->select($db->quoteName('m.id').' AS value');
		
		if(!$group_filter)
			$query->select($db->quoteName('m.name').' AS text');
		else
			$query->select('CONCAT('.$db->quoteName('m.name').', " (", count(*), ")")  AS text');
			
		$query->from($db->quoteName('#__rem_lmunicipalities').' AS m');
		$query->where($db->quoteName('m.name').' != \'\'');
		
		#only if FO have state
		$query->where('m.state = 1');
									   
		$query->order($db->quoteName('m.name'));

		if($group_filter){
			$query->where($db->quoteName('a.id_lmunicipality').' != 0');
			// Filter by language
			if ($this->getState('filter.language'))
			{
				$query->where($db->quoteName('a.language').' IN ('.$db->quote(JFactory::getLanguage()->getTag()).','.$db->quote('*').')');
			}
			$query->join('INNER', $db->quoteName('#__rem_houses').' AS a ON '.$db->quoteName('a.id_lmunicipality').' = '.$db->quoteName('m.id'));
			$query->group($db->quoteName('m.id').', '.
				$db->quoteName('m.name'));
		}


		// Setup the query
		$db->setQuery($query);

		// Return the result
		return $db->loadObjectList();
	}
	
        /*
         * Function that allows download database information
         * @ToDo implementar generación de código
         */
        public function getListQuery4Export(){
            $this->getDbo()->setQuery($this->getListQuery(), $this->getStart(), $this->getState('list.limit'));
            return $this->getDbo()->getQuery();
        }
}