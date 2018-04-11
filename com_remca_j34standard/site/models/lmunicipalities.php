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
 * This models supports retrieving lists of municipalities.
 *
 */
class RemcaModelLmunicipalities extends JModelList
{
	/**
	 * @var    string	$context	Context string for the model type.  This is used to handle uniqueness within sessions data.
	 */
	protected $context = 'com_remca.lmunicipalities';

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
				'id_lstate','a.id_lstate',
				's_lstate_name', 's.name',				
				'id_country','a.id_country',
				'c1_country_name', 'c1.name',				
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

		// Check to see if a single municipality has been specified either as a parameter or in the url Request
		$pk = $params->get('lmunicipality_id', '') == '' ? $app->input->getInt('id', '') : $params->get('lmunicipality_id');
		$this->setState('filter.lmunicipality_id', $pk);
		
		// List state information
			$limit = $app->getUserStateFromRequest($this->context.'.list.' . $item_id . '.limit', 'limit', $params->get('lmunicipality_num_per_page'),'integer');
		$this->setState('list.limit', $limit);

		$value = $app->input->get('limitstart', 0, 'uint');
		$this->setState('list.start', $value);

		$search = $app->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');
		$this->setState('filter.search', $search);
		

		$order_col = $app->getUserStateFromRequest($this->context. '.filter_order', 'filter_order', $params->get('lmunicipality_initial_sort','a.ordering'), 'string');
		if (!in_array($order_col, $this->filter_fields))
		{
			$order_col = $params->get('lmunicipality_initial_sort','a.ordering');
		}

		$this->setState('list.ordering', $order_col);

		$list_order = $app->getUserStateFromRequest($this->context. '.filter_order_Dir', 'filter_order_Dir',  $params->get('lmunicipality_initial_direction','ASC'), 'cmd');
		if (!in_array(JString::strtoupper($list_order), array('ASC', 'DESC', '')))
		{
			$list_order =  $params->get('lmunicipality_initial_direction','ASC');
		}
		$this->setState('list.direction', $list_order);
		
		$id_lstate = $app->getUserStateFromRequest($this->context.'.filter.id_lstate', 'filter_id_lstate', 0, 'int');
		$this->setState('filter.id_lstate', $id_lstate);
		$id_country = $app->getUserStateFromRequest($this->context.'.filter.id_country', 'filter_id_country', 0, 'int');
		$this->setState('filter.id_country', $id_country);
				
		$this->setState('filter.published', 1);		

		
		if ($params->get('filter_lmunicipality_archived'))
		{
			$this->setState('filter.archived', $params->get('filter_lmunicipality_archived'));
			
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
		$id	.= ':'.$this->getState('filter.id_lstate');	
		$id	.= ':'.$this->getState('filter.id_country');	
		$id .= ':'.serialize($this->getState('filter.lmunicipality_id'));
		$id .= ':'.$this->getState('filter.lmunicipality_id.include');				
		

		return parent::getStoreId($id);
	}

