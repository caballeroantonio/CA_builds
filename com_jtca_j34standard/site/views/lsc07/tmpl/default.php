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
$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_lsc07s.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_jtca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_lsc07s-rtl.css');
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
<div class="jtca lsc07-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php if ($params->get('show_lsc07_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_lsc07_print_icon') 
			OR $params->get('show_lsc07_email_icon') 
			OR $can_edit 
			OR $can_delete 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
							<?php if ($params->get('show_lsc07_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('lsc07icon.print_popup',  $this->item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_lsc07_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('lsc07icon.email',  $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_edit) : ?>
								<li class="edit-icon">
									<?php echo JHtml::_('lsc07icon.edit', $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_delete) : ?>
								<li class="delete-icon">
									<?php echo JHtml::_('lsc07icon.delete',$this->item, $params); ?>
								</li>					
							<?php endif; ?>
					<?php else : ?>
						<li>
							<?php echo JHtml::_('lsc07icon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	
	<?php echo $this->item->event->beforeDisplayLsc07; ?>
	<div style="clear:both; padding-top: 10px;">

	</div>
	<div style="padding-top: 10px;">

			<form action="" name="lsc07Form" id="lsc07Form">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_lsc07_id_organo')) OR 
								($params->get('show_lsc07_id_expediente')) OR 
								($params->get('show_lsc07_id_secretaria')) OR 
								($params->get('show_lsc07_anoj')) OR 
								($params->get('show_lsc07_field162')) OR 
								($params->get('show_lsc07_field163')) OR 
								($params->get('show_lsc07_field164_isMoral')) OR 
								($params->get('show_lsc07_field164_paterno')) OR 
								($params->get('show_lsc07_field164_materno')) OR 
								($params->get('show_lsc07_field164_nombre')) OR 
								($params->get('show_lsc07_field165')) OR 
								($params->get('show_lsc07_field166')) OR 
								($params->get('show_lsc07_field167_isMoral')) OR 
								($params->get('show_lsc07_field167_paterno')) OR 
								($params->get('show_lsc07_field167_materno')) OR 
								($params->get('show_lsc07_field167_nombre')) OR 
								($params->get('show_lsc07_billete')) OR 
								($params->get('show_lsc07_field169')) OR 
								($params->get('show_lsc07_field169b')) OR 
								($params->get('show_lsc07_field170')) OR 
								($params->get('show_lsc07_field171')) OR 
								($params->get('show_lsc07_field172')) OR 
								($params->get('show_lsc07_field173')) OR 
								($params->get('show_lsc07_field174')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_JTCA_LSC07S_FIELDSET_LSC07_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_lsc07_id_organo')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_ID_ORGANO_LABEL'); ?>
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
						<?php if ($params->get('show_lsc07_id_expediente')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_ID_EXPEDIENTE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->id_expediente != '' ? $this->item->id_expediente : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_id_secretaria')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_ID_SECRETARIA_LABEL'); ?>
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
						<?php if ($params->get('show_lsc07_anoj')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_ANOJ_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->anoj != '' ? $this->item->anoj : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field162')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD162_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field162 != '' ? $this->item->field162 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field163')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD163_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field163 != '' ? $this->item->field163 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field164_isMoral')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD164_ISMORAL_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field164_isMoral != '' ? $this->item->field164_isMoral : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field164_paterno')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD164_PATERNO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field164_paterno != '' ? $this->item->field164_paterno : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field164_materno')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD164_MATERNO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field164_materno != '' ? $this->item->field164_materno : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field164_nombre')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD164_NOMBRE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field164_nombre != '' ? $this->item->field164_nombre : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field165')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD165_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field165 != '' ? $this->item->field165 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field166')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD166_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field166 != '' ? $this->item->field166 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field167_isMoral')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD167_ISMORAL_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field167_isMoral != '' ? $this->item->field167_isMoral : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field167_paterno')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD167_PATERNO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field167_paterno != '' ? $this->item->field167_paterno : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field167_materno')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD167_MATERNO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field167_materno != '' ? $this->item->field167_materno : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field167_nombre')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD167_NOMBRE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field167_nombre != '' ? $this->item->field167_nombre : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_billete')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_BILLETE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->billete != '' ? $this->item->billete : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field169')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD169_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field169 != '' ? $this->item->field169 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field169b')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD169B_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field169b != '' ? $this->item->field169b : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field170')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD170_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field170 != '' ? $this->item->field170 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field171')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD171_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field171 != '' AND $this->item->field171 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field171, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field172')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD172_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field172 != '' ? $this->item->field172 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field173')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD173_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field173 != '' ? $this->item->field173 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsc07_field174')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSC07S_FIELD_FIELD174_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field174 != '' ? $this->item->field174 : $empty;
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
							($params->get('show_lsc07_created_by')) OR
							($params->get('show_lsc07_created')) OR
							($params->get('show_lsc07_modified')) OR
							($params->get('show_lsc07_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_JTCA_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
			<?php if ($params->get('show_lsc07_created_by') ) : ?>
				<?php $created_by =  $this->item->created_by ?>
				<?php $created_by = ($this->item->created_by_name ? $this->item->created_by_name : $created_by);?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_BY_LABEL'); ?> 
					</label>
						<?php if (!empty($this->item->created_by ) AND  $this->params->get('link_lsc07_created_by') == 1):?>
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
			<?php if ($params->get('show_lsc07_created_by_alias')) : ?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_BY_ALIAS_LABEL'); ?>
					</label>
					<?php echo !empty($this->item->created_by_alias) ? $this->item->created_by_alias : $empty; ?>
				</div>
			<?php endif; ?>				
			<?php if ($params->get('show_lsc07_created')) : ?>
				<div class="formelm">
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_LABEL'); ?>
					</label>
					<time datetime="<?php echo JHtml::_('date', $this->item->created, 'c'); ?>">
						<?php echo JHtml::_('date',$this->item->created, JText::_('DATE_FORMAT_LC2')); ?>
					</time>
				</div>
			<?php endif; ?>
			<?php if ($params->get('show_lsc07_modified')) : ?>
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
				<?php if ($params->get('show_lsc07_admin')) : ?>
				
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
		<?php echo $this->item->event->afterDisplayLsc07; ?>
	</div>		
</div>