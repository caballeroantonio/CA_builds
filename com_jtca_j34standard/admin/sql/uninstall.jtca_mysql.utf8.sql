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
-- Uninstall of `#__jtca` tables
--
DROP TABLE IF EXISTS `jt_ljc01s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc01';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC01S' AND `type`='component';
DROP TABLE IF EXISTS `jt_ljc02s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc02';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC02S' AND `type`='component';
DROP TABLE IF EXISTS `jt_ljc03s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc03';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC03S' AND `type`='component';
DROP TABLE IF EXISTS `jt_ljc04s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc04';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC04S' AND `type`='component';
DROP TABLE IF EXISTS `jt_ljc05s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc05';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC05S' AND `type`='component';
DROP TABLE IF EXISTS `jt_ljc06s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc06';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC06S' AND `type`='component';
DROP TABLE IF EXISTS `jt_ljc07s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc07';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC07S' AND `type`='component';
DROP TABLE IF EXISTS `jt_ljc08s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc08';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC08S' AND `type`='component';
DROP TABLE IF EXISTS `jt_ljc09s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc09';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC09S' AND `type`='component';
DROP TABLE IF EXISTS `jt_ljc10s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc10';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC10S' AND `type`='component';
DROP TABLE IF EXISTS `jt_ljc12s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc12';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC12S' AND `type`='component';
DROP TABLE IF EXISTS `jt_ljc13s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc13';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC13S' AND `type`='component';
DROP TABLE IF EXISTS `jt_ljc14s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc14';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC14S' AND `type`='component';
DROP TABLE IF EXISTS `jt_ljc16s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc16';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC16S' AND `type`='component';
DROP TABLE IF EXISTS `jt_ljc17s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc17';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC17S' AND `type`='component';
DROP TABLE IF EXISTS `jt_ljc18s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc18';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC18S' AND `type`='component';
DROP TABLE IF EXISTS `jt_ljc19s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc19';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC19S' AND `type`='component';
DROP TABLE IF EXISTS `jt_ljc20s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc20';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC20S' AND `type`='component';
DROP TABLE IF EXISTS `jt_ljc21s`;
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.ljc21';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_LJC21S' AND `type`='component';


DELETE FROM `#__assets` WHERE `name` LIKE '%com_jtca%';
DELETE FROM `#__extensions` WHERE `name`='com_jtca' AND `type`='component';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA' AND `type`='component';

#[ %%IF GENERATE_CATEGORIES%%] 
DELETE FROM `#__categories` WHERE `extension`='com_jtca';
DELETE FROM #__content_types WHERE `type_alias` = 'com_jtca.category';
DELETE FROM `#__menu` WHERE `title`='COM_JTCA_CATEGORIES' AND `type`='component';
#[ %%ENDIF GENERATE_CATEGORIES%%]
