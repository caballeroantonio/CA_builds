# quitar basura
#UPDATE scrpng_vivanuncios SET id_anuncio = replace(id_anuncio, 'Anuncio ','');

# homologar nombres
ALTER TABLE `scrpng_vivanuncios` CHANGE COLUMN `title` `name` TEXT;
ALTER TABLE `scrpng_vivanuncios` CHANGE COLUMN `body` `description` TEXT;
ALTER TABLE `scrpng_vivanuncios` CHANGE COLUMN `address` `hlocation` TEXT;
ALTER TABLE `scrpng_vivanuncios` CHANGE COLUMN `city` `hcity` TEXT;
ALTER TABLE `scrpng_vivanuncios` CHANGE COLUMN `state` `hregion` TEXT;
ALTER TABLE `scrpng_vivanuncios` CHANGE COLUMN `zip_propiedad` `hzipcode` TEXT;
ALTER TABLE `scrpng_vivanuncios` CHANGE COLUMN `country` `hcountry` TEXT;
ALTER TABLE `scrpng_vivanuncios` CHANGE COLUMN `latitude` `hlatitude` TEXT;
ALTER TABLE `scrpng_vivanuncios` CHANGE COLUMN `longitude` `hlongitude` TEXT;
ALTER TABLE `scrpng_vivanuncios` CHANGE COLUMN `url_pagina` `link` TEXT;
ALTER TABLE `scrpng_vivanuncios` CHANGE COLUMN `nombre_vendedor` `agent` TEXT;
ALTER TABLE `scrpng_vivanuncios` CHANGE COLUMN `image_name` `image_link` TEXT;
ALTER TABLE `scrpng_vivanuncios` CHANGE COLUMN `beds` `bedrooms` int(11) DEFAULT NULL;
ALTER TABLE `scrpng_vivanuncios` CHANGE COLUMN `bath` `bathrooms` int(11) DEFAULT NULL;

# campo para actualizar datos
ALTER TABLE `scrpng_vivanuncios` ADD COLUMN `need_update` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `scrpng_vivanuncios` CHANGE COLUMN `id_anuncio` `id_anuncio` INT(10) UNSIGNED NOT NULL DEFAULT 0 ;
ALTER TABLE `scrpng_vivanuncios` ADD UNIQUE INDEX `uk_anuncion_idx` (`id_anuncio` ASC);
ALTER TABLE `scrpng_vivanuncios` CHANGE COLUMN `id_anuncio` `ad_id` INT(10) UNSIGNED NOT NULL DEFAULT '0' ;
ALTER TABLE `scrpng_vivanuncios2` CHANGE COLUMN `tipoLetra` `category` TEXT NULL DEFAULT NULL ;
ALTER TABLE `scrpng_vivanuncios` ADD INDEX `idx_need_update` (`need_update` ASC);
ALTER TABLE `jos_rem_houses` CHANGE COLUMN `hlocation` `hlocation` TINYTEXT NULL COMMENT 'hlocation' ;

ALTER TABLE `scrpng_vivanuncios` 
DROP COLUMN `image_ext`,
ADD COLUMN `category_pri_attrs` VARCHAR(45) NULL DEFAULT NULL AFTER `sitio`,
ADD COLUMN `contacts` TEXT NULL DEFAULT NULL AFTER `category_pri_attrs`,
ADD COLUMN `photos_big` TEXT NULL DEFAULT NULL AFTER `contacts`,
ADD COLUMN `photos_small` TEXT NULL DEFAULT NULL AFTER `photos_big`;



/*
* con las modificaciones image_link = '', category_id = 0, category = ''
* {create_date, updated_at, services, characteristics, features, is_delete, featured, size, related, disponible, category} para qué sirve?
mejoró : hcity, hregion, hzipcode, hcountry
deberían detectar cuando el anuncio lo des-publican (Este anuncio no se encuentra activo o ha sido eliminado por el vendedor.) (https://www.vivanuncios.com.mx/a-venta-inmuebles/tlahuac-2/casa-en-fracc-los-olivos-tlahuac-cdmx-adjudicado-no-creditos/1001385701670910937237909)
contacts = 'email, sms, phone' y los datos útiles?
disponible = 'true' no me sirve así, convertirlo a TINYINT(1). 
*/

