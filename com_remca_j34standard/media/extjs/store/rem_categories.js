Ext.define('remca.store.rem_categories', {
    extend: 'Ext.data.Store',
    storeId: 'rem_categories',
    model: 'remca.model.rem_category',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});