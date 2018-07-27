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
 * RealEstateManagerCA Component Inmueble Model
 *
 */
class RemcaModelHouse extends JModelItem
{
	/**
	 * Model context string.  Used in setting the store id for the session
	 *
	 * @var		string
	 */
	protected $context = 'com_remca.house';

	/**
	 * Constructor.
	 *
	 * @param	array	An optional associative array of configuration settings.
	 * 
	 */
	public function __construct($config = array())
	{
		if (empty($config['house_filter_fields']))
		{
			$config['house_filter_fields'] = array(
				'id', 'a.id',
				'name', 'a.name',
				'id_country', 'a.id_country',
				'c1_country_name', 'c1.country_name',
				'id_lstate', 'a.id_lstate',
				's_lstate_name', 's.lstate_name',
				'id_lmunicipality', 'a.id_lmunicipality',
				'm_lmunicipality_name', 'm.lmunicipality_name',
				'price', 'a.price',
				'bathrooms', 'a.bathrooms',
				'bedrooms', 'a.bedrooms',
				'id_country','a.id_country',
				'id_lstate','a.id_lstate',
				'sid','a.sid',
				'associate_house','a.associate_house',
				'id_lmunicipality','a.id_lmunicipality',
				'houseid','a.houseid',
				'link','a.link',
				'id_rent','a.id_rent',
				'listing_type','a.listing_type',
				'price','a.price',
				'id_currency','a.id_currency',
				'hzipcode','a.hzipcode',
				'hlocation','a.hlocation',
				'hlatitude','a.hlatitude',
				'hlongitude','a.hlongitude',
				'map_zoom','a.map_zoom',
				'rooms','a.rooms',
				'bathrooms','a.bathrooms',
				'bedrooms','a.bedrooms',
				'contacts','a.contacts',
				'listing_status','a.listing_status',
				'property_type','a.property_type',
				'year','a.year',
				'agent','a.agent',
				'area_unit','a.area_unit',
				'land_area','a.land_area',
				'land_area_unit','a.land_area_unit',
				'expiration_date','a.expiration_date',
				'lot_size','a.lot_size',
				'house_size','a.house_size',
				'garages','a.garages',
				'date','a.date',
				'edok_link','a.edok_link',
				'owneremail','a.owneremail',
				'featured_clicks','a.featured_clicks',
				'featured_shows','a.featured_shows',
				'pixUpdtedDt','a.pixUpdtedDt',
				'extra1','a.extra1',
				'extra2','a.extra2',
				'extra3','a.extra3',
				'extra4','a.extra4',
				'extra5','a.extra5',
				'extra6','a.extra6',
				'extra7','a.extra7',
				'extra8','a.extra8',
				'extra9','a.extra9',
				'extra10','a.extra10',
				'energy_value','a.energy_value',
				'climate_value','a.climate_value',
				'owner_id','a.owner_id',
				'photos','a.photos',
				'checked_out', 'a.checked_out',
				'checked_out_time', 'a.checked_out_time',
				'catid', 'a.catid', 'category_title',
				'state', 'a.state',
				'featured', 'a.featured',
				'language', 'a.language',
				'hits', 'a.hits',
				'ordering', 'a.ordering',
				);
		}

		parent::__construct($config);
	}
	/**	
	 * Method to test whether a record can be deleted.
	 *
	 * @param	object	record	A record object.
	 * @return	boolean	True if allowed to delete the record. Defaults to the permission set in the component.
	 */
	protected function canDelete($record)
	{
		$user = JFactory::getUser();
	
		if ($record->state != -2)
		{
			return ;
		}
		if (!empty($record->id))
		{
			return $user->authorise('core.delete', 'com_remca.house.'.(int) $record->id);
		}
		return ;
	}

