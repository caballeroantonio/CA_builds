#validador de billetes
UPDATE
jt3_campos c3
SET c3.dataIndex = 'billete'
WHERE id IN (35, 1177, 823, 411, 421, 982, 990, 1256, 1432, 1441, 1382, 2206, 2215, 2217);

ALTER TABLE `jt_ljc02s` CHANGE COLUMN `field4` `billete` VARCHAR(45) NULL DEFAULT NULL, ADD INDEX `idx_billete` (`billete` ASC);
ALTER TABLE `jt_ljc03s` CHANGE COLUMN `field4` `billete` VARCHAR(45) NULL DEFAULT NULL, ADD INDEX `idx_billete` (`billete` ASC);
ALTER TABLE `jt_ljp02s` CHANGE COLUMN `field2` `billete` VARCHAR(45) NULL DEFAULT NULL, ADD INDEX `idx_billete` (`billete` ASC);
ALTER TABLE `jt_ljccm02s` CHANGE COLUMN `field7` `billete` VARCHAR(45) NULL DEFAULT NULL, ADD INDEX `idx_billete` (`billete` ASC);
ALTER TABLE `jt_ljccm03s` CHANGE COLUMN `field5` `billete` VARCHAR(45) NULL DEFAULT NULL, ADD INDEX `idx_billete` (`billete` ASC);
ALTER TABLE `jt_ljpdng02s` CHANGE COLUMN `field2` `billete` VARCHAR(45) NULL DEFAULT NULL, ADD INDEX `idx_billete` (`billete` ASC);
ALTER TABLE `jt_ljpdng03s` CHANGE COLUMN `field2` `billete` VARCHAR(45) NULL DEFAULT NULL, ADD INDEX `idx_billete` (`billete` ASC);
ALTER TABLE `jt_ljpes11s` CHANGE COLUMN `field3` `billete` VARCHAR(45) NULL DEFAULT NULL, ADD INDEX `idx_billete` (`billete` ASC);
ALTER TABLE `jt_ljjadg03s` CHANGE COLUMN `field2` `billete` VARCHAR(45) NULL DEFAULT NULL, ADD INDEX `idx_billete` (`billete` ASC);
ALTER TABLE `jt_ljjadg04s` CHANGE COLUMN `field3` `billete` VARCHAR(45) NULL DEFAULT NULL, ADD INDEX `idx_billete` (`billete` ASC);
ALTER TABLE `jt_ljjadng12s` CHANGE COLUMN `field3` `billete` VARCHAR(45) NULL DEFAULT NULL, ADD INDEX `idx_billete` (`billete` ASC);
#ALTER TABLE `jt_lsc07s` CHANGE COLUMN `field168` `billete` VARCHAR(45) NULL DEFAULT NULL, ADD INDEX `idx_billete` (`billete` ASC);
#ALTER TABLE `jt_lsc08s` CHANGE COLUMN `field178` `billete` VARCHAR(45) NULL DEFAULT NULL, ADD INDEX `idx_billete` (`billete` ASC);
#ALTER TABLE `jt_lsc14s` CHANGE COLUMN `field182` `billete` VARCHAR(45) NULL DEFAULT NULL, ADD INDEX `idx_billete` (`billete` ASC);

#vistas que cambian por el campo billete
DROP TABLE IF EXISTS `jt_vljc02s`;
DROP VIEW IF EXISTS `jt_vljc02s`;
CREATE OR REPLACE VIEW jt_vljc02s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2,l.field3,l.billete,l.field10,l.field5,l.field6,l.field9
FROM jt_ljc02s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;


DROP TABLE IF EXISTS `jt_vljc03s`;
DROP VIEW IF EXISTS `jt_vljc03s`;
CREATE OR REPLACE VIEW jt_vljc03s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.id_secretaria,
 CONCAT_WS(' ',l.field1_paterno, l.field1_materno, l.field1_nombre) AS field1,
 l.field1_paterno, l.field1_materno, l.field1_nombre, l.field1_isMoral 
,l.field2,l.field3,l.billete,l.field5,
 CONCAT_WS(' ',l.field6_paterno, l.field6_materno, l.field6_nombre) AS field6,
 l.field6_paterno, l.field6_materno, l.field6_nombre, l.field6_isMoral 
,
 field7, calculatePath(f_1180.id,f_1180.filename) AS field7_file 
,
 field7h, calculatePath(h_2264.id,h_2264.filename) AS field7h_file 
,l.field8,l.field10,
 field11, u_1184.name AS field11_name, calculatePath(f_1184.id,f_1184.filename) AS field11_file 
,
 field12, u_1185.name AS field12_name, calculatePath(f_1185.id,f_1185.filename) AS field12_file 
,l.field13,l.field14,l.field15
FROM jt_ljc03s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 

LEFT JOIN jt_uploadedfiles f_1180 ON l.field7 = f_1180.id 

LEFT JOIN jt_uploadedfiles h_2264 ON l.field7h = h_2264.id 

LEFT JOIN jt_uploadedfiles f_1184 ON l.field11 = f_1184.id 

LEFT JOIN jos_users u_1184 ON f_1184.created_by = u_1184.id 

LEFT JOIN jt_uploadedfiles f_1185 ON l.field12 = f_1185.id 

LEFT JOIN jos_users u_1185 ON f_1185.created_by = u_1185.id 
;


DROP TABLE IF EXISTS `jt_vljp02s`;
DROP VIEW IF EXISTS `jt_vljp02s`;
CREATE OR REPLACE VIEW jt_vljp02s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.billete,l.field3,l.field4,l.field5,l.field9,l.field7,l.field8
FROM jt_ljp02s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;


DROP TABLE IF EXISTS `jt_vljccm02s`;
DROP VIEW IF EXISTS `jt_vljccm02s`;
CREATE OR REPLACE VIEW jt_vljccm02s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field1,l.field5,l.field6,l.billete,l.field8,l.field13,l.field9,l.field12
FROM jt_ljccm02s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;


DROP TABLE IF EXISTS `jt_vljccm03s`;
DROP VIEW IF EXISTS `jt_vljccm03s`;
CREATE OR REPLACE VIEW jt_vljccm03s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.billete,l.field6,l.field7,
 CONCAT_WS(' ',l.field8_paterno, l.field8_materno, l.field8_nombre) AS field8,
 l.field8_paterno, l.field8_materno, l.field8_nombre, l.field8_isMoral 
,l.field9,l.field10,
 field11, calculatePath(f_427.id,f_427.filename) AS field11_file 
,
 field11h, calculatePath(h_2256.id,h_2256.filename) AS field11h_file 
,
 field13, u_428.name AS field13_name, calculatePath(f_428.id,f_428.filename) AS field13_file 
,
 field15, u_429.name AS field15_name, calculatePath(f_429.id,f_429.filename) AS field15_file 
,l.field16
FROM jt_ljccm03s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 

LEFT JOIN jt_uploadedfiles f_427 ON l.field11 = f_427.id 

LEFT JOIN jt_uploadedfiles h_2256 ON l.field11h = h_2256.id 

LEFT JOIN jt_uploadedfiles f_428 ON l.field13 = f_428.id 

LEFT JOIN jos_users u_428 ON f_428.created_by = u_428.id 

LEFT JOIN jt_uploadedfiles f_429 ON l.field15 = f_429.id 

LEFT JOIN jos_users u_429 ON f_429.created_by = u_429.id 
;


DROP TABLE IF EXISTS `jt_vljpdng02s`;
DROP VIEW IF EXISTS `jt_vljpdng02s`;
CREATE OR REPLACE VIEW jt_vljpdng02s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.billete,l.field3,l.field4,l.field5,l.field7,l.field8,l.exp_extinto,l.jorigen
FROM jt_ljpdng02s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;


DROP TABLE IF EXISTS `jt_vljpdng03s`;
DROP VIEW IF EXISTS `jt_vljpdng03s`;
CREATE OR REPLACE VIEW jt_vljpdng03s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.billete,l.field3,l.field4,l.field5,
 CONCAT_WS(' ',l.field6_paterno, l.field6_materno, l.field6_nombre) AS field6,
 l.field6_paterno, l.field6_materno, l.field6_nombre, l.field6_isMoral 
,
 field7, calculatePath(f_995.id,f_995.filename) AS field7_file 
,
 field7h, calculatePath(h_2261.id,h_2261.filename) AS field7h_file 
,
 field8, u_996.name AS field8_name, calculatePath(f_996.id,f_996.filename) AS field8_file 
,
 field9, u_997.name AS field9_name, calculatePath(f_997.id,f_997.filename) AS field9_file 
,l.field10,l.field11,l.exp_extinto,l.jorigen
FROM jt_ljpdng03s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 

LEFT JOIN jt_uploadedfiles f_995 ON l.field7 = f_995.id 

LEFT JOIN jt_uploadedfiles h_2261 ON l.field7h = h_2261.id 

LEFT JOIN jt_uploadedfiles f_996 ON l.field8 = f_996.id 

LEFT JOIN jos_users u_996 ON f_996.created_by = u_996.id 

LEFT JOIN jt_uploadedfiles f_997 ON l.field9 = f_997.id 

LEFT JOIN jos_users u_997 ON f_997.created_by = u_997.id 
;


DROP TABLE IF EXISTS `jt_vljpes11s`;
DROP VIEW IF EXISTS `jt_vljpes11s`;
CREATE OR REPLACE VIEW jt_vljpes11s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2,l.field11,l.billete,l.field4,l.field5,
 CONCAT_WS(' ',l.field6_paterno, l.field6_materno, l.field6_nombre) AS field6,
 l.field6_paterno, l.field6_materno, l.field6_nombre, l.field6_isMoral 
