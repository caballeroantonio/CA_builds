ALTER TABLE `jos_rem_lstates` CHANGE COLUMN `friendly_name` `official_name` VARCHAR(45) NULL DEFAULT NULL COMMENT 'Veracruz de Ignacio de la Llave vs Veracruz' ;

SET FOREIGN_KEY_CHECKS=0;
DELETE FROM `jos_rem_lstates` WHERE id IN (5, 9, 16, 30);
INSERT INTO `jos_rem_lstates` (`id`,`name`,`id_country`,`official_name`,`state`,`ordering`) VALUES 
 (5,'Coahuila',484,'Coahuila de Zaragoza',1,5),
 (9,'Ciudad de México',484,'Distrito Federal',1,9),
 (16,'Michoacán',484,'Michoacán de Ocampo',1,16),
 (30,'Veracruz',484,'Veracruz de Ignacio de la Llave',1,30);
SET FOREIGN_KEY_CHECKS=1;

#hcity->lmunicipality
ALTER TABLE `jos_rem_houses` 
DROP FOREIGN KEY `fk3457_id_lmunicipality`;
ALTER TABLE `jos_rem_houses` 
CHANGE COLUMN `hcity` `id_lmunicipality` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'id_municipality' ;
ALTER TABLE `jos_rem_houses` 
ADD CONSTRAINT `fk3457_id_lmunicipality`
  FOREIGN KEY (`id_lmunicipality`)
  REFERENCES `jos_rem_lmunicipalities` (`id`)
  ON DELETE NO ACTION
  ON UPDATE CASCADE;

#hregion->lstate
ALTER TABLE `jos_rem_houses` 
DROP FOREIGN KEY `fk3458_id_lstate`;
ALTER TABLE `jos_rem_houses` 
CHANGE COLUMN `hregion` `id_lstate` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'State' ;
ALTER TABLE `jos_rem_houses` 
ADD CONSTRAINT `fk3458_id_lstate`
  FOREIGN KEY (`id_lstate`)
  REFERENCES `jos_rem_lstates` (`id`)
  ON DELETE NO ACTION
  ON UPDATE CASCADE;
