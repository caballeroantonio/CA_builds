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

class JtCaController extends JControllerLegacy
{
	/**
	 * @var		string	The default view.
	 * 
	 */
	protected $default_view = 'lejemplos';

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
		JtCaHelper::addSubmenu($view);

		// Check for edit form.
		switch ($view)
		{
			case 'ljc01': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc01', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc01s', false));

					return false;
				}
				break;				
			case 'lsc01': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsc01', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsc01s', false));

					return false;
				}
				break;				
			case 'ljf01': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf01', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf01s', false));

					return false;
				}
				break;				
			case 'ljp01': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljp01', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljp01s', false));

					return false;
				}
				break;				
			case 'ljccm01': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljccm01', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljccm01s', false));

					return false;
				}
				break;				
			case 'ljoc01': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc01', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc01s', false));

					return false;
				}
				break;				
			case 'ljpdng01': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpdng01', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpdng01s', false));

					return false;
				}
				break;				
			case 'ljpes01': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpes01', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpes01s', false));

					return false;
				}
				break;				
			case 'ljjadng01': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadng01', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadng01s', false));

					return false;
				}
				break;				
			case 'ljjadg01': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadg01', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadg01s', false));

					return false;
				}
				break;				
			case 'lcp01': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp01', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp01s', false));

					return false;
				}
				break;				
			case 'lcp02': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp02', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp02s', false));

					return false;
				}
				break;				
			case 'lcp03': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp03', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp03s', false));

					return false;
				}
				break;				
			case 'lcp04': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp04', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp04s', false));

					return false;
				}
				break;				
			case 'lcp05': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp05', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp05s', false));

					return false;
				}
				break;				
			case 'lcp06': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp06', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp06s', false));

					return false;
				}
				break;				
			case 'lcp07': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp07', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp07s', false));

					return false;
				}
				break;				
			case 'lcp09': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp09', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp09s', false));

					return false;
				}
				break;				
			case 'lcp10': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp10', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp10s', false));

					return false;
				}
				break;				
			case 'lcp18': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp18', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp18s', false));

					return false;
				}
				break;				
			case 'lcp19': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp19', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp19s', false));

					return false;
				}
				break;				
			case 'lcp20': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp20', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp20s', false));

					return false;
				}
				break;				
			case 'lcp21': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp21', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp21s', false));

					return false;
				}
				break;				
			case 'lcp22': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp22', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp22s', false));

					return false;
				}
				break;				
			case 'lcp23': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp23', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp23s', false));

					return false;
				}
				break;				
			case 'lcp24': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp24', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp24s', false));

					return false;
				}
				break;				
			case 'lcp25': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp25', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp25s', false));

					return false;
				}
				break;				
			case 'lcp26': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp26', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp26s', false));

					return false;
				}
				break;				
			case 'lcp27': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp27', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp27s', false));

					return false;
				}
				break;				
			case 'lcp28': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp28', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp28s', false));

					return false;
				}
				break;				
			case 'lcp29': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp29', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp29s', false));

					return false;
				}
				break;				
			case 'lcp11': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp11', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp11s', false));

					return false;
				}
				break;				
			case 'lcp12': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp12', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp12s', false));

					return false;
				}
				break;				
			case 'lcp13': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp13', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp13s', false));

					return false;
				}
				break;				
			case 'lcp14': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp14', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp14s', false));

					return false;
				}
				break;				
			case 'lcp15': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp15', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp15s', false));

					return false;
				}
				break;				
			case 'lcp16': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp16', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp16s', false));

					return false;
				}
				break;				
			case 'lcp30': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp30', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp30s', false));

					return false;
				}
				break;				
			case 'lcp31': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp31', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp31s', false));

					return false;
				}
				break;				
			case 'lcp32': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp32', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp32s', false));

					return false;
				}
				break;				
			case 'lcp33': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp33', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp33s', false));

					return false;
				}
				break;				
			case 'lcp34': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp34', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp34s', false));

					return false;
				}
				break;				
			case 'lcp35': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp35', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp35s', false));

					return false;
				}
				break;				
			case 'lcp36': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp36', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp36s', false));

					return false;
				}
				break;				
			case 'lcp39': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp39', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp39s', false));

					return false;
				}
				break;				
			case 'lcp40': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp40', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp40s', false));

					return false;
				}
				break;				
			case 'lcp41': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lcp41', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lcp41s', false));

					return false;
				}
				break;				
			case 'lspe01': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lspe01', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lspe01s', false));

					return false;
				}
				break;				
			case 'lspe02': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lspe02', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lspe02s', false));

					return false;
				}
				break;				
			case 'lspe03': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lspe03', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lspe03s', false));

					return false;
				}
				break;				
			case 'lspe04': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lspe04', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lspe04s', false));

					return false;
				}
				break;				
			case 'lspe05': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lspe05', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lspe05s', false));

					return false;
				}
				break;				
			case 'lspe06': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lspe06', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lspe06s', false));

					return false;
				}
				break;				
			case 'lspe07': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lspe07', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lspe07s', false));

					return false;
				}
				break;				
			case 'lspe08': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lspe08', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lspe08s', false));

					return false;
				}
				break;				
			case 'lsps01': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsps01', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsps01s', false));

					return false;
				}
				break;				
			case 'lsc02': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsc02', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsc02s', false));

					return false;
				}
				break;				
			case 'ljc02': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc02', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc02s', false));

					return false;
				}
				break;				
			case 'ljp02': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljp02', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljp02s', false));

					return false;
				}
				break;				
			case 'ljccm02': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljccm02', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljccm02s', false));

					return false;
				}
				break;				
			case 'ljpdng02': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpdng02', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpdng02s', false));

					return false;
				}
				break;				
			case 'ljpes02': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpes02', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpes02s', false));

					return false;
				}
				break;				
			case 'ljjadng02': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadng02', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadng02s', false));

					return false;
				}
				break;				
			case 'ljjadg02': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadg02', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadg02s', false));

					return false;
				}
				break;				
			case 'lsps02': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsps02', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsps02s', false));

					return false;
				}
				break;				
			case 'lejemplo': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lejemplo', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lejemplos', false));

					return false;
				}
				break;				
			case 'lsc03': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsc03', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsc03s', false));

					return false;
				}
				break;				
			case 'ljc03': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc03', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc03s', false));

					return false;
				}
				break;				
			case 'ljccm03': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljccm03', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljccm03s', false));

					return false;
				}
				break;				
			case 'ljoc03': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc03', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc03s', false));

					return false;
				}
				break;				
			case 'ljpdng03': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpdng03', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpdng03s', false));

					return false;
				}
				break;				
			case 'ljpes03': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpes03', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpes03s', false));

					return false;
				}
				break;				
			case 'ljjadng03': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadng03', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadng03s', false));

					return false;
				}
				break;				
			case 'ljjadg03': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadg03', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadg03s', false));

					return false;
				}
				break;				
			case 'lsps03': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsps03', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsps03s', false));

					return false;
				}
				break;				
			case 'lsc04': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsc04', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsc04s', false));

					return false;
				}
				break;				
			case 'ljc04': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc04', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc04s', false));

					return false;
				}
				break;				
			case 'ljf04': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf04', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf04s', false));

					return false;
				}
				break;				
			case 'ljp04': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljp04', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljp04s', false));

					return false;
				}
				break;				
			case 'ljoc04': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc04', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc04s', false));

					return false;
				}
				break;				
			case 'ljpdng04': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpdng04', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpdng04s', false));

					return false;
				}
				break;				
			case 'ljpes04': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpes04', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpes04s', false));

					return false;
				}
				break;				
			case 'ljjadng04': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadng04', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadng04s', false));

					return false;
				}
				break;				
			case 'ljjadg04': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadg04', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadg04s', false));

					return false;
				}
				break;				
			case 'lsps04': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsps04', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsps04s', false));

					return false;
				}
				break;				
			case 'lsc05': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsc05', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsc05s', false));

					return false;
				}
				break;				
			case 'ljc05': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc05', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc05s', false));

					return false;
				}
				break;				
			case 'ljf05': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf05', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf05s', false));

					return false;
				}
				break;				
			case 'ljp05': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljp05', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljp05s', false));

					return false;
				}
				break;				
			case 'ljccm05': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljccm05', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljccm05s', false));

					return false;
				}
				break;				
			case 'ljoc05': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc05', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc05s', false));

					return false;
				}
				break;				
			case 'ljpdng05': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpdng05', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpdng05s', false));

					return false;
				}
				break;				
			case 'ljpes05': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpes05', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpes05s', false));

					return false;
				}
				break;				
			case 'ljjadng05': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadng05', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadng05s', false));

					return false;
				}
				break;				
			case 'ljjadg05': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadg05', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadg05s', false));

					return false;
				}
				break;				
			case 'lsps05': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsps05', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsps05s', false));

					return false;
				}
				break;				
			case 'lsc06': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsc06', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsc06s', false));

					return false;
				}
				break;				
			case 'ljc06': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc06', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc06s', false));

					return false;
				}
				break;				
			case 'ljf06': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf06', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf06s', false));

					return false;
				}
				break;				
			case 'ljp06': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljp06', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljp06s', false));

					return false;
				}
				break;				
			case 'ljccm06': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljccm06', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljccm06s', false));

					return false;
				}
				break;				
			case 'ljoc06': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc06', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc06s', false));

					return false;
				}
				break;				
			case 'ljpdng06': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpdng06', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpdng06s', false));

					return false;
				}
				break;				
			case 'ljpes06': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpes06', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpes06s', false));

					return false;
				}
				break;				
			case 'ljjadng06': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadng06', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadng06s', false));

					return false;
				}
				break;				
			case 'ljjadg06': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadg06', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadg06s', false));

					return false;
				}
				break;				
			case 'lsps06': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsps06', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsps06s', false));

					return false;
				}
				break;				
			case 'lsc07': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsc07', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsc07s', false));

					return false;
				}
				break;				
			case 'ljc07': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc07', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc07s', false));

					return false;
				}
				break;				
			case 'ljf07': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf07', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf07s', false));

					return false;
				}
				break;				
			case 'ljccm07': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljccm07', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljccm07s', false));

					return false;
				}
				break;				
			case 'ljoc07': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc07', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc07s', false));

					return false;
				}
				break;				
			case 'ljpdng07': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpdng07', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpdng07s', false));

					return false;
				}
				break;				
			case 'ljpes07': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpes07', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpes07s', false));

					return false;
				}
				break;				
			case 'ljjadng07': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadng07', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadng07s', false));

					return false;
				}
				break;				
			case 'lsps07': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsps07', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsps07s', false));

					return false;
				}
				break;				
			case 'lsc08': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsc08', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsc08s', false));

					return false;
				}
				break;				
			case 'ljc08': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc08', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc08s', false));

					return false;
				}
				break;				
			case 'ljf08': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf08', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf08s', false));

					return false;
				}
				break;				
			case 'ljp08': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljp08', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljp08s', false));

					return false;
				}
				break;				
			case 'ljccm08': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljccm08', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljccm08s', false));

					return false;
				}
				break;				
			case 'ljoc08': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc08', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc08s', false));

					return false;
				}
				break;				
			case 'ljpdng08': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpdng08', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpdng08s', false));

					return false;
				}
				break;				
			case 'ljpes08': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpes08', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpes08s', false));

					return false;
				}
				break;				
			case 'ljjadng08': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadng08', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadng08s', false));

					return false;
				}
				break;				
			case 'lsc14': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsc14', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsc14s', false));

					return false;
				}
				break;				
			case 'lsps08': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsps08', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsps08s', false));

					return false;
				}
				break;				
			case 'lsc09': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsc09', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsc09s', false));

					return false;
				}
				break;				
			case 'ljc09': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc09', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc09s', false));

					return false;
				}
				break;				
			case 'ljf09': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf09', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf09s', false));

					return false;
				}
				break;				
			case 'ljp09': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljp09', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljp09s', false));

					return false;
				}
				break;				
			case 'ljccm09': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljccm09', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljccm09s', false));

					return false;
				}
				break;				
			case 'ljoc09': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc09', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc09s', false));

					return false;
				}
				break;				
			case 'ljpdng09': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpdng09', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpdng09s', false));

					return false;
				}
				break;				
			case 'ljpes09': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpes09', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpes09s', false));

					return false;
				}
				break;				
			case 'ljjadng09': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadng09', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadng09s', false));

					return false;
				}
				break;				
			case 'ljjadg09': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadg09', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadg09s', false));

					return false;
				}
				break;				
			case 'lsps09': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsps09', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsps09s', false));

					return false;
				}
				break;				
			case 'lsc10': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsc10', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsc10s', false));

					return false;
				}
				break;				
			case 'ljc10': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc10', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc10s', false));

					return false;
				}
				break;				
			case 'ljf10': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf10', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf10s', false));

					return false;
				}
				break;				
			case 'ljp10': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljp10', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljp10s', false));

					return false;
				}
				break;				
			case 'ljccm10': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljccm10', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljccm10s', false));

					return false;
				}
				break;				
			case 'ljoc10': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc10', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc10s', false));

					return false;
				}
				break;				
			case 'ljpdng10': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpdng10', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpdng10s', false));

					return false;
				}
				break;				
			case 'ljpes10': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpes10', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpes10s', false));

					return false;
				}
				break;				
			case 'ljjadng10': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadng10', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadng10s', false));

					return false;
				}
				break;				
			case 'ljjadg10': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadg10', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadg10s', false));

					return false;
				}
				break;				
			case 'lsps10': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsps10', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsps10s', false));

					return false;
				}
				break;				
			case 'lsc11': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsc11', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsc11s', false));

					return false;
				}
				break;				
			case 'ljf11': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf11', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf11s', false));

					return false;
				}
				break;				
			case 'ljp11': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljp11', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljp11s', false));

					return false;
				}
				break;				
			case 'ljccm11': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljccm11', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljccm11s', false));

					return false;
				}
				break;				
			case 'ljoc11': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc11', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc11s', false));

					return false;
				}
				break;				
			case 'ljpdng11': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpdng11', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpdng11s', false));

					return false;
				}
				break;				
			case 'ljpes11': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpes11', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpes11s', false));

					return false;
				}
				break;				
			case 'ljjadng11': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadng11', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadng11s', false));

					return false;
				}
				break;				
			case 'ljjadg11': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadg11', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadg11s', false));

					return false;
				}
				break;				
			case 'lsps11': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsps11', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsps11s', false));

					return false;
				}
				break;				
			case 'lsc12': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsc12', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsc12s', false));

					return false;
				}
				break;				
			case 'ljc12': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc12', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc12s', false));

					return false;
				}
				break;				
			case 'ljf12': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf12', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf12s', false));

					return false;
				}
				break;				
			case 'ljp12': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljp12', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljp12s', false));

					return false;
				}
				break;				
			case 'ljccm12': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljccm12', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljccm12s', false));

					return false;
				}
				break;				
			case 'ljoc12': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc12', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc12s', false));

					return false;
				}
				break;				
			case 'ljpdng12': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpdng12', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpdng12s', false));

					return false;
				}
				break;				
			case 'ljpes12': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpes12', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpes12s', false));

					return false;
				}
				break;				
			case 'ljjadng12': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadng12', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadng12s', false));

					return false;
				}
				break;				
			case 'lsps12': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsps12', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsps12s', false));

					return false;
				}
				break;				
			case 'lsc13': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsc13', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsc13s', false));

					return false;
				}
				break;				
			case 'ljc13': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc13', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc13s', false));

					return false;
				}
				break;				
			case 'ljf13': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf13', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf13s', false));

					return false;
				}
				break;				
			case 'ljp13': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljp13', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljp13s', false));

					return false;
				}
				break;				
			case 'ljccm13': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljccm13', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljccm13s', false));

					return false;
				}
				break;				
			case 'ljoc13': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc13', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc13s', false));

					return false;
				}
				break;				
			case 'ljpdng13': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpdng13', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpdng13s', false));

					return false;
				}
				break;				
			case 'ljpes13': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpes13', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpes13s', false));

					return false;
				}
				break;				
			case 'ljjadg13': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadg13', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadg13s', false));

					return false;
				}
				break;				
			case 'lsps13': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsps13', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsps13s', false));

					return false;
				}
				break;				
			case 'ljc14': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc14', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc14s', false));

					return false;
				}
				break;				
			case 'ljf14': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf14', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf14s', false));

					return false;
				}
				break;				
			case 'ljp14': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljp14', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljp14s', false));

					return false;
				}
				break;				
			case 'ljoc14': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljoc14', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljoc14s', false));

					return false;
				}
				break;				
			case 'ljpdng14': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpdng14', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpdng14s', false));

					return false;
				}
				break;				
			case 'ljpes14': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpes14', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpes14s', false));

					return false;
				}
				break;				
			case 'ljjadg14': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadg14', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadg14s', false));

					return false;
				}
				break;				
			case 'lsps14': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.lsps14', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=lsps14s', false));

					return false;
				}
				break;				
			case 'ljf15': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf15', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf15s', false));

					return false;
				}
				break;				
			case 'ljccm15': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljccm15', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljccm15s', false));

					return false;
				}
				break;				
			case 'ljpdng15': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpdng15', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpdng15s', false));

					return false;
				}
				break;				
			case 'ljpes15': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpes15', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpes15s', false));

					return false;
				}
				break;				
			case 'ljjadg15': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadg15', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadg15s', false));

					return false;
				}
				break;				
			case 'ljc16': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc16', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc16s', false));

					return false;
				}
				break;				
			case 'ljf16': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf16', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf16s', false));

					return false;
				}
				break;				
			case 'ljp16': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljp16', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljp16s', false));

					return false;
				}
				break;				
			case 'ljccm16': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljccm16', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljccm16s', false));

					return false;
				}
				break;				
			case 'ljpdng16': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpdng16', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpdng16s', false));

					return false;
				}
				break;				
			case 'ljpes16': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpes16', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpes16s', false));

					return false;
				}
				break;				
			case 'ljjadg16': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadg16', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadg16s', false));

					return false;
				}
				break;				
			case 'ljc17': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc17', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc17s', false));

					return false;
				}
				break;				
			case 'ljf17': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf17', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf17s', false));

					return false;
				}
				break;				
			case 'ljp17': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljp17', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljp17s', false));

					return false;
				}
				break;				
			case 'ljccm17': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljccm17', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljccm17s', false));

					return false;
				}
				break;				
			case 'ljpdng17': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpdng17', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpdng17s', false));

					return false;
				}
				break;				
			case 'ljpes17': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpes17', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpes17s', false));

					return false;
				}
				break;				
			case 'ljjadg17': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadg17', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadg17s', false));

					return false;
				}
				break;				
			case 'ljc18': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc18', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc18s', false));

					return false;
				}
				break;				
			case 'ljf18': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf18', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf18s', false));

					return false;
				}
				break;				
			case 'ljp18': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljp18', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljp18s', false));

					return false;
				}
				break;				
			case 'ljpdng18': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpdng18', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpdng18s', false));

					return false;
				}
				break;				
			case 'ljjadg18': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljjadg18', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljjadg18s', false));

					return false;
				}
				break;				
			case 'ljpes18': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljpes18', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljpes18s', false));

					return false;
				}
				break;				
			case 'ljc19': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc19', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc19s', false));

					return false;
				}
				break;				
			case 'ljf19': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf19', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf19s', false));

					return false;
				}
				break;				
			case 'ljp19': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljp19', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljp19s', false));

					return false;
				}
				break;				
			case 'ljc20': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc20', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc20s', false));

					return false;
				}
				break;				
			case 'ljf20': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf20', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf20s', false));

					return false;
				}
				break;				
			case 'ljp20': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljp20', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljp20s', false));

					return false;
				}
				break;				
			case 'ljc21': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljc21', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljc21s', false));

					return false;
				}
				break;				
			case 'ljf21': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf21', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf21s', false));

					return false;
				}
				break;				
			case 'ljp21': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljp21', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljp21s', false));

					return false;
				}
				break;				
			case 'ljf22': 
				if ($layout == 'edit' AND !$this->checkEditId('com_jtca.edit.ljf22', $id))
				{

					// Somehow the person just went to the form - we don't allow that.
					$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
					$this->setMessage($this->getError(), 'error');
					$this->setRedirect(JRoute::_('index.php?option=com_jtca&view=ljf22s', false));

					return false;
				}
				break;				
		}
		return parent::display();
	}
}
