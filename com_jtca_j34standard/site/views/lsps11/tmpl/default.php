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
$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_lsps11s.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_jtca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_lsps11s-rtl.css');
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
<div class="jtca lsps11-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php if ($params->get('show_lsps11_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_lsps11_print_icon') 
			OR $params->get('show_lsps11_email_icon') 
			OR $can_edit 
			OR $can_delete 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
							<?php if ($params->get('show_lsps11_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('lsps11icon.print_popup',  $this->item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_lsps11_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('lsps11icon.email',  $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_edit) : ?>
								<li class="edit-icon">
									<?php echo JHtml::_('lsps11icon.edit', $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_delete) : ?>
								<li class="delete-icon">
									<?php echo JHtml::_('lsps11icon.delete',$this->item, $params); ?>
								</li>					
							<?php endif; ?>
					<?php else : ?>
						<li>
							<?php echo JHtml::_('lsps11icon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	
	<?php echo $this->item->event->beforeDisplayLsps11; ?>
	<div style="clear:both; padding-top: 10px;">

	</div>
	<div style="padding-top: 10px;">

			<form action="" name="lsps11Form" id="lsps11Form">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_lsps11_id_expediente')) OR 
								($params->get('show_lsps11_id_organo')) OR 
								($params->get('show_lsps11_id_secretaria')) OR 
								($params->get('show_lsps11_anoj')) OR 
								($params->get('show_lsps11_field2433_isMoral')) OR 
								($params->get('show_lsps11_field2433_paterno')) OR 
								($params->get('show_lsps11_field2433_materno')) OR 
								($params->get('show_lsps11_field2433_nombre')) OR 
								($params->get('show_lsps11_field2434')) OR 
								($params->get('show_lsps11_field2435')) OR 
								($params->get('show_lsps11_field2436')) OR 
								($params->get('show_lsps11_field2437')) OR 
								($params->get('show_lsps11_field2438')) OR 
								($params->get('show_lsps11_field2439')) OR 
								($params->get('show_lsps11_field2440_isMoral')) OR 
								($params->get('show_lsps11_field2440_paterno')) OR 
								($params->get('show_lsps11_field2440_materno')) OR 
								($params->get('show_lsps11_field2440_nombre')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_JTCA_LSPS11S_FIELDSET_LSPS11_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_lsps11_id_expediente')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS11S_FIELD_ID_EXPEDIENTE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->id_expediente != '' ? $this->item->id_expediente : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps11_id_organo')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS11S_FIELD_ID_ORGANO_LABEL'); ?>
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
						<?php if ($params->get('show_lsps11_id_secretaria')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS11S_FIELD_ID_SECRETARIA_LABEL'); ?>
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
						<?php if ($params->get('show_lsps11_anoj')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS11S_FIELD_ANOJ_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->anoj != '' ? $this->item->anoj : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps11_field2433_isMoral')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS11S_FIELD_FIELD2433_ISMORAL_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2433_isMoral != '' ? $this->item->field2433_isMoral : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps11_field2433_paterno')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS11S_FIELD_FIELD2433_PATERNO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2433_paterno != '' ? $this->item->field2433_paterno : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps11_field2433_materno')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS11S_FIELD_FIELD2433_MATERNO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2433_materno != '' ? $this->item->field2433_materno : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps11_field2433_nombre')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS11S_FIELD_FIELD2433_NOMBRE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2433_nombre != '' ? $this->item->field2433_nombre : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps11_field2434')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS11S_FIELD_FIELD2434_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2434 != '' ? $this->item->field2434 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps11_field2435')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS11S_FIELD_FIELD2435_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2435 != '' ? $this->item->field2435 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps11_field2436')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS11S_FIELD_FIELD2436_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field2436 != '' AND $this->item->field2436 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field2436, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps11_field2437')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS11S_FIELD_FIELD2437_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2437 != '' ? $this->item->field2437 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps11_field2438')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS11S_FIELD_FIELD2438_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2438 != '' ? $this->item->field2438 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps11_field2439')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS11S_FIELD_FIELD2439_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field2439 != '' AND $this->item->field2439 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field2439, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps11_field2440_isMoral')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS11S_FIELD_FIELD2440_ISMORAL_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2440_isMoral != '' ? $this->item->field2440_isMoral : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps11_field2440_paterno')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS11S_FIELD_FIELD2440_PATERNO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2440_paterno != '' ? $this->item->field2440_paterno : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps11_field2440_materno')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS11S_FIELD_FIELD2440_MATERNO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2440_materno != '' ? $this->item->field2440_materno : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps11_field2440_nombre')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS11S_FIELD_FIELD2440_NOMBRE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2440_nombre != '' ? $this->item->field2440_nombre : $empty;
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
							($params->get('show_lsps11_created_by')) OR
							($params->get('show_lsps11_created')) OR
							($params->get('show_lsps11_modified')) OR
							($params->get('show_lsps11_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_JTCA_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
			<?php if ($params->get('show_lsps11_created_by') ) : ?>
				<?php $created_by =  $this->item->created_by ?>
				<?php $created_by = ($this->item->created_by_name ? $this->item->created_by_name : $created_by);?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_BY_LABEL'); ?> 
					</label>
						<?php if (!empty($this->item->created_by ) AND  $this->params->get('link_lsps11_created_by') == 1):?>
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
			<?php if ($params->get('show_lsps11_created_by_alias')) : ?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_BY_ALIAS_LABEL'); ?>
					</label>
					<?php echo !empty($this->item->created_by_alias) ? $this->item->created_by_alias : $empty; ?>
				</div>
			<?php endif; ?>				
			<?php if ($params->get('show_lsps11_created')) : ?>
				<div class="formelm">
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_LABEL'); ?>
					</label>
					<time datetime="<?php echo JHtml::_('date', $this->item->created, 'c'); ?>">
						<?php echo JHtml::_('date',$this->item->created, JText::_('DATE_FORMAT_LC2')); ?>
					</time>
				</div>
			<?php endif; ?>
			<?php if ($params->get('show_lsps11_modified')) : ?>
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
				<?php if ($params->get('show_lsps11_admin')) : ?>
				
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
		<?php echo $this->item->event->afterDisplayLsps11; ?>
	</div>		
</div>