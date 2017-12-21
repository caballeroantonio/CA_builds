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
			'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC01_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc01s',
			'object'=>'ljoc01s',
			'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC01_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc02s',
			'object'=>'ljc02s',
			'text'=>'LIBRO DE INGRESOS DE VALORES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC02_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lejemplos',
			'object'=>'lejemplos',
			'text'=>'Libro De Ejemplo',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LEJEMPLO_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc03s',
			'object'=>'ljc03s',
			'text'=>'LIBRO DE EGRESOS DE VALORES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC03_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc03s',
			'object'=>'ljoc03s',
			'text'=>'LIBRO DE CERTIFICADO DE DEPÓSITOS DE INGRESOS Y EG',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC03_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc04s',
			'object'=>'ljc04s',
			'text'=>'LIBRO DE REGISTRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC04_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc04s',
			'object'=>'ljoc04s',
			'text'=>'LIBRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC04_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc05s',
			'object'=>'ljc05s',
			'text'=>'LIBRO DE TURNO PARA SENTENCIA',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC05_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc05s',
			'object'=>'ljoc05s',
			'text'=>'LIBRO DE SENTENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC05_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc06s',
			'object'=>'ljc06s',
			'text'=>'LIBRO DE RECURSOS DE APELACIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC06_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc06s',
			'object'=>'ljoc06s',
			'text'=>'LIBRO DE EXHORTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC06_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc07s',
			'object'=>'ljc07s',
			'text'=>'LIBRO DE EXHORTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC07_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc07s',
			'object'=>'ljoc07s',
			'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC07_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc08s',
			'object'=>'ljc08s',
			'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC08_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc08s',
			'object'=>'ljoc08s',
			'text'=>'LIBRO DE ACTUARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC08_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc09s',
			'object'=>'ljc09s',
			'text'=>'LIBRO DE ACTUARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC09_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc09s',
			'object'=>'ljoc09s',
			'text'=>'LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTIC',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC09_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc10s',
			'object'=>'ljc10s',
			'text'=>'LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTIC',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC10_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc10s',
			'object'=>'ljoc10s',
			'text'=>'LIBRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC10_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc11s',
			'object'=>'ljc11s',
			'text'=>'LIBRO DE REGISTRO PARA NOTARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC11_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc11s',
			'object'=>'ljoc11s',
			'text'=>'LIBRO DE CONTROL DE MULTAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC11_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc12s',
			'object'=>'ljc12s',
			'text'=>'LIBRO DE REGISTRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC12_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc12s',
			'object'=>'ljoc12s',
			'text'=>'AGENDA DE AUDIENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC12_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc13s',
			'object'=>'ljc13s',
			'text'=>'LIBRO DE CONTROL DE FIANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC13_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc13s',
			'object'=>'ljoc13s',
			'text'=>'LIBRO DE NOTARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC13_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc14s',
			'object'=>'ljc14s',
			'text'=>'LIBRO DE CONTROL DE MULTAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC14_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc14s',
			'object'=>'ljoc14s',
			'text'=>'LIBRO DE FIANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC14_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc16s',
			'object'=>'ljc16s',
			'text'=>'AGENDA DE AUDIENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC16_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc17s',
			'object'=>'ljc17s',
			'text'=>'LIBRO DE REMISIÓN AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC17_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc18s',
			'object'=>'ljc18s',
			'text'=>'LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC18_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc19s',
			'object'=>'ljc19s',
			'text'=>'LIBRO DE ENVÍO DE EXPEDIENTES AL ARCHIVO JUDICIAL ',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC19_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc20s',
			'object'=>'ljc20s',
			'text'=>'LIBRO DE CONTROL DE ASUNTOS CONFORME A LOS ARTÍCUL',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC20_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc21s',
			'object'=>'ljc21s',
			'text'=>'LIBRO DE MINISTERIO PÚBLICO',//JText::_('JTCA_COMPONENT_WIZARD'),
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