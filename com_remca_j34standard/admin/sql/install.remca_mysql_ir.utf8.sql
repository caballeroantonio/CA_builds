-- @version 		$Id:$
-- @name			RealEstateManagerCA
-- @author			caballeroantonio (caballeroantonio.com)
-- @package			com_remca
-- @subpackage		com_remca.admin
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
(0,1,1,2,1,'remca-house-categories','com_remca','uncategorised',
'remca-house-uncategorised','','Root Remca House uncategorised',
2,0,'0000-00-00 00:00:00',1,'{\"category_layout\":\"\",\"image\":\"\",\"image_alt\":\"\"}','','','{\"author\":\"\",\"robots\":\"\"}',1,'2011-01-01 00:00:01',0,'0000-00-00 00:00:00',0,'*',0);
INSERT INTO `#__categories` (`asset_id`,`parent_id`,`lft`,`rgt`,`level`,`path`,`extension`,`title`,
`alias`,`note`,`description`,
`published`,`checked_out`,`checked_out_time`,`access`,`params`,
`metadesc`,`metakey`,`metadata`,`created_user_id`,`created_time`,`modified_user_id`,`modified_time`,`hits`,`language`,`version`) VALUES 
(0,1,1,2,1,'remca-wa_entry_conversation-categories','com_remca','uncategorised',
'remca-wa_entry_conversation-uncategorised','','Root Remca Wa_entry_conversation uncategorised',
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

INSERT IGNORE INTO `#__rem_houses` (`id`, `name`, `description`, `ordering`, `state`) VALUES (0, "undefined", "undefined default option", 0, 0);

INSERT IGNORE INTO `#__rem_houses` (`id`, `name`, `description`, `ordering`, `state`) VALUES (0, "undefined", "undefined default option", 0, 0);

INSERT IGNORE INTO `#__rem_main_categories` (`id`, `name`, `description`, `ordering`, `state`) VALUES (0, "undefined", "undefined default option", 0, 0);

INSERT IGNORE INTO `#__rem_const` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `#__rem_languages` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `#__rem_houses` (`id`, `name`, `description`, `ordering`, `state`) VALUES (0, "undefined", "undefined default option", 0, 0);

INSERT IGNORE INTO `#__rem_feature` (`id`, `name`, `state`) VALUES (0, "undefined", 0);

INSERT IGNORE INTO `#__rem_rents` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `#__rem_houses` (`id`, `name`, `description`, `ordering`, `state`) VALUES (0, "undefined", "undefined default option", 0, 0);

INSERT IGNORE INTO `#__rem_orders` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `#__rem_houses` (`id`, `name`, `description`, `ordering`, `state`) VALUES (0, "undefined", "undefined default option", 0, 0);

INSERT IGNORE INTO `#__rem_houses` (`id`, `name`, `description`, `ordering`, `state`) VALUES (0, "undefined", "undefined default option", 0, 0);

INSERT IGNORE INTO `#__rem_houses` (`id`, `name`, `description`, `ordering`, `state`) VALUES (0, "undefined", "undefined default option", 0, 0);

INSERT IGNORE INTO `#__rem_houses` (`id`, `name`, `description`, `ordering`, `state`) VALUES (0, "undefined", "undefined default option", 0, 0);

INSERT IGNORE INTO `#__rem_houses` (`id`, `name`, `description`, `ordering`, `state`) VALUES (0, "undefined", "undefined default option", 0, 0);

INSERT IGNORE INTO `#__rem_houses` (`id`, `name`, `description`, `ordering`, `state`) VALUES (0, "undefined", "undefined default option", 0, 0);

INSERT IGNORE INTO `#__rem_houses` (`id`, `name`, `description`, `ordering`, `state`) VALUES (0, "undefined", "undefined default option", 0, 0);

INSERT IGNORE INTO `#__rem_lstates` (`id`, `name`, `ordering`, `state`) VALUES (0, "undefined", 0, 0);

INSERT IGNORE INTO `#__rem_countries` (`id`, `name`, `ordering`, `state`) VALUES (0, "undefined", 0, 0);

INSERT IGNORE INTO `#__rem_lmunicipalities` (`id`, `name`, `ordering`, `state`) VALUES (0, "undefined", 0, 0);

INSERT IGNORE INTO `#__rem_lstates` (`id`, `name`, `ordering`, `state`) VALUES (0, "undefined", 0, 0);

INSERT IGNORE INTO `#__rem_countries` (`id`, `name`, `ordering`, `state`) VALUES (0, "undefined", 0, 0);

INSERT IGNORE INTO `#__rem_countries` (`id`, `name`, `ordering`, `state`) VALUES (0, "undefined", 0, 0);

INSERT IGNORE INTO `#__rem_houses` (`id`, `name`, `description`, `ordering`, `state`) VALUES (0, "undefined", "undefined default option", 0, 0);

INSERT IGNORE INTO `#__rem_wa_title_conversations` (`id`) VALUES (0);
					
ALTER TABLE `#__rem_buying_requests` ADD CONSTRAINT `fk2919_id_house`
FOREIGN KEY (`id_house`) REFERENCES `#__rem_houses` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_buying_requests` ADD CONSTRAINT `fk2920_id_user`
FOREIGN KEY (`id_user`) REFERENCES `#__users` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_rem_categories` ADD CONSTRAINT `fk2927_iditem`
FOREIGN KEY (`iditem`) REFERENCES `#__rem_houses` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_rem_categories` ADD CONSTRAINT `fk2928_idcat`
FOREIGN KEY (`idcat`) REFERENCES `#__rem_main_categories` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_const_language` ADD CONSTRAINT `fk2931_fk_constid`
FOREIGN KEY (`fk_constid`) REFERENCES `#__rem_const` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_const_language` ADD CONSTRAINT `fk2932_fk_languagesid`
FOREIGN KEY (`fk_languagesid`) REFERENCES `#__rem_languages` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_feature_houses` ADD CONSTRAINT `fk2937_id_house`
FOREIGN KEY (`id_house`) REFERENCES `#__rem_houses` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_feature_houses` ADD CONSTRAINT `fk2938_id_featured`
FOREIGN KEY (`id_featured`) REFERENCES `#__rem_feature` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_houses` ADD CONSTRAINT `fk2941_id_rent`
FOREIGN KEY (`id_rent`) REFERENCES `#__rem_rents` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_houses` ADD CONSTRAINT `fk2990_owner_id`
FOREIGN KEY (`owner_id`) REFERENCES `#__users` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_orders` ADD CONSTRAINT `fk3010_id_user`
FOREIGN KEY (`id_user`) REFERENCES `#__users` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_orders` ADD CONSTRAINT `fk3015_id_house`
FOREIGN KEY (`id_house`) REFERENCES `#__rem_houses` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_orders_details` ADD CONSTRAINT `fk3024_id_order`
FOREIGN KEY (`id_order`) REFERENCES `#__rem_orders` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_orders_details` ADD CONSTRAINT `fk3025_id_user`
FOREIGN KEY (`id_user`) REFERENCES `#__users` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_orders_details` ADD CONSTRAINT `fk3030_id_house`
FOREIGN KEY (`id_house`) REFERENCES `#__rem_houses` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_rents` ADD CONSTRAINT `fk3044_id_house`
FOREIGN KEY (`id_house`) REFERENCES `#__rem_houses` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_rents` ADD CONSTRAINT `fk3045_id_user`
FOREIGN KEY (`id_user`) REFERENCES `#__users` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_rent_requests` ADD CONSTRAINT `fk3052_id_house`
FOREIGN KEY (`id_house`) REFERENCES `#__rem_houses` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_rent_requests` ADD CONSTRAINT `fk3053_id_user`
FOREIGN KEY (`id_user`) REFERENCES `#__users` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_rent_sal` ADD CONSTRAINT `fk3061_id_house`
FOREIGN KEY (`id_house`) REFERENCES `#__rem_houses` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_reviews` ADD CONSTRAINT `fk3072_id_house`
FOREIGN KEY (`id_house`) REFERENCES `#__rem_houses` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_reviews` ADD CONSTRAINT `fk3073_id_user`
FOREIGN KEY (`id_user`) REFERENCES `#__users` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_track_source` ADD CONSTRAINT `fk3081_id_house`
FOREIGN KEY (`id_house`) REFERENCES `#__rem_houses` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_video_source` ADD CONSTRAINT `fk3091_id_house`
FOREIGN KEY (`id_house`) REFERENCES `#__rem_houses` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_lmunicipalities` ADD CONSTRAINT `fk3447_id_lstate`
FOREIGN KEY (`id_lstate`) REFERENCES `#__rem_lstates` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_lstates` ADD CONSTRAINT `fk3449_id_country`
FOREIGN KEY (`id_country`) REFERENCES `#__rem_countries` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_houses` ADD CONSTRAINT `fk3457_id_lmunicipality`
FOREIGN KEY (`id_lmunicipality`) REFERENCES `#__rem_lmunicipalities` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_houses` ADD CONSTRAINT `fk3458_id_lstate`
FOREIGN KEY (`id_lstate`) REFERENCES `#__rem_lstates` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_houses` ADD CONSTRAINT `fk3459_id_country`
FOREIGN KEY (`id_country`) REFERENCES `#__rem_countries` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_lmunicipalities` ADD CONSTRAINT `fk3463_id_country`
FOREIGN KEY (`id_country`) REFERENCES `#__rem_countries` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_wisheslist` ADD CONSTRAINT `fk3748_id_house`
FOREIGN KEY (`id_house`) REFERENCES `#__rem_houses` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `#__rem_wa_entry_conversations` ADD CONSTRAINT `fk3750_id_wa_title_conversation`
FOREIGN KEY (`id_wa_title_conversation`) REFERENCES `#__rem_wa_title_conversations` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
					
SET FOREIGN_KEY_CHECKS=1;
SET SESSION sql_mode='';
