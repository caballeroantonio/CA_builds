Ext.define('remca.store.countries', {
    extend: 'Ext.data.Store',
    storeId: 'countries',
    model: 'remca.model.country',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});