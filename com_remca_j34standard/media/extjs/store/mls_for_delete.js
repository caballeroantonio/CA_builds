Ext.define('remca.store.mls_for_delete', {
    extend: 'Ext.data.Store',
    storeId: 'mls_for_delete',
    model: 'remca.model.mls_for_delete',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});