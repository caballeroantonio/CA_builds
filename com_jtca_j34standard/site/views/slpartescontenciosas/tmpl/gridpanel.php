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
        'FIELD_NAME' => 'id_record',
        'FIELD_CODE_NAME' => 'id_record',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 22,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_RECORD
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) NOT NULL DEFAULT '0' id_record

                FIELD_NAME_LATEX=id\_record
                FIELD_CODE_NAME_LATEX=id\_record
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['id_record'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Interés Jurídico',
        'FIELD_CODE_NAME' => 'txt_ijuridico',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=TXT_IJURIDICO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL Interés Jurídico

                FIELD_NAME_LATEX=Inter\'es Jur\'i{}dico
                FIELD_CODE_NAME_LATEX=txt\_ijuridico
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['txt_ijuridico'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Interés Jurídico',
        'FIELD_CODE_NAME' => 'id_ijuridico',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 38,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_IJURIDICO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL Interés Jurídico

                FIELD_NAME_LATEX=Inter\'es Jur\'i{}dico
                FIELD_CODE_NAME_LATEX=id\_ijuridico
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['id_ijuridico'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'id_field',
        'FIELD_CODE_NAME' => 'id_field',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 22,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_FIELD
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) NOT NULL DEFAULT '0' id_field

                FIELD_NAME_LATEX=id\_field
                FIELD_CODE_NAME_LATEX=id\_field
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['id_field'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Es persona moral?',
        'FIELD_CODE_NAME' => 'isMoral',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 16,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ISMORAL
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TINYINT(1) DEFAULT NULL Es persona moral?

                FIELD_NAME_LATEX=Es persona moral?
                FIELD_CODE_NAME_LATEX=isMoral
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['isMoral'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'A. Paterno',
        'FIELD_CODE_NAME' => 'paterno',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=PATERNO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL A. Paterno

                FIELD_NAME_LATEX=A. Paterno
                FIELD_CODE_NAME_LATEX=paterno
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['paterno'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'A. Materno',
        'FIELD_CODE_NAME' => 'materno',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MATERNO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL A. Materno

                FIELD_NAME_LATEX=A. Materno
                FIELD_CODE_NAME_LATEX=materno
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['materno'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Nombre(s)',
        'FIELD_CODE_NAME' => 'nombre',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=NOMBRE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL Nombre(s)

                FIELD_NAME_LATEX=Nombre(s)
                FIELD_CODE_NAME_LATEX=nombre
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['nombre'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'CURP',
        'FIELD_CODE_NAME' => 'curp',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=CURP
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL CURP

                FIELD_NAME_LATEX=CURP
                FIELD_CODE_NAME_LATEX=curp
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['curp'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'RFC',
        'FIELD_CODE_NAME' => 'rfc',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=RFC
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL RFC

                FIELD_NAME_LATEX=RFC
                FIELD_CODE_NAME_LATEX=rfc
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['rfc'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Calle',
        'FIELD_CODE_NAME' => 'calle',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=CALLE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL Calle

                FIELD_NAME_LATEX=Calle
                FIELD_CODE_NAME_LATEX=calle
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['calle'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Número',
        'FIELD_CODE_NAME' => 'numero',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=NUMERO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL Número

                FIELD_NAME_LATEX=N\'umero
                FIELD_CODE_NAME_LATEX=numero
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['numero'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Colonia',
        'FIELD_CODE_NAME' => 'colonia',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=COLONIA
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL Colonia

                FIELD_NAME_LATEX=Colonia
                FIELD_CODE_NAME_LATEX=colonia
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['colonia'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'C.P.',
        'FIELD_CODE_NAME' => 'cp',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=CP
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL C.P.

                FIELD_NAME_LATEX=C.P.
                FIELD_CODE_NAME_LATEX=cp
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['cp'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Estado',
        'FIELD_CODE_NAME' => 'id_entidadf',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 38,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_ENTIDADF
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL Estado

                FIELD_NAME_LATEX=Estado
                FIELD_CODE_NAME_LATEX=id\_entidadf
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['id_entidadf'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Municipio',
        'FIELD_CODE_NAME' => 'municipio',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MUNICIPIO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL Municipio

                FIELD_NAME_LATEX=Municipio
                FIELD_CODE_NAME_LATEX=municipio
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['municipio'] = $field;
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
if ($this->params->get('save_history') AND $this->params->get('slpartecontenciosa_save_history'))
{
//	JHtml::_('behavior.modal', 'a.modal_jform_contenthistory');//creo que se carga con el botón versiones
	
	//hacer parametrizable data_id para que funcione versiones
	
	//$model	= JModelLegacy::getInstance('[%CompObject%]Form','[%ArchitectComp%]Model', array('ignore_request' => FALSE));
	$model	= JModelLegacy::getInstance('SlpartecontenciosaForm','JtcaModel', array('ignore_request' => FALSE));
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
						'url' => new JUri('index.php?option=com_jtca&view=slpartecontenciosaform&layout=edit&layout=edit&tmpl=component&id=1&function=on_collapseModal')
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
		title: 'Partes Contenciosas En Juicio',
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