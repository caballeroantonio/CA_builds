<?php
/**
 * @version 		$Id:$
 * @name			RealEstateManagerCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_remca
 * @subpackage		com_remca.site
 * @copyright		
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: compobjecticon.php 571 2016-01-04 15:03:02Z BrianWade $
 * @CAauthor		Component Architect (www.componentarchitect.com)
 * @CApackage		architectcomp
 * @CAsubpackage	architectcomp.site
 * @CAtemplate		joomla_3_4_standard (Release 1.0.1)
 * @CAcopyright		Copyright (c)2013 - 2016  Simply Open Source Ltd. (trading as Component Architect). All Rights Reserved
 * @Joomlacopyright Copyright (c)2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @CAlicense		GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html
 * 
 * This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
 */

defined('_JEXEC') or die;

class ExtJSHelper
{

    public function getViewColumns(){
        return $this->_columns;
    }
    
    public function getModelFields(){
        return $this->_fields;
    }

    public function parse($object_name, $object_plural_name){
        $this->_object_plural_name = $object_plural_name;
        $columns = [];
        $fields = [];
        $grid = [
            'title' => JText::_('COM_REMCA_WA_ENTRY_CONVERSATIONS'),
            'store' => $this->_object_plural_name,
/*
           _tbar_: [
              { 
                xtype: 'button', 
                text: 'Añadir nuevo registro',
                icon: 'http://localhost/gpcb/resources_20170226/tsjdf_libros/images/add.png',
                  handler: function(grid, rowIndex, colIndex) {
                    jQuery('#collapseModal').modal('show');
                  }
              }
            ],
 */
            'bbar' => [
                'xtype' => 'pagingtoolbar',
                'displayInfo' => true,
                'store' => $this->_object_plural_name,
                /*_listeners_: {
                    beforechange: function( pagingtoolbar, page, eOpts){
                        this.setActiveRecord(null);
                    },
                    scope: this
                },
                _items_:[
                    {
                        xtype: 'printbookbutton',
                        scope: this,
                    }
                ]*/
            ],
            'selType' => 'rowmodel',
            'plugins' => [
                [
                    'ptype' => 'rowediting',
                ],
            ],
            'height' => 300,
            'width' => '100%',
            'renderTo' => 'extjs-content',
            'viewConfig' => [
                    'loadingText' => 'Espere un momento...',
            ],
            
            'id' => 'myGrid',
        ];
        
        $app = [
            'name' => 'remca',
            'stores' => [],
            'static_stores' => [],
            'paths' => [
                'remca' => 'media/com_remca/extjs',
            ],
            'launch' => $this->insertAs_Is(<<<EOD
    function() {
		Ext.getBody().mask("Loading...");
        for(i = 0; i < this.static_stores.length; i++ ){
            Ext.create("remca.store."+this.static_stores[i]);
        }
        for(i = 0; i < this.stores.length; i++ ){
                Ext.create(this.stores[i]).load({
                scope: this,
                callback: this.onStoresReady
            });
        }
    }
EOD
),
        ];
        
        $path = JPATH_COMPONENT."/models/forms/{$object_name}.xml";
        $form = simplexml_load_file($path) or die("Error: Can not create {$object_name} object");
        
        
        foreach ($form->fieldset as $fieldset){
            foreach ($fieldset->field as $field){
                $attributes = $field->attributes();
                $type = (string)$attributes->type;
                $name = (string)$attributes->name;
                $required = (string)$attributes->required?1:0;
                $label = JText::_((string)$attributes->label);
                $description = JText::_((string)$attributes->description);
                
                $column = [
                    'xtype' => 'gridcolumn',
                    'dataIndex' => $name,
                    'text' => $label,
                    'tooltip'=> $description,
                ];
                
                $field = [
                    'name' => $name,
                ];
                
                
                switch ($type){
                    case 'hidden':
                        $column['hidden'] = true;
                        break;
                    case 'editor':
                        $field['type'] = 'string';
                        $column['editor'] = [
                            'xtype' => 'textareafield',
                            'allowBlank' => !$required,
                        ];
                        $column['flex'] = 1;
                        
                        $grid['plugins'][] = [
                    'ptype' => 'rowexpander',
                    'expandOnDblClick' => false,
                    'rowBodyTpl' => $this->insertAs_Is(<<<EOD
new Ext.XTemplate(
    '{{$name}}',
    {
        insertBreaks: function(value){
            if(!value)
                return;
            return value.replace(/\\n/g, '</br>');
        },
        formatDate: function(value){
            return Ext.Date.format(value, 'Y-m-d');
        },
        formatDateTime: function(value){
            return Ext.Date.format(value, 'd-m-Y g:i A');
        },
        getStoreValue: function(store,value, labelField){
            row = Ext.StoreMgr.get(store).getById(value);
            if(row !== null)
                return row.get(labelField);
        },
    }
)
EOD
                    ),
                ];
                        
                        break;
                    case 'calendar':
                        $field['type'] = 'date';
                        $field['dateFormat'] = 'Y-m-d H:i:s';
                        $column['xtype'] = 'datecolumn';
                        $column['format'] = 'Y-m-d H:i:s';
                        $column['editor'] = [
                            'xtype' => 'datefield',
                            'format' => 'Y-m-d',
                            'dateFormat' => 'Y-m-d',
                            'allowBlank' => !$required,
                        ];
                        break;
                    case 'tel':
                        $column['editor'] = [
                            'xtype' => 'textfield',
                            'allowBlank' => !$required,
                        ];
                        break;
                    case 'categoryedit':
                        $column['renderer'] = $this->insertAs_Is("function(value, metaData, record, rowIndex, colIndex, store, view) {
                                value = Ext.StoreMgr.get('categories').getById(value);
                                if(value !== null)
                                    return value.get('title');
                            }");
                        $column['editor'] = [
                            'xtype' => 'combobox',
                            'fieldCls' => 'Ext.form.field.ComboBox',
                            'emptyText' => 'Select',
                            'forceSelection' => true,
                            'queryMode' => 'local',
                            'store' => 'categories',
                            'displayField' => 'title',
                            'valueField' => 'id',
                            'allowBlank' => !$required,
                        ];
                        $field['type'] = 'int';
                        
                        $app['stores'][] = 'categories';
                        break;
                    case 'list':
                        $column['renderer'] = $this->insertAs_Is("function(value, metaData, record, rowIndex, colIndex, store, view) {
                                try{
                                    value = Ext.StoreMgr.get('{$name}').getById(value);
                                    if(value !== null)
                                        return value.get('value');
                                }catch(e){
                                    return value;
                                }
                            }");
                        $column['editor'] = [
                            'xtype' => 'combobox',
                            'fieldCls' => 'Ext.form.field.ComboBox',
                            'emptyText' => 'Select',
                            'forceSelection' => true,
                            'queryMode' => 'local',
                            'store' => $name,
                            'displayField' => 'value',
                            'valueField' => 'id',
                            'allowBlank' => !$required,
                        ];
                        $app['static_stores'][] = $name;
                        break;
                    default :
                        $vars = explode('_', $type, 2);
                        if($vars[0]=='modal'){
                            $column['renderer'] = $this->insertAs_Is("function(value, metaData, record, rowIndex, colIndex, store, view) {
                                    value = Ext.StoreMgr.get('{$vars[1]}').getById(value);
                                    if(value !== null)
                                        return value.get('name');
                                }");
                            $column['editor'] = [
                                'xtype' => 'combobox',
                                'fieldCls' => 'Ext.form.field.ComboBox',
                                'emptyText' => 'Select',
                                'forceSelection' => true,
                                'queryMode' => 'local',
                                'store' => $vars[1],
                                'displayField' => 'name',
                                'valueField' => 'id',
                                'allowBlank' => !$required,
                            ];
                            $field['type'] = 'int';
                            $app['stores'][] = $vars[1];
                            break;
                        }
                        break;
                }
                
                switch ($name){
                    case 'id':
                        $field['type'] = 'int';
                        break;
                    case 'created':
                        unset($column['editor']);
                        $column['hidden'] = TRUE;
                        break;
                    case 'created_by':
                        $column['dataIndex'] = 'created_by_name';
                        $column['hidden'] = TRUE;                        
                        
                        $field['name'] = 'created_by_name';
                        $field['persist'] = false;
                        unset($column['editor']);
                        break;
                    case 'state':
                        $column['hidden'] = TRUE;
                        $field['type'] = 'int';
                        break;
                }
                
                $columns[$name] = $column;
                $fields[$name] = $field;
            }
        }
        
        $app['stores'][] = $object_plural_name;
        
        
        $this->_columns = $columns;
        $this->_fields = $fields;
        $this->_grid = $grid;
        $this->_app = $app;
    }
    
