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
 * @CAversion		Id: edit.php 571 2016-01-04 15:03:02Z BrianWade $
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
$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_lsps06s.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_jtca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_jtca/css/site_lsps06s-rtl.css');
}

// Add Javscript functions for field display
JHtml::_('behavior.tabstate');
JHtml::_('behavior.keepalive');
JHtml::_('behavior.calendar');
JHtml::_('behavior.formvalidation');	
JHtml::_('formbehavior.chosen', 'select');
if ($this->params->get('save_history') AND $this->params->get('lsps06_save_history'))
{
	JHtml::_('behavior.modal', 'a.modal_jform_contenthistory');
}
$this->document->addScript(JUri::root() .'media/com_jtca/js/jtcavalidate.js');

$this->document->addScript(JUri::root() .'media/com_jtca/js/formsubmitbutton.js');

JText::script('COM_JTCA_ERROR_ON_FORM');

/*
 *	Initialise values for the layout 
 */	
 
// Create shortcut to parameters.
$params = $this->state->get('params');

/*
 *	Layout HTML
 */
?>
<noscript>
<p style="color: red;"><?php echo JText::_('COM_JTCA_WARNING_NOSCRIPT'); ?><p>
</noscript>
<div class="jtca lsps06-edit<?php echo $this->escape($params->get('pageclass_sfx')); ?>">
	<?php if ($params->get('show_page_heading')) : ?>
		<div class="page-header">
			<h1><?php echo $this->escape($params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>
	<form action="<?php echo JRoute::_('index.php?option=com_jtca&view=lsps06form&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="lsps06-form" class="form-validate">
		<div class="btn-toolbar">
			<div class="btn-group">
				<button type="button" class="btn btn-primary" onclick="Joomla.submitbutton('lsps06.save')">
					<span class="icon-ok"></span>&#160;<?php echo JText::_('JSAVE') ?>
				</button>
			</div>
			<div class="btn-group">
				<button type="button" class="btn" onclick="Joomla.submitbutton('lsps06.cancel')">
					<span class="icon-cancel"></span>&#160;<?php echo JText::_('JCANCEL') ?>
				</button>
			</div>
			<?php if (
				  $this->item->version 
				  //AND $user->authorise('core.version.tasks', 'com_jtca') 
				  AND $params->get('save_history') 
				  AND $params->get('lsps06_save_history')
			) : ?>
				<div class="btn-group">
					<?php echo $this->form->getInput('contenthistory'); ?>
				</div>
			<?php endif; ?>	
		</div>		
		<div style="clear:both;padding-top: 10px;"></div>
        <!--begin all fields-->
        			<!-- begin fields basic-details-->
<?php /*?>                    
                    <?php
						$user  = JFactory::getUser();
						if (
							$this->item->version 
							AND $user->authorise('core.version.note', 'com_jtca') 
							AND $params->get('save_history') 
							AND $params->get('lsps06_save_history')
						)
                        echo $this->form->renderField('version_note', null, null, array('group_id' => 'field_version_note')); 
					 ?>
<?php */?>
        			<!-- end fields basic-details-->
                    <!-- begin fields fieldset-[%%FIELDSET_CODE_NAME%%]-->
					<?php foreach($this->form->getFieldset('fieldset_lsps06_fs') as $field): ?>
						<?php if (!$field->hidden) : ?>
							<?php $fieldname = (string) $field->fieldname; ?>
							
							<?php if (strtolower($field->type) == 'file' AND trim($this->item->$fieldname) != '') : ?>
								<?php echo $this->form->renderField($fieldname, null, null, array('group_id' => 'field_'.$fieldname, 'file' => JRoute::_(JUri::root().trim($this->item->$fieldname), false))); ?>
							<?php else: ?>	
								<?php echo $this->form->renderField($fieldname, null, null, array('group_id' => 'field_'.$fieldname)); ?>
							<?php endif; ?>	
						<?php endif; ?>	
					<?php endforeach; ?>
                    <!-- end fields fieldset-[%%FIELDSET_CODE_NAME%%]-->
                    <!-- begin fields [%%FIELD_CODE_NAME%%]-->
                    <!-- end fields [%%FIELD_CODE_NAME%%]-->
                    <!-- begin fields imageslinks-->
                    <!-- end fields imageslinks-->
                    <!-- begin fields images-->
                    <!-- end fields images-->
                    <!-- begin fields links-->
                    <!-- end fields links-->
                    <!-- begin fields publishing-->
<?php /*?>                    
						<?php echo $this->form->renderField('state', null, null, array('group_id' => 'state')); ?>
 <?php */?>                       
<?php /*?>
						<?php $user = '' ?>
						<?php if (!empty($this->item->created_by )):?>
							<?php $user =  $this->item->created_by ?>
							<?php $user = ($this->item->created_by_name ? $this->item->created_by_name : $user);?>								
							<?php $user = JHtml::_(
														'link',
														JRoute::_('index.php?option=com_users&view=profile&id='.$this->item->created_by),
														$user);
							?>
						<?php endif; ?>

						<?php echo $this->form->renderField('created_by', null, null, array('group_id' => 'created_by', 'user' => $user)); ?>						
						<?php echo $this->form->renderField('created', null, null, array('group_id' => 'created')); ?>						
						<?php if ($this->item->modified_by) : ?>
							<?php $user = '' ?>
							<?php $user =  $this->item->modified_by ?>
							<?php $user = ($this->item->modified_by_name ? $this->item->modified_by_name : $user);?>								
							<?php $user = JHtml::_(
														'link',
														JRoute::_('index.php?option=com_users&view=profile&id='.$this->item->modified_by),
														$user);
							?>

							<?php echo $this->form->renderField('modified_by', null, null, array('group_id' => 'modified_by', 'user' => $user)); ?>							
							
							<?php echo $this->form->renderField('modified', null, null, array('group_id' => 'modified')); ?>						

						<?php endif; ?>
						<?php if (!is_null($this->item->id)):?>
							<?php echo $this->form->renderField('ordering', null, null, array('group_id' => 'ordering')); ?>						
						<?php else: ?>
							<div class="form-note">
								<p><?php echo JText::_('COM_JTCA_LSPS06S_ORDERING'); ?></p>
							</div>
						<?php endif; ?>
<?php */?>
                    <!-- end fields publishing-->
                    <!-- begin fields metadata-->
                    <!-- end fields metadata-->
                    <!-- begin fields language-->
                    <!-- end fields language-->
        <!--end all fields-->
		<fieldset>
<?php /*?>			<ul class="nav nav-tabs">
				<li class="active"><a href="#basic-details" data-toggle="tab"><?php echo JText::_('COM_JTCA_LSPS06S_FIELDSET_DETAILS_LABEL');?></a></li>
				<li><a href="#fieldset-lsps06_fs" data-toggle="tab"><?php echo JText::_('COM_JTCA_LSPS06S_FIELDSET_LSPS06_FS_LABEL');?></a></li>
				<?php if ($this->item->params->get('access-change')): ?>
				<li><a href="#publishing" data-toggle="tab"><?php echo JText::_('COM_JTCA_FIELDSET_PUBLISHING_LABEL');?></a></li>
				<?php endif; ?>				
			</ul>		<?php */?>
		
		
			<div class="tab-content">





				
				<?php if ($this->item->params->get('access-change')): ?>
						
				<?php endif; ?>
				<input type="hidden" name="task" value="" />
				<input type="hidden" name="form_id" id="form_id" value="lsps06-form" />
				<input type="hidden" name="return" value="<?php echo $this->return_page;?>" />
				<?php echo JHtml::_( 'form.token' ); ?>
			</div>
		</fieldset>													
	</form>
</div>