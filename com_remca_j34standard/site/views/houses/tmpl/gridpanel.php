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
        'FIELD_NAME' => 'Site',
        'FIELD_CODE_NAME' => 'site',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 7,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=COM_REMCA_HOUSES_SITE_VALUE_VIVANUNCIOS="vivanuncios"
COM_REMCA_HOUSES_SITE_VALUE_BIENESONLINE="bienesonline"
COM_REMCA_HOUSES_SITE_VALUE_LAMUDI="lamudi"

                FIELD_CODE_NAME_UPPER=SITE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` ENUM('www.vivanuncios.com.mx','www.bienesonline.mx','www.lamudi.com.mx') NOT NULL DEFAULT 'www.vivanuncios.com.mx' Site

                FIELD_NAME_LATEX=Site
                FIELD_CODE_NAME_LATEX=site
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['site'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'país',
        'FIELD_CODE_NAME' => 'id_country',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 13,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_COUNTRY
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) UNSIGNED  NOT NULL DEFAULT '484' país

                FIELD_NAME_LATEX=pa\'i{}s
                FIELD_CODE_NAME_LATEX=id\_country
                FIELD_DBCOMMENT_LATEX=

                    {FIELD_LINK}
                    FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=C1
                    FIELD_FOREIGN_OBJECT_UPPER=COUNTRY

    */
    $fields['id_country'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'estado',
        'FIELD_CODE_NAME' => 'id_lstate',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 13,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_LSTATE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) UNSIGNED  NOT NULL DEFAULT '0' estado

                FIELD_NAME_LATEX=estado
                FIELD_CODE_NAME_LATEX=id\_lstate
                FIELD_DBCOMMENT_LATEX=

                    {FIELD_LINK}
                    FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=S
                    FIELD_FOREIGN_OBJECT_UPPER=LSTATE

    */
    $fields['id_lstate'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'sid',
        'FIELD_CODE_NAME' => 'sid',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 22,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=SID
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(11) DEFAULT NULL sid

                FIELD_NAME_LATEX=sid
                FIELD_CODE_NAME_LATEX=sid
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['sid'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'municipio',
        'FIELD_CODE_NAME' => 'id_lmunicipality',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 13,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_LMUNICIPALITY
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) UNSIGNED  NOT NULL DEFAULT '0' municipio

                FIELD_NAME_LATEX=municipio
                FIELD_CODE_NAME_LATEX=id\_lmunicipality
                FIELD_DBCOMMENT_LATEX=

                    {FIELD_LINK}
                    FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=M
                    FIELD_FOREIGN_OBJECT_UPPER=LMUNICIPALITY

    */
    $fields['id_lmunicipality'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'associate_house',
        'FIELD_CODE_NAME' => 'associate_house',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ASSOCIATE_HOUSE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(255) DEFAULT NULL associate_house

                FIELD_NAME_LATEX=associate\_house
                FIELD_CODE_NAME_LATEX=associate\_house
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['associate_house'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'houseid',
        'FIELD_CODE_NAME' => 'houseid',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=HOUSEID
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(20) NOT NULL DEFAULT '' houseid

                FIELD_NAME_LATEX=houseid
                FIELD_CODE_NAME_LATEX=houseid
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['houseid'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Rent',
        'FIELD_CODE_NAME' => 'id_rent',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 13,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_RENT
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) UNSIGNED  NOT NULL DEFAULT '0' Rent

                FIELD_NAME_LATEX=Rent
                FIELD_CODE_NAME_LATEX=id\_rent
                FIELD_DBCOMMENT_LATEX=

                    {FIELD_LINK}
                    FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=R
                    FIELD_FOREIGN_OBJECT_UPPER=RENT

    */
    $fields['id_rent'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'link',
        'FIELD_CODE_NAME' => 'link',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=LINK
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(250) NOT NULL DEFAULT '' link

                FIELD_NAME_LATEX=link
                FIELD_CODE_NAME_LATEX=link
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['link'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'listing_type',
        'FIELD_CODE_NAME' => 'listing_type',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=LISTING_TYPE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) NOT NULL DEFAULT '' listing_type

                FIELD_NAME_LATEX=listing\_type
                FIELD_CODE_NAME_LATEX=listing\_type
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['listing_type'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'precio',
        'FIELD_CODE_NAME' => 'price',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 22,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=PRICE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DECIMAL(11,2) NOT NULL DEFAULT '0' precio

                FIELD_NAME_LATEX=precio
                FIELD_CODE_NAME_LATEX=price
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['price'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'moneda',
        'FIELD_CODE_NAME' => 'id_currency',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 18,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ID_CURRENCY
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) NOT NULL DEFAULT '0' moneda

                FIELD_NAME_LATEX=moneda
                FIELD_CODE_NAME_LATEX=id\_currency
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['id_currency'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'código postal',
        'FIELD_CODE_NAME' => 'hzipcode',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=HZIPCODE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(50) NOT NULL DEFAULT '' código postal

                FIELD_NAME_LATEX=c\'odigo postal
                FIELD_CODE_NAME_LATEX=hzipcode
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['hzipcode'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'ubicación',
        'FIELD_CODE_NAME' => 'hlocation',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=HLOCATION
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` TINYTEXT(255) NOT NULL DEFAULT '' ubicación

                FIELD_NAME_LATEX=ubicaci\'on
                FIELD_CODE_NAME_LATEX=hlocation
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['hlocation'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'latitud',
        'FIELD_CODE_NAME' => 'hlatitude',
        'FIELD_DESCRIPTION' => 'vivanuncios: components.o.w[1][3].s.adDetails.location.latitude',//vivanuncios: components.o.w[1][3].s.adDetails.location.latitude
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=HLATITUDE
                FIELD_INTRO=vivanuncios: components.o.w[1][3].s.adDetails.location.latitude
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(20) NOT NULL DEFAULT '0' latitud

                FIELD_NAME_LATEX=latitud
                FIELD_CODE_NAME_LATEX=hlatitude
                FIELD_DBCOMMENT_LATEX=vivanuncios: components.o.w[1][3].s.adDetails.location.latitude


    */
    $fields['hlatitude'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'longitud',
        'FIELD_CODE_NAME' => 'hlongitude',
        'FIELD_DESCRIPTION' => 'vivanuncios: components.o.w[1][3].s.adDetails.location.longitude',//vivanuncios: components.o.w[1][3].s.adDetails.location.longitude
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=HLONGITUDE
                FIELD_INTRO=vivanuncios: components.o.w[1][3].s.adDetails.location.longitude
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(20) NOT NULL DEFAULT '0' longitud

                FIELD_NAME_LATEX=longitud
                FIELD_CODE_NAME_LATEX=hlongitude
                FIELD_DBCOMMENT_LATEX=vivanuncios: components.o.w[1][3].s.adDetails.location.longitude


    */
    $fields['hlongitude'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Map zoom',
        'FIELD_CODE_NAME' => 'map_zoom',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MAP_ZOOM
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) NOT NULL DEFAULT '14' Map zoom

                FIELD_NAME_LATEX=Map zoom
                FIELD_CODE_NAME_LATEX=map\_zoom
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['map_zoom'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'habitaciones',
        'FIELD_CODE_NAME' => 'rooms',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ROOMS
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(11) NOT NULL DEFAULT '0' habitaciones

                FIELD_NAME_LATEX=habitaciones
                FIELD_CODE_NAME_LATEX=rooms
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['rooms'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'baños',
        'FIELD_CODE_NAME' => 'bathrooms',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 30,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=COM_REMCA_HOUSES_BATHROOMS_VALUE_0="0"
COM_REMCA_HOUSES_BATHROOMS_VALUE_1="1"
COM_REMCA_HOUSES_BATHROOMS_VALUE_2="2"
COM_REMCA_HOUSES_BATHROOMS_VALUE_3="3"
COM_REMCA_HOUSES_BATHROOMS_VALUE_4="4"
COM_REMCA_HOUSES_BATHROOMS_VALUE_5="5"
COM_REMCA_HOUSES_BATHROOMS_VALUE_6="6+"

                FIELD_CODE_NAME_UPPER=BATHROOMS
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(4) NOT NULL DEFAULT '0' baños

                FIELD_NAME_LATEX=ba\~nos
                FIELD_CODE_NAME_LATEX=bathrooms
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['bathrooms'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'dormitorios',
        'FIELD_CODE_NAME' => 'bedrooms',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 30,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=COM_REMCA_HOUSES_BEDROOMS_VALUE_0="0"
COM_REMCA_HOUSES_BEDROOMS_VALUE_1="1"
COM_REMCA_HOUSES_BEDROOMS_VALUE_2="2"
COM_REMCA_HOUSES_BEDROOMS_VALUE_3="3"
COM_REMCA_HOUSES_BEDROOMS_VALUE_4="4"
COM_REMCA_HOUSES_BEDROOMS_VALUE_5="5"
COM_REMCA_HOUSES_BEDROOMS_VALUE_6="6+"

                FIELD_CODE_NAME_UPPER=BEDROOMS
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(4) NOT NULL DEFAULT '0' dormitorios

                FIELD_NAME_LATEX=dormitorios
                FIELD_CODE_NAME_LATEX=bedrooms
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['bedrooms'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Contacts',
        'FIELD_CODE_NAME' => 'contacts',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=CONTACTS
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(250) DEFAULT NULL Contacts

                FIELD_NAME_LATEX=Contacts
                FIELD_CODE_NAME_LATEX=contacts
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['contacts'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'listing_status',
        'FIELD_CODE_NAME' => 'listing_status',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=LISTING_STATUS
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL listing_status

                FIELD_NAME_LATEX=listing\_status
                FIELD_CODE_NAME_LATEX=listing\_status
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['listing_status'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'property_type',
        'FIELD_CODE_NAME' => 'property_type',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=PROPERTY_TYPE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL property_type

                FIELD_NAME_LATEX=property\_type
                FIELD_CODE_NAME_LATEX=property\_type
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['property_type'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'año de construcción',
        'FIELD_CODE_NAME' => 'year',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=YEAR
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(4) DEFAULT NULL año de construcción

                FIELD_NAME_LATEX=a\~no de construcci\'on
                FIELD_CODE_NAME_LATEX=year
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['year'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Agent',
        'FIELD_CODE_NAME' => 'agent',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=AGENT
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL Agent

                FIELD_NAME_LATEX=Agent
                FIELD_CODE_NAME_LATEX=agent
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['agent'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'area_unit',
        'FIELD_CODE_NAME' => 'area_unit',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=AREA_UNIT
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL area_unit

                FIELD_NAME_LATEX=area\_unit
                FIELD_CODE_NAME_LATEX=area\_unit
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['area_unit'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'land_area',
        'FIELD_CODE_NAME' => 'land_area',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=LAND_AREA
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL land_area

                FIELD_NAME_LATEX=land\_area
                FIELD_CODE_NAME_LATEX=land\_area
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['land_area'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'land_area_unit',
        'FIELD_CODE_NAME' => 'land_area_unit',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=LAND_AREA_UNIT
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL land_area_unit

                FIELD_NAME_LATEX=land\_area\_unit
                FIELD_CODE_NAME_LATEX=land\_area\_unit
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['land_area_unit'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'expiration_date',
        'FIELD_CODE_NAME' => 'expiration_date',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=EXPIRATION_DATE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL expiration_date

                FIELD_NAME_LATEX=expiration\_date
                FIELD_CODE_NAME_LATEX=expiration\_date
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['expiration_date'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'área del lote',
        'FIELD_CODE_NAME' => 'lot_size',
        'FIELD_DESCRIPTION' => 'área del lote',//área del lote
        'FIELDTYPE_ID' => 22,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=LOT_SIZE
                FIELD_INTRO=área del lote
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(11) NOT NULL DEFAULT '0' área del lote

                FIELD_NAME_LATEX=\'area del lote
                FIELD_CODE_NAME_LATEX=lot\_size
                FIELD_DBCOMMENT_LATEX=\'area del lote


    */
    $fields['lot_size'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'área de construcción',
        'FIELD_CODE_NAME' => 'house_size',
        'FIELD_DESCRIPTION' => 'área de construcción',//área de construcción
        'FIELDTYPE_ID' => 22,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=HOUSE_SIZE
                FIELD_INTRO=área de construcción
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(11) NOT NULL DEFAULT '0' área de construcción

                FIELD_NAME_LATEX=\'area de construcci\'on
                FIELD_CODE_NAME_LATEX=house\_size
                FIELD_DBCOMMENT_LATEX=\'area de construcci\'on


    */
    $fields['house_size'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'cocheras',
        'FIELD_CODE_NAME' => 'garages',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=GARAGES
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(4) DEFAULT NULL cocheras

                FIELD_NAME_LATEX=cocheras
                FIELD_CODE_NAME_LATEX=garages
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['garages'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'Date',
        'FIELD_CODE_NAME' => 'date',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=DATE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL Date

                FIELD_NAME_LATEX=Date
                FIELD_CODE_NAME_LATEX=date
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['date'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'edok_link',
        'FIELD_CODE_NAME' => 'edok_link',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=EDOK_LINK
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(200) DEFAULT NULL edok_link

                FIELD_NAME_LATEX=edok\_link
                FIELD_CODE_NAME_LATEX=edok\_link
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['edok_link'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'owneremail',
        'FIELD_CODE_NAME' => 'owneremail',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=OWNEREMAIL
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(50) DEFAULT NULL owneremail

                FIELD_NAME_LATEX=owneremail
                FIELD_CODE_NAME_LATEX=owneremail
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['owneremail'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'featured_clicks',
        'FIELD_CODE_NAME' => 'featured_clicks',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FEATURED_CLICKS
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(100) DEFAULT NULL featured_clicks

                FIELD_NAME_LATEX=featured\_clicks
                FIELD_CODE_NAME_LATEX=featured\_clicks
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['featured_clicks'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'featured_shows',
        'FIELD_CODE_NAME' => 'featured_shows',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FEATURED_SHOWS
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(100) DEFAULT NULL featured_shows

                FIELD_NAME_LATEX=featured\_shows
                FIELD_CODE_NAME_LATEX=featured\_shows
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['featured_shows'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'pixUpdtedDt',
        'FIELD_CODE_NAME' => 'pixUpdtedDt',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=PIXUPDTEDDT
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(100) DEFAULT NULL pixUpdtedDt

                FIELD_NAME_LATEX=pixUpdtedDt
                FIELD_CODE_NAME_LATEX=pixUpdtedDt
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['pixUpdtedDt'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'extra1',
        'FIELD_CODE_NAME' => 'extra1',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=EXTRA1
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(250) DEFAULT NULL extra1

                FIELD_NAME_LATEX=extra1
                FIELD_CODE_NAME_LATEX=extra1
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['extra1'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'extra2',
        'FIELD_CODE_NAME' => 'extra2',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=EXTRA2
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(250) DEFAULT NULL extra2

                FIELD_NAME_LATEX=extra2
                FIELD_CODE_NAME_LATEX=extra2
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['extra2'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'extra3',
        'FIELD_CODE_NAME' => 'extra3',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=EXTRA3
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(250) DEFAULT NULL extra3

                FIELD_NAME_LATEX=extra3
                FIELD_CODE_NAME_LATEX=extra3
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['extra3'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'extra4',
        'FIELD_CODE_NAME' => 'extra4',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=EXTRA4
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(250) DEFAULT NULL extra4

                FIELD_NAME_LATEX=extra4
                FIELD_CODE_NAME_LATEX=extra4
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['extra4'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'extra5',
        'FIELD_CODE_NAME' => 'extra5',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=EXTRA5
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(250) DEFAULT NULL extra5

                FIELD_NAME_LATEX=extra5
                FIELD_CODE_NAME_LATEX=extra5
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['extra5'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'extra6',
        'FIELD_CODE_NAME' => 'extra6',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=EXTRA6
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(250) DEFAULT NULL extra6

                FIELD_NAME_LATEX=extra6
                FIELD_CODE_NAME_LATEX=extra6
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['extra6'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'extra7',
        'FIELD_CODE_NAME' => 'extra7',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=EXTRA7
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(250) DEFAULT NULL extra7

                FIELD_NAME_LATEX=extra7
                FIELD_CODE_NAME_LATEX=extra7
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['extra7'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'extra8',
        'FIELD_CODE_NAME' => 'extra8',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=EXTRA8
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(250) DEFAULT NULL extra8

                FIELD_NAME_LATEX=extra8
                FIELD_CODE_NAME_LATEX=extra8
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['extra8'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'extra9',
        'FIELD_CODE_NAME' => 'extra9',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=EXTRA9
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(250) DEFAULT NULL extra9

                FIELD_NAME_LATEX=extra9
                FIELD_CODE_NAME_LATEX=extra9
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['extra9'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'extra10',
        'FIELD_CODE_NAME' => 'extra10',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=EXTRA10
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(250) DEFAULT NULL extra10

                FIELD_NAME_LATEX=extra10
                FIELD_CODE_NAME_LATEX=extra10
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['extra10'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'energy_value',
        'FIELD_CODE_NAME' => 'energy_value',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 37,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ENERGY_VALUE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DECIMAL(11,2) DEFAULT NULL energy_value

                FIELD_NAME_LATEX=energy\_value
                FIELD_CODE_NAME_LATEX=energy\_value
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['energy_value'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'climate_value',
        'FIELD_CODE_NAME' => 'climate_value',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 37,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=CLIMATE_VALUE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DECIMAL(11,2) DEFAULT NULL climate_value

                FIELD_NAME_LATEX=climate\_value
                FIELD_CODE_NAME_LATEX=climate\_value
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['climate_value'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'owner_id',
        'FIELD_CODE_NAME' => 'owner_id',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 13,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=OWNER_ID
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) UNSIGNED  NOT NULL DEFAULT '0' owner_id

                FIELD_NAME_LATEX=owner\_id
                FIELD_CODE_NAME_LATEX=owner\_id
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['owner_id'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'fotos',
        'FIELD_CODE_NAME' => 'photos',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 42,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=PHOTOS
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` MEDIUMTEXT  fotos

                FIELD_NAME_LATEX=fotos
                FIELD_CODE_NAME_LATEX=photos
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['photos'] = $field;
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
if ($this->params->get('save_history') AND $this->params->get('house_save_history'))
{
//	JHtml::_('behavior.modal', 'a.modal_jform_contenthistory');//creo que se carga con el botón versiones
	
	//hacer parametrizable data_id para que funcione versiones
	
	//$model	= JModelLegacy::getInstance('[%CompObject%]Form','[%ArchitectComp%]Model', array('ignore_request' => FALSE));
	$model	= JModelLegacy::getInstance('HouseForm','RemcaModel', array('ignore_request' => FALSE));
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
						'url' => new JUri('index.php?option=com_remca&view=houseform&layout=edit&layout=edit&tmpl=component&id=1&function=on_collapseModal')
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
		title: 'Inmuebles',
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