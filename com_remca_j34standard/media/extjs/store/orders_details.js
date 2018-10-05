Ext.define('remca.store.orders_details', {
    extend: 'Ext.data.Store',
    storeId: 'orders_details',
    model: 'remca.model.orders_detail',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});