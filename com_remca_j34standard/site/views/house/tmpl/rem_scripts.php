<?php
JHtml::_('jquery.framework', false);
$doc = JFactory::getDocument();
//// add stylesheet
$doc->addStyleSheet('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
//$doc->addStyleSheet('//maxcdn.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css');
//$doc->addStyleSheet('media/com_remca/includes/animate.css');
//$doc->addScript('//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js');
$doc->addStyleSheet('media/com_remca/includes/jquery-ui.css');
//$doc->addStyleSheet('media/com_remca/includes/bootstrapREL.css');
$doc->addStyleSheet('media/com_remca/includes/realestatemanager.css');
//// $doc->addStyleSheet('media/com_remca/lightbox/css/lightbox.css');

//
//// add js
//$doc->addScript('media/com_remca/includes/functions.js');
//
//if(RemcaHelper::checkJavaScriptIncludedRE("jQuerREL-1.2.6.js") === false ) {
//  $doc->addScript('media/com_remca/lightbox/js/jQuerREL-1.2.6.js');
//} 
//
//$doc->addScriptDeclaration("jQuerREL=jQuerREL.noConflict();");
//
//if(RemcaHelper::checkJavaScriptIncludedRE("jQuerREL-ui.js") === false ) {
//  $doc->addScript('media/com_remca/includes/jquery-ui.js');
//}
//
//$doc->addScript('media/com_remca/includes/wishlist.js');
//// $doc->addScript('media/com_remca/lightbox/js/lightbox-2.6.min.js');
$doc->addScript('media/com_remca/includes/jquery.raty.js');
$doc->addScript('media/com_remca/TABS/tabcontent.js');
$doc->addStyleSheet('media/com_remca/TABS/tabcontent.css');
//
////add fancybox & swiper slider
$doc->addScript('media/com_remca/includes/swiper.js');
$doc->addStyleSheet('media/com_remca/includes/swiper.css');

/**
* fancyBox is licensed under the GPLv3 license for all open source applications. A commercial license is required for all commercial applications (including sites, themes and apps you plan to sell).
*/
$doc->addStyleSheet('media/com_remca/fancybox/jquery.fancybox-1.3.4.css');
$doc->addScript('media/com_remca/fancybox/jquery.fancybox-1.3.4.pack.js');


$gmaps_api_key = $this->params->get('gmaps_api_key') ? "key=" . $this->params->get('gmaps_api_key') : JFactory::getApplication()->enqueueMessage("<a target='_blank' href='//developers.google.com/maps/documentation/geocoding/get-api-key'>" . JText::_( '_REALESTATE_MANAGER_GOOGLEMAP_API_KEY_LINK_MESSAGE') . "</a>", JText::_( '_REALESTATE_MANAGER_GOOGLEMAP_API_KEY_ERROR')); 
$doc->addScript("//maps.googleapis.com/maps/api/js?{$gmaps_api_key}"); 