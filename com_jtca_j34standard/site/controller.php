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
	protected $default_view = 'lejemplos';
	
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
			'filter_lsc01_order'=>'CMD','filter_lsc01_order_Dir'=>'CMD','lsc01-filter-search'=>'STRING',
			'filter_ljf01_order'=>'CMD','filter_ljf01_order_Dir'=>'CMD','ljf01-filter-search'=>'STRING',
			'filter_ljp01_order'=>'CMD','filter_ljp01_order_Dir'=>'CMD','ljp01-filter-search'=>'STRING',
			'filter_ljccm01_order'=>'CMD','filter_ljccm01_order_Dir'=>'CMD','ljccm01-filter-search'=>'STRING',
			'filter_ljoc01_order'=>'CMD','filter_ljoc01_order_Dir'=>'CMD','ljoc01-filter-search'=>'STRING',
			'filter_ljpdng01_order'=>'CMD','filter_ljpdng01_order_Dir'=>'CMD','ljpdng01-filter-search'=>'STRING',
			'filter_ljpes01_order'=>'CMD','filter_ljpes01_order_Dir'=>'CMD','ljpes01-filter-search'=>'STRING',
			'filter_ljjadng01_order'=>'CMD','filter_ljjadng01_order_Dir'=>'CMD','ljjadng01-filter-search'=>'STRING',
			'filter_ljjadg01_order'=>'CMD','filter_ljjadg01_order_Dir'=>'CMD','ljjadg01-filter-search'=>'STRING',
			'filter_lcp01_order'=>'CMD','filter_lcp01_order_Dir'=>'CMD','lcp01-filter-search'=>'STRING',
			'filter_lcp02_order'=>'CMD','filter_lcp02_order_Dir'=>'CMD','lcp02-filter-search'=>'STRING',
			'filter_lcp03_order'=>'CMD','filter_lcp03_order_Dir'=>'CMD','lcp03-filter-search'=>'STRING',
			'filter_lcp04_order'=>'CMD','filter_lcp04_order_Dir'=>'CMD','lcp04-filter-search'=>'STRING',
			'filter_lcp05_order'=>'CMD','filter_lcp05_order_Dir'=>'CMD','lcp05-filter-search'=>'STRING',
			'filter_lcp06_order'=>'CMD','filter_lcp06_order_Dir'=>'CMD','lcp06-filter-search'=>'STRING',
			'filter_lcp07_order'=>'CMD','filter_lcp07_order_Dir'=>'CMD','lcp07-filter-search'=>'STRING',
			'filter_lcp09_order'=>'CMD','filter_lcp09_order_Dir'=>'CMD','lcp09-filter-search'=>'STRING',
			'filter_lcp10_order'=>'CMD','filter_lcp10_order_Dir'=>'CMD','lcp10-filter-search'=>'STRING',
			'filter_lcp18_order'=>'CMD','filter_lcp18_order_Dir'=>'CMD','lcp18-filter-search'=>'STRING',
			'filter_lcp19_order'=>'CMD','filter_lcp19_order_Dir'=>'CMD','lcp19-filter-search'=>'STRING',
			'filter_lcp20_order'=>'CMD','filter_lcp20_order_Dir'=>'CMD','lcp20-filter-search'=>'STRING',
			'filter_lcp21_order'=>'CMD','filter_lcp21_order_Dir'=>'CMD','lcp21-filter-search'=>'STRING',
			'filter_lcp22_order'=>'CMD','filter_lcp22_order_Dir'=>'CMD','lcp22-filter-search'=>'STRING',
			'filter_lcp23_order'=>'CMD','filter_lcp23_order_Dir'=>'CMD','lcp23-filter-search'=>'STRING',
			'filter_lcp24_order'=>'CMD','filter_lcp24_order_Dir'=>'CMD','lcp24-filter-search'=>'STRING',
			'filter_lcp25_order'=>'CMD','filter_lcp25_order_Dir'=>'CMD','lcp25-filter-search'=>'STRING',
			'filter_lcp26_order'=>'CMD','filter_lcp26_order_Dir'=>'CMD','lcp26-filter-search'=>'STRING',
			'filter_lcp27_order'=>'CMD','filter_lcp27_order_Dir'=>'CMD','lcp27-filter-search'=>'STRING',
			'filter_lcp28_order'=>'CMD','filter_lcp28_order_Dir'=>'CMD','lcp28-filter-search'=>'STRING',
			'filter_lcp29_order'=>'CMD','filter_lcp29_order_Dir'=>'CMD','lcp29-filter-search'=>'STRING',
			'filter_lcp11_order'=>'CMD','filter_lcp11_order_Dir'=>'CMD','lcp11-filter-search'=>'STRING',
			'filter_lcp12_order'=>'CMD','filter_lcp12_order_Dir'=>'CMD','lcp12-filter-search'=>'STRING',
			'filter_lcp13_order'=>'CMD','filter_lcp13_order_Dir'=>'CMD','lcp13-filter-search'=>'STRING',
			'filter_lcp14_order'=>'CMD','filter_lcp14_order_Dir'=>'CMD','lcp14-filter-search'=>'STRING',
			'filter_lcp15_order'=>'CMD','filter_lcp15_order_Dir'=>'CMD','lcp15-filter-search'=>'STRING',
			'filter_lcp16_order'=>'CMD','filter_lcp16_order_Dir'=>'CMD','lcp16-filter-search'=>'STRING',
			'filter_lcp30_order'=>'CMD','filter_lcp30_order_Dir'=>'CMD','lcp30-filter-search'=>'STRING',
			'filter_lcp31_order'=>'CMD','filter_lcp31_order_Dir'=>'CMD','lcp31-filter-search'=>'STRING',
			'filter_lcp32_order'=>'CMD','filter_lcp32_order_Dir'=>'CMD','lcp32-filter-search'=>'STRING',
			'filter_lcp33_order'=>'CMD','filter_lcp33_order_Dir'=>'CMD','lcp33-filter-search'=>'STRING',
			'filter_lcp34_order'=>'CMD','filter_lcp34_order_Dir'=>'CMD','lcp34-filter-search'=>'STRING',
			'filter_lcp35_order'=>'CMD','filter_lcp35_order_Dir'=>'CMD','lcp35-filter-search'=>'STRING',
			'filter_lcp36_order'=>'CMD','filter_lcp36_order_Dir'=>'CMD','lcp36-filter-search'=>'STRING',
			'filter_lcp39_order'=>'CMD','filter_lcp39_order_Dir'=>'CMD','lcp39-filter-search'=>'STRING',
			'filter_lcp40_order'=>'CMD','filter_lcp40_order_Dir'=>'CMD','lcp40-filter-search'=>'STRING',
			'filter_lcp41_order'=>'CMD','filter_lcp41_order_Dir'=>'CMD','lcp41-filter-search'=>'STRING',
			'filter_lspe01_order'=>'CMD','filter_lspe01_order_Dir'=>'CMD','lspe01-filter-search'=>'STRING',
			'filter_lspe02_order'=>'CMD','filter_lspe02_order_Dir'=>'CMD','lspe02-filter-search'=>'STRING',
			'filter_lspe03_order'=>'CMD','filter_lspe03_order_Dir'=>'CMD','lspe03-filter-search'=>'STRING',
			'filter_lspe04_order'=>'CMD','filter_lspe04_order_Dir'=>'CMD','lspe04-filter-search'=>'STRING',
			'filter_lspe05_order'=>'CMD','filter_lspe05_order_Dir'=>'CMD','lspe05-filter-search'=>'STRING',
			'filter_lspe06_order'=>'CMD','filter_lspe06_order_Dir'=>'CMD','lspe06-filter-search'=>'STRING',
			'filter_lspe07_order'=>'CMD','filter_lspe07_order_Dir'=>'CMD','lspe07-filter-search'=>'STRING',
			'filter_lspe08_order'=>'CMD','filter_lspe08_order_Dir'=>'CMD','lspe08-filter-search'=>'STRING',
			'filter_lsps01_order'=>'CMD','filter_lsps01_order_Dir'=>'CMD','lsps01-filter-search'=>'STRING',
			'filter_lsc02_order'=>'CMD','filter_lsc02_order_Dir'=>'CMD','lsc02-filter-search'=>'STRING',
			'filter_ljc02_order'=>'CMD','filter_ljc02_order_Dir'=>'CMD','ljc02-filter-search'=>'STRING',
			'filter_ljp02_order'=>'CMD','filter_ljp02_order_Dir'=>'CMD','ljp02-filter-search'=>'STRING',
			'filter_ljccm02_order'=>'CMD','filter_ljccm02_order_Dir'=>'CMD','ljccm02-filter-search'=>'STRING',
			'filter_ljpdng02_order'=>'CMD','filter_ljpdng02_order_Dir'=>'CMD','ljpdng02-filter-search'=>'STRING',
			'filter_ljpes02_order'=>'CMD','filter_ljpes02_order_Dir'=>'CMD','ljpes02-filter-search'=>'STRING',
			'filter_ljjadng02_order'=>'CMD','filter_ljjadng02_order_Dir'=>'CMD','ljjadng02-filter-search'=>'STRING',
			'filter_ljjadg02_order'=>'CMD','filter_ljjadg02_order_Dir'=>'CMD','ljjadg02-filter-search'=>'STRING',
			'filter_lsps02_order'=>'CMD','filter_lsps02_order_Dir'=>'CMD','lsps02-filter-search'=>'STRING',
			'filter_lejemplo_order'=>'CMD','filter_lejemplo_order_Dir'=>'CMD','lejemplo-filter-search'=>'STRING',
			'filter_lsc03_order'=>'CMD','filter_lsc03_order_Dir'=>'CMD','lsc03-filter-search'=>'STRING',
			'filter_ljc03_order'=>'CMD','filter_ljc03_order_Dir'=>'CMD','ljc03-filter-search'=>'STRING',
			'filter_ljccm03_order'=>'CMD','filter_ljccm03_order_Dir'=>'CMD','ljccm03-filter-search'=>'STRING',
			'filter_ljoc03_order'=>'CMD','filter_ljoc03_order_Dir'=>'CMD','ljoc03-filter-search'=>'STRING',
			'filter_ljpdng03_order'=>'CMD','filter_ljpdng03_order_Dir'=>'CMD','ljpdng03-filter-search'=>'STRING',
			'filter_ljpes03_order'=>'CMD','filter_ljpes03_order_Dir'=>'CMD','ljpes03-filter-search'=>'STRING',
			'filter_ljjadng03_order'=>'CMD','filter_ljjadng03_order_Dir'=>'CMD','ljjadng03-filter-search'=>'STRING',
			'filter_ljjadg03_order'=>'CMD','filter_ljjadg03_order_Dir'=>'CMD','ljjadg03-filter-search'=>'STRING',
			'filter_lsps03_order'=>'CMD','filter_lsps03_order_Dir'=>'CMD','lsps03-filter-search'=>'STRING',
			'filter_lsc04_order'=>'CMD','filter_lsc04_order_Dir'=>'CMD','lsc04-filter-search'=>'STRING',
			'filter_ljc04_order'=>'CMD','filter_ljc04_order_Dir'=>'CMD','ljc04-filter-search'=>'STRING',
			'filter_ljf04_order'=>'CMD','filter_ljf04_order_Dir'=>'CMD','ljf04-filter-search'=>'STRING',
			'filter_ljp04_order'=>'CMD','filter_ljp04_order_Dir'=>'CMD','ljp04-filter-search'=>'STRING',
			'filter_ljoc04_order'=>'CMD','filter_ljoc04_order_Dir'=>'CMD','ljoc04-filter-search'=>'STRING',
			'filter_ljpdng04_order'=>'CMD','filter_ljpdng04_order_Dir'=>'CMD','ljpdng04-filter-search'=>'STRING',
			'filter_ljpes04_order'=>'CMD','filter_ljpes04_order_Dir'=>'CMD','ljpes04-filter-search'=>'STRING',
			'filter_ljjadng04_order'=>'CMD','filter_ljjadng04_order_Dir'=>'CMD','ljjadng04-filter-search'=>'STRING',
			'filter_ljjadg04_order'=>'CMD','filter_ljjadg04_order_Dir'=>'CMD','ljjadg04-filter-search'=>'STRING',
			'filter_lsps04_order'=>'CMD','filter_lsps04_order_Dir'=>'CMD','lsps04-filter-search'=>'STRING',
			'filter_lsc05_order'=>'CMD','filter_lsc05_order_Dir'=>'CMD','lsc05-filter-search'=>'STRING',
			'filter_ljc05_order'=>'CMD','filter_ljc05_order_Dir'=>'CMD','ljc05-filter-search'=>'STRING',
			'filter_ljf05_order'=>'CMD','filter_ljf05_order_Dir'=>'CMD','ljf05-filter-search'=>'STRING',
			'filter_ljp05_order'=>'CMD','filter_ljp05_order_Dir'=>'CMD','ljp05-filter-search'=>'STRING',
			'filter_ljccm05_order'=>'CMD','filter_ljccm05_order_Dir'=>'CMD','ljccm05-filter-search'=>'STRING',
			'filter_ljoc05_order'=>'CMD','filter_ljoc05_order_Dir'=>'CMD','ljoc05-filter-search'=>'STRING',
			'filter_ljpdng05_order'=>'CMD','filter_ljpdng05_order_Dir'=>'CMD','ljpdng05-filter-search'=>'STRING',
			'filter_ljpes05_order'=>'CMD','filter_ljpes05_order_Dir'=>'CMD','ljpes05-filter-search'=>'STRING',
			'filter_ljjadng05_order'=>'CMD','filter_ljjadng05_order_Dir'=>'CMD','ljjadng05-filter-search'=>'STRING',
			'filter_ljjadg05_order'=>'CMD','filter_ljjadg05_order_Dir'=>'CMD','ljjadg05-filter-search'=>'STRING',
			'filter_lsps05_order'=>'CMD','filter_lsps05_order_Dir'=>'CMD','lsps05-filter-search'=>'STRING',
			'filter_lsc06_order'=>'CMD','filter_lsc06_order_Dir'=>'CMD','lsc06-filter-search'=>'STRING',
			'filter_ljc06_order'=>'CMD','filter_ljc06_order_Dir'=>'CMD','ljc06-filter-search'=>'STRING',
			'filter_ljf06_order'=>'CMD','filter_ljf06_order_Dir'=>'CMD','ljf06-filter-search'=>'STRING',
			'filter_ljp06_order'=>'CMD','filter_ljp06_order_Dir'=>'CMD','ljp06-filter-search'=>'STRING',
			'filter_ljccm06_order'=>'CMD','filter_ljccm06_order_Dir'=>'CMD','ljccm06-filter-search'=>'STRING',
			'filter_ljoc06_order'=>'CMD','filter_ljoc06_order_Dir'=>'CMD','ljoc06-filter-search'=>'STRING',
			'filter_ljpdng06_order'=>'CMD','filter_ljpdng06_order_Dir'=>'CMD','ljpdng06-filter-search'=>'STRING',
			'filter_ljpes06_order'=>'CMD','filter_ljpes06_order_Dir'=>'CMD','ljpes06-filter-search'=>'STRING',
			'filter_ljjadng06_order'=>'CMD','filter_ljjadng06_order_Dir'=>'CMD','ljjadng06-filter-search'=>'STRING',
			'filter_ljjadg06_order'=>'CMD','filter_ljjadg06_order_Dir'=>'CMD','ljjadg06-filter-search'=>'STRING',
			'filter_lsps06_order'=>'CMD','filter_lsps06_order_Dir'=>'CMD','lsps06-filter-search'=>'STRING',
			'filter_lsc07_order'=>'CMD','filter_lsc07_order_Dir'=>'CMD','lsc07-filter-search'=>'STRING',
			'filter_ljc07_order'=>'CMD','filter_ljc07_order_Dir'=>'CMD','ljc07-filter-search'=>'STRING',
			'filter_ljf07_order'=>'CMD','filter_ljf07_order_Dir'=>'CMD','ljf07-filter-search'=>'STRING',
			'filter_ljccm07_order'=>'CMD','filter_ljccm07_order_Dir'=>'CMD','ljccm07-filter-search'=>'STRING',
			'filter_ljoc07_order'=>'CMD','filter_ljoc07_order_Dir'=>'CMD','ljoc07-filter-search'=>'STRING',
			'filter_ljpdng07_order'=>'CMD','filter_ljpdng07_order_Dir'=>'CMD','ljpdng07-filter-search'=>'STRING',
			'filter_ljpes07_order'=>'CMD','filter_ljpes07_order_Dir'=>'CMD','ljpes07-filter-search'=>'STRING',
			'filter_ljjadng07_order'=>'CMD','filter_ljjadng07_order_Dir'=>'CMD','ljjadng07-filter-search'=>'STRING',
			'filter_lsps07_order'=>'CMD','filter_lsps07_order_Dir'=>'CMD','lsps07-filter-search'=>'STRING',
			'filter_lsc08_order'=>'CMD','filter_lsc08_order_Dir'=>'CMD','lsc08-filter-search'=>'STRING',
			'filter_ljc08_order'=>'CMD','filter_ljc08_order_Dir'=>'CMD','ljc08-filter-search'=>'STRING',
			'filter_ljf08_order'=>'CMD','filter_ljf08_order_Dir'=>'CMD','ljf08-filter-search'=>'STRING',
			'filter_ljp08_order'=>'CMD','filter_ljp08_order_Dir'=>'CMD','ljp08-filter-search'=>'STRING',
			'filter_ljccm08_order'=>'CMD','filter_ljccm08_order_Dir'=>'CMD','ljccm08-filter-search'=>'STRING',
			'filter_ljoc08_order'=>'CMD','filter_ljoc08_order_Dir'=>'CMD','ljoc08-filter-search'=>'STRING',
			'filter_ljpdng08_order'=>'CMD','filter_ljpdng08_order_Dir'=>'CMD','ljpdng08-filter-search'=>'STRING',
			'filter_ljpes08_order'=>'CMD','filter_ljpes08_order_Dir'=>'CMD','ljpes08-filter-search'=>'STRING',
			'filter_ljjadng08_order'=>'CMD','filter_ljjadng08_order_Dir'=>'CMD','ljjadng08-filter-search'=>'STRING',
			'filter_lsc14_order'=>'CMD','filter_lsc14_order_Dir'=>'CMD','lsc14-filter-search'=>'STRING',
			'filter_lsps08_order'=>'CMD','filter_lsps08_order_Dir'=>'CMD','lsps08-filter-search'=>'STRING',
			'filter_lsc09_order'=>'CMD','filter_lsc09_order_Dir'=>'CMD','lsc09-filter-search'=>'STRING',
			'filter_ljc09_order'=>'CMD','filter_ljc09_order_Dir'=>'CMD','ljc09-filter-search'=>'STRING',
			'filter_ljf09_order'=>'CMD','filter_ljf09_order_Dir'=>'CMD','ljf09-filter-search'=>'STRING',
			'filter_ljp09_order'=>'CMD','filter_ljp09_order_Dir'=>'CMD','ljp09-filter-search'=>'STRING',
			'filter_ljccm09_order'=>'CMD','filter_ljccm09_order_Dir'=>'CMD','ljccm09-filter-search'=>'STRING',
			'filter_ljoc09_order'=>'CMD','filter_ljoc09_order_Dir'=>'CMD','ljoc09-filter-search'=>'STRING',
			'filter_ljpdng09_order'=>'CMD','filter_ljpdng09_order_Dir'=>'CMD','ljpdng09-filter-search'=>'STRING',
			'filter_ljpes09_order'=>'CMD','filter_ljpes09_order_Dir'=>'CMD','ljpes09-filter-search'=>'STRING',
			'filter_ljjadng09_order'=>'CMD','filter_ljjadng09_order_Dir'=>'CMD','ljjadng09-filter-search'=>'STRING',
			'filter_ljjadg09_order'=>'CMD','filter_ljjadg09_order_Dir'=>'CMD','ljjadg09-filter-search'=>'STRING',
			'filter_lsps09_order'=>'CMD','filter_lsps09_order_Dir'=>'CMD','lsps09-filter-search'=>'STRING',
			'filter_lsc10_order'=>'CMD','filter_lsc10_order_Dir'=>'CMD','lsc10-filter-search'=>'STRING',
			'filter_ljc10_order'=>'CMD','filter_ljc10_order_Dir'=>'CMD','ljc10-filter-search'=>'STRING',
			'filter_ljf10_order'=>'CMD','filter_ljf10_order_Dir'=>'CMD','ljf10-filter-search'=>'STRING',
			'filter_ljp10_order'=>'CMD','filter_ljp10_order_Dir'=>'CMD','ljp10-filter-search'=>'STRING',
			'filter_ljccm10_order'=>'CMD','filter_ljccm10_order_Dir'=>'CMD','ljccm10-filter-search'=>'STRING',
			'filter_ljoc10_order'=>'CMD','filter_ljoc10_order_Dir'=>'CMD','ljoc10-filter-search'=>'STRING',
			'filter_ljpdng10_order'=>'CMD','filter_ljpdng10_order_Dir'=>'CMD','ljpdng10-filter-search'=>'STRING',
			'filter_ljpes10_order'=>'CMD','filter_ljpes10_order_Dir'=>'CMD','ljpes10-filter-search'=>'STRING',
			'filter_ljjadng10_order'=>'CMD','filter_ljjadng10_order_Dir'=>'CMD','ljjadng10-filter-search'=>'STRING',
			'filter_ljjadg10_order'=>'CMD','filter_ljjadg10_order_Dir'=>'CMD','ljjadg10-filter-search'=>'STRING',
			'filter_lsps10_order'=>'CMD','filter_lsps10_order_Dir'=>'CMD','lsps10-filter-search'=>'STRING',
			'filter_lsc11_order'=>'CMD','filter_lsc11_order_Dir'=>'CMD','lsc11-filter-search'=>'STRING',
			'filter_ljf11_order'=>'CMD','filter_ljf11_order_Dir'=>'CMD','ljf11-filter-search'=>'STRING',
			'filter_ljp11_order'=>'CMD','filter_ljp11_order_Dir'=>'CMD','ljp11-filter-search'=>'STRING',
			'filter_ljccm11_order'=>'CMD','filter_ljccm11_order_Dir'=>'CMD','ljccm11-filter-search'=>'STRING',
			'filter_ljoc11_order'=>'CMD','filter_ljoc11_order_Dir'=>'CMD','ljoc11-filter-search'=>'STRING',
			'filter_ljpdng11_order'=>'CMD','filter_ljpdng11_order_Dir'=>'CMD','ljpdng11-filter-search'=>'STRING',
			'filter_ljpes11_order'=>'CMD','filter_ljpes11_order_Dir'=>'CMD','ljpes11-filter-search'=>'STRING',
			'filter_ljjadng11_order'=>'CMD','filter_ljjadng11_order_Dir'=>'CMD','ljjadng11-filter-search'=>'STRING',
			'filter_ljjadg11_order'=>'CMD','filter_ljjadg11_order_Dir'=>'CMD','ljjadg11-filter-search'=>'STRING',
			'filter_lsps11_order'=>'CMD','filter_lsps11_order_Dir'=>'CMD','lsps11-filter-search'=>'STRING',
			'filter_lsc12_order'=>'CMD','filter_lsc12_order_Dir'=>'CMD','lsc12-filter-search'=>'STRING',
			'filter_ljc12_order'=>'CMD','filter_ljc12_order_Dir'=>'CMD','ljc12-filter-search'=>'STRING',
			'filter_ljf12_order'=>'CMD','filter_ljf12_order_Dir'=>'CMD','ljf12-filter-search'=>'STRING',
			'filter_ljp12_order'=>'CMD','filter_ljp12_order_Dir'=>'CMD','ljp12-filter-search'=>'STRING',
			'filter_ljccm12_order'=>'CMD','filter_ljccm12_order_Dir'=>'CMD','ljccm12-filter-search'=>'STRING',
			'filter_ljoc12_order'=>'CMD','filter_ljoc12_order_Dir'=>'CMD','ljoc12-filter-search'=>'STRING',
			'filter_ljpdng12_order'=>'CMD','filter_ljpdng12_order_Dir'=>'CMD','ljpdng12-filter-search'=>'STRING',
			'filter_ljpes12_order'=>'CMD','filter_ljpes12_order_Dir'=>'CMD','ljpes12-filter-search'=>'STRING',
			'filter_ljjadng12_order'=>'CMD','filter_ljjadng12_order_Dir'=>'CMD','ljjadng12-filter-search'=>'STRING',
			'filter_lsps12_order'=>'CMD','filter_lsps12_order_Dir'=>'CMD','lsps12-filter-search'=>'STRING',
			'filter_lsc13_order'=>'CMD','filter_lsc13_order_Dir'=>'CMD','lsc13-filter-search'=>'STRING',
			'filter_ljc13_order'=>'CMD','filter_ljc13_order_Dir'=>'CMD','ljc13-filter-search'=>'STRING',
			'filter_ljf13_order'=>'CMD','filter_ljf13_order_Dir'=>'CMD','ljf13-filter-search'=>'STRING',
			'filter_ljp13_order'=>'CMD','filter_ljp13_order_Dir'=>'CMD','ljp13-filter-search'=>'STRING',
			'filter_ljccm13_order'=>'CMD','filter_ljccm13_order_Dir'=>'CMD','ljccm13-filter-search'=>'STRING',
			'filter_ljoc13_order'=>'CMD','filter_ljoc13_order_Dir'=>'CMD','ljoc13-filter-search'=>'STRING',
			'filter_ljpdng13_order'=>'CMD','filter_ljpdng13_order_Dir'=>'CMD','ljpdng13-filter-search'=>'STRING',
			'filter_ljpes13_order'=>'CMD','filter_ljpes13_order_Dir'=>'CMD','ljpes13-filter-search'=>'STRING',
			'filter_ljjadg13_order'=>'CMD','filter_ljjadg13_order_Dir'=>'CMD','ljjadg13-filter-search'=>'STRING',
			'filter_lsps13_order'=>'CMD','filter_lsps13_order_Dir'=>'CMD','lsps13-filter-search'=>'STRING',
			'filter_ljc14_order'=>'CMD','filter_ljc14_order_Dir'=>'CMD','ljc14-filter-search'=>'STRING',
			'filter_ljf14_order'=>'CMD','filter_ljf14_order_Dir'=>'CMD','ljf14-filter-search'=>'STRING',
			'filter_ljp14_order'=>'CMD','filter_ljp14_order_Dir'=>'CMD','ljp14-filter-search'=>'STRING',
			'filter_ljoc14_order'=>'CMD','filter_ljoc14_order_Dir'=>'CMD','ljoc14-filter-search'=>'STRING',
			'filter_ljpdng14_order'=>'CMD','filter_ljpdng14_order_Dir'=>'CMD','ljpdng14-filter-search'=>'STRING',
			'filter_ljpes14_order'=>'CMD','filter_ljpes14_order_Dir'=>'CMD','ljpes14-filter-search'=>'STRING',
			'filter_ljjadg14_order'=>'CMD','filter_ljjadg14_order_Dir'=>'CMD','ljjadg14-filter-search'=>'STRING',
			'filter_lsps14_order'=>'CMD','filter_lsps14_order_Dir'=>'CMD','lsps14-filter-search'=>'STRING',
			'filter_ljf15_order'=>'CMD','filter_ljf15_order_Dir'=>'CMD','ljf15-filter-search'=>'STRING',
			'filter_ljccm15_order'=>'CMD','filter_ljccm15_order_Dir'=>'CMD','ljccm15-filter-search'=>'STRING',
			'filter_ljpdng15_order'=>'CMD','filter_ljpdng15_order_Dir'=>'CMD','ljpdng15-filter-search'=>'STRING',
			'filter_ljpes15_order'=>'CMD','filter_ljpes15_order_Dir'=>'CMD','ljpes15-filter-search'=>'STRING',
			'filter_ljjadg15_order'=>'CMD','filter_ljjadg15_order_Dir'=>'CMD','ljjadg15-filter-search'=>'STRING',
			'filter_ljc16_order'=>'CMD','filter_ljc16_order_Dir'=>'CMD','ljc16-filter-search'=>'STRING',
			'filter_ljf16_order'=>'CMD','filter_ljf16_order_Dir'=>'CMD','ljf16-filter-search'=>'STRING',
			'filter_ljp16_order'=>'CMD','filter_ljp16_order_Dir'=>'CMD','ljp16-filter-search'=>'STRING',
			'filter_ljccm16_order'=>'CMD','filter_ljccm16_order_Dir'=>'CMD','ljccm16-filter-search'=>'STRING',
			'filter_ljpdng16_order'=>'CMD','filter_ljpdng16_order_Dir'=>'CMD','ljpdng16-filter-search'=>'STRING',
			'filter_ljpes16_order'=>'CMD','filter_ljpes16_order_Dir'=>'CMD','ljpes16-filter-search'=>'STRING',
			'filter_ljjadg16_order'=>'CMD','filter_ljjadg16_order_Dir'=>'CMD','ljjadg16-filter-search'=>'STRING',
			'filter_ljc17_order'=>'CMD','filter_ljc17_order_Dir'=>'CMD','ljc17-filter-search'=>'STRING',
			'filter_ljf17_order'=>'CMD','filter_ljf17_order_Dir'=>'CMD','ljf17-filter-search'=>'STRING',
			'filter_ljp17_order'=>'CMD','filter_ljp17_order_Dir'=>'CMD','ljp17-filter-search'=>'STRING',
			'filter_ljccm17_order'=>'CMD','filter_ljccm17_order_Dir'=>'CMD','ljccm17-filter-search'=>'STRING',
			'filter_ljpdng17_order'=>'CMD','filter_ljpdng17_order_Dir'=>'CMD','ljpdng17-filter-search'=>'STRING',
			'filter_ljpes17_order'=>'CMD','filter_ljpes17_order_Dir'=>'CMD','ljpes17-filter-search'=>'STRING',
			'filter_ljjadg17_order'=>'CMD','filter_ljjadg17_order_Dir'=>'CMD','ljjadg17-filter-search'=>'STRING',
			'filter_ljc18_order'=>'CMD','filter_ljc18_order_Dir'=>'CMD','ljc18-filter-search'=>'STRING',
			'filter_ljf18_order'=>'CMD','filter_ljf18_order_Dir'=>'CMD','ljf18-filter-search'=>'STRING',
			'filter_ljp18_order'=>'CMD','filter_ljp18_order_Dir'=>'CMD','ljp18-filter-search'=>'STRING',
			'filter_ljpdng18_order'=>'CMD','filter_ljpdng18_order_Dir'=>'CMD','ljpdng18-filter-search'=>'STRING',
			'filter_ljjadg18_order'=>'CMD','filter_ljjadg18_order_Dir'=>'CMD','ljjadg18-filter-search'=>'STRING',
			'filter_ljpes18_order'=>'CMD','filter_ljpes18_order_Dir'=>'CMD','ljpes18-filter-search'=>'STRING',
			'filter_ljc19_order'=>'CMD','filter_ljc19_order_Dir'=>'CMD','ljc19-filter-search'=>'STRING',
			'filter_ljf19_order'=>'CMD','filter_ljf19_order_Dir'=>'CMD','ljf19-filter-search'=>'STRING',
			'filter_ljp19_order'=>'CMD','filter_ljp19_order_Dir'=>'CMD','ljp19-filter-search'=>'STRING',
			'filter_ljc20_order'=>'CMD','filter_ljc20_order_Dir'=>'CMD','ljc20-filter-search'=>'STRING',
			'filter_ljf20_order'=>'CMD','filter_ljf20_order_Dir'=>'CMD','ljf20-filter-search'=>'STRING',
			'filter_ljp20_order'=>'CMD','filter_ljp20_order_Dir'=>'CMD','ljp20-filter-search'=>'STRING',
			'filter_ljc21_order'=>'CMD','filter_ljc21_order_Dir'=>'CMD','ljc21-filter-search'=>'STRING',
			'filter_ljf21_order'=>'CMD','filter_ljf21_order_Dir'=>'CMD','ljf21-filter-search'=>'STRING',
			'filter_ljp21_order'=>'CMD','filter_ljp21_order_Dir'=>'CMD','ljp21-filter-search'=>'STRING',
			'filter_ljf22_order'=>'CMD','filter_ljf22_order_Dir'=>'CMD','ljf22-filter-search'=>'STRING',
			'print'=>'BOOLEAN','lang'=>'CMD', 'Itemid'=>'INT');

		parent::display($cachable,$safe_url_params);

		return $this;
	}
}
