#one [%%IF per line
Titulo=TSJ CDMX Libros TxCA Ejemplo
Nombre del paquete com_architectcomp=com_jtca
Descripción <p>Componente HelloWorld (de prueba)</p> <p>Componente HelloWorld (de prueba)</p>
Release 1.0.0
Copyright Copyright (c) 2017 - 2020. All Rights Reserved
COMPONENTSTARTVERSION=1.0.0
COMPONENTAUTHOR=caballeroantonio
COMPONENTWEBSITE=caballeroantonio.com


architectcomp_name=tsj cdmx libros txca ejemplo
COM_ARCHITECTCOMP=COM_JTCA
ARCHITECTCOMP=JTCA
ArchitectComp=JtCa
architectcomp=jtca

{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de ejemplo
    Compobject_description_ini=<p>13:46:50el libro de ejeplo sliver para ......</p><br/><p><br />Este libro se distribuye por secretaría</p>
	
    COMPOBJECT=LEJEMPLO
    compobject=lejemplo
    CompObject=Lejemplo
    
    compobject_name=libro de ejemplo
    CompObject_name=Libro De Ejemplo
    CompObject_short_name=Lejemplo
    Compobject_short_name=Lejemplo
    compobject_short_name=lejemplo
    
    COMPOBJECTPLURAL=LEJEMPLOS
    compobjectplural=lejemplos
    CompObjectPlural=Lejemplos
    compobject_plural_name=libro de ejemplo
    CompObject_plural_name=Libro De Ejemplo
    compobject_short_plural_name=lejemplos
    CompObject_short_plural_name=Lejemplos
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LEJEMPLO_FS
        FIELDSET_NAME=lejemplo_fs
        FIELDSET_CODE_NAME_UPPER=LEJEMPLO_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=Órgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL Órgano
            
            FIELD_NAME_LATEX=\'Organo
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretaría
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretaría
            
            FIELD_NAME_LATEX=Secretar\'i{}a
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Año j.
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Año j.
            
            FIELD_NAME_LATEX=A\~no j.
            FIELD_CODE_NAME_LATEX=anoj
            FIELD_DBCOMMENT_LATEX=A\~no judicial
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=my boolean
            FIELD_CODE_NAME_UPPER=MY_BOOLEAN
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`my_boolean` TINYINT(1) DEFAULT NULL my boolean
            
            FIELD_NAME_LATEX=my boolean
            FIELD_CODE_NAME_LATEX=my\_boolean
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Expediente
            FIELD_CODE_NAME_UPPER=ID_EXPEDIENTE
            FIELD_INTRO=<p>@ToDo add CONSTRAINT id_expediente -&gt; jt_expediente</p>
            FIELD_DESCRIPTION_INI=<p>@ToDo add CONSTRAINT id_expediente -&gt; jt_expediente</p>
            FIELD_DESCRIPTION=<p>@ToDo add CONSTRAINT id_expediente -&gt; jt_expediente</p> 
            FIELDTYPE_ID=33
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_expediente` INT(10) DEFAULT NULL Expediente
            
            FIELD_NAME_LATEX=Expediente
            FIELD_CODE_NAME_LATEX=id\_expediente
            FIELD_DBCOMMENT_LATEX=@ToDo add CONSTRAINT id\_expediente -\&gt; jt\_expediente
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=my int
            FIELD_CODE_NAME_UPPER=MY_INT
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`my_int` INT(10) DEFAULT NULL my int
            
            FIELD_NAME_LATEX=my int
            FIELD_CODE_NAME_LATEX=my\_int
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=my currency
            FIELD_CODE_NAME_UPPER=MY_CURRENCY
            FIELD_INTRO=<p>- Numeros flotantes de 2 digitos, con preferencias en mysql settings</p><br/><p>- @ToDo - cambiar el campo de texto del front end</p>
            FIELD_DESCRIPTION_INI=<p>- Numeros flotantes de 2 digitos, con preferencias en mysql settings</p><br/><p>- @ToDo - cambiar el campo de texto del front end</p>
            FIELD_DESCRIPTION=<p>- Numeros flotantes de 2 digitos, con preferencias en mysql settings</p>
<p>- @ToDo - cambiar el campo de texto del front end</p> 
            FIELDTYPE_ID=37
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`my_currency` DECIMAL(11,2) DEFAULT NULL my currency
            
            FIELD_NAME_LATEX=my currency
            FIELD_CODE_NAME_LATEX=my\_currency
            FIELD_DBCOMMENT_LATEX=- Numeros flotantes de 2 digitos, con preferencias en mysql settings- @ToDo - cambiar el campo de texto del front end
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=my date
            FIELD_CODE_NAME_UPPER=MY_DATE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`my_date` DATETIME DEFAULT NULL my date
            
            FIELD_NAME_LATEX=my date
            FIELD_CODE_NAME_LATEX=my\_date
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=my datetime
            FIELD_CODE_NAME_UPPER=MY_DATETIME
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=36
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`my_datetime` DATETIME DEFAULT NULL my datetime
            
            FIELD_NAME_LATEX=my datetime
            FIELD_CODE_NAME_LATEX=my\_datetime
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=my var45
            FIELD_CODE_NAME_UPPER=MY_VAR45
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`my_var45` VARCHAR(45) DEFAULT NULL my var45
            
            FIELD_NAME_LATEX=my var45
            FIELD_CODE_NAME_LATEX=my\_var45
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Expediente
            FIELD_CODE_NAME_UPPER=TXT_EXPEDIENTE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`txt_expediente` VARCHAR(45) DEFAULT NULL Expediente
            
            FIELD_NAME_LATEX=Expediente
            FIELD_CODE_NAME_LATEX=txt\_expediente
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=my var255
            FIELD_CODE_NAME_UPPER=MY_VAR255
            FIELD_INTRO=<p>Ejemplo varchar 255</p>
            FIELD_DESCRIPTION_INI=<p>Ejemplo varchar 255</p>
            FIELD_DESCRIPTION=<p>Ejemplo varchar 255</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`my_var255` VARCHAR(255) DEFAULT NULL my var255
            
            FIELD_NAME_LATEX=my var255
            FIELD_CODE_NAME_LATEX=my\_var255
            FIELD_DBCOMMENT_LATEX=Ejemplo varchar 255
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=txt_my_suggest
            FIELD_CODE_NAME_UPPER=TXT_MY_SUGGEST
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=40
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`txt_my_suggest` VARCHAR(255) DEFAULT NULL txt_my_suggest
            
            FIELD_NAME_LATEX=txt\_my\_suggest
            FIELD_CODE_NAME_LATEX=txt\_my\_suggest
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=my multiline
            FIELD_CODE_NAME_UPPER=MY_MULTILINE
            FIELD_INTRO=<p>@ToDo  cambiar el sql que pone TEXT(255)</p>
            FIELD_DESCRIPTION_INI=<p>@ToDo  cambiar el sql que pone TEXT(255)</p>
            FIELD_DESCRIPTION=<p>@ToDo  cambiar el sql que pone TEXT(255)</p> 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`my_multiline` TEXT DEFAULT NULL my multiline
            
            FIELD_NAME_LATEX=my multiline
            FIELD_CODE_NAME_LATEX=my\_multiline
            FIELD_DBCOMMENT_LATEX=@ToDo  cambiar el sql que pone TEXT(255)
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=my ref2
            FIELD_CODE_NAME_UPPER=MY_REF2
            FIELD_INTRO=<p>@ToDo poner constaints</p><br/><p> </p><br/><p>    INDEX `c3\_10\_idx` (`my\_ref2` ASC),<br />    CONSTRAINT `c3\_10`<br />        FOREIGN KEY (`my\_ref2`)<br />        REFERENCES `jtc\_general` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        ,</p>
            FIELD_DESCRIPTION_INI=<p>@ToDo poner constaints</p><br/><p> </p><br/><p>    INDEX `c3\_10\_idx` (`my\_ref2` ASC),<br />    CONSTRAINT `c3\_10`<br />        FOREIGN KEY (`my\_ref2`)<br />        REFERENCES `jtc\_general` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        ,</p>
            FIELD_DESCRIPTION=<p>@ToDo poner constaints</p>
<p> </p>
<p>    INDEX `c3\_10\_idx` (`my\_ref2` ASC),<br />    CONSTRAINT `c3\_10`<br />        FOREIGN KEY (`my\_ref2`)<br />        REFERENCES `jtc\_general` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        ,</p> 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`my_ref2` INT(10) DEFAULT NULL my ref2
            
            FIELD_NAME_LATEX=my ref2
            FIELD_CODE_NAME_LATEX=my\_ref2
            FIELD_DBCOMMENT_LATEX=@ToDo poner constaints     INDEX `c3\textbackslash \textbackslash \_10\textbackslash \textbackslash \_idx` (`my\textbackslash \textbackslash \_ref2` ASC),    CONSTRAINT `c3\textbackslash \textbackslash \_10`        FOREIGN KEY (`my\textbackslash \textbackslash \_ref2`)        REFERENCES `jtc\textbackslash \textbackslash \_general` (`id`)        ON DELETE RESTRICT        ON UPDATE CASCADE         ,
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=my ref
            FIELD_CODE_NAME_UPPER=MY_REF
            FIELD_INTRO=<p>Campo de referencia a un catálogo</p><br/><p>@ToDo agregar constraints</p><br/><p>    INDEX `c3\_1924\_idx` (`my\_ref` ASC),<br />    CONSTRAINT `c3\_1924`<br />        FOREIGN KEY (`my\_ref`)<br />        REFERENCES `jtc\_materia` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        ,</p>
            FIELD_DESCRIPTION_INI=<p>Campo de referencia a un catálogo</p><br/><p>@ToDo agregar constraints</p><br/><p>    INDEX `c3\_1924\_idx` (`my\_ref` ASC),<br />    CONSTRAINT `c3\_1924`<br />        FOREIGN KEY (`my\_ref`)<br />        REFERENCES `jtc\_materia` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        ,</p>
            FIELD_DESCRIPTION=<p>Campo de referencia a un catálogo</p>
<p>@ToDo agregar constraints</p>
<p>    INDEX `c3\_1924\_idx` (`my\_ref` ASC),<br />    CONSTRAINT `c3\_1924`<br />        FOREIGN KEY (`my\_ref`)<br />        REFERENCES `jtc\_materia` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        ,</p> 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`my_ref` INT(10) DEFAULT NULL my ref
            
            FIELD_NAME_LATEX=my ref
            FIELD_CODE_NAME_LATEX=my\_ref
            FIELD_DBCOMMENT_LATEX=Campo de referencia a un cat\'alogo@ToDo agregar constraints    INDEX `c3\textbackslash \textbackslash \_1924\textbackslash \textbackslash \_idx` (`my\textbackslash \textbackslash \_ref` ASC),    CONSTRAINT `c3\textbackslash \textbackslash \_1924`        FOREIGN KEY (`my\textbackslash \textbackslash \_ref`)        REFERENCES `jtc\textbackslash \textbackslash \_materia` (`id`)        ON DELETE RESTRICT        ON UPDATE CASCADE         ,
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=id_my_suggest
            FIELD_CODE_NAME_UPPER=ID_MY_SUGGEST
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=40
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_my_suggest` INT(10) DEFAULT NULL id_my_suggest
            
            FIELD_NAME_LATEX=id\_my\_suggest
            FIELD_CODE_NAME_LATEX=id\_my\_suggest
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=my NFempleado
            FIELD_CODE_NAME_UPPER=MY_NFEMPLEADO
            FIELD_INTRO=<p>@ToDo Debiera ser un campo int que hace referencia a un archivo</p><br/><pre id=&quot;line1&quot;><br /><br />`field14` INT NULL COMMENT 'id Firma interna',	<br/><span id=&quot;line74&quot;></span>	INDEX `c3\_11\_idx` (`field14` ASC),<br/><span id=&quot;line75&quot;></span>	CONSTRAINT `c3\_11`<br/><span id=&quot;line76&quot;></span>		FOREIGN KEY (`field14`)<br/><span id=&quot;line77&quot;></span>		REFERENCES `jt\_uploadedfiles` (`id`)<br/><span id=&quot;line78&quot;></span>		ON DELETE RESTRICT<br/><span id=&quot;line79&quot;></span>		ON UPDATE CASCADE </pre>
            FIELD_DESCRIPTION_INI=<p>@ToDo Debiera ser un campo int que hace referencia a un archivo</p><br/><pre id=&quot;line1&quot;><br /><br />`field14` INT NULL COMMENT 'id Firma interna',	<br/><span id=&quot;line74&quot;></span>	INDEX `c3\_11\_idx` (`field14` ASC),<br/><span id=&quot;line75&quot;></span>	CONSTRAINT `c3\_11`<br/><span id=&quot;line76&quot;></span>		FOREIGN KEY (`field14`)<br/><span id=&quot;line77&quot;></span>		REFERENCES `jt\_uploadedfiles` (`id`)<br/><span id=&quot;line78&quot;></span>		ON DELETE RESTRICT<br/><span id=&quot;line79&quot;></span>		ON UPDATE CASCADE </pre>
            FIELD_DESCRIPTION=<p>@ToDo Debiera ser un campo int que hace referencia a un archivo</p>
<pre id="line1"><br /><br />`field14` INT NULL COMMENT 'id Firma interna',	
<span id="line74"></span>	INDEX `c3\_11\_idx` (`field14` ASC),
<span id="line75"></span>	CONSTRAINT `c3\_11`
<span id="line76"></span>		FOREIGN KEY (`field14`)
<span id="line77"></span>		REFERENCES `jt\_uploadedfiles` (`id`)
<span id="line78"></span>		ON DELETE RESTRICT
<span id="line79"></span>		ON UPDATE CASCADE </pre> 
            FIELDTYPE_ID=35
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`my_NFempleado` INT(10) DEFAULT NULL my NFempleado
            
            FIELD_NAME_LATEX=my NFempleado
            FIELD_CODE_NAME_LATEX=my\_NFempleado
            FIELD_DBCOMMENT_LATEX=@ToDo Debiera ser un campo int que hace referencia a un archivo`field14` INT NULL COMMENT \textbackslash 'id Firma interna\textbackslash ',		INDEX `c3\textbackslash \textbackslash \_11\textbackslash \textbackslash \_idx` (`field14` ASC),	CONSTRAINT `c3\textbackslash \textbackslash \_11`		FOREIGN KEY (`field14`)		REFERENCES `jt\textbackslash \textbackslash \_uploadedfiles` (`id`)		ON DELETE RESTRICT		ON UPDATE CASCADE 
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=my Fexterna
            FIELD_CODE_NAME_UPPER=MY_FEXTERNA
            FIELD_INTRO=<p>@ToDo debieran ser 2 campos int, uno para huella y otro para firma</p><br/><pre id=&quot;line1&quot;><br /><br />    `my\_fexterna` INT NULL COMMENT 'id\_firma Firma externa',<br />    INDEX `c3\_14\_idx` (`my\_fexterna` ASC),<br />    CONSTRAINT `c3\_14`<br />        FOREIGN KEY (`my\_fexterna`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE,<br />    `my\_fexternah` INT NULL COMMENT 'id\_huella Firma externa',<br />    INDEX `c3\_14h\_idx` (`my\_fexternah` ASC),<br />    CONSTRAINT `c3\_14h`<br />        FOREIGN KEY (`my\_fexternah`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        , </pre>
            FIELD_DESCRIPTION_INI=<p>@ToDo debieran ser 2 campos int, uno para huella y otro para firma</p><br/><pre id=&quot;line1&quot;><br /><br />    `my\_fexterna` INT NULL COMMENT 'id\_firma Firma externa',<br />    INDEX `c3\_14\_idx` (`my\_fexterna` ASC),<br />    CONSTRAINT `c3\_14`<br />        FOREIGN KEY (`my\_fexterna`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE,<br />    `my\_fexternah` INT NULL COMMENT 'id\_huella Firma externa',<br />    INDEX `c3\_14h\_idx` (`my\_fexternah` ASC),<br />    CONSTRAINT `c3\_14h`<br />        FOREIGN KEY (`my\_fexternah`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        , </pre>
            FIELD_DESCRIPTION=<p>@ToDo debieran ser 2 campos int, uno para huella y otro para firma</p>
<pre id="line1"><br /><br />    `my\_fexterna` INT NULL COMMENT 'id\_firma Firma externa',<br />    INDEX `c3\_14\_idx` (`my\_fexterna` ASC),<br />    CONSTRAINT `c3\_14`<br />        FOREIGN KEY (`my\_fexterna`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE,<br />    `my\_fexternah` INT NULL COMMENT 'id\_huella Firma externa',<br />    INDEX `c3\_14h\_idx` (`my\_fexternah` ASC),<br />    CONSTRAINT `c3\_14h`<br />        FOREIGN KEY (`my\_fexternah`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        , </pre> 
            FIELDTYPE_ID=34
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`my_fexterna` INT(10) DEFAULT NULL my Fexterna
            
            FIELD_NAME_LATEX=my Fexterna
            FIELD_CODE_NAME_LATEX=my\_fexterna
            FIELD_DBCOMMENT_LATEX=@ToDo debieran ser 2 campos int, uno para huella y otro para firma    `my\textbackslash \textbackslash \_fexterna` INT NULL COMMENT \textbackslash 'id\textbackslash \textbackslash \_firma Firma externa\textbackslash ',    INDEX `c3\textbackslash \textbackslash \_14\textbackslash \textbackslash \_idx` (`my\textbackslash \textbackslash \_fexterna` ASC),    CONSTRAINT `c3\textbackslash \textbackslash \_14`        FOREIGN KEY (`my\textbackslash \textbackslash \_fexterna`)        REFERENCES `jt\textbackslash \textbackslash \_uploadedfiles` (`id`)        ON DELETE RESTRICT        ON UPDATE CASCADE,    `my\textbackslash \textbackslash \_fexternah` INT NULL COMMENT \textbackslash 'id\textbackslash \textbackslash \_huella Firma externa\textbackslash ',    INDEX `c3\textbackslash \textbackslash \_14h\textbackslash \textbackslash \_idx` (`my\textbackslash \textbackslash \_fexternah` ASC),    CONSTRAINT `c3\textbackslash \textbackslash \_14h`        FOREIGN KEY (`my\textbackslash \textbackslash \_fexternah`)        REFERENCES `jt\textbackslash \textbackslash \_uploadedfiles` (`id`)        ON DELETE RESTRICT        ON UPDATE CASCADE         , 
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=my Hexterna
            FIELD_CODE_NAME_UPPER=MY_HEXTERNA
            FIELD_INTRO=<p>@ToDo debieran ser 2 campos int, uno para huella y otro para firma</p><br/><pre id=&quot;line1&quot;><br /><br />    `my\_fexterna` INT NULL COMMENT 'id\_firma Firma externa',<br />    INDEX `c3\_14\_idx` (`my\_fexterna` ASC),<br />    CONSTRAINT `c3\_14`<br />        FOREIGN KEY (`my\_fexterna`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE,<br />    `my\_fexternah` INT NULL COMMENT 'id\_huella Firma externa',<br />    INDEX `c3\_14h\_idx` (`my\_fexternah` ASC),<br />    CONSTRAINT `c3\_14h`<br />        FOREIGN KEY (`my\_fexternah`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        , </pre>
            FIELD_DESCRIPTION_INI=<p>@ToDo debieran ser 2 campos int, uno para huella y otro para firma</p><br/><pre id=&quot;line1&quot;><br /><br />    `my\_fexterna` INT NULL COMMENT 'id\_firma Firma externa',<br />    INDEX `c3\_14\_idx` (`my\_fexterna` ASC),<br />    CONSTRAINT `c3\_14`<br />        FOREIGN KEY (`my\_fexterna`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE,<br />    `my\_fexternah` INT NULL COMMENT 'id\_huella Firma externa',<br />    INDEX `c3\_14h\_idx` (`my\_fexternah` ASC),<br />    CONSTRAINT `c3\_14h`<br />        FOREIGN KEY (`my\_fexternah`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        , </pre>
            FIELD_DESCRIPTION=<p>@ToDo debieran ser 2 campos int, uno para huella y otro para firma</p>
<pre id="line1"><br /><br />    `my\_fexterna` INT NULL COMMENT 'id\_firma Firma externa',<br />    INDEX `c3\_14\_idx` (`my\_fexterna` ASC),<br />    CONSTRAINT `c3\_14`<br />        FOREIGN KEY (`my\_fexterna`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE,<br />    `my\_fexternah` INT NULL COMMENT 'id\_huella Firma externa',<br />    INDEX `c3\_14h\_idx` (`my\_fexternah` ASC),<br />    CONSTRAINT `c3\_14h`<br />        FOREIGN KEY (`my\_fexternah`)<br />        REFERENCES `jt\_uploadedfiles` (`id`)<br />        ON DELETE RESTRICT<br />        ON UPDATE CASCADE <br />        , </pre> 
            FIELDTYPE_ID=39
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`my_hexterna` INT(10) DEFAULT NULL my Hexterna
            
            FIELD_NAME_LATEX=my Hexterna
            FIELD_CODE_NAME_LATEX=my\_hexterna
            FIELD_DBCOMMENT_LATEX=@ToDo debieran ser 2 campos int, uno para huella y otro para firma    `my\textbackslash \textbackslash \_fexterna` INT NULL COMMENT \textbackslash 'id\textbackslash \textbackslash \_firma Firma externa\textbackslash ',    INDEX `c3\textbackslash \textbackslash \_14\textbackslash \textbackslash \_idx` (`my\textbackslash \textbackslash \_fexterna` ASC),    CONSTRAINT `c3\textbackslash \textbackslash \_14`        FOREIGN KEY (`my\textbackslash \textbackslash \_fexterna`)        REFERENCES `jt\textbackslash \textbackslash \_uploadedfiles` (`id`)        ON DELETE RESTRICT        ON UPDATE CASCADE,    `my\textbackslash \textbackslash \_fexternah` INT NULL COMMENT \textbackslash 'id\textbackslash \textbackslash \_huella Firma externa\textbackslash ',    INDEX `c3\textbackslash \textbackslash \_14h\textbackslash \textbackslash \_idx` (`my\textbackslash \textbackslash \_fexternah` ASC),    CONSTRAINT `c3\textbackslash \textbackslash \_14h`        FOREIGN KEY (`my\textbackslash \textbackslash \_fexternah`)        REFERENCES `jt\textbackslash \textbackslash \_uploadedfiles` (`id`)        ON DELETE RESTRICT        ON UPDATE CASCADE         , 
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=my parent
            FIELD_CODE_NAME_UPPER=MY_PARENT
            FIELD_INTRO=<p>Hay que hacer una implementación para registrar has\_many</p>
            FIELD_DESCRIPTION_INI=<p>Hay que hacer una implementación para registrar has\_many</p>
            FIELD_DESCRIPTION=<p>Hay que hacer una implementación para registrar has\_many</p> 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`my_parent` INT(10) NOT NULL DEFAULT '0' my parent
            
            FIELD_NAME_LATEX=my parent
            FIELD_CODE_NAME_LATEX=my\_parent
            FIELD_DBCOMMENT_LATEX=Hay que hacer una implementaci\'on para registrar has\textbackslash \textbackslash \_many
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=LDE
                FIELD_FOREIGN_OBJECT_UPPER=LEJEMPLO


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=my person isMoral
            FIELD_CODE_NAME_UPPER=MY_PERSON_ISMORAL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`my_person_isMoral` TINYINT(1) NOT NULL DEFAULT '0' my person isMoral
            
            FIELD_NAME_LATEX=my person isMoral
            FIELD_CODE_NAME_LATEX=my\_person\_isMoral
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=my person paterno
            FIELD_CODE_NAME_UPPER=MY_PERSON_PATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`my_person_paterno` VARCHAR(255) DEFAULT NULL my person paterno
            
            FIELD_NAME_LATEX=my person paterno
            FIELD_CODE_NAME_LATEX=my\_person\_paterno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=my person materno
            FIELD_CODE_NAME_UPPER=MY_PERSON_MATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`my_person_materno` VARCHAR(45) DEFAULT NULL my person materno
            
            FIELD_NAME_LATEX=my person materno
            FIELD_CODE_NAME_LATEX=my\_person\_materno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=my person nombre
            FIELD_CODE_NAME_UPPER=MY_PERSON_NOMBRE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`my_person_nombre` VARCHAR(45) DEFAULT NULL my person nombre
            
            FIELD_NAME_LATEX=my person nombre
            FIELD_CODE_NAME_LATEX=my\_person\_nombre
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{-1.3}
    
{-1.0}



========NO SE DONDE VAN============

    {HAVE COPY}

    {HAVE ORDERING}



	{INCLUDE_ASSETACL}









	{INCLUDE_STATUS}

	{INCLUDE_MODIFIED}

	{INCLUDE_CREATED}









	{INCLUDE_VERSIONS}


	{GENERATE_ADMIN_DASHBOARD}

	{GENERATE_SITE}
    

    	{GENERATE_SITE_VIEWS}

