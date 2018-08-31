#one [%%IF per line
Titulo	T384 Avisos
Nombre del paquete com_architectcomp	com_t384
Descripción <p>- avisos</p> <p>- avisos</p>
Release 1.0.1
Copyright Copyright (c) 2017 - 2020. All Rights Reserved
COMPONENTSTARTVERSION	1.0.1
COMPONENTAUTHOR	caballeroantonio
COMPONENTWEBSITE	caballeroantonio.com


architectcomp_name	t384 avisos
COM_ARCHITECTCOMP	COM_T384
ARCHITECTCOMP	T384
ArchitectComp	T384
architectcomp	t384

{1.0}
	{COMPONENT_OBJECT}
    Compobject_name	Module
    Compobject_description_ini	<p>Necesito un front end para generar custom modules</p>
	
    COMPOBJECT	MODULE
    compobject	module
    CompObject	Module
    
    compobject_name	module
    CompObject_name	Module
    CompObject_short_name	Module
    Compobject_short_name	Module
    compobject_short_name	module
    
    COMPOBJECTPLURAL	MODULES
    compobjectplural	modules
    CompObjectPlural	Modules
    compobject_plural_name	modules
    CompObject_plural_name	Modules
    compobject_short_plural_name	modules
    CompObject_short_plural_name	Modules
        

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

{1.3}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name	Inmueble
    Compobject_description_ini	
	
    COMPOBJECT	HOUSE
    compobject	house
    CompObject	House
    
    compobject_name	inmueble
    CompObject_name	Inmueble
    CompObject_short_name	House
    Compobject_short_name	House
    compobject_short_name	house
    
    COMPOBJECTPLURAL	HOUSES
    compobjectplural	houses
    CompObjectPlural	Houses
    compobject_plural_name	inmuebles
    CompObject_plural_name	Inmuebles
    compobject_short_plural_name	houses
    CompObject_short_plural_name	Houses
        
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=HOUSES_FS
        FIELDSET_NAME=houses_fs
        FIELDSET_CODE_NAME_UPPER=HOUSES_FS
        FIELDSET_DESCRIPTION=
{1.1}        
====== FOREACH OBJECT_FIELD site=====
            FIELD_NAME=Site
            FIELD_CODE_NAME_UPPER=SITE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=7
                        
            FIELD_OPTIONS_LANGUAGE_VARS=COM_T384_HOUSES_SITE_VALUE_VIVANUNCIOS="vivanuncios"
COM_T384_HOUSES_SITE_VALUE_BIENESONLINE="bienesonline"
COM_T384_HOUSES_SITE_VALUE_LAMUDI="lamudi"
COM_T384_HOUSES_SITE_VALUE_METROSCUBICOS="metroscubicos"
COM_T384_HOUSES_SITE_VALUE_FRIOFRIOCALIENTECALIENTE="friofriocalientecaliente"

            FIELD_DB=`site` ENUM('www.vivanuncios.com.mx', 'www.bienesonline.mx', 'www.lamudi.com.mx', 'www.metroscubicos.com', 'www.inmuebles24.com', 'friofriocalientecaliente.com') NOT NULL DEFAULT 'www.vivanuncios.com.mx' Site
            
            FIELD_NAME_LATEX=Site
            FIELD_CODE_NAME_LATEX=site
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD site=====



====== BEGIN FIELD CONDITIONS site se pueden combinar con not, FIELD_NOT_HIDDEN=====



    LIST

    HAS_OPTIONS

    FILTER




    REQUIRED

    


    
====== END FIELD CONDITIONS site=====

====== FOREACH OBJECT_FIELD id_country=====
            FIELD_NAME=país
            FIELD_CODE_NAME_UPPER=ID_COUNTRY
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_country` INT(10) UNSIGNED  NOT NULL DEFAULT '484' país
            
            FIELD_NAME_LATEX=pa\'i{}s
            FIELD_CODE_NAME_LATEX=id\_country
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD id_country=====



====== BEGIN FIELD CONDITIONS id_country se pueden combinar con not, FIELD_NOT_HIDDEN=====





    FILTER

    LINK
		FIELD_SITE_LIST_LINKED_VALUE: echo JString::trim($item->c_country_name);
        FIELD_SITE_LIST_VALUE: echo JString::trim($item->c_country_name);



    REQUIRED

    
	FIELD_ORDER


    
    filter link ¿es un caso especial que combina filter+link?
====== END FIELD CONDITIONS id_country=====

====== FOREACH OBJECT_FIELD id_lstate=====
            FIELD_NAME=estado
            FIELD_CODE_NAME_UPPER=ID_LSTATE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_lstate` INT(10) UNSIGNED  NOT NULL DEFAULT '0' estado
            
            FIELD_NAME_LATEX=estado
            FIELD_CODE_NAME_LATEX=id\_lstate
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD id_lstate=====



====== BEGIN FIELD CONDITIONS id_lstate se pueden combinar con not, FIELD_NOT_HIDDEN=====





    FILTER

    LINK
		FIELD_SITE_LIST_LINKED_VALUE: echo JString::trim($item->s_lstate_name);
        FIELD_SITE_LIST_VALUE: echo JString::trim($item->s_lstate_name);




    
	FIELD_ORDER


    
    filter link ¿es un caso especial que combina filter+link?
====== END FIELD CONDITIONS id_lstate=====

