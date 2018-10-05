Ext.define('remca.store.photos', {
    extend: 'Ext.data.Store',
    storeId: 'photos',
    model: 'remca.model.photo',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});