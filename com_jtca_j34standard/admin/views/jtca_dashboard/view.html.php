<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA (Release 1.0.0)
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_jtca
 * @subpackage		com_jtca.admin
 * @copyright		Copyright (c) 2017 - 2020. All Rights Reserved
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: view.html.php 571 2016-01-04 15:03:02Z BrianWade $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.admin
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
	protected $params;
	
	public function display($tpl = null)
	{
		$this->state	= $this->get('State');


		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}
		
		$buttons = $this->prepareButtons();
		$this->assignRef('buttons',$buttons);
		
		$this->addToolbar();
		$this->prepareDocument();


		parent::display($tpl);
	}
	/**
	 * Add the page title and toolbar.
	 *
	 * 
	 */
	protected function addToolbar()
	{

		
		JToolbarHelper::title(JText::_('COM_JTCA_VIEW_DASHBOARD_HEADER'), 'componentarchitect.png');
		
		JToolbarHelper::preferences('com_jtca');
		JToolbarHelper::help('JHELP_COMPONENTS_COMPONENTARCHITECT_DASHBOARD', true, null, 'com_jtca');
	}
	
	/**
	 * Prepare the dashboard buttons
	 */
	protected function prepareButtons()
	{
		$buttons = array();
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc01s',
			'object'=>'ljc01s',
			'text'=>'Jc01',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC01_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc02s',
			'object'=>'ljc02s',
			'text'=>'Jc02',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC02_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc03s',
			'object'=>'ljc03s',
			'text'=>'Jc03',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC03_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc04s',
			'object'=>'ljc04s',
			'text'=>'Jc04',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC04_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc05s',
			'object'=>'ljc05s',
			'text'=>'Jc05',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC05_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc06s',
			'object'=>'ljc06s',
			'text'=>'Jc06',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC06_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc07s',
			'object'=>'ljc07s',
			'text'=>'Jc07',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC07_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc08s',
			'object'=>'ljc08s',
			'text'=>'Jc08',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC08_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc09s',
			'object'=>'ljc09s',
			'text'=>'Jc09',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC09_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc10s',
			'object'=>'ljc10s',
			'text'=>'Jc10',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC10_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc12s',
			'object'=>'ljc12s',
			'text'=>'Jc12',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC12_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc13s',
			'object'=>'ljc13s',
			'text'=>'Jc13',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC13_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc14s',
			'object'=>'ljc14s',
			'text'=>'Jc14',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC14_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc16s',
			'object'=>'ljc16s',
			'text'=>'Jc16',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC16_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc17s',
			'object'=>'ljc17s',
			'text'=>'Jc17',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC17_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc18s',
			'object'=>'ljc18s',
			'text'=>'Jc18',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC18_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc19s',
			'object'=>'ljc19s',
			'text'=>'Jc19',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC19_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc20s',
			'object'=>'ljc20s',
			'text'=>'Jc20',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC20_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc21s',
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
		$this->document->setTitle(JText::_('COM_JTCA_VIEW_DASHBOARD_HEADER'));

		// Include custom admin css
		$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/admin.css');

		// Add Javscript functions for field display
		JHtml::_('behavior.tooltip');
	
	}
}