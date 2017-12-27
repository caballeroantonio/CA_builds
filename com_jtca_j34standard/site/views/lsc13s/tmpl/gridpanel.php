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
        'FIELD_NAME' => 'Ponencia',
        'FIELD_CODE_NAME' => 'id_secretaria',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 18,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_SECRETARIA
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL Ponencia

                FIELD_NAME_LATEX=Ponencia
                FIELD_CODE_NAME_LATEX=id\_secretaria
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['id_secretaria'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'NOMBRE COMPLETO DEL SOLICITANTE (isMoral)',
        'FIELD_CODE_NAME' => 'field225_isMoral',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 41,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD225_ISMORAL
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TINYINT(1) NOT NULL DEFAULT '0' NOMBRE COMPLETO DEL SOLICITANTE (isMoral)

                FIELD_NAME_LATEX=NOMBRE COMPLETO DEL SOLICITANTE (isMoral)
                FIELD_CODE_NAME_LATEX=field225\_isMoral
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field225_isMoral'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'NOMBRE COMPLETO DEL SOLICITANTE (paterno)',
        'FIELD_CODE_NAME' => 'field225_paterno',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 41,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD225_PATERNO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL NOMBRE COMPLETO DEL SOLICITANTE (paterno)

                FIELD_NAME_LATEX=NOMBRE COMPLETO DEL SOLICITANTE (paterno)
                FIELD_CODE_NAME_LATEX=field225\_paterno
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field225_paterno'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'NOMBRE COMPLETO DEL SOLICITANTE (materno)',
        'FIELD_CODE_NAME' => 'field225_materno',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 41,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD225_MATERNO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL NOMBRE COMPLETO DEL SOLICITANTE (materno)

                FIELD_NAME_LATEX=NOMBRE COMPLETO DEL SOLICITANTE (materno)
                FIELD_CODE_NAME_LATEX=field225\_materno
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field225_materno'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'NOMBRE COMPLETO DEL SOLICITANTE (nombre)',
        'FIELD_CODE_NAME' => 'field225_nombre',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 41,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD225_NOMBRE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL NOMBRE COMPLETO DEL SOLICITANTE (nombre)

                FIELD_NAME_LATEX=NOMBRE COMPLETO DEL SOLICITANTE (nombre)
                FIELD_CODE_NAME_LATEX=field225\_nombre
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field225_nombre'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'AUTORIZADO POR QUÉ PARTE',
        'FIELD_CODE_NAME' => 'txt_field2283',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 40,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=TXT_FIELD2283
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL AUTORIZADO POR QUÉ PARTE

                FIELD_NAME_LATEX=AUTORIZADO POR QU\'E PARTE
                FIELD_CODE_NAME_LATEX=txt\_field2283
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['txt_field2283'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'AUTORIZADO POR QUÉ PARTE',
        'FIELD_CODE_NAME' => 'id_field2283',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 40,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_FIELD2283
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL AUTORIZADO POR QUÉ PARTE

                FIELD_NAME_LATEX=AUTORIZADO POR QU\'E PARTE
                FIELD_CODE_NAME_LATEX=id\_field2283
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['id_field2283'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Año j.',
        'FIELD_CODE_NAME' => 'anoj',
        'FIELD_DESCRIPTION' => '<p>Año judicial</p>',//<p>Año judicial</p>
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ANOJ
                FIELD_INTRO=<p>Año judicial</p>
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` YEAR(4) DEFAULT NULL Año j.

                FIELD_NAME_LATEX=A\~no j.
                FIELD_CODE_NAME_LATEX=anoj
                FIELD_DBCOMMENT_LATEX=A\~no judicial


    */
    $fields['anoj'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'NÚMERO DE TOCA',
        'FIELD_CODE_NAME' => 'id_expediente',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 33,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_EXPEDIENTE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL NÚMERO DE TOCA

                FIELD_NAME_LATEX=N\'UMERO DE TOCA
                FIELD_CODE_NAME_LATEX=id\_expediente
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['id_expediente'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'TIPO DE IDENTIFICACIÓN',
        'FIELD_CODE_NAME' => 'field227',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD227
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL TIPO DE IDENTIFICACIÓN

                FIELD_NAME_LATEX=TIPO DE IDENTIFICACI\'ON
                FIELD_CODE_NAME_LATEX=field227
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field227'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'NÚMERO DE IDENTIFICACIÓN',
        'FIELD_CODE_NAME' => 'field228',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD228
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL NÚMERO DE IDENTIFICACIÓN

                FIELD_NAME_LATEX=N\'UMERO DE IDENTIFICACI\'ON
                FIELD_CODE_NAME_LATEX=field228
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field228'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'HORA EN QUE SE PRESTA',
        'FIELD_CODE_NAME' => 'field229',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 36,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD229
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL HORA EN QUE SE PRESTA

                FIELD_NAME_LATEX=HORA EN QUE SE PRESTA
                FIELD_CODE_NAME_LATEX=field229
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field229'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'HORA EN QUE SE REGRESA',
        'FIELD_CODE_NAME' => 'field230',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 36,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD230
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL HORA EN QUE SE REGRESA

                FIELD_NAME_LATEX=HORA EN QUE SE REGRESA
                FIELD_CODE_NAME_LATEX=field230
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field230'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'FIRMA DEL SOLICITANTE',
        'FIELD_CODE_NAME' => 'field231',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 34,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD231
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL FIRMA DEL SOLICITANTE

                FIELD_NAME_LATEX=FIRMA DEL SOLICITANTE
                FIELD_CODE_NAME_LATEX=field231
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field231'] = $field;
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
if ($this->params->get('save_history') AND $this->params->get('lsc13_save_history'))
{
//	JHtml::_('behavior.modal', 'a.modal_jform_contenthistory');//creo que se carga con el botón versiones
	
	//hacer parametrizable data_id para que funcione versiones
	
	//$model	= JModelLegacy::getInstance('[%CompObject%]Form','[%ArchitectComp%]Model', array('ignore_request' => FALSE));
	$model	= JModelLegacy::getInstance('Lsc13Form','JtCaModel', array('ignore_request' => FALSE));
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
						'url' => new JUri('index.php?option=com_jtca&view=lsc13form&layout=edit&layout=edit&tmpl=component&id=1&function=on_collapseModal')
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
		title: 'PAPELETAS PARA EL PRÉSTAMO DE EXPEDIENTES',
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