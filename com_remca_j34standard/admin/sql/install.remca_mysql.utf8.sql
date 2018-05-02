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
-- @CAversion		Id:install.architectcomp_mysql.utf8.sql 19 2012-01-12 16:33:49Z BrianWade $
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
-- Table structure for table `#__rem_houses`
--

#DROP TABLE IF EXISTS `#__rem_houses`;
CREATE TABLE IF NOT EXISTS `#__rem_houses` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL DEFAULT '',
  `description` MEDIUMTEXT NOT NULL,
  `id_country` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'país',
  `id_lstate` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'estado',
  `id_lmunicipality` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'municipio',
  `sid` INT(11) DEFAULT NULL COMMENT 'sid',
  `id_rent` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Rent',
  `associate_house` VARCHAR(255) DEFAULT NULL COMMENT 'associate_house',
  `houseid` VARCHAR(20) NOT NULL DEFAULT '' COMMENT 'houseid',
  `link` VARCHAR(250) NOT NULL DEFAULT '' COMMENT 'link',
  `listing_type` VARCHAR(45) NOT NULL DEFAULT '' COMMENT 'listing_type',
  `price` DECIMAL(11,2) NOT NULL DEFAULT '0' COMMENT 'precio',
  `id_currency` INT(10) NOT NULL DEFAULT '0' COMMENT 'moneda',
  `hzipcode` VARCHAR(50) NOT NULL DEFAULT '' COMMENT 'código postal',
  `hlocation` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'ubicación',
  `hlatitude` VARCHAR(20) NOT NULL DEFAULT '' COMMENT 'latitud',
  `hlongitude` VARCHAR(20) NOT NULL DEFAULT '' COMMENT 'longitud',
  `map_zoom` INT(10) NOT NULL DEFAULT '14' COMMENT 'Map zoom',
  `rooms` INT(11) NOT NULL DEFAULT '0' COMMENT 'habitaciones',
  `bathrooms` INT(11) NOT NULL DEFAULT '0' COMMENT 'baños',
  `bedrooms` INT(11) NOT NULL DEFAULT '0' COMMENT 'dormitorios',
  `contacts` VARCHAR(250) DEFAULT NULL COMMENT 'Contacts',
  `listing_status` VARCHAR(45) DEFAULT NULL COMMENT 'listing_status',
  `property_type` VARCHAR(45) DEFAULT NULL COMMENT 'property_type',
  `year` VARCHAR(4) DEFAULT NULL COMMENT 'año de construcción',
  `agent` VARCHAR(45) DEFAULT NULL COMMENT 'Agent',
  `area_unit` VARCHAR(45) DEFAULT NULL COMMENT 'area_unit',
  `land_area` VARCHAR(45) DEFAULT NULL COMMENT 'land_area',
  `land_area_unit` VARCHAR(45) DEFAULT NULL COMMENT 'land_area_unit',
  `expiration_date` DATETIME DEFAULT NULL COMMENT 'expiration_date',
  `lot_size` INT(11) NOT NULL DEFAULT '0' COMMENT 'lot_size',
  `house_size` INT(11) NOT NULL DEFAULT '0' COMMENT 'house_size',
  `garages` VARCHAR(50) DEFAULT NULL COMMENT 'cochera',
  `date` DATETIME DEFAULT NULL COMMENT 'Date',
  `edok_link` VARCHAR(200) DEFAULT NULL COMMENT 'edok_link',
  `owneremail` VARCHAR(50) DEFAULT NULL COMMENT 'owneremail',
  `featured_clicks` VARCHAR(100) DEFAULT NULL COMMENT 'featured_clicks',
  `featured_shows` VARCHAR(100) DEFAULT NULL COMMENT 'featured_shows',
  `pixUpdtedDt` VARCHAR(100) DEFAULT NULL COMMENT 'pixUpdtedDt',
  `extra1` VARCHAR(250) DEFAULT NULL COMMENT 'extra1',
  `extra2` VARCHAR(250) DEFAULT NULL COMMENT 'extra2',
  `extra3` VARCHAR(250) DEFAULT NULL COMMENT 'extra3',
  `extra4` VARCHAR(250) DEFAULT NULL COMMENT 'extra4',
  `extra5` VARCHAR(250) DEFAULT NULL COMMENT 'extra5',
  `extra6` VARCHAR(250) DEFAULT NULL COMMENT 'extra6',
  `extra7` VARCHAR(250) DEFAULT NULL COMMENT 'extra7',
  `extra8` VARCHAR(250) DEFAULT NULL COMMENT 'extra8',
  `extra9` VARCHAR(250) DEFAULT NULL COMMENT 'extra9',
  `extra10` VARCHAR(250) DEFAULT NULL COMMENT 'extra10',
  `owner_id` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'owner_id',
  `energy_value` DECIMAL(11,2) DEFAULT NULL COMMENT 'energy_value',
  `climate_value` DECIMAL(11,2) DEFAULT NULL COMMENT 'climate_value',
  `photos` MEDIUMTEXT  COMMENT 'fotos',
  `images` TEXT NOT NULL,
  `catid` INT(10) UNSIGNED DEFAULT NULL COMMENT 'FK to categories in #__categories', # NOT NULL DEFAULT '0'
  KEY `idx_catid` (`catid`),
  CONSTRAINT `remca_house_catid` FOREIGN KEY (`catid`) REFERENCES `#__categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_modifiedby` (`modified_by`),
