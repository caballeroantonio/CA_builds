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
 * This models supports retrieving lists of entradas conversaciones wtsapp .
 *
 */
class RemcaModelWa_entry_conversations extends JModelList
{
	/**
	 * @var    string	$context	Context string for the model type.  This is used to handle uniqueness within sessions data.
	 */
	protected $context = 'com_remca.wa_entry_conversations';

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
				'action','a.action',
				'catid', 'a.catid', 'category_title',
				'created', 'a.created',
				'created_by', 'a.created_by',
				'created_by_name', 'ua.name',
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

		// Check to see if a single entrada de la conversación whatsapp has been specified either as a parameter or in the url Request
		$pk = $params->get('wa_entry_conversation_id', '') == '' ? $app->input->getInt('id', '') : $params->get('wa_entry_conversation_id');
		$this->setState('filter.wa_entry_conversation_id', $pk);
		
		// List state information
		if ($app->input->getString('layout', 'default') == 'blog')
		{
			$limit = $params->def('wa_entry_conversation_num_leading', 1) + $params->def('wa_entry_conversation_num_intro', 4) + $params->def('wa_entry_conversation_num_links', 4);
		}
		else
		{		
			$limit = $app->getUserStateFromRequest($this->context.'.list.' . $item_id . '.limit', 'limit', $params->get('wa_entry_conversation_num_per_page'),'integer');
		}
		$this->setState('list.limit', $limit);

		$value = $app->input->get('limitstart', 0, 'uint');
		$this->setState('list.start', $value);

		$search = $app->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');
		$this->setState('filter.search', $search);
		
		$category_id = $app->getUserStateFromRequest($this->context.'.filter.category_id', 'filter_category_id');
		$this->setState('filter.category_id', $category_id);		

		$order_col = $app->getUserStateFromRequest($this->context. '.filter_order', 'filter_order', $params->get('wa_entry_conversation_initial_sort','a.ordering'), 'string');
		if (!in_array($order_col, $this->filter_fields))
		{
			$order_col = $params->get('wa_entry_conversation_initial_sort','a.ordering');
		}

		$this->setState('list.ordering', $order_col);

		$list_order = $app->getUserStateFromRequest($this->context. '.filter_order_Dir', 'filter_order_Dir',  $params->get('wa_entry_conversation_initial_direction','ASC'), 'cmd');
		if (!in_array(JString::strtoupper($list_order), array('ASC', 'DESC', '')))
		{
			$list_order =  $params->get('wa_entry_conversation_initial_direction','ASC');
		}
		$this->setState('list.direction', $list_order);
		
		$action = $app->getUserStateFromRequest($this->context.'.filter.action', 'filter_action', '', 'string');
		$this->setState('filter.action', $action);
				
		if ((!$user->authorise('core.edit.state', 'com_remca')) AND  (!$user->authorise('core.edit', 'com_remca')))
		{
			// filter on status of published for those who do not have edit or edit.state rights.
			$this->setState('filter.published', 1);
		}
		else
		{
			$this->setState('filter.published', array(0, 1, 2));
		}		

		
		// check for category selection
		if ($params->get('filter_wa_entry_conversation_categories') AND implode(',', $params->get('filter_wa_entry_conversation_categories'))  == true)
		{
			$selected_categories = $params->get('filter_wa_entry_conversation_categories');
			$this->setState('filter.category_id', $selected_categories);
		}			
		if ($params->get('filter_wa_entry_conversation_archived'))
		{
			$this->setState('filter.archived', $params->get('filter_wa_entry_conversation_archived'));
			
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
		$id .= ':'.serialize($this->getState('filter.category_id'));
		$id .= ':'.serialize($this->getState('filter.category_id.include'));
		$id .= ':'.serialize($this->getState('filter.created_by_id'));
		$id .= ':'.$this->getState('filter.created_by_id.include');
		$id .= ':'.$this->getState('filter.created_by_name');
		$id .= ':'.$this->getState('filter.created_by_name.include');	
		$id	.= ':'.$this->getState('filter.action');	
		$id .= ':'.serialize($this->getState('filter.wa_entry_conversation_id'));
		$id .= ':'.$this->getState('filter.wa_entry_conversation_id.include');				
		

		return parent::getStoreId($id);
	}

