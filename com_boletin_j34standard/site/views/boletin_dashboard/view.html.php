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
 * @CAversion		Id: view.html.php 571 2016-01-04 15:03:02Z BrianWade $
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
 * MVC View for Dashboard
 *
 */
class BoletinViewBoletin_Dashboard extends JViewLegacy
{
	//protected $state;//no hay modelo, no hay state

	/**
	 * Execute and display a template script.
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  mixed  A string if successful, otherwise a Error object.
	 */
	public function display($tpl = null)
	{
		
		$app = JFactory::getApplication();
		//$state		= $this->get('State');
		//$params		= $state->params;
		$params = JComponentHelper::getParams('com_boletin');
			
		$dispatcher	= JEventDispatcher::getInstance();		

		// Check for errors.
                $errors = $this->get('Errors');
		if ($errors && count($errors))
		{
			JError::raiseWarning(500, implode("\n", $errors));
			return false;
		}
		
		//Escape strings for HTML output
		$this->pageclass_sfx = htmlspecialchars($params->get('pageclass_sfx'));
		
		//$this->params     = &$params;
		//$this->state      = &$state;

		$buttons = $this->prepareButtons();
		$this->assignRef('buttons',$buttons);
		//$this->prepareDocument();

		parent::display($tpl);
	}
	/**
	 * Prepare the dashboard buttons
	 */
	protected function prepareButtons()
	{
		$buttons = array();
		$buttons[] = array(
                    'link'=>'index.php?option=com_boletin&view=tsjcdmx_juzgados_familiares_antiguos&layout=gridpanel&tmpl=component',
                    'object'=>'tsjcdmx_juzgados_familiares_antiguos',
                    'text'=>JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_FAMILIARES_ANTIGUOS'),
                    'desc'=>JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_FAMILIARES_ANTIGUO_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_boletin&view=tsjcdmx_juzgados_civiles_antiguos&layout=gridpanel&tmpl=component',
                    'object'=>'tsjcdmx_juzgados_civiles_antiguos',
                    'text'=>JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS'),
                    'desc'=>JText::_('COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUO_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_boletin&view=tsjcdmx_juzgado_acuerdos&layout=gridpanel&tmpl=component',
                    'object'=>'tsjcdmx_juzgado_acuerdos',
                    'text'=>JText::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS'),
                    'desc'=>JText::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDO_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_boletin&view=tsjcdmx_sala_acuerdos&layout=gridpanel&tmpl=component',
                    'object'=>'tsjcdmx_sala_acuerdos',
                    'text'=>JText::_('COM_BOLETIN_TSJCDMX_SALA_ACUERDOS'),
                    'desc'=>JText::_('COM_BOLETIN_TSJCDMX_SALA_ACUERDO_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_boletin&view=prodecon_bacuerdos&layout=gridpanel&tmpl=component',
                    'object'=>'prodecon_bacuerdos',
                    'text'=>JText::_('COM_BOLETIN_PRODECON_BACUERDOS'),
                    'desc'=>JText::_('COM_BOLETIN_PRODECON_BACUERDO_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_boletin&view=profeco_proveedores&layout=gridpanel&tmpl=component',
                    'object'=>'profeco_proveedores',
                    'text'=>JText::_('COM_BOLETIN_PROFECO_PROVEEDORES'),
                    'desc'=>JText::_('COM_BOLETIN_PROFECO_PROVEEDOR_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_boletin&view=srsps_bacuerdos&layout=gridpanel&tmpl=component',
                    'object'=>'srsps_bacuerdos',
                    'text'=>JText::_('COM_BOLETIN_SRSPS_BACUERDOS'),
                    'desc'=>JText::_('COM_BOLETIN_SRSPS_BACUERDO_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_boletin&view=rsps_bacuerdos&layout=gridpanel&tmpl=component',
                    'object'=>'rsps_bacuerdos',
                    'text'=>JText::_('COM_BOLETIN_RSPS_BACUERDOS'),
                    'desc'=>JText::_('COM_BOLETIN_RSPS_BACUERDO_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_boletin&view=pjf_bacuerdos&layout=gridpanel&tmpl=component',
                    'object'=>'pjf_bacuerdos',
                    'text'=>JText::_('COM_BOLETIN_PJF_BACUERDOS'),
                    'desc'=>JText::_('COM_BOLETIN_PJF_BACUERDO_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_boletin&view=tfca_bacuerdos&layout=gridpanel&tmpl=component',
                    'object'=>'tfca_bacuerdos',
                    'text'=>JText::_('COM_BOLETIN_TFCA_BACUERDOS'),
                    'desc'=>JText::_('COM_BOLETIN_TFCA_BACUERDO_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_boletin&view=tfjfa_bacuerdos&layout=gridpanel&tmpl=component',
                    'object'=>'tfjfa_bacuerdos',
                    'text'=>JText::_('COM_BOLETIN_TFJFA_BACUERDOS'),
                    'desc'=>JText::_('COM_BOLETIN_TFJFA_BACUERDO_DESCRIPTION')
                );

		return $buttons;
	}	
	/**
	 * Prepares the document
	 */
	protected function prepareDocument()
	{
		$app		= JFactory::getApplication();
		$menus		= $app->getMenu();
		$lang		= JFactory::getLanguage();		
		$title 		= null;
		
		// Because the application sets a default page title,
		// we need to get it from the menu item itself
		$menu = $menus->getActive();
		if ($menu  AND $menu->params->get('show_page_heading'))
		{
			$this->params->def('page_heading', $this->params->get('page_title', $menu->title));
		}
		else
		{
			$this->params->def('page_heading', JText::_('Buscame'));
		}

		$title = $this->params->get('page_title', '');
		if (empty($title))
		{
			$title = htmlspecialchars_decode($app->get('sitename'));
		}
		else
		{
			if ($app->get('sitename_pagetitles', 0))
			{
				$title = JText::sprintf('JPAGETITLE', htmlspecialchars_decode($app->get('sitename')), $title);
			}
		}
		$this->document->setTitle($title);
		// Get Menu Item meta description, Keywords and robots instruction to insert in page header
		
		if ($this->params->get('menu-meta_description'))
		{
			$this->document->setDescription($this->params->get('menu-meta_description'));
		}

		if ($this->params->get('menu-meta_keywords'))
		{
			$this->document->setMetadata('keywords', $this->params->get('menu-meta_keywords'));
		}

		if ($this->params->get('robots'))
		{
			$this->document->setMetadata('robots', $this->params->get('robots'));
		}	
		
		// Add feed links
		if ($this->params->get('show_feed_link', 1))
		{
			$link = '&format=feed&limitstart=';
			$attribs = array('type' => 'application/rss+xml', 'title' => 'RSS 2.0');
			$this->document->addHeadLink(JRoute::_($link . '&type=rss'), 'alternate', 'rel', $attribs);
			$attribs = array('type' => 'application/atom+xml', 'title' => 'Atom 1.0');
			$this->document->addHeadLink(JRoute::_($link . '&type=atom'), 'alternate', 'rel', $attribs);
		}

		// Include Helpers
		JHtml::addIncludePath(JPATH_COMPONENT.'/helpers');	
	}
}
