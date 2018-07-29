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
 * Municipalities list controller class.
 *
 */
class RemcaControllerRemca extends JControllerLegacy
{
	/**
	 * @var		string	The prefix to use with controller messages.
	 */
	protected $text_prefix = 'COM_REMCA_LMUNICIPALITIES';
	/**
	 * @var		string	The name of the list view.
	 */	
	protected $view_list = 'lmunicipalities';
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
	public function getModel($name = 'Lmunicipalities', $prefix = 'RemcaModel',$config = array('ignore_request' => true))
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
			//$model = JModelLegacy::getInstance('LmunicipalityForm','RemcaModel', array('ignore_request' => FALSE));
			
            $model = $this->getModel('Lmunicipalities','RemcaModel',array('ignore_request' => FALSE));
			
			//states
//			$model->setState('list.ordering', 'a.ordering');//override
//			$model->setState('list.direction', 'ASC');//override
//			$model->setState('list.select', 'a.*');//override
			$model->setState('filter.state', 1);
            $query = $model->getListQuery4Export();
            echo($query);
        }
        
        /**
         * user check wish form
         */
        function wish_request(){
            $user = JFactory::getUser();           
            $result = array('data'=> array(), 'success' => true, 'warning' => false, 'message' => '');
        
            if($user->guest){
                $result['success'] = false;
                $result['message'] .= 'La sesi?n ha caducado. Vuelve a identificarte.<br/>';
                http_response_code(401);
            }else{
                $db = JFactory::getDBO();
                $data  = $this->input->post->get('jform', array(), 'array');
                
                foreach ($data as $key => $value) {
                    $data[$key] = $db->escape($value);#$db->quote($value);
                }
                
                //$query = "SELECT id FROM #__rem_wisheslist WHERE id_user = '{$user->id}' AND id_house = '{$data['id_house']}';";
                $query = "SELECT id FROM #__rem_wisheslist WHERE created_by = '{$user->id}' AND id_house = '{$data['id_house']}';";
                $db->setQuery($query);
                $wishlist = $db->loadAssoc();
                
                if($wishlist){
                    $data['id'] = $wishlist['id'];
                }
//                $data['id_user'] = $user->id;
                
                //$model = $this->getModel('wishlistform');
                $model = JModelLegacy::getInstance('WishlistForm','RemcaModel', array('ignore_request' => FALSE));
                $result['success'] = $model->save($data);
            }
            
            $format = JRequest :: getCmd('format','json');
            switch($format){
                case 'txt':
                    JFactory::getDocument()->setMimeEncoding('text/plain');
                break;
            }
            echo json_encode($result);
            exit();
        }
		
        /**
         * user check contact form
         */
        function contact_request(){
            $data  = $this->input->post->get('jform', array(), 'array');
            $house = $this->getModel('houseform')->getItem($data['id_house']);
            $owneremail = $house->get('owneremail');
            
            if($owneremail){
                $referer = $_SERVER['HTTP_REFERER'];
                $house_name = $house->get('name');
                $body = <<<EOD
    {$data['customer_name']} visitó la publicación <a href="$referer">$house_name</a><br/>
EOD;
                foreach($data as $key=>$value){
                    $label = strtoupper($key);
                    $label = "COM_REMCA_BUYING_REQUESTS_FIELD_{$label}_LABEL";
                    $label = JText::_($label);
                    $body .= "{$label}: {$value} <br/>\n";
                }
                
                $mailer = JFactory::getMailer();
                $config = JFactory::getConfig();
                $sender = array( 
                    $config->get( 'mailfrom' ),
                    $config->get( 'fromname' ) 
                );
                $mailer->setSender($sender);


                $mailer->addRecipient($owneremail);
                $mailer->setSubject('Has recibido una visita en ' .  $config->get( 'sitename' ) );
                $mailer->setBody($body);
                $mailer->isHtml(true);
                $mailer->Encoding = 'base64';

                $mailer->Send();
                
            }

            //$model = $this->getModel('buyingrequestform');
            $model = JModelLegacy::getInstance('BuyingRequestForm','RemcaModel', array('ignore_request' => FALSE));
            if (!$model->save($data)) {
                $this->setMessage(JText::sprintf('JLIB_APPLICATION_ERROR_SAVE_FAILED', $model->getError()), 'warning');
                $this->setRedirect($_SERVER['HTTP_REFERER']);
            }else{
                $this->setMessage(JText::_('REMCA_RENT_REQUEST_THANKS'));
                $this->setRedirect($_SERVER['HTTP_REFERER']);
            }
        }
}
