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
 * @CAversion		Id: default.php 571 2016-01-04 15:03:02Z BrianWade $
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

$can_edit	= $params->get('access-edit');
$can_delete	= $params->get('access-delete');
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_remca' );
$empty = $component->params->get('default_empty_field', '');

/*
 *	Layout HTML
 */
?>
<noscript>
<p style="color: red;"><?php echo JText::_('COM_REMCA_WARNING_NOSCRIPT'); ?><p>
</noscript>
<div class="remca wa_entry_conversation-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php
		if (!empty($this->item->pagination) AND $this->item->pagination AND !$this->item->paginationposition AND $this->item->paginationrelative):
			 echo $this->item->pagination;
		endif;
	?>	
	<?php if ($params->get('show_wa_entry_conversation_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_wa_entry_conversation_print_icon') 
			OR $params->get('show_wa_entry_conversation_email_icon') 
			OR $can_edit 
			OR $can_delete 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
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
					<?php else : ?>
						<li>
							<?php echo JHtml::_('wa_entry_conversationicon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	
	<?php echo $this->item->event->beforeDisplayWa_entry_conversation; ?>
	<div style="clear:both; padding-top: 10px;">

		<?php 
			if (isset ($this->item->toc)) : 
				echo $this->item->toc; 
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
					if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND !$this->item->paginationrelative):
						echo $this->item->pagination;
					endif;
				?>		
	</div>
	<div style="padding-top: 10px;">

			<form action="" name="wa_entry_conversationForm" id="wa_entry_conversationForm">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_wa_entry_conversation_phone')) OR 
								($params->get('show_wa_entry_conversation_id_wa_title_conversation')) OR 
								($params->get('show_wa_entry_conversation_action')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS_FIELDSET_WA_ENTRY_CONVERSATIONS_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_wa_entry_conversation_phone')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS_FIELD_PHONE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->phone != '' ? $this->item->phone : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_wa_entry_conversation_id_wa_title_conversation')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS_FIELD_ID_WA_TITLE_CONVERSATION_LABEL'); ?>
							</label>
							<span>
								<?php
									echo JString::trim($this->item->tdlcw_wa_title_conversation_name);
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_wa_entry_conversation_action')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS_FIELD_ACTION_LABEL'); ?>
							</label>
							<span>
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
							</span>
						</div>	
						<?php endif; ?>
					</div>
			<?php if ($display_fieldset) : ?>				
				</fieldset>	
			<?php endif;?>	
			<?php
				$dummy = false;
		$display_fieldset = (
							($params->get('show_wa_entry_conversation_category')) OR 
							($params->get('show_wa_entry_conversation_parent_category') AND $this->item->parent_slug != '1:root') OR
							($params->get('show_wa_entry_conversation_created_by')) OR
							($params->get('show_wa_entry_conversation_created')) OR
							($params->get('show_wa_entry_conversation_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_REMCA_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
			<?php if ($params->get('show_wa_entry_conversation_parent_category') AND $this->item->parent_slug != '1:root') : ?>
				<?php $title = $this->escape($this->item->parent_title); ?>				
				<div class="formelm">
					<label>
						<?php echo JText::_('COM_REMCA_FIELD_PARENT_CATEGORY_LABEL'); ?>
					</label>
					<span>
						<?php if ($params->get('link_wa_entry_conversation_parent_category') AND $this->item->parent_slug) : ?>
							<?php $url = '<a href="'.JRoute::_(RemcaHelperRoute::getCategoryRoute($this->item->parent_slug, $params->get('keep_wa_entry_conversation_itemid'))).'">'.$title.'</a>'; ?>
							<?php echo $url; ?>
						<?php else : ?>
							<?php echo $title; ?>
						<?php endif; ?>
					</span>
				</div>
			<?php endif;?>	
			<?php if ($params->get('show_wa_entry_conversation_category')) : ?>
				<?php $title = $this->escape($this->item->category_title); ?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_REMCA_FIELD_CATEGORY_LABEL'); ?>
					</label>
					<span>
						<?php if ($params->get('link_wa_entry_conversation_category') AND $this->item->catslug) : ?>
							<?php $url = '<a href="'.JRoute::_(RemcaHelperRoute::getCategoryRoute($this->item->catslug, $params->get('keep_wa_entry_conversation_itemid'))).'">'.$title.'</a>'; ?>
							<?php echo $url; ?>
						<?php else : ?>
							<?php echo $title; ?>
						<?php endif; ?>	
					</span>
				</div>								
			<?php endif; ?>						
			<?php if ($params->get('show_wa_entry_conversation_created_by') ) : ?>
				<?php $created_by =  $this->item->created_by ?>
				<?php $created_by = ($this->item->created_by_name ? $this->item->created_by_name : $created_by);?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_REMCA_FIELD_CREATED_BY_LABEL'); ?> 
					</label>
						<?php if (!empty($this->item->created_by ) AND  $this->params->get('link_wa_entry_conversation_created_by') == 1):?>
							<?php echo JHtml::_(
									'link',
									JRoute::_('index.php?option=com_users&view=profile&id='.$this->item->created_by),
									$created_by);
							 ?>

						<?php else :?>
							<?php echo $created_by; ?>
						<?php endif; ?>
				</div>
			<?php endif; ?>	
			<?php if ($params->get('show_wa_entry_conversation_created_by_alias')) : ?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_REMCA_FIELD_CREATED_BY_ALIAS_LABEL'); ?>
					</label>
					<?php echo !empty($this->item->created_by_alias) ? $this->item->created_by_alias : $empty; ?>
				</div>
			<?php endif; ?>				
			<?php if ($params->get('show_wa_entry_conversation_created')) : ?>
				<div class="formelm">
					<label>
						<?php echo JText::_('COM_REMCA_FIELD_CREATED_LABEL'); ?>
					</label>
					<time datetime="<?php echo JHtml::_('date', $this->item->created, 'c'); ?>">
						<?php echo JHtml::_('date',$this->item->created, JText::_('DATE_FORMAT_LC2')); ?>
					</time>
				</div>
			<?php endif; ?>
			<?php if ($params->get('access-change')): ?>
				<?php if ($params->get('show_wa_entry_conversation_admin')) : ?>
				
					<div class="formelm">
						<label>
						<?php echo JText::_('COM_REMCA_FIELD_STATUS_LABEL'); ?>
						</label>
						<span>
							<?php 
								switch ($this->item->state) :
									case '1':
										echo JText::_('JPUBLISHED');
										break;
									case '0':
										echo JText::_('JUNPUBLISHED');
										break;
									case '2':
										echo JText::_('JARCHIVED');
										break;
									case '-2':
										echo JText::_('JTRASH');
										break;
								endswitch;
							?>
						</span>	
					</div>
					<div class="formelm">
						<label>
							<?php echo JText::_('JFIELD_ORDERING_LABEL'); ?>
						</label>
						<span>
							<?php echo $this->item->ordering; ?>
						</span>
					</div>	
				<?php endif; ?>
				
			<?php endif; ?>
			
			<?php if ($display_fieldset) : ?>				
					</fieldset>	
			<?php endif;?>	
			</form>
		<?php
			if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND $this->item->paginationrelative):
				 echo $this->item->pagination;
			endif;
		?>	
		<?php echo $this->item->event->afterDisplayWa_entry_conversation; ?>
	</div>		
</div>