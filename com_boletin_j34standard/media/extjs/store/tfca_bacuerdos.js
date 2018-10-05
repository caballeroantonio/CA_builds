Ext.define('boletin.store.tfca_bacuerdos', {
    extend: 'Ext.data.Store',
    storeId: 'tfca_bacuerdos',
    model: 'boletin.model.tfca_bacuerdo',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});