====== FOREACH OBJECT_FIELD sid=====
            FIELD_NAME=sid
            FIELD_CODE_NAME_UPPER=SID
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`sid` INT(11) DEFAULT NULL sid
            
            FIELD_NAME_LATEX=sid
            FIELD_CODE_NAME_LATEX=sid
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD sid=====



====== BEGIN FIELD CONDITIONS sid se pueden combinar con not, FIELD_NOT_HIDDEN=====

    INTEGER









    
	FIELD_ORDER


    
====== END FIELD CONDITIONS sid=====

====== FOREACH OBJECT_FIELD id_lmunicipality=====
            FIELD_NAME=municipio
            FIELD_CODE_NAME_UPPER=ID_LMUNICIPALITY
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_lmunicipality` INT(10) UNSIGNED  NOT NULL DEFAULT '0' municipio
            
            FIELD_NAME_LATEX=municipio
            FIELD_CODE_NAME_LATEX=id\_lmunicipality
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD id_lmunicipality=====



====== BEGIN FIELD CONDITIONS id_lmunicipality se pueden combinar con not, FIELD_NOT_HIDDEN=====





    FILTER

    LINK
		FIELD_SITE_LIST_LINKED_VALUE: echo JString::trim($item->m_lmunicipality_name);
        FIELD_SITE_LIST_VALUE: echo JString::trim($item->m_lmunicipality_name);




    
	FIELD_ORDER


    
    filter link ¿es un caso especial que combina filter+link?
====== END FIELD CONDITIONS id_lmunicipality=====

====== FOREACH OBJECT_FIELD associate_house=====
            FIELD_NAME=associate_house
            FIELD_CODE_NAME_UPPER=ASSOCIATE_HOUSE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`associate_house` VARCHAR(255) DEFAULT NULL associate_house
            
            FIELD_NAME_LATEX=associate\_house
            FIELD_CODE_NAME_LATEX=associate\_house
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD associate_house=====



====== BEGIN FIELD CONDITIONS associate_house se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS associate_house=====

====== FOREACH OBJECT_FIELD houseid=====
            FIELD_NAME=houseid
            FIELD_CODE_NAME_UPPER=HOUSEID
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`houseid` VARCHAR(20) NOT NULL DEFAULT '' houseid
            
            FIELD_NAME_LATEX=houseid
            FIELD_CODE_NAME_LATEX=houseid
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD houseid=====



====== BEGIN FIELD CONDITIONS houseid se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS houseid=====

====== FOREACH OBJECT_FIELD id_rent=====
            FIELD_NAME=Rent
            FIELD_CODE_NAME_UPPER=ID_RENT
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_rent` INT(10) UNSIGNED  NOT NULL DEFAULT '0' Rent
            
            FIELD_NAME_LATEX=Rent
            FIELD_CODE_NAME_LATEX=id\_rent
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD id_rent=====



====== BEGIN FIELD CONDITIONS id_rent se pueden combinar con not, FIELD_NOT_HIDDEN=====






    LINK
		FIELD_SITE_LIST_LINKED_VALUE: echo '<a href="'.JRoute::_(T384HelperRoute::getRentRoute($item->id_rent, 0, $item->language)).'">'.JString::trim($item->r_rent_name).'</a>';
        FIELD_SITE_LIST_VALUE: echo JString::trim($item->r_rent_name);




    
	FIELD_ORDER


    
====== END FIELD CONDITIONS id_rent=====

====== FOREACH OBJECT_FIELD link=====
            FIELD_NAME=link
            FIELD_CODE_NAME_UPPER=LINK
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`link` VARCHAR(255) NOT NULL DEFAULT '' link
            
            FIELD_NAME_LATEX=link
            FIELD_CODE_NAME_LATEX=link
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD link=====



====== BEGIN FIELD CONDITIONS link se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS link=====

====== FOREACH OBJECT_FIELD listing_type=====
            FIELD_NAME=listing_type
            FIELD_CODE_NAME_UPPER=LISTING_TYPE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`listing_type` VARCHAR(45) NOT NULL DEFAULT '' listing_type
            
            FIELD_NAME_LATEX=listing\_type
            FIELD_CODE_NAME_LATEX=listing\_type
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD listing_type=====



====== BEGIN FIELD CONDITIONS listing_type se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS listing_type=====

====== FOREACH OBJECT_FIELD price=====
            FIELD_NAME=precio
            FIELD_CODE_NAME_UPPER=PRICE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`price` DECIMAL(11,2) NOT NULL DEFAULT '0' precio
            
            FIELD_NAME_LATEX=precio
            FIELD_CODE_NAME_LATEX=price
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD price=====



====== BEGIN FIELD CONDITIONS price se pueden combinar con not, FIELD_NOT_HIDDEN=====

    INTEGER




    FILTER




    REQUIRED

    
	FIELD_ORDER


    
====== END FIELD CONDITIONS price=====

