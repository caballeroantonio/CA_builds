Ext.define('remca.store.main_categories', {
    extend: 'Ext.data.Store',
    storeId: 'main_categories',
    model: 'remca.model.main_category',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});