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
-- Referential integrity
--

# root category - uncategorised, no result� buena idea aparece filtro uncategorised, de momento Archived=2
INSERT INTO `#__categories` (`asset_id`,`parent_id`,`lft`,`rgt`,`level`,`path`,`extension`,`title`,
`alias`,`note`,`description`,
`published`,`checked_out`,`checked_out_time`,`access`,`params`,
`metadesc`,`metakey`,`metadata`,`created_user_id`,`created_time`,`modified_user_id`,`modified_time`,`hits`,`language`,`version`) VALUES 
(0,1,1,2,1,'boletin-facuerdo-categories','com_boletin','uncategorised',
'boletin-facuerdo-uncategorised','','Root Boletin Facuerdo uncategorised',
2,0,'0000-00-00 00:00:00',1,'{\"category_layout\":\"\",\"image\":\"\",\"image_alt\":\"\"}','','','{\"author\":\"\",\"robots\":\"\"}',1,'2011-01-01 00:00:01',0,'0000-00-00 00:00:00',0,'*',0);

SET FOREIGN_KEY_CHECKS=0;
SET SESSION sql_mode='NO_AUTO_VALUE_ON_ZERO';

--					
-- CUSTOM CODE es necesario modificar ca.fields.mysql_size para que acepte INT UNSIGNED porque de otro modo no se pueden los constraints					
--

#[%%START_CUSTOM_CODE%%]
INSERT IGNORE INTO `#__users` (`id`, `name`, `username`, `email`) VALUES ('0', 'undefined', 'undefined', 'undefined');
#[%%END_CUSTOM_CODE%%]

SET FOREIGN_KEY_CHECKS=1;
SET SESSION sql_mode='';



SET FOREIGN_KEY_CHECKS=0;
SET SESSION sql_mode='NO_AUTO_VALUE_ON_ZERO';

SET FOREIGN_KEY_CHECKS=1;
SET SESSION sql_mode='';