,l.field7,l.field12,
 CONCAT_WS(' ',l.field8_paterno, l.field8_materno, l.field8_nombre) AS field8,
 l.field8_paterno, l.field8_materno, l.field8_nombre, l.field8_isMoral 
,
 field9, calculatePath(f_1262.id,f_1262.filename) AS field9_file 
,
 field9h, calculatePath(h_2265.id,h_2265.filename) AS field9h_file 
,l.field10
FROM jt_ljpes11s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 

LEFT JOIN jt_uploadedfiles f_1262 ON l.field9 = f_1262.id 

LEFT JOIN jt_uploadedfiles h_2265 ON l.field9h = h_2265.id 
;


DROP TABLE IF EXISTS `jt_vljjadg03s`;
DROP VIEW IF EXISTS `jt_vljjadg03s`;
CREATE OR REPLACE VIEW jt_vljjadg03s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.billete,l.field3,l.field4,l.field9,l.field5,
 CONCAT_WS(' ',l.field6_paterno, l.field6_materno, l.field6_nombre) AS field6,
 l.field6_paterno, l.field6_materno, l.field6_nombre, l.field6_isMoral 
,l.field7,l.field8
FROM jt_ljjadg03s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;


DROP TABLE IF EXISTS `jt_vljjadg04s`;
DROP VIEW IF EXISTS `jt_vljjadg04s`;
CREATE OR REPLACE VIEW jt_vljjadg04s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field12,l.billete,l.field4,l.field5,l.field7,
 field8, calculatePath(f_1445.id,f_1445.filename) AS field8_file 
,
 field8h, calculatePath(h_2267.id,h_2267.filename) AS field8h_file 
,l.field9,
 field10, u_1447.name AS field10_name, calculatePath(f_1447.id,f_1447.filename) AS field10_file 
,
 field11, u_1448.name AS field11_name, calculatePath(f_1448.id,f_1448.filename) AS field11_file 

FROM jt_ljjadg04s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 

LEFT JOIN jt_uploadedfiles f_1445 ON l.field8 = f_1445.id 

LEFT JOIN jt_uploadedfiles h_2267 ON l.field8h = h_2267.id 

LEFT JOIN jt_uploadedfiles f_1447 ON l.field10 = f_1447.id 

LEFT JOIN jos_users u_1447 ON f_1447.created_by = u_1447.id 

LEFT JOIN jt_uploadedfiles f_1448 ON l.field11 = f_1448.id 

LEFT JOIN jos_users u_1448 ON f_1448.created_by = u_1448.id 
;


DROP TABLE IF EXISTS `jt_vljjadng12s`;
DROP VIEW IF EXISTS `jt_vljjadng12s`;
CREATE OR REPLACE VIEW jt_vljjadng12s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2,l.billete,l.field4,l.field5,l.field6,l.field7,l.field8,
 CONCAT_WS(' ',l.field9_paterno, l.field9_materno, l.field9_nombre) AS field9,
 l.field9_paterno, l.field9_materno, l.field9_nombre, l.field9_isMoral 
,
 field10, calculatePath(f_1389.id,f_1389.filename) AS field10_file 
,
 field10h, calculatePath(h_2266.id,h_2266.filename) AS field10h_file 
,
 field11, u_1390.name AS field11_name, calculatePath(f_1390.id,f_1390.filename) AS field11_file 
,
 field12, u_1391.name AS field12_name, calculatePath(f_1391.id,f_1391.filename) AS field12_file 
,l.field13
FROM jt_ljjadng12s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 

LEFT JOIN jt_uploadedfiles f_1389 ON l.field10 = f_1389.id 

LEFT JOIN jt_uploadedfiles h_2266 ON l.field10h = h_2266.id 

LEFT JOIN jt_uploadedfiles f_1390 ON l.field11 = f_1390.id 

LEFT JOIN jos_users u_1390 ON f_1390.created_by = u_1390.id 

LEFT JOIN jt_uploadedfiles f_1391 ON l.field12 = f_1391.id 

LEFT JOIN jos_users u_1391 ON f_1391.created_by = u_1391.id 
;


/**
* definiciones, tablas y vistas lsc__
*/

#jt3_campos civiles

