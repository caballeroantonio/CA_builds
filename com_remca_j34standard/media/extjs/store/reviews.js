Ext.define('remca.store.reviews', {
    extend: 'Ext.data.Store',
    storeId: 'reviews',
    model: 'remca.model.review',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});