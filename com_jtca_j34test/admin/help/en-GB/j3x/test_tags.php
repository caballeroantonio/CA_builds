#one [%%IF per line
Titulo=TSJ CDMX Libros TxCA
Nombre del paquete com_architectcomp=com_jtca
Descripción <ul><br/><li class=&quot;standard&quot;>El objetivo del componente es sustituir los libros físicos que se utilizan en los órganos jurisdiccionales del TSJ CDMX por libros virtuales.</li><br/><li class=&quot;standard&quot;>Debido a la gran cantidad de código que se producirá en CA había decidido generar un componente por materia y un componente adicional para administrar los objetos de apoyo, como son los objetos anidados. No funcionó adapatar sistemas de nombres, se generará mucho más ruido. Todo en un solo componente.</li><br/><li class=&quot;standard&quot;>Quieren formularios continuos, son reticentes con las ventanas modales que se utilizan con los objetos anidados.</li><br/><li class=&quot;standard&quot;>Actualmente &quot;persons&quot; es un elemento no anidado, pero me gustaría convertirlo en anidado para hacer más limpio el código.</li><br/><li class=&quot;standard&quot;>Para cumplir con la burocrácia CA la clave del libro la utilizaré como singular y +s para el plural. He renombrado las tablas, pero he conservado el prefijo jtl_{clave}s para conservar compatibilidad con otras reglas que pueda haber.</li><br/><li class=&quot;standard&quot;>Otros libros que les faltaría el campo a plural son:</li><br/></ul><br/><p style=&quot;padding-left: 60px;&quot;>dil_jccm07<br />dil_jccm09<br />dep_joc03<br />incul_jpdng01<br />ofen_jpdng01 <br />decl_jpdng01<br />dili_jpdng09<br />firm_jpdng17<br />adol_jjadg05<br />firm_jjadg16<br />adol_jjadg01 <br />averiguacion<br />personaliasedad<br />personedadsexo<br />persondelito<br />personalias<br />jempleado_bb <br />address</p><br/><p style=&quot;padding-left: 60px;&quot;> </p><br/><div class=&quot;standard&quot;>El objetivo del componente es sustituir los libros físicos que se utilizan en los órganos jurisdiccionales del TSJ CDMX por libros virtuales.</div><br/><div class=&quot;standard&quot;>En el futuro se requerirá modificar los objetos y quitar el &quot;_s&quot; del code_name y agregar &quot;s&quot; al plural_code_name; y re-nombrar las tablas y vistas.</div> <ul>
<li class="standard">El objetivo del componente es sustituir los libros físicos que se utilizan en los órganos jurisdiccionales del TSJ CDMX por libros virtuales.</li>
<li class="standard">Debido a la gran cantidad de código que se producirá en CA había decidido generar un componente por materia y un componente adicional para administrar los objetos de apoyo, como son los objetos anidados. No funcionó adapatar sistemas de nombres, se generará mucho más ruido. Todo en un solo componente.</li>
<li class="standard">Quieren formularios continuos, son reticentes con las ventanas modales que se utilizan con los objetos anidados.</li>
<li class="standard">Actualmente "persons" es un elemento no anidado, pero me gustaría convertirlo en anidado para hacer más limpio el código.</li>
<li class="standard">Para cumplir con la burocrácia CA la clave del libro la utilizaré como singular y +s para el plural. He renombrado las tablas, pero he conservado el prefijo jtl_{clave}s para conservar compatibilidad con otras reglas que pueda haber.</li>
<li class="standard">Otros libros que les faltaría el campo a plural son:</li>
</ul>
<p style="padding-left: 60px;">dil_jccm07<br />dil_jccm09<br />dep_joc03<br />incul_jpdng01<br />ofen_jpdng01 <br />decl_jpdng01<br />dili_jpdng09<br />firm_jpdng17<br />adol_jjadg05<br />firm_jjadg16<br />adol_jjadg01 <br />averiguacion<br />personaliasedad<br />personedadsexo<br />persondelito<br />personalias<br />jempleado_bb <br />address</p>
<p style="padding-left: 60px;"> </p>
<div class="standard">El objetivo del componente es sustituir los libros físicos que se utilizan en los órganos jurisdiccionales del TSJ CDMX por libros virtuales.</div>
<div class="standard">En el futuro se requerirá modificar los objetos y quitar el "_s" del code_name y agregar "s" al plural_code_name; y re-nombrar las tablas y vistas.</div>
Release 1.0.0
Copyright Copyright (c) 2017 - 2020. All Rights Reserved
COMPONENTSTARTVERSION=1.0.0
COMPONENTAUTHOR=caballeroantonio
COMPONENTWEBSITE=caballeroantonio.com


architectcomp_name=tsj cdmx libros txca
COM_ARCHITECTCOMP=COM_JTCA
ARCHITECTCOMP=JTCA
ArchitectComp=JtCa
architectcomp=jtca

