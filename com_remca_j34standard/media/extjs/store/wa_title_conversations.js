        Ext.define('remca.store.wa_title_conversations', {
            extend: 'Ext.data.Store',
            remoteSort: true,
            storeId: 'wa_title_conversations',
            model: 'remca.model.wa_title_conversation',
            autoSync: true,
        });