====== FOREACH OBJECT_FIELD id_currency=====
            FIELD_NAME=moneda
            FIELD_CODE_NAME_UPPER=ID_CURRENCY
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_currency` INT(10) NOT NULL DEFAULT '0' moneda
            
            FIELD_NAME_LATEX=moneda
            FIELD_CODE_NAME_LATEX=id\_currency
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD id_currency=====



====== BEGIN FIELD CONDITIONS id_currency se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS id_currency=====

====== FOREACH OBJECT_FIELD hzipcode=====
            FIELD_NAME=código postal
            FIELD_CODE_NAME_UPPER=HZIPCODE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`hzipcode` VARCHAR(50) NOT NULL DEFAULT '' código postal
            
            FIELD_NAME_LATEX=c\'odigo postal
            FIELD_CODE_NAME_LATEX=hzipcode
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD hzipcode=====



====== BEGIN FIELD CONDITIONS hzipcode se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS hzipcode=====

====== FOREACH OBJECT_FIELD hlocation=====
            FIELD_NAME=ubicación
            FIELD_CODE_NAME_UPPER=HLOCATION
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`hlocation` TINYTEXT(255) NOT NULL DEFAULT '' ubicación
            
            FIELD_NAME_LATEX=ubicaci\'on
            FIELD_CODE_NAME_LATEX=hlocation
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD hlocation=====



====== BEGIN FIELD CONDITIONS hlocation se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS hlocation=====

====== FOREACH OBJECT_FIELD hlatitude=====
            FIELD_NAME=latitud
            FIELD_CODE_NAME_UPPER=HLATITUDE
            FIELD_INTRO=vivanuncios: components.o.w[1][3].s.adDetails.location.latitude
            FIELD_DESCRIPTION_INI=vivanuncios: components.o.w[1][3].s.adDetails.location.latitude
            FIELD_DESCRIPTION=vivanuncios: components.o.w[1][3].s.adDetails.location.latitude 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`hlatitude` VARCHAR(20) NOT NULL DEFAULT '0' latitud
            
            FIELD_NAME_LATEX=latitud
            FIELD_CODE_NAME_LATEX=hlatitude
            FIELD_DBCOMMENT_LATEX=vivanuncios: components.o.w[1][3].s.adDetails.location.latitude
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD hlatitude=====



====== BEGIN FIELD CONDITIONS hlatitude se pueden combinar con not, FIELD_NOT_HIDDEN=====

    INTEGER








    REQUIRED

    
	FIELD_ORDER


    
====== END FIELD CONDITIONS hlatitude=====

====== FOREACH OBJECT_FIELD hlongitude=====
            FIELD_NAME=longitud
            FIELD_CODE_NAME_UPPER=HLONGITUDE
            FIELD_INTRO=vivanuncios: components.o.w[1][3].s.adDetails.location.longitude
            FIELD_DESCRIPTION_INI=vivanuncios: components.o.w[1][3].s.adDetails.location.longitude
            FIELD_DESCRIPTION=vivanuncios: components.o.w[1][3].s.adDetails.location.longitude 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`hlongitude` VARCHAR(20) NOT NULL DEFAULT '0' longitud
            
            FIELD_NAME_LATEX=longitud
            FIELD_CODE_NAME_LATEX=hlongitude
            FIELD_DBCOMMENT_LATEX=vivanuncios: components.o.w[1][3].s.adDetails.location.longitude
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD hlongitude=====



====== BEGIN FIELD CONDITIONS hlongitude se pueden combinar con not, FIELD_NOT_HIDDEN=====

    INTEGER








    REQUIRED

    
	FIELD_ORDER


    
====== END FIELD CONDITIONS hlongitude=====

====== FOREACH OBJECT_FIELD map_zoom=====
            FIELD_NAME=Map zoom
            FIELD_CODE_NAME_UPPER=MAP_ZOOM
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`map_zoom` INT(10) NOT NULL DEFAULT '14' Map zoom
            
            FIELD_NAME_LATEX=Map zoom
            FIELD_CODE_NAME_LATEX=map\_zoom
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD map_zoom=====



====== BEGIN FIELD CONDITIONS map_zoom se pueden combinar con not, FIELD_NOT_HIDDEN=====

    INTEGER








    REQUIRED

    
	FIELD_ORDER


    
====== END FIELD CONDITIONS map_zoom=====

====== FOREACH OBJECT_FIELD rooms=====
            FIELD_NAME=habitaciones
            FIELD_CODE_NAME_UPPER=ROOMS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`rooms` INT(11) NOT NULL DEFAULT '0' habitaciones
            
            FIELD_NAME_LATEX=habitaciones
            FIELD_CODE_NAME_LATEX=rooms
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD rooms=====



====== BEGIN FIELD CONDITIONS rooms se pueden combinar con not, FIELD_NOT_HIDDEN=====

    INTEGER









    
	FIELD_ORDER


    
====== END FIELD CONDITIONS rooms=====

====== FOREACH OBJECT_FIELD bathrooms=====
            FIELD_NAME=baños
            FIELD_CODE_NAME_UPPER=BATHROOMS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=30
                        
            FIELD_OPTIONS_LANGUAGE_VARS=COM_T384_HOUSES_BATHROOMS_VALUE_0="0"
COM_T384_HOUSES_BATHROOMS_VALUE_1="1"
COM_T384_HOUSES_BATHROOMS_VALUE_2="2"
COM_T384_HOUSES_BATHROOMS_VALUE_3="3"
COM_T384_HOUSES_BATHROOMS_VALUE_4="4"
COM_T384_HOUSES_BATHROOMS_VALUE_5="5"
COM_T384_HOUSES_BATHROOMS_VALUE_6="6+"

            FIELD_DB=`bathrooms` VARCHAR(4) NOT NULL DEFAULT '0' baños
            
            FIELD_NAME_LATEX=ba\~nos
            FIELD_CODE_NAME_LATEX=bathrooms
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD bathrooms=====



====== BEGIN FIELD CONDITIONS bathrooms se pueden combinar con not, FIELD_NOT_HIDDEN=====



    LIST

    HAS_OPTIONS

    FILTER





    
	FIELD_ORDER


    
====== END FIELD CONDITIONS bathrooms=====

====== FOREACH OBJECT_FIELD bedrooms=====
            FIELD_NAME=dormitorios
            FIELD_CODE_NAME_UPPER=BEDROOMS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=30
                        
            FIELD_OPTIONS_LANGUAGE_VARS=COM_T384_HOUSES_BEDROOMS_VALUE_0="0"
COM_T384_HOUSES_BEDROOMS_VALUE_1="1"
COM_T384_HOUSES_BEDROOMS_VALUE_2="2"
COM_T384_HOUSES_BEDROOMS_VALUE_3="3"
COM_T384_HOUSES_BEDROOMS_VALUE_4="4"
COM_T384_HOUSES_BEDROOMS_VALUE_5="5"
COM_T384_HOUSES_BEDROOMS_VALUE_6="6+"

            FIELD_DB=`bedrooms` VARCHAR(4) NOT NULL DEFAULT '0' dormitorios
            
            FIELD_NAME_LATEX=dormitorios
            FIELD_CODE_NAME_LATEX=bedrooms
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD bedrooms=====



====== BEGIN FIELD CONDITIONS bedrooms se pueden combinar con not, FIELD_NOT_HIDDEN=====



    LIST

    HAS_OPTIONS

    FILTER





    
	FIELD_ORDER


    
====== END FIELD CONDITIONS bedrooms=====

====== FOREACH OBJECT_FIELD contacts=====
            FIELD_NAME=Contacts
            FIELD_CODE_NAME_UPPER=CONTACTS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`contacts` VARCHAR(250) DEFAULT NULL Contacts
            
            FIELD_NAME_LATEX=Contacts
            FIELD_CODE_NAME_LATEX=contacts
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD contacts=====



====== BEGIN FIELD CONDITIONS contacts se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS contacts=====

====== FOREACH OBJECT_FIELD listing_status=====
            FIELD_NAME=listing_status
            FIELD_CODE_NAME_UPPER=LISTING_STATUS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`listing_status` VARCHAR(45) DEFAULT NULL listing_status
            
            FIELD_NAME_LATEX=listing\_status
            FIELD_CODE_NAME_LATEX=listing\_status
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD listing_status=====



====== BEGIN FIELD CONDITIONS listing_status se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS listing_status=====

====== FOREACH OBJECT_FIELD property_type=====
            FIELD_NAME=property_type
            FIELD_CODE_NAME_UPPER=PROPERTY_TYPE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`property_type` VARCHAR(45) DEFAULT NULL property_type
            
            FIELD_NAME_LATEX=property\_type
            FIELD_CODE_NAME_LATEX=property\_type
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD property_type=====



====== BEGIN FIELD CONDITIONS property_type se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS property_type=====

====== FOREACH OBJECT_FIELD year=====
            FIELD_NAME=año de construcción
            FIELD_CODE_NAME_UPPER=YEAR
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`year` VARCHAR(4) DEFAULT NULL año de construcción
            
            FIELD_NAME_LATEX=a\~no de construcci\'on
            FIELD_CODE_NAME_LATEX=year
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD year=====



====== BEGIN FIELD CONDITIONS year se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS year=====

====== FOREACH OBJECT_FIELD agent=====
            FIELD_NAME=Agent
            FIELD_CODE_NAME_UPPER=AGENT
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`agent` VARCHAR(45) DEFAULT NULL Agent
            
            FIELD_NAME_LATEX=Agent
            FIELD_CODE_NAME_LATEX=agent
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD agent=====



====== BEGIN FIELD CONDITIONS agent se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS agent=====

====== FOREACH OBJECT_FIELD area_unit=====
            FIELD_NAME=area_unit
            FIELD_CODE_NAME_UPPER=AREA_UNIT
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`area_unit` VARCHAR(45) DEFAULT NULL area_unit
            
            FIELD_NAME_LATEX=area\_unit
            FIELD_CODE_NAME_LATEX=area\_unit
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD area_unit=====



====== BEGIN FIELD CONDITIONS area_unit se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS area_unit=====

====== FOREACH OBJECT_FIELD land_area=====
            FIELD_NAME=land_area
            FIELD_CODE_NAME_UPPER=LAND_AREA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`land_area` VARCHAR(45) DEFAULT NULL land_area
            
            FIELD_NAME_LATEX=land\_area
            FIELD_CODE_NAME_LATEX=land\_area
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD land_area=====



====== BEGIN FIELD CONDITIONS land_area se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS land_area=====

====== FOREACH OBJECT_FIELD land_area_unit=====
            FIELD_NAME=land_area_unit
            FIELD_CODE_NAME_UPPER=LAND_AREA_UNIT
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`land_area_unit` VARCHAR(45) DEFAULT NULL land_area_unit
            
            FIELD_NAME_LATEX=land\_area\_unit
            FIELD_CODE_NAME_LATEX=land\_area\_unit
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD land_area_unit=====



====== BEGIN FIELD CONDITIONS land_area_unit se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS land_area_unit=====

====== FOREACH OBJECT_FIELD expiration_date=====
            FIELD_NAME=expiration_date
            FIELD_CODE_NAME_UPPER=EXPIRATION_DATE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`expiration_date` DATETIME DEFAULT NULL expiration_date
            
            FIELD_NAME_LATEX=expiration\_date
            FIELD_CODE_NAME_LATEX=expiration\_date
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD expiration_date=====



====== BEGIN FIELD CONDITIONS expiration_date se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS expiration_date=====

====== FOREACH OBJECT_FIELD lot_size=====
            FIELD_NAME=área del lote
            FIELD_CODE_NAME_UPPER=LOT_SIZE
            FIELD_INTRO=área del lote
            FIELD_DESCRIPTION_INI=área del lote
            FIELD_DESCRIPTION=área del lote 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`lot_size` INT(11) NOT NULL DEFAULT '0' área del lote
            
            FIELD_NAME_LATEX=\'area del lote
            FIELD_CODE_NAME_LATEX=lot\_size
            FIELD_DBCOMMENT_LATEX=\'area del lote
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD lot_size=====



====== BEGIN FIELD CONDITIONS lot_size se pueden combinar con not, FIELD_NOT_HIDDEN=====

    INTEGER









    
	FIELD_ORDER


    
====== END FIELD CONDITIONS lot_size=====

====== FOREACH OBJECT_FIELD house_size=====
            FIELD_NAME=área de construcción
            FIELD_CODE_NAME_UPPER=HOUSE_SIZE
            FIELD_INTRO=área de construcción
            FIELD_DESCRIPTION_INI=área de construcción
            FIELD_DESCRIPTION=área de construcción 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`house_size` INT(11) NOT NULL DEFAULT '0' área de construcción
            
            FIELD_NAME_LATEX=\'area de construcci\'on
            FIELD_CODE_NAME_LATEX=house\_size
            FIELD_DBCOMMENT_LATEX=\'area de construcci\'on
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD house_size=====



====== BEGIN FIELD CONDITIONS house_size se pueden combinar con not, FIELD_NOT_HIDDEN=====

    INTEGER









    
	FIELD_ORDER


    
====== END FIELD CONDITIONS house_size=====

====== FOREACH OBJECT_FIELD garages=====
            FIELD_NAME=cocheras
            FIELD_CODE_NAME_UPPER=GARAGES
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`garages` VARCHAR(4) DEFAULT NULL cocheras
            
            FIELD_NAME_LATEX=cocheras
            FIELD_CODE_NAME_LATEX=garages
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD garages=====



====== BEGIN FIELD CONDITIONS garages se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS garages=====

====== FOREACH OBJECT_FIELD date=====
            FIELD_NAME=Date
            FIELD_CODE_NAME_UPPER=DATE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`date` DATETIME DEFAULT NULL Date
            
            FIELD_NAME_LATEX=Date
            FIELD_CODE_NAME_LATEX=date
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD date=====



====== BEGIN FIELD CONDITIONS date se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS date=====

====== FOREACH OBJECT_FIELD edok_link=====
            FIELD_NAME=edok_link
            FIELD_CODE_NAME_UPPER=EDOK_LINK
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`edok_link` VARCHAR(200) DEFAULT NULL edok_link
            
            FIELD_NAME_LATEX=edok\_link
            FIELD_CODE_NAME_LATEX=edok\_link
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD edok_link=====



====== BEGIN FIELD CONDITIONS edok_link se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS edok_link=====

====== FOREACH OBJECT_FIELD owneremail=====
            FIELD_NAME=owneremail
            FIELD_CODE_NAME_UPPER=OWNEREMAIL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`owneremail` VARCHAR(50) DEFAULT NULL owneremail
            
            FIELD_NAME_LATEX=owneremail
            FIELD_CODE_NAME_LATEX=owneremail
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD owneremail=====



====== BEGIN FIELD CONDITIONS owneremail se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS owneremail=====

====== FOREACH OBJECT_FIELD featured_clicks=====
            FIELD_NAME=featured_clicks
            FIELD_CODE_NAME_UPPER=FEATURED_CLICKS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`featured_clicks` VARCHAR(100) DEFAULT NULL featured_clicks
            
            FIELD_NAME_LATEX=featured\_clicks
            FIELD_CODE_NAME_LATEX=featured\_clicks
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD featured_clicks=====



====== BEGIN FIELD CONDITIONS featured_clicks se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS featured_clicks=====

====== FOREACH OBJECT_FIELD featured_shows=====
            FIELD_NAME=featured_shows
            FIELD_CODE_NAME_UPPER=FEATURED_SHOWS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`featured_shows` VARCHAR(100) DEFAULT NULL featured_shows
            
            FIELD_NAME_LATEX=featured\_shows
            FIELD_CODE_NAME_LATEX=featured\_shows
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD featured_shows=====



====== BEGIN FIELD CONDITIONS featured_shows se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS featured_shows=====

====== FOREACH OBJECT_FIELD pixUpdtedDt=====
            FIELD_NAME=pixUpdtedDt
            FIELD_CODE_NAME_UPPER=PIXUPDTEDDT
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`pixUpdtedDt` VARCHAR(100) DEFAULT NULL pixUpdtedDt
            
            FIELD_NAME_LATEX=pixUpdtedDt
            FIELD_CODE_NAME_LATEX=pixUpdtedDt
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD pixUpdtedDt=====



====== BEGIN FIELD CONDITIONS pixUpdtedDt se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS pixUpdtedDt=====

====== FOREACH OBJECT_FIELD extra1=====
            FIELD_NAME=extra1
            FIELD_CODE_NAME_UPPER=EXTRA1
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`extra1` VARCHAR(250) DEFAULT NULL extra1
            
            FIELD_NAME_LATEX=extra1
            FIELD_CODE_NAME_LATEX=extra1
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD extra1=====



====== BEGIN FIELD CONDITIONS extra1 se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS extra1=====

====== FOREACH OBJECT_FIELD extra2=====
            FIELD_NAME=extra2
            FIELD_CODE_NAME_UPPER=EXTRA2
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`extra2` VARCHAR(250) DEFAULT NULL extra2
            
            FIELD_NAME_LATEX=extra2
            FIELD_CODE_NAME_LATEX=extra2
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD extra2=====



====== BEGIN FIELD CONDITIONS extra2 se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS extra2=====

====== FOREACH OBJECT_FIELD extra3=====
            FIELD_NAME=extra3
            FIELD_CODE_NAME_UPPER=EXTRA3
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`extra3` VARCHAR(250) DEFAULT NULL extra3
            
            FIELD_NAME_LATEX=extra3
            FIELD_CODE_NAME_LATEX=extra3
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD extra3=====



====== BEGIN FIELD CONDITIONS extra3 se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS extra3=====

====== FOREACH OBJECT_FIELD extra4=====
            FIELD_NAME=extra4
            FIELD_CODE_NAME_UPPER=EXTRA4
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`extra4` VARCHAR(250) DEFAULT NULL extra4
            
            FIELD_NAME_LATEX=extra4
            FIELD_CODE_NAME_LATEX=extra4
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD extra4=====



====== BEGIN FIELD CONDITIONS extra4 se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS extra4=====

====== FOREACH OBJECT_FIELD extra5=====
            FIELD_NAME=extra5
            FIELD_CODE_NAME_UPPER=EXTRA5
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`extra5` VARCHAR(250) DEFAULT NULL extra5
            
            FIELD_NAME_LATEX=extra5
            FIELD_CODE_NAME_LATEX=extra5
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD extra5=====



====== BEGIN FIELD CONDITIONS extra5 se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS extra5=====

====== FOREACH OBJECT_FIELD extra6=====
            FIELD_NAME=extra6
            FIELD_CODE_NAME_UPPER=EXTRA6
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`extra6` VARCHAR(250) DEFAULT NULL extra6
            
            FIELD_NAME_LATEX=extra6
            FIELD_CODE_NAME_LATEX=extra6
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD extra6=====



====== BEGIN FIELD CONDITIONS extra6 se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS extra6=====

====== FOREACH OBJECT_FIELD extra7=====
            FIELD_NAME=extra7
            FIELD_CODE_NAME_UPPER=EXTRA7
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`extra7` VARCHAR(250) DEFAULT NULL extra7
            
            FIELD_NAME_LATEX=extra7
            FIELD_CODE_NAME_LATEX=extra7
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD extra7=====



====== BEGIN FIELD CONDITIONS extra7 se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS extra7=====

====== FOREACH OBJECT_FIELD extra8=====
            FIELD_NAME=extra8
            FIELD_CODE_NAME_UPPER=EXTRA8
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`extra8` VARCHAR(250) DEFAULT NULL extra8
            
            FIELD_NAME_LATEX=extra8
            FIELD_CODE_NAME_LATEX=extra8
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD extra8=====



====== BEGIN FIELD CONDITIONS extra8 se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS extra8=====

====== FOREACH OBJECT_FIELD extra9=====
            FIELD_NAME=extra9
            FIELD_CODE_NAME_UPPER=EXTRA9
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`extra9` VARCHAR(250) DEFAULT NULL extra9
            
            FIELD_NAME_LATEX=extra9
            FIELD_CODE_NAME_LATEX=extra9
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD extra9=====



====== BEGIN FIELD CONDITIONS extra9 se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS extra9=====

====== FOREACH OBJECT_FIELD extra10=====
            FIELD_NAME=extra10
            FIELD_CODE_NAME_UPPER=EXTRA10
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`extra10` VARCHAR(250) DEFAULT NULL extra10
            
            FIELD_NAME_LATEX=extra10
            FIELD_CODE_NAME_LATEX=extra10
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD extra10=====



====== BEGIN FIELD CONDITIONS extra10 se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS extra10=====

====== FOREACH OBJECT_FIELD energy_value=====
            FIELD_NAME=energy_value
            FIELD_CODE_NAME_UPPER=ENERGY_VALUE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=37
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`energy_value` DECIMAL(11,2) DEFAULT NULL energy_value
            
            FIELD_NAME_LATEX=energy\_value
            FIELD_CODE_NAME_LATEX=energy\_value
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD energy_value=====



====== BEGIN FIELD CONDITIONS energy_value se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS energy_value=====

====== FOREACH OBJECT_FIELD climate_value=====
            FIELD_NAME=climate_value
            FIELD_CODE_NAME_UPPER=CLIMATE_VALUE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=37
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`climate_value` DECIMAL(11,2) DEFAULT NULL climate_value
            
            FIELD_NAME_LATEX=climate\_value
            FIELD_CODE_NAME_LATEX=climate\_value
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD climate_value=====



====== BEGIN FIELD CONDITIONS climate_value se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS climate_value=====

====== FOREACH OBJECT_FIELD owner_id=====
            FIELD_NAME=owner_id
            FIELD_CODE_NAME_UPPER=OWNER_ID
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`owner_id` INT(10) UNSIGNED  NOT NULL DEFAULT '0' owner_id
            
            FIELD_NAME_LATEX=owner\_id
            FIELD_CODE_NAME_LATEX=owner\_id
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD owner_id=====



====== BEGIN FIELD CONDITIONS owner_id se pueden combinar con not, FIELD_NOT_HIDDEN=====










    
	FIELD_ORDER


    
====== END FIELD CONDITIONS owner_id=====

====== FOREACH OBJECT_FIELD photos=====
            FIELD_NAME=fotos
            FIELD_CODE_NAME_UPPER=PHOTOS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=42
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`photos` MEDIUMTEXT  fotos
            
            FIELD_NAME_LATEX=fotos
            FIELD_CODE_NAME_LATEX=photos
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD photos=====



====== BEGIN FIELD CONDITIONS photos se pueden combinar con not, FIELD_NOT_HIDDEN=====







    MULTIPLE



    


    
====== END FIELD CONDITIONS photos=====

{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

{1.3}
====== FOREACH FILTER_FIELD site=====
[%%FIELD_FOREIGN_OBJECT_UCWORDS%%]	Country
[%%FIELD_FOREIGN_OBJECT_UPPER%%]	COUNTRY
[%%FIELD_FOREIGN_OBJECT_PLURAL_UCFIRST%%]	Countries
[%%FIELD_FOREIGN_OBJECT_PLURAL%%]	countries
[%%FIELD_FOREIGN_OBJECT_CODE_NAME%%]	country
[%%FIELD_FOREIGN_OBJECT_ACRONYM_UPPER%%]	C1
[%%FIELD_FOREIGN_OBJECT%%]	country
[%%FIELD_FOREIGN_OBJECT_ORDERING_FIELD%%]	ordering
[%%FIELD_FOREIGN_OBJECT_LABEL_FIELD%%]	name
[%%FIELD_FOREIGN_OBJECT_ACRONYM%%]	c1
====== ENDFOR FILTER_FIELD site=====
====== FOREACH FILTER_FIELD id_country=====
Country	Country
COUNTRY	COUNTRY
Countries	Countries
countries	countries
country	country
C	C1
country	country
ordering	ordering
name	name
c	c1
====== ENDFOR FILTER_FIELD id_country=====
====== FOREACH FILTER_FIELD id_lstate=====
Lstate	Country
LSTATE	COUNTRY
Lstates	Countries
lstates	countries
lstate	country
S	C1
lstate	country
ordering	ordering
name	name
s	c1
====== ENDFOR FILTER_FIELD id_lstate=====
====== FOREACH FILTER_FIELD id_lmunicipality=====
Lmunicipality	Country
LMUNICIPALITY	COUNTRY
Lmunicipalities	Countries
lmunicipalities	countries
lmunicipality	country
M	C1
lmunicipality	country
ordering	ordering
name	name
m	c1
====== ENDFOR FILTER_FIELD id_lmunicipality=====
====== FOREACH FILTER_FIELD price=====
[%%FIELD_FOREIGN_OBJECT_UCWORDS%%]	Country
[%%FIELD_FOREIGN_OBJECT_UPPER%%]	COUNTRY
[%%FIELD_FOREIGN_OBJECT_PLURAL_UCFIRST%%]	Countries
[%%FIELD_FOREIGN_OBJECT_PLURAL%%]	countries
[%%FIELD_FOREIGN_OBJECT_CODE_NAME%%]	country
[%%FIELD_FOREIGN_OBJECT_ACRONYM_UPPER%%]	C1
[%%FIELD_FOREIGN_OBJECT%%]	country
[%%FIELD_FOREIGN_OBJECT_ORDERING_FIELD%%]	ordering
[%%FIELD_FOREIGN_OBJECT_LABEL_FIELD%%]	name
[%%FIELD_FOREIGN_OBJECT_ACRONYM%%]	c1
====== ENDFOR FILTER_FIELD price=====
====== FOREACH FILTER_FIELD bathrooms=====
[%%FIELD_FOREIGN_OBJECT_UCWORDS%%]	Country
[%%FIELD_FOREIGN_OBJECT_UPPER%%]	COUNTRY
[%%FIELD_FOREIGN_OBJECT_PLURAL_UCFIRST%%]	Countries
[%%FIELD_FOREIGN_OBJECT_PLURAL%%]	countries
[%%FIELD_FOREIGN_OBJECT_CODE_NAME%%]	country
[%%FIELD_FOREIGN_OBJECT_ACRONYM_UPPER%%]	C1
[%%FIELD_FOREIGN_OBJECT%%]	country
[%%FIELD_FOREIGN_OBJECT_ORDERING_FIELD%%]	ordering
[%%FIELD_FOREIGN_OBJECT_LABEL_FIELD%%]	name
[%%FIELD_FOREIGN_OBJECT_ACRONYM%%]	c1
====== ENDFOR FILTER_FIELD bathrooms=====
====== FOREACH FILTER_FIELD bedrooms=====
[%%FIELD_FOREIGN_OBJECT_UCWORDS%%]	Country
[%%FIELD_FOREIGN_OBJECT_UPPER%%]	COUNTRY
[%%FIELD_FOREIGN_OBJECT_PLURAL_UCFIRST%%]	Countries
[%%FIELD_FOREIGN_OBJECT_PLURAL%%]	countries
[%%FIELD_FOREIGN_OBJECT_CODE_NAME%%]	country
[%%FIELD_FOREIGN_OBJECT_ACRONYM_UPPER%%]	C1
[%%FIELD_FOREIGN_OBJECT%%]	country
[%%FIELD_FOREIGN_OBJECT_ORDERING_FIELD%%]	ordering
[%%FIELD_FOREIGN_OBJECT_LABEL_FIELD%%]	name
[%%FIELD_FOREIGN_OBJECT_ACRONYM%%]	c1
====== ENDFOR FILTER_FIELD bedrooms=====
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name	Título de la conversación whatsapp
    Compobject_description_ini	
	
    COMPOBJECT	WATITLECONVERSATION
    compobject	watitleconversation
    CompObject	WaTitleConversation
    
    compobject_name	título de la conversación whatsapp
    CompObject_name	Título De La Conversación Whatsapp
    CompObject_short_name	Titulo Conversacion Wtsapp 
    Compobject_short_name	Titulo conversacion wtsapp 
    compobject_short_name	titulo conversacion wtsapp 
    
    COMPOBJECTPLURAL	WA_TITLE_CONVERSATIONS
    compobjectplural	wa_title_conversations
    CompObjectPlural	WaTitleConversations
    compobject_plural_name	titulo conversaciones wtsapp 
    CompObject_plural_name	Titulo Conversaciones Wtsapp 
    compobject_short_plural_name	titulo conversaciones wtsapp 
    CompObject_short_plural_name	Titulo Conversaciones Wtsapp 
        
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=WA_TITLE_CONVERSATIONS_FS
        FIELDSET_NAME=wa_title_conversations_fs
        FIELDSET_CODE_NAME_UPPER=WA_TITLE_CONVERSATIONS_FS
        FIELDSET_DESCRIPTION=
{1.1}        
====== FOREACH OBJECT_FIELD nada=====
            FIELD_NAME=nada
            FIELD_CODE_NAME_UPPER=NADA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`nada` VARCHAR(255) NOT NULL DEFAULT '' nada
            
            FIELD_NAME_LATEX=nada
            FIELD_CODE_NAME_LATEX=nada
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD nada=====



====== BEGIN FIELD CONDITIONS nada se pueden combinar con not, FIELD_NOT_HIDDEN=====










    


    
====== END FIELD CONDITIONS nada=====

{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

{1.3}
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name	Entrada de la conversación whatsapp
    Compobject_description_ini	
	
    COMPOBJECT	WAENTRYCONVERSATION
    compobject	waentryconversation
    CompObject	WaEntryConversation
    
    compobject_name	entrada de la conversación whatsapp
    CompObject_name	Entrada De La Conversación Whatsapp
    CompObject_short_name	Entrada Conversacion Wtsapp 
    Compobject_short_name	Entrada conversacion wtsapp 
    compobject_short_name	entrada conversacion wtsapp 
    
    COMPOBJECTPLURAL	WA_ENTRY_CONVERSATIONS
    compobjectplural	wa_entry_conversations
    CompObjectPlural	WaEntryConversations
    compobject_plural_name	entrada conversaciones wtsapp 
    CompObject_plural_name	Entrada Conversaciones Wtsapp 
    compobject_short_plural_name	entrada conversaciones wtsapp 
    CompObject_short_plural_name	Entrada Conversaciones Wtsapp 
        
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=WA_ENTRY_CONVERSATIONS_FS
        FIELDSET_NAME=wa_entry_conversations_fs
        FIELDSET_CODE_NAME_UPPER=WA_ENTRY_CONVERSATIONS_FS
        FIELDSET_DESCRIPTION=
{1.1}        
====== FOREACH OBJECT_FIELD id_wa_title_conversation=====
            FIELD_NAME=Tema de la conversación Whatsapp
            FIELD_CODE_NAME_UPPER=ID_WA_TITLE_CONVERSATION
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_wa_title_conversation` INT(10) UNSIGNED  NOT NULL DEFAULT '0' Tema de la conversación Whatsapp
            
            FIELD_NAME_LATEX=Tema de la conversaci\'on Whatsapp
            FIELD_CODE_NAME_LATEX=id\_wa\_title\_conversation
            FIELD_DBCOMMENT_LATEX=
            


        
{-1.2}
====== ENDFOR OBJECT_FIELD id_wa_title_conversation=====



