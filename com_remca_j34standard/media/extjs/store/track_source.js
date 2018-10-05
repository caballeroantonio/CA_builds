Ext.define('remca.store.track_source', {
    extend: 'Ext.data.Store',
    storeId: 'track_source',
    model: 'remca.model.track_source',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});