{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de gobierno
    Compobject_description_ini=<br/>Este libro tiene reglas partículares en el layout
	
    COMPOBJECT=LJC01
    compobject=ljc01
    CompObject=Ljc01
    
    compobject_name=libro de gobierno
    CompObject_name=LIBRO DE GOBIERNO
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC01S
    compobjectplural=ljc01s
    CompObjectPlural=Ljc01s
    compobject_plural_name=jc01
    CompObject_plural_name=Jc01
    compobject_short_plural_name=jc01
    CompObject_short_plural_name=Jc01
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC01_FS
        FIELDSET_NAME=ljc01_fs
        FIELDSET_CODE_NAME_UPPER=LJC01_FS
        FIELDSET_DESCRIPTION=

{1.1}        

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
            FIELD_NAME=FECHA Y HORA DE ENTRADA
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=36
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` DATETIME DEFAULT NULL FECHA Y HORA DE ENTRADA
            
            FIELD_NAME_LATEX=FECHA Y HORA DE ENTRADA
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=CUANTÍA
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` INT(10) DEFAULT NULL CUANTÍA
            
            FIELD_NAME_LATEX=CUANT\'IA
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=TIPO DE MONEDA
            FIELD_CODE_NAME_UPPER=FIELD14
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field14` INT(10) DEFAULT NULL TIPO DE MONEDA
            
            FIELD_NAME_LATEX=TIPO DE MONEDA
            FIELD_CODE_NAME_LATEX=field14
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=SUERTE PRINCIPAL
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=37
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DECIMAL(11,2) DEFAULT NULL SUERTE PRINCIPAL
            
            FIELD_NAME_LATEX=SUERTE PRINCIPAL
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=TIPO DE RESOLUCIÓN
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` INT(10) DEFAULT NULL TIPO DE RESOLUCIÓN
            
            FIELD_NAME_LATEX=TIPO DE RESOLUCI\'ON
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE LA RESOLUCIÓN
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` DATETIME DEFAULT NULL FECHA DE LA RESOLUCIÓN
            
            FIELD_NAME_LATEX=FECHA DE LA RESOLUCI\'ON
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=SENTIDO DE LA RESOLUCIÓN
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` VARCHAR(45) DEFAULT NULL SENTIDO DE LA RESOLUCIÓN
            
            FIELD_NAME_LATEX=SENTIDO DE LA RESOLUCI\'ON
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE LA RESOLUCIÓN DE LA SALA
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` DATETIME DEFAULT NULL FECHA DE LA RESOLUCIÓN DE LA SALA
            
            FIELD_NAME_LATEX=FECHA DE LA RESOLUCI\'ON DE LA SALA
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=SENTIDO DE LA RESOLUCIÓN DE LA SALA
            FIELD_CODE_NAME_UPPER=FIELD12
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field12` VARCHAR(45) DEFAULT NULL SENTIDO DE LA RESOLUCIÓN DE LA SALA
            
            FIELD_NAME_LATEX=SENTIDO DE LA RESOLUCI\'ON DE LA SALA
            FIELD_CODE_NAME_LATEX=field12
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD13
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field13` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field13
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de ingresos de valores
    Compobject_description_ini=
	
    COMPOBJECT=LJC02
    compobject=ljc02
    CompObject=Ljc02
    
    compobject_name=libro de ingresos de valores
    CompObject_name=LIBRO DE INGRESOS DE VALORES
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC02S
    compobjectplural=ljc02s
    CompObjectPlural=Ljc02s
    compobject_plural_name=jc02
    CompObject_plural_name=Jc02
    compobject_short_plural_name=jc02
    CompObject_short_plural_name=Jc02
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC02_FS
        FIELDSET_NAME=ljc02_fs
        FIELDSET_CODE_NAME_UPPER=LJC02_FS
        FIELDSET_DESCRIPTION=

{1.1}        

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
            FIELD_NAME=FECHA EN QUE SE RECIBE EL DOCUMENTO
            FIELD_CODE_NAME_UPPER=FIELD2
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field2` DATETIME DEFAULT NULL FECHA EN QUE SE RECIBE EL DOCUMENTO
            
            FIELD_NAME_LATEX=FECHA EN QUE SE RECIBE EL DOCUMENTO
            FIELD_CODE_NAME_LATEX=field2
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA EN QUE SE EXPIDE EL DOCUMENTO
            FIELD_CODE_NAME_UPPER=FIELD3
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field3` DATETIME DEFAULT NULL FECHA EN QUE SE EXPIDE EL DOCUMENTO
            
            FIELD_NAME_LATEX=FECHA EN QUE SE EXPIDE EL DOCUMENTO
            FIELD_CODE_NAME_LATEX=field3
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=REFERENCIA
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` VARCHAR(45) DEFAULT NULL REFERENCIA
            
            FIELD_NAME_LATEX=REFERENCIA
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=No. DEL DOCUMENTO
            FIELD_CODE_NAME_UPPER=FIELD4
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field4` VARCHAR(45) DEFAULT NULL No. DEL DOCUMENTO
            
            FIELD_NAME_LATEX=No. DEL DOCUMENTO
            FIELD_CODE_NAME_LATEX=field4
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=MONTO DEL DOCUMENTO
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=37
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` DECIMAL(11,2) DEFAULT NULL MONTO DEL DOCUMENTO
            
            FIELD_NAME_LATEX=MONTO DEL DOCUMENTO
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=QUIEN LO EXPIDE
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` VARCHAR(45) DEFAULT NULL QUIEN LO EXPIDE
            
            FIELD_NAME_LATEX=QUIEN LO EXPIDE
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de egresos de valores
    Compobject_description_ini=<br/>Este libro se distribuye por secretaría
	
    COMPOBJECT=LJC03
    compobject=ljc03
    CompObject=Ljc03
    
    compobject_name=libro de egresos de valores
    CompObject_name=LIBRO DE EGRESOS DE VALORES
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC03S
    compobjectplural=ljc03s
    CompObjectPlural=Ljc03s
    compobject_plural_name=jc03
    CompObject_plural_name=Jc03
    compobject_short_plural_name=jc03
    CompObject_short_plural_name=Jc03
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC03_FS
        FIELDSET_NAME=ljc03_fs
        FIELDSET_CODE_NAME_UPPER=LJC03_FS
        FIELDSET_DESCRIPTION=

{1.1}        

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
            FIELD_NAME=BENEFICIARIO (a. paterno)
            FIELD_CODE_NAME_UPPER=FIELD1_PATERNO
            FIELD_INTRO=apellido paterno
            FIELD_DESCRIPTION_INI=apellido paterno
            FIELD_DESCRIPTION=apellido paterno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field1_paterno` VARCHAR(255) DEFAULT NULL BENEFICIARIO (a. paterno)
            
            FIELD_NAME_LATEX=BENEFICIARIO (a. paterno)
            FIELD_CODE_NAME_LATEX=field1\_paterno
            FIELD_DBCOMMENT_LATEX=apellido paterno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=BENEFICIARIO (a. materno)
            FIELD_CODE_NAME_UPPER=FIELD1_MATERNO
            FIELD_INTRO=apellido materno
            FIELD_DESCRIPTION_INI=apellido materno
            FIELD_DESCRIPTION=apellido materno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field1_materno` VARCHAR(45) DEFAULT NULL BENEFICIARIO (a. materno)
            
            FIELD_NAME_LATEX=BENEFICIARIO (a. materno)
            FIELD_CODE_NAME_LATEX=field1\_materno
            FIELD_DBCOMMENT_LATEX=apellido materno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=BENEFICIARIO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD1_NOMBRE
            FIELD_INTRO=nombre
            FIELD_DESCRIPTION_INI=nombre
            FIELD_DESCRIPTION=nombre 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field1_nombre` VARCHAR(45) DEFAULT NULL BENEFICIARIO (nombre)
            
            FIELD_NAME_LATEX=BENEFICIARIO (nombre)
            FIELD_CODE_NAME_LATEX=field1\_nombre
            FIELD_DBCOMMENT_LATEX=nombre
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=BENEFICIARIO (es Moral)
            FIELD_CODE_NAME_UPPER=FIELD1_ISMORAL
            FIELD_INTRO=es Moral
            FIELD_DESCRIPTION_INI=es Moral
            FIELD_DESCRIPTION=es Moral 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field1_isMoral` TINYINT(1) DEFAULT NULL BENEFICIARIO (es Moral)
            
            FIELD_NAME_LATEX=BENEFICIARIO (es Moral)
            FIELD_CODE_NAME_LATEX=field1\_isMoral
            FIELD_DBCOMMENT_LATEX=es Moral
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONALIDAD
            FIELD_CODE_NAME_UPPER=FIELD2
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field2` VARCHAR(45) DEFAULT NULL PERSONALIDAD
            
            FIELD_NAME_LATEX=PERSONALIDAD
            FIELD_CODE_NAME_LATEX=field2
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA EN QUE RECIBE
            FIELD_CODE_NAME_UPPER=FIELD3
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field3` DATETIME DEFAULT NULL FECHA EN QUE RECIBE
            
            FIELD_NAME_LATEX=FECHA EN QUE RECIBE
            FIELD_CODE_NAME_LATEX=field3
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=No DEL BILLETE
            FIELD_CODE_NAME_UPPER=FIELD4
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field4` VARCHAR(45) DEFAULT NULL No DEL BILLETE
            
            FIELD_NAME_LATEX=No DEL BILLETE
            FIELD_CODE_NAME_LATEX=field4
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=MONTO
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=37
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` DECIMAL(11,2) DEFAULT NULL MONTO
            
            FIELD_NAME_LATEX=MONTO
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE QUIEN RECIBE (a. paterno)
            FIELD_CODE_NAME_UPPER=FIELD6_PATERNO
            FIELD_INTRO=apellido paterno
            FIELD_DESCRIPTION_INI=apellido paterno
            FIELD_DESCRIPTION=apellido paterno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_paterno` VARCHAR(255) DEFAULT NULL NOMBRE DE QUIEN RECIBE (a. paterno)
            
            FIELD_NAME_LATEX=NOMBRE DE QUIEN RECIBE (a. paterno)
            FIELD_CODE_NAME_LATEX=field6\_paterno
            FIELD_DBCOMMENT_LATEX=apellido paterno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE QUIEN RECIBE (a. materno)
            FIELD_CODE_NAME_UPPER=FIELD6_MATERNO
            FIELD_INTRO=apellido materno
            FIELD_DESCRIPTION_INI=apellido materno
            FIELD_DESCRIPTION=apellido materno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_materno` VARCHAR(45) DEFAULT NULL NOMBRE DE QUIEN RECIBE (a. materno)
            
            FIELD_NAME_LATEX=NOMBRE DE QUIEN RECIBE (a. materno)
            FIELD_CODE_NAME_LATEX=field6\_materno
            FIELD_DBCOMMENT_LATEX=apellido materno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE QUIEN RECIBE (nombre)
            FIELD_CODE_NAME_UPPER=FIELD6_NOMBRE
            FIELD_INTRO=nombre
            FIELD_DESCRIPTION_INI=nombre
            FIELD_DESCRIPTION=nombre 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_nombre` VARCHAR(45) DEFAULT NULL NOMBRE DE QUIEN RECIBE (nombre)
            
            FIELD_NAME_LATEX=NOMBRE DE QUIEN RECIBE (nombre)
            FIELD_CODE_NAME_LATEX=field6\_nombre
            FIELD_DBCOMMENT_LATEX=nombre
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE QUIEN RECIBE (es Moral)
            FIELD_CODE_NAME_UPPER=FIELD6_ISMORAL
            FIELD_INTRO=es Moral
            FIELD_DESCRIPTION_INI=es Moral
            FIELD_DESCRIPTION=es Moral 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_isMoral` TINYINT(1) DEFAULT NULL NOMBRE DE QUIEN RECIBE (es Moral)
            
            FIELD_NAME_LATEX=NOMBRE DE QUIEN RECIBE (es Moral)
            FIELD_CODE_NAME_LATEX=field6\_isMoral
            FIELD_DBCOMMENT_LATEX=es Moral
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DE QUIEN RECIBE
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=34
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` INT(10) DEFAULT NULL DE QUIEN RECIBE
            
            FIELD_NAME_LATEX=DE QUIEN RECIBE
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DE QUIEN RECIBE
            FIELD_CODE_NAME_UPPER=FIELD7H
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=39
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7h` INT(10) DEFAULT NULL DE QUIEN RECIBE
            
            FIELD_NAME_LATEX=DE QUIEN RECIBE
            FIELD_CODE_NAME_LATEX=field7h
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DATOS DE IDENTIFICACIÓN
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` VARCHAR(45) DEFAULT NULL DATOS DE IDENTIFICACIÓN
            
            FIELD_NAME_LATEX=DATOS DE IDENTIFICACI\'ON
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FOJAS
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` VARCHAR(45) DEFAULT NULL FOJAS
            
            FIELD_NAME_LATEX=FOJAS
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DEL JUEZ
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=35
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` INT(10) DEFAULT NULL DEL JUEZ
            
            FIELD_NAME_LATEX=DEL JUEZ
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DEL SECRETARIO
            FIELD_CODE_NAME_UPPER=FIELD12
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=35
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field12` INT(10) DEFAULT NULL DEL SECRETARIO
            
            FIELD_NAME_LATEX=DEL SECRETARIO
            FIELD_CODE_NAME_LATEX=field12
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=CONCEPTO
            FIELD_CODE_NAME_UPPER=FIELD13
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field13` VARCHAR(45) DEFAULT NULL CONCEPTO
            
            FIELD_NAME_LATEX=CONCEPTO
            FIELD_CODE_NAME_LATEX=field13
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA  DEL AUTO QUE ORDENA LA DEVOLUCIÓN
            FIELD_CODE_NAME_UPPER=FIELD14
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field14` DATETIME DEFAULT NULL FECHA  DEL AUTO QUE ORDENA LA DEVOLUCIÓN
            
            FIELD_NAME_LATEX=FECHA  DEL AUTO QUE ORDENA LA DEVOLUCI\'ON
            FIELD_CODE_NAME_LATEX=field14
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD15
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field15` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field15
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de registro de promociones
    Compobject_description_ini=
	
    COMPOBJECT=LJC04
    compobject=ljc04
    CompObject=Ljc04
    
    compobject_name=libro de registro de promociones
    CompObject_name=LIBRO DE REGISTRO DE PROMOCIONES
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC04S
    compobjectplural=ljc04s
    CompObjectPlural=Ljc04s
    compobject_plural_name=jc04
    CompObject_plural_name=Jc04
    compobject_short_plural_name=jc04
    CompObject_short_plural_name=Jc04
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC04_FS
        FIELDSET_NAME=ljc04_fs
        FIELDSET_CODE_NAME_UPPER=LJC04_FS
        FIELDSET_DESCRIPTION=

{1.1}        

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
            FIELD_NAME=FECHA Y HORA DE RECEPCIÓN
            FIELD_CODE_NAME_UPPER=FIELD1
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=36
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field1` DATETIME DEFAULT NULL FECHA Y HORA DE RECEPCIÓN
            
            FIELD_NAME_LATEX=FECHA Y HORA DE RECEPCI\'ON
            FIELD_CODE_NAME_LATEX=field1
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OCURSANTE
            FIELD_CODE_NAME_UPPER=FIELD2
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field2` VARCHAR(45) DEFAULT NULL OCURSANTE
            
            FIELD_NAME_LATEX=OCURSANTE
            FIELD_CODE_NAME_LATEX=field2
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de turno para sentencia
    Compobject_description_ini=
	
    COMPOBJECT=LJC05
    compobject=ljc05
    CompObject=Ljc05
    
    compobject_name=libro de turno para sentencia
    CompObject_name=LIBRO DE TURNO PARA SENTENCIA
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC05S
    compobjectplural=ljc05s
    CompObjectPlural=Ljc05s
    compobject_plural_name=jc05
    CompObject_plural_name=Jc05
    compobject_short_plural_name=jc05
    CompObject_short_plural_name=Jc05
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC05_FS
        FIELDSET_NAME=ljc05_fs
        FIELDSET_CODE_NAME_UPPER=LJC05_FS
        FIELDSET_DESCRIPTION=

{1.1}        

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
            FIELD_NAME=NÚMERO DE FOJAS
            FIELD_CODE_NAME_UPPER=FIELD2
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field2` INT(10) DEFAULT NULL NÚMERO DE FOJAS
            
            FIELD_NAME_LATEX=N\'UMERO DE FOJAS
            FIELD_CODE_NAME_LATEX=field2
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE CITACIÓN
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` DATETIME DEFAULT NULL FECHA DE CITACIÓN
            
            FIELD_NAME_LATEX=FECHA DE CITACI\'ON
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE LA PUBLICACIÓN DE LA CITACIÓN
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DATETIME DEFAULT NULL FECHA DE LA PUBLICACIÓN DE LA CITACIÓN
            
            FIELD_NAME_LATEX=FECHA DE LA PUBLICACI\'ON DE LA CITACI\'ON
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE SENTENCIA
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` DATETIME DEFAULT NULL FECHA DE SENTENCIA
            
            FIELD_NAME_LATEX=FECHA DE SENTENCIA
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=SE DEJA SIN EFECTOS
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` TINYINT(1) DEFAULT NULL SE DEJA SIN EFECTOS
            
            FIELD_NAME_LATEX=SE DEJA SIN EFECTOS
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=TIPO DE SENTENCIA
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` INT(10) DEFAULT NULL TIPO DE SENTENCIA
            
            FIELD_NAME_LATEX=TIPO DE SENTENCIA
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE PUBLICACIÓN BOLETÍN JUDICIAL
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` DATETIME DEFAULT NULL FECHA DE PUBLICACIÓN BOLETÍN JUDICIAL
            
            FIELD_NAME_LATEX=FECHA DE PUBLICACI\'ON BOLET\'IN JUDICIAL
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD12
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field12` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field12
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de recursos de apelación
    Compobject_description_ini=
	
    COMPOBJECT=LJC06
    compobject=ljc06
    CompObject=Ljc06
    
    compobject_name=libro de recursos de apelación
    CompObject_name=LIBRO DE RECURSOS DE APELACIÓN
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC06S
    compobjectplural=ljc06s
    CompObjectPlural=Ljc06s
    compobject_plural_name=jc06
    CompObject_plural_name=Jc06
    compobject_short_plural_name=jc06
    CompObject_short_plural_name=Jc06
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC06_FS
        FIELDSET_NAME=ljc06_fs
        FIELDSET_CODE_NAME_UPPER=LJC06_FS
        FIELDSET_DESCRIPTION=

{1.1}        

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
            FIELD_NAME=FECHA EN QUE SE INTERPUSO LA APELACIÓN
            FIELD_CODE_NAME_UPPER=FIELD17
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field17` DATETIME DEFAULT NULL FECHA EN QUE SE INTERPUSO LA APELACIÓN
            
            FIELD_NAME_LATEX=FECHA EN QUE SE INTERPUSO LA APELACI\'ON
            FIELD_CODE_NAME_LATEX=field17
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE RESOLUCIÓN  APELADA
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` DATETIME DEFAULT NULL FECHA DE RESOLUCIÓN  APELADA
            
            FIELD_NAME_LATEX=FECHA DE RESOLUCI\'ON  APELADA
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=EFECTOS
            FIELD_CODE_NAME_UPPER=FIELD16
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field16` VARCHAR(45) DEFAULT NULL EFECTOS
            
            FIELD_NAME_LATEX=EFECTOS
            FIELD_CODE_NAME_LATEX=field16
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DEL AUTO ADMISORIO
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` DATETIME DEFAULT NULL FECHA DEL AUTO ADMISORIO
            
            FIELD_NAME_LATEX=FECHA DEL AUTO ADMISORIO
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE CONTESTACIÓN DE AGRAVIOS O REBELDÍA
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` DATETIME DEFAULT NULL FECHA DE CONTESTACIÓN DE AGRAVIOS O REBELDÍA
            
            FIELD_NAME_LATEX=FECHA DE CONTESTACI\'ON DE AGRAVIOS O REBELD\'IA
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE REMISIÓN A  LA SALA
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` DATETIME DEFAULT NULL FECHA DE REMISIÓN A  LA SALA
            
            FIELD_NAME_LATEX=FECHA DE REMISI\'ON A  LA SALA
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=No. DE OFICIO DE REMISIÓN
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` VARCHAR(45) DEFAULT NULL No. DE OFICIO DE REMISIÓN
            
            FIELD_NAME_LATEX=No. DE OFICIO DE REMISI\'ON
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE RECEPCIÓN DE LA SALA
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` DATETIME DEFAULT NULL FECHA DE RECEPCIÓN DE LA SALA
            
            FIELD_NAME_LATEX=FECHA DE RECEPCI\'ON DE LA SALA
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PREVENTIVA
            FIELD_CODE_NAME_UPPER=FIELD12
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field12` TINYINT(1) DEFAULT NULL PREVENTIVA
            
            FIELD_NAME_LATEX=PREVENTIVA
            FIELD_CODE_NAME_LATEX=field12
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE DEVOLUCIÓN
            FIELD_CODE_NAME_UPPER=FIELD13
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field13` DATETIME DEFAULT NULL FECHA DE DEVOLUCIÓN
            
            FIELD_NAME_LATEX=FECHA DE DEVOLUCI\'ON
            FIELD_CODE_NAME_LATEX=field13
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=SENTIDO EN QUE RESUELVE LA SALA
            FIELD_CODE_NAME_UPPER=FIELD14
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field14` VARCHAR(45) DEFAULT NULL SENTIDO EN QUE RESUELVE LA SALA
            
            FIELD_NAME_LATEX=SENTIDO EN QUE RESUELVE LA SALA
            FIELD_CODE_NAME_LATEX=field14
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD15
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field15` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field15
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de exhortos
    Compobject_description_ini=
	
    COMPOBJECT=LJC07
    compobject=ljc07
    CompObject=Ljc07
    
    compobject_name=libro de exhortos
    CompObject_name=LIBRO DE EXHORTOS
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC07S
    compobjectplural=ljc07s
    CompObjectPlural=Ljc07s
    compobject_plural_name=jc07
    CompObject_plural_name=Jc07
    compobject_short_plural_name=jc07
    CompObject_short_plural_name=Jc07
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC07_FS
        FIELDSET_NAME=ljc07_fs
        FIELDSET_CODE_NAME_UPPER=LJC07_FS
        FIELDSET_DESCRIPTION=

{1.1}        

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
            FIELD_NAME=No. DE EXHORTO
            FIELD_CODE_NAME_UPPER=FIELD1
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field1` VARCHAR(45) DEFAULT NULL No. DE EXHORTO
            
            FIELD_NAME_LATEX=No. DE EXHORTO
            FIELD_CODE_NAME_LATEX=field1
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE ENTRADA
            FIELD_CODE_NAME_UPPER=FIELD2
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field2` DATETIME DEFAULT NULL FECHA DE ENTRADA
            
            FIELD_NAME_LATEX=FECHA DE ENTRADA
            FIELD_CODE_NAME_LATEX=field2
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=AUTORIDAD EXHORTANTE
            FIELD_CODE_NAME_UPPER=FIELD3
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field3` VARCHAR(255) DEFAULT NULL AUTORIDAD EXHORTANTE
            
            FIELD_NAME_LATEX=AUTORIDAD EXHORTANTE
            FIELD_CODE_NAME_LATEX=field3
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=AUTO DE RADICACIÓN
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` VARCHAR(45) DEFAULT NULL AUTO DE RADICACIÓN
            
            FIELD_NAME_LATEX=AUTO DE RADICACI\'ON
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DILIGENCIA ENCOMENDADA
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` VARCHAR(45) DEFAULT NULL DILIGENCIA ENCOMENDADA
            
            FIELD_NAME_LATEX=DILIGENCIA ENCOMENDADA
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE DILIGENCIACIÓN
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` DATETIME DEFAULT NULL FECHA DE DILIGENCIACIÓN
            
            FIELD_NAME_LATEX=FECHA DE DILIGENCIACI\'ON
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=SE CUMPLIMENTÓ
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` TINYINT(1) DEFAULT NULL SE CUMPLIMENTÓ
            
            FIELD_NAME_LATEX=SE CUMPLIMENT\'O
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE DEVOLUCIÓN
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` DATETIME DEFAULT NULL FECHA DE DEVOLUCIÓN
            
            FIELD_NAME_LATEX=FECHA DE DEVOLUCI\'ON
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=No. DE OFICIO DE DEVOLUCIÓN
            FIELD_CODE_NAME_UPPER=FIELD12
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field12` VARCHAR(45) DEFAULT NULL No. DE OFICIO DE DEVOLUCIÓN
            
            FIELD_NAME_LATEX=No. DE OFICIO DE DEVOLUCI\'ON
            FIELD_CODE_NAME_LATEX=field12
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD13
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field13` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field13
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de oficios
    Compobject_description_ini=.<br/>El expediente es opcional<br/>Este libro tiene reglas partículares en el layout
	
    COMPOBJECT=LJC08
    compobject=ljc08
    CompObject=Ljc08
    
    compobject_name=libro de oficios
    CompObject_name=LIBRO DE OFICIOS
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC08S
    compobjectplural=ljc08s
    CompObjectPlural=Ljc08s
    compobject_plural_name=jc08
    CompObject_plural_name=Jc08
    compobject_short_plural_name=jc08
    CompObject_short_plural_name=Jc08
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC08_FS
        FIELDSET_NAME=ljc08_fs
        FIELDSET_CODE_NAME_UPPER=LJC08_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=Expediente
            FIELD_CODE_NAME_UPPER=ID_EXPEDIENTE
            FIELD_INTRO=<p>@ToDo add CONSTRAINT id_expediente -&gt; jt_expediente</p><br/> El expediente es opcional en los libros de oficios
            FIELD_DESCRIPTION_INI=<p>@ToDo add CONSTRAINT id_expediente -&gt; jt_expediente</p><br/> El expediente es opcional en los libros de oficios
            FIELD_DESCRIPTION=<p>@ToDo add CONSTRAINT id_expediente -&gt; jt_expediente</p><br/> El expediente es opcional en los libros de oficios 
            FIELDTYPE_ID=33
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_expediente` INT(10) DEFAULT NULL Expediente
            
            FIELD_NAME_LATEX=Expediente
            FIELD_CODE_NAME_LATEX=id\_expediente
            FIELD_DBCOMMENT_LATEX=@ToDo add CONSTRAINT id\_expediente -\&gt; jt\_expediente El expediente es opcional en los libros de oficios
            


        
{-1.2}

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
            FIELD_NAME=FECHA DEL OFICIO
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` DATETIME DEFAULT NULL FECHA DEL OFICIO
            
            FIELD_NAME_LATEX=FECHA DEL OFICIO
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=No. DE OFICIO
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` VARCHAR(45) DEFAULT NULL No. DE OFICIO
            
            FIELD_NAME_LATEX=No. DE OFICIO
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=ASUNTO
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` VARCHAR(45) DEFAULT NULL ASUNTO
            
            FIELD_NAME_LATEX=ASUNTO
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE ENTREGA
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` DATETIME DEFAULT NULL FECHA DE ENTREGA
            
            FIELD_NAME_LATEX=FECHA DE ENTREGA
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de actuarios
    Compobject_description_ini=
	
    COMPOBJECT=LJC09
    compobject=ljc09
    CompObject=Ljc09
    
    compobject_name=libro de actuarios
    CompObject_name=LIBRO DE ACTUARIOS
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC09S
    compobjectplural=ljc09s
    CompObjectPlural=Ljc09s
    compobject_plural_name=jc09
    CompObject_plural_name=Jc09
    compobject_short_plural_name=jc09
    CompObject_short_plural_name=Jc09
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC09_FS
        FIELDSET_NAME=ljc09_fs
        FIELDSET_CODE_NAME_UPPER=LJC09_FS
        FIELDSET_DESCRIPTION=

{1.1}        

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
            FIELD_NAME=NÚMERO DE CUADERNOS O CÉDULAS
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` INT(10) DEFAULT NULL NÚMERO DE CUADERNOS O CÉDULAS
            
            FIELD_NAME_LATEX=N\'UMERO DE CUADERNOS O C\'EDULAS
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE ENTREGA AL ACTUARIO
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` DATETIME DEFAULT NULL FECHA DE ENTREGA AL ACTUARIO
            
            FIELD_NAME_LATEX=FECHA DE ENTREGA AL ACTUARIO
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DEL AUTO POR DILIGENCIAR
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` DATETIME DEFAULT NULL FECHA DEL AUTO POR DILIGENCIAR
            
            FIELD_NAME_LATEX=FECHA DEL AUTO POR DILIGENCIAR
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=LUGAR DONDE DEBE ACTUARSE
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` TEXT DEFAULT NULL LUGAR DONDE DEBE ACTUARSE
            
            FIELD_NAME_LATEX=LUGAR DONDE DEBE ACTUARSE
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE LA DILIGENCIA
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` DATETIME DEFAULT NULL FECHA DE LA DILIGENCIA
            
            FIELD_NAME_LATEX=FECHA DE LA DILIGENCIA
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE LA DEVOLUCIÓN
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` DATETIME DEFAULT NULL FECHA DE LA DEVOLUCIÓN
            
            FIELD_NAME_LATEX=FECHA DE LA DEVOLUCI\'ON
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=USO DE LA FUERZA PÚBLICA
            FIELD_CODE_NAME_UPPER=FIELD14
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field14` TINYINT(1) DEFAULT NULL USO DE LA FUERZA PÚBLICA
            
            FIELD_NAME_LATEX=USO DE LA FUERZA P\'UBLICA
            FIELD_CODE_NAME_LATEX=field14
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DETALLE DEL USO DE LA FUERZA PÚBLICA
            FIELD_CODE_NAME_UPPER=FIELD15
            FIELD_INTRO=Breve descripción para presentar reporte por convenios con la SSP
            FIELD_DESCRIPTION_INI=Breve descripción para presentar reporte por convenios con la SSP
            FIELD_DESCRIPTION=Breve descripción para presentar reporte por convenios con la SSP 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field15` TEXT DEFAULT NULL DETALLE DEL USO DE LA FUERZA PÚBLICA
            
            FIELD_NAME_LATEX=DETALLE DEL USO DE LA FUERZA P\'UBLICA
            FIELD_CODE_NAME_LATEX=field15
            FIELD_DBCOMMENT_LATEX=Breve descripci\'on para presentar reporte por convenios con la SSP
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD13
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field13` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field13
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de auxiliares de la administración de justicia
    Compobject_description_ini=
	
    COMPOBJECT=LJC10
    compobject=ljc10
    CompObject=Ljc10
    
    compobject_name=libro de auxiliares de la administración de justicia
    CompObject_name=LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTICIA
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC10S
    compobjectplural=ljc10s
    CompObjectPlural=Ljc10s
    compobject_plural_name=jc10
    CompObject_plural_name=Jc10
    compobject_short_plural_name=jc10
    CompObject_short_plural_name=Jc10
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC10_FS
        FIELDSET_NAME=ljc10_fs
        FIELDSET_CODE_NAME_UPPER=LJC10_FS
        FIELDSET_DESCRIPTION=

{1.1}        

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
            FIELD_NAME=NOMBRE DEL PERITO (a. paterno)
            FIELD_CODE_NAME_UPPER=FIELD5_PATERNO
            FIELD_INTRO=apellido paterno
            FIELD_DESCRIPTION_INI=apellido paterno
            FIELD_DESCRIPTION=apellido paterno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_paterno` VARCHAR(255) DEFAULT NULL NOMBRE DEL PERITO (a. paterno)
            
            FIELD_NAME_LATEX=NOMBRE DEL PERITO (a. paterno)
            FIELD_CODE_NAME_LATEX=field5\_paterno
            FIELD_DBCOMMENT_LATEX=apellido paterno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL PERITO (a. materno)
            FIELD_CODE_NAME_UPPER=FIELD5_MATERNO
            FIELD_INTRO=apellido materno
            FIELD_DESCRIPTION_INI=apellido materno
            FIELD_DESCRIPTION=apellido materno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_materno` VARCHAR(45) DEFAULT NULL NOMBRE DEL PERITO (a. materno)
            
            FIELD_NAME_LATEX=NOMBRE DEL PERITO (a. materno)
            FIELD_CODE_NAME_LATEX=field5\_materno
            FIELD_DBCOMMENT_LATEX=apellido materno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL PERITO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD5_NOMBRE
            FIELD_INTRO=nombre
            FIELD_DESCRIPTION_INI=nombre
            FIELD_DESCRIPTION=nombre 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_nombre` VARCHAR(45) DEFAULT NULL NOMBRE DEL PERITO (nombre)
            
            FIELD_NAME_LATEX=NOMBRE DEL PERITO (nombre)
            FIELD_CODE_NAME_LATEX=field5\_nombre
            FIELD_DBCOMMENT_LATEX=nombre
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL PERITO (es Moral)
            FIELD_CODE_NAME_UPPER=FIELD5_ISMORAL
            FIELD_INTRO=es Moral
            FIELD_DESCRIPTION_INI=es Moral
            FIELD_DESCRIPTION=es Moral 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_isMoral` TINYINT(1) DEFAULT NULL NOMBRE DEL PERITO (es Moral)
            
            FIELD_NAME_LATEX=NOMBRE DEL PERITO (es Moral)
            FIELD_CODE_NAME_LATEX=field5\_isMoral
            FIELD_DBCOMMENT_LATEX=es Moral
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=ESPECIALIDAD
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` INT(10) DEFAULT NULL ESPECIALIDAD
            
            FIELD_NAME_LATEX=ESPECIALIDAD
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DEL AUTO DE DESIGNACIÓN
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DATETIME DEFAULT NULL FECHA DEL AUTO DE DESIGNACIÓN
            
            FIELD_NAME_LATEX=FECHA DEL AUTO DE DESIGNACI\'ON
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE NOTIFICACIÓN DEL AUTO DE DESIGNACIÓN
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` DATETIME DEFAULT NULL FECHA DE NOTIFICACIÓN DEL AUTO DE DESIGNACIÓN
            
            FIELD_NAME_LATEX=FECHA DE NOTIFICACI\'ON DEL AUTO DE DESIGNACI\'ON
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE ACEPTACIÓN
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` DATETIME DEFAULT NULL FECHA DE ACEPTACIÓN
            
            FIELD_NAME_LATEX=FECHA DE ACEPTACI\'ON
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA EN QUE RINDE EL DICTAMEN
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` DATETIME DEFAULT NULL FECHA EN QUE RINDE EL DICTAMEN
            
            FIELD_NAME_LATEX=FECHA EN QUE RINDE EL DICTAMEN
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de registro de amparos
    Compobject_description_ini=
	
    COMPOBJECT=LJC12
    compobject=ljc12
    CompObject=Ljc12
    
    compobject_name=libro de registro de amparos
    CompObject_name=LIBRO DE REGISTRO DE AMPAROS
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC12S
    compobjectplural=ljc12s
    CompObjectPlural=Ljc12s
    compobject_plural_name=jc12
    CompObject_plural_name=Jc12
    compobject_short_plural_name=jc12
    CompObject_short_plural_name=Jc12
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC12_FS
        FIELDSET_NAME=ljc12_fs
        FIELDSET_CODE_NAME_UPPER=LJC12_FS
        FIELDSET_DESCRIPTION=

{1.1}        

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
            FIELD_NAME=TIPO DE AMPARO
            FIELD_CODE_NAME_UPPER=FIELD1
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field1` VARCHAR(45) DEFAULT NULL TIPO DE AMPARO
            
            FIELD_NAME_LATEX=TIPO DE AMPARO
            FIELD_CODE_NAME_LATEX=field1
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=QUEJOSO (a. paterno)
            FIELD_CODE_NAME_UPPER=FIELD6_PATERNO
            FIELD_INTRO=apellido paterno
            FIELD_DESCRIPTION_INI=apellido paterno
            FIELD_DESCRIPTION=apellido paterno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_paterno` VARCHAR(255) DEFAULT NULL QUEJOSO (a. paterno)
            
            FIELD_NAME_LATEX=QUEJOSO (a. paterno)
            FIELD_CODE_NAME_LATEX=field6\_paterno
            FIELD_DBCOMMENT_LATEX=apellido paterno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=QUEJOSO (a. materno)
            FIELD_CODE_NAME_UPPER=FIELD6_MATERNO
            FIELD_INTRO=apellido materno
            FIELD_DESCRIPTION_INI=apellido materno
            FIELD_DESCRIPTION=apellido materno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_materno` VARCHAR(45) DEFAULT NULL QUEJOSO (a. materno)
            
            FIELD_NAME_LATEX=QUEJOSO (a. materno)
            FIELD_CODE_NAME_LATEX=field6\_materno
            FIELD_DBCOMMENT_LATEX=apellido materno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=QUEJOSO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD6_NOMBRE
            FIELD_INTRO=nombre
            FIELD_DESCRIPTION_INI=nombre
            FIELD_DESCRIPTION=nombre 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_nombre` VARCHAR(45) DEFAULT NULL QUEJOSO (nombre)
            
            FIELD_NAME_LATEX=QUEJOSO (nombre)
            FIELD_CODE_NAME_LATEX=field6\_nombre
            FIELD_DBCOMMENT_LATEX=nombre
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=QUEJOSO (es Moral)
            FIELD_CODE_NAME_UPPER=FIELD6_ISMORAL
            FIELD_INTRO=es Moral
            FIELD_DESCRIPTION_INI=es Moral
            FIELD_DESCRIPTION=es Moral 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_isMoral` TINYINT(1) DEFAULT NULL QUEJOSO (es Moral)
            
            FIELD_NAME_LATEX=QUEJOSO (es Moral)
            FIELD_CODE_NAME_LATEX=field6\_isMoral
            FIELD_DBCOMMENT_LATEX=es Moral
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=ÓRGANO DE PROCEDENCIA
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` INT(10) DEFAULT NULL ÓRGANO DE PROCEDENCIA
            
            FIELD_NAME_LATEX=\'ORGANO DE PROCEDENCIA
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=No. DE AMPARO
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` VARCHAR(45) DEFAULT NULL No. DE AMPARO
            
            FIELD_NAME_LATEX=No. DE AMPARO
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE INGRESO
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` DATETIME DEFAULT NULL FECHA DE INGRESO
            
            FIELD_NAME_LATEX=FECHA DE INGRESO
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=INFORME SOLICITADO
            FIELD_CODE_NAME_UPPER=FIELD12
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field12` INT(10) DEFAULT NULL INFORME SOLICITADO
            
            FIELD_NAME_LATEX=INFORME SOLICITADO
            FIELD_CODE_NAME_LATEX=field12
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE ENVÍO DEL INFORME
            FIELD_CODE_NAME_UPPER=FIELD13
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field13` DATETIME DEFAULT NULL FECHA DE ENVÍO DEL INFORME
            
            FIELD_NAME_LATEX=FECHA DE ENV\'IO DEL INFORME
            FIELD_CODE_NAME_LATEX=field13
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=SENTIDO DE LA RESOLUCIÓN DE AMPARO
            FIELD_CODE_NAME_UPPER=FIELD14
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field14` VARCHAR(45) DEFAULT NULL SENTIDO DE LA RESOLUCIÓN DE AMPARO
            
            FIELD_NAME_LATEX=SENTIDO DE LA RESOLUCI\'ON DE AMPARO
            FIELD_CODE_NAME_LATEX=field14
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=CUMPLIMIENTO
            FIELD_CODE_NAME_UPPER=FIELD15
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field15` TINYINT(1) DEFAULT NULL CUMPLIMIENTO
            
            FIELD_NAME_LATEX=CUMPLIMIENTO
            FIELD_CODE_NAME_LATEX=field15
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD16
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field16` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field16
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de control de fianzas
    Compobject_description_ini=
	
    COMPOBJECT=LJC13
    compobject=ljc13
    CompObject=Ljc13
    
    compobject_name=libro de control de fianzas
    CompObject_name=LIBRO DE CONTROL DE FIANZAS
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC13S
    compobjectplural=ljc13s
    CompObjectPlural=Ljc13s
    compobject_plural_name=jc13
    CompObject_plural_name=Jc13
    compobject_short_plural_name=jc13
    CompObject_short_plural_name=Jc13
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC13_FS
        FIELDSET_NAME=ljc13_fs
        FIELDSET_CODE_NAME_UPPER=LJC13_FS
        FIELDSET_DESCRIPTION=

{1.1}        

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
            FIELD_NAME=GARANTE (a. paterno)
            FIELD_CODE_NAME_UPPER=FIELD2_PATERNO
            FIELD_INTRO=apellido paterno
            FIELD_DESCRIPTION_INI=apellido paterno
            FIELD_DESCRIPTION=apellido paterno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field2_paterno` VARCHAR(255) DEFAULT NULL GARANTE (a. paterno)
            
            FIELD_NAME_LATEX=GARANTE (a. paterno)
            FIELD_CODE_NAME_LATEX=field2\_paterno
            FIELD_DBCOMMENT_LATEX=apellido paterno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=GARANTE (a. materno)
            FIELD_CODE_NAME_UPPER=FIELD2_MATERNO
            FIELD_INTRO=apellido materno
            FIELD_DESCRIPTION_INI=apellido materno
            FIELD_DESCRIPTION=apellido materno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field2_materno` VARCHAR(45) DEFAULT NULL GARANTE (a. materno)
            
            FIELD_NAME_LATEX=GARANTE (a. materno)
            FIELD_CODE_NAME_LATEX=field2\_materno
            FIELD_DBCOMMENT_LATEX=apellido materno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=GARANTE (nombre)
            FIELD_CODE_NAME_UPPER=FIELD2_NOMBRE
            FIELD_INTRO=nombre
            FIELD_DESCRIPTION_INI=nombre
            FIELD_DESCRIPTION=nombre 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field2_nombre` VARCHAR(45) DEFAULT NULL GARANTE (nombre)
            
            FIELD_NAME_LATEX=GARANTE (nombre)
            FIELD_CODE_NAME_LATEX=field2\_nombre
            FIELD_DBCOMMENT_LATEX=nombre
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=GARANTE (es Moral)
            FIELD_CODE_NAME_UPPER=FIELD2_ISMORAL
            FIELD_INTRO=es Moral
            FIELD_DESCRIPTION_INI=es Moral
            FIELD_DESCRIPTION=es Moral 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field2_isMoral` TINYINT(1) DEFAULT NULL GARANTE (es Moral)
            
            FIELD_NAME_LATEX=GARANTE (es Moral)
            FIELD_CODE_NAME_LATEX=field2\_isMoral
            FIELD_DBCOMMENT_LATEX=es Moral
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA EN QUE SE RECIBE LA PÓLIZA DE FIANZA
            FIELD_CODE_NAME_UPPER=FIELD4
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field4` DATETIME DEFAULT NULL FECHA EN QUE SE RECIBE LA PÓLIZA DE FIANZA
            
            FIELD_NAME_LATEX=FECHA EN QUE SE RECIBE LA P\'OLIZA DE FIANZA
            FIELD_CODE_NAME_LATEX=field4
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE LA AFIANZADORA
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` VARCHAR(45) DEFAULT NULL NOMBRE DE LA AFIANZADORA
            
            FIELD_NAME_LATEX=NOMBRE DE LA AFIANZADORA
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=MONTO DE LA PÓLIZA DE FIANZA
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=37
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` DECIMAL(11,2) DEFAULT NULL MONTO DE LA PÓLIZA DE FIANZA
            
            FIELD_NAME_LATEX=MONTO DE LA P\'OLIZA DE FIANZA
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=SI SE HACE EFECTIVA LA GARANTÍA, ANOTAR EL MOTIVO POR EL CUAL SE HIZO EFECTIVA
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=37
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DECIMAL(11,2) DEFAULT NULL SI SE HACE EFECTIVA LA GARANTÍA, ANOTAR EL MOTIVO POR EL CUAL SE HIZO EFECTIVA
            
            FIELD_NAME_LATEX=SI SE HACE EFECTIVA LA GARANT\'IA, ANOTAR EL MOTIVO POR EL CUAL SE HIZO EFECTIVA
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de control de multas
    Compobject_description_ini=
	
    COMPOBJECT=LJC14
    compobject=ljc14
    CompObject=Ljc14
    
    compobject_name=libro de control de multas
    CompObject_name=LIBRO DE CONTROL DE MULTAS
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC14S
    compobjectplural=ljc14s
    CompObjectPlural=Ljc14s
    compobject_plural_name=jc14
    CompObject_plural_name=Jc14
    compobject_short_plural_name=jc14
    CompObject_short_plural_name=Jc14
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC14_FS
        FIELDSET_NAME=ljc14_fs
        FIELDSET_CODE_NAME_UPPER=LJC14_FS
        FIELDSET_DESCRIPTION=

{1.1}        

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
            FIELD_NAME=FECHA DE LA RESOLUCIÓN QUE LA DECRETA
            FIELD_CODE_NAME_UPPER=FIELD4
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field4` DATETIME DEFAULT NULL FECHA DE LA RESOLUCIÓN QUE LA DECRETA
            
            FIELD_NAME_LATEX=FECHA DE LA RESOLUCI\'ON QUE LA DECRETA
            FIELD_CODE_NAME_LATEX=field4
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (a. paterno)
            FIELD_CODE_NAME_UPPER=FIELD5_PATERNO
            FIELD_INTRO=apellido paterno
            FIELD_DESCRIPTION_INI=apellido paterno
            FIELD_DESCRIPTION=apellido paterno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_paterno` VARCHAR(255) DEFAULT NULL NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (a. paterno)
            
            FIELD_NAME_LATEX=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (a. paterno)
            FIELD_CODE_NAME_LATEX=field5\_paterno
            FIELD_DBCOMMENT_LATEX=apellido paterno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (a. materno)
            FIELD_CODE_NAME_UPPER=FIELD5_MATERNO
            FIELD_INTRO=apellido materno
            FIELD_DESCRIPTION_INI=apellido materno
            FIELD_DESCRIPTION=apellido materno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_materno` VARCHAR(45) DEFAULT NULL NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (a. materno)
            
            FIELD_NAME_LATEX=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (a. materno)
            FIELD_CODE_NAME_LATEX=field5\_materno
            FIELD_DBCOMMENT_LATEX=apellido materno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD5_NOMBRE
            FIELD_INTRO=nombre
            FIELD_DESCRIPTION_INI=nombre
            FIELD_DESCRIPTION=nombre 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_nombre` VARCHAR(45) DEFAULT NULL NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (nombre)
            
            FIELD_NAME_LATEX=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (nombre)
            FIELD_CODE_NAME_LATEX=field5\_nombre
            FIELD_DBCOMMENT_LATEX=nombre
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (es Moral)
            FIELD_CODE_NAME_UPPER=FIELD5_ISMORAL
            FIELD_INTRO=es Moral
            FIELD_DESCRIPTION_INI=es Moral
            FIELD_DESCRIPTION=es Moral 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_isMoral` TINYINT(1) DEFAULT NULL NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (es Moral)
            
            FIELD_NAME_LATEX=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (es Moral)
            FIELD_CODE_NAME_LATEX=field5\_isMoral
            FIELD_DBCOMMENT_LATEX=es Moral
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=No. DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIÓN
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` VARCHAR(45) DEFAULT NULL No. DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIÓN
            
            FIELD_NAME_LATEX=No. DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCI\'ON
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIÓN
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DATETIME DEFAULT NULL FECHA DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIÓN
            
            FIELD_NAME_LATEX=FECHA DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCI\'ON
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=MONTO DE LA MULTA
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=37
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` DECIMAL(11,2) DEFAULT NULL MONTO DE LA MULTA
            
            FIELD_NAME_LATEX=MONTO DE LA MULTA
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE ENTREGA DEL DOCUMENTO A LA AUTORIDAD
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` DATETIME DEFAULT NULL FECHA DE ENTREGA DEL DOCUMENTO A LA AUTORIDAD
            
            FIELD_NAME_LATEX=FECHA DE ENTREGA DEL DOCUMENTO A LA AUTORIDAD
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD12
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field12` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field12
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Agenda de audiencias
    Compobject_description_ini=<br/>Este libro se distribuye por secretaría
	
    COMPOBJECT=LJC16
    compobject=ljc16
    CompObject=Ljc16
    
    compobject_name=agenda de audiencias
    CompObject_name=AGENDA DE AUDIENCIAS
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC16S
    compobjectplural=ljc16s
    CompObjectPlural=Ljc16s
    compobject_plural_name=jc16
    CompObject_plural_name=Jc16
    compobject_short_plural_name=jc16
    CompObject_short_plural_name=Jc16
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC16_FS
        FIELDSET_NAME=ljc16_fs
        FIELDSET_CODE_NAME_UPPER=LJC16_FS
        FIELDSET_DESCRIPTION=

{1.1}        

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
            FIELD_NAME=FECHA DEL AUTO EN QUE SE SEÑALA LA AUDIENCIA
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` DATETIME DEFAULT NULL FECHA DEL AUTO EN QUE SE SEÑALA LA AUDIENCIA
            
            FIELD_NAME_LATEX=FECHA DEL AUTO EN QUE SE SE\~NALA LA AUDIENCIA
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=TIPO DE AUDIENCIA
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` VARCHAR(45) DEFAULT NULL TIPO DE AUDIENCIA
            
            FIELD_NAME_LATEX=TIPO DE AUDIENCIA
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE LA AUDIENCIA
            FIELD_CODE_NAME_UPPER=FAUDIENCIA
            FIELD_INTRO=FECHA Y HORA DE LA CELEBRACIÓN DE LA AUDIENCIA
            FIELD_DESCRIPTION_INI=FECHA Y HORA DE LA CELEBRACIÓN DE LA AUDIENCIA
            FIELD_DESCRIPTION=FECHA Y HORA DE LA CELEBRACIÓN DE LA AUDIENCIA 
            FIELDTYPE_ID=36
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`faudiencia` DATETIME DEFAULT NULL FECHA DE LA AUDIENCIA
            
            FIELD_NAME_LATEX=FECHA DE LA AUDIENCIA
            FIELD_CODE_NAME_LATEX=faudiencia
            FIELD_DBCOMMENT_LATEX=FECHA Y HORA DE LA CELEBRACI\'ON DE LA AUDIENCIA
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PRUEBAS A DESAHOGAR
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` TEXT DEFAULT NULL PRUEBAS A DESAHOGAR
            
            FIELD_NAME_LATEX=PRUEBAS A DESAHOGAR
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de remisión al archivo
    Compobject_description_ini=
	
    COMPOBJECT=LJC17
    compobject=ljc17
    CompObject=Ljc17
    
    compobject_name=libro de remisión al archivo
    CompObject_name=LIBRO DE REMISIÓN AL ARCHIVO
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC17S
    compobjectplural=ljc17s
    CompObjectPlural=Ljc17s
    compobject_plural_name=jc17
    CompObject_plural_name=Jc17
    compobject_short_plural_name=jc17
    CompObject_short_plural_name=Jc17
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC17_FS
        FIELDSET_NAME=ljc17_fs
        FIELDSET_CODE_NAME_UPPER=LJC17_FS
        FIELDSET_DESCRIPTION=

{1.1}        

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
            FIELD_NAME=NÚMERO DE FOJAS
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` INT(10) DEFAULT NULL NÚMERO DE FOJAS
            
            FIELD_NAME_LATEX=N\'UMERO DE FOJAS
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=No. Y DESCRIPCIÓN DE LOS EXPEDIENTES
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` TEXT DEFAULT NULL No. Y DESCRIPCIÓN DE LOS EXPEDIENTES
            
            FIELD_NAME_LATEX=No. Y DESCRIPCI\'ON DE LOS EXPEDIENTES
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DEL AUTO DE REMISIÓN
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DATETIME DEFAULT NULL FECHA DEL AUTO DE REMISIÓN
            
            FIELD_NAME_LATEX=FECHA DEL AUTO DE REMISI\'ON
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=ESTADO PROCESAL
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` VARCHAR(45) DEFAULT NULL ESTADO PROCESAL
            
            FIELD_NAME_LATEX=ESTADO PROCESAL
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE RECEPCIÓN DEL ARCHIVO JUDICIAL
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` DATETIME DEFAULT NULL FECHA DE RECEPCIÓN DEL ARCHIVO JUDICIAL
            
            FIELD_NAME_LATEX=FECHA DE RECEPCI\'ON DEL ARCHIVO JUDICIAL
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE DEVOLUCIÓN
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` DATETIME DEFAULT NULL FECHA DE DEVOLUCIÓN
            
            FIELD_NAME_LATEX=FECHA DE DEVOLUCI\'ON
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=MOTIVO DE LA REMISIÓN AL ARCHIVO
            FIELD_CODE_NAME_UPPER=FIELD15
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field15` INT(10) DEFAULT NULL MOTIVO DE LA REMISIÓN AL ARCHIVO
            
            FIELD_NAME_LATEX=MOTIVO DE LA REMISI\'ON AL ARCHIVO
            FIELD_CODE_NAME_LATEX=field15
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD16
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field16` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field16
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de remisión de documentos al archivo
    Compobject_description_ini=
	
    COMPOBJECT=LJC18
    compobject=ljc18
    CompObject=Ljc18
    
    compobject_name=libro de remisión de documentos al archivo
    CompObject_name=LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC18S
    compobjectplural=ljc18s
    CompObjectPlural=Ljc18s
    compobject_plural_name=jc18
    CompObject_plural_name=Jc18
    compobject_short_plural_name=jc18
    CompObject_short_plural_name=Jc18
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC18_FS
        FIELDSET_NAME=ljc18_fs
        FIELDSET_CODE_NAME_UPPER=LJC18_FS
        FIELDSET_DESCRIPTION=

{1.1}        

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
            FIELD_NAME=FOJAS
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` INT(10) DEFAULT NULL FOJAS
            
            FIELD_NAME_LATEX=FOJAS
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=No. Y DESCRIPCIÓN DE DOCUMENTOS
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` TEXT DEFAULT NULL No. Y DESCRIPCIÓN DE DOCUMENTOS
            
            FIELD_NAME_LATEX=No. Y DESCRIPCI\'ON DE DOCUMENTOS
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DEL AUTO DE REMISIÓN
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DATETIME DEFAULT NULL FECHA DEL AUTO DE REMISIÓN
            
            FIELD_NAME_LATEX=FECHA DEL AUTO DE REMISI\'ON
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE RECEPCIÓN DEL ARCHIVO JUDICIAL
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` DATETIME DEFAULT NULL FECHA DE RECEPCIÓN DEL ARCHIVO JUDICIAL
            
            FIELD_NAME_LATEX=FECHA DE RECEPCI\'ON DEL ARCHIVO JUDICIAL
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBIÓ DEL ARCHIVO (a. paterno)
            FIELD_CODE_NAME_UPPER=FIELD10_PATERNO
            FIELD_INTRO=apellido paterno
            FIELD_DESCRIPTION_INI=apellido paterno
            FIELD_DESCRIPTION=apellido paterno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10_paterno` VARCHAR(255) DEFAULT NULL PERSONA QUE RECIBIÓ DEL ARCHIVO (a. paterno)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI\'O DEL ARCHIVO (a. paterno)
            FIELD_CODE_NAME_LATEX=field10\_paterno
            FIELD_DBCOMMENT_LATEX=apellido paterno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBIÓ DEL ARCHIVO (a. materno)
            FIELD_CODE_NAME_UPPER=FIELD10_MATERNO
            FIELD_INTRO=apellido materno
            FIELD_DESCRIPTION_INI=apellido materno
            FIELD_DESCRIPTION=apellido materno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10_materno` VARCHAR(45) DEFAULT NULL PERSONA QUE RECIBIÓ DEL ARCHIVO (a. materno)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI\'O DEL ARCHIVO (a. materno)
            FIELD_CODE_NAME_LATEX=field10\_materno
            FIELD_DBCOMMENT_LATEX=apellido materno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD10_NOMBRE
            FIELD_INTRO=nombre
            FIELD_DESCRIPTION_INI=nombre
            FIELD_DESCRIPTION=nombre 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10_nombre` VARCHAR(45) DEFAULT NULL PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI\'O DEL ARCHIVO (nombre)
            FIELD_CODE_NAME_LATEX=field10\_nombre
            FIELD_DBCOMMENT_LATEX=nombre
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBIÓ DEL ARCHIVO (es Moral)
            FIELD_CODE_NAME_UPPER=FIELD10_ISMORAL
            FIELD_INTRO=es Moral
            FIELD_DESCRIPTION_INI=es Moral
            FIELD_DESCRIPTION=es Moral 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10_isMoral` TINYINT(1) DEFAULT NULL PERSONA QUE RECIBIÓ DEL ARCHIVO (es Moral)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI\'O DEL ARCHIVO (es Moral)
            FIELD_CODE_NAME_LATEX=field10\_isMoral
            FIELD_DBCOMMENT_LATEX=es Moral
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE DEVOLUCIÓN
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` DATETIME DEFAULT NULL FECHA DE DEVOLUCIÓN
            
            FIELD_NAME_LATEX=FECHA DE DEVOLUCI\'ON
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD16
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field16` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field16
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de envío de expedientes al archivo judicial para su destrucción
    Compobject_description_ini=
	
    COMPOBJECT=LJC19
    compobject=ljc19
    CompObject=Ljc19
    
    compobject_name=libro de envío de expedientes al archivo judicial para su destrucción
    CompObject_name=LIBRO DE ENVÍO DE EXPEDIENTES AL ARCHIVO JUDICIAL PARA SU DESTRUCCIÓN
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC19S
    compobjectplural=ljc19s
    CompObjectPlural=Ljc19s
    compobject_plural_name=jc19
    CompObject_plural_name=Jc19
    compobject_short_plural_name=jc19
    CompObject_short_plural_name=Jc19
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC19_FS
        FIELDSET_NAME=ljc19_fs
        FIELDSET_CODE_NAME_UPPER=LJC19_FS
        FIELDSET_DESCRIPTION=

{1.1}        

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
            FIELD_NAME=NÚMERO DE FOJAS
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` INT(10) DEFAULT NULL NÚMERO DE FOJAS
            
            FIELD_NAME_LATEX=N\'UMERO DE FOJAS
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DEL AUTO DE REMISIÓN PARA ANÁLISIS DE COTECIAD
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` DATETIME DEFAULT NULL FECHA DEL AUTO DE REMISIÓN PARA ANÁLISIS DE COTECIAD
            
            FIELD_NAME_LATEX=FECHA DEL AUTO DE REMISI\'ON PARA AN\'ALISIS DE COTECIAD
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE RECEPCIÓN EN EL ARCHIVO JUDICIAL
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DATETIME DEFAULT NULL FECHA DE RECEPCIÓN EN EL ARCHIVO JUDICIAL
            
            FIELD_NAME_LATEX=FECHA DE RECEPCI\'ON EN EL ARCHIVO JUDICIAL
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBIÓ DEL ARCHIVO (a. paterno)
            FIELD_CODE_NAME_UPPER=FIELD8_PATERNO
            FIELD_INTRO=apellido paterno
            FIELD_DESCRIPTION_INI=apellido paterno
            FIELD_DESCRIPTION=apellido paterno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_paterno` VARCHAR(255) DEFAULT NULL PERSONA QUE RECIBIÓ DEL ARCHIVO (a. paterno)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI\'O DEL ARCHIVO (a. paterno)
            FIELD_CODE_NAME_LATEX=field8\_paterno
            FIELD_DBCOMMENT_LATEX=apellido paterno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBIÓ DEL ARCHIVO (a. materno)
            FIELD_CODE_NAME_UPPER=FIELD8_MATERNO
            FIELD_INTRO=apellido materno
            FIELD_DESCRIPTION_INI=apellido materno
            FIELD_DESCRIPTION=apellido materno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_materno` VARCHAR(45) DEFAULT NULL PERSONA QUE RECIBIÓ DEL ARCHIVO (a. materno)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI\'O DEL ARCHIVO (a. materno)
            FIELD_CODE_NAME_LATEX=field8\_materno
            FIELD_DBCOMMENT_LATEX=apellido materno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD8_NOMBRE
            FIELD_INTRO=nombre
            FIELD_DESCRIPTION_INI=nombre
            FIELD_DESCRIPTION=nombre 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_nombre` VARCHAR(45) DEFAULT NULL PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI\'O DEL ARCHIVO (nombre)
            FIELD_CODE_NAME_LATEX=field8\_nombre
            FIELD_DBCOMMENT_LATEX=nombre
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBIÓ DEL ARCHIVO (es Moral)
            FIELD_CODE_NAME_UPPER=FIELD8_ISMORAL
            FIELD_INTRO=es Moral
            FIELD_DESCRIPTION_INI=es Moral
            FIELD_DESCRIPTION=es Moral 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_isMoral` TINYINT(1) DEFAULT NULL PERSONA QUE RECIBIÓ DEL ARCHIVO (es Moral)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI\'O DEL ARCHIVO (es Moral)
            FIELD_CODE_NAME_LATEX=field8\_isMoral
            FIELD_DBCOMMENT_LATEX=es Moral
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD12
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field12` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field12
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de control de asuntos conforme a los artículos 13 fracción xiv y 25 de la ley de transparencia y acceso a la información pública
    Compobject_description_ini=
	
    COMPOBJECT=LJC20
    compobject=ljc20
    CompObject=Ljc20
    
    compobject_name=libro de control de asuntos conforme a los artículos 13 fracción xiv y 25 de la ley de transparencia y acceso a la información pública
    CompObject_name=LIBRO DE CONTROL DE ASUNTOS CONFORME A LOS ARTÍCULOS 13 FRACCIÓN XIV Y 25 DE LA LEY DE TRANSPARENCIA Y ACCESO A LA INFORMACIÓN PÚBLICA
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC20S
    compobjectplural=ljc20s
    CompObjectPlural=Ljc20s
    compobject_plural_name=jc20
    CompObject_plural_name=Jc20
    compobject_short_plural_name=jc20
    CompObject_short_plural_name=Jc20
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC20_FS
        FIELDSET_NAME=ljc20_fs
        FIELDSET_CODE_NAME_UPPER=LJC20_FS
        FIELDSET_DESCRIPTION=

{1.1}        

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
            FIELD_NAME=FECHA DE ENTRADA
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` DATETIME DEFAULT NULL FECHA DE ENTRADA
            
            FIELD_NAME_LATEX=FECHA DE ENTRADA
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DEL AUTO DE VISTA
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` DATETIME DEFAULT NULL FECHA DEL AUTO DE VISTA
            
            FIELD_NAME_LATEX=FECHA DEL AUTO DE VISTA
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=ESTA DE ACUERDO?
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` TINYINT(1) DEFAULT NULL ESTA DE ACUERDO?
            
            FIELD_NAME_LATEX=ESTA DE ACUERDO?
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DEL ACUERDO DE DESAHOGO
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` DATETIME DEFAULT NULL FECHA DEL ACUERDO DE DESAHOGO
            
            FIELD_NAME_LATEX=FECHA DEL ACUERDO DE DESAHOGO
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de ministerio público
    Compobject_description_ini=
	
    COMPOBJECT=LJC21
    compobject=ljc21
    CompObject=Ljc21
    
    compobject_name=libro de ministerio público
    CompObject_name=LIBRO DE MINISTERIO PÚBLICO
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC21S
    compobjectplural=ljc21s
    CompObjectPlural=Ljc21s
    compobject_plural_name=jc21
    CompObject_plural_name=Jc21
    compobject_short_plural_name=jc21
    CompObject_short_plural_name=Jc21
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC21_FS
        FIELDSET_NAME=ljc21_fs
        FIELDSET_CODE_NAME_UPPER=LJC21_FS
        FIELDSET_DESCRIPTION=

{1.1}        

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
            FIELD_NAME=FECHA DEL AUTO QUE ORDENA LA VISTA
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` DATETIME DEFAULT NULL FECHA DEL AUTO QUE ORDENA LA VISTA
            
            FIELD_NAME_LATEX=FECHA DEL AUTO QUE ORDENA LA VISTA
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE PUBLICACIÓN DE AUTO QUE ORDENA LA VISTA
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` DATETIME DEFAULT NULL FECHA DE PUBLICACIÓN DE AUTO QUE ORDENA LA VISTA
            
            FIELD_NAME_LATEX=FECHA DE PUBLICACI\'ON DE AUTO QUE ORDENA LA VISTA
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE LA VISTA AL MP
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DATETIME DEFAULT NULL FECHA DE LA VISTA AL MP
            
            FIELD_NAME_LATEX=FECHA DE LA VISTA AL MP
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL MP (a. paterno)
            FIELD_CODE_NAME_UPPER=FIELD8_PATERNO
            FIELD_INTRO=apellido paterno
            FIELD_DESCRIPTION_INI=apellido paterno
            FIELD_DESCRIPTION=apellido paterno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_paterno` VARCHAR(255) DEFAULT NULL NOMBRE DEL MP (a. paterno)
            
            FIELD_NAME_LATEX=NOMBRE DEL MP (a. paterno)
            FIELD_CODE_NAME_LATEX=field8\_paterno
            FIELD_DBCOMMENT_LATEX=apellido paterno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL MP (a. materno)
            FIELD_CODE_NAME_UPPER=FIELD8_MATERNO
            FIELD_INTRO=apellido materno
            FIELD_DESCRIPTION_INI=apellido materno
            FIELD_DESCRIPTION=apellido materno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_materno` VARCHAR(45) DEFAULT NULL NOMBRE DEL MP (a. materno)
            
            FIELD_NAME_LATEX=NOMBRE DEL MP (a. materno)
            FIELD_CODE_NAME_LATEX=field8\_materno
            FIELD_DBCOMMENT_LATEX=apellido materno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL MP (nombre)
            FIELD_CODE_NAME_UPPER=FIELD8_NOMBRE
            FIELD_INTRO=nombre
            FIELD_DESCRIPTION_INI=nombre
            FIELD_DESCRIPTION=nombre 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_nombre` VARCHAR(45) DEFAULT NULL NOMBRE DEL MP (nombre)
            
            FIELD_NAME_LATEX=NOMBRE DEL MP (nombre)
            FIELD_CODE_NAME_LATEX=field8\_nombre
            FIELD_DBCOMMENT_LATEX=nombre
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL MP (es Moral)
            FIELD_CODE_NAME_UPPER=FIELD8_ISMORAL
            FIELD_INTRO=es Moral
            FIELD_DESCRIPTION_INI=es Moral
            FIELD_DESCRIPTION=es Moral 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_isMoral` TINYINT(1) DEFAULT NULL NOMBRE DEL MP (es Moral)
            
            FIELD_NAME_LATEX=NOMBRE DEL MP (es Moral)
            FIELD_CODE_NAME_LATEX=field8\_isMoral
            FIELD_DBCOMMENT_LATEX=es Moral
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DEL MP
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=34
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` INT(10) DEFAULT NULL DEL MP
            
            FIELD_NAME_LATEX=DEL MP
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DEL MP
            FIELD_CODE_NAME_UPPER=FIELD9H
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=39
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9h` INT(10) DEFAULT NULL DEL MP
            
            FIELD_NAME_LATEX=DEL MP
            FIELD_CODE_NAME_LATEX=field9h
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE DEVOLUCIÓN DEL MP
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` VARCHAR(45) DEFAULT NULL FECHA DE DEVOLUCIÓN DEL MP
            
            FIELD_NAME_LATEX=FECHA DE DEVOLUCI\'ON DEL MP
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD}
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

