Ext.define('remca.store.houses', {
    extend: 'Ext.data.Store',
    storeId: 'houses',
    model: 'remca.model.house',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});