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
  `site` ENUM('www.vivanuncios.com.mx', 'www.bienesonline.mx', 'www.lamudi.com.mx', 'www.metroscubicos.com', 'www.inmuebles24.com', 'friofriocalientecaliente.com') NOT NULL DEFAULT 'www.vivanuncios.com.mx' COMMENT 'Site',
  `id_country` INT(10) UNSIGNED  NOT NULL DEFAULT '484' COMMENT 'país',
  `id_lstate` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'estado',
  `sid` INT(11) DEFAULT NULL COMMENT 'sid',
  `id_lmunicipality` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'municipio',
  `associate_house` VARCHAR(255) DEFAULT NULL COMMENT 'associate_house',
  `houseid` VARCHAR(20) NOT NULL DEFAULT '' COMMENT 'houseid',
  `id_rent` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Rent',
  `link` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'link',
  `listing_type` VARCHAR(45) NOT NULL DEFAULT '' COMMENT 'listing_type',
  `price` DECIMAL(11,2) NOT NULL DEFAULT '0' COMMENT 'precio',
  `id_currency` INT(10) NOT NULL DEFAULT '0' COMMENT 'moneda',
  `hzipcode` VARCHAR(50) NOT NULL DEFAULT '' COMMENT 'código postal',
  `hlocation` TINYTEXT(255) NOT NULL DEFAULT '' COMMENT 'ubicación',
  `hlatitude` VARCHAR(20) NOT NULL DEFAULT '0' COMMENT 'latitud',
  `hlongitude` VARCHAR(20) NOT NULL DEFAULT '0' COMMENT 'longitud',
  `map_zoom` INT(10) NOT NULL DEFAULT '14' COMMENT 'Map zoom',
  `rooms` INT(11) NOT NULL DEFAULT '0' COMMENT 'habitaciones',
  `bathrooms` VARCHAR(4) NOT NULL DEFAULT '0' COMMENT 'baños',
  `bedrooms` VARCHAR(4) NOT NULL DEFAULT '0' COMMENT 'dormitorios',
  `contacts` VARCHAR(250) DEFAULT NULL COMMENT 'Contacts',
  `listing_status` VARCHAR(45) DEFAULT NULL COMMENT 'listing_status',
  `property_type` VARCHAR(45) DEFAULT NULL COMMENT 'property_type',
  `year` VARCHAR(4) DEFAULT NULL COMMENT 'año de construcción',
  `agent` VARCHAR(45) DEFAULT NULL COMMENT 'Agent',
  `area_unit` VARCHAR(45) DEFAULT NULL COMMENT 'area_unit',
  `land_area` VARCHAR(45) DEFAULT NULL COMMENT 'land_area',
  `land_area_unit` VARCHAR(45) DEFAULT NULL COMMENT 'land_area_unit',
  `expiration_date` DATETIME DEFAULT NULL COMMENT 'expiration_date',
  `lot_size` INT(11) NOT NULL DEFAULT '0' COMMENT 'área del lote',
  `house_size` INT(11) NOT NULL DEFAULT '0' COMMENT 'área de construcción',
  `garages` VARCHAR(4) DEFAULT NULL COMMENT 'cocheras',
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
  `energy_value` DECIMAL(11,2) DEFAULT NULL COMMENT 'energy_value',
  `climate_value` DECIMAL(11,2) DEFAULT NULL COMMENT 'climate_value',
  `owner_id` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'owner_id',
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
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`state`),
  KEY `idx_featured_catid` (`featured`,`catid`),
  KEY `idx_site` (`site`),
  KEY `idx_id_country` (`id_country`),
  KEY `idx_id_lstate` (`id_lstate`),
  KEY `idx_id_lmunicipality` (`id_lmunicipality`),
  KEY `idx_price` (`price`),
  KEY `idx_bathrooms` (`bathrooms`),
  KEY `idx_bedrooms` (`bedrooms`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_wa_title_conversations`
--

#DROP TABLE IF EXISTS `#__rem_wa_title_conversations`;
CREATE TABLE IF NOT EXISTS `#__rem_wa_title_conversations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL DEFAULT '',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `remca_wa_title_conversation_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_wa_entry_conversations`
--

#DROP TABLE IF EXISTS `#__rem_wa_entry_conversations`;
CREATE TABLE IF NOT EXISTS `#__rem_wa_entry_conversations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` MEDIUMTEXT NOT NULL,
  `id_wa_title_conversation` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Tema de la conversación Whatsapp',
  `phone` VARCHAR(50) NOT NULL DEFAULT '' COMMENT 'Teléfono',
  `catid` INT(10) UNSIGNED DEFAULT NULL COMMENT 'FK to categories in #__categories', # NOT NULL DEFAULT '0'
  KEY `idx_catid` (`catid`),
  CONSTRAINT `remca_wa_entry_conversation_catid` FOREIGN KEY (`catid`) REFERENCES `#__categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `remca_wa_entry_conversation_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_id_wa_title_conversation` (`id_wa_title_conversation`),
  KEY `idx_phone` (`phone`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_photos`
--

#DROP TABLE IF EXISTS `#__rem_photos`;
CREATE TABLE IF NOT EXISTS `#__rem_photos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `thumbnail_img` VARCHAR(250) DEFAULT NULL COMMENT 'thumbnail_img',
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
  `id_user` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Usuario',
  `fk_houses_htitle` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'fk_houses_htitle',
  `email` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'email',
  `status` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'status',
  `order_date` DATETIME DEFAULT NULL COMMENT 'order_date',
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Inmueble',
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
  `id_user` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Usuario',
  `fk_houses_htitle` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'fk_houses_htitle',
  `email` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'email',
  `status` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'status',
  `order_date` DATETIME DEFAULT NULL COMMENT 'order_date',
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Inmueble',
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
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Inmueble',
  `id_user` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Usuario',
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
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Inmueble',
  `id_user` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Usuario',
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
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Inmueble',
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
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Inmueble',
  `id_user` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Usuario',
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
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Inmueble',
  `sequence_number` INT(11) DEFAULT NULL COMMENT 'sequence_number',
  `src` VARCHAR(255) DEFAULT NULL COMMENT 'src',
  `kind` VARCHAR(255) DEFAULT NULL COMMENT 'kind',
  `scrlang` VARCHAR(255) DEFAULT NULL COMMENT 'scrlang',
  `label` VARCHAR(255) DEFAULT NULL COMMENT 'label',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_wisheslist`
--

#DROP TABLE IF EXISTS `#__rem_wisheslist`;
CREATE TABLE IF NOT EXISTS `#__rem_wisheslist` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Inmueble',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `remca_wishlist_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_modifiedby` (`modified_by`),
#IR no validado  
#  CONSTRAINT `remca_wishlist_modifiedby` FOREIGN KEY (`modified_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  KEY `idx_state` (`state`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__rem_video_source`
--

#DROP TABLE IF EXISTS `#__rem_video_source`;
CREATE TABLE IF NOT EXISTS `#__rem_video_source` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Inmueble',
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
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Inmueble',
  `id_user` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Usuario',
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
  `id_house` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Inmueble',
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
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.house
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('Inmueble',
'com_remca.house',
'{"special":{"dbtable":"#__rem_houses","key":"id","type":"houses","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"state","core_alias":"null","core_created_time":"null","core_modified_time":"modified","core_body":"description","core_hits":"hits","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"featured","core_metadata":"null","core_language":"language","core_images":"images","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"catid","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::gethouseRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/house.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_country","targetTable":"#__rem_countries","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_lstate","targetTable":"#__rem_lstates","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_lmunicipality","targetTable":"#__rem_lmunicipalities","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_rent","targetTable":"#__rem_rents","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_currency","targetTable":"#__rem_countries","targetColumn":"id","displayColumn":"currency"},{"sourceColumn":"owner_id","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.mime_type
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('mime_type',
'com_remca.mime_type',
'{"special":{"dbtable":"#__rem_mime_types","key":"id","type":"mime_types","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::getmime_typeRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/mime_type.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.mls_for_delete
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('mls_for_delete',
'com_remca.mls_for_delete',
'{"special":{"dbtable":"#__rem_mls_for_delete","key":"id","type":"mls_for_delete","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::getmls_for_deleteRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/mls_for_delete.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.order
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('order',
'com_remca.order',
'{"special":{"dbtable":"#__rem_orders","key":"id","type":"orders","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::getorderRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/order.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_user","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_house","targetTable":"#__rem_houses","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.orders_detail
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('orders_detail',
'com_remca.orders_detail',
'{"special":{"dbtable":"#__rem_orders_details","key":"id","type":"orders_details","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::getorders_detailRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/orders_detail.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_order","targetTable":"#__rem_orders","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_user","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_house","targetTable":"#__rem_houses","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.main_category
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('main_category',
'com_remca.main_category',
'{"special":{"dbtable":"#__rem_main_categories","key":"id","type":"main_categories","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"state","core_alias":"alias","core_created_time":"null","core_modified_time":"null","core_body":"description","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"access","core_params":"params","core_featured":"null","core_metadata":"null","core_language":"language","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"asset_id"}}',
'remcaHelperRoute::getmain_categoryRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/main_category.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.rent
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('Rent',
'com_remca.rent',
'{"special":{"dbtable":"#__rem_rents","key":"id","type":"rents","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::getrentRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/rent.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_house","targetTable":"#__rem_houses","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_user","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.rent_request
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('Rent request',
'com_remca.rent_request',
'{"special":{"dbtable":"#__rem_rent_requests","key":"id","type":"rent_requests","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::getrent_requestRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/rent_request.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_house","targetTable":"#__rem_houses","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_user","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.rent_sal
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('rent_sal',
'com_remca.rent_sal',
'{"special":{"dbtable":"#__rem_rent_sal","key":"id","type":"rent_sal","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::getrent_salRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/rent_sal.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_house","targetTable":"#__rem_houses","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.review
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('Review',
'com_remca.review',
'{"special":{"dbtable":"#__rem_reviews","key":"id","type":"reviews","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::getreviewRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/review.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_house","targetTable":"#__rem_houses","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_user","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.track_source
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('track_source',
'com_remca.track_source',
'{"special":{"dbtable":"#__rem_track_source","key":"id","type":"track_source","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::gettrack_sourceRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/track_source.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_house","targetTable":"#__rem_houses","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.wishlist
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('Favorito',
'com_remca.wishlist',
'{"special":{"dbtable":"#__rem_wisheslist","key":"id","type":"wisheslist","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::getwishlistRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/wishlist.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_house","targetTable":"#__rem_houses","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.video_source
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('video_source',
'com_remca.video_source',
'{"special":{"dbtable":"#__rem_video_source","key":"id","type":"video_source","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::getvideo_sourceRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/video_source.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_house","targetTable":"#__rem_houses","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.buying_request
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('Buying requests',
'com_remca.buying_request',
'{"special":{"dbtable":"#__rem_buying_requests","key":"id","type":"buying_requests","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::getbuying_requestRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/buying_request.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_house","targetTable":"#__rem_houses","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_user","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.category
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('category',
'com_remca.category',
'{"special":{"dbtable":"#__rem_categories","key":"id","type":"categories","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::getcategoryRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/category.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"iditem","targetTable":"#__rem_houses","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"idcat","targetTable":"#__rem_main_categories","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.const
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('const',
'com_remca.const',
'{"special":{"dbtable":"#__rem_const","key":"id","type":"const","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::getconstRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/const.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.const_language
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('const_language',
'com_remca.const_language',
'{"special":{"dbtable":"#__rem_const_language","key":"id","type":"const_language","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::getconst_languageRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/const_language.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"fk_constid","targetTable":"#__rem_const","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"fk_languagesid","targetTable":"#__rem_languages","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.feature
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('feature',
'com_remca.feature',
'{"special":{"dbtable":"#__rem_feature","key":"id","type":"feature","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"state","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::getfeatureRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/feature.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.feature_house
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('feature_house',
'com_remca.feature_house',
'{"special":{"dbtable":"#__rem_feature_houses","key":"id","type":"feature_houses","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::getfeature_houseRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/feature_house.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_house","targetTable":"#__rem_houses","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_featured","targetTable":"#__rem_feature","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.language
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('language',
'com_remca.language',
'{"special":{"dbtable":"#__rem_languages","key":"id","type":"languages","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'remcaHelperRoute::getlanguageRoute',
'{"formFile":"administrator\/components\/com_remca\/models\/forms\/language.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_remca.category
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('RealEstateManagerCA Category',
'com_remca.category',
'Array',
'',
'Array',
'remcaHelperRoute::getCategoryRoute',
''
);
