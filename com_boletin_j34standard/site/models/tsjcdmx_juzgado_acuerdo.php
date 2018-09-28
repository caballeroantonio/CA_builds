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
 * Boletines Component Tribunal Superior De Justicia De La Ciudad De México - Juzgados Model
 *
 */
class BoletinModelTsjcdmx_juzgado_acuerdo extends JModelItem
{
	/**
	 * Model context string.  Used in setting the store id for the session
	 *
	 * @var		string
	 */
	protected $context = 'com_boletin.tsjcdmx_juzgado_acuerdo';

	/**
	 * Constructor.
	 *
	 * @param	array	An optional associative array of configuration settings.
	 * 
	 */
	public function __construct($config = array())
	{
		if (empty($config['tsjcdmx_juzgado_acuerdo_filter_fields']))
		{
			$config['tsjcdmx_juzgado_acuerdo_filter_fields'] = array(
				'id', 'a.id',
				'fecha_acuerdo','a.fecha_acuerdo',
				'fecha_boletin','a.fecha_boletin',
				'juzgado','a.juzgado',
				'actor','a.actor',
				'demandado','a.demandado',
				'terceria','a.terceria',
				'tipo_juicio','a.tipo_juicio',
				'toca','a.toca',
				'anio','a.anio',
				'tipo_resolucion','a.tipo_resolucion',
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
	
		if (!empty($record->id))
		{
			return $user->authorise('core.delete', 'com_boletin');
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
		
		return 1
                    AND (
                        $user->authorise('core.edit.state', 'com_boletin')
                    )
		;

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
		$this->setState('tsjcdmx_juzgado_acuerdo.id', $pk);

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
	public function getTable($type = 'Tsjcdmx_juzgado_acuerdos', $prefix = 'BoletinTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	/**
	 * Method to get Tribunal Superior De Justicia De La Ciudad De México - Juzgados data.
	 *
	 * @param	integer	$pk	The id of the tribunal superior de justicia de la ciudad de méxico - juzgados.
	 *
	 * @return	mixed	Menu item data object on success, false on failure.
	 */
	public function getItem($pk = null)
	{
		// Get current user for authorisation checks
		$user	= JFactory::getUser();
		
		$pk = (!empty($pk)) ? $pk : (int) $this->getState('tsjcdmx_juzgado_acuerdo.id');
		// Get the global params
		$global_params = JComponentHelper::getParams('com_boletin', true);

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
				$query->from($db->quoteName('#__boletin_tsjcdmx_juzgado_acuerdos').' AS a');
				
				
				$query->where($db->quoteName('a.id').' = ' . (int) $pk);
				
					

				//  Do not show unless today's date is within the publish up and down dates (or they are empty)
				
					
																				
				$db->setQuery($query);

				$item = $db->loadObject();

				if (empty($item))
				{
					return JError::raiseError(404, JText::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_ERROR_ITEM_NOT_FOUND'));
				}
				// Include any manipulation of the data on the record e.g. expand out Registry fields
				// NB The params registry field - if used - is done automatcially in the JAdminModel parent class
			

				
				
				
				
				
				
				
				
				
				
		

							

				// Convert parameter fields to objects.
				$tsjcdmx_juzgado_acuerdo_params = new Registry;
				
				$item->params = clone $this->getState('params');				
								
				// Tsjcdmx_juzgado_acuerdo params override menu item params only if menu param = 'use_tsjcdmx_juzgado_acuerdo'
				// Otherwise, menu item params control the layout
				// If menu item is 'use_tsjcdmx_juzgado_acuerdo' and there is no tsjcdmx_juzgado_acuerdo param, use global

				// create an array of just the params set to 'use_tsjcdmx_juzgado_acuerdo'
				$menu_params_array = $this->getState('params')->toArray();
				$tsjcdmx_juzgado_acuerdo_array = array();

				foreach ($menu_params_array as $key => $value)
				{
					if ($value === 'use_tsjcdmx_juzgado_acuerdo')
					{
						// if the tsjcdmx_juzgado_acuerdo has a value, use it
						if ($tsjcdmx_juzgado_acuerdo_params->get($key) != '')
						{
							// get the value from the tsjcdmx_juzgado_acuerdo
							$tsjcdmx_juzgado_acuerdo_array[$key] = $tsjcdmx_juzgado_acuerdo_params->get($key);
						}
						else
						{
							// otherwise, use the global value
							$tsjcdmx_juzgado_acuerdo_array[$key] = $global_params->get($key);
						}
					}
				}

				// merge the selected tsjcdmx_juzgado_acuerdo params
				if (count($tsjcdmx_juzgado_acuerdo_array) > 0)
				{
					$tsjcdmx_juzgado_acuerdo_params = new Registry;
					$tsjcdmx_juzgado_acuerdo_params->loadArray($tsjcdmx_juzgado_acuerdo_array);
					$item->params->merge($tsjcdmx_juzgado_acuerdo_params);
				}


				// Compute selected asset permissions.

				// Technically guest could edit an tsjcdmx_juzgado_acuerdo, but lets not check that to improve performance a little.
				if (!$user->get('guest')) 
				{
					$user_id	= $user->get('id');
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

		// Include the boletin plugins for the on delete events.
		JPluginHelper::importPlugin('boletin');

		// Iterate the items to delete each one.
		foreach ($pks as $i => $pk)
		{

			if ($table->load($pk))
			{
				if ($this->canDelete($table))
				{
					// Trigger the BeforeDelete event.
					$result = $dispatcher->trigger('onTsjcdmx_juzgado_acuerdoBeforeDelete', array('com_boletin.tsjcdmx_juzgado_acuerdo', &$table));
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
					$dispatcher->trigger('onTsjcdmx_juzgado_acuerdoAfterDelete', array('com_boletin.tsjcdmx_juzgado_acuerdo', &$table));
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
}
