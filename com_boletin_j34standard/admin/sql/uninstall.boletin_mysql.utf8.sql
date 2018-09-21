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

DROP TABLE IF EXISTS `#__rem_facuerdos`;
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_boletin.facuerdo';
DELETE FROM `#__menu` WHERE `title`='COM_BOLETIN_FACUERDOS' AND `type`='component';


DELETE FROM `#__assets` WHERE `name` LIKE '%com_boletin%';
DELETE FROM `#__extensions` WHERE `name`='com_boletin' AND `type`='component';
DELETE FROM `#__menu` WHERE `title`='COM_BOLETIN' AND `type`='component';

#[ %%IF GENERATE_CATEGORIES%%] 
DELETE FROM `#__categories` WHERE `extension`='com_boletin';
DELETE FROM `#__content_types` WHERE `type_alias` = 'com_boletin.category';
DELETE FROM `#__menu` WHERE `title`='COM_BOLETIN_CATEGORIES' AND `type`='component';
#[ %%ENDIF GENERATE_CATEGORIES%%]

SET FOREIGN_KEY_CHECKS=1;