DELETE FROM `jt3_campos` WHERE clave LIKE 'lsc__' OR clave LIKE 'lsc08_';
INSERT INTO `jt3_campos` (`id`,`published`,`ordering`,`clave`,`dataIndex`,`columnText`,`columnTooltip`,`dataType`,`store`,`displayField`,`alwaysChange`,`comments`) VALUES 
(2158,1,2,'lsc01','field116','FECHA DE RECEPCIÓN DEL ASUNTO',NULL,'date',NULL,NULL,1,NULL),
(2159,1,3,'lsc01','field117','NÚMERO DE PROYECTO',NULL,NULL,NULL,NULL,1,NULL),
(2160,1,5,'lsc01','field120','CONSTANCIAS RECIBIDAS',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2161,1,6,'lsc01','field121','RESOLUCIÓN RECURRIDA',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2162,1,7,'lsc01','field122','FECHA DE CIRCULACIÓN',NULL,'date',NULL,NULL,1,NULL),
(2164,1,11,'lsc01','field123','FECHA DEL DICTADO DE LA SENTENCIA',NULL,'date',NULL,NULL,1,NULL),
(2165,1,12,'lsc01','field124','FECHA DE DEVOLUCIÓN AL ARCHIVO',NULL,'date',NULL,NULL,1,NULL),
(2347,1,8,'lsc01','field2347','PONENCIA REVISORA',NULL,'ref2','29',NULL,1,NULL),
(2348,1,10,'lsc01','field2348','PONENCIA REVISORA',NULL,'ref2','29',NULL,1,NULL),
(2163,1,9,'lsc01','field236','FECHA DE CIRCULACIÓN',NULL,'date',NULL,NULL,1,NULL),
(2166,1,13,'lsc01','field253','DE QUIEN RECIBE LAS CONSTANCIAS',NULL,'NFempleado','99',NULL,1,NULL),
(2168,1,32,'lsc02','field126','NOMBRE DEL PROYECTISTA',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2169,1,34,'lsc02','field127','FIRMA DE SALIDA',NULL,'Fexterna',NULL,NULL,1,NULL),
(2170,0,35,'lsc02','field128','FECHA Y HORA DE ENTRADA',NULL,'datetime',NULL,NULL,1,NULL),
(2171,0,36,'lsc02','field129','FECHA Y HORA DE SALIDA',NULL,'datetime',NULL,NULL,1,NULL),
(2167,1,33,'lsc02','field130','FIRMA DE ENTRADA',NULL,'Fexterna',NULL,NULL,1,NULL),
(2172,1,41,'lsc03','field131','FECHA',NULL,'date',NULL,NULL,1,NULL),
(2173,1,42,'lsc03','field134','FECHA DE FIRMA DEL M.P.',NULL,'date',NULL,NULL,1,NULL),
(2174,1,43,'lsc03','field135','NOMBRE DEL M.P.',NULL,'person',NULL,'1',1,NULL),
(2175,1,44,'lsc03','field254','FIRMA DEL M.P.',NULL,'Fexterna',NULL,NULL,1,NULL),
(2176,1,47,'lsc04','field137','EXPEDIENTE PRINCIPAL',NULL,NULL,NULL,NULL,1,NULL),
(2177,0,47,'lsc04','field138','JUICIO',NULL,NULL,NULL,NULL,1,NULL),
(2178,1,48,'lsc04','field139','MONTO DE LA MULTA',NULL,NULL,NULL,NULL,1,NULL),
(2179,1,49,'lsc04','field140','FECHA DE RESOLUCIÓN EN DONDE SE IMPONE',NULL,'date',NULL,NULL,1,NULL),
(2180,1,50,'lsc04','field141','NOMBRE DE LA PERSONA A QUIÉN SE DECRETA',NULL,'person',NULL,NULL,1,NULL),
(2181,1,51,'lsc04','field142','NÚMERO DEL OFICIO',NULL,NULL,NULL,NULL,1,NULL),
(2183,1,53,'lsc04','field143','OBSERVACIONES',NULL,'multiline',NULL,NULL,1,NULL),
(2182,1,52,'lsc04','field250','FECHA DEL OFICIO',NULL,'date',NULL,NULL,1,NULL),
(2185,1,5,'lsc05','faudiencia','FECHA DE LA DILIGENCIA',NULL,'datetime',NULL,NULL,1,NULL),
(2184,1,4,'lsc05','field146','EXPEDIENTE',NULL,NULL,NULL,NULL,1,NULL),
(2186,1,6,'lsc05','field148','TIPO DE DILIGENCIA',NULL,NULL,NULL,NULL,1,NULL),
(2187,1,61,'lsc06','field149','NÚMERO DE ORDEN',NULL,NULL,NULL,NULL,1,NULL),
(2188,1,62,'lsc06','field150','FECHA DE ENTRADA',NULL,'date',NULL,NULL,1,NULL),
(2189,1,63,'lsc06','field151','NÚMERO DEL CERTIFICADO',NULL,NULL,NULL,NULL,1,NULL),
(2190,1,64,'lsc06','field152','FECHA DE EXPEDICIÓN',NULL,'date',NULL,NULL,1,NULL),
(2191,1,65,'lsc06','field153','IMPORTE',NULL,'currency',NULL,NULL,1,NULL),
(2192,1,66,'lsc06','field154','EXPEDIDOR',NULL,NULL,NULL,NULL,1,NULL),
(2193,1,67,'lsc06','field155','BENEFICIARIO',NULL,'person',NULL,NULL,1,NULL),
(2194,0,68,'lsc06','field156','JUICIO',NULL,NULL,NULL,NULL,1,NULL),
(2195,1,69,'lsc06','field157','FECHA DE DEVOLUCIÓN',NULL,'date',NULL,NULL,1,NULL),
(2196,1,70,'lsc06','field158','A QUIÉN SE DEVUELVE',NULL,'person',NULL,'1',1,NULL),
(2199,1,73,'lsc06','field159','FIRMA  ',NULL,'Fexterna',NULL,NULL,1,NULL),
(2197,1,71,'lsc06','field160','OBSERVACIONES',NULL,'multiline',NULL,NULL,1,NULL),
(2198,0,72,'lsc06','field161','NOMBRES Y FIRMAS',NULL,NULL,NULL,NULL,1,NULL),
(2206,1,81,'lsc07','billete','NÚMERO DE BILLETE DE DEPÓSITO',NULL,NULL,NULL,NULL,1,NULL),
(2200,1,75,'lsc07','field162','NÚMERO DE FOLIO',NULL,NULL,NULL,NULL,1,NULL),
(2201,1,76,'lsc07','field163','SECRETARÍA',NULL,NULL,NULL,NULL,1,NULL),
(2202,1,77,'lsc07','field164','NOMBRE',NULL,'person',NULL,'1',1,NULL),
(2203,1,78,'lsc07','field165','CARÁCTER (ACTOR, DEMANDADO ETC)',NULL,NULL,NULL,NULL,1,NULL),
(2204,1,79,'lsc07','field166','JUEZ O MAGISTRADO',NULL,NULL,NULL,NULL,1,NULL),
(2205,1,80,'lsc07','field167','NOMBRE DEL JUEZ O MAGISTRADO',NULL,'person',NULL,'1',1,NULL),
(2207,1,82,'lsc07','field169','CANTIDAD EN NÚMERO',NULL,'currency',NULL,NULL,1,NULL),
(2208,1,82,'lsc07','field169b','CANTIDAD EN LETRA',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2209,1,83,'lsc07','field170','ASIENTO DE CAJA FOLIO',NULL,NULL,NULL,NULL,1,NULL),
(2210,1,84,'lsc07','field171','FECHA',NULL,'date',NULL,NULL,1,NULL),
(2211,1,85,'lsc07','field172','FIRMA  ',NULL,'Fexterna',NULL,NULL,1,NULL),
(2212,1,86,'lsc07','field173','DE PRESIDENTE DE SALA',NULL,'NFempleado','91',NULL,1,NULL),
(2213,1,87,'lsc07','field174','DE SECRETARIA DE ACUERDOS',NULL,'NFempleado','92',NULL,1,NULL),
(2215,1,92,'lsc08','billete','NÚMERO DE CERTIFICADO',NULL,NULL,NULL,NULL,1,NULL),
(2219,0,89,'lsc08','field176','NÚMERO CONSECUTIVO',NULL,NULL,NULL,NULL,1,NULL),
(2214,1,90,'lsc08','field177','FECHA DE ENTRADA',NULL,'date',NULL,NULL,1,NULL),
(2220,1,101,'lsc09','field187','NÚMERO DE REGISTRO (CONSECUTIVO)',NULL,NULL,NULL,NULL,1,NULL),
(2221,0,104,'lsc09','field190','JUICIO',NULL,NULL,NULL,NULL,1,NULL),
(2222,1,105,'lsc09','field191','RESOLUCIÓN RECURRIDA',NULL,NULL,NULL,NULL,1,NULL),
(2223,1,106,'lsc09','field192','FECHA DE ENTRADA',NULL,'date',NULL,NULL,1,NULL),
(2224,1,107,'lsc09','field193','FECHA DE SALIDA (NO SE LLENA)',NULL,'date',NULL,NULL,1,NULL),
(2225,1,108,'lsc09','field194','OBSERVACIONES',NULL,'multiline',NULL,NULL,1,NULL),
(2226,0,113,'lsc10','field197','JUICIO',NULL,NULL,NULL,NULL,1,NULL),
(2227,1,114,'lsc10','field199','FECHA DE ENTREGA',NULL,'date',NULL,NULL,1,NULL),
(2228,1,115,'lsc10','field200','FECHA DEL AUTO A DILIGENCIAR',NULL,'date',NULL,NULL,1,NULL),
(2229,1,116,'lsc10','field201','LUGAR DONDE DEBE ACTUARSE',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2230,1,117,'lsc10','field202','FECHA DE LA DILIGENCIA',NULL,'date',NULL,NULL,1,NULL),
(2231,1,118,'lsc10','field203','FECHA DE LA DEVOLUCIÓN ',NULL,'date',NULL,NULL,1,NULL),
(2232,1,119,'lsc10','field204','OBSERVACIONES',NULL,'multiline',NULL,NULL,1,NULL),
(2233,1,3,'lsc11','field205','NÚMERO DE OFICIO (CONSECUTIVO)',NULL,NULL,NULL,NULL,1,NULL),
(2234,1,4,'lsc11','field207','DESTINATARIO',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2235,1,6,'lsc11','field209','FECHA',NULL,'date',NULL,NULL,1,NULL),
(2236,1,7,'lsc11','field210','NOMBRE DEL QUE REGISTRA',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2237,1,129,'lsc12','field211','NÚMERO DE AMPARO (CONSECUTIVO)',NULL,NULL,NULL,NULL,1,NULL),
(2238,0,130,'lsc12','field212','PONENCIA',NULL,NULL,NULL,NULL,1,NULL),
(2239,1,131,'lsc12','field213','EXPEDIENTE',NULL,NULL,NULL,NULL,1,NULL),
(2240,1,132,'lsc12','field214','JUZGADO',NULL,NULL,NULL,NULL,1,NULL),
(2241,1,133,'lsc12','field216','FECHA DE REGISTRO',NULL,'date',NULL,NULL,1,NULL),
(2242,1,134,'lsc12','field217','SENTIDO EN QUE RESUELVE',NULL,NULL,NULL,NULL,1,NULL),
(2243,1,136,'lsc12','field219','QUEJOSO',NULL,'person',NULL,NULL,1,NULL),
(2244,1,137,'lsc12','field220','FECHA DE LLEGADA',NULL,'date',NULL,NULL,1,NULL),
(2245,1,1,'lsc13','field225','NOMBRE COMPLETO DEL SOLICITANTE',NULL,'person',NULL,'1',1,NULL),
(2246,1,145,'lsc13','field227','TIPO DE IDENTIFICACIÓN',NULL,NULL,NULL,NULL,1,NULL),
(2247,1,146,'lsc13','field228','NÚMERO DE IDENTIFICACIÓN',NULL,NULL,NULL,NULL,1,NULL),
(2283,1,2,'lsc13','field2283','AUTORIZADO POR QUÉ PARTE',NULL,'suggest','general28','text',1,NULL),
(2248,1,147,'lsc13','field229','HORA EN QUE SE PRESTA',NULL,'datetime',NULL,NULL,1,NULL),
(2249,1,148,'lsc13','field230','HORA EN QUE SE REGRESA',NULL,'datetime',NULL,NULL,1,NULL),
(2250,1,149,'lsc13','field231','FIRMA DEL SOLICITANTE',NULL,'Fexterna',NULL,NULL,1,NULL),
(2217,1,95,'lsc14','billete','NÚMERO DE PÓLIZA',NULL,NULL,NULL,NULL,1,NULL),
(2216,0,94,'lsc14','field181','NÚMERO CONSECUTIVO',NULL,NULL,NULL,NULL,1,NULL),
(2218,1,97,'lsc14','field183','FECHA DE EGRESO',NULL,'date',NULL,NULL,1,NULL),
(2251,1,96,'lsc14','field267','IMPORTE',NULL,'currency',NULL,NULL,1,NULL);


#jtc_libros lsc__
DELETE FROM `jtc_libros` WHERE clave LIKE 'lsc__' OR clave LIKE 'lsc08_';
DROP TABLE IF EXISTS `jt_lsc08is`;
DROP TABLE IF EXISTS `jt_lsc08es`;

INSERT INTO `jtc_libros` (`id`,`id_tipoorgano`,`id_materia`,`nombre`,`clave`,`tabla`,`view`,`url`,`published`,`ordering`,`distribution`,`json`,`exp_optional`) VALUES 
(266,2,1,'LIBRETA DE REGISTRO DE SENTENCIAS -TURNO- (OFICIAL)','lsc01','jt_lsc01s','jt_vlsc01s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsc01',1,1,1,NULL,0),
(267,2,1,'LIBRETA DE REGISTRO DE ASISTENCIA (OFICIAL)','lsc02','jt_lsc02s','jt_vlsc02s','index.php?option=com_tsjdf_libros2&view=v4&layout=lsc02',1,2,1,NULL,1),
(268,2,1,'LIBRETA DE VISTAS AL M.P (OFICIAL)','lsc03','jt_lsc03s','jt_vlsc03s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsc03',1,3,1,NULL,0),
(269,2,1,'LIBRO DE MULTAS (OFICIAL)','lsc04','jt_lsc04s','jt_vlsc04s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsc04',1,4,1,NULL,0),
(270,2,1,'AGENDA (OFICIAL)','lsc05','jt_lsc05s','jt_vlsc05s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsc05',1,5,1,NULL,0),
(271,2,1,'LIBRO DE CONTROL DE BILLETES Y PÓLIZAS (OFICIAL)','lsc06','jt_lsc06s','jt_vlsc06s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsc06',1,6,1,NULL,0),
(272,2,1,'LIBRO DE EGRESOS (OFICIAL)','lsc07','jt_lsc07s','jt_vlsc07s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsc07',1,7,1,NULL,0),
(273,2,1,'LIBRO DE PÓLIZAS Y FIANZAS (OFICIAL) - ingresos','lsc08','jt_lsc08s','jt_vlsc08s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsc08',1,8,1,NULL,0),
(274,2,1,'LIBRO DE GOBIERNO (OFICIAL)','lsc09','jt_lsc09s','jt_vlsc09s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsc09',1,9,1,NULL,0),
(275,2,1,'LIBRO DE ACTUARIO (OFICIAL)','lsc10','jt_lsc10s','jt_vlsc10s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsc10',1,10,1,NULL,0),
(276,2,1,'LIBRETA DE OFICIOS (OFICIAL)','lsc11','jt_lsc11s','jt_vlsc11s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsc11',1,11,1,NULL,1),
(277,2,1,'LIBRO DE REGISTRO DE AMPAROS (OFICIAL)','lsc12','jt_lsc12s','jt_vlsc12s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsc12',1,12,2,NULL,0),
(278,2,1,'PAPELETAS PARA EL PRÉSTAMO DE EXPEDIENTES','lsc13','jt_lsc13s','jt_vlsc13s','index.php?option=com_tsjdf_libros2&view=v4&layout=lsc13',1,13,1,NULL,0),
(279,2,1,'LIBRO DE PÓLIZAS Y FIANZAS (OFICIAL) - egresos','lsc14','jt_lsc14s','jt_vlsc14s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsc14',1,8,1,NULL,0);


