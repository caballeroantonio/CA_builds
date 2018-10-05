Ext.define('remca.store.categories', {
    extend: 'Ext.data.Store',
    storeId: 'categories',

    autoLoad: false,
    autoSync: true,
    fields: [
        {
            name: 'id',
            type: 'int'
        },
        {
            name: 'title',
            type: 'string'
        }
    ],
    pageSize: -1,
    proxy: {
        type: 'ajax',
        listeners: {
            exception: function (proxy, response, operation) {
                Ext.MessageBox.show({
                    title: 'REMOTE EXCEPTION',
                    msg: operation.getError(),
                    icon: Ext.MessageBox.ERROR,
                    buttons: Ext.Msg.OK
                });
            }
        },
        url: 'index.php?option=com_remca&task=json_read_categories',
        reader: {
            type: 'json',
            messageProperty: 'message',
            rootProperty: 'data', //extjs 4.2 and before name is root
        }
    },
});