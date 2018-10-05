Ext.define('boletin.store.tfjfa_bacuerdos', {
    extend: 'Ext.data.Store',
    storeId: 'tfjfa_bacuerdos',
    model: 'boletin.model.tfjfa_bacuerdo',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});