-- @version 		$Id:$
-- @name			TSJ CDMX Libros TxCA
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

/*
-- START CUSTOM CODE
-- Tables already defined in other component, les use only de definitions

--
-- Table structure for table `jt_ljc01s`
--

#DROP TABLE IF EXISTS `jt_ljc01s`;
CREATE TABLE IF NOT EXISTS `jt_ljc01s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTRADA',
  `field6` INT(10) DEFAULT NULL COMMENT 'CUANTÍA',
  `field14` INT(10) DEFAULT NULL COMMENT 'TIPO DE MONEDA',
  `field7` DECIMAL(11,2) DEFAULT NULL COMMENT 'SUERTE PRINCIPAL',
  `field8` INT(10) DEFAULT NULL COMMENT 'TIPO DE RESOLUCIÓN',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIÓN',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIÓN DE LA SALA',
  `field12` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN DE LA SALA',
  `field13` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc01_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsc01s`
--

#DROP TABLE IF EXISTS `jt_lsc01s`;
CREATE TABLE IF NOT EXISTS `jt_lsc01s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'NÚMERO DE TOCA',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field116` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN DEL ASUNTO',
  `field117` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE PROYECTO',
  `field120` VARCHAR(255) DEFAULT NULL COMMENT 'CONSTANCIAS RECIBIDAS',
  `field121` VARCHAR(255) DEFAULT NULL COMMENT 'RESOLUCIÓN RECURRIDA',
  `field122` DATETIME DEFAULT NULL COMMENT 'FECHA DE CIRCULACIÓN',
  `field236` DATETIME DEFAULT NULL COMMENT 'FECHA DE CIRCULACIÓN',
  `field2347` INT(10) DEFAULT NULL COMMENT 'PONENCIA REVISORA',
  `field123` DATETIME DEFAULT NULL COMMENT 'FECHA DEL DICTADO DE LA SENTENCIA',
  `field124` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN AL ARCHIVO',
  `field2348` INT(10) DEFAULT NULL COMMENT 'PONENCIA REVISORA',
  `field253` INT(10) DEFAULT NULL COMMENT 'DE QUIEN RECIBE LAS CONSTANCIAS',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsc01_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf01s`
--

#DROP TABLE IF EXISTS `jt_ljf01s`;
CREATE TABLE IF NOT EXISTS `jt_ljf01s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTRADA AL JUZGADO',
  `field6` INT(10) DEFAULT NULL COMMENT 'TIPO DE RESOLUCIÓN',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIÓN 1A. INSTANCIA',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN 1A. INSTANCIA',
  `field14` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf01_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljp01s`
--

#DROP TABLE IF EXISTS `jt_ljp01s`;
CREATE TABLE IF NOT EXISTS `jt_ljp01s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` DATETIME DEFAULT NULL COMMENT 'CONSIGNACIÓN Y RADICACIÓN',
  `field7` VARCHAR(255) DEFAULT NULL COMMENT 'DELITO(S)',
  `field19` INT(10) DEFAULT NULL COMMENT 'INDICIADO',
  `field14` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO QUE LE RECAE A LA PETICIÓN',
  `field20` VARCHAR(255) DEFAULT NULL COMMENT 'PETICIÓN DEL MINISTERIO PUBLICO',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE PLAZO CONSTITUCIONAL',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'LUGAR EN DONDE SE ENCUENTRA EL INCULPADO',
  `field10` INT(10) DEFAULT NULL COMMENT 'SENTENCIA',
  `field16` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO',
  `field15` DATETIME DEFAULT NULL COMMENT 'FECHA',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Causa de origen',
  `field18` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljp01_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljccm01s`
--

#DROP TABLE IF EXISTS `jt_ljccm01s`;
CREATE TABLE IF NOT EXISTS `jt_ljccm01s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTRADA',
  `field6` INT(10) DEFAULT NULL COMMENT 'CUANTÍA',
  `field7` DECIMAL(11,2) DEFAULT NULL COMMENT 'SUERTE PRINCIPAL',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIÓN',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIÓN DE LA SALA O DE LA AUTORIDAD FEDERAL',
  `field12` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN DE LA SALA O DE LA AUTORIDAD FEDERAL',
  `field13` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljccm01_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljoc01s`
--

#DROP TABLE IF EXISTS `jt_ljoc01s`;
CREATE TABLE IF NOT EXISTS `jt_ljoc01s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO',
  `field6` DECIMAL(11,2) DEFAULT NULL COMMENT 'SUERTE PRINCIPAL RECLAMADA',
  `field6_divisa` INT(10) DEFAULT NULL COMMENT 'TIPO DE MONEDA',
  `field7` INT(10) DEFAULT NULL COMMENT 'ASUNTOS CONCLUIDOS',
  `field8` INT(10) DEFAULT NULL COMMENT 'DADOS DE BAJA POR',
  `field9` INT(10) DEFAULT NULL COMMENT 'ENVIADOS AL ARCHIVO JUDICIAL',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'EXTINCIÓN',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'ESCISIÓN DE JUZGADO',
  `field12` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljoc01_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpdng01s`
--

#DROP TABLE IF EXISTS `jt_ljpdng01s`;
CREATE TABLE IF NOT EXISTS `jt_ljpdng01s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'AVERIGUACIÓN PREVIA',
  `txt_field975` VARCHAR(255) DEFAULT NULL COMMENT 'MOTIVO CONSIGNACIÓN',
  `id_field975` INT(10) DEFAULT NULL COMMENT 'MOTIVO CONSIGNACIÓN',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO QUE RECAE A LA PETICION MINISTERIAL',
  `field13` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE PLAZO CONSTITUCIONAL',
  `field14` DATETIME DEFAULT NULL COMMENT 'EXTINCION DE LA PRETENSION PUNITIVA',
  `field15` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente extinto',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpdng01_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpes01s`
--

#DROP TABLE IF EXISTS `jt_ljpes01s`;
CREATE TABLE IF NOT EXISTS `jt_ljpes01s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'CAUSA DE ORIGEN',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'JUZGADO DE ORIGEN',
  `field5` VARCHAR(255) DEFAULT NULL COMMENT 'DELITO(S)',
  `field6` VARCHAR(255) DEFAULT NULL COMMENT 'LUGAR DE RECLUSIÓN',
  `txt_field1198` VARCHAR(255) DEFAULT NULL COMMENT 'PETICIÓN',
  `id_field1198` INT(10) DEFAULT NULL COMMENT 'PETICIÓN',
  `txt_field1199` VARCHAR(255) DEFAULT NULL COMMENT 'RESOLUCIÓN',
  `id_field1199` INT(10) DEFAULT NULL COMMENT 'RESOLUCIÓN',
  `field10` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpes01_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadng01s`
--

#DROP TABLE IF EXISTS `jt_ljjadng01s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadng01s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA EN QUE SE RECIBE EL ASUNTO',
  `txt_field2032` VARCHAR(255) DEFAULT NULL COMMENT 'AUTORIDAD REMITENTE',
  `id_field2032` INT(10) DEFAULT NULL COMMENT 'AUTORIDAD REMITENTE',
  `field6` VARCHAR(255) DEFAULT NULL COMMENT 'CONDUCTA TIPIFICADA COMO DELITO',
  `field7` INT(10) DEFAULT NULL COMMENT 'FUNCIÓN',
  `field8` INT(10) DEFAULT NULL COMMENT 'REMISIÓN',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE VINCULACIÓN DEL PROCESO',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'CONDUCTA TIPIFICADA COMO DELITO MOTIVO DE LA VINCULACIÓN',
  `field11` INT(10) DEFAULT NULL COMMENT 'ACUERDO REPARATORIO',
  `field12` VARCHAR(45) DEFAULT NULL COMMENT 'SUSPENSIÓN DE PROCESO A PRUEBA',
  `field13` DATETIME DEFAULT NULL COMMENT 'FECHA DE AUDIENCIA INTERMEDIA',
  `field14` VARCHAR(255) DEFAULT NULL COMMENT 'JUICIO ABREVIADO',
  `field15` VARCHAR(255) DEFAULT NULL COMMENT 'OTRAS FORMAS DE CONCLUSIÓN',
  `field16` DATETIME DEFAULT NULL COMMENT 'AUTO DE APERTURA',
  `field17` DATETIME DEFAULT NULL COMMENT 'FECHA DE AUDIENCIA',
  `field18` DATETIME DEFAULT NULL COMMENT 'FECHA DE SENTENCIA',
  `field19` TINYINT(1) DEFAULT NULL COMMENT 'CONDENATORIA',
  `field20` VARCHAR(45) DEFAULT NULL COMMENT 'COMENTARIO',
  `field21` TINYINT(1) DEFAULT NULL COMMENT 'ABSOLUTORIA',
  `field22` VARCHAR(45) DEFAULT NULL COMMENT 'COMENTARIO',
  `field23` TINYINT(1) DEFAULT NULL COMMENT 'MIXTA',
  `field24` VARCHAR(45) DEFAULT NULL COMMENT 'COMENTARIO',
  `field25` DATETIME DEFAULT NULL COMMENT 'FECHA DEL ENGROSE DE LA SENTENCIA',
  `field26` VARCHAR(45) DEFAULT NULL COMMENT 'MEDIDAS IMPUESTAS Y DURACIÓN',
  `field27` INT(10) DEFAULT NULL COMMENT 'REPARACIÓN DEL DAÑO MATERIAL',
  `field28` INT(10) DEFAULT NULL COMMENT 'REPARACIÓN DEL DAÑO MORAL',
  `field29` INT(10) DEFAULT NULL COMMENT 'REPARACIÓN DE PERJUICIOS',
  `field30` TINYINT(1) DEFAULT NULL COMMENT 'DECOMISO',
  `field31` DATETIME DEFAULT NULL COMMENT 'FECHA DE CUMPLIMIENTO DE LA MEDIDA',
  `field32` VARCHAR(45) DEFAULT NULL COMMENT 'OTRAS FORMAS DE TERMINACIÓN',
  `field33` DATETIME DEFAULT NULL COMMENT 'FECHA DE CONCLUSIÓN DE LA CAUSA',
  `field34` VARCHAR(255) DEFAULT NULL COMMENT 'MEDIDAS IMPUESTAS Y DURACIÓN',
  `field35` INT(10) DEFAULT NULL COMMENT 'REPARACIÓN DEL DAÑO MATERIAL',
  `field36` INT(10) DEFAULT NULL COMMENT 'REPARACIÓN DEL DAÑO MORAL',
  `field37` INT(10) DEFAULT NULL COMMENT 'REPARACIÓN DE PERJUICIOS',
  `field38` TINYINT(1) DEFAULT NULL COMMENT 'DESTRUCCIÓN DE OBJETOS',
  `field39` DATETIME DEFAULT NULL COMMENT 'FECHA DE CUMPLIMIENTO DE LA MEDIDA',
  `field40` DATETIME DEFAULT NULL COMMENT 'FECHA DE CONCLUSIÓN DE LA CAUSA',
  `field42` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadng01_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadg01s`
--

#DROP TABLE IF EXISTS `jt_ljjadg01s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadg01s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field7` INT(10) DEFAULT NULL COMMENT 'ASUNTO',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA EN QUE SE RECIBE EL ASUNTO',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE AVERIGUACIÓN PREVIA',
  `field5` VARCHAR(255) DEFAULT NULL COMMENT 'CONDUCTA TIPIFICADA COMO DELITO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadg01_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp01s`
--

#DROP TABLE IF EXISTS `jt_lcp01s`;
CREATE TABLE IF NOT EXISTS `jt_lcp01s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'CONDUCTA CONSIDERADA COMO DELICTIVA',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp01_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp02s`
--

#DROP TABLE IF EXISTS `jt_lcp02s`;
CREATE TABLE IF NOT EXISTS `jt_lcp02s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'CONDUCTA CONSIDERADA COMO DELICTIVA',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp02_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp03s`
--

#DROP TABLE IF EXISTS `jt_lcp03s`;
CREATE TABLE IF NOT EXISTS `jt_lcp03s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'CONDUCTA CONSIDERADA COMO DELICTIVA',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO ASIGNADO',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp03_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp04s`
--

#DROP TABLE IF EXISTS `jt_lcp04s`;
CREATE TABLE IF NOT EXISTS `jt_lcp04s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'CONDUCTA CONSIDERADA COMO DELICTIVA',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp04_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp05s`
--

#DROP TABLE IF EXISTS `jt_lcp05s`;
CREATE TABLE IF NOT EXISTS `jt_lcp05s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'CONDUCTA CONSIDERADA COMO DELICTIVA',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp05_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp06s`
--

#DROP TABLE IF EXISTS `jt_lcp06s`;
CREATE TABLE IF NOT EXISTS `jt_lcp06s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'CONDUCTA CONSIDERADA COMO DELICTIVA',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO INCOMPETENTE',
  `field8` INT(10) DEFAULT NULL COMMENT 'SITUACION LEGAL',
  `organo2` INT(10) DEFAULT NULL COMMENT 'JUZGADO ',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field12` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp06_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp07s`
--

#DROP TABLE IF EXISTS `jt_lcp07s`;
CREATE TABLE IF NOT EXISTS `jt_lcp07s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO',
  `field6` INT(10) DEFAULT NULL COMMENT 'SITUACIÓN JURIDICA',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO EXCUSADO',
  `organo2` INT(10) DEFAULT NULL COMMENT 'JUZGADO ASIGNADO',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA/HORA ENTREGA',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp07_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp09s`
--

#DROP TABLE IF EXISTS `jt_lcp09s`;
CREATE TABLE IF NOT EXISTS `jt_lcp09s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'CONDUCTA TIPIFICADA COMO DELITO',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO QUE REMITE',
  `organo2` INT(10) DEFAULT NULL COMMENT 'JUZGADO TURNADO',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp09_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp10s`
--

#DROP TABLE IF EXISTS `jt_lcp10s`;
CREATE TABLE IF NOT EXISTS `jt_lcp10s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'LUGAR DE INTERNAMIENTO ACTUAL',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO ASIGNADO',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field6` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp10_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp18s`
--

#DROP TABLE IF EXISTS `jt_lcp18s`;
CREATE TABLE IF NOT EXISTS `jt_lcp18s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO ASIGNADO',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp18_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp19s`
--

#DROP TABLE IF EXISTS `jt_lcp19s`;
CREATE TABLE IF NOT EXISTS `jt_lcp19s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO ASIGNADO',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp19_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp20s`
--

#DROP TABLE IF EXISTS `jt_lcp20s`;
CREATE TABLE IF NOT EXISTS `jt_lcp20s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO INCOMPETENTE',
  `field9` INT(10) DEFAULT NULL COMMENT 'SITUACION LEGAL',
  `organo2` INT(10) DEFAULT NULL COMMENT 'JUZGADO ASIGNADO',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `field13` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field14` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp20_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp21s`
--

#DROP TABLE IF EXISTS `jt_lcp21s`;
CREATE TABLE IF NOT EXISTS `jt_lcp21s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO',
  `field6` INT(10) DEFAULT NULL COMMENT 'SITUACIÓN JURIDICA',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO EXCUSADO',
  `organo2` INT(10) DEFAULT NULL COMMENT 'JUZGADO ASIGNADO',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field12` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp21_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp22s`
--

#DROP TABLE IF EXISTS `jt_lcp22s`;
CREATE TABLE IF NOT EXISTS `jt_lcp22s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO',
  `field6` INT(10) DEFAULT NULL COMMENT 'TIPO DE ORDEN',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO ASIGNADO',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field10` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp22_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp23s`
--

#DROP TABLE IF EXISTS `jt_lcp23s`;
CREATE TABLE IF NOT EXISTS `jt_lcp23s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO',
  `field4` INT(10) DEFAULT NULL COMMENT 'TIPO DE ORDEN',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO QUE GIRA ORDEN',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field8` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp23_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp24s`
--

#DROP TABLE IF EXISTS `jt_lcp24s`;
CREATE TABLE IF NOT EXISTS `jt_lcp24s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'DOMICILIO DONDE SE GENERA LA VIOLENCIA',
  `field4` INT(10) DEFAULT NULL COMMENT 'DELEGACION',
  `field10` TINYINT(1) DEFAULT NULL COMMENT 'Art. 66 Frac. I',
  `field11` TINYINT(1) DEFAULT NULL COMMENT 'Art. 66 Frac. II',
  `field12` TINYINT(1) DEFAULT NULL COMMENT 'Art. 66 Frac. III',
  `field13` TINYINT(1) DEFAULT NULL COMMENT 'Art. 66 Frac. IV',
  `field14` TINYINT(1) DEFAULT NULL COMMENT 'Art. 66 Frac. V',
  `field15` TINYINT(1) DEFAULT NULL COMMENT 'Art. 71 Frac. I',
  `field16` TINYINT(1) DEFAULT NULL COMMENT 'Art. 71 Frac. II',
  `field17` TINYINT(1) DEFAULT NULL COMMENT 'Art. 71 Frac. III',
  `field18` TINYINT(1) DEFAULT NULL COMMENT 'Art. 71 Frac. IV',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO EN TURNO',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'RESOLUCIÓN ',
  `field9_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE QUIEN INFORMO RESOLUCIÓN (isMoral)',
  `field9_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE QUIEN INFORMO RESOLUCIÓN (paterno)',
  `field9_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE QUIEN INFORMO RESOLUCIÓN (materno)',
  `field9_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE QUIEN INFORMO RESOLUCIÓN (nombre)',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp24_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp25s`
--

#DROP TABLE IF EXISTS `jt_lcp25s`;
CREATE TABLE IF NOT EXISTS `jt_lcp25s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO ASIGNADO',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp25_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp26s`
--

#DROP TABLE IF EXISTS `jt_lcp26s`;
CREATE TABLE IF NOT EXISTS `jt_lcp26s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO ASIGNADO',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp26_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp27s`
--

#DROP TABLE IF EXISTS `jt_lcp27s`;
CREATE TABLE IF NOT EXISTS `jt_lcp27s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO INCOMPETENTE',
  `field8` INT(10) DEFAULT NULL COMMENT 'SITUACION LEGAL',
  `organo2` INT(10) DEFAULT NULL COMMENT 'JUZGADO ASIGNADO',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `field12` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field13` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp27_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp28s`
--

#DROP TABLE IF EXISTS `jt_lcp28s`;
CREATE TABLE IF NOT EXISTS `jt_lcp28s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO',
  `field6` INT(10) DEFAULT NULL COMMENT 'SITUACIÓN JURIDICA',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO EXCUSADO',
  `organo2` INT(10) DEFAULT NULL COMMENT 'JUZGADO ASIGNADO',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field12` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp28_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp29s`
--

#DROP TABLE IF EXISTS `jt_lcp29s`;
CREATE TABLE IF NOT EXISTS `jt_lcp29s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO',
  `field6` INT(10) DEFAULT NULL COMMENT 'TIPO DE ORDEN',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO ASIGNADO',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field10` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp29_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp11s`
--

#DROP TABLE IF EXISTS `jt_lcp11s`;
CREATE TABLE IF NOT EXISTS `jt_lcp11s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field2` VARCHAR(255) DEFAULT NULL COMMENT 'ASUNTO',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE OFICIO QUE SE CONTESTA',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE OFICIO',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field6` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp11_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp12s`
--

#DROP TABLE IF EXISTS `jt_lcp12s`;
CREATE TABLE IF NOT EXISTS `jt_lcp12s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO QUE DICTO',
  `field4` INT(10) DEFAULT NULL COMMENT 'SALA DE PROCEDENCIA',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'CONDUCTA TIPIFICADA COMO DELITO',
  `organo2` INT(10) DEFAULT NULL COMMENT 'JUZGADO TURNADO',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp12_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp13s`
--

#DROP TABLE IF EXISTS `jt_lcp13s`;
CREATE TABLE IF NOT EXISTS `jt_lcp13s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO REMITENTE',
  `organo2` INT(10) DEFAULT NULL COMMENT 'JUZGADO DE ENTREGA',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field7` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp13_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp14s`
--

#DROP TABLE IF EXISTS `jt_lcp14s`;
CREATE TABLE IF NOT EXISTS `jt_lcp14s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO',
  `field4` VARCHAR(255) DEFAULT NULL COMMENT 'ASUNTO',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO TURNADO',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field7` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp14_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp15s`
--

#DROP TABLE IF EXISTS `jt_lcp15s`;
CREATE TABLE IF NOT EXISTS `jt_lcp15s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field2` VARCHAR(45) DEFAULT NULL COMMENT 'JUZGADO REMITENTE',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE AMPARO',
  `field5` VARCHAR(255) DEFAULT NULL COMMENT 'ASUNTO',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO TURNADO',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field8` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp15_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp16s`
--

#DROP TABLE IF EXISTS `jt_lcp16s`;
CREATE TABLE IF NOT EXISTS `jt_lcp16s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field2` VARCHAR(45) DEFAULT NULL COMMENT 'JUZGADO REMITENTE',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE AMPARO',
  `field5` VARCHAR(255) DEFAULT NULL COMMENT 'ASUNTO',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field7` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp16_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp30s`
--

#DROP TABLE IF EXISTS `jt_lcp30s`;
CREATE TABLE IF NOT EXISTS `jt_lcp30s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE OFICIO',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field6_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE EMITE LIBERTAD (isMoral)',
  `field6_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (paterno)',
  `field6_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (materno)',
  `field6_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (nombre)',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'CARGO ',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'CARPETA',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE INCULPADOS',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp30_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp31s`
--

#DROP TABLE IF EXISTS `jt_lcp31s`;
CREATE TABLE IF NOT EXISTS `jt_lcp31s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE OFICIO',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field6_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE EMITE LIBERTAD (isMoral)',
  `field6_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (paterno)',
  `field6_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (materno)',
  `field6_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (nombre)',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'CARGO ',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'CARPETA',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE INCULPADOS',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp31_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp32s`
--

#DROP TABLE IF EXISTS `jt_lcp32s`;
CREATE TABLE IF NOT EXISTS `jt_lcp32s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE OFICIO',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field6_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE EMITE LIBERTAD (isMoral)',
  `field6_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (paterno)',
  `field6_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (materno)',
  `field6_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (nombre)',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'CARGO ',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'CARPETA',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE INCULPADOS',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp32_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp33s`
--

#DROP TABLE IF EXISTS `jt_lcp33s`;
CREATE TABLE IF NOT EXISTS `jt_lcp33s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` INT(10) DEFAULT NULL COMMENT 'SALA',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'TOCA PENAL',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE OFICIO',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field7_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE EMITE LIBERTAD (isMoral)',
  `field7_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (paterno)',
  `field7_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (materno)',
  `field7_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (nombre)',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'CARGO ',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'CARPETA',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE INCULPADOS',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp33_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp34s`
--

#DROP TABLE IF EXISTS `jt_lcp34s`;
CREATE TABLE IF NOT EXISTS `jt_lcp34s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE OFICIO',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field6_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE EMITE LIBERTAD (isMoral)',
  `field6_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (paterno)',
  `field6_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (materno)',
  `field6_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (nombre)',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'CARGO ',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'CARPETA',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE ADOLESCENTES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp34_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp35s`
--

#DROP TABLE IF EXISTS `jt_lcp35s`;
CREATE TABLE IF NOT EXISTS `jt_lcp35s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` INT(10) DEFAULT NULL COMMENT 'SALA',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'TOCA PENAL',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE OFICIO',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field8_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE EMITE LIBERTAD (isMoral)',
  `field8_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (paterno)',
  `field8_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (materno)',
  `field8_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (nombre)',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'CARGO ',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'CARPETA',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE ADOLESCENTES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp35_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp36s`
--

#DROP TABLE IF EXISTS `jt_lcp36s`;
CREATE TABLE IF NOT EXISTS `jt_lcp36s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'AV PREVIA',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'DELITOS',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE LIBERTAD',
  `field9_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE EMITE LIBERTAD (isMoral)',
  `field9_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (paterno)',
  `field9_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (materno)',
  `field9_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE EMITE LIBERTAD (nombre)',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'CARGO ',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'CARPETA',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp36_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp39s`
--

#DROP TABLE IF EXISTS `jt_lcp39s`;
CREATE TABLE IF NOT EXISTS `jt_lcp39s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO',
  `field6` INT(10) DEFAULT NULL COMMENT 'SITUACIÓN JURIDICA',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO EXCUSADO',
  `organo2` INT(10) DEFAULT NULL COMMENT 'JUZGADO ASIGNADO',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA/HORA ENTREGA',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp39_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp40s`
--

#DROP TABLE IF EXISTS `jt_lcp40s`;
CREATE TABLE IF NOT EXISTS `jt_lcp40s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'CONDUCTA CONSIDERADA COMO DELICTIVA',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO ',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA/HORA ENTREGA',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp40_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lcp41s`
--

#DROP TABLE IF EXISTS `jt_lcp41s`;
CREATE TABLE IF NOT EXISTS `jt_lcp41s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `fh_recepcion` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'CONDUCTA CONSIDERADA COMO DELICTIVA',
  `organo1` INT(10) DEFAULT NULL COMMENT 'JUZGADO ASIGNADO',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTREGA',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lcp41_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lspe01s`
--

#DROP TABLE IF EXISTS `jt_lspe01s`;
CREATE TABLE IF NOT EXISTS `jt_lspe01s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Toca',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `field2286` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO',
  `field2287` VARCHAR(255) DEFAULT NULL COMMENT 'JUZGADO PENAL',
  `field2288` VARCHAR(255) DEFAULT NULL COMMENT 'JUZGADO DE EJECUCIÓN DE ORIGEN',
  `field2289` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIÓN APELADA',
  `field2290` VARCHAR(255) DEFAULT NULL COMMENT 'RESOLUCIÓN APELADA',
  `field2291` VARCHAR(255) DEFAULT NULL COMMENT 'PETICIÓN CONCEDIDA',
  `field2292` DATETIME DEFAULT NULL COMMENT 'FECHA DE RESOLUCIÓN APELADA',
  `field2293_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'QUIEN APELA (isMoral)',
  `field2293_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'QUIEN APELA (paterno)',
  `field2293_materno` VARCHAR(45) DEFAULT NULL COMMENT 'QUIEN APELA (materno)',
  `field2293_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'QUIEN APELA (nombre)',
  `field2294` VARCHAR(255) DEFAULT NULL COMMENT 'LUGAR DE RECLUSIÓN',
  `field2295` DATETIME DEFAULT NULL COMMENT 'FECHA DE AUDIENCIA DE VISTA',
  `field2296` DATETIME DEFAULT NULL COMMENT 'FECHA DE RESOLUCIÓN',
  `field2297` VARCHAR(255) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN',
  `field2343` VARCHAR(255) DEFAULT NULL COMMENT 'NO. DE AMPARO',
  `field2344` DATETIME DEFAULT NULL COMMENT 'FECHA DE RESOLUCIÓN RECURRIDA VÍA AMPARO',
  `field2298` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lspe01_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lspe02s`
--

#DROP TABLE IF EXISTS `jt_lspe02s`;
CREATE TABLE IF NOT EXISTS `jt_lspe02s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Toca',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `field2299` VARCHAR(255) DEFAULT NULL COMMENT 'MATERIA',
  `field2300` DATETIME DEFAULT NULL COMMENT 'FECHA DE RESOLUCIÓN',
  `field2301` VARCHAR(255) DEFAULT NULL COMMENT 'SENTIDO DE RESOLUCIÓN',
  `field2302` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lspe02_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lspe03s`
--

#DROP TABLE IF EXISTS `jt_lspe03s`;
CREATE TABLE IF NOT EXISTS `jt_lspe03s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Toca',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `field2303` VARCHAR(255) DEFAULT NULL COMMENT 'MATERIA DE LA APELACIÓN',
  `field2304` DATETIME DEFAULT NULL COMMENT 'FECHA DE AUDIENCIA',
  `field2305` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIÓN',
  `field2306` VARCHAR(255) DEFAULT NULL COMMENT 'SENTIDO DE RESOLUCIÓN',
  `field2307` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lspe03_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lspe04s`
--

#DROP TABLE IF EXISTS `jt_lspe04s`;
CREATE TABLE IF NOT EXISTS `jt_lspe04s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Toca',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `field2308` VARCHAR(255) DEFAULT NULL COMMENT 'PENA POR CUMPLIR ',
  `field2309` VARCHAR(255) DEFAULT NULL COMMENT 'BENEFICIO PENITENCIARIO',
  `field2310` DATETIME DEFAULT NULL COMMENT 'FECHA DE RESOLUCIÓN',
  `field2311` VARCHAR(255) DEFAULT NULL COMMENT 'SENTIDO DE RESOLUCIÓN',
  `field2312` VARCHAR(255) DEFAULT NULL COMMENT 'PRESCRIPCIÓN DE LA PENA',
  `field2313` DATETIME DEFAULT NULL COMMENT 'FECHA DE REVOCACIÓN',
  `field2314` DATETIME DEFAULT NULL COMMENT 'FECHA DE CUMPLIMIENTO DE O/R ',
  `field2315` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lspe04_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lspe05s`
--

#DROP TABLE IF EXISTS `jt_lspe05s`;
CREATE TABLE IF NOT EXISTS `jt_lspe05s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Toca',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `field2316` VARCHAR(255) DEFAULT NULL COMMENT 'MOTIVO DEL DESISTIMIENTO',
  `field2317` VARCHAR(255) DEFAULT NULL COMMENT 'BENEFICIO PENITENCIARIO',
  `field2318` DATETIME DEFAULT NULL COMMENT 'FECHA DE DESISTIMIENTO',
  `field2319` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lspe05_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lspe06s`
--

#DROP TABLE IF EXISTS `jt_lspe06s`;
CREATE TABLE IF NOT EXISTS `jt_lspe06s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Toca',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `field2320` VARCHAR(255) DEFAULT NULL COMMENT 'No. DE ORDEN',
  `field2321` VARCHAR(255) DEFAULT NULL COMMENT 'FOJAS DEL EXPEDIENTE TOMAS Y DOCUMENTOS',
  `field2322` VARCHAR(255) DEFAULT NULL COMMENT 'FOLIO DE DEVOLUCIÓN',
  `field2323` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN AL ARCHIVO',
  `field2324` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lspe06_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lspe07s`
--

#DROP TABLE IF EXISTS `jt_lspe07s`;
CREATE TABLE IF NOT EXISTS `jt_lspe07s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Toca',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `field2325` VARCHAR(255) DEFAULT NULL COMMENT 'MOTIVO DE INGRESO DE FIANZA',
  `field2326` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO DE FINANZA',
  `field2327` DATETIME DEFAULT NULL COMMENT 'FECHA DE EXPEDICIÓN DE FIANZA',
  `field2328` DECIMAL(11,2) DEFAULT NULL COMMENT 'IMPORTE',
  `field2329` DATETIME DEFAULT NULL COMMENT 'FECHA DE CANCELACIÓN DE FIANZA ',
  `field2330` VARCHAR(255) DEFAULT NULL COMMENT 'MOTIVO DE CANCELACIÓN DE FIANZA',
  `field2331` VARCHAR(255) DEFAULT NULL COMMENT 'AFIANZADORA',
  `field2332` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE HACE EFECTIVA',
  `field2333` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lspe07_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lspe08s`
--

#DROP TABLE IF EXISTS `jt_lspe08s`;
CREATE TABLE IF NOT EXISTS `jt_lspe08s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Toca',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `billete` VARCHAR(45) DEFAULT NULL COMMENT 'No DE BILLETE',
  `field2334` VARCHAR(255) DEFAULT NULL COMMENT 'MOTIVO DE INGRESO DE BILLETE',
  `field2335` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO DE BILLETE',
  `field2336` DATETIME DEFAULT NULL COMMENT 'FECHA DE EXPEDICIÓN DE BILLETE ',
  `field2337` DECIMAL(11,2) DEFAULT NULL COMMENT 'IMPORTE',
  `field2338` DATETIME DEFAULT NULL COMMENT 'FECHA DE EGRESO DE BILLETE',
  `field2339` VARCHAR(255) DEFAULT NULL COMMENT 'MOTIVO DE EGRESO DE BILLETE',
  `field2340_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE RECIBE (isMoral)',
  `field2340_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE RECIBE (paterno)',
  `field2340_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBE (materno)',
  `field2340_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBE (nombre)',
  `field2341` INT(10) DEFAULT NULL COMMENT 'FIRMA DE QUIEN RECIBE ',
  `field2342` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lspe08_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_billete` (`billete`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsps01s`
--

#DROP TABLE IF EXISTS `jt_lsps01s`;
CREATE TABLE IF NOT EXISTS `jt_lsps01s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field2350` INT(10) DEFAULT NULL COMMENT 'CLASIFICACIÓN',
  `txt_field2351` VARCHAR(255) DEFAULT NULL COMMENT 'JUZGADO DE PROCEDENCIA',
  `txt_field2352` VARCHAR(255) DEFAULT NULL COMMENT 'MAGISTRADO PONENTE',
  `field2353` VARCHAR(255) DEFAULT NULL COMMENT 'SENTENCIA (SENTIDO)',
  `field2354` DATETIME DEFAULT NULL COMMENT 'FECHA',
  `field2355` VARCHAR(255) DEFAULT NULL COMMENT 'RESOLUTIVOS',
  `field2356` DATETIME DEFAULT NULL COMMENT 'FECHA DE RESOLUCIÓN',
  `field2357` DATETIME DEFAULT NULL COMMENT 'FECHA DE REMISIÓN DEL TESTIMONIO Y DEVOLUCIÓN DE LA CAUSA',
  `field2358` DATETIME DEFAULT NULL COMMENT 'FECHA DE ARCHIVO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsps01_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsc02s`
--

#DROP TABLE IF EXISTS `jt_lsc02s`;
CREATE TABLE IF NOT EXISTS `jt_lsc02s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field126` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL PROYECTISTA',
  `field130` INT(10) DEFAULT NULL COMMENT 'FIRMA DE ENTRADA',
  `field127` INT(10) DEFAULT NULL COMMENT 'FIRMA DE SALIDA',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsc02_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljc02s`
--

#DROP TABLE IF EXISTS `jt_ljc02s`;
CREATE TABLE IF NOT EXISTS `jt_ljc02s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE RECIBE EL DOCUMENTO',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE EXPIDE EL DOCUMENTO',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'REFERENCIA',
  `billete` VARCHAR(45) DEFAULT NULL COMMENT 'No. DEL DOCUMENTO',
  `field5` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO DEL DOCUMENTO',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'QUIEN LO EXPIDE',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc02_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_billete` (`billete`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljp02s`
--

#DROP TABLE IF EXISTS `jt_ljp02s`;
CREATE TABLE IF NOT EXISTS `jt_ljp02s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `billete` VARCHAR(45) DEFAULT NULL COMMENT 'No DE BILLETE',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE EXPIDE ',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE RECIBE ',
  `field5` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO ',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'MOTIVO',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'PROCEDENCIA',
  `field8` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljp02_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_billete` (`billete`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljccm02s`
--

#DROP TABLE IF EXISTS `jt_ljccm02s`;
CREATE TABLE IF NOT EXISTS `jt_ljccm02s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE ORDEN',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE RECIBE EL DOCUMENTO',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE EXPIDE EL DOCUMENTO',
  `billete` VARCHAR(45) DEFAULT NULL COMMENT 'No. DEL DOCUMENTO',
  `field13` VARCHAR(45) DEFAULT NULL COMMENT 'MOTIVO DE INGRESO',
  `field8` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO DEL DOCUMENTO',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'QUIEN LO EXPIDE',
  `field12` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljccm02_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_billete` (`billete`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpdng02s`
--

#DROP TABLE IF EXISTS `jt_ljpdng02s`;
CREATE TABLE IF NOT EXISTS `jt_ljpdng02s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `billete` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE BILLETE',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE EXPIDE EL BILLETE',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE RECIBE EL BILLETE',
  `field5` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO DEL BILLETE',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'PROCEDENCIA',
  `field8` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente extinto',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpdng02_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_billete` (`billete`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpes02s`
--

#DROP TABLE IF EXISTS `jt_ljpes02s`;
CREATE TABLE IF NOT EXISTS `jt_ljpes02s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA /HORA',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'PROMOVENTE',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'ASUNTO',
  `field5` INT(10) DEFAULT NULL COMMENT 'DEL SECRETARIO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpes02_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadng02s`
--

#DROP TABLE IF EXISTS `jt_ljjadng02s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadng02s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'PROMOVENTE',
  `field4` INT(10) DEFAULT NULL COMMENT 'DEL SECRETARIO DE ACUERDOS QUE RECIBE',
  `field5` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadng02_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadg02s`
--

#DROP TABLE IF EXISTS `jt_ljjadg02s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadg02s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'PROCEDENCIA',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'ASUNTO',
  `field7` INT(10) DEFAULT NULL COMMENT 'FUNCIÓN',
  `field5` INT(10) DEFAULT NULL COMMENT 'del Secretario de Acuerdos que recibe',
  `field6` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadg02_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsps02s`
--

#DROP TABLE IF EXISTS `jt_lsps02s`;
CREATE TABLE IF NOT EXISTS `jt_lsps02s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field2359` VARCHAR(255) DEFAULT NULL COMMENT 'UNIDAD DE GESTIÓN',
  `field2360` VARCHAR(45) DEFAULT NULL COMMENT 'CARPETA ADMINISTRATIVA',
  `field2361` VARCHAR(255) DEFAULT NULL COMMENT 'JUZGADOR',
  `field2362` VARCHAR(255) DEFAULT NULL COMMENT 'RESOLUCIÓN APELADA',
  `field2363` TINYINT(1) DEFAULT NULL COMMENT 'CON AUDIENCIA DE ALEGATOS ACLARATORIOS',
  `field2364` VARCHAR(255) DEFAULT NULL COMMENT 'DOCUMENTACIÓN RECIBIDA',
  `field2365` TINYINT(1) DEFAULT NULL COMMENT 'CON DETENIDO',
  `txt_field2366` VARCHAR(255) DEFAULT NULL COMMENT 'MAGISTRADO UNITARIO',
  `field2367` DATETIME DEFAULT NULL COMMENT 'FECHA SENT. SEG. INST.',
  `field2368` VARCHAR(255) DEFAULT NULL COMMENT 'RESOLUTIVOS',
  `field2369` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsps02_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lejemplos`
--

#DROP TABLE IF EXISTS `jt_lejemplos`;
CREATE TABLE IF NOT EXISTS `jt_lejemplos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `my_boolean` TINYINT(1) DEFAULT NULL COMMENT 'my boolean',
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
-- Table structure for table `jt_lsc03s`
--

#DROP TABLE IF EXISTS `jt_lsc03s`;
CREATE TABLE IF NOT EXISTS `jt_lsc03s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'NÚMERO DE TOCA',
  `field131` DATETIME DEFAULT NULL COMMENT 'FECHA',
  `field134` DATETIME DEFAULT NULL COMMENT 'FECHA DE FIRMA DEL M.P.',
  `field135_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DEL M.P. (isMoral)',
  `field135_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL M.P. (paterno)',
  `field135_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL M.P. (materno)',
  `field135_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL M.P. (nombre)',
  `field254` INT(10) DEFAULT NULL COMMENT 'FIRMA DEL M.P.',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsc03_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljc03s`
--

#DROP TABLE IF EXISTS `jt_ljc03s`;
CREATE TABLE IF NOT EXISTS `jt_ljc03s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field1_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'BENEFICIARIO (a. paterno)',
  `field1_materno` VARCHAR(45) DEFAULT NULL COMMENT 'BENEFICIARIO (a. materno)',
  `field1_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'BENEFICIARIO (nombre)',
  `field1_isMoral` TINYINT(1) DEFAULT NULL COMMENT 'BENEFICIARIO (es Moral)',
  `field1_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'BENEFICIARIO (isMoral)',
  `field1_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'BENEFICIARIO (paterno)',
  `field1_materno` VARCHAR(45) DEFAULT NULL COMMENT 'BENEFICIARIO (materno)',
  `field1_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'BENEFICIARIO (nombre)',
  `field2` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONALIDAD',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE RECIBE',
  `billete` VARCHAR(45) DEFAULT NULL COMMENT 'No DEL BILLETE',
  `field5` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO',
  `field6_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN RECIBE (a. paterno)',
  `field6_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN RECIBE (a. materno)',
  `field6_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN RECIBE (nombre)',
  `field6_isMoral` TINYINT(1) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN RECIBE (es Moral)',
  `field6_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DE QUIEN RECIBE (isMoral)',
  `field6_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN RECIBE (paterno)',
  `field6_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN RECIBE (materno)',
  `field6_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN RECIBE (nombre)',
  `field7` INT(10) DEFAULT NULL COMMENT 'DE QUIEN RECIBE',
  `field7h` INT(10) DEFAULT NULL COMMENT 'DE QUIEN RECIBE',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'DATOS DE IDENTIFICACIÓN',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `field11` INT(10) DEFAULT NULL COMMENT 'DEL JUEZ',
  `field12` INT(10) DEFAULT NULL COMMENT 'DEL SECRETARIO',
  `field13` VARCHAR(45) DEFAULT NULL COMMENT 'CONCEPTO',
  `field14` DATETIME DEFAULT NULL COMMENT 'FECHA  DEL AUTO QUE ORDENA LA DEVOLUCIÓN',
  `field15` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc03_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_billete` (`billete`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljccm03s`
--

#DROP TABLE IF EXISTS `jt_ljccm03s`;
CREATE TABLE IF NOT EXISTS `jt_ljccm03s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `billete` VARCHAR(45) DEFAULT NULL COMMENT 'No DEL DOCUMENTO',
  `field6` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO DEL DOCUMENTO',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE ORDEN DE INGRESO',
  `field8_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DE QUIEN RECIBE (isMoral)',
  `field8_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN RECIBE (paterno)',
  `field8_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN RECIBE (materno)',
  `field8_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN RECIBE (nombre)',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'IDENTIFICACION',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE RECIBE',
  `field11` INT(10) DEFAULT NULL COMMENT 'FIRMA DE QUIEN RECIBE',
  `field11h` INT(10) DEFAULT NULL COMMENT 'HUELLA DE QUIEN RECIBE',
  `field13` INT(10) DEFAULT NULL COMMENT 'DEL JUEZ',
  `field15` INT(10) DEFAULT NULL COMMENT 'DEL SECRETARIO',
  `field16` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljccm03_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_billete` (`billete`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljoc03s`
--

#DROP TABLE IF EXISTS `jt_ljoc03s`;
CREATE TABLE IF NOT EXISTS `jt_ljoc03s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljoc03_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpdng03s`
--

#DROP TABLE IF EXISTS `jt_ljpdng03s`;
CREATE TABLE IF NOT EXISTS `jt_ljpdng03s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `billete` VARCHAR(45) DEFAULT NULL COMMENT 'No DE BILLETE',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE EXPIDE EL BILLETE',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA',
  `field5` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO DEL BILLETE',
  `field6_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE A QUIEN SE ENTREGA (isMoral)',
  `field6_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE A QUIEN SE ENTREGA (paterno)',
  `field6_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE A QUIEN SE ENTREGA (materno)',
  `field6_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE A QUIEN SE ENTREGA (nombre)',
  `field7` INT(10) DEFAULT NULL COMMENT 'FIRMA DE QUIEN RECIBE',
  `field7h` INT(10) DEFAULT NULL COMMENT 'HUELLA DE QUIEN RECIBE',
  `field8` INT(10) DEFAULT NULL COMMENT 'DEL JUEZ',
  `field9` INT(10) DEFAULT NULL COMMENT 'DEL SECRETARIO',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA DE ACUERDO',
  `field11` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente extinto',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpdng03_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_billete` (`billete`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpes03s`
--

#DROP TABLE IF EXISTS `jt_ljpes03s`;
CREATE TABLE IF NOT EXISTS `jt_ljpes03s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(255) DEFAULT NULL COMMENT 'SENTENCIADO',
  `field2` VARCHAR(255) DEFAULT NULL COMMENT 'DELITO(S)',
  `field14` VARCHAR(255) DEFAULT NULL COMMENT 'APELANTE',
  `field4` VARCHAR(255) DEFAULT NULL COMMENT 'RESOLUCIÓN RECURRIDA',
  `field5` DATETIME DEFAULT NULL COMMENT 'AUTO ADMISORIO',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'OFICIO DE REMISIÓN A LA SALA',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE REMISIÓN A LA SALA',
  `field15` VARCHAR(45) DEFAULT NULL COMMENT 'TOCA',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'SALA',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN AL JUZGADO',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE RESOLUCIÓN A LA SALA',
  `field12` VARCHAR(255) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN',
  `field16` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpes03_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadng03s`
--

#DROP TABLE IF EXISTS `jt_ljjadng03s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadng03s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'FECHA Y HORA DE LA AUDIENCIA',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE AUDIENCIA',
  `field4` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadng03_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadg03s`
--

#DROP TABLE IF EXISTS `jt_ljjadg03s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadg03s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `billete` VARCHAR(45) DEFAULT NULL COMMENT 'NO. DE BILLETE',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE EXPIDE',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'NATURALEZA DE LA GARANTÍA',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE RECIBE',
  `field5` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO',
  `field6_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DEL DEPOSITANTE (isMoral)',
  `field6_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL DEPOSITANTE (paterno)',
  `field6_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL DEPOSITANTE (materno)',
  `field6_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL DEPOSITANTE (nombre)',
  `field7` VARCHAR(255) DEFAULT NULL COMMENT 'A DISPOSICION DE',
  `field8` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadg03_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_billete` (`billete`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsps03s`
--

#DROP TABLE IF EXISTS `jt_lsps03s`;
CREATE TABLE IF NOT EXISTS `jt_lsps03s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field2370` VARCHAR(255) DEFAULT NULL COMMENT 'UNIDAD DE GESTIÓN',
  `field2371` VARCHAR(45) DEFAULT NULL COMMENT 'CARPETA ADMINISTRATIVA',
  `field2372` VARCHAR(255) DEFAULT NULL COMMENT 'JUZGADOR',
  `field2373` VARCHAR(255) DEFAULT NULL COMMENT 'RESOLUCIÓN APELADA',
  `field2374` TINYINT(1) DEFAULT NULL COMMENT 'CON AUDIENCIA DE ALEGATOS ACLARATORIOS',
  `field2375` TEXT DEFAULT NULL COMMENT 'DOCUMENTACIÓN RECIBIDA',
  `field2376` TINYINT(1) DEFAULT NULL COMMENT 'CON DETENIDO',
  `field2377` VARCHAR(255) DEFAULT NULL COMMENT 'MAGISTRADO RELATOR',
  `field2378` DATETIME DEFAULT NULL COMMENT 'FECHA SENT. SEG. INST.',
  `field2379` VARCHAR(255) DEFAULT NULL COMMENT 'RESOLUTIVOS',
  `field2380` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsps03_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsc04s`
--

#DROP TABLE IF EXISTS `jt_lsc04s`;
CREATE TABLE IF NOT EXISTS `jt_lsc04s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'TOCA',
  `field137` VARCHAR(45) DEFAULT NULL COMMENT 'EXPEDIENTE PRINCIPAL',
  `field139` VARCHAR(45) DEFAULT NULL COMMENT 'MONTO DE LA MULTA',
  `field140` DATETIME DEFAULT NULL COMMENT 'FECHA DE RESOLUCIÓN EN DONDE SE IMPONE',
  `field141_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DE LA PERSONA A QUIÉN SE DECRETA (isMoral)',
  `field141_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A QUIÉN SE DECRETA (paterno)',
  `field141_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A QUIÉN SE DECRETA (materno)',
  `field141_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A QUIÉN SE DECRETA (nombre)',
  `field142` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DEL OFICIO',
  `field250` DATETIME DEFAULT NULL COMMENT 'FECHA DEL OFICIO',
  `field143` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsc04_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljc04s`
--

#DROP TABLE IF EXISTS `jt_ljc04s`;
CREATE TABLE IF NOT EXISTS `jt_ljc04s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field1` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field2` VARCHAR(45) DEFAULT NULL COMMENT 'OCURSANTE',
  `field7` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc04_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf04s`
--

#DROP TABLE IF EXISTS `jt_ljf04s`;
CREATE TABLE IF NOT EXISTS `jt_ljf04s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN',
  `field5_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PROMOVENTE (isMoral)',
  `field5_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PROMOVENTE (paterno)',
  `field5_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PROMOVENTE (materno)',
  `field5_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PROMOVENTE (nombre)',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'ANEXOS',
  `field8` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf04_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljp04s`
--

#DROP TABLE IF EXISTS `jt_ljp04s`;
CREATE TABLE IF NOT EXISTS `jt_ljp04s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'PROMOVENTE',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'ASUNTO',
  `field5` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljp04_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljoc04s`
--

#DROP TABLE IF EXISTS `jt_ljoc04s`;
CREATE TABLE IF NOT EXISTS `jt_ljoc04s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN',
  `field6` TEXT DEFAULT NULL COMMENT 'DOCUMENTOS QUE SE ANEXAN',
  `field7` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljoc04_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpdng04s`
--

#DROP TABLE IF EXISTS `jt_ljpdng04s`;
CREATE TABLE IF NOT EXISTS `jt_ljpdng04s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'OCURSANTE',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'ASUNTO',
  `field5` INT(10) DEFAULT NULL COMMENT 'DEL SECRETARIO',
  `field6` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente extinto',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpdng04_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpes04s`
--

#DROP TABLE IF EXISTS `jt_ljpes04s`;
CREATE TABLE IF NOT EXISTS `jt_ljpes04s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'No DE EXP',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA',
  `txt_field1219` VARCHAR(255) DEFAULT NULL COMMENT 'DESTINATARIO',
  `id_field1219` INT(10) DEFAULT NULL COMMENT 'DESTINATARIO',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'ASUNTO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpes04_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadng04s`
--

#DROP TABLE IF EXISTS `jt_ljjadng04s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadng04s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'ADOLESCENTE  (isMoral)',
  `field2_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'ADOLESCENTE  (paterno)',
  `field2_materno` VARCHAR(45) DEFAULT NULL COMMENT 'ADOLESCENTE  (materno)',
  `field2_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'ADOLESCENTE  (nombre)',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA SENTENCIA',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA SENTENCIA',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENGROSE DE LA SENTENCIA',
  `field6` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadng04_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadg04s`
--

#DROP TABLE IF EXISTS `jt_ljjadg04s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadg04s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field12` TEXT DEFAULT NULL COMMENT 'NOMBRES DEL ADOLESCENTE',
  `billete` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE BILLETE',
  `field4` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'ORDEN DE PAGO o TRANSFERENCIA',
  `field8` INT(10) DEFAULT NULL COMMENT 'FIRMA DE RECEPCION',
  `field8h` INT(10) DEFAULT NULL COMMENT 'HUELLA DE RECEPCION',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'IDENTIFICACIÓN U OFICIO',
  `field10` INT(10) DEFAULT NULL COMMENT 'DEL SECRETARIO',
  `field11` INT(10) DEFAULT NULL COMMENT 'DEL JUEZ',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadg04_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_billete` (`billete`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsps04s`
--

#DROP TABLE IF EXISTS `jt_lsps04s`;
CREATE TABLE IF NOT EXISTS `jt_lsps04s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field2381` VARCHAR(255) DEFAULT NULL COMMENT 'DESTINATARIO',
  `field2382` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA',
  `field2383_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DEL ACTUARIO (isMoral)',
  `field2383_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL ACTUARIO (paterno)',
  `field2383_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL ACTUARIO (materno)',
  `field2383_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL ACTUARIO (nombre)',
  `field2384` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO POR DELIGENCIAR',
  `field2385` DATETIME DEFAULT NULL COMMENT 'FECHA DE DILIGENCIA',
  `field2386` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field2387_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE  DE QUIEN RECIBE LA DEVOLUCIÓN (isMoral)',
  `field2387_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE  DE QUIEN RECIBE LA DEVOLUCIÓN (paterno)',
  `field2387_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE  DE QUIEN RECIBE LA DEVOLUCIÓN (materno)',
  `field2387_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE  DE QUIEN RECIBE LA DEVOLUCIÓN (nombre)',
  `field2388` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsps04_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsc05s`
--

#DROP TABLE IF EXISTS `jt_lsc05s`;
CREATE TABLE IF NOT EXISTS `jt_lsc05s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'TOCA',
  `field146` VARCHAR(45) DEFAULT NULL COMMENT 'EXPEDIENTE',
  `faudiencia` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA DILIGENCIA',
  `field148` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE DILIGENCIA',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsc05_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljc05s`
--

#DROP TABLE IF EXISTS `jt_ljc05s`;
CREATE TABLE IF NOT EXISTS `jt_ljc05s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field2` INT(10) DEFAULT NULL COMMENT 'NÚMERO DE FOJAS',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE CITACIÓN',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA PUBLICACIÓN DE LA CITACIÓN',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE SENTENCIA',
  `field9` TINYINT(1) DEFAULT NULL COMMENT 'SE DEJA SIN EFECTOS',
  `field10` INT(10) DEFAULT NULL COMMENT 'TIPO DE SENTENCIA',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE PUBLICACIÓN BOLETÍN JUDICIAL',
  `field12` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc05_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf05s`
--

#DROP TABLE IF EXISTS `jt_ljf05s`;
CREATE TABLE IF NOT EXISTS `jt_ljf05s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE CITACIÓN ',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA PUBLICACIÓN EN BOLETÍN',
  `field8` TINYINT(1) DEFAULT NULL COMMENT 'SE DEJA SIN EFECTOS LA CITACIÓN',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE SENTENCIA',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE SENTENCIA',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA DE BOLETÍN JUDICIAL',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'NUM. DE BOLETÍN JUDICIAL',
  `field13` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf05_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljp05s`
--

#DROP TABLE IF EXISTS `jt_ljp05s`;
CREATE TABLE IF NOT EXISTS `jt_ljp05s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'ACUSADO (isMoral)',
  `field2_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'ACUSADO (paterno)',
  `field2_materno` VARCHAR(45) DEFAULT NULL COMMENT 'ACUSADO (materno)',
  `field2_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'ACUSADO (nombre)',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'PROCEDIMIENTO',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE AUDIENCIA DE VISTA O CONCLUSIONES VERBALES',
  `field5` INT(10) DEFAULT NULL COMMENT 'No. DE FOJAS',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE TURNO AL PROYECTISTA',
  `field7` INT(10) DEFAULT NULL COMMENT 'DEL PROYECTISTA',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE VENCIMIENTO DE LA SENTENCIA',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE SENTENCIA',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN',
  `field10` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `field12` VARCHAR(255) DEFAULT NULL COMMENT 'DELITO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljp05_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljccm05s`
--

#DROP TABLE IF EXISTS `jt_ljccm05s`;
CREATE TABLE IF NOT EXISTS `jt_ljccm05s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` INT(10) DEFAULT NULL COMMENT 'NÚMERO DE FOJAS',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE CITACIÓN',
  `field9` TINYINT(1) DEFAULT NULL COMMENT 'SE DEJA SIN EFECTOS',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA PUBLICACIÓN DE LA CITACIÓN',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE SENTENCIA',
  `field10` INT(10) DEFAULT NULL COMMENT 'TIPO DE SENTENCIA',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE PUBLICACIÓN BOLETÍN JUDICIAL',
  `field12` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljccm05_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljoc05s`
--

#DROP TABLE IF EXISTS `jt_ljoc05s`;
CREATE TABLE IF NOT EXISTS `jt_ljoc05s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field8` INT(10) DEFAULT NULL COMMENT 'TIPO DE SENTENCIA',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE CITACIÓN',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE TURNO DE SENTENCIA',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE SENTENCIA',
  `field9` VARCHAR(255) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA DE PUBLICACIÓN',
  `field11` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljoc05_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpdng05s`
--

#DROP TABLE IF EXISTS `jt_ljpdng05s`;
CREATE TABLE IF NOT EXISTS `jt_ljpdng05s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE CONCLUSIONES',
  `field5` INT(10) DEFAULT NULL COMMENT 'No DE FOJAS',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA SENTENCIA',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN',
  `field8` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente extinto',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpdng05_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpes05s`
--

#DROP TABLE IF EXISTS `jt_ljpes05s`;
CREATE TABLE IF NOT EXISTS `jt_ljpes05s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'AUTO A DILIGENCIAR',
  `field4_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE (isMoral)',
  `field4_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE (paterno)',
  `field4_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE (materno)',
  `field4_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE (nombre)',
  `field5` TEXT DEFAULT NULL COMMENT 'DOMICILIO ',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA DE CEDULAS',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN DE CEDULA AL JUZGADO',
  `field8` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpes05_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadng05s`
--

#DROP TABLE IF EXISTS `jt_ljjadng05s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadng05s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` VARCHAR(255) DEFAULT NULL COMMENT 'APELANTE(S)',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIÓN APELADA',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO ADMISORIO',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'EFECTO ADMISORIO',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE REMISIÓN A SALA',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE OFICIO DE REMISIÓN',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE TOCA',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIÓN DE SALA',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN',
  `field12` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN DE LA RESOLUCIÓN DE SALA',
  `field7` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadng05_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadg05s`
--

#DROP TABLE IF EXISTS `jt_ljjadg05s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadg05s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field10` INT(10) DEFAULT NULL COMMENT 'DEL PROYECTISTA',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadg05_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsps05s`
--

#DROP TABLE IF EXISTS `jt_lsps05s`;
CREATE TABLE IF NOT EXISTS `jt_lsps05s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field2389` VARCHAR(45) DEFAULT NULL COMMENT 'NO. DE AMPARO',
  `field2390` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE AMPARO',
  `field2391_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'QUEJOSO (isMoral)',
  `field2391_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'QUEJOSO (paterno)',
  `field2391_materno` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (materno)',
  `field2391_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (nombre)',
  `field2392` VARCHAR(255) DEFAULT NULL COMMENT 'ORGANO DE PROCEDENCIA',
  `field2393` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO',
  `field2394` VARCHAR(255) DEFAULT NULL COMMENT 'INFORME SOLICITADO',
  `field2395` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENVIO DEL INFORME',
  `field2396` VARCHAR(255) DEFAULT NULL COMMENT 'SENTIDO DE RESOLUCIÓN DE AMPARO',
  `field2397` VARCHAR(255) DEFAULT NULL COMMENT 'RESOLUCIÓN DE AMPARO',
  `field2398` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsps05_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsc06s`
--

#DROP TABLE IF EXISTS `jt_lsc06s`;
CREATE TABLE IF NOT EXISTS `jt_lsc06s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Toca',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field149` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE ORDEN',
  `field150` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTRADA',
  `field151` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DEL CERTIFICADO',
  `field152` DATETIME DEFAULT NULL COMMENT 'FECHA DE EXPEDICIÓN',
  `field153` DECIMAL(11,2) DEFAULT NULL COMMENT 'IMPORTE',
  `field154` VARCHAR(45) DEFAULT NULL COMMENT 'EXPEDIDOR',
  `field155_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'BENEFICIARIO (isMoral)',
  `field155_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'BENEFICIARIO (paterno)',
  `field155_materno` VARCHAR(45) DEFAULT NULL COMMENT 'BENEFICIARIO (materno)',
  `field155_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'BENEFICIARIO (nombre)',
  `field157` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field158_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'A QUIÉN SE DEVUELVE (isMoral)',
  `field158_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'A QUIÉN SE DEVUELVE (paterno)',
  `field158_materno` VARCHAR(45) DEFAULT NULL COMMENT 'A QUIÉN SE DEVUELVE (materno)',
  `field158_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'A QUIÉN SE DEVUELVE (nombre)',
  `field160` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `field159` INT(10) DEFAULT NULL COMMENT 'FIRMA  ',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsc06_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljc06s`
--

#DROP TABLE IF EXISTS `jt_ljc06s`;
CREATE TABLE IF NOT EXISTS `jt_ljc06s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field17` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE INTERPUSO LA APELACIÓN',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE RESOLUCIÓN  APELADA',
  `field16` VARCHAR(45) DEFAULT NULL COMMENT 'EFECTOS',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO ADMISORIO',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE CONTESTACIÓN DE AGRAVIOS O REBELDÍA',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE REMISIÓN A  LA SALA',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE OFICIO DE REMISIÓN',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN DE LA SALA',
  `field12` TINYINT(1) DEFAULT NULL COMMENT 'PREVENTIVA',
  `field13` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field14` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO EN QUE RESUELVE LA SALA',
  `field15` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc06_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf06s`
--

#DROP TABLE IF EXISTS `jt_ljf06s`;
CREATE TABLE IF NOT EXISTS `jt_ljf06s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field16` VARCHAR(45) DEFAULT NULL COMMENT 'RECURRENTE',
  `field15` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE INTERPUSO LA APELACIÓN',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA RESOLUCIÓN APELADA',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE RESOLUCIÓN APELADA',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO ADMISORIO',
  `field18` VARCHAR(255) DEFAULT NULL COMMENT 'EFECTO EN QUE SE ADMITE',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE CONTESTACIÓN DE AGRAVIOS O REBELDÍA',
  `field17` INT(10) DEFAULT NULL COMMENT 'SALA A LA QUE SE TURNÓ EL RECURSO',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DEL OFICIO A LA SALA',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'NUM. DEL OFICIO A LA SALA',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE REMISIÓN A LA SALA',
  `field12` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN EN LA SALA',
  `field13` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field14` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO EN QUE RESUELVE LA SALA',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf06_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljp06s`
--

#DROP TABLE IF EXISTS `jt_ljp06s`;
CREATE TABLE IF NOT EXISTS `jt_ljp06s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` VARCHAR(255) DEFAULT NULL COMMENT 'RECURRENTE',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA  DE LA RESOLUCIÓN APELADA',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE IMPUGNA',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE ADMITE',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DEL OFICIO DE REMISIÓN A LA SALA',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'SALA ASIGNADA',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN EN LA SALA',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE TOCA',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO EN QUE RESUELVE LA SALA',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljp06_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljccm06s`
--

#DROP TABLE IF EXISTS `jt_ljccm06s`;
CREATE TABLE IF NOT EXISTS `jt_ljccm06s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE RESOLUCIÓN  APELADA',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO ADMISORIO',
  `field16` INT(10) DEFAULT NULL COMMENT 'EFECTOS',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE CONTESTACIÓN DE AGRAVIOS O REBELDÍA',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE REMISIÓN A  LA SALA',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE OFICIO DE REMISIÓN',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN DE LA SALA',
  `field12` INT(10) DEFAULT NULL COMMENT 'TIPO DE APELACION',
  `field13` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field14` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO EN QUE RESUELVE LA SALA',
  `field15` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljccm06_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljoc06s`
--

#DROP TABLE IF EXISTS `jt_ljoc06s`;
CREATE TABLE IF NOT EXISTS `jt_ljoc06s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field4` INT(10) DEFAULT NULL COMMENT 'TIPO DE JUICIO',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'OFICIO DE LA AUTORIDAD EXHORTANTE',
  `field7` VARCHAR(255) DEFAULT NULL COMMENT 'AUTORIDAD EXHORTANTE',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'AUTO QUE LO PROVEE',
  `field9` VARCHAR(255) DEFAULT NULL COMMENT 'DILIGENCIA ENCOMENDADA',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA DE DILIGENCIACIÓN',
  `field11` INT(10) DEFAULT NULL COMMENT 'DEVUELTOS',
  `field12` VARCHAR(45) DEFAULT NULL COMMENT 'No DE OFICIO DE DEVOLUCIÓN',
  `field13` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field14` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljoc06_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpdng06s`
--

#DROP TABLE IF EXISTS `jt_ljpdng06s`;
CREATE TABLE IF NOT EXISTS `jt_ljpdng06s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO(S)',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'RECURRENTES(S)',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'RESOLUCIÓN APELADA',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIÓN APELADA',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE IMPUGNA',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO ADMISORIO',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO EN QUE SE ADMITE',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN OFICIALIA DE PARTES COMÚN',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN EN SALA',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'No DE SALA',
  `field12` VARCHAR(45) DEFAULT NULL COMMENT 'No DE TOCA',
  `field13` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN DE LA RESOLUCIÓN DE LA SALA',
  `field14` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO EN QUE RESUELVE LA SALA',
  `field15` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente extinto',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpdng06_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpes06s`
--

#DROP TABLE IF EXISTS `jt_ljpes06s`;
CREATE TABLE IF NOT EXISTS `jt_ljpes06s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE AMPARO',
  `field4_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'QUEJOSO (isMoral)',
  `field4_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'QUEJOSO (paterno)',
  `field4_materno` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (materno)',
  `field4_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (nombre)',
  `txt_field1233` VARCHAR(255) DEFAULT NULL COMMENT 'JUZGADO',
  `id_field1233` INT(10) DEFAULT NULL COMMENT 'JUZGADO',
  `field6` VARCHAR(255) DEFAULT NULL COMMENT 'ACTO RECLAMADO',
  `field7` VARCHAR(255) DEFAULT NULL COMMENT 'EJECUTORIA AUTORIDAD FEDERAL',
  `field8` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpes06_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadng06s`
--

#DROP TABLE IF EXISTS `jt_ljjadng06s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadng06s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE EXHORTO',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'AUTORIDAD EXHORTANTE',
  `field4` TEXT DEFAULT NULL COMMENT 'DILIGENCIA ENCOMENDADA',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'RESULTADO DE LA DILIGENCIA',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE OFICIO DE DEVOLUCIÓN',
  `field7` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadng06_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadg06s`
--

#DROP TABLE IF EXISTS `jt_ljjadg06s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadg06s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` VARCHAR(45) DEFAULT NULL COMMENT 'RECURRENTE',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE RESOLUCIÓN APELADA',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIÓN APELADA',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE IMPUGNA',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE ADMITE',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DEL OFICIO DE REMISIÓN A LA SALA',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN EN LA SALA',
  `field10` VARCHAR(255) DEFAULT NULL COMMENT 'SENTIDO EN QUE RESUELVE LA SALA',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'SALA ASIGNADA',
  `field12` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE TOCA',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadg06_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsps06s`
--

#DROP TABLE IF EXISTS `jt_lsps06s`;
CREATE TABLE IF NOT EXISTS `jt_lsps06s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field2399` VARCHAR(45) DEFAULT NULL COMMENT 'CAUSA',
  `field2400` VARCHAR(255) DEFAULT NULL COMMENT 'LUGAR DE RECLUSIÓN',
  `field2401` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE LA DILIGENCIA',
  `field2402` VARCHAR(45) DEFAULT NULL COMMENT 'NO. DE OFICIO',
  `field2403` VARCHAR(45) DEFAULT NULL COMMENT 'MOTIVO DE LA SOLICITUD',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsps06_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsc07s`
--

#DROP TABLE IF EXISTS `jt_lsc07s`;
CREATE TABLE IF NOT EXISTS `jt_lsc07s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Toca',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field162` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE FOLIO',
  `field163` VARCHAR(45) DEFAULT NULL COMMENT 'SECRETARÍA',
  `field164_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE (isMoral)',
  `field164_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE (paterno)',
  `field164_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE (materno)',
  `field164_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE (nombre)',
  `field165` VARCHAR(45) DEFAULT NULL COMMENT 'CARÁCTER (ACTOR, DEMANDADO ETC)',
  `field166` VARCHAR(45) DEFAULT NULL COMMENT 'JUEZ O MAGISTRADO',
  `field167_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DEL JUEZ O MAGISTRADO (isMoral)',
  `field167_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL JUEZ O MAGISTRADO (paterno)',
  `field167_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL JUEZ O MAGISTRADO (materno)',
  `field167_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL JUEZ O MAGISTRADO (nombre)',
  `billete` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE BILLETE DE DEPÓSITO',
  `field169` DECIMAL(11,2) DEFAULT NULL COMMENT 'CANTIDAD EN NÚMERO',
  `field169b` VARCHAR(255) DEFAULT NULL COMMENT 'CANTIDAD EN LETRA',
  `field170` VARCHAR(45) DEFAULT NULL COMMENT 'ASIENTO DE CAJA FOLIO',
  `field171` DATETIME DEFAULT NULL COMMENT 'FECHA',
  `field172` INT(10) DEFAULT NULL COMMENT 'FIRMA  ',
  `field173` INT(10) DEFAULT NULL COMMENT 'DE PRESIDENTE DE SALA',
  `field174` INT(10) DEFAULT NULL COMMENT 'DE SECRETARIA DE ACUERDOS',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsc07_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_billete` (`billete`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljc07s`
--

#DROP TABLE IF EXISTS `jt_ljc07s`;
CREATE TABLE IF NOT EXISTS `jt_ljc07s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE EXHORTO',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTRADA',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'AUTORIDAD EXHORTANTE',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'AUTO DE RADICACIÓN',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'DILIGENCIA ENCOMENDADA',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE DILIGENCIACIÓN',
  `field10` TINYINT(1) DEFAULT NULL COMMENT 'SE CUMPLIMENTÓ',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field12` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE OFICIO DE DEVOLUCIÓN',
  `field13` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc07_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf07s`
--

#DROP TABLE IF EXISTS `jt_ljf07s`;
CREATE TABLE IF NOT EXISTS `jt_ljf07s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE EXHORTO',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTRADA',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'AUTORIDAD EXHORTANTE',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'DILIGENCIA ENCOMENDADA',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE DILIGENCIACIÓN',
  `txt_field1967` VARCHAR(255) DEFAULT NULL COMMENT 'SE CUMPLIMENTÓ',
  `id_field1967` INT(10) DEFAULT NULL COMMENT 'SE CUMPLIMENTÓ',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field11` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf07_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljccm07s`
--

#DROP TABLE IF EXISTS `jt_ljccm07s`;
CREATE TABLE IF NOT EXISTS `jt_ljccm07s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE EXHORTO',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTRADA',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'AUTORIDAD EXHORTANTE',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'AUTO DE RADICACIÓN',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field12` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE OFICIO DE DEVOLUCIÓN',
  `field13` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljccm07_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljoc07s`
--

#DROP TABLE IF EXISTS `jt_ljoc07s`;
CREATE TABLE IF NOT EXISTS `jt_ljoc07s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DEL OFICIO',
  `field6` VARCHAR(255) DEFAULT NULL COMMENT 'DESTINATARIO',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE REGISTRO',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'ASUNTO',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA',
  `field10` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'No DE OFICIO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljoc07_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpdng07s`
--

#DROP TABLE IF EXISTS `jt_ljpdng07s`;
CREATE TABLE IF NOT EXISTS `jt_ljpdng07s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'No DE EXHORTO',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTRADA',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'AUTORIDAD EXHORTANTE',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'DILIGENCIA ENCOMENDADA',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DEL AUTO QUE RECAE',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA DILIGENCIA',
  `field9` TINYINT(1) DEFAULT NULL COMMENT 'SE CUMPLIMENTO',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'No DE OFICIO DE DEVOLUCIÓN',
  `field12` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente extinto',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpdng07_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpes07s`
--

#DROP TABLE IF EXISTS `jt_ljpes07s`;
CREATE TABLE IF NOT EXISTS `jt_ljpes07s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN',
  `field2` VARCHAR(45) DEFAULT NULL COMMENT 'No DE AMPARO',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'JUZGADO FEDERAL',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpes07_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadng07s`
--

#DROP TABLE IF EXISTS `jt_ljjadng07s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadng07s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` DATETIME DEFAULT NULL COMMENT 'FECHA DEL OFICIO',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'DESTINATARIO',
  `field4` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadng07_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsps07s`
--

#DROP TABLE IF EXISTS `jt_lsps07s`;
CREATE TABLE IF NOT EXISTS `jt_lsps07s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `billete` VARCHAR(45) DEFAULT NULL COMMENT 'NO. DE BILLETE',
  `field2405` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE EXPIDE',
  `field2406` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE RECIBE',
  `field2407` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO',
  `field2408_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DE QUIEN DEPOSITA (isMoral)',
  `field2408_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN DEPOSITA (paterno)',
  `field2408_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN DEPOSITA (materno)',
  `field2408_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN DEPOSITA (nombre)',
  `field2409` VARCHAR(45) DEFAULT NULL COMMENT 'MOTIVO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsps07_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsc08s`
--

#DROP TABLE IF EXISTS `jt_lsc08s`;
CREATE TABLE IF NOT EXISTS `jt_lsc08s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field177` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTRADA',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'TOCA',
  `billete` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE CERTIFICADO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsc08_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_billete` (`billete`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljc08s`
--

#DROP TABLE IF EXISTS `jt_ljc08s`;
CREATE TABLE IF NOT EXISTS `jt_ljc08s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DEL OFICIO',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE OFICIO',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'ASUNTO',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc08_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf08s`
--

#DROP TABLE IF EXISTS `jt_ljf08s`;
CREATE TABLE IF NOT EXISTS `jt_ljf08s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE OFICIO',
  `field6` TEXT DEFAULT NULL COMMENT 'DESTINATARIOS',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DEL OFICIO',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf08_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljp08s`
--

#DROP TABLE IF EXISTS `jt_ljp08s`;
CREATE TABLE IF NOT EXISTS `jt_ljp08s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE PARTIDA DEL JUZGADO DE ORIGEN',
  `field2` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE PARTIDA',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTRADA',
  `field4` VARCHAR(255) DEFAULT NULL COMMENT 'AUTORIDAD EXHORTANTE',
  `field5` TEXT DEFAULT NULL COMMENT 'DILIGENCIA ENCOMENDADA',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DEL DESPACHO',
  `txt_field1975` VARCHAR(255) DEFAULT NULL COMMENT 'SE CUMPLIMENTÓ',
  `id_field1975` INT(10) DEFAULT NULL COMMENT 'SE CUMPLIMENTÓ',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE OFICIO DE DEVOLUCIÓN',
  `field10` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljp08_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljccm08s`
--

#DROP TABLE IF EXISTS `jt_ljccm08s`;
CREATE TABLE IF NOT EXISTS `jt_ljccm08s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE OFICIO',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DEL OFICIO',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'ASUNTO',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljccm08_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljoc08s`
--

#DROP TABLE IF EXISTS `jt_ljoc08s`;
CREATE TABLE IF NOT EXISTS `jt_ljoc08s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` INT(10) DEFAULT NULL COMMENT 'No. DE CUADERNOS',
  `field6` INT(10) DEFAULT NULL COMMENT 'No. DE CEDULAS',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA AL ACTUARIO',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO POR DILIGENCIAR',
  `field9` TEXT DEFAULT NULL COMMENT 'LUGAR DONDE DEBE ACTUARSE',
  `field10` INT(10) DEFAULT NULL COMMENT 'TIPO DE DILIGENCIA ORDENADA',
  `field15` TINYINT(1) DEFAULT NULL COMMENT 'SE CUMPLIÓ CON LA DILIGENCIA',
  `field14` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA DILIGENCIA',
  `field12` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA DEVOLUCIÓN',
  `field13` INT(10) DEFAULT NULL COMMENT 'LANZAMIENTOS',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljoc08_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpdng08s`
--

#DROP TABLE IF EXISTS `jt_ljpdng08s`;
CREATE TABLE IF NOT EXISTS `jt_ljpdng08s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'No. OFICIO',
  `field2` VARCHAR(45) DEFAULT NULL COMMENT 'DESTINATARIO',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA DE OFICIO',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'ASUNTO ',
  `field7` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente extinto',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpdng08_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpes08s`
--

#DROP TABLE IF EXISTS `jt_ljpes08s`;
CREATE TABLE IF NOT EXISTS `jt_ljpes08s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA DE PEDIMENTO',
  `field4` VARCHAR(255) DEFAULT NULL COMMENT 'CENTRO DE RECLUSIÓN',
  `field5` VARCHAR(255) DEFAULT NULL COMMENT 'CAUSA O MOTIVO DEL PEDIMENTO',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE PRESENTACIÓN DEL O LOS SENTENCIADOS',
  `field7` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpes08_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadng08s`
--

#DROP TABLE IF EXISTS `jt_ljjadng08s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadng08s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE AMPARO',
  `field3` INT(10) DEFAULT NULL COMMENT 'TIPO DE AMPARO',
  `field4_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'QUEJOSO (isMoral)',
  `field4_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'QUEJOSO (paterno)',
  `field4_materno` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (materno)',
  `field4_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (nombre)',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'ACTO RECLAMADO',
  `field6` VARCHAR(255) DEFAULT NULL COMMENT 'AUTORIDAD DE AMPARO',
  `field7` VARCHAR(255) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN ',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE EJECUTORIA',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadng08_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsc14s`
--

#DROP TABLE IF EXISTS `jt_lsc14s`;
CREATE TABLE IF NOT EXISTS `jt_lsc14s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Toca',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `billete` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE PÓLIZA',
  `field267` DECIMAL(11,2) DEFAULT NULL COMMENT 'IMPORTE',
  `field183` DATETIME DEFAULT NULL COMMENT 'FECHA DE EGRESO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsc14_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_billete` (`billete`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsps08s`
--

#DROP TABLE IF EXISTS `jt_lsps08s`;
CREATE TABLE IF NOT EXISTS `jt_lsps08s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field2411` DATETIME DEFAULT NULL COMMENT 'FECHA DE AUDIENCIA DE VISTA',
  `field2412` VARCHAR(45) DEFAULT NULL COMMENT 'NO. DE FOJAS',
  `field2413` DATETIME DEFAULT NULL COMMENT 'FECHA DE TURNO AL PROYECTISTA',
  `field2414_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DEL PROYECTISTA (isMoral)',
  `field2414_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL PROYECTISTA (paterno)',
  `field2414_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL PROYECTISTA (materno)',
  `field2414_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL PROYECTISTA (nombre)',
  `field2415` DATETIME DEFAULT NULL COMMENT 'FECHA DE VENCIMIENTO DE SENTENCIA',
  `field2416` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA SENTENCIA',
  `field2417` VARCHAR(255) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN',
  `field2410` VARCHAR(45) DEFAULT NULL COMMENT 'PROCEDIMIENTO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsps08_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsc09s`
--

#DROP TABLE IF EXISTS `jt_lsc09s`;
CREATE TABLE IF NOT EXISTS `jt_lsc09s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'NÚMERO DE TOCA',
  `field187` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE REGISTRO (CONSECUTIVO)',
  `field191` VARCHAR(45) DEFAULT NULL COMMENT 'RESOLUCIÓN RECURRIDA',
  `field192` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTRADA',
  `field193` DATETIME DEFAULT NULL COMMENT 'FECHA DE SALIDA (NO SE LLENA)',
  `field194` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsc09_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljc09s`
--

#DROP TABLE IF EXISTS `jt_ljc09s`;
CREATE TABLE IF NOT EXISTS `jt_ljc09s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field5` INT(10) DEFAULT NULL COMMENT 'NÚMERO DE CUADERNOS O CÉDULAS',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA AL ACTUARIO',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO POR DILIGENCIAR',
  `field9` TEXT DEFAULT NULL COMMENT 'LUGAR DONDE DEBE ACTUARSE',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA DILIGENCIA',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA DEVOLUCIÓN',
  `field14` TINYINT(1) DEFAULT NULL COMMENT 'USO DE LA FUERZA PÚBLICA',
  `field15` TEXT DEFAULT NULL COMMENT 'DETALLE DEL USO DE LA FUERZA PÚBLICA',
  `field13` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc09_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf09s`
--

#DROP TABLE IF EXISTS `jt_ljf09s`;
CREATE TABLE IF NOT EXISTS `jt_ljf09s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` INT(10) DEFAULT NULL COMMENT 'NÚMERO DE CUADERNOS O CÉDULAS',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA AL ACTUARIO',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO POR DILIGENCIAR',
  `field9` TEXT DEFAULT NULL COMMENT 'LUGAR DONDE DEBE REALIZARSE',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA DILIGENCIA',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA DEVOLUCIÓN',
  `field13` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES ',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf09_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljp09s`
--

#DROP TABLE IF EXISTS `jt_ljp09s`;
CREATE TABLE IF NOT EXISTS `jt_ljp09s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` VARCHAR(255) DEFAULT NULL COMMENT 'DESTINATARIO',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE OFICIO',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA DEL OFICIO',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'ASUNTO',
  `field6` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljp09_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljccm09s`
--

#DROP TABLE IF EXISTS `jt_ljccm09s`;
CREATE TABLE IF NOT EXISTS `jt_ljccm09s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO POR DILIGENCIAR',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA AL ACTUARIO',
  `field14` DATETIME DEFAULT NULL COMMENT 'FECHA DE DILIGENCIA',
  `field15` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field12` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljccm09_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljoc09s`
--

#DROP TABLE IF EXISTS `jt_ljoc09s`;
CREATE TABLE IF NOT EXISTS `jt_ljoc09s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` INT(10) DEFAULT NULL COMMENT 'TIPO DE AUXILIAR',
  `field6_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DEL AUXILIAR (isMoral)',
  `field6_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL AUXILIAR (paterno)',
  `field6_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL AUXILIAR (materno)',
  `field6_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL AUXILIAR (nombre)',
  `field7` INT(10) DEFAULT NULL COMMENT 'ESPECIALIDAD',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE DESIGNACIÓN',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE NOTIFICACIÓN DE SU DESIGNACIÓN',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA DE ACEPTACIÓN',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE RINDE EL DICTAMEN',
  `field12` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljoc09_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpdng09s`
--

#DROP TABLE IF EXISTS `jt_ljpdng09s`;
CREATE TABLE IF NOT EXISTS `jt_ljpdng09s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA AL ACTUARIO',
  `field6` INT(10) DEFAULT NULL COMMENT 'DEL ACTUARIO',
  `field12` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente extinto',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpdng09_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpes09s`
--

#DROP TABLE IF EXISTS `jt_ljpes09s`;
CREATE TABLE IF NOT EXISTS `jt_ljpes09s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` INT(10) DEFAULT NULL COMMENT ' DÍAS MULTA',
  `field3` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE AUTO',
  `txt_field1248` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA A  LA QUE SE LE IMPONE',
  `id_field1248` INT(10) DEFAULT NULL COMMENT 'PERSONA A  LA QUE SE LE IMPONE',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'NO. DE OFICIO CON EL QUE SE COMUNICA LA SANCIÓN',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DEL OFICIO',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA DEL OFICIO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpes09_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadng09s`
--

#DROP TABLE IF EXISTS `jt_ljjadng09s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadng09s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE CÉDULA',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA A QUIEN SE DIRIGE LA CÉDULA',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA AL ACTUARIO',
  `field5` INT(10) DEFAULT NULL COMMENT 'DE ENTREGA AL ACTUARIO',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO POR DILIGENCIAR',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA DILIGENCIA',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA DEVOLUCIÓN',
  `field8` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadng09_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadg09s`
--

#DROP TABLE IF EXISTS `jt_ljjadg09s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadg09s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'DESTINATARIO (isMoral)',
  `field2_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'DESTINATARIO (paterno)',
  `field2_materno` VARCHAR(45) DEFAULT NULL COMMENT 'DESTINATARIO (materno)',
  `field2_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'DESTINATARIO (nombre)',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE CÉDULA(S)',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA',
  `field5` INT(10) DEFAULT NULL COMMENT 'DEL ACTUARIO',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO POR DILIGENCIAR',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA DILIGENCIA',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA DEVOLUCIÓN',
  `field9_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DE QUIEN  RECIBE LA DEVOLUCIÓN (isMoral)',
  `field9_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN  RECIBE LA DEVOLUCIÓN (paterno)',
  `field9_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN  RECIBE LA DEVOLUCIÓN (materno)',
  `field9_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN  RECIBE LA DEVOLUCIÓN (nombre)',
  `field10` INT(10) DEFAULT NULL COMMENT 'FIRMA DE QUIEN RECIBE LA DEVOLUCION DE LA CEDULA',
  `field10h` INT(10) DEFAULT NULL COMMENT 'HUELLA DE QUIEN RECIBE LA DEVOLUCION DE LA CEDULA',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadg09_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsps09s`
--

#DROP TABLE IF EXISTS `jt_lsps09s`;
CREATE TABLE IF NOT EXISTS `jt_lsps09s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field2418` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `field2419` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE REMISIÓN',
  `field2420` VARCHAR(45) DEFAULT NULL COMMENT 'ESTADO PROCESAL',
  `field2421` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN AL ARCHIVO',
  `field2422` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO',
  `field2423` DATETIME DEFAULT NULL COMMENT 'FECHA DE ARCHIVO',
  `field2424` VARCHAR(45) DEFAULT NULL COMMENT 'NO. DE FOLIO',
  `field2425` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsps09_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsc10s`
--

#DROP TABLE IF EXISTS `jt_lsc10s`;
CREATE TABLE IF NOT EXISTS `jt_lsc10s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'NÚMERO TOCA',
  `field199` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA',
  `field200` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO A DILIGENCIAR',
  `field201` VARCHAR(255) DEFAULT NULL COMMENT 'LUGAR DONDE DEBE ACTUARSE',
  `field202` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA DILIGENCIA',
  `field203` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA DEVOLUCIÓN ',
  `field204` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsc10_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljc10s`
--

#DROP TABLE IF EXISTS `jt_ljc10s`;
CREATE TABLE IF NOT EXISTS `jt_ljc10s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field5_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL PERITO (a. paterno)',
  `field5_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL PERITO (a. materno)',
  `field5_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL PERITO (nombre)',
  `field5_isMoral` TINYINT(1) DEFAULT NULL COMMENT 'NOMBRE DEL PERITO (es Moral)',
  `field5_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DEL PERITO (isMoral)',
  `field5_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL PERITO (paterno)',
  `field5_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL PERITO (materno)',
  `field5_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL PERITO (nombre)',
  `field6` INT(10) DEFAULT NULL COMMENT 'ESPECIALIDAD',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE DESIGNACIÓN',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE NOTIFICACIÓN DEL AUTO DE DESIGNACIÓN',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE ACEPTACIÓN',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE RINDE EL DICTAMEN',
  `field11` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc10_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf10s`
--

#DROP TABLE IF EXISTS `jt_ljf10s`;
CREATE TABLE IF NOT EXISTS `jt_ljf10s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field13` VARCHAR(45) DEFAULT NULL COMMENT 'DESIGNACIÓN DE :  ',
  `field5_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE (isMoral)',
  `field5_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE (paterno)',
  `field5_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE (materno)',
  `field5_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE (nombre)',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'ART. 910 C.P.C.',
  `field7` INT(10) DEFAULT NULL COMMENT 'ESPECIALIDAD',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE DESIGNACIÓN',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE NOTIFICACIÓN DEL AUTO DE DESIGNACIÓN',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA DE ACEPTACIÓN',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE RINDE EL DICTAMEN',
  `field12` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf10_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljp10s`
--

#DROP TABLE IF EXISTS `jt_ljp10s`;
CREATE TABLE IF NOT EXISTS `jt_ljp10s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE CÉDULA(S)',
  `field2` VARCHAR(255) DEFAULT NULL COMMENT 'DESTINATARIO',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA',
  `field4` INT(10) DEFAULT NULL COMMENT 'DEL ACTUARIO',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO POR DILIGENCIAR',
  `field6` TEXT DEFAULT NULL COMMENT 'LUGAR DONDE DEBE ACTUARSE',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA DILIGENCIA',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA DEVOLUCIÓN',
  `field9` INT(10) DEFAULT NULL COMMENT 'DE QUIEN RECIBE LA DEVOLUCIÓN',
  `field10` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljp10_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljccm10s`
--

#DROP TABLE IF EXISTS `jt_ljccm10s`;
CREATE TABLE IF NOT EXISTS `jt_ljccm10s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'No. DEL NOTARIO',
  `field2_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DEL NOTARIO (isMoral)',
  `field2_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL NOTARIO (paterno)',
  `field2_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL NOTARIO (materno)',
  `field2_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL NOTARIO (nombre)',
  `field3` TEXT DEFAULT NULL COMMENT 'DIRECCIÓN',
  `field8_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA AUTORIZADA QUE RECIBE EL EXP. (isMoral)',
  `field8_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA AUTORIZADA QUE RECIBE EL EXP. (paterno)',
  `field8_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA AUTORIZADA QUE RECIBE EL EXP. (materno)',
  `field8_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA AUTORIZADA QUE RECIBE EL EXP. (nombre)',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'TRAMITE A REALIZAR',
  `field12` INT(10) DEFAULT NULL COMMENT 'DE LA PERSONA AUTORIZADA',
  `field13` INT(10) DEFAULT NULL COMMENT 'DEL SRIO. DE ACDOS.',
  `field14` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN DEL EXP. AL JUZGADO',
  `field15` VARCHAR(45) DEFAULT NULL COMMENT 'DATOS DE IDENTIFICACION',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljccm10_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljoc10s`
--

#DROP TABLE IF EXISTS `jt_ljoc10s`;
CREATE TABLE IF NOT EXISTS `jt_ljoc10s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE AMPARO',
  `field6` INT(10) DEFAULT NULL COMMENT 'TIPO DE AMPARO',
  `field7_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'QUEJOSO (isMoral)',
  `field7_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'QUEJOSO (paterno)',
  `field7_materno` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (materno)',
  `field7_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (nombre)',
  `field8_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'TERCERO INTERESADO (isMoral)',
  `field8_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'TERCERO INTERESADO (paterno)',
  `field8_materno` VARCHAR(45) DEFAULT NULL COMMENT 'TERCERO INTERESADO (materno)',
  `field8_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'TERCERO INTERESADO (nombre)',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'ACTO RECLAMADO',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO',
  `field11` INT(10) DEFAULT NULL COMMENT 'INFORME SOLICITADO',
  `field12` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN DE AMPARO',
  `field13` DATETIME DEFAULT NULL COMMENT 'FECHA DE CUMPLIMIENTO',
  `field14` VARCHAR(45) DEFAULT NULL COMMENT 'DATOS DE ENVIO',
  `field15` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljoc10_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpdng10s`
--

#DROP TABLE IF EXISTS `jt_ljpdng10s`;
CREATE TABLE IF NOT EXISTS `jt_ljpdng10s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE AMPARO',
  `field4` VARCHAR(255) DEFAULT NULL COMMENT 'ORGANO DE PROCEDENCIA',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'No DE AMPARO',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'INFORME SOLICITADO',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN DEL INFORME',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE OFICIO DE INFORME',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'RESOLUCIÓN DE AMPARO',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE EJECUTORIA',
  `field12` VARCHAR(45) DEFAULT NULL COMMENT 'CUMPLIMIENTO',
  `field13` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente extinto',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpdng10_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpes10s`
--

#DROP TABLE IF EXISTS `jt_ljpes10s`;
CREATE TABLE IF NOT EXISTS `jt_ljpes10s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `faudiencia` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA AUDIENCIA',
  `txt_field1252` VARCHAR(255) DEFAULT NULL COMMENT 'MATERIA',
  `id_field1252` INT(10) DEFAULT NULL COMMENT 'MATERIA',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO(s)',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpes10_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadng10s`
--

#DROP TABLE IF EXISTS `jt_ljjadng10s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadng10s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE OFICIO',
  `field2_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DEL ADOLESCENTE (isMoral)',
  `field2_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL ADOLESCENTE (paterno)',
  `field2_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL ADOLESCENTE (materno)',
  `field2_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL ADOLESCENTE (nombre)',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'LUGAR DE INTERNAMIENTO',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE AUDIENCIA',
  `field5` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadng10_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadg10s`
--

#DROP TABLE IF EXISTS `jt_ljjadg10s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadg10s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field12` INT(10) DEFAULT NULL COMMENT 'TIPO DE AMPARO',
  `field2_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DEL QUEJOSO (isMoral)',
  `field2_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL QUEJOSO (paterno)',
  `field2_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL QUEJOSO (materno)',
  `field2_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL QUEJOSO (nombre)',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'ORGANO DE PROCEDENCIA (JDO DE DTO O TRIB. COL)',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE AMPARO',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO',
  `field6` INT(10) DEFAULT NULL COMMENT 'INFORME SOLICITADO',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENVÍO DE INFORME PREVIO',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE OFICIO DEL INFORME',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'RESOLUCIÓN DE AMPARO',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA DE EJECUTORIA',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'CUMPLIMENTO',
  `field13` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENVÍO DE INFORME JUSTIFICADO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadg10_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsps10s`
--

#DROP TABLE IF EXISTS `jt_lsps10s`;
CREATE TABLE IF NOT EXISTS `jt_lsps10s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field2426` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO DE LA MULTA',
  `field2427` VARCHAR(45) DEFAULT NULL COMMENT 'CONCEPTO DE LA MULTA',
  `field2428` DATETIME DEFAULT NULL COMMENT 'FECHA DE RESOLUCIÓN QUE LA DECRETA',
  `field2429_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DE LA PERSONA A LA QUE SE LE IMPONE (isMoral)',
  `field2429_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A LA QUE SE LE IMPONE (paterno)',
  `field2429_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A LA QUE SE LE IMPONE (materno)',
  `field2429_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A LA QUE SE LE IMPONE (nombre)',
  `field2430` VARCHAR(45) DEFAULT NULL COMMENT 'NO.  DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIÓN',
  `field2446` DATETIME DEFAULT NULL COMMENT 'FECHA DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIÓN',
  `field2431` DATETIME DEFAULT NULL COMMENT 'FECHA EN LA QUE ES ENTREGADO',
  `field2432` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsps10_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsc11s`
--

#DROP TABLE IF EXISTS `jt_lsc11s`;
CREATE TABLE IF NOT EXISTS `jt_lsc11s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'TOCA',
  `field205` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE OFICIO (CONSECUTIVO)',
  `field207` VARCHAR(255) DEFAULT NULL COMMENT 'DESTINATARIO',
  `field209` DATETIME DEFAULT NULL COMMENT 'FECHA',
  `field210` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL QUE REGISTRA',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsc11_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf11s`
--

#DROP TABLE IF EXISTS `jt_ljf11s`;
CREATE TABLE IF NOT EXISTS `jt_ljf11s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` VARCHAR(45) DEFAULT NULL COMMENT 'No. DEL NOTARIO',
  `field3_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DEL NOTARIO (isMoral)',
  `field3_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL NOTARIO (paterno)',
  `field3_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL NOTARIO (materno)',
  `field3_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL NOTARIO (nombre)',
  `field4` TEXT DEFAULT NULL COMMENT 'DIRECCION Y TELÉFONO',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'CUADERNO',
  `field9` INT(10) DEFAULT NULL COMMENT 'FOJAS',
  `field10` TEXT DEFAULT NULL COMMENT 'DOCUMENTOS',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA',
  `field12` TEXT DEFAULT NULL COMMENT 'DATOS DE IDENTIFICACIÓN',
  `field13` VARCHAR(45) DEFAULT NULL COMMENT 'TRAMITE A REALIZAR',
  `field14_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DE LA PERSONA AUTORIZADA (isMoral)',
  `field14_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA AUTORIZADA (paterno)',
  `field14_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA AUTORIZADA (materno)',
  `field14_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA AUTORIZADA (nombre)',
  `field15` INT(10) DEFAULT NULL COMMENT 'FIRMA DE LA PERSONA AUTORIZADA',
  `field15h` INT(10) DEFAULT NULL COMMENT 'HUELLA DE LA PERSONA AUTORIZADA',
  `field16` INT(10) DEFAULT NULL COMMENT 'DEL SECRETARIO DE ACUERDOS',
  `field17` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN DEL EXPEDIENTE AL JUZGADO',
  `field18` INT(10) DEFAULT NULL COMMENT 'DE DEVOLUCIÓN DEL EXPEDIENTE AL JUZGADO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf11_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljp11s`
--

#DROP TABLE IF EXISTS `jt_ljp11s`;
CREATE TABLE IF NOT EXISTS `jt_ljp11s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE AMPARO',
  `field3_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'QUEJOSO (isMoral)',
  `field3_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'QUEJOSO (paterno)',
  `field3_materno` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (materno)',
  `field3_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (nombre)',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'ÓRGANO DE PROCEDENCIA (JDO DE DTO O TRIB.COL)',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE AMPARO',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'INFORME SOLICITADO',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENVÍO DEL INFORME',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE OFICIO DE INFORME',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'RESOLUCIÓN DE AMPARO',
  `field12` DATETIME DEFAULT NULL COMMENT 'FECHA DE EJECUTORIA',
  `field13` VARCHAR(45) DEFAULT NULL COMMENT 'CUMPLIMIENTO',
  `field14` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljp11_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljccm11s`
--

#DROP TABLE IF EXISTS `jt_ljccm11s`;
CREATE TABLE IF NOT EXISTS `jt_ljccm11s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE AMPARO',
  `field7` INT(10) DEFAULT NULL COMMENT 'ÓRGANO DE PROCEDENCIA',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE AMPARO',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO',
  `field12` INT(10) DEFAULT NULL COMMENT 'INFORME SOLICITADO',
  `field13` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENVÍO DEL INFORME',
  `field14` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN DE AMPARO',
  `field15` DATETIME DEFAULT NULL COMMENT 'FECHA DE CUMPLIMIENTO',
  `field16` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljccm11_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljoc11s`
--

#DROP TABLE IF EXISTS `jt_ljoc11s`;
CREATE TABLE IF NOT EXISTS `jt_ljoc11s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field6` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO DE LA MULTA',
  `field7_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DE LA PERSONA  A QUE SE LE IMPUSO (isMoral)',
  `field7_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA  A QUE SE LE IMPUSO (paterno)',
  `field7_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA  A QUE SE LE IMPUSO (materno)',
  `field7_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA  A QUE SE LE IMPUSO (nombre)',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DEL FORMATO Y/O EXHORTO EN QUE SE COMUNICA A LA AUTORIDAD',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DEL OFICIO Y/O EXHORTO',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE PRESENTACIÓN DE FORMATO',
  `field10` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljoc11_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpdng11s`
--

#DROP TABLE IF EXISTS `jt_ljpdng11s`;
CREATE TABLE IF NOT EXISTS `jt_ljpdng11s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'ORGANO DE PROCEDENCIA',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'No DE AMPARO',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'INFORME SOLICITADO',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN DEL INFORME',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'No DE OFICIO DE INFORME',
  `field11` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente extinto',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpdng11_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpes11s`
--

#DROP TABLE IF EXISTS `jt_ljpes11s`;
CREATE TABLE IF NOT EXISTS `jt_ljpes11s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'MOTIVO DE INGRESO',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO DEL BILLETE',
  `billete` VARCHAR(45) DEFAULT NULL COMMENT 'No. DEL BILLETE',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE EXPEDICIÓN ',
  `field5` DECIMAL(11,2) DEFAULT NULL COMMENT 'IMPORTE',
  `field6_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'SENTENCIADO (isMoral)',
  `field6_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'SENTENCIADO (paterno)',
  `field6_materno` VARCHAR(45) DEFAULT NULL COMMENT 'SENTENCIADO (materno)',
  `field6_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'SENTENCIADO (nombre)',
  `field12` VARCHAR(45) DEFAULT NULL COMMENT 'MOTIVO DE EGRESO',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE EGRESO DEL BILLETE',
  `field8_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE RECIBE (isMoral)',
  `field8_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE RECIBE (paterno)',
  `field8_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBE (materno)',
  `field8_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBE (nombre)',
  `field9` INT(10) DEFAULT NULL COMMENT 'FIRMA DE LA PERSONA',
  `field9h` INT(10) DEFAULT NULL COMMENT 'HUELLA DE LA PERSONA',
  `field10` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpes11_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_billete` (`billete`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadng11s`
--

#DROP TABLE IF EXISTS `jt_ljjadng11s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadng11s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` VARCHAR(255) DEFAULT NULL COMMENT 'ADOLESCENTE',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'CONDUCTA TÍFICADA COMO DELITO',
  `field4` INT(10) DEFAULT NULL COMMENT 'NÚMERO DE FOJAS',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO AL ARCHIVO JUDICIAL',
  `field6` INT(10) DEFAULT NULL COMMENT 'MOTIVO DE LA REMISIÓN AL ARCHIVO',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'FOLIO DE DEVOLUCIÓN',
  `field7` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN DEL ARCHIVO AL JUZGADO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadng11_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadg11s`
--

#DROP TABLE IF EXISTS `jt_ljjadg11s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadg11s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'CONDUCTA TIPIFICADA COMO DELITO',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE RECIBE LA POLIZA DE FIANZA',
  `field5` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE LA AFIANZADORA',
  `field6` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE LA PÓLIZA DE FIANZA',
  `field8` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadg11_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsps11s`
--

#DROP TABLE IF EXISTS `jt_lsps11s`;
CREATE TABLE IF NOT EXISTS `jt_lsps11s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field2433_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'BENEFICIARIO (isMoral)',
  `field2433_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'BENEFICIARIO (paterno)',
  `field2433_materno` VARCHAR(45) DEFAULT NULL COMMENT 'BENEFICIARIO (materno)',
  `field2433_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'BENEFICIARIO (nombre)',
  `field2434` VARCHAR(45) DEFAULT NULL COMMENT 'CONCEPTO DE FIANZA',
  `field2435` VARCHAR(45) DEFAULT NULL COMMENT 'NO. DE BOLETA',
  `field2436` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE RECIBE POLIZA DE FIANZA',
  `field2437` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO',
  `field2438` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE PÓLIZA DE FIANZA',
  `field2439` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN ',
  `field2440_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'A QUIEN SE DEVUELVE (isMoral)',
  `field2440_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'A QUIEN SE DEVUELVE (paterno)',
  `field2440_materno` VARCHAR(45) DEFAULT NULL COMMENT 'A QUIEN SE DEVUELVE (materno)',
  `field2440_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'A QUIEN SE DEVUELVE (nombre)',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsps11_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsc12s`
--

#DROP TABLE IF EXISTS `jt_lsc12s`;
CREATE TABLE IF NOT EXISTS `jt_lsc12s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'TOCA',
  `field211` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE AMPARO (CONSECUTIVO)',
  `field213` VARCHAR(45) DEFAULT NULL COMMENT 'EXPEDIENTE',
  `field214` VARCHAR(45) DEFAULT NULL COMMENT 'JUZGADO',
  `field216` DATETIME DEFAULT NULL COMMENT 'FECHA DE REGISTRO',
  `field217` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO EN QUE RESUELVE',
  `field219_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'QUEJOSO (isMoral)',
  `field219_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'QUEJOSO (paterno)',
  `field219_materno` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (materno)',
  `field219_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (nombre)',
  `field220` DATETIME DEFAULT NULL COMMENT 'FECHA DE LLEGADA',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsc12_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljc12s`
--

#DROP TABLE IF EXISTS `jt_ljc12s`;
CREATE TABLE IF NOT EXISTS `jt_ljc12s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE AMPARO',
  `field6_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'QUEJOSO (a. paterno)',
  `field6_materno` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (a. materno)',
  `field6_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (nombre)',
  `field6_isMoral` TINYINT(1) DEFAULT NULL COMMENT 'QUEJOSO (es Moral)',
  `field6_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'QUEJOSO (isMoral)',
  `field6_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'QUEJOSO (paterno)',
  `field6_materno` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (materno)',
  `field6_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (nombre)',
  `field7` INT(10) DEFAULT NULL COMMENT 'ÓRGANO DE PROCEDENCIA',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE AMPARO',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO',
  `field12` INT(10) DEFAULT NULL COMMENT 'INFORME SOLICITADO',
  `field13` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENVÍO DEL INFORME',
  `field14` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN DE AMPARO',
  `field15` TINYINT(1) DEFAULT NULL COMMENT 'CUMPLIMIENTO',
  `field16` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc12_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf12s`
--

#DROP TABLE IF EXISTS `jt_ljf12s`;
CREATE TABLE IF NOT EXISTS `jt_ljf12s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE AMPARO',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO',
  `field7` INT(10) DEFAULT NULL COMMENT 'TIPO DE AMPARO',
  `field8_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'QUEJOSO (isMoral)',
  `field8_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'QUEJOSO (paterno)',
  `field8_materno` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (materno)',
  `field8_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (nombre)',
  `field9` INT(10) DEFAULT NULL COMMENT 'ÓRGANO DE PROCEDENCIA',
  `field11` INT(10) DEFAULT NULL COMMENT 'INFORME SOLICITADO',
  `field12` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENVÍO DEL INFORME',
  `field13` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN DE AMPARO',
  `field14` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE CAUSÓ EJECUTORIA',
  `field15` DATETIME DEFAULT NULL COMMENT 'CUMPLIMIENTO',
  `field16` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf12_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljp12s`
--

#DROP TABLE IF EXISTS `jt_ljp12s`;
CREATE TABLE IF NOT EXISTS `jt_ljp12s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE AMPARO',
  `field2_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'QUEJOSO (isMoral)',
  `field2_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'QUEJOSO (paterno)',
  `field2_materno` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (materno)',
  `field2_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (nombre)',
  `field13` VARCHAR(255) DEFAULT NULL COMMENT 'ORGANO DE PROCEDENCIA',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'INFORME SOLICITADO',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENVÍO DEL INFORME',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE OFICIO DE INFORME',
  `field12` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljp12_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljccm12s`
--

#DROP TABLE IF EXISTS `jt_ljccm12s`;
CREATE TABLE IF NOT EXISTS `jt_ljccm12s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'GARANTE (isMoral)',
  `field2_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'GARANTE (paterno)',
  `field2_materno` VARCHAR(45) DEFAULT NULL COMMENT 'GARANTE (materno)',
  `field2_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'GARANTE (nombre)',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE RECIBE LA PÓLIZA DE FIANZA',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA AFIANZADORA',
  `field6` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO DE LA PÓLIZA DE FIANZA',
  `field7` TINYINT(1) DEFAULT NULL COMMENT 'SE HIZO EFECTIVA LA GARANTIA ?',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'MOTIVO',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljccm12_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljoc12s`
--

#DROP TABLE IF EXISTS `jt_ljoc12s`;
CREATE TABLE IF NOT EXISTS `jt_ljoc12s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` INT(10) DEFAULT NULL COMMENT 'TIPO DE AUDIENCIA',
  `faudiencia` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA AUDIENCIA',
  `field7` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljoc12_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpdng12s`
--

#DROP TABLE IF EXISTS `jt_ljpdng12s`;
CREATE TABLE IF NOT EXISTS `jt_ljpdng12s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO(S)',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE RECIBE LA PÓLIZA DE FIANZA',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA AFIANZADORA',
  `field7` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'No DE PÓLIZA DE FIANZA',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE NOTIFICACIÓN A LA AFIANZADORA',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'MOTIVO POR EL CUAL SE HIZO EFECTIVA',
  `field11` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente extinto',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpdng12_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpes12s`
--

#DROP TABLE IF EXISTS `jt_ljpes12s`;
CREATE TABLE IF NOT EXISTS `jt_ljpes12s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'SENTENCIADO (isMoral)',
  `field2_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'SENTENCIADO (paterno)',
  `field2_materno` VARCHAR(45) DEFAULT NULL COMMENT 'SENTENCIADO (materno)',
  `field2_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'SENTENCIADO (nombre)',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE PÓLIZA',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE RECIBE LA PÓLIZA ',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'AFIANZADORA ',
  `field5` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO ',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE ORDEN PARA HACERLA EFECTIVA',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE CANCELACION',
  `field8` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpes12_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadng12s`
--

#DROP TABLE IF EXISTS `jt_ljjadng12s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadng12s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL BENEFICIARIO',
  `billete` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE BILLETE DE DEPÓSITO',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE EXPEDICIÓN',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN',
  `field6` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE EGRESO',
  `field8` VARCHAR(255) DEFAULT NULL COMMENT 'MOTIVO DEL EGRESO',
  `field9_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DE QUIEN RECIBE (isMoral)',
  `field9_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN RECIBE (paterno)',
  `field9_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN RECIBE (materno)',
  `field9_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN RECIBE (nombre)',
  `field10` INT(10) DEFAULT NULL COMMENT 'FIRMA DE QUIEN RECIBE',
  `field10h` INT(10) DEFAULT NULL COMMENT 'HUELLA DE QUIEN RECIBE',
  `field11` INT(10) DEFAULT NULL COMMENT 'DEL SECRETARIO',
  `field12` INT(10) DEFAULT NULL COMMENT 'DEL JUEZ',
  `field13` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadng12_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_billete` (`billete`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsps12s`
--

#DROP TABLE IF EXISTS `jt_lsps12s`;
CREATE TABLE IF NOT EXISTS `jt_lsps12s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field2441` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN',
  `field2442_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PROMOVENTE (isMoral)',
  `field2442_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PROMOVENTE (paterno)',
  `field2442_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PROMOVENTE (materno)',
  `field2442_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PROMOVENTE (nombre)',
  `field2443` VARCHAR(45) DEFAULT NULL COMMENT 'ASUNTO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsps12_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsc13s`
--

#DROP TABLE IF EXISTS `jt_lsc13s`;
CREATE TABLE IF NOT EXISTS `jt_lsc13s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Ponencia',
  `field225_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE COMPLETO DEL SOLICITANTE (isMoral)',
  `field225_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE COMPLETO DEL SOLICITANTE (paterno)',
  `field225_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE COMPLETO DEL SOLICITANTE (materno)',
  `field225_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE COMPLETO DEL SOLICITANTE (nombre)',
  `txt_field2283` VARCHAR(255) DEFAULT NULL COMMENT 'AUTORIZADO POR QUÉ PARTE',
  `id_field2283` INT(10) DEFAULT NULL COMMENT 'AUTORIZADO POR QUÉ PARTE',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'NÚMERO DE TOCA',
  `field227` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE IDENTIFICACIÓN',
  `field228` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE IDENTIFICACIÓN',
  `field229` DATETIME DEFAULT NULL COMMENT 'HORA EN QUE SE PRESTA',
  `field230` DATETIME DEFAULT NULL COMMENT 'HORA EN QUE SE REGRESA',
  `field231` INT(10) DEFAULT NULL COMMENT 'FIRMA DEL SOLICITANTE',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsc13_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljc13s`
--

#DROP TABLE IF EXISTS `jt_ljc13s`;
CREATE TABLE IF NOT EXISTS `jt_ljc13s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field2_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'GARANTE (a. paterno)',
  `field2_materno` VARCHAR(45) DEFAULT NULL COMMENT 'GARANTE (a. materno)',
  `field2_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'GARANTE (nombre)',
  `field2_isMoral` TINYINT(1) DEFAULT NULL COMMENT 'GARANTE (es Moral)',
  `field2_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'GARANTE (isMoral)',
  `field2_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'GARANTE (paterno)',
  `field2_materno` VARCHAR(45) DEFAULT NULL COMMENT 'GARANTE (materno)',
  `field2_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'GARANTE (nombre)',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE RECIBE LA PÓLIZA DE FIANZA',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA AFIANZADORA',
  `field6` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO DE LA PÓLIZA DE FIANZA',
  `field7` DECIMAL(11,2) DEFAULT NULL COMMENT 'SI SE HACE EFECTIVA LA GARANTÍA, ANOTAR EL MOTIVO POR EL CUAL SE HIZO EFECTIVA',
  `field8` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc13_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf13s`
--

#DROP TABLE IF EXISTS `jt_ljf13s`;
CREATE TABLE IF NOT EXISTS `jt_ljf13s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field4_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'DEPOSITANTE (isMoral)',
  `field4_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'DEPOSITANTE (paterno)',
  `field4_materno` VARCHAR(45) DEFAULT NULL COMMENT 'DEPOSITANTE (materno)',
  `field4_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'DEPOSITANTE (nombre)',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE RECIBE LA GARANTIA Y/O PÓLIZA',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA AFIANZADORA',
  `field8` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO DE LA GARANTÍA',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE PÓLIZA DE FIANZA',
  `field10` TEXT DEFAULT NULL COMMENT 'EN CASO DE HACER EFECTIVA LA GARANTÍA Y/O POLIZA DE FIANZA, ANOTAR EL MOTIVO',
  `field11` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf13_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljp13s`
--

#DROP TABLE IF EXISTS `jt_ljp13s`;
CREATE TABLE IF NOT EXISTS `jt_ljp13s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO(S)',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE BOLETA',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE RECIBE LA PÓLIZA DE FIANZA',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA AFIANZADORA',
  `field7` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE LA PÓLIZA DE FIANZA',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'NOTIFICACIÓN A LA AFIANZADORA',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'EN CASO DE HACER EFECTIVA LA PÓLIZA DE FIANZA, ANOTAR EL MOTIVO POR EL CUAL SE HIZO EFECTIVA',
  `field11` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljp13_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljccm13s`
--

#DROP TABLE IF EXISTS `jt_ljccm13s`;
CREATE TABLE IF NOT EXISTS `jt_ljccm13s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO DE LA MULTA',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE RESOLUCION QUE LA DECRETA',
  `field7_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (isMoral)',
  `field7_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (paterno)',
  `field7_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (materno)',
  `field7_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (nombre)',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'NO DEL DOCUMENTO',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DEL DOCUMENTO',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA DEL DOC',
  `field11` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljccm13_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljoc13s`
--

#DROP TABLE IF EXISTS `jt_ljoc13s`;
CREATE TABLE IF NOT EXISTS `jt_ljoc13s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE PROVEÍDO DESIGNANDO NOTARIO',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE NOTARIA',
  `field7_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DEL NOTARIO (isMoral)',
  `field7_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL NOTARIO (paterno)',
  `field7_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL NOTARIO (materno)',
  `field7_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL NOTARIO (nombre)',
  `field8` TEXT DEFAULT NULL COMMENT 'DIRECCIÓN DEL NOTARIO',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'EXPEDIENTE',
  `field10` TEXT DEFAULT NULL COMMENT 'DOCUMENTOS QUE RECIBE',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'ASUNTO',
  `field12` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA',
  `field20` DATETIME DEFAULT NULL COMMENT 'FECHA DE FIRMA DE ESCRITURA',
  `field13_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE (isMoral)',
  `field13_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE (paterno)',
  `field13_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE (materno)',
  `field13_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE (nombre)',
  `field14` VARCHAR(45) DEFAULT NULL COMMENT 'CARÁCTER CON QUE RECIBE',
  `field15` VARCHAR(45) DEFAULT NULL COMMENT 'IDENTIFICACIÓN',
  `field16` INT(10) DEFAULT NULL COMMENT 'FIRMA DE LA PERSONA',
  `field16h` INT(10) DEFAULT NULL COMMENT 'HUELLA DE LA PERSONA',
  `field17` INT(10) DEFAULT NULL COMMENT 'DEL SECRETARIO DE ACUERDOS',
  `field18` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN AL JUZGADO',
  `field19` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljoc13_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpdng13s`
--

#DROP TABLE IF EXISTS `jt_ljpdng13s`;
CREATE TABLE IF NOT EXISTS `jt_ljpdng13s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIÓN QUE LA ORDENA',
  `field4_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DE LA PERSONA QUE SE LE IMPUSO (isMoral)',
  `field4_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA QUE SE LE IMPUSO (paterno)',
  `field4_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA QUE SE LE IMPUSO (materno)',
  `field4_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA QUE SE LE IMPUSO (nombre)',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCION DEL OFICIO POR EL QUE SE COMUNICA LA SANCIÓN',
  `field6` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente extinto',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpdng13_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpes13s`
--

#DROP TABLE IF EXISTS `jt_ljpes13s`;
CREATE TABLE IF NOT EXISTS `jt_ljpes13s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO(S)',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'PENA',
  `field5` VARCHAR(255) DEFAULT NULL COMMENT 'MATERIA',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE AUDIENCIA',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE RESOLUCIÓN',
  `field8` VARCHAR(255) DEFAULT NULL COMMENT 'SENTIDO DE RESOLUCION',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpes13_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadg13s`
--

#DROP TABLE IF EXISTS `jt_ljjadg13s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadg13s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'CONDUCTA TIPIFICADA COMO DELITO',
  `faudiencia` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA AUDIENCIA',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE AUDIENCIA',
  `field6` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadg13_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsps13s`
--

#DROP TABLE IF EXISTS `jt_lsps13s`;
CREATE TABLE IF NOT EXISTS `jt_lsps13s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field2444_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DEL INCULPADO (isMoral)',
  `field2444_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL INCULPADO (paterno)',
  `field2444_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL INCULPADO (materno)',
  `field2444_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL INCULPADO (nombre)',
  `field2445` INT(10) DEFAULT NULL COMMENT 'FIRMA DEL PROCESADO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsps13_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljc14s`
--

#DROP TABLE IF EXISTS `jt_ljc14s`;
CREATE TABLE IF NOT EXISTS `jt_ljc14s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIÓN QUE LA DECRETA',
  `field5_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (a. paterno)',
  `field5_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (a. materno)',
  `field5_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (nombre)',
  `field5_isMoral` TINYINT(1) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (es Moral)',
  `field5_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (isMoral)',
  `field5_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (paterno)',
  `field5_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (materno)',
  `field5_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (nombre)',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'No. DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIÓN',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIÓN',
  `field8` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO DE LA MULTA',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA DEL DOCUMENTO A LA AUTORIDAD',
  `field12` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc14_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf14s`
--

#DROP TABLE IF EXISTS `jt_ljf14s`;
CREATE TABLE IF NOT EXISTS `jt_ljf14s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA  RESOLUCIÓN QUE LA  DECRETA',
  `field7_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DE LA PERSONA A  QUIEN SE LE IMPUSO (isMoral)',
  `field7_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A  QUIEN SE LE IMPUSO (paterno)',
  `field7_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A  QUIEN SE LE IMPUSO (materno)',
  `field7_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A  QUIEN SE LE IMPUSO (nombre)',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE OFICIO EN  EL QUE SE  COMUNICA LA SANCIÓN',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DEL OFICIO EN QUE SE COMUNICA LA SANCIÓN',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'MONTO DE LA  MULTA',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE GIRA  OFICIO A LA OFICINA  RECAUDADORA DEL TSJDF',
  `field12` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA A LA DIRECCIÓN DE MULTAS JUDICIALES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf14_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljp14s`
--

#DROP TABLE IF EXISTS `jt_ljp14s`;
CREATE TABLE IF NOT EXISTS `jt_ljp14s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'CONCEPTO DE LA MULTA',
  `field2` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO DE LA MULTA',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIÓN QUE LA DECRETA',
  `field4_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DE LA PERSONA A LA QUE SE LE IMPUSO (isMoral)',
  `field4_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A LA QUE SE LE IMPUSO (paterno)',
  `field4_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A LA QUE SE LE IMPUSO (materno)',
  `field4_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A LA QUE SE LE IMPUSO (nombre)',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DEL DOCUMENTO EN QUE SE COMUNICA LA SANCIÓN',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DEL DOCUMENTO EN QUE SE COMUNICA LA SANCIÓN',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE ES ENTREGADO',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljp14_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljoc14s`
--

#DROP TABLE IF EXISTS `jt_ljoc14s`;
CREATE TABLE IF NOT EXISTS `jt_ljoc14s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE FIANZA',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'CONCEPTO',
  `field7` DECIMAL(11,2) DEFAULT NULL COMMENT 'IMPORTE',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'INSTITUCIÓN QUE LA EXPIDE',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'GARANTE',
  `field11` TINYINT(1) DEFAULT NULL COMMENT 'SE HACE EFECTIVA LA GARANTÍA',
  `field12` VARCHAR(45) DEFAULT NULL COMMENT 'MOTIVOS POR LOS QUE SE HIZO EFECTIVA LA GARANTÍA',
  `field13_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DEL BENEFICIARIO (isMoral)',
  `field13_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL BENEFICIARIO (paterno)',
  `field13_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL BENEFICIARIO (materno)',
  `field13_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL BENEFICIARIO (nombre)',
  `field14` VARCHAR(45) DEFAULT NULL COMMENT 'CARÁCTER CON QUE RECIBE',
  `field15` VARCHAR(45) DEFAULT NULL COMMENT 'IDENTIFICACIÓN',
  `field16` INT(10) DEFAULT NULL COMMENT 'FIRMA DEL BENEFICIARIO',
  `field16h` INT(10) DEFAULT NULL COMMENT 'HUELLA DEL BENEFICIARIO',
  `field17` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA',
  `field18` INT(10) DEFAULT NULL COMMENT 'DEL JUEZ',
  `field20` INT(10) DEFAULT NULL COMMENT 'DEL SECRETARIO',
  `field22` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljoc14_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpdng14s`
--

#DROP TABLE IF EXISTS `jt_ljpdng14s`;
CREATE TABLE IF NOT EXISTS `jt_ljpdng14s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO(S)',
  `faudiencia` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA AUDIENCIA',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE AUDIENCIA',
  `field6` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente extinto',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpdng14_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpes14s`
--

#DROP TABLE IF EXISTS `jt_ljpes14s`;
CREATE TABLE IF NOT EXISTS `jt_ljpes14s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO(S)',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'PENA',
  `field5` VARCHAR(255) DEFAULT NULL COMMENT 'MATERIA',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIÓN',
  `field7` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpes14_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadg14s`
--

#DROP TABLE IF EXISTS `jt_ljjadg14s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadg14s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'COMUNIDAD',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'MOTIVO',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DEL OFICIO',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'No. DEL OFICIO',
  `field7` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadg14_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_lsps14s`
--

#DROP TABLE IF EXISTS `jt_lsps14s`;
CREATE TABLE IF NOT EXISTS `jt_lsps14s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field2447` DATETIME DEFAULT NULL COMMENT 'FECHA DEL OFICIO',
  `field2448` VARCHAR(255) DEFAULT NULL COMMENT 'DESTINATARIO',
  `field2449` VARCHAR(45) DEFAULT NULL COMMENT 'ASUNTO',
  `field2450` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA AL DESTINATARIO',
  `field2451` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN AL JUZGADO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_lsps14_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf15s`
--

#DROP TABLE IF EXISTS `jt_ljf15s`;
CREATE TABLE IF NOT EXISTS `jt_ljf15s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO A DILIGENCIAR',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE PUBLICACIÓN EN EL BOLETÍN JUDICIAL',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECIBIDO POR PARTE DEL EMPLEADO/ACTUARIO',
  `field7` INT(10) DEFAULT NULL COMMENT 'DEL EMPLEADO/ACTUARIO',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN AL JUZGADO',
  `field10` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf15_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljccm15s`
--

#DROP TABLE IF EXISTS `jt_ljccm15s`;
CREATE TABLE IF NOT EXISTS `jt_ljccm15s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO EN EL QUE SE SEÑALA LA AUDIENCIA',
  `faudiencia` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA AUDIENCIA',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE AUDIENCIA',
  `field7` TEXT DEFAULT NULL COMMENT 'PRUEBAS A DESAHOGAR',
  `field8` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljccm15_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpdng15s`
--

#DROP TABLE IF EXISTS `jt_ljpdng15s`;
CREATE TABLE IF NOT EXISTS `jt_ljpdng15s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'LUGAR DE RECLUSIÓN',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE LA DILIGENCIA',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'MOTIVO',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'No OFICIO PEDIMENTO',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DEL OFICIO PEDIMENTO',
  `field8` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente extinto',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpdng15_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpes15s`
--

#DROP TABLE IF EXISTS `jt_ljpes15s`;
CREATE TABLE IF NOT EXISTS `jt_ljpes15s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO(S)',
  `field14` VARCHAR(45) DEFAULT NULL COMMENT 'PENA POR CUMPLIR',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'PENA TOTAL',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'BENEFICIO PENITENCIARIO',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIÓN',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN',
  `field12` DATETIME DEFAULT NULL COMMENT 'FECHA DE PRESCRIPCIÓN DE LA PENA',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE REVOCACIÓN DEL BENEFICIO ',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'ORDEN DE REAPREHENSIÓN',
  `field13` DATETIME DEFAULT NULL COMMENT 'FECHA DEL CUMPLIMIENTO DE LA ORDEN DE REAPREHENSIÓN',
  `field10` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpes15_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadg15s`
--

#DROP TABLE IF EXISTS `jt_ljjadg15s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadg15s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'CONDUCTA TIPIFICADA COMO DELITO',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE PETICIÓN DEL MINISTERIO PÚBLICO',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'ACUERDO',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'PRESCRIPCIÓN',
  `field7` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadg15_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljc16s`
--

#DROP TABLE IF EXISTS `jt_ljc16s`;
CREATE TABLE IF NOT EXISTS `jt_ljc16s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO EN QUE SE SEÑALA LA AUDIENCIA',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE AUDIENCIA',
  `faudiencia` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA AUDIENCIA',
  `field7` TEXT DEFAULT NULL COMMENT 'PRUEBAS A DESAHOGAR',
  `field8` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc16_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf16s`
--

#DROP TABLE IF EXISTS `jt_ljf16s`;
CREATE TABLE IF NOT EXISTS `jt_ljf16s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `faudiencia` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA AUDIENCIA',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO EN EL QUE SE SEÑALA LA AUDIENCIA',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE AUDIENCIA',
  `field7` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf16_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljp16s`
--

#DROP TABLE IF EXISTS `jt_ljp16s`;
CREATE TABLE IF NOT EXISTS `jt_ljp16s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO(S)',
  `field5` INT(10) DEFAULT NULL COMMENT 'PROCEDIMIENTO',
  `faudiencia` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA AUDIENCIA',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE AUDIENCIA',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'PRUEBAS A DESAHOGAR',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljp16_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljccm16s`
--

#DROP TABLE IF EXISTS `jt_ljccm16s`;
CREATE TABLE IF NOT EXISTS `jt_ljccm16s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` INT(10) DEFAULT NULL COMMENT 'NÚMERO DE FOJAS',
  `field6` TEXT DEFAULT NULL COMMENT 'No. Y DESCRIPCIÓN DE LOS EXPEDIENTES',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA ULTIMA ACTUACIÓN',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'ESTADO PROCESAL',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN DEL ARCHIVO JUDICIAL',
  `field10_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (isMoral)',
  `field10_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (paterno)',
  `field10_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (materno)',
  `field10_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field16` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljccm16_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpdng16s`
--

#DROP TABLE IF EXISTS `jt_ljpdng16s`;
CREATE TABLE IF NOT EXISTS `jt_ljpdng16s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'No de Causa',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO(S)',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE PETICIÓN DEL MP',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'AUTO',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'PRESCRIPCIÓN',
  `field8` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente extinto',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpdng16_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpes16s`
--

#DROP TABLE IF EXISTS `jt_ljpes16s`;
CREATE TABLE IF NOT EXISTS `jt_ljpes16s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'DELITOS(S)',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'BENEFICIO PENITENCIARIO',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'MOMENTO DEL DESISTIMIENTO',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE DESISTIMIENTO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpes16_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadg16s`
--

#DROP TABLE IF EXISTS `jt_ljjadg16s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadg16s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DEL ADOLESCENTE (isMoral)',
  `field2_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL ADOLESCENTE (paterno)',
  `field2_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL ADOLESCENTE (materno)',
  `field2_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL ADOLESCENTE (nombre)',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'CONDUCTA TIPIFICADA COMO DELITO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadg16_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljc17s`
--

#DROP TABLE IF EXISTS `jt_ljc17s`;
CREATE TABLE IF NOT EXISTS `jt_ljc17s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field5` INT(10) DEFAULT NULL COMMENT 'NÚMERO DE FOJAS',
  `field6` TEXT DEFAULT NULL COMMENT 'No. Y DESCRIPCIÓN DE LOS EXPEDIENTES',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE REMISIÓN',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'ESTADO PROCESAL',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN DEL ARCHIVO JUDICIAL',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field15` INT(10) DEFAULT NULL COMMENT 'MOTIVO DE LA REMISIÓN AL ARCHIVO',
  `field16` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc17_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf17s`
--

#DROP TABLE IF EXISTS `jt_ljf17s`;
CREATE TABLE IF NOT EXISTS `jt_ljf17s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` INT(10) DEFAULT NULL COMMENT 'NÚMERO DE FOJAS',
  `field6` TEXT DEFAULT NULL COMMENT 'No. Y DESCRIPCIÓN DE EXPEDIENTES',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE REMISIÓN',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'ESTADO PROCESAL',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN DEL ARCHIVO JUDICIAL',
  `field10_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (isMoral)',
  `field10_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (paterno)',
  `field10_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (materno)',
  `field10_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field13` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf17_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljp17s`
--

#DROP TABLE IF EXISTS `jt_ljp17s`;
CREATE TABLE IF NOT EXISTS `jt_ljp17s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PROCESADO 0 SENTENCIADO (isMoral)',
  `field2_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PROCESADO 0 SENTENCIADO (paterno)',
  `field2_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PROCESADO 0 SENTENCIADO (materno)',
  `field2_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PROCESADO 0 SENTENCIADO (nombre)',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'LUGAR DE RECLUSIÓN',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE LA DILIGENCIA',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DEL OFICIO',
  `field8` VARCHAR(255) DEFAULT NULL COMMENT 'MOTIVO DE LA SOLICITUD',
  `field7` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljp17_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljccm17s`
--

#DROP TABLE IF EXISTS `jt_ljccm17s`;
CREATE TABLE IF NOT EXISTS `jt_ljccm17s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` INT(10) DEFAULT NULL COMMENT 'FOJAS',
  `field6` TEXT DEFAULT NULL COMMENT 'No. Y DESCRIPCIÓN DE DOCUMENTOS',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'No DE CAJA',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN DEL ARCHIVO JUDICIAL',
  `field10_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (isMoral)',
  `field10_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (paterno)',
  `field10_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (materno)',
  `field10_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field16` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljccm17_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpdng17s`
--

#DROP TABLE IF EXISTS `jt_ljpdng17s`;
CREATE TABLE IF NOT EXISTS `jt_ljpdng17s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field2` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO(S)',
  `field3_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DEL PROCESADO (isMoral)',
  `field3_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL PROCESADO (paterno)',
  `field3_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL PROCESADO (materno)',
  `field3_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL PROCESADO (nombre)',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente extinto',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpdng17_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpes17s`
--

#DROP TABLE IF EXISTS `jt_ljpes17s`;
CREATE TABLE IF NOT EXISTS `jt_ljpes17s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'No DE ORDEN ',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA DE REMISIÓN',
  `field4_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'SENTENCIADO (isMoral)',
  `field4_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'SENTENCIADO (paterno)',
  `field4_materno` VARCHAR(45) DEFAULT NULL COMMENT 'SENTENCIADO (materno)',
  `field4_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'SENTENCIADO (nombre)',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO(S)',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS DEL EXPEDIENTE, TOMOS Y DOCUMENTOS  ',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'FOLIO DEVOLUCIÓN',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN DEL ARCHIVO AL JUZGADO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpes17_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadg17s`
--

#DROP TABLE IF EXISTS `jt_ljjadg17s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadg17s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'CONDUCTA TIPIFICADA COMO DELITO',
  `field4` INT(10) DEFAULT NULL COMMENT 'No. DE FOJAS',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO QUE ORDENA LA REMISIÓN',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN AL ARCHIVO JUDICIAL',
  `field7_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (isMoral)',
  `field7_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (paterno)',
  `field7_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (materno)',
  `field7_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadg17_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljc18s`
--

#DROP TABLE IF EXISTS `jt_ljc18s`;
CREATE TABLE IF NOT EXISTS `jt_ljc18s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field5` INT(10) DEFAULT NULL COMMENT 'FOJAS',
  `field6` TEXT DEFAULT NULL COMMENT 'No. Y DESCRIPCIÓN DE DOCUMENTOS',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE REMISIÓN',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN DEL ARCHIVO JUDICIAL',
  `field10_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (a. paterno)',
  `field10_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (a. materno)',
  `field10_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)',
  `field10_isMoral` TINYINT(1) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (es Moral)',
  `field10_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (isMoral)',
  `field10_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (paterno)',
  `field10_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (materno)',
  `field10_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field16` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc18_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf18s`
--

#DROP TABLE IF EXISTS `jt_ljf18s`;
CREATE TABLE IF NOT EXISTS `jt_ljf18s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` INT(10) DEFAULT NULL COMMENT 'NÚMERO DE FOJAS',
  `field6` TEXT DEFAULT NULL COMMENT 'No. Y DESCRIPCIÓN DE DOCUMENTOS',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE REMISIÓN',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN EN EL ARCHIVO JUDICIAL',
  `field10_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (isMoral)',
  `field10_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (paterno)',
  `field10_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (materno)',
  `field10_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field12` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE FOLIO DE DEVOLUCIÓN',
  `field14_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'RECIBIÓ (isMoral)',
  `field14_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'RECIBIÓ (paterno)',
  `field14_materno` VARCHAR(45) DEFAULT NULL COMMENT 'RECIBIÓ (materno)',
  `field14_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'RECIBIÓ (nombre)',
  `field15_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'ENTREGO (isMoral)',
  `field15_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'ENTREGO (paterno)',
  `field15_materno` VARCHAR(45) DEFAULT NULL COMMENT 'ENTREGO (materno)',
  `field15_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'ENTREGO (nombre)',
  `field19` INT(10) DEFAULT NULL COMMENT 'FIRMA DE LA PERSONA 1',
  `field19h` INT(10) DEFAULT NULL COMMENT 'HUELLA DE LA PERSONA 1',
  `field20_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE2 (isMoral)',
  `field20_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE2 (paterno)',
  `field20_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE2 (materno)',
  `field20_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE2 (nombre)',
  `field21` INT(10) DEFAULT NULL COMMENT 'FIRMA DE LA PERSONA 2',
  `field21h` INT(10) DEFAULT NULL COMMENT 'HUELLA DE LA PERSONA 2',
  `field22` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf18_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljp18s`
--

#DROP TABLE IF EXISTS `jt_ljp18s`;
CREATE TABLE IF NOT EXISTS `jt_ljp18s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'CAUSA',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'ESTATUS DEL EXPEDIENTE',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO(S)',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE PETICIÓN DEL MINISTERIO PÚBLICO',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'ACUERDO',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'FECHA DEL ACUERDO',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'PRESCRIPCIÓN',
  `field8` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljp18_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpdng18s`
--

#DROP TABLE IF EXISTS `jt_ljpdng18s`;
CREATE TABLE IF NOT EXISTS `jt_ljpdng18s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO(S)',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE REMISIÓN',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'ESTADO PROCESAL',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN POR EL ARCHIVO JUDICIAL',
  `field8_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (isMoral)',
  `field8_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (paterno)',
  `field8_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (materno)',
  `field8_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN DE SOLICITUD DE DEVOLUCIÓN',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN DEL ARCHIVO',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE FOLIO',
  `field12` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `exp_extinto` VARCHAR(45) DEFAULT NULL COMMENT 'Expediente extinto',
  `jorigen` INT(10) DEFAULT NULL COMMENT 'Juzgado de origen',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpdng18_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljjadg18s`
--

#DROP TABLE IF EXISTS `jt_ljjadg18s`;
CREATE TABLE IF NOT EXISTS `jt_ljjadg18s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field12` INT(10) DEFAULT NULL COMMENT 'TIPO DE AMPARO',
  `field2_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DEL QUEJOSO (isMoral)',
  `field2_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL QUEJOSO (paterno)',
  `field2_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL QUEJOSO (materno)',
  `field2_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL QUEJOSO (nombre)',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'ORGANO DE PROCEDENCIA (JDO DE DTO O TRIB. COL)',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE AMPARO',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO',
  `field6` INT(10) DEFAULT NULL COMMENT 'INFORME SOLICITADO',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENVÍO DE INFORME PREVIO',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'No. DE OFICIO DEL INFORME',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'RESOLUCIÓN DE AMPARO',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA DE EJECUTORIA',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'CUMPLIMENTO',
  `field13` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENVÍO DE INFORME JUSTIFICADO',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljjadg18_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljpes18s`
--

#DROP TABLE IF EXISTS `jt_ljpes18s`;
CREATE TABLE IF NOT EXISTS `jt_ljpes18s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljpes18_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljc19s`
--

#DROP TABLE IF EXISTS `jt_ljc19s`;
CREATE TABLE IF NOT EXISTS `jt_ljc19s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field5` INT(10) DEFAULT NULL COMMENT 'NÚMERO DE FOJAS',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE REMISIÓN PARA ANÁLISIS DE COTECIAD',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN EN EL ARCHIVO JUDICIAL',
  `field8_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (a. paterno)',
  `field8_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (a. materno)',
  `field8_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)',
  `field8_isMoral` TINYINT(1) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (es Moral)',
  `field8_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (isMoral)',
  `field8_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (paterno)',
  `field8_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (materno)',
  `field8_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)',
  `field12` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc19_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf19s`
--

#DROP TABLE IF EXISTS `jt_ljf19s`;
CREATE TABLE IF NOT EXISTS `jt_ljf19s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` INT(10) DEFAULT NULL COMMENT 'NÚMERO DE FOJAS',
  `field8_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (isMoral)',
  `field8_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (paterno)',
  `field8_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (materno)',
  `field8_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf19_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljp19s`
--

#DROP TABLE IF EXISTS `jt_ljp19s`;
CREATE TABLE IF NOT EXISTS `jt_ljp19s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'CAUSA',
  `field2` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL PROCESADO',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA',
  `field5` INT(10) DEFAULT NULL COMMENT 'FIRMA DEL PROCESADO',
  `field5h` INT(10) DEFAULT NULL COMMENT 'HUELLA DEL PROCESADO',
  `field6` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljp19_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljc20s`
--

#DROP TABLE IF EXISTS `jt_ljc20s`;
CREATE TABLE IF NOT EXISTS `jt_ljc20s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTRADA',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE VISTA',
  `field7` TINYINT(1) DEFAULT NULL COMMENT 'ESTA DE ACUERDO?',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DEL ACUERDO DE DESAHOGO',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc20_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf20s`
--

#DROP TABLE IF EXISTS `jt_ljf20s`;
CREATE TABLE IF NOT EXISTS `jt_ljf20s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTRADA',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE VISTA',
  `field7` TINYINT(1) DEFAULT NULL COMMENT 'ESTÁ DE ACUERDO ?',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DEL ACUERDO',
  `field9` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf20_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljp20s`
--

#DROP TABLE IF EXISTS `jt_ljp20s`;
CREATE TABLE IF NOT EXISTS `jt_ljp20s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'CAUSA',
  `field2` TEXT DEFAULT NULL COMMENT 'NOMBRE DEL  MP',
  `field3` TEXT DEFAULT NULL COMMENT 'DEFENSOR',
  `field4` TEXT DEFAULT NULL COMMENT 'FECHA EN QUE RECIBE LA CAUSA (MP)',
  `field5` TEXT DEFAULT NULL COMMENT 'FECHA EN QUE RECIBE LA CAUSA (DEFENSOR)',
  `field6` TEXT DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN DE LA CAUSA (MP)',
  `field7` TEXT DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN (DEFENSOR)',
  `field8` TEXT DEFAULT NULL COMMENT 'FECHA DE PRESENTACIÓN DE CONCLUSIONES (MP)',
  `field9` TEXT DEFAULT NULL COMMENT 'FECHA DE PRESENTACIÓN DE CONCLUSIONES (DEFENSOR)',
  `field10` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljp20_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljc21s`
--

#DROP TABLE IF EXISTS `jt_ljc21s`;
CREATE TABLE IF NOT EXISTS `jt_ljc21s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO QUE ORDENA LA VISTA',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE PUBLICACIÓN DE AUTO QUE ORDENA LA VISTA',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA VISTA AL MP',
  `field8_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL MP (a. paterno)',
  `field8_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL MP (a. materno)',
  `field8_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL MP (nombre)',
  `field8_isMoral` TINYINT(1) DEFAULT NULL COMMENT 'NOMBRE DEL MP (es Moral)',
  `field8_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'NOMBRE DEL MP (isMoral)',
  `field8_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL MP (paterno)',
  `field8_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL MP (materno)',
  `field8_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL MP (nombre)',
  `field9` INT(10) DEFAULT NULL COMMENT 'DEL MP',
  `field9h` INT(10) DEFAULT NULL COMMENT 'DEL MP',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN DEL MP',
  `field10` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc21_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf21s`
--

#DROP TABLE IF EXISTS `jt_ljf21s`;
CREATE TABLE IF NOT EXISTS `jt_ljf21s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field5` INT(10) DEFAULT NULL COMMENT 'PAÍS DE ORIGEN',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE RADICACIÓN',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE AUDIENCIA',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA  DE LA RESOLUCIÓN',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'EJECUCIÓN',
  `field11` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf21_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljp21s`
--

#DROP TABLE IF EXISTS `jt_ljp21s`;
CREATE TABLE IF NOT EXISTS `jt_ljp21s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'CAUSA',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field3` VARCHAR(45) DEFAULT NULL COMMENT 'DELITO(S)',
  `field4` INT(10) DEFAULT NULL COMMENT 'FOJAS',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE REMISIÓN',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'ESTADO PROCESAL',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIÓN AL ARCHIVO JUDICIAL',
  `field8_isMoral` TINYINT(1) NOT NULL DEFAULT '0' COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (isMoral)',
  `field8_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (paterno)',
  `field8_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (materno)',
  `field8_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO (nombre)',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE ARCHIVO',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'NÚMERO DE FOLIO',
  `field13` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIÓN',
  `field12` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljp21_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jt_ljf22s`
--

#DROP TABLE IF EXISTS `jt_ljf22s`;
CREATE TABLE IF NOT EXISTS `jt_ljf22s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `field4` INT(10) DEFAULT NULL COMMENT 'PAÍS DE ORIGEN',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE RADICACIÓN',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE AUDIENCIA',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIÓN',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN',
  `field9` VARCHAR(45) DEFAULT NULL COMMENT 'EJECUCIÓN Y/O IMPUGNACIÓN',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESTITUCIÓN',
  `field13` TEXT DEFAULT NULL COMMENT 'OBSERVACIONES',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljf22_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'progressive version counter',
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


-- END CUSTOM CODE
*/
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE GOBIERNO',
'com_jtca.ljc01',
'{"special":{"dbtable":"jtca_ljc01s","key":"id","type":"ljc01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc01Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_cuantia","targetColumn":"id","displayColumn":"cuantia"},{"sourceColumn":"field14","targetTable":"jtc_currency","targetColumn":"id","displayColumn":"currency"},{"sourceColumn":"field8","targetTable":"jtc_resolucion6","targetColumn":"id","displayColumn":"resolucion"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRETA DE REGISTRO DE SENTENCIAS -TURNO- (OFICIAL)',
'com_jtca.lsc01',
'{"special":{"dbtable":"jtca_lsc01s","key":"id","type":"lsc01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsc01Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"field2347","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field2348","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE GOBIERNO',
'com_jtca.ljf01',
'{"special":{"dbtable":"jtca_ljf01s","key":"id","type":"ljf01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf01Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_resolucion6","targetColumn":"id","displayColumn":"resolucion"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE GOBIERNO',
'com_jtca.ljp01',
'{"special":{"dbtable":"jtca_ljp01s","key":"id","type":"ljp01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljp01Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field19","targetTable":"jtc_situacion5","targetColumn":"id","displayColumn":"situacion"},{"sourceColumn":"field10","targetTable":"jtc_resolucion6","targetColumn":"id","displayColumn":"resolucion"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE GOBIERNO',
'com_jtca.ljccm01',
'{"special":{"dbtable":"jtca_ljccm01s","key":"id","type":"ljccm01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljccm01Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_cuantia","targetColumn":"id","displayColumn":"cuantia"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE GOBIERNO',
'com_jtca.ljoc01',
'{"special":{"dbtable":"jtca_ljoc01s","key":"id","type":"ljoc01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljoc01Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6_divisa","targetTable":"jtc_currency","targetColumn":"id","displayColumn":"currency"},{"sourceColumn":"field7","targetTable":"jtc_asunto","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field8","targetTable":"jtc_baja","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field9","targetTable":"jtc_enviados","targetColumn":"id","displayColumn":"text"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE GOBIERNO',
'com_jtca.ljpdng01',
'{"special":{"dbtable":"jtca_ljpdng01s","key":"id","type":"ljpdng01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpdng01Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE GOBIERNO',
'com_jtca.ljpes01',
'{"special":{"dbtable":"jtca_ljpes01s","key":"id","type":"ljpes01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpes01Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE GOBIERNO',
'com_jtca.ljjadng01',
'{"special":{"dbtable":"jtca_ljjadng01s","key":"id","type":"ljjadng01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadng01Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field7","targetTable":"jtc_ejecucion","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field8","targetTable":"jtc_situacion5","targetColumn":"id","displayColumn":"situacion"},{"sourceColumn":"field11","targetTable":"jtc_acuerdo","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field27","targetTable":"jtc_resolucion8","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field28","targetTable":"jtc_resolucion8","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field29","targetTable":"jtc_resolucion8","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field35","targetTable":"jtc_resolucion8","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field36","targetTable":"jtc_resolucion8","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field37","targetTable":"jtc_resolucion8","targetColumn":"id","displayColumn":"text"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE GOBIERNO',
'com_jtca.ljjadg01',
'{"special":{"dbtable":"jtca_ljjadg01s","key":"id","type":"ljjadg01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadg01Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field7","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES CON DETENIDO',
'com_jtca.lcp01',
'{"special":{"dbtable":"jtca_lcp01s","key":"id","type":"lcp01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp01Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES SIN DETENIDO',
'com_jtca.lcp02',
'{"special":{"dbtable":"jtca_lcp02s","key":"id","type":"lcp02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp02Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO DE REMISIONES CON DETENIDO DE JUZGADOS ADOLESCENTES',
'com_jtca.lcp03',
'{"special":{"dbtable":"jtca_lcp03s","key":"id","type":"lcp03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp03Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES CON DETENIDO DE PGR',
'com_jtca.lcp04',
'{"special":{"dbtable":"jtca_lcp04s","key":"id","type":"lcp04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp04Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES SIN DETENIDO DE PGR',
'com_jtca.lcp05',
'{"special":{"dbtable":"jtca_lcp05s","key":"id","type":"lcp05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp05Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO PARA INCOMPETENCIAS ADOLESCENTES',
'com_jtca.lcp06',
'{"special":{"dbtable":"jtca_lcp06s","key":"id","type":"lcp06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp06Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"field8","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO PARA EXCUSAS DE ADOLESCENTES',
'com_jtca.lcp07',
'{"special":{"dbtable":"jtca_lcp07s","key":"id","type":"lcp07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp07Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ETAPA DE EJECUCIÓN PARA ADOLESCENTES',
'com_jtca.lcp09',
'{"special":{"dbtable":"jtca_lcp09s","key":"id","type":"lcp09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp09Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO DE BENEFICIOS PENITENCIARIOS.',
'com_jtca.lcp10',
'{"special":{"dbtable":"jtca_lcp10s","key":"id","type":"lcp10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp10Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO PARA CONSIGNACIONES CON DETENIDO PRIMERA INSTANCIA.',
'com_jtca.lcp18',
'{"special":{"dbtable":"jtca_lcp18s","key":"id","type":"lcp18s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp18Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp18.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO PARA CONSIGNACIONES SIN DETENIDO PRIMERA INSTANCIA.',
'com_jtca.lcp19',
'{"special":{"dbtable":"jtca_lcp19s","key":"id","type":"lcp19s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp19Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp19.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO PARA INCOMPETENCIAS PRIMERA INSTANCIA.',
'com_jtca.lcp20',
'{"special":{"dbtable":"jtca_lcp20s","key":"id","type":"lcp20s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp20Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp20.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"field9","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO DE EXCUSAS PARA JUZGADOS DE PRIMERA INSTANCIA.',
'com_jtca.lcp21',
'{"special":{"dbtable":"jtca_lcp21s","key":"id","type":"lcp21s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp21Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp21.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ORDENES DE ARRAIGOS Y DE CATEOS PRIMERA INSTANCIA.',
'com_jtca.lcp22',
'{"special":{"dbtable":"jtca_lcp22s","key":"id","type":"lcp22s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp22Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp22.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ORDENES DE APREHENSIÓN, REAPREHENSION Y TRASLADO.',
'com_jtca.lcp23',
'{"special":{"dbtable":"jtca_lcp23s","key":"id","type":"lcp23s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp23Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp23.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field4","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REGISTRO DE LA LEY DE ACCESO A LAS MUJERES A UNA VIDA LIBRE DE VIOLENCIA.',
'com_jtca.lcp24',
'{"special":{"dbtable":"jtca_lcp24s","key":"id","type":"lcp24s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp24Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp24.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field4","targetTable":"jtc_delegaciones","targetColumn":"id","displayColumn":"delegacion"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO PARA CONSIGNACIONES CON DETENIDO DELITOS NO GRAVES',
'com_jtca.lcp25',
'{"special":{"dbtable":"jtca_lcp25s","key":"id","type":"lcp25s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp25Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp25.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO PARA CONSIGNACIONES SIN DETENIDO DELITOS NO GRAVES',
'com_jtca.lcp26',
'{"special":{"dbtable":"jtca_lcp26s","key":"id","type":"lcp26s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp26Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp26.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO PARA INCOMPETENCIAS DELITOS NO GRAVES',
'com_jtca.lcp27',
'{"special":{"dbtable":"jtca_lcp27s","key":"id","type":"lcp27s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp27Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp27.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"field8","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO DE EXCUSAS PARA JUZGADOS  DE DELITOS NO GRAVES',
'com_jtca.lcp28',
'{"special":{"dbtable":"jtca_lcp28s","key":"id","type":"lcp28s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp28Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp28.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ORDENES PARA ARRAIGOS Y CATEOS DELITOS NO GRAVES',
'com_jtca.lcp29',
'{"special":{"dbtable":"jtca_lcp29s","key":"id","type":"lcp29s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp29Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp29.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRETA DE OFICIOS.',
'com_jtca.lcp11',
'{"special":{"dbtable":"jtca_lcp11s","key":"id","type":"lcp11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp11Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRETA DE TURNO DE SALAS PARA JUZGADOS ORALES.',
'com_jtca.lcp12',
'{"special":{"dbtable":"jtca_lcp12s","key":"id","type":"lcp12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp12Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRETA DE EXPEDIENTILLOS DE JUZGADOS DE EJECUCIÓN PARA JUZGADOS PENAL O NO GRAVES.',
'com_jtca.lcp13',
'{"special":{"dbtable":"jtca_lcp13s","key":"id","type":"lcp13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp13Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRETA DE CUMPLIMIENTO DE EJECUTORIAS PARA JUZGADOS DE EJECUCIÓN.',
'com_jtca.lcp14',
'{"special":{"dbtable":"jtca_lcp14s","key":"id","type":"lcp14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp14Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRETA DE OFICIOS DE AMPAROS DE TRAMITE.',
'com_jtca.lcp15',
'{"special":{"dbtable":"jtca_lcp15s","key":"id","type":"lcp15s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp15Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp15.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRETA DE  OFICIOS DE AMPAROS DE CONOCIMIENTO.',
'com_jtca.lcp16',
'{"special":{"dbtable":"jtca_lcp16s","key":"id","type":"lcp16s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp16Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp16.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRETA DE LIBERTADES JUZGADOS DE PRIMERA INSTANCIA',
'com_jtca.lcp30',
'{"special":{"dbtable":"jtca_lcp30s","key":"id","type":"lcp30s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp30Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp30.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRETA DE LIBERTADES JUZGADOS DE DELITOS NO GRAVES',
'com_jtca.lcp31',
'{"special":{"dbtable":"jtca_lcp31s","key":"id","type":"lcp31s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp31Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp31.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRETA DE LIBERTADES JUZGADOS DE EJECUCIÓN DE SENTENCIA',
'com_jtca.lcp32',
'{"special":{"dbtable":"jtca_lcp32s","key":"id","type":"lcp32s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp32Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp32.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRETA DE LIBERTADES DE SALAS PENALES',
'com_jtca.lcp33',
'{"special":{"dbtable":"jtca_lcp33s","key":"id","type":"lcp33s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp33Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp33.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRETA DE LIBERTADES JUZGADOS DE ADOLESCENTES',
'com_jtca.lcp34',
'{"special":{"dbtable":"jtca_lcp34s","key":"id","type":"lcp34s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp34Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp34.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRETA DE LIBERTADES DE SALAS DE ADOLESCENTES',
'com_jtca.lcp35',
'{"special":{"dbtable":"jtca_lcp35s","key":"id","type":"lcp35s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp35Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp35.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRETA DE RETURNO DE ADOLESCENTES',
'com_jtca.lcp36',
'{"special":{"dbtable":"jtca_lcp36s","key":"id","type":"lcp36s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp36Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp36.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO DE EXCUSAS PARA JUZGADOS DE JUSTICIA PARA ADOLESCENTES',
'com_jtca.lcp39',
'{"special":{"dbtable":"jtca_lcp39s","key":"id","type":"lcp39s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp39Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp39.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ORDENES DE DETENCIÓN PARA JUZGADOS DE JUSTICIA PARA ADOLESCENTES',
'com_jtca.lcp40',
'{"special":{"dbtable":"jtca_lcp40s","key":"id","type":"lcp40s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp40Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp40.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO DE REMISIONES SIN DETENIDO DE JUZGADOS ADOLESCENTES',
'com_jtca.lcp41',
'{"special":{"dbtable":"jtca_lcp41s","key":"id","type":"lcp41s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlcp41Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp41.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE GOBIERNO',
'com_jtca.lspe01',
'{"special":{"dbtable":"jtca_lspe01s","key":"id","type":"lspe01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlspe01Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lspe01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE RESOLUCIONES DE PLANO',
'com_jtca.lspe02',
'{"special":{"dbtable":"jtca_lspe02s","key":"id","type":"lspe02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlspe02Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lspe02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE RESOLUCIONES',
'com_jtca.lspe03',
'{"special":{"dbtable":"jtca_lspe03s","key":"id","type":"lspe03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlspe03Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lspe03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE BENEFICIOS REVOCADO Y O/A',
'com_jtca.lspe04',
'{"special":{"dbtable":"jtca_lspe04s","key":"id","type":"lspe04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlspe04Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lspe04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE DESISTIMIENTO',
'com_jtca.lspe05',
'{"special":{"dbtable":"jtca_lspe05s","key":"id","type":"lspe05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlspe05Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lspe05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ARCHIVO',
'com_jtca.lspe06',
'{"special":{"dbtable":"jtca_lspe06s","key":"id","type":"lspe06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlspe06Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lspe06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE FINANZAS',
'com_jtca.lspe07',
'{"special":{"dbtable":"jtca_lspe07s","key":"id","type":"lspe07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlspe07Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lspe07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE INGRESO Y EGRESO DE BILLETES',
'com_jtca.lspe08',
'{"special":{"dbtable":"jtca_lspe08s","key":"id","type":"lspe08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlspe08Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lspe08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE GOBIERNO (SISTEMA TRADICIONAL)',
'com_jtca.lsps01',
'{"special":{"dbtable":"jtca_lsps01s","key":"id","type":"lsps01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsps01Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsps01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field2350","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRETA DE REGISTRO DE ASISTENCIA (OFICIAL)',
'com_jtca.lsc02',
'{"special":{"dbtable":"jtca_lsc02s","key":"id","type":"lsc02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsc02Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE INGRESOS DE VALORES',
'com_jtca.ljc02',
'{"special":{"dbtable":"jtca_ljc02s","key":"id","type":"ljc02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc02Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REGISTRO DE BILLETES DE DEPÓSITO (INGRESOS)',
'com_jtca.ljp02',
'{"special":{"dbtable":"jtca_ljp02s","key":"id","type":"ljp02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljp02Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE INGRESO DE VALORES',
'com_jtca.ljccm02',
'{"special":{"dbtable":"jtca_ljccm02s","key":"id","type":"ljccm02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljccm02Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CERTIFICADO DE DEPÓSITOS DE INGRESO',
'com_jtca.ljpdng02',
'{"special":{"dbtable":"jtca_ljpdng02s","key":"id","type":"ljpdng02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpdng02Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE PROMOCIONES',
'com_jtca.ljpes02',
'{"special":{"dbtable":"jtca_ljpes02s","key":"id","type":"ljpes02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpes02Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE PROMOCIONES',
'com_jtca.ljjadng02',
'{"special":{"dbtable":"jtca_ljjadng02s","key":"id","type":"ljjadng02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadng02Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE PROMOCIONES',
'com_jtca.ljjadg02',
'{"special":{"dbtable":"jtca_ljjadg02s","key":"id","type":"ljjadg02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadg02Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field7","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE GOBIERNO (NUEVO SISTEMA) (UNITARIO)',
'com_jtca.lsps02',
'{"special":{"dbtable":"jtca_lsps02s","key":"id","type":"lsps02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsps02Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsps02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('Libro de ejemplo',
'com_jtca.lejemplo',
'{"special":{"dbtable":"jtca_lejemplos","key":"id","type":"lejemplos","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlejemploRoute',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lejemplo.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"my_ref2","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"my_ref","targetTable":"jtc_materia","targetColumn":"id","displayColumn":"materia"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRETA DE VISTAS AL M.P (OFICIAL)',
'com_jtca.lsc03',
'{"special":{"dbtable":"jtca_lsc03s","key":"id","type":"lsc03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsc03Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE EGRESOS DE VALORES',
'com_jtca.ljc03',
'{"special":{"dbtable":"jtca_ljc03s","key":"id","type":"ljc03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc03Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE EGRESOS DE VALORES',
'com_jtca.ljccm03',
'{"special":{"dbtable":"jtca_ljccm03s","key":"id","type":"ljccm03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljccm03Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CERTIFICADO DE DEPÓSITOS DE INGRESOS Y EGRESOS',
'com_jtca.ljoc03',
'{"special":{"dbtable":"jtca_ljoc03s","key":"id","type":"ljoc03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljoc03Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CERTIFICADO DE DEPÓSITOS DE EGRESO',
'com_jtca.ljpdng03',
'{"special":{"dbtable":"jtca_ljpdng03s","key":"id","type":"ljpdng03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpdng03Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE RECURSOS DE APELACIÓN',
'com_jtca.ljpes03',
'{"special":{"dbtable":"jtca_ljpes03s","key":"id","type":"ljpes03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpes03Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('AGENDA DE AUDIENCIAS',
'com_jtca.ljjadng03',
'{"special":{"dbtable":"jtca_ljjadng03s","key":"id","type":"ljjadng03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadng03Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE INGRESOS',
'com_jtca.ljjadg03',
'{"special":{"dbtable":"jtca_ljjadg03s","key":"id","type":"ljjadg03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadg03Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE GOBIERNO (NUEVO SISTEMA) (COLEGIADO)',
'com_jtca.lsps03',
'{"special":{"dbtable":"jtca_lsps03s","key":"id","type":"lsps03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsps03Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsps03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE MULTAS (OFICIAL)',
'com_jtca.lsc04',
'{"special":{"dbtable":"jtca_lsc04s","key":"id","type":"lsc04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsc04Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REGISTRO DE PROMOCIONES',
'com_jtca.ljc04',
'{"special":{"dbtable":"jtca_ljc04s","key":"id","type":"ljc04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc04Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE PROMOCIONES',
'com_jtca.ljf04',
'{"special":{"dbtable":"jtca_ljf04s","key":"id","type":"ljf04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf04Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REGISTRO DE PROMOCIONES',
'com_jtca.ljp04',
'{"special":{"dbtable":"jtca_ljp04s","key":"id","type":"ljp04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljp04Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE PROMOCIONES',
'com_jtca.ljoc04',
'{"special":{"dbtable":"jtca_ljoc04s","key":"id","type":"ljoc04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljoc04Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE PROMOCIONES',
'com_jtca.ljpdng04',
'{"special":{"dbtable":"jtca_ljpdng04s","key":"id","type":"ljpdng04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpdng04Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE OFICIOS',
'com_jtca.ljpes04',
'{"special":{"dbtable":"jtca_ljpes04s","key":"id","type":"ljpes04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpes04Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE SENTENCIAS',
'com_jtca.ljjadng04',
'{"special":{"dbtable":"jtca_ljjadng04s","key":"id","type":"ljjadng04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadng04Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE EGRESOS',
'com_jtca.ljjadg04',
'{"special":{"dbtable":"jtca_ljjadg04s","key":"id","type":"ljjadg04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadg04Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ACTUARIO',
'com_jtca.lsps04',
'{"special":{"dbtable":"jtca_lsps04s","key":"id","type":"lsps04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsps04Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsps04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('AGENDA (OFICIAL)',
'com_jtca.lsc05',
'{"special":{"dbtable":"jtca_lsc05s","key":"id","type":"lsc05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsc05Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO PARA SENTENCIA',
'com_jtca.ljc05',
'{"special":{"dbtable":"jtca_ljc05s","key":"id","type":"ljc05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc05Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field10","targetTable":"jtc_resolucion6","targetColumn":"id","displayColumn":"resolucion"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE SENTENCIAS',
'com_jtca.ljf05',
'{"special":{"dbtable":"jtca_ljf05s","key":"id","type":"ljf05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf05Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO PARA SENTENCIA',
'com_jtca.ljp05',
'{"special":{"dbtable":"jtca_ljp05s","key":"id","type":"ljp05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljp05Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO PARA SENTENCIA',
'com_jtca.ljccm05',
'{"special":{"dbtable":"jtca_ljccm05s","key":"id","type":"ljccm05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljccm05Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field10","targetTable":"jtc_resolucion6","targetColumn":"id","displayColumn":"resolucion"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE SENTENCIAS',
'com_jtca.ljoc05',
'{"special":{"dbtable":"jtca_ljoc05s","key":"id","type":"ljoc05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljoc05Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field8","targetTable":"jtc_resolucion6","targetColumn":"id","displayColumn":"resolucion"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO PARA SENTENCIAS',
'com_jtca.ljpdng05',
'{"special":{"dbtable":"jtca_ljpdng05s","key":"id","type":"ljpdng05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpdng05Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ACTUARIOS',
'com_jtca.ljpes05',
'{"special":{"dbtable":"jtca_ljpes05s","key":"id","type":"ljpes05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpes05Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE RECURSOS DE APELACIÓN',
'com_jtca.ljjadng05',
'{"special":{"dbtable":"jtca_ljjadng05s","key":"id","type":"ljjadng05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadng05Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE SENTENCIAS',
'com_jtca.ljjadg05',
'{"special":{"dbtable":"jtca_ljjadg05s","key":"id","type":"ljjadg05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadg05Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REGISTRO DE AMPAROS',
'com_jtca.lsps05',
'{"special":{"dbtable":"jtca_lsps05s","key":"id","type":"lsps05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsps05Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsps05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE BILLETES Y PÓLIZAS (OFICIAL)',
'com_jtca.lsc06',
'{"special":{"dbtable":"jtca_lsc06s","key":"id","type":"lsc06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsc06Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE RECURSOS DE APELACIÓN',
'com_jtca.ljc06',
'{"special":{"dbtable":"jtca_ljc06s","key":"id","type":"ljc06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc06Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE RECURSOS DE APELACIÓN',
'com_jtca.ljf06',
'{"special":{"dbtable":"jtca_ljf06s","key":"id","type":"ljf06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf06Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field17","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE RECURSOS DE APELACIÓN',
'com_jtca.ljp06',
'{"special":{"dbtable":"jtca_ljp06s","key":"id","type":"ljp06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljp06Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE RECURSOS DE APELACIÓN',
'com_jtca.ljccm06',
'{"special":{"dbtable":"jtca_ljccm06s","key":"id","type":"ljccm06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljccm06Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field16","targetTable":"jtc_admision","targetColumn":"id","displayColumn":"admision"},{"sourceColumn":"field12","targetTable":"jtc_tipoapelacion","targetColumn":"id","displayColumn":"tipo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE EXHORTOS',
'com_jtca.ljoc06',
'{"special":{"dbtable":"jtca_ljoc06s","key":"id","type":"ljoc06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljoc06Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field4","targetTable":"jtc_exhortos","targetColumn":"id","displayColumn":"exhorto"},{"sourceColumn":"field11","targetTable":"jtc_devueltos","targetColumn":"id","displayColumn":"text"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE RECURSOS DE APELACIÓN',
'com_jtca.ljpdng06',
'{"special":{"dbtable":"jtca_ljpdng06s","key":"id","type":"ljpdng06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpdng06Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE AMPAROS',
'com_jtca.ljpes06',
'{"special":{"dbtable":"jtca_ljpes06s","key":"id","type":"ljpes06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpes06Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE EXHORTOS',
'com_jtca.ljjadng06',
'{"special":{"dbtable":"jtca_ljjadng06s","key":"id","type":"ljjadng06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadng06Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE RECURSOS DE APELACIÓN',
'com_jtca.ljjadg06',
'{"special":{"dbtable":"jtca_ljjadg06s","key":"id","type":"ljjadg06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadg06Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE PEDIMENTOS',
'com_jtca.lsps06',
'{"special":{"dbtable":"jtca_lsps06s","key":"id","type":"lsps06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsps06Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsps06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE EGRESOS (OFICIAL)',
'com_jtca.lsc07',
'{"special":{"dbtable":"jtca_lsc07s","key":"id","type":"lsc07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsc07Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE EXHORTOS',
'com_jtca.ljc07',
'{"special":{"dbtable":"jtca_ljc07s","key":"id","type":"ljc07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc07Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE EXHORTOS',
'com_jtca.ljf07',
'{"special":{"dbtable":"jtca_ljf07s","key":"id","type":"ljf07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf07Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE EXHORTOS',
'com_jtca.ljccm07',
'{"special":{"dbtable":"jtca_ljccm07s","key":"id","type":"ljccm07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljccm07Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE OFICIOS',
'com_jtca.ljoc07',
'{"special":{"dbtable":"jtca_ljoc07s","key":"id","type":"ljoc07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljoc07Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE EXHORTOS',
'com_jtca.ljpdng07',
'{"special":{"dbtable":"jtca_ljpdng07s","key":"id","type":"ljpdng07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpdng07Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE AMPAROS CIRCULANTES',
'com_jtca.ljpes07',
'{"special":{"dbtable":"jtca_ljpes07s","key":"id","type":"ljpes07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpes07Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE OFICIOS',
'com_jtca.ljjadng07',
'{"special":{"dbtable":"jtca_ljjadng07s","key":"id","type":"ljjadng07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadng07Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('REGISTRO DE BILLETES DE DEPOSITO',
'com_jtca.lsps07',
'{"special":{"dbtable":"jtca_lsps07s","key":"id","type":"lsps07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsps07Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsps07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE PÓLIZAS Y FIANZAS (OFICIAL) - ingresos',
'com_jtca.lsc08',
'{"special":{"dbtable":"jtca_lsc08s","key":"id","type":"lsc08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsc08Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE OFICIOS',
'com_jtca.ljc08',
'{"special":{"dbtable":"jtca_ljc08s","key":"id","type":"ljc08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc08Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE OFICIOS',
'com_jtca.ljf08',
'{"special":{"dbtable":"jtca_ljf08s","key":"id","type":"ljf08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf08Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE EXHORTOS',
'com_jtca.ljp08',
'{"special":{"dbtable":"jtca_ljp08s","key":"id","type":"ljp08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljp08Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE OFICIOS',
'com_jtca.ljccm08',
'{"special":{"dbtable":"jtca_ljccm08s","key":"id","type":"ljccm08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljccm08Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ACTUARIOS',
'com_jtca.ljoc08',
'{"special":{"dbtable":"jtca_ljoc08s","key":"id","type":"ljoc08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljoc08Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field10","targetTable":"jtc_tipodiligencia","targetColumn":"id","displayColumn":"tipo"},{"sourceColumn":"field13","targetTable":"jtc_lanzamientos","targetColumn":"id","displayColumn":"text"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE OFICIOS',
'com_jtca.ljpdng08',
'{"special":{"dbtable":"jtca_ljpdng08s","key":"id","type":"ljpdng08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpdng08Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE PEDIMENTOS',
'com_jtca.ljpes08',
'{"special":{"dbtable":"jtca_ljpes08s","key":"id","type":"ljpes08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpes08Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE AMPAROS',
'com_jtca.ljjadng08',
'{"special":{"dbtable":"jtca_ljjadng08s","key":"id","type":"ljjadng08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadng08Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field3","targetTable":"jtc_amparo2","targetColumn":"id","displayColumn":"text"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE PÓLIZAS Y FIANZAS (OFICIAL) - egresos',
'com_jtca.lsc14',
'{"special":{"dbtable":"jtca_lsc14s","key":"id","type":"lsc14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsc14Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO DE ENTREGAS DE TOCAS',
'com_jtca.lsps08',
'{"special":{"dbtable":"jtca_lsps08s","key":"id","type":"lsps08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsps08Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsps08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE GOBIERNO (OFICIAL)',
'com_jtca.lsc09',
'{"special":{"dbtable":"jtca_lsc09s","key":"id","type":"lsc09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsc09Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ACTUARIOS',
'com_jtca.ljc09',
'{"special":{"dbtable":"jtca_ljc09s","key":"id","type":"ljc09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc09Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ACTUARIOS',
'com_jtca.ljf09',
'{"special":{"dbtable":"jtca_ljf09s","key":"id","type":"ljf09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf09Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE OFICIOS',
'com_jtca.ljp09',
'{"special":{"dbtable":"jtca_ljp09s","key":"id","type":"ljp09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljp09Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ACTUARIOS',
'com_jtca.ljccm09',
'{"special":{"dbtable":"jtca_ljccm09s","key":"id","type":"ljccm09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljccm09Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTICIA',
'com_jtca.ljoc09',
'{"special":{"dbtable":"jtca_ljoc09s","key":"id","type":"ljoc09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljoc09Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field5","targetTable":"jtc_tipoauxiliar","targetColumn":"id","displayColumn":"tipo"},{"sourceColumn":"field7","targetTable":"jtc_especialidades","targetColumn":"id","displayColumn":"especialidad"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ACTUARIOS',
'com_jtca.ljpdng09',
'{"special":{"dbtable":"jtca_ljpdng09s","key":"id","type":"ljpdng09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpdng09Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE MULTAS JUDICIALES',
'com_jtca.ljpes09',
'{"special":{"dbtable":"jtca_ljpes09s","key":"id","type":"ljpes09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpes09Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ACTUARIO',
'com_jtca.ljjadng09',
'{"special":{"dbtable":"jtca_ljjadng09s","key":"id","type":"ljjadng09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadng09Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ACTUARIOS',
'com_jtca.ljjadg09',
'{"special":{"dbtable":"jtca_ljjadg09s","key":"id","type":"ljjadg09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadg09Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REMISIÓN AL ARCHIVO',
'com_jtca.lsps09',
'{"special":{"dbtable":"jtca_lsps09s","key":"id","type":"lsps09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsps09Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsps09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ACTUARIO (OFICIAL)',
'com_jtca.lsc10',
'{"special":{"dbtable":"jtca_lsc10s","key":"id","type":"lsc10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsc10Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTICIA',
'com_jtca.ljc10',
'{"special":{"dbtable":"jtca_ljc10s","key":"id","type":"ljc10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc10Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_especialidades","targetColumn":"id","displayColumn":"especialidad"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTICIA, TUTORES Y CURADORES',
'com_jtca.ljf10',
'{"special":{"dbtable":"jtca_ljf10s","key":"id","type":"ljf10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf10Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field7","targetTable":"jtc_especialidades","targetColumn":"id","displayColumn":"especialidad"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ACTUARIO',
'com_jtca.ljp10',
'{"special":{"dbtable":"jtca_ljp10s","key":"id","type":"ljp10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljp10Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REGISTRO PARA NOTARIOS',
'com_jtca.ljccm10',
'{"special":{"dbtable":"jtca_ljccm10s","key":"id","type":"ljccm10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljccm10Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE AMPAROS',
'com_jtca.ljoc10',
'{"special":{"dbtable":"jtca_ljoc10s","key":"id","type":"ljoc10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljoc10Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_amparo","targetColumn":"id","displayColumn":"amparo"},{"sourceColumn":"field11","targetTable":"jtc_informe","targetColumn":"id","displayColumn":"informe"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REGISTRO DE AMPAROS',
'com_jtca.ljpdng10',
'{"special":{"dbtable":"jtca_ljpdng10s","key":"id","type":"ljpdng10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpdng10Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('AGENDA DE AUDIENCIAS PARA JUICIOS ORALES',
'com_jtca.ljpes10',
'{"special":{"dbtable":"jtca_ljpes10s","key":"id","type":"ljpes10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpes10Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE PEDIMENTOS',
'com_jtca.ljjadng10',
'{"special":{"dbtable":"jtca_ljjadng10s","key":"id","type":"ljjadng10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadng10Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE AMPAROS',
'com_jtca.ljjadg10',
'{"special":{"dbtable":"jtca_ljjadg10s","key":"id","type":"ljjadg10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadg10Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field12","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field6","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE MULTAS',
'com_jtca.lsps10',
'{"special":{"dbtable":"jtca_lsps10s","key":"id","type":"lsps10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsps10Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsps10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRETA DE OFICIOS (OFICIAL)',
'com_jtca.lsc11',
'{"special":{"dbtable":"jtca_lsc11s","key":"id","type":"lsc11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsc11Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REGISTRO PARA NOTARIOS',
'com_jtca.ljf11',
'{"special":{"dbtable":"jtca_ljf11s","key":"id","type":"ljf11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf11Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REGISTRO DE AMPAROS',
'com_jtca.ljp11',
'{"special":{"dbtable":"jtca_ljp11s","key":"id","type":"ljp11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljp11Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REGISTRO DE AMPAROS',
'com_jtca.ljccm11',
'{"special":{"dbtable":"jtca_ljccm11s","key":"id","type":"ljccm11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljccm11Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field7","targetTable":"jtc_procedencia","targetColumn":"id","displayColumn":"procedencia"},{"sourceColumn":"field12","targetTable":"jtc_informe","targetColumn":"id","displayColumn":"informe"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE MULTAS',
'com_jtca.ljoc11',
'{"special":{"dbtable":"jtca_ljoc11s","key":"id","type":"ljoc11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljoc11Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE AMPAROS CIRCULANTES O NEGADOS',
'com_jtca.ljpdng11',
'{"special":{"dbtable":"jtca_ljpdng11s","key":"id","type":"ljpdng11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpdng11Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE INGRESOS Y EGRESOS DE BILLETES DE DEPÓSITO',
'com_jtca.ljpes11',
'{"special":{"dbtable":"jtca_ljpes11s","key":"id","type":"ljpes11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpes11Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REMISIÓN AL ARCHIVO',
'com_jtca.ljjadng11',
'{"special":{"dbtable":"jtca_ljjadng11s","key":"id","type":"ljjadng11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadng11Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE FIANZAS',
'com_jtca.ljjadg11',
'{"special":{"dbtable":"jtca_ljjadg11s","key":"id","type":"ljjadg11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadg11Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE FIANZA',
'com_jtca.lsps11',
'{"special":{"dbtable":"jtca_lsps11s","key":"id","type":"lsps11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsps11Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsps11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REGISTRO DE AMPAROS (OFICIAL)',
'com_jtca.lsc12',
'{"special":{"dbtable":"jtca_lsc12s","key":"id","type":"lsc12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsc12Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REGISTRO DE AMPAROS',
'com_jtca.ljc12',
'{"special":{"dbtable":"jtca_ljc12s","key":"id","type":"ljc12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc12Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field7","targetTable":"jtc_procedencia","targetColumn":"id","displayColumn":"procedencia"},{"sourceColumn":"field12","targetTable":"jtc_informe","targetColumn":"id","displayColumn":"informe"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REGISTRO DE AMPAROS',
'com_jtca.ljf12',
'{"special":{"dbtable":"jtca_ljf12s","key":"id","type":"ljf12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf12Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field7","targetTable":"jtc_amparo","targetColumn":"id","displayColumn":"amparo"},{"sourceColumn":"field9","targetTable":"jtc_procedencia","targetColumn":"id","displayColumn":"procedencia"},{"sourceColumn":"field11","targetTable":"jtc_informe","targetColumn":"id","displayColumn":"informe"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REGISTRO DE AMPAROS CIRCULANTES O NEGADOS',
'com_jtca.ljp12',
'{"special":{"dbtable":"jtca_ljp12s","key":"id","type":"ljp12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljp12Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE FIANZAS',
'com_jtca.ljccm12',
'{"special":{"dbtable":"jtca_ljccm12s","key":"id","type":"ljccm12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljccm12Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('AGENDA DE AUDIENCIAS',
'com_jtca.ljoc12',
'{"special":{"dbtable":"jtca_ljoc12s","key":"id","type":"ljoc12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljoc12Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field5","targetTable":"jtc_tipoaudiencia","targetColumn":"id","displayColumn":"tipo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE FIANZAS',
'com_jtca.ljpdng12',
'{"special":{"dbtable":"jtca_ljpdng12s","key":"id","type":"ljpdng12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpdng12Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE FIANZAS',
'com_jtca.ljpes12',
'{"special":{"dbtable":"jtca_ljpes12s","key":"id","type":"ljpes12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpes12Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBROS DE VALORES',
'com_jtca.ljjadng12',
'{"special":{"dbtable":"jtca_ljjadng12s","key":"id","type":"ljjadng12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadng12Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('REGISTRO DE PROMOCIONES',
'com_jtca.lsps12',
'{"special":{"dbtable":"jtca_lsps12s","key":"id","type":"lsps12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsps12Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsps12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('PAPELETAS PARA EL PRÉSTAMO DE EXPEDIENTES',
'com_jtca.lsc13',
'{"special":{"dbtable":"jtca_lsc13s","key":"id","type":"lsc13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsc13Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE FIANZAS',
'com_jtca.ljc13',
'{"special":{"dbtable":"jtca_ljc13s","key":"id","type":"ljc13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc13Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE FIANZAS',
'com_jtca.ljf13',
'{"special":{"dbtable":"jtca_ljf13s","key":"id","type":"ljf13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf13Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE FIANZAS',
'com_jtca.ljp13',
'{"special":{"dbtable":"jtca_ljp13s","key":"id","type":"ljp13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljp13Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE MULTAS',
'com_jtca.ljccm13',
'{"special":{"dbtable":"jtca_ljccm13s","key":"id","type":"ljccm13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljccm13Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE NOTARIOS',
'com_jtca.ljoc13',
'{"special":{"dbtable":"jtca_ljoc13s","key":"id","type":"ljoc13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljoc13Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE MULTAS',
'com_jtca.ljpdng13',
'{"special":{"dbtable":"jtca_ljpdng13s","key":"id","type":"ljpdng13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpdng13Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE RESOLUCIONES EN AUDIENCIA',
'com_jtca.ljpes13',
'{"special":{"dbtable":"jtca_ljpes13s","key":"id","type":"ljpes13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpes13Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('AGENDA DE AUDIENCIAS',
'com_jtca.ljjadg13',
'{"special":{"dbtable":"jtca_ljjadg13s","key":"id","type":"ljjadg13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadg13Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('CONTROL DE FIRMAS DEL PROCESADO',
'com_jtca.lsps13',
'{"special":{"dbtable":"jtca_lsps13s","key":"id","type":"lsps13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsps13Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsps13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE MULTAS',
'com_jtca.ljc14',
'{"special":{"dbtable":"jtca_ljc14s","key":"id","type":"ljc14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc14Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE MULTAS',
'com_jtca.ljf14',
'{"special":{"dbtable":"jtca_ljf14s","key":"id","type":"ljf14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf14Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE MULTAS',
'com_jtca.ljp14',
'{"special":{"dbtable":"jtca_ljp14s","key":"id","type":"ljp14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljp14Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE FIANZAS',
'com_jtca.ljoc14',
'{"special":{"dbtable":"jtca_ljoc14s","key":"id","type":"ljoc14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljoc14Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('AGENDA DE AUDIENCIAS',
'com_jtca.ljpdng14',
'{"special":{"dbtable":"jtca_ljpdng14s","key":"id","type":"ljpdng14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpdng14Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE RESOLUCIONES DE PLANO',
'com_jtca.ljpes14',
'{"special":{"dbtable":"jtca_ljpes14s","key":"id","type":"ljpes14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpes14Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE PEDIMENTOS',
'com_jtca.ljjadg14',
'{"special":{"dbtable":"jtca_ljjadg14s","key":"id","type":"ljjadg14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadg14Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE OFICIOS',
'com_jtca.lsps14',
'{"special":{"dbtable":"jtca_lsps14s","key":"id","type":"lsps14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlsps14Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsps14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO A CARGO DE LOS SECRETARIOS DE ACUERDOS',
'com_jtca.ljf15',
'{"special":{"dbtable":"jtca_ljf15s","key":"id","type":"ljf15s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf15Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf15.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('AGENDA DE AUDIENCIAS',
'com_jtca.ljccm15',
'{"special":{"dbtable":"jtca_ljccm15s","key":"id","type":"ljccm15s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljccm15Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm15.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE PEDIMENTOS',
'com_jtca.ljpdng15',
'{"special":{"dbtable":"jtca_ljpdng15s","key":"id","type":"ljpdng15s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpdng15Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng15.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE BENEFICIOS REVOCADOS Y ORDENES DE RE-APREHENSIÓN',
'com_jtca.ljpes15',
'{"special":{"dbtable":"jtca_ljpes15s","key":"id","type":"ljpes15s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpes15Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes15.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('ARTICULO 36 o ARTICULO 28 LJADF',
'com_jtca.ljjadg15',
'{"special":{"dbtable":"jtca_ljjadg15s","key":"id","type":"ljjadg15s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadg15Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg15.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('AGENDA DE AUDIENCIAS',
'com_jtca.ljc16',
'{"special":{"dbtable":"jtca_ljc16s","key":"id","type":"ljc16s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc16Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc16.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('AGENDA DE AUDIENCIAS',
'com_jtca.ljf16',
'{"special":{"dbtable":"jtca_ljf16s","key":"id","type":"ljf16s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf16Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf16.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('AGENDA DE AUDIENCIAS',
'com_jtca.ljp16',
'{"special":{"dbtable":"jtca_ljp16s","key":"id","type":"ljp16s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljp16Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp16.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field5","targetTable":"jtc_procedimiento","targetColumn":"id","displayColumn":"procedimiento"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REMISIÓN DE EXPEDIENTES AL ARCHIVO',
'com_jtca.ljccm16',
'{"special":{"dbtable":"jtca_ljccm16s","key":"id","type":"ljccm16s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljccm16Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm16.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REGISTRO EN QUE SE HAYA OBSEQUIADO O NEGADO LA ORDEN DE APREHENSIÓN, COMPARECENCIA, PRESENTACIÓN, ARTÍCULO 36 DEL CÓDIGO DE PROCEDIMIENTOS PENALES Y OTROS',
'com_jtca.ljpdng16',
'{"special":{"dbtable":"jtca_ljpdng16s","key":"id","type":"ljpdng16s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpdng16Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng16.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE DESISTIMIENTOS',
'com_jtca.ljpes16',
'{"special":{"dbtable":"jtca_ljpes16s","key":"id","type":"ljpes16s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpes16Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes16.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE PRESENTACIÓN DE ADOLESCENTES EN LIBERTAD ANTE EL JUEZ',
'com_jtca.ljjadg16',
'{"special":{"dbtable":"jtca_ljjadg16s","key":"id","type":"ljjadg16s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadg16Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg16.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REMISIÓN AL ARCHIVO',
'com_jtca.ljc17',
'{"special":{"dbtable":"jtca_ljc17s","key":"id","type":"ljc17s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc17Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc17.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field15","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REMISIÓN AL ARCHIVO',
'com_jtca.ljf17',
'{"special":{"dbtable":"jtca_ljf17s","key":"id","type":"ljf17s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf17Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf17.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE PEDIMENTOS',
'com_jtca.ljp17',
'{"special":{"dbtable":"jtca_ljp17s","key":"id","type":"ljp17s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljp17Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp17.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO',
'com_jtca.ljccm17',
'{"special":{"dbtable":"jtca_ljccm17s","key":"id","type":"ljccm17s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljccm17Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm17.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE FIRMAS PROCESADOS',
'com_jtca.ljpdng17',
'{"special":{"dbtable":"jtca_ljpdng17s","key":"id","type":"ljpdng17s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpdng17Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng17.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ARCHIVO',
'com_jtca.ljpes17',
'{"special":{"dbtable":"jtca_ljpes17s","key":"id","type":"ljpes17s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpes17Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes17.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REMISIÓN AL ARCHIVO',
'com_jtca.ljjadg17',
'{"special":{"dbtable":"jtca_ljjadg17s","key":"id","type":"ljjadg17s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadg17Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg17.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO',
'com_jtca.ljc18',
'{"special":{"dbtable":"jtca_ljc18s","key":"id","type":"ljc18s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc18Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc18.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO',
'com_jtca.ljf18',
'{"special":{"dbtable":"jtca_ljf18s","key":"id","type":"ljf18s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf18Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf18.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REGISTRO EN QUE SE HAYA OBSEQUIADO O NEGADO LA ORDEN DE APREHENSIÓN, COMPARECENCIA, PRESENTACIÓN, ARTÍCULO 36 DEL CÓDIGO DE PROCEDIMIENTOS PENALES Y OTROS',
'com_jtca.ljp18',
'{"special":{"dbtable":"jtca_ljp18s","key":"id","type":"ljp18s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljp18Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp18.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REMISIÓN AL ARCHIVO',
'com_jtca.ljpdng18',
'{"special":{"dbtable":"jtca_ljpdng18s","key":"id","type":"ljpdng18s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpdng18Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng18.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE AMPAROS *LOCOS*',
'com_jtca.ljjadg18',
'{"special":{"dbtable":"jtca_ljjadg18s","key":"id","type":"ljjadg18s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljjadg18Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg18.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field12","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field6","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE EXHORTOS',
'com_jtca.ljpes18',
'{"special":{"dbtable":"jtca_ljpes18s","key":"id","type":"ljpes18s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljpes18Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes18.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ENVÍO DE EXPEDIENTES AL ARCHIVO JUDICIAL PARA SU DESTRUCCIÓN',
'com_jtca.ljc19',
'{"special":{"dbtable":"jtca_ljc19s","key":"id","type":"ljc19s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc19Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc19.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE ENVÍO DE EXPEDIENTES AL ARCHIVO JUDICIAL PARA SU DESTRUCCIÓN',
'com_jtca.ljf19',
'{"special":{"dbtable":"jtca_ljf19s","key":"id","type":"ljf19s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf19Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf19.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE FIRMAS DE PROCESADOS',
'com_jtca.ljp19',
'{"special":{"dbtable":"jtca_ljp19s","key":"id","type":"ljp19s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljp19Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp19.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE ASUNTOS CONFORME A LOS ARTÍCULOS 13 FRACCIÓN XIV Y 25 DE LA LEY DE TRANSPARENCIA Y ACCESO A LA INFORMACIÓN PÚBLICA',
'com_jtca.ljc20',
'{"special":{"dbtable":"jtca_ljc20s","key":"id","type":"ljc20s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc20Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc20.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE ASUNTOS CONFORME A LOS ARTÍCULOS 13 FRACCIÓN XIV Y 25 DE LA LEY DE TRANSPARENCIA Y ACCESO A LA INFORMACIÓN PÚBLICA',
'com_jtca.ljf20',
'{"special":{"dbtable":"jtca_ljf20s","key":"id","type":"ljf20s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf20Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf20.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE TURNO PARA CONCLUSIONES',
'com_jtca.ljp20',
'{"special":{"dbtable":"jtca_ljp20s","key":"id","type":"ljp20s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljp20Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp20.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE MINISTERIO PÚBLICO',
'com_jtca.ljc21',
'{"special":{"dbtable":"jtca_ljc21s","key":"id","type":"ljc21s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc21Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc21.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE ADOPCIONES INTERNACIONALES',
'com_jtca.ljf21',
'{"special":{"dbtable":"jtca_ljf21s","key":"id","type":"ljf21s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf21Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf21.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field5","targetTable":"jtc_country","targetColumn":"id","displayColumn":"country"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REMISIÓN AL ARCHIVO',
'com_jtca.ljp21',
'{"special":{"dbtable":"jtca_ljp21s","key":"id","type":"ljp21s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljp21Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp21.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljf22s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE CONTROL DE RESTITUCIONES INTERNACIONALES',
'com_jtca.ljf22',
'{"special":{"dbtable":"jtca_ljf22s","key":"id","type":"ljf22s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljf22Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf22.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field4","targetTable":"jtc_country","targetColumn":"id","displayColumn":"country"}]}'
);
