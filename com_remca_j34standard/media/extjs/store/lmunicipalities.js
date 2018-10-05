Ext.define('remca.store.lmunicipalities', {
    extend: 'Ext.data.Store',
    storeId: 'lmunicipalities',
    model: 'remca.model.lmunicipality',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});