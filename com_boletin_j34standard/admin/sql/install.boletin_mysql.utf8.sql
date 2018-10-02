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
-- Table structure for table `#__boletin_tsjcdmx_juzgados_familiares_antiguos`
--

#DROP TABLE IF EXISTS `#__boletin_tsjcdmx_juzgados_familiares_antiguos`;
CREATE TABLE IF NOT EXISTS `#__boletin_tsjcdmx_juzgados_familiares_antiguos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_acuerdo` INT(20) NOT NULL DEFAULT '0' COMMENT 'Acuerdo',
  `juzgado` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Juzgado',
  `expediente` INT(11) NOT NULL DEFAULT '0' COMMENT 'Expediente',
  `anio` INT(11) NOT NULL DEFAULT '0' COMMENT 'Año judicial',
  `bis` INT(11) NOT NULL DEFAULT '0' COMMENT 'Bis',
  `tipo` VARCHAR(45) NOT NULL DEFAULT '' COMMENT 'Tipo de juicio',
  `actor` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Actor',
  `demandado` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Demandado',
  `terceria` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Tercería',
  `juicio` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Juicio',
  `accion` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Acción',
  `materia` VARCHAR(45) NOT NULL DEFAULT '' COMMENT 'Materia',
  `resolucion` VARCHAR(45) NOT NULL DEFAULT '' COMMENT 'Resolución',
  `fecha_acuerdo` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Fecha del acuerdo',
  `fecha_publicacion` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Fecha de publicación',
  `tipo_acuerdo` VARCHAR(45) NOT NULL DEFAULT '' COMMENT 'Tipo de acuerdo',
  `visibilidad` VARCHAR(45) NOT NULL DEFAULT '' COMMENT 'Visibilidad',
  `especial` VARCHAR(45) NOT NULL DEFAULT '' COMMENT 'Datos condensados de publicaciones en juzgados',
  KEY `idx_id_acuerdo` (`id_acuerdo`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__boletin_tsjcdmx_juzgados_civiles_antiguos`
--

#DROP TABLE IF EXISTS `#__boletin_tsjcdmx_juzgados_civiles_antiguos`;
CREATE TABLE IF NOT EXISTS `#__boletin_tsjcdmx_juzgados_civiles_antiguos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_acuerdo` INT(20) NOT NULL DEFAULT '0' COMMENT 'Acuerdo',
  `juzgado` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Juzgado',
  `expediente` INT(11) NOT NULL DEFAULT '0' COMMENT 'Expediente',
  `anio` INT(11) NOT NULL DEFAULT '0' COMMENT 'Año judicial',
  `bis` INT(11) NOT NULL DEFAULT '0' COMMENT 'Bis',
  `tipo` VARCHAR(45) NOT NULL DEFAULT '' COMMENT 'Tipo de juicio',
  `actor` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Actor',
  `demandado` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Demandado',
  `terceria` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Tercería',
  `juicio` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Juicio',
  `accion` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Acción',
  `materia` VARCHAR(45) NOT NULL DEFAULT '' COMMENT 'Materia',
  `resolucion` VARCHAR(45) NOT NULL DEFAULT '' COMMENT 'Resolución',
  `fecha_acuerdo` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Fecha del acuerdo',
  `fecha_publicacion` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Fecha de publicación',
  `tipo_acuerdo` VARCHAR(45) NOT NULL DEFAULT '' COMMENT 'Tipo de acuerdo',
  `visibilidad` VARCHAR(45) NOT NULL DEFAULT '' COMMENT 'Visibilidad',
  `especial` VARCHAR(45) NOT NULL DEFAULT '' COMMENT 'Datos condensados de publicaciones en juzgados',
  KEY `idx_id_acuerdo` (`id_acuerdo`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__boletin_tsjcdmx_juzgado_acuerdos`
--

#DROP TABLE IF EXISTS `#__boletin_tsjcdmx_juzgado_acuerdos`;
CREATE TABLE IF NOT EXISTS `#__boletin_tsjcdmx_juzgado_acuerdos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` MEDIUMTEXT NOT NULL,
  `fecha_acuerdo` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Fecha del acuerdo',
  `fecha_boletin` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Fecha de publicación',
  `juzgado` VARCHAR(45) NOT NULL DEFAULT '' COMMENT 'Juzgado',
  `actor` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Actor',
  `demandado` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Demandado',
  `terceria` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Tercería',
  `tipo_juicio` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Tipo de juicio',
  `toca` INT(10) NOT NULL DEFAULT '0' COMMENT 'Toca',
  `anio` INT(10) NOT NULL DEFAULT '0' COMMENT 'Año judicial',
  `tipo_resolucion` VARCHAR(50) NOT NULL DEFAULT '' COMMENT 'Tipo de resolución',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__boletin_tsjcdmx_sala_acuerdos`
--

#DROP TABLE IF EXISTS `#__boletin_tsjcdmx_sala_acuerdos`;
CREATE TABLE IF NOT EXISTS `#__boletin_tsjcdmx_sala_acuerdos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` MEDIUMTEXT NOT NULL,
  `fecha_acuerdo` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Fecha del acuerdo',
  `fecha_boletin` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Fecha de publicación',
  `sala` VARCHAR(45) NOT NULL DEFAULT '' COMMENT 'Instancia',
  `actor` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Actor',
  `demandado` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Demandado',
  `terceria` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Tercería',
  `tipo_juicio` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Tipo de juicio',
  `toca` INT(10) NOT NULL DEFAULT '0' COMMENT 'Toca',
  `anio` INT(10) NOT NULL DEFAULT '0' COMMENT 'Año Judicial',
  `asunto` INT(10) NOT NULL DEFAULT '0' COMMENT 'Asunto',
  `tipo_resolucion` VARCHAR(50) NOT NULL DEFAULT '' COMMENT 'Tipo de resolución',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__boletin_prodecon_bacuerdos`
--

#DROP TABLE IF EXISTS `#__boletin_prodecon_bacuerdos`;
CREATE TABLE IF NOT EXISTS `#__boletin_prodecon_bacuerdos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` MEDIUMTEXT NOT NULL,
  `id_delegacion` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'DELEGACIÓN',
  `expediente` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'EXPEDIENTE PRODECON',
  `promovente` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'PROMOVENTE',
  `destinatario` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'DESTINATARIO',
  `autoridades` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'AUTORIDADES INVOLUCRADAS',
  `fecha` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'FECHA DEL ACTO A NOTIFICAR',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__boletin_profeco_proveedores`
--

#DROP TABLE IF EXISTS `#__boletin_profeco_proveedores`;
CREATE TABLE IF NOT EXISTS `#__boletin_profeco_proveedores` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Nombre',
  `marca` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Nombre Comercial',
  `porcentaje` INT(10) NOT NULL DEFAULT '0' COMMENT 'Porcentaje de Conciliación',
  `is_concilianet` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'Concilianet',
  `is_conciliaexpres` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'Conciliaexpres o Conciliación Inmediata',
  `id_giro` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Giros dentro del Sector',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__boletin_srsps_bacuerdos`
--

#DROP TABLE IF EXISTS `#__boletin_srsps_bacuerdos`;
CREATE TABLE IF NOT EXISTS `#__boletin_srsps_bacuerdos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rfc` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'R.F.C.',
  `nombre` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Nombre del Contribuyente',
  `oficio` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Número de oficio individual de presunción',
  `fecha_oficio` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'fecha de oficio individual de presunción',
  `emisor` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Autoridad emisora del oficio individual de presunción',
  `id_medio_notificacion` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Medio de notificación al contribuyente',
  `fecha_notificacion` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Fecha de notificación',
  `fecha_surte` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Fecha en que surtió efectos la notificación',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__boletin_rsps_bacuerdos`
--

#DROP TABLE IF EXISTS `#__boletin_rsps_bacuerdos`;
CREATE TABLE IF NOT EXISTS `#__boletin_rsps_bacuerdos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `expediente` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Expediente',
  `sancionadora` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Autoridad Sancionadora',
  `f_resolucion` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Fecha resolución',
  `sancion` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Sanción',
  `duracion` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Duración',
  `f_inicio` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Fecha inicio',
  `f_fin` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Fecha fin',
  `dependencia` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Dependencia',
  `causa` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Causa',
  `origen` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Origen',
  `paterno` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Paterno',
  `materno` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Materno',
  `nombre` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Nombre',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__boletin_pjf_bacuerdos`
--

#DROP TABLE IF EXISTS `#__boletin_pjf_bacuerdos`;
CREATE TABLE IF NOT EXISTS `#__boletin_pjf_bacuerdos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` MEDIUMTEXT NOT NULL,
  `id_instancia` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'instancia',
  `id_asunto` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'asunto',
  `neun` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Número de Expediente Único Nacional',
  `expediente` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Número de Expediente Asignado',
  `ncocc` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Número de control Oficina de Correspondencia Común',
  `fecha_auto` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Fecha del Auto',
  `id_cuaderno` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Tipo Cuaderno',
  `fecha_publicacion` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Fecha de publicación',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__boletin_tfca_bacuerdos`
--

#DROP TABLE IF EXISTS `#__boletin_tfca_bacuerdos`;
CREATE TABLE IF NOT EXISTS `#__boletin_tfca_bacuerdos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` MEDIUMTEXT NOT NULL,
  `instancia` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'instancia',
  `fecha` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'fecha del acuerdo',
  `expediente` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'expediente',
  `actor` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'actor',
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `#__boletin_tfjfa_bacuerdos`
--

#DROP TABLE IF EXISTS `#__boletin_tfjfa_bacuerdos`;
CREATE TABLE IF NOT EXISTS `#__boletin_tfjfa_bacuerdos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fecha_boletin` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Fecha del boletín',
  `region` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Región',
  `instancia` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Instancia',
  `expediente` VARCHAR(50) NOT NULL DEFAULT '' COMMENT 'Expediente',
  `actor` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Actor',
  `parte_a_notificar` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Parte a notificar',
  `auto_o_resolucion` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Auto o resolución a notificar',
  `catid` INT(10) UNSIGNED DEFAULT NULL COMMENT 'FK to categories in #__categories', # NOT NULL DEFAULT '0'
  KEY `idx_catid` (`catid`),
  CONSTRAINT `boletin_tfjfa_bacuerdo_catid` FOREIGN KEY (`catid`) REFERENCES `#__categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
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
