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
			
// Add css files for the jtca component and categories if they exist
$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_jtca.css');
$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_ljpdng18s.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_jtca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_ljpdng18s-rtl.css');
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
$component = JComponentHelper::getComponent( 'com_jtca' );
$empty = $component->params->get('default_empty_field', '');

/*
 *	Layout HTML
 */
?>
<noscript>
<p style="color: red;"><?php echo JText::_('COM_JTCA_WARNING_NOSCRIPT'); ?><p>
</noscript>
<div class="jtca ljpdng18-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php if ($params->get('show_ljpdng18_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_ljpdng18_print_icon') 
			OR $params->get('show_ljpdng18_email_icon') 
			OR $can_edit 
			OR $can_delete 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
							<?php if ($params->get('show_ljpdng18_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('ljpdng18icon.print_popup',  $this->item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_ljpdng18_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('ljpdng18icon.email',  $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_edit) : ?>
								<li class="edit-icon">
									<?php echo JHtml::_('ljpdng18icon.edit', $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_delete) : ?>
								<li class="delete-icon">
									<?php echo JHtml::_('ljpdng18icon.delete',$this->item, $params); ?>
								</li>					
							<?php endif; ?>
					<?php else : ?>
						<li>
							<?php echo JHtml::_('ljpdng18icon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	
	<?php echo $this->item->event->beforeDisplayLjpdng18; ?>
	<div style="clear:both; padding-top: 10px;">

	</div>
	<div style="padding-top: 10px;">

			<form action="" name="ljpdng18Form" id="ljpdng18Form">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_ljpdng18_id_organo')) OR 
								($params->get('show_ljpdng18_anoj')) OR 
								($params->get('show_ljpdng18_id_expediente')) OR 
								($params->get('show_ljpdng18_id_secretaria')) OR 
								($params->get('show_ljpdng18_field3')) OR 
								($params->get('show_ljpdng18_field4')) OR 
								($params->get('show_ljpdng18_field5')) OR 
								($params->get('show_ljpdng18_field6')) OR 
								($params->get('show_ljpdng18_field7')) OR 
								($params->get('show_ljpdng18_field8_isMoral')) OR 
								($params->get('show_ljpdng18_field8_paterno')) OR 
								($params->get('show_ljpdng18_field8_materno')) OR 
								($params->get('show_ljpdng18_field8_nombre')) OR 
								($params->get('show_ljpdng18_field9')) OR 
								($params->get('show_ljpdng18_field10')) OR 
								($params->get('show_ljpdng18_field11')) OR 
								($params->get('show_ljpdng18_field12')) OR 
								($params->get('show_ljpdng18_exp_extinto')) OR 
								($params->get('show_ljpdng18_jorigen')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_JTCA_LJPDNG18S_FIELDSET_LJPDNG18_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_ljpdng18_id_organo')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_ID_ORGANO_LABEL'); ?>
							</label>
							<span>
								<?php
									if (is_array($this->item->id_organo)) :
									if (count($this->item->id_organo) > 0) : 
										echo '<div class="sql">';
										foreach ($this->item->id_organo as $id_organo) :
											echo '<p>'.$id_organo['value'].'</p>';
										endforeach;
										echo '</div>';
									else :
										echo $empty;
									endif;
								else :;
									echo $this->item->id_organo != '' ? $this->item->id_organo : $empty;
								endif;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljpdng18_anoj')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_ANOJ_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->anoj != '' ? $this->item->anoj : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljpdng18_id_expediente')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_ID_EXPEDIENTE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->id_expediente != '' ? $this->item->id_expediente : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljpdng18_id_secretaria')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_ID_SECRETARIA_LABEL'); ?>
							</label>
							<span>
								<?php
									if (is_array($this->item->id_secretaria)) :
									if (count($this->item->id_secretaria) > 0) : 
										echo '<div class="sql">';
										foreach ($this->item->id_secretaria as $id_secretaria) :
											echo '<p>'.$id_secretaria['value'].'</p>';
										endforeach;
										echo '</div>';
									else :
										echo $empty;
									endif;
								else :;
									echo $this->item->id_secretaria != '' ? $this->item->id_secretaria : $empty;
								endif;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljpdng18_field3')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_FIELD3_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field3 != '' ? $this->item->field3 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljpdng18_field4')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_FIELD4_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field4 != '' ? $this->item->field4 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljpdng18_field5')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_FIELD5_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field5 != '' AND $this->item->field5 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field5, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljpdng18_field6')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_FIELD6_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field6 != '' ? $this->item->field6 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljpdng18_field7')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_FIELD7_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field7 != '' AND $this->item->field7 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field7, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljpdng18_field8_isMoral')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_FIELD8_ISMORAL_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field8_isMoral != '' ? $this->item->field8_isMoral : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljpdng18_field8_paterno')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_FIELD8_PATERNO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field8_paterno != '' ? $this->item->field8_paterno : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljpdng18_field8_materno')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_FIELD8_MATERNO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field8_materno != '' ? $this->item->field8_materno : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljpdng18_field8_nombre')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_FIELD8_NOMBRE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field8_nombre != '' ? $this->item->field8_nombre : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljpdng18_field9')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_FIELD9_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field9 != '' AND $this->item->field9 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field9, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljpdng18_field10')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_FIELD10_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field10 != '' AND $this->item->field10 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field10, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljpdng18_field11')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_FIELD11_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field11 != '' ? $this->item->field11 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljpdng18_field12')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_FIELD12_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field12 != '' ? $this->item->field12 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljpdng18_exp_extinto')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_EXP_EXTINTO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->exp_extinto != '' ? $this->item->exp_extinto : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljpdng18_jorigen')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJPDNG18S_FIELD_JORIGEN_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->jorigen != '' ? $this->item->jorigen : $empty;
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
							($params->get('show_ljpdng18_created_by')) OR
							($params->get('show_ljpdng18_created')) OR
							($params->get('show_ljpdng18_modified')) OR
							($params->get('show_ljpdng18_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_JTCA_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
			<?php if ($params->get('show_ljpdng18_created_by') ) : ?>
				<?php $created_by =  $this->item->created_by ?>
				<?php $created_by = ($this->item->created_by_name ? $this->item->created_by_name : $created_by);?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_BY_LABEL'); ?> 
					</label>
						<?php if (!empty($this->item->created_by ) AND  $this->params->get('link_ljpdng18_created_by') == 1):?>
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
			<?php if ($params->get('show_ljpdng18_created_by_alias')) : ?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_BY_ALIAS_LABEL'); ?>
					</label>
					<?php echo !empty($this->item->created_by_alias) ? $this->item->created_by_alias : $empty; ?>
				</div>
			<?php endif; ?>				
			<?php if ($params->get('show_ljpdng18_created')) : ?>
				<div class="formelm">
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_LABEL'); ?>
					</label>
					<time datetime="<?php echo JHtml::_('date', $this->item->created, 'c'); ?>">
						<?php echo JHtml::_('date',$this->item->created, JText::_('DATE_FORMAT_LC2')); ?>
					</time>
				</div>
			<?php endif; ?>
			<?php if ($params->get('show_ljpdng18_modified')) : ?>
				<div class="formelm">
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_MODIFIED_LABEL'); ?>				
					</label>
					<time datetime="<?php echo JHtml::_('date', $this->item->modified, 'c'); ?>">
						<?php echo JHtml::_('date',$this->item->modified, JText::_('DATE_FORMAT_LC2')); ?>
					</time>
				</div>
			<?php endif; ?>	
			<?php if ($params->get('access-change')): ?>
				<?php if ($params->get('show_ljpdng18_admin')) : ?>
				
					<div class="formelm">
						<label>
						<?php echo JText::_('COM_JTCA_FIELD_STATUS_LABEL'); ?>
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
		<?php echo $this->item->event->afterDisplayLjpdng18; ?>
	</div>		
</div>