	/**
	 * Get the main query for retrieving a list of lmunicipalities subject to the model state.
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


		$query->from($db->quoteName('#__rem_lmunicipalities').' AS a');



		
		



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
					// Use lmunicipality state 
					$query->where($db->quoteName('a.state').' IN ('.$published.')');
				}
			}
		}

		
		// Filter by and return name for id_lstate level.
		$query->select($db->quoteName('s.name').' AS s_lstate_name');
		$query->select($db->quoteName('s.ordering').' AS s_lstate_ordering');

		$query->join('LEFT', $db->quoteName('#__rem_lstates').' AS s ON '.$db->quoteName('s.id').' = '.$db->quoteName('a.id_lstate'));	
		// Filter by and return name for id_country level.
		$query->select($db->quoteName('c1.name').' AS c1_country_name');
		$query->select($db->quoteName('c1.ordering').' AS c1_country_ordering');

		$query->join('LEFT', $db->quoteName('#__rem_countries').' AS c1 ON '.$db->quoteName('c1.id').' = '.$db->quoteName('a.id_country'));	
					
		if ($id_lstate = $this->getState('filter.id_lstate'))
		{
			$query->where($db->quoteName('a.id_lstate').' = ' . (int) $id_lstate);
		}	
		if ($id_country = $this->getState('filter.id_country'))
		{
			$query->where($db->quoteName('a.id_country').' = ' . (int) $id_country);
		}	

		// Filter by a single or group of lmunicipalities.
		$lmunicipality_id = $this->getState('filter.lmunicipality_id');
		if ($lmunicipality_id != '')
		{
			if (is_numeric($lmunicipality_id))
			{
				$type = $this->getState('filter.lmunicipality_id.include', true) ? '= ' : '<> ';
				$query->where($db->quoteName('a.id').' '.$type.(int) $lmunicipality_id);
			}
			else
			{
				if (is_array($lmunicipality_id))
				{
					JArrayHelper::toInteger($lmunicipality_id);
					$lmunicipality_id = implode(',', $lmunicipality_id);
					$type = $this->getState('filter.lmunicipality_id.include', true) ? 'IN' : 'NOT IN';
					$query->where($db->quoteName('a.id').' '.$type.' ('.$lmunicipality_id.')');
				}
			}
		}
		

		// process the filter for list views with user-entered filters
		$params = $this->getState('params');

		if ((is_object($params)) AND ($params->get('show_lmunicipality_filter_field') != 'hide') AND ($filter = $this->getState('filter.search')))
		{
			// clean filter variable
			$filter = JString::strtolower($filter);
			$filter = $db->quote('%'.$db->escape($filter, true).'%', false);

			switch ($params->get('show_lmunicipality_filter_field'))
			{
				case 'name':
				default: // default to 'name' if parameter is not valid
					$query->where('LOWER('.$db->quoteName('a.name').') LIKE '.$filter);
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
	 * Method to get a list of municipalities.
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

				$lmunicipality_params = new Registry;


				
				
				
		
							

				
							
				if (!is_object($this->getState('params')))
				{
					$item->params = $lmunicipality_params;
				}
				else
				{
					$item->params = clone $this->getState('params');

					// Lmunicipality params override menu item params only if menu param = 'use_lmunicipality'
					// Otherwise, menu item params control the layout
					// If menu item is 'use_lmunicipality' and there is no lmunicipality param, use global

					// create an array of just the params set to 'use_lmunicipality'
					$menu_params_array = $this->getState('params')->toArray();
					$lmunicipality_array = array();

					foreach ($menu_params_array as $key => $value)
					{
						if ($value === 'use_lmunicipality')
						{
							// if the lmunicipality has a value, use it
							if ($lmunicipality_params->get($key) != '')
							{
								// get the value from the lmunicipality
								$lmunicipality_array[$key] = $lmunicipality_params->get($key);
							}
							else
							{
								// otherwise, use the global value
								$lmunicipality_array[$key] = $global_params->get($key);
							}
						}
					}

					// merge the selected lmunicipality params
					if (count($lmunicipality_array) > 0)
					{
						$lmunicipality_params = new Registry;
						$lmunicipality_params->loadArray($lmunicipality_array);
						$item->params->merge($lmunicipality_params);
					}


					// get display date
					switch ($item->params->get('list_show_lmunicipality_date'))
					{
						default:
							$item->display_date = 0;
							break;
					}
				}


			}
		}
		return $items;
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
			$query->join('INNER', $db->quoteName('#__rem_lmunicipalities').' AS a ON '.$db->quoteName('a.id_lstate').' = '.$db->quoteName('s.id'));
			$query->group($db->quoteName('s.id').', '.
				$db->quoteName('s.name'));
		}


		// Setup the query
		$db->setQuery($query);

		// Return the result
		return $db->loadObjectList();
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
			$query->join('INNER', $db->quoteName('#__rem_lmunicipalities').' AS a ON '.$db->quoteName('a.id_country').' = '.$db->quoteName('c1.id'));
			$query->group($db->quoteName('c1.id').', '.
				$db->quoteName('c1.name'));
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