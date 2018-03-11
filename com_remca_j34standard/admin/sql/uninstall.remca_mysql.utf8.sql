-- @version 		$Id:$
-- @name			RealEstateManagerCA
-- @author			caballeroantonio (caballeroantonio.com)
-- @package			com_remca
-- @subpackage		com_remca.admin
-- @copyright		
-- @license			GNU General Public License version 3 or later - See http://www.gnu.org/copyleft/gpl.html 
--
-- The following Component Architect header section must remain in any distribution of this file
--
-- @CAversion		Id:uninstall.architectcomp_mysql.utf8.sql 19 2012-01-12 16:33:49Z BrianWade $
-- @CAauthor		Component Architect (www.componentarchitect.com)
-- @CApackage		architectcomp
-- @CAsubpackage	architectcomp.admin
-- @CAtemplate		joomla_3_4_standard (Release 1.0.1)
-- @CAcopyright		Copyright (c)2013 - 2016  Simply Open Source Ltd. (trading as Component Architect). All Rights Reserved
-- @CAlicense		GNU General Public License version 3 or later - See http://www.gnu.org/copyleft/gpl.html
--
-- This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by
-- the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
--
-- This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY, without even the implied warranty of
-- MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
-- --------------------------------------------------------
--
-- Uninstall of `#__remca` tables
--

SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `#__rem_houses`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.house';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_HOUSES' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_photos`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.photo';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_PHOTOS' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_mime_types`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.mimetype';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_MIME_TYPES' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_mls_for_delete`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.mlsfordelete';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_MLS_FOR_DELETE' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_orders`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.order';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_ORDERS' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_orders_details`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.ordersdetail';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_ORDERS_DETAILS' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_main_categories`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.maincategory';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_MAIN_CATEGORIES' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_rent`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.rent';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_RENT' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_rent_request`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.rentrequest';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_RENT_REQUEST' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_rent_sal`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.rentsal';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_RENT_SAL' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_review`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.review';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_REVIEW' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_track_source`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.tracksource';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_TRACK_SOURCE' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_users_wishlist`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.userswishlist';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_USERS_WISHLIST' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_video_source`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.videosource';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_VIDEO_SOURCE' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_buying_request`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.buyingrequest';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_BUYING_REQUEST' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_categories`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.category';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_CATEGORIES' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_const`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.const';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_CONST' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_const_language`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.constlanguage';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_CONST_LANGUAGE' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_feature`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.feature';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_FEATURE' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_feature_houses`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.featurehouse';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_FEATURE_HOUSES' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_languages`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.language';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_LANGUAGES' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_lmunicipalities`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.lmunicipality';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_LMUNICIPALITIES' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_lstates`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.lstate';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_LSTATES' AND `type`='component';
DROP TABLE IF EXISTS `#__rem_countries`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.country';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_COUNTRIES' AND `type`='component';

DROP TABLE IF EXISTS `#__rem_rating`;

DELETE FROM `#__assets` WHERE `name` LIKE '%com_remca%';
DELETE FROM `#__extensions` WHERE `name`='com_remca' AND `type`='component';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA' AND `type`='component';

#[ %%IF GENERATE_CATEGORIES%%] 
DELETE FROM `#__categories` WHERE `extension`='com_remca';
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_remca.category';
DELETE FROM `#__menu` WHERE `title`='COM_REMCA_CATEGORIES' AND `type`='component';
#[ %%ENDIF GENERATE_CATEGORIES%%]

SET FOREIGN_KEY_CHECKS=1;