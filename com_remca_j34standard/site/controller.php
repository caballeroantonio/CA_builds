<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
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
 * RealEstateManagerCA Component Controller
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
/*
@ToDo encontrar la forma de parametrizar el Itemid
edité el menú login para que hiciera redirect a este componente
  "login_redirect_menuitem": "544",
*/
        if(!$user->authorise('core.site', 'com_remca')){
            if($user->guest){
                $this->setRedirect('index.php?option=com_users&view=login&Itemid=233',JText::_('JGLOBAL_YOU_MUST_LOGIN_FIRST'));
                return;                
            }else{
                JFactory::getApplication()->enqueueMessage(JText::_('JGLOBAL_AUTH_ACCESS_DENIED'), 'error');
                return;
            }
        }

		$safe_url_params = array(
			'catid'=>'INT','cid'=>'ARRAY',
			'id'=>'INT','year'=>'INT','month'=>'INT','limit'=>'uINT',
			'limitstart'=>'uINT','showall'=>'INT','return'=>'BASE64',
			'filter'=>'STRING','filter_order'=>'CMD','filter_order_Dir'=>'CMD','filter-search'=>'STRING',
			'filter_house_order'=>'CMD','filter_house_order_Dir'=>'CMD','house-filter-search'=>'STRING',
			'filter_wa_title_conversation_order'=>'CMD','filter_wa_title_conversation_order_Dir'=>'CMD','wa_title_conversation-filter-search'=>'STRING',
			'filter_wa_entry_conversation_order'=>'CMD','filter_wa_entry_conversation_order_Dir'=>'CMD','wa_entry_conversation-filter-search'=>'STRING',
			'filter_photo_order'=>'CMD','filter_photo_order_Dir'=>'CMD','photo-filter-search'=>'STRING',
			'filter_mime_type_order'=>'CMD','filter_mime_type_order_Dir'=>'CMD','mime_type-filter-search'=>'STRING',
			'filter_mls_for_delete_order'=>'CMD','filter_mls_for_delete_order_Dir'=>'CMD','mls_for_delete-filter-search'=>'STRING',
			'filter_order_order'=>'CMD','filter_order_order_Dir'=>'CMD','order-filter-search'=>'STRING',
			'filter_orders_detail_order'=>'CMD','filter_orders_detail_order_Dir'=>'CMD','orders_detail-filter-search'=>'STRING',
			'filter_main_category_order'=>'CMD','filter_main_category_order_Dir'=>'CMD','main_category-filter-search'=>'STRING',
			'filter_rent_order'=>'CMD','filter_rent_order_Dir'=>'CMD','rent-filter-search'=>'STRING',
			'filter_rent_request_order'=>'CMD','filter_rent_request_order_Dir'=>'CMD','rent_request-filter-search'=>'STRING',
			'filter_rent_sal_order'=>'CMD','filter_rent_sal_order_Dir'=>'CMD','rent_sal-filter-search'=>'STRING',
			'filter_review_order'=>'CMD','filter_review_order_Dir'=>'CMD','review-filter-search'=>'STRING',
			'filter_track_source_order'=>'CMD','filter_track_source_order_Dir'=>'CMD','track_source-filter-search'=>'STRING',
			'filter_wishlist_order'=>'CMD','filter_wishlist_order_Dir'=>'CMD','wishlist-filter-search'=>'STRING',
			'filter_video_source_order'=>'CMD','filter_video_source_order_Dir'=>'CMD','video_source-filter-search'=>'STRING',
			'filter_buying_request_order'=>'CMD','filter_buying_request_order_Dir'=>'CMD','buying_request-filter-search'=>'STRING',
			'filter_category_order'=>'CMD','filter_category_order_Dir'=>'CMD','category-filter-search'=>'STRING',
			'filter_const_order'=>'CMD','filter_const_order_Dir'=>'CMD','const-filter-search'=>'STRING',
			'filter_const_language_order'=>'CMD','filter_const_language_order_Dir'=>'CMD','const_language-filter-search'=>'STRING',
			'filter_feature_order'=>'CMD','filter_feature_order_Dir'=>'CMD','feature-filter-search'=>'STRING',
			'filter_feature_house_order'=>'CMD','filter_feature_house_order_Dir'=>'CMD','feature_house-filter-search'=>'STRING',
			'filter_language_order'=>'CMD','filter_language_order_Dir'=>'CMD','language-filter-search'=>'STRING',
			'filter_lmunicipality_order'=>'CMD','filter_lmunicipality_order_Dir'=>'CMD','lmunicipality-filter-search'=>'STRING',
			'filter_lstate_order'=>'CMD','filter_lstate_order_Dir'=>'CMD','lstate-filter-search'=>'STRING',
			'filter_country_order'=>'CMD','filter_country_order_Dir'=>'CMD','country-filter-search'=>'STRING',
			'print'=>'BOOLEAN','lang'=>'CMD', 'Itemid'=>'INT');

		parent::display($cachable,$safe_url_params);

		return $this;
	}
        
        /*        
         * Function that allows download database information
         * @ToDo implementar ACL
         */
        public function json_read(){
            $user = JFactory::getUser();
            //die('not allowed');
            $code_name_plural = JRequest::getCmd('store');
            //no recuerdo porqué habia puesto ignore_request = TRUE
            $model = $this->getModel = $this->getModel($code_name_plural,'RemcaModel',array('ignore_request' => FALSE));
			
            $input = JFactory::getApplication()->input;
            $offset = $input->get('start', 0, 'uint');
            $limit = $input->get('limit', 25, 'uint');
            $model->setState('filter.state', 1);
            $query = $model->getListQuery4Export($limit, $offset);
            
            $result = array('data'=> array(), 'success' => true, 'warning' => false, 'message' => '');
            $db = JFactory::getDBO();
            $db->setQuery($query);
            $db->query();
            $result['data'] = $db->loadAssocList();
            if($user->id == 1){
                $result['query'] = (string)$query;
            }
            
            $query->clear('limit');
            $query->clear('select');
            $query->select('COUNT(*)');            
            $db->setQuery($query);
            $db->query();	
            $result['total'] = $db->loadResult();

            echo json_encode($result);
            exit();
        }
        
        /*        
         * Function that allows download database information
         * @ToDo implementar ACL
         */
        public function json_save(){
            //die('not allowed');
            $result = array('data'=> array(), 'success' => true, 'warning' => false, 'message' => '');
            
            $code_name = JRequest::getCmd('model');
            
            $model = JModelLegacy::getInstance("{$code_name}Form",'RemcaModel', array('ignore_request' => FALSE));
            
            
            $record = json_decode(rawurldecode($_POST['data']),1);
            
            // Validate the posted data.
            $form	= $model->getForm();
            if (!$form) 
            {
                $result['message'] = $model->getError();
                $this->finish_extjs($result);
            }
            
            $result['success'] = $model->save($record);
            $errors	= $model->getErrors();
            
            foreach ($errors as $key => $error) {
                if (JError::isError($error)) 
                {
                    $result['message'] = $error->getMessage();
                }
                else 
                {
                    $result['message'] = $error;
                }
                break;
            }
            $this->finish_extjs($result);
        }

        public function finish_extjs($result){
            echo json_encode($result);
            exit();     
        }
        
        /*        
         * Function that allows download database information
         * @ToDo implementar ACL
         */
        public function json_read_categories(){
            //die('not allowed');
            
            $result = array('data'=> array(), 'success' => true, 'warning' => false, 'message' => '');
            $db = JFactory::getDBO();
            $query = $dbQuery = $db->getQuery(true);
            $query->select('id, parent_id, lft, rgt, level, title')#concat(level, " - ", title) "title"
            ->from($db->quoteName('#__categories'))
            ->where('extension = "com_remca"')
            ->where('published')
            ->order('lft')
            ;
            
            $db->setQuery($query);
            $db->query();
            $result['data'] = $db->loadAssocList();
            
            foreach ($result['data'] as $key => &$value) {
                for($i=0; $i< $value['level']; $i++){
                    $value['title'] = ' - ' . $value['title'];
                }
            }            

            $query->clear('limit');
            $query->clear('select');
            $query->select('COUNT(*)');            
            $db->setQuery($query);
            $db->query();	
            $result['total'] = $db->loadResult();

            $this->finish_extjs($result);
        }
}
