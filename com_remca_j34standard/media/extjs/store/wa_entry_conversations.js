Ext.define('remca.store.wa_entry_conversations', {
    extend: 'Ext.data.Store',
    storeId: 'wa_entry_conversations',
    model: 'remca.model.wa_entry_conversation',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});