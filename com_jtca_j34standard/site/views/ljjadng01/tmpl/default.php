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
$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_ljjadng01s.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_jtca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_ljjadng01s-rtl.css');
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
<div class="jtca ljjadng01-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php if ($params->get('show_ljjadng01_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_ljjadng01_print_icon') 
			OR $params->get('show_ljjadng01_email_icon') 
			OR $can_edit 
			OR $can_delete 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
							<?php if ($params->get('show_ljjadng01_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('ljjadng01icon.print_popup',  $this->item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_ljjadng01_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('ljjadng01icon.email',  $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_edit) : ?>
								<li class="edit-icon">
									<?php echo JHtml::_('ljjadng01icon.edit', $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_delete) : ?>
								<li class="delete-icon">
									<?php echo JHtml::_('ljjadng01icon.delete',$this->item, $params); ?>
								</li>					
							<?php endif; ?>
					<?php else : ?>
						<li>
							<?php echo JHtml::_('ljjadng01icon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	
	<?php echo $this->item->event->beforeDisplayLjjadng01; ?>
	<div style="clear:both; padding-top: 10px;">

	</div>
	<div style="padding-top: 10px;">

			<form action="" name="ljjadng01Form" id="ljjadng01Form">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_ljjadng01_id_organo')) OR 
								($params->get('show_ljjadng01_anoj')) OR 
								($params->get('show_ljjadng01_id_expediente')) OR 
								($params->get('show_ljjadng01_id_secretaria')) OR 
								($params->get('show_ljjadng01_field2')) OR 
								($params->get('show_ljjadng01_txt_field2032')) OR 
								($params->get('show_ljjadng01_id_field2032')) OR 
								($params->get('show_ljjadng01_field6')) OR 
								($params->get('show_ljjadng01_field7')) OR 
								($params->get('show_ljjadng01_field8')) OR 
								($params->get('show_ljjadng01_field9')) OR 
								($params->get('show_ljjadng01_field10')) OR 
								($params->get('show_ljjadng01_field11')) OR 
								($params->get('show_ljjadng01_field12')) OR 
								($params->get('show_ljjadng01_field13')) OR 
								($params->get('show_ljjadng01_field14')) OR 
								($params->get('show_ljjadng01_field15')) OR 
								($params->get('show_ljjadng01_field16')) OR 
								($params->get('show_ljjadng01_field17')) OR 
								($params->get('show_ljjadng01_field18')) OR 
								($params->get('show_ljjadng01_field19')) OR 
								($params->get('show_ljjadng01_field20')) OR 
								($params->get('show_ljjadng01_field21')) OR 
								($params->get('show_ljjadng01_field22')) OR 
								($params->get('show_ljjadng01_field23')) OR 
								($params->get('show_ljjadng01_field24')) OR 
								($params->get('show_ljjadng01_field25')) OR 
								($params->get('show_ljjadng01_field26')) OR 
								($params->get('show_ljjadng01_field27')) OR 
								($params->get('show_ljjadng01_field28')) OR 
								($params->get('show_ljjadng01_field29')) OR 
								($params->get('show_ljjadng01_field30')) OR 
								($params->get('show_ljjadng01_field31')) OR 
								($params->get('show_ljjadng01_field32')) OR 
								($params->get('show_ljjadng01_field33')) OR 
								($params->get('show_ljjadng01_field34')) OR 
								($params->get('show_ljjadng01_field35')) OR 
								($params->get('show_ljjadng01_field36')) OR 
								($params->get('show_ljjadng01_field37')) OR 
								($params->get('show_ljjadng01_field38')) OR 
								($params->get('show_ljjadng01_field39')) OR 
								($params->get('show_ljjadng01_field40')) OR 
								($params->get('show_ljjadng01_field42')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_JTCA_LJJADNG01S_FIELDSET_LJJADNG01_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_ljjadng01_id_organo')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_ID_ORGANO_LABEL'); ?>
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
						<?php if ($params->get('show_ljjadng01_anoj')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_ANOJ_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->anoj != '' ? $this->item->anoj : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_id_expediente')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_ID_EXPEDIENTE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->id_expediente != '' ? $this->item->id_expediente : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_id_secretaria')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_ID_SECRETARIA_LABEL'); ?>
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
						<?php if ($params->get('show_ljjadng01_field2')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD2_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field2 != '' AND $this->item->field2 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field2, '%Y-%m-%d %H:%M', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_txt_field2032')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_TXT_FIELD2032_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->txt_field2032 != '' ? $this->item->txt_field2032 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_id_field2032')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_ID_FIELD2032_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->id_field2032 != '' ? $this->item->id_field2032 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field6')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD6_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field6 != '' ? $this->item->field6 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field7')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD7_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field7 != '' ? $this->item->field7 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field8')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD8_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field8 != '' ? $this->item->field8 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field9')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD9_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field9 != '' AND $this->item->field9 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field9, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field10')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD10_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field10 != '' ? $this->item->field10 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field11')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD11_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field11 != '' ? $this->item->field11 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field12')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD12_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field12 != '' ? $this->item->field12 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field13')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD13_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field13 != '' AND $this->item->field13 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field13, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field14')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD14_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field14 != '' ? $this->item->field14 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field15')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD15_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field15 != '' ? $this->item->field15 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field16')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD16_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field16 != '' AND $this->item->field16 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field16, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field17')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD17_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field17 != '' AND $this->item->field17 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field17, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field18')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD18_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field18 != '' AND $this->item->field18 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field18, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field19')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD19_LABEL'); ?>
							</label>
							<span>
								<?php
									switch ($this->item->field19) :
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
						<?php if ($params->get('show_ljjadng01_field20')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD20_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field20 != '' ? $this->item->field20 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field21')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD21_LABEL'); ?>
							</label>
							<span>
								<?php
									switch ($this->item->field21) :
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
						<?php if ($params->get('show_ljjadng01_field22')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD22_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field22 != '' ? $this->item->field22 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field23')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD23_LABEL'); ?>
							</label>
							<span>
								<?php
									switch ($this->item->field23) :
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
						<?php if ($params->get('show_ljjadng01_field24')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD24_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field24 != '' ? $this->item->field24 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field25')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD25_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field25 != '' AND $this->item->field25 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field25, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field26')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD26_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field26 != '' ? $this->item->field26 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field27')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD27_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field27 != '' ? $this->item->field27 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field28')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD28_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field28 != '' ? $this->item->field28 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field29')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD29_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field29 != '' ? $this->item->field29 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field30')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD30_LABEL'); ?>
							</label>
							<span>
								<?php
									switch ($this->item->field30) :
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
						<?php if ($params->get('show_ljjadng01_field31')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD31_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field31 != '' AND $this->item->field31 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field31, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field32')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD32_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field32 != '' ? $this->item->field32 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field33')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD33_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field33 != '' AND $this->item->field33 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field33, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field34')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD34_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field34 != '' ? $this->item->field34 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field35')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD35_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field35 != '' ? $this->item->field35 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field36')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD36_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field36 != '' ? $this->item->field36 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field37')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD37_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field37 != '' ? $this->item->field37 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field38')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD38_LABEL'); ?>
							</label>
							<span>
								<?php
									switch ($this->item->field38) :
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
						<?php if ($params->get('show_ljjadng01_field39')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD39_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field39 != '' AND $this->item->field39 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field39, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field40')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD40_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->field40 != '' AND $this->item->field40 != '0000-00-00 00:00:00') ? JHtml::date($this->item->field40, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_ljjadng01_field42')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_LJJADNG01S_FIELD_FIELD42_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->field42 != '' ? $this->item->field42 : $empty;
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
							($params->get('show_ljjadng01_created_by')) OR
							($params->get('show_ljjadng01_created')) OR
							($params->get('show_ljjadng01_modified')) OR
							($params->get('show_ljjadng01_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_JTCA_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
			<?php if ($params->get('show_ljjadng01_created_by') ) : ?>
				<?php $created_by =  $this->item->created_by ?>
				<?php $created_by = ($this->item->created_by_name ? $this->item->created_by_name : $created_by);?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_BY_LABEL'); ?> 
					</label>
						<?php if (!empty($this->item->created_by ) AND  $this->params->get('link_ljjadng01_created_by') == 1):?>
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
			<?php if ($params->get('show_ljjadng01_created_by_alias')) : ?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_BY_ALIAS_LABEL'); ?>
					</label>
					<?php echo !empty($this->item->created_by_alias) ? $this->item->created_by_alias : $empty; ?>
				</div>
			<?php endif; ?>				
			<?php if ($params->get('show_ljjadng01_created')) : ?>
				<div class="formelm">
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_LABEL'); ?>
					</label>
					<time datetime="<?php echo JHtml::_('date', $this->item->created, 'c'); ?>">
						<?php echo JHtml::_('date',$this->item->created, JText::_('DATE_FORMAT_LC2')); ?>
					</time>
				</div>
			<?php endif; ?>
			<?php if ($params->get('show_ljjadng01_modified')) : ?>
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
				<?php if ($params->get('show_ljjadng01_admin')) : ?>
				
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
		<?php echo $this->item->event->afterDisplayLjjadng01; ?>
	</div>		
</div>