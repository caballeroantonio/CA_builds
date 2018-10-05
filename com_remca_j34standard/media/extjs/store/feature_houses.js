Ext.define('remca.store.feature_houses', {
    extend: 'Ext.data.Store',
    storeId: 'feature_houses',
    model: 'remca.model.feature_house',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});