<?php
/**
 * @version 		$Id:$
 * @name			TSJ CDMX Libros TxCA
 * @author			caballeroantonio (caballeroantonio.com)
 * @package			com_jtca
 * @subpackage		com_jtca.site
 * @copyright		Copyright (c) 2017 - 2020. All Rights Reserved
 * @license			GNU General Public License version 3 or later; See http://www.gnu.org/copyleft/gpl.html 
 * 
 * The following Component Architect header section must remain in any distribution of this file
 *
 * @CAversion		Id: default.php 604 2016-01-14 13:05:26Z BrianWade $
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

JHtml::_('behavior.keepalive');

function getFields(){
    $fields = array();
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Expediente',
        'FIELD_CODE_NAME' => 'id_expediente',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 33,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_EXPEDIENTE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL Expediente

                FIELD_NAME_LATEX=Expediente
                FIELD_CODE_NAME_LATEX=id\_expediente
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['id_expediente'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Órgano',
        'FIELD_CODE_NAME' => 'id_organo',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 18,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_ORGANO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL Órgano

                FIELD_NAME_LATEX=\'Organo
                FIELD_CODE_NAME_LATEX=id\_organo
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['id_organo'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Secretaría',
        'FIELD_CODE_NAME' => 'id_secretaria',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 18,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_SECRETARIA
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL Secretaría

                FIELD_NAME_LATEX=Secretar\'i{}a
                FIELD_CODE_NAME_LATEX=id\_secretaria
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['id_secretaria'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Año j.',
        'FIELD_CODE_NAME' => 'anoj',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ANOJ
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` YEAR(4) DEFAULT NULL Año j.

                FIELD_NAME_LATEX=A\~no j.
                FIELD_CODE_NAME_LATEX=anoj
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['anoj'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'UNIDAD DE GESTIÓN',
        'FIELD_CODE_NAME' => 'field2359',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD2359
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL UNIDAD DE GESTIÓN

                FIELD_NAME_LATEX=UNIDAD DE GESTI\'ON
                FIELD_CODE_NAME_LATEX=field2359
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field2359'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'CARPETA ADMINISTRATIVA',
        'FIELD_CODE_NAME' => 'field2360',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD2360
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL CARPETA ADMINISTRATIVA

                FIELD_NAME_LATEX=CARPETA ADMINISTRATIVA
                FIELD_CODE_NAME_LATEX=field2360
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field2360'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'JUZGADOR',
        'FIELD_CODE_NAME' => 'field2361',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD2361
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL JUZGADOR

                FIELD_NAME_LATEX=JUZGADOR
                FIELD_CODE_NAME_LATEX=field2361
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field2361'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'RESOLUCIÓN APELADA',
        'FIELD_CODE_NAME' => 'field2362',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD2362
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL RESOLUCIÓN APELADA

                FIELD_NAME_LATEX=RESOLUCI\'ON APELADA
                FIELD_CODE_NAME_LATEX=field2362
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field2362'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'CON AUDIENCIA DE ALEGATOS ACLARATORIOS',
        'FIELD_CODE_NAME' => 'field2363',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 16,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD2363
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TINYINT(1) DEFAULT NULL CON AUDIENCIA DE ALEGATOS ACLARATORIOS

                FIELD_NAME_LATEX=CON AUDIENCIA DE ALEGATOS ACLARATORIOS
                FIELD_CODE_NAME_LATEX=field2363
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field2363'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'DOCUMENTACIÓN RECIBIDA',
        'FIELD_CODE_NAME' => 'field2364',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD2364
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL DOCUMENTACIÓN RECIBIDA

                FIELD_NAME_LATEX=DOCUMENTACI\'ON RECIBIDA
                FIELD_CODE_NAME_LATEX=field2364
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field2364'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'CON DETENIDO',
        'FIELD_CODE_NAME' => 'field2365',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 16,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD2365
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TINYINT(1) DEFAULT NULL CON DETENIDO

                FIELD_NAME_LATEX=CON DETENIDO
                FIELD_CODE_NAME_LATEX=field2365
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field2365'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'MAGISTRADO UNITARIO',
        'FIELD_CODE_NAME' => 'txt_field2366',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 40,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=TXT_FIELD2366
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL MAGISTRADO UNITARIO

                FIELD_NAME_LATEX=MAGISTRADO UNITARIO
                FIELD_CODE_NAME_LATEX=txt\_field2366
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['txt_field2366'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'FECHA SENT. SEG. INST.',
        'FIELD_CODE_NAME' => 'field2367',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD2367
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL FECHA SENT. SEG. INST.

                FIELD_NAME_LATEX=FECHA SENT. SEG. INST.
                FIELD_CODE_NAME_LATEX=field2367
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field2367'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'RESOLUTIVOS',
        'FIELD_CODE_NAME' => 'field2368',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD2368
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL RESOLUTIVOS

                FIELD_NAME_LATEX=RESOLUTIVOS
                FIELD_CODE_NAME_LATEX=field2368
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field2368'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'OBSERVACIONES',
        'FIELD_CODE_NAME' => 'field2369',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 4,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD2369
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TEXT DEFAULT NULL OBSERVACIONES

                FIELD_NAME_LATEX=OBSERVACIONES
                FIELD_CODE_NAME_LATEX=field2369
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field2369'] = $field;
    return $fields;
}

function getColumns(){
    $fields = getFields();
    $columns = [];
    foreach ($fields as $key => $field) {
        switch ($field['FIELDTYPE_ID']) {
        default:
            $columns[] = $field;
            break;
        case 35:
        case 34:
            break;
        }
    }
    return $columns;
}
?>
<?php /*?>
<?php
if ($this->params->get('save_history') AND $this->params->get('lsps02_save_history'))
{
//	JHtml::_('behavior.modal', 'a.modal_jform_contenthistory');//creo que se carga con el botón versiones
	
	//hacer parametrizable data_id para que funcione versiones
	
	//$model	= JModelLegacy::getInstance('[%CompObject%]Form','[%ArchitectComp%]Model', array('ignore_request' => FALSE));
	$model	= JModelLegacy::getInstance('Lsps02Form','JtCaModel', array('ignore_request' => FALSE));
	$data = array();
	$data['id'] = 1;
	$this->form	= $model->getForm($data, false);
	//D:\www\htdocs\JPruebas\libraries\cms\form\field\contenthistory.php
	$itemId = $this->form->getValue('id');
	
	echo $this->form->getInput('contenthistory');
	
				echo JHtml::_(
					'bootstrap.renderModal', //atajo
					'collapseModal', //selector jQuery('#collapseModal')
					array(
						'title'  => 'titulo',
						'height' => 450,
						'url' => new JUri('index.php?option=com_jtca&view=lsps02form&layout=edit&layout=edit&tmpl=component&id=1&function=on_collapseModal')
					)
				);
}


?>
<ul>
	<li>@ToDo grid column versiones, necesito poder pasarle itemId al FORM o generar manualmente el código equivalente = {$itemId} y hace botón oculto</li>
    <li>@bug codificación a español, acentos y ñ en CA</li>
    <li>Personalidades relacionadas en el asunto</li>
    <li>Añadir registro - Ejemplo modal código FRAMEWORK
    <li>Se le da a los usuarios el botón borrar, PUBLISHED = FALSE quitando esa actividad al CAT</li>
</ul>

<?php */?>
	<script>
		/**
		* resuelve problemas de compatibilidad entre Mootools vs ExtJs
		*/
		MOOTOOLS_DOCUMENT_ID_VALUE = document.id;
    </script>
    <link rel="stylesheet" type="text/css" href="http://localhost/Sencha/ExtJS/ext-6.2.0/build/classic/theme-classic/resources/theme-classic-all.css"/>
    <script type="text/javascript" src="http://localhost/Sencha/ExtJS/ext-6.2.0/build/ext-all.js"></script>

