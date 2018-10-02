Ext.define('boletin.store.id_medio_notificacion', {
    extend: 'Ext.data.Store',

    constructor: function(cfg) {
        var me = this;
        cfg = cfg || {};
        me.callParent([Ext.apply({
            storeId: 'id_medio_notificacion',
            fields:['id', 'value'],
            data:{'items':[
                {'id': 'Estrados de la autoridad', 'value': 'Estrados de la autoridad'},
                {'id': 'Notificación personal', 'value': 'Notificación personal'},
                {'id': 'Notificación por Buzón Tributario', 'value': 'Notificación por Buzón Tributario'},
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