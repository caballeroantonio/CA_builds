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
$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_lsps02s.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_jtca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_lsps02s-rtl.css');
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
<div class="jtca lsps02-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php if ($params->get('show_lsps02_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_lsps02_print_icon') 
			OR $params->get('show_lsps02_email_icon') 
			OR $can_edit 
			OR $can_delete 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
							<?php if ($params->get('show_lsps02_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('lsps02icon.print_popup',  $this->item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_lsps02_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('lsps02icon.email',  $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_edit) : ?>
								<li class="edit-icon">
									<?php echo JHtml::_('lsps02icon.edit', $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_delete) : ?>
								<li class="delete-icon">
									<?php echo JHtml::_('lsps02icon.delete',$this->item, $params); ?>
								</li>					
							<?php endif; ?>
					<?php else : ?>
						<li>
							<?php echo JHtml::_('lsps02icon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	
	<?php echo $this->item->event->beforeDisplayLsps02; ?>
	<div style="clear:both; padding-top: 10px;">

	</div>
	<div style="padding-top: 10px;">

			<form action="" name="lsps02Form" id="lsps02Form">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_lsps02_id_expediente')) OR 
								($params->get('show_lsps02_id_organo')) OR 
								($params->get('show_lsps02_id_secretaria')) OR 
								($params->get('show_lsps02_anoj')) OR 
								($params->get('show_lsps02_field2359')) OR 
								($params->get('show_lsps02_field2360')) OR 
								($params->get('show_lsps02_field2361')) OR 
								($params->get('show_lsps02_field2362')) OR 
								($params->get('show_lsps02_field2363')) OR 
								($params->get('show_lsps02_field2364')) OR 
								($params->get('show_lsps02_field2365')) OR 
								($params->get('show_lsps02_txt_field2366')) OR 
								($params->get('show_lsps02_field2367')) OR 
								($params->get('show_lsps02_field2368')) OR 
								($params->get('show_lsps02_field2369')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_JTCA_LSPS02S_FIELDSET_LSPS02_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_lsps02_id_expediente')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS02S_FIELD_ID_EXPEDIENTE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->id_expediente != '' ? $this->item->id_expediente : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps02_id_organo')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS02S_FIELD_ID_ORGANO_LABEL'); ?>
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
						<?php if ($params->get('show_lsps02_id_secretaria')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS02S_FIELD_ID_SECRETARIA_LABEL'); ?>
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
						<?php if ($params->get('show_lsps02_anoj')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS02S_FIELD_ANOJ_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->anoj != '' ? $this->item->anoj : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps02_field2359')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS02S_FIELD_FIELD2359_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2359 != '' ? $this->item->field2359 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps02_field2360')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS02S_FIELD_FIELD2360_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2360 != '' ? $this->item->field2360 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps02_field2361')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS02S_FIELD_FIELD2361_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2361 != '' ? $this->item->field2361 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps02_field2362')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS02S_FIELD_FIELD2362_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2362 != '' ? $this->item->field2362 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps02_field2363')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS02S_FIELD_FIELD2363_LABEL'); ?>
							</label>
							<span>
								<?php
									switch ($this->item->field2363) :
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
						<?php if ($params->get('show_lsps02_field2364')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS02S_FIELD_FIELD2364_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2364 != '' ? $this->item->field2364 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps02_field2365')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS02S_FIELD_FIELD2365_LABEL'); ?>
							</label>
							<span>
								<?php
									switch ($this->item->field2365) :
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
						<?php if ($params->get('show_lsps02_txt_field2366')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS02S_FIELD_TXT_FIELD2366_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->txt_field2366 != '' ? $this->item->txt_field2366 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps02_field2367')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS02S_FIELD_FIELD2367_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field2367 != '' AND $this->item->field2367 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field2367, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps02_field2368')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS02S_FIELD_FIELD2368_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2368 != '' ? $this->item->field2368 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_lsps02_field2369')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LSPS02S_FIELD_FIELD2369_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field2369 != '' ? $this->item->field2369 : $empty;
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
							($params->get('show_lsps02_created_by')) OR
							($params->get('show_lsps02_created')) OR
							($params->get('show_lsps02_modified')) OR
							($params->get('show_lsps02_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_JTCA_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
			<?php if ($params->get('show_lsps02_created_by') ) : ?>
				<?php $created_by =  $this->item->created_by ?>
				<?php $created_by = ($this->item->created_by_name ? $this->item->created_by_name : $created_by);?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_BY_LABEL'); ?> 
					</label>
						<?php if (!empty($this->item->created_by ) AND  $this->params->get('link_lsps02_created_by') == 1):?>
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
			<?php if ($params->get('show_lsps02_created_by_alias')) : ?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_BY_ALIAS_LABEL'); ?>
					</label>
					<?php echo !empty($this->item->created_by_alias) ? $this->item->created_by_alias : $empty; ?>
				</div>
			<?php endif; ?>				
			<?php if ($params->get('show_lsps02_created')) : ?>
				<div class="formelm">
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_LABEL'); ?>
					</label>
					<time datetime="<?php echo JHtml::_('date', $this->item->created, 'c'); ?>">
						<?php echo JHtml::_('date',$this->item->created, JText::_('DATE_FORMAT_LC2')); ?>
					</time>
				</div>
			<?php endif; ?>
			<?php if ($params->get('show_lsps02_modified')) : ?>
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
				<?php if ($params->get('show_lsps02_admin')) : ?>
				
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
		<?php echo $this->item->event->afterDisplayLsps02; ?>
	</div>		
</div>