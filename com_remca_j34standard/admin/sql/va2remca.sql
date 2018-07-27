# Proceso para migrar datos de scraping vivanuncios a remca.houses
CREATE TABLE `scrpng_vivanuncios2` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link` varchar(255) DEFAULT NULL,
  `html` longtext,
  `ad_id` int(10) unsigned NOT NULL DEFAULT '0',
  `hlatitude` varchar(20) NOT NULL DEFAULT '0',
  `hlongitude` varchar(20) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `price` decimal(11,2) unsigned NOT NULL DEFAULT '0.00',
  `currency` varchar(45) NOT NULL DEFAULT '',
  `sellerlink` varchar(255) NOT NULL DEFAULT '',
  `sellerpicture` varchar(255) NOT NULL DEFAULT '',
  `is_pending` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_blocked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_error` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `adphone` varchar(45) NOT NULL DEFAULT '',
  `l1categoryname` varchar(45) NOT NULL DEFAULT '',
  `dwellingtype` varchar(45) NOT NULL DEFAULT '',
  `bedrooms` varchar(45) NOT NULL DEFAULT '0',
  `bathrooms` varchar(45) NOT NULL DEFAULT '',
  `garages` varchar(45) NOT NULL DEFAULT '0',
  `availabilitystartdate` datetime DEFAULT NULL,
  `dwellingforsaleby` varchar(45) NOT NULL DEFAULT '',
  `lot_size` int(10) unsigned NOT NULL DEFAULT '0',
  `area_unit` varchar(45) NOT NULL,
  `id_cat` int(10) unsigned DEFAULT NULL,
  `catname` varchar(45) NOT NULL DEFAULT '',
  `id_location` int(10) unsigned NOT NULL DEFAULT '0',
  `id_hcountry` int(10) unsigned NOT NULL DEFAULT '0',
  `hcountry` varchar(255) NOT NULL DEFAULT '',
  `id_lstate` int(10) unsigned NOT NULL DEFAULT '0',
  `lstate` varchar(255) NOT NULL DEFAULT '',
  `id_lmunicipality` int(10) unsigned NOT NULL DEFAULT '0',
  `lmunicipality` varchar(255) NOT NULL DEFAULT '',
  `id_hcolonia` int(10) unsigned NOT NULL DEFAULT '0',
  `hcolonia` varchar(255) NOT NULL DEFAULT '',
  `hlocation` varchar(255) NOT NULL DEFAULT '',
  `hzipcode` varchar(50) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `fullbleedpics` mediumtext,
  `r_status` int(10) unsigned NOT NULL DEFAULT '0',
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `need_update` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `id_remhouse` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_anuncio_idx` (`ad_id`),
  UNIQUE KEY `idx_link` (`link`),
  UNIQUE KEY `fk_va2house_idx` (`id_remhouse`),
  KEY `idx_need_update` (`need_update`),
  KEY `idx_is_active` (`is_active`),
  KEY `idx_id_cat` (`id_cat`),
  CONSTRAINT `fk_va2house_idx` FOREIGN KEY (`id_remhouse`) REFERENCES `jos_rem_houses` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=74263 DEFAULT CHARSET=utf8;


#1 sincronizo categorias
INSERT IGNORE remca.jos_categories
SELECT * FROM jpruebas.jos_categories
WHERE 1
AND extension = 'com_remca'
;

# actualizo categorias que coinciden


#3 reviso que no haya categorias faltantes y si existen repito 1 y 2
SELECT 
va.id, va.ad_id, va.id_cat, va.catname, va.dwellingtype
, c1.id, c1.title
, c2.id, c2.title
FROM 
scrpng_vivanuncios2 va
LEFT JOIN jos_categories c1 ON c1.extension = 'com_remca' AND c1.title = va.dwellingtype
LEFT JOIN jos_categories c2 ON c1.id IS NULL AND c2.extension = 'com_remca' AND c2.title = va.catname
WHERE 1
AND va.id_cat IS NULL
;

# compruebo que no faltan catalogos

/*
SELECT
#va.id_lmunicipality, va.lmunicipality, m1.*,
concat('UPDATE jos_rem_lmunicipalities SET id_va=',va.id_lmunicipality,' WHERE id=',m1.id,';') 'query'
FROM scrpng_vivanuncios2 va
LEFT JOIN jos_rem_lstates s ON s.id_va = va.id_lstate
LEFT JOIN jos_rem_lmunicipalities m ON m.id_va = va.id_lmunicipality
LEFT JOIN jos_rem_lmunicipalities m1 ON m.id IS NULL AND m1.id_lstate = s.id AND (m1.name = va.lmunicipality OR m1.official_name = va.lmunicipality)
WHERE 1
            AND va.is_active
            AND va.need_update
            AND va.id IS NOT NULL
            AND m.id IS NULL
#AND va.id = 777
;
*/



/*
hcolonia a veces tiene municipios, identificar si es colonia o municipio.
si es municipio entonces
	h.id_lmunicipality = jos_rem_lmunicipalities.id ON va.id_lmunicipality|va.id_hcolonia 
si es colonia
	h.location = va.hcolonia 
*/

#actualizar municipios faltantes V2.0
#INSERT INTO jos_rem_lmunicipalities (name, official_name, id_lstate, id_country, state, ordering, id_va)
#va.lmunicipality 'name', 'vivanuncios' AS 'official_name', s.id 'id_lstate', c.id 'id_country', 1 'state', 1000 'ordering', va.id_lmunicipality 'id_va'
#/*
SELECT 
va.id 'va.id', va.hcountry 'va.hcountry', va.lstate 'va.lstate', va.id_lmunicipality 'va.id_lmunicipality', va.lmunicipality 'va.lmunicipality',
c.id 'c.id', c.name 'c.name', s.id 's.id', s.name 's.name', m.id 'm.id', m.name 'm.name'#, p.id 'p.id', p.name 'p.name'
, mf.name 'mf.name'
FROM 
#*/
#UPDATE
scrpng_vivanuncios2 va
LEFT JOIN jos_rem_countries c ON c.id_va = va.id_hcountry
LEFT JOIN jos_rem_lstates s ON s.id_va = va.id_lstate
LEFT JOIN jos_rem_lmunicipalities m ON m.id_va = va.id_lmunicipality
#LEFT JOIN jos_rem_countries p ON p.currency = va.currency #DISTINCT currency = MXN, USD
LEFT JOIN jos_rem_lmunicipalities mf ON 
    mf.id_lstate = s.id
    AND (va.lmunicipality = mf.name OR va.lmunicipality = mf.official_name)
#SET mf.id_va = va.id_lmunicipality
WHERE 1
AND va.is_active
AND va.need_update
AND va.id IS NOT NULL
AND (
	c.id IS NULL
	OR s.id IS NULL
	OR m.id IS NULL
	#OR p.id IS NULL
)
#siempre poner los sujetos de prueba del resultado anterior
AND va.id IN (173, 186, 406, 92, 836, 25, 64, 928, 270, 35214, 94, 630, 639)
#los que si existen hacer UPDATE
	#AND mf.id IS NOT NULL
#los que no existen hacer INSERT
	#AND mf.id IS NULL
GROUP BY va.id_lmunicipality
;


# 4) almacena el ultimo rem_houses.id


#SELECT @laih 'nuevos => laih';

# 2) condiciones iniciales, cargué la información del CSV
#SET @laih := 1; # Last AI houses - 1
#DELETE FROM jos_rem_houses WHERE id > @laih;



# 3) copy empty records to houses


# 4) refer va.fk to h.pk empty records



# 5) update set h.values = va.values
UPDATE jos_rem_houses h
LEFT JOIN scrpng_vivanuncios2 va ON va.id_remhouse = h.id
LEFT JOIN jos_rem_countries c ON c.id_va = va.id_hcountry
LEFT JOIN jos_rem_lstates s ON s.id_va = va.id_lstate
LEFT JOIN jos_rem_lmunicipalities m ON m.id_va = va.id_lmunicipality
LEFT JOIN jos_rem_countries p ON p.currency = va.currency
SET 

#h.year = coalesce(va.year, ''),
#h.agent = LEFT(coalesce(va.agent, ''), 45),
#h.photos = va.fullbleedpics# set in python
#h.images = # set in python
#h.description = va.description,# set in python

h.catid = va.id_cat,
h.id_country = c.id, #pais
h.id_lstate = s.id, #estado
h.id_lmunicipality = coalesce(m.id, 0),  #municipio
h.id_currency = p.id,
hcolonia = '',

h.garages = va.garages,
h.name = va.name,
h.hits = GREATEST(h.hits,va.hits),
h.link = va.link,
h.price = va.price,
h.lot_size = va.lot_size,
h.area_unit = va.area_unit,
h.hzipcode = va.hzipcode,
h.hlocation = LEFT(va.hlocation,254),
h.hlatitude = va.hlatitude,
h.hlongitude = va.hlongitude,
h.bathrooms = va.bathrooms,
h.bedrooms = va.bedrooms,
h.contacts = va.adphone,
h.state = va.is_active,
h.modified = NOW(),

va.need_update = 0

WHERE 1
AND va.is_active
AND va.need_update
AND va.id IS NOT NULL
;

#################REVISAR
 
# 6) insert missing scrpng_vivanuncios2.id_hcountry to jos_rem_countries.id_va

# 6) update id_lstate
UPDATE
scrpng_vivanuncios2 va
LEFT JOIN jos_rem_lstates l ON l.id_country = va.id_hcountry AND (l.name = va.lstate OR l.official_name = va.lstate)
SET va.id_lstate = coalesce(l.id,0)
WHERE 1
AND va.is_active
AND va.need_update
AND va.id_hcountry = 484
;

# 6) update id_lmunicipality
UPDATE
scrpng_vivanuncios2 va
LEFT JOIN jos_rem_lmunicipalities l ON l.id_country = va.id_hcountry AND va.id_lstate = l.id_lstate
	AND l.name = va.lmunicipality
SET va.id_lmunicipality = coalesce(l.id,0)
WHERE 1
AND va.is_active
AND va.need_update
AND va.id_hcountry = 484
;

UPDATE scrpng_vivanuncios2 SET need_update = 0 WHERE need_update = 1;

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


#relación entre catalogos y scrpng_vivanuncios2

#UPDATE
#/*
SELECT 
#va.id, va.id_hcountry, va.hcountry, va.id_lstate, va.lstate, va.id_lmunicipality, va.lmunicipality, va.hcolonia
#, c.name, ls.name, lm.name
#, va.catname, va.id_location
COUNT(*)
FROM 
#*/
scrpng_vivanuncios2 va
LEFT JOIN jos_rem_countries c ON c.id_va != 0 AND c.id_va = va.id_hcountry
LEFT JOIN jos_rem_lstates ls ON ls.id_va != 0 AND ls.id_va = va.id_lstate
LEFT JOIN jos_rem_lmunicipalities lm ON lm.id_va != 0 AND lm.id_va = va.id_lmunicipality
#SET lm.id_va = va.id_lmunicipality
WHERE 1
AND va.is_active
AND va.id_remhouse IS NULL
#AND va.id_hcountry != 0
AND c.id IS NOT NULL
AND ls.id IS NOT NULL
AND lm.id IS NOT NULL