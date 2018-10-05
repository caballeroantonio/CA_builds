Ext.define('boletin.store.tsjcdmx_juzgados_civiles_antiguos', {
    extend: 'Ext.data.Store',
    storeId: 'tsjcdmx_juzgados_civiles_antiguos',
    model: 'boletin.model.tsjcdmx_juzgados_civiles_antiguo',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});