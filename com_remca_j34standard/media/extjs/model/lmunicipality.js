    Ext.define('remca.model.lmunicipality', {
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
                type: 'json',
                allowSingle: false,
                encode: true,
                root: 'data',
            },
            extraParams: {
                'option': 'com_remca',
                'model': 'lmunicipality',
                'store': 'lmunicipalities',
            },
        },
        fields: [
            {name: 'id', useNull: true, type: 'string',},{name: 'name', useNull: true, type: 'string',},{name: 'state', useNull: true, type: 'string',},{name: 'created', useNull: true, type: 'string',},{name: 'created_by', useNull: true, type: 'string',},{name: 'ordering', useNull: true, type: 'string',}, 
        ],
    });