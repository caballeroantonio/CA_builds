Ext.define('remca.store.mime_types', {
    extend: 'Ext.data.Store',
    storeId: 'mime_types',
    model: 'remca.model.mime_type',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});