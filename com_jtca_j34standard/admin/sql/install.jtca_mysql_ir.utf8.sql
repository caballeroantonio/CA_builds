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
--
-- Referential integrity
--

# root category - uncategorised

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

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");

INSERT IGNORE INTO `jt_expedientes` (`id`, `name`) VALUES (0, "undefined");
					
ALTER TABLE `jt_lsc01s` ADD CONSTRAINT `fk16_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsc03s` ADD CONSTRAINT `fk17_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsc04s` ADD CONSTRAINT `fk18_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsc05s` ADD CONSTRAINT `fk19_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsc08s` ADD CONSTRAINT `fk21_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsc09s` ADD CONSTRAINT `fk22_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsc10s` ADD CONSTRAINT `fk23_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsc11s` ADD CONSTRAINT `fk24_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsc12s` ADD CONSTRAINT `fk25_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsc13s` ADD CONSTRAINT `fk26_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_expedientes` ADD CONSTRAINT `fk41_id_exp_orig`
FOREIGN KEY (`id_exp_orig`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc01s` ADD CONSTRAINT `fk243_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc02s` ADD CONSTRAINT `fk244_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc03s` ADD CONSTRAINT `fk245_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc04s` ADD CONSTRAINT `fk246_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc05s` ADD CONSTRAINT `fk247_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc06s` ADD CONSTRAINT `fk248_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc07s` ADD CONSTRAINT `fk249_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc08s` ADD CONSTRAINT `fk250_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc09s` ADD CONSTRAINT `fk251_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc10s` ADD CONSTRAINT `fk252_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc12s` ADD CONSTRAINT `fk253_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc13s` ADD CONSTRAINT `fk254_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc14s` ADD CONSTRAINT `fk255_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc16s` ADD CONSTRAINT `fk256_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc17s` ADD CONSTRAINT `fk257_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc18s` ADD CONSTRAINT `fk258_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc19s` ADD CONSTRAINT `fk259_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc20s` ADD CONSTRAINT `fk260_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljc21s` ADD CONSTRAINT `fk261_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsc06s` ADD CONSTRAINT `fk770_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsc07s` ADD CONSTRAINT `fk771_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf01s` ADD CONSTRAINT `fk773_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf04s` ADD CONSTRAINT `fk776_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf05s` ADD CONSTRAINT `fk777_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf06s` ADD CONSTRAINT `fk778_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf07s` ADD CONSTRAINT `fk779_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf08s` ADD CONSTRAINT `fk780_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf09s` ADD CONSTRAINT `fk781_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf10s` ADD CONSTRAINT `fk782_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf11s` ADD CONSTRAINT `fk783_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf12s` ADD CONSTRAINT `fk784_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf13s` ADD CONSTRAINT `fk785_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf14s` ADD CONSTRAINT `fk786_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf15s` ADD CONSTRAINT `fk787_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf16s` ADD CONSTRAINT `fk788_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf17s` ADD CONSTRAINT `fk789_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf18s` ADD CONSTRAINT `fk790_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf19s` ADD CONSTRAINT `fk791_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf20s` ADD CONSTRAINT `fk792_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf21s` ADD CONSTRAINT `fk793_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljf22s` ADD CONSTRAINT `fk794_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljp01s` ADD CONSTRAINT `fk795_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljp02s` ADD CONSTRAINT `fk796_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljp04s` ADD CONSTRAINT `fk798_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljp05s` ADD CONSTRAINT `fk799_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljp06s` ADD CONSTRAINT `fk800_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljp08s` ADD CONSTRAINT `fk801_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljp09s` ADD CONSTRAINT `fk802_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljp10s` ADD CONSTRAINT `fk803_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljp11s` ADD CONSTRAINT `fk804_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljp12s` ADD CONSTRAINT `fk805_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljp13s` ADD CONSTRAINT `fk806_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljp14s` ADD CONSTRAINT `fk807_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljp16s` ADD CONSTRAINT `fk808_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljp17s` ADD CONSTRAINT `fk809_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljp18s` ADD CONSTRAINT `fk810_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljp19s` ADD CONSTRAINT `fk811_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljp20s` ADD CONSTRAINT `fk812_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljp21s` ADD CONSTRAINT `fk813_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljccm01s` ADD CONSTRAINT `fk814_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljccm02s` ADD CONSTRAINT `fk815_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljccm03s` ADD CONSTRAINT `fk816_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljccm05s` ADD CONSTRAINT `fk818_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljccm06s` ADD CONSTRAINT `fk819_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljccm07s` ADD CONSTRAINT `fk820_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljccm08s` ADD CONSTRAINT `fk821_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljccm09s` ADD CONSTRAINT `fk822_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljccm10s` ADD CONSTRAINT `fk823_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljccm11s` ADD CONSTRAINT `fk824_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljccm12s` ADD CONSTRAINT `fk825_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljccm13s` ADD CONSTRAINT `fk826_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljccm15s` ADD CONSTRAINT `fk827_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljccm16s` ADD CONSTRAINT `fk828_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljccm17s` ADD CONSTRAINT `fk829_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljoc01s` ADD CONSTRAINT `fk830_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljoc03s` ADD CONSTRAINT `fk831_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljoc04s` ADD CONSTRAINT `fk832_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljoc05s` ADD CONSTRAINT `fk833_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljoc06s` ADD CONSTRAINT `fk834_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljoc07s` ADD CONSTRAINT `fk835_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljoc08s` ADD CONSTRAINT `fk836_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljoc09s` ADD CONSTRAINT `fk837_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljoc10s` ADD CONSTRAINT `fk838_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljoc11s` ADD CONSTRAINT `fk839_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljoc12s` ADD CONSTRAINT `fk840_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljoc13s` ADD CONSTRAINT `fk841_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljoc14s` ADD CONSTRAINT `fk842_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpdng01s` ADD CONSTRAINT `fk843_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpdng02s` ADD CONSTRAINT `fk844_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpdng03s` ADD CONSTRAINT `fk845_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpdng04s` ADD CONSTRAINT `fk846_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpdng05s` ADD CONSTRAINT `fk847_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpdng06s` ADD CONSTRAINT `fk848_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpdng07s` ADD CONSTRAINT `fk849_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpdng08s` ADD CONSTRAINT `fk850_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpdng09s` ADD CONSTRAINT `fk851_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpdng10s` ADD CONSTRAINT `fk852_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpdng11s` ADD CONSTRAINT `fk853_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpdng12s` ADD CONSTRAINT `fk854_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpdng13s` ADD CONSTRAINT `fk855_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpdng14s` ADD CONSTRAINT `fk856_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpdng15s` ADD CONSTRAINT `fk857_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpdng16s` ADD CONSTRAINT `fk858_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpdng17s` ADD CONSTRAINT `fk859_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpdng18s` ADD CONSTRAINT `fk860_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpes01s` ADD CONSTRAINT `fk861_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpes02s` ADD CONSTRAINT `fk862_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpes03s` ADD CONSTRAINT `fk863_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpes04s` ADD CONSTRAINT `fk864_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpes05s` ADD CONSTRAINT `fk865_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpes06s` ADD CONSTRAINT `fk866_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpes07s` ADD CONSTRAINT `fk867_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpes08s` ADD CONSTRAINT `fk868_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpes09s` ADD CONSTRAINT `fk869_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpes10s` ADD CONSTRAINT `fk870_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpes11s` ADD CONSTRAINT `fk871_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpes12s` ADD CONSTRAINT `fk872_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpes13s` ADD CONSTRAINT `fk873_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpes14s` ADD CONSTRAINT `fk874_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpes15s` ADD CONSTRAINT `fk875_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpes16s` ADD CONSTRAINT `fk876_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljpes17s` ADD CONSTRAINT `fk877_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadng01s` ADD CONSTRAINT `fk878_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadng02s` ADD CONSTRAINT `fk879_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadng03s` ADD CONSTRAINT `fk880_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadng04s` ADD CONSTRAINT `fk881_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadng05s` ADD CONSTRAINT `fk882_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadng06s` ADD CONSTRAINT `fk883_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadng07s` ADD CONSTRAINT `fk884_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadng08s` ADD CONSTRAINT `fk885_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadng09s` ADD CONSTRAINT `fk886_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadng10s` ADD CONSTRAINT `fk887_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadng11s` ADD CONSTRAINT `fk888_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadg01s` ADD CONSTRAINT `fk889_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadg02s` ADD CONSTRAINT `fk890_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadg03s` ADD CONSTRAINT `fk891_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadg04s` ADD CONSTRAINT `fk892_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadg05s` ADD CONSTRAINT `fk893_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadg06s` ADD CONSTRAINT `fk894_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadg09s` ADD CONSTRAINT `fk897_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadg10s` ADD CONSTRAINT `fk898_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadg11s` ADD CONSTRAINT `fk899_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadg13s` ADD CONSTRAINT `fk901_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadg14s` ADD CONSTRAINT `fk902_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadg15s` ADD CONSTRAINT `fk903_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadg16s` ADD CONSTRAINT `fk904_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadg17s` ADD CONSTRAINT `fk905_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadg18s` ADD CONSTRAINT `fk906_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_ljjadng12s` ADD CONSTRAINT `fk907_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsc14s` ADD CONSTRAINT `fk980_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lspe01s` ADD CONSTRAINT `fk981_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lspe02s` ADD CONSTRAINT `fk982_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lspe03s` ADD CONSTRAINT `fk983_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lspe04s` ADD CONSTRAINT `fk984_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lspe05s` ADD CONSTRAINT `fk985_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lspe06s` ADD CONSTRAINT `fk986_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lspe07s` ADD CONSTRAINT `fk987_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lspe08s` ADD CONSTRAINT `fk988_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsps01s` ADD CONSTRAINT `fk3223_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsps02s` ADD CONSTRAINT `fk3227_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsps03s` ADD CONSTRAINT `fk3231_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsps04s` ADD CONSTRAINT `fk3235_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsps05s` ADD CONSTRAINT `fk3239_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsps06s` ADD CONSTRAINT `fk3243_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsps07s` ADD CONSTRAINT `fk3247_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsps08s` ADD CONSTRAINT `fk3251_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsps09s` ADD CONSTRAINT `fk3255_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsps10s` ADD CONSTRAINT `fk3259_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsps11s` ADD CONSTRAINT `fk3263_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsps12s` ADD CONSTRAINT `fk3267_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsps13s` ADD CONSTRAINT `fk3271_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
										
ALTER TABLE `jt_lsps14s` ADD CONSTRAINT `fk3275_id_expediente`
FOREIGN KEY (`id_expediente`) REFERENCES `jt_expedientes` (`id`)
ON DELETE RESTRICT ON UPDATE CASCADE;
					
SET FOREIGN_KEY_CHECKS=1;
SET SESSION sql_mode='';
