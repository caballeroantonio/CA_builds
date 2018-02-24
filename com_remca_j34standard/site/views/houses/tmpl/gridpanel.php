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
        'FIELD_NAME' => 'fk_rentid',
        'FIELD_CODE_NAME' => 'fk_rentid',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 13,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=FK_RENTID
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(10) NOT NULL DEFAULT '0' fk_rentid

                FIELD_NAME_LATEX=fk\_rentid
                FIELD_CODE_NAME_LATEX=fk\_rentid
                FIELD_DBCOMMENT_LATEX=

                    {FIELD_LINK}
                    FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=R
                    FIELD_FOREIGN_OBJECT_UPPER=RENT

    */
    $fields['fk_rentid'] = $field;
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
        'FIELD_NAME' => 'price',
        'FIELD_CODE_NAME' => 'price',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 22,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=PRICE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(11) NOT NULL DEFAULT '0' price

                FIELD_NAME_LATEX=price
                FIELD_CODE_NAME_LATEX=price
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['price'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'priceunit',
        'FIELD_CODE_NAME' => 'priceunit',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=PRICEUNIT
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(14) NOT NULL DEFAULT '' priceunit

                FIELD_NAME_LATEX=priceunit
                FIELD_CODE_NAME_LATEX=priceunit
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['priceunit'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'hcountry',
        'FIELD_CODE_NAME' => 'hcountry',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=HCOUNTRY
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(50) NOT NULL DEFAULT '' hcountry

                FIELD_NAME_LATEX=hcountry
                FIELD_CODE_NAME_LATEX=hcountry
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['hcountry'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'hregion',
        'FIELD_CODE_NAME' => 'hregion',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=HREGION
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(50) NOT NULL DEFAULT '' hregion

                FIELD_NAME_LATEX=hregion
                FIELD_CODE_NAME_LATEX=hregion
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['hregion'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'hcity',
        'FIELD_CODE_NAME' => 'hcity',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=HCITY
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(50) NOT NULL DEFAULT '' hcity

                FIELD_NAME_LATEX=hcity
                FIELD_CODE_NAME_LATEX=hcity
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['hcity'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'hzipcode',
        'FIELD_CODE_NAME' => 'hzipcode',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=HZIPCODE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(50) NOT NULL DEFAULT '' hzipcode

                FIELD_NAME_LATEX=hzipcode
                FIELD_CODE_NAME_LATEX=hzipcode
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['hzipcode'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'hlocation',
        'FIELD_CODE_NAME' => 'hlocation',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=HLOCATION
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(100) NOT NULL DEFAULT '' hlocation

                FIELD_NAME_LATEX=hlocation
                FIELD_CODE_NAME_LATEX=hlocation
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['hlocation'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'hlatitude',
        'FIELD_CODE_NAME' => 'hlatitude',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=HLATITUDE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(20) NOT NULL DEFAULT '' hlatitude

                FIELD_NAME_LATEX=hlatitude
                FIELD_CODE_NAME_LATEX=hlatitude
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['hlatitude'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'hlongitude',
        'FIELD_CODE_NAME' => 'hlongitude',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=HLONGITUDE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(20) NOT NULL DEFAULT '' hlongitude

                FIELD_NAME_LATEX=hlongitude
                FIELD_CODE_NAME_LATEX=hlongitude
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['hlongitude'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'map_zoom',
        'FIELD_CODE_NAME' => 'map_zoom',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=MAP_ZOOM
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(5) NOT NULL DEFAULT '' map_zoom

                FIELD_NAME_LATEX=map\_zoom
                FIELD_CODE_NAME_LATEX=map\_zoom
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['map_zoom'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'rooms',
        'FIELD_CODE_NAME' => 'rooms',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 22,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=ROOMS
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(11) DEFAULT NULL rooms

                FIELD_NAME_LATEX=rooms
                FIELD_CODE_NAME_LATEX=rooms
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['rooms'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'bathrooms',
        'FIELD_CODE_NAME' => 'bathrooms',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 22,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=BATHROOMS
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(11) DEFAULT NULL bathrooms

                FIELD_NAME_LATEX=bathrooms
                FIELD_CODE_NAME_LATEX=bathrooms
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['bathrooms'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'bedrooms',
        'FIELD_CODE_NAME' => 'bedrooms',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 22,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=BEDROOMS
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(11) DEFAULT NULL bedrooms

                FIELD_NAME_LATEX=bedrooms
                FIELD_CODE_NAME_LATEX=bedrooms
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['bedrooms'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'contacts',
        'FIELD_CODE_NAME' => 'contacts',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=CONTACTS
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(250) DEFAULT NULL contacts

                FIELD_NAME_LATEX=contacts
                FIELD_CODE_NAME_LATEX=contacts
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['contacts'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'image_link',
        'FIELD_CODE_NAME' => 'image_link',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=IMAGE_LINK
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(200) DEFAULT NULL image_link

                FIELD_NAME_LATEX=image\_link
                FIELD_CODE_NAME_LATEX=image\_link
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['image_link'] = $field;
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
        'FIELD_NAME' => 'year',
        'FIELD_CODE_NAME' => 'year',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=YEAR
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(4) DEFAULT NULL year

                FIELD_NAME_LATEX=year
                FIELD_CODE_NAME_LATEX=year
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['year'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'agent',
        'FIELD_CODE_NAME' => 'agent',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=AGENT
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(45) DEFAULT NULL agent

                FIELD_NAME_LATEX=agent
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
        'FIELD_NAME' => 'lot_size',
        'FIELD_CODE_NAME' => 'lot_size',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 22,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=LOT_SIZE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(11) NOT NULL DEFAULT '0' lot_size

                FIELD_NAME_LATEX=lot\_size
                FIELD_CODE_NAME_LATEX=lot\_size
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['lot_size'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'house_size',
        'FIELD_CODE_NAME' => 'house_size',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 22,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=HOUSE_SIZE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` INT(11) NOT NULL DEFAULT '0' house_size

                FIELD_NAME_LATEX=house\_size
                FIELD_CODE_NAME_LATEX=house\_size
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['house_size'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'garages',
        'FIELD_CODE_NAME' => 'garages',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 1,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=GARAGES
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` VARCHAR(50) DEFAULT NULL garages

                FIELD_NAME_LATEX=garages
                FIELD_CODE_NAME_LATEX=garages
                FIELD_DBCOMMENT_LATEX=


    */
    $fields['garages'] = $field;
    //{OBJECT_FIELD}
    $field = array(
        'FIELD_NAME' => 'date',
        'FIELD_CODE_NAME' => 'date',
        'FIELD_DESCRIPTION' => '',//
        'FIELDTYPE_ID' => 5,
    );
    /*
                FIELD_OPTIONS_LANGUAGE_VARS=
                FIELD_CODE_NAME_UPPER=DATE
                FIELD_INTRO=
                FIELD_DESCRIPTION_INI=

                FIELD_DB=`` DATETIME DEFAULT NULL date

                FIELD_NAME_LATEX=date
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

                FIELD_DB=`` INT(10) NOT NULL DEFAULT '0' owner_id

                FIELD_NAME_LATEX=owner\_id
                FIELD_CODE_NAME_LATEX=owner\_id
                FIELD_DBCOMMENT_LATEX=

                    {FIELD_LINK}
                    FIELD_FOREIGN_OBJECT_ACRONYM_UPPER=U
                    FIELD_FOREIGN_OBJECT_UPPER=USER

    */
    $fields['owner_id'] = $field;
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
		title: 'Houses',
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