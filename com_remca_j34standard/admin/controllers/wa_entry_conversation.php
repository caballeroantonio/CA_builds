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
 * @CAversion		Id: compobject.php 571 2016-01-04 15:03:02Z BrianWade $
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
 * Wa_entry_conversation controller class.
 *
 */
class RemcaControllerWa_entry_conversation extends JControllerForm
{
	/**
	 * @var		string	The prefix to use with controller messages.
	 * 
	 */
	protected $text_prefix = 'COM_REMCA_WA_ENTRY_CONVERSATIONS';
	/**
	 * Constructor.
	 *
	 * @param	array An optional associative array of configuration settings.
	 *
	 * @return	JControllerForm
	 * 
	 */
	public function __construct($config = array())
	{
		parent::__construct($config);	

		$this->view_list = 'wa_entry_conversations';
	}
	/**
	 * Method override to check if you can add a new record.
	 *
	 * @param	array	$data	An array of input data.
	 *
	 * @return	boolean
	 * 
	 */
	protected function allowAdd($data = array())
	{

		$user		= JFactory::getUser();
		$category_id	= JArrayHelper::getValue($data, 'catid', $this->input->getInt('filter_category_id'), 'int');
		if ($category_id) 
		{
			// If the category has been passed in the URL check create access on it and the object.
			$result = $user->authorise('core.create', 'com_remca.category.'.$category_id) AND
					  $user->authorise('core.create', 'com_remca');
			if($result === null)		
			{
				// In the absense of better information, revert to the component permissions.
				return parent::allowAdd($data);		
			}
			else
			{
				return $result;
			}
		}
		else
		{
			// In the absense of category id, revert to the component permissions.
			return parent::allowAdd($data);		
		}
	}			
	/**
	 * Method override to check if you can edit an existing record.
	 *
	 * @param	array	$data	An array of input data.
	 * @param	string	$key	The name of the key for the primary key.
	 *
	 * @return	boolean
	 * 
	 */
	protected function allowEdit($data = array(), $key = 'id')
	{

		$record_id	= (int) isset($data[$key]) ? $data[$key] : 0;
		$user		= JFactory::getUser();
		$user_id		= $user->get('id');
		$category_id	= (int) isset($data['catid']) ? $data['catid'] : 0;

		if ($category_id) 
		{
			// If the category has been passed in the URL check it.
			if(!$user->authorise('core.edit', 'com_remca.category.'.$category_id))
			{
				return false;
			}
		}
		// Check general edit permission first.
		if ($user->authorise('core.edit', 'com_remca'))
		{
			return true;
		}
		// Fallback on edit.own.
		// First test if the permission is available.
		if ($user->authorise('core.edit.own', 'com_remca'))
		{
			// Now test the owner is the user.
			$owner_id = 0;

			if ( isset($data['created_by']))
			{
				$owner_id	= (int) $data['created_by'];
			}

			if ($owner_id == 0 AND $record_id) 
			{
				// Need to do a lookup from the model.
				$record		= $this->getModel()->getItem($record_id);

				if (empty($record)) 
				{
					return false;
				}
				$owner_id = $record->created_by;
			}

			// If the owner matches 'me' then do the test.
			if ($owner_id == $user_id) 
			{
				return true;
			}
		}
		// Since there is no asset tracking, revert to the component permissions.
		return parent::allowEdit($data, $key);
	}
	/**
	 * Method to run batch operations.
	 *
	 * @param   object  $model  The model.
	 *
	 * @return  boolean	 True if successful, false otherwise and internal error is set.
	 *
	 */
	public function batch($model = null)
	{
		$this->checkToken();

		// Set the model
		$model = $this->getModel('Wa_entry_conversation', 'RemcaModel', array());

		// Preset the redirect
		$this->setRedirect(JRoute::_('index.php?option=com_remca&view=wa_entry_conversations' . $this->getRedirectToListAppend(), false));

		return parent::batch($model);
	}	
	/**
	 * Function that allows child controller access to model data after the data has been saved.
	 *
	 * @param   JModelLegacy  $model  The data model object.
	 * @param   array         $valid_data   The validated data.
	 *
	 * @return	void
	 *
	 */
	protected function postSaveHook(JModelLegacy $model, $valid_data = array())
	{
		return;
	}

}