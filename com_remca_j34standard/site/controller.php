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
			'filter_rem_category_order'=>'CMD','filter_rem_category_order_Dir'=>'CMD','rem_category-filter-search'=>'STRING',
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
        
        /**
         * aplicar los filtros que vienen del GRID ExtJS
         * @param array $filter Los filtros que se van a aplicar
         * @param object $query la referencia del query
         * @param boolean $seachJoins se relaciona con $thefilter['data']['type'] == 'hasmany' para hacer joins
         * @todo re-codificar [$query->where("l.] en index.php?option=com_tsjdf_libros2&task=libros.read&store=admin&store=admin&clave=empleados no me gusta que el alias sea 'l'
         */
        protected function applyFilter($filter, &$query, $seachJoins = true){
                /*
              en $joins pongo los joins para buscar si se repiten
              l	libro		jtvl_XXX
              e	expediente	jt_expedientes
             */
            $joins = array();
            if (!is_array($filter))
                $filter = json_decode($filter, true);
            foreach ($filter as $filterIndex => $thefilter) {
                //ExtJS está enviando filter [{"property":"tipojuicio"}], para cargar asincronamente.
                if (!isset($thefilter['data']))
                    break;
                $thefilter['data']['value'] = $this->db->escape($thefilter['data']['value']);
                switch ($thefilter['data']['type']) {
                    case 'string':
                        $query->where("l.{$thefilter['field']} LIKE '%{$thefilter['data']['value']}%'");
                        break;
                    case 'date':
                        switch ($thefilter['data']['comparison']) {
                            case 'eq':
                                $query->where("l.{$thefilter['field']} LIKE '{$thefilter['data']['value']}%'");
                                break;
                            case 'lt':
                                $query->where("l.{$thefilter['field']} < '{$thefilter['data']['value']}'");
                                break;
                            case 'gt':
                                $query->where("l.{$thefilter['field']} > '{$thefilter['data']['value']}'");
                                break;
                        }
                        break;
                    case 'numeric':
                        switch ($thefilter['data']['comparison']) {
                            case 'eq':
                                $query->where("l.{$thefilter['field']} = '{$thefilter['data']['value']}'");
                                break;
                            case 'lt':
                                $query->where("l.{$thefilter['field']} < '{$thefilter['data']['value']}'");
                                break;
                            case 'gt':
                                $query->where("l.{$thefilter['field']} > '{$thefilter['data']['value']}'");
                                break;
                        }
                        break;
                    case 'list':
                        $values = explode(',', $thefilter['data']['value']);
                        foreach ($values as $value) {
                            $query->where("l.{$thefilter['field']} = {$value}", 'AND');
                        }
                        break;
                    case 'hasmany':
                        //$hasmany-> id_field, $hasmany->tabla
                        if ($thefilter['field'] == 'slpartecontenciosa') {
                            $hasmany = new stdClass();
                            $hasmany->id_field = 2156;
                            $hasmany->tabla = 'jt_vslpartescontenciosas';

                            if ($seachJoins && !in_array("e", $joins)) {
                                array_push($joins, 'e');
                                $query->join('INNER', 'jt_expedientes e ON l.id_expediente = e.id');
                            }
                            if ($seachJoins && !in_array('p', $joins)) {
                                array_push($joins, 'p');
                                $query->join('INNER', "{$hasmany->tabla} p ON e.id = p.id_record AND p.id_field = {$hasmany->id_field} ");
                            }
                            $query->where("p.{$thefilter['data']['field']} LIKE '%{$thefilter['data']['value']}%' \n", 'AND');
                        } else if ($thefilter['field'] == 'id_expediente') {
                            if ($seachJoins && !in_array("e", $joins)) {
                                array_push($joins, 'e');
                                $query->join('INNER', 'jt_expedientes e ON l.id_expediente = e.id');
                            }
                            $query->where("e.{$thefilter['data']['field']} = '{$thefilter['data']['value']}' \n", 'AND');
                        } else {
                            $this->setQuery("SELECT c.id AS id_field, l.tabla, l.view FROM jt3_campos c
                                                        INNER JOIN jtc_libros l ON l.clave = c.store
                                                        WHERE c.clave = '{$this->clave}' 
                                                        AND c.dataType = 'parent'
                                                        AND c.dataIndex = '{$thefilter['field']}';");
                            $hasmany = $this->db->loadObject();
                            if ($seachJoins && !in_array("c{$hasmany->id_field}", $joins)) {
                                array_push($joins, "c{$hasmany->id_field}");
                                $query->join('INNER', "{$hasmany->view} c{$hasmany->id_field} ON l.id = c{$hasmany->id_field}.id_record 
                                                                        AND c{$hasmany->id_field}.id_field = {$hasmany->id_field}");
                            }
                            $query->where("c{$hasmany->id_field}.{$thefilter['data']['field']} LIKE '%{$thefilter['data']['value']}%' \n", 'AND');
                        }
                        break;
                }
            }
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
            
            #sort
            $sort = json_decode(JRequest::getVar('sort'),0);
            if($sort){
                $query->clear('order');
                $query->order("a.{$sort[0]->property} {$sort[0]->direction}");
            }
            
            #filter
            $filter = JRequest::getVar('filter');
            if($filter){
                $this->applyFilter( $filter, $query);
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
            $callback = JRequest::getCmd('callback');
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
            ->where('extension = "com_remca"')
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
