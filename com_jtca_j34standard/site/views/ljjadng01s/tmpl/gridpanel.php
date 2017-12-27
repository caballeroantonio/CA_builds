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
        'FIELD_NAME' => 'CAUSA',
        'FIELD_CODE_NAME' => 'id_expediente',
        'FIELD_DESCRIPTION' => '<p>@ToDo add CONSTRAINT id_expediente -&gt; jt_expediente</p>',//<p>@ToDo add CONSTRAINT id_expediente -&gt; jt_expediente</p>
        'FIELDTYPE_ID' => 33,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_EXPEDIENTE
                FIELD_INTRO=<p>@ToDo add CONSTRAINT id_expediente -&gt; jt_expediente</p>
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL CAUSA

                FIELD_NAME_LATEX=CAUSA
                FIELD_CODE_NAME_LATEX=id\_expediente
                FIELD_DBCOMMENT_LATEX=@ToDo add CONSTRAINT id\_expediente -\&gt; jt\_expediente


    */
    $fields['id_expediente'] = $field;
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
        'FIELD_NAME' => 'FECHA Y HORA EN QUE SE RECIBE EL ASUNTO',
        'FIELD_CODE_NAME' => 'field2',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 36,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD2
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL FECHA Y HORA EN QUE SE RECIBE EL ASUNTO

                FIELD_NAME_LATEX=FECHA Y HORA EN QUE SE RECIBE EL ASUNTO
                FIELD_CODE_NAME_LATEX=field2
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field2'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'AUTORIDAD REMITENTE',
        'FIELD_CODE_NAME' => 'txt_field2032',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 40,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=TXT_FIELD2032
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL AUTORIDAD REMITENTE

                FIELD_NAME_LATEX=AUTORIDAD REMITENTE
                FIELD_CODE_NAME_LATEX=txt\_field2032
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['txt_field2032'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'AUTORIDAD REMITENTE',
        'FIELD_CODE_NAME' => 'id_field2032',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 40,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_FIELD2032
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL AUTORIDAD REMITENTE

                FIELD_NAME_LATEX=AUTORIDAD REMITENTE
                FIELD_CODE_NAME_LATEX=id\_field2032
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['id_field2032'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'CONDUCTA TIPIFICADA COMO DELITO',
        'FIELD_CODE_NAME' => 'field6',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD6
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL CONDUCTA TIPIFICADA COMO DELITO

                FIELD_NAME_LATEX=CONDUCTA TIPIFICADA COMO DELITO
                FIELD_CODE_NAME_LATEX=field6
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field6'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'FUNCIÓN',
        'FIELD_CODE_NAME' => 'field7',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 38,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD7
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL FUNCIÓN

                FIELD_NAME_LATEX=FUNCI\'ON
                FIELD_CODE_NAME_LATEX=field7
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field7'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'REMISIÓN',
        'FIELD_CODE_NAME' => 'field8',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 38,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD8
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL REMISIÓN

                FIELD_NAME_LATEX=REMISI\'ON
                FIELD_CODE_NAME_LATEX=field8
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field8'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'FECHA DE VINCULACIÓN DEL PROCESO',
        'FIELD_CODE_NAME' => 'field9',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD9
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL FECHA DE VINCULACIÓN DEL PROCESO

                FIELD_NAME_LATEX=FECHA DE VINCULACI\'ON DEL PROCESO
                FIELD_CODE_NAME_LATEX=field9
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field9'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'CONDUCTA TIPIFICADA COMO DELITO MOTIVO DE LA VINCULACIÓN',
        'FIELD_CODE_NAME' => 'field10',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD10
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL CONDUCTA TIPIFICADA COMO DELITO MOTIVO DE LA VINCULACIÓN

                FIELD_NAME_LATEX=CONDUCTA TIPIFICADA COMO DELITO MOTIVO DE LA VINCULACI\'ON
                FIELD_CODE_NAME_LATEX=field10
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field10'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'ACUERDO REPARATORIO',
        'FIELD_CODE_NAME' => 'field11',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 38,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD11
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL ACUERDO REPARATORIO

                FIELD_NAME_LATEX=ACUERDO REPARATORIO
                FIELD_CODE_NAME_LATEX=field11
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field11'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'SUSPENSIÓN DE PROCESO A PRUEBA',
        'FIELD_CODE_NAME' => 'field12',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD12
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL SUSPENSIÓN DE PROCESO A PRUEBA

                FIELD_NAME_LATEX=SUSPENSI\'ON DE PROCESO A PRUEBA
                FIELD_CODE_NAME_LATEX=field12
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field12'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'FECHA DE AUDIENCIA INTERMEDIA',
        'FIELD_CODE_NAME' => 'field13',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD13
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL FECHA DE AUDIENCIA INTERMEDIA

                FIELD_NAME_LATEX=FECHA DE AUDIENCIA INTERMEDIA
                FIELD_CODE_NAME_LATEX=field13
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field13'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'JUICIO ABREVIADO',
        'FIELD_CODE_NAME' => 'field14',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD14
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL JUICIO ABREVIADO

                FIELD_NAME_LATEX=JUICIO ABREVIADO
                FIELD_CODE_NAME_LATEX=field14
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field14'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'OTRAS FORMAS DE CONCLUSIÓN',
        'FIELD_CODE_NAME' => 'field15',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD15
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL OTRAS FORMAS DE CONCLUSIÓN

                FIELD_NAME_LATEX=OTRAS FORMAS DE CONCLUSI\'ON
                FIELD_CODE_NAME_LATEX=field15
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field15'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'AUTO DE APERTURA',
        'FIELD_CODE_NAME' => 'field16',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD16
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL AUTO DE APERTURA

                FIELD_NAME_LATEX=AUTO DE APERTURA
                FIELD_CODE_NAME_LATEX=field16
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field16'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'FECHA DE AUDIENCIA',
        'FIELD_CODE_NAME' => 'field17',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD17
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL FECHA DE AUDIENCIA

                FIELD_NAME_LATEX=FECHA DE AUDIENCIA
                FIELD_CODE_NAME_LATEX=field17
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field17'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'FECHA DE SENTENCIA',
        'FIELD_CODE_NAME' => 'field18',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD18
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL FECHA DE SENTENCIA

                FIELD_NAME_LATEX=FECHA DE SENTENCIA
                FIELD_CODE_NAME_LATEX=field18
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field18'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'CONDENATORIA',
        'FIELD_CODE_NAME' => 'field19',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 16,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD19
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TINYINT(1) DEFAULT NULL CONDENATORIA

                FIELD_NAME_LATEX=CONDENATORIA
                FIELD_CODE_NAME_LATEX=field19
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field19'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'COMENTARIO',
        'FIELD_CODE_NAME' => 'field20',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD20
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL COMENTARIO

                FIELD_NAME_LATEX=COMENTARIO
                FIELD_CODE_NAME_LATEX=field20
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field20'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'ABSOLUTORIA',
        'FIELD_CODE_NAME' => 'field21',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 16,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD21
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TINYINT(1) DEFAULT NULL ABSOLUTORIA

                FIELD_NAME_LATEX=ABSOLUTORIA
                FIELD_CODE_NAME_LATEX=field21
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field21'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'COMENTARIO',
        'FIELD_CODE_NAME' => 'field22',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD22
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL COMENTARIO

                FIELD_NAME_LATEX=COMENTARIO
                FIELD_CODE_NAME_LATEX=field22
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field22'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'MIXTA',
        'FIELD_CODE_NAME' => 'field23',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 16,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD23
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TINYINT(1) DEFAULT NULL MIXTA

                FIELD_NAME_LATEX=MIXTA
                FIELD_CODE_NAME_LATEX=field23
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field23'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'COMENTARIO',
        'FIELD_CODE_NAME' => 'field24',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD24
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL COMENTARIO

                FIELD_NAME_LATEX=COMENTARIO
                FIELD_CODE_NAME_LATEX=field24
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field24'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'FECHA DEL ENGROSE DE LA SENTENCIA',
        'FIELD_CODE_NAME' => 'field25',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD25
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL FECHA DEL ENGROSE DE LA SENTENCIA

                FIELD_NAME_LATEX=FECHA DEL ENGROSE DE LA SENTENCIA
                FIELD_CODE_NAME_LATEX=field25
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field25'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'MEDIDAS IMPUESTAS Y DURACIÓN',
        'FIELD_CODE_NAME' => 'field26',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD26
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL MEDIDAS IMPUESTAS Y DURACIÓN

                FIELD_NAME_LATEX=MEDIDAS IMPUESTAS Y DURACI\'ON
                FIELD_CODE_NAME_LATEX=field26
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field26'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'REPARACIÓN DEL DAÑO MATERIAL',
        'FIELD_CODE_NAME' => 'field27',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 38,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD27
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL REPARACIÓN DEL DAÑO MATERIAL

                FIELD_NAME_LATEX=REPARACI\'ON DEL DA\~NO MATERIAL
                FIELD_CODE_NAME_LATEX=field27
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field27'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'REPARACIÓN DEL DAÑO MORAL',
        'FIELD_CODE_NAME' => 'field28',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 38,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD28
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL REPARACIÓN DEL DAÑO MORAL

                FIELD_NAME_LATEX=REPARACI\'ON DEL DA\~NO MORAL
                FIELD_CODE_NAME_LATEX=field28
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field28'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'REPARACIÓN DE PERJUICIOS',
        'FIELD_CODE_NAME' => 'field29',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 38,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD29
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL REPARACIÓN DE PERJUICIOS

                FIELD_NAME_LATEX=REPARACI\'ON DE PERJUICIOS
                FIELD_CODE_NAME_LATEX=field29
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field29'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'DECOMISO',
        'FIELD_CODE_NAME' => 'field30',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 16,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD30
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TINYINT(1) DEFAULT NULL DECOMISO

                FIELD_NAME_LATEX=DECOMISO
                FIELD_CODE_NAME_LATEX=field30
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field30'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'FECHA DE CUMPLIMIENTO DE LA MEDIDA',
        'FIELD_CODE_NAME' => 'field31',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD31
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL FECHA DE CUMPLIMIENTO DE LA MEDIDA

                FIELD_NAME_LATEX=FECHA DE CUMPLIMIENTO DE LA MEDIDA
                FIELD_CODE_NAME_LATEX=field31
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field31'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'OTRAS FORMAS DE TERMINACIÓN',
        'FIELD_CODE_NAME' => 'field32',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD32
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL OTRAS FORMAS DE TERMINACIÓN

                FIELD_NAME_LATEX=OTRAS FORMAS DE TERMINACI\'ON
                FIELD_CODE_NAME_LATEX=field32
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field32'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'FECHA DE CONCLUSIÓN DE LA CAUSA',
        'FIELD_CODE_NAME' => 'field33',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD33
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL FECHA DE CONCLUSIÓN DE LA CAUSA

                FIELD_NAME_LATEX=FECHA DE CONCLUSI\'ON DE LA CAUSA
                FIELD_CODE_NAME_LATEX=field33
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field33'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'MEDIDAS IMPUESTAS Y DURACIÓN',
        'FIELD_CODE_NAME' => 'field34',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD34
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL MEDIDAS IMPUESTAS Y DURACIÓN

                FIELD_NAME_LATEX=MEDIDAS IMPUESTAS Y DURACI\'ON
                FIELD_CODE_NAME_LATEX=field34
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field34'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'REPARACIÓN DEL DAÑO MATERIAL',
        'FIELD_CODE_NAME' => 'field35',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 38,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD35
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL REPARACIÓN DEL DAÑO MATERIAL

                FIELD_NAME_LATEX=REPARACI\'ON DEL DA\~NO MATERIAL
                FIELD_CODE_NAME_LATEX=field35
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field35'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'REPARACIÓN DEL DAÑO MORAL',
        'FIELD_CODE_NAME' => 'field36',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 38,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD36
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL REPARACIÓN DEL DAÑO MORAL

                FIELD_NAME_LATEX=REPARACI\'ON DEL DA\~NO MORAL
                FIELD_CODE_NAME_LATEX=field36
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field36'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'REPARACIÓN DE PERJUICIOS',
        'FIELD_CODE_NAME' => 'field37',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 38,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD37
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL REPARACIÓN DE PERJUICIOS

                FIELD_NAME_LATEX=REPARACI\'ON DE PERJUICIOS
                FIELD_CODE_NAME_LATEX=field37
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field37'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'DESTRUCCIÓN DE OBJETOS',
        'FIELD_CODE_NAME' => 'field38',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 16,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD38
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TINYINT(1) DEFAULT NULL DESTRUCCIÓN DE OBJETOS

                FIELD_NAME_LATEX=DESTRUCCI\'ON DE OBJETOS
                FIELD_CODE_NAME_LATEX=field38
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field38'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'FECHA DE CUMPLIMIENTO DE LA MEDIDA',
        'FIELD_CODE_NAME' => 'field39',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD39
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL FECHA DE CUMPLIMIENTO DE LA MEDIDA

                FIELD_NAME_LATEX=FECHA DE CUMPLIMIENTO DE LA MEDIDA
                FIELD_CODE_NAME_LATEX=field39
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field39'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'FECHA DE CONCLUSIÓN DE LA CAUSA',
        'FIELD_CODE_NAME' => 'field40',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD40
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL FECHA DE CONCLUSIÓN DE LA CAUSA

                FIELD_NAME_LATEX=FECHA DE CONCLUSI\'ON DE LA CAUSA
                FIELD_CODE_NAME_LATEX=field40
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field40'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'OBSERVACIONES',
        'FIELD_CODE_NAME' => 'field42',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 4,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FIELD42
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TEXT DEFAULT NULL OBSERVACIONES

                FIELD_NAME_LATEX=OBSERVACIONES
                FIELD_CODE_NAME_LATEX=field42
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['field42'] = $field;
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
if ($this->params->get('save_history') AND $this->params->get('ljjadng01_save_history'))
{
//	JHtml::_('behavior.modal', 'a.modal_jform_contenthistory');//creo que se carga con el botón versiones
	
	//hacer parametrizable data_id para que funcione versiones
	
	//$model	= JModelLegacy::getInstance('[%CompObject%]Form','[%ArchitectComp%]Model', array('ignore_request' => FALSE));
	$model	= JModelLegacy::getInstance('Ljjadng01Form','JtCaModel', array('ignore_request' => FALSE));
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
						'url' => new JUri('index.php?option=com_jtca&view=ljjadng01form&layout=edit&layout=edit&tmpl=component&id=1&function=on_collapseModal')
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
		title: 'LIBRO DE GOBIERNO',
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