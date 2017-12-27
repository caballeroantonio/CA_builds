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
 * Supports a modal libro de control de pedimentos picker.
 *
 */
class JFormFieldModal_Ljpdng15s extends JFormField
{
	/**
	 * The form field type.
	 *
	 * @var		string
	 * 
	 */
	protected $type = 'Modal_Ljpdng15s';

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
		$script[] = '	function jSelectLjpdng15_'.$this->id.'(id, name, object)';
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

			$script[] = '	function jClearLjpdng15(id) {';
			$script[] = '		document.getElementById(id + "_id").value = "'.htmlspecialchars(JText::_('COM_JTCA_LJPDNG15S_SELECT_ITEM_LABEL', true), ENT_COMPAT, 'UTF-8').'";';
			$script[] = '		jQuery("#"+id + "_clear").addClass("hidden");';
			$script[] = '		if (document.getElementById(id + "_edit")) {';
			$script[] = '			jQuery("#"+id + "_edit").addClass("hidden");';
			$script[] = '		}';
			$script[] = '		return false;';
			$script[] = '	}';
		}		
		
		// Add the script to the document head.
		JFactory::getDocument()->addScriptDeclaration(implode("\n", $script));
		
		$title = JText::_('COM_JTCA_LJPDNG15S_SELECT_ITEM_LABEL');
		$link = 'index.php?option=com_jtca&amp;view=ljpdng15s&amp;layout=modal&amp;tmpl=component&amp;function=jSelectLjpdng15_'.$this->id;


		// The active ljpdng15 id field.
		if (0 == (int)$this->value)
		{
			$value = '';
		}
		else
		{
			$value = (int)$this->value;
		}

		// The current libro de control de pedimentos display field.
		$html[] = '<span class="input-append">';
		$html[] = '<input type="text" class="input-medium" id="'.$this->id.'_name" value="'.$title.'" disabled="disabled" size="35" />';
		$html[] = '<a class="modal btn hasTooltip" title="'.JHtml::tooltipText('COM_JTCA_LJPDNG15S_SELECT_BUTTON_DESC').'"  href="'.$link.'&amp;'.JSession::getFormToken().'=1" rel="{handler: \'iframe\', size: {x: 800, y: 450}}"><i class="icon-file"></i> '.JText::_('JSELECT').'</a>';

		// Edit libro de control de pedimentos button
		if ($allow_edit)
		{
			$html[] = '<a class="btn hasTooltip'.($value ? '' : ' hidden').'" href="index.php?option=com_jtca&layout=modal&tmpl=component&task=ljpdng15.edit&id=' . $value. '" target="_blank" title="'.JHtml::tooltipText('COM_JTCA_LJPDNG15S_EDIT_DESC').'" ><span class="icon-edit"></span> ' . JText::_('JACTION_EDIT') . '</a>';
		}

		// Clear libro de control de pedimentos button
		if ($allow_clear)
		{
			$html[] = '<button id="'.$this->id.'_clear" class="btn'.($value ? '' : ' hidden').'" onclick="return jClearLjpdng15(\''.$this->id.'\')"><span class="icon-remove"></span> ' . JText::_('JCLEAR') . '</button>';
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
