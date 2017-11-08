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
    
    compobject_name=libro de gobierno
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC01S
    compobjectplural=ljc01s
    compobject_plural_name=jc01
    CompObject_plural_name=Jc01
    compobject_short_plural_name=jc01
    CompObject_short_plural_name=Jc01
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC01_FS
        FIELDSET_NAME=jc01_fs
        FIELDSET_CODE_NAME_UPPER=JC01_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
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
            FIELD_NAME=CUANTA
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` INT(10) DEFAULT NULL CUANTA
            
            FIELD_NAME_LATEX=CUANTA
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
            FIELD_NAME=TIPO DE RESOLUCIN
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` INT(10) DEFAULT NULL TIPO DE RESOLUCIN
            
            FIELD_NAME_LATEX=TIPO DE RESOLUCIN
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE LA RESOLUCIN
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` DATETIME DEFAULT NULL FECHA DE LA RESOLUCIN
            
            FIELD_NAME_LATEX=FECHA DE LA RESOLUCIN
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=SENTIDO DE LA RESOLUCIN
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` VARCHAR(45) DEFAULT NULL SENTIDO DE LA RESOLUCIN
            
            FIELD_NAME_LATEX=SENTIDO DE LA RESOLUCIN
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE LA RESOLUCIN DE LA SALA
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` DATETIME DEFAULT NULL FECHA DE LA RESOLUCIN DE LA SALA
            
            FIELD_NAME_LATEX=FECHA DE LA RESOLUCIN DE LA SALA
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=SENTIDO DE LA RESOLUCIN DE LA SALA
            FIELD_CODE_NAME_UPPER=FIELD12
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field12` VARCHAR(45) DEFAULT NULL SENTIDO DE LA RESOLUCIN DE LA SALA
            
            FIELD_NAME_LATEX=SENTIDO DE LA RESOLUCIN DE LA SALA
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
    
    compobject_name=libro de ingresos de valores
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC02S
    compobjectplural=ljc02s
    compobject_plural_name=jc02
    CompObject_plural_name=Jc02
    compobject_short_plural_name=jc02
    CompObject_short_plural_name=Jc02
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC02_FS
        FIELDSET_NAME=jc02_fs
        FIELDSET_CODE_NAME_UPPER=JC02_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
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
            FIELD_NAME=No DEL DOCUMENTO
            FIELD_CODE_NAME_UPPER=FIELD4
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field4` VARCHAR(45) DEFAULT NULL No DEL DOCUMENTO
            
            FIELD_NAME_LATEX=No DEL DOCUMENTO
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
    
    compobject_name=libro de egresos de valores
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC03S
    compobjectplural=ljc03s
    compobject_plural_name=jc03
    CompObject_plural_name=Jc03
    compobject_short_plural_name=jc03
    CompObject_short_plural_name=Jc03
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC03_FS
        FIELDSET_NAME=jc03_fs
        FIELDSET_CODE_NAME_UPPER=JC03_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
            FIELD_CODE_NAME_LATEX=anoj
            FIELD_DBCOMMENT_LATEX=A\~no judicial
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=BENEFICIARIO (a paterno)
            FIELD_CODE_NAME_UPPER=FIELD1_PATERNO
            FIELD_INTRO=apellido paterno
            FIELD_DESCRIPTION_INI=apellido paterno
            FIELD_DESCRIPTION=apellido paterno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field1_paterno` VARCHAR(255) DEFAULT NULL BENEFICIARIO (a paterno)
            
            FIELD_NAME_LATEX=BENEFICIARIO (a paterno)
            FIELD_CODE_NAME_LATEX=field1\_paterno
            FIELD_DBCOMMENT_LATEX=apellido paterno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=BENEFICIARIO (a materno)
            FIELD_CODE_NAME_UPPER=FIELD1_MATERNO
            FIELD_INTRO=apellido materno
            FIELD_DESCRIPTION_INI=apellido materno
            FIELD_DESCRIPTION=apellido materno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field1_materno` VARCHAR(45) DEFAULT NULL BENEFICIARIO (a materno)
            
            FIELD_NAME_LATEX=BENEFICIARIO (a materno)
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
            FIELD_NAME=NOMBRE DE QUIEN RECIBE (a paterno)
            FIELD_CODE_NAME_UPPER=FIELD6_PATERNO
            FIELD_INTRO=apellido paterno
            FIELD_DESCRIPTION_INI=apellido paterno
            FIELD_DESCRIPTION=apellido paterno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_paterno` VARCHAR(255) DEFAULT NULL NOMBRE DE QUIEN RECIBE (a paterno)
            
            FIELD_NAME_LATEX=NOMBRE DE QUIEN RECIBE (a paterno)
            FIELD_CODE_NAME_LATEX=field6\_paterno
            FIELD_DBCOMMENT_LATEX=apellido paterno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE QUIEN RECIBE (a materno)
            FIELD_CODE_NAME_UPPER=FIELD6_MATERNO
            FIELD_INTRO=apellido materno
            FIELD_DESCRIPTION_INI=apellido materno
            FIELD_DESCRIPTION=apellido materno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_materno` VARCHAR(45) DEFAULT NULL NOMBRE DE QUIEN RECIBE (a materno)
            
            FIELD_NAME_LATEX=NOMBRE DE QUIEN RECIBE (a materno)
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
            FIELD_NAME=DATOS DE IDENTIFICACIN
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` VARCHAR(45) DEFAULT NULL DATOS DE IDENTIFICACIN
            
            FIELD_NAME_LATEX=DATOS DE IDENTIFICACIN
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
            FIELD_NAME=FECHA  DEL AUTO QUE ORDENA LA DEVOLUCIN
            FIELD_CODE_NAME_UPPER=FIELD14
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field14` DATETIME DEFAULT NULL FECHA  DEL AUTO QUE ORDENA LA DEVOLUCIN
            
            FIELD_NAME_LATEX=FECHA  DEL AUTO QUE ORDENA LA DEVOLUCIN
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
    
    compobject_name=libro de registro de promociones
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC04S
    compobjectplural=ljc04s
    compobject_plural_name=jc04
    CompObject_plural_name=Jc04
    compobject_short_plural_name=jc04
    CompObject_short_plural_name=Jc04
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC04_FS
        FIELDSET_NAME=jc04_fs
        FIELDSET_CODE_NAME_UPPER=JC04_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
            FIELD_CODE_NAME_LATEX=anoj
            FIELD_DBCOMMENT_LATEX=A\~no judicial
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA Y HORA DE RECEPCIN
            FIELD_CODE_NAME_UPPER=FIELD1
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=36
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field1` DATETIME DEFAULT NULL FECHA Y HORA DE RECEPCIN
            
            FIELD_NAME_LATEX=FECHA Y HORA DE RECEPCIN
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
    
    compobject_name=libro de turno para sentencia
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC05S
    compobjectplural=ljc05s
    compobject_plural_name=jc05
    CompObject_plural_name=Jc05
    compobject_short_plural_name=jc05
    CompObject_short_plural_name=Jc05
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC05_FS
        FIELDSET_NAME=jc05_fs
        FIELDSET_CODE_NAME_UPPER=JC05_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
            FIELD_CODE_NAME_LATEX=anoj
            FIELD_DBCOMMENT_LATEX=A\~no judicial
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NMERO DE FOJAS
            FIELD_CODE_NAME_UPPER=FIELD2
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field2` INT(10) DEFAULT NULL NMERO DE FOJAS
            
            FIELD_NAME_LATEX=NMERO DE FOJAS
            FIELD_CODE_NAME_LATEX=field2
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE CITACIN
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` DATETIME DEFAULT NULL FECHA DE CITACIN
            
            FIELD_NAME_LATEX=FECHA DE CITACIN
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE LA PUBLICACIN DE LA CITACIN
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DATETIME DEFAULT NULL FECHA DE LA PUBLICACIN DE LA CITACIN
            
            FIELD_NAME_LATEX=FECHA DE LA PUBLICACIN DE LA CITACIN
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
            FIELD_NAME=FECHA DE PUBLICACIN BOLETN JUDICIAL
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` DATETIME DEFAULT NULL FECHA DE PUBLICACIN BOLETN JUDICIAL
            
            FIELD_NAME_LATEX=FECHA DE PUBLICACIN BOLETN JUDICIAL
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
    Compobject_name=Libro de recursos de apelacin
    Compobject_description_ini=
	
    COMPOBJECT=LJC06
    compobject=ljc06
    
    compobject_name=libro de recursos de apelacin
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC06S
    compobjectplural=ljc06s
    compobject_plural_name=jc06
    CompObject_plural_name=Jc06
    compobject_short_plural_name=jc06
    CompObject_short_plural_name=Jc06
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC06_FS
        FIELDSET_NAME=jc06_fs
        FIELDSET_CODE_NAME_UPPER=JC06_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
            FIELD_CODE_NAME_LATEX=anoj
            FIELD_DBCOMMENT_LATEX=A\~no judicial
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA EN QUE SE INTERPUSO LA APELACIN
            FIELD_CODE_NAME_UPPER=FIELD17
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field17` DATETIME DEFAULT NULL FECHA EN QUE SE INTERPUSO LA APELACIN
            
            FIELD_NAME_LATEX=FECHA EN QUE SE INTERPUSO LA APELACIN
            FIELD_CODE_NAME_LATEX=field17
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE RESOLUCIN  APELADA
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` DATETIME DEFAULT NULL FECHA DE RESOLUCIN  APELADA
            
            FIELD_NAME_LATEX=FECHA DE RESOLUCIN  APELADA
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
            FIELD_NAME=FECHA DE CONTESTACIN DE AGRAVIOS O REBELDA
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` DATETIME DEFAULT NULL FECHA DE CONTESTACIN DE AGRAVIOS O REBELDA
            
            FIELD_NAME_LATEX=FECHA DE CONTESTACIN DE AGRAVIOS O REBELDA
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE REMISIN A  LA SALA
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` DATETIME DEFAULT NULL FECHA DE REMISIN A  LA SALA
            
            FIELD_NAME_LATEX=FECHA DE REMISIN A  LA SALA
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=No DE OFICIO DE REMISIN
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` VARCHAR(45) DEFAULT NULL No DE OFICIO DE REMISIN
            
            FIELD_NAME_LATEX=No DE OFICIO DE REMISIN
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE RECEPCIN DE LA SALA
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` DATETIME DEFAULT NULL FECHA DE RECEPCIN DE LA SALA
            
            FIELD_NAME_LATEX=FECHA DE RECEPCIN DE LA SALA
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
            FIELD_NAME=FECHA DE DEVOLUCIN
            FIELD_CODE_NAME_UPPER=FIELD13
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field13` DATETIME DEFAULT NULL FECHA DE DEVOLUCIN
            
            FIELD_NAME_LATEX=FECHA DE DEVOLUCIN
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
    
    compobject_name=libro de exhortos
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC07S
    compobjectplural=ljc07s
    compobject_plural_name=jc07
    CompObject_plural_name=Jc07
    compobject_short_plural_name=jc07
    CompObject_short_plural_name=Jc07
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC07_FS
        FIELDSET_NAME=jc07_fs
        FIELDSET_CODE_NAME_UPPER=JC07_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
            FIELD_CODE_NAME_LATEX=anoj
            FIELD_DBCOMMENT_LATEX=A\~no judicial
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=No DE EXHORTO
            FIELD_CODE_NAME_UPPER=FIELD1
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field1` VARCHAR(45) DEFAULT NULL No DE EXHORTO
            
            FIELD_NAME_LATEX=No DE EXHORTO
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
            FIELD_NAME=AUTO DE RADICACIN
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` VARCHAR(45) DEFAULT NULL AUTO DE RADICACIN
            
            FIELD_NAME_LATEX=AUTO DE RADICACIN
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
            FIELD_NAME=FECHA DE DILIGENCIACIN
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` DATETIME DEFAULT NULL FECHA DE DILIGENCIACIN
            
            FIELD_NAME_LATEX=FECHA DE DILIGENCIACIN
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=SE CUMPLIMENT
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` TINYINT(1) DEFAULT NULL SE CUMPLIMENT
            
            FIELD_NAME_LATEX=SE CUMPLIMENT
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE DEVOLUCIN
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` DATETIME DEFAULT NULL FECHA DE DEVOLUCIN
            
            FIELD_NAME_LATEX=FECHA DE DEVOLUCIN
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=No DE OFICIO DE DEVOLUCIN
            FIELD_CODE_NAME_UPPER=FIELD12
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field12` VARCHAR(45) DEFAULT NULL No DE OFICIO DE DEVOLUCIN
            
            FIELD_NAME_LATEX=No DE OFICIO DE DEVOLUCIN
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
    
    compobject_name=libro de oficios
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC08S
    compobjectplural=ljc08s
    compobject_plural_name=jc08
    CompObject_plural_name=Jc08
    compobject_short_plural_name=jc08
    CompObject_short_plural_name=Jc08
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC08_FS
        FIELDSET_NAME=jc08_fs
        FIELDSET_CODE_NAME_UPPER=JC08_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
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
            FIELD_NAME=No DE OFICIO
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` VARCHAR(45) DEFAULT NULL No DE OFICIO
            
            FIELD_NAME_LATEX=No DE OFICIO
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
    
    compobject_name=libro de actuarios
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC09S
    compobjectplural=ljc09s
    compobject_plural_name=jc09
    CompObject_plural_name=Jc09
    compobject_short_plural_name=jc09
    CompObject_short_plural_name=Jc09
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC09_FS
        FIELDSET_NAME=jc09_fs
        FIELDSET_CODE_NAME_UPPER=JC09_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
            FIELD_CODE_NAME_LATEX=anoj
            FIELD_DBCOMMENT_LATEX=A\~no judicial
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NMERO DE CUADERNOS O CDULAS
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` INT(10) DEFAULT NULL NMERO DE CUADERNOS O CDULAS
            
            FIELD_NAME_LATEX=NMERO DE CUADERNOS O CDULAS
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
            FIELD_NAME=FECHA DE LA DEVOLUCIN
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` DATETIME DEFAULT NULL FECHA DE LA DEVOLUCIN
            
            FIELD_NAME_LATEX=FECHA DE LA DEVOLUCIN
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=USO DE LA FUERZA PBLICA
            FIELD_CODE_NAME_UPPER=FIELD14
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field14` TINYINT(1) DEFAULT NULL USO DE LA FUERZA PBLICA
            
            FIELD_NAME_LATEX=USO DE LA FUERZA PBLICA
            FIELD_CODE_NAME_LATEX=field14
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DETALLE DEL USO DE LA FUERZA PBLICA
            FIELD_CODE_NAME_UPPER=FIELD15
            FIELD_INTRO=Breve descripción para presentar reporte por convenios con la SSP
            FIELD_DESCRIPTION_INI=Breve descripción para presentar reporte por convenios con la SSP
            FIELD_DESCRIPTION=Breve descripción para presentar reporte por convenios con la SSP 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field15` TEXT DEFAULT NULL DETALLE DEL USO DE LA FUERZA PBLICA
            
            FIELD_NAME_LATEX=DETALLE DEL USO DE LA FUERZA PBLICA
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
    Compobject_name=Libro de auxiliares de la administracin de justicia
    Compobject_description_ini=
	
    COMPOBJECT=LJC10
    compobject=ljc10
    
    compobject_name=libro de auxiliares de la administracin de justicia
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC10S
    compobjectplural=ljc10s
    compobject_plural_name=jc10
    CompObject_plural_name=Jc10
    compobject_short_plural_name=jc10
    CompObject_short_plural_name=Jc10
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC10_FS
        FIELDSET_NAME=jc10_fs
        FIELDSET_CODE_NAME_UPPER=JC10_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
            FIELD_CODE_NAME_LATEX=anoj
            FIELD_DBCOMMENT_LATEX=A\~no judicial
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL PERITO (a paterno)
            FIELD_CODE_NAME_UPPER=FIELD5_PATERNO
            FIELD_INTRO=apellido paterno
            FIELD_DESCRIPTION_INI=apellido paterno
            FIELD_DESCRIPTION=apellido paterno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_paterno` VARCHAR(255) DEFAULT NULL NOMBRE DEL PERITO (a paterno)
            
            FIELD_NAME_LATEX=NOMBRE DEL PERITO (a paterno)
            FIELD_CODE_NAME_LATEX=field5\_paterno
            FIELD_DBCOMMENT_LATEX=apellido paterno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL PERITO (a materno)
            FIELD_CODE_NAME_UPPER=FIELD5_MATERNO
            FIELD_INTRO=apellido materno
            FIELD_DESCRIPTION_INI=apellido materno
            FIELD_DESCRIPTION=apellido materno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_materno` VARCHAR(45) DEFAULT NULL NOMBRE DEL PERITO (a materno)
            
            FIELD_NAME_LATEX=NOMBRE DEL PERITO (a materno)
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
            FIELD_NAME=FECHA DEL AUTO DE DESIGNACIN
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DATETIME DEFAULT NULL FECHA DEL AUTO DE DESIGNACIN
            
            FIELD_NAME_LATEX=FECHA DEL AUTO DE DESIGNACIN
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE NOTIFICACIN DEL AUTO DE DESIGNACIN
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` DATETIME DEFAULT NULL FECHA DE NOTIFICACIN DEL AUTO DE DESIGNACIN
            
            FIELD_NAME_LATEX=FECHA DE NOTIFICACIN DEL AUTO DE DESIGNACIN
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE ACEPTACIN
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` DATETIME DEFAULT NULL FECHA DE ACEPTACIN
            
            FIELD_NAME_LATEX=FECHA DE ACEPTACIN
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
    
    compobject_name=libro de registro de amparos
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC12S
    compobjectplural=ljc12s
    compobject_plural_name=jc12
    CompObject_plural_name=Jc12
    compobject_short_plural_name=jc12
    CompObject_short_plural_name=Jc12
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC12_FS
        FIELDSET_NAME=jc12_fs
        FIELDSET_CODE_NAME_UPPER=JC12_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
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
            FIELD_NAME=QUEJOSO (a paterno)
            FIELD_CODE_NAME_UPPER=FIELD6_PATERNO
            FIELD_INTRO=apellido paterno
            FIELD_DESCRIPTION_INI=apellido paterno
            FIELD_DESCRIPTION=apellido paterno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_paterno` VARCHAR(255) DEFAULT NULL QUEJOSO (a paterno)
            
            FIELD_NAME_LATEX=QUEJOSO (a paterno)
            FIELD_CODE_NAME_LATEX=field6\_paterno
            FIELD_DBCOMMENT_LATEX=apellido paterno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=QUEJOSO (a materno)
            FIELD_CODE_NAME_UPPER=FIELD6_MATERNO
            FIELD_INTRO=apellido materno
            FIELD_DESCRIPTION_INI=apellido materno
            FIELD_DESCRIPTION=apellido materno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_materno` VARCHAR(45) DEFAULT NULL QUEJOSO (a materno)
            
            FIELD_NAME_LATEX=QUEJOSO (a materno)
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
            FIELD_NAME=RGANO DE PROCEDENCIA
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` INT(10) DEFAULT NULL RGANO DE PROCEDENCIA
            
            FIELD_NAME_LATEX=RGANO DE PROCEDENCIA
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=No DE AMPARO
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` VARCHAR(45) DEFAULT NULL No DE AMPARO
            
            FIELD_NAME_LATEX=No DE AMPARO
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
            FIELD_NAME=FECHA DE ENVO DEL INFORME
            FIELD_CODE_NAME_UPPER=FIELD13
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field13` DATETIME DEFAULT NULL FECHA DE ENVO DEL INFORME
            
            FIELD_NAME_LATEX=FECHA DE ENVO DEL INFORME
            FIELD_CODE_NAME_LATEX=field13
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=SENTIDO DE LA RESOLUCIN DE AMPARO
            FIELD_CODE_NAME_UPPER=FIELD14
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field14` VARCHAR(45) DEFAULT NULL SENTIDO DE LA RESOLUCIN DE AMPARO
            
            FIELD_NAME_LATEX=SENTIDO DE LA RESOLUCIN DE AMPARO
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
    
    compobject_name=libro de control de fianzas
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC13S
    compobjectplural=ljc13s
    compobject_plural_name=jc13
    CompObject_plural_name=Jc13
    compobject_short_plural_name=jc13
    CompObject_short_plural_name=Jc13
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC13_FS
        FIELDSET_NAME=jc13_fs
        FIELDSET_CODE_NAME_UPPER=JC13_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
            FIELD_CODE_NAME_LATEX=anoj
            FIELD_DBCOMMENT_LATEX=A\~no judicial
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=GARANTE (a paterno)
            FIELD_CODE_NAME_UPPER=FIELD2_PATERNO
            FIELD_INTRO=apellido paterno
            FIELD_DESCRIPTION_INI=apellido paterno
            FIELD_DESCRIPTION=apellido paterno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field2_paterno` VARCHAR(255) DEFAULT NULL GARANTE (a paterno)
            
            FIELD_NAME_LATEX=GARANTE (a paterno)
            FIELD_CODE_NAME_LATEX=field2\_paterno
            FIELD_DBCOMMENT_LATEX=apellido paterno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=GARANTE (a materno)
            FIELD_CODE_NAME_UPPER=FIELD2_MATERNO
            FIELD_INTRO=apellido materno
            FIELD_DESCRIPTION_INI=apellido materno
            FIELD_DESCRIPTION=apellido materno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field2_materno` VARCHAR(45) DEFAULT NULL GARANTE (a materno)
            
            FIELD_NAME_LATEX=GARANTE (a materno)
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
            FIELD_NAME=FECHA EN QUE SE RECIBE LA PLIZA DE FIANZA
            FIELD_CODE_NAME_UPPER=FIELD4
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field4` DATETIME DEFAULT NULL FECHA EN QUE SE RECIBE LA PLIZA DE FIANZA
            
            FIELD_NAME_LATEX=FECHA EN QUE SE RECIBE LA PLIZA DE FIANZA
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
            FIELD_NAME=MONTO DE LA PLIZA DE FIANZA
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=37
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` DECIMAL(11,2) DEFAULT NULL MONTO DE LA PLIZA DE FIANZA
            
            FIELD_NAME_LATEX=MONTO DE LA PLIZA DE FIANZA
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=SI SE HACE EFECTIVA LA GARANTA ANOTAR EL MOTIVO POR EL CUAL SE HIZO EFECTIVA
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=37
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DECIMAL(11,2) DEFAULT NULL SI SE HACE EFECTIVA LA GARANTA ANOTAR EL MOTIVO POR EL CUAL SE HIZO EFECTIVA
            
            FIELD_NAME_LATEX=SI SE HACE EFECTIVA LA GARANTA ANOTAR EL MOTIVO POR EL CUAL SE HIZO EFECTIVA
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
    
    compobject_name=libro de control de multas
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC14S
    compobjectplural=ljc14s
    compobject_plural_name=jc14
    CompObject_plural_name=Jc14
    compobject_short_plural_name=jc14
    CompObject_short_plural_name=Jc14
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC14_FS
        FIELDSET_NAME=jc14_fs
        FIELDSET_CODE_NAME_UPPER=JC14_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
            FIELD_CODE_NAME_LATEX=anoj
            FIELD_DBCOMMENT_LATEX=A\~no judicial
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE LA RESOLUCIN QUE LA DECRETA
            FIELD_CODE_NAME_UPPER=FIELD4
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field4` DATETIME DEFAULT NULL FECHA DE LA RESOLUCIN QUE LA DECRETA
            
            FIELD_NAME_LATEX=FECHA DE LA RESOLUCIN QUE LA DECRETA
            FIELD_CODE_NAME_LATEX=field4
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (a paterno)
            FIELD_CODE_NAME_UPPER=FIELD5_PATERNO
            FIELD_INTRO=apellido paterno
            FIELD_DESCRIPTION_INI=apellido paterno
            FIELD_DESCRIPTION=apellido paterno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_paterno` VARCHAR(255) DEFAULT NULL NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (a paterno)
            
            FIELD_NAME_LATEX=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (a paterno)
            FIELD_CODE_NAME_LATEX=field5\_paterno
            FIELD_DBCOMMENT_LATEX=apellido paterno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (a materno)
            FIELD_CODE_NAME_UPPER=FIELD5_MATERNO
            FIELD_INTRO=apellido materno
            FIELD_DESCRIPTION_INI=apellido materno
            FIELD_DESCRIPTION=apellido materno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_materno` VARCHAR(45) DEFAULT NULL NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (a materno)
            
            FIELD_NAME_LATEX=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (a materno)
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
            FIELD_NAME=No DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIN
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` VARCHAR(45) DEFAULT NULL No DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIN
            
            FIELD_NAME_LATEX=No DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIN
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIN
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DATETIME DEFAULT NULL FECHA DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIN
            
            FIELD_NAME_LATEX=FECHA DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIN
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
    
    compobject_name=agenda de audiencias
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC16S
    compobjectplural=ljc16s
    compobject_plural_name=jc16
    CompObject_plural_name=Jc16
    compobject_short_plural_name=jc16
    CompObject_short_plural_name=Jc16
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC16_FS
        FIELDSET_NAME=jc16_fs
        FIELDSET_CODE_NAME_UPPER=JC16_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
            FIELD_CODE_NAME_LATEX=anoj
            FIELD_DBCOMMENT_LATEX=A\~no judicial
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DEL AUTO EN QUE SE SEALA LA AUDIENCIA
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` DATETIME DEFAULT NULL FECHA DEL AUTO EN QUE SE SEALA LA AUDIENCIA
            
            FIELD_NAME_LATEX=FECHA DEL AUTO EN QUE SE SEALA LA AUDIENCIA
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
    Compobject_name=Libro de remisin al archivo
    Compobject_description_ini=
	
    COMPOBJECT=LJC17
    compobject=ljc17
    
    compobject_name=libro de remisin al archivo
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC17S
    compobjectplural=ljc17s
    compobject_plural_name=jc17
    CompObject_plural_name=Jc17
    compobject_short_plural_name=jc17
    CompObject_short_plural_name=Jc17
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC17_FS
        FIELDSET_NAME=jc17_fs
        FIELDSET_CODE_NAME_UPPER=JC17_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
            FIELD_CODE_NAME_LATEX=anoj
            FIELD_DBCOMMENT_LATEX=A\~no judicial
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NMERO DE FOJAS
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` INT(10) DEFAULT NULL NMERO DE FOJAS
            
            FIELD_NAME_LATEX=NMERO DE FOJAS
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=No Y DESCRIPCIN DE LOS EXPEDIENTES
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` TEXT DEFAULT NULL No Y DESCRIPCIN DE LOS EXPEDIENTES
            
            FIELD_NAME_LATEX=No Y DESCRIPCIN DE LOS EXPEDIENTES
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DEL AUTO DE REMISIN
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DATETIME DEFAULT NULL FECHA DEL AUTO DE REMISIN
            
            FIELD_NAME_LATEX=FECHA DEL AUTO DE REMISIN
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
            FIELD_NAME=FECHA DE RECEPCIN DEL ARCHIVO JUDICIAL
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` DATETIME DEFAULT NULL FECHA DE RECEPCIN DEL ARCHIVO JUDICIAL
            
            FIELD_NAME_LATEX=FECHA DE RECEPCIN DEL ARCHIVO JUDICIAL
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE DEVOLUCIN
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` DATETIME DEFAULT NULL FECHA DE DEVOLUCIN
            
            FIELD_NAME_LATEX=FECHA DE DEVOLUCIN
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=MOTIVO DE LA REMISIN AL ARCHIVO
            FIELD_CODE_NAME_UPPER=FIELD15
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field15` INT(10) DEFAULT NULL MOTIVO DE LA REMISIN AL ARCHIVO
            
            FIELD_NAME_LATEX=MOTIVO DE LA REMISIN AL ARCHIVO
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
    Compobject_name=Libro de remisin de documentos al archivo
    Compobject_description_ini=
	
    COMPOBJECT=LJC18
    compobject=ljc18
    
    compobject_name=libro de remisin de documentos al archivo
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC18S
    compobjectplural=ljc18s
    compobject_plural_name=jc18
    CompObject_plural_name=Jc18
    compobject_short_plural_name=jc18
    CompObject_short_plural_name=Jc18
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC18_FS
        FIELDSET_NAME=jc18_fs
        FIELDSET_CODE_NAME_UPPER=JC18_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
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
            FIELD_NAME=No Y DESCRIPCIN DE DOCUMENTOS
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` TEXT DEFAULT NULL No Y DESCRIPCIN DE DOCUMENTOS
            
            FIELD_NAME_LATEX=No Y DESCRIPCIN DE DOCUMENTOS
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DEL AUTO DE REMISIN
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DATETIME DEFAULT NULL FECHA DEL AUTO DE REMISIN
            
            FIELD_NAME_LATEX=FECHA DEL AUTO DE REMISIN
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE RECEPCIN DEL ARCHIVO JUDICIAL
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` DATETIME DEFAULT NULL FECHA DE RECEPCIN DEL ARCHIVO JUDICIAL
            
            FIELD_NAME_LATEX=FECHA DE RECEPCIN DEL ARCHIVO JUDICIAL
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBI DEL ARCHIVO (a paterno)
            FIELD_CODE_NAME_UPPER=FIELD10_PATERNO
            FIELD_INTRO=apellido paterno
            FIELD_DESCRIPTION_INI=apellido paterno
            FIELD_DESCRIPTION=apellido paterno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10_paterno` VARCHAR(255) DEFAULT NULL PERSONA QUE RECIBI DEL ARCHIVO (a paterno)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI DEL ARCHIVO (a paterno)
            FIELD_CODE_NAME_LATEX=field10\_paterno
            FIELD_DBCOMMENT_LATEX=apellido paterno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBI DEL ARCHIVO (a materno)
            FIELD_CODE_NAME_UPPER=FIELD10_MATERNO
            FIELD_INTRO=apellido materno
            FIELD_DESCRIPTION_INI=apellido materno
            FIELD_DESCRIPTION=apellido materno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10_materno` VARCHAR(45) DEFAULT NULL PERSONA QUE RECIBI DEL ARCHIVO (a materno)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI DEL ARCHIVO (a materno)
            FIELD_CODE_NAME_LATEX=field10\_materno
            FIELD_DBCOMMENT_LATEX=apellido materno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBI DEL ARCHIVO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD10_NOMBRE
            FIELD_INTRO=nombre
            FIELD_DESCRIPTION_INI=nombre
            FIELD_DESCRIPTION=nombre 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10_nombre` VARCHAR(45) DEFAULT NULL PERSONA QUE RECIBI DEL ARCHIVO (nombre)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI DEL ARCHIVO (nombre)
            FIELD_CODE_NAME_LATEX=field10\_nombre
            FIELD_DBCOMMENT_LATEX=nombre
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBI DEL ARCHIVO (es Moral)
            FIELD_CODE_NAME_UPPER=FIELD10_ISMORAL
            FIELD_INTRO=es Moral
            FIELD_DESCRIPTION_INI=es Moral
            FIELD_DESCRIPTION=es Moral 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10_isMoral` TINYINT(1) DEFAULT NULL PERSONA QUE RECIBI DEL ARCHIVO (es Moral)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI DEL ARCHIVO (es Moral)
            FIELD_CODE_NAME_LATEX=field10\_isMoral
            FIELD_DBCOMMENT_LATEX=es Moral
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE DEVOLUCIN
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` DATETIME DEFAULT NULL FECHA DE DEVOLUCIN
            
            FIELD_NAME_LATEX=FECHA DE DEVOLUCIN
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
    Compobject_name=Libro de envo de expedientes al archivo judicial para su destruccin
    Compobject_description_ini=
	
    COMPOBJECT=LJC19
    compobject=ljc19
    
    compobject_name=libro de envo de expedientes al archivo judicial para su destruccin
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC19S
    compobjectplural=ljc19s
    compobject_plural_name=jc19
    CompObject_plural_name=Jc19
    compobject_short_plural_name=jc19
    CompObject_short_plural_name=Jc19
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC19_FS
        FIELDSET_NAME=jc19_fs
        FIELDSET_CODE_NAME_UPPER=JC19_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
            FIELD_CODE_NAME_LATEX=anoj
            FIELD_DBCOMMENT_LATEX=A\~no judicial
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NMERO DE FOJAS
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` INT(10) DEFAULT NULL NMERO DE FOJAS
            
            FIELD_NAME_LATEX=NMERO DE FOJAS
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DEL AUTO DE REMISIN PARA ANLISIS DE COTECIAD
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` DATETIME DEFAULT NULL FECHA DEL AUTO DE REMISIN PARA ANLISIS DE COTECIAD
            
            FIELD_NAME_LATEX=FECHA DEL AUTO DE REMISIN PARA ANLISIS DE COTECIAD
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE RECEPCIN EN EL ARCHIVO JUDICIAL
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DATETIME DEFAULT NULL FECHA DE RECEPCIN EN EL ARCHIVO JUDICIAL
            
            FIELD_NAME_LATEX=FECHA DE RECEPCIN EN EL ARCHIVO JUDICIAL
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBI DEL ARCHIVO (a paterno)
            FIELD_CODE_NAME_UPPER=FIELD8_PATERNO
            FIELD_INTRO=apellido paterno
            FIELD_DESCRIPTION_INI=apellido paterno
            FIELD_DESCRIPTION=apellido paterno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_paterno` VARCHAR(255) DEFAULT NULL PERSONA QUE RECIBI DEL ARCHIVO (a paterno)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI DEL ARCHIVO (a paterno)
            FIELD_CODE_NAME_LATEX=field8\_paterno
            FIELD_DBCOMMENT_LATEX=apellido paterno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBI DEL ARCHIVO (a materno)
            FIELD_CODE_NAME_UPPER=FIELD8_MATERNO
            FIELD_INTRO=apellido materno
            FIELD_DESCRIPTION_INI=apellido materno
            FIELD_DESCRIPTION=apellido materno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_materno` VARCHAR(45) DEFAULT NULL PERSONA QUE RECIBI DEL ARCHIVO (a materno)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI DEL ARCHIVO (a materno)
            FIELD_CODE_NAME_LATEX=field8\_materno
            FIELD_DBCOMMENT_LATEX=apellido materno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBI DEL ARCHIVO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD8_NOMBRE
            FIELD_INTRO=nombre
            FIELD_DESCRIPTION_INI=nombre
            FIELD_DESCRIPTION=nombre 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_nombre` VARCHAR(45) DEFAULT NULL PERSONA QUE RECIBI DEL ARCHIVO (nombre)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI DEL ARCHIVO (nombre)
            FIELD_CODE_NAME_LATEX=field8\_nombre
            FIELD_DBCOMMENT_LATEX=nombre
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBI DEL ARCHIVO (es Moral)
            FIELD_CODE_NAME_UPPER=FIELD8_ISMORAL
            FIELD_INTRO=es Moral
            FIELD_DESCRIPTION_INI=es Moral
            FIELD_DESCRIPTION=es Moral 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_isMoral` TINYINT(1) DEFAULT NULL PERSONA QUE RECIBI DEL ARCHIVO (es Moral)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI DEL ARCHIVO (es Moral)
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
    Compobject_name=Libro de control de asuntos conforme a los artculos 13 fraccin xiv y 25 de la ley de transparencia y acceso a la informacin pblica
    Compobject_description_ini=
	
    COMPOBJECT=LJC20
    compobject=ljc20
    
    compobject_name=libro de control de asuntos conforme a los artculos 13 fraccin xiv y 25 de la ley de transparencia y acceso a la informacin pblica
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC20S
    compobjectplural=ljc20s
    compobject_plural_name=jc20
    CompObject_plural_name=Jc20
    compobject_short_plural_name=jc20
    CompObject_short_plural_name=Jc20
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC20_FS
        FIELDSET_NAME=jc20_fs
        FIELDSET_CODE_NAME_UPPER=JC20_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
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
            FIELD_NAME=ESTA DE ACUERDO
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` TINYINT(1) DEFAULT NULL ESTA DE ACUERDO
            
            FIELD_NAME_LATEX=ESTA DE ACUERDO
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
    Compobject_name=Libro de ministerio pblico
    Compobject_description_ini=
	
    COMPOBJECT=LJC21
    compobject=ljc21
    
    compobject_name=libro de ministerio pblico
    CompObject_short_name=2
    Compobject_short_name=2
    compobject_short_name=2
    
    COMPOBJECTPLURAL=LJC21S
    compobjectplural=ljc21s
    compobject_plural_name=jc21
    CompObject_plural_name=Jc21
    compobject_short_plural_name=jc21
    CompObject_short_plural_name=Jc21
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=JC21_FS
        FIELDSET_NAME=jc21_fs
        FIELDSET_CODE_NAME_UPPER=JC21_FS
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
            FIELD_NAME=rgano
            FIELD_CODE_NAME_UPPER=ID_ORGANO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_organo` INT(10) DEFAULT NULL rgano
            
            FIELD_NAME_LATEX=rgano
            FIELD_CODE_NAME_LATEX=id\_organo
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Secretara
            FIELD_CODE_NAME_UPPER=ID_SECRETARIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_secretaria` INT(10) DEFAULT NULL Secretara
            
            FIELD_NAME_LATEX=Secretara
            FIELD_CODE_NAME_LATEX=id\_secretaria
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Ao j
            FIELD_CODE_NAME_UPPER=ANOJ
            FIELD_INTRO=<p>Año judicial</p>
            FIELD_DESCRIPTION_INI=<p>Año judicial</p>
            FIELD_DESCRIPTION=<p>Año judicial</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`anoj` YEAR(4) DEFAULT NULL Ao j
            
            FIELD_NAME_LATEX=Ao j
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
            FIELD_NAME=FECHA DE PUBLICACIN DE AUTO QUE ORDENA LA VISTA
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` DATETIME DEFAULT NULL FECHA DE PUBLICACIN DE AUTO QUE ORDENA LA VISTA
            
            FIELD_NAME_LATEX=FECHA DE PUBLICACIN DE AUTO QUE ORDENA LA VISTA
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
            FIELD_NAME=NOMBRE DEL MP (a paterno)
            FIELD_CODE_NAME_UPPER=FIELD8_PATERNO
            FIELD_INTRO=apellido paterno
            FIELD_DESCRIPTION_INI=apellido paterno
            FIELD_DESCRIPTION=apellido paterno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_paterno` VARCHAR(255) DEFAULT NULL NOMBRE DEL MP (a paterno)
            
            FIELD_NAME_LATEX=NOMBRE DEL MP (a paterno)
            FIELD_CODE_NAME_LATEX=field8\_paterno
            FIELD_DBCOMMENT_LATEX=apellido paterno
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL MP (a materno)
            FIELD_CODE_NAME_UPPER=FIELD8_MATERNO
            FIELD_INTRO=apellido materno
            FIELD_DESCRIPTION_INI=apellido materno
            FIELD_DESCRIPTION=apellido materno 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_materno` VARCHAR(45) DEFAULT NULL NOMBRE DEL MP (a materno)
            
            FIELD_NAME_LATEX=NOMBRE DEL MP (a materno)
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
            FIELD_NAME=FECHA DE DEVOLUCIN DEL MP
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` VARCHAR(45) DEFAULT NULL FECHA DE DEVOLUCIN DEL MP
            
            FIELD_NAME_LATEX=FECHA DE DEVOLUCIN DEL MP
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












	{INCLUDE_STATUS}

	{INCLUDE_MODIFIED}

	{INCLUDE_CREATED}









	{INCLUDE_VERSIONS}


	{GENERATE_ADMIN_DASHBOARD}

	{GENERATE_SITE}
    

    	{GENERATE_SITE_VIEWS}

