-- @version 		$Id:$
-- @name			T384 Avisos
-- @author			caballeroantonio (caballeroantonio.com)
-- @package			com_t384
-- @subpackage		com_t384.admin
-- @copyright		Copyright (c) 2017 - 2020. All Rights Reserved
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
-- Table structure for table `#__t384_modules`
--

#DROP TABLE IF EXISTS `#__t384_modules`;
CREATE TABLE IF NOT EXISTS `#__t384_modules` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL DEFAULT '',
  `description` MEDIUMTEXT NOT NULL,
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `publish_up` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `checked_out` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  `params` VARCHAR(5120) NOT NULL,
  `language` CHAR(7) NOT NULL DEFAULT '*',
  `asset_id` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to the #__assets table',
  `access` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Manage the access level group',
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__t384_houses`
--

#DROP TABLE IF EXISTS `#__t384_houses`;
CREATE TABLE IF NOT EXISTS `#__t384_houses` (
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
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_modifiedby` (`modified_by`),
#IR no validado  
#  CONSTRAINT `t384_house_modifiedby` FOREIGN KEY (`modified_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `checked_out` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  `hits` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `featured` TINYINT(3) UNSIGNED NOT NULL DEFAULT '0',
  `language` CHAR(7) NOT NULL DEFAULT '*',
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`state`),
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
-- Table structure for table `#__t384_wa_title_conversations`
--

#DROP TABLE IF EXISTS `#__t384_wa_title_conversations`;
CREATE TABLE IF NOT EXISTS `#__t384_wa_title_conversations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL DEFAULT '',
  `nada` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'nada',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  `params` VARCHAR(5120) NOT NULL,
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__t384_wa_entry_conversations`
--

#DROP TABLE IF EXISTS `#__t384_wa_entry_conversations`;
CREATE TABLE IF NOT EXISTS `#__t384_wa_entry_conversations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` MEDIUMTEXT NOT NULL,
  `id_wa_title_conversation` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Tema de la conversación Whatsapp',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  `params` VARCHAR(5120) NOT NULL,
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `#__t384_wa_entry_conversations`
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('Module',
'com_t384.module',
'{"special":{"dbtable":"#__t384_modules","key":"id","type":"modules","prefix":"t384Table","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"state","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"description","core_hits":"null","core_publish_up":"publish_up","core_publish_down":"publish_down","core_access":"access","core_params":"params","core_featured":"null","core_metadata":"null","core_language":"language","core_images":"null","core_urls":"null","core_version":"null","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"asset_id"}}',
't384HelperRoute::getmoduleRoute',
'{"formFile":"administrator\/components\/com_t384\/models\/forms\/module.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `#__t384_wa_entry_conversations`
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('Inmueble',
'com_t384.house',
'{"special":{"dbtable":"#__t384_houses","key":"id","type":"houses","prefix":"t384Table","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"state","core_alias":"null","core_created_time":"null","core_modified_time":"modified","core_body":"description","core_hits":"hits","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"featured","core_metadata":"null","core_language":"language","core_images":"images","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
't384HelperRoute::gethouseRoute',
'{"formFile":"administrator\/components\/com_t384\/models\/forms\/house.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_country","targetTable":"#__t384_countries","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_lstate","targetTable":"#__t384_lstates","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_lmunicipality","targetTable":"#__t384_lmunicipalities","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_rent","targetTable":"#__t384_rents","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_currency","targetTable":"#__remca_countries","targetColumn":"id","displayColumn":"currency"},{"sourceColumn":"owner_id","targetTable":"#__t384_jusers","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `#__t384_wa_entry_conversations`
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('Título de la conversación Whatsapp',
'com_t384.wa_title_conversation',
'{"special":{"dbtable":"#__t384_wa_title_conversations","key":"id","type":"wa_title_conversations","prefix":"t384Table","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"state","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"params","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"null","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
't384HelperRoute::getwa_title_conversationRoute',
'{"formFile":"administrator\/components\/com_t384\/models\/forms\/wa_title_conversation.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
);
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `#__t384_wa_entry_conversations`
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('Entrada de la conversación Whatsapp',
'com_t384.wa_entry_conversation',
'{"special":{"dbtable":"#__t384_wa_entry_conversations","key":"id","type":"wa_entry_conversations","prefix":"t384Table","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"description","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"params","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"null","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
't384HelperRoute::getwa_entry_conversationRoute',
'{"formFile":"administrator\/components\/com_t384\/models\/forms\/wa_entry_conversation.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_wa_title_conversation","targetTable":"#__t384_wa_title_conversations","targetColumn":"id","displayColumn":"name"}]}'
);
