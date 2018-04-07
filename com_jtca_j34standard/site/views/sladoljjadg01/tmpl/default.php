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
$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_sladol_jjadg01s.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_jtca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_sladol_jjadg01s-rtl.css');
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
<div class="jtca sladoljjadg01-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php if ($params->get('show_sladoljjadg01_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_sladoljjadg01_print_icon') 
			OR $params->get('show_sladoljjadg01_email_icon') 
			OR $can_edit 
			OR $can_delete 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
							<?php if ($params->get('show_sladoljjadg01_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('sladoljjadg01icon.print_popup',  $this->item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_sladoljjadg01_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('sladoljjadg01icon.email',  $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_edit) : ?>
								<li class="edit-icon">
									<?php echo JHtml::_('sladoljjadg01icon.edit', $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_delete) : ?>
								<li class="delete-icon">
									<?php echo JHtml::_('sladoljjadg01icon.delete',$this->item, $params); ?>
								</li>					
							<?php endif; ?>
					<?php else : ?>
						<li>
							<?php echo JHtml::_('sladoljjadg01icon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	
	<?php echo $this->item->event->beforeDisplaySladolJjadg01; ?>
	<div style="clear:both; padding-top: 10px;">

	</div>
	<div style="padding-top: 10px;">

			<form action="" name="sladoljjadg01Form" id="sladoljjadg01Form">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_sladoljjadg01_txt_field2031')) OR 
								($params->get('show_sladoljjadg01_id_field2031')) OR 
								($params->get('show_sladoljjadg01_sfield29')) OR 
								($params->get('show_sladoljjadg01_sfield9')) OR 
								($params->get('show_sladoljjadg01_sfield10')) OR 
								($params->get('show_sladoljjadg01_sfield11')) OR 
								($params->get('show_sladoljjadg01_sfield12')) OR 
								($params->get('show_sladoljjadg01_sfield28')) OR 
								($params->get('show_sladoljjadg01_sfield13')) OR 
								($params->get('show_sladoljjadg01_sfield14')) OR 
								($params->get('show_sladoljjadg01_sfield15')) OR 
								($params->get('show_sladoljjadg01_sfield16')) OR 
								($params->get('show_sladoljjadg01_sfield30')) OR 
								($params->get('show_sladoljjadg01_sfield17')) OR 
								($params->get('show_sladoljjadg01_sfield18')) OR 
								($params->get('show_sladoljjadg01_sfield19')) OR 
								($params->get('show_sladoljjadg01_sfield20')) OR 
								($params->get('show_sladoljjadg01_sfield21')) OR 
								($params->get('show_sladoljjadg01_sfield22')) OR 
								($params->get('show_sladoljjadg01_sfield23')) OR 
								($params->get('show_sladoljjadg01_sfield24')) OR 
								($params->get('show_sladoljjadg01_sfield25')) OR 
								($params->get('show_sladoljjadg01_sfield26')) OR 
								($params->get('show_sladoljjadg01_sfield27')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELDSET_ADOL_JJADG01_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_sladoljjadg01_txt_field2031')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_TXT_FIELD2031_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->txt_field2031 != '' ? $this->item->txt_field2031 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_id_field2031')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_ID_FIELD2031_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->id_field2031 != '' ? $this->item->id_field2031 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield29')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD29_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sfield29 != '' ? $this->item->sfield29 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield9')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD9_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sfield9 != '' ? $this->item->sfield9 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield10')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD10_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sfield10 != '' ? $this->item->sfield10 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield11')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD11_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sfield11 != '' ? $this->item->sfield11 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield12')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD12_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sfield12 != '' ? $this->item->sfield12 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield28')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD28_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sfield28 != '' ? $this->item->sfield28 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield13')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD13_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->sfield13 != '' AND $this->item->sfield13 != '0000-00-00 00:00:00') ? JHtml::date($this->item->sfield13, '%Y-%m-%d', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield14')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD14_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sfield14 != '' ? $this->item->sfield14 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield15')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD15_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->sfield15 != '' AND $this->item->sfield15 != '0000-00-00 00:00:00') ? JHtml::date($this->item->sfield15, '%Y-%m-%d %H:%M', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield16')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD16_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sfield16 != '' ? $this->item->sfield16 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield30')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD30_LABEL'); ?>
							</label>
							<span>
								<?php
									echo ($this->item->sfield30 != '' AND $this->item->sfield30 != '0000-00-00 00:00:00') ? JHtml::date($this->item->sfield30, '%Y-%m-%d %H:%M', null) : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield17')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD17_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sfield17 != '' ? $this->item->sfield17 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield18')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD18_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sfield18 != '' ? $this->item->sfield18 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield19')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD19_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sfield19 != '' ? $this->item->sfield19 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield20')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD20_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sfield20 != '' ? $this->item->sfield20 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield21')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD21_LABEL'); ?>
							</label>
							<span>
								<?php
									switch ($this->item->sfield21) :
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
						<?php if ($params->get('show_sladoljjadg01_sfield22')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD22_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sfield22 != '' ? $this->item->sfield22 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield23')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD23_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sfield23 != '' ? $this->item->sfield23 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield24')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD24_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sfield24 != '' ? $this->item->sfield24 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield25')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD25_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sfield25 != '' ? $this->item->sfield25 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield26')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD26_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sfield26 != '' ? $this->item->sfield26 : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_sladoljjadg01_sfield27')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLADOL_JJADG01S_FIELD_SFIELD27_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->sfield27 != '' ? $this->item->sfield27 : $empty;
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
							($params->get('show_sladoljjadg01_created_by')) OR
							($params->get('show_sladoljjadg01_created')) OR
							($params->get('show_sladoljjadg01_modified')) OR
							($params->get('show_sladoljjadg01_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_JTCA_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
			<?php if ($params->get('show_sladoljjadg01_created_by') ) : ?>
				<?php $created_by =  $this->item->created_by ?>
				<?php $created_by = ($this->item->created_by_name ? $this->item->created_by_name : $created_by);?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_BY_LABEL'); ?> 
					</label>
						<?php if (!empty($this->item->created_by ) AND  $this->params->get('link_sladoljjadg01_created_by') == 1):?>
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
			<?php if ($params->get('show_sladoljjadg01_created_by_alias')) : ?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_BY_ALIAS_LABEL'); ?>
					</label>
					<?php echo !empty($this->item->created_by_alias) ? $this->item->created_by_alias : $empty; ?>
				</div>
			<?php endif; ?>				
			<?php if ($params->get('show_sladoljjadg01_created')) : ?>
				<div class="formelm">
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_LABEL'); ?>
					</label>
					<time datetime="<?php echo JHtml::_('date', $this->item->created, 'c'); ?>">
						<?php echo JHtml::_('date',$this->item->created, JText::_('DATE_FORMAT_LC2')); ?>
					</time>
				</div>
			<?php endif; ?>
			<?php if ($params->get('show_sladoljjadg01_modified')) : ?>
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
				<?php if ($params->get('show_sladoljjadg01_admin')) : ?>
				
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
		<?php echo $this->item->event->afterDisplaySladolJjadg01; ?>
	</div>		
</div>