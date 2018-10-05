Ext.define('remca.store.lstates', {
    extend: 'Ext.data.Store',
    storeId: 'lstates',
    model: 'remca.model.lstate',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});