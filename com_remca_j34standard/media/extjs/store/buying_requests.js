Ext.define('remca.store.buying_requests', {
    extend: 'Ext.data.Store',
    storeId: 'buying_requests',
    model: 'remca.model.buying_request',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});