====== BEGIN FIELD CONDITIONS id_wa_title_conversation se pueden combinar con not, FIELD_NOT_HIDDEN=====









    REQUIRED

    


    
====== END FIELD CONDITIONS id_wa_title_conversation=====

{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

{1.3}
{-1.3}
    
{-1.0}



========NO SE DONDE VAN============
    {HAVE BATCH}

    {HAVE COPY}

    {HAVE ORDERING}


	{INCLUDE_PARAMS_RECORD}

	{INCLUDE_ASSETACL}



	{INCLUDE_NAME}

	{INCLUDE_ACCESS}

	{INCLUDE_LANGUAGE}

	{INCLUDE_IMAGE}


	{INCLUDE_PARAMS_GLOBAL}

	{INCLUDE_STATUS}

	{INCLUDE_MODIFIED}



	{INCLUDE_TAGS}


	{INCLUDE_PARAMS_MENU}

	{INCLUDE_PUBLISHED_DATES}


	{INCLUDE_CHECKOUT}

	{INCLUDE_HITS}

	{INCLUDE_VERSIONS}

	{INCLUDE_FEATURED}


	{GENERATE_SITE}
	    {GENERATE_SITE_LAYOUT_ARTICLE}
    
    	{GENERATE_SITE_LAYOUT_BLOG}

    	{GENERATE_SITE_VIEWS}

