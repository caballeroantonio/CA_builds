Ext.define('remca.store.languages', {
    extend: 'Ext.data.Store',
    storeId: 'languages',
    model: 'remca.model.language',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});