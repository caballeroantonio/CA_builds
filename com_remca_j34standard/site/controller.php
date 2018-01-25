<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManager
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.site
 * @copyright		
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
 * RealEstateManager Component Controller
 *
 */
class RemcaController extends JControllerLegacy
{
	/**
	 * @var		string	$default_view	The default view.
	 */
	protected $default_view = 'houses';
	
	/**
	 * Constructor
	 *
	 */	
	public function __construct($config = array())
	{
		$this->input = JFactory::getApplication()->input;

				
		// Pagebreak proxying:
		if (($this->input->getString('view') === 'article' OR $this->input->getString('view') === 'default') AND $this->input->getString('layout') === 'pagebreak')
		{
			$config['base_path'] = JPATH_COMPONENT_ADMINISTRATOR;
		}
		
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
            $this->setRedirect('index.php?option=com_users&view=login&Itemid=233',JText::_('COM_REMCA_LOGIN_REQUIRED'));
            return;
        }
//[%%END_CUSTOM_CODE%%]

		$safe_url_params = array(
			'catid'=>'INT','cid'=>'ARRAY',
			'id'=>'INT','year'=>'INT','month'=>'INT','limit'=>'uINT',
			'limitstart'=>'uINT','showall'=>'INT','return'=>'BASE64',
			'filter'=>'STRING','filter_order'=>'CMD','filter_order_Dir'=>'CMD','filter-search'=>'STRING',
			'filter_house_order'=>'CMD','filter_house_order_Dir'=>'CMD','house-filter-search'=>'STRING',
			'filter_maincategory_order'=>'CMD','filter_maincategory_order_Dir'=>'CMD','maincategory-filter-search'=>'STRING',
			'filter_mimetype_order'=>'CMD','filter_mimetype_order_Dir'=>'CMD','mimetype-filter-search'=>'STRING',
			'filter_mlsfordelete_order'=>'CMD','filter_mlsfordelete_order_Dir'=>'CMD','mlsfordelete-filter-search'=>'STRING',
			'filter_order_order'=>'CMD','filter_order_order_Dir'=>'CMD','order-filter-search'=>'STRING',
			'filter_ordersdetail_order'=>'CMD','filter_ordersdetail_order_Dir'=>'CMD','ordersdetail-filter-search'=>'STRING',
			'filter_photo_order'=>'CMD','filter_photo_order_Dir'=>'CMD','photo-filter-search'=>'STRING',
			'filter_rent_order'=>'CMD','filter_rent_order_Dir'=>'CMD','rent-filter-search'=>'STRING',
			'filter_rentrequest_order'=>'CMD','filter_rentrequest_order_Dir'=>'CMD','rentrequest-filter-search'=>'STRING',
			'filter_rentsal_order'=>'CMD','filter_rentsal_order_Dir'=>'CMD','rentsal-filter-search'=>'STRING',
			'filter_review_order'=>'CMD','filter_review_order_Dir'=>'CMD','review-filter-search'=>'STRING',
			'filter_tracksource_order'=>'CMD','filter_tracksource_order_Dir'=>'CMD','tracksource-filter-search'=>'STRING',
			'filter_userswishlist_order'=>'CMD','filter_userswishlist_order_Dir'=>'CMD','userswishlist-filter-search'=>'STRING',
			'filter_videosource_order'=>'CMD','filter_videosource_order_Dir'=>'CMD','videosource-filter-search'=>'STRING',
			'filter_buyingrequest_order'=>'CMD','filter_buyingrequest_order_Dir'=>'CMD','buyingrequest-filter-search'=>'STRING',
			'filter_category_order'=>'CMD','filter_category_order_Dir'=>'CMD','category-filter-search'=>'STRING',
			'filter_const_order'=>'CMD','filter_const_order_Dir'=>'CMD','const-filter-search'=>'STRING',
			'filter_constlanguage_order'=>'CMD','filter_constlanguage_order_Dir'=>'CMD','constlanguage-filter-search'=>'STRING',
			'filter_feature_order'=>'CMD','filter_feature_order_Dir'=>'CMD','feature-filter-search'=>'STRING',
			'filter_featurehouse_order'=>'CMD','filter_featurehouse_order_Dir'=>'CMD','featurehouse-filter-search'=>'STRING',
			'filter_language_order'=>'CMD','filter_language_order_Dir'=>'CMD','language-filter-search'=>'STRING',
			'print'=>'BOOLEAN','lang'=>'CMD', 'Itemid'=>'INT');

		parent::display($cachable,$safe_url_params);

		return $this;
	}
}