#IR no validado  
#  CONSTRAINT `remca_house_modifiedby` FOREIGN KEY (`modified_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `checked_out` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  `hits` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `featured` TINYINT(3) UNSIGNED NOT NULL DEFAULT '0',
  `language` CHAR(7) NOT NULL DEFAULT '*',
  `asset_id` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to the #__assets table',
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`state`),
  KEY `idx_featured_catid` (`featured`,`catid`),
  KEY `idx_id_country` (`id_country`),
  KEY `idx_id_lstate` (`id_lstate`),
  KEY `idx_id_lmunicipality` (`id_lmunicipality`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_photos`
--

#DROP TABLE IF EXISTS `#__rem_photos`;
CREATE TABLE IF NOT EXISTS `#__rem_photos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'House',
  `thumbnail_img` VARCHAR(250) DEFAULT NULL COMMENT 'thumbnail_img',
  `images` TEXT NOT NULL,
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_mime_types`
--

#DROP TABLE IF EXISTS `#__rem_mime_types`;
CREATE TABLE IF NOT EXISTS `#__rem_mime_types` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mime_ext` TEXT DEFAULT NULL COMMENT 'mime_ext',
  `mime_type` TEXT DEFAULT NULL COMMENT 'mime_type',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_mls_for_delete`
--

#DROP TABLE IF EXISTS `#__rem_mls_for_delete`;
CREATE TABLE IF NOT EXISTS `#__rem_mls_for_delete` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mls` VARCHAR(255) DEFAULT NULL COMMENT 'mls',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_orders`
--

#DROP TABLE IF EXISTS `#__rem_orders`;
CREATE TABLE IF NOT EXISTS `#__rem_orders` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL DEFAULT '',
  `id_user` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'User',
  `fk_houses_htitle` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'fk_houses_htitle',
  `email` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'email',
  `status` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'status',
  `order_date` DATETIME DEFAULT NULL COMMENT 'order_date',
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'House',
  `txn_type` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'txn_type',
  `txn_id` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'txn_id',
  `payer_id` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'payer_id',
  `payer_status` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'payer_status',
  `order_calculated_price` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'order_calculated_price',
  `order_price` INT(11) DEFAULT NULL COMMENT 'order_price',
  `order_currency_code` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'order_currency_code',
  `paypal_paykay` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'paypal_paykay',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_orders_details`
--

#DROP TABLE IF EXISTS `#__rem_orders_details`;
CREATE TABLE IF NOT EXISTS `#__rem_orders_details` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL DEFAULT '',
  `id_order` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Order',
  `id_user` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'User',
  `fk_houses_htitle` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'fk_houses_htitle',
  `email` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'email',
  `status` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'status',
  `order_date` DATETIME DEFAULT NULL COMMENT 'order_date',
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'House',
  `txn_type` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'txn_type',
  `txn_id` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'txn_id',
  `payer_id` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'payer_id',
  `payer_status` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'payer_status',
  `order_calculated_price` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'order_calculated_price',
  `order_price` INT(11) DEFAULT NULL COMMENT 'order_price',
  `order_currency_code` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'order_currency_code',
  `payment_details` TEXT DEFAULT NULL COMMENT 'payment_details',
  `paypal_paykay` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'paypal_paykay',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_main_categories`
--

#DROP TABLE IF EXISTS `#__rem_main_categories`;
CREATE TABLE IF NOT EXISTS `#__rem_main_categories` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL DEFAULT '',
  `alias` VARCHAR(255) NOT NULL DEFAULT '',
  `description` MEDIUMTEXT NOT NULL,
  `parent_id` INT(11) NOT NULL DEFAULT '0' COMMENT 'parent_id',
  `associate_category` VARCHAR(255) DEFAULT NULL COMMENT 'associate_category',
  `title` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'title',
  `image` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'image',
  `section` VARCHAR(50) NOT NULL DEFAULT '' COMMENT 'section',
  `image_position` VARCHAR(30) NOT NULL DEFAULT '' COMMENT 'image_position',
  `editor` VARCHAR(50) DEFAULT NULL COMMENT 'editor',
  `count` INT(11) DEFAULT NULL COMMENT 'count',
  `params2` TEXT DEFAULT NULL COMMENT 'params2',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `checked_out` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  `params` VARCHAR(5120) NOT NULL,
  `language` CHAR(7) NOT NULL DEFAULT '*',
  `access` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Manage the access level group',
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_rents`
--

#DROP TABLE IF EXISTS `#__rem_rents`;
CREATE TABLE IF NOT EXISTS `#__rem_rents` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL DEFAULT '',
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'House',
  `id_user` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'User',
  `rent_from` DATETIME DEFAULT NULL COMMENT 'rent_from',
  `rent_until` DATETIME DEFAULT NULL COMMENT 'rent_until',
  `rent_return` DATETIME DEFAULT NULL COMMENT 'rent_return',
  `user_name` VARCHAR(150) DEFAULT NULL COMMENT 'user_name',
  `user_email` VARCHAR(100) DEFAULT NULL COMMENT 'user_email',
  `user_mailing` TEXT DEFAULT NULL COMMENT 'user_mailing',
  `checked_out` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  KEY `idx_checkout` (`checked_out`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_rent_requests`
--

#DROP TABLE IF EXISTS `#__rem_rent_requests`;
CREATE TABLE IF NOT EXISTS `#__rem_rent_requests` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'House',
  `id_user` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'User',
  `rent_from` DATETIME DEFAULT NULL COMMENT 'rent_from',
  `rent_until` DATETIME DEFAULT NULL COMMENT 'rent_until',
  `rent_request` DATETIME DEFAULT NULL COMMENT 'rent_request',
  `user_name` VARCHAR(150) DEFAULT NULL COMMENT 'user_name',
  `user_email` VARCHAR(100) DEFAULT NULL COMMENT 'user_email',
  `user_mailing` TEXT DEFAULT NULL COMMENT 'user_mailing',
  `status` INT(1) DEFAULT NULL COMMENT 'status',
  `checked_out` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  KEY `idx_checkout` (`checked_out`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_rent_sal`
--

#DROP TABLE IF EXISTS `#__rem_rent_sal`;
CREATE TABLE IF NOT EXISTS `#__rem_rent_sal` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'House',
  `monthW` INT(4) DEFAULT NULL COMMENT 'monthW',
  `yearW` INT(4) DEFAULT NULL COMMENT 'yearW',
  `week` VARCHAR(1250) DEFAULT NULL COMMENT 'week',
  `weekend` VARCHAR(1250) DEFAULT NULL COMMENT 'weekend',
  `midweek` VARCHAR(1250) DEFAULT NULL COMMENT 'midweek',
  `price_from` DATETIME DEFAULT NULL COMMENT 'price_from',
  `price_to` DATETIME DEFAULT NULL COMMENT 'price_to',
  `special_price` DECIMAL(11,2) DEFAULT NULL COMMENT 'special_price',
  `comment_price` VARCHAR(1000) NOT NULL DEFAULT '' COMMENT 'comment_price',
  `priceunit` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'priceunit',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_reviews`
--

#DROP TABLE IF EXISTS `#__rem_reviews`;
CREATE TABLE IF NOT EXISTS `#__rem_reviews` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'House',
  `id_user` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'User',
  `user_name` VARCHAR(150) DEFAULT NULL COMMENT 'user_name',
  `user_email` VARCHAR(100) DEFAULT NULL COMMENT 'user_email',
  `date` DATETIME DEFAULT NULL COMMENT 'date',
  `rating` INT(2) DEFAULT NULL COMMENT 'rating',
  `title` VARCHAR(250) DEFAULT NULL COMMENT 'title',
  `comment` TEXT DEFAULT NULL COMMENT 'comment',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  KEY `idx_state` (`state`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_track_source`
--

#DROP TABLE IF EXISTS `#__rem_track_source`;
CREATE TABLE IF NOT EXISTS `#__rem_track_source` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'House',
  `sequence_number` INT(11) DEFAULT NULL COMMENT 'sequence_number',
  `src` VARCHAR(255) DEFAULT NULL COMMENT 'src',
  `kind` VARCHAR(255) DEFAULT NULL COMMENT 'kind',
  `scrlang` VARCHAR(255) DEFAULT NULL COMMENT 'scrlang',
  `label` VARCHAR(255) DEFAULT NULL COMMENT 'label',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_users_wishlist`
--

#DROP TABLE IF EXISTS `#__rem_users_wishlist`;
CREATE TABLE IF NOT EXISTS `#__rem_users_wishlist` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_video_source`
--

#DROP TABLE IF EXISTS `#__rem_video_source`;
CREATE TABLE IF NOT EXISTS `#__rem_video_source` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'House',
  `sequence_number` INT(11) DEFAULT NULL COMMENT 'sequence_number',
  `src` VARCHAR(255) DEFAULT NULL COMMENT 'src',
  `type` VARCHAR(255) DEFAULT NULL COMMENT 'type',
  `media` VARCHAR(255) DEFAULT NULL COMMENT 'media',
  `youtube` VARCHAR(255) DEFAULT NULL COMMENT 'youtube',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_buying_requests`
--

#DROP TABLE IF EXISTS `#__rem_buying_requests`;
CREATE TABLE IF NOT EXISTS `#__rem_buying_requests` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'House',
  `id_user` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'User',
  `buying_request` DATETIME DEFAULT NULL COMMENT 'buying_request',
  `customer_name` VARCHAR(250) DEFAULT NULL COMMENT 'customer_name',
  `customer_email` VARCHAR(100) DEFAULT NULL COMMENT 'customer_email',
  `customer_phone` VARCHAR(15) NOT NULL DEFAULT '' COMMENT 'customer_phone',
  `customer_comment` TEXT DEFAULT NULL COMMENT 'customer_comment',
  `status` INT(1) DEFAULT NULL COMMENT 'status',
  `checked_out` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  KEY `idx_checkout` (`checked_out`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_categories`
--

#DROP TABLE IF EXISTS `#__rem_categories`;
CREATE TABLE IF NOT EXISTS `#__rem_categories` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `iditem` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'iditem',
  `idcat` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'idcat',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_const`
--

#DROP TABLE IF EXISTS `#__rem_const`;
CREATE TABLE IF NOT EXISTS `#__rem_const` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL DEFAULT '',
  `const` VARCHAR(250) DEFAULT NULL COMMENT 'const',
  `sys_type` VARCHAR(250) DEFAULT NULL COMMENT 'sys_type',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_const_language`
--

#DROP TABLE IF EXISTS `#__rem_const_language`;
CREATE TABLE IF NOT EXISTS `#__rem_const_language` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fk_constid` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'fk_constid',
  `fk_languagesid` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'fk_languagesid',
  `value_const` VARCHAR(2000) DEFAULT NULL COMMENT 'value_const',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_feature`
--

#DROP TABLE IF EXISTS `#__rem_feature`;
CREATE TABLE IF NOT EXISTS `#__rem_feature` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL DEFAULT '',
  `categories` VARCHAR(250) DEFAULT NULL COMMENT 'categories',
  `image_link` VARCHAR(250) DEFAULT NULL COMMENT 'image_link',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  KEY `idx_state` (`state`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_feature_houses`
--

#DROP TABLE IF EXISTS `#__rem_feature_houses`;
CREATE TABLE IF NOT EXISTS `#__rem_feature_houses` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'House',
  `id_featured` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Featured',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_languages`
--

#DROP TABLE IF EXISTS `#__rem_languages`;
CREATE TABLE IF NOT EXISTS `#__rem_languages` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL DEFAULT '',
  `lang_code` VARCHAR(7) DEFAULT NULL COMMENT 'lang_code',
  `title` VARCHAR(250) DEFAULT NULL COMMENT 'title',
  `sef` VARCHAR(7) DEFAULT NULL COMMENT 'sef',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_lmunicipalities`
--

#DROP TABLE IF EXISTS `#__rem_lmunicipalities`;
CREATE TABLE IF NOT EXISTS `#__rem_lmunicipalities` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL DEFAULT '',
  `id_lstate` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'State',
  `id_country` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Country',
  `id_va` INT(11) NOT NULL DEFAULT '0' COMMENT 'id va',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_id_lstate` (`id_lstate`),
  KEY `idx_id_country` (`id_country`),
  KEY `idx_id_va` (`id_va`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_lstates`
--

#DROP TABLE IF EXISTS `#__rem_lstates`;
CREATE TABLE IF NOT EXISTS `#__rem_lstates` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL DEFAULT '',
  `id_country` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'id_country',
  `official_name` VARCHAR(255) DEFAULT NULL COMMENT 'Nombre oficial',
  `id_va` INT(11) NOT NULL DEFAULT '0' COMMENT 'id va',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_id_country` (`id_country`),
  KEY `idx_id_va` (`id_va`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_countries`
--

#DROP TABLE IF EXISTS `#__rem_countries`;
CREATE TABLE IF NOT EXISTS `#__rem_countries` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL DEFAULT '',
  `ordering_cur` INT(11) NOT NULL DEFAULT '1' COMMENT 'ordering_cur',
  `published_cur` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'published_cur',
  `iso2` VARCHAR(2) DEFAULT NULL COMMENT 'iso2',
  `iso3` VARCHAR(3) DEFAULT NULL COMMENT 'iso3',
  `currency` VARCHAR(45) DEFAULT NULL COMMENT 'currency',
  `conversion` DECIMAL(11,2) NOT NULL DEFAULT '0' COMMENT 'conversion',
  `conversion_date` DATETIME DEFAULT NULL COMMENT 'conversion_date',
  `id_va` INT(11) NOT NULL DEFAULT '0' COMMENT 'id va',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_id_va` (`id_va`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Table structure for table `#__rem_rating`
--
#DROP TABLE IF EXISTS `#__rem_rating`;
CREATE TABLE IF NOT EXISTS `#__rem_rating` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `content_type` VARCHAR(50) NOT NULL DEFAULT '',
  `content_id` INT(11) NOT NULL DEFAULT '0',
  `rating_sum` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `rating_count` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `lastip` VARCHAR(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `content_type_id` (`content_type`,`content_id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `#__content_types` (`type_title`, `type_alias`, `table`, `rules`, `field_mappings`,`router`) VALUES
('RealEstateManagerCA Category', 'com_remca.category', '{"special":{"dbtable":"#__categories","key":"id","type":"Category","prefix":"JTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}', '', '{"common":[{"core_content_item_id":"id","core_title":"title","core_state":"published","core_alias":"alias","core_created_time":"created_time","core_modified_time":"modified_time","core_body":"description", "core_hits":"hits","core_publish_up":"null","core_publish_down":"null","core_access":"access", "core_params":"params", "core_featured":"null", "core_metadata":"metadata", "core_language":"language", "core_images":"null", "core_urls":"null", "core_version":"version", "core_ordering":"null", "core_metakey":"metakey", "core_metadesc":"metadesc", "core_catid":"parent_id", "core_xreference":"null", "asset_id":"asset_id"}], "special": [{"parent_id":"parent_id","lft":"lft","rgt":"rgt","level":"level","path":"path","extension":"extension","note":"note"}]}','RemcaHelperRoute::getCategoryRoute');
