Ext.define('remca.store.wisheslist', {
    extend: 'Ext.data.Store',
    storeId: 'wisheslist',
    model: 'remca.model.wishlist',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});