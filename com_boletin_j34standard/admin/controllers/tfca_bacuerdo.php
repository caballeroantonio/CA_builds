<?php
/**
 * @version 		$Id:$
 * @name			Boletines
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_boletin
 * @subpackage		com_boletin.admin
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
 * Tfca_bacuerdo controller class.
 *
 */
class BoletinControllerTfca_bacuerdo extends JControllerForm
{
	/**
	 * @var		string	The prefix to use with controller messages.
	 * 
	 */
	protected $text_prefix = 'COM_BOLETIN_TFCA_BACUERDOS';
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

		$this->view_list = 'tfca_bacuerdos';
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
		// Check create access on the object.
		$result = $user->authorise('core.create', 'com_boletin');
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
		// Check general edit permission first.
		if ($user->authorise('core.edit', 'com_boletin'))
		{
			return true;
		}
		// Since there is no asset tracking, revert to the component permissions.
		return parent::allowEdit($data, $key);
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