#one [%%IF per line
Titulo=RealEstateManagerCA
Nombre del paquete com_architectcomp=com_remca
Descripción <p>En vivanuncios las categorías se pueden obtener de https://www.vivanuncios.com.mx/api/metadata/dropdown/allcategories</p><br/><p> </p><br/><p>@ToDo revisar <a href=&quot;http://fancyapps.com/fancybox/#license:&quot;>http://fancyapps.com/fancybox/#license:</a></p><br/><p>You are <b>free</b> to use fancyBox for your personal or non-profit website projects. <br /> You can get the author's permission to use fancyBox for commercial websites by <a href=&quot;http://fancyapps.com/store/&quot;>paying a fee</a>.</p><br/><ul><br/><li>De momento plural_name va a conservar los nombres del código fuente original</li><br/><li>Cambiar los campos published por JoomlaFeatured.Status (state), ya comprobé que son compatibles.</li><br/><li>Tiene implementado acceso a registros por grupos definidos en jos_rem_main_categories.params que es del tipo text y resulta muy costoso computacionalmente</li><br/><li></li><br/></ul><br/><p>CHANGELOG</p><br/><ul><br/><li>20180123 Se modificó el ENGINE de las tablas para soportar CONSTRAINTS, se agregó la tabla vivanuncios_items que contiene los datos del scraping, se agregó indices a las columnas published para acelerar las búsquedas</li><br/><li>20180125 cambié published por state para generarlo desde joomla_features</li><br/><li>20180125 deshabilite #__rem_houses.approved, considero que no se debería utilizar porque existe published indexado, y approved es costoso.</li><br/><li>20180129 renombre house.htitle por house.name. Los objetos modales requieren la columna name, la agregué en const, language, rent.</li><br/></ul> <p>En vivanuncios las categorías se pueden obtener de https://www.vivanuncios.com.mx/api/metadata/dropdown/allcategories</p><br/><p> </p><br/><p>@ToDo revisar <a href=&quot;http://fancyapps.com/fancybox/#license:&quot;>http://fancyapps.com/fancybox/#license:</a></p><br/><p>You are <b>free</b> to use fancyBox for your personal or non-profit website projects. <br /> You can get the author's permission to use fancyBox for commercial websites by <a href=&quot;http://fancyapps.com/store/&quot;>paying a fee</a>.</p><br/><ul><br/><li>De momento plural_name va a conservar los nombres del código fuente original</li><br/><li>Cambiar los campos published por JoomlaFeatured.Status (state), ya comprobé que son compatibles.</li><br/><li>Tiene implementado acceso a registros por grupos definidos en jos_rem_main_categories.params que es del tipo text y resulta muy costoso computacionalmente</li><br/><li></li><br/></ul><br/><p>CHANGELOG</p><br/><ul><br/><li>20180123 Se modificó el ENGINE de las tablas para soportar CONSTRAINTS, se agregó la tabla vivanuncios_items que contiene los datos del scraping, se agregó indices a las columnas published para acelerar las búsquedas</li><br/><li>20180125 cambié published por state para generarlo desde joomla_features</li><br/><li>20180125 deshabilite #__rem_houses.approved, considero que no se debería utilizar porque existe published indexado, y approved es costoso.</li><br/><li>20180129 renombre house.htitle por house.name. Los objetos modales requieren la columna name, la agregué en const, language, rent.</li><br/></ul>
Release 1.0.0
Copyright 
COMPONENTSTARTVERSION=1.0.0
COMPONENTAUTHOR=caballeroantonio
COMPONENTWEBSITE=caballeroantonio.com


architectcomp_name=realestatemanagerca
COM_ARCHITECTCOMP=COM_REMCA
ARCHITECTCOMP=REMCA
ArchitectComp=Remca
architectcomp=remca

