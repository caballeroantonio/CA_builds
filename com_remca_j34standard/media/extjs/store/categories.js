Ext.define('remca.store.categories', {
    extend: 'Ext.data.Store',

    constructor: function(cfg) {
        var me = this;
        cfg = cfg || {};
        me.callParent([Ext.apply({
            autoLoad: false,
            autoSync: true,
            storeId: 'categories',
            pageSize: -1,
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
                url: 'index.php?option=com_remca&task=json_read_categories',
                reader: {
                    type: 'json',
                    messageProperty: 'message',
                    root: 'data'
                }
            },
            fields: [
                {
                    name: 'id',
                    type: 'int'
                },
                {
                    name: 'title',
                    type: 'string'
                }
            ]
        }, cfg)]);
    }
});