#tablas y vistas drop-create table-view

-- http://localhost/gpcb/index.php?op
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsc01
DROP TABLE IF EXISTS `jt_lsc01s`;
CREATE TABLE IF NOT EXISTS `jt_lsc01s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_266_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_266_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_266_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_266_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_266_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_266_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_266_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_266_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_266_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field116` DATETIME NULL COMMENT 'FECHA DE RECEPCIÓN DEL ASUNTO'
        , 
	`field117` VARCHAR(45) NULL COMMENT 'NÚMERO DE PROYECTO'
        ,	`field120` VARCHAR(255) NULL COMMENT 'CONSTANCIAS RECIBIDAS'
        ,	`field121` VARCHAR(255) NULL COMMENT 'RESOLUCIÓN RECURRIDA'
        , 
	`field122` DATETIME NULL COMMENT 'FECHA DE CIRCULACIÓN'
        , 
	`field2347` INT NULL ,
	INDEX `c3_2347_idx` (`field2347` ASC),
	CONSTRAINT `c3_2347`
		FOREIGN KEY (`field2347`)
		REFERENCES `jtc_general` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE 
		, 
	`field236` DATETIME NULL COMMENT 'FECHA DE CIRCULACIÓN'
        , 
	`field2348` INT NULL ,
	INDEX `c3_2348_idx` (`field2348` ASC),
	CONSTRAINT `c3_2348`
		FOREIGN KEY (`field2348`)
		REFERENCES `jtc_general` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE 
		, 
	`field123` DATETIME NULL COMMENT 'FECHA DEL DICTADO DE LA SENTENCIA'
        , 
	`field124` DATETIME NULL COMMENT 'FECHA DE DEVOLUCIÓN AL ARCHIVO'
        , 
	`field253` INT NULL COMMENT 'id DE QUIEN RECIBE LAS CONSTANCIAS',	
	INDEX `c3_2166_idx` (`field253` ASC),
	CONSTRAINT `c3_2166`
		FOREIGN KEY (`field253`)
		REFERENCES `jt_uploadedfiles` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE 
		 
)COMMENT = 'generado el 2017-12-24 18:20:32'; 


DROP TABLE IF EXISTS `jt_vlsc01s`;
DROP VIEW IF EXISTS `jt_vlsc01s`;
CREATE OR REPLACE VIEW jt_vlsc01s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field116,l.field117,l.field120,l.field121,l.field122,l.field2347,l.field236,l.field2348,l.field123,l.field124,
 field253, u_2166.name AS field253_name, calculatePath(f_2166.id,f_2166.filename) AS field253_file 

FROM jt_lsc01s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 

LEFT JOIN jt_uploadedfiles f_2166 ON l.field253 = f_2166.id 

