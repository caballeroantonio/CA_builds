<!DOCTYPE html>
<html lang="es-es" dir="ltr">
<head>
<!--
	<link href="/remca/libraries/extjs/classic/theme-classic/resources/theme-classic-all.css" rel="stylesheet" />
	<script src="/remca/libraries/extjs/ext-all-debug.js"></script>
	<script src="/remca/libraries/extjs/classic/locale/locale-es.js"></script>
-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/extjs/6.2.0/ext-all-debug.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/extjs/6.2.0/classic/locale/locale-es.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/extjs/6.2.0/classic/theme-classic/resources/theme-classic-all.css" rel="stylesheet" />
    
    
</head>
<body class="contentpane modal">
<script language="javascript">
/*
my_server - resuelve el CORS
override - sobre-escribimos un proxy de ajax a jsonp
paths - esa variable señala la BASE para descargar archivos.JS

*/
//var my_server = 'https://52.87.155.213/proxy.php';
var my_server = 'http://localhost/remca/';
var my_server = 'http://caballeroantonio.isa-geek.com:8002/remca/';
Ext.Loader.setConfig({
    disableCaching: true,
    enabled: true,
    paths: {
        'Ext.tx': my_server+'libraries/extjs/tx',
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
                '3fe91bbe6915326a6fb72af3b3445d7a' : 1,
                'option': 'com_boletin',
                'model': 'tsjcdmx_juzgado_acuerdo',
                'store': 'tsjcdmx_juzgado_acuerdos',
            },
        },
        fields: [
    {
        "name": "id",
        "type": "int"
    },
    {
        "name": "description",
        "type": "string"
    },
    {
        "name": "fecha_acuerdo",
        "type": "date",
        "dateFormat": "Y-m-d H:i:s"
    },
    {
        "name": "fecha_boletin",
        "type": "date",
        "dateFormat": "Y-m-d H:i:s"
    },
    {
        "name": "juzgado"
    },
    {
        "name": "actor"
    },
    {
        "name": "demandado"
    },
    {
        "name": "terceria"
    },
    {
        "name": "tipo_juicio"
    },
    {
        "name": "toca"
    },
    {
        "name": "anio"
    },
    {
        "name": "tipo_resolucion"
    }
],
    });
Ext.application({
    "name": "boletin",
    "stores": [
        "tsjcdmx_juzgado_acuerdos"
    ],
    "paths": {
        "boletin": my_server+"media\/com_boletin\/extjs"
    },
    "launch":     function() {
		Ext.getBody().mask("Loading...");
        for(i = 0; i < this.stores.length; i++ ){
                store = Ext.create(this.stores[i]);
            if(!store.data.length){
                //cambio de proxy en todos los stores
                proxy_cnf = store.getProxy().initialConfig;
                proxy_cnf.type = 'jsonp';
                proxy_cnf.api.read = my_server+proxy_cnf.api.read;
                proxy_cnf.api.update = my_server+proxy_cnf.api.update;
                proxy_cnf.type = 'jsonp';
                store.setProxy(proxy_cnf);
                
                store.load({
                        scope: this,
                        callback: this.onStoresReady
                });
            }
        }
    },
    "onStoresReady":     function() {
        for(i = 0; i < this.stores.length; i++ ){
            store = this.stores[i].replace('boletin.store.','');
            if(Ext.StoreManager.get(store).isLoading())
                return;
        }
         Ext.create('Ext.grid.Panel', {
    "title": "COM_REMCA_WA_ENTRY_CONVERSATIONS",
    "store": "tsjcdmx_juzgado_acuerdos",
    "plugins": [
        {
            "ptype": "gridfilters"
        },
        {
            "ptype": "rowediting"
        },
        {
            "ptype": "rowexpander",
            "expandOnDblClick": false,
            "rowBodyTpl": new Ext.XTemplate(
    '{description}',
    {
        insertBreaks: function(value){
            if(!value)
                return;
            return value.replace(/\n/g, '</br>');
        },
        formatDate: function(value){
            return Ext.Date.format(value, 'Y-m-d');
        },
        formatDateTime: function(value){
            return Ext.Date.format(value, 'd-m-Y g:i A');
        },
        getStoreValue: function(store,value, labelField){
            row = Ext.StoreMgr.get(store).getById(value);
            if(row !== null)
                return row.get(labelField);
        },
    }
)
        }
    ],
    "height": 300,
    "width": "100%",
    "renderTo": "extjs-content",
    "id": "myGrid",
    "columns": [
        {
            "xtype": "gridcolumn",
            "dataIndex": "id",
            "text": "COM_BOLETIN_ID_LABEL",
            "tooltip": "",
            "filter": [],
            "hidden": true
        },
        {
            "xtype": "gridcolumn",
            "dataIndex": "description",
            "text": "Descripci\u00f3n",
            "tooltip": "Ingrese una descripci\u00f3n para el tsjcdmx_juzgado_acuerdo.",
            "filter": [],
            "editor": {
                "xtype": "textareafield",
                "allowBlank": true
            },
            "flex": 1
        },
        {
            "xtype": "datecolumn",
            "dataIndex": "fecha_acuerdo",
            "text": "Fecha del acuerdo",
            "tooltip": "",
            "filter": [],
            "format": "Y-m-d H:i:s",
            "editor": {
                "xtype": "datefield",
                "format": "Y-m-d",
                "dateFormat": "Y-m-d",
                "allowBlank": false
            }
        },
        {
            "xtype": "datecolumn",
            "dataIndex": "fecha_boletin",
            "text": "Fecha de publicaci\u00f3n",
            "tooltip": "",
            "filter": [],
            "format": "Y-m-d H:i:s",
            "editor": {
                "xtype": "datefield",
                "format": "Y-m-d",
                "dateFormat": "Y-m-d",
                "allowBlank": false
            }
        },
        {
            "xtype": "gridcolumn",
            "dataIndex": "juzgado",
            "text": "Juzgado",
            "tooltip": "",
            "filter": []
        },
        {
            "xtype": "gridcolumn",
            "dataIndex": "actor",
            "text": "Actor",
            "tooltip": "",
            "filter": []
        },
        {
            "xtype": "gridcolumn",
            "dataIndex": "demandado",
            "text": "Demandado",
            "tooltip": "",
            "filter": []
        },
        {
            "xtype": "gridcolumn",
            "dataIndex": "terceria",
            "text": "Tercer\u00eda",
            "tooltip": "",
            "filter": []
        },
        {
            "xtype": "gridcolumn",
            "dataIndex": "tipo_juicio",
            "text": "Tipo de juicio",
            "tooltip": "",
            "filter": []
        },
        {
            "xtype": "gridcolumn",
            "dataIndex": "toca",
            "text": "Toca",
            "tooltip": "",
            "filter": []
        },
        {
            "xtype": "gridcolumn",
            "dataIndex": "anio",
            "text": "A\u00f1o judicial",
            "tooltip": "",
            "filter": []
        },
        {
            "xtype": "gridcolumn",
            "dataIndex": "tipo_resolucion",
            "text": "Tipo de resoluci\u00f3n",
            "tooltip": "",
            "filter": []
        }
    ]
});
		Ext.getBody().unmask();        
        window.dispatchEvent(new Event('resize'));
    }
});
</script>
<div id="extjs-content"></div>	
</body>
</html>
