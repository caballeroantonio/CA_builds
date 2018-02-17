<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.admin
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: compobjectplural.php 571 2016-01-04 15:03:02Z BrianWade $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.admin
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
 * Methods supporting a list of house records.
 *
 */
class RemcaModelHouses extends JModelList
{
	/**
	 * Context string for the model type.  This is used to handle uniqueness
	 * within sessions data.
	 *
	 * @var		string
	 */
	protected $context = 'com_remca.houses';
	/**
	 * Constructor.
	 *
	 * @param	array	$config	An optional associative array of configuration settings.
	 * 
	 */
	public function __construct($config = array())
	{
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'id', 'a.id',
				'name', 'a.name',
				'price', 'a.price',
				'checked_out', 'a.checked_out',
				'checked_out_time', 'a.checked_out_time',
				'catid', 'a.catid', 'category_title', 'category_id',
				'state', 'a.state',
				'language', 'a.language', 'l.title',
				'hits', 'a.hits',
				'ordering', 'a.ordering',				
			);

			$assoc = JLanguageAssociations::isEnabled();
			if ($assoc)
			{
				$config['filter_fields'][] = 'association';
			}			
		}


		parent::__construct($config);
	}
	/**
	 * Returns a reference to a Table object, always creating it.
	 *
	 * @param	type	The table type to instantiate
	 * @param	string	A prefix for the table class name. Optional.
	 * @param	array	Configuration array for model. Optional.
	 * 
	 * @return	JTable	A database object
	 */
	public function getTable($type = 'Houses', $prefix = 'RemcaTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}	
	
	/**
	 * Method to auto-populate the model state.
	 *
	 * @param   string  $ordering   An optional ordering field.
	 * @param   string  $direction  An optional direction (asc|desc).
	 *
	 * @return  void
	 * Note. Calling getState in this method will result in recursion.
	 *
	 */
	protected function populateState($ordering = null, $direction = null)
	{
		
		$app = JFactory::getApplication('administrator');
		// Adjust the context to support modal layouts.
		if ($layout = $app->input->getString('layout'))
		{
			$this->context .= '.'.$layout;
		}

		// Load the filter state.
		$search = $app->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');
		$this->setState('filter.search', $search);
		$price = $app->getUserStateFromRequest($this->context.'.filter.price', 'filter_price', 0, 'int');
		$this->setState('filter.price', $price);
		$category_id = $app->getUserStateFromRequest($this->context.'.filter.category_id', 'filter_category_id');
		$this->setState('filter.category_id', $category_id);		
		
		$state = $app->getUserStateFromRequest($this->context.'.filter.state', 'filter_state', '', 'string');
		$this->setState('filter.state', $state);
	
		
				
		$language = $app->getUserStateFromRequest($this->context.'.filter.language', 'filter_language', '');
		$this->setState('filter.language', $language);	
		
		
		// Load the parameters.
		$params = JComponentHelper::getParams('com_remca');
		$this->setState('params', $params);
		
		// List state information.
		parent::populateState('a.id', 'DESC');
		
		// force a language
		$forcedLanguage = $app->input->get('forcedLanguage');
		if (!empty($forcedLanguage))
		{
			$this->setState('filter.language', $forcedLanguage);
			$this->setState('filter.forcedLanguage', $forcedLanguage);
		}		

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
	 */
	protected function getStoreId($id = '')
	{
		// Compile the store id.
		$id	.= ':'.$this->getState('filter.search');
		$id	.= ':'.$this->getState('filter.category_id');
		$id	.= ':'.$this->getState('filter.state');
		$id	.= ':'.$this->getState('filter.language');
		$id	.= ':'.$this->getState('filter.price');	
		return parent::getStoreId($id);
	}	
	/**
	 * Build an SQL query to load the list data.
	 * 
	 * @return	JDatabaseQuery
	 */
	protected function getListQuery()
	{
		
		$db		= $this->getDbo();
		$query	= $db->getQuery(true);
		$app	= JFactory::getApplication();

		// Select the required houses from the table.
		$query->select(
			$this->getState(
					'list.select',
					'a.*'
			)
		);
		$query->from($db->quoteName('#__rem_houses').' AS a');

		// Join over the language
		$query->select($db->quoteName('l.title').' AS language_title');
		$query->join('LEFT', $db->quoteName('#__languages').' AS l ON '.$db->quoteName('l.lang_code').' = '.$db->quoteName('a.language'));
		
		// Join over the users for the checked out user.
		$query->select($db->quoteName('uc.name').' AS editor');
		$query->join('LEFT', $db->quoteName('#__users').' AS uc ON '.$db->quoteName('uc.id').' = '.$db->quoteName('a.checked_out'));
		
		
		// Join over the categories.
		$query->select($db->quoteName('c.title').' AS category_title');
		$query->join('LEFT', $db->quoteName('#__categories').' AS c ON '.$db->quoteName('c.id').' = '.$db->quoteName('a.catid'));			
		// Filter by search in name
		$search = $this->getState('filter.search');
		if (!empty($search))
		{
			if (stripos($search, 'id:') === 0)
			{
				$query->where($db->quoteName('a.id').' = '.(int) JString::substr($search, 3));
			}
			else
			{
                            $search = $db->quote('%'.$db->escape(JString::trim($search), true).'%', false);
                            $query->where('( '.
                            "{$db->quoteName('a.name')} LIKE {$search} "
                            .' )');
			}
		}
		// Filter on the language.
		if ($language = $this->getState('filter.language'))
		{
			$query->where($db->quoteName('a.language').' = '.$db->quote($language));
		}	
		
		// Join over the associations.
		$assoc = JLanguageAssociations::isEnabled();
		if ($assoc)
		{
			$query->select('COUNT('.$db->quoteName('as2.id').') > 1 AS association');
			$query->join('LEFT', $db->quoteName('#__associations').' AS as1 ON '.$db->quoteName('as1.id').' = '.$db->quoteName('a.id').' AND '.$db->quoteName('as1.context').' = '.$db->quote('com_remca.house.item'));
			$query->join('LEFT', $db->quoteName('#__associations').' AS as2 ON '.$db->quoteName('as2.key').' = '.$db->quoteName('as1.key'));
			$query->group($db->quoteName('a.id'));
			
		}		


		
		// Filter by state e.g. published
		$state = $this->getState('filter.state');
		if (is_numeric($state))
		{
			$query->where($db->quoteName('a.state').' = '.(int) $state);
		}
		else
		{
			if ($state === '')
			{
				$query->where('('.$db->quoteName('a.state').' IN (0, 1))');
			}
		}
			
		
		

		// Filter by and return name for fk_rentid level. %@ToDo fix, if NOT INCLUDE_NAME then OBJECT_LABEL_FIELD = OBJECT_ORDERING_FIELD, then SELECT  is repeated, e.id AS e_expediente_id x 2
		$query->select($db->quoteName('r.name').' AS r_rent_name');
		$query->select($db->quoteName('r.id').' AS r_rent_id');

		$query->join('LEFT', $db->quoteName('#__rem_rent').' AS r ON '.$db->quoteName('r.id').' = '.$db->quoteName('a.fk_rentid'));	
		// Filter by and return name for owner_id level. %@ToDo fix, if NOT INCLUDE_NAME then OBJECT_LABEL_FIELD = OBJECT_ORDERING_FIELD, then SELECT  is repeated, e.id AS e_expediente_id x 2
		$query->select($db->quoteName('u.name').' AS u_user_name');
		$query->select($db->quoteName('u.id').' AS u_user_id');

		$query->join('LEFT', $db->quoteName('#__users').' AS u ON '.$db->quoteName('u.id').' = '.$db->quoteName('a.owner_id'));	
		
		if ($price = $this->getState('filter.price'))
		{
			$price = $db->escape(JString::strtolower($price), true);			
			$query->where('LOWER('.$db->quoteName('a.price').') = ' . $db->quote($price));
		}
				
		// Filter by a single or group of categories.
		$baselevel = 1;
		$category_id = $this->getState('filter.category_id');
		if (is_numeric($category_id))
		{
			$cat_tbl = JTable::getInstance('Category', 'JTable');
			$cat_tbl->load($category_id);
			$rgt = $cat_tbl->rgt;
			$lft = $cat_tbl->lft;
			$baselevel = (int) $cat_tbl->level;
			$query->where($db->quoteName('c.lft').' >= '.(int) $lft);
			$query->where($db->quoteName('c.rgt').' <= '.(int) $rgt);
		}
		else 
		{
			if (is_array($category_id))
			{
				JArrayHelper::toInteger($category_id);
				$category_id = implode(',', $category_id);
				$query->where($db->quoteName('a.catid').' IN ('.$category_id.')');
			}
		}
		// Add the list ordering clause.
		$order_col	= '';
		$order_dirn	= $this->getState('list.direction');

		
		if ($this->getState('list.ordering') == 'category_title')
		{
			$order_col = $db->quoteName('c.title').' '.$order_dirn.', '.$db->quoteName('a.ordering');
			
		}		


		if ($this->getState('list.ordering') == 'a.ordering' OR $this->getState('list.ordering') == 'ordering')
		{
			$order_col	= '';
			$order_col .= $db->quoteName('c.title').' '.$order_dirn.', ';
			$order_col	.= $db->quoteName('a.ordering').' '.$order_dirn;		
			
		}
		
		if ($order_col == '' AND $this->getState('list.ordering') != '')
		{
			$order_col	=  $db->quoteName($this->getState('list.ordering')).' '.$order_dirn;
		}
		else
		{
			//sqlsrv change
			if ($order_col == 'language' OR $order_col == 'a.language')
			{
				$order_col = $db->quoteName('l.title').' '.$order_dirn;			
			}
		}
		// If order column still blank then set it to default order

		if ($order_col == '')
		{
			$order_col =  $db->quoteName('a.id').' '.$order_dirn;
		}

			
		$query->order($db->escape($order_col));

		return $query;
	}
	/**
	 * Method to get a set of records.
	 *
	 * @return	mixed	Objects on success, false on failure.
	 */
	public function getItems()
	{
		if ($items = parent::getItems())
		{
			$db = $this->getDbo();
			$query = $db->getQuery(true);
			// Include any manipulation of the data on the record e.g. expand out Registry fields
			// NB The params registry field - if used - is done automatcially in the JAdminModel parent class
			foreach ($items as $item)
			{
				$query->clear();
							

							
			}
		}

		return $items;
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