LEFT JOIN jos_users u_2166 ON f_2166.created_by = u_2166.id 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsc02
DROP TABLE IF EXISTS `jt_lsc02s`;
CREATE TABLE IF NOT EXISTS `jt_lsc02s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_267_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_267_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_267_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_267_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_267_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_267_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_267_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_267_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_267_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
	`field126` VARCHAR(255) NULL COMMENT 'NOMBRE DEL PROYECTISTA'
        , 
	`field130` INT NULL COMMENT 'id_firma FIRMA DE ENTRADA',
	INDEX `c3_2167_idx` (`field130` ASC),
	CONSTRAINT `c3_2167`
		FOREIGN KEY (`field130`)
		REFERENCES `jt_uploadedfiles` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE
        , 
	`field127` INT NULL COMMENT 'id_firma FIRMA DE SALIDA',
	INDEX `c3_2169_idx` (`field127` ASC),
	CONSTRAINT `c3_2169`
		FOREIGN KEY (`field127`)
		REFERENCES `jt_uploadedfiles` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE
         
)COMMENT = 'generado el 2017-12-24 18:20:32'; 


#firma de entrada y salida asociada a los archivos uploaded referenciados a la hora local
DROP TABLE IF EXISTS `jt_vlsc02s`;
DROP VIEW IF EXISTS `jt_vlsc02s`;
CREATE OR REPLACE VIEW jt_vlsc02s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
#,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field126,
 field130, calculatePath(f_2167.id,f_2167.filename) AS field130_file 
,
 field127, calculatePath(f_2169.id,f_2169.filename) AS field127_file 

,DATE_ADD(f_2167.created, INTERVAL -6 HOUR) 'field128', DATE_ADD(f_2169.created, INTERVAL -6 HOUR) 'field129'
FROM jt_lsc02s l
#LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 

LEFT JOIN jt_uploadedfiles f_2167 ON l.field130 = f_2167.id 

LEFT JOIN jt_uploadedfiles f_2169 ON l.field127 = f_2169.id 
;

-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsc03
DROP TABLE IF EXISTS `jt_lsc03s`;
CREATE TABLE IF NOT EXISTS `jt_lsc03s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_268_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_268_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_268_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_268_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_268_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_268_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_268_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_268_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_268_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field131` DATETIME NULL COMMENT 'FECHA'
        , 
	`field134` DATETIME NULL COMMENT 'FECHA DE FIRMA DEL M.P.'
        , 
	`field135_paterno` VARCHAR(255) NULL, `field135_materno` VARCHAR(45) NULL, `field135_nombre` VARCHAR(45) NULL, `field135_isMoral` TINYINT(1) NOT NULL
        , 
	`field254` INT NULL COMMENT 'id_firma FIRMA DEL M.P.',
	INDEX `c3_2175_idx` (`field254` ASC),
	CONSTRAINT `c3_2175`
		FOREIGN KEY (`field254`)
		REFERENCES `jt_uploadedfiles` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE
         
)COMMENT = 'generado el 2017-12-24 18:20:32'; 



DROP TABLE IF EXISTS `jt_vlsc03s`;
DROP VIEW IF EXISTS `jt_vlsc03s`;
CREATE OR REPLACE VIEW jt_vlsc03s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field131,l.field134,
 CONCAT_WS(' ',l.field135_paterno, l.field135_materno, l.field135_nombre) AS field135,
 l.field135_paterno, l.field135_materno, l.field135_nombre, l.field135_isMoral 
,
 field254, calculatePath(f_2175.id,f_2175.filename) AS field254_file 

FROM jt_lsc03s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 

LEFT JOIN jt_uploadedfiles f_2175 ON l.field254 = f_2175.id 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsc04
DROP TABLE IF EXISTS `jt_lsc04s`;
CREATE TABLE IF NOT EXISTS `jt_lsc04s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_269_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_269_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_269_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_269_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_269_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_269_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_269_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_269_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_269_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field137` VARCHAR(45) NULL COMMENT 'EXPEDIENTE PRINCIPAL'
        , 
	`field139` VARCHAR(45) NULL COMMENT 'MONTO DE LA MULTA'
        , 
	`field140` DATETIME NULL COMMENT 'FECHA DE RESOLUCIÓN EN DONDE SE IMPONE'
        , 
	`field141_paterno` VARCHAR(255) NULL, `field141_materno` VARCHAR(45) NULL, `field141_nombre` VARCHAR(45) NULL, `field141_isMoral` TINYINT(1) NOT NULL
        , 
	`field142` VARCHAR(45) NULL COMMENT 'NÚMERO DEL OFICIO'
        , 
	`field250` DATETIME NULL COMMENT 'FECHA DEL OFICIO'
        , 
	`field143` TEXT NULL COMMENT 'OBSERVACIONES'
         
)COMMENT = 'generado el 2017-12-24 18:20:33'; 


DROP TABLE IF EXISTS `jt_vlsc04s`;
DROP VIEW IF EXISTS `jt_vlsc04s`;
CREATE OR REPLACE VIEW jt_vlsc04s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field137,l.field139,l.field140,
 CONCAT_WS(' ',l.field141_paterno, l.field141_materno, l.field141_nombre) AS field141,
 l.field141_paterno, l.field141_materno, l.field141_nombre, l.field141_isMoral 
,l.field142,l.field250,l.field143
FROM jt_lsc04s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsc05
DROP TABLE IF EXISTS `jt_lsc05s`;
CREATE TABLE IF NOT EXISTS `jt_lsc05s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_270_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_270_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_270_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_270_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_270_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_270_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_270_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_270_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_270_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field146` VARCHAR(45) NULL COMMENT 'EXPEDIENTE'
        , 
	`faudiencia` DATETIME NULL COMMENT 'FECHA DE LA DILIGENCIA'
        , 
	`field148` VARCHAR(45) NULL COMMENT 'TIPO DE DILIGENCIA'
         
)COMMENT = 'generado el 2017-12-24 18:20:33'; 


DROP TABLE IF EXISTS `jt_vlsc05s`;
DROP VIEW IF EXISTS `jt_vlsc05s`;
CREATE OR REPLACE VIEW jt_vlsc05s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field146,l.faudiencia,l.field148
FROM jt_lsc05s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsc06
DROP TABLE IF EXISTS `jt_lsc06s`;
CREATE TABLE IF NOT EXISTS `jt_lsc06s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_271_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_271_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_271_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_271_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_271_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_271_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_271_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_271_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_271_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field149` VARCHAR(45) NULL COMMENT 'NÚMERO DE ORDEN'
        , 
	`field150` DATETIME NULL COMMENT 'FECHA DE ENTRADA'
        , 
	`field151` VARCHAR(45) NULL COMMENT 'NÚMERO DEL CERTIFICADO'
        , 
	`field152` DATETIME NULL COMMENT 'FECHA DE EXPEDICIÓN'
        , 
	`field153` DECIMAL(11,2) NULL COMMENT 'IMPORTE'
        , 
	`field154` VARCHAR(45) NULL COMMENT 'EXPEDIDOR'
        , 
	`field155_paterno` VARCHAR(255) NULL, `field155_materno` VARCHAR(45) NULL, `field155_nombre` VARCHAR(45) NULL, `field155_isMoral` TINYINT(1) NOT NULL
        , 
	`field157` DATETIME NULL COMMENT 'FECHA DE DEVOLUCIÓN'
        , 
	`field158_paterno` VARCHAR(255) NULL, `field158_materno` VARCHAR(45) NULL, `field158_nombre` VARCHAR(45) NULL, `field158_isMoral` TINYINT(1) NOT NULL
        , 
	`field160` TEXT NULL COMMENT 'OBSERVACIONES'
        , 
	`field159` INT NULL COMMENT 'id_firma FIRMA  ',
	INDEX `c3_2199_idx` (`field159` ASC),
	CONSTRAINT `c3_2199`
		FOREIGN KEY (`field159`)
		REFERENCES `jt_uploadedfiles` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE
         
)COMMENT = 'generado el 2017-12-24 18:20:33'; 


DROP TABLE IF EXISTS `jt_vlsc06s`;
DROP VIEW IF EXISTS `jt_vlsc06s`;
CREATE OR REPLACE VIEW jt_vlsc06s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field149,l.field150,l.field151,l.field152,l.field153,l.field154,
 CONCAT_WS(' ',l.field155_paterno, l.field155_materno, l.field155_nombre) AS field155,
 l.field155_paterno, l.field155_materno, l.field155_nombre, l.field155_isMoral 
,l.field157,
 CONCAT_WS(' ',l.field158_paterno, l.field158_materno, l.field158_nombre) AS field158,
 l.field158_paterno, l.field158_materno, l.field158_nombre, l.field158_isMoral 
,l.field160,
 field159, calculatePath(f_2199.id,f_2199.filename) AS field159_file 

FROM jt_lsc06s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 

LEFT JOIN jt_uploadedfiles f_2199 ON l.field159 = f_2199.id 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsc07
DROP TABLE IF EXISTS `jt_lsc07s`;
CREATE TABLE IF NOT EXISTS `jt_lsc07s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_272_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_272_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_272_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_272_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_272_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_272_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_272_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_272_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_272_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field162` VARCHAR(45) NULL COMMENT 'NÚMERO DE FOLIO'
        , 
	`field163` VARCHAR(45) NULL COMMENT 'SECRETARÍA'
        , 
	`field164_paterno` VARCHAR(255) NULL, `field164_materno` VARCHAR(45) NULL, `field164_nombre` VARCHAR(45) NULL, `field164_isMoral` TINYINT(1) NOT NULL
        , 
	`field165` VARCHAR(45) NULL COMMENT 'CARÁCTER (ACTOR, DEMANDADO ETC)'
        , 
	`field166` VARCHAR(45) NULL COMMENT 'JUEZ O MAGISTRADO'
        , 
	`field167_paterno` VARCHAR(255) NULL, `field167_materno` VARCHAR(45) NULL, `field167_nombre` VARCHAR(45) NULL, `field167_isMoral` TINYINT(1) NOT NULL
        , 
	`billete` VARCHAR(45) NULL COMMENT 'NÚMERO DE BILLETE DE DEPÓSITO'
        , INDEX `idx_billete` (`billete` ASC), 
	`field169` DECIMAL(11,2) NULL COMMENT 'CANTIDAD EN NÚMERO'
        ,	`field169b` VARCHAR(255) NULL COMMENT 'CANTIDAD EN LETRA'
        , 
	`field170` VARCHAR(45) NULL COMMENT 'ASIENTO DE CAJA FOLIO'
        , 
	`field171` DATETIME NULL COMMENT 'FECHA'
        , 
	`field172` INT NULL COMMENT 'id_firma FIRMA  ',
	INDEX `c3_2211_idx` (`field172` ASC),
	CONSTRAINT `c3_2211`
		FOREIGN KEY (`field172`)
		REFERENCES `jt_uploadedfiles` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE
        , 
	`field173` INT NULL COMMENT 'id DE PRESIDENTE DE SALA',	
	INDEX `c3_2212_idx` (`field173` ASC),
	CONSTRAINT `c3_2212`
		FOREIGN KEY (`field173`)
		REFERENCES `jt_uploadedfiles` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE 
		, 
	`field174` INT NULL COMMENT 'id DE SECRETARIA DE ACUERDOS',	
	INDEX `c3_2213_idx` (`field174` ASC),
	CONSTRAINT `c3_2213`
		FOREIGN KEY (`field174`)
		REFERENCES `jt_uploadedfiles` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE 
		 
)COMMENT = 'generado el 2017-12-24 18:20:33'; 


DROP TABLE IF EXISTS `jt_vlsc07s`;
DROP VIEW IF EXISTS `jt_vlsc07s`;
CREATE OR REPLACE VIEW jt_vlsc07s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field162,l.field163,

 CONCAT_WS(' ',l.field164_paterno, l.field164_materno, l.field164_nombre) AS field164,
 l.field164_paterno, l.field164_materno, l.field164_nombre, l.field164_isMoral 
,l.field165,l.field166,
 CONCAT_WS(' ',l.field167_paterno, l.field167_materno, l.field167_nombre) AS field167,
 l.field167_paterno, l.field167_materno, l.field167_nombre, l.field167_isMoral 
,l.billete,l.field169,l.field169b,l.field170,l.field171,
 field172, calculatePath(f_2211.id,f_2211.filename) AS field172_file 
,
 field173, u_2212.name AS field173_name, calculatePath(f_2212.id,f_2212.filename) AS field173_file 
,
 field174, u_2213.name AS field174_name, calculatePath(f_2213.id,f_2213.filename) AS field174_file 

FROM jt_lsc07s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 

LEFT JOIN jt_uploadedfiles f_2211 ON l.field172 = f_2211.id 

LEFT JOIN jt_uploadedfiles f_2212 ON l.field173 = f_2212.id 

LEFT JOIN jos_users u_2212 ON f_2212.created_by = u_2212.id 

LEFT JOIN jt_uploadedfiles f_2213 ON l.field174 = f_2213.id 

LEFT JOIN jos_users u_2213 ON f_2213.created_by = u_2213.id 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsc08
DROP TABLE IF EXISTS `jt_lsc08s`;
CREATE TABLE IF NOT EXISTS `jt_lsc08s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_273_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_273_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_273_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_273_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_273_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_273_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_273_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_273_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_273_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field177` DATETIME NULL COMMENT 'FECHA DE ENTRADA'
        , 
	`billete` VARCHAR(45) NULL COMMENT 'NÚMERO DE CERTIFICADO'
        , INDEX `idx_billete` (`billete` ASC) 
)COMMENT = 'generado el 2017-12-24 18:20:33'; 


DROP TABLE IF EXISTS `jt_vlsc08s`;
DROP VIEW IF EXISTS `jt_vlsc08s`;
CREATE OR REPLACE VIEW jt_vlsc08s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field177,l.billete
FROM jt_lsc08s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsc14
DROP TABLE IF EXISTS `jt_lsc14s`;
CREATE TABLE IF NOT EXISTS `jt_lsc14s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_279_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_279_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_279_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_279_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_279_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_279_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_279_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_279_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_279_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`billete` VARCHAR(45) NULL COMMENT 'NÚMERO DE PÓLIZA'
        , INDEX `idx_billete` (`billete` ASC), 
	`field267` DECIMAL(11,2) NULL COMMENT 'IMPORTE'
        , 
	`field183` DATETIME NULL COMMENT 'FECHA DE EGRESO'
         
)COMMENT = 'generado el 2017-12-24 18:20:34'; 


DROP TABLE IF EXISTS `jt_vlsc14s`;
DROP VIEW IF EXISTS `jt_vlsc14s`;
CREATE OR REPLACE VIEW jt_vlsc14s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.billete,l.field267,l.field183
FROM jt_lsc14s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsc09
DROP TABLE IF EXISTS `jt_lsc09s`;
CREATE TABLE IF NOT EXISTS `jt_lsc09s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_274_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_274_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_274_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_274_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_274_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_274_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_274_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_274_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_274_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field187` VARCHAR(45) NULL COMMENT 'NÚMERO DE REGISTRO (CONSECUTIVO)'
        , 
	`field191` VARCHAR(45) NULL COMMENT 'RESOLUCIÓN RECURRIDA'
        , 
	`field192` DATETIME NULL COMMENT 'FECHA DE ENTRADA'
        , 
	`field193` DATETIME NULL COMMENT 'FECHA DE SALIDA (NO SE LLENA)'
        , 
	`field194` TEXT NULL COMMENT 'OBSERVACIONES'
         
)COMMENT = 'generado el 2017-12-24 18:20:34'; 