	/**
	 * Method to test whether a record can have its state changed.
	 *
	 * @param	object	A record object.
	 * @return	boolean	True if allowed to change the state of the record. Defaults to the permission set in the component.
	 */
	protected function canEditState($record)
	{
		$user = JFactory::getUser();

		// Check against the id.
		if (!empty($record->id))
		{
			return $user->authorise('core.edit.state', 'com_remca.house.'.(int) $record->id);
		}
		else
		{
			// New inmueble, so check against the category.		
			if (!empty($record->catid))
			{
				return $user->authorise('core.edit.state', 'com_remca.category.'.(int) $record->catid);
			}
			else 
			{
			// Default to component settings.			
				return $user->authorise('core.edit.state', 'com_remca');
			}
		}
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
		$this->setState('house.id', $pk);

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
			
		if ((!$user->authorise('core.edit.state', 'com_remca')) AND  (!$user->authorise('core.edit', 'com_remca')))
		{
			$this->setState('filter.published', 1);
		}
		else
		{
			$this->setState('filter.published', array(0, 1, 2));
		}		

		if ($params->get('filter_house_archived'))
		{
			$this->setState('filter.archived', $params->get('filter_house_archived'));
			
		}
		$this->setState('filter.language', JLanguageMultilang::isEnabled());
	}
	/**
	 * Returns a Table object, always creating it
	 *
	 * @param	type	The table type to instantiate
	 * @param	string	A prefix for the table class name. Optional.
	 * @param	array	Configuration array for model. Optional.
	 * @return	JTable	A database object
	*/
	public function getTable($type = 'Houses', $prefix = 'RemcaTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	/**
	 * Method to get Inmueble data.
	 *
	 * @param	integer	$pk	The id of the inmueble.
	 *
	 * @return	mixed	Menu item data object on success, false on failure.
	 */
	public function getItem($pk = null)
	{
		// Get current user for authorisation checks
		$user	= JFactory::getUser();
		
		$pk = (!empty($pk)) ? $pk : (int) $this->getState('house.id');
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
				$query->from($db->quoteName('#__rem_houses').' AS a');
				
				// Join on category table.
				$query->select($db->quoteName('c.title').' AS category_title, '.
								$db->quoteName('c.alias').' AS category_alias, '.
								$db->quoteName('c.access').' AS category_access'
								);
				$query->join('LEFT', $db->quoteName('#__categories').' AS c on '.$db->quoteName('c.id').' = '.$db->quoteName('a.catid'));
				
				// Join over the categories to get parent category titles
				$query->select($db->quoteName('parent.title').' AS parent_title, '.
								$db->quoteName('parent.id').' AS parent_id, '.
								$db->quoteName('parent.alias').' AS parent_alias, '.
								$db->quoteName('parent.path').' AS parent_route'
				);
				$query->join('LEFT', $db->quoteName('#__categories').' AS parent ON '.$db->quoteName('parent.id').' = '.$db->quoteName('c.parent_id'));				
				$query->select($db->quoteName('uam.name').' AS modified_by_name');
				$query->join('LEFT', $db->quoteName('#__users').' AS uam on '.$db->quoteName('uam.id').' = '.$db->quoteName('a.modified_by'));
				
				
				// Join over the language
				$query->select($db->quoteName('l.title').' AS language_title');
				$query->join('LEFT', $db->quoteName('#__languages').' AS l ON '.$db->quoteName('l.lang_code').' = '.$db->quoteName('a.language'));
				
				// Filter by language
				if ($this->getState('filter.language'))
				{
					$query->where($db->quoteName('a.language').' IN (' . $db->quote(JFactory::getLanguage()->getTag()) . ',' . $db->quote('*') . ')');
				}
				
				$query->where($db->quoteName('a.id').' = ' . (int) $pk);
				
				// Join to check for category published status in parent categories up the tree
				// If all categories are published, badcats.id will be null, and we just use the house state
				$sub_query = ' (SELECT '.$db->quoteName('cat.id').' as id FROM '.$db->quoteName('#__categories').' AS cat JOIN '.$db->quoteName('#__categories').' AS parent ';
				$sub_query .= 'ON '.$db->quoteName('cat.lft').' BETWEEN '.$db->quoteName('parent.lft').' AND '.$db->quoteName('parent.rgt').' ';
				$sub_query .= 'WHERE '.$db->quoteName('parent.extension').' = ' . $db->quote('com_remca');
				$sub_query .= ' AND '.$db->quoteName('parent.published').' <= 0 GROUP BY '.$db->quoteName('cat.id').')';
				$query->join('LEFT OUTER', $sub_query . ' AS badcats ON '.$db->quoteName('badcats.id').' = '.$db->quoteName('c.id'));
					
				// Join on vote rating table
				$query->select('ROUND('.$db->quoteName('v.rating_sum').' / '.$db->quoteName('v.rating_count').', 0) AS rating, '.$db->quoteName('v.rating_count').' as rating_count');
				$query->join('LEFT', $db->quoteName('#__rem_rating').' AS v ON '.$db->quoteName('a.id').' = '.$db->quoteName('v.content_id').' AND '.$db->quoteName('v.content_type').' = '.$db->quote('houses'));

				$can_publish = $user->authorise('core.edit.state', 'com_remca.house.'.$pk);
				//  Do not show unless today's date is within the publish up and down dates (or they are empty)
				// Filter by published status.
				$published = $this->getState('filter.published');
				$archived = $this->getState('filter.archived');
				if (is_numeric($published) 
						AND !$can_publish
					)
				{
					$query->where('('.$db->quoteName('a.state').' = ' . (int) $published . ' OR '.$db->quoteName('a.state').' = ' . (int) $archived . ')');
				
				}
				
					
				// Filter by and return name for id_country level.
				$query->select($db->quoteName('c1.name').' AS c1_country_name');
				$query->join('LEFT', $db->quoteName('#__rem_countries').' AS c1 ON '.$db->quoteName('c1.id').' = '.$db->quoteName('a.id_country'));	
				// Filter by and return name for id_lstate level.
				$query->select($db->quoteName('s.name').' AS s_lstate_name');
				$query->join('LEFT', $db->quoteName('#__rem_lstates').' AS s ON '.$db->quoteName('s.id').' = '.$db->quoteName('a.id_lstate'));	
				// Filter by and return name for id_lmunicipality level.
				$query->select($db->quoteName('m.name').' AS m_lmunicipality_name');
				$query->join('LEFT', $db->quoteName('#__rem_lmunicipalities').' AS m ON '.$db->quoteName('m.id').' = '.$db->quoteName('a.id_lmunicipality'));	
				// Filter by and return name for id_rent level.
				$query->select($db->quoteName('r.name').' AS r_rent_name');
				$query->join('LEFT', $db->quoteName('#__rem_rents').' AS r ON '.$db->quoteName('r.id').' = '.$db->quoteName('a.id_rent'));	
				// Filter by and return name for owner_id level.
				$query->select($db->quoteName('u.name').' AS u_user_name');
				$query->join('LEFT', $db->quoteName('#__users').' AS u ON '.$db->quoteName('u.id').' = '.$db->quoteName('a.owner_id'));	
																				
				$db->setQuery($query);

				$item = $db->loadObject();

				if (empty($item))
				{
					return JError::raiseError(404, JText::_('COM_REMCA_HOUSES_ERROR_ITEM_NOT_FOUND'));
				}
				// Include any manipulation of the data on the record e.g. expand out Registry fields
				// NB The params registry field - if used - is done automatcially in the JAdminModel parent class
				// Convert the images field to an array.
				$registry = new Registry;
				$registry->loadString($item->images);
				$item->images = $registry->toArray();
				$registry = null; //release memory	
			

				
				
				
				
				
				
				
				
				
				
				if (isset($item->id_currency) AND $item->id_currency !='')
				{
					$sql = 'SELECT '.$db->quoteName('list.currency').' AS value FROM (SELECT id, currency FROM #__rem_countries WHERE published_cur) AS list';
					$sql .= ' WHERE '.$db->quoteName('list.id').' IN ('.JString::trim($item->id_currency, ',').');';
					$db->setQuery($sql);				
					$item->id_currency = $db->loadResult();
				}
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
					$item->photos = json_decode($item->photos);
		

							
				// Check for published state if filter set.
				if (((is_numeric($published)) OR (is_numeric($archived))) AND (($item->state != $published) AND ($item->state != $archived)))
				{
					return JError::raiseError(404, JText::_('COM_REMCA_HOUSES_ERROR_ITEM_NOT_FOUND'));
				}

				// Convert parameter fields to objects.
				$house_params = new Registry;
				
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


				// Compute selected asset permissions.

				// Technically guest could edit an house, but lets not check that to improve performance a little.
				if (!$user->get('guest')) 
				{
					$user_id	= $user->get('id');
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
				// Check edit state permission.
					if ($user->authorise('core.edit.state', $asset)) 
					{				
						$item->params->set('access-change', true);
					}											
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
	 * Method to change the published state of one or more records.
	 *
	 * @param   array    &$pks   A list of the primary keys to change.
	 * @param	integer  $value  The value of the published state.
	 *
	 * @return  boolean  True on success.
	 *
	 */
	public function publish(&$pks, $value = 1)
	{
		
		$dispatcher = JEventDispatcher::getInstance();
		$table = $this->getTable();
		$user	= JFactory::getUser();
	
		$pks = (array) $pks;

		// Include the remca plugins for the change of state event.
		JPluginHelper::importPlugin('remca');

		// Access checks.
		foreach ($pks as $i => $pk)
		{
			$table->reset();

			if ($table->load($pk))
			{
				if (!$this->canEditState($table))
				{
					// Prune items that you can't change.
					unset($pks[$i]);
					JError::raiseWarning(403, JText::_('JLIB_APPLICATION_ERROR_EDITSTATE_NOT_PERMITTED'));
					return false;
				}
			}
		}

		// Attempt to change the state of the records.
		if (!$table->publish($pks, $value, $user->get('id')))
		{
			$this->setError($table->getError());
			return false;
		}

		// Trigger the ChangeState event.
		$result = $dispatcher->trigger('onHouseChangeState', array('com_remca.house', $pks, $value));

		if (in_array(false, $result, true))
		{
			$this->setError($table->getError());
			return false;
		}

		// Clear the component's cache
		$this->cleanCache();

		return true;
	}

	/**
	* A protected method to get a set of ordering conditions.
	*
	* @param	object	A record object.
	* @return	array	An array of conditions to add to add to ordering queries.
	*/
	protected function getReorderConditions($table = null)
	{
		$db = JFactory::getDbo();
		
		$condition = array();
		$condition[] = $db->quoteName('catid').' = '.(int) $table->catid;	
		$condition[] = $db->quoteName('state').' >= 0';
		return $condition;
	}
	/**
	 * Method to adjust the ordering of a row.
	 *
	 * Returns NULL if the user did not have edit
	 * privileges for any of the selected primary keys.
	 *
	 * @param	integer  $pks    The ID of the primary key to move.
	 * @param	integer  $delta  Increment, usually +1 or -1
	 *
	 * @return  mixed  False on failure or error, true on success, null if the $pk is empty (no items selected).
	 *
	 */
	public function reorder($pks, $delta = 0)
	{
		
		$table = $this->getTable();
		$pks = (array) $pks;
		$result = true;

		$allowed = true;

		foreach ($pks as $i => $pk)
		{
			$table->reset();

			if ($table->load($pk))
			{
				// Access checks.
				if (!$this->canEditState($table))
				{
					// Prune items that you can't change.
					unset($pks[$i]);
					JError::raiseWarning(403, JText::_('JLIB_APPLICATION_ERROR_EDITSTATE_NOT_PERMITTED'));
					$allowed = false;
					continue;
				}
				
				$where = array();
				$where = $this->getReorderConditions($table);

				if (!$table->move($delta, $where))
				{
					$this->setError($table->getError());
					unset($pks[$i]);
					$result = false;
				}

			}
			else
			{
				$this->setError($table->getError());
				unset($pks[$i]);
				$result = false;
			}
		}

		if ($allowed === false AND empty($pks))
		{
			$result = null;
		}

		// Clear the component's cache
		if ($result == true)
		{
			$this->cleanCache();
		}

		return $result;
	}
	/**
	 * Saves the manually set order of records.
	 *
	 * @param   array    $pks    An array of primary key ids.
	 * @param   integer  $order  +1 or -1
	 *
	 * @return  mixed
	 *
	 */
	public function saveorder($pks = null, $order = null)
	{
		
		$table = $this->getTable();
		$conditions = array();

		if (empty($pks))
		{
			return JError::raiseWarning(500, JText::_($this->text_prefix . '_ERROR_NO_ITEMS_SELECTED'));
		}

		// update ordering values
		foreach ($pks as $i => $pk)
		{
			$table->load((int) $pk);

			// Access checks.
			if (!$this->canEditState($table))
			{
				// Prune items that you can't change.
				unset($pks[$i]);
				JError::raiseWarning(403, JText::_('JLIB_APPLICATION_ERROR_EDITSTATE_NOT_PERMITTED'));
			}
			elseif ($table->ordering != $order[$i])
			{
				$table->ordering = $order[$i];

				if (!$table->store())
				{
					$this->setError($table->getError());
					return false;
				}

				// Remember to reorder within order fields
				$condition = $this->getReorderConditions($table);
				$found = false;

				foreach ($conditions as $cond)
				{
					if ($cond[1] == $condition)
					{
						$found = true;
						break;
					}
				}

				if (!$found)
				{
					$key = $table->getKeyName();
					$conditions[] = array($table->$key, $condition);
				}
			}
		}

		// Execute reorder for each category.
		foreach ($conditions as $cond)
		{
			$table->load($cond[0]);
			$table->reorder($cond[1]);
		}

		// Clear the component's cache
		$this->cleanCache();

		return true;
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
				if ($this->canDelete($table))
				{
					// Trigger the BeforeDelete event.
					$result = $dispatcher->trigger('onHouseBeforeDelete', array('com_remca.house', &$table));
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
					$dispatcher->trigger('onHouseAfterDelete', array('com_remca.house', &$table));
				}
				else
				{
					// Prune items that you can't change.
					unset($pks[$i]);
					$error = $this->getError();
					if ($error)
					{
						JError::raiseWarning(500, $error);
						return false;
					}
					else
					{
						JError::raiseWarning(403, JText::_('JLIB_APPLICATION_ERROR_DELETE_NOT_PERMITTED'));
						return false;
					}
				}
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
	/**
	 * Increment the hit counter for the inmueble.
	 *
	 * @pk		int		Optional primary key of the inmueble to increment.
	 *
	 * @return	boolean	True if successful; false otherwise and internal error set.
	 */
	public function hit($pk = 0)
	{
		$app = JFactory::getApplication('site');
	
		$hit_count = $app->input->getInt('hitcount', 1);

		if ($hit_count)
		{
			
			$pk = (!empty($pk)) ? $pk : (int) $this->getState('house.id');
			$table =  $this->getTable();
			$table->load($pk);
			$table->hit($pk);			
		}

		return true;
	}
	/**
	 * Update the vote rating for the inmueble.
	 *
	 * @pk		int		Optional primary key of the inmueble to rate.
	 * @rate	int		Optional rating for the inmueble.
	 *
	 * @return	boolean	True if successful; false otherwise and internal error set.
	 */	
    public function storeVote($pk = 0, $rate = 0)
    {
        if ( $rate >= 1 AND $rate <= 5 AND $pk > 0 )
        {
            $user_ip = $_SERVER['REMOTE_ADDR'];
            $db = $this->getDbo();

            $db->setQuery(
                    'SELECT *' .
                    ' FROM '.$db->quoteName('#__rem_rating') .
                    ' WHERE '.$db->quoteName('content_id').' = '.(int) $pk .
                    ' AND '.$db->quoteName('content_type').' = '.$db->quote('houses')
            );

            $rating = $db->loadObject();

            if (!$rating)
            {
                // There are no ratings yet, so lets insert our rating
                $db->setQuery(
                        'INSERT INTO '.$db->quoteName('#__rem_rating').' ( '.$db->quoteName('content_type').', '.$db->quoteName('content_id').', '.$db->quoteName('lastip').', '.$db->quoteName('rating_sum').', '.$db->quoteName('rating_count').' )' .
                        ' VALUES ( '.$db->quote('houses').', '.(int) $pk.', '.$db->quote($user_ip).', '.(int) $rate.', 1 )'
                );

				try
				{
					$db->execute();
				}
				catch (RuntimeException $e)
				{
					$this->setError($e->getMessage);
					return false;
				}
            }
            else
            {
                if ($user_ip != ($rating->lastip))
                {
                    $db->setQuery(
                            'UPDATE '.$db->quoteName('#__rem_rating') .
                            ' SET '.$db->quoteName('rating_count').' = '.$db->quoteName('rating_count').' + 1, '.$db->quoteName('rating_sum').' = '.$db->quoteName('rating_sum').' + '.(int) $rate.', '.$db->quoteName('lastip').' = '.$db->quote($user_ip) .
                            ' WHERE '.$db->quoteName('content_id').' = '.(int) $pk.
							' AND '.$db->quoteName('content_type').' = houses'
                    );
                    
					try
					{
						$db->execute();
					}
					catch (RuntimeException $e)
					{
						$this->setError($e->getMessage);
						return false;
					}
                }
                else
                {
                    return false;
                }
            }
            return true;
        }
        JError::raiseWarning( 'SOME_ERROR_CODE', JText::sprintf('COM_REMCA_HOUSES_INVALID_RATING', $rate), "RemcaModelHouse::storeVote($rate)");
        return false;
    }
}
