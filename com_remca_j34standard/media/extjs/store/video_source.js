Ext.define('remca.store.video_source', {
    extend: 'Ext.data.Store',
    storeId: 'video_source',
    model: 'remca.model.video_source',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});