DROP TABLE IF EXISTS `jt_vlsc09s`;
DROP VIEW IF EXISTS `jt_vlsc09s`;
CREATE OR REPLACE VIEW jt_vlsc09s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field187,l.field191,l.field192,l.field193,l.field194
FROM jt_lsc09s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsc10
DROP TABLE IF EXISTS `jt_lsc10s`;
CREATE TABLE IF NOT EXISTS `jt_lsc10s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_275_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_275_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_275_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_275_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_275_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_275_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_275_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_275_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_275_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field199` DATETIME NULL COMMENT 'FECHA DE ENTREGA'
        , 
	`field200` DATETIME NULL COMMENT 'FECHA DEL AUTO A DILIGENCIAR'
        ,	`field201` VARCHAR(255) NULL COMMENT 'LUGAR DONDE DEBE ACTUARSE'
        , 
	`field202` DATETIME NULL COMMENT 'FECHA DE LA DILIGENCIA'
        , 
	`field203` DATETIME NULL COMMENT 'FECHA DE LA DEVOLUCIÓN '
        , 
	`field204` TEXT NULL COMMENT 'OBSERVACIONES'
         
)COMMENT = 'generado el 2017-12-24 18:20:34'; 


DROP TABLE IF EXISTS `jt_vlsc10s`;
DROP VIEW IF EXISTS `jt_vlsc10s`;
CREATE OR REPLACE VIEW jt_vlsc10s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field199,l.field200,l.field201,l.field202,l.field203,l.field204
FROM jt_lsc10s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsc11
DROP TABLE IF EXISTS `jt_lsc11s`;
CREATE TABLE IF NOT EXISTS `jt_lsc11s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_276_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_276_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_276_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_276_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_276_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_276_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_276_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_276_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_276_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field205` VARCHAR(45) NULL COMMENT 'NÚMERO DE OFICIO (CONSECUTIVO)'
        ,	`field207` VARCHAR(255) NULL COMMENT 'DESTINATARIO'
        , 
	`field209` DATETIME NULL COMMENT 'FECHA'
        ,	`field210` VARCHAR(255) NULL COMMENT 'NOMBRE DEL QUE REGISTRA'
         
)COMMENT = 'generado el 2017-12-24 18:20:34'; 


DROP TABLE IF EXISTS `jt_vlsc11s`;
DROP VIEW IF EXISTS `jt_vlsc11s`;
CREATE OR REPLACE VIEW jt_vlsc11s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field205,l.field207,l.field209,l.field210
FROM jt_lsc11s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsc12
DROP TABLE IF EXISTS `jt_lsc12s`;
CREATE TABLE IF NOT EXISTS `jt_lsc12s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_277_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_277_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_277_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_277_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_277_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_277_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_277_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_277_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_277_anoj_idx` (`anoj` ASC),

	`ordering` INT NOT NULL,
 
	`field211` VARCHAR(45) NULL COMMENT 'NÚMERO DE AMPARO (CONSECUTIVO)'
        , 
	`field213` VARCHAR(45) NULL COMMENT 'EXPEDIENTE'
        , 
	`field214` VARCHAR(45) NULL COMMENT 'JUZGADO'
        , 
	`field216` DATETIME NULL COMMENT 'FECHA DE REGISTRO'
        , 
	`field217` VARCHAR(45) NULL COMMENT 'SENTIDO EN QUE RESUELVE'
        , 
	`field219_paterno` VARCHAR(255) NULL, `field219_materno` VARCHAR(45) NULL, `field219_nombre` VARCHAR(45) NULL, `field219_isMoral` TINYINT(1) NOT NULL
        , 
	`field220` DATETIME NULL COMMENT 'FECHA DE LLEGADA'
         
)COMMENT = 'generado el 2017-12-24 18:20:34'; 


DROP TABLE IF EXISTS `jt_vlsc12s`;
DROP VIEW IF EXISTS `jt_vlsc12s`;
CREATE OR REPLACE VIEW jt_vlsc12s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.id_secretaria,l.field211,l.field213,l.field214,l.field216,l.field217,
 CONCAT_WS(' ',l.field219_paterno, l.field219_materno, l.field219_nombre) AS field219,
 l.field219_paterno, l.field219_materno, l.field219_nombre, l.field219_isMoral 
,l.field220
FROM jt_lsc12s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsc13
DROP TABLE IF EXISTS `jt_lsc13s`;
CREATE TABLE IF NOT EXISTS `jt_lsc13s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_278_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_278_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_278_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_278_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_278_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_278_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_278_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_278_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_278_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field225_paterno` VARCHAR(255) NULL, `field225_materno` VARCHAR(45) NULL, `field225_nombre` VARCHAR(45) NULL, `field225_isMoral` TINYINT(1) NOT NULL
        , 
	`txt_field2283` VARCHAR(255) NULL COMMENT 'AUTORIZADO POR QUÉ PARTE',
	`id_field2283` INT(11) NULL COMMENT 'FK general28'
        , 
	`field227` VARCHAR(45) NULL COMMENT 'TIPO DE IDENTIFICACIÓN'
        , 
	`field228` VARCHAR(45) NULL COMMENT 'NÚMERO DE IDENTIFICACIÓN'
        , 
	`field229` DATETIME NULL COMMENT 'HORA EN QUE SE PRESTA'
        , 
	`field230` DATETIME NULL COMMENT 'HORA EN QUE SE REGRESA'
        , 
	`field231` INT NULL COMMENT 'id_firma FIRMA DEL SOLICITANTE',
	INDEX `c3_2250_idx` (`field231` ASC),
	CONSTRAINT `c3_2250`
		FOREIGN KEY (`field231`)
		REFERENCES `jt_uploadedfiles` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE
         
)COMMENT = 'generado el 2017-12-24 18:20:35'; 


DROP TABLE IF EXISTS `jt_vlsc13s`;
DROP VIEW IF EXISTS `jt_vlsc13s`;
CREATE OR REPLACE VIEW jt_vlsc13s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,
 CONCAT_WS(' ',l.field225_paterno, l.field225_materno, l.field225_nombre) AS field225,
 l.field225_paterno, l.field225_materno, l.field225_nombre, l.field225_isMoral 
,l.id_field2283, l.txt_field2283,l.field227,l.field228,l.field229,l.field230,
 field231, calculatePath(f_2250.id,f_2250.filename) AS field231_file 

FROM jt_lsc13s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 

LEFT JOIN jt_uploadedfiles f_2250 ON l.field231 = f_2250.id 
;

/**
* definiciones, tablas y vistas lspe__
*/

#LISTA DE LIBROS
DELETE FROM `jtc_libros` WHERE clave LIKE 'lspe__';
INSERT INTO `jtc_libros` (`id`,`id_tipoorgano`,`id_materia`,`nombre`,`clave`,`tabla`,`view`,`url`,`published`,`ordering`,`distribution`,`json`,`exp_optional`) VALUES 
(280,2,14,'LIBRO DE GOBIERNO','lspe01','jt_lspe01s','jt_vlspe01s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lspe01',1,1,1,NULL,0),
(281,2,14,'LIBRO DE RESOLUCIONES DE PLANO','lspe02','jt_lspe02s','jt_vlspe02s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lspe02',1,2,1,NULL,0),
(282,2,14,'LIBRO DE RESOLUCIONES','lspe03','jt_lspe03s','jt_vlspe03s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lspe03',1,3,1,NULL,0),
(283,2,14,'LIBRO DE BENEFICIOS REVOCADO Y O/A','lspe04','jt_lspe04s','jt_vlspe04s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lspe04',1,4,1,NULL,0),
(284,2,14,'LIBRO DE DESISTIMIENTO','lspe05','jt_lspe05s','jt_vlspe05s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lspe05',1,5,1,NULL,0),
(285,2,14,'LIBRO DE ARCHIVO','lspe06','jt_lspe06s','jt_vlspe06s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lspe06',1,6,1,NULL,0),
(286,2,14,'LIBRO DE FINANZAS','lspe07','jt_lspe07s','jt_vlspe07s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lspe07',1,7,1,NULL,0),
(287,2,14,'LIBRO DE INGRESO Y EGRESO DE BILLETES','lspe08','jt_lspe08s','jt_vlspe08s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lspe08',1,8,1,NULL,0);

