Ext.define('boletin.store.tsjcdmx_juzgado_acuerdos', {
    extend: 'Ext.data.Store',
    storeId: 'tsjcdmx_juzgado_acuerdos',
    model: 'boletin.model.tsjcdmx_juzgado_acuerdo',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});