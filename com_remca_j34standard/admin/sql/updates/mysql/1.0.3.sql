
ALTER TABLE `remca`.`jos_rem_houses` 
ADD COLUMN `site` ENUM('www.vivanuncios.com.mx', 'www.bienesonline.mx', 'www.lamudi.com.mx') NOT NULL DEFAULT 'www.vivanuncios.com.mx' COMMENT 'Site' AFTER `description`;
