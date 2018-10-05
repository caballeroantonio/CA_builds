Ext.define('remca.store.orders', {
    extend: 'Ext.data.Store',
    storeId: 'orders',
    model: 'remca.model.order',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});