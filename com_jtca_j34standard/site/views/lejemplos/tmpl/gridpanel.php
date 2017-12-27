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
        'FIELD_DESCRIPTION' => '<p>@ToDo add CONSTRAINT id_expediente -&gt; jt_expediente</p>',//<p>@ToDo add CONSTRAINT id_expediente -&gt; jt_expediente</p>
        'FIELDTYPE_ID' => 33,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_EXPEDIENTE
                FIELD_INTRO=<p>@ToDo add CONSTRAINT id_expediente -&gt; jt_expediente</p>
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL Expediente

                FIELD_NAME_LATEX=Expediente
                FIELD_CODE_NAME_LATEX=id\_expediente
                FIELD_DBCOMMENT_LATEX=@ToDo add CONSTRAINT id\_expediente -\&gt; jt\_expediente


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
        'FIELD_NAME' => 'my boolean',
        'FIELD_CODE_NAME' => 'my_boolean',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 16,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MY_BOOLEAN
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TINYINT(1) DEFAULT NULL my boolean

                FIELD_NAME_LATEX=my boolean
                FIELD_CODE_NAME_LATEX=my\_boolean
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['my_boolean'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'my int',
        'FIELD_CODE_NAME' => 'my_int',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 22,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MY_INT
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL my int

                FIELD_NAME_LATEX=my int
                FIELD_CODE_NAME_LATEX=my\_int
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['my_int'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'my currency',
        'FIELD_CODE_NAME' => 'my_currency',
        'FIELD_DESCRIPTION' => '<p>- Numeros flotantes de 2 digitos, con preferencias en mysql settings</p>
<p>- @ToDo - cambiar el campo de texto del front end</p>',//<p>- Numeros flotantes de 2 digitos, con preferencias en mysql settings</p><br/><p>- @ToDo - cambiar el campo de texto del front end</p>
        'FIELDTYPE_ID' => 37,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MY_CURRENCY
                FIELD_INTRO=<p>- Numeros flotantes de 2 digitos, con preferencias en mysql settings</p><br/><p>- @ToDo - cambiar el campo de texto del front end</p>
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DECIMAL(11,2) DEFAULT NULL my currency

                FIELD_NAME_LATEX=my currency
                FIELD_CODE_NAME_LATEX=my\_currency
                FIELD_DBCOMMENT_LATEX=- Numeros flotantes de 2 digitos, con preferencias en mysql settings- @ToDo - cambiar el campo de texto del front end


    */
    $fields['my_currency'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'my date',
        'FIELD_CODE_NAME' => 'my_date',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MY_DATE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL my date

                FIELD_NAME_LATEX=my date
                FIELD_CODE_NAME_LATEX=my\_date
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['my_date'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'my datetime',
        'FIELD_CODE_NAME' => 'my_datetime',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 36,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MY_DATETIME
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL my datetime

                FIELD_NAME_LATEX=my datetime
                FIELD_CODE_NAME_LATEX=my\_datetime
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['my_datetime'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'my var45',
        'FIELD_CODE_NAME' => 'my_var45',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MY_VAR45
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL my var45

                FIELD_NAME_LATEX=my var45
                FIELD_CODE_NAME_LATEX=my\_var45
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['my_var45'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Expediente',
        'FIELD_CODE_NAME' => 'txt_expediente',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=TXT_EXPEDIENTE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL Expediente

                FIELD_NAME_LATEX=Expediente
                FIELD_CODE_NAME_LATEX=txt\_expediente
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['txt_expediente'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'my var255',
        'FIELD_CODE_NAME' => 'my_var255',
        'FIELD_DESCRIPTION' => '<p>Ejemplo varchar 255</p>',//<p>Ejemplo varchar 255</p>
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MY_VAR255
                FIELD_INTRO=<p>Ejemplo varchar 255</p>
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL my var255

                FIELD_NAME_LATEX=my var255
                FIELD_CODE_NAME_LATEX=my\_var255
                FIELD_DBCOMMENT_LATEX=Ejemplo varchar 255


    */
    $fields['my_var255'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'txt_my_suggest',
        'FIELD_CODE_NAME' => 'txt_my_suggest',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 40,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=TXT_MY_SUGGEST
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL txt_my_suggest

                FIELD_NAME_LATEX=txt\_my\_suggest
                FIELD_CODE_NAME_LATEX=txt\_my\_suggest
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['txt_my_suggest'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'my multiline',
        'FIELD_CODE_NAME' => 'my_multiline',
        'FIELD_DESCRIPTION' => '<p>@ToDo  cambiar el sql que pone TEXT(255)</p>',//<p>@ToDo  cambiar el sql que pone TEXT(255)</p>
        'FIELDTYPE_ID' => 4,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MY_MULTILINE
                FIELD_INTRO=<p>@ToDo  cambiar el sql que pone TEXT(255)</p>
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TEXT DEFAULT NULL my multiline

                FIELD_NAME_LATEX=my multiline
                FIELD_CODE_NAME_LATEX=my\_multiline
                FIELD_DBCOMMENT_LATEX=@ToDo  cambiar el sql que pone TEXT(255)


    */
    $fields['my_multiline'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'my ref2',
        'FIELD_CODE_NAME' => 'my_ref2',
        'FIELD_DESCRIPTION' => '<p>@ToDo poner constaints</p>
<p> </p>
<p>    INDEX `c3\_10\_idx` (`my\_ref2` ASC),<br />    CONSTRAINT `c3\_10`<br />        FOREIGN KEY (`my\_ref2`)<br />        REFERENCES `jtc\_general` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        ,</p>',//<p>@ToDo poner constaints</p><br/><p> </p><br/><p>    INDEX `c3\_10\_idx` (`my\_ref2` ASC),<br />    CONSTRAINT `c3\_10`<br />        FOREIGN KEY (`my\_ref2`)<br />        REFERENCES `jtc\_general` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        ,</p>
        'FIELDTYPE_ID' => 38,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MY_REF2
                FIELD_INTRO=<p>@ToDo poner constaints</p><br/><p> </p><br/><p>    INDEX `c3\_10\_idx` (`my\_ref2` ASC),<br />    CONSTRAINT `c3\_10`<br />        FOREIGN KEY (`my\_ref2`)<br />        REFERENCES `jtc\_general` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        ,</p>
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL my ref2

                FIELD_NAME_LATEX=my ref2
                FIELD_CODE_NAME_LATEX=my\_ref2
                FIELD_DBCOMMENT_LATEX=@ToDo poner constaints     INDEX `c3\textbackslash \textbackslash \_10\textbackslash \textbackslash \_idx` (`my\textbackslash \textbackslash \_ref2` ASC),    CONSTRAINT `c3\textbackslash \textbackslash \_10`        FOREIGN KEY (`my\textbackslash \textbackslash \_ref2`)        REFERENCES `jtc\textbackslash \textbackslash \_general` (`id`)        ON DELETE RESTRICT        ON UPDATE CASCADE         ,


    */
    $fields['my_ref2'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'my ref',
        'FIELD_CODE_NAME' => 'my_ref',
        'FIELD_DESCRIPTION' => '<p>Campo de referencia a un catálogo</p>
<p>@ToDo agregar constraints</p>
<p>    INDEX `c3\_1924\_idx` (`my\_ref` ASC),<br />    CONSTRAINT `c3\_1924`<br />        FOREIGN KEY (`my\_ref`)<br />        REFERENCES `jtc\_materia` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        ,</p>',//<p>Campo de referencia a un catálogo</p><br/><p>@ToDo agregar constraints</p><br/><p>    INDEX `c3\_1924\_idx` (`my\_ref` ASC),<br />    CONSTRAINT `c3\_1924`<br />        FOREIGN KEY (`my\_ref`)<br />        REFERENCES `jtc\_materia` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        ,</p>
        'FIELDTYPE_ID' => 38,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MY_REF
                FIELD_INTRO=<p>Campo de referencia a un catálogo</p><br/><p>@ToDo agregar constraints</p><br/><p>    INDEX `c3\_1924\_idx` (`my\_ref` ASC),<br />    CONSTRAINT `c3\_1924`<br />        FOREIGN KEY (`my\_ref`)<br />        REFERENCES `jtc\_materia` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        ,</p>
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL my ref

                FIELD_NAME_LATEX=my ref
                FIELD_CODE_NAME_LATEX=my\_ref
                FIELD_DBCOMMENT_LATEX=Campo de referencia a un cat\'alogo@ToDo agregar constraints    INDEX `c3\textbackslash \textbackslash \_1924\textbackslash \textbackslash \_idx` (`my\textbackslash \textbackslash \_ref` ASC),    CONSTRAINT `c3\textbackslash \textbackslash \_1924`        FOREIGN KEY (`my\textbackslash \textbackslash \_ref`)        REFERENCES `jtc\textbackslash \textbackslash \_materia` (`id`)        ON DELETE RESTRICT        ON UPDATE CASCADE         ,


    */
    $fields['my_ref'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'id_my_suggest',
        'FIELD_CODE_NAME' => 'id_my_suggest',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 40,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_MY_SUGGEST
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL id_my_suggest

                FIELD_NAME_LATEX=id\_my\_suggest
                FIELD_CODE_NAME_LATEX=id\_my\_suggest
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['id_my_suggest'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'my NFempleado',
        'FIELD_CODE_NAME' => 'my_NFempleado',
        'FIELD_DESCRIPTION' => '<p>@ToDo Debiera ser un campo int que hace referencia a un archivo</p>
<pre id="line1"><br /><br />`field14` INT NULL COMMENT 'id Firma interna',	
<span id="line74"></span>	INDEX `c3\_11\_idx` (`field14` ASC),
<span id="line75"></span>	CONSTRAINT `c3\_11`
<span id="line76"></span>		FOREIGN KEY (`field14`)
<span id="line77"></span>		REFERENCES `jt\_uploadedfiles` (`id`)
<span id="line78"></span>		ON DELETE RESTRICT
<span id="line79"></span>		ON UPDATE CASCADE </pre>',//<p>@ToDo Debiera ser un campo int que hace referencia a un archivo</p><br/><pre id=&quot;line1&quot;><br /><br />`field14` INT NULL COMMENT 'id Firma interna',	<br/><span id=&quot;line74&quot;></span>	INDEX `c3\_11\_idx` (`field14` ASC),<br/><span id=&quot;line75&quot;></span>	CONSTRAINT `c3\_11`<br/><span id=&quot;line76&quot;></span>		FOREIGN KEY (`field14`)<br/><span id=&quot;line77&quot;></span>		REFERENCES `jt\_uploadedfiles` (`id`)<br/><span id=&quot;line78&quot;></span>		ON DELETE RESTRICT<br/><span id=&quot;line79&quot;></span>		ON UPDATE CASCADE </pre>
        'FIELDTYPE_ID' => 35,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MY_NFEMPLEADO
                FIELD_INTRO=<p>@ToDo Debiera ser un campo int que hace referencia a un archivo</p><br/><pre id=&quot;line1&quot;><br /><br />`field14` INT NULL COMMENT 'id Firma interna',	<br/><span id=&quot;line74&quot;></span>	INDEX `c3\_11\_idx` (`field14` ASC),<br/><span id=&quot;line75&quot;></span>	CONSTRAINT `c3\_11`<br/><span id=&quot;line76&quot;></span>		FOREIGN KEY (`field14`)<br/><span id=&quot;line77&quot;></span>		REFERENCES `jt\_uploadedfiles` (`id`)<br/><span id=&quot;line78&quot;></span>		ON DELETE RESTRICT<br/><span id=&quot;line79&quot;></span>		ON UPDATE CASCADE </pre>
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL my NFempleado

                FIELD_NAME_LATEX=my NFempleado
                FIELD_CODE_NAME_LATEX=my\_NFempleado
                FIELD_DBCOMMENT_LATEX=@ToDo Debiera ser un campo int que hace referencia a un archivo`field14` INT NULL COMMENT \textbackslash 'id Firma interna\textbackslash ',		INDEX `c3\textbackslash \textbackslash \_11\textbackslash \textbackslash \_idx` (`field14` ASC),	CONSTRAINT `c3\textbackslash \textbackslash \_11`		FOREIGN KEY (`field14`)		REFERENCES `jt\textbackslash \textbackslash \_uploadedfiles` (`id`)		ON DELETE RESTRICT		ON UPDATE CASCADE 


    */
    $fields['my_NFempleado'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'my Fexterna',
        'FIELD_CODE_NAME' => 'my_fexterna',
        'FIELD_DESCRIPTION' => '<p>@ToDo debieran ser 2 campos int, uno para huella y otro para firma</p>
<pre id="line1"><br /><br />    `my\_fexterna` INT NULL COMMENT 'id\_firma Firma externa',<br />    INDEX `c3\_14\_idx` (`my\_fexterna` ASC),<br />    CONSTRAINT `c3\_14`<br />        FOREIGN KEY (`my\_fexterna`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE,<br />    `my\_fexternah` INT NULL COMMENT 'id\_huella Firma externa',<br />    INDEX `c3\_14h\_idx` (`my\_fexternah` ASC),<br />    CONSTRAINT `c3\_14h`<br />        FOREIGN KEY (`my\_fexternah`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        , </pre>',//<p>@ToDo debieran ser 2 campos int, uno para huella y otro para firma</p><br/><pre id=&quot;line1&quot;><br /><br />    `my\_fexterna` INT NULL COMMENT 'id\_firma Firma externa',<br />    INDEX `c3\_14\_idx` (`my\_fexterna` ASC),<br />    CONSTRAINT `c3\_14`<br />        FOREIGN KEY (`my\_fexterna`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE,<br />    `my\_fexternah` INT NULL COMMENT 'id\_huella Firma externa',<br />    INDEX `c3\_14h\_idx` (`my\_fexternah` ASC),<br />    CONSTRAINT `c3\_14h`<br />        FOREIGN KEY (`my\_fexternah`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        , </pre>
        'FIELDTYPE_ID' => 34,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MY_FEXTERNA
                FIELD_INTRO=<p>@ToDo debieran ser 2 campos int, uno para huella y otro para firma</p><br/><pre id=&quot;line1&quot;><br /><br />    `my\_fexterna` INT NULL COMMENT 'id\_firma Firma externa',<br />    INDEX `c3\_14\_idx` (`my\_fexterna` ASC),<br />    CONSTRAINT `c3\_14`<br />        FOREIGN KEY (`my\_fexterna`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE,<br />    `my\_fexternah` INT NULL COMMENT 'id\_huella Firma externa',<br />    INDEX `c3\_14h\_idx` (`my\_fexternah` ASC),<br />    CONSTRAINT `c3\_14h`<br />        FOREIGN KEY (`my\_fexternah`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        , </pre>
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL my Fexterna

                FIELD_NAME_LATEX=my Fexterna
                FIELD_CODE_NAME_LATEX=my\_fexterna
                FIELD_DBCOMMENT_LATEX=@ToDo debieran ser 2 campos int, uno para huella y otro para firma    `my\textbackslash \textbackslash \_fexterna` INT NULL COMMENT \textbackslash 'id\textbackslash \textbackslash \_firma Firma externa\textbackslash ',    INDEX `c3\textbackslash \textbackslash \_14\textbackslash \textbackslash \_idx` (`my\textbackslash \textbackslash \_fexterna` ASC),    CONSTRAINT `c3\textbackslash \textbackslash \_14`        FOREIGN KEY (`my\textbackslash \textbackslash \_fexterna`)        REFERENCES `jt\textbackslash \textbackslash \_uploadedfiles` (`id`)        ON DELETE RESTRICT        ON UPDATE CASCADE,    `my\textbackslash \textbackslash \_fexternah` INT NULL COMMENT \textbackslash 'id\textbackslash \textbackslash \_huella Firma externa\textbackslash ',    INDEX `c3\textbackslash \textbackslash \_14h\textbackslash \textbackslash \_idx` (`my\textbackslash \textbackslash \_fexternah` ASC),    CONSTRAINT `c3\textbackslash \textbackslash \_14h`        FOREIGN KEY (`my\textbackslash \textbackslash \_fexternah`)        REFERENCES `jt\textbackslash \textbackslash \_uploadedfiles` (`id`)        ON DELETE RESTRICT        ON UPDATE CASCADE         , 


    */
    $fields['my_fexterna'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'my Hexterna',
        'FIELD_CODE_NAME' => 'my_hexterna',
        'FIELD_DESCRIPTION' => '<p>@ToDo debieran ser 2 campos int, uno para huella y otro para firma</p>
<pre id="line1"><br /><br />    `my\_fexterna` INT NULL COMMENT 'id\_firma Firma externa',<br />    INDEX `c3\_14\_idx` (`my\_fexterna` ASC),<br />    CONSTRAINT `c3\_14`<br />        FOREIGN KEY (`my\_fexterna`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE,<br />    `my\_fexternah` INT NULL COMMENT 'id\_huella Firma externa',<br />    INDEX `c3\_14h\_idx` (`my\_fexternah` ASC),<br />    CONSTRAINT `c3\_14h`<br />        FOREIGN KEY (`my\_fexternah`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        , </pre>',//<p>@ToDo debieran ser 2 campos int, uno para huella y otro para firma</p><br/><pre id=&quot;line1&quot;><br /><br />    `my\_fexterna` INT NULL COMMENT 'id\_firma Firma externa',<br />    INDEX `c3\_14\_idx` (`my\_fexterna` ASC),<br />    CONSTRAINT `c3\_14`<br />        FOREIGN KEY (`my\_fexterna`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE,<br />    `my\_fexternah` INT NULL COMMENT 'id\_huella Firma externa',<br />    INDEX `c3\_14h\_idx` (`my\_fexternah` ASC),<br />    CONSTRAINT `c3\_14h`<br />        FOREIGN KEY (`my\_fexternah`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        , </pre>
        'FIELDTYPE_ID' => 39,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MY_HEXTERNA
                FIELD_INTRO=<p>@ToDo debieran ser 2 campos int, uno para huella y otro para firma</p><br/><pre id=&quot;line1&quot;><br /><br />    `my\_fexterna` INT NULL COMMENT 'id\_firma Firma externa',<br />    INDEX `c3\_14\_idx` (`my\_fexterna` ASC),<br />    CONSTRAINT `c3\_14`<br />        FOREIGN KEY (`my\_fexterna`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE,<br />    `my\_fexternah` INT NULL COMMENT 'id\_huella Firma externa',<br />    INDEX `c3\_14h\_idx` (`my\_fexternah` ASC),<br />    CONSTRAINT `c3\_14h`<br />        FOREIGN KEY (`my\_fexternah`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        , </pre>
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) DEFAULT NULL my Hexterna

                FIELD_NAME_LATEX=my Hexterna
                FIELD_CODE_NAME_LATEX=my\_hexterna
                FIELD_DBCOMMENT_LATEX=@ToDo debieran ser 2 campos int, uno para huella y otro para firma    `my\textbackslash \textbackslash \_fexterna` INT NULL COMMENT \textbackslash 'id\textbackslash \textbackslash \_firma Firma externa\textbackslash ',    INDEX `c3\textbackslash \textbackslash \_14\textbackslash \textbackslash \_idx` (`my\textbackslash \textbackslash \_fexterna` ASC),    CONSTRAINT `c3\textbackslash \textbackslash \_14`        FOREIGN KEY (`my\textbackslash \textbackslash \_fexterna`)        REFERENCES `jt\textbackslash \textbackslash \_uploadedfiles` (`id`)        ON DELETE RESTRICT        ON UPDATE CASCADE,    `my\textbackslash \textbackslash \_fexternah` INT NULL COMMENT \textbackslash 'id\textbackslash \textbackslash \_huella Firma externa\textbackslash ',    INDEX `c3\textbackslash \textbackslash \_14h\textbackslash \textbackslash \_idx` (`my\textbackslash \textbackslash \_fexternah` ASC),    CONSTRAINT `c3\textbackslash \textbackslash \_14h`        FOREIGN KEY (`my\textbackslash \textbackslash \_fexternah`)        REFERENCES `jt\textbackslash \textbackslash \_uploadedfiles` (`id`)        ON DELETE RESTRICT        ON UPDATE CASCADE         , 


    */
    $fields['my_hexterna'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'my parent',
        'FIELD_CODE_NAME' => 'my_parent',
        'FIELD_DESCRIPTION' => '<p>Hay que hacer una implementación para registrar has\_many</p>',//<p>Hay que hacer una implementación para registrar has\_many</p>
        'FIELDTYPE_ID' => 13,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MY_PARENT
                FIELD_INTRO=<p>Hay que hacer una implementación para registrar has\_many</p>
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) NOT NULL DEFAULT '0' my parent

                FIELD_NAME_LATEX=my parent
                FIELD_CODE_NAME_LATEX=my\_parent
                FIELD_DBCOMMENT_LATEX=Hay que hacer una implementaci\'on para registrar has\textbackslash \textbackslash \_many

                    {FIELD_LINK}
                    FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=LDE
                    FIELD_FOREIGN_OBJECT_UPPER=LEJEMPLO

    */
    $fields['my_parent'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'my person isMoral',
        'FIELD_CODE_NAME' => 'my_person_isMoral',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 41,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MY_PERSON_ISMORAL
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TINYINT(1) NOT NULL DEFAULT '0' my person isMoral

                FIELD_NAME_LATEX=my person isMoral
                FIELD_CODE_NAME_LATEX=my\_person\_isMoral
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['my_person_isMoral'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'my person paterno',
        'FIELD_CODE_NAME' => 'my_person_paterno',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 41,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MY_PERSON_PATERNO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL my person paterno

                FIELD_NAME_LATEX=my person paterno
                FIELD_CODE_NAME_LATEX=my\_person\_paterno
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['my_person_paterno'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'my person materno',
        'FIELD_CODE_NAME' => 'my_person_materno',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 41,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MY_PERSON_MATERNO
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL my person materno

                FIELD_NAME_LATEX=my person materno
                FIELD_CODE_NAME_LATEX=my\_person\_materno
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['my_person_materno'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'my person nombre',
        'FIELD_CODE_NAME' => 'my_person_nombre',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 41,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MY_PERSON_NOMBRE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL my person nombre

                FIELD_NAME_LATEX=my person nombre
                FIELD_CODE_NAME_LATEX=my\_person\_nombre
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['my_person_nombre'] = $field;
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
if ($this->params->get('save_history') AND $this->params->get('lejemplo_save_history'))
{
//	JHtml::_('behavior.modal', 'a.modal_jform_contenthistory');//creo que se carga con el botón versiones
	
	//hacer parametrizable data_id para que funcione versiones
	
	//$model	= JModelLegacy::getInstance('[%CompObject%]Form','[%ArchitectComp%]Model', array('ignore_request' => FALSE));
	$model	= JModelLegacy::getInstance('LejemploForm','JtCaModel', array('ignore_request' => FALSE));
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
						'url' => new JUri('index.php?option=com_jtca&view=lejemploform&layout=edit&layout=edit&tmpl=component&id=1&function=on_collapseModal')
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
		title: 'Libro De Ejemplo',
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