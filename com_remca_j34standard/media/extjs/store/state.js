Ext.define('remca.store.state', {
    extend: 'Ext.data.Store',

    constructor: function(cfg) {
        var me = this;
        cfg = cfg || {};
        me.callParent([Ext.apply({
            storeId: 'state',
            fields:['id', 'value'],
            data:{'items':[
                {'id': 1, 'value': 'Publicado'},
                {'id': 0, 'value': 'Despublicado'},
                {'id': 2, 'value': 'Archivado'},
                {'id': -2, 'value': 'Papelera'},
            ]},
            proxy: {
                type: 'memory',
                reader: {
                    type: 'json',
                    rootProperty: 'items',//extjs 4.2 and before name is root
                }
            }
        }, cfg)]);
    }
});