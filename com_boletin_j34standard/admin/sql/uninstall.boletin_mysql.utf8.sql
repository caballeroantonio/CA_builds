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
-- Uninstall of `#__boletin` tables
--

SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `#__boletin_tsjcdmx_juzgados_familiares_antiguos`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_boletin.tsjcdmx_juzgados_familiares_antiguo';
DELETE FROM `#__menu` WHERE `title`='COM_BOLETIN_TSJCDMX_JUZGADOS_FAMILIARES_ANTIGUOS' AND `type`='component';
DROP TABLE IF EXISTS `#__boletin_tsjcdmx_juzgados_civiles_antiguos`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_boletin.tsjcdmx_juzgados_civiles_antiguo';
DELETE FROM `#__menu` WHERE `title`='COM_BOLETIN_TSJCDMX_JUZGADOS_CIVILES_ANTIGUOS' AND `type`='component';
DROP TABLE IF EXISTS `#__boletin_tsjcdmx_juzgado_acuerdos`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_boletin.tsjcdmx_juzgado_acuerdo';
DELETE FROM `#__menu` WHERE `title`='COM_BOLETIN_TSJCDMX_JUZGADO_ACUERDOS' AND `type`='component';
DROP TABLE IF EXISTS `#__boletin_tsjcdmx_sala_acuerdos`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_boletin.tsjcdmx_sala_acuerdo';
DELETE FROM `#__menu` WHERE `title`='COM_BOLETIN_TSJCDMX_SALA_ACUERDOS' AND `type`='component';
DROP TABLE IF EXISTS `#__boletin_prodecon_bacuerdos`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_boletin.prodecon_bacuerdo';
DELETE FROM `#__menu` WHERE `title`='COM_BOLETIN_PRODECON_BACUERDOS' AND `type`='component';
DROP TABLE IF EXISTS `#__boletin_profeco_proveedores`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_boletin.profeco_proveedor';
DELETE FROM `#__menu` WHERE `title`='COM_BOLETIN_PROFECO_PROVEEDORES' AND `type`='component';
DROP TABLE IF EXISTS `#__boletin_srsps_bacuerdos`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_boletin.srsps_bacuerdo';
DELETE FROM `#__menu` WHERE `title`='COM_BOLETIN_SRSPS_BACUERDOS' AND `type`='component';
DROP TABLE IF EXISTS `#__boletin_rsps_bacuerdos`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_boletin.rsps_bacuerdo';
DELETE FROM `#__menu` WHERE `title`='COM_BOLETIN_RSPS_BACUERDOS' AND `type`='component';
DROP TABLE IF EXISTS `#__boletin_pjf_bacuerdos`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_boletin.pjf_bacuerdo';
DELETE FROM `#__menu` WHERE `title`='COM_BOLETIN_PJF_BACUERDOS' AND `type`='component';
DROP TABLE IF EXISTS `#__boletin_tfca_bacuerdos`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_boletin.tfca_bacuerdo';
DELETE FROM `#__menu` WHERE `title`='COM_BOLETIN_TFCA_BACUERDOS' AND `type`='component';
DROP TABLE IF EXISTS `#__boletin_tfjfa_bacuerdos`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_boletin.tfjfa_bacuerdo';
DELETE FROM `#__menu` WHERE `title`='COM_BOLETIN_TFJFA_BACUERDOS' AND `type`='component';


DELETE FROM `#__assets` WHERE `name` LIKE '%com_boletin%';
DELETE FROM `#__extensions` WHERE `name`='com_boletin' AND `type`='component';
DELETE FROM `#__menu` WHERE `title`='COM_BOLETIN' AND `type`='component';

#[ %%IF GENERATE_CATEGORIES%%] 
DELETE FROM `#__categories` WHERE `extension`='com_boletin';
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_boletin.category';
DELETE FROM `#__menu` WHERE `title`='COM_BOLETIN_CATEGORIES' AND `type`='component';
#[ %%ENDIF GENERATE_CATEGORIES%%]

SET FOREIGN_KEY_CHECKS=1;