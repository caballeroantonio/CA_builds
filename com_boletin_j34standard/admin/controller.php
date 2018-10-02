<?php
/**
 * @version 		$Id:$
 * @name			Boletines
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_boletin
 * @subpackage		com_boletin.admin
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: controller.php 571 2016-01-04 15:03:02Z BrianWade $
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

class BoletinController extends JControllerLegacy
{
	/**
	 * @var		string	The default view.
	 * 
	 */
	protected $default_view = 'tsjcdmx_juzgados_familiares_antiguos';

	/**
	 * Method to display a view.
	 *
	 * @param	boolean	$cachable	If true, the view output will be cached
	 * @param	array	$url_params	An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return	JControllerLegacy		This object to support chaining.
	 * 
	 */
	public function display($cachable = false, $url_params =  array())
	{
		$view	= $this->input->getString('view', $this->default_view);
		$layout = $this->input->getString('layout', 'default');
		$id		= $this->input->getInt('id');

		// Load the submenu.
		BoletinHelper::addSubmenu($view);

		// Check for edit form.
		switch ($view)
		{
			case 'tsjcdmx_juzgados_familiares_antiguo': 
				if ($layout == 'edit' AND !$this->checkEditId('com_boletin.edit.tsjcdmx_juzgados_familiares_antiguo', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_boletin&view=tsjcdmx_juzgados_familiares_antiguos', false));

					return false;
				}
				break;				
			case 'tsjcdmx_juzgados_civiles_antiguo': 
				if ($layout == 'edit' AND !$this->checkEditId('com_boletin.edit.tsjcdmx_juzgados_civiles_antiguo', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_boletin&view=tsjcdmx_juzgados_civiles_antiguos', false));

					return false;
				}
				break;				
			case 'tsjcdmx_juzgado_acuerdo': 
				if ($layout == 'edit' AND !$this->checkEditId('com_boletin.edit.tsjcdmx_juzgado_acuerdo', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_boletin&view=tsjcdmx_juzgado_acuerdos', false));

					return false;
				}
				break;				
			case 'tsjcdmx_sala_acuerdo': 
				if ($layout == 'edit' AND !$this->checkEditId('com_boletin.edit.tsjcdmx_sala_acuerdo', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_boletin&view=tsjcdmx_sala_acuerdos', false));

					return false;
				}
				break;				
			case 'prodecon_bacuerdo': 
				if ($layout == 'edit' AND !$this->checkEditId('com_boletin.edit.prodecon_bacuerdo', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_boletin&view=prodecon_bacuerdos', false));

					return false;
				}
				break;				
			case 'profeco_proveedor': 
				if ($layout == 'edit' AND !$this->checkEditId('com_boletin.edit.profeco_proveedor', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_boletin&view=profeco_proveedores', false));

					return false;
				}
				break;				
			case 'srsps_bacuerdo': 
				if ($layout == 'edit' AND !$this->checkEditId('com_boletin.edit.srsps_bacuerdo', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_boletin&view=srsps_bacuerdos', false));

					return false;
				}
				break;				
			case 'rsps_bacuerdo': 
				if ($layout == 'edit' AND !$this->checkEditId('com_boletin.edit.rsps_bacuerdo', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_boletin&view=rsps_bacuerdos', false));

					return false;
				}
				break;				
			case 'pjf_bacuerdo': 
				if ($layout == 'edit' AND !$this->checkEditId('com_boletin.edit.pjf_bacuerdo', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_boletin&view=pjf_bacuerdos', false));

					return false;
				}
				break;				
			case 'tfca_bacuerdo': 
				if ($layout == 'edit' AND !$this->checkEditId('com_boletin.edit.tfca_bacuerdo', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_boletin&view=tfca_bacuerdos', false));

					return false;
				}
				break;				
			case 'tfjfa_bacuerdo': 
				if ($layout == 'edit' AND !$this->checkEditId('com_boletin.edit.tfjfa_bacuerdo', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_boletin&view=tfjfa_bacuerdos', false));

					return false;
				}
				break;				
		}
		return parent::display();
	}
}