#lista de campos
DELETE FROM `jt3_campos` WHERE clave LIKE 'lspe__';
INSERT INTO `jt3_campos` (`id`,`published`,`ordering`,`clave`,`dataIndex`,`columnText`,`columnTooltip`,`dataType`,`store`,`displayField`,`alwaysChange`,`comments`) VALUES 
(2286,1,1,'lspe01','field2286','FECHA DE INGRESO',NULL,'date',NULL,NULL,1,NULL),
(2287,1,2,'lspe01','field2287','JUZGADO PENAL',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2288,1,3,'lspe01','field2288','JUZGADO DE EJECUCIÓN DE ORIGEN',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2289,1,4,'lspe01','field2289','FECHA DE LA RESOLUCIÓN APELADA',NULL,'date',NULL,NULL,1,NULL),
(2290,1,5,'lspe01','field2290','RESOLUCIÓN APELADA',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2291,1,6,'lspe01','field2291','PETICIÓN CONCEDIDA',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2292,1,7,'lspe01','field2292','FECHA DE RESOLUCIÓN APELADA',NULL,'date',NULL,NULL,1,NULL),
(2293,1,8,'lspe01','field2293','QUIEN APELA',NULL,'person',NULL,NULL,1,NULL),
(2294,1,9,'lspe01','field2294','LUGAR DE RECLUSIÓN',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2295,1,10,'lspe01','field2295','FECHA DE AUDIENCIA DE VISTA',NULL,'date',NULL,NULL,1,NULL),
(2296,1,11,'lspe01','field2296','FECHA DE RESOLUCIÓN',NULL,'date',NULL,NULL,1,NULL),
(2297,1,12,'lspe01','field2297','SENTIDO DE LA RESOLUCIÓN',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2298,1,15,'lspe01','field2298','OBSERVACIONES',NULL,'multiline',NULL,NULL,1,NULL),
(2343,1,13,'lspe01','field2343','NO. DE AMPARO',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2344,1,14,'lspe01','field2344','FECHA DE RESOLUCIÓN RECURRIDA VÍA AMPARO',NULL,'date',NULL,NULL,1,NULL),
(2299,1,1,'lspe02','field2299','MATERIA',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2300,1,2,'lspe02','field2300','FECHA DE RESOLUCIÓN',NULL,'date',NULL,NULL,1,NULL),
(2301,1,3,'lspe02','field2301','SENTIDO DE RESOLUCIÓN',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2302,1,4,'lspe02','field2302','OBSERVACIONES',NULL,'multiline',NULL,NULL,1,NULL),
(2303,1,1,'lspe03','field2303','MATERIA DE LA APELACIÓN',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2304,1,2,'lspe03','field2304','FECHA DE AUDIENCIA',NULL,'date',NULL,NULL,1,NULL),
(2305,1,3,'lspe03','field2305','FECHA DE LA RESOLUCIÓN',NULL,'date',NULL,NULL,1,NULL),
(2306,1,4,'lspe03','field2306','SENTIDO DE RESOLUCIÓN',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2307,1,5,'lspe03','field2307','OBSERVACIONES',NULL,'multiline',NULL,NULL,1,NULL),
(2308,1,1,'lspe04','field2308','PENA POR CUMPLIR ',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2309,1,2,'lspe04','field2309','BENEFICIO PENITENCIARIO',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2310,1,3,'lspe04','field2310','FECHA DE RESOLUCIÓN',NULL,'date',NULL,NULL,1,NULL),
(2311,1,4,'lspe04','field2311','SENTIDO DE RESOLUCIÓN',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2312,1,5,'lspe04','field2312','PRESCRIPCIÓN DE LA PENA',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2313,1,6,'lspe04','field2313','FECHA DE REVOCACIÓN',NULL,'date',NULL,NULL,1,NULL),
(2314,1,7,'lspe04','field2314','FECHA DE CUMPLIMIENTO DE O/R ',NULL,'date',NULL,NULL,1,NULL),
(2315,1,8,'lspe04','field2315','OBSERVACIONES',NULL,'multiline',NULL,NULL,1,NULL),
(2316,1,1,'lspe05','field2316','MOTIVO DEL DESISTIMIENTO',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2317,1,2,'lspe05','field2317','BENEFICIO PENITENCIARIO',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2318,1,3,'lspe05','field2318','FECHA DE DESISTIMIENTO',NULL,'date',NULL,NULL,1,NULL),
(2319,1,4,'lspe05','field2319','OBSERVACIONES',NULL,'multiline',NULL,NULL,1,NULL),
(2320,1,1,'lspe06','field2320','No. DE ORDEN',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2321,1,2,'lspe06','field2321','FOJAS DEL EXPEDIENTE TOMAS Y DOCUMENTOS',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2322,1,3,'lspe06','field2322','FOLIO DE DEVOLUCIÓN',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2323,1,4,'lspe06','field2323','FECHA DE DEVOLUCIÓN AL ARCHIVO',NULL,'date',NULL,NULL,1,NULL),
(2324,1,5,'lspe06','field2324','OBSERVACIONES',NULL,'multiline',NULL,NULL,1,NULL),
(2325,1,1,'lspe07','field2325','MOTIVO DE INGRESO DE FIANZA',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2326,1,2,'lspe07','field2326','FECHA DE INGRESO DE FINANZA',NULL,'date',NULL,NULL,1,NULL),
(2327,1,3,'lspe07','field2327','FECHA DE EXPEDICIÓN DE FIANZA',NULL,'date',NULL,NULL,1,NULL),
(2328,1,4,'lspe07','field2328','IMPORTE',NULL,'currency',NULL,NULL,1,NULL),
(2329,1,5,'lspe07','field2329','FECHA DE CANCELACIÓN DE FIANZA ',NULL,'date',NULL,NULL,1,NULL),
(2330,1,6,'lspe07','field2330','MOTIVO DE CANCELACIÓN DE FIANZA',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2331,1,7,'lspe07','field2331','AFIANZADORA',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2332,1,8,'lspe07','field2332','FECHA EN QUE SE HACE EFECTIVA',NULL,'date',NULL,NULL,1,NULL),
(2333,1,9,'lspe07','field2333','OBSERVACIONES',NULL,'multiline',NULL,NULL,1,NULL),
(2349,1,1,'lspe08','billete','No DE BILLETE',NULL,NULL,NULL,NULL,1,NULL),
(2334,1,2,'lspe08','field2334','MOTIVO DE INGRESO DE BILLETE',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2335,1,3,'lspe08','field2335','FECHA DE INGRESO DE BILLETE',NULL,'date',NULL,NULL,1,NULL),
(2336,1,4,'lspe08','field2336','FECHA DE EXPEDICIÓN DE BILLETE ',NULL,'date',NULL,NULL,1,NULL),
(2337,1,5,'lspe08','field2337','IMPORTE',NULL,'currency',NULL,NULL,1,NULL),
(2338,1,6,'lspe08','field2338','FECHA DE EGRESO DE BILLETE',NULL,'date',NULL,NULL,1,NULL),
(2339,1,7,'lspe08','field2339','MOTIVO DE EGRESO DE BILLETE',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2340,1,8,'lspe08','field2340','PERSONA QUE RECIBE',NULL,'person',NULL,NULL,1,NULL),
(2341,1,9,'lspe08','field2341','FIRMA DE QUIEN RECIBE ',NULL,'Fexterna',NULL,NULL,1,NULL),
(2342,1,10,'lspe08','field2342','OBSERVACIONES',NULL,'multiline',NULL,NULL,1,NULL);

#tablas lspe__
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lspe01
DROP TABLE IF EXISTS `jt_lspe01s`;
CREATE TABLE IF NOT EXISTS `jt_lspe01s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_280_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_280_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_280_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_280_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_280_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_280_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_280_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_280_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_280_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field2286` DATETIME NULL COMMENT 'FECHA DE INGRESO'
        ,	`field2287` VARCHAR(255) NULL COMMENT 'JUZGADO PENAL'
        ,	`field2288` VARCHAR(255) NULL COMMENT 'JUZGADO DE EJECUCIÓN DE ORIGEN'
        , 
	`field2289` DATETIME NULL COMMENT 'FECHA DE LA RESOLUCIÓN APELADA'
        ,	`field2290` VARCHAR(255) NULL COMMENT 'RESOLUCIÓN APELADA'
        ,	`field2291` VARCHAR(255) NULL COMMENT 'PETICIÓN CONCEDIDA'
        , 
	`field2292` DATETIME NULL COMMENT 'FECHA DE RESOLUCIÓN APELADA'
        , 
	`field2293_paterno` VARCHAR(255) NULL, `field2293_materno` VARCHAR(45) NULL, `field2293_nombre` VARCHAR(45) NULL, `field2293_isMoral` TINYINT(1) NOT NULL
        ,	`field2294` VARCHAR(255) NULL COMMENT 'LUGAR DE RECLUSIÓN'
        , 
	`field2295` DATETIME NULL COMMENT 'FECHA DE AUDIENCIA DE VISTA'
        , 
	`field2296` DATETIME NULL COMMENT 'FECHA DE RESOLUCIÓN'
        ,	`field2297` VARCHAR(255) NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN'
        ,	`field2343` VARCHAR(255) NULL COMMENT 'NO. DE AMPARO'
        , 
	`field2344` DATETIME NULL COMMENT 'FECHA DE RESOLUCIÓN RECURRIDA VÍA AMPARO'
        , 
	`field2298` TEXT NULL COMMENT 'OBSERVACIONES'
         
)COMMENT = 'generado el 2017-12-24 18:30:38'; 


DROP TABLE IF EXISTS `jt_vlspe01s`;
DROP VIEW IF EXISTS `jt_vlspe01s`;
CREATE OR REPLACE VIEW jt_vlspe01s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2286,l.field2287,l.field2288,l.field2289,l.field2290,l.field2291,l.field2292,
 CONCAT_WS(' ',l.field2293_paterno, l.field2293_materno, l.field2293_nombre) AS field2293,
 l.field2293_paterno, l.field2293_materno, l.field2293_nombre, l.field2293_isMoral 
