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
 * This models supports retrieving lists of acuerdos de la shcp.
 *
 */
class BoletinModelSrsps_bacuerdos extends JModelList
{
	/**
	 * @var    string	$context	Context string for the model type.  This is used to handle uniqueness within sessions data.
	 */
	protected $context = 'com_boletin.srsps_bacuerdos';

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

		// Check to see if a single secretaría de hacienda y crédito público - sistema del registro de servidores públicos sancionados has been specified either as a parameter or in the url Request
		$pk = $params->get('srsps_bacuerdo_id', '') == '' ? $app->input->getInt('id', '') : $params->get('srsps_bacuerdo_id');
		$this->setState('filter.srsps_bacuerdo_id', $pk);
		
		// List state information
		if ($app->input->getString('layout', 'default') == 'blog')
		{
			$limit = $params->def('srsps_bacuerdo_num_leading', 1) + $params->def('srsps_bacuerdo_num_intro', 4) + $params->def('srsps_bacuerdo_num_links', 4);
		}
		else
		{		
			$limit = $app->getUserStateFromRequest($this->context.'.list.' . $item_id . '.limit', 'limit', $params->get('srsps_bacuerdo_num_per_page'),'integer');
		}
		$this->setState('list.limit', $limit);

		$value = $app->input->get('limitstart', 0, 'uint');
		$this->setState('list.start', $value);

		$search = $app->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');
		$this->setState('filter.search', $search);
		

		$order_col = $app->getUserStateFromRequest($this->context. '.filter_order', 'filter_order', $params->get('srsps_bacuerdo_initial_sort','a.id'), 'string');
		if (!in_array($order_col, $this->filter_fields))
		{
			$order_col = $params->get('srsps_bacuerdo_initial_sort','a.id');
		}

		$this->setState('list.ordering', $order_col);

		$list_order = $app->getUserStateFromRequest($this->context. '.filter_order_Dir', 'filter_order_Dir',  $params->get('srsps_bacuerdo_initial_direction','ASC'), 'cmd');
		if (!in_array(JString::strtoupper($list_order), array('ASC', 'DESC', '')))
		{
			$list_order =  $params->get('srsps_bacuerdo_initial_direction','ASC');
		}
		$this->setState('list.direction', $list_order);
		
				

		
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
		$id .= ':'.serialize($this->getState('filter.srsps_bacuerdo_id'));
		$id .= ':'.$this->getState('filter.srsps_bacuerdo_id.include');				
		

		return parent::getStoreId($id);
	}

	/**
	 * Get the main query for retrieving a list of srsps_bacuerdos subject to the model state.
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


		$query->from($db->quoteName('#__boletin_srsps_bacuerdos').' AS a');



		
		




		
					

		// Filter by a single or group of srsps_bacuerdos.
		$srsps_bacuerdo_id = $this->getState('filter.srsps_bacuerdo_id');
		if ($srsps_bacuerdo_id != '')
		{
			if (is_numeric($srsps_bacuerdo_id))
			{
				$type = $this->getState('filter.srsps_bacuerdo_id.include', true) ? '= ' : '<> ';
				$query->where($db->quoteName('a.id').' '.$type.(int) $srsps_bacuerdo_id);
			}
			else
			{
				if (is_array($srsps_bacuerdo_id))
				{
					JArrayHelper::toInteger($srsps_bacuerdo_id);
					$srsps_bacuerdo_id = implode(',', $srsps_bacuerdo_id);
					$type = $this->getState('filter.srsps_bacuerdo_id.include', true) ? 'IN' : 'NOT IN';
					$query->where($db->quoteName('a.id').' '.$type.' ('.$srsps_bacuerdo_id.')');
				}
			}
		}
		

		// process the filter for list views with user-entered filters
		$params = $this->getState('params');

		if ((is_object($params)) AND ($params->get('show_srsps_bacuerdo_filter_field') != 'hide') AND ($filter = $this->getState('filter.search')))
		{
			// clean filter variable
			$filter = JString::strtolower($filter);

                        $filter_words = $db->escape($filter, true);
			$filter = $db->quote('%'.$db->escape($filter, true).'%', false);
                        $regex = '/\s+/';
                        //$regex = '~\s+~';
                        $words = preg_split($regex, $filter_words, -1, PREG_SPLIT_NO_EMPTY);
                        $where = '('; #comienza where
			switch ($params->get('show_srsps_bacuerdo_filter_field'))
			{
				
				default: // default to 'name' if parameter is not valid
                                    $where .= "\n\tFALSE";

                            break;				
			}
                        $where .= "\n)"; #termina where
                        $query->where($where);
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
	 * Method to get a list of acuerdos de la shcp.
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
		$global_params = JComponentHelper::getParams('com_boletin', true);
		
		if ($items = parent::getItems())
		{
			// Convert the parameter fields into objects.
			foreach ($items as &$item)
			{
				$query->clear();

				$srsps_bacuerdo_params = new Registry;


				
				
				
				
				
				
				
				
				
		
							

				
							
				if (!is_object($this->getState('params')))
				{
					$item->params = $srsps_bacuerdo_params;
				}
				else
				{
					$item->params = clone $this->getState('params');

					// Srsps_bacuerdo params override menu item params only if menu param = 'use_srsps_bacuerdo'
					// Otherwise, menu item params control the layout
					// If menu item is 'use_srsps_bacuerdo' and there is no srsps_bacuerdo param, use global

					// create an array of just the params set to 'use_srsps_bacuerdo'
					$menu_params_array = $this->getState('params')->toArray();
					$srsps_bacuerdo_array = array();

					foreach ($menu_params_array as $key => $value)
					{
						if ($value === 'use_srsps_bacuerdo')
						{
							// if the srsps_bacuerdo has a value, use it
							if ($srsps_bacuerdo_params->get($key) != '')
							{
								// get the value from the srsps_bacuerdo
								$srsps_bacuerdo_array[$key] = $srsps_bacuerdo_params->get($key);
							}
							else
							{
								// otherwise, use the global value
								$srsps_bacuerdo_array[$key] = $global_params->get($key);
							}
						}
					}

					// merge the selected srsps_bacuerdo params
					if (count($srsps_bacuerdo_array) > 0)
					{
						$srsps_bacuerdo_params = new Registry;
						$srsps_bacuerdo_params->loadArray($srsps_bacuerdo_array);
						$item->params->merge($srsps_bacuerdo_params);
					}


					// get display date
					switch ($item->params->get('list_show_srsps_bacuerdo_date'))
					{
						default:
							$item->display_date = 0;
							break;
					}
				}
				// Compute the asset access permissions.
				// Technically guest could edit an srsps_bacuerdo, but lets not check that to improve performance a little.
				if (!$guest) 
				{
					$asset	= 'com_boletin';

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
	
        /*
         * Function that allows download database information
         */
        public function getListQuery4Export($limit = 50, $offset = 0){
            $query = $this->getListQuery();
            $query->setLimit($limit, $offset);
            return $query;
        }
}