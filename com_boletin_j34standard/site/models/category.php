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
 * @CAversion		Id: category.php 571 2016-01-04 15:03:02Z BrianWade $
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

require_once __DIR__ . '/tfjfa_bacuerdos.php';

class BoletinModelCategory extends JModelList
{
	/**
	 * @var array	array	$_item		The category item
	 */
	protected $_item = null;
	/**
	 * @var		array	$_siblings	The sibling categeories for this category.
	 */
	protected $_siblings = null;
	
	/**
	 * @var		array	$_children	The children categeories for this category.
	 */
	protected $_children = null;

	/**
	 * @var		object	$_parent	The parent category for this category.
	 */
	protected $_parent = null;
	
	/**
	 * @var		array	$_items		The set of items with this category
	 */
	protected $_items = null;
	
	/**
	 * @var		object	$_pagination	The pagination object for the set of items with this category
	 */
	protected $_pagination = null;	
		
	/**
	 * @var		object	$_category	The category that applies.
	 */
	protected $_category = null;

	/**
	 * @var		array	$_categories	The set of categories.
	 */
	protected $_categories = null;


	/**
	 * Constructor.
	 *
	 */
	public function __construct($config = array())
	{
	
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'id', 'a.id',
				'catid', 'a.catid', 'category_title',
				'ordering', 'a.ordering'	
				);
		}
		parent::__construct($config);
	}
	/**
	 * Method to auto-populate the model state.
	 *
	 * Note. Calling getState in this method will result in recursion.
	 *
	 */
	protected function populateState($ordering = null, $direction = null)
	{
		
		$app		= JFactory::getApplication();
		$item_id	= $app->input->getInt('id', 0) . ':' . $app->input->getInt('Itemid', 0);
		$id			= $app->input->get('id', 0, '', 'int');
		$format = $app->input->getWord('format');
		$this->setState('category.id', $id);
		
		// Load the parameters. Merge Global and Menu Item params into new object
		$params = $app->getParams();
		$menu_params = new Registry;

		if ($menu = $app->getMenu()->getActive())
		{
			$menu_params->loadString($menu->params);
		}

		$merged_params = clone $menu_params;
		$merged_params->merge($params);

		$this->setState('params', $merged_params);

		$params = $merged_params;
		
		$user = JFactory::getUser();
		
		// set the depth of the category query based on parameter

		if (!$params->get('show_categories_max_level'))
		{
			$show_sub_categories = $params->get('show_categories_max_level');

			if ($show_sub_categories)
			{
				$this->setState('filter.max_category_levels', $params->get('show_categories_max_level', '1'));
				$this->setState('filter.subcategories', true);
			}
		}
				
		// process show_category_noauth parameter
		if (!$params->get('show_category_noauth'))
		{
			$this->setState('filter.access', true);
		}
		else
		{
			$this->setState('filter.access', false);
		}
		
		$object_lower_case = JString::strtolower(str_replace(' ','',$params->get('items_to_display')));
		// Optional filter text

		if ((!$user->authorise('core.edit.state', 'com_boletin')) AND  (!$user->authorise('core.edit', 'com_boletin')))
		{
			// limit to published for people who can't edit or edit.state.
			$this->setState('filter.published', 1);
		}
		else
		{
			$this->setState('filter.published', array(0, 1, 2));
		}		
						
		$this->setState('filter.search', $app->input->getString('filter-search'));
		// List state information

		$order_col	= $app->input->get('filter_order', 'id');

		$this->setState('list.ordering', $order_col);

		if ($format=='feed')
		{
			$limit = $app->get('feed_limit');
		}
		else
		{
			$limit = $app->getUserStateFromRequest('com_boletin.category.list.' . $item_id . '.limit', 'limit', $app->get('list_limit'));
		}
		$this->setState('list.limit', $limit);	
						
		$limitstart = $app->input->get('limitstart', 0, 'uint');
		$this->setState('list.start', $limitstart);	

		$list_order	=  JString::strtoupper($app->input->get('filter_order_Dir', 'ASC'));
		if (!in_array($list_order, array('ASC', 'DESC', '')))
		{
			$list_order = 'ASC';
		}		
		$this->setState('list.direction', $list_order);
		

		$this->setState('layout', $app->input->getString('layout'));

		switch ($params->get('items_to_display',''))
		{
			case 'Acuerdos Fiscales Del TFJFA' :
				$object_lower_case = 'tfjfa_bacuerdo_';
				break;
			default :
				$object_lower_case = '';
				$this->setState('filter.access', true);
				
				break;
		}

	}
	/**
	 * Method to get a list of items.
	 *
	 * @return	mixed	An array of objects on success, false on failure.
	 */
	public function getItems()
	{

		$params = $this->getState()->get('params');
		$limit = $this->getState('list.limit');

		if ($params->get('items_to_display') AND $params->get('items_to_display') !='')
		{
			$object_upper_case = str_replace(' ','',JString::ucwords($params->get('items_to_display')));	
			
			if ($this->_items === null AND $category = $this->getCategory())
			{
				$model = JModelLegacy::getInstance($object_upper_case, 'BoletinModel', array('ignore_request' => true));
				$model->setState('params',  $params);
				$model->setState('filter.category_id', $category->id);
				$model->setState('list.ordering', $this->buildOrderBy());
				$model->setState('list.start', $this->getState('list.start'));
				$model->setState('list.limit', $limit);
				$model->setState('list.direction', $this->getState('list.direction'));
				$model->setState('filter.search', $this->getState('filter.search'));
				$model->setState('filter.subcategories', $this->getState('filter.subcategories'));
				$model->setState('filter.max_category_levels', $this->getState('filter.max_category_levels'));
				$model->setState('list.links', $this->getState('list.links'));

				if ($limit >= 0)
				{
					$this->_items = $model->getItems();

					if ($this->_items === false)
					{
						$this->setError($model->getError());
					}
				}
				else
				{
					$this->_items=array();
				}

				$this->_pagination = $model->getPagination();
			}

		}
		return $this->_items;	
	}
	/**
	 * Build the orderby for the query
	 *
	 * @return	string	$order_by portion of query
	 * 
	 */
	protected function buildOrderBy()
	{
		$app		= JFactory::getApplication('site');
		$db			= $this->getDbo();
		$params		= $this->state->params;
		$item_id	= $app->input->getInt('id', 0) . ':' . $app->input->getInt('Itemid', 0);
		$order_col	= $app->getUserStateFromRequest('com_boletin.category.list.' . $item_id . '.filter_order', 'filter_order', '', 'string');
		$order_dirn	= $app->getUserStateFromRequest('com_boletin.category.list.' . $item_id . '.filter_order_Dir', 'filter_order_Dir', '', 'cmd');
		$order_by	= ' ';

		if (!in_array($order_col, $this->filter_fields))
		{
			$order_col = null;
		}

		if (!in_array(JString::strtoupper($order_dirn), array('ASC', 'DESC', '')))
		{
			$order_dirn = 'ASC';
		}

		if ($order_col AND $order_dirn)
		{
			$order_by .= $db->escape($order_col) . ' ' . $db->escape($order_dirn) . ', ';
		}
		switch ($params->get('items_to_display',''))
		{
			case 'Acuerdos Fiscales Del TFJFA' :
				$secondary_order_by	= $params->get('tfjfa_bacuerdo_orderby_sec', 'none');
				$order_date			= $params->get('tfjfa_bacuerdo_order_date');
				$category_order_by	= $params->def('tfjfa_bacuerdo_orderby_pri', '');
				
				$primary			= BoletinHelperQuery::orderbyPrimary($category_order_by);	
				$secondary			= BoletinHelperQuery::orderbySecondary($secondary_order_by, $order_date, 'ordering');
				$order_by			.= $db->escape($primary) . $db->escape($secondary);
				break;
			default :
				$category_order_by	= 'ordering';
				$primary			= BoletinHelperQuery::orderbyPrimary($category_order_by);
				$order_by			.= $db->escape($primary);
								
			break;
		}
		
		return JString::trim($order_by);
	}

	/**
	 * Method to get a pagination object
	 *
	 *
	 * @return	object
	 * 
	 */
	public function getPagination()
	{
		if (empty($this->_pagination))
		{
			return null;
		}
		return $this->_pagination;
	}

	/**
	 * Method to get category data for the current category
	 *
	 * @param	integer		An optional ID
	 *
	 * @return	object
	 * 
	 */
	public function getCategory()
	{
		if(!is_object($this->_item))
		{
			$app = JFactory::getApplication();
			$menu = $app->getMenu();
			$active = $menu->getActive();
			$params = new Registry();
			$params->loadString($active->params);
			$options = array();

			$options['access'] = $this->getState('filter.access');
			$options['published'] = $this->getState('filter.published');
			$options['countItems'] = true;
			
			if ($params->get('items_to_display') AND $params->get('items_to_display') !='')
			{
				$options['table'] = '#__boletin_'.JString::strtolower(str_replace(' ','',$params->get('items_to_display')));
			}
			else
			{
				$options['table'] = '';
			}
															
			$categories = JCategories::getInstance('Boletin', $options);
			$this->_item = $categories->get($this->getState('category.id', 'root'));
			if(is_object($this->_item))
			{
				$user	= JFactory::getUser();
				$asset	= 'com_boletin.category.'.$this->_item->id;

				// Check general create permission.
				if ($user->authorise('core.create', $asset))
				{
					$this->_item->getParams()->set('access-create', true);
				}			
				$this->_children = $this->_item->getChildren();
				$this->_parent = false;
				if($this->_item->getParent())
				{
					$this->_parent = $this->_item->getParent();
				}
				$this->_rightsibling = $this->_item->getSibling();
				$this->_leftsibling = $this->_item->getSibling(false);
			}
			else
			{
				$this->_children = false;
				$this->_parent = false;
			}
		}

		return $this->_item;
	}

	/**
	 * Get the parent category.
	 *
	 * @param	integer		An optional category id. If not supplied, the model state 'category.id' will be used.
	 *
	 * @return	mixed	An array of categories or false if an error occurs.
	 */
	public function getParent()
	{
		if(!is_object($this->_item))
		{
			$this->getCategory();
		}
		return $this->_parent;
	}

	/**
	 * Get the sibling (adjacent) categories.
	 *
	 * @return	mixed	An array of categories or false if an error occurs.
	 */
	public function &getLeftSibling()
	{
		if(!is_object($this->_item))
		{
			$this->getCategory();
		}
		return $this->_leftsibling;
	}

	public function &getRightSibling()
	{
		if(!is_object($this->_item))
		{
			$this->getCategory();
		}
		return $this->_rightsibling;
	}

	/**
	 * Get the child categories.
	 *
	 * @param	integer		An optional category id. If not supplied, the model state 'category.id' will be used.
	 *
	 * @return	mixed	An array of categories or false if an error occurs.
	 */
	public function &getChildren()
	{
		if(!is_object($this->_item))
		{
			$this->getCategory();
		}
		
		// Order subcategories
		if (count($this->_children))
		{
			$params = $this->getState()->get('params');
			if ($params->get('orderby_pri') == 'alpha' OR $params->get('orderby_pri') == 'ralpha')
			{
				jimport('joomla.utilities.arrayhelper');
				JArrayHelper::sortObjects($this->_children, 'title', ($params->get('orderby_pri') == 'alpha') ? 1 : -1);
			}
		}		
		return $this->_children;
	}

}