	/**
	 * Get the main query for retrieving a list of wa_entry_conversations subject to the model state.
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


		$query->from($db->quoteName('#__rem_wa_entry_conversations').' AS a');
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


		$query->select($db->quoteName('ua.name').' AS created_by_name');
		$query->join('LEFT', $db->quoteName('#__users').' AS ua on '.$db->quoteName('ua.id').' = '.$db->quoteName('a.created_by'));

		
		



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
					// Use wa_entry_conversation state 
					$query->where($db->quoteName('a.state').' IN ('.$published.')');
				}
			}
		}

		
					
		if ($action = $this->getState('filter.action'))
		{
			$action = $db->escape(JString::strtolower($action), true);			
			$query->where($db->quoteName('a.action').' = ' . $db->quote($action));
		}	

		// Filter by a single or group of wa_entry_conversations.
		$wa_entry_conversation_id = $this->getState('filter.wa_entry_conversation_id');
		if ($wa_entry_conversation_id != '')
		{
			if (is_numeric($wa_entry_conversation_id))
			{
				$type = $this->getState('filter.wa_entry_conversation_id.include', true) ? '= ' : '<> ';
				$query->where($db->quoteName('a.id').' '.$type.(int) $wa_entry_conversation_id);
			}
			else
			{
				if (is_array($wa_entry_conversation_id))
				{
					JArrayHelper::toInteger($wa_entry_conversation_id);
					$wa_entry_conversation_id = implode(',', $wa_entry_conversation_id);
					$type = $this->getState('filter.wa_entry_conversation_id.include', true) ? 'IN' : 'NOT IN';
					$query->where($db->quoteName('a.id').' '.$type.' ('.$wa_entry_conversation_id.')');
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

		if ((is_object($params)) AND ($params->get('show_wa_entry_conversation_filter_field') != 'hide') AND ($filter = $this->getState('filter.search')))
		{
			// clean filter variable
			$filter = JString::strtolower($filter);

                        $filter_words = $db->escape($filter, true);
			$filter = $db->quote('%'.$db->escape($filter, true).'%', false);
                        $regex = '/\s+/';
                        //$regex = '~\s+~';
                        $words = preg_split($regex, $filter_words, -1, PREG_SPLIT_NO_EMPTY);
                        $where = '('; #comienza where
			switch ($params->get('show_wa_entry_conversation_filter_field'))
			{
				
				default: // default to 'name' if parameter is not valid
                                    $where .= "\n\tFALSE";
                                    $where .= "\n OR";
                                    #description
                                    $where .= "\n\t( 1"; #begin word in description
                                    foreach ($words AS $word){
                                        $where .= "\n\t AND ".$db->quoteName('a.description')." LIKE '%{$word}%'";
                                    }
                                    $where .= "\n\t)"; #end word in description

                                    $where .= "\n OR";
                                    #phone
                                    $where .= "\n\t( 1"; #begin word in phone
                                    foreach ($words AS $word){
                                        $where .= "\n\t AND ".$db->quoteName('a.phone')." LIKE '%{$word}%'";
                                    }
                                    $where .= "\n\t)"; #end word in phone
                                    $where .= "\n OR";
                                    #id_wa_title_conversation
                                    $where .= "\n\t( 1"; #begin word in id_wa_title_conversation
                                    foreach ($words AS $word){
                                        $where .= "\n\t AND ".$db->quoteName('a.id_wa_title_conversation')." LIKE '%{$word}%'";
                                    }
                                    $where .= "\n\t)"; #end word in id_wa_title_conversation
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
	 * Method to get a list of entradas conversaciones wtsapp .
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

				$wa_entry_conversation_params = new Registry;


				
				
				
				
		
							

				
							
				if (!is_object($this->getState('params')))
				{
					$item->params = $wa_entry_conversation_params;
				}
				else
				{
					$item->params = clone $this->getState('params');

					// Wa_entry_conversation params override menu item params only if menu param = 'use_wa_entry_conversation'
					// Otherwise, menu item params control the layout
					// If menu item is 'use_wa_entry_conversation' and there is no wa_entry_conversation param, use global

					// create an array of just the params set to 'use_wa_entry_conversation'
					$menu_params_array = $this->getState('params')->toArray();
					$wa_entry_conversation_array = array();

					foreach ($menu_params_array as $key => $value)
					{
						if ($value === 'use_wa_entry_conversation')
						{
							// if the wa_entry_conversation has a value, use it
							if ($wa_entry_conversation_params->get($key) != '')
							{
								// get the value from the wa_entry_conversation
								$wa_entry_conversation_array[$key] = $wa_entry_conversation_params->get($key);
							}
							else
							{
								// otherwise, use the global value
								$wa_entry_conversation_array[$key] = $global_params->get($key);
							}
						}
					}

					// merge the selected wa_entry_conversation params
					if (count($wa_entry_conversation_array) > 0)
					{
						$wa_entry_conversation_params = new Registry;
						$wa_entry_conversation_params->loadArray($wa_entry_conversation_array);
						$item->params->merge($wa_entry_conversation_params);
					}


					// get display date
					switch ($item->params->get('list_show_wa_entry_conversation_date'))
					{
						case 'created':
							$item->display_date = $item->created;
							break;
						default:
							$item->display_date = 0;
							break;
					}
				}
				// Compute the asset access permissions.
				// Technically guest could edit an wa_entry_conversation, but lets not check that to improve performance a little.
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
	/**
	 * Build a list of distinct values in the acción field
	 *
	 * @return	JDatabaseQuery
	 */
	public function getActionvalues()
	{
				$values = array();
		$values[] = array('value' => 'Pide', 'text' => JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS_ACTION_VALUE_PIDE'));
		$values[] = array('value' => 'Ofrece', 'text' => JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS_ACTION_VALUE_OFRECE'));
		$values[] = array('value' => 'say', 'text' => JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS_ACTION_VALUE_DICE'));
		return $values;

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