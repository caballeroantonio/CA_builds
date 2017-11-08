<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA (Release 1.0.0)
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_jtca
 * @subpackage		com_jtca.site
 * @copyright		Copyright (c) 2017 - 2020. All Rights Reserved
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: controller.php 571 2016-01-04 15:03:02Z BrianWade $
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
 * TSJ CDMX Libros TxCA Component Controller
 *
 */
class JtCaController extends JControllerLegacy
{
	/**
	 * @var		string	$default_view	The default view.
	 */
	protected $default_view = 'ljc01s';
	
	/**
	 * Constructor
	 *
	 */	
	public function __construct($config = array())
	{
		$this->input = JFactory::getApplication()->input;

		
		parent::__construct($config);
	}	
	/**
	 * Method to display a view.
	 *
	 * @param	boolean			If true, the view output will be cached
	 * @param	array			An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return	JControllerLegacy	This object to support chaining.
	 * 
	 */
	public function display($cachable = false, $url_params = false)
	{
		$cachable = true;

		// Get the document object.
		$document = JFactory::getDocument();

		// Set the default view name and format from the Request.
		$view_name		= $this->input->getCmd('view', $this->default_view);
		$this->input->set('view', $view_name);

		$user = JFactory::getUser();
//[%%START_CUSTOM_CODE%%]
/*
@ToDo cambiarlo en ACL core.view pero en cada controlador, y encontrar la forma de parametrizar el Itemid
edité el menú login para que hiciera redirect a este componente
  "login_redirect_menuitem": "544",
*/
        if($user->guest){
            $this->setRedirect('index.php?option=com_users&view=login&Itemid=233',JText::_('COM_JTCA_LOGIN_REQUIRED'));
            return;
        }
//[%%END_CUSTOM_CODE%%]

		$safe_url_params = array(
			'id'=>'INT','year'=>'INT','month'=>'INT','limit'=>'uINT',
			'limitstart'=>'uINT','showall'=>'INT','return'=>'BASE64',
			'filter'=>'STRING','filter_order'=>'CMD','filter_order_Dir'=>'CMD','filter-search'=>'STRING',
			'filter_ljc01_order'=>'CMD','filter_ljc01_order_Dir'=>'CMD','ljc01-filter-search'=>'STRING',
			'filter_ljc02_order'=>'CMD','filter_ljc02_order_Dir'=>'CMD','ljc02-filter-search'=>'STRING',
			'filter_ljc03_order'=>'CMD','filter_ljc03_order_Dir'=>'CMD','ljc03-filter-search'=>'STRING',
			'filter_ljc04_order'=>'CMD','filter_ljc04_order_Dir'=>'CMD','ljc04-filter-search'=>'STRING',
			'filter_ljc05_order'=>'CMD','filter_ljc05_order_Dir'=>'CMD','ljc05-filter-search'=>'STRING',
			'filter_ljc06_order'=>'CMD','filter_ljc06_order_Dir'=>'CMD','ljc06-filter-search'=>'STRING',
			'filter_ljc07_order'=>'CMD','filter_ljc07_order_Dir'=>'CMD','ljc07-filter-search'=>'STRING',
			'filter_ljc08_order'=>'CMD','filter_ljc08_order_Dir'=>'CMD','ljc08-filter-search'=>'STRING',
			'filter_ljc09_order'=>'CMD','filter_ljc09_order_Dir'=>'CMD','ljc09-filter-search'=>'STRING',
			'filter_ljc10_order'=>'CMD','filter_ljc10_order_Dir'=>'CMD','ljc10-filter-search'=>'STRING',
			'filter_ljc12_order'=>'CMD','filter_ljc12_order_Dir'=>'CMD','ljc12-filter-search'=>'STRING',
			'filter_ljc13_order'=>'CMD','filter_ljc13_order_Dir'=>'CMD','ljc13-filter-search'=>'STRING',
			'filter_ljc14_order'=>'CMD','filter_ljc14_order_Dir'=>'CMD','ljc14-filter-search'=>'STRING',
			'filter_ljc16_order'=>'CMD','filter_ljc16_order_Dir'=>'CMD','ljc16-filter-search'=>'STRING',
			'filter_ljc17_order'=>'CMD','filter_ljc17_order_Dir'=>'CMD','ljc17-filter-search'=>'STRING',
			'filter_ljc18_order'=>'CMD','filter_ljc18_order_Dir'=>'CMD','ljc18-filter-search'=>'STRING',
			'filter_ljc19_order'=>'CMD','filter_ljc19_order_Dir'=>'CMD','ljc19-filter-search'=>'STRING',
			'filter_ljc20_order'=>'CMD','filter_ljc20_order_Dir'=>'CMD','ljc20-filter-search'=>'STRING',
			'filter_ljc21_order'=>'CMD','filter_ljc21_order_Dir'=>'CMD','ljc21-filter-search'=>'STRING',
			'print'=>'BOOLEAN','lang'=>'CMD', 'Itemid'=>'INT');

		parent::display($cachable,$safe_url_params);

		return $this;
	}
}
