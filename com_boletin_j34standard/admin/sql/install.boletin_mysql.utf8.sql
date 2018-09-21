-- @version 		$Id:$
-- @name			Boletines
-- @author			caballeroantonio (caballeroantonio.com)
-- @package			com_boletin
-- @subpackage		com_boletin.admin
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
-- Table structure for table `#__rem_facuerdos`
--

#DROP TABLE IF EXISTS `#__rem_facuerdos`;
CREATE TABLE IF NOT EXISTS `#__rem_facuerdos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fecha_boletin` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'fecha_boletin',
  `region` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'region',
  `instancia` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'instancia',
  `expediente` VARCHAR(50) NOT NULL DEFAULT '' COMMENT 'expediente',
  `actor` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'actor',
  `parte_a_notificar` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'parte_a_notificar',
  `auto_o_resolucion` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'auto_o_resolucion',
  `catid` INT(10) UNSIGNED DEFAULT NULL COMMENT 'FK to categories in #__categories', # NOT NULL DEFAULT '0'
  KEY `idx_catid` (`catid`),
  CONSTRAINT `boletin_facuerdo_catid` FOREIGN KEY (`catid`) REFERENCES `#__categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


INSERT INTO `#__content_types` (`type_title`, `type_alias`, `table`, `rules`, `field_mappings`,`router`) VALUES
('Boletines Category', 'com_boletin.category', '{"special":{"dbtable":"#__categories","key":"id","type":"Category","prefix":"JTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}', '', '{"common":[{"core_content_item_id":"id","core_title":"title","core_state":"published","core_alias":"alias","core_created_time":"created_time","core_modified_time":"modified_time","core_body":"description", "core_hits":"hits","core_publish_up":"null","core_publish_down":"null","core_access":"access", "core_params":"params", "core_featured":"null", "core_metadata":"metadata", "core_language":"language", "core_images":"null", "core_urls":"null", "core_version":"version", "core_ordering":"null", "core_metakey":"metakey", "core_metadesc":"metadesc", "core_catid":"parent_id", "core_xreference":"null", "asset_id":"asset_id"}], "special": [{"parent_id":"parent_id","lft":"lft","rgt":"rgt","level":"level","path":"path","extension":"extension","note":"note"}]}','BoletinHelperRoute::getCategoryRoute');
        
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts com_boletin.category
--
 INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('Boletines Category',
'com_boletin.category',
'Array',
'',
'Array',
'boletinHelperRoute::getCategoryRoute',
''
);
