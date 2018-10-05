Ext.define('remca.store.rent_sal', {
    extend: 'Ext.data.Store',
    storeId: 'rent_sal',
    model: 'remca.model.rent_sal',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});