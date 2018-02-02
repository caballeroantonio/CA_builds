<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA
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
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsc01s',
			'object'=>'lsc01s',
			'text'=>'LIBRETA DE REGISTRO DE SENTENCIAS -TURNO- (OFICIAL',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSC01_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf01s',
			'object'=>'ljf01s',
			'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF01_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljp01s',
			'object'=>'ljp01s',
			'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJP01_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljccm01s',
			'object'=>'ljccm01s',
			'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJCCM01_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc01s',
			'object'=>'ljoc01s',
			'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC01_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpdng01s',
			'object'=>'ljpdng01s',
			'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPDNG01_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpes01s',
			'object'=>'ljpes01s',
			'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPES01_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadng01s',
			'object'=>'ljjadng01s',
			'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADNG01_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadg01s',
			'object'=>'ljjadg01s',
			'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADG01_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp01s',
			'object'=>'lcp01s',
			'text'=>'LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES CON D',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP01_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp02s',
			'object'=>'lcp02s',
			'text'=>'LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES SIN D',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP02_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp03s',
			'object'=>'lcp03s',
			'text'=>'LIBRO DE TURNO DE REMISIONES CON DETENIDO DE JUZGA',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP03_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp04s',
			'object'=>'lcp04s',
			'text'=>'LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES CON D',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP04_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp05s',
			'object'=>'lcp05s',
			'text'=>'LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES SIN D',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP05_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp06s',
			'object'=>'lcp06s',
			'text'=>'LIBRO DE TURNO PARA INCOMPETENCIAS ADOLESCENTES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP06_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp07s',
			'object'=>'lcp07s',
			'text'=>'LIBRO DE TURNO PARA EXCUSAS DE ADOLESCENTES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP07_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp09s',
			'object'=>'lcp09s',
			'text'=>'LIBRO DE ETAPA DE EJECUCIÓN PARA ADOLESCENTES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP09_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp10s',
			'object'=>'lcp10s',
			'text'=>'LIBRO DE TURNO DE BENEFICIOS PENITENCIARIOS.',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP10_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp18s',
			'object'=>'lcp18s',
			'text'=>'LIBRO DE TURNO PARA CONSIGNACIONES CON DETENIDO PR',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP18_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp19s',
			'object'=>'lcp19s',
			'text'=>'LIBRO DE TURNO PARA CONSIGNACIONES SIN DETENIDO PR',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP19_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp20s',
			'object'=>'lcp20s',
			'text'=>'LIBRO DE TURNO PARA INCOMPETENCIAS PRIMERA INSTANC',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP20_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp21s',
			'object'=>'lcp21s',
			'text'=>'LIBRO DE TURNO DE EXCUSAS PARA JUZGADOS DE PRIMERA',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP21_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp22s',
			'object'=>'lcp22s',
			'text'=>'LIBRO DE ORDENES DE ARRAIGOS Y DE CATEOS PRIMERA I',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP22_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp23s',
			'object'=>'lcp23s',
			'text'=>'LIBRO DE ORDENES DE APREHENSIÓN, REAPREHENSION Y T',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP23_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp24s',
			'object'=>'lcp24s',
			'text'=>'LIBRO DE REGISTRO DE LA LEY DE ACCESO A LAS MUJERE',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP24_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp25s',
			'object'=>'lcp25s',
			'text'=>'LIBRO DE TURNO PARA CONSIGNACIONES CON DETENIDO DE',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP25_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp26s',
			'object'=>'lcp26s',
			'text'=>'LIBRO DE TURNO PARA CONSIGNACIONES SIN DETENIDO DE',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP26_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp27s',
			'object'=>'lcp27s',
			'text'=>'LIBRO DE TURNO PARA INCOMPETENCIAS DELITOS NO GRAV',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP27_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp28s',
			'object'=>'lcp28s',
			'text'=>'LIBRO DE TURNO DE EXCUSAS PARA JUZGADOS  DE DELITO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP28_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp29s',
			'object'=>'lcp29s',
			'text'=>'LIBRO DE ORDENES PARA ARRAIGOS Y CATEOS DELITOS NO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP29_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp11s',
			'object'=>'lcp11s',
			'text'=>'LIBRETA DE OFICIOS.',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP11_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp12s',
			'object'=>'lcp12s',
			'text'=>'LIBRETA DE TURNO DE SALAS PARA JUZGADOS ORALES.',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP12_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp13s',
			'object'=>'lcp13s',
			'text'=>'LIBRETA DE EXPEDIENTILLOS DE JUZGADOS DE EJECUCIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP13_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp14s',
			'object'=>'lcp14s',
			'text'=>'LIBRETA DE CUMPLIMIENTO DE EJECUTORIAS PARA JUZGAD',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP14_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp15s',
			'object'=>'lcp15s',
			'text'=>'LIBRETA DE OFICIOS DE AMPAROS DE TRAMITE.',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP15_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp16s',
			'object'=>'lcp16s',
			'text'=>'LIBRETA DE  OFICIOS DE AMPAROS DE CONOCIMIENTO.',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP16_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp30s',
			'object'=>'lcp30s',
			'text'=>'LIBRETA DE LIBERTADES JUZGADOS DE PRIMERA INSTANCI',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP30_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp31s',
			'object'=>'lcp31s',
			'text'=>'LIBRETA DE LIBERTADES JUZGADOS DE DELITOS NO GRAVE',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP31_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp32s',
			'object'=>'lcp32s',
			'text'=>'LIBRETA DE LIBERTADES JUZGADOS DE EJECUCIÓN DE SEN',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP32_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp33s',
			'object'=>'lcp33s',
			'text'=>'LIBRETA DE LIBERTADES DE SALAS PENALES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP33_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp34s',
			'object'=>'lcp34s',
			'text'=>'LIBRETA DE LIBERTADES JUZGADOS DE ADOLESCENTES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP34_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp35s',
			'object'=>'lcp35s',
			'text'=>'LIBRETA DE LIBERTADES DE SALAS DE ADOLESCENTES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP35_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp36s',
			'object'=>'lcp36s',
			'text'=>'LIBRETA DE RETURNO DE ADOLESCENTES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP36_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp39s',
			'object'=>'lcp39s',
			'text'=>'LIBRO DE TURNO DE EXCUSAS PARA JUZGADOS DE JUSTICI',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP39_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp40s',
			'object'=>'lcp40s',
			'text'=>'LIBRO DE ORDENES DE DETENCIÓN PARA JUZGADOS DE JUS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP40_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lcp41s',
			'object'=>'lcp41s',
			'text'=>'LIBRO DE TURNO DE REMISIONES SIN DETENIDO DE JUZGA',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LCP41_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lspe01s',
			'object'=>'lspe01s',
			'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPE01_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lspe02s',
			'object'=>'lspe02s',
			'text'=>'LIBRO DE RESOLUCIONES DE PLANO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPE02_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lspe03s',
			'object'=>'lspe03s',
			'text'=>'LIBRO DE RESOLUCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPE03_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lspe04s',
			'object'=>'lspe04s',
			'text'=>'LIBRO DE BENEFICIOS REVOCADO Y O/A',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPE04_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lspe05s',
			'object'=>'lspe05s',
			'text'=>'LIBRO DE DESISTIMIENTO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPE05_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lspe06s',
			'object'=>'lspe06s',
			'text'=>'LIBRO DE ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPE06_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lspe07s',
			'object'=>'lspe07s',
			'text'=>'LIBRO DE FINANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPE07_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lspe08s',
			'object'=>'lspe08s',
			'text'=>'LIBRO DE INGRESO Y EGRESO DE BILLETES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPE08_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsps01s',
			'object'=>'lsps01s',
			'text'=>'LIBRO DE GOBIERNO (SISTEMA TRADICIONAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPS01_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsc02s',
			'object'=>'lsc02s',
			'text'=>'LIBRETA DE REGISTRO DE ASISTENCIA (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSC02_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc02s',
			'object'=>'ljc02s',
			'text'=>'LIBRO DE INGRESOS DE VALORES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC02_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljp02s',
			'object'=>'ljp02s',
			'text'=>'LIBRO DE REGISTRO DE BILLETES DE DEPÓSITO (INGRESO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJP02_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljccm02s',
			'object'=>'ljccm02s',
			'text'=>'LIBRO DE INGRESO DE VALORES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJCCM02_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpdng02s',
			'object'=>'ljpdng02s',
			'text'=>'LIBRO DE CERTIFICADO DE DEPÓSITOS DE INGRESO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPDNG02_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpes02s',
			'object'=>'ljpes02s',
			'text'=>'LIBRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPES02_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadng02s',
			'object'=>'ljjadng02s',
			'text'=>'LIBRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADNG02_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadg02s',
			'object'=>'ljjadg02s',
			'text'=>'LIBRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADG02_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsps02s',
			'object'=>'lsps02s',
			'text'=>'LIBRO DE GOBIERNO (NUEVO SISTEMA) (UNITARIO)',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPS02_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lejemplos',
			'object'=>'lejemplos',
			'text'=>'Libro De Ejemplo',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LEJEMPLO_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsc03s',
			'object'=>'lsc03s',
			'text'=>'LIBRETA DE VISTAS AL M.P (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSC03_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc03s',
			'object'=>'ljc03s',
			'text'=>'LIBRO DE EGRESOS DE VALORES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC03_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljccm03s',
			'object'=>'ljccm03s',
			'text'=>'LIBRO DE EGRESOS DE VALORES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJCCM03_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc03s',
			'object'=>'ljoc03s',
			'text'=>'LIBRO DE CERTIFICADO DE DEPÓSITOS DE INGRESOS Y EG',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC03_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpdng03s',
			'object'=>'ljpdng03s',
			'text'=>'LIBRO DE CERTIFICADO DE DEPÓSITOS DE EGRESO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPDNG03_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpes03s',
			'object'=>'ljpes03s',
			'text'=>'LIBRO DE RECURSOS DE APELACIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPES03_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadng03s',
			'object'=>'ljjadng03s',
			'text'=>'AGENDA DE AUDIENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADNG03_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadg03s',
			'object'=>'ljjadg03s',
			'text'=>'LIBRO DE INGRESOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADG03_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsps03s',
			'object'=>'lsps03s',
			'text'=>'LIBRO DE GOBIERNO (NUEVO SISTEMA) (COLEGIADO)',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPS03_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsc04s',
			'object'=>'lsc04s',
			'text'=>'LIBRO DE MULTAS (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSC04_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc04s',
			'object'=>'ljc04s',
			'text'=>'LIBRO DE REGISTRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC04_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf04s',
			'object'=>'ljf04s',
			'text'=>'LIBRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF04_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljp04s',
			'object'=>'ljp04s',
			'text'=>'LIBRO DE REGISTRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJP04_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc04s',
			'object'=>'ljoc04s',
			'text'=>'LIBRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC04_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpdng04s',
			'object'=>'ljpdng04s',
			'text'=>'LIBRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPDNG04_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpes04s',
			'object'=>'ljpes04s',
			'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPES04_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadng04s',
			'object'=>'ljjadng04s',
			'text'=>'LIBRO DE SENTENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADNG04_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadg04s',
			'object'=>'ljjadg04s',
			'text'=>'LIBRO DE EGRESOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADG04_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsps04s',
			'object'=>'lsps04s',
			'text'=>'LIBRO DE ACTUARIO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPS04_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsc05s',
			'object'=>'lsc05s',
			'text'=>'AGENDA (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSC05_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc05s',
			'object'=>'ljc05s',
			'text'=>'LIBRO DE TURNO PARA SENTENCIA',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC05_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf05s',
			'object'=>'ljf05s',
			'text'=>'LIBRO DE SENTENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF05_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljp05s',
			'object'=>'ljp05s',
			'text'=>'LIBRO DE TURNO PARA SENTENCIA',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJP05_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljccm05s',
			'object'=>'ljccm05s',
			'text'=>'LIBRO DE TURNO PARA SENTENCIA',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJCCM05_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc05s',
			'object'=>'ljoc05s',
			'text'=>'LIBRO DE SENTENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC05_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpdng05s',
			'object'=>'ljpdng05s',
			'text'=>'LIBRO DE TURNO PARA SENTENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPDNG05_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpes05s',
			'object'=>'ljpes05s',
			'text'=>'LIBRO DE ACTUARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPES05_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadng05s',
			'object'=>'ljjadng05s',
			'text'=>'LIBRO DE RECURSOS DE APELACIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADNG05_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadg05s',
			'object'=>'ljjadg05s',
			'text'=>'LIBRO DE SENTENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADG05_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsps05s',
			'object'=>'lsps05s',
			'text'=>'LIBRO DE REGISTRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPS05_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsc06s',
			'object'=>'lsc06s',
			'text'=>'LIBRO DE CONTROL DE BILLETES Y PÓLIZAS (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSC06_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc06s',
			'object'=>'ljc06s',
			'text'=>'LIBRO DE RECURSOS DE APELACIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC06_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf06s',
			'object'=>'ljf06s',
			'text'=>'LIBRO DE RECURSOS DE APELACIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF06_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljp06s',
			'object'=>'ljp06s',
			'text'=>'LIBRO DE RECURSOS DE APELACIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJP06_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljccm06s',
			'object'=>'ljccm06s',
			'text'=>'LIBRO DE RECURSOS DE APELACIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJCCM06_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc06s',
			'object'=>'ljoc06s',
			'text'=>'LIBRO DE EXHORTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC06_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpdng06s',
			'object'=>'ljpdng06s',
			'text'=>'LIBRO DE RECURSOS DE APELACIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPDNG06_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpes06s',
			'object'=>'ljpes06s',
			'text'=>'LIBRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPES06_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadng06s',
			'object'=>'ljjadng06s',
			'text'=>'LIBRO DE EXHORTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADNG06_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadg06s',
			'object'=>'ljjadg06s',
			'text'=>'LIBRO DE RECURSOS DE APELACIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADG06_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsps06s',
			'object'=>'lsps06s',
			'text'=>'LIBRO DE CONTROL DE PEDIMENTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPS06_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsc07s',
			'object'=>'lsc07s',
			'text'=>'LIBRO DE EGRESOS (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSC07_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc07s',
			'object'=>'ljc07s',
			'text'=>'LIBRO DE EXHORTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC07_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf07s',
			'object'=>'ljf07s',
			'text'=>'LIBRO DE EXHORTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF07_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljccm07s',
			'object'=>'ljccm07s',
			'text'=>'LIBRO DE EXHORTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJCCM07_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc07s',
			'object'=>'ljoc07s',
			'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC07_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpdng07s',
			'object'=>'ljpdng07s',
			'text'=>'LIBRO DE EXHORTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPDNG07_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpes07s',
			'object'=>'ljpes07s',
			'text'=>'LIBRO DE AMPAROS CIRCULANTES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPES07_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadng07s',
			'object'=>'ljjadng07s',
			'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADNG07_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsps07s',
			'object'=>'lsps07s',
			'text'=>'REGISTRO DE BILLETES DE DEPOSITO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPS07_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsc08s',
			'object'=>'lsc08s',
			'text'=>'LIBRO DE PÓLIZAS Y FIANZAS (OFICIAL) - Ingresos',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSC08_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc08s',
			'object'=>'ljc08s',
			'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC08_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf08s',
			'object'=>'ljf08s',
			'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF08_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljp08s',
			'object'=>'ljp08s',
			'text'=>'LIBRO DE EXHORTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJP08_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljccm08s',
			'object'=>'ljccm08s',
			'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJCCM08_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc08s',
			'object'=>'ljoc08s',
			'text'=>'LIBRO DE ACTUARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC08_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpdng08s',
			'object'=>'ljpdng08s',
			'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPDNG08_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpes08s',
			'object'=>'ljpes08s',
			'text'=>'LIBRO DE CONTROL DE PEDIMENTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPES08_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadng08s',
			'object'=>'ljjadng08s',
			'text'=>'LIBRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADNG08_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsc14s',
			'object'=>'lsc14s',
			'text'=>'LIBRO DE PÓLIZAS Y FIANZAS (OFICIAL) - Egresos',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSC14_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsps08s',
			'object'=>'lsps08s',
			'text'=>'LIBRO DE TURNO DE ENTREGAS DE TOCAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPS08_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsc09s',
			'object'=>'lsc09s',
			'text'=>'LIBRO DE GOBIERNO (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSC09_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc09s',
			'object'=>'ljc09s',
			'text'=>'LIBRO DE ACTUARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC09_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf09s',
			'object'=>'ljf09s',
			'text'=>'LIBRO DE ACTUARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF09_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljp09s',
			'object'=>'ljp09s',
			'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJP09_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljccm09s',
			'object'=>'ljccm09s',
			'text'=>'LIBRO DE ACTUARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJCCM09_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc09s',
			'object'=>'ljoc09s',
			'text'=>'LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTIC',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC09_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpdng09s',
			'object'=>'ljpdng09s',
			'text'=>'LIBRO DE ACTUARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPDNG09_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpes09s',
			'object'=>'ljpes09s',
			'text'=>'LIBRO DE MULTAS JUDICIALES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPES09_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadng09s',
			'object'=>'ljjadng09s',
			'text'=>'LIBRO DE ACTUARIO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADNG09_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadg09s',
			'object'=>'ljjadg09s',
			'text'=>'LIBRO DE ACTUARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADG09_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsps09s',
			'object'=>'lsps09s',
			'text'=>'LIBRO DE REMISIÓN AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPS09_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsc10s',
			'object'=>'lsc10s',
			'text'=>'LIBRO DE ACTUARIO (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSC10_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc10s',
			'object'=>'ljc10s',
			'text'=>'LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTIC',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC10_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf10s',
			'object'=>'ljf10s',
			'text'=>'LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTIC',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF10_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljp10s',
			'object'=>'ljp10s',
			'text'=>'LIBRO DE ACTUARIO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJP10_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljccm10s',
			'object'=>'ljccm10s',
			'text'=>'LIBRO DE REGISTRO PARA NOTARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJCCM10_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc10s',
			'object'=>'ljoc10s',
			'text'=>'LIBRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC10_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpdng10s',
			'object'=>'ljpdng10s',
			'text'=>'LIBRO DE REGISTRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPDNG10_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpes10s',
			'object'=>'ljpes10s',
			'text'=>'AGENDA DE AUDIENCIAS PARA JUICIOS ORALES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPES10_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadng10s',
			'object'=>'ljjadng10s',
			'text'=>'LIBRO DE CONTROL DE PEDIMENTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADNG10_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadg10s',
			'object'=>'ljjadg10s',
			'text'=>'LIBRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADG10_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsps10s',
			'object'=>'lsps10s',
			'text'=>'LIBRO DE CONTROL DE MULTAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPS10_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsc11s',
			'object'=>'lsc11s',
			'text'=>'LIBRETA DE OFICIOS (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSC11_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf11s',
			'object'=>'ljf11s',
			'text'=>'LIBRO DE REGISTRO PARA NOTARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF11_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljp11s',
			'object'=>'ljp11s',
			'text'=>'LIBRO DE REGISTRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJP11_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljccm11s',
			'object'=>'ljccm11s',
			'text'=>'LIBRO DE REGISTRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJCCM11_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc11s',
			'object'=>'ljoc11s',
			'text'=>'LIBRO DE CONTROL DE MULTAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC11_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpdng11s',
			'object'=>'ljpdng11s',
			'text'=>'LIBRO DE AMPAROS CIRCULANTES O NEGADOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPDNG11_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpes11s',
			'object'=>'ljpes11s',
			'text'=>'LIBRO DE INGRESOS Y EGRESOS DE BILLETES DE DEPÓSIT',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPES11_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadng11s',
			'object'=>'ljjadng11s',
			'text'=>'LIBRO DE REMISIÓN AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADNG11_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadg11s',
			'object'=>'ljjadg11s',
			'text'=>'LIBRO DE CONTROL DE FIANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADG11_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsps11s',
			'object'=>'lsps11s',
			'text'=>'LIBRO DE CONTROL DE FIANZA',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPS11_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsc12s',
			'object'=>'lsc12s',
			'text'=>'LIBRO DE REGISTRO DE AMPAROS (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSC12_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc12s',
			'object'=>'ljc12s',
			'text'=>'LIBRO DE REGISTRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC12_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf12s',
			'object'=>'ljf12s',
			'text'=>'LIBRO DE REGISTRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF12_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljp12s',
			'object'=>'ljp12s',
			'text'=>'LIBRO DE REGISTRO DE AMPAROS CIRCULANTES O NEGADOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJP12_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljccm12s',
			'object'=>'ljccm12s',
			'text'=>'LIBRO DE CONTROL DE FIANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJCCM12_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc12s',
			'object'=>'ljoc12s',
			'text'=>'AGENDA DE AUDIENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC12_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpdng12s',
			'object'=>'ljpdng12s',
			'text'=>'LIBRO DE CONTROL DE FIANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPDNG12_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpes12s',
			'object'=>'ljpes12s',
			'text'=>'LIBRO DE FIANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPES12_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadng12s',
			'object'=>'ljjadng12s',
			'text'=>'LIBROS DE VALORES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADNG12_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsps12s',
			'object'=>'lsps12s',
			'text'=>'REGISTRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPS12_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsc13s',
			'object'=>'lsc13s',
			'text'=>'PAPELETAS PARA EL PRÉSTAMO DE EXPEDIENTES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSC13_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc13s',
			'object'=>'ljc13s',
			'text'=>'LIBRO DE CONTROL DE FIANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC13_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf13s',
			'object'=>'ljf13s',
			'text'=>'LIBRO DE CONTROL DE FIANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF13_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljp13s',
			'object'=>'ljp13s',
			'text'=>'LIBRO DE CONTROL DE FIANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJP13_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljccm13s',
			'object'=>'ljccm13s',
			'text'=>'LIBRO DE CONTROL DE MULTAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJCCM13_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc13s',
			'object'=>'ljoc13s',
			'text'=>'LIBRO DE NOTARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC13_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpdng13s',
			'object'=>'ljpdng13s',
			'text'=>'LIBRO DE CONTROL DE MULTAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPDNG13_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpes13s',
			'object'=>'ljpes13s',
			'text'=>'LIBRO DE RESOLUCIONES EN AUDIENCIA',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPES13_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadg13s',
			'object'=>'ljjadg13s',
			'text'=>'AGENDA DE AUDIENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADG13_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsps13s',
			'object'=>'lsps13s',
			'text'=>'CONTROL DE FIRMAS DEL PROCESADO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPS13_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc14s',
			'object'=>'ljc14s',
			'text'=>'LIBRO DE CONTROL DE MULTAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC14_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf14s',
			'object'=>'ljf14s',
			'text'=>'LIBRO DE CONTROL DE MULTAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF14_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljp14s',
			'object'=>'ljp14s',
			'text'=>'LIBRO DE CONTROL DE MULTAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJP14_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljoc14s',
			'object'=>'ljoc14s',
			'text'=>'LIBRO DE FIANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJOC14_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpdng14s',
			'object'=>'ljpdng14s',
			'text'=>'AGENDA DE AUDIENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPDNG14_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpes14s',
			'object'=>'ljpes14s',
			'text'=>'LIBRO DE RESOLUCIONES DE PLANO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPES14_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadg14s',
			'object'=>'ljjadg14s',
			'text'=>'LIBRO DE CONTROL DE PEDIMENTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADG14_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=lsps14s',
			'object'=>'lsps14s',
			'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LSPS14_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf15s',
			'object'=>'ljf15s',
			'text'=>'LIBRO DE TURNO A CARGO DE LOS SECRETARIOS DE ACUER',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF15_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljccm15s',
			'object'=>'ljccm15s',
			'text'=>'AGENDA DE AUDIENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJCCM15_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpdng15s',
			'object'=>'ljpdng15s',
			'text'=>'LIBRO DE CONTROL DE PEDIMENTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPDNG15_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpes15s',
			'object'=>'ljpes15s',
			'text'=>'LIBRO DE BENEFICIOS REVOCADOS Y ORDENES DE RE-APRE',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPES15_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadg15s',
			'object'=>'ljjadg15s',
			'text'=>'ARTICULO 36 O ARTICULO 28 LJADF',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADG15_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc16s',
			'object'=>'ljc16s',
			'text'=>'AGENDA DE AUDIENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC16_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf16s',
			'object'=>'ljf16s',
			'text'=>'AGENDA DE AUDIENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF16_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljp16s',
			'object'=>'ljp16s',
			'text'=>'AGENDA DE AUDIENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJP16_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljccm16s',
			'object'=>'ljccm16s',
			'text'=>'LIBRO DE REMISIÓN DE EXPEDIENTES AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJCCM16_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpdng16s',
			'object'=>'ljpdng16s',
			'text'=>'LIBRO DE REGISTRO EN QUE SE HAYA OBSEQUIADO O NEGA',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPDNG16_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpes16s',
			'object'=>'ljpes16s',
			'text'=>'LIBRO DE DESISTIMIENTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPES16_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadg16s',
			'object'=>'ljjadg16s',
			'text'=>'LIBRO DE CONTROL DE PRESENTACIÓN DE ADOLESCENTES E',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADG16_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc17s',
			'object'=>'ljc17s',
			'text'=>'LIBRO DE REMISIÓN AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC17_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf17s',
			'object'=>'ljf17s',
			'text'=>'LIBRO DE REMISIÓN AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF17_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljp17s',
			'object'=>'ljp17s',
			'text'=>'LIBRO DE CONTROL DE PEDIMENTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJP17_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljccm17s',
			'object'=>'ljccm17s',
			'text'=>'LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJCCM17_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpdng17s',
			'object'=>'ljpdng17s',
			'text'=>'LIBRO DE CONTROL DE FIRMAS PROCESADOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPDNG17_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpes17s',
			'object'=>'ljpes17s',
			'text'=>'LIBRO DE ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPES17_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadg17s',
			'object'=>'ljjadg17s',
			'text'=>'LIBRO DE REMISIÓN AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADG17_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc18s',
			'object'=>'ljc18s',
			'text'=>'LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC18_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf18s',
			'object'=>'ljf18s',
			'text'=>'LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF18_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljp18s',
			'object'=>'ljp18s',
			'text'=>'LIBRO DE REGISTRO EN QUE SE HAYA OBSEQUIADO O NEGA',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJP18_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpdng18s',
			'object'=>'ljpdng18s',
			'text'=>'LIBRO DE REMISIÓN AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPDNG18_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljjadg18s',
			'object'=>'ljjadg18s',
			'text'=>'LIBRO DE AMPAROS 'LOCOS'',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJJADG18_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljpes18s',
			'object'=>'ljpes18s',
			'text'=>'LIBRO DE EXHORTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJPES18_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc19s',
			'object'=>'ljc19s',
			'text'=>'LIBRO DE ENVÍO DE EXPEDIENTES AL ARCHIVO JUDICIAL ',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC19_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf19s',
			'object'=>'ljf19s',
			'text'=>'LIBRO DE ENVÍO DE EXPEDIENTES AL ARCHIVO JUDICIAL ',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF19_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljp19s',
			'object'=>'ljp19s',
			'text'=>'LIBRO DE CONTROL DE FIRMAS DE PROCESADOS',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJP19_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc20s',
			'object'=>'ljc20s',
			'text'=>'LIBRO DE CONTROL DE ASUNTOS CONFORME A LOS ARTÍCUL',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC20_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf20s',
			'object'=>'ljf20s',
			'text'=>'LIBRO DE CONTROL DE ASUNTOS CONFORME A LOS ARTÍCUL',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF20_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljp20s',
			'object'=>'ljp20s',
			'text'=>'LIBRO DE TURNO PARA CONCLUSIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJP20_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljc21s',
			'object'=>'ljc21s',
			'text'=>'LIBRO DE MINISTERIO PÚBLICO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJC21_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf21s',
			'object'=>'ljf21s',
			'text'=>'LIBRO DE CONTROL DE ADOPCIONES INTERNACIONALES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF21_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljp21s',
			'object'=>'ljp21s',
			'text'=>'LIBRO DE REMISIÓN AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJP21_DESCRIPTION')
			);
		$buttons[] = array('link'=>'index.php?option=com_jtca&view=ljf22s',
			'object'=>'ljf22s',
			'text'=>'LIBRO DE CONTROL DE RESTITUCIONES INTERNACIONALES',//JText::_('JTCA_COMPONENT_WIZARD'),
			'desc'=>JText::_('COM_JTCA_LJF22_DESCRIPTION')
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