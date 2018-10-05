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
            type: 'json',
            allowSingle: false,
            encode: true,
            rootProperty: 'data',//extjs 4.2 and before name is root
        },
        extraParams: {
            'option': 'com_boletin',
            'model': 'tsjcdmx_juzgado_acuerdo',
            'store': 'tsjcdmx_juzgado_acuerdos',
        },
    },
    fields: [
        {name: 'id', useNull: true, type: 'string',},{name: 'name', useNull: true, type: 'string',},{name: 'state', useNull: true, type: 'string',},{name: 'created', useNull: true, type: 'string',},{name: 'created_by', useNull: true, type: 'string',},{name: 'ordering', useNull: true, type: 'string',}, 
    ],
});