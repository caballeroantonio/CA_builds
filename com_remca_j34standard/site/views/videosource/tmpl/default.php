<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.site
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: default.php 604 2016-01-14 13:05:26Z BrianWade $
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

// Add css files for the remca component and categories if they exist
$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_remca.css');
$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_video_source.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_remca-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_remca/css/site_video_source-rtl.css');
}

// Add Javscript functions for field display
JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('dropdown.init');
JHtml::_('formbehavior.chosen', 'select');	

/*
 *	Initialise values for the layout 
 */	
 
// Create some shortcuts.
$user		= JFactory::getUser();
$n			= count($this->items);
$list_order	= $this->state->get('list.ordering');
$list_dirn	= $this->state->get('list.direction');

$layout		= $this->params->get('videosource_layout', 'default');

// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_remca' );
$empty = $component->params->get('default_empty_field', '');

/*
 *	Layout HTML
 */
?>
<noscript>
<p style="color: red;"><?php echo JText::_('COM_REMCA_WARNING_NOSCRIPT'); ?><p>
</noscript>
<div class="remca video_source-list<?php echo $this->params->get('pageclass_sfx');?>">
	<?php if ($this->params->get('show_page_heading')): ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>

	<?php
		$can_edit = 0;$can_delete = 0;
		$show_actions = false;
		if ($this->params->get('show_videosource_icons',1) >= 0) :
			foreach ($this->items as $i => $item) :
				if ($item->params->get('access-edit',1) OR $item->params->get('access-delete',1)) :
					$show_actions = true;
					continue;
				endif;
			endforeach;
		endif;
	?>
	<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
		<?php if (($this->params->get('show_videosource_filter_field') != '' AND $this->params->get('show_videosource_filter_field') != 'hide')) :?>
			<div class="filter-search">
				<?php if ($this->params->get('show_videosource_filter_field') != '' AND $this->params->get('show_videosource_filter_field') != 'hide') :?>
                <div class="input-append">
					<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_REMCA_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_REMCA_'.$this->params->get('show_videosource_filter_field').'_FILTER_LABEL'); ?>" />
                    <button type="submit" class="btn hasTooltip" title="" data-original-title="<?= JText::_('JSEARCH_FILTER_SUBMIT') ?>"> <i class="icon-search"></i> </button>
				</div>
                <!--<button type="button" class="btn hasTooltip js-stools-btn-clear" title="" data-original-title="<?= JText::_('JSEARCH_FILTER_CLEAR') ?>"><?= JText::_('JSEARCH_FILTER_CLEAR') ?></button>-->
				<?php endif; ?>	
			</div>
		<?php endif; ?>

		<?php if ($this->params->get('show_videosource_pagination_limit')) : ?>
			<div class="display-limit">
				<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160;
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		<?php endif; ?>	
		<div style="clear:both;"></div>				
		<?php if (empty($this->items)) : ?>

			<?php if ($this->params->get('show_no_video_source',1)) : ?>
			<p><?php echo JText::_('COM_REMCA_VIDEO_SOURCE_NO_ITEMS'); ?></p>
			<?php endif; ?>

		<?php else : ?>
		<div style="overflow-x:auto;">
			<table class="table table-striped" id="video_source" style="margin-bottom: 200px;">
			<?php if ($this->params->get('show_videosource_headings',1)) :?>
			<thead>
				<tr>
					<th width="1%" style="display:none;">
					</th>				
					<?php if ($date = $this->params->get('list_show_videosource_date')) : ?>
						<th class="list-date" id="tableOrderingdate">
							<?php echo JHtml::_('grid.sort', 'COM_REMCA_FIELD_'.JString::strtoupper($date).'_LABEL', 'a.'.$date, $list_dirn, $list_order); ?>
						</th>
					<?php endif; ?>

					<?php if ($this->params->get('list_show_videosource_id_house',1)) : ?>
						<th class="list-id_house" id="tableOrderingid_house">
							<?php echo JTEXT::_('COM_REMCA_VIDEO_SOURCE_HEADING_ID_HOUSE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_videosource_sequence_number',1)) : ?>
						<th class="list-sequence_number" id="tableOrderingsequence_number">
							<?php echo JTEXT::_('COM_REMCA_VIDEO_SOURCE_HEADING_SEQUENCE_NUMBER'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_videosource_src',1)) : ?>
						<th class="list-src" id="tableOrderingsrc">
							<?php echo JTEXT::_('COM_REMCA_VIDEO_SOURCE_HEADING_SRC'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_videosource_type',1)) : ?>
						<th class="list-type" id="tableOrderingtype">
							<?php echo JTEXT::_('COM_REMCA_VIDEO_SOURCE_HEADING_TYPE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_videosource_media',1)) : ?>
						<th class="list-media" id="tableOrderingmedia">
							<?php echo JTEXT::_('COM_REMCA_VIDEO_SOURCE_HEADING_MEDIA'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($this->params->get('list_show_videosource_youtube',1)) : ?>
						<th class="list-youtube" id="tableOrderingyoutube">
							<?php echo JTEXT::_('COM_REMCA_VIDEO_SOURCE_HEADING_YOUTUBE'); ?>
						</th>
					<?php endif; ?>	
					<?php if ($show_actions) : ?>
						<th width="12%" class="list-actions">
							<?php echo JText::_('COM_REMCA_HEADING_ACTIONS'); ?>						
						</th> 					
					<?php endif; ?>
				</tr>
			</thead>
			<?php endif; ?>

			<tbody>

				<?php foreach ($this->items as $i => $item) :
				
							
				?>			
					<?php $params = $item->params; ?>		

						<tr class="cat-list-row<?php echo $i % 2; ?>">
					<td class="center" style="display:none;">
						<?php echo JHtml::_('grid.id', $i, $item->id); ?>
					</td>				

					<?php if ($this->params->get('list_show_videosource_date')) : ?>
						<td class="list-date">
							<time datetime="<?php echo JHtml::_('date', $item->display_date, 'c'); ?>">
								<?php echo JHtml::_('date',$item->display_date, $this->escape($this->params->get('videosource_date_format', JText::_('DATE_FORMAT_LC3')))); ?>
							</time>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_videosource_id_house',1)) : ?>
						<td class="list-id_house">
							<?php 
								if ($params->get('list_link_videosource_id_house')) :
									echo '<a href="'.JRoute::_(RemcaHelperRoute::getHouseRoute($item->id_house, 0)).'">'.JString::trim($item->h_house_name).'</a>';
								else :
									echo JString::trim($item->h_house_name);
								endif; 
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_videosource_sequence_number',1)) : ?>
						<td class="list-sequence_number">
							<?php 
								echo $item->sequence_number != '' ? $item->sequence_number : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_videosource_src',1)) : ?>
						<td class="list-src">
							<?php 
								echo $item->src != '' ? $item->src : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_videosource_type',1)) : ?>
						<td class="list-type">
							<?php 
								echo $item->type != '' ? $item->type : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_videosource_media',1)) : ?>
						<td class="list-media">
							<?php 
								echo $item->media != '' ? $item->media : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($this->params->get('list_show_videosource_youtube',1)) : ?>
						<td class="list-youtube">
							<?php 
								echo $item->youtube != '' ? $item->youtube : $empty;
							?>
						</td>
					<?php endif; ?>
					<?php if ($show_actions) : ?>
						<td class="list-actions">
                        	<div class="btn-group pull-right">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <span class="icon-cog"></span> <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
							<?php if ($params->get('show_videosource_print_icon')) : ?>
								<li class="print-icon">
										<?php echo JHtml::_('videosourceicon.print_popup',  $item, $params); ?>
								</li>
							<?php endif; ?>

							<?php if ($params->get('show_videosource_email_icon')) : ?>
								<li class="email-icon">
										<?php echo JHtml::_('videosourceicon.email',  $item, $params); ?>
								</li>
							<?php endif; ?>
							<?php if ($can_edit AND $params->get('save_history') AND $params->get('videosource_save_history')) : ?>
								<li class="version-icon">
									<?php echo JHtml::_('videosourceicon.versions',$item, $params); ?>
								</li>	
							<?php endif; ?>	
                                </ul>
                            </div>
						</td>															
					<?php endif; ?>
				</tr>
			<?php endforeach; ?>
			</tbody>
			</table>
		</div>
			<?php if (($this->params->def('show_videosource_pagination', 2) == 1  OR ($this->params->get('show_videosource_pagination') == 2)) AND ($this->pagination->get('pages.total') > 1)) : ?>
			<div class="pagination">

				<?php if ($this->params->def('show_videosource_pagination_results', 0)) : ?>
				<p class="counter">
						<?php echo $this->pagination->getPagesCounter(); ?>
				</p>
				<?php endif; ?>

				<?php echo $this->pagination->getPagesLinks(); ?>
			</div>
			<?php endif; ?>

			<div>
				<!-- @TODO add hidden inputs -->
				<input type="hidden" name="task" value="" />
				<input type="hidden" name="boxchecked" value="0" />			
				<input type="hidden" name="filter_order" value="" />
				<input type="hidden" name="filter_order_Dir" value="" />
				<input type="hidden" name="limitstart" value="" />
				<?php echo JHtml::_('form.token'); ?>
			</div>
		<?php endif; ?>
		<?php // Code to add a link to submit an videosource. ?>
		<?php if ($this->params->get('show_videosource_add_link', 1)) : ?>
			<?php echo JHtml::_('videosourceicon.create', $this->params); ?>
		<?php endif; ?>		

	</form>
</div>

<?php if ($can_edit AND $params->get('save_history') AND $params->get('videosource_save_history')) : ?>
<script>
jQuery(document).ready(function($) {
   $('#collapsibleModal')
   .on('hide.bs.modal', function () {
        $(this).removeData('modal');
   });
});

function show_collapsibleModal(item_id){
	jQuery('#collapsibleModal').modal('show');
	var modalBody = jQuery(document).find('.modal-body');
	modalBody.find('iframe').remove();
	modalBody.prepend('<iframe class="iframe" src="index.php?option=com_remca&task=videosource.showHistory&item_id='+item_id+'" name="titulo" height="450"></iframe>');
	return;
}
</script>
<div id="collapsibleModal" tabindex="-1" class="modal hide fade">
	<div class="modal-header">
			<button type="button" class="close novalidate" data-dismiss="modal">×</button>
				<h3><?= JText::_('JTOOLBAR_VERSIONS'); ?></h3>
	</div>
	<div class="modal-body"></div>
</div>
<?php endif; ?>	