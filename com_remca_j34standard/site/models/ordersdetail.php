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
 * @CAversion		Id: compobject.php 571 2016-01-04 15:03:02Z BrianWade $
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
 * RealEstateManagerCA Component Orders_detail Model
 *
 */
class RemcaModelOrdersDetail extends JModelItem
{
	/**
	 * Model context string.  Used in setting the store id for the session
	 *
	 * @var		string
	 */
	protected $context = 'com_remca.ordersdetail';

	/**
	 * Constructor.
	 *
	 * @param	array	An optional associative array of configuration settings.
	 * 
	 */
	public function __construct($config = array())
	{
		if (empty($config['ordersdetail_filter_fields']))
		{
			$config['ordersdetail_filter_fields'] = array(
				'id', 'a.id',
				'name', 'a.name',
				'id_order','a.id_order',
				'id_user','a.id_user',
				'fk_houses_htitle','a.fk_houses_htitle',
				'email','a.email',
				'status','a.status',
				'order_date','a.order_date',
				'id_house','a.id_house',
				'txn_type','a.txn_type',
				'txn_id','a.txn_id',
				'payer_id','a.payer_id',
				'payer_status','a.payer_status',
				'order_calculated_price','a.order_calculated_price',
				'order_price','a.order_price',
				'order_currency_code','a.order_currency_code',
				'payment_details','a.payment_details',
				'paypal_paykay','a.paypal_paykay',
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
	protected function populateState()
	{
		$app = JFactory::getApplication('site');

		// Load state from the request.
		$pk = $app->input->getInt('id');
		$this->setState('ordersdetail.id', $pk);

		$offset = $app->input->getInt('limitstart');
		$this->setState('list.offset', $offset);

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

		// TODO: Tune these values based on other permissions.
		$user		= JFactory::getUser();
			
	}
	/**
	 * Returns a Table object, always creating it
	 *
	 * @param	type	The table type to instantiate
	 * @param	string	A prefix for the table class name. Optional.
	 * @param	array	Configuration array for model. Optional.
	 * @return	JTable	A database object
	*/
	public function getTable($type = 'OrdersDetails', $prefix = 'RemcaTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	/**
	 * Method to get Orders_detail data.
	 *
	 * @param	integer	$pk	The id of the orders_detail.
	 *
	 * @return	mixed	Menu item data object on success, false on failure.
	 */
	public function getItem($pk = null)
	{
		// Get current user for authorisation checks
		$user	= JFactory::getUser();
		
		$pk = (!empty($pk)) ? $pk : (int) $this->getState('ordersdetail.id');
		// Get the global params
		$global_params = JComponentHelper::getParams('com_remca', true);

		if ($this->_item === null)
		{
			$this->_item = array();
		}

		if (!isset($this->_item[$pk]))
		{
			try
			{
				$db = $this->getDbo();
				$query = $db->getQuery(true);

				$query->select($this->getState(
					'item.select',
					'a.*'

					)
				);
				$query->from($db->quoteName('#__rem_orders_details').' AS a');
				
				
				$query->where($db->quoteName('a.id').' = ' . (int) $pk);
				
					

				//  Do not show unless today's date is within the publish up and down dates (or they are empty)
				
					
				// Filter by and return name for id_order level.
				$query->select($db->quoteName('o.name').' AS o_order_name');
				$query->join('LEFT', $db->quoteName('#__rem_orders').' AS o ON '.$db->quoteName('o.id').' = '.$db->quoteName('a.id_order'));	
				// Filter by and return name for id_user level.
				$query->select($db->quoteName('u.name').' AS u_user_name');
				$query->join('LEFT', $db->quoteName('#__users').' AS u ON '.$db->quoteName('u.id').' = '.$db->quoteName('a.id_user'));	
				// Filter by and return name for id_house level.
				$query->select($db->quoteName('i.name').' AS i_house_name');
				$query->join('LEFT', $db->quoteName('#__rem_houses').' AS i ON '.$db->quoteName('i.id').' = '.$db->quoteName('a.id_house'));	
																				
				$db->setQuery($query);

				$item = $db->loadObject();

				if (empty($item))
				{
					return JError::raiseError(404, JText::_('COM_REMCA_ORDERS_DETAILS_ERROR_ITEM_NOT_FOUND'));
				}
				// Include any manipulation of the data on the record e.g. expand out Registry fields
				// NB The params registry field - if used - is done automatcially in the JAdminModel parent class
			

				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
		

							

				// Convert parameter fields to objects.
				$orders_detail_params = new Registry;
				
				$item->params = clone $this->getState('params');				
								
				// OrdersDetail params override menu item params only if menu param = 'use_ordersdetail'
				// Otherwise, menu item params control the layout
				// If menu item is 'use_ordersdetail' and there is no ordersdetail param, use global

				// create an array of just the params set to 'use_ordersdetail'
				$menu_params_array = $this->getState('params')->toArray();
				$orders_detail_array = array();

				foreach ($menu_params_array as $key => $value)
				{
					if ($value === 'use_ordersdetail')
					{
						// if the ordersdetail has a value, use it
						if ($orders_detail_params->get($key) != '')
						{
							// get the value from the ordersdetail
							$orders_detail_array[$key] = $orders_detail_params->get($key);
						}
						else
						{
							// otherwise, use the global value
							$orders_detail_array[$key] = $global_params->get($key);
						}
					}
				}

				// merge the selected ordersdetail params
				if (count($orders_detail_array) > 0)
				{
					$orders_detail_params = new Registry;
					$orders_detail_params->loadArray($orders_detail_array);
					$item->params->merge($orders_detail_params);
				}




				$this->_item[$pk] = $item;
			}
			catch (Exception $e)
			{
				if ($e->getCode() == 404)
				{
					// Need to go thru the error handler to allow Redirect to work.
					JError::raiseError(404, $e->getMessage());
				}
				else
				{
					$this->setError($e);
					$this->_item[$pk] = false;
				}			
			}
		}

		return $this->_item[$pk];
	}

		
	/**
	 * Method to delete one or more records.
	 *
	 * @param   array    $pks  An array of record primary keys.
	 *
	 * @return  boolean  True if successful, false if an error occurs.
	 * 
	 */
	public function delete(&$pks)
	{
		
		$dispatcher	= JEventDispatcher::getInstance();
		$pks		= (array) $pks;
		$table		= $this->getTable();

		// Include the remca plugins for the on delete events.
		JPluginHelper::importPlugin('remca');

		// Iterate the items to delete each one.
		foreach ($pks as $i => $pk)
		{

			if ($table->load($pk))
			{
					// Trigger the BeforeDelete event.
					$result = $dispatcher->trigger('onOrdersDetailBeforeDelete', array('com_remca.ordersdetail', &$table));
					if (in_array(false, $result, true))
					{
						$this->setError($table->getError());
						return false;
					}
					if (!$table->delete($pk))
					{
						$this->setError($table->getError());
						return false;
					}

					// Trigger the AfterDelete event.
					$dispatcher->trigger('onOrdersDetailAfterDelete', array('com_remca.ordersdetail', &$table));
			}
			else
			{
				$this->setError($table->getError());
				return false;
			}
		}

		// Clear the component's cache
		$this->cleanCache();

		return true;
	}
}
