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
JHtml::_('behavior.keepalive');
JLoader::register('ExtJSHelper', JPATH_COMPONENT.'/helpers/ExtJSHelper.php');
$extJSHelper = new ExtJSHelper;
$extJSHelper->parse('category');
?>
<link rel="stylesheet" type="text/css" href="libraries/extjs/classic/theme-classic/resources/theme-classic-all.css"/>
<script type="text/javascript" src="libraries/extjs/ext-all.js"></script>
<script language="javascript">
    /**
    * resuelve problemas de compatibilidad entre Mootools vs ExtJs
    */
    //MOOTOOLS_DOCUMENT_ID_VALUE = document.id;
    Ext.define('remca.model.category', {
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
                root: 'data'
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
                'option': 'com_remca',
                'model': 'category',
                'store': 'categories',
            },
        },
        fields: <?= $extJSHelper->encode($extJSHelper->fields) ?>,
    });
        Ext.define('remca.store.categories', {
            extend: 'Ext.data.Store',
            remoteSort: true,
            storeId: 'categories',
            model: 'remca.model.category',
            autoSync: true,
        });

Ext.application({
    name: 'remca',
    stores: [
        'categories',//if categories
        'wa_title_conversations',//each modal
        'categories',//current store
    ],
    paths: {
        'remca': 'media/com_remca/extjs',
    },
    launch: function() {
	for(i = 0; i < this.stores.length; i++ ){
		Ext.create(this.stores[i]).load({
                scope: this,
                callback: this.onStoresReady
            });
	}
    },
    onStoresReady: function(){
        for(i = 0; i < this.stores.length; i++ ){
            store = this.stores[i].replace('remca.store.','');
            if(Ext.StoreManager.get(store).isLoading())
                return;
        }
            //if states no ponerlo en Ext.application porque ya tiene datos cargados y pintaría 2 grid
            Ext.create('remca.store.states');
            
            Ext.create('Ext.grid.Panel', {
            title: '<?= JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS') ?>',
            store: 'categories',
            sortableColumns: false,
            columns: <?= $extJSHelper->encode($extJSHelper->columns) ?>,
           _tbar_: [
              { 
                xtype: 'button', 
                text: 'Añadir nuevo registro',
                icon: 'http://localhost/gpcb/resources_20170226/tsjdf_libros/images/add.png',
                  handler: function(grid, rowIndex, colIndex) {
                    jQuery('#collapseModal').modal('show');
                  }
              }
            ],
            bbar: {
                xtype: 'pagingtoolbar',
                displayInfo: true,
                store: 'categories',
                _listeners_: {
                    beforechange: function( pagingtoolbar, page, eOpts){
                        this.setActiveRecord(null);
                    },
                    scope: this
                },
                _items_:[
                    {
                        xtype: 'printbookbutton',
                        scope: this,
                    }
                ]
            },
            selType: 'rowmodel',
            plugins: [
                Ext.create('Ext.grid.plugin.RowEditing')
            ],
            height: 300,
            width: '100%',
            renderTo: 'extjs-content',
        });
    },
});
</script>
<div id="extjs-content"></div>
<a href="remca/index.php?task=categories.export&amp;option=com_remca&amp;Itemid=129" class="btn btn-primary"><span class="icon-download"></span>Export</a>