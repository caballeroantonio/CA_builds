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

/**
 * tsjcdmx_juzgado_acuerdos list controller class.
 *
 */
class BoletinControllerTsjcdmx_juzgado_acuerdos extends JControllerLegacy
{
	/**
	 * @var		string	The prefix to use with controller messages.
	 */
	protected $text_prefix = 'COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS';
	/**
	 * @var		string	The name of the list view.
	 */	
	protected $view_list = 'tsjcdmx_juzgado_acuerdos';
	/**
	 * Constructor
	 *
	 */
	public function __construct($config = array())
	{
		parent::__construct($config);

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
	 */
	public function getModel($name = 'Tsjcdmx_juzgado_acuerdos', $prefix = 'BoletinModel',$config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);
		return $model;
	}
                
        /*
         * Function that allows download database information
         * @ToDo implementar ACL
         * from outside: $model = JModelLegacy::getInstance('tsjcdmx_juzgado_acuerdoForm','BoletinModel', array('ignore_request' => FALSE));	
         */
        public function export(){
            //die('not allowed');
            $model = $this->getModel = $this->getModel('Tsjcdmx_juzgado_acuerdos','BoletinModel',array('ignore_request' => FALSE));
			
//            states
//            $model->setState('list.ordering', 'a.ordering');//override
//            $model->setState('list.direction', 'ASC');//override
//            $model->setState('list.select', 'a.*');//override
            $query = $model->getListQuery4Export();
            $remca_helper = new RemcaHelper();
            $remca_helper->export('Tsjcdmx_juzgado_acuerdos',$query);
        }
}
