-- @version 		$Id:$
-- @name			TSJ CDMX Libros TxCA (Release 1.0.0)
-- @author			caballeroantonio (caballeroantonio.com)
-- @package			com_jtca
-- @subpackage		com_jtca.admin
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
-- Table structure for table `jt_lejemplos`
--

#DROP TABLE IF EXISTS `jt_lejemplos`;
CREATE TABLE IF NOT EXISTS `jt_lejemplos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `my_boolean` TINYINT(1) DEFAULT NULL COMMENT 'my boolean',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `my_int` INT(10) DEFAULT NULL COMMENT 'my int',
  `my_currency` DECIMAL(11,2) DEFAULT NULL COMMENT 'my currency',
  `my_date` DATETIME DEFAULT NULL COMMENT 'my date',
  `my_datetime` DATETIME DEFAULT NULL COMMENT 'my datetime',
  `my_var45` VARCHAR(45) DEFAULT NULL COMMENT 'my var45',
  `txt_expediente` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente',
  `my_var255` VARCHAR(255) DEFAULT NULL COMMENT 'my var255',
  `txt_my_suggest` VARCHAR(255) DEFAULT NULL COMMENT 'txt_my_suggest',
  `my_multiline` TEXT DEFAULT NULL COMMENT 'my multiline',
  `my_ref2` INT(10) DEFAULT NULL COMMENT 'my ref2',
  `my_ref` INT(10) DEFAULT NULL COMMENT 'my ref',
  `id_my_suggest` INT(10) DEFAULT NULL COMMENT 'id_my_suggest',
  `my_NFempleado` INT(10) DEFAULT NULL COMMENT 'my NFempleado',
  `my_fexterna` INT(10) DEFAULT NULL COMMENT 'my Fexterna',
  `my_hexterna` INT(10) DEFAULT NULL COMMENT 'my Hexterna',
  `my_parent` INT(10) NOT NULL DEFAULT '0' COMMENT 'my parent',
  `my_person_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'my person isMoral',
  `my_person_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'my person paterno',
  `my_person_materno` VARCHAR(45) DEFAULT NULL COMMENT 'my person materno',
  `my_person_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'my person nombre',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lejemplo_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_lejemplos`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('Libro de ejemplo',
'com_jtca.lejemplo',
'{"special":{"dbtable":"jtca_lejemplos","key":"id","type":"lejemplos","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlejemploRoute',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lejemplo.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"my_ref2","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"my_ref","targetTable":"gpcb.jtc_country","targetColumn":"id","displayColumn":"country"}]}'
);