{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=House
    Compobject_description_ini=
	
    COMPOBJECT=HOUSE
    compobject=house
    CompObject=House
    
    compobject_name=house
    CompObject_name=House
    CompObject_short_name=House
    Compobject_short_name=House
    compobject_short_name=house
    
    COMPOBJECTPLURAL=HOUSES
    compobjectplural=houses
    CompObjectPlural=Houses
    compobject_plural_name=houses
    CompObject_plural_name=Houses
    compobject_short_plural_name=houses
    CompObject_short_plural_name=Houses
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=HOUSES_FS
        FIELDSET_NAME=houses_fs
        FIELDSET_CODE_NAME_UPPER=HOUSES_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=Country
            FIELD_CODE_NAME_UPPER=ID_COUNTRY
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_country` INT(10) UNSIGNED  NOT NULL DEFAULT '0' Country
            
            FIELD_NAME_LATEX=Country
            FIELD_CODE_NAME_LATEX=id\_country
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=C1
                FIELD_FOREIGN_OBJECT_UPPER=COUNTRY
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=State
            FIELD_CODE_NAME_UPPER=ID_LSTATE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_lstate` INT(10) UNSIGNED  NOT NULL DEFAULT '0' State
            
            FIELD_NAME_LATEX=State
            FIELD_CODE_NAME_LATEX=id\_lstate
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=S
                FIELD_FOREIGN_OBJECT_UPPER=LSTATE
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=id_municipality
            FIELD_CODE_NAME_UPPER=ID_LMUNICIPALITY
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_lmunicipality` INT(10) UNSIGNED  NOT NULL DEFAULT '0' id_municipality
            
            FIELD_NAME_LATEX=id\_municipality
            FIELD_CODE_NAME_LATEX=id\_lmunicipality
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=M
                FIELD_FOREIGN_OBJECT_UPPER=LMUNICIPALITY
            


        
{-1.2}

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=R
                FIELD_FOREIGN_OBJECT_UPPER=RENT
            


        
{-1.2}

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
            FIELD_NAME=link
            FIELD_CODE_NAME_UPPER=LINK
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`link` VARCHAR(250) NOT NULL DEFAULT '' link
            
            FIELD_NAME_LATEX=link
            FIELD_CODE_NAME_LATEX=link
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
            FIELD_NAME=price
            FIELD_CODE_NAME_UPPER=PRICE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`price` DECIMAL(11,2) NOT NULL DEFAULT '0' price
            
            FIELD_NAME_LATEX=price
            FIELD_CODE_NAME_LATEX=price
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Currency
            FIELD_CODE_NAME_UPPER=ID_CURRENCY
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=18
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_currency` INT(10) NOT NULL DEFAULT '0' Currency
            
            FIELD_NAME_LATEX=Currency
            FIELD_CODE_NAME_LATEX=id\_currency
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=hcountry
            FIELD_CODE_NAME_UPPER=HCOUNTRY
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`hcountry` VARCHAR(50) NOT NULL DEFAULT '' hcountry
            
            FIELD_NAME_LATEX=hcountry
            FIELD_CODE_NAME_LATEX=hcountry
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=hregion
            FIELD_CODE_NAME_UPPER=HREGION
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`hregion` VARCHAR(50) NOT NULL DEFAULT '' hregion
            
            FIELD_NAME_LATEX=hregion
            FIELD_CODE_NAME_LATEX=hregion
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=hcity
            FIELD_CODE_NAME_UPPER=HCITY
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`hcity` VARCHAR(50) NOT NULL DEFAULT '' hcity
            
            FIELD_NAME_LATEX=hcity
            FIELD_CODE_NAME_LATEX=hcity
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=hzipcode
            FIELD_CODE_NAME_UPPER=HZIPCODE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`hzipcode` VARCHAR(50) NOT NULL DEFAULT '' hzipcode
            
            FIELD_NAME_LATEX=hzipcode
            FIELD_CODE_NAME_LATEX=hzipcode
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=hlocation
            FIELD_CODE_NAME_UPPER=HLOCATION
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`hlocation` VARCHAR(100) NOT NULL DEFAULT '' hlocation
            
            FIELD_NAME_LATEX=hlocation
            FIELD_CODE_NAME_LATEX=hlocation
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=hlatitude
            FIELD_CODE_NAME_UPPER=HLATITUDE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`hlatitude` VARCHAR(20) NOT NULL DEFAULT '' hlatitude
            
            FIELD_NAME_LATEX=hlatitude
            FIELD_CODE_NAME_LATEX=hlatitude
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=hlongitude
            FIELD_CODE_NAME_UPPER=HLONGITUDE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`hlongitude` VARCHAR(20) NOT NULL DEFAULT '' hlongitude
            
            FIELD_NAME_LATEX=hlongitude
            FIELD_CODE_NAME_LATEX=hlongitude
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=map_zoom
            FIELD_CODE_NAME_UPPER=MAP_ZOOM
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`map_zoom` INT(10) NOT NULL DEFAULT '14' map_zoom
            
            FIELD_NAME_LATEX=map\_zoom
            FIELD_CODE_NAME_LATEX=map\_zoom
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=rooms
            FIELD_CODE_NAME_UPPER=ROOMS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`rooms` INT(11) NOT NULL DEFAULT '0' rooms
            
            FIELD_NAME_LATEX=rooms
            FIELD_CODE_NAME_LATEX=rooms
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=bathrooms
            FIELD_CODE_NAME_UPPER=BATHROOMS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`bathrooms` INT(11) NOT NULL DEFAULT '0' bathrooms
            
            FIELD_NAME_LATEX=bathrooms
            FIELD_CODE_NAME_LATEX=bathrooms
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=bedrooms
            FIELD_CODE_NAME_UPPER=BEDROOMS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`bedrooms` INT(11) NOT NULL DEFAULT '0' bedrooms
            
            FIELD_NAME_LATEX=bedrooms
            FIELD_CODE_NAME_LATEX=bedrooms
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=contacts
            FIELD_CODE_NAME_UPPER=CONTACTS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`contacts` VARCHAR(250) DEFAULT NULL contacts
            
            FIELD_NAME_LATEX=contacts
            FIELD_CODE_NAME_LATEX=contacts
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=image_link
            FIELD_CODE_NAME_UPPER=IMAGE_LINK
            FIELD_INTRO=<p>@ToDo implementar el uso del campo pre-formado images que es un JSON/ARRAY</p>
            FIELD_DESCRIPTION_INI=<p>@ToDo implementar el uso del campo pre-formado images que es un JSON/ARRAY</p>
            FIELD_DESCRIPTION=<p>@ToDo implementar el uso del campo pre-formado images que es un JSON/ARRAY</p> 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`image_link` VARCHAR(200) DEFAULT NULL image_link
            
            FIELD_NAME_LATEX=image\_link
            FIELD_CODE_NAME_LATEX=image\_link
            FIELD_DBCOMMENT_LATEX=@ToDo implementar el uso del campo pre-formado images que es un JSON/ARRAY
            
            


        
{-1.2}

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
            FIELD_NAME=year
            FIELD_CODE_NAME_UPPER=YEAR
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`year` VARCHAR(4) DEFAULT NULL year
            
            FIELD_NAME_LATEX=year
            FIELD_CODE_NAME_LATEX=year
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=agent
            FIELD_CODE_NAME_UPPER=AGENT
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`agent` VARCHAR(45) DEFAULT NULL agent
            
            FIELD_NAME_LATEX=agent
            FIELD_CODE_NAME_LATEX=agent
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
            FIELD_NAME=lot_size
            FIELD_CODE_NAME_UPPER=LOT_SIZE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`lot_size` INT(11) NOT NULL DEFAULT '0' lot_size
            
            FIELD_NAME_LATEX=lot\_size
            FIELD_CODE_NAME_LATEX=lot\_size
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=house_size
            FIELD_CODE_NAME_UPPER=HOUSE_SIZE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`house_size` INT(11) NOT NULL DEFAULT '0' house_size
            
            FIELD_NAME_LATEX=house\_size
            FIELD_CODE_NAME_LATEX=house\_size
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=garages
            FIELD_CODE_NAME_UPPER=GARAGES
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`garages` VARCHAR(50) DEFAULT NULL garages
            
            FIELD_NAME_LATEX=garages
            FIELD_CODE_NAME_LATEX=garages
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=date
            FIELD_CODE_NAME_UPPER=DATE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`date` DATETIME DEFAULT NULL date
            
            FIELD_NAME_LATEX=date
            FIELD_CODE_NAME_LATEX=date
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=U
                FIELD_FOREIGN_OBJECT_UPPER=USER
            


        
{-1.2}

            {OBJECT_FIELD}
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

            {OBJECT_FIELD}
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
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD} id_country
{1.3}
        	{FILTER_FIELD} id_lstate
{1.3}
        	{FILTER_FIELD} id_lmunicipality
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Photo
    Compobject_description_ini=
	
    COMPOBJECT=PHOTO
    compobject=photo
    CompObject=Photo
    
    compobject_name=photo
    CompObject_name=Photo
    CompObject_short_name=Photo
    Compobject_short_name=Photo
    compobject_short_name=photo
    
    COMPOBJECTPLURAL=PHOTOS
    compobjectplural=photos
    CompObjectPlural=Photos
    compobject_plural_name=photos
    CompObject_plural_name=Photos
    compobject_short_plural_name=photos
    CompObject_short_plural_name=Photos
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=PHOTOS_FS
        FIELDSET_NAME=photos_fs
        FIELDSET_CODE_NAME_UPPER=PHOTOS_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=House
            FIELD_CODE_NAME_UPPER=ID_HOUSE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' House
            
            FIELD_NAME_LATEX=House
            FIELD_CODE_NAME_LATEX=id\_house
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=H
                FIELD_FOREIGN_OBJECT_UPPER=HOUSE
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=thumbnail_img
            FIELD_CODE_NAME_UPPER=THUMBNAIL_IMG
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`thumbnail_img` VARCHAR(250) DEFAULT NULL thumbnail_img
            
            FIELD_NAME_LATEX=thumbnail\_img
            FIELD_CODE_NAME_LATEX=thumbnail\_img
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
    Compobject_name=Mime_type
    Compobject_description_ini=
	
    COMPOBJECT=MIMETYPE
    compobject=mimetype
    CompObject=MimeType
    
    compobject_name=mime_type
    CompObject_name=Mime_type
    CompObject_short_name=Mime_type
    Compobject_short_name=Mime_type
    compobject_short_name=mime_type
    
    COMPOBJECTPLURAL=MIME_TYPES
    compobjectplural=mime_types
    CompObjectPlural=MimeTypes
    compobject_plural_name=mime_types
    CompObject_plural_name=Mime_types
    compobject_short_plural_name=mime_types
    CompObject_short_plural_name=Mime_types
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=MIME_TYPES_FS
        FIELDSET_NAME=mime_types_fs
        FIELDSET_CODE_NAME_UPPER=MIME_TYPES_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=mime_ext
            FIELD_CODE_NAME_UPPER=MIME_EXT
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`mime_ext` TEXT DEFAULT NULL mime_ext
            
            FIELD_NAME_LATEX=mime\_ext
            FIELD_CODE_NAME_LATEX=mime\_ext
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=mime_type
            FIELD_CODE_NAME_UPPER=MIME_TYPE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`mime_type` TEXT DEFAULT NULL mime_type
            
            FIELD_NAME_LATEX=mime\_type
            FIELD_CODE_NAME_LATEX=mime\_type
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
    Compobject_name=Mls_for_delete
    Compobject_description_ini=
	
    COMPOBJECT=MLSFORDELETE
    compobject=mlsfordelete
    CompObject=MlsForDelete
    
    compobject_name=mls_for_delete
    CompObject_name=Mls_for_delete
    CompObject_short_name=Mls_for_delete
    Compobject_short_name=Mls_for_delete
    compobject_short_name=mls_for_delete
    
    COMPOBJECTPLURAL=MLS_FOR_DELETE
    compobjectplural=mls_for_delete
    CompObjectPlural=MlsForDelete
    compobject_plural_name=mls_for_delete
    CompObject_plural_name=Mls_for_delete
    compobject_short_plural_name=mls_for_deletes
    CompObject_short_plural_name=Mls_for_deletes
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=MLS_FOR_DELETE_FS
        FIELDSET_NAME=mls_for_delete_fs
        FIELDSET_CODE_NAME_UPPER=MLS_FOR_DELETE_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=mls
            FIELD_CODE_NAME_UPPER=MLS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`mls` VARCHAR(255) DEFAULT NULL mls
            
            FIELD_NAME_LATEX=mls
            FIELD_CODE_NAME_LATEX=mls
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
    Compobject_name=Order
    Compobject_description_ini=
	
    COMPOBJECT=ORDER
    compobject=order
    CompObject=Order
    
    compobject_name=order
    CompObject_name=Order
    CompObject_short_name=Order
    Compobject_short_name=Order
    compobject_short_name=order
    
    COMPOBJECTPLURAL=ORDERS
    compobjectplural=orders
    CompObjectPlural=Orders
    compobject_plural_name=orders
    CompObject_plural_name=Orders
    compobject_short_plural_name=orders
    CompObject_short_plural_name=Orders
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=ORDERS_FS
        FIELDSET_NAME=orders_fs
        FIELDSET_CODE_NAME_UPPER=ORDERS_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=User
            FIELD_CODE_NAME_UPPER=ID_USER
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_user` INT(10) UNSIGNED  NOT NULL DEFAULT '0' User
            
            FIELD_NAME_LATEX=User
            FIELD_CODE_NAME_LATEX=id\_user
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=U
                FIELD_FOREIGN_OBJECT_UPPER=USER
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=fk_houses_htitle
            FIELD_CODE_NAME_UPPER=FK_HOUSES_HTITLE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`fk_houses_htitle` VARCHAR(255) NOT NULL DEFAULT '' fk_houses_htitle
            
            FIELD_NAME_LATEX=fk\_houses\_htitle
            FIELD_CODE_NAME_LATEX=fk\_houses\_htitle
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=email
            FIELD_CODE_NAME_UPPER=EMAIL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`email` VARCHAR(255) NOT NULL DEFAULT '' email
            
            FIELD_NAME_LATEX=email
            FIELD_CODE_NAME_LATEX=email
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=status
            FIELD_CODE_NAME_UPPER=STATUS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`status` VARCHAR(255) NOT NULL DEFAULT '' status
            
            FIELD_NAME_LATEX=status
            FIELD_CODE_NAME_LATEX=status
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=order_date
            FIELD_CODE_NAME_UPPER=ORDER_DATE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`order_date` DATETIME DEFAULT NULL order_date
            
            FIELD_NAME_LATEX=order\_date
            FIELD_CODE_NAME_LATEX=order\_date
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=House
            FIELD_CODE_NAME_UPPER=ID_HOUSE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' House
            
            FIELD_NAME_LATEX=House
            FIELD_CODE_NAME_LATEX=id\_house
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=H
                FIELD_FOREIGN_OBJECT_UPPER=HOUSE
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=txn_type
            FIELD_CODE_NAME_UPPER=TXN_TYPE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`txn_type` VARCHAR(255) NOT NULL DEFAULT '' txn_type
            
            FIELD_NAME_LATEX=txn\_type
            FIELD_CODE_NAME_LATEX=txn\_type
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=txn_id
            FIELD_CODE_NAME_UPPER=TXN_ID
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`txn_id` VARCHAR(255) NOT NULL DEFAULT '' txn_id
            
            FIELD_NAME_LATEX=txn\_id
            FIELD_CODE_NAME_LATEX=txn\_id
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=payer_id
            FIELD_CODE_NAME_UPPER=PAYER_ID
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`payer_id` VARCHAR(255) NOT NULL DEFAULT '' payer_id
            
            FIELD_NAME_LATEX=payer\_id
            FIELD_CODE_NAME_LATEX=payer\_id
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=payer_status
            FIELD_CODE_NAME_UPPER=PAYER_STATUS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`payer_status` VARCHAR(255) NOT NULL DEFAULT '' payer_status
            
            FIELD_NAME_LATEX=payer\_status
            FIELD_CODE_NAME_LATEX=payer\_status
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=order_calculated_price
            FIELD_CODE_NAME_UPPER=ORDER_CALCULATED_PRICE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`order_calculated_price` VARCHAR(255) NOT NULL DEFAULT '' order_calculated_price
            
            FIELD_NAME_LATEX=order\_calculated\_price
            FIELD_CODE_NAME_LATEX=order\_calculated\_price
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=order_price
            FIELD_CODE_NAME_UPPER=ORDER_PRICE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`order_price` INT(11) DEFAULT NULL order_price
            
            FIELD_NAME_LATEX=order\_price
            FIELD_CODE_NAME_LATEX=order\_price
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=order_currency_code
            FIELD_CODE_NAME_UPPER=ORDER_CURRENCY_CODE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`order_currency_code` VARCHAR(255) NOT NULL DEFAULT '' order_currency_code
            
            FIELD_NAME_LATEX=order\_currency\_code
            FIELD_CODE_NAME_LATEX=order\_currency\_code
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=paypal_paykay
            FIELD_CODE_NAME_UPPER=PAYPAL_PAYKAY
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`paypal_paykay` VARCHAR(255) NOT NULL DEFAULT '' paypal_paykay
            
            FIELD_NAME_LATEX=paypal\_paykay
            FIELD_CODE_NAME_LATEX=paypal\_paykay
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
    Compobject_name=Orders_detail
    Compobject_description_ini=
	
    COMPOBJECT=ORDERSDETAIL
    compobject=ordersdetail
    CompObject=OrdersDetail
    
    compobject_name=orders_detail
    CompObject_name=Orders_detail
    CompObject_short_name=Orders_detail
    Compobject_short_name=Orders_detail
    compobject_short_name=orders_detail
    
    COMPOBJECTPLURAL=ORDERS_DETAILS
    compobjectplural=orders_details
    CompObjectPlural=OrdersDetails
    compobject_plural_name=orders_details
    CompObject_plural_name=Orders_details
    compobject_short_plural_name=orders_details
    CompObject_short_plural_name=Orders_details
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=ORDERS_DETAILS_FS
        FIELDSET_NAME=orders_details_fs
        FIELDSET_CODE_NAME_UPPER=ORDERS_DETAILS_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=Order
            FIELD_CODE_NAME_UPPER=ID_ORDER
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_order` INT(10) UNSIGNED  NOT NULL DEFAULT '0' Order
            
            FIELD_NAME_LATEX=Order
            FIELD_CODE_NAME_LATEX=id\_order
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=O
                FIELD_FOREIGN_OBJECT_UPPER=ORDER
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=User
            FIELD_CODE_NAME_UPPER=ID_USER
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_user` INT(10) UNSIGNED  NOT NULL DEFAULT '0' User
            
            FIELD_NAME_LATEX=User
            FIELD_CODE_NAME_LATEX=id\_user
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=U
                FIELD_FOREIGN_OBJECT_UPPER=USER
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=fk_houses_htitle
            FIELD_CODE_NAME_UPPER=FK_HOUSES_HTITLE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`fk_houses_htitle` VARCHAR(255) NOT NULL DEFAULT '' fk_houses_htitle
            
            FIELD_NAME_LATEX=fk\_houses\_htitle
            FIELD_CODE_NAME_LATEX=fk\_houses\_htitle
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=email
            FIELD_CODE_NAME_UPPER=EMAIL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`email` VARCHAR(255) NOT NULL DEFAULT '' email
            
            FIELD_NAME_LATEX=email
            FIELD_CODE_NAME_LATEX=email
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=status
            FIELD_CODE_NAME_UPPER=STATUS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`status` VARCHAR(255) NOT NULL DEFAULT '' status
            
            FIELD_NAME_LATEX=status
            FIELD_CODE_NAME_LATEX=status
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=order_date
            FIELD_CODE_NAME_UPPER=ORDER_DATE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`order_date` DATETIME DEFAULT NULL order_date
            
            FIELD_NAME_LATEX=order\_date
            FIELD_CODE_NAME_LATEX=order\_date
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=House
            FIELD_CODE_NAME_UPPER=ID_HOUSE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' House
            
            FIELD_NAME_LATEX=House
            FIELD_CODE_NAME_LATEX=id\_house
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=H
                FIELD_FOREIGN_OBJECT_UPPER=HOUSE
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=txn_type
            FIELD_CODE_NAME_UPPER=TXN_TYPE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`txn_type` VARCHAR(255) NOT NULL DEFAULT '' txn_type
            
            FIELD_NAME_LATEX=txn\_type
            FIELD_CODE_NAME_LATEX=txn\_type
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=txn_id
            FIELD_CODE_NAME_UPPER=TXN_ID
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`txn_id` VARCHAR(255) NOT NULL DEFAULT '' txn_id
            
            FIELD_NAME_LATEX=txn\_id
            FIELD_CODE_NAME_LATEX=txn\_id
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=payer_id
            FIELD_CODE_NAME_UPPER=PAYER_ID
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`payer_id` VARCHAR(255) NOT NULL DEFAULT '' payer_id
            
            FIELD_NAME_LATEX=payer\_id
            FIELD_CODE_NAME_LATEX=payer\_id
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=payer_status
            FIELD_CODE_NAME_UPPER=PAYER_STATUS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`payer_status` VARCHAR(255) NOT NULL DEFAULT '' payer_status
            
            FIELD_NAME_LATEX=payer\_status
            FIELD_CODE_NAME_LATEX=payer\_status
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=order_calculated_price
            FIELD_CODE_NAME_UPPER=ORDER_CALCULATED_PRICE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`order_calculated_price` VARCHAR(255) NOT NULL DEFAULT '' order_calculated_price
            
            FIELD_NAME_LATEX=order\_calculated\_price
            FIELD_CODE_NAME_LATEX=order\_calculated\_price
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=order_price
            FIELD_CODE_NAME_UPPER=ORDER_PRICE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`order_price` INT(11) DEFAULT NULL order_price
            
            FIELD_NAME_LATEX=order\_price
            FIELD_CODE_NAME_LATEX=order\_price
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=order_currency_code
            FIELD_CODE_NAME_UPPER=ORDER_CURRENCY_CODE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`order_currency_code` VARCHAR(255) NOT NULL DEFAULT '' order_currency_code
            
            FIELD_NAME_LATEX=order\_currency\_code
            FIELD_CODE_NAME_LATEX=order\_currency\_code
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=payment_details
            FIELD_CODE_NAME_UPPER=PAYMENT_DETAILS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`payment_details` TEXT DEFAULT NULL payment_details
            
            FIELD_NAME_LATEX=payment\_details
            FIELD_CODE_NAME_LATEX=payment\_details
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=paypal_paykay
            FIELD_CODE_NAME_UPPER=PAYPAL_PAYKAY
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`paypal_paykay` VARCHAR(255) NOT NULL DEFAULT '' paypal_paykay
            
            FIELD_NAME_LATEX=paypal\_paykay
            FIELD_CODE_NAME_LATEX=paypal\_paykay
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
    Compobject_name=Main_category
    Compobject_description_ini=
	
    COMPOBJECT=MAINCATEGORY
    compobject=maincategory
    CompObject=MainCategory
    
    compobject_name=main_category
    CompObject_name=Main_category
    CompObject_short_name=Main_category
    Compobject_short_name=Main_category
    compobject_short_name=main_category
    
    COMPOBJECTPLURAL=MAIN_CATEGORIES
    compobjectplural=main_categories
    CompObjectPlural=MainCategories
    compobject_plural_name=main_categories
    CompObject_plural_name=Main_categories
    compobject_short_plural_name=main_categories
    CompObject_short_plural_name=Main_categories
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=MAIN_CATEGORIES_FS
        FIELDSET_NAME=main_categories_fs
        FIELDSET_CODE_NAME_UPPER=MAIN_CATEGORIES_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=parent_id
            FIELD_CODE_NAME_UPPER=PARENT_ID
            FIELD_INTRO=<p>Sirve para modelar en forma de arbol dentro del mismo objeto.</p>
            FIELD_DESCRIPTION_INI=<p>Sirve para modelar en forma de arbol dentro del mismo objeto.</p>
            FIELD_DESCRIPTION=<p>Sirve para modelar en forma de arbol dentro del mismo objeto.</p> 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`parent_id` INT(11) NOT NULL DEFAULT '0' parent_id
            
            FIELD_NAME_LATEX=parent\_id
            FIELD_CODE_NAME_LATEX=parent\_id
            FIELD_DBCOMMENT_LATEX=Sirve para modelar en forma de arbol dentro del mismo objeto.
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=associate_category
            FIELD_CODE_NAME_UPPER=ASSOCIATE_CATEGORY
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`associate_category` VARCHAR(255) DEFAULT NULL associate_category
            
            FIELD_NAME_LATEX=associate\_category
            FIELD_CODE_NAME_LATEX=associate\_category
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=title
            FIELD_CODE_NAME_UPPER=TITLE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`title` VARCHAR(255) NOT NULL DEFAULT '' title
            
            FIELD_NAME_LATEX=title
            FIELD_CODE_NAME_LATEX=title
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=image
            FIELD_CODE_NAME_UPPER=IMAGE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`image` VARCHAR(255) NOT NULL DEFAULT '' image
            
            FIELD_NAME_LATEX=image
            FIELD_CODE_NAME_LATEX=image
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=section
            FIELD_CODE_NAME_UPPER=SECTION
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`section` VARCHAR(50) NOT NULL DEFAULT '' section
            
            FIELD_NAME_LATEX=section
            FIELD_CODE_NAME_LATEX=section
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=image_position
            FIELD_CODE_NAME_UPPER=IMAGE_POSITION
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`image_position` VARCHAR(30) NOT NULL DEFAULT '' image_position
            
            FIELD_NAME_LATEX=image\_position
            FIELD_CODE_NAME_LATEX=image\_position
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=editor
            FIELD_CODE_NAME_UPPER=EDITOR
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`editor` VARCHAR(50) DEFAULT NULL editor
            
            FIELD_NAME_LATEX=editor
            FIELD_CODE_NAME_LATEX=editor
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=count
            FIELD_CODE_NAME_UPPER=COUNT
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`count` INT(11) DEFAULT NULL count
            
            FIELD_NAME_LATEX=count
            FIELD_CODE_NAME_LATEX=count
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=params2
            FIELD_CODE_NAME_UPPER=PARAMS2
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`params2` TEXT DEFAULT NULL params2
            
            FIELD_NAME_LATEX=params2
            FIELD_CODE_NAME_LATEX=params2
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
    Compobject_name=Rent
    Compobject_description_ini=
	
    COMPOBJECT=RENT
    compobject=rent
    CompObject=Rent
    
    compobject_name=rent
    CompObject_name=Rent
    CompObject_short_name=Rent
    Compobject_short_name=Rent
    compobject_short_name=rent
    
    COMPOBJECTPLURAL=RENTS
    compobjectplural=rents
    CompObjectPlural=Rents
    compobject_plural_name=rents
    CompObject_plural_name=Rents
    compobject_short_plural_name=rents
    CompObject_short_plural_name=Rents
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=RENT_FS
        FIELDSET_NAME=rent_fs
        FIELDSET_CODE_NAME_UPPER=RENT_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=House
            FIELD_CODE_NAME_UPPER=ID_HOUSE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' House
            
            FIELD_NAME_LATEX=House
            FIELD_CODE_NAME_LATEX=id\_house
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=H
                FIELD_FOREIGN_OBJECT_UPPER=HOUSE
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=User
            FIELD_CODE_NAME_UPPER=ID_USER
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_user` INT(10) UNSIGNED  NOT NULL DEFAULT '0' User
            
            FIELD_NAME_LATEX=User
            FIELD_CODE_NAME_LATEX=id\_user
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=U
                FIELD_FOREIGN_OBJECT_UPPER=USER
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=rent_from
            FIELD_CODE_NAME_UPPER=RENT_FROM
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`rent_from` DATETIME DEFAULT NULL rent_from
            
            FIELD_NAME_LATEX=rent\_from
            FIELD_CODE_NAME_LATEX=rent\_from
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=rent_until
            FIELD_CODE_NAME_UPPER=RENT_UNTIL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`rent_until` DATETIME DEFAULT NULL rent_until
            
            FIELD_NAME_LATEX=rent\_until
            FIELD_CODE_NAME_LATEX=rent\_until
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=rent_return
            FIELD_CODE_NAME_UPPER=RENT_RETURN
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`rent_return` DATETIME DEFAULT NULL rent_return
            
            FIELD_NAME_LATEX=rent\_return
            FIELD_CODE_NAME_LATEX=rent\_return
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=user_name
            FIELD_CODE_NAME_UPPER=USER_NAME
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`user_name` VARCHAR(150) DEFAULT NULL user_name
            
            FIELD_NAME_LATEX=user\_name
            FIELD_CODE_NAME_LATEX=user\_name
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=user_email
            FIELD_CODE_NAME_UPPER=USER_EMAIL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`user_email` VARCHAR(100) DEFAULT NULL user_email
            
            FIELD_NAME_LATEX=user\_email
            FIELD_CODE_NAME_LATEX=user\_email
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=user_mailing
            FIELD_CODE_NAME_UPPER=USER_MAILING
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`user_mailing` TEXT DEFAULT NULL user_mailing
            
            FIELD_NAME_LATEX=user\_mailing
            FIELD_CODE_NAME_LATEX=user\_mailing
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
    Compobject_name=Rent request
    Compobject_description_ini=
	
    COMPOBJECT=RENTREQUEST
    compobject=rentrequest
    CompObject=RentRequest
    
    compobject_name=rent request
    CompObject_name=Rent Request
    CompObject_short_name=Rent Request
    Compobject_short_name=Rent request
    compobject_short_name=rent request
    
    COMPOBJECTPLURAL=RENT_REQUESTS
    compobjectplural=rent_requests
    CompObjectPlural=RentRequests
    compobject_plural_name=rent requests
    CompObject_plural_name=Rent Requests
    compobject_short_plural_name=rent requests
    CompObject_short_plural_name=Rent Requests
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=RENT_REQUEST_FS
        FIELDSET_NAME=rent_request_fs
        FIELDSET_CODE_NAME_UPPER=RENT_REQUEST_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=House
            FIELD_CODE_NAME_UPPER=ID_HOUSE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' House
            
            FIELD_NAME_LATEX=House
            FIELD_CODE_NAME_LATEX=id\_house
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=H
                FIELD_FOREIGN_OBJECT_UPPER=HOUSE
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=User
            FIELD_CODE_NAME_UPPER=ID_USER
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_user` INT(10) UNSIGNED  NOT NULL DEFAULT '0' User
            
            FIELD_NAME_LATEX=User
            FIELD_CODE_NAME_LATEX=id\_user
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=U
                FIELD_FOREIGN_OBJECT_UPPER=USER
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=rent_from
            FIELD_CODE_NAME_UPPER=RENT_FROM
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`rent_from` DATETIME DEFAULT NULL rent_from
            
            FIELD_NAME_LATEX=rent\_from
            FIELD_CODE_NAME_LATEX=rent\_from
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=rent_until
            FIELD_CODE_NAME_UPPER=RENT_UNTIL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`rent_until` DATETIME DEFAULT NULL rent_until
            
            FIELD_NAME_LATEX=rent\_until
            FIELD_CODE_NAME_LATEX=rent\_until
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=rent_request
            FIELD_CODE_NAME_UPPER=RENT_REQUEST
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`rent_request` DATETIME DEFAULT NULL rent_request
            
            FIELD_NAME_LATEX=rent\_request
            FIELD_CODE_NAME_LATEX=rent\_request
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=user_name
            FIELD_CODE_NAME_UPPER=USER_NAME
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`user_name` VARCHAR(150) DEFAULT NULL user_name
            
            FIELD_NAME_LATEX=user\_name
            FIELD_CODE_NAME_LATEX=user\_name
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=user_email
            FIELD_CODE_NAME_UPPER=USER_EMAIL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`user_email` VARCHAR(100) DEFAULT NULL user_email
            
            FIELD_NAME_LATEX=user\_email
            FIELD_CODE_NAME_LATEX=user\_email
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=user_mailing
            FIELD_CODE_NAME_UPPER=USER_MAILING
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`user_mailing` TEXT DEFAULT NULL user_mailing
            
            FIELD_NAME_LATEX=user\_mailing
            FIELD_CODE_NAME_LATEX=user\_mailing
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=status
            FIELD_CODE_NAME_UPPER=STATUS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`status` INT(1) DEFAULT NULL status
            
            FIELD_NAME_LATEX=status
            FIELD_CODE_NAME_LATEX=status
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
    Compobject_name=Rent_sal
    Compobject_description_ini=
	
    COMPOBJECT=RENTSAL
    compobject=rentsal
    CompObject=RentSal
    
    compobject_name=rent_sal
    CompObject_name=Rent_sal
    CompObject_short_name=Rent_sal
    Compobject_short_name=Rent_sal
    compobject_short_name=rent_sal
    
    COMPOBJECTPLURAL=RENT_SAL
    compobjectplural=rent_sal
    CompObjectPlural=RentSal
    compobject_plural_name=rent_sal
    CompObject_plural_name=Rent_sal
    compobject_short_plural_name=rent_sals
    CompObject_short_plural_name=Rent_sals
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=RENT_SAL_FS
        FIELDSET_NAME=rent_sal_fs
        FIELDSET_CODE_NAME_UPPER=RENT_SAL_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=House
            FIELD_CODE_NAME_UPPER=ID_HOUSE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' House
            
            FIELD_NAME_LATEX=House
            FIELD_CODE_NAME_LATEX=id\_house
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=H
                FIELD_FOREIGN_OBJECT_UPPER=HOUSE
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=monthW
            FIELD_CODE_NAME_UPPER=MONTHW
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`monthW` INT(4) DEFAULT NULL monthW
            
            FIELD_NAME_LATEX=monthW
            FIELD_CODE_NAME_LATEX=monthW
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=yearW
            FIELD_CODE_NAME_UPPER=YEARW
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`yearW` INT(4) DEFAULT NULL yearW
            
            FIELD_NAME_LATEX=yearW
            FIELD_CODE_NAME_LATEX=yearW
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=week
            FIELD_CODE_NAME_UPPER=WEEK
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`week` VARCHAR(1250) DEFAULT NULL week
            
            FIELD_NAME_LATEX=week
            FIELD_CODE_NAME_LATEX=week
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=weekend
            FIELD_CODE_NAME_UPPER=WEEKEND
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`weekend` VARCHAR(1250) DEFAULT NULL weekend
            
            FIELD_NAME_LATEX=weekend
            FIELD_CODE_NAME_LATEX=weekend
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=midweek
            FIELD_CODE_NAME_UPPER=MIDWEEK
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`midweek` VARCHAR(1250) DEFAULT NULL midweek
            
            FIELD_NAME_LATEX=midweek
            FIELD_CODE_NAME_LATEX=midweek
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=price_from
            FIELD_CODE_NAME_UPPER=PRICE_FROM
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`price_from` DATETIME DEFAULT NULL price_from
            
            FIELD_NAME_LATEX=price\_from
            FIELD_CODE_NAME_LATEX=price\_from
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=price_to
            FIELD_CODE_NAME_UPPER=PRICE_TO
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`price_to` DATETIME DEFAULT NULL price_to
            
            FIELD_NAME_LATEX=price\_to
            FIELD_CODE_NAME_LATEX=price\_to
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=special_price
            FIELD_CODE_NAME_UPPER=SPECIAL_PRICE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=37
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`special_price` DECIMAL(11,2) DEFAULT NULL special_price
            
            FIELD_NAME_LATEX=special\_price
            FIELD_CODE_NAME_LATEX=special\_price
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=comment_price
            FIELD_CODE_NAME_UPPER=COMMENT_PRICE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`comment_price` VARCHAR(1000) NOT NULL DEFAULT '' comment_price
            
            FIELD_NAME_LATEX=comment\_price
            FIELD_CODE_NAME_LATEX=comment\_price
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=priceunit
            FIELD_CODE_NAME_UPPER=PRICEUNIT
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`priceunit` VARCHAR(255) NOT NULL DEFAULT '' priceunit
            
            FIELD_NAME_LATEX=priceunit
            FIELD_CODE_NAME_LATEX=priceunit
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
    Compobject_name=Review
    Compobject_description_ini=
	
    COMPOBJECT=REVIEW
    compobject=review
    CompObject=Review
    
    compobject_name=review
    CompObject_name=Review
    CompObject_short_name=Review
    Compobject_short_name=Review
    compobject_short_name=review
    
    COMPOBJECTPLURAL=REVIEWS
    compobjectplural=reviews
    CompObjectPlural=Reviews
    compobject_plural_name=reviews
    CompObject_plural_name=Reviews
    compobject_short_plural_name=reviews
    CompObject_short_plural_name=Reviews
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=REVIEW_FS
        FIELDSET_NAME=review_fs
        FIELDSET_CODE_NAME_UPPER=REVIEW_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=House
            FIELD_CODE_NAME_UPPER=ID_HOUSE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' House
            
            FIELD_NAME_LATEX=House
            FIELD_CODE_NAME_LATEX=id\_house
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=H
                FIELD_FOREIGN_OBJECT_UPPER=HOUSE
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=User
            FIELD_CODE_NAME_UPPER=ID_USER
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_user` INT(10) UNSIGNED  NOT NULL DEFAULT '0' User
            
            FIELD_NAME_LATEX=User
            FIELD_CODE_NAME_LATEX=id\_user
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=U
                FIELD_FOREIGN_OBJECT_UPPER=USER
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=user_name
            FIELD_CODE_NAME_UPPER=USER_NAME
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`user_name` VARCHAR(150) DEFAULT NULL user_name
            
            FIELD_NAME_LATEX=user\_name
            FIELD_CODE_NAME_LATEX=user\_name
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=user_email
            FIELD_CODE_NAME_UPPER=USER_EMAIL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`user_email` VARCHAR(100) DEFAULT NULL user_email
            
            FIELD_NAME_LATEX=user\_email
            FIELD_CODE_NAME_LATEX=user\_email
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=date
            FIELD_CODE_NAME_UPPER=DATE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`date` DATETIME DEFAULT NULL date
            
            FIELD_NAME_LATEX=date
            FIELD_CODE_NAME_LATEX=date
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=rating
            FIELD_CODE_NAME_UPPER=RATING
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`rating` INT(2) DEFAULT NULL rating
            
            FIELD_NAME_LATEX=rating
            FIELD_CODE_NAME_LATEX=rating
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=title
            FIELD_CODE_NAME_UPPER=TITLE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`title` VARCHAR(250) DEFAULT NULL title
            
            FIELD_NAME_LATEX=title
            FIELD_CODE_NAME_LATEX=title
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=comment
            FIELD_CODE_NAME_UPPER=COMMENT
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`comment` TEXT DEFAULT NULL comment
            
            FIELD_NAME_LATEX=comment
            FIELD_CODE_NAME_LATEX=comment
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
    Compobject_name=Track_source
    Compobject_description_ini=
	
    COMPOBJECT=TRACKSOURCE
    compobject=tracksource
    CompObject=TrackSource
    
    compobject_name=track_source
    CompObject_name=Track_source
    CompObject_short_name=Track_source
    Compobject_short_name=Track_source
    compobject_short_name=track_source
    
    COMPOBJECTPLURAL=TRACK_SOURCE
    compobjectplural=track_source
    CompObjectPlural=TrackSource
    compobject_plural_name=track_source
    CompObject_plural_name=Track_source
    compobject_short_plural_name=track_sources
    CompObject_short_plural_name=Track_sources
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=TRACK_SOURCE_FS
        FIELDSET_NAME=track_source_fs
        FIELDSET_CODE_NAME_UPPER=TRACK_SOURCE_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=House
            FIELD_CODE_NAME_UPPER=ID_HOUSE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' House
            
            FIELD_NAME_LATEX=House
            FIELD_CODE_NAME_LATEX=id\_house
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=H
                FIELD_FOREIGN_OBJECT_UPPER=HOUSE
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=sequence_number
            FIELD_CODE_NAME_UPPER=SEQUENCE_NUMBER
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`sequence_number` INT(11) DEFAULT NULL sequence_number
            
            FIELD_NAME_LATEX=sequence\_number
            FIELD_CODE_NAME_LATEX=sequence\_number
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=src
            FIELD_CODE_NAME_UPPER=SRC
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`src` VARCHAR(255) DEFAULT NULL src
            
            FIELD_NAME_LATEX=src
            FIELD_CODE_NAME_LATEX=src
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=kind
            FIELD_CODE_NAME_UPPER=KIND
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`kind` VARCHAR(255) DEFAULT NULL kind
            
            FIELD_NAME_LATEX=kind
            FIELD_CODE_NAME_LATEX=kind
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=scrlang
            FIELD_CODE_NAME_UPPER=SCRLANG
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`scrlang` VARCHAR(255) DEFAULT NULL scrlang
            
            FIELD_NAME_LATEX=scrlang
            FIELD_CODE_NAME_LATEX=scrlang
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=label
            FIELD_CODE_NAME_UPPER=LABEL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`label` VARCHAR(255) DEFAULT NULL label
            
            FIELD_NAME_LATEX=label
            FIELD_CODE_NAME_LATEX=label
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
    Compobject_name=Users_wishlist
    Compobject_description_ini=
	
    COMPOBJECT=USERSWISHLIST
    compobject=userswishlist
    CompObject=UsersWishlist
    
    compobject_name=users_wishlist
    CompObject_name=Users_wishlist
    CompObject_short_name=Users_wishlist
    Compobject_short_name=Users_wishlist
    compobject_short_name=users_wishlist
    
    COMPOBJECTPLURAL=USERS_WISHLIST
    compobjectplural=users_wishlist
    CompObjectPlural=UsersWishlist
    compobject_plural_name=users_wishlist
    CompObject_plural_name=Users_wishlist
    compobject_short_plural_name=users_wishlists
    CompObject_short_plural_name=Users_wishlists
    
    

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Video_source
    Compobject_description_ini=
	
    COMPOBJECT=VIDEOSOURCE
    compobject=videosource
    CompObject=VideoSource
    
    compobject_name=video_source
    CompObject_name=Video_source
    CompObject_short_name=Video_source
    Compobject_short_name=Video_source
    compobject_short_name=video_source
    
    COMPOBJECTPLURAL=VIDEO_SOURCE
    compobjectplural=video_source
    CompObjectPlural=VideoSource
    compobject_plural_name=video_source
    CompObject_plural_name=Video_source
    compobject_short_plural_name=video_sources
    CompObject_short_plural_name=Video_sources
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=VIDEO_SOURCE_FS
        FIELDSET_NAME=video_source_fs
        FIELDSET_CODE_NAME_UPPER=VIDEO_SOURCE_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=House
            FIELD_CODE_NAME_UPPER=ID_HOUSE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' House
            
            FIELD_NAME_LATEX=House
            FIELD_CODE_NAME_LATEX=id\_house
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=H
                FIELD_FOREIGN_OBJECT_UPPER=HOUSE
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=sequence_number
            FIELD_CODE_NAME_UPPER=SEQUENCE_NUMBER
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`sequence_number` INT(11) DEFAULT NULL sequence_number
            
            FIELD_NAME_LATEX=sequence\_number
            FIELD_CODE_NAME_LATEX=sequence\_number
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=src
            FIELD_CODE_NAME_UPPER=SRC
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`src` VARCHAR(255) DEFAULT NULL src
            
            FIELD_NAME_LATEX=src
            FIELD_CODE_NAME_LATEX=src
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=type
            FIELD_CODE_NAME_UPPER=TYPE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`type` VARCHAR(255) DEFAULT NULL type
            
            FIELD_NAME_LATEX=type
            FIELD_CODE_NAME_LATEX=type
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=media
            FIELD_CODE_NAME_UPPER=MEDIA
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`media` VARCHAR(255) DEFAULT NULL media
            
            FIELD_NAME_LATEX=media
            FIELD_CODE_NAME_LATEX=media
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=youtube
            FIELD_CODE_NAME_UPPER=YOUTUBE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`youtube` VARCHAR(255) DEFAULT NULL youtube
            
            FIELD_NAME_LATEX=youtube
            FIELD_CODE_NAME_LATEX=youtube
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
    Compobject_name=Buying requests
    Compobject_description_ini=
	
    COMPOBJECT=BUYINGREQUEST
    compobject=buyingrequest
    CompObject=BuyingRequest
    
    compobject_name=buying requests
    CompObject_name=Buying Requests
    CompObject_short_name=Buying Request
    Compobject_short_name=Buying request
    compobject_short_name=buying request
    
    COMPOBJECTPLURAL=BUYING_REQUESTS
    compobjectplural=buying_requests
    CompObjectPlural=BuyingRequests
    compobject_plural_name=buying requests
    CompObject_plural_name=Buying Requests
    compobject_short_plural_name=buying requests
    CompObject_short_plural_name=Buying Requests
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=BUYING_REQUEST_FS
        FIELDSET_NAME=buying_request_fs
        FIELDSET_CODE_NAME_UPPER=BUYING_REQUEST_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=House
            FIELD_CODE_NAME_UPPER=ID_HOUSE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' House
            
            FIELD_NAME_LATEX=House
            FIELD_CODE_NAME_LATEX=id\_house
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=H
                FIELD_FOREIGN_OBJECT_UPPER=HOUSE
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=User
            FIELD_CODE_NAME_UPPER=ID_USER
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_user` INT(10) UNSIGNED  NOT NULL DEFAULT '0' User
            
            FIELD_NAME_LATEX=User
            FIELD_CODE_NAME_LATEX=id\_user
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=U
                FIELD_FOREIGN_OBJECT_UPPER=USER
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=buying_request
            FIELD_CODE_NAME_UPPER=BUYING_REQUEST
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`buying_request` DATETIME DEFAULT NULL buying_request
            
            FIELD_NAME_LATEX=buying\_request
            FIELD_CODE_NAME_LATEX=buying\_request
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=customer_name
            FIELD_CODE_NAME_UPPER=CUSTOMER_NAME
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`customer_name` VARCHAR(250) DEFAULT NULL customer_name
            
            FIELD_NAME_LATEX=customer\_name
            FIELD_CODE_NAME_LATEX=customer\_name
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=customer_email
            FIELD_CODE_NAME_UPPER=CUSTOMER_EMAIL
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`customer_email` VARCHAR(100) DEFAULT NULL customer_email
            
            FIELD_NAME_LATEX=customer\_email
            FIELD_CODE_NAME_LATEX=customer\_email
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=customer_phone
            FIELD_CODE_NAME_UPPER=CUSTOMER_PHONE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`customer_phone` VARCHAR(15) NOT NULL DEFAULT '' customer_phone
            
            FIELD_NAME_LATEX=customer\_phone
            FIELD_CODE_NAME_LATEX=customer\_phone
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=customer_comment
            FIELD_CODE_NAME_UPPER=CUSTOMER_COMMENT
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=4
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`customer_comment` TEXT DEFAULT NULL customer_comment
            
            FIELD_NAME_LATEX=customer\_comment
            FIELD_CODE_NAME_LATEX=customer\_comment
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=status
            FIELD_CODE_NAME_UPPER=STATUS
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`status` INT(1) DEFAULT NULL status
            
            FIELD_NAME_LATEX=status
            FIELD_CODE_NAME_LATEX=status
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
    Compobject_name=Category
    Compobject_description_ini=
	
    COMPOBJECT=CATEGORY
    compobject=category
    CompObject=Category
    
    compobject_name=category
    CompObject_name=Category
    CompObject_short_name=Category
    Compobject_short_name=Category
    compobject_short_name=category
    
    COMPOBJECTPLURAL=CATEGORIES
    compobjectplural=categories
    CompObjectPlural=Categories
    compobject_plural_name=categories
    CompObject_plural_name=Categories
    compobject_short_plural_name=categories
    CompObject_short_plural_name=Categories
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=CATEGORIES_FS
        FIELDSET_NAME=categories_fs
        FIELDSET_CODE_NAME_UPPER=CATEGORIES_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=iditem
            FIELD_CODE_NAME_UPPER=IDITEM
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`iditem` INT(10) UNSIGNED  NOT NULL DEFAULT '0' iditem
            
            FIELD_NAME_LATEX=iditem
            FIELD_CODE_NAME_LATEX=iditem
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=H
                FIELD_FOREIGN_OBJECT_UPPER=HOUSE
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=idcat
            FIELD_CODE_NAME_UPPER=IDCAT
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`idcat` INT(10) UNSIGNED  NOT NULL DEFAULT '0' idcat
            
            FIELD_NAME_LATEX=idcat
            FIELD_CODE_NAME_LATEX=idcat
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=M
                FIELD_FOREIGN_OBJECT_UPPER=MAIN_CATEGORY
            


        
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
    Compobject_name=Const
    Compobject_description_ini=
	
    COMPOBJECT=CONST
    compobject=const
    CompObject=Const
    
    compobject_name=const
    CompObject_name=Const
    CompObject_short_name=Const
    Compobject_short_name=Const
    compobject_short_name=const
    
    COMPOBJECTPLURAL=CONST
    compobjectplural=const
    CompObjectPlural=Const
    compobject_plural_name=const
    CompObject_plural_name=Const
    compobject_short_plural_name=consts
    CompObject_short_plural_name=Consts
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=CONST_FS
        FIELDSET_NAME=const_fs
        FIELDSET_CODE_NAME_UPPER=CONST_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=const
            FIELD_CODE_NAME_UPPER=CONST
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`const` VARCHAR(250) DEFAULT NULL const
            
            FIELD_NAME_LATEX=const
            FIELD_CODE_NAME_LATEX=const
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=sys_type
            FIELD_CODE_NAME_UPPER=SYS_TYPE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`sys_type` VARCHAR(250) DEFAULT NULL sys_type
            
            FIELD_NAME_LATEX=sys\_type
            FIELD_CODE_NAME_LATEX=sys\_type
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
    Compobject_name=Const_language
    Compobject_description_ini=
	
    COMPOBJECT=CONSTLANGUAGE
    compobject=constlanguage
    CompObject=ConstLanguage
    
    compobject_name=const_language
    CompObject_name=Const_language
    CompObject_short_name=Const_language
    Compobject_short_name=Const_language
    compobject_short_name=const_language
    
    COMPOBJECTPLURAL=CONST_LANGUAGE
    compobjectplural=const_language
    CompObjectPlural=ConstLanguage
    compobject_plural_name=const_language
    CompObject_plural_name=Const_language
    compobject_short_plural_name=const_languages
    CompObject_short_plural_name=Const_languages
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=CONST_LANGUAGES_FS
        FIELDSET_NAME=const_languages_fs
        FIELDSET_CODE_NAME_UPPER=CONST_LANGUAGES_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=fk_constid
            FIELD_CODE_NAME_UPPER=FK_CONSTID
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`fk_constid` INT(10) UNSIGNED  NOT NULL DEFAULT '0' fk_constid
            
            FIELD_NAME_LATEX=fk\_constid
            FIELD_CODE_NAME_LATEX=fk\_constid
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=C1
                FIELD_FOREIGN_OBJECT_UPPER=CONST
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=fk_languagesid
            FIELD_CODE_NAME_UPPER=FK_LANGUAGESID
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`fk_languagesid` INT(10) UNSIGNED  NOT NULL DEFAULT '0' fk_languagesid
            
            FIELD_NAME_LATEX=fk\_languagesid
            FIELD_CODE_NAME_LATEX=fk\_languagesid
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=L
                FIELD_FOREIGN_OBJECT_UPPER=LANGUAGE
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=value_const
            FIELD_CODE_NAME_UPPER=VALUE_CONST
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`value_const` VARCHAR(2000) DEFAULT NULL value_const
            
            FIELD_NAME_LATEX=value\_const
            FIELD_CODE_NAME_LATEX=value\_const
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
    Compobject_name=Feature
    Compobject_description_ini=
	
    COMPOBJECT=FEATURE
    compobject=feature
    CompObject=Feature
    
    compobject_name=feature
    CompObject_name=Feature
    CompObject_short_name=Feature
    Compobject_short_name=Feature
    compobject_short_name=feature
    
    COMPOBJECTPLURAL=FEATURE
    compobjectplural=feature
    CompObjectPlural=Feature
    compobject_plural_name=feature
    CompObject_plural_name=Feature
    compobject_short_plural_name=features
    CompObject_short_plural_name=Features
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=FEATURE_FS
        FIELDSET_NAME=feature_fs
        FIELDSET_CODE_NAME_UPPER=FEATURE_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=categories
            FIELD_CODE_NAME_UPPER=CATEGORIES
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`categories` VARCHAR(250) DEFAULT NULL categories
            
            FIELD_NAME_LATEX=categories
            FIELD_CODE_NAME_LATEX=categories
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=image_link
            FIELD_CODE_NAME_UPPER=IMAGE_LINK
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`image_link` VARCHAR(250) DEFAULT NULL image_link
            
            FIELD_NAME_LATEX=image\_link
            FIELD_CODE_NAME_LATEX=image\_link
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
    Compobject_name=Feature_house
    Compobject_description_ini=
	
    COMPOBJECT=FEATUREHOUSE
    compobject=featurehouse
    CompObject=FeatureHouse
    
    compobject_name=feature_house
    CompObject_name=Feature_house
    CompObject_short_name=Feature_house
    Compobject_short_name=Feature_house
    compobject_short_name=feature_house
    
    COMPOBJECTPLURAL=FEATURE_HOUSES
    compobjectplural=feature_houses
    CompObjectPlural=FeatureHouses
    compobject_plural_name=feature_houses
    CompObject_plural_name=Feature_houses
    compobject_short_plural_name=feature_houses
    CompObject_short_plural_name=Feature_houses
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=FEATURE_HOUSES_FS
        FIELDSET_NAME=feature_houses_fs
        FIELDSET_CODE_NAME_UPPER=FEATURE_HOUSES_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=House
            FIELD_CODE_NAME_UPPER=ID_HOUSE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' House
            
            FIELD_NAME_LATEX=House
            FIELD_CODE_NAME_LATEX=id\_house
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=H
                FIELD_FOREIGN_OBJECT_UPPER=HOUSE
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Featured
            FIELD_CODE_NAME_UPPER=ID_FEATURED
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_featured` INT(10) UNSIGNED  NOT NULL DEFAULT '0' Featured
            
            FIELD_NAME_LATEX=Featured
            FIELD_CODE_NAME_LATEX=id\_featured
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=F
                FIELD_FOREIGN_OBJECT_UPPER=FEATURE
            


        
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
    Compobject_name=Language
    Compobject_description_ini=
	
    COMPOBJECT=LANGUAGE
    compobject=language
    CompObject=Language
    
    compobject_name=language
    CompObject_name=Language
    CompObject_short_name=Language
    Compobject_short_name=Language
    compobject_short_name=language
    
    COMPOBJECTPLURAL=LANGUAGES
    compobjectplural=languages
    CompObjectPlural=Languages
    compobject_plural_name=languages
    CompObject_plural_name=Languages
    compobject_short_plural_name=languages
    CompObject_short_plural_name=Languages
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=LANGUAGES_FS
        FIELDSET_NAME=languages_fs
        FIELDSET_CODE_NAME_UPPER=LANGUAGES_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=lang_code
            FIELD_CODE_NAME_UPPER=LANG_CODE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`lang_code` VARCHAR(7) DEFAULT NULL lang_code
            
            FIELD_NAME_LATEX=lang\_code
            FIELD_CODE_NAME_LATEX=lang\_code
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=title
            FIELD_CODE_NAME_UPPER=TITLE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`title` VARCHAR(250) DEFAULT NULL title
            
            FIELD_NAME_LATEX=title
            FIELD_CODE_NAME_LATEX=title
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=sef
            FIELD_CODE_NAME_UPPER=SEF
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`sef` VARCHAR(7) DEFAULT NULL sef
            
            FIELD_NAME_LATEX=sef
            FIELD_CODE_NAME_LATEX=sef
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
    Compobject_name=Municipality
    Compobject_description_ini=<ul><br/><li>El nombre de la tabla no me encanta, lo llamé lmunicipality por la contracción de las palabras locality-municipality. </li><br/><li>El catálogo se obtiene de <a href=&quot;http://www.inegi.org.mx/geo/contenidos/geoestadistica/CatalogoClaves.aspx&quot;>http://www.inegi.org.mx/geo/contenidos/geoestadistica/CatalogoClaves.aspx</a></li><br/><li>id = id_entidad_federativa * 1000 + ordering ; donde ordering = CLAVE DE AGEM; en la fórmula no estoy contemplando el id_country</li><br/></ul>
	
    COMPOBJECT=LMUNICIPALITY
    compobject=lmunicipality
    CompObject=Lmunicipality
    
    compobject_name=municipality
    CompObject_name=Municipality
    CompObject_short_name=Municipality
    Compobject_short_name=Municipality
    compobject_short_name=municipality
    
    COMPOBJECTPLURAL=LMUNICIPALITIES
    compobjectplural=lmunicipalities
    CompObjectPlural=Lmunicipalities
    compobject_plural_name=municipalities
    CompObject_plural_name=Municipalities
    compobject_short_plural_name=municipalities
    CompObject_short_plural_name=Municipalities
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=MUNICIPALITY_FS
        FIELDSET_NAME=municipality_fs
        FIELDSET_CODE_NAME_UPPER=MUNICIPALITY_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=State
            FIELD_CODE_NAME_UPPER=ID_LSTATE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_lstate` INT(10) UNSIGNED  NOT NULL DEFAULT '0' State
            
            FIELD_NAME_LATEX=State
            FIELD_CODE_NAME_LATEX=id\_lstate
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=S
                FIELD_FOREIGN_OBJECT_UPPER=LSTATE
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Country
            FIELD_CODE_NAME_UPPER=ID_COUNTRY
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_country` INT(10) UNSIGNED  NOT NULL DEFAULT '0' Country
            
            FIELD_NAME_LATEX=Country
            FIELD_CODE_NAME_LATEX=id\_country
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=C1
                FIELD_FOREIGN_OBJECT_UPPER=COUNTRY
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD} id_lstate
{1.3}
        	{FILTER_FIELD} id_country
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=State
    Compobject_description_ini=<p>locality-state</p>
	
    COMPOBJECT=LSTATE
    compobject=lstate
    CompObject=Lstate
    
    compobject_name=state
    CompObject_name=State
    CompObject_short_name=State
    Compobject_short_name=State
    compobject_short_name=state
    
    COMPOBJECTPLURAL=LSTATES
    compobjectplural=lstates
    CompObjectPlural=Lstates
    compobject_plural_name=states
    CompObject_plural_name=States
    compobject_short_plural_name=states
    CompObject_short_plural_name=States
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=STATE_FS
        FIELDSET_NAME=state_fs
        FIELDSET_CODE_NAME_UPPER=STATE_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=id_country
            FIELD_CODE_NAME_UPPER=ID_COUNTRY
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=13
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`id_country` INT(10) UNSIGNED  NOT NULL DEFAULT '0' id_country
            
            FIELD_NAME_LATEX=id\_country
            FIELD_CODE_NAME_LATEX=id\_country
            FIELD_DBCOMMENT_LATEX=
            
                {FIELD_LINK}
                FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=C1
                FIELD_FOREIGN_OBJECT_UPPER=COUNTRY
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=Frienly Name
            FIELD_CODE_NAME_UPPER=FRIENDLY_NAME
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`friendly_name` VARCHAR(45) DEFAULT NULL Frienly Name
            
            FIELD_NAME_LATEX=Frienly Name
            FIELD_CODE_NAME_LATEX=friendly\_name
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}
{-1.1}
        {1.1a}

