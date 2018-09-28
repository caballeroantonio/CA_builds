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
 * @CAversion		Id: compobjecticon.php 571 2016-01-04 15:03:02Z BrianWade $
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

class JHTMLTsjcdmx_juzgado_acuerdoIcon
{
	/**
	 * Display an create icon for the tsjcdmx_juzgado_acuerdo.
	 *
	 * @param	Registry   $params	  The tsjcdmx_juzgado_acuerdo parameters
	 * @param   array      $attribs   Optional attributes for the link
	 * @param   boolean    $legacy    True to use legacy images, false to use icomoon based graphic
	 *
	 * @return	string	The HTML for the tsjcdmx_juzgado_acuerdo create icon.
	 * 
	 */
	public static function create($params, $attribs = array(), $legacy = false)
	{
		JHtml::_('bootstrap.tooltip');
	
		$uri = JUri::getInstance();

		$url = 'index.php?option=com_boletin&task=tsjcdmx_juzgado_acuerdo.add&layout=edit&return='.base64_encode($uri);
		$tmpl = JFactory::getApplication()->input->get('tmpl');
		if($tmpl)
			$url = "{$url}&tmpl={$tmpl}";
		if ($params->get('show_tsjcdmx_juzgado_acuerdo_icons'))
		{
			if ($legacy)
			{
				$text = JHtml::_('image', 'com_boletin/new.png', JText::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_CREATE_ITEM'), NULL, true);
			}
			else
			{
				$text = '<span class="icon-plus"></span>' . JText::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_CREATE_ITEM');
			}		
		}
		else
		{
			$text = JText::_('JNEW') . '&#160;';
		}

		// Add the button classes to the attribs array
		if (isset($attribs['class']))
		{
			$attribs['class'] = $attribs['class'] . ' btn btn-primary';
		}
		else
		{
			$attribs['class'] = 'btn btn-primary';
		}
		
		$button =  JHtml::_('link', JRoute::_($url), $text, $attribs);

		$output = '<span class="hasTooltip tip" title="'.JHtml::tooltipText('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_CREATE_ITEM').'">'.$button.'</span>';
		return $output;
	}
	/**
	 * Display an edit icon for the tsjcdmx_juzgado_acuerdo.
	 *
	 * This icon will not display in a popup window, nor if the tribunal superior de justicia de la ciudad de méxico - juzgados is trashed.
	 * Edit access checks must be performed in the calling code.
	 *
	 * @param	object		$tsjcdmx_juzgado_acuerdo	The tsjcdmx_juzgado_acuerdo in question.
	 * @param	Registry	$params		The tsjcdmx_juzgado_acuerdo parameters
	 * @param	array		$attribs	Not used??
	 * @param   boolean		$legacy   True to use legacy images, false to use icomoon based graphic
	 *
	 * @return	string	The HTML for the tsjcdmx_juzgado_acuerdo edit icon.
	 * 
	 */
	public static function edit($tsjcdmx_juzgado_acuerdo, $params, $attribs = array(), $legacy = false)
	{
		
		$user	= JFactory::getUser();
		$user_id	= $user->get('id');
		$uri	= JUri::getInstance();

		// Ignore if in a popup window.
		if ($params AND $params->get('popup'))
		{
			return;
		}


		JHtml::_('bootstrap.tooltip');


		$url	= 'index.php?option=com_boletin&task=tsjcdmx_juzgado_acuerdo.edit&layout=edit&id='.$tsjcdmx_juzgado_acuerdo->id.'&return='.base64_encode($uri);

		$overlib = '';
		


		if ($params->get('show_tsjcdmx_juzgado_acuerdo_icons'))
		{
			if ($legacy)
			{
				$icon	=  'com_boletin/edit.png';
				$text	= JHtml::_('image','system/' .$icon, JText::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_EDIT_ITEM'), NULL, true);
			}
			else
			{
				$icon	=  'edit';
				$text = '<span class="hasTooltip icon-' . $icon . ' tip" title="' . JHtml::tooltipText(JText::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_EDIT_ITEM'), $overlib, 0) 
				. '"></span>' . JText::_('JGLOBAL_EDIT');
			}			
		}
		else
		{
			$text = '<span class="hasTooltip tip" title="' . JHtml::tooltipText(JText::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_EDIT_ITEM'), $overlib, 0) . '"></span>' . JText::_('JGLOBAL_EDIT') . '</span>';
		}
				
		$output = JHtml::_('link', JRoute::_($url), $text, $attribs);

		return $output;
	}
	/**
	 * Display an delete icon for the tsjcdmx_juzgado_acuerdo.
	 *
	 * This icon will not display in a popup window, nor if the tribunal superior de justicia de la ciudad de méxico - juzgados is trashed.
	 * Edit access checks must be performed in the calling code.
	 *
	 * @param	object		$tsjcdmx_juzgado_acuerdo	The tsjcdmx_juzgado_acuerdo in question.
	 * @param	Registry	$params		The tsjcdmx_juzgado_acuerdo parameters
	 * @param	array		$attribs	Not used??
	 * @param   boolean		$legacy		True to use legacy images, false to use icomoon based graphic
	 *
	 * @return	string	The HTML for the tsjcdmx_juzgado_acuerdo edit icon.
	 * 
	 */
	public static function delete($tsjcdmx_juzgado_acuerdo, $params, $attribs = array(), $legacy = false)
	{
		
		$user	= JFactory::getUser();
		$user_id	= $user->get('id');
		$uri	= JUri::getInstance();

		// Ignore if in a popup window.
		if ($params AND $params->get('popup'))
		{
			return;
		}


		JHtml::_('behavior.tooltip');


		$url = 'index.php?option=com_boletin&task=tsjcdmx_juzgado_acuerdo.delete&id='.$tsjcdmx_juzgado_acuerdo->id.'&'.JSession::getFormToken().'=1'.'&return='.base64_encode($uri);

		$overlib = '';

		$attribs['onclick'] = "if(confirm('".JText::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_DELETE_ITEM_CONFIRM')."'))
								this.href='".JRoute::_($url)."';
								else this.href='#';";


		if ($params->get('show_tsjcdmx_juzgado_acuerdo_icons'))
		{		
			if ($legacy)
			{
				$icon	= 'com_boletin/delete.png';
				$text = JHtml::_('image', 'system/' . $icon, JText::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_DELETE_ITEM'), null, true);
			}
			else
			{
				$text = '<span class="hasTooltip icon-delete tip" title="' . JHtml::tooltipText(JText::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_DELETE_ITEM'), $overlib, 0) . '"></span>&#160;' . JText::_('JACTION_DELETE') . '&#160;';
			}
		}
		else
		{
			$text = '<span class="hasTooltip tip" title="' . JHtml::tooltipText(JText::_('COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS_DELETE_ITEM'), $overlib, 0) . '">' . JText::_('JACTION_DELETE') . '</span>';
		}		
		
		$output = JHtml::_('link', JRoute::_($url), $text, $attribs);
		return $output;
	}
	/**
	 * Method to generate a link to the email item page for the given tsjcdmx_juzgado_acuerdo
	 *
	 * @param   object     $tsjcdmx_juzgado_acuerdo  The tsjcdmx_juzgado_acuerdo information
	 * @param   Registry  $params   The item parameters
	 * @param   array      $attribs  Optional attributes for the link
	 * @param   boolean    $legacy   True to use legacy images, false to use icomoon based graphic
	 *
	 * @return  string  The HTML markup for the email item link
	 */	
	public static function email($tsjcdmx_juzgado_acuerdo, $params, $attribs = array(), $legacy = false)
	{
		require_once JPATH_SITE . '/components/com_mailto/helpers/mailto.php';	
		$uri	= JUri::getInstance();
		$base	= $uri->toString(array('scheme', 'host', 'port'));
		$app	= JFactory::getApplication();
		
		$layout = $app->input->getString('layout', 'default');
		
		$link	= $base.JRoute::_(BoletinHelperRoute::getTsjcdmx_juzgado_acuerdoRoute($tsjcdmx_juzgado_acuerdo->slug,
									$layout,
									$params->get('keep_tsjcdmx_juzgado_acuerdo_itemid')) , false);

		$url	= 'index.php?option=com_mailto&tmpl=component&link='. MailtoHelper::addLink($link);

		$window_params = 'width=400,height=350,menubar=yes,resizable=yes';

		if ($params->get('show_tsjcdmx_juzgado_acuerdo_icons'))
		{
			if ($legacy)
			{
				$text = JHtml::_('image', 'com_boletin/emailButton.png', JText::_('JGLOBAL_EMAIL'), null, true);
			}
			else
			{
				$text = '<span class="icon-envelope"></span> ' . JText::_('JGLOBAL_EMAIL');
			}			
		}
		else
		{
			$text = JText::_('JGLOBAL_EMAIL');
		}

		$attribs['title']	= JText::_('JGLOBAL_EMAIL');
		$attribs['onclick'] = "window.open(this.href,'win2','".$window_params."'); return false;";
		$attribs['rel']     = 'nofollow';

		$output = JHtml::_('link',JRoute::_($url), $text, $attribs);
		return $output;
	}	
	/**
	 * Method to generate a popup link to print an tsjcdmx_juzgado_acuerdo
	 *
	 * @param   object		$tsjcdmx_juzgado_acuerdo  The tsjcdmx_juzgado_acuerdo information
	 * @param   Registry	$params   The item parameters
	 * @param   array		$attribs  Optional attributes for the link
	 * @param   boolean		$legacy   True to use legacy images, false to use icomoon based graphic
	 *
	 * @return  string  The HTML markup for the popup link
	 */	
	public static function print_popup($tsjcdmx_juzgado_acuerdo, $params, $attribs = array(), $legacy = false)
	{
		$app = JFactory::getApplication();
		$input = $app->input;
		$request = $input->request;
		
		$layout = $app->input->getString('layout', 'default');
	
		$link	= JRoute::_(BoletinHelperRoute::getTsjcdmx_juzgado_acuerdoRoute($tsjcdmx_juzgado_acuerdo->slug,
									$layout,
									$params->get('keep_tsjcdmx_juzgado_acuerdo_itemid')) , false);
		
		if (strpos($link, '?') === false)
		{
			$link .= '?';
		}
		
		$link .= '&tmpl=component&print=1&layout=default&page='.@ $request->limitstart;

		$window_params = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no';

		// checks template image directory for image, if non found default are loaded
		if ($params->get('show_tsjcdmx_juzgado_acuerdo_icons'))
		{
			if ($legacy)
			{
				$text = JHtml::_('image', 'com_boletin/printButton.png', JText::_('JGLOBAL_PRINT'), null, true);
			}
			else
			{
				$text = '<span class="icon-print"></span>' . JText::_('JGLOBAL_PRINT');
			}			
		}
		else
		{
			$text =  JText::_('JGLOBAL_PRINT');
		}

		$attribs['title']	= JText::_('JGLOBAL_PRINT');
		$attribs['onclick'] = "window.open(this.href,'win2','".$window_params."'); return false;";
		$attribs['rel']		= 'nofollow';

		return JHtml::_('link',JRoute::_($link), $text, $attribs);
	}
	/**
	 * Method to generate a link to print an tsjcdmx_juzgado_acuerdo
	 *
	 * @param   object		$tsjcdmx_juzgado_acuerdo  The tsjcdmx_juzgado_acuerdo information
	 * @param   Registry	$params   The item parameters
	 * @param   array		$attribs  Optional attributes for the link
	 * @param   boolean		$legacy   True to use legacy images, false to use icomoon based graphic
	 *
	 * @return  string  The HTML markup for the popup link
	 */
	public static function print_screen($tsjcdmx_juzgado_acuerdo, $params, $attribs = array(), $legacy = false)
	{
		// checks template image directory for image, if non found default are loaded
		if ($params->get('show_tsjcdmx_juzgado_acuerdo_icons') )
		{
			if ($legacy)
			{
				$text = JHtml::_('image', 'com_boletin/printButton.png', JText::_('JGLOBAL_PRINT'), null, true);
			}
			else
			{
				$text = '<span class="icon-print"></span>&#160;' . JText::_('JGLOBAL_PRINT') . '&#160;';
			}			
		}
		else
		{
			$text =  JText::_('JGLOBAL_PRINT');
		}
		return '<a href="#" onclick="window.print();return false;">'.$text.'</a>';
	}
        
}
