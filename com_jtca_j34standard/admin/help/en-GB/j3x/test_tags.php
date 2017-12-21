#one [%%IF per line
Titulo=TSJ CDMX Libros TxCA
Nombre del paquete com_architectcomp=com_jtca
Descripción <ul><br/><li class=&quot;standard&quot;>El objetivo del componente es sustituir los libros físicos que se utilizan en los órganos jurisdiccionales del TSJ CDMX por libros virtuales.</li><br/><li class=&quot;standard&quot;>Debido a la gran cantidad de código que se producirá en CA había decidido generar un componente por materia y un componente adicional para administrar los objetos de apoyo, como son los objetos anidados. No funcionó adapatar sistemas de nombres, se generará mucho más ruido. Todo en un solo componente.</li><br/><li class=&quot;standard&quot;>Quieren formularios continuos, son reticentes con las ventanas modales que se utilizan con los objetos anidados.</li><br/><li class=&quot;standard&quot;>Actualmente &quot;persons&quot; es un elemento no anidado, pero me gustaría convertirlo en anidado para hacer más limpio el código.</li><br/><li class=&quot;standard&quot;>Para cumplir con la burocrácia CA la clave del libro la utilizaré como singular y +s para el plural. He renombrado las tablas, pero he conservado el prefijo jtl_{clave}s para conservar compatibilidad con otras reglas que pueda haber.</li><br/><li class=&quot;standard&quot;>Otros libros que les faltaría el campo a plural son:</li><br/></ul><br/><p style=&quot;padding-left: 60px;&quot;>dil_jccm07<br />dil_jccm09<br />dep_joc03<br />incul_jpdng01<br />ofen_jpdng01 <br />decl_jpdng01<br />dili_jpdng09<br />firm_jpdng17<br />adol_jjadg05<br />firm_jjadg16<br />adol_jjadg01 <br />averiguacion<br />personaliasedad<br />personedadsexo<br />persondelito<br />personalias<br />jempleado_bb <br />address</p><br/><p style=&quot;padding-left: 60px;&quot;> </p><br/><div class=&quot;standard&quot;>El objetivo del componente es sustituir los libros físicos que se utilizan en los órganos jurisdiccionales del TSJ CDMX por libros virtuales.</div><br/><div class=&quot;standard&quot;>En el futuro se requerirá modificar los objetos y quitar el &quot;_s&quot; del code_name y agregar &quot;s&quot; al plural_code_name; y re-nombrar las tablas y vistas.</div><br/><div class=&quot;standard&quot;> </div><br/><h1 class=&quot;standard&quot;>Salas Civiles</h1><br/><div class=&quot;standard&quot;>El objetivo del componente es sustituir los libros físicos que se utilizan en los órganos jurisdiccionales de Segunda Instancia Cívil del TSJ CDMX por libros virtuales.</div><br/><div class=&quot;standard&quot;> </div><br/><div class=&quot;standard&quot;>CHANGELOG</div><br/><div class=&quot;standard&quot;>20170919 Todos los field.filter = false para evitar SELECT DISCTINCT</div><br/><div class=&quot;standard&quot;>20170919 se agregó FIELD_TYPE = expediente, name reemplaza expedienteFriendlyName</div><br/><div class=&quot;standard&quot;>20170921 quitar 'PARTES DEL JUICIO' (actor, demandado, otros) del nivel 1, add expediente de origen nivel 2, remove Expediente del nivel 1</div><br/><div class=&quot;standard&quot;>20170921 se agregó validaciones a todos los campos fecha</div><br/><div class=&quot;standard&quot;>20170922 se agregó FIELD_TYPE = firma, se cambiaron los campos al FIELD_TYPE {expediente|firma}</div><br/><div class=&quot;standard&quot;> </div><br/><div class=&quot;standard&quot;>@ToDo</div><br/><div class=&quot;standard&quot;>- Remover todas las 'PARTES DEL JUICIO' libros y agregarlo en objeto expediente</div><br/><div class=&quot;standard&quot;>- Generar modificar el objeto modal para que permita capturar id_expediente, id_expediente_origen, elegir un expediente en de éste órgano y un expediente de origen de otro organo.</div><br/><div class=&quot;standard&quot;>- Permitir registrar: AUTORIZADO POR QUÉ PARTE, PARTE ACTORA, PARTE DEMANDADA</div><br/><div class=&quot;standard&quot;>Add key to id_expediente, field.filter = false quita TABLE.KEY</div><br/><div class=&quot;standard&quot;><br/><p>Make expediente de origen, read only on 1ra instancia</p><br/></div> <ul>
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
<div class="standard"> </div>
<h1 class="standard">Salas Civiles</h1>
<div class="standard">El objetivo del componente es sustituir los libros físicos que se utilizan en los órganos jurisdiccionales de Segunda Instancia Cívil del TSJ CDMX por libros virtuales.</div>
<div class="standard"> </div>
<div class="standard">CHANGELOG</div>
<div class="standard">20170919 Todos los field.filter = false para evitar SELECT DISCTINCT</div>
<div class="standard">20170919 se agregó FIELD_TYPE = expediente, name reemplaza expedienteFriendlyName</div>
<div class="standard">20170921 quitar 'PARTES DEL JUICIO' (actor, demandado, otros) del nivel 1, add expediente de origen nivel 2, remove Expediente del nivel 1</div>
<div class="standard">20170921 se agregó validaciones a todos los campos fecha</div>
<div class="standard">20170922 se agregó FIELD_TYPE = firma, se cambiaron los campos al FIELD_TYPE {expediente|firma}</div>
<div class="standard"> </div>
<div class="standard">@ToDo</div>
<div class="standard">- Remover todas las 'PARTES DEL JUICIO' libros y agregarlo en objeto expediente</div>
<div class="standard">- Generar modificar el objeto modal para que permita capturar id_expediente, id_expediente_origen, elegir un expediente en de éste órgano y un expediente de origen de otro organo.</div>
<div class="standard">- Permitir registrar: AUTORIZADO POR QUÉ PARTE, PARTE ACTORA, PARTE DEMANDADA</div>
<div class="standard">Add key to id_expediente, field.filter = false quita TABLE.KEY</div>
<div class="standard">
<p>Make expediente de origen, read only on 1ra instancia</p>
</div>
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
    CompObject_short_name=Ljc01
    Compobject_short_name=Ljc01
    compobject_short_name=ljc01
    
    COMPOBJECTPLURAL=LJC01S
    compobjectplural=ljc01s
    CompObjectPlural=Ljc01s
    compobject_plural_name=libro de gobierno
    CompObject_plural_name=LIBRO DE GOBIERNO
    compobject_short_plural_name=ljc01s
    CompObject_short_plural_name=Ljc01s
    
    
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

        

    

    
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de gobierno
    Compobject_description_ini=
	
    COMPOBJECT=LJOC01
    compobject=ljoc01
    CompObject=Ljoc01
    
    compobject_name=libro de gobierno
    CompObject_name=LIBRO DE GOBIERNO
    CompObject_short_name=Ljoc01
    Compobject_short_name=Ljoc01
    compobject_short_name=ljoc01
    
    COMPOBJECTPLURAL=LJOC01S
    compobjectplural=ljoc01s
    CompObjectPlural=Ljoc01s
    compobject_plural_name=libro de gobierno
    CompObject_plural_name=LIBRO DE GOBIERNO
    compobject_short_plural_name=ljoc01s
    CompObject_short_plural_name=Ljoc01s
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJOC01_FS
        FIELDSET_NAME=ljoc01_fs
        FIELDSET_CODE_NAME_UPPER=LJOC01_FS
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
            FIELD_NAME=FECHA DE INGRESO
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` DATETIME DEFAULT NULL FECHA DE INGRESO
            
            FIELD_NAME_LATEX=FECHA DE INGRESO
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=SUERTE PRINCIPAL RECLAMADA
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=37
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` DECIMAL(11,2) DEFAULT NULL SUERTE PRINCIPAL RECLAMADA
            
            FIELD_NAME_LATEX=SUERTE PRINCIPAL RECLAMADA
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=TIPO DE MONEDA
            FIELD_CODE_NAME_UPPER=FIELD6_DIVISA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_divisa` INT(10) DEFAULT NULL TIPO DE MONEDA
            
            FIELD_NAME_LATEX=TIPO DE MONEDA
            FIELD_CODE_NAME_LATEX=field6\_divisa
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=ASUNTOS CONCLUIDOS
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` INT(10) DEFAULT NULL ASUNTOS CONCLUIDOS
            
            FIELD_NAME_LATEX=ASUNTOS CONCLUIDOS
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DADOS DE BAJA POR
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` INT(10) DEFAULT NULL DADOS DE BAJA POR
            
            FIELD_NAME_LATEX=DADOS DE BAJA POR
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=ENVIADOS AL ARCHIVO JUDICIAL
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` INT(10) DEFAULT NULL ENVIADOS AL ARCHIVO JUDICIAL
            
            FIELD_NAME_LATEX=ENVIADOS AL ARCHIVO JUDICIAL
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=EXTINCIÓN
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` VARCHAR(45) DEFAULT NULL EXTINCIÓN
            
            FIELD_NAME_LATEX=EXTINCI\'ON
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=ESCISIÓN DE JUZGADO
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` VARCHAR(45) DEFAULT NULL ESCISIÓN DE JUZGADO
            
            FIELD_NAME_LATEX=ESCISI\'ON DE JUZGADO
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
    CompObject_short_name=Ljc02
    Compobject_short_name=Ljc02
    compobject_short_name=ljc02
    
    COMPOBJECTPLURAL=LJC02S
    compobjectplural=ljc02s
    CompObjectPlural=Ljc02s
    compobject_plural_name=libro de ingresos de valores
    CompObject_plural_name=LIBRO DE INGRESOS DE VALORES
    compobject_short_plural_name=ljc02s
    CompObject_short_plural_name=Ljc02s
    
    
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

        

    

    
{-1.3}
    
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
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de egresos de valores
    Compobject_description_ini=<br/>Este libro se distribuye por secretaría
	
    COMPOBJECT=LJC03
    compobject=ljc03
    CompObject=Ljc03
    
    compobject_name=libro de egresos de valores
    CompObject_name=LIBRO DE EGRESOS DE VALORES
    CompObject_short_name=Ljc03
    Compobject_short_name=Ljc03
    compobject_short_name=ljc03
    
    COMPOBJECTPLURAL=LJC03S
    compobjectplural=ljc03s
    CompObjectPlural=Ljc03s
    compobject_plural_name=libro de egresos de valores
    CompObject_plural_name=LIBRO DE EGRESOS DE VALORES
    compobject_short_plural_name=ljc03s
    CompObject_short_plural_name=Ljc03s
    
    
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
            FIELD_NAME=BENEFICIARIO (isMoral)
            FIELD_CODE_NAME_UPPER=FIELD1_ISMORAL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field1_isMoral` TINYINT(1) NOT NULL DEFAULT '0' BENEFICIARIO (isMoral)
            
            FIELD_NAME_LATEX=BENEFICIARIO (isMoral)
            FIELD_CODE_NAME_LATEX=field1\_isMoral
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=BENEFICIARIO (paterno)
            FIELD_CODE_NAME_UPPER=FIELD1_PATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field1_paterno` VARCHAR(255) DEFAULT NULL BENEFICIARIO (paterno)
            
            FIELD_NAME_LATEX=BENEFICIARIO (paterno)
            FIELD_CODE_NAME_LATEX=field1\_paterno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=BENEFICIARIO (materno)
            FIELD_CODE_NAME_UPPER=FIELD1_MATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field1_materno` VARCHAR(45) DEFAULT NULL BENEFICIARIO (materno)
            
            FIELD_NAME_LATEX=BENEFICIARIO (materno)
            FIELD_CODE_NAME_LATEX=field1\_materno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=BENEFICIARIO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD1_NOMBRE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field1_nombre` VARCHAR(45) DEFAULT NULL BENEFICIARIO (nombre)
            
            FIELD_NAME_LATEX=BENEFICIARIO (nombre)
            FIELD_CODE_NAME_LATEX=field1\_nombre
            FIELD_DBCOMMENT_LATEX=
            


        
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
            FIELD_NAME=NOMBRE DE QUIEN RECIBE (isMoral)
            FIELD_CODE_NAME_UPPER=FIELD6_ISMORAL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_isMoral` TINYINT(1) NOT NULL DEFAULT '0' NOMBRE DE QUIEN RECIBE (isMoral)
            
            FIELD_NAME_LATEX=NOMBRE DE QUIEN RECIBE (isMoral)
            FIELD_CODE_NAME_LATEX=field6\_isMoral
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE QUIEN RECIBE (paterno)
            FIELD_CODE_NAME_UPPER=FIELD6_PATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_paterno` VARCHAR(255) DEFAULT NULL NOMBRE DE QUIEN RECIBE (paterno)
            
            FIELD_NAME_LATEX=NOMBRE DE QUIEN RECIBE (paterno)
            FIELD_CODE_NAME_LATEX=field6\_paterno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE QUIEN RECIBE (materno)
            FIELD_CODE_NAME_UPPER=FIELD6_MATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_materno` VARCHAR(45) DEFAULT NULL NOMBRE DE QUIEN RECIBE (materno)
            
            FIELD_NAME_LATEX=NOMBRE DE QUIEN RECIBE (materno)
            FIELD_CODE_NAME_LATEX=field6\_materno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE QUIEN RECIBE (nombre)
            FIELD_CODE_NAME_UPPER=FIELD6_NOMBRE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_nombre` VARCHAR(45) DEFAULT NULL NOMBRE DE QUIEN RECIBE (nombre)
            
            FIELD_NAME_LATEX=NOMBRE DE QUIEN RECIBE (nombre)
            FIELD_CODE_NAME_LATEX=field6\_nombre
            FIELD_DBCOMMENT_LATEX=
            


        
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

        

    

    
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de certificado de depósitos de ingresos y egresos
    Compobject_description_ini=<br/>Este libro tiene reglas partículares en el layout
	
    COMPOBJECT=LJOC03
    compobject=ljoc03
    CompObject=Ljoc03
    
    compobject_name=libro de certificado de depósitos de ingresos y egresos
    CompObject_name=LIBRO DE CERTIFICADO DE DEPÓSITOS DE INGRESOS Y EGRESOS
    CompObject_short_name=Ljoc03
    Compobject_short_name=Ljoc03
    compobject_short_name=ljoc03
    
    COMPOBJECTPLURAL=LJOC03S
    compobjectplural=ljoc03s
    CompObjectPlural=Ljoc03s
    compobject_plural_name=libro de certificado de depósitos de ingresos y eg
    CompObject_plural_name=LIBRO DE CERTIFICADO DE DEPÓSITOS DE INGRESOS Y EG
    compobject_short_plural_name=ljoc03s
    CompObject_short_plural_name=Ljoc03s
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJOC03_FS
        FIELDSET_NAME=ljoc03_fs
        FIELDSET_CODE_NAME_UPPER=LJOC03_FS
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
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
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
    CompObject_short_name=Ljc04
    Compobject_short_name=Ljc04
    compobject_short_name=ljc04
    
    COMPOBJECTPLURAL=LJC04S
    compobjectplural=ljc04s
    CompObjectPlural=Ljc04s
    compobject_plural_name=libro de registro de promociones
    CompObject_plural_name=LIBRO DE REGISTRO DE PROMOCIONES
    compobject_short_plural_name=ljc04s
    CompObject_short_plural_name=Ljc04s
    
    
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

        

    

    
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de promociones
    Compobject_description_ini=
	
    COMPOBJECT=LJOC04
    compobject=ljoc04
    CompObject=Ljoc04
    
    compobject_name=libro de promociones
    CompObject_name=LIBRO DE PROMOCIONES
    CompObject_short_name=Ljoc04
    Compobject_short_name=Ljoc04
    compobject_short_name=ljoc04
    
    COMPOBJECTPLURAL=LJOC04S
    compobjectplural=ljoc04s
    CompObjectPlural=Ljoc04s
    compobject_plural_name=libro de promociones
    CompObject_plural_name=LIBRO DE PROMOCIONES
    compobject_short_plural_name=ljoc04s
    CompObject_short_plural_name=Ljoc04s
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJOC04_FS
        FIELDSET_NAME=ljoc04_fs
        FIELDSET_CODE_NAME_UPPER=LJOC04_FS
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
            FIELD_NAME=FECHA DE RECEPCIÓN
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` DATETIME DEFAULT NULL FECHA DE RECEPCIÓN
            
            FIELD_NAME_LATEX=FECHA DE RECEPCI\'ON
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DOCUMENTOS QUE SE ANEXAN
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` TEXT DEFAULT NULL DOCUMENTOS QUE SE ANEXAN
            
            FIELD_NAME_LATEX=DOCUMENTOS QUE SE ANEXAN
            FIELD_CODE_NAME_LATEX=field6
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
    CompObject_short_name=Ljc05
    Compobject_short_name=Ljc05
    compobject_short_name=ljc05
    
    COMPOBJECTPLURAL=LJC05S
    compobjectplural=ljc05s
    CompObjectPlural=Ljc05s
    compobject_plural_name=libro de turno para sentencia
    CompObject_plural_name=LIBRO DE TURNO PARA SENTENCIA
    compobject_short_plural_name=ljc05s
    CompObject_short_plural_name=Ljc05s
    
    
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

        

    

    
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de sentencias
    Compobject_description_ini=<br/>Este libro tiene reglas partículares en el layout
	
    COMPOBJECT=LJOC05
    compobject=ljoc05
    CompObject=Ljoc05
    
    compobject_name=libro de sentencias
    CompObject_name=LIBRO DE SENTENCIAS
    CompObject_short_name=Ljoc05
    Compobject_short_name=Ljoc05
    compobject_short_name=ljoc05
    
    COMPOBJECTPLURAL=LJOC05S
    compobjectplural=ljoc05s
    CompObjectPlural=Ljoc05s
    compobject_plural_name=libro de sentencias
    CompObject_plural_name=LIBRO DE SENTENCIAS
    compobject_short_plural_name=ljoc05s
    CompObject_short_plural_name=Ljoc05s
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJOC05_FS
        FIELDSET_NAME=ljoc05_fs
        FIELDSET_CODE_NAME_UPPER=LJOC05_FS
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
            FIELD_NAME=TIPO DE SENTENCIA
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` INT(10) DEFAULT NULL TIPO DE SENTENCIA
            
            FIELD_NAME_LATEX=TIPO DE SENTENCIA
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE CITACIÓN
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` DATETIME DEFAULT NULL FECHA DE CITACIÓN
            
            FIELD_NAME_LATEX=FECHA DE CITACI\'ON
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE TURNO DE SENTENCIA
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` DATETIME DEFAULT NULL FECHA DE TURNO DE SENTENCIA
            
            FIELD_NAME_LATEX=FECHA DE TURNO DE SENTENCIA
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE SENTENCIA
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DATETIME DEFAULT NULL FECHA DE SENTENCIA
            
            FIELD_NAME_LATEX=FECHA DE SENTENCIA
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=SENTIDO DE LA RESOLUCIÓN
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` VARCHAR(255) DEFAULT NULL SENTIDO DE LA RESOLUCIÓN
            
            FIELD_NAME_LATEX=SENTIDO DE LA RESOLUCI\'ON
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE PUBLICACIÓN
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` DATETIME DEFAULT NULL FECHA DE PUBLICACIÓN
            
            FIELD_NAME_LATEX=FECHA DE PUBLICACI\'ON
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
    CompObject_short_name=Ljc06
    Compobject_short_name=Ljc06
    compobject_short_name=ljc06
    
    COMPOBJECTPLURAL=LJC06S
    compobjectplural=ljc06s
    CompObjectPlural=Ljc06s
    compobject_plural_name=libro de recursos de apelación
    CompObject_plural_name=LIBRO DE RECURSOS DE APELACIÓN
    compobject_short_plural_name=ljc06s
    CompObject_short_plural_name=Ljc06s
    
    
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

        

    

    
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de exhortos
    Compobject_description_ini=
	
    COMPOBJECT=LJOC06
    compobject=ljoc06
    CompObject=Ljoc06
    
    compobject_name=libro de exhortos
    CompObject_name=LIBRO DE EXHORTOS
    CompObject_short_name=Ljoc06
    Compobject_short_name=Ljoc06
    compobject_short_name=ljoc06
    
    COMPOBJECTPLURAL=LJOC06S
    compobjectplural=ljoc06s
    CompObjectPlural=Ljoc06s
    compobject_plural_name=libro de exhortos
    CompObject_plural_name=LIBRO DE EXHORTOS
    compobject_short_plural_name=ljoc06s
    CompObject_short_plural_name=Ljoc06s
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJOC06_FS
        FIELDSET_NAME=ljoc06_fs
        FIELDSET_CODE_NAME_UPPER=LJOC06_FS
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
            FIELD_NAME=TIPO DE JUICIO
            FIELD_CODE_NAME_UPPER=FIELD4
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field4` INT(10) DEFAULT NULL TIPO DE JUICIO
            
            FIELD_NAME_LATEX=TIPO DE JUICIO
            FIELD_CODE_NAME_LATEX=field4
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE INGRESO
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` DATETIME DEFAULT NULL FECHA DE INGRESO
            
            FIELD_NAME_LATEX=FECHA DE INGRESO
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OFICIO DE LA AUTORIDAD EXHORTANTE
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` VARCHAR(45) DEFAULT NULL OFICIO DE LA AUTORIDAD EXHORTANTE
            
            FIELD_NAME_LATEX=OFICIO DE LA AUTORIDAD EXHORTANTE
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=AUTORIDAD EXHORTANTE
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` VARCHAR(255) DEFAULT NULL AUTORIDAD EXHORTANTE
            
            FIELD_NAME_LATEX=AUTORIDAD EXHORTANTE
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=AUTO QUE LO PROVEE
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` VARCHAR(45) DEFAULT NULL AUTO QUE LO PROVEE
            
            FIELD_NAME_LATEX=AUTO QUE LO PROVEE
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DILIGENCIA ENCOMENDADA
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` VARCHAR(255) DEFAULT NULL DILIGENCIA ENCOMENDADA
            
            FIELD_NAME_LATEX=DILIGENCIA ENCOMENDADA
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE DILIGENCIACIÓN
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` DATETIME DEFAULT NULL FECHA DE DILIGENCIACIÓN
            
            FIELD_NAME_LATEX=FECHA DE DILIGENCIACI\'ON
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DEVUELTOS
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` INT(10) DEFAULT NULL DEVUELTOS
            
            FIELD_NAME_LATEX=DEVUELTOS
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=No DE OFICIO DE DEVOLUCIÓN
            FIELD_CODE_NAME_UPPER=FIELD12
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field12` VARCHAR(45) DEFAULT NULL No DE OFICIO DE DEVOLUCIÓN
            
            FIELD_NAME_LATEX=No DE OFICIO DE DEVOLUCI\'ON
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
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD14
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field14` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field14
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
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
    CompObject_short_name=Ljc07
    Compobject_short_name=Ljc07
    compobject_short_name=ljc07
    
    COMPOBJECTPLURAL=LJC07S
    compobjectplural=ljc07s
    CompObjectPlural=Ljc07s
    compobject_plural_name=libro de exhortos
    CompObject_plural_name=LIBRO DE EXHORTOS
    compobject_short_plural_name=ljc07s
    CompObject_short_plural_name=Ljc07s
    
    
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

        

    

    
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de oficios
    Compobject_description_ini=.<br/>El expediente es opcional
	
    COMPOBJECT=LJOC07
    compobject=ljoc07
    CompObject=Ljoc07
    
    compobject_name=libro de oficios
    CompObject_name=LIBRO DE OFICIOS
    CompObject_short_name=Ljoc07
    Compobject_short_name=Ljoc07
    compobject_short_name=ljoc07
    
    COMPOBJECTPLURAL=LJOC07S
    compobjectplural=ljoc07s
    CompObjectPlural=Ljoc07s
    compobject_plural_name=libro de oficios
    CompObject_plural_name=LIBRO DE OFICIOS
    compobject_short_plural_name=ljoc07s
    CompObject_short_plural_name=Ljoc07s
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJOC07_FS
        FIELDSET_NAME=ljoc07_fs
        FIELDSET_CODE_NAME_UPPER=LJOC07_FS
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
            FIELD_NAME=FECHA DEL OFICIO
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` DATETIME DEFAULT NULL FECHA DEL OFICIO
            
            FIELD_NAME_LATEX=FECHA DEL OFICIO
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DESTINATARIO
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` VARCHAR(255) DEFAULT NULL DESTINATARIO
            
            FIELD_NAME_LATEX=DESTINATARIO
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE REGISTRO
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DATETIME DEFAULT NULL FECHA DE REGISTRO
            
            FIELD_NAME_LATEX=FECHA DE REGISTRO
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=ASUNTO
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` VARCHAR(45) DEFAULT NULL ASUNTO
            
            FIELD_NAME_LATEX=ASUNTO
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE ENTREGA
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` DATETIME DEFAULT NULL FECHA DE ENTREGA
            
            FIELD_NAME_LATEX=FECHA DE ENTREGA
            FIELD_CODE_NAME_LATEX=field9
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

            {OBJECT_FIELD}
            FIELD_NAME=No DE OFICIO
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` VARCHAR(45) DEFAULT NULL No DE OFICIO
            
            FIELD_NAME_LATEX=No DE OFICIO
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
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
    CompObject_short_name=Ljc08
    Compobject_short_name=Ljc08
    compobject_short_name=ljc08
    
    COMPOBJECTPLURAL=LJC08S
    compobjectplural=ljc08s
    CompObjectPlural=Ljc08s
    compobject_plural_name=libro de oficios
    CompObject_plural_name=LIBRO DE OFICIOS
    compobject_short_plural_name=ljc08s
    CompObject_short_plural_name=Ljc08s
    
    
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

        

    

    
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de actuarios
    Compobject_description_ini=
	
    COMPOBJECT=LJOC08
    compobject=ljoc08
    CompObject=Ljoc08
    
    compobject_name=libro de actuarios
    CompObject_name=LIBRO DE ACTUARIOS
    CompObject_short_name=Ljoc08
    Compobject_short_name=Ljoc08
    compobject_short_name=ljoc08
    
    COMPOBJECTPLURAL=LJOC08S
    compobjectplural=ljoc08s
    CompObjectPlural=Ljoc08s
    compobject_plural_name=libro de actuarios
    CompObject_plural_name=LIBRO DE ACTUARIOS
    compobject_short_plural_name=ljoc08s
    CompObject_short_plural_name=Ljoc08s
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJOC08_FS
        FIELDSET_NAME=ljoc08_fs
        FIELDSET_CODE_NAME_UPPER=LJOC08_FS
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
            FIELD_NAME=No. DE CUADERNOS
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` INT(10) DEFAULT NULL No. DE CUADERNOS
            
            FIELD_NAME_LATEX=No. DE CUADERNOS
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=No. DE CEDULAS
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` INT(10) DEFAULT NULL No. DE CEDULAS
            
            FIELD_NAME_LATEX=No. DE CEDULAS
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE ENTREGA AL ACTUARIO
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DATETIME DEFAULT NULL FECHA DE ENTREGA AL ACTUARIO
            
            FIELD_NAME_LATEX=FECHA DE ENTREGA AL ACTUARIO
            FIELD_CODE_NAME_LATEX=field7
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
            FIELD_NAME=TIPO DE DILIGENCIA ORDENADA
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` INT(10) DEFAULT NULL TIPO DE DILIGENCIA ORDENADA
            
            FIELD_NAME_LATEX=TIPO DE DILIGENCIA ORDENADA
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=SE CUMPLIÓ CON LA DILIGENCIA
            FIELD_CODE_NAME_UPPER=FIELD15
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field15` TINYINT(1) DEFAULT NULL SE CUMPLIÓ CON LA DILIGENCIA
            
            FIELD_NAME_LATEX=SE CUMPLI\'O CON LA DILIGENCIA
            FIELD_CODE_NAME_LATEX=field15
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD14
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field14` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field14
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE LA DILIGENCIA
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` DATETIME DEFAULT NULL FECHA DE LA DILIGENCIA
            
            FIELD_NAME_LATEX=FECHA DE LA DILIGENCIA
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE LA DEVOLUCIÓN
            FIELD_CODE_NAME_UPPER=FIELD12
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field12` DATETIME DEFAULT NULL FECHA DE LA DEVOLUCIÓN
            
            FIELD_NAME_LATEX=FECHA DE LA DEVOLUCI\'ON
            FIELD_CODE_NAME_LATEX=field12
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=LANZAMIENTOS
            FIELD_CODE_NAME_UPPER=FIELD13
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field13` INT(10) DEFAULT NULL LANZAMIENTOS
            
            FIELD_NAME_LATEX=LANZAMIENTOS
            FIELD_CODE_NAME_LATEX=field13
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
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
    CompObject_short_name=Ljc09
    Compobject_short_name=Ljc09
    compobject_short_name=ljc09
    
    COMPOBJECTPLURAL=LJC09S
    compobjectplural=ljc09s
    CompObjectPlural=Ljc09s
    compobject_plural_name=libro de actuarios
    CompObject_plural_name=LIBRO DE ACTUARIOS
    compobject_short_plural_name=ljc09s
    CompObject_short_plural_name=Ljc09s
    
    
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

        

    

    
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de auxiliares de la administración de justicia
    Compobject_description_ini=
	
    COMPOBJECT=LJOC09
    compobject=ljoc09
    CompObject=Ljoc09
    
    compobject_name=libro de auxiliares de la administración de justicia
    CompObject_name=LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTICIA
    CompObject_short_name=Ljoc09
    Compobject_short_name=Ljoc09
    compobject_short_name=ljoc09
    
    COMPOBJECTPLURAL=LJOC09S
    compobjectplural=ljoc09s
    CompObjectPlural=Ljoc09s
    compobject_plural_name=libro de auxiliares de la administración de justic
    CompObject_plural_name=LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTIC
    compobject_short_plural_name=ljoc09s
    CompObject_short_plural_name=Ljoc09s
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJOC09_FS
        FIELDSET_NAME=ljoc09_fs
        FIELDSET_CODE_NAME_UPPER=LJOC09_FS
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
            FIELD_NAME=TIPO DE AUXILIAR
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` INT(10) DEFAULT NULL TIPO DE AUXILIAR
            
            FIELD_NAME_LATEX=TIPO DE AUXILIAR
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL AUXILIAR (isMoral)
            FIELD_CODE_NAME_UPPER=FIELD6_ISMORAL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_isMoral` TINYINT(1) NOT NULL DEFAULT '0' NOMBRE DEL AUXILIAR (isMoral)
            
            FIELD_NAME_LATEX=NOMBRE DEL AUXILIAR (isMoral)
            FIELD_CODE_NAME_LATEX=field6\_isMoral
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL AUXILIAR (paterno)
            FIELD_CODE_NAME_UPPER=FIELD6_PATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_paterno` VARCHAR(255) DEFAULT NULL NOMBRE DEL AUXILIAR (paterno)
            
            FIELD_NAME_LATEX=NOMBRE DEL AUXILIAR (paterno)
            FIELD_CODE_NAME_LATEX=field6\_paterno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL AUXILIAR (materno)
            FIELD_CODE_NAME_UPPER=FIELD6_MATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_materno` VARCHAR(45) DEFAULT NULL NOMBRE DEL AUXILIAR (materno)
            
            FIELD_NAME_LATEX=NOMBRE DEL AUXILIAR (materno)
            FIELD_CODE_NAME_LATEX=field6\_materno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL AUXILIAR (nombre)
            FIELD_CODE_NAME_UPPER=FIELD6_NOMBRE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_nombre` VARCHAR(45) DEFAULT NULL NOMBRE DEL AUXILIAR (nombre)
            
            FIELD_NAME_LATEX=NOMBRE DEL AUXILIAR (nombre)
            FIELD_CODE_NAME_LATEX=field6\_nombre
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=ESPECIALIDAD
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` INT(10) DEFAULT NULL ESPECIALIDAD
            
            FIELD_NAME_LATEX=ESPECIALIDAD
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE DESIGNACIÓN
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` DATETIME DEFAULT NULL FECHA DE DESIGNACIÓN
            
            FIELD_NAME_LATEX=FECHA DE DESIGNACI\'ON
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE NOTIFICACIÓN DE SU DESIGNACIÓN
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` DATETIME DEFAULT NULL FECHA DE NOTIFICACIÓN DE SU DESIGNACIÓN
            
            FIELD_NAME_LATEX=FECHA DE NOTIFICACI\'ON DE SU DESIGNACI\'ON
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE ACEPTACIÓN
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` DATETIME DEFAULT NULL FECHA DE ACEPTACIÓN
            
            FIELD_NAME_LATEX=FECHA DE ACEPTACI\'ON
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA EN QUE RINDE EL DICTAMEN
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` DATETIME DEFAULT NULL FECHA EN QUE RINDE EL DICTAMEN
            
            FIELD_NAME_LATEX=FECHA EN QUE RINDE EL DICTAMEN
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
    CompObject_short_name=Ljc10
    Compobject_short_name=Ljc10
    compobject_short_name=ljc10
    
    COMPOBJECTPLURAL=LJC10S
    compobjectplural=ljc10s
    CompObjectPlural=Ljc10s
    compobject_plural_name=libro de auxiliares de la administración de justic
    CompObject_plural_name=LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTIC
    compobject_short_plural_name=ljc10s
    CompObject_short_plural_name=Ljc10s
    
    
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
            FIELD_NAME=NOMBRE DEL PERITO (isMoral)
            FIELD_CODE_NAME_UPPER=FIELD5_ISMORAL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_isMoral` TINYINT(1) NOT NULL DEFAULT '0' NOMBRE DEL PERITO (isMoral)
            
            FIELD_NAME_LATEX=NOMBRE DEL PERITO (isMoral)
            FIELD_CODE_NAME_LATEX=field5\_isMoral
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL PERITO (paterno)
            FIELD_CODE_NAME_UPPER=FIELD5_PATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_paterno` VARCHAR(255) DEFAULT NULL NOMBRE DEL PERITO (paterno)
            
            FIELD_NAME_LATEX=NOMBRE DEL PERITO (paterno)
            FIELD_CODE_NAME_LATEX=field5\_paterno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL PERITO (materno)
            FIELD_CODE_NAME_UPPER=FIELD5_MATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_materno` VARCHAR(45) DEFAULT NULL NOMBRE DEL PERITO (materno)
            
            FIELD_NAME_LATEX=NOMBRE DEL PERITO (materno)
            FIELD_CODE_NAME_LATEX=field5\_materno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL PERITO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD5_NOMBRE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_nombre` VARCHAR(45) DEFAULT NULL NOMBRE DEL PERITO (nombre)
            
            FIELD_NAME_LATEX=NOMBRE DEL PERITO (nombre)
            FIELD_CODE_NAME_LATEX=field5\_nombre
            FIELD_DBCOMMENT_LATEX=
            


        
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

        

    

    
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de amparos
    Compobject_description_ini=
	
    COMPOBJECT=LJOC10
    compobject=ljoc10
    CompObject=Ljoc10
    
    compobject_name=libro de amparos
    CompObject_name=LIBRO DE AMPAROS
    CompObject_short_name=Ljoc10
    Compobject_short_name=Ljoc10
    compobject_short_name=ljoc10
    
    COMPOBJECTPLURAL=LJOC10S
    compobjectplural=ljoc10s
    CompObjectPlural=Ljoc10s
    compobject_plural_name=libro de amparos
    CompObject_plural_name=LIBRO DE AMPAROS
    compobject_short_plural_name=ljoc10s
    CompObject_short_plural_name=Ljoc10s
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJOC10_FS
        FIELDSET_NAME=ljoc10_fs
        FIELDSET_CODE_NAME_UPPER=LJOC10_FS
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
            FIELD_NAME=No. DE AMPARO
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` VARCHAR(45) DEFAULT NULL No. DE AMPARO
            
            FIELD_NAME_LATEX=No. DE AMPARO
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=TIPO DE AMPARO
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` INT(10) DEFAULT NULL TIPO DE AMPARO
            
            FIELD_NAME_LATEX=TIPO DE AMPARO
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=QUEJOSO (isMoral)
            FIELD_CODE_NAME_UPPER=FIELD7_ISMORAL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7_isMoral` TINYINT(1) NOT NULL DEFAULT '0' QUEJOSO (isMoral)
            
            FIELD_NAME_LATEX=QUEJOSO (isMoral)
            FIELD_CODE_NAME_LATEX=field7\_isMoral
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=QUEJOSO (paterno)
            FIELD_CODE_NAME_UPPER=FIELD7_PATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7_paterno` VARCHAR(255) DEFAULT NULL QUEJOSO (paterno)
            
            FIELD_NAME_LATEX=QUEJOSO (paterno)
            FIELD_CODE_NAME_LATEX=field7\_paterno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=QUEJOSO (materno)
            FIELD_CODE_NAME_UPPER=FIELD7_MATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7_materno` VARCHAR(45) DEFAULT NULL QUEJOSO (materno)
            
            FIELD_NAME_LATEX=QUEJOSO (materno)
            FIELD_CODE_NAME_LATEX=field7\_materno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=QUEJOSO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD7_NOMBRE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7_nombre` VARCHAR(45) DEFAULT NULL QUEJOSO (nombre)
            
            FIELD_NAME_LATEX=QUEJOSO (nombre)
            FIELD_CODE_NAME_LATEX=field7\_nombre
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=TERCERO INTERESADO (isMoral)
            FIELD_CODE_NAME_UPPER=FIELD8_ISMORAL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_isMoral` TINYINT(1) NOT NULL DEFAULT '0' TERCERO INTERESADO (isMoral)
            
            FIELD_NAME_LATEX=TERCERO INTERESADO (isMoral)
            FIELD_CODE_NAME_LATEX=field8\_isMoral
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=TERCERO INTERESADO (paterno)
            FIELD_CODE_NAME_UPPER=FIELD8_PATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_paterno` VARCHAR(255) DEFAULT NULL TERCERO INTERESADO (paterno)
            
            FIELD_NAME_LATEX=TERCERO INTERESADO (paterno)
            FIELD_CODE_NAME_LATEX=field8\_paterno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=TERCERO INTERESADO (materno)
            FIELD_CODE_NAME_UPPER=FIELD8_MATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_materno` VARCHAR(45) DEFAULT NULL TERCERO INTERESADO (materno)
            
            FIELD_NAME_LATEX=TERCERO INTERESADO (materno)
            FIELD_CODE_NAME_LATEX=field8\_materno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=TERCERO INTERESADO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD8_NOMBRE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_nombre` VARCHAR(45) DEFAULT NULL TERCERO INTERESADO (nombre)
            
            FIELD_NAME_LATEX=TERCERO INTERESADO (nombre)
            FIELD_CODE_NAME_LATEX=field8\_nombre
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=ACTO RECLAMADO
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` VARCHAR(45) DEFAULT NULL ACTO RECLAMADO
            
            FIELD_NAME_LATEX=ACTO RECLAMADO
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE INGRESO
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` DATETIME DEFAULT NULL FECHA DE INGRESO
            
            FIELD_NAME_LATEX=FECHA DE INGRESO
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=INFORME SOLICITADO
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` INT(10) DEFAULT NULL INFORME SOLICITADO
            
            FIELD_NAME_LATEX=INFORME SOLICITADO
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=SENTIDO DE LA RESOLUCIÓN DE AMPARO
            FIELD_CODE_NAME_UPPER=FIELD12
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field12` VARCHAR(45) DEFAULT NULL SENTIDO DE LA RESOLUCIÓN DE AMPARO
            
            FIELD_NAME_LATEX=SENTIDO DE LA RESOLUCI\'ON DE AMPARO
            FIELD_CODE_NAME_LATEX=field12
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE CUMPLIMIENTO
            FIELD_CODE_NAME_UPPER=FIELD13
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field13` DATETIME DEFAULT NULL FECHA DE CUMPLIMIENTO
            
            FIELD_NAME_LATEX=FECHA DE CUMPLIMIENTO
            FIELD_CODE_NAME_LATEX=field13
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DATOS DE ENVIO
            FIELD_CODE_NAME_UPPER=FIELD14
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field14` VARCHAR(45) DEFAULT NULL DATOS DE ENVIO
            
            FIELD_NAME_LATEX=DATOS DE ENVIO
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

        

    

    
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de registro para notarios
    Compobject_description_ini=Utiliza el objeto ljf11
	
    COMPOBJECT=LJC11
    compobject=ljc11
    CompObject=Ljc11
    
    compobject_name=libro de registro para notarios
    CompObject_name=LIBRO DE REGISTRO PARA NOTARIOS
    CompObject_short_name=Ljc11
    Compobject_short_name=Ljc11
    compobject_short_name=ljc11
    
    COMPOBJECTPLURAL=LJC11S
    compobjectplural=ljc11s
    CompObjectPlural=Ljc11s
    compobject_plural_name=libro de registro para notarios
    CompObject_plural_name=LIBRO DE REGISTRO PARA NOTARIOS
    compobject_short_plural_name=ljc11s
    CompObject_short_plural_name=Ljc11s
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJC11_FS
        FIELDSET_NAME=ljc11_fs
        FIELDSET_CODE_NAME_UPPER=LJC11_FS
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
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de control de multas
    Compobject_description_ini=
	
    COMPOBJECT=LJOC11
    compobject=ljoc11
    CompObject=Ljoc11
    
    compobject_name=libro de control de multas
    CompObject_name=LIBRO DE CONTROL DE MULTAS
    CompObject_short_name=Ljoc11
    Compobject_short_name=Ljoc11
    compobject_short_name=ljoc11
    
    COMPOBJECTPLURAL=LJOC11S
    compobjectplural=ljoc11s
    CompObjectPlural=Ljoc11s
    compobject_plural_name=libro de control de multas
    CompObject_plural_name=LIBRO DE CONTROL DE MULTAS
    compobject_short_plural_name=ljoc11s
    CompObject_short_plural_name=Ljoc11s
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJOC11_FS
        FIELDSET_NAME=ljoc11_fs
        FIELDSET_CODE_NAME_UPPER=LJOC11_FS
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
            FIELD_NAME=MONTO DE LA MULTA
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=37
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` DECIMAL(11,2) DEFAULT NULL MONTO DE LA MULTA
            
            FIELD_NAME_LATEX=MONTO DE LA MULTA
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE LA PERSONA  A QUE SE LE IMPUSO (isMoral)
            FIELD_CODE_NAME_UPPER=FIELD7_ISMORAL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7_isMoral` TINYINT(1) NOT NULL DEFAULT '0' NOMBRE DE LA PERSONA  A QUE SE LE IMPUSO (isMoral)
            
            FIELD_NAME_LATEX=NOMBRE DE LA PERSONA  A QUE SE LE IMPUSO (isMoral)
            FIELD_CODE_NAME_LATEX=field7\_isMoral
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE LA PERSONA  A QUE SE LE IMPUSO (paterno)
            FIELD_CODE_NAME_UPPER=FIELD7_PATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7_paterno` VARCHAR(255) DEFAULT NULL NOMBRE DE LA PERSONA  A QUE SE LE IMPUSO (paterno)
            
            FIELD_NAME_LATEX=NOMBRE DE LA PERSONA  A QUE SE LE IMPUSO (paterno)
            FIELD_CODE_NAME_LATEX=field7\_paterno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE LA PERSONA  A QUE SE LE IMPUSO (materno)
            FIELD_CODE_NAME_UPPER=FIELD7_MATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7_materno` VARCHAR(45) DEFAULT NULL NOMBRE DE LA PERSONA  A QUE SE LE IMPUSO (materno)
            
            FIELD_NAME_LATEX=NOMBRE DE LA PERSONA  A QUE SE LE IMPUSO (materno)
            FIELD_CODE_NAME_LATEX=field7\_materno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE LA PERSONA  A QUE SE LE IMPUSO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD7_NOMBRE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7_nombre` VARCHAR(45) DEFAULT NULL NOMBRE DE LA PERSONA  A QUE SE LE IMPUSO (nombre)
            
            FIELD_NAME_LATEX=NOMBRE DE LA PERSONA  A QUE SE LE IMPUSO (nombre)
            FIELD_CODE_NAME_LATEX=field7\_nombre
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NÚMERO DEL FORMATO Y/O EXHORTO EN QUE SE COMUNICA A LA AUTORIDAD
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` VARCHAR(45) DEFAULT NULL NÚMERO DEL FORMATO Y/O EXHORTO EN QUE SE COMUNICA A LA AUTORIDAD
            
            FIELD_NAME_LATEX=N\'UMERO DEL FORMATO Y/O EXHORTO EN QUE SE COMUNICA A LA AUTORIDAD
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DEL OFICIO Y/O EXHORTO
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` DATETIME DEFAULT NULL FECHA DEL OFICIO Y/O EXHORTO
            
            FIELD_NAME_LATEX=FECHA DEL OFICIO Y/O EXHORTO
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE PRESENTACIÓN DE FORMATO
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` DATETIME DEFAULT NULL FECHA DE PRESENTACIÓN DE FORMATO
            
            FIELD_NAME_LATEX=FECHA DE PRESENTACI\'ON DE FORMATO
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
    CompObject_short_name=Ljc12
    Compobject_short_name=Ljc12
    compobject_short_name=ljc12
    
    COMPOBJECTPLURAL=LJC12S
    compobjectplural=ljc12s
    CompObjectPlural=Ljc12s
    compobject_plural_name=libro de registro de amparos
    CompObject_plural_name=LIBRO DE REGISTRO DE AMPAROS
    compobject_short_plural_name=ljc12s
    CompObject_short_plural_name=Ljc12s
    
    
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
            FIELD_NAME=QUEJOSO (isMoral)
            FIELD_CODE_NAME_UPPER=FIELD6_ISMORAL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_isMoral` TINYINT(1) NOT NULL DEFAULT '0' QUEJOSO (isMoral)
            
            FIELD_NAME_LATEX=QUEJOSO (isMoral)
            FIELD_CODE_NAME_LATEX=field6\_isMoral
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=QUEJOSO (paterno)
            FIELD_CODE_NAME_UPPER=FIELD6_PATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_paterno` VARCHAR(255) DEFAULT NULL QUEJOSO (paterno)
            
            FIELD_NAME_LATEX=QUEJOSO (paterno)
            FIELD_CODE_NAME_LATEX=field6\_paterno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=QUEJOSO (materno)
            FIELD_CODE_NAME_UPPER=FIELD6_MATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_materno` VARCHAR(45) DEFAULT NULL QUEJOSO (materno)
            
            FIELD_NAME_LATEX=QUEJOSO (materno)
            FIELD_CODE_NAME_LATEX=field6\_materno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=QUEJOSO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD6_NOMBRE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6_nombre` VARCHAR(45) DEFAULT NULL QUEJOSO (nombre)
            
            FIELD_NAME_LATEX=QUEJOSO (nombre)
            FIELD_CODE_NAME_LATEX=field6\_nombre
            FIELD_DBCOMMENT_LATEX=
            


        
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

        

    

    
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Agenda de audiencias
    Compobject_description_ini=<br/>Este libro se distribuye por secretaría
	
    COMPOBJECT=LJOC12
    compobject=ljoc12
    CompObject=Ljoc12
    
    compobject_name=agenda de audiencias
    CompObject_name=AGENDA DE AUDIENCIAS
    CompObject_short_name=Ljoc12
    Compobject_short_name=Ljoc12
    compobject_short_name=ljoc12
    
    COMPOBJECTPLURAL=LJOC12S
    compobjectplural=ljoc12s
    CompObjectPlural=Ljoc12s
    compobject_plural_name=agenda de audiencias
    CompObject_plural_name=AGENDA DE AUDIENCIAS
    compobject_short_plural_name=ljoc12s
    CompObject_short_plural_name=Ljoc12s
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJOC12_FS
        FIELDSET_NAME=ljoc12_fs
        FIELDSET_CODE_NAME_UPPER=LJOC12_FS
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
            FIELD_NAME=TIPO DE AUDIENCIA
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=38
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` INT(10) DEFAULT NULL TIPO DE AUDIENCIA
            
            FIELD_NAME_LATEX=TIPO DE AUDIENCIA
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE LA AUDIENCIA
            FIELD_CODE_NAME_UPPER=FAUDIENCIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=36
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`faudiencia` DATETIME DEFAULT NULL FECHA DE LA AUDIENCIA
            
            FIELD_NAME_LATEX=FECHA DE LA AUDIENCIA
            FIELD_CODE_NAME_LATEX=faudiencia
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
    CompObject_short_name=Ljc13
    Compobject_short_name=Ljc13
    compobject_short_name=ljc13
    
    COMPOBJECTPLURAL=LJC13S
    compobjectplural=ljc13s
    CompObjectPlural=Ljc13s
    compobject_plural_name=libro de control de fianzas
    CompObject_plural_name=LIBRO DE CONTROL DE FIANZAS
    compobject_short_plural_name=ljc13s
    CompObject_short_plural_name=Ljc13s
    
    
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
            FIELD_NAME=GARANTE (isMoral)
            FIELD_CODE_NAME_UPPER=FIELD2_ISMORAL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field2_isMoral` TINYINT(1) NOT NULL DEFAULT '0' GARANTE (isMoral)
            
            FIELD_NAME_LATEX=GARANTE (isMoral)
            FIELD_CODE_NAME_LATEX=field2\_isMoral
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=GARANTE (paterno)
            FIELD_CODE_NAME_UPPER=FIELD2_PATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field2_paterno` VARCHAR(255) DEFAULT NULL GARANTE (paterno)
            
            FIELD_NAME_LATEX=GARANTE (paterno)
            FIELD_CODE_NAME_LATEX=field2\_paterno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=GARANTE (materno)
            FIELD_CODE_NAME_UPPER=FIELD2_MATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field2_materno` VARCHAR(45) DEFAULT NULL GARANTE (materno)
            
            FIELD_NAME_LATEX=GARANTE (materno)
            FIELD_CODE_NAME_LATEX=field2\_materno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=GARANTE (nombre)
            FIELD_CODE_NAME_UPPER=FIELD2_NOMBRE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field2_nombre` VARCHAR(45) DEFAULT NULL GARANTE (nombre)
            
            FIELD_NAME_LATEX=GARANTE (nombre)
            FIELD_CODE_NAME_LATEX=field2\_nombre
            FIELD_DBCOMMENT_LATEX=
            


        
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

        

    

    
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de notarios
    Compobject_description_ini=
	
    COMPOBJECT=LJOC13
    compobject=ljoc13
    CompObject=Ljoc13
    
    compobject_name=libro de notarios
    CompObject_name=LIBRO DE NOTARIOS
    CompObject_short_name=Ljoc13
    Compobject_short_name=Ljoc13
    compobject_short_name=ljoc13
    
    COMPOBJECTPLURAL=LJOC13S
    compobjectplural=ljoc13s
    CompObjectPlural=Ljoc13s
    compobject_plural_name=libro de notarios
    CompObject_plural_name=LIBRO DE NOTARIOS
    compobject_short_plural_name=ljoc13s
    CompObject_short_plural_name=Ljoc13s
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJOC13_FS
        FIELDSET_NAME=ljoc13_fs
        FIELDSET_CODE_NAME_UPPER=LJOC13_FS
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
            FIELD_NAME=FECHA DE PROVEÍDO DESIGNANDO NOTARIO
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` DATETIME DEFAULT NULL FECHA DE PROVEÍDO DESIGNANDO NOTARIO
            
            FIELD_NAME_LATEX=FECHA DE PROVE\'IDO DESIGNANDO NOTARIO
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=No. DE NOTARIA
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` VARCHAR(45) DEFAULT NULL No. DE NOTARIA
            
            FIELD_NAME_LATEX=No. DE NOTARIA
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL NOTARIO (isMoral)
            FIELD_CODE_NAME_UPPER=FIELD7_ISMORAL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7_isMoral` TINYINT(1) NOT NULL DEFAULT '0' NOMBRE DEL NOTARIO (isMoral)
            
            FIELD_NAME_LATEX=NOMBRE DEL NOTARIO (isMoral)
            FIELD_CODE_NAME_LATEX=field7\_isMoral
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL NOTARIO (paterno)
            FIELD_CODE_NAME_UPPER=FIELD7_PATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7_paterno` VARCHAR(255) DEFAULT NULL NOMBRE DEL NOTARIO (paterno)
            
            FIELD_NAME_LATEX=NOMBRE DEL NOTARIO (paterno)
            FIELD_CODE_NAME_LATEX=field7\_paterno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL NOTARIO (materno)
            FIELD_CODE_NAME_UPPER=FIELD7_MATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7_materno` VARCHAR(45) DEFAULT NULL NOMBRE DEL NOTARIO (materno)
            
            FIELD_NAME_LATEX=NOMBRE DEL NOTARIO (materno)
            FIELD_CODE_NAME_LATEX=field7\_materno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL NOTARIO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD7_NOMBRE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7_nombre` VARCHAR(45) DEFAULT NULL NOMBRE DEL NOTARIO (nombre)
            
            FIELD_NAME_LATEX=NOMBRE DEL NOTARIO (nombre)
            FIELD_CODE_NAME_LATEX=field7\_nombre
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DIRECCIÓN DEL NOTARIO
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` TEXT DEFAULT NULL DIRECCIÓN DEL NOTARIO
            
            FIELD_NAME_LATEX=DIRECCI\'ON DEL NOTARIO
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=EXPEDIENTE
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` VARCHAR(45) DEFAULT NULL EXPEDIENTE
            
            FIELD_NAME_LATEX=EXPEDIENTE
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DOCUMENTOS QUE RECIBE
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` TEXT DEFAULT NULL DOCUMENTOS QUE RECIBE
            
            FIELD_NAME_LATEX=DOCUMENTOS QUE RECIBE
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=ASUNTO
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` VARCHAR(45) DEFAULT NULL ASUNTO
            
            FIELD_NAME_LATEX=ASUNTO
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE ENTREGA
            FIELD_CODE_NAME_UPPER=FIELD12
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field12` DATETIME DEFAULT NULL FECHA DE ENTREGA
            
            FIELD_NAME_LATEX=FECHA DE ENTREGA
            FIELD_CODE_NAME_LATEX=field12
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE FIRMA DE ESCRITURA
            FIELD_CODE_NAME_UPPER=FIELD20
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field20` DATETIME DEFAULT NULL FECHA DE FIRMA DE ESCRITURA
            
            FIELD_NAME_LATEX=FECHA DE FIRMA DE ESCRITURA
            FIELD_CODE_NAME_LATEX=field20
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE (isMoral)
            FIELD_CODE_NAME_UPPER=FIELD13_ISMORAL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field13_isMoral` TINYINT(1) NOT NULL DEFAULT '0' NOMBRE (isMoral)
            
            FIELD_NAME_LATEX=NOMBRE (isMoral)
            FIELD_CODE_NAME_LATEX=field13\_isMoral
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE (paterno)
            FIELD_CODE_NAME_UPPER=FIELD13_PATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field13_paterno` VARCHAR(255) DEFAULT NULL NOMBRE (paterno)
            
            FIELD_NAME_LATEX=NOMBRE (paterno)
            FIELD_CODE_NAME_LATEX=field13\_paterno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE (materno)
            FIELD_CODE_NAME_UPPER=FIELD13_MATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field13_materno` VARCHAR(45) DEFAULT NULL NOMBRE (materno)
            
            FIELD_NAME_LATEX=NOMBRE (materno)
            FIELD_CODE_NAME_LATEX=field13\_materno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE (nombre)
            FIELD_CODE_NAME_UPPER=FIELD13_NOMBRE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field13_nombre` VARCHAR(45) DEFAULT NULL NOMBRE (nombre)
            
            FIELD_NAME_LATEX=NOMBRE (nombre)
            FIELD_CODE_NAME_LATEX=field13\_nombre
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=CARÁCTER CON QUE RECIBE
            FIELD_CODE_NAME_UPPER=FIELD14
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field14` VARCHAR(45) DEFAULT NULL CARÁCTER CON QUE RECIBE
            
            FIELD_NAME_LATEX=CAR\'ACTER CON QUE RECIBE
            FIELD_CODE_NAME_LATEX=field14
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=IDENTIFICACIÓN
            FIELD_CODE_NAME_UPPER=FIELD15
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field15` VARCHAR(45) DEFAULT NULL IDENTIFICACIÓN
            
            FIELD_NAME_LATEX=IDENTIFICACI\'ON
            FIELD_CODE_NAME_LATEX=field15
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FIRMA DE LA PERSONA
            FIELD_CODE_NAME_UPPER=FIELD16
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=34
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field16` INT(10) DEFAULT NULL FIRMA DE LA PERSONA
            
            FIELD_NAME_LATEX=FIRMA DE LA PERSONA
            FIELD_CODE_NAME_LATEX=field16
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=HUELLA DE LA PERSONA
            FIELD_CODE_NAME_UPPER=FIELD16H
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=39
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field16h` INT(10) DEFAULT NULL HUELLA DE LA PERSONA
            
            FIELD_NAME_LATEX=HUELLA DE LA PERSONA
            FIELD_CODE_NAME_LATEX=field16h
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DEL SECRETARIO DE ACUERDOS
            FIELD_CODE_NAME_UPPER=FIELD17
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=35
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field17` INT(10) DEFAULT NULL DEL SECRETARIO DE ACUERDOS
            
            FIELD_NAME_LATEX=DEL SECRETARIO DE ACUERDOS
            FIELD_CODE_NAME_LATEX=field17
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE DEVOLUCIÓN AL JUZGADO
            FIELD_CODE_NAME_UPPER=FIELD18
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field18` DATETIME DEFAULT NULL FECHA DE DEVOLUCIÓN AL JUZGADO
            
            FIELD_NAME_LATEX=FECHA DE DEVOLUCI\'ON AL JUZGADO
            FIELD_CODE_NAME_LATEX=field18
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD19
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field19` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field19
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
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
    CompObject_short_name=Ljc14
    Compobject_short_name=Ljc14
    compobject_short_name=ljc14
    
    COMPOBJECTPLURAL=LJC14S
    compobjectplural=ljc14s
    CompObjectPlural=Ljc14s
    compobject_plural_name=libro de control de multas
    CompObject_plural_name=LIBRO DE CONTROL DE MULTAS
    compobject_short_plural_name=ljc14s
    CompObject_short_plural_name=Ljc14s
    
    
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
            FIELD_NAME=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (isMoral)
            FIELD_CODE_NAME_UPPER=FIELD5_ISMORAL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_isMoral` TINYINT(1) NOT NULL DEFAULT '0' NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (isMoral)
            
            FIELD_NAME_LATEX=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (isMoral)
            FIELD_CODE_NAME_LATEX=field5\_isMoral
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (paterno)
            FIELD_CODE_NAME_UPPER=FIELD5_PATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_paterno` VARCHAR(255) DEFAULT NULL NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (paterno)
            
            FIELD_NAME_LATEX=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (paterno)
            FIELD_CODE_NAME_LATEX=field5\_paterno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (materno)
            FIELD_CODE_NAME_UPPER=FIELD5_MATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_materno` VARCHAR(45) DEFAULT NULL NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (materno)
            
            FIELD_NAME_LATEX=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (materno)
            FIELD_CODE_NAME_LATEX=field5\_materno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD5_NOMBRE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5_nombre` VARCHAR(45) DEFAULT NULL NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (nombre)
            
            FIELD_NAME_LATEX=NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (nombre)
            FIELD_CODE_NAME_LATEX=field5\_nombre
            FIELD_DBCOMMENT_LATEX=
            


        
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

        

    

    
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Libro de fianzas
    Compobject_description_ini=
	
    COMPOBJECT=LJOC14
    compobject=ljoc14
    CompObject=Ljoc14
    
    compobject_name=libro de fianzas
    CompObject_name=LIBRO DE FIANZAS
    CompObject_short_name=Ljoc14
    Compobject_short_name=Ljoc14
    compobject_short_name=ljoc14
    
    COMPOBJECTPLURAL=LJOC14S
    compobjectplural=ljoc14s
    CompObjectPlural=Ljoc14s
    compobject_plural_name=libro de fianzas
    CompObject_plural_name=LIBRO DE FIANZAS
    compobject_short_plural_name=ljoc14s
    CompObject_short_plural_name=Ljoc14s
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LJOC14_FS
        FIELDSET_NAME=ljoc14_fs
        FIELDSET_CODE_NAME_UPPER=LJOC14_FS
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
            FIELD_NAME=No. DE FIANZA
            FIELD_CODE_NAME_UPPER=FIELD5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field5` VARCHAR(45) DEFAULT NULL No. DE FIANZA
            
            FIELD_NAME_LATEX=No. DE FIANZA
            FIELD_CODE_NAME_LATEX=field5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=CONCEPTO
            FIELD_CODE_NAME_UPPER=FIELD6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field6` VARCHAR(45) DEFAULT NULL CONCEPTO
            
            FIELD_NAME_LATEX=CONCEPTO
            FIELD_CODE_NAME_LATEX=field6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=IMPORTE
            FIELD_CODE_NAME_UPPER=FIELD7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=37
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field7` DECIMAL(11,2) DEFAULT NULL IMPORTE
            
            FIELD_NAME_LATEX=IMPORTE
            FIELD_CODE_NAME_LATEX=field7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE INGRESO
            FIELD_CODE_NAME_UPPER=FIELD8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8` DATETIME DEFAULT NULL FECHA DE INGRESO
            
            FIELD_NAME_LATEX=FECHA DE INGRESO
            FIELD_CODE_NAME_LATEX=field8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=INSTITUCIÓN QUE LA EXPIDE
            FIELD_CODE_NAME_UPPER=FIELD9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field9` VARCHAR(45) DEFAULT NULL INSTITUCIÓN QUE LA EXPIDE
            
            FIELD_NAME_LATEX=INSTITUCI\'ON QUE LA EXPIDE
            FIELD_CODE_NAME_LATEX=field9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=GARANTE
            FIELD_CODE_NAME_UPPER=FIELD10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10` VARCHAR(45) DEFAULT NULL GARANTE
            
            FIELD_NAME_LATEX=GARANTE
            FIELD_CODE_NAME_LATEX=field10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=SE HACE EFECTIVA LA GARANTÍA
            FIELD_CODE_NAME_UPPER=FIELD11
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=16
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field11` TINYINT(1) DEFAULT NULL SE HACE EFECTIVA LA GARANTÍA
            
            FIELD_NAME_LATEX=SE HACE EFECTIVA LA GARANT\'IA
            FIELD_CODE_NAME_LATEX=field11
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=MOTIVOS POR LOS QUE SE HIZO EFECTIVA LA GARANTÍA
            FIELD_CODE_NAME_UPPER=FIELD12
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field12` VARCHAR(45) DEFAULT NULL MOTIVOS POR LOS QUE SE HIZO EFECTIVA LA GARANTÍA
            
            FIELD_NAME_LATEX=MOTIVOS POR LOS QUE SE HIZO EFECTIVA LA GARANT\'IA
            FIELD_CODE_NAME_LATEX=field12
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL BENEFICIARIO (isMoral)
            FIELD_CODE_NAME_UPPER=FIELD13_ISMORAL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field13_isMoral` TINYINT(1) NOT NULL DEFAULT '0' NOMBRE DEL BENEFICIARIO (isMoral)
            
            FIELD_NAME_LATEX=NOMBRE DEL BENEFICIARIO (isMoral)
            FIELD_CODE_NAME_LATEX=field13\_isMoral
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL BENEFICIARIO (paterno)
            FIELD_CODE_NAME_UPPER=FIELD13_PATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field13_paterno` VARCHAR(255) DEFAULT NULL NOMBRE DEL BENEFICIARIO (paterno)
            
            FIELD_NAME_LATEX=NOMBRE DEL BENEFICIARIO (paterno)
            FIELD_CODE_NAME_LATEX=field13\_paterno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL BENEFICIARIO (materno)
            FIELD_CODE_NAME_UPPER=FIELD13_MATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field13_materno` VARCHAR(45) DEFAULT NULL NOMBRE DEL BENEFICIARIO (materno)
            
            FIELD_NAME_LATEX=NOMBRE DEL BENEFICIARIO (materno)
            FIELD_CODE_NAME_LATEX=field13\_materno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL BENEFICIARIO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD13_NOMBRE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field13_nombre` VARCHAR(45) DEFAULT NULL NOMBRE DEL BENEFICIARIO (nombre)
            
            FIELD_NAME_LATEX=NOMBRE DEL BENEFICIARIO (nombre)
            FIELD_CODE_NAME_LATEX=field13\_nombre
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=CARÁCTER CON QUE RECIBE
            FIELD_CODE_NAME_UPPER=FIELD14
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field14` VARCHAR(45) DEFAULT NULL CARÁCTER CON QUE RECIBE
            
            FIELD_NAME_LATEX=CAR\'ACTER CON QUE RECIBE
            FIELD_CODE_NAME_LATEX=field14
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=IDENTIFICACIÓN
            FIELD_CODE_NAME_UPPER=FIELD15
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field15` VARCHAR(45) DEFAULT NULL IDENTIFICACIÓN
            
            FIELD_NAME_LATEX=IDENTIFICACI\'ON
            FIELD_CODE_NAME_LATEX=field15
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FIRMA DEL BENEFICIARIO
            FIELD_CODE_NAME_UPPER=FIELD16
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=34
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field16` INT(10) DEFAULT NULL FIRMA DEL BENEFICIARIO
            
            FIELD_NAME_LATEX=FIRMA DEL BENEFICIARIO
            FIELD_CODE_NAME_LATEX=field16
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=HUELLA DEL BENEFICIARIO
            FIELD_CODE_NAME_UPPER=FIELD16H
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=39
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field16h` INT(10) DEFAULT NULL HUELLA DEL BENEFICIARIO
            
            FIELD_NAME_LATEX=HUELLA DEL BENEFICIARIO
            FIELD_CODE_NAME_LATEX=field16h
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=FECHA DE ENTREGA
            FIELD_CODE_NAME_UPPER=FIELD17
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field17` DATETIME DEFAULT NULL FECHA DE ENTREGA
            
            FIELD_NAME_LATEX=FECHA DE ENTREGA
            FIELD_CODE_NAME_LATEX=field17
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DEL JUEZ
            FIELD_CODE_NAME_UPPER=FIELD18
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=35
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field18` INT(10) DEFAULT NULL DEL JUEZ
            
            FIELD_NAME_LATEX=DEL JUEZ
            FIELD_CODE_NAME_LATEX=field18
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=DEL SECRETARIO
            FIELD_CODE_NAME_UPPER=FIELD20
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=35
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field20` INT(10) DEFAULT NULL DEL SECRETARIO
            
            FIELD_NAME_LATEX=DEL SECRETARIO
            FIELD_CODE_NAME_LATEX=field20
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=OBSERVACIONES
            FIELD_CODE_NAME_UPPER=FIELD22
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field22` TEXT DEFAULT NULL OBSERVACIONES
            
            FIELD_NAME_LATEX=OBSERVACIONES
            FIELD_CODE_NAME_LATEX=field22
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
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
    CompObject_short_name=Ljc16
    Compobject_short_name=Ljc16
    compobject_short_name=ljc16
    
    COMPOBJECTPLURAL=LJC16S
    compobjectplural=ljc16s
    CompObjectPlural=Ljc16s
    compobject_plural_name=agenda de audiencias
    CompObject_plural_name=AGENDA DE AUDIENCIAS
    compobject_short_plural_name=ljc16s
    CompObject_short_plural_name=Ljc16s
    
    
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
    CompObject_short_name=Ljc17
    Compobject_short_name=Ljc17
    compobject_short_name=ljc17
    
    COMPOBJECTPLURAL=LJC17S
    compobjectplural=ljc17s
    CompObjectPlural=Ljc17s
    compobject_plural_name=libro de remisión al archivo
    CompObject_plural_name=LIBRO DE REMISIÓN AL ARCHIVO
    compobject_short_plural_name=ljc17s
    CompObject_short_plural_name=Ljc17s
    
    
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
    CompObject_short_name=Ljc18
    Compobject_short_name=Ljc18
    compobject_short_name=ljc18
    
    COMPOBJECTPLURAL=LJC18S
    compobjectplural=ljc18s
    CompObjectPlural=Ljc18s
    compobject_plural_name=libro de remisión de documentos al archivo
    CompObject_plural_name=LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO
    compobject_short_plural_name=ljc18s
    CompObject_short_plural_name=Ljc18s
    
    
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
            FIELD_NAME=PERSONA QUE RECIBIÓ DEL ARCHIVO (isMoral)
            FIELD_CODE_NAME_UPPER=FIELD10_ISMORAL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10_isMoral` TINYINT(1) NOT NULL DEFAULT '0' PERSONA QUE RECIBIÓ DEL ARCHIVO (isMoral)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI\'O DEL ARCHIVO (isMoral)
            FIELD_CODE_NAME_LATEX=field10\_isMoral
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBIÓ DEL ARCHIVO (paterno)
            FIELD_CODE_NAME_UPPER=FIELD10_PATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10_paterno` VARCHAR(255) DEFAULT NULL PERSONA QUE RECIBIÓ DEL ARCHIVO (paterno)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI\'O DEL ARCHIVO (paterno)
            FIELD_CODE_NAME_LATEX=field10\_paterno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBIÓ DEL ARCHIVO (materno)
            FIELD_CODE_NAME_UPPER=FIELD10_MATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10_materno` VARCHAR(45) DEFAULT NULL PERSONA QUE RECIBIÓ DEL ARCHIVO (materno)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI\'O DEL ARCHIVO (materno)
            FIELD_CODE_NAME_LATEX=field10\_materno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD10_NOMBRE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field10_nombre` VARCHAR(45) DEFAULT NULL PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI\'O DEL ARCHIVO (nombre)
            FIELD_CODE_NAME_LATEX=field10\_nombre
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
    CompObject_short_name=Ljc19
    Compobject_short_name=Ljc19
    compobject_short_name=ljc19
    
    COMPOBJECTPLURAL=LJC19S
    compobjectplural=ljc19s
    CompObjectPlural=Ljc19s
    compobject_plural_name=libro de envío de expedientes al archivo judicial 
    CompObject_plural_name=LIBRO DE ENVÍO DE EXPEDIENTES AL ARCHIVO JUDICIAL 
    compobject_short_plural_name=ljc19s
    CompObject_short_plural_name=Ljc19s
    
    
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
            FIELD_NAME=PERSONA QUE RECIBIÓ DEL ARCHIVO (isMoral)
            FIELD_CODE_NAME_UPPER=FIELD8_ISMORAL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_isMoral` TINYINT(1) NOT NULL DEFAULT '0' PERSONA QUE RECIBIÓ DEL ARCHIVO (isMoral)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI\'O DEL ARCHIVO (isMoral)
            FIELD_CODE_NAME_LATEX=field8\_isMoral
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBIÓ DEL ARCHIVO (paterno)
            FIELD_CODE_NAME_UPPER=FIELD8_PATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_paterno` VARCHAR(255) DEFAULT NULL PERSONA QUE RECIBIÓ DEL ARCHIVO (paterno)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI\'O DEL ARCHIVO (paterno)
            FIELD_CODE_NAME_LATEX=field8\_paterno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBIÓ DEL ARCHIVO (materno)
            FIELD_CODE_NAME_UPPER=FIELD8_MATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_materno` VARCHAR(45) DEFAULT NULL PERSONA QUE RECIBIÓ DEL ARCHIVO (materno)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI\'O DEL ARCHIVO (materno)
            FIELD_CODE_NAME_LATEX=field8\_materno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)
            FIELD_CODE_NAME_UPPER=FIELD8_NOMBRE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_nombre` VARCHAR(45) DEFAULT NULL PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)
            
            FIELD_NAME_LATEX=PERSONA QUE RECIBI\'O DEL ARCHIVO (nombre)
            FIELD_CODE_NAME_LATEX=field8\_nombre
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
    CompObject_short_name=Ljc20
    Compobject_short_name=Ljc20
    compobject_short_name=ljc20
    
    COMPOBJECTPLURAL=LJC20S
    compobjectplural=ljc20s
    CompObjectPlural=Ljc20s
    compobject_plural_name=libro de control de asuntos conforme a los artícul
    CompObject_plural_name=LIBRO DE CONTROL DE ASUNTOS CONFORME A LOS ARTÍCUL
    compobject_short_plural_name=ljc20s
    CompObject_short_plural_name=Ljc20s
    
    
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
    CompObject_short_name=Ljc21
    Compobject_short_name=Ljc21
    compobject_short_name=ljc21
    
    COMPOBJECTPLURAL=LJC21S
    compobjectplural=ljc21s
    CompObjectPlural=Ljc21s
    compobject_plural_name=libro de ministerio público
    CompObject_plural_name=LIBRO DE MINISTERIO PÚBLICO
    compobject_short_plural_name=ljc21s
    CompObject_short_plural_name=Ljc21s
    
    
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
            FIELD_NAME=NOMBRE DEL MP (isMoral)
            FIELD_CODE_NAME_UPPER=FIELD8_ISMORAL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_isMoral` TINYINT(1) NOT NULL DEFAULT '0' NOMBRE DEL MP (isMoral)
            
            FIELD_NAME_LATEX=NOMBRE DEL MP (isMoral)
            FIELD_CODE_NAME_LATEX=field8\_isMoral
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL MP (paterno)
            FIELD_CODE_NAME_UPPER=FIELD8_PATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_paterno` VARCHAR(255) DEFAULT NULL NOMBRE DEL MP (paterno)
            
            FIELD_NAME_LATEX=NOMBRE DEL MP (paterno)
            FIELD_CODE_NAME_LATEX=field8\_paterno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL MP (materno)
            FIELD_CODE_NAME_UPPER=FIELD8_MATERNO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_materno` VARCHAR(45) DEFAULT NULL NOMBRE DEL MP (materno)
            
            FIELD_NAME_LATEX=NOMBRE DEL MP (materno)
            FIELD_CODE_NAME_LATEX=field8\_materno
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=NOMBRE DEL MP (nombre)
            FIELD_CODE_NAME_UPPER=FIELD8_NOMBRE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=41
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`field8_nombre` VARCHAR(45) DEFAULT NULL NOMBRE DEL MP (nombre)
            
            FIELD_NAME_LATEX=NOMBRE DEL MP (nombre)
            FIELD_CODE_NAME_LATEX=field8\_nombre
            FIELD_DBCOMMENT_LATEX=
            


        
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

