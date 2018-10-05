Ext.define('remca.store.const', {
    extend: 'Ext.data.Store',
    storeId: 'const',
    model: 'remca.model.const',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});