,l.field2294,l.field2295,l.field2296,l.field2297,l.field2343,l.field2344,l.field2298
FROM jt_lspe01s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lspe02
DROP TABLE IF EXISTS `jt_lspe02s`;
CREATE TABLE IF NOT EXISTS `jt_lspe02s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_281_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_281_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_281_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_281_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_281_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_281_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_281_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_281_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_281_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
	`field2299` VARCHAR(255) NULL COMMENT 'MATERIA'
        , 
	`field2300` DATETIME NULL COMMENT 'FECHA DE RESOLUCIÓN'
        ,	`field2301` VARCHAR(255) NULL COMMENT 'SENTIDO DE RESOLUCIÓN'
        , 
	`field2302` TEXT NULL COMMENT 'OBSERVACIONES'
         
)COMMENT = 'generado el 2017-12-24 18:30:38'; 


DROP TABLE IF EXISTS `jt_vlspe02s`;
DROP VIEW IF EXISTS `jt_vlspe02s`;
CREATE OR REPLACE VIEW jt_vlspe02s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2299,l.field2300,l.field2301,l.field2302
FROM jt_lspe02s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lspe03
DROP TABLE IF EXISTS `jt_lspe03s`;
CREATE TABLE IF NOT EXISTS `jt_lspe03s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_282_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_282_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_282_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_282_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_282_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_282_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_282_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_282_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_282_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
	`field2303` VARCHAR(255) NULL COMMENT 'MATERIA DE LA APELACIÓN'
        , 
	`field2304` DATETIME NULL COMMENT 'FECHA DE AUDIENCIA'
        , 
	`field2305` DATETIME NULL COMMENT 'FECHA DE LA RESOLUCIÓN'
        ,	`field2306` VARCHAR(255) NULL COMMENT 'SENTIDO DE RESOLUCIÓN'
        , 
	`field2307` TEXT NULL COMMENT 'OBSERVACIONES'
         
)COMMENT = 'generado el 2017-12-24 18:30:38'; 


DROP TABLE IF EXISTS `jt_vlspe03s`;
DROP VIEW IF EXISTS `jt_vlspe03s`;
CREATE OR REPLACE VIEW jt_vlspe03s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2303,l.field2304,l.field2305,l.field2306,l.field2307
FROM jt_lspe03s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lspe04
DROP TABLE IF EXISTS `jt_lspe04s`;
CREATE TABLE IF NOT EXISTS `jt_lspe04s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_283_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_283_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_283_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_283_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_283_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_283_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_283_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_283_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_283_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
	`field2308` VARCHAR(255) NULL COMMENT 'PENA POR CUMPLIR '
        ,	`field2309` VARCHAR(255) NULL COMMENT 'BENEFICIO PENITENCIARIO'
        , 
	`field2310` DATETIME NULL COMMENT 'FECHA DE RESOLUCIÓN'
        ,	`field2311` VARCHAR(255) NULL COMMENT 'SENTIDO DE RESOLUCIÓN'
        ,	`field2312` VARCHAR(255) NULL COMMENT 'PRESCRIPCIÓN DE LA PENA'
        , 
	`field2313` DATETIME NULL COMMENT 'FECHA DE REVOCACIÓN'
        , 
	`field2314` DATETIME NULL COMMENT 'FECHA DE CUMPLIMIENTO DE O/R '
        , 
	`field2315` TEXT NULL COMMENT 'OBSERVACIONES'
         
)COMMENT = 'generado el 2017-12-24 18:30:39'; 


DROP TABLE IF EXISTS `jt_vlspe04s`;
DROP VIEW IF EXISTS `jt_vlspe04s`;
CREATE OR REPLACE VIEW jt_vlspe04s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2308,l.field2309,l.field2310,l.field2311,l.field2312,l.field2313,l.field2314,l.field2315
FROM jt_lspe04s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lspe05
DROP TABLE IF EXISTS `jt_lspe05s`;
CREATE TABLE IF NOT EXISTS `jt_lspe05s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_284_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_284_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_284_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_284_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_284_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_284_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_284_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_284_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_284_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
	`field2316` VARCHAR(255) NULL COMMENT 'MOTIVO DEL DESISTIMIENTO'
        ,	`field2317` VARCHAR(255) NULL COMMENT 'BENEFICIO PENITENCIARIO'
        , 
	`field2318` DATETIME NULL COMMENT 'FECHA DE DESISTIMIENTO'
        , 
	`field2319` TEXT NULL COMMENT 'OBSERVACIONES'
         
)COMMENT = 'generado el 2017-12-24 18:30:39'; 


DROP TABLE IF EXISTS `jt_vlspe05s`;
DROP VIEW IF EXISTS `jt_vlspe05s`;
CREATE OR REPLACE VIEW jt_vlspe05s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2316,l.field2317,l.field2318,l.field2319
FROM jt_lspe05s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lspe06
DROP TABLE IF EXISTS `jt_lspe06s`;
CREATE TABLE IF NOT EXISTS `jt_lspe06s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_285_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_285_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_285_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_285_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_285_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_285_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_285_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_285_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_285_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
	`field2320` VARCHAR(255) NULL COMMENT 'No. DE ORDEN'
        ,	`field2321` VARCHAR(255) NULL COMMENT 'FOJAS DEL EXPEDIENTE TOMAS Y DOCUMENTOS'
        ,	`field2322` VARCHAR(255) NULL COMMENT 'FOLIO DE DEVOLUCIÓN'
        , 
	`field2323` DATETIME NULL COMMENT 'FECHA DE DEVOLUCIÓN AL ARCHIVO'
        , 
	`field2324` TEXT NULL COMMENT 'OBSERVACIONES'
         
)COMMENT = 'generado el 2017-12-24 18:30:39'; 


DROP TABLE IF EXISTS `jt_vlspe06s`;
DROP VIEW IF EXISTS `jt_vlspe06s`;
CREATE OR REPLACE VIEW jt_vlspe06s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2320,l.field2321,l.field2322,l.field2323,l.field2324
FROM jt_lspe06s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lspe07
DROP TABLE IF EXISTS `jt_lspe07s`;
CREATE TABLE IF NOT EXISTS `jt_lspe07s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_286_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_286_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_286_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_286_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_286_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_286_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_286_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_286_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_286_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
	`field2325` VARCHAR(255) NULL COMMENT 'MOTIVO DE INGRESO DE FIANZA'
        , 
	`field2326` DATETIME NULL COMMENT 'FECHA DE INGRESO DE FINANZA'
        , 
	`field2327` DATETIME NULL COMMENT 'FECHA DE EXPEDICIÓN DE FIANZA'
        , 
	`field2328` DECIMAL(11,2) NULL COMMENT 'IMPORTE'
        , 
	`field2329` DATETIME NULL COMMENT 'FECHA DE CANCELACIÓN DE FIANZA '
        ,	`field2330` VARCHAR(255) NULL COMMENT 'MOTIVO DE CANCELACIÓN DE FIANZA'
        ,	`field2331` VARCHAR(255) NULL COMMENT 'AFIANZADORA'
        , 
	`field2332` DATETIME NULL COMMENT 'FECHA EN QUE SE HACE EFECTIVA'
        , 
	`field2333` TEXT NULL COMMENT 'OBSERVACIONES'
         
)COMMENT = 'generado el 2017-12-24 18:30:39'; 


DROP TABLE IF EXISTS `jt_vlspe07s`;
DROP VIEW IF EXISTS `jt_vlspe07s`;
CREATE OR REPLACE VIEW jt_vlspe07s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2325,l.field2326,l.field2327,l.field2328,l.field2329,l.field2330,l.field2331,l.field2332,l.field2333
FROM jt_lspe07s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lspe08
DROP TABLE IF EXISTS `jt_lspe08s`;
CREATE TABLE IF NOT EXISTS `jt_lspe08s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_287_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_287_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_287_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_287_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_287_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_287_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_287_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_287_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_287_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`billete` VARCHAR(45) NULL COMMENT 'No DE BILLETE'
        , INDEX `idx_billete` (`billete` ASC),	`field2334` VARCHAR(255) NULL COMMENT 'MOTIVO DE INGRESO DE BILLETE'
        , 
	`field2335` DATETIME NULL COMMENT 'FECHA DE INGRESO DE BILLETE'
        , 
	`field2336` DATETIME NULL COMMENT 'FECHA DE EXPEDICIÓN DE BILLETE '
        , 
	`field2337` DECIMAL(11,2) NULL COMMENT 'IMPORTE'
        , 
	`field2338` DATETIME NULL COMMENT 'FECHA DE EGRESO DE BILLETE'
        ,	`field2339` VARCHAR(255) NULL COMMENT 'MOTIVO DE EGRESO DE BILLETE'
        , 
	`field2340_paterno` VARCHAR(255) NULL, `field2340_materno` VARCHAR(45) NULL, `field2340_nombre` VARCHAR(45) NULL, `field2340_isMoral` TINYINT(1) NOT NULL
        , 
	`field2341` INT NULL COMMENT 'id_firma FIRMA DE QUIEN RECIBE ',
	INDEX `c3_2341_idx` (`field2341` ASC),
	CONSTRAINT `c3_2341`
		FOREIGN KEY (`field2341`)
		REFERENCES `jt_uploadedfiles` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE
        , 
	`field2342` TEXT NULL COMMENT 'OBSERVACIONES'
         
)COMMENT = 'generado el 2017-12-24 18:30:39'; 


DROP TABLE IF EXISTS `jt_vlspe08s`;
DROP VIEW IF EXISTS `jt_vlspe08s`;
CREATE OR REPLACE VIEW jt_vlspe08s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.billete,l.field2334,l.field2335,l.field2336,l.field2337,l.field2338,l.field2339,
 CONCAT_WS(' ',l.field2340_paterno, l.field2340_materno, l.field2340_nombre) AS field2340,
 l.field2340_paterno, l.field2340_materno, l.field2340_nombre, l.field2340_isMoral 
,
 field2341, calculatePath(f_2341.id,f_2341.filename) AS field2341_file 
,l.field2342
FROM jt_lspe08s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 

LEFT JOIN jt_uploadedfiles f_2341 ON l.field2341 = f_2341.id 
;