# CREATE TABLE scrpng_vivanuncios2 ...
# TRUNCATE scrpng_vivanuncios2 ...
# INSERT FROM CSV

# los registros modificados son:
SELECT va2.* FROM
scrpng_vivanuncios2 va2
INNER JOIN scrpng_vivanuncios va1 ON va1.ad_id = va2.ad_id
WHERE 1
AND md5( CONCAT_WS('', va2.idPropiedad, va2.category_id, va2.agent_id, va2.user_id, va2.type_popiedad, va2.name, va2.slug, va2.description, va2.image_link, va2.meta_keywords, va2.meta_desc, va2.status, va2.create_date, va2.updated_at, va2.hlocation, va2.hcity, va2.hregion, va2.hzipcode, va2.hcountry, va2.hlatitude, va2.hlongitude, va2.price, va2.bedrooms, va2.services, va2.characteristics, va2.bathrooms, va2.year, va2.features, va2.is_delete, va2.featured, va2.size, va2.related, va2.disponible, va2.category, va2.tipoPublicado, va2.link, va2.url_vendedor, va2.agent, va2.leyenda, va2.sitio, va2.category_pri_attrs, va2.contacts, va2.photos_big, va2.photos_small) ) !=
md5( CONCAT_WS('', va1.idPropiedad, va1.category_id, va1.agent_id, va1.user_id, va1.type_popiedad, va1.name, va1.slug, va1.description, va1.image_link, va1.meta_keywords, va1.meta_desc, va1.status, va1.create_date, va1.updated_at, va1.hlocation, va1.hcity, va1.hregion, va1.hzipcode, va1.hcountry, va1.hlatitude, va1.hlongitude, va1.price, va1.bedrooms, va1.services, va1.characteristics, va1.bathrooms, va1.year, va1.features, va1.is_delete, va1.featured, va1.size, va1.related, va1.disponible, va1.category, va1.tipoPublicado, va1.link, va1.url_vendedor, va1.agent, va1.leyenda, va1.sitio, va1.category_pri_attrs, va1.contacts, va1.photos_big, va1.photos_small) ) 
;