    public function getAppConfiguration(){
        $app = $this->_app;
        $gridConfiguration = $this->encode($this->getGridConfiguration());
        $app['onStoresReady'] = $this->insertAs_Is(<<<EOD
    function() {
        for(i = 0; i < this.stores.length; i++ ){
            store = this.stores[i].replace('remca.store.','');
            if(Ext.StoreManager.get(store).isLoading())
                return;
        }
         Ext.create('Ext.grid.Panel', {$gridConfiguration});
		Ext.getBody().unmask();        
        window.dispatchEvent(new Event('resize'));
    }
EOD
);
        return $app;
    }
    
    public function getGridConfiguration(){
        $grid = $this->_grid;
        $grid['columns'] = array_values($this->getViewColumns());
        return $grid;
    }
    
    private $escapers = [];
    private $replacements = [];
    
    /**
     * Agrega un elemento encapsulado en un STRING que debe ser interpetado de forma nativa (AS IS)
     * @param string $value elemento nativo, si pongo "function insertAs_Is(string $value)" marca error
     * dice 
     * @return string equivalencia que se cambiará al llamar a la función encode.
     */
    public function insertAs_Is($value){
            $next_asis = count($this->escapers);
            $this->escapers[] = "\"# AS_IS {$next_asis} #\"";
            $this->replacements[] = $value;
            return "# AS_IS {$next_asis} #";
    }
    
    /**
     * Codifica JSON con los elementos nativos deseados
     */
    public function encode($obj) {
        return str_replace($this->escapers, 
            $this->replacements, 
            json_encode($obj, JSON_PRETTY_PRINT)
        );
    }
}
