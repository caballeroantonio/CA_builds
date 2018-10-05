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

// Add css files for the boletin component and categories if they exist
$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_boletin.css');
$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_tsjcdmx_juzgado_acuerdos.css');

if ($lang->isRTL())
{
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_boletin-rtl.css');
	$this->document->addStyleSheet(JUri::root().'media/com_boletin/css/site_tsjcdmx_juzgado_acuerdos-rtl.css');
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

$layout		= $this->params->get('tsjcdmx_juzgado_acuerdo_layout', 'default');

$can_create	= $user->authorise('core.create', 'com_boletin');
// Get from global settings the text to use for an empty field
$component = JComponentHelper::getComponent( 'com_boletin' );
$empty = $component->params->get('default_empty_field', '');

/*
 *	Layout HTML
 */
?>
<noscript>
<p style="color: red;"><?php echo JText::_('COM_BOLETIN_WARNING_NOSCRIPT'); ?><p>
</noscript>
<div class="boletin tsjcdmx_juzgado_acuerdos-list<?php echo $this->params->get('pageclass_sfx');?>">
	<?php if ($this->params->get('show_page_heading')): ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>

	<?php
		$can_edit = 0;$can_delete = 0;
		$show_actions = false;
		if ($this->params->get('show_tsjcdmx_juzgado_acuerdo_icons',1) >= 0) :
			foreach ($this->items as $i => $item) :
				if ($item->params->get('access-edit',1) OR $item->params->get('access-delete',1)) :
					$show_actions = true;
					continue;
				endif;
			endforeach;
		endif;
	?>
	<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm">
		<?php if (($this->params->get('show_tsjcdmx_juzgado_acuerdo_filter_field') != '' AND $this->params->get('show_tsjcdmx_juzgado_acuerdo_filter_field') != 'hide')) :?>
			<div class="filter-search">
				<?php if ($this->params->get('show_tsjcdmx_juzgado_acuerdo_filter_field') != '' AND $this->params->get('show_tsjcdmx_juzgado_acuerdo_filter_field') != 'hide') :?>
                <div class="input-append">
					<input type="text" name="filter_search" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_BOLETIN_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_BOLETIN_'.$this->params->get('show_tsjcdmx_juzgado_acuerdo_filter_field').'_FILTER_LABEL'); ?>" />
                    <button type="submit" class="btn hasTooltip" title="" data-original-title="<?= JText::_('JSEARCH_FILTER_SUBMIT') ?>"> <i class="icon-search"></i> </button>
				</div>
                <!--<button type="button" class="btn hasTooltip js-stools-btn-clear" title="" data-original-title="<?= JText::_('JSEARCH_FILTER_CLEAR') ?>"><?= JText::_('JSEARCH_FILTER_CLEAR') ?></button>-->
				<?php endif; ?>	
			</div>
		<?php endif; ?>

		<?php if ($this->params->get('show_tsjcdmx_juzgado_acuerdo_pagination_limit')) : ?>
			<div class="display-limit">
				<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160;
				<?php echo $this->pagination->getLimitBox(); ?>
			</div>
		<?php endif; ?>	
		<div style="clear:both;"></div>
        
<?php
JHtml::_('behavior.keepalive');
JLoader::register('ExtJSHelper', JPATH_COMPONENT.'/helpers/ExtJSHelper.php');
class tsjcdmx_juzgado_acuerdosApp extends ExtJSHelper{
    
}
$extJSHelper = new tsjcdmx_juzgado_acuerdosApp();
$extJSHelper->parse('tsjcdmx_juzgado_acuerdo', 'tsjcdmx_juzgado_acuerdos');
$app = $extJSHelper->getAppConfiguration();

$this->document->addStyleSheet('libraries/extjs/classic/theme-classic/resources/theme-classic-all.css');
//$this->document->addScript('libraries/extjs/ext-all.js');
$this->document->addScript('libraries/extjs/ext-all-debug.js');
$this->document->addScript('libraries/extjs/classic/locale/locale-es.js');
?>
<script language="javascript">
Ext.Loader.setConfig({
    disableCaching: true,
    enabled: true,
    paths: {
        'Ext.tx': 'libraries/extjs/tx',
//        'Ext.ux': 'https://extjs.cachefly.net/ext/gpl/4.2.1/examples/ux/',
    },
});
Ext.Loader.require(
    [
        'Ext.tx.grid.Panel',
    ]		
);
    /**
    * resuelve problemas de compatibilidad entre Mootools vs ExtJs
    */
    //MOOTOOLS_DOCUMENT_ID_VALUE = document.id;
    Ext.define('boletin.model.tsjcdmx_juzgado_acuerdo', {
        extend: 'Ext.data.Model',
        proxy: {
            type: 'ajax',
            listeners: {
                exception: function(proxy, response, operation){
                    Ext.MessageBox.show({
                        title: 'REMOTE EXCEPTION',
                        msg: operation.getError(),
                        icon: Ext.MessageBox.ERROR,
                        buttons: Ext.Msg.OK
                    });
                }
            },
            api: {
                read: 'index.php?task=json_read',
                update: 'index.php?task=json_save',
            },
            reader: {
                type: 'json',
                messageProperty: 'message',
                rootProperty: 'data',//extjs 4.2 and before name is root
            },
            writer: {
                "type": "json",
                rootProperty: 'data',//extjs 4.2 and before name is root
                "encode": true,
                "writeAllFields": true,
//                "allowSingle": false,//todavía no veo cómo retornar valores con errores.
            },
            extraParams: {
                '<?= JSession::getFormToken() ?>' : 1,
                'option': 'com_boletin',
                'model': 'tsjcdmx_juzgado_acuerdo',
                'store': 'tsjcdmx_juzgado_acuerdos',
            },
        },
        fields: <?= $extJSHelper->encode(array_values($extJSHelper->getModelFields())) ?>,
    });
Ext.application(<?= $extJSHelper->encode($app) ?>);
</script>
<div id="extjs-content"></div>
			<div>
				<!-- @TODO add hidden inputs -->
				<input type="hidden" name="task" value="" />
				<input type="hidden" name="boxchecked" value="0" />			
				<input type="hidden" name="filter_order" value="" />
				<input type="hidden" name="filter_order_Dir" value="" />
				<input type="hidden" name="limitstart" value="" />
				<?php echo JHtml::_('form.token'); ?>
			</div>
		<?php // Code to add a link to submit an tsjcdmx_juzgado_acuerdo. ?>
		<?php if ($this->params->get('show_tsjcdmx_juzgado_acuerdo_add_link', 1)) : ?>
			<?php if ($can_create) : ?>
				<?php echo JHtml::_('tsjcdmx_juzgado_acuerdoicon.create', $this->params); ?>
			<?php  endif; ?>
		<?php endif; ?>		
		<?php 
			if($user->id == 1){
				//JHtml::_('tsjcdmx_juzgado_acuerdoicon.create', $this->params); 
	            echo '<span class="hasTooltip tip" title="Export"><a href="index.php?task=tsjcdmx_juzgado_acuerdos.export" class="btn btn-primary"><span class="icon-download"></span>Export</a></span>';
			}
        ?>
	</form>
</div>

<?php if ($can_edit AND $params->get('save_history') AND $params->get('tsjcdmx_juzgado_acuerdo_save_history')) : ?>
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
	modalBody.prepend('<iframe class="iframe" src="index.php?option=com_boletin&task=tsjcdmx_juzgado_acuerdo.showHistory&item_id='+item_id+'" name="titulo" height="450"></iframe>');
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