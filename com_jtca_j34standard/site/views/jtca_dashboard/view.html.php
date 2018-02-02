<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA
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
                    'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC01_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsc01s&layout=gridpanel&tmpl=component',
                    'object'=>'lsc01s',
                    'text'=>'LIBRETA DE REGISTRO DE SENTENCIAS -TURNO- (OFICIAL',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSC01_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf01s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf01s',
                    'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF01_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljp01s&layout=gridpanel&tmpl=component',
                    'object'=>'ljp01s',
                    'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJP01_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljccm01s&layout=gridpanel&tmpl=component',
                    'object'=>'ljccm01s',
                    'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJCCM01_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljoc01s&layout=gridpanel&tmpl=component',
                    'object'=>'ljoc01s',
                    'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJOC01_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpdng01s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpdng01s',
                    'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPDNG01_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpes01s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpes01s',
                    'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPES01_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadng01s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadng01s',
                    'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADNG01_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadg01s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadg01s',
                    'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADG01_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp01s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp01s',
                    'text'=>'LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES CON D',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP01_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp02s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp02s',
                    'text'=>'LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES SIN D',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP02_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp03s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp03s',
                    'text'=>'LIBRO DE TURNO DE REMISIONES CON DETENIDO DE JUZGA',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP03_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp04s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp04s',
                    'text'=>'LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES CON D',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP04_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp05s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp05s',
                    'text'=>'LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES SIN D',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP05_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp06s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp06s',
                    'text'=>'LIBRO DE TURNO PARA INCOMPETENCIAS ADOLESCENTES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP06_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp07s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp07s',
                    'text'=>'LIBRO DE TURNO PARA EXCUSAS DE ADOLESCENTES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP07_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp09s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp09s',
                    'text'=>'LIBRO DE ETAPA DE EJECUCIÓN PARA ADOLESCENTES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP09_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp10s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp10s',
                    'text'=>'LIBRO DE TURNO DE BENEFICIOS PENITENCIARIOS.',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP10_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp18s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp18s',
                    'text'=>'LIBRO DE TURNO PARA CONSIGNACIONES CON DETENIDO PR',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP18_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp19s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp19s',
                    'text'=>'LIBRO DE TURNO PARA CONSIGNACIONES SIN DETENIDO PR',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP19_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp20s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp20s',
                    'text'=>'LIBRO DE TURNO PARA INCOMPETENCIAS PRIMERA INSTANC',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP20_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp21s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp21s',
                    'text'=>'LIBRO DE TURNO DE EXCUSAS PARA JUZGADOS DE PRIMERA',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP21_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp22s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp22s',
                    'text'=>'LIBRO DE ORDENES DE ARRAIGOS Y DE CATEOS PRIMERA I',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP22_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp23s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp23s',
                    'text'=>'LIBRO DE ORDENES DE APREHENSIÓN, REAPREHENSION Y T',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP23_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp24s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp24s',
                    'text'=>'LIBRO DE REGISTRO DE LA LEY DE ACCESO A LAS MUJERE',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP24_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp25s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp25s',
                    'text'=>'LIBRO DE TURNO PARA CONSIGNACIONES CON DETENIDO DE',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP25_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp26s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp26s',
                    'text'=>'LIBRO DE TURNO PARA CONSIGNACIONES SIN DETENIDO DE',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP26_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp27s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp27s',
                    'text'=>'LIBRO DE TURNO PARA INCOMPETENCIAS DELITOS NO GRAV',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP27_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp28s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp28s',
                    'text'=>'LIBRO DE TURNO DE EXCUSAS PARA JUZGADOS  DE DELITO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP28_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp29s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp29s',
                    'text'=>'LIBRO DE ORDENES PARA ARRAIGOS Y CATEOS DELITOS NO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP29_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp11s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp11s',
                    'text'=>'LIBRETA DE OFICIOS.',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP11_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp12s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp12s',
                    'text'=>'LIBRETA DE TURNO DE SALAS PARA JUZGADOS ORALES.',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP12_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp13s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp13s',
                    'text'=>'LIBRETA DE EXPEDIENTILLOS DE JUZGADOS DE EJECUCIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP13_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp14s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp14s',
                    'text'=>'LIBRETA DE CUMPLIMIENTO DE EJECUTORIAS PARA JUZGAD',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP14_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp15s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp15s',
                    'text'=>'LIBRETA DE OFICIOS DE AMPAROS DE TRAMITE.',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP15_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp16s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp16s',
                    'text'=>'LIBRETA DE  OFICIOS DE AMPAROS DE CONOCIMIENTO.',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP16_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp30s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp30s',
                    'text'=>'LIBRETA DE LIBERTADES JUZGADOS DE PRIMERA INSTANCI',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP30_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp31s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp31s',
                    'text'=>'LIBRETA DE LIBERTADES JUZGADOS DE DELITOS NO GRAVE',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP31_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp32s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp32s',
                    'text'=>'LIBRETA DE LIBERTADES JUZGADOS DE EJECUCIÓN DE SEN',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP32_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp33s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp33s',
                    'text'=>'LIBRETA DE LIBERTADES DE SALAS PENALES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP33_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp34s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp34s',
                    'text'=>'LIBRETA DE LIBERTADES JUZGADOS DE ADOLESCENTES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP34_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp35s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp35s',
                    'text'=>'LIBRETA DE LIBERTADES DE SALAS DE ADOLESCENTES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP35_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp36s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp36s',
                    'text'=>'LIBRETA DE RETURNO DE ADOLESCENTES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP36_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp39s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp39s',
                    'text'=>'LIBRO DE TURNO DE EXCUSAS PARA JUZGADOS DE JUSTICI',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP39_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp40s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp40s',
                    'text'=>'LIBRO DE ORDENES DE DETENCIÓN PARA JUZGADOS DE JUS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP40_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lcp41s&layout=gridpanel&tmpl=component',
                    'object'=>'lcp41s',
                    'text'=>'LIBRO DE TURNO DE REMISIONES SIN DETENIDO DE JUZGA',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LCP41_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lspe01s&layout=gridpanel&tmpl=component',
                    'object'=>'lspe01s',
                    'text'=>'LIBRO DE GOBIERNO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPE01_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lspe02s&layout=gridpanel&tmpl=component',
                    'object'=>'lspe02s',
                    'text'=>'LIBRO DE RESOLUCIONES DE PLANO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPE02_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lspe03s&layout=gridpanel&tmpl=component',
                    'object'=>'lspe03s',
                    'text'=>'LIBRO DE RESOLUCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPE03_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lspe04s&layout=gridpanel&tmpl=component',
                    'object'=>'lspe04s',
                    'text'=>'LIBRO DE BENEFICIOS REVOCADO Y O/A',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPE04_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lspe05s&layout=gridpanel&tmpl=component',
                    'object'=>'lspe05s',
                    'text'=>'LIBRO DE DESISTIMIENTO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPE05_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lspe06s&layout=gridpanel&tmpl=component',
                    'object'=>'lspe06s',
                    'text'=>'LIBRO DE ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPE06_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lspe07s&layout=gridpanel&tmpl=component',
                    'object'=>'lspe07s',
                    'text'=>'LIBRO DE FINANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPE07_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lspe08s&layout=gridpanel&tmpl=component',
                    'object'=>'lspe08s',
                    'text'=>'LIBRO DE INGRESO Y EGRESO DE BILLETES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPE08_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsps01s&layout=gridpanel&tmpl=component',
                    'object'=>'lsps01s',
                    'text'=>'LIBRO DE GOBIERNO (SISTEMA TRADICIONAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPS01_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsc02s&layout=gridpanel&tmpl=component',
                    'object'=>'lsc02s',
                    'text'=>'LIBRETA DE REGISTRO DE ASISTENCIA (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSC02_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc02s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc02s',
                    'text'=>'LIBRO DE INGRESOS DE VALORES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC02_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljp02s&layout=gridpanel&tmpl=component',
                    'object'=>'ljp02s',
                    'text'=>'LIBRO DE REGISTRO DE BILLETES DE DEPÓSITO (INGRESO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJP02_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljccm02s&layout=gridpanel&tmpl=component',
                    'object'=>'ljccm02s',
                    'text'=>'LIBRO DE INGRESO DE VALORES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJCCM02_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpdng02s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpdng02s',
                    'text'=>'LIBRO DE CERTIFICADO DE DEPÓSITOS DE INGRESO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPDNG02_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpes02s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpes02s',
                    'text'=>'LIBRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPES02_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadng02s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadng02s',
                    'text'=>'LIBRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADNG02_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadg02s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadg02s',
                    'text'=>'LIBRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADG02_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsps02s&layout=gridpanel&tmpl=component',
                    'object'=>'lsps02s',
                    'text'=>'LIBRO DE GOBIERNO (NUEVO SISTEMA) (UNITARIO)',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPS02_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lejemplos&layout=gridpanel&tmpl=component',
                    'object'=>'lejemplos',
                    'text'=>'Libro De Ejemplo',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LEJEMPLO_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsc03s&layout=gridpanel&tmpl=component',
                    'object'=>'lsc03s',
                    'text'=>'LIBRETA DE VISTAS AL M.P (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSC03_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc03s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc03s',
                    'text'=>'LIBRO DE EGRESOS DE VALORES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC03_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljccm03s&layout=gridpanel&tmpl=component',
                    'object'=>'ljccm03s',
                    'text'=>'LIBRO DE EGRESOS DE VALORES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJCCM03_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljoc03s&layout=gridpanel&tmpl=component',
                    'object'=>'ljoc03s',
                    'text'=>'LIBRO DE CERTIFICADO DE DEPÓSITOS DE INGRESOS Y EG',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJOC03_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpdng03s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpdng03s',
                    'text'=>'LIBRO DE CERTIFICADO DE DEPÓSITOS DE EGRESO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPDNG03_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpes03s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpes03s',
                    'text'=>'LIBRO DE RECURSOS DE APELACIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPES03_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadng03s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadng03s',
                    'text'=>'AGENDA DE AUDIENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADNG03_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadg03s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadg03s',
                    'text'=>'LIBRO DE INGRESOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADG03_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsps03s&layout=gridpanel&tmpl=component',
                    'object'=>'lsps03s',
                    'text'=>'LIBRO DE GOBIERNO (NUEVO SISTEMA) (COLEGIADO)',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPS03_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsc04s&layout=gridpanel&tmpl=component',
                    'object'=>'lsc04s',
                    'text'=>'LIBRO DE MULTAS (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSC04_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc04s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc04s',
                    'text'=>'LIBRO DE REGISTRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC04_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf04s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf04s',
                    'text'=>'LIBRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF04_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljp04s&layout=gridpanel&tmpl=component',
                    'object'=>'ljp04s',
                    'text'=>'LIBRO DE REGISTRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJP04_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljoc04s&layout=gridpanel&tmpl=component',
                    'object'=>'ljoc04s',
                    'text'=>'LIBRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJOC04_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpdng04s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpdng04s',
                    'text'=>'LIBRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPDNG04_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpes04s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpes04s',
                    'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPES04_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadng04s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadng04s',
                    'text'=>'LIBRO DE SENTENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADNG04_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadg04s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadg04s',
                    'text'=>'LIBRO DE EGRESOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADG04_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsps04s&layout=gridpanel&tmpl=component',
                    'object'=>'lsps04s',
                    'text'=>'LIBRO DE ACTUARIO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPS04_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsc05s&layout=gridpanel&tmpl=component',
                    'object'=>'lsc05s',
                    'text'=>'AGENDA (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSC05_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc05s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc05s',
                    'text'=>'LIBRO DE TURNO PARA SENTENCIA',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC05_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf05s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf05s',
                    'text'=>'LIBRO DE SENTENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF05_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljp05s&layout=gridpanel&tmpl=component',
                    'object'=>'ljp05s',
                    'text'=>'LIBRO DE TURNO PARA SENTENCIA',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJP05_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljccm05s&layout=gridpanel&tmpl=component',
                    'object'=>'ljccm05s',
                    'text'=>'LIBRO DE TURNO PARA SENTENCIA',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJCCM05_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljoc05s&layout=gridpanel&tmpl=component',
                    'object'=>'ljoc05s',
                    'text'=>'LIBRO DE SENTENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJOC05_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpdng05s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpdng05s',
                    'text'=>'LIBRO DE TURNO PARA SENTENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPDNG05_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpes05s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpes05s',
                    'text'=>'LIBRO DE ACTUARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPES05_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadng05s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadng05s',
                    'text'=>'LIBRO DE RECURSOS DE APELACIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADNG05_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadg05s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadg05s',
                    'text'=>'LIBRO DE SENTENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADG05_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsps05s&layout=gridpanel&tmpl=component',
                    'object'=>'lsps05s',
                    'text'=>'LIBRO DE REGISTRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPS05_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsc06s&layout=gridpanel&tmpl=component',
                    'object'=>'lsc06s',
                    'text'=>'LIBRO DE CONTROL DE BILLETES Y PÓLIZAS (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSC06_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc06s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc06s',
                    'text'=>'LIBRO DE RECURSOS DE APELACIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC06_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf06s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf06s',
                    'text'=>'LIBRO DE RECURSOS DE APELACIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF06_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljp06s&layout=gridpanel&tmpl=component',
                    'object'=>'ljp06s',
                    'text'=>'LIBRO DE RECURSOS DE APELACIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJP06_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljccm06s&layout=gridpanel&tmpl=component',
                    'object'=>'ljccm06s',
                    'text'=>'LIBRO DE RECURSOS DE APELACIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJCCM06_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljoc06s&layout=gridpanel&tmpl=component',
                    'object'=>'ljoc06s',
                    'text'=>'LIBRO DE EXHORTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJOC06_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpdng06s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpdng06s',
                    'text'=>'LIBRO DE RECURSOS DE APELACIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPDNG06_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpes06s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpes06s',
                    'text'=>'LIBRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPES06_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadng06s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadng06s',
                    'text'=>'LIBRO DE EXHORTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADNG06_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadg06s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadg06s',
                    'text'=>'LIBRO DE RECURSOS DE APELACIÓN',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADG06_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsps06s&layout=gridpanel&tmpl=component',
                    'object'=>'lsps06s',
                    'text'=>'LIBRO DE CONTROL DE PEDIMENTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPS06_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsc07s&layout=gridpanel&tmpl=component',
                    'object'=>'lsc07s',
                    'text'=>'LIBRO DE EGRESOS (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSC07_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc07s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc07s',
                    'text'=>'LIBRO DE EXHORTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC07_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf07s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf07s',
                    'text'=>'LIBRO DE EXHORTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF07_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljccm07s&layout=gridpanel&tmpl=component',
                    'object'=>'ljccm07s',
                    'text'=>'LIBRO DE EXHORTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJCCM07_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljoc07s&layout=gridpanel&tmpl=component',
                    'object'=>'ljoc07s',
                    'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJOC07_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpdng07s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpdng07s',
                    'text'=>'LIBRO DE EXHORTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPDNG07_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpes07s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpes07s',
                    'text'=>'LIBRO DE AMPAROS CIRCULANTES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPES07_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadng07s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadng07s',
                    'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADNG07_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsps07s&layout=gridpanel&tmpl=component',
                    'object'=>'lsps07s',
                    'text'=>'REGISTRO DE BILLETES DE DEPOSITO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPS07_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsc08s&layout=gridpanel&tmpl=component',
                    'object'=>'lsc08s',
                    'text'=>'LIBRO DE PÓLIZAS Y FIANZAS (OFICIAL) - Ingresos',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSC08_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc08s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc08s',
                    'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC08_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf08s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf08s',
                    'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF08_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljp08s&layout=gridpanel&tmpl=component',
                    'object'=>'ljp08s',
                    'text'=>'LIBRO DE EXHORTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJP08_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljccm08s&layout=gridpanel&tmpl=component',
                    'object'=>'ljccm08s',
                    'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJCCM08_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljoc08s&layout=gridpanel&tmpl=component',
                    'object'=>'ljoc08s',
                    'text'=>'LIBRO DE ACTUARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJOC08_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpdng08s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpdng08s',
                    'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPDNG08_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpes08s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpes08s',
                    'text'=>'LIBRO DE CONTROL DE PEDIMENTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPES08_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadng08s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadng08s',
                    'text'=>'LIBRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADNG08_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsc14s&layout=gridpanel&tmpl=component',
                    'object'=>'lsc14s',
                    'text'=>'LIBRO DE PÓLIZAS Y FIANZAS (OFICIAL) - Egresos',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSC14_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsps08s&layout=gridpanel&tmpl=component',
                    'object'=>'lsps08s',
                    'text'=>'LIBRO DE TURNO DE ENTREGAS DE TOCAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPS08_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsc09s&layout=gridpanel&tmpl=component',
                    'object'=>'lsc09s',
                    'text'=>'LIBRO DE GOBIERNO (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSC09_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc09s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc09s',
                    'text'=>'LIBRO DE ACTUARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC09_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf09s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf09s',
                    'text'=>'LIBRO DE ACTUARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF09_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljp09s&layout=gridpanel&tmpl=component',
                    'object'=>'ljp09s',
                    'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJP09_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljccm09s&layout=gridpanel&tmpl=component',
                    'object'=>'ljccm09s',
                    'text'=>'LIBRO DE ACTUARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJCCM09_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljoc09s&layout=gridpanel&tmpl=component',
                    'object'=>'ljoc09s',
                    'text'=>'LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTIC',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJOC09_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpdng09s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpdng09s',
                    'text'=>'LIBRO DE ACTUARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPDNG09_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpes09s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpes09s',
                    'text'=>'LIBRO DE MULTAS JUDICIALES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPES09_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadng09s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadng09s',
                    'text'=>'LIBRO DE ACTUARIO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADNG09_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadg09s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadg09s',
                    'text'=>'LIBRO DE ACTUARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADG09_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsps09s&layout=gridpanel&tmpl=component',
                    'object'=>'lsps09s',
                    'text'=>'LIBRO DE REMISIÓN AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPS09_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsc10s&layout=gridpanel&tmpl=component',
                    'object'=>'lsc10s',
                    'text'=>'LIBRO DE ACTUARIO (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSC10_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc10s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc10s',
                    'text'=>'LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTIC',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC10_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf10s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf10s',
                    'text'=>'LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTIC',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF10_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljp10s&layout=gridpanel&tmpl=component',
                    'object'=>'ljp10s',
                    'text'=>'LIBRO DE ACTUARIO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJP10_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljccm10s&layout=gridpanel&tmpl=component',
                    'object'=>'ljccm10s',
                    'text'=>'LIBRO DE REGISTRO PARA NOTARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJCCM10_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljoc10s&layout=gridpanel&tmpl=component',
                    'object'=>'ljoc10s',
                    'text'=>'LIBRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJOC10_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpdng10s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpdng10s',
                    'text'=>'LIBRO DE REGISTRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPDNG10_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpes10s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpes10s',
                    'text'=>'AGENDA DE AUDIENCIAS PARA JUICIOS ORALES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPES10_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadng10s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadng10s',
                    'text'=>'LIBRO DE CONTROL DE PEDIMENTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADNG10_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadg10s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadg10s',
                    'text'=>'LIBRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADG10_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsps10s&layout=gridpanel&tmpl=component',
                    'object'=>'lsps10s',
                    'text'=>'LIBRO DE CONTROL DE MULTAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPS10_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsc11s&layout=gridpanel&tmpl=component',
                    'object'=>'lsc11s',
                    'text'=>'LIBRETA DE OFICIOS (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSC11_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf11s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf11s',
                    'text'=>'LIBRO DE REGISTRO PARA NOTARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF11_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljp11s&layout=gridpanel&tmpl=component',
                    'object'=>'ljp11s',
                    'text'=>'LIBRO DE REGISTRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJP11_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljccm11s&layout=gridpanel&tmpl=component',
                    'object'=>'ljccm11s',
                    'text'=>'LIBRO DE REGISTRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJCCM11_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljoc11s&layout=gridpanel&tmpl=component',
                    'object'=>'ljoc11s',
                    'text'=>'LIBRO DE CONTROL DE MULTAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJOC11_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpdng11s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpdng11s',
                    'text'=>'LIBRO DE AMPAROS CIRCULANTES O NEGADOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPDNG11_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpes11s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpes11s',
                    'text'=>'LIBRO DE INGRESOS Y EGRESOS DE BILLETES DE DEPÓSIT',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPES11_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadng11s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadng11s',
                    'text'=>'LIBRO DE REMISIÓN AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADNG11_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadg11s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadg11s',
                    'text'=>'LIBRO DE CONTROL DE FIANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADG11_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsps11s&layout=gridpanel&tmpl=component',
                    'object'=>'lsps11s',
                    'text'=>'LIBRO DE CONTROL DE FIANZA',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPS11_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsc12s&layout=gridpanel&tmpl=component',
                    'object'=>'lsc12s',
                    'text'=>'LIBRO DE REGISTRO DE AMPAROS (OFICIAL)',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSC12_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc12s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc12s',
                    'text'=>'LIBRO DE REGISTRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC12_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf12s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf12s',
                    'text'=>'LIBRO DE REGISTRO DE AMPAROS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF12_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljp12s&layout=gridpanel&tmpl=component',
                    'object'=>'ljp12s',
                    'text'=>'LIBRO DE REGISTRO DE AMPAROS CIRCULANTES O NEGADOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJP12_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljccm12s&layout=gridpanel&tmpl=component',
                    'object'=>'ljccm12s',
                    'text'=>'LIBRO DE CONTROL DE FIANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJCCM12_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljoc12s&layout=gridpanel&tmpl=component',
                    'object'=>'ljoc12s',
                    'text'=>'AGENDA DE AUDIENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJOC12_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpdng12s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpdng12s',
                    'text'=>'LIBRO DE CONTROL DE FIANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPDNG12_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpes12s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpes12s',
                    'text'=>'LIBRO DE FIANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPES12_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadng12s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadng12s',
                    'text'=>'LIBROS DE VALORES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADNG12_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsps12s&layout=gridpanel&tmpl=component',
                    'object'=>'lsps12s',
                    'text'=>'REGISTRO DE PROMOCIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPS12_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsc13s&layout=gridpanel&tmpl=component',
                    'object'=>'lsc13s',
                    'text'=>'PAPELETAS PARA EL PRÉSTAMO DE EXPEDIENTES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSC13_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc13s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc13s',
                    'text'=>'LIBRO DE CONTROL DE FIANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC13_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf13s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf13s',
                    'text'=>'LIBRO DE CONTROL DE FIANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF13_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljp13s&layout=gridpanel&tmpl=component',
                    'object'=>'ljp13s',
                    'text'=>'LIBRO DE CONTROL DE FIANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJP13_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljccm13s&layout=gridpanel&tmpl=component',
                    'object'=>'ljccm13s',
                    'text'=>'LIBRO DE CONTROL DE MULTAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJCCM13_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljoc13s&layout=gridpanel&tmpl=component',
                    'object'=>'ljoc13s',
                    'text'=>'LIBRO DE NOTARIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJOC13_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpdng13s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpdng13s',
                    'text'=>'LIBRO DE CONTROL DE MULTAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPDNG13_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpes13s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpes13s',
                    'text'=>'LIBRO DE RESOLUCIONES EN AUDIENCIA',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPES13_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadg13s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadg13s',
                    'text'=>'AGENDA DE AUDIENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADG13_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsps13s&layout=gridpanel&tmpl=component',
                    'object'=>'lsps13s',
                    'text'=>'CONTROL DE FIRMAS DEL PROCESADO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPS13_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc14s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc14s',
                    'text'=>'LIBRO DE CONTROL DE MULTAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC14_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf14s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf14s',
                    'text'=>'LIBRO DE CONTROL DE MULTAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF14_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljp14s&layout=gridpanel&tmpl=component',
                    'object'=>'ljp14s',
                    'text'=>'LIBRO DE CONTROL DE MULTAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJP14_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljoc14s&layout=gridpanel&tmpl=component',
                    'object'=>'ljoc14s',
                    'text'=>'LIBRO DE FIANZAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJOC14_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpdng14s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpdng14s',
                    'text'=>'AGENDA DE AUDIENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPDNG14_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpes14s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpes14s',
                    'text'=>'LIBRO DE RESOLUCIONES DE PLANO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPES14_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadg14s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadg14s',
                    'text'=>'LIBRO DE CONTROL DE PEDIMENTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADG14_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=lsps14s&layout=gridpanel&tmpl=component',
                    'object'=>'lsps14s',
                    'text'=>'LIBRO DE OFICIOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LSPS14_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf15s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf15s',
                    'text'=>'LIBRO DE TURNO A CARGO DE LOS SECRETARIOS DE ACUER',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF15_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljccm15s&layout=gridpanel&tmpl=component',
                    'object'=>'ljccm15s',
                    'text'=>'AGENDA DE AUDIENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJCCM15_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpdng15s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpdng15s',
                    'text'=>'LIBRO DE CONTROL DE PEDIMENTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPDNG15_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpes15s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpes15s',
                    'text'=>'LIBRO DE BENEFICIOS REVOCADOS Y ORDENES DE RE-APRE',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPES15_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadg15s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadg15s',
                    'text'=>'ARTICULO 36 O ARTICULO 28 LJADF',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADG15_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc16s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc16s',
                    'text'=>'AGENDA DE AUDIENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC16_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf16s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf16s',
                    'text'=>'AGENDA DE AUDIENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF16_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljp16s&layout=gridpanel&tmpl=component',
                    'object'=>'ljp16s',
                    'text'=>'AGENDA DE AUDIENCIAS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJP16_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljccm16s&layout=gridpanel&tmpl=component',
                    'object'=>'ljccm16s',
                    'text'=>'LIBRO DE REMISIÓN DE EXPEDIENTES AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJCCM16_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpdng16s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpdng16s',
                    'text'=>'LIBRO DE REGISTRO EN QUE SE HAYA OBSEQUIADO O NEGA',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPDNG16_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpes16s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpes16s',
                    'text'=>'LIBRO DE DESISTIMIENTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPES16_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadg16s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadg16s',
                    'text'=>'LIBRO DE CONTROL DE PRESENTACIÓN DE ADOLESCENTES E',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADG16_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc17s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc17s',
                    'text'=>'LIBRO DE REMISIÓN AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC17_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf17s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf17s',
                    'text'=>'LIBRO DE REMISIÓN AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF17_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljp17s&layout=gridpanel&tmpl=component',
                    'object'=>'ljp17s',
                    'text'=>'LIBRO DE CONTROL DE PEDIMENTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJP17_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljccm17s&layout=gridpanel&tmpl=component',
                    'object'=>'ljccm17s',
                    'text'=>'LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJCCM17_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpdng17s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpdng17s',
                    'text'=>'LIBRO DE CONTROL DE FIRMAS PROCESADOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPDNG17_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpes17s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpes17s',
                    'text'=>'LIBRO DE ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPES17_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadg17s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadg17s',
                    'text'=>'LIBRO DE REMISIÓN AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADG17_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc18s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc18s',
                    'text'=>'LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC18_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf18s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf18s',
                    'text'=>'LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF18_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljp18s&layout=gridpanel&tmpl=component',
                    'object'=>'ljp18s',
                    'text'=>'LIBRO DE REGISTRO EN QUE SE HAYA OBSEQUIADO O NEGA',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJP18_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpdng18s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpdng18s',
                    'text'=>'LIBRO DE REMISIÓN AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPDNG18_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljjadg18s&layout=gridpanel&tmpl=component',
                    'object'=>'ljjadg18s',
                    'text'=>'LIBRO DE AMPAROS 'LOCOS'',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJJADG18_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljpes18s&layout=gridpanel&tmpl=component',
                    'object'=>'ljpes18s',
                    'text'=>'LIBRO DE EXHORTOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJPES18_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc19s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc19s',
                    'text'=>'LIBRO DE ENVÍO DE EXPEDIENTES AL ARCHIVO JUDICIAL ',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC19_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf19s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf19s',
                    'text'=>'LIBRO DE ENVÍO DE EXPEDIENTES AL ARCHIVO JUDICIAL ',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF19_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljp19s&layout=gridpanel&tmpl=component',
                    'object'=>'ljp19s',
                    'text'=>'LIBRO DE CONTROL DE FIRMAS DE PROCESADOS',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJP19_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc20s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc20s',
                    'text'=>'LIBRO DE CONTROL DE ASUNTOS CONFORME A LOS ARTÍCUL',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC20_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf20s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf20s',
                    'text'=>'LIBRO DE CONTROL DE ASUNTOS CONFORME A LOS ARTÍCUL',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF20_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljp20s&layout=gridpanel&tmpl=component',
                    'object'=>'ljp20s',
                    'text'=>'LIBRO DE TURNO PARA CONCLUSIONES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJP20_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljc21s&layout=gridpanel&tmpl=component',
                    'object'=>'ljc21s',
                    'text'=>'LIBRO DE MINISTERIO PÚBLICO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJC21_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf21s&layout=gridpanel&tmpl=component',
                    'object'=>'ljf21s',
                    'text'=>'LIBRO DE CONTROL DE ADOPCIONES INTERNACIONALES',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJF21_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljp21s&layout=gridpanel&tmpl=component',
                    'object'=>'ljp21s',
                    'text'=>'LIBRO DE REMISIÓN AL ARCHIVO',//JText::_('JTCA_COMPONENT_WIZARD'),
                    'desc'=>JText::_('COM_JTCA_LJP21_DESCRIPTION')
                );
		$buttons[] = array(
                    'link'=>'index.php?option=com_jtca&view=ljf22s&layout=gridpanel&tmpl=component',
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
