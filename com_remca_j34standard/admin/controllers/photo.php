<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManager
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
 * Photo controller class.
 *
 */
class RemcaControllerPhoto extends JControllerForm
{
	/**
	 * @var		string	The prefix to use with controller messages.
	 * 
	 */
	protected $text_prefix = 'COM_REMCA_PHOTOS';
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

		$this->view_list = 'photos';
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