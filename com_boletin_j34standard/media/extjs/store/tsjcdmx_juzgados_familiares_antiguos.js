Ext.define('boletin.store.tsjcdmx_juzgados_familiares_antiguos', {
    extend: 'Ext.data.Store',
    storeId: 'tsjcdmx_juzgados_familiares_antiguos',
    model: 'boletin.model.tsjcdmx_juzgados_familiares_antiguo',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});