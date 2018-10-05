Ext.define('boletin.store.srsps_bacuerdos', {
    extend: 'Ext.data.Store',
    storeId: 'srsps_bacuerdos',
    model: 'boletin.model.srsps_bacuerdo',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});