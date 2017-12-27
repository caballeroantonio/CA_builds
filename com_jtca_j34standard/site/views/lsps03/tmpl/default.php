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
$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_lsps03s.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_jtca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_lsps03s-rtl.css');
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
<div class="jtca lsps03-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php if ($params->get('show_lsps03_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_lsps03_print_icon') 
			OR $params->get('show_lsps03_email_icon') 
			OR $can_edit 
			OR $can_delete 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
							<?php if ($params->get('show_lsps03_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('lsps03icon.print_popup',  $this->item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_lsps03_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('lsps03icon.email',  $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_edit) : ?>
								<li class="edit-icon">
									<?php echo JHtml::_('lsps03icon.edit', $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_delete) : ?>
								<li class="delete-icon">
									<?php echo JHtml::_('lsps03icon.delete',$this->item, $params); ?>
								</li>					
							<?php endif; ?>
					<?php else : ?>
						<li>
							<?php echo JHtml::_('lsps03icon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	
	<?php echo $this->item->event->beforeDisplayLsps03; ?>
	<div style="clear:both; padding-top: 10px;">

	</div>
	<div style="padding-top: 10px;">

			<form action="" name="lsps03Form" id="lsps03Form">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_lsps03_id_expediente')) OR 
								($params->get('show_lsps03_id_organo')) OR 
								($params->get('show_lsps03_id_secretaria')) OR 
								($params->get('show_lsps03_anoj')) OR 
								($params->get('show_lsps03_field2370')) OR 
								($params->get('show_lsps03_field2371')) OR 
								($params->get('show_lsps03_field2372')) OR 
								($params->get('show_lsps03_field2373')) OR 
								($params->get('show_lsps03_field2374')) OR 
								($params->get('show_lsps03_field2375')) OR 
								($params->get('show_lsps03_field2376')) OR 
								($params->get('show_lsps03_field2377')) OR 
								($params->get('show_lsps03_field2378')) OR 
								($params->get('show_lsps03_field2379')) OR 
								($params->get('show_lsps03_field2380')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_JTCA_LSPS03S_FIELDSET_LSPS03_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_lsps03_id_expediente')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS03S_FIELD_ID_EXPEDIENTE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->id_expediente != '' ? $this->item->id_expediente : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps03_id_organo')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS03S_FIELD_ID_ORGANO_LABEL'); ?>
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
						<?php if ($params->get('show_lsps03_id_secretaria')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS03S_FIELD_ID_SECRETARIA_LABEL'); ?>
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
						<?php if ($params->get('show_lsps03_anoj')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS03S_FIELD_ANOJ_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->anoj != '' ? $this->item->anoj : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps03_field2370')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS03S_FIELD_FIELD2370_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2370 != '' ? $this->item->field2370 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps03_field2371')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS03S_FIELD_FIELD2371_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2371 != '' ? $this->item->field2371 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps03_field2372')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS03S_FIELD_FIELD2372_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2372 != '' ? $this->item->field2372 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps03_field2373')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS03S_FIELD_FIELD2373_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2373 != '' ? $this->item->field2373 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps03_field2374')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS03S_FIELD_FIELD2374_LABEL'); ?>
							</label>
							<span>
								<?php
									switch ($this->item->field2374) :
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
						<?php if ($params->get('show_lsps03_field2375')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS03S_FIELD_FIELD2375_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2375 != '' ? $this->item->field2375 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps03_field2376')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS03S_FIELD_FIELD2376_LABEL'); ?>
							</label>
							<span>
								<?php
									switch ($this->item->field2376) :
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
						<?php if ($params->get('show_lsps03_field2377')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS03S_FIELD_FIELD2377_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2377 != '' ? $this->item->field2377 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps03_field2378')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS03S_FIELD_FIELD2378_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field2378 != '' AND $this->item->field2378 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field2378, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps03_field2379')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS03S_FIELD_FIELD2379_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2379 != '' ? $this->item->field2379 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps03_field2380')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS03S_FIELD_FIELD2380_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2380 != '' ? $this->item->field2380 : $empty;
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
							($params->get('show_lsps03_created_by')) OR
							($params->get('show_lsps03_created')) OR
							($params->get('show_lsps03_modified')) OR
							($params->get('show_lsps03_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_JTCA_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
			<?php if ($params->get('show_lsps03_created_by') ) : ?>
				<?php $created_by =  $this->item->created_by ?>
				<?php $created_by = ($this->item->created_by_name ? $this->item->created_by_name : $created_by);?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_BY_LABEL'); ?> 
					</label>
						<?php if (!empty($this->item->created_by ) AND  $this->params->get('link_lsps03_created_by') == 1):?>
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
			<?php if ($params->get('show_lsps03_created_by_alias')) : ?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_BY_ALIAS_LABEL'); ?>
					</label>
					<?php echo !empty($this->item->created_by_alias) ? $this->item->created_by_alias : $empty; ?>
				</div>
			<?php endif; ?>				
			<?php if ($params->get('show_lsps03_created')) : ?>
				<div class="formelm">
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_LABEL'); ?>
					</label>
					<time datetime="<?php echo JHtml::_('date', $this->item->created, 'c'); ?>">
						<?php echo JHtml::_('date',$this->item->created, JText::_('DATE_FORMAT_LC2')); ?>
					</time>
				</div>
			<?php endif; ?>
			<?php if ($params->get('show_lsps03_modified')) : ?>
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
				<?php if ($params->get('show_lsps03_admin')) : ?>
				
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
		<?php echo $this->item->event->afterDisplayLsps03; ?>
	</div>		
</div>