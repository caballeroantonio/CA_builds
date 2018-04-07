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
 * This models supports retrieving lists of certificado de egresos del libro de certificado de.
 *
 */
class JtcaModelSldepJoc03s extends JModelList
{
	/**
	 * @var    string	$context	Context string for the model type.  This is used to handle uniqueness within sessions data.
	 */
	protected $context = 'com_jtca.sldep_joc03s';

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
				'id_record','a.id_record',
				'id_field','a.id_field',
				'created', 'a.created',
				'created_by', 'a.created_by',
				'created_by_name', 'ua.name',
				'modified', 'a.modified',
				'modified_by', 'a.modified_by',
				'modified_by_name', 'uam.name',	
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

		// Check to see if a single sub libro certificado de egresos del libro de certificado de depósitos de ingresos y egresos has been specified either as a parameter or in the url Request
		$pk = $params->get('sldep_joc03_id', '') == '' ? $app->input->getInt('id', '') : $params->get('sldep_joc03_id');
		$this->setState('filter.sldep_joc03_id', $pk);
		
		// List state information
			$limit = $app->getUserStateFromRequest($this->context.'.list.' . $item_id . '.limit', 'limit', $params->get('sldepjoc03_num_per_page'),'integer');
		$this->setState('list.limit', $limit);

		$value = $app->input->get('limitstart', 0, 'uint');
		$this->setState('list.start', $value);

		$search = $app->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');
		$this->setState('filter.search', $search);
		

		$order_col = $app->getUserStateFromRequest($this->context. '.filter_order', 'filter_order', $params->get('sldepjoc03_initial_sort','a.ordering'), 'string');
		if (!in_array($order_col, $this->filter_fields))
		{
			$order_col = $params->get('sldepjoc03_initial_sort','a.ordering');
		}

		$this->setState('list.ordering', $order_col);

		$list_order = $app->getUserStateFromRequest($this->context. '.filter_order_Dir', 'filter_order_Dir',  $params->get('sldepjoc03_initial_direction','ASC'), 'cmd');
		if (!in_array(JString::strtoupper($list_order), array('ASC', 'DESC', '')))
		{
			$list_order =  $params->get('sldepjoc03_initial_direction','ASC');
		}
		$this->setState('list.direction', $list_order);
		
		$id_record = $app->getUserStateFromRequest($this->context.'.filter.id_record', 'filter_id_record', 0, 'int');
		$this->setState('filter.id_record', $id_record);
		$id_field = $app->getUserStateFromRequest($this->context.'.filter.id_field', 'filter_id_field', 0, 'int');
		$this->setState('filter.id_field', $id_field);
				
		if ((!$user->authorise('core.edit.state', 'com_jtca')) AND  (!$user->authorise('core.edit', 'com_jtca')))
		{
			// filter on status of published for those who do not have edit or edit.state rights.
			$this->setState('filter.published', 1);
		}
		else
		{
			$this->setState('filter.published', array(0, 1, 2));
		}		

		
		if ($params->get('filter_sldepjoc03_archived'))
		{
			$this->setState('filter.archived', $params->get('filter_sldepjoc03_archived'));
			
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
		$id	.= ':'.$this->getState('filter.id_record');	
		$id	.= ':'.$this->getState('filter.id_field');	
		$id .= ':'.serialize($this->getState('filter.sldep_joc03_id'));
		$id .= ':'.$this->getState('filter.sldep_joc03_id.include');				
		

		return parent::getStoreId($id);
	}

