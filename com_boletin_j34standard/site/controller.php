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
 * Boletines Component Controller
 *
 */
class BoletinController extends JControllerLegacy
{
	/**
	 * @var		string	$default_view	The default view.
	 */
	protected $default_view = 'facuerdos';
	
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
/*
@ToDo encontrar la forma de parametrizar el Itemid
edité el menú login para que hiciera redirect a este componente
  "login_redirect_menuitem": "544",
*/
        if(!$user->authorise('core.site', 'com_boletin')){
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
			'filter_facuerdo_order'=>'CMD','filter_facuerdo_order_Dir'=>'CMD','facuerdo-filter-search'=>'STRING',
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
            $model = $this->getModel = $this->getModel($code_name_plural,'BoletinModel',array('ignore_request' => FALSE));
			
            $input = JFactory::getApplication()->input;
            $offset = $input->get('start', 0, 'uint');
            $limit = $input->get('limit', 25, 'uint');
            $model->setState('filter.state', 1);
            $query = $model->getListQuery4Export($limit, $offset);
            $sort = json_decode(JRequest::getVar('sort'),0);
            if($sort){
                $query->clear('order');
                $query->order("a.{$sort[0]->property} {$sort[0]->direction}");
            }
            
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

            $this->finish_extjs($result);
        }
        
        /*        
         * Function that allows download database information
         * @ToDo implementar ACL
         */
        public function json_save(){
            //die('not allowed');
            $result = array('data'=> array(), 'success' => true, 'warning' => false, 'message' => '');
            
            $code_name = JRequest::getCmd('model');
            
            $model = JModelLegacy::getInstance("{$code_name}Form",'BoletinModel', array('ignore_request' => FALSE));
            
            
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
            $callback = $_REQUEST['callback'];
            //start output
            if ($callback) {
                header('Content-Type: text/javascript');
                echo $callback . '(' . json_encode($result) . ');';
            } else {
                header('Content-Type: application/x-json');
                echo json_encode($result);
            }
            
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
            ->where('extension = "com_boletin"')
            #->where('published')
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
