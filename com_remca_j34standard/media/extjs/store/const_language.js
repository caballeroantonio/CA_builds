Ext.define('remca.store.const_language', {
    extend: 'Ext.data.Store',
    storeId: 'const_language',
    model: 'remca.model.const_language',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});