	/**
	 * Get the main query for retrieving a list of sldep_joc03s subject to the model state.
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


		$query->from($db->quoteName('jt_sldep_joc03s').' AS a');


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
					// Use sldepjoc03 state 
					$query->where($db->quoteName('a.state').' IN ('.$published.')');
				}
			}
		}

		
					
		if ($id_record = $this->getState('filter.id_record'))
		{
			$id_record = $db->escape(JString::strtolower($id_record), true);			
			$query->where($db->quoteName('a.id_record').' = ' . $db->quote($id_record));
		}	
		if ($id_field = $this->getState('filter.id_field'))
		{
			$id_field = $db->escape(JString::strtolower($id_field), true);			
			$query->where($db->quoteName('a.id_field').' = ' . $db->quote($id_field));
		}	

		// Filter by a single or group of sldep_joc03s.
		$sldep_joc03_id = $this->getState('filter.sldep_joc03_id');
		if ($sldep_joc03_id != '')
		{
			if (is_numeric($sldep_joc03_id))
			{
				$type = $this->getState('filter.sldep_joc03_id.include', true) ? '= ' : '<> ';
				$query->where($db->quoteName('a.id').' '.$type.(int) $sldep_joc03_id);
			}
			else
			{
				if (is_array($sldep_joc03_id))
				{
					JArrayHelper::toInteger($sldep_joc03_id);
					$sldep_joc03_id = implode(',', $sldep_joc03_id);
					$type = $this->getState('filter.sldep_joc03_id.include', true) ? 'IN' : 'NOT IN';
					$query->where($db->quoteName('a.id').' '.$type.' ('.$sldep_joc03_id.')');
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

		if ((is_object($params)) AND ($params->get('show_sldepjoc03_filter_field') != 'hide') AND ($filter = $this->getState('filter.search')))
		{
			// clean filter variable
			$filter = JString::strtolower($filter);
			$filter = $db->quote('%'.$db->escape($filter, true).'%', false);

			switch ($params->get('show_sldepjoc03_filter_field'))
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
	 * Method to get a list of certificado de egresos del libro de certificado de.
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
		$global_params = JComponentHelper::getParams('com_jtca', true);
		
		if ($items = parent::getItems())
		{
			// Convert the parameter fields into objects.
			foreach ($items as &$item)
			{
				$query->clear();

				$sldep_joc03_params = new Registry;


				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
		
							

				
							
				if (!is_object($this->getState('params')))
				{
					$item->params = $sldep_joc03_params;
				}
				else
				{
					$item->params = clone $this->getState('params');

					// SldepJoc03 params override menu item params only if menu param = 'use_sldepjoc03'
					// Otherwise, menu item params control the layout
					// If menu item is 'use_sldepjoc03' and there is no sldepjoc03 param, use global

					// create an array of just the params set to 'use_sldepjoc03'
					$menu_params_array = $this->getState('params')->toArray();
					$sldep_joc03_array = array();

					foreach ($menu_params_array as $key => $value)
					{
						if ($value === 'use_sldepjoc03')
						{
							// if the sldepjoc03 has a value, use it
							if ($sldep_joc03_params->get($key) != '')
							{
								// get the value from the sldepjoc03
								$sldep_joc03_array[$key] = $sldep_joc03_params->get($key);
							}
							else
							{
								// otherwise, use the global value
								$sldep_joc03_array[$key] = $global_params->get($key);
							}
						}
					}

					// merge the selected sldepjoc03 params
					if (count($sldep_joc03_array) > 0)
					{
						$sldep_joc03_params = new Registry;
						$sldep_joc03_params->loadArray($sldep_joc03_array);
						$item->params->merge($sldep_joc03_params);
					}


					// get display date
					switch ($item->params->get('list_show_sldepjoc03_date'))
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
				// Technically guest could edit an sldepjoc03, but lets not check that to improve performance a little.
				if (!$guest) 
				{
					$asset	= 'com_jtca';

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
	/**
	 * Build a list of distinct values in the id_record field
	 *
	 * @return	JDatabaseQuery
	 */
	public function getIdrecordvalues()
	{
				// Create a new query object.
		$db = $this->getDbo();
		$query = $db->getQuery(true);

		// Construct the query
		$query->select('DISTINCT '.$db->quoteName('id_record').' AS value, '.$db->quoteName('id_record').' AS text');
		$query->from($db->quoteName('jt_sldep_joc03s'));
		$query->where($db->quoteName('id_record').' != \'\'');

		$query->order($db->quoteName('id_record'));

		// Setup the query
		$db->setQuery($query);

		// Return the result
		return $db->loadObjectList();

	}				
	/**
	 * Build a list of distinct values in the id_field field
	 *
	 * @return	JDatabaseQuery
	 */
	public function getIdfieldvalues()
	{
				// Create a new query object.
		$db = $this->getDbo();
		$query = $db->getQuery(true);

		// Construct the query
		$query->select('DISTINCT '.$db->quoteName('id_field').' AS value, '.$db->quoteName('id_field').' AS text');
		$query->from($db->quoteName('jt_sldep_joc03s'));
		$query->where($db->quoteName('id_field').' != \'\'');

		$query->order($db->quoteName('id_field'));

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