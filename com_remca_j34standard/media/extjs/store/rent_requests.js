Ext.define('remca.store.rent_requests', {
    extend: 'Ext.data.Store',
    storeId: 'rent_requests',
    model: 'remca.model.rent_request',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});