=======IF'S==========
	INCLUDE_DESCRIPTION OTRA DESCRIPCIÓN !!!


=======/IF'S==========



======/REGISTRY_ENTRY=====

        

    

    
{1.3}
        	{FILTER_FIELD} id_country
{-1.3}
    
{1.0}
	{COMPONENT_OBJECT}
    Compobject_name=Country
    Compobject_description_ini=
	
    COMPOBJECT=COUNTRY
    compobject=country
    CompObject=Country
    
    compobject_name=country
    CompObject_name=Country
    CompObject_short_name=Country
    Compobject_short_name=Country
    compobject_short_name=country
    
    COMPOBJECTPLURAL=COUNTRIES
    compobjectplural=countries
    CompObjectPlural=Countries
    compobject_plural_name=countries
    CompObject_plural_name=Countries
    compobject_short_plural_name=countries
    CompObject_short_plural_name=Countries
    
    
        {OBJECT_FIELDSET}
    	FIELDSET_CODE_NAME_UPPER=COUNTRY_FS
        FIELDSET_NAME=country_fs
        FIELDSET_CODE_NAME_UPPER=COUNTRY_FS
        FIELDSET_DESCRIPTION=

{1.1}        

            {OBJECT_FIELD}
            FIELD_NAME=ordering_cur
            FIELD_CODE_NAME_UPPER=ORDERING_CUR
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`ordering_cur` INT(11) NOT NULL DEFAULT '1' ordering_cur
            
            FIELD_NAME_LATEX=ordering\_cur
            FIELD_CODE_NAME_LATEX=ordering\_cur
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=published_cur
            FIELD_CODE_NAME_UPPER=PUBLISHED_CUR
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=22
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`published_cur` TINYINT(1) NOT NULL DEFAULT '0' published_cur
            
            FIELD_NAME_LATEX=published\_cur
            FIELD_CODE_NAME_LATEX=published\_cur
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=iso2
            FIELD_CODE_NAME_UPPER=ISO2
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`iso2` VARCHAR(2) DEFAULT NULL iso2
            
            FIELD_NAME_LATEX=iso2
            FIELD_CODE_NAME_LATEX=iso2
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=iso3
            FIELD_CODE_NAME_UPPER=ISO3
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`iso3` VARCHAR(3) DEFAULT NULL iso3
            
            FIELD_NAME_LATEX=iso3
            FIELD_CODE_NAME_LATEX=iso3
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=currency
            FIELD_CODE_NAME_UPPER=CURRENCY
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=1
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`currency` VARCHAR(45) DEFAULT NULL currency
            
            FIELD_NAME_LATEX=currency
            FIELD_CODE_NAME_LATEX=currency
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=conversion
            FIELD_CODE_NAME_UPPER=CONVERSION
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=37
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`conversion` DECIMAL(11,2) NOT NULL DEFAULT '0' conversion
            
            FIELD_NAME_LATEX=conversion
            FIELD_CODE_NAME_LATEX=conversion
            FIELD_DBCOMMENT_LATEX=
            
            


        
{-1.2}

            {OBJECT_FIELD}
            FIELD_NAME=conversion_date
            FIELD_CODE_NAME_UPPER=CONVERSION_DATE
            FIELD_INTRO=
            FIELD_DESCRIPTION_INI=
            FIELD_DESCRIPTION= 
            FIELDTYPE_ID=5
                        
            FIELD_OPTIONS_LANGUAGE_VARS=
            FIELD_DB=`conversion_date` DATETIME DEFAULT NULL conversion_date
            
            FIELD_NAME_LATEX=conversion\_date
            FIELD_CODE_NAME_LATEX=conversion\_date
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

    	{GENERATE_PLUGINS}        
            {GENERATE_PLUGINS_VOTE}
        
            {GENERATE_PLUGINS_EMAILCLOAK}

            {GENERATE_PLUGINS_PAGEBREAK}
        	
            {GENERATE_PLUGINS_ITEMNAVIGATION}
        
            {GENERATE_PLUGINS_LOADMODULE}


