<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManager
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.admin
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: edit.php 571 2016-01-04 15:03:02Z BrianWade $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.admin
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
// Include custom admin css
$this->document->addStyleSheet(JUri::root().'media/com_remca/css/admin.css');
	
// Add Javascript functions
JHtml::_('bootstrap.tooltip');	
JHtml::_('behavior.formvalidator');
JHtml::_('behavior.keepalive');
JHtml::_('formbehavior.chosen', 'select');		
		
$this->document->addScript(JUri::root() .'media/com_remca/js/remcavalidate.js');

$this->document->addScript(JUri::root() .'media/com_remca/js/formsubmitbutton.js');

JText::script('COM_REMCA_ERROR_ON_FORM');
/*
 *	Initialise values for the layout 
 */	
// Create shortcut to parameters.
$params = $this->state->get('params');

$app = JFactory::getApplication();
$input = $app->input;
?>
<noscript>
<p style="color: red;"><?php echo JText::_('COM_REMCA_WARNING_NOSCRIPT'); ?><p>
</noscript>

<form action="<?php echo JRoute::_('index.php?option=com_remca&view=videosource&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="videosource-form" class="form-validate">

	<!-- Begin Content -->
	<div class="form-horizontal">
		<?php echo JHtml::_('bootstrap.startTabSet', 'videosource-tabs', array('active' => 'details')); ?>
			<?php echo JHtml::_('bootstrap.addTab', 'videosource-tabs', 'details', JText::_('COM_REMCA_VIDEO_SOURCE_FIELDSET_DETAILS_LABEL', true)); ?>
			<div class="row-fluid">
				<div class="span3">
					<fieldset class="form-vertical">
                    <?php
						$user  = JFactory::getUser();
						if (
							$this->item->version 
							AND $user->authorise('core.version.note', 'com_remca') 
							AND $params->get('save_history') 
							AND $params->get('videosource_save_history')
						)
                        echo $this->form->renderField('version_note', null, null, array('group_id' => 'field_version_note')); 
					 ?>
						<?php echo $this->form->renderField('id', null, null, array('group_id' => 'field_id')); ?>
										
					</fieldset>
				</div>				
			</div>				
			<?php echo JHtml::_('bootstrap.endTab'); ?>
			<?php echo JHtml::_('bootstrap.addTab', 'videosource-tabs', 'publishing', JText::_('COM_REMCA_FIELDSET_PUBLISHING_LABEL', true)); ?>
                    <?php
						$user  = JFactory::getUser();
						if (
							$this->item->version 
							AND $user->authorise('core.version.note', 'com_remca') 
							AND $params->get('save_history') 
							AND $params->get('videosource_save_history')
						)
                        echo $this->form->renderField('version_note', null, null, array('group_id' => 'field_version_note')); 
					 ?>
			<?php echo JHtml::_('bootstrap.endTab'); ?>
			<?php echo JHtml::_('bootstrap.addTab', 'videosource-tabs', 'fieldset-jos_rem_video_source_fs', JText::_('COM_REMCA_VIDEO_SOURCE_FIELDSET_JOS_REM_VIDEO_SOURCE_FS_LABEL', true)); ?>
			<div class="row-fluid form-horizontal-desktop">
				<?php foreach($this->form->getFieldset('fieldset_jos_rem_video_source_fs') as $field): ?>
					<?php if (!$field->hidden) : ?>
						<?php $fieldname = (string) $field->fieldname; ?>
						
						<?php if (strtolower($field->type) == 'file' AND trim($this->item->$fieldname) != '') : ?>
							<?php echo $this->form->renderField($fieldname, null, null, array('group_id' => 'field_'.$fieldname, 'file' => JRoute::_(JUri::root().trim($this->item->$fieldname), false))); ?>
						<?php else: ?>	
							<?php echo $this->form->renderField($fieldname, null, null, array('group_id' => 'field_'.$fieldname)); ?>
						<?php endif; ?>
					<?php endif; ?>	
				<?php endforeach; ?>
			</div>
			<?php echo JHtml::_('bootstrap.endTab'); ?>



		<?php echo JHtml::_('bootstrap.endTabSet'); ?>
	</div>
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="form_id" id="form_id" value="videosource-form" />
	<input type="hidden" name="return" value="<?php echo $input->getCmd('return');?>" />
	<?php echo JHtml::_('form.token'); ?>
	<!-- End Content -->
</form>
