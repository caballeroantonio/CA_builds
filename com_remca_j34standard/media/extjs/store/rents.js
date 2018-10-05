Ext.define('remca.store.rents', {
    extend: 'Ext.data.Store',
    storeId: 'rents',
    model: 'remca.model.rent',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});