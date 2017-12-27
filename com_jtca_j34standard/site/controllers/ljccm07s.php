<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_jtca
 * @subpackage		com_jtca.site
 * @copyright		Copyright (c) 2017 - 2020. All Rights Reserved
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
 * LIBRO DE EXHORTOS list controller class.
 *
 */
class JtCaControllerLjccm07s extends JControllerLegacy
{
	/**
	 * @var		string	The prefix to use with controller messages.
	 */
	protected $text_prefix = 'COM_JTCA_LJCCM07S';
	/**
	 * @var		string	The name of the list view.
	 */	
	protected $view_list = 'ljccm07s';
	/**
	 * Constructor
	 *
	 */
	public function __construct($config = array())
	{
		parent::__construct($config);

		$this->registerTask('orderup','reorder');
		$this->registerTask('orderdown','reorder');
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
	public function getModel($name = 'Ljccm07s', $prefix = 'JtCaModel',$config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);
		return $model;
	}
                
        /*
         * Function that allows download database information
         * @ToDo implementar generación de código
         */
        public function export(){
			//from outside:
			//$model = JModelLegacy::getInstance('Ljccm07Form','JtCaModel', array('ignore_request' => FALSE));
			
            $model = $this->getModel('Ljccm07s','JtCaModel',array('ignore_request' => FALSE));
			
			//states
//			$model->setState('list.ordering', 'a.ordering');//override
//			$model->setState('list.direction', 'ASC');//override
//			$model->setState('list.select', 'a.*');//override
			$model->setState('filter.state', 1);
            $query = $model->getListQuery4Export();
            echo($query);
        }
}