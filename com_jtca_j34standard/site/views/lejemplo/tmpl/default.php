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
$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_lejemplos.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_jtca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_lejemplos-rtl.css');
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
<div class="jtca lejemplo-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php if ($params->get('show_lejemplo_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_lejemplo_print_icon') 
			OR $params->get('show_lejemplo_email_icon') 
			OR $can_edit 
			OR $can_delete 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
							<?php if ($params->get('show_lejemplo_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('lejemploicon.print_popup',  $this->item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_lejemplo_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('lejemploicon.email',  $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_edit) : ?>
								<li class="edit-icon">
									<?php echo JHtml::_('lejemploicon.edit', $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_delete) : ?>
								<li class="delete-icon">
									<?php echo JHtml::_('lejemploicon.delete',$this->item, $params); ?>
								</li>					
							<?php endif; ?>
					<?php else : ?>
						<li>
							<?php echo JHtml::_('lejemploicon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	
	<?php echo $this->item->event->beforeDisplayLejemplo; ?>
	<div style="clear:both; padding-top: 10px;">

	</div>
	<div style="padding-top: 10px;">

			<form action="" name="lejemploForm" id="lejemploForm">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_lejemplo_id_expediente')) OR 
								($params->get('show_lejemplo_id_organo')) OR 
								($params->get('show_lejemplo_id_secretaria')) OR 
								($params->get('show_lejemplo_anoj')) OR 
								($params->get('show_lejemplo_my_boolean')) OR 
								($params->get('show_lejemplo_my_int')) OR 
								($params->get('show_lejemplo_my_currency')) OR 
								($params->get('show_lejemplo_my_date')) OR 
								($params->get('show_lejemplo_my_datetime')) OR 
								($params->get('show_lejemplo_my_var45')) OR 
								($params->get('show_lejemplo_txt_expediente')) OR 
								($params->get('show_lejemplo_my_var255')) OR 
								($params->get('show_lejemplo_txt_my_suggest')) OR 
								($params->get('show_lejemplo_my_multiline')) OR 
								($params->get('show_lejemplo_my_ref2')) OR 
								($params->get('show_lejemplo_my_ref')) OR 
								($params->get('show_lejemplo_id_my_suggest')) OR 
								($params->get('show_lejemplo_my_NFempleado')) OR 
								($params->get('show_lejemplo_my_fexterna')) OR 
								($params->get('show_lejemplo_my_hexterna')) OR 
								($params->get('show_lejemplo_my_parent')) OR 
								($params->get('show_lejemplo_my_person_isMoral')) OR 
								($params->get('show_lejemplo_my_person_paterno')) OR 
								($params->get('show_lejemplo_my_person_materno')) OR 
								($params->get('show_lejemplo_my_person_nombre')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELDSET_LEJEMPLO_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_lejemplo_id_expediente')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_ID_EXPEDIENTE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->id_expediente != '' ? $this->item->id_expediente : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_id_organo')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_ID_ORGANO_LABEL'); ?>
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
						<?php if ($params->get('show_lejemplo_id_secretaria')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_ID_SECRETARIA_LABEL'); ?>
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
						<?php if ($params->get('show_lejemplo_anoj')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_ANOJ_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->anoj != '' ? $this->item->anoj : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_my_boolean')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_MY_BOOLEAN_LABEL'); ?>
							</label>
							<span>
								<?php
									switch ($this->item->my_boolean) :
									case '0':
										echo JText::_('JNO');
										break;
									case '1':
										echo JText::_('JYES');
										break;
									default:
										echo JText::_('JNONE');
										break;
								endswitch;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_my_int')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_MY_INT_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->my_int != '' ? $this->item->my_int : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_my_currency')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_MY_CURRENCY_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->my_currency != '' ? $this->item->my_currency : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_my_date')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_MY_DATE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->my_date != '' AND $this->item->my_date != '0000-00-00 00:00:00') ? JHtml::date($this->item->my_date, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_my_datetime')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_MY_DATETIME_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->my_datetime != '' AND $this->item->my_datetime != '0000-00-00 00:00:00') ? JHtml::date($this->item->my_datetime, '%Y-%m-%d %H:%M', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_my_var45')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_MY_VAR45_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->my_var45 != '' ? $this->item->my_var45 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_txt_expediente')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_TXT_EXPEDIENTE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->txt_expediente != '' ? $this->item->txt_expediente : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_my_var255')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_MY_VAR255_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->my_var255 != '' ? $this->item->my_var255 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_txt_my_suggest')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_TXT_MY_SUGGEST_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->txt_my_suggest != '' ? $this->item->txt_my_suggest : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_my_multiline')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_MY_MULTILINE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->my_multiline != '' ? $this->item->my_multiline : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_my_ref2')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_MY_REF2_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->my_ref2 != '' ? $this->item->my_ref2 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_my_ref')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_MY_REF_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->my_ref != '' ? $this->item->my_ref : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_id_my_suggest')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_ID_MY_SUGGEST_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->id_my_suggest != '' ? $this->item->id_my_suggest : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_my_NFempleado')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_MY_NFEMPLEADO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->my_NFempleado != '' ? $this->item->my_NFempleado : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_my_fexterna')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_MY_FEXTERNA_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->my_fexterna != '' ? $this->item->my_fexterna : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_my_hexterna')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_MY_HEXTERNA_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->my_hexterna != '' ? $this->item->my_hexterna : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_my_parent')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_MY_PARENT_LABEL'); ?>
							</label>
							<span>
								<?php
									echo JString::trim($this->item->lde_lejemplo_id);
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_my_person_isMoral')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_MY_PERSON_ISMORAL_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->my_person_isMoral != '' ? $this->item->my_person_isMoral : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_my_person_paterno')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_MY_PERSON_PATERNO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->my_person_paterno != '' ? $this->item->my_person_paterno : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_my_person_materno')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_MY_PERSON_MATERNO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->my_person_materno != '' ? $this->item->my_person_materno : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lejemplo_my_person_nombre')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LEJEMPLOS_FIELD_MY_PERSON_NOMBRE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->my_person_nombre != '' ? $this->item->my_person_nombre : $empty;
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
							($params->get('show_lejemplo_created_by')) OR
							($params->get('show_lejemplo_created')) OR
							($params->get('show_lejemplo_modified')) OR
							($params->get('show_lejemplo_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_JTCA_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
			<?php if ($params->get('show_lejemplo_created_by') ) : ?>
				<?php $created_by =  $this->item->created_by ?>
				<?php $created_by = ($this->item->created_by_name ? $this->item->created_by_name : $created_by);?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_BY_LABEL'); ?> 
					</label>
						<?php if (!empty($this->item->created_by ) AND  $this->params->get('link_lejemplo_created_by') == 1):?>
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
			<?php if ($params->get('show_lejemplo_created_by_alias')) : ?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_BY_ALIAS_LABEL'); ?>
					</label>
					<?php echo !empty($this->item->created_by_alias) ? $this->item->created_by_alias : $empty; ?>
				</div>
			<?php endif; ?>				
			<?php if ($params->get('show_lejemplo_created')) : ?>
				<div class="formelm">
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_LABEL'); ?>
					</label>
					<time datetime="<?php echo JHtml::_('date', $this->item->created, 'c'); ?>">
						<?php echo JHtml::_('date',$this->item->created, JText::_('DATE_FORMAT_LC2')); ?>
					</time>
				</div>
			<?php endif; ?>
			<?php if ($params->get('show_lejemplo_modified')) : ?>
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
				<?php if ($params->get('show_lejemplo_admin')) : ?>
				
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
		<?php echo $this->item->event->afterDisplayLejemplo; ?>
	</div>		
</div>