========NO SE DONDE VAN============
    {HAVE BATCH}

    {HAVE COPY}

    {HAVE ORDERING}

    {HAVE GENERATE_CATEGORIES}

	{INCLUDE_PARAMS_RECORD}

	{INCLUDE_ASSETACL}

	{INCLUDE_ALIAS}

	{GENERATE_CATEGORIES}

	{INCLUDE_NAME}

	{INCLUDE_ACCESS}

	{INCLUDE_LANGUAGE}

	{INCLUDE_IMAGE}


	{INCLUDE_PARAMS_GLOBAL}

	{INCLUDE_STATUS}

	{INCLUDE_MODIFIED}

	{INCLUDE_CREATED}

	{INCLUDE_INTRO}

	{INCLUDE_TAGS}

	{INCLUDE_URLS}

	{INCLUDE_PARAMS_MENU}

	{INCLUDE_PUBLISHED_DATES}

	{INCLUDE_METADATA}

	{INCLUDE_CHECKOUT}

	{INCLUDE_HITS}

	{INCLUDE_VERSIONS}

	{INCLUDE_FEATURED}

	{GENERATE_ADMIN_DASHBOARD}

	{GENERATE_SITE}
	    {GENERATE_SITE_LAYOUT_ARTICLE}
    
    	{GENERATE_SITE_LAYOUT_BLOG}

    	{GENERATE_SITE_VIEWS}

