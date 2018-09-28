<?php
/**
 * @version 		$Id:$
 * @name			Boletines
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_boletin
 * @subpackage		com_boletin.site
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: default_items.php 571 2016-01-04 15:03:02Z BrianWade $
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
 *	Initialise values for the layout 
 */	
 
// Create some shortcuts.
$params		= &$this->params;
$user		= JFactory::getUser();

$n			= count($this->tfjfa_bacuerdos);
$list_order	= $this->state->get('list.ordering');
$list_dirn	= $this->state->get('list.direction');
$layout		= str_replace('_:','',$params->get('tfjfa_bacuerdo_layout'));
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_boletin' );
$empty = $component->params->get('default_empty_field', '');	

/*
 *	Layout HTML
 */
?>

<?php if (empty($this->tfjfa_bacuerdos)) : ?>

	<?php if ($this->params->get('show_no_tfjfa_bacuerdos',1)) : ?>
	<p><?php echo JText::_('COM_BOLETIN_TFJFA_BACUERDOS_CATEGORY_NO_ITEMS'); ?></p>
	<?php endif; ?>

<?php else : ?>
<div class="tfjfa_bacuerdos-list">
	<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
		<?php if (($this->params->get('show_tfjfa_bacuerdo_filter_field') != '' AND $this->params->get('show_tfjfa_bacuerdo_filter_field') != 'hide') OR $this->params->get('show_tfjfa_bacuerdo_pagination_limit')) :?>
			<div class="filter-search">
				<?php if ($this->params->get('show_tfjfa_bacuerdo_filter_field') != '' AND $this->params->get('show_tfjfa_bacuerdo_filter_field') != 'hide') :?>
                <div class="input-append">
					<input type="text" name="filter-search" id="filter-search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_BOLETIN_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_BOLETIN_'.$this->params->get('show_tfjfa_bacuerdo_filter_field').'_FILTER_LABEL'); ?>" />
                    <button type="submit" class="btn hasTooltip" title="" data-original-title="<?= JText::_('JSEARCH_FILTER_SUBMIT') ?>"> <i class="icon-search"></i> </button>
				</div>
                <!--<button type="button" class="btn hasTooltip js-stools-btn-clear" title="" data-original-title="<?= JText::_('JSEARCH_FILTER_CLEAR') ?>"><?= JText::_('JSEARCH_FILTER_CLEAR') ?></button>-->
				<?php endif; ?>						
				<?php if ($this->params->get('show_tfjfa_bacuerdo_pagination_limit')) : ?>
					<div class="display-limit">
						<?php echo $this->pagination->getLimitBox(); ?>
					</div>
				<?php endif; ?>
			</div>						
		<?php endif; ?>


		<table class="tfjfa_bacuerdos">
			<?php if ($this->params->get('show_tfjfa_bacuerdo_headings')) :?>
				<thead>
					<tr>
						<?php if ($date = $this->params->get('list_show_tfjfa_bacuerdo_date')) : ?>
							<th class="list-date" id="tableOrderingdate">
								<?php echo JHtml::_('grid.sort', 'COM_BOLETIN_FIELD_'.JString::strtoupper($date).'_LABEL', 'a.'.$date, $list_dirn, $list_order); ?>
							</th>
						<?php endif; ?>

							<th width="12%" class="list-actions">
								<?php echo JText::_('COM_BOLETIN_HEADING_ACTIONS'); ?>						
							</th> 				
					</tr>
				</thead>
			<?php endif; ?>

			<tbody>

			<?php foreach ($this->tfjfa_bacuerdos as $i => $item) : ?>

					<tr class="cat-list-row<?php echo $i % 2; ?>" >

						<?php if ($this->params->get('list_show_tfjfa_bacuerdo_date')) : ?>
						<td class="list-date">
							<?php echo JHtml::_('date',$item->display_date, $this->escape(
							$this->params->get('tfjfa_bacuerdo_date_format', JText::_('DATE_FORMAT_LC3')))); ?>
						</td>
						<?php endif; ?>


						<td class="list-actions">
								<ul class="actions">
										<li class="edit-icon">
											<?php echo JHtml::_('tfjfa_bacuerdoicon.edit',$item, $params); ?>
										</li>
										<li class="delete-icon">
											<?php echo JHtml::_('tfjfa_bacuerdoicon.delete',$item, $params); ?>
										</li>
								</ul>
						</td>	
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>

		<?php if (($this->params->def('show_tfjfa_bacuerdo_pagination', 2) == 1  OR 
				   ($this->params->get('show_tfjfa_bacuerdo_pagination') == 2)) AND ($this->pagination->get('pages.total') > 1)) : ?>
			<div class="pagination">

				<?php if ($this->params->def('show_tfjfa_bacuerdo_pagination_results', 0)) : ?>
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
			<input type="hidden" name="filter_order" value="" />
			<input type="hidden" name="filter_order_Dir" value="" />
			<input type="hidden" name="limitstart" value="" />
			<?php echo JHtml::_('form.token'); ?>		
		</div>
	</form>
</div>
<?php endif; ?>
<?php // Code to add a link to submit an tfjfa_bacuerdo. ?>
<?php if ($this->params->get('show_tfjfa_bacuerdo_add_link',1)) : ?>
		<?php echo JHtml::_('tfjfa_bacuerdoicon.create', $params); ?>
<?php  endif; ?>