UPDATE
scrpng_vivanuncios2 va2
INNER JOIN scrpng_vivanuncios va1 ON va1.ad_id = va2.ad_id
SET 
va1.idPropiedad = va2.idPropiedad,
va1.category_id = va2.category_id,
va1.agent_id = va2.agent_id,
va1.user_id = va2.user_id,
va1.type_popiedad = va2.type_popiedad,
va1.name = va2.name,
va1.slug = va2.slug,
va1.description = va2.description,
va1.image_link = va2.image_link,
va1.meta_keywords = va2.meta_keywords,
va1.meta_desc = va2.meta_desc,
va1.status = va2.status,
va1.create_date = va2.create_date,
va1.updated_at = va2.updated_at,
va1.hlocation = va2.hlocation,
va1.hcity = va2.hcity,
va1.hregion = va2.hregion,
va1.hzipcode = va2.hzipcode,
va1.hcountry = va2.hcountry,
va1.hlatitude = va2.hlatitude,
va1.hlongitude = va2.hlongitude,
va1.price = va2.price,
va1.bedrooms = va2.bedrooms,
va1.services = va2.services,
va1.characteristics = va2.characteristics,
va1.bathrooms = va2.bathrooms,
va1.year = va2.year,
va1.features = va2.features,
va1.is_delete = va2.is_delete,
va1.featured = va2.featured,
va1.size = va2.size,
va1.related = va2.related,
va1.disponible = va2.disponible,
va1.category = va2.category,
va1.tipoPublicado = va2.tipoPublicado,
va1.link = va2.link,
va1.url_vendedor = va2.url_vendedor,
va1.agent = va2.agent,
va1.leyenda = va2.leyenda,
va1.sitio = va2.sitio,
va1.category_pri_attrs = va2.category_pri_attrs,
va1.contacts = va2.contacts,
va1.photos_big = va2.photos_big,
va1.photos_small = va2.photos_small,
va1.id_remhouse = va2.id_remhouse,
va1.need_update = 1
WHERE 1
AND md5( CONCAT_WS('', va2.idPropiedad, va2.category_id, va2.agent_id, va2.user_id, va2.type_popiedad, va2.name, va2.slug, va2.description, va2.image_link, va2.meta_keywords, va2.meta_desc, va2.status, va2.create_date, va2.updated_at, va2.hlocation, va2.hcity, va2.hregion, va2.hzipcode, va2.hcountry, va2.hlatitude, va2.hlongitude, va2.price, va2.bedrooms, va2.services, va2.characteristics, va2.bathrooms, va2.year, va2.features, va2.is_delete, va2.featured, va2.size, va2.related, va2.disponible, va2.category, va2.tipoPublicado, va2.link, va2.url_vendedor, va2.agent, va2.leyenda, va2.sitio, va2.category_pri_attrs, va2.contacts, va2.photos_big, va2.photos_small) ) !=
md5( CONCAT_WS('', va1.idPropiedad, va1.category_id, va1.agent_id, va1.user_id, va1.type_popiedad, va1.name, va1.slug, va1.description, va1.image_link, va1.meta_keywords, va1.meta_desc, va1.status, va1.create_date, va1.updated_at, va1.hlocation, va1.hcity, va1.hregion, va1.hzipcode, va1.hcountry, va1.hlatitude, va1.hlongitude, va1.price, va1.bedrooms, va1.services, va1.characteristics, va1.bathrooms, va1.year, va1.features, va1.is_delete, va1.featured, va1.size, va1.related, va1.disponible, va1.category, va1.tipoPublicado, va1.link, va1.url_vendedor, va1.agent, va1.leyenda, va1.sitio, va1.category_pri_attrs, va1.contacts, va1.photos_big, va1.photos_small) ) 
;

INSERT INTO scrpng_vivanuncios (`idPropiedad`, `category_id`, `agent_id`, `user_id`, `type_popiedad`, `name`, `slug`, `description`, `image_link`, `meta_keywords`, `meta_desc`, `status`, `create_date`, `updated_at`, `hlocation`, `hcity`, `hregion`, `hzipcode`, `hcountry`, `hlatitude`, `hlongitude`, `price`, `bedrooms`, `services`, `characteristics`, `bathrooms`, `year`, `features`, `is_delete`, `featured`, `size`, `related`, `disponible`, `category`, `tipoPublicado`, `link`, `url_vendedor`, `agent`, `ad_id`, `leyenda`, `sitio`, `id_remhouse`, `need_update`)
SELECT 
#va1.ad_id, va2.ad_id, va2.need_update, va2.id_remhouse 
va2.idPropiedad, va2.category_id, va2.agent_id, va2.user_id, va2.type_popiedad, va2.name, va2.slug, va2.description, va2.image_link, va2.meta_keywords, va2.meta_desc, va2.status, va2.create_date, va2.updated_at, va2.hlocation, va2.hcity, va2.hregion, va2.hzipcode, va2.hcountry, va2.hlatitude, va2.hlongitude, va2.price, va2.bedrooms, va2.services, va2.characteristics, va2.bathrooms, va2.year, va2.features, va2.is_delete, va2.featured, va2.size, va2.related, va2.disponible, va2.category, va2.tipoPublicado, va2.link, va2.url_vendedor, va2.agent, va2.ad_id, va2.leyenda, va2.sitio, va2.id_remhouse, va2.need_update
FROM
scrpng_vivanuncios2 va2
LEFT JOIN scrpng_vivanuncios va1 ON va1.ad_id = va2.ad_id
WHERE 1
AND va1.ad_id IS NULL;

#ejecutar va2remca.sql