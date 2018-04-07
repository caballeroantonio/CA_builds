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
        'FIELD_NAME' => 'Número',
        'FIELD_CODE_NAME' => 'numero',
        'FIELD_DESCRIPTION' => '<p>Número del expediente</p>
<p>@ToDo :</p>
<p>- required</p>
<p>- validaiones INT</p>',//<p>Número del expediente</p><br/><p>@ToDo :</p><br/><p>- required</p><br/><p>- validaiones INT</p>
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=NUMERO
                FIELD_INTRO=<p>Número del expediente</p><br/><p>@ToDo :</p><br/><p>- required</p><br/><p>- validaiones INT</p>
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) NOT NULL DEFAULT '' Número

                FIELD_NAME_LATEX=N\'umero
                FIELD_CODE_NAME_LATEX=numero
                FIELD_DBCOMMENT_LATEX=N\'umero del expediente@ToDo :- required- validaiones INT


    */
    $fields['numero'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Año',
        'FIELD_CODE_NAME' => 'ano',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 22,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ANO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL Año

                FIELD_NAME_LATEX=A\~no
                FIELD_CODE_NAME_LATEX=ano
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['ano'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Bis',
        'FIELD_CODE_NAME' => 'bis',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 22,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=BIS
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL Bis

                FIELD_NAME_LATEX=Bis
                FIELD_CODE_NAME_LATEX=bis
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['bis'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Número de recurso',
        'FIELD_CODE_NAME' => 'nrecurso',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 22,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=NRECURSO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL Número de recurso

                FIELD_NAME_LATEX=N\'umero de recurso
                FIELD_CODE_NAME_LATEX=nrecurso
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['nrecurso'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Tipo de archivo',
        'FIELD_CODE_NAME' => 'id_tipoarchivo',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 38,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_TIPOARCHIVO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL Tipo de archivo

                FIELD_NAME_LATEX=Tipo de archivo
                FIELD_CODE_NAME_LATEX=id\_tipoarchivo
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['id_tipoarchivo'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Tipo de juicio',
        'FIELD_CODE_NAME' => 'txt_tipojuicio',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=TXT_TIPOJUICIO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL Tipo de juicio

                FIELD_NAME_LATEX=Tipo de juicio
                FIELD_CODE_NAME_LATEX=txt\_tipojuicio
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['txt_tipojuicio'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Tipo de juicio',
        'FIELD_CODE_NAME' => 'id_tipojuicio',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 38,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_TIPOJUICIO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL Tipo de juicio

                FIELD_NAME_LATEX=Tipo de juicio
                FIELD_CODE_NAME_LATEX=id\_tipojuicio
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['id_tipojuicio'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Partes contenciosas',
        'FIELD_CODE_NAME' => 'partescontenciosas',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 42,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=PARTESCONTENCIOSAS
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` MEDIUMTEXT  Partes contenciosas

                FIELD_NAME_LATEX=Partes contenciosas
                FIELD_CODE_NAME_LATEX=partescontenciosas
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['partescontenciosas'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'id del WS de OPC',
        'FIELD_CODE_NAME' => 'id_opc',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 22,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_OPC
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL id del WS de OPC

                FIELD_NAME_LATEX=id del WS de OPC
                FIELD_CODE_NAME_LATEX=id\_opc
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['id_opc'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'respuesta del WS de OPC',
        'FIELD_CODE_NAME' => 'txt_opc',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 4,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=TXT_OPC
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TEXT DEFAULT NULL respuesta del WS de OPC

                FIELD_NAME_LATEX=respuesta del WS de OPC
                FIELD_CODE_NAME_LATEX=txt\_opc
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['txt_opc'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'DELITO',
        'FIELD_CODE_NAME' => 'delito',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=DELITO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL DELITO

                FIELD_NAME_LATEX=DELITO
                FIELD_CODE_NAME_LATEX=delito
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['delito'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Pena total o medida privativa',
        'FIELD_CODE_NAME' => 'pena',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=PENA
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL Pena total o medida privativa

                FIELD_NAME_LATEX=Pena total o medida privativa
                FIELD_CODE_NAME_LATEX=pena
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['pena'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Expediente de origen',
        'FIELD_CODE_NAME' => 'id_exp_orig',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 13,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_EXP_ORIG
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) UNSIGNED  DEFAULT NULL Expediente de origen

                FIELD_NAME_LATEX=Expediente de origen
                FIELD_CODE_NAME_LATEX=id\_exp\_orig
                FIELD_DBCOMMENT_LATEX=

                    {FIELD_LINK}
                    FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=E
                    FIELD_FOREIGN_OBJECT_UPPER=EXPEDIENTE

    */
    $fields['id_exp_orig'] = $field;
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
if ($this->params->get('save_history') AND $this->params->get('expediente_save_history'))
{
//	JHtml::_('behavior.modal', 'a.modal_jform_contenthistory');//creo que se carga con el botón versiones
	
	//hacer parametrizable data_id para que funcione versiones
	
	//$model	= JModelLegacy::getInstance('[%CompObject%]Form','[%ArchitectComp%]Model', array('ignore_request' => FALSE));
	$model	= JModelLegacy::getInstance('ExpedienteForm','JtcaModel', array('ignore_request' => FALSE));
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
						'url' => new JUri('index.php?option=com_jtca&view=expedienteform&layout=edit&layout=edit&tmpl=component&id=1&function=on_collapseModal')
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
		title: 'Expedientes',
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