Ext.define('boletin.store.id_medio_notificacion', {
    extend: 'Ext.data.Store',
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
            rootProperty: 'items',//extjs 4.2 and before name is root
        }
    }
});