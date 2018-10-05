Ext.define('boletin.store.pjf_bacuerdos', {
    extend: 'Ext.data.Store',
    storeId: 'pjf_bacuerdos',
    model: 'boletin.model.pjf_bacuerdo',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});