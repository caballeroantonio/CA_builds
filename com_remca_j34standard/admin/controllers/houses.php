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


/**
 * Houses list controller class.
 *
 * 
 */
class RemcaControllerHouses extends JControllerAdmin
{
	/**
	 * @var		string	The prefix to use with controller messages.
	 * 
	 */
	protected $text_prefix = 'COM_REMCA_HOUSES';

	/**
	 * Constructor.
	 *
	 * @param	array An optional associative array of configuration settings.
	 * 
	 */
	public function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask('unfeatured',	'featured');
	}

	/**
	 * Method to toggle the featured setting of a list of inmuebles.
	 *
	 * @return	void
	 * 
	 */
	public function featured()
	{
		// Check for request forgeries
		$this->checkToken();

		$user	= JFactory::getUser();
		$ids	= $this->input->getVar('cid', array(), 'array');
		$values	= array('featured' => 1, 'unfeatured' => 0);
		$task	= $this->getTask();
		$value	= JArrayHelper::getValue($values, $task, 0, 'int');
		// Get the model.
		$model = $this->getModel();

		// Access checks.
		foreach ($ids as $i => $id)
		{
			$item = $model->getItem($id);
			if (!$user->authorise('core.edit.state', 'com_remca.category.'.(int) $item->catid) OR
				!$user->authorise('core.edit.state', 'com_remca.house.'.$id))

			{
				// Prune items that you can't change.
				unset($ids[$i]);
				JError::raiseNotice(403, JText::_('JLIB_APPLICATION_ERROR_EDITSTATE_NOT_PERMITTED'));
			}
		}

		if (empty($ids))
		{
			JError::raiseWarning(500, JText::_('COM_REMCA_HOUSES_NO_ITEM_SELECTED'));
		}
		else
		{
			// Publish the items.
			if (!$model->featured($ids, $value))
			{
				JError::raiseWarning(500, $model->getError());
			}
			
			if ($value == 1)
			{
				$message = JText::plural('COM_REMCA_HOUSES_N_ITEMS_FEATURED', count($ids));
			}
			else
			{
				$message = JText::plural('COM_REMCA_HOUSES_N_ITEMS_UNFEATURED', count($ids));
			}			
		}

		$this->setRedirect(JRoute::_('index.php?option=com_remca&view=houses', false), $message);
	}

	/**
	 * Method to get a model object, loading it if required.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  object  The model.
	 * 
	 * 
	 */
	public function getModel($name = 'House', $prefix = 'RemcaModel',$config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);
		return $model;
	}
	/**
	 * Function that allows child controller access to model data
	 * after the item has been deleted.
	 *
	 * @param   JModelLegacy  $model  The data model object.
	 * @param   integer       $ids    The array of ids for items being deleted.
	 *
	 * @return  void
	 *
	 */
	protected function postDeleteHook(JModelLegacy $model, $ids = null)
	{
	}	
                
        /*
         * Function that allows download database information
         * @ToDo implementar generación de código
         */
        public function export(){
			//from outside:
			//$model = JModelLegacy::getInstance('Houses','RemcaModel', array('ignore_request' => FALSE));
			
            $model = $this->getModel('Houses','RemcaModel',array('ignore_request' => FALSE));
			
			//states
//			$model->setState('list.ordering', 'a.ordering');//override
//			$model->setState('list.direction', 'ASC');//override
//			$model->setState('list.select', 'a.*');//override
			$model->setState('filter.state', 1);
            $query = $model->getListQuery4Export();
            echo($query);
        }
}