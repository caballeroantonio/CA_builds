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
 * @CAversion		Id: modal.php 571 2016-01-04 15:03:02Z BrianWade $
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

$app = JFactory::getApplication();

JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.framework', true);
JHtml::_('formbehavior.chosen', 'select');

$function	= $app->input->get('function', 'jSelectLcp07');
$list_order	= $this->escape($this->state->get('list.ordering'));
$list_dirn	= $this->escape($this->state->get('list.direction'));

$search		= $this->escape($this->state->get('filter.search',''));
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_jtca' );
$empty = $component->params->get('default_empty_field', '');

?>
<h3><?php echo JText::_('COM_JTCA_LCP07S_SELECT_ITEM_LABEL'); ?></h3>
<form action="<?php echo JRoute::_('index.php?option=com_jtca&view=lcp07s&layout=modal&tmpl=component&function='.$function.'&'.JSession::getFormToken().'=1');?>" method="post" name="adminForm" id="adminForm">
	<fieldset class="filter clearfix">
		<div class="btn-toolbar">
			<div class="btn-group pull-left input-append">
				<input type="text" name="filter_search" id="filter_search" value="<?php echo $search; ?>"  placeholder="<?php echo JText::_('JSEARCH_FILTER'); ?>" />
				<button type="submit" class="btn hasTooltip" title="<?php echo JHtml::tooltipText('JSEARCH_FILTER_SUBMIT'); ?>">
					<i class="icon-search"></i>
				</button>
			</div>

			<div class="btn-group pull-left">
				<button type="button" class="btn hasTooltip js-stools-btn-clear" title="<?php echo JHtml::tooltipText('JSEARCH_FILTER_CLEAR'); ?>">
					<?php echo JText::_('JSEARCH_FILTER_CLEAR');?>
				</button>
			</div>						
			<div class="clearfix"></div>				
		</div>
		<hr class="hr-condensed">
		<div class="filters pull-left">

			<select name="filter_state" class="input-medium" onchange="this.form.submit()">
				<option value=""><?php echo JText::_('COM_JTCA_SELECT_STATUS');?></option>
				<?php echo JHtml::_('select.options', JHtml::_('jgrid.publishedOptions'), 'value', 'text', $this->state->get('filter.state'), true);?>
			</select>
			
			<select name="filter_created_by" class="input-medium" onchange="this.form.submit()">
				<option value=""><?php echo JText::_('COM_JTCA_SELECT_CREATED_BY');?></option>
				<?php echo JHtml::_('select.options', $this->creators, 'value', 'text', $this->state->get('filter.created_by'));?>
			</select>
		</div>
	</fieldset>

	<table class="table table-striped table-condensed">
		<thead>
			<tr>
				<th width="5%" class="center nowrap">
					<?php echo JHtml::_('grid.sort', 'JPUBLISHED', 'a.state', $list_dirn, $list_order); ?>
				</th>
					
				<th width="1%" class="center nowrap">
					<?php echo JHtml::_('grid.sort', 'JGRID_HEADING_ID', 'a.id', $list_dirn, $list_order); ?>
				</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($this->items as $i => $item) : ?>
			<tr class="row<?php echo $i % 2; ?>">
				<td class="center">
					<a class="pointer" href="javascript:void(0)" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>');">
						<?php echo JHtml::_('jgrid.published', $item->state, $i, 'lcp07s.', false, 'cb'); ?>
					</a>		
				</td>
				<td class="center">
					<a class="pointer" href="javascript:void(0)" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->id; ?>');">
						<?php echo $item->id; ?>
					</a>		
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="12">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>		
	</table>

	<input type="hidden" name="task" value="" />
	<input type="hidden" name="form_id" id="form_id" value="adminForm" />
	<input type="hidden" name="filter_order" value="<?php echo $list_order; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $list_dirn; ?>" />
	<?php echo JHtml::_('form.token'); ?>
</form>
