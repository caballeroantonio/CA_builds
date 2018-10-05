Ext.define('boletin.store.rsps_bacuerdos', {
    extend: 'Ext.data.Store',
    storeId: 'rsps_bacuerdos',
    model: 'boletin.model.rsps_bacuerdo',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});