<script language="javascript">
Ext.onReady(function(){
Ext.documentId = MOOTOOLS_DOCUMENT_ID_VALUE;
document.id = Ext.documentId;

	Ext.create('Ext.data.Store', {
		storeId:'simpsonsStore',
		fields:['name', 'address', 'personalidad', 'icon'],
		data:{'items':[
			{ 'name': 'Lisa',  "address":"Calle Palma",  "personalidad":"Actor", icon: 'user_green'  },
			{ 'name': 'Bart',  "address":"Calle Pino",  "personalidad":"Actor", icon: 'user_green'  },
			{ 'name': 'Homer', "address":"Calle Arce",  "personalidad":"Demandado", icon: 'user_red'  },
			{ 'name': 'Marge', "address":"Calle Sauce", "personalidad":"Victima", icon: 'user_orange'  },
		]},
		proxy: {
			type: 'memory',
			reader: {
				type: 'json',
				root: 'items'
			}
		}
	});
        
        var pathImg = 'http://localhost/resources/images/fatcow-hosting-icons-2000/16x16/';
	
	Ext.create('Ext.grid.Panel', {
		title: 'LIBRO DE GOBIERNO (NUEVO SISTEMA) (UNITARIO)',
		store: Ext.data.StoreManager.lookup('simpsonsStore'),
		columns: [
                    
			//columna para mostrar versiones
			{
				xtype:'actioncolumn',
				maxWidth: 25,
				hideable : false,
				menuDisabled: true,
				resizable: false,
				header: '<img src="'+pathImg+'box_front.png" alt="<?= JText::_('JTOOLBAR_VERSIONS') ?>" />',
				iconCls: 'icon-archive',
				width:50,
				tooltip: '<?= JText::_('JTOOLBAR_VERSIONS') ?>',
					handler: function(grid, rowIndex, colIndex) {
						jQuery('#versionsModal').modal('show')
					}
	
			},          
                    
			//columna con personalidades representadas por iconos
			{ 
				xtype: 'gridcolumn',
				width: 30,
				hidden: true,//hideable : false,
				menuDisabled: true,
				resizable: false,
				dataIndex: 'icon',
				header: '<img src="'+pathImg+'user.png" alt="Personalidad" />',
				renderer: function(value, metaData, record, rowIndex, colIndex, store, view ){
					return '<img src="'+pathImg+value+'.png"/>';
				},
			},
			//columnas con personalidades
			{ hidden: true,text: 'Personalidad',  dataIndex: 'personalidad' },
			{ hidden: true,text: 'Nombre', dataIndex: 'name', flex: 1 },
			{ hidden: true,text: 'Dirección', dataIndex: 'address' },
			
			
<?php
    $columns = getColumns();
    foreach ($columns as $key => $column) {
        echo "{text: '{$column['FIELD_NAME']}', dataIndex: '{$column['FIELD_CODE_NAME']}',},";
    }
?>
		],
                tbar: [
                  { 
                      xtype: 'button', 
                      text: 'Añadir nuevo registro',
                      icon: 'http://localhost/gpcb/resources_20170226/tsjdf_libros/images/add.png',
					  handler: function(grid, rowIndex, colIndex) {
						  jQuery('#collapseModal').modal('show');
					  }
                  }
                ],
"height": 300,
width: '100%',
		renderTo: 'extjs-content',
	});
});
</script>
<div id="extjs-content"></div>