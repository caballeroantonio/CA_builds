Ext.define('boletin.store.prodecon_bacuerdos', {
    extend: 'Ext.data.Store',
    storeId: 'prodecon_bacuerdos',
    model: 'boletin.model.prodecon_bacuerdo',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});