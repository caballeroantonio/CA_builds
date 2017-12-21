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
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'No. DEL DOCUMENTO',
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
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
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
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'No DEL BILLETE',
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
-- Table structure for table `jt_ljc11s`
--

#DROP TABLE IF EXISTS `jt_ljc11s`;
CREATE TABLE IF NOT EXISTS `jt_ljc11s` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_organo` INT(10) DEFAULT NULL COMMENT 'Órgano',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Año j.',
  `id_expediente` INT(10) DEFAULT NULL COMMENT 'Expediente',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretaría',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in #__users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `jtca_ljc11_createdby` FOREIGN KEY (`created_by`) REFERENCES `#__users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('Libro de ejemplo',
'com_jtca.lejemplo',
'{"special":{"dbtable":"jtca_lejemplos","key":"id","type":"lejemplos","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getlejemploRoute',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lejemplo.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"my_ref2","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"my_ref","targetTable":"gpcb.jtc_country","targetColumn":"id","displayColumn":"country"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE REGISTRO PARA NOTARIOS',
'com_jtca.ljc11',
'{"special":{"dbtable":"jtca_ljc11s","key":"id","type":"ljc11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc11Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
--
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Inserts to table `jt_ljc21s`
--
INSERT INTO `#__content_types` (`type_title`,`type_alias`,`table`,`rules`,`field_mappings`,`router`,`content_history_options`) VALUES ('LIBRO DE MINISTERIO PÚBLICO',
'com_jtca.ljc21',
'{"special":{"dbtable":"jtca_ljc21s","key":"id","type":"ljc21s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
'',
'{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
'jtcaHelperRoute::getljc21Route',
'{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc21.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
);
