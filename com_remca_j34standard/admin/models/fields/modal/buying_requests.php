<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.admin
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: compobjectplural.php 571 2016-01-04 15:03:02Z BrianWade $
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

defined('JPATH_BASE') or die;
/**
 * Supports a modal buying requests picker.
 *
 */
class JFormFieldModal_Buying_requests extends JFormField
{
	/**
	 * The form field type.
	 *
	 * @var		string
	 * 
	 */
	protected $type = 'Modal_Buying_requests';

	/**
	 * Method to get the field input markup.
	 *
	 * @return	string	The field input markup.
	 * 
	 */
	protected function getInput()
	{
	
		$allow_edit		= ((string) $this->element['edit'] == 'true') ? true : false;
		$allow_clear		= ((string) $this->element['clear'] != 'false') ? true : false;

	
		// Load the javascript
		JHtml::_('behavior.modal', 'a.modal');

		// Build the script.
		$script = array();
		
		// Select button script
		$script[] = '';		
		$script[] = '	function jSelectBuying_request_'.$this->id.'(id, name, object)';
		$script[] = '	{';
		$script[] = '		document.getElementById("'.$this->id.'_id").value = id;';
		$script[] = '		document.getElementById("'.$this->id.'_name").value = "objeto modal";';
		if ($allow_edit)
		{
			$script[] = '		jQuery("#'.$this->id.'_edit").removeClass("hidden");';
		}

		if ($allow_clear)
		{
			$script[] = '		jQuery("#'.$this->id.'_clear").removeClass("hidden");';
		}		
		$script[] = '		jModalClose();';
		$script[] = '	}';
		
		// Clear button script
		static $script_clear;

		if ($allow_clear AND !$script_clear)
		{
			$script_clear = true;

			$script[] = '	function jClearBuying_request(id) {';
			$script[] = '		document.getElementById(id + "_id").value = "'.htmlspecialchars(JText::_('COM_REMCA_BUYING_REQUESTS_SELECT_ITEM_LABEL', true), ENT_COMPAT, 'UTF-8').'";';
			$script[] = '		jQuery("#"+id + "_clear").addClass("hidden");';
			$script[] = '		if (document.getElementById(id + "_edit")) {';
			$script[] = '			jQuery("#"+id + "_edit").addClass("hidden");';
			$script[] = '		}';
			$script[] = '		return false;';
			$script[] = '	}';
		}		
		
		// Add the script to the document head.
		JFactory::getDocument()->addScriptDeclaration(implode("\n", $script));
		
		$title = JText::_('COM_REMCA_BUYING_REQUESTS_SELECT_ITEM_LABEL');
		$link = 'index.php?option=com_remca&amp;view=buying_requests&amp;layout=modal&amp;tmpl=component&amp;function=jSelectBuying_request_'.$this->id;


		// The active buying_request id field.
		if (0 == (int)$this->value)
		{
			$value = '';
		}
		else
		{
			$value = (int)$this->value;
		}

		// The current buying requests display field.
		$html[] = '<span class="input-append">';
		$html[] = '<input type="text" class="input-medium" id="'.$this->id.'_name" value="'.$title.'" disabled="disabled" size="35" />';
		$html[] = '<a class="modal btn hasTooltip" title="'.JHtml::tooltipText('COM_REMCA_BUYING_REQUESTS_SELECT_BUTTON_DESC').'"  href="'.$link.'&amp;'.JSession::getFormToken().'=1" rel="{handler: \'iframe\', size: {x: 800, y: 450}}"><i class="icon-file"></i> '.JText::_('JSELECT').'</a>';

		// Edit buying requests button
		if ($allow_edit)
		{
			$html[] = '<a class="btn hasTooltip'.($value ? '' : ' hidden').'" href="index.php?option=com_remca&layout=modal&tmpl=component&task=buying_request.edit&id=' . $value. '" target="_blank" title="'.JHtml::tooltipText('COM_REMCA_BUYING_REQUESTS_EDIT_DESC').'" ><span class="icon-edit"></span> ' . JText::_('JACTION_EDIT') . '</a>';
		}

		// Clear buying requests button
		if ($allow_clear)
		{
			$html[] = '<button id="'.$this->id.'_clear" class="btn'.($value ? '' : ' hidden').'" onclick="return jClearBuying_request(\''.$this->id.'\')"><span class="icon-remove"></span> ' . JText::_('JCLEAR') . '</button>';
		}

		$html[] = '</span>';
		// class='required' for client side validation
		$class = '';
		if ($this->required)
		{
			$class = ' class="required modal-value"';
		}

		$html[] = '<input type="hidden" id="'.$this->id.'_id"'.$class.' name="'.$this->id.'_name" value="'.$value.'" />';
		return implode("\n", $html);		
	}
}