Ext.define('boletin.store.tsjcdmx_sala_acuerdos', {
    extend: 'Ext.data.Store',
    storeId: 'tsjcdmx_sala_acuerdos',
    model: 'boletin.model.tsjcdmx_sala_acuerdo',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});