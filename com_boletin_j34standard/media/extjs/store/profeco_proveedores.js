Ext.define('boletin.store.profeco_proveedores', {
    extend: 'Ext.data.Store',
    storeId: 'profeco_proveedores',
    model: 'boletin.model.profeco_proveedor',
    
    autoSync: true,
    remoteFilter: true,
    remoteSort: true,
});