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
        'FIELD_NAME' => 'fk_order_id',
        'FIELD_CODE_NAME' => 'fk_order_id',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 13,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FK_ORDER_ID
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) NOT NULL DEFAULT '0' fk_order_id

                FIELD_NAME_LATEX=fk\_order\_id
                FIELD_CODE_NAME_LATEX=fk\_order\_id
                FIELD_DBCOMMENT_LATEX=

                    {FIELD_LINK}
                    FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=O
                    FIELD_FOREIGN_OBJECT_UPPER=ORDER

    */
    $fields['fk_order_id'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'fk_user_id',
        'FIELD_CODE_NAME' => 'fk_user_id',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 13,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FK_USER_ID
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) NOT NULL DEFAULT '0' fk_user_id

                FIELD_NAME_LATEX=fk\_user\_id
                FIELD_CODE_NAME_LATEX=fk\_user\_id
                FIELD_DBCOMMENT_LATEX=

                    {FIELD_LINK}
                    FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=U
                    FIELD_FOREIGN_OBJECT_UPPER=USER

    */
    $fields['fk_user_id'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'fk_houses_htitle',
        'FIELD_CODE_NAME' => 'fk_houses_htitle',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FK_HOUSES_HTITLE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) NOT NULL DEFAULT '' fk_houses_htitle

                FIELD_NAME_LATEX=fk\_houses\_htitle
                FIELD_CODE_NAME_LATEX=fk\_houses\_htitle
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['fk_houses_htitle'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'email',
        'FIELD_CODE_NAME' => 'email',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=EMAIL
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) NOT NULL DEFAULT '' email

                FIELD_NAME_LATEX=email
                FIELD_CODE_NAME_LATEX=email
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['email'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'status',
        'FIELD_CODE_NAME' => 'status',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=STATUS
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) NOT NULL DEFAULT '' status

                FIELD_NAME_LATEX=status
                FIELD_CODE_NAME_LATEX=status
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['status'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'order_date',
        'FIELD_CODE_NAME' => 'order_date',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ORDER_DATE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL order_date

                FIELD_NAME_LATEX=order\_date
                FIELD_CODE_NAME_LATEX=order\_date
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['order_date'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'fk_house_id',
        'FIELD_CODE_NAME' => 'fk_house_id',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 13,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FK_HOUSE_ID
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) NOT NULL DEFAULT '0' fk_house_id

                FIELD_NAME_LATEX=fk\_house\_id
                FIELD_CODE_NAME_LATEX=fk\_house\_id
                FIELD_DBCOMMENT_LATEX=

                    {FIELD_LINK}
                    FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=H
                    FIELD_FOREIGN_OBJECT_UPPER=HOUSE

    */
    $fields['fk_house_id'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'txn_type',
        'FIELD_CODE_NAME' => 'txn_type',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=TXN_TYPE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) NOT NULL DEFAULT '' txn_type

                FIELD_NAME_LATEX=txn\_type
                FIELD_CODE_NAME_LATEX=txn\_type
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['txn_type'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'txn_id',
        'FIELD_CODE_NAME' => 'txn_id',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=TXN_ID
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) NOT NULL DEFAULT '' txn_id

                FIELD_NAME_LATEX=txn\_id
                FIELD_CODE_NAME_LATEX=txn\_id
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['txn_id'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'payer_id',
        'FIELD_CODE_NAME' => 'payer_id',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=PAYER_ID
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) NOT NULL DEFAULT '' payer_id

                FIELD_NAME_LATEX=payer\_id
                FIELD_CODE_NAME_LATEX=payer\_id
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['payer_id'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'payer_status',
        'FIELD_CODE_NAME' => 'payer_status',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=PAYER_STATUS
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) NOT NULL DEFAULT '' payer_status

                FIELD_NAME_LATEX=payer\_status
                FIELD_CODE_NAME_LATEX=payer\_status
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['payer_status'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'order_calculated_price',
        'FIELD_CODE_NAME' => 'order_calculated_price',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ORDER_CALCULATED_PRICE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) NOT NULL DEFAULT '' order_calculated_price

                FIELD_NAME_LATEX=order\_calculated\_price
                FIELD_CODE_NAME_LATEX=order\_calculated\_price
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['order_calculated_price'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'order_price',
        'FIELD_CODE_NAME' => 'order_price',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 22,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ORDER_PRICE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(11) DEFAULT NULL order_price

                FIELD_NAME_LATEX=order\_price
                FIELD_CODE_NAME_LATEX=order\_price
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['order_price'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'order_currency_code',
        'FIELD_CODE_NAME' => 'order_currency_code',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ORDER_CURRENCY_CODE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) NOT NULL DEFAULT '' order_currency_code

                FIELD_NAME_LATEX=order\_currency\_code
                FIELD_CODE_NAME_LATEX=order\_currency\_code
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['order_currency_code'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'payment_details',
        'FIELD_CODE_NAME' => 'payment_details',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 4,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=PAYMENT_DETAILS
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TEXT DEFAULT NULL payment_details

                FIELD_NAME_LATEX=payment\_details
                FIELD_CODE_NAME_LATEX=payment\_details
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['payment_details'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'paypal_paykay',
        'FIELD_CODE_NAME' => 'paypal_paykay',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=PAYPAL_PAYKAY
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) NOT NULL DEFAULT '' paypal_paykay

                FIELD_NAME_LATEX=paypal\_paykay
                FIELD_CODE_NAME_LATEX=paypal\_paykay
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['paypal_paykay'] = $field;
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
if ($this->params->get('save_history') AND $this->params->get('ordersdetail_save_history'))
{
//	JHtml::_('behavior.modal', 'a.modal_jform_contenthistory');//creo que se carga con el botón versiones
	
	//hacer parametrizable data_id para que funcione versiones
	
	//$model	= JModelLegacy::getInstance('[%CompObject%]Form','[%ArchitectComp%]Model', array('ignore_request' => FALSE));
	$model	= JModelLegacy::getInstance('OrdersDetailForm','RemcaModel', array('ignore_request' => FALSE));
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
						'url' => new JUri('index.php?option=com_remca&view=ordersdetailform&layout=edit&layout=edit&tmpl=component&id=1&function=on_collapseModal')
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
		title: 'Orders_details',
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