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
class JtCaViewJtCa_Dashboard extends JViewLegacy
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
		$params = JComponentHelper::getParams('com_jtca');
			
		$dispatcher	= JEventDispatcher::getInstance();		

		// Check for errors.
		if (count($errors = $this->get('Errors')))
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
                    'link'=>'index.php?option=com_jtca&view=ljc01s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc01s',
                    'text'=>'Jc01',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC01_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc02s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc02s',
                    'text'=>'Jc02',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC02_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc03s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc03s',
                    'text'=>'Jc03',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC03_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc04s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc04s',
                    'text'=>'Jc04',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC04_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc05s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc05s',
                    'text'=>'Jc05',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC05_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc06s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc06s',
                    'text'=>'Jc06',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC06_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc07s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc07s',
                    'text'=>'Jc07',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC07_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc08s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc08s',
                    'text'=>'Jc08',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC08_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc09s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc09s',
                    'text'=>'Jc09',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC09_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc10s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc10s',
                    'text'=>'Jc10',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC10_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc12s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc12s',
                    'text'=>'Jc12',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC12_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc13s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc13s',
                    'text'=>'Jc13',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC13_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc14s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc14s',
                    'text'=>'Jc14',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC14_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc16s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc16s',
                    'text'=>'Jc16',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC16_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc17s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc17s',
                    'text'=>'Jc17',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC17_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc18s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc18s',
                    'text'=>'Jc18',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC18_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc19s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc19s',
                    'text'=>'Jc19',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC19_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc20s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc20s',
                    'text'=>'Jc20',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC20_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc21s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc21s',
                    'text'=>'Jc21',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC21_DESCRIPTION')
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
