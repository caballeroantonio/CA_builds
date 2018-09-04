Ext.define('remca.store.states', {
    extend: 'Ext.data.Store',

    constructor: function(cfg) {
        var me = this;
        cfg = cfg || {};
        me.callParent([Ext.apply({
            storeId: 'states',
            fields:['id', 'value'],
            data:{'items':[
                {'id': 1, 'value': 'JPUBLISHED'},
                {'id': 0, 'value': 'JUNPUBLISHED'},
                {'id': 2, 'value': 'JARCHIVED'},
                {'id': -2, 'value': 'JTRASH'},
            ]},
            proxy: {
                type: 'memory',
                reader: {
                    type: 'json',
                    root: 'items'
                }
            }
        }, cfg)]);
    }
});