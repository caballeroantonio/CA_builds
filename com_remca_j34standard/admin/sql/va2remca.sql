# Proceso para migrar datos de scraping vivanuncios a remca.houses
CREATE TABLE `scrpng_vivanuncios` (
  `idPropiedad` text,
  `category_id` int(11) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type_popiedad` text,
  `name` text,
  `slug` text,
  `description` text,
  `image_link` text,
  `meta_keywords` text,
  `meta_desc` text,
  `status` int(11) DEFAULT NULL,
  `create_date` text,
  `updated_at` text,
  `hlocation` text,
  `hcity` text,
  `hregion` text,
  `hzipcode` text,
  `hcountry` text,
  `hlatitude` text,
  `hlongitude` text,
  `price` int(11) DEFAULT NULL,
  `bedrooms` int(11) DEFAULT NULL,
  `services` text,
  `characteristics` text,
  `bathrooms` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `features` text,
  `is_delete` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `related` text,
  `disponible` int(11) DEFAULT NULL,
  `category` text,
  `tipoPublicado` text,
  `link` text,
  `url_vendedor` text,
  `agent` text,
  `ad_id` int(10) unsigned NOT NULL DEFAULT '0',
  `leyenda` text,
  `sitio` text,
  `category_pri_attrs` varchar(45) DEFAULT NULL,
  `contacts` text,
  `photos_big` text,
  `photos_small` text,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_remhouse` int(11) unsigned DEFAULT NULL,
  `need_update` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_anuncion_idx` (`ad_id`),
  KEY `fk_vahouse_idx` (`id_remhouse`),
  KEY `idx_need_update` (`need_update`),
  CONSTRAINT `fk_vahouse_idx` FOREIGN KEY (`id_remhouse`) REFERENCES `jos_rem_houses` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# 1) almacena el ultimo rem_houses.id
SELECT 
@laih:= AUTO_INCREMENT - 1 'Last AI houses'
FROM  INFORMATION_SCHEMA.TABLES t
WHERE 1
AND t.TABLE_SCHEMA = DATABASE()
AND t.TABLE_NAME LIKE '%rem_houses';

# 2) condiciones iniciales, cargué la información del CSV
#SET @laih := 1; # Last AI houses - 1
#DELETE FROM jos_rem_houses WHERE id > @laih;
SET @ordering := @laih;

# 3) copy empty records to houses
INSERT INTO jos_rem_houses (id, description, images, state)
SELECT @ordering := @ordering + 1 AS 'id', '' AS 'description', '' AS 'images', 1 AS state 
FROM scrpng_vivanuncios va
WHERE id_remhouse IS NULL
;

# 4) refer va.fk to h.pk empty records
SET @ordering := @laih;
UPDATE scrpng_vivanuncios va
SET va.id_remhouse = @ordering := @ordering + 1, need_update = 1
WHERE id_remhouse IS NULL
;

# 5) update set h.values = va.values
UPDATE jos_rem_houses h
LEFT JOIN scrpng_vivanuncios va ON va.id_remhouse = h.id
SET 
h.description = coalesce(va.description, ''),
h.link = coalesce(va.link, ''),
h.price = coalesce(va.price, 0.00),
h.name = coalesce(va.name, ''),
#h.hcountry = coalesce(va.hcountry, ''),
#h.hregion = coalesce(va.hregion, ''),
#h.hcity = coalesce(va.hcity, ''),
h.hzipcode = coalesce(va.hzipcode, ''),
h.hlocation = LEFT(coalesce(va.hlocation, ''),254),
h.hlatitude = coalesce(va.hlatitude, ''),
h.hlongitude = coalesce(va.hlongitude, ''),
h.bathrooms = coalesce(va.bathrooms, 0),
h.bedrooms = coalesce(va.bedrooms, 0),
h.year = coalesce(va.year, ''),
h.agent = LEFT(coalesce(va.agent, ''), 45),
#h.image_link = coalesce(va.image_link, ''),
h.photos = CONCAT('[{"thumbnail_img": "',va.image_link,'"},{"thumbnail_img": "', replace(va.photos_small, ',', '"},{"thumbnail_img": "'),'"}]'),
h.images = CONCAT_WS('','{"image_url":"',va.image_link,'","image_alt_text":"","image_caption":""}'),
h.state = 1
#, h.modified = NOW()
WHERE va.need_update = 1
;
 
# 6) update id_country
UPDATE
scrpng_vivanuncios va
INNER JOIN jos_rem_houses h ON h.id = va.id_remhouse
INNER JOIN jos_rem_countries c ON c.name LIKE va.hcountry AND c.state = 1
SET h.id_country = c.id #, h.modified = NOW()
WHERE va.need_update = 1
;

# 6) update id_lstate
UPDATE 
scrpng_vivanuncios va 
INNER JOIN jos_rem_houses h ON h.id = va.id_remhouse 
INNER JOIN jos_rem_lstates l ON l.id_country = h.id_country 
    AND l.friendly_name LIKE va.hregion 
SET h.id_lstate = l.id #, h.modified = NOW()
WHERE va.need_update = 1
;

# 6) update id_lmunicipality
UPDATE
scrpng_vivanuncios va
INNER JOIN jos_rem_houses h ON h.id = va.id_remhouse
INNER JOIN jos_rem_lmunicipalities l ON l.id_country = h.id_country 
    AND l.id_lstate = h.id_lstate
    AND l.name LIKE va.hcity
SET h.id_lmunicipality = l.id #, h.modified = NOW()
WHERE 1
AND h.id_country
AND h.id_lstate
AND va.need_update = 1
;

UPDATE scrpng_vivanuncios SET need_update = 0 WHERE need_update = 1;

-- 
-- En revisión, lo de abajo no lo he aprobado de nuevo.
-- 



#insertar registros de rh a rc
INSERT INTO jos_rem_categories (iditem, idcat)
SELECT h.id AS 'iditem', coalesce(rc.idcat, 1) AS 'idcat'
FROM jos_rem_houses h
LEFT JOIN jos_rem_categories rc ON rc.iditem = h.id
WHERE 1
AND rc.id IS NULL
;


#agregar constantes faltantes
UPDATE vivanuncios_items va
INNER JOIN jos_rem_houses h ON h.id = va.id_remhouse
SET h.listing_type = 0
;
