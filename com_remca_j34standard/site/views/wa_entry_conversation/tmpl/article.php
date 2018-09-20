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
 * @CAversion		Id: article.php 571 2016-01-04 15:03:02Z BrianWade $
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

/*
 *	Add style sheets, javascript and behaviours here in the layout so they can be overridden, if required, in a template override 
 */
			
// Add css files for the remca component and categories if they exist
$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_remca.css');
$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_wa_entry_conversations.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_remca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_wa_entry_conversations-rtl.css');
}
				
// Add Javascript behaviors

/*
 *	Initialise values for the layout 
 */	
 		
// Create shortcuts to some parameters.
$params		= &$this->item->params;
$user		= JFactory::getUser();
$info		= $this->item->params->get('wa_entry_conversation_info_block_position', 0);
$can_edit	= $params->get('access-edit');
$can_delete	= $params->get('access-delete');
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_remca' );
$empty = $component->params->get('default_empty_field', '');
$dummy = false;
$use_def_list = (
			($params->get('show_wa_entry_conversation_category')) OR 
			($params->get('show_wa_entry_conversation_parent_category') AND $this->item->parent_slug != '1:root') OR
			($params->get('show_wa_entry_conversation_created_by')) OR 									
			($params->get('show_wa_entry_conversation_created')) OR 
			$dummy
			);

/*
 *	Layout HTML
 */
?>
<noscript>
<p style="color: red;"><?php echo JText::_('COM_REMCA_WARNING_NOSCRIPT'); ?><p>
</noscript>
<div class="remca wa_entry_conversation-article<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
		<div class="page-header">	
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>
	<?php
		if (!empty($this->item->pagination) AND $this->item->pagination AND !$this->item->paginationposition AND $this->item->paginationrelative) :
			echo $this->item->pagination;
		endif;
	 ?>
	<?php if (!$use_def_list AND $this->print) : ?>
		<div id="pop-print" class="btn">
			<?php echo JHtml::_('wa_entry_conversationicon.print_screen', $this->item, $params); ?>
		</div>
		<div class="clearfix"> </div>
	<?php endif; ?>	
	<?php if ($params->get('show_wa_entry_conversation_icons',-1) >= 0) : ?>
		<?php
			if ($params->get('show_wa_entry_conversation_print_icon') 
					OR $params->get('show_wa_entry_conversation_email_icon') 
					OR $can_edit 
					OR $can_delete 
					):
		?>
			<?php if (!$this->print) : ?>
					<div class="btn-group pull-right">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
						<ul class="dropdown-menu">			
							<?php if ($params->get('show_wa_entry_conversation_print_icon')) : ?>
							<li class="print-icon">
									<?php echo JHtml::_('wa_entry_conversationicon.print_popup',  $this->item, $params); ?>
							</li>
							<?php endif; ?>

							<?php if ($params->get('show_wa_entry_conversation_email_icon')) : ?>
							<li class="email-icon">
									<?php echo JHtml::_('wa_entry_conversationicon.email',  $this->item, $params); ?>
							</li>
							<?php endif; ?>
							<?php if ($can_edit) : ?>
								<li class="edit-icon">
									<?php echo JHtml::_('wa_entry_conversationicon.edit', $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_delete) : ?>
								<li class="delete-icon">
									<?php echo JHtml::_('wa_entry_conversationicon.delete',$this->item, $params); ?>
								</li>
							<?php endif; ?>
						</ul>
					</div>
			<?php else : ?>
				<?php if ($use_def_list) : ?>
					<div id="pop-print" class="btn">
						<?php echo JHtml::_('icon.print_screen', $this->item, $params); ?>
					</div>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>


	<?php echo $this->item->event->beforeDisplayWa_entry_conversation; ?>
		<?php 
			if (isset ($this->item->toc)) : 
				echo $this->item->toc; 
			endif;
		?>	
		<?php
			if ($use_def_list AND $info == 0) : 
				echo $this->loadTemplate('info');
			endif;
		?>	
		
		<?php
			if (!empty($this->item->pagination) AND $this->item->pagination AND !$this->item->paginationposition AND !$this->item->paginationrelative) :
				echo $this->item->pagination;
			endif;
		?>	
		
		<div>
		<?php echo $this->item->description; ?>
		</div>
		
		<?php
			if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND!$this->item->paginationrelative):
			 echo $this->item->pagination;
			endif;
		?>	
		<?php
			$dummy = false;
			$use_fields_list = (
						($params->get('show_wa_entry_conversation_phone')) OR 
						($params->get('show_wa_entry_conversation_id_wa_title_conversation')) OR 
						($params->get('show_wa_entry_conversation_action')) OR 
						$dummy
						);
		?>
		<?php if ($use_fields_list) : ?>		
		<dl class="info">
			<dt class="info-title"><?php  echo JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS_INFO'); ?></dt>
		<?php endif; ?>		
		
			<?php if ($params->get('show_wa_entry_conversation_phone')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS_FIELD_PHONE_LABEL'); ?></strong>
					<?php
						echo $this->item->phone != '' ? $this->item->phone : $empty;
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_wa_entry_conversation_id_wa_title_conversation')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS_FIELD_ID_WA_TITLE_CONVERSATION_LABEL'); ?></strong>
					<?php
						echo JString::trim($this->item->tdlcw_wa_title_conversation_name);
					?>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_wa_entry_conversation_action')) : ?>
				<dd class="field">
					<strong><?php echo JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS_FIELD_ACTION_LABEL'); ?></strong>
					<?php
						switch ($this->item->action) :
									case 'Pide':
										echo JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS_ACTION_VALUE_PIDE');
										break;
									case 'Ofrece':
										echo JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS_ACTION_VALUE_OFRECE');
										break;
									case 'say':
										echo JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS_ACTION_VALUE_DICE');
										break;
									default :
										echo $empty;
										break;
								endswitch;
					?>
				</dd>
			<?php endif; ?>
		<?php if ($use_fields_list) : ?>		
		</dl>	
		<?php endif; ?>
		<?php
			if ($use_def_list AND $info == 1) :
				echo $this->loadTemplate('info');
			endif;
		?>			
	<?php
		if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND $this->item->paginationrelative):
			 echo $this->item->pagination;
		endif;
	?>	
	<?php echo $this->item->event->afterDisplayWa_entry_conversation; ?>
</div>