Ext.define('remca.store.configs', {
    extend: 'Ext.data.Store',
    storeId: 'configs',
    model: 'remca.model.config',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});