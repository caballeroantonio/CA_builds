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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE ENTRADA',
  `field6` INT(10) DEFAULT NULL COMMENT 'CUANTA',
  `field14` INT(10) DEFAULT NULL COMMENT 'TIPO DE MONEDA',
  `field7` DECIMAL(11,2) DEFAULT NULL COMMENT 'SUERTE PRINCIPAL',
  `field8` INT(10) DEFAULT NULL COMMENT 'TIPO DE RESOLUCIN',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIN',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIN',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIN DE LA SALA',
  `field12` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIN DE LA SALA',
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
  KEY `idx_id_expediente` (`id_expediente`),
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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE RECIBE EL DOCUMENTO',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE EXPIDE EL DOCUMENTO',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'REFERENCIA',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'No DEL DOCUMENTO',
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
  KEY `idx_id_expediente` (`id_expediente`),
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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field1_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'BENEFICIARIO (a paterno)',
  `field1_materno` VARCHAR(45) DEFAULT NULL COMMENT 'BENEFICIARIO (a materno)',
  `field1_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'BENEFICIARIO (nombre)',
  `field1_isMoral` TINYINT(1) DEFAULT NULL COMMENT 'BENEFICIARIO (es Moral)',
  `field2` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONALIDAD',
  `field3` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE RECIBE',
  `field4` VARCHAR(45) DEFAULT NULL COMMENT 'No DEL BILLETE',
  `field5` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO',
  `field6_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN RECIBE (a paterno)',
  `field6_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN RECIBE (a materno)',
  `field6_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN RECIBE (nombre)',
  `field6_isMoral` TINYINT(1) DEFAULT NULL COMMENT 'NOMBRE DE QUIEN RECIBE (es Moral)',
  `field7` INT(10) DEFAULT NULL COMMENT 'DE QUIEN RECIBE',
  `field7h` INT(10) DEFAULT NULL COMMENT 'DE QUIEN RECIBE',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'DATOS DE IDENTIFICACIN',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'FOJAS',
  `field11` INT(10) DEFAULT NULL COMMENT 'DEL JUEZ',
  `field12` INT(10) DEFAULT NULL COMMENT 'DEL SECRETARIO',
  `field13` VARCHAR(45) DEFAULT NULL COMMENT 'CONCEPTO',
  `field14` DATETIME DEFAULT NULL COMMENT 'FECHA  DEL AUTO QUE ORDENA LA DEVOLUCIN',
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
  KEY `idx_id_expediente` (`id_expediente`),
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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field1` DATETIME DEFAULT NULL COMMENT 'FECHA Y HORA DE RECEPCIN',
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
  KEY `idx_id_expediente` (`id_expediente`),
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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field2` INT(10) DEFAULT NULL COMMENT 'NMERO DE FOJAS',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE CITACIN',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA PUBLICACIN DE LA CITACIN',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE SENTENCIA',
  `field9` TINYINT(1) DEFAULT NULL COMMENT 'SE DEJA SIN EFECTOS',
  `field10` INT(10) DEFAULT NULL COMMENT 'TIPO DE SENTENCIA',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE PUBLICACIN BOLETN JUDICIAL',
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
  KEY `idx_id_expediente` (`id_expediente`),
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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field17` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE INTERPUSO LA APELACIN',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE RESOLUCIN  APELADA',
  `field16` VARCHAR(45) DEFAULT NULL COMMENT 'EFECTOS',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO ADMISORIO',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE CONTESTACIN DE AGRAVIOS O REBELDA',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE REMISIN A  LA SALA',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'No DE OFICIO DE REMISIN',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIN DE LA SALA',
  `field12` TINYINT(1) DEFAULT NULL COMMENT 'PREVENTIVA',
  `field13` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIN',
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
  KEY `idx_id_expediente` (`id_expediente`),
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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'No DE EXHORTO',
  `field2` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTRADA',
  `field3` VARCHAR(255) DEFAULT NULL COMMENT 'AUTORIDAD EXHORTANTE',
  `field7` VARCHAR(45) DEFAULT NULL COMMENT 'AUTO DE RADICACIN',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'DILIGENCIA ENCOMENDADA',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE DILIGENCIACIN',
  `field10` TINYINT(1) DEFAULT NULL COMMENT 'SE CUMPLIMENT',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIN',
  `field12` VARCHAR(45) DEFAULT NULL COMMENT 'No DE OFICIO DE DEVOLUCIN',
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
  KEY `idx_id_expediente` (`id_expediente`),
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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DEL OFICIO',
  `field10` VARCHAR(45) DEFAULT NULL COMMENT 'No DE OFICIO',
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
  KEY `idx_id_expediente` (`id_expediente`),
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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field5` INT(10) DEFAULT NULL COMMENT 'NMERO DE CUADERNOS O CDULAS',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTREGA AL ACTUARIO',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO POR DILIGENCIAR',
  `field9` TEXT DEFAULT NULL COMMENT 'LUGAR DONDE DEBE ACTUARSE',
  `field10` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA DILIGENCIA',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA DEVOLUCIN',
  `field14` TINYINT(1) DEFAULT NULL COMMENT 'USO DE LA FUERZA PBLICA',
  `field15` TEXT DEFAULT NULL COMMENT 'DETALLE DEL USO DE LA FUERZA PBLICA',
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
  KEY `idx_id_expediente` (`id_expediente`),
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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field5_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL PERITO (a paterno)',
  `field5_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL PERITO (a materno)',
  `field5_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL PERITO (nombre)',
  `field5_isMoral` TINYINT(1) DEFAULT NULL COMMENT 'NOMBRE DEL PERITO (es Moral)',
  `field6` INT(10) DEFAULT NULL COMMENT 'ESPECIALIDAD',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE DESIGNACIN',
  `field8` DATETIME DEFAULT NULL COMMENT 'FECHA DE NOTIFICACIN DEL AUTO DE DESIGNACIN',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE ACEPTACIN',
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
  KEY `idx_id_expediente` (`id_expediente`),
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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field1` VARCHAR(45) DEFAULT NULL COMMENT 'TIPO DE AMPARO',
  `field6_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'QUEJOSO (a paterno)',
  `field6_materno` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (a materno)',
  `field6_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'QUEJOSO (nombre)',
  `field6_isMoral` TINYINT(1) DEFAULT NULL COMMENT 'QUEJOSO (es Moral)',
  `field7` INT(10) DEFAULT NULL COMMENT 'RGANO DE PROCEDENCIA',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'No DE AMPARO',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE INGRESO',
  `field12` INT(10) DEFAULT NULL COMMENT 'INFORME SOLICITADO',
  `field13` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENVO DEL INFORME',
  `field14` VARCHAR(45) DEFAULT NULL COMMENT 'SENTIDO DE LA RESOLUCIN DE AMPARO',
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
  KEY `idx_id_expediente` (`id_expediente`),
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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field2_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'GARANTE (a paterno)',
  `field2_materno` VARCHAR(45) DEFAULT NULL COMMENT 'GARANTE (a materno)',
  `field2_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'GARANTE (nombre)',
  `field2_isMoral` TINYINT(1) DEFAULT NULL COMMENT 'GARANTE (es Moral)',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA EN QUE SE RECIBE LA PLIZA DE FIANZA',
  `field5` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA AFIANZADORA',
  `field6` DECIMAL(11,2) DEFAULT NULL COMMENT 'MONTO DE LA PLIZA DE FIANZA',
  `field7` DECIMAL(11,2) DEFAULT NULL COMMENT 'SI SE HACE EFECTIVA LA GARANTA ANOTAR EL MOTIVO POR EL CUAL SE HIZO EFECTIVA',
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
  KEY `idx_id_expediente` (`id_expediente`),
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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field4` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA RESOLUCIN QUE LA DECRETA',
  `field5_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (a paterno)',
  `field5_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (a materno)',
  `field5_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (nombre)',
  `field5_isMoral` TINYINT(1) DEFAULT NULL COMMENT 'NOMBRE DE LA PERSONA A QUIEN SE LE IMPUSO (es Moral)',
  `field6` VARCHAR(45) DEFAULT NULL COMMENT 'No DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIN',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIN',
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
  KEY `idx_id_expediente` (`id_expediente`),
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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO EN QUE SE SEALA LA AUDIENCIA',
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
  KEY `idx_id_expediente` (`id_expediente`),
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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field5` INT(10) DEFAULT NULL COMMENT 'NMERO DE FOJAS',
  `field6` TEXT DEFAULT NULL COMMENT 'No Y DESCRIPCIN DE LOS EXPEDIENTES',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE REMISIN',
  `field8` VARCHAR(45) DEFAULT NULL COMMENT 'ESTADO PROCESAL',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIN DEL ARCHIVO JUDICIAL',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIN',
  `field15` INT(10) DEFAULT NULL COMMENT 'MOTIVO DE LA REMISIN AL ARCHIVO',
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
  KEY `idx_id_expediente` (`id_expediente`),
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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field5` INT(10) DEFAULT NULL COMMENT 'FOJAS',
  `field6` TEXT DEFAULT NULL COMMENT 'No Y DESCRIPCIN DE DOCUMENTOS',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE REMISIN',
  `field9` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIN DEL ARCHIVO JUDICIAL',
  `field10_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE RECIBI DEL ARCHIVO (a paterno)',
  `field10_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBI DEL ARCHIVO (a materno)',
  `field10_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBI DEL ARCHIVO (nombre)',
  `field10_isMoral` TINYINT(1) DEFAULT NULL COMMENT 'PERSONA QUE RECIBI DEL ARCHIVO (es Moral)',
  `field11` DATETIME DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIN',
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
  KEY `idx_id_expediente` (`id_expediente`),
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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field5` INT(10) DEFAULT NULL COMMENT 'NMERO DE FOJAS',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE REMISIN PARA ANLISIS DE COTECIAD',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE RECEPCIN EN EL ARCHIVO JUDICIAL',
  `field8_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'PERSONA QUE RECIBI DEL ARCHIVO (a paterno)',
  `field8_materno` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBI DEL ARCHIVO (a materno)',
  `field8_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'PERSONA QUE RECIBI DEL ARCHIVO (nombre)',
  `field8_isMoral` TINYINT(1) DEFAULT NULL COMMENT 'PERSONA QUE RECIBI DEL ARCHIVO (es Moral)',
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
  KEY `idx_id_expediente` (`id_expediente`),
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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DE ENTRADA',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO DE VISTA',
  `field7` TINYINT(1) DEFAULT NULL COMMENT 'ESTA DE ACUERDO',
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
  KEY `idx_id_expediente` (`id_expediente`),
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
  `id_organo` INT(10) DEFAULT NULL COMMENT 'rgano',
  `id_secretaria` INT(10) DEFAULT NULL COMMENT 'Secretara',
  `anoj` YEAR(4) DEFAULT NULL COMMENT 'Ao j',
  `field5` DATETIME DEFAULT NULL COMMENT 'FECHA DEL AUTO QUE ORDENA LA VISTA',
  `field6` DATETIME DEFAULT NULL COMMENT 'FECHA DE PUBLICACIN DE AUTO QUE ORDENA LA VISTA',
  `field7` DATETIME DEFAULT NULL COMMENT 'FECHA DE LA VISTA AL MP',
  `field8_paterno` VARCHAR(255) DEFAULT NULL COMMENT 'NOMBRE DEL MP (a paterno)',
  `field8_materno` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL MP (a materno)',
  `field8_nombre` VARCHAR(45) DEFAULT NULL COMMENT 'NOMBRE DEL MP (nombre)',
  `field8_isMoral` TINYINT(1) DEFAULT NULL COMMENT 'NOMBRE DEL MP (es Moral)',
  `field9` INT(10) DEFAULT NULL COMMENT 'DEL MP',
  `field9h` INT(10) DEFAULT NULL COMMENT 'DEL MP',
  `field11` VARCHAR(45) DEFAULT NULL COMMENT 'FECHA DE DEVOLUCIN DEL MP',
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
  KEY `idx_id_expediente` (`id_expediente`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

