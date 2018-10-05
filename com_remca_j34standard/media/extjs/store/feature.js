Ext.define('remca.store.feature', {
    extend: 'Ext.data.Store',
    storeId: 'feature',
    model: 'remca.model.feature',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});