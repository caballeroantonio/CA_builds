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
$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_slpartescontenciosas.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_jtca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_slpartescontenciosas-rtl.css');
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
<div class="jtca slpartecontenciosa-view<?php echo $params->get('pageclass_sfx')?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>
	<?php if ($params->get('show_slpartecontenciosa_icons',-1) >= 0) : ?>
		<?php if ($params->get('show_slpartecontenciosa_print_icon') 
			OR $params->get('show_slpartecontenciosa_email_icon') 
			OR $can_edit 
			OR $can_delete 
			): ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
				<ul class="dropdown-menu">
					<?php if (!$this->print) : ?>
							<?php if ($params->get('show_slpartecontenciosa_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('slpartecontenciosaicon.print_popup',  $this->item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_slpartecontenciosa_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('slpartecontenciosaicon.email',  $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_edit) : ?>
								<li class="edit-icon">
									<?php echo JHtml::_('slpartecontenciosaicon.edit', $this->item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_delete) : ?>
								<li class="delete-icon">
									<?php echo JHtml::_('slpartecontenciosaicon.delete',$this->item, $params); ?>
								</li>					
							<?php endif; ?>
					<?php else : ?>
						<li>
							<?php echo JHtml::_('slpartecontenciosaicon.print_screen',  $this->item, $params); ?>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	
	<?php echo $this->item->event->beforeDisplaySlpartecontenciosa; ?>
	<div style="clear:both; padding-top: 10px;">

	</div>
	<div style="padding-top: 10px;">

			<form action="" name="slpartecontenciosaForm" id="slpartecontenciosaForm">
			<?php $dummy = false;
					$display_fieldset = (
								($params->get('show_slpartecontenciosa_txt_ijuridico')) OR 
								($params->get('show_slpartecontenciosa_id_ijuridico')) OR 
								($params->get('show_slpartecontenciosa_isMoral')) OR 
								($params->get('show_slpartecontenciosa_paterno')) OR 
								($params->get('show_slpartecontenciosa_materno')) OR 
								($params->get('show_slpartecontenciosa_nombre')) OR 
								($params->get('show_slpartecontenciosa_curp')) OR 
								($params->get('show_slpartecontenciosa_rfc')) OR 
								($params->get('show_slpartecontenciosa_calle')) OR 
								($params->get('show_slpartecontenciosa_numero')) OR 
								($params->get('show_slpartecontenciosa_colonia')) OR 
								($params->get('show_slpartecontenciosa_cp')) OR 
								($params->get('show_slpartecontenciosa_id_entidadf')) OR 
								($params->get('show_slpartecontenciosa_municipio')) OR 
								$dummy
								);
			?>
			<?php if ($display_fieldset) : ?>				
				<fieldset>	
					<legend><?php echo JText::_('COM_JTCA_SLPARTESCONTENCIOSAS_FIELDSET_PARTESCONTENCIOSAS_FS_LABEL'); ?></legend>
			<?php endif; ?>
					<div style="padding-top: 10px;">			
						<?php if ($params->get('show_slpartecontenciosa_txt_ijuridico')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLPARTESCONTENCIOSAS_FIELD_TXT_IJURIDICO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->txt_ijuridico != '' ? $this->item->txt_ijuridico : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_slpartecontenciosa_id_ijuridico')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLPARTESCONTENCIOSAS_FIELD_ID_IJURIDICO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->id_ijuridico != '' ? $this->item->id_ijuridico : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_slpartecontenciosa_isMoral')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLPARTESCONTENCIOSAS_FIELD_ISMORAL_LABEL'); ?>
							</label>
							<span>
								<?php
									switch ($this->item->isMoral) :
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
						<?php if ($params->get('show_slpartecontenciosa_paterno')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLPARTESCONTENCIOSAS_FIELD_PATERNO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->paterno != '' ? $this->item->paterno : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_slpartecontenciosa_materno')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLPARTESCONTENCIOSAS_FIELD_MATERNO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->materno != '' ? $this->item->materno : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_slpartecontenciosa_nombre')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLPARTESCONTENCIOSAS_FIELD_NOMBRE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->nombre != '' ? $this->item->nombre : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_slpartecontenciosa_curp')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLPARTESCONTENCIOSAS_FIELD_CURP_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->curp != '' ? $this->item->curp : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_slpartecontenciosa_rfc')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLPARTESCONTENCIOSAS_FIELD_RFC_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->rfc != '' ? $this->item->rfc : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_slpartecontenciosa_calle')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLPARTESCONTENCIOSAS_FIELD_CALLE_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->calle != '' ? $this->item->calle : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_slpartecontenciosa_numero')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLPARTESCONTENCIOSAS_FIELD_NUMERO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->numero != '' ? $this->item->numero : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_slpartecontenciosa_colonia')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLPARTESCONTENCIOSAS_FIELD_COLONIA_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->colonia != '' ? $this->item->colonia : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_slpartecontenciosa_cp')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLPARTESCONTENCIOSAS_FIELD_CP_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->cp != '' ? $this->item->cp : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_slpartecontenciosa_id_entidadf')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLPARTESCONTENCIOSAS_FIELD_ID_ENTIDADF_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->id_entidadf != '' ? $this->item->id_entidadf : $empty;
								?>
							</span>
						</div>	
						<?php endif; ?>
						<?php if ($params->get('show_slpartecontenciosa_municipio')) : ?>
						<div class="formelm">
							<label>
								<?php echo JText::_('COM_JTCA_SLPARTESCONTENCIOSAS_FIELD_MUNICIPIO_LABEL'); ?>
							</label>
							<span>
								<?php
									echo $this->item->municipio != '' ? $this->item->municipio : $empty;
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
							($params->get('show_slpartecontenciosa_created_by')) OR
							($params->get('show_slpartecontenciosa_created')) OR
							($params->get('show_slpartecontenciosa_modified')) OR
							($params->get('show_slpartecontenciosa_admin') AND $this->item->params->get('access-change')) OR							
							$dummy
							);
			?>
			<?php if ($display_fieldset) : ?>				
					<fieldset>
						<legend><?php echo JText::_('COM_JTCA_FIELDSET_PUBLISHING_LABEL'); ?></legend>
			<?php endif; ?>
	
			<?php if ($params->get('show_slpartecontenciosa_created_by') ) : ?>
				<?php $created_by =  $this->item->created_by ?>
				<?php $created_by = ($this->item->created_by_name ? $this->item->created_by_name : $created_by);?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_BY_LABEL'); ?> 
					</label>
						<?php if (!empty($this->item->created_by ) AND  $this->params->get('link_slpartecontenciosa_created_by') == 1):?>
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
			<?php if ($params->get('show_slpartecontenciosa_created_by_alias')) : ?>
				<div class="formelm">				
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_BY_ALIAS_LABEL'); ?>
					</label>
					<?php echo !empty($this->item->created_by_alias) ? $this->item->created_by_alias : $empty; ?>
				</div>
			<?php endif; ?>				
			<?php if ($params->get('show_slpartecontenciosa_created')) : ?>
				<div class="formelm">
					<label>
						<?php echo JText::_('COM_JTCA_FIELD_CREATED_LABEL'); ?>
					</label>
					<time datetime="<?php echo JHtml::_('date', $this->item->created, 'c'); ?>">
						<?php echo JHtml::_('date',$this->item->created, JText::_('DATE_FORMAT_LC2')); ?>
					</time>
				</div>
			<?php endif; ?>
			<?php if ($params->get('show_slpartecontenciosa_modified')) : ?>
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
				<?php if ($params->get('show_slpartecontenciosa_admin')) : ?>
				
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
		<?php echo $this->item->event->afterDisplaySlpartecontenciosa; ?>
	</div>		
</div>