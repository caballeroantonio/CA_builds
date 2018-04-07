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
        'FIELD_NAME' => 'FECHA DE EXPEDICIÓN',
        'FIELD_CODE_NAME' => 'sfield5',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SFIELD5
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL FECHA DE EXPEDICIÓN

                FIELD_NAME_LATEX=FECHA DE EXPEDICI\'ON
                FIELD_CODE_NAME_LATEX=sfield5
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sfield5'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'FECHA  DE INGRESO',
        'FIELD_CODE_NAME' => 'sfield6',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SFIELD6
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL FECHA  DE INGRESO

                FIELD_NAME_LATEX=FECHA  DE INGRESO
                FIELD_CODE_NAME_LATEX=sfield6
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sfield6'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'No DE CERTIFICADO O DOCUMENTO',
        'FIELD_CODE_NAME' => 'sfield7',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SFIELD7
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL No DE CERTIFICADO O DOCUMENTO

                FIELD_NAME_LATEX=No DE CERTIFICADO O DOCUMENTO
                FIELD_CODE_NAME_LATEX=sfield7
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sfield7'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'IMPORTE DEL CERTIFICADO O DOCUMENTO',
        'FIELD_CODE_NAME' => 'sfield8',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 37,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SFIELD8
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DECIMAL(11,2) DEFAULT NULL IMPORTE DEL CERTIFICADO O DOCUMENTO

                FIELD_NAME_LATEX=IMPORTE DEL CERTIFICADO O DOCUMENTO
                FIELD_CODE_NAME_LATEX=sfield8
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sfield8'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'INSTITUCIÓN QUE LO EXPIDE',
        'FIELD_CODE_NAME' => 'sfield9',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SFIELD9
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL INSTITUCIÓN QUE LO EXPIDE

                FIELD_NAME_LATEX=INSTITUCI\'ON QUE LO EXPIDE
                FIELD_CODE_NAME_LATEX=sfield9
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sfield9'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'NOMBRE DEL BENEFICIARIO (isMoral)',
        'FIELD_CODE_NAME' => 'sfield10_isMoral',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 41,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SFIELD10_ISMORAL
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TINYINT(1) NOT NULL DEFAULT '0' NOMBRE DEL BENEFICIARIO (isMoral)

                FIELD_NAME_LATEX=NOMBRE DEL BENEFICIARIO (isMoral)
                FIELD_CODE_NAME_LATEX=sfield10\_isMoral
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sfield10_isMoral'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'NOMBRE DEL BENEFICIARIO (paterno)',
        'FIELD_CODE_NAME' => 'sfield10_paterno',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 41,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SFIELD10_PATERNO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL NOMBRE DEL BENEFICIARIO (paterno)

                FIELD_NAME_LATEX=NOMBRE DEL BENEFICIARIO (paterno)
                FIELD_CODE_NAME_LATEX=sfield10\_paterno
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sfield10_paterno'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'NOMBRE DEL BENEFICIARIO (materno)',
        'FIELD_CODE_NAME' => 'sfield10_materno',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 41,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SFIELD10_MATERNO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL NOMBRE DEL BENEFICIARIO (materno)

                FIELD_NAME_LATEX=NOMBRE DEL BENEFICIARIO (materno)
                FIELD_CODE_NAME_LATEX=sfield10\_materno
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sfield10_materno'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'NOMBRE DEL BENEFICIARIO (nombre)',
        'FIELD_CODE_NAME' => 'sfield10_nombre',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 41,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SFIELD10_NOMBRE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL NOMBRE DEL BENEFICIARIO (nombre)

                FIELD_NAME_LATEX=NOMBRE DEL BENEFICIARIO (nombre)
                FIELD_CODE_NAME_LATEX=sfield10\_nombre
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sfield10_nombre'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'ASIENTO DE CAJA DEL FOLIO',
        'FIELD_CODE_NAME' => 'sfield11',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SFIELD11
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL ASIENTO DE CAJA DEL FOLIO

                FIELD_NAME_LATEX=ASIENTO DE CAJA DEL FOLIO
                FIELD_CODE_NAME_LATEX=sfield11
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sfield11'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'FECHA DE ENTREGA',
        'FIELD_CODE_NAME' => 'sfield12',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SFIELD12
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL FECHA DE ENTREGA

                FIELD_NAME_LATEX=FECHA DE ENTREGA
                FIELD_CODE_NAME_LATEX=sfield12
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sfield12'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'CONCEPTO',
        'FIELD_CODE_NAME' => 'sfield13',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SFIELD13
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL CONCEPTO

                FIELD_NAME_LATEX=CONCEPTO
                FIELD_CODE_NAME_LATEX=sfield13
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sfield13'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'CARÁCTER CON EL QUE RECIBE',
        'FIELD_CODE_NAME' => 'sfield14',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SFIELD14
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL CARÁCTER CON EL QUE RECIBE

                FIELD_NAME_LATEX=CAR\'ACTER CON EL QUE RECIBE
                FIELD_CODE_NAME_LATEX=sfield14
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sfield14'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'IDENTIFICACIÓN',
        'FIELD_CODE_NAME' => 'sfield15',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SFIELD15
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL IDENTIFICACIÓN

                FIELD_NAME_LATEX=IDENTIFICACI\'ON
                FIELD_CODE_NAME_LATEX=sfield15
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sfield15'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'FIRMA DEL BENEFICIARIO',
        'FIELD_CODE_NAME' => 'sfield16',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 34,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SFIELD16
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL FIRMA DEL BENEFICIARIO

                FIELD_NAME_LATEX=FIRMA DEL BENEFICIARIO
                FIELD_CODE_NAME_LATEX=sfield16
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sfield16'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'DEL JUEZ',
        'FIELD_CODE_NAME' => 'sfield17',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 35,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SFIELD17
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL DEL JUEZ

                FIELD_NAME_LATEX=DEL JUEZ
                FIELD_CODE_NAME_LATEX=sfield17
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sfield17'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'DEL SECRETARIO',
        'FIELD_CODE_NAME' => 'sfield18',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 35,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SFIELD18
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL DEL SECRETARIO

                FIELD_NAME_LATEX=DEL SECRETARIO
                FIELD_CODE_NAME_LATEX=sfield18
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sfield18'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'OBSERVACIONES',
        'FIELD_CODE_NAME' => 'sfield19',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 4,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SFIELD19
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TEXT DEFAULT NULL OBSERVACIONES

                FIELD_NAME_LATEX=OBSERVACIONES
                FIELD_CODE_NAME_LATEX=sfield19
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sfield19'] = $field;
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
if ($this->params->get('save_history') AND $this->params->get('sldepjoc03_save_history'))
{
//	JHtml::_('behavior.modal', 'a.modal_jform_contenthistory');//creo que se carga con el botón versiones
	
	//hacer parametrizable data_id para que funcione versiones
	
	//$model	= JModelLegacy::getInstance('[%CompObject%]Form','[%ArchitectComp%]Model', array('ignore_request' => FALSE));
	$model	= JModelLegacy::getInstance('SldepJoc03Form','JtcaModel', array('ignore_request' => FALSE));
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
						'url' => new JUri('index.php?option=com_jtca&view=sldepjoc03form&layout=edit&layout=edit&tmpl=component&id=1&function=on_collapseModal')
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
		title: 'CERTIFICADO DE EGRESOS Del LIBRO DE CERTIFICADO DE',
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