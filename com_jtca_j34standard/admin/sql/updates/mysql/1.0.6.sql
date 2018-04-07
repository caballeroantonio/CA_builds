/*
modelar objetos anidados
diccionario 1
AND d1.co_id IN (2, 120, 121, 122, 123, 124, 125, 126, 127, 173, 175, 176, 214, 215, 216, 217, 218, 265) # 223
diccionario 2
AND d2.co_id IN (330, 328, 331, 325, 322, 326, 320, 321, 329, 327, 323, 324, 343, 335, 332, 334, 333, 319) # 336 ## 29
*/

UPDATE jt3_campos 
SET store = CONCAT('sl',store)
WHERE 1
AND dataType = 'parent'
;

#tablas anidadas
ALTER TABLE jtsl_adol_jjadg01 RENAME TO jt_sladol_jjadg01s;
ALTER TABLE jtsl_adol_jjadg05 RENAME TO jt_sladol_jjadg05s;
ALTER TABLE jtsl_averiguacion RENAME TO jt_slaveriguaciones;
ALTER TABLE jtsl_decl_jpdng01 RENAME TO jt_sldecl_jpdng01s;
ALTER TABLE jtsl_dep_joc03 RENAME TO jt_sldep_joc03s;
ALTER TABLE jtsl_dili_jpdng09 RENAME TO jt_sldili_jpdng09s;
ALTER TABLE jtsl_dil_jccm07 RENAME TO jt_sldil_jccm07s;
ALTER TABLE jtsl_dil_jccm09 RENAME TO jt_sldil_jccm09s;
ALTER TABLE jtsl_firm_jjadg16 RENAME TO jt_slfirm_jjadg16s;
ALTER TABLE jtsl_firm_jpdng17 RENAME TO jt_slfirm_jpdng17s;
ALTER TABLE jtsl_incul_jpdng01 RENAME TO jt_slincul_jpdng01s;
ALTER TABLE jtsl_ofen_jpdng01 RENAME TO jt_slofen_jpdng01s;
ALTER TABLE jtsl_partescontenciosas RENAME TO jt_slpartescontenciosas;
ALTER TABLE jtsl_persons RENAME TO jt_slpersons;
ALTER TABLE jtsl_personalias RENAME TO jt_slpersonaliases;
ALTER TABLE jtsl_personaliasedad RENAME TO jt_slpersonaliasedades;
ALTER TABLE jtsl_persondelito RENAME TO jt_slpersondelitos;
ALTER TABLE jtsl_personedadsexo RENAME TO jt_slpersonedadsexos;
ALTER TABLE `jtsl_address` RENAME TO  `jt_sladdresss` ;


UPDATE jtc_libros SET tabla='jt_sladol_jjadg01s' WHERE id='176';
UPDATE jtc_libros SET tabla='jt_sladol_jjadg05s' WHERE id='173';
UPDATE jtc_libros SET tabla='jt_slaveriguaciones' WHERE id='214';
UPDATE jtc_libros SET tabla='jt_sldecl_jpdng01s' WHERE id='125';
UPDATE jtc_libros SET tabla='jt_sldep_joc03s' WHERE id='122';
UPDATE jtc_libros SET tabla='jt_sldili_jpdng09s' WHERE id='126';
UPDATE jtc_libros SET tabla='jt_sldil_jccm07s' WHERE id='120';
UPDATE jtc_libros SET tabla='jt_sldil_jccm09s' WHERE id='121';
UPDATE jtc_libros SET tabla='jt_slfirm_jjadg16s' WHERE id='175';
UPDATE jtc_libros SET tabla='jt_slfirm_jpdng17s' WHERE id='127';
UPDATE jtc_libros SET tabla='jt_slincul_jpdng01s' WHERE id='123';
UPDATE jtc_libros SET tabla='jt_slofen_jpdng01s' WHERE id='124';
UPDATE jtc_libros SET tabla='jt_slpartescontenciosas' WHERE id='265';
UPDATE jtc_libros SET tabla='jt_slpersons' WHERE id='2';
UPDATE jtc_libros SET tabla='jt_slpersonaliases' WHERE id='218';
UPDATE jtc_libros SET tabla='jt_slpersonaliasedades' WHERE id='215';
UPDATE jtc_libros SET tabla='jt_slpersondelitos' WHERE id='217';
UPDATE jtc_libros SET tabla='jt_slpersonedadsexos' WHERE id='216';

#diccionario uno con prefijo SL
UPDATE jtc_libros l LEFT JOIN jt3_campos c ON l.clave = c.clave SET l.clave = 'sladol_jjadg01', c.clave = 'sladol_jjadg01' WHERE l.id =176;
UPDATE jtc_libros l LEFT JOIN jt3_campos c ON l.clave = c.clave SET l.clave = 'sladol_jjadg05', c.clave = 'sladol_jjadg05' WHERE l.id =173;
UPDATE jtc_libros l LEFT JOIN jt3_campos c ON l.clave = c.clave SET l.clave = 'slaveriguacion', c.clave = 'slaveriguacion' WHERE l.id =214;
UPDATE jtc_libros l LEFT JOIN jt3_campos c ON l.clave = c.clave SET l.clave = 'sldecl_jpdng01', c.clave = 'sldecl_jpdng01' WHERE l.id =125;
UPDATE jtc_libros l LEFT JOIN jt3_campos c ON l.clave = c.clave SET l.clave = 'sldep_joc03', c.clave = 'sldep_joc03' WHERE l.id =122;
UPDATE jtc_libros l LEFT JOIN jt3_campos c ON l.clave = c.clave SET l.clave = 'sldili_jpdng09', c.clave = 'sldili_jpdng09' WHERE l.id =126;
UPDATE jtc_libros l LEFT JOIN jt3_campos c ON l.clave = c.clave SET l.clave = 'sldil_jccm07', c.clave = 'sldil_jccm07' WHERE l.id =120;
UPDATE jtc_libros l LEFT JOIN jt3_campos c ON l.clave = c.clave SET l.clave = 'sldil_jccm09', c.clave = 'sldil_jccm09' WHERE l.id =121;
UPDATE jtc_libros l LEFT JOIN jt3_campos c ON l.clave = c.clave SET l.clave = 'slfirm_jjadg16', c.clave = 'slfirm_jjadg16' WHERE l.id =175;
UPDATE jtc_libros l LEFT JOIN jt3_campos c ON l.clave = c.clave SET l.clave = 'slfirm_jpdng17', c.clave = 'slfirm_jpdng17' WHERE l.id =127;
UPDATE jtc_libros l LEFT JOIN jt3_campos c ON l.clave = c.clave SET l.clave = 'slincul_jpdng01', c.clave = 'slincul_jpdng01' WHERE l.id =123;
UPDATE jtc_libros l LEFT JOIN jt3_campos c ON l.clave = c.clave SET l.clave = 'slofen_jpdng01', c.clave = 'slofen_jpdng01' WHERE l.id =124;
UPDATE jtc_libros l LEFT JOIN jt3_campos c ON l.clave = c.clave SET l.clave = 'slpartecontenciosa', c.clave = 'slpartecontenciosa' WHERE l.id =265;
UPDATE jtc_libros l LEFT JOIN jt3_campos c ON l.clave = c.clave SET l.clave = 'slperson', c.clave = 'slperson' WHERE l.id =2;
UPDATE jtc_libros l LEFT JOIN jt3_campos c ON l.clave = c.clave SET l.clave = 'slpersonalias', c.clave = 'slpersonalias' WHERE l.id =218;
UPDATE jtc_libros l LEFT JOIN jt3_campos c ON l.clave = c.clave SET l.clave = 'slpersonaliasedad', c.clave = 'slpersonaliasedad' WHERE l.id =215;
UPDATE jtc_libros l LEFT JOIN jt3_campos c ON l.clave = c.clave SET l.clave = 'slpersondelito', c.clave = 'slpersondelito' WHERE l.id =217;
UPDATE jtc_libros l LEFT JOIN jt3_campos c ON l.clave = c.clave SET l.clave = 'slpersonedadsexo', c.clave = 'slpersonedadsexo' WHERE l.id =216;

UPDATE jt3_campos
SET store = 'slpartecontenciosa'
WHERE 1
AND dataType = 'parent'
AND store = 'slpartescontenciosas'
;

UPDATE
jt3_campos
SET store = 'slperson'
WHERE 1
AND dataType = 'parent'
AND store = 'slpersons'
;

#re-nombrar vistas
DROP VIEW IF EXISTS jtvsl_adol_jjadg01;
DROP VIEW IF EXISTS jtvsl_adol_jjadg05;
DROP VIEW IF EXISTS jtvsl_decl_jpdng01;
DROP VIEW IF EXISTS jtvsl_dep_joc03;
DROP VIEW IF EXISTS jtvsl_dili_jpdng09;
DROP VIEW IF EXISTS jtvsl_dil_jccm07;
DROP VIEW IF EXISTS jtvsl_dil_jccm09;
DROP VIEW IF EXISTS jtvsl_firm_jjadg16;
DROP VIEW IF EXISTS jtvsl_firm_jpdng17;
DROP VIEW IF EXISTS jtvsl_incul_jpdng01;
DROP VIEW IF EXISTS jtvsl_ofen_jpdng01;
DROP VIEW IF EXISTS jtvsl_partescontenciosas;

UPDATE jtc_libros SET view="jt_vsladol_jjadg01" WHERE id=176;
UPDATE jtc_libros SET view="jt_vsladol_jjadg05" WHERE id=173;
UPDATE jtc_libros SET view="jt_vsldecl_jpdng01" WHERE id=125;
UPDATE jtc_libros SET view="jt_vsldep_joc03" WHERE id=122;
UPDATE jtc_libros SET view="jt_vsldili_jpdng09" WHERE id=126;
UPDATE jtc_libros SET view="jt_vsldil_jccm07" WHERE id=120;
UPDATE jtc_libros SET view="jt_vsldil_jccm09" WHERE id=121;
UPDATE jtc_libros SET view="jt_vslfirm_jjadg16" WHERE id=175;
UPDATE jtc_libros SET view="jt_vslfirm_jpdng17" WHERE id=127;
UPDATE jtc_libros SET view="jt_vslincul_jpdng01" WHERE id=123;
UPDATE jtc_libros SET view="jt_vslofen_jpdng01" WHERE id=124;
UPDATE jtc_libros SET view="jt_vslpartescontenciosas" WHERE id=265;
UPDATE `jtc_libros` SET `view`='jt_slpersons' WHERE `id`='2';

#re-generar las vistas sub-libros

DROP TABLE IF EXISTS `jt_vsladol_jjadg01`;
DROP VIEW IF EXISTS `jt_vsladol_jjadg01`;
CREATE OR REPLACE VIEW jt_vsladol_jjadg01 AS

SELECT l.id,l.id_field, l.id_record 
,l.id_field2031, l.txt_field2031,l.sfield29,l.sfield9,l.sfield10,l.sfield11,l.sfield12,l.sfield28,l.sfield13,l.sfield14,l.sfield15,l.sfield16,l.sfield17,l.sfield30,l.sfield18,l.sfield19,l.sfield20,l.sfield21,l.sfield22,l.sfield23,l.sfield24,l.sfield25,l.sfield26,l.sfield27
FROM jt_sladol_jjadg01s l;


DROP TABLE IF EXISTS `jt_vsladol_jjadg05`;
DROP VIEW IF EXISTS `jt_vsladol_jjadg05`;
CREATE OR REPLACE VIEW jt_vsladol_jjadg05 AS

SELECT l.id,l.id_field, l.id_record 
,
 CONCAT_WS(' ',l.sfield1_paterno, l.sfield1_materno, l.sfield1_nombre) AS sfield1,
 l.sfield1_paterno, l.sfield1_materno, l.sfield1_nombre, l.sfield1_isMoral 
,l.sfield8,l.sfield2,l.sfield3,l.sfield4,l.sfield5,l.sfield14,l.sfield9,l.sfield10,l.sfield11,l.sfield12,l.sfield13,l.sfield7
FROM jt_sladol_jjadg05s l;


DROP TABLE IF EXISTS `jt_vsldecl_jpdng01`;
DROP VIEW IF EXISTS `jt_vsldecl_jpdng01`;
CREATE OR REPLACE VIEW jt_vsldecl_jpdng01 AS

SELECT l.id,l.id_field, l.id_record 
,l.sfield1,l.sfield2
FROM jt_sldecl_jpdng01s l;


DROP TABLE IF EXISTS `jt_vsldep_joc03`;
DROP VIEW IF EXISTS `jt_vsldep_joc03`;
CREATE OR REPLACE VIEW jt_vsldep_joc03 AS

SELECT l.id,l.id_field, l.id_record 
,l.sfield5,l.sfield6,l.sfield7,l.sfield8,l.sfield9,
 CONCAT_WS(' ',l.sfield10_paterno, l.sfield10_materno, l.sfield10_nombre) AS sfield10,
 l.sfield10_paterno, l.sfield10_materno, l.sfield10_nombre, l.sfield10_isMoral 
,l.sfield11,l.sfield12,l.sfield13,l.sfield14,l.sfield15,
 sfield16, calculatePath(f_1153.id,f_1153.filename) AS sfield16_file 
,
 sfield16h, calculatePath(h_2262.id,h_2262.filename) AS sfield16h_file 
,
 sfield17, u_1154.name AS sfield17_name, calculatePath(f_1154.id,f_1154.filename) AS sfield17_file 
,
 sfield18, u_1155.name AS sfield18_name, calculatePath(f_1155.id,f_1155.filename) AS sfield18_file 
,l.sfield19
FROM jt_sldep_joc03s l
LEFT JOIN jt_uploadedfiles f_1153 ON l.sfield16 = f_1153.id 

LEFT JOIN jt_uploadedfiles h_2262 ON l.sfield16h = h_2262.id 

LEFT JOIN jt_uploadedfiles f_1154 ON l.sfield17 = f_1154.id 

LEFT JOIN jos_users u_1154 ON f_1154.created_by = u_1154.id 

LEFT JOIN jt_uploadedfiles f_1155 ON l.sfield18 = f_1155.id 

LEFT JOIN jos_users u_1155 ON f_1155.created_by = u_1155.id 
;


DROP TABLE IF EXISTS `jt_vsldili_jpdng09`;
DROP VIEW IF EXISTS `jt_vsldili_jpdng09`;
CREATE OR REPLACE VIEW jt_vsldili_jpdng09 AS

SELECT l.id,l.id_field, l.id_record 
,
 CONCAT_WS(' ',l.sfield2_paterno, l.sfield2_materno, l.sfield2_nombre) AS sfield2,
 l.sfield2_paterno, l.sfield2_materno, l.sfield2_nombre, l.sfield2_isMoral 
,l.sfield3,l.sfield4,l.sfield7,l.sfield8,l.sfield9
FROM jt_sldili_jpdng09s l;


DROP TABLE IF EXISTS `jt_vsldil_jccm07`;
DROP VIEW IF EXISTS `jt_vsldil_jccm07`;
CREATE OR REPLACE VIEW jt_vsldil_jccm07 AS

SELECT l.id,l.id_field, l.id_record 
,l.sfield8,l.sfield9,l.sfield10
FROM jt_sldil_jccm07s l;


DROP TABLE IF EXISTS `jt_vsldil_jccm09`;
DROP VIEW IF EXISTS `jt_vsldil_jccm09`;
CREATE OR REPLACE VIEW jt_vsldil_jccm09 AS

SELECT l.id,l.id_field, l.id_record 
,l.sfield5,
 CONCAT_WS(' ',l.sfield8_paterno, l.sfield8_materno, l.sfield8_nombre) AS sfield8,
 l.sfield8_paterno, l.sfield8_materno, l.sfield8_nombre, l.sfield8_isMoral 
,l.sfield9,l.sfield10,l.sfield11
FROM jt_sldil_jccm09s l;


DROP TABLE IF EXISTS `jt_vslfirm_jjadg16`;
DROP VIEW IF EXISTS `jt_vslfirm_jjadg16`;
CREATE OR REPLACE VIEW jt_vslfirm_jjadg16 AS

SELECT l.id,l.id_field, l.id_record 
,l.sfield5,
 sfield6, calculatePath(f_1518.id,f_1518.filename) AS sfield6_file 
,
 sfield6h, calculatePath(h_2268.id,h_2268.filename) AS sfield6h_file 
,l.sfield7
FROM jt_slfirm_jjadg16s l
LEFT JOIN jt_uploadedfiles f_1518 ON l.sfield6 = f_1518.id 

LEFT JOIN jt_uploadedfiles h_2268 ON l.sfield6h = h_2268.id 
;


DROP TABLE IF EXISTS `jt_vslfirm_jpdng17`;
DROP VIEW IF EXISTS `jt_vslfirm_jpdng17`;
CREATE OR REPLACE VIEW jt_vslfirm_jpdng17 AS

SELECT l.id,l.id_field, l.id_record 
,l.sfield6,
 sfield7, calculatePath(f_1166.id,f_1166.filename) AS sfield7_file 
,
 sfield7h, calculatePath(h_2263.id,h_2263.filename) AS sfield7h_file 
,l.sfield8
FROM jt_slfirm_jpdng17s l
LEFT JOIN jt_uploadedfiles f_1166 ON l.sfield7 = f_1166.id 

LEFT JOIN jt_uploadedfiles h_2263 ON l.sfield7h = h_2263.id 
;


DROP TABLE IF EXISTS `jt_vslincul_jpdng01`;
DROP VIEW IF EXISTS `jt_vslincul_jpdng01`;
CREATE OR REPLACE VIEW jt_vslincul_jpdng01 AS

SELECT l.id,l.id_field, l.id_record 
,
 CONCAT_WS(' ',l.sfield3_paterno, l.sfield3_materno, l.sfield3_nombre) AS sfield3,
 l.sfield3_paterno, l.sfield3_materno, l.sfield3_nombre, l.sfield3_isMoral 
,l.sfield4,l.sfield5
FROM jt_slincul_jpdng01s l;


DROP TABLE IF EXISTS `jt_vslofen_jpdng01`;
DROP VIEW IF EXISTS `jt_vslofen_jpdng01`;
CREATE OR REPLACE VIEW jt_vslofen_jpdng01 AS

SELECT l.id,l.id_field, l.id_record 
,
 CONCAT_WS(' ',l.sfield16_paterno, l.sfield16_materno, l.sfield16_nombre) AS sfield16,
 l.sfield16_paterno, l.sfield16_materno, l.sfield16_nombre, l.sfield16_isMoral 
,l.sfield17
FROM jt_slofen_jpdng01s l;


DROP TABLE IF EXISTS `jt_vslpartescontenciosas`;
DROP VIEW IF EXISTS `jt_vslpartescontenciosas`;
CREATE  OR REPLACE VIEW jt_vslpartescontenciosas AS
SELECT 
p.*,
p.txt_ijuridico 'ijuridico',
CONCAT_WS('', 'Calle: ', calle, ' # ', numero, '\nColonia: ', colonia, '\nC.P.: ', cp, '\n', municipio, ',', e.entidadfn) 'address',
CONCAT_WS(' ', p.paterno, p.materno, p.nombre) 'fullname'
FROM jt_slpartescontenciosas p
LEFT JOIN jtc_entidadesf e ON e.id = p.id_entidadf
LEFT JOIN jtc_general g ON g.id = p.id_ijuridico
ORDER BY g.ordering, p.id
;

/*
#add missing columns state, version, ordering, and validate with:
SELECT 
b.TABLE_SCHEMA, b.TABLE_NAME, b.COLUMN_NAME, g.COLUMN_NAME
, CONCAT('ALTER TABLE `',b.TABLE_NAME,'` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT \'progressive version counter\';') ''
FROM INFORMATION_SCHEMA.COLUMNS b
LEFT JOIN INFORMATION_SCHEMA.COLUMNS g ON 1
AND g.TABLE_SCHEMA = 'gpcb'
AND g.TABLE_NAME = b.TABLE_NAME
AND g.COLUMN_NAME = b.COLUMN_NAME
WHERE 1
AND b.TABLE_SCHEMA = 'borrame'
AND b.TABLE_NAME LIKE 'jt%'
AND g.COLUMN_NAME IS NULL
*/

ALTER TABLE `jt_slpersons` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `jt_sldil_jccm07s` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `jt_sldil_jccm09s` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `jt_sldep_joc03s` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slincul_jpdng01s` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slofen_jpdng01s` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `jt_sldecl_jpdng01s` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `jt_sldili_jpdng09s` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slfirm_jpdng17s` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `jt_sladol_jjadg05s` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slfirm_jjadg16s` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `jt_sladol_jjadg01s` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slaveriguaciones` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slpersonaliasedades` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slpersonedadsexos` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slpersondelitos` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slpersonaliases` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `jt_expedientes` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slpartescontenciosas` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;

ALTER TABLE `jt_slpersons` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;
ALTER TABLE `jt_sldil_jccm07s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;
ALTER TABLE `jt_sldil_jccm09s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;
ALTER TABLE `jt_sldep_joc03s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slincul_jpdng01s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slofen_jpdng01s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;
ALTER TABLE `jt_sldecl_jpdng01s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;
ALTER TABLE `jt_sldili_jpdng09s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slfirm_jpdng17s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;
ALTER TABLE `jt_sladol_jjadg05s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slfirm_jjadg16s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;
ALTER TABLE `jt_sladol_jjadg01s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slaveriguaciones` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slpersonaliasedades` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slpersonedadsexos` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slpersondelitos` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slpersonaliases` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;
ALTER TABLE `jt_expedientes` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;
ALTER TABLE `jt_slpartescontenciosas` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter', ADD COLUMN `ordering` INT(11) NOT NULL DEFAULT 0;

ALTER TABLE `jt_lejemplos` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_ljf07s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsc01s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsc02s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsc03s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsc04s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsc05s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsc06s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsc07s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsc08s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsc09s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsc10s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsc11s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsc12s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsc13s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsc14s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lspe01s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lspe02s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lspe03s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lspe04s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lspe05s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lspe06s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lspe07s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lspe08s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsps01s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsps02s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsps03s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsps04s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsps05s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsps06s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsps07s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsps08s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsps09s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsps10s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsps11s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsps12s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsps13s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';
ALTER TABLE `jt_lsps14s` ADD COLUMN `version` INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'progressive version counter';

ALTER TABLE `jt_ljf07s` ADD COLUMN `state` TINYINT(1) NOT NULL DEFAULT 0;

#subforms
ALTER TABLE `jt_expedientes` ADD COLUMN `partescontenciosas` MEDIUMTEXT NULL COMMENT 'Partes contenciosas';

DROP VIEW `jtvsl_persons`;
CREATE  OR REPLACE VIEW jt_vslpersons AS
SELECT id, id_field, id_record, isMoral, paterno, materno, nombre
, CONCAT_WS(' ', paterno, materno, nombre)  AS 'fullname' 
FROM jt_slpersons;


UPDATE `jtc_libros` SET `tabla`='jt_slpersons p, jt_sladdresss a', `view`='jt_vslpersonswaddresss', `json`='{\"tablas\":[{\"name\":\"jtsl_persons\",\"primaryKey\":\"id\",\"alias\":\"p\"},{\"name\":\"jtsl_address\",\"foreignKey\":\"id_record\",\"join\":\"a__id_record = p__id AND a__id_field = {\"tablas\":[{\"name\":\"jt_slpersons\",\"primaryKey\":\"id\",\"alias\":\"p\"},{\"name\":\"jt_sladdress\",\"foreignKey\":\"id_record\",\"join\":\"a__id_record = p__id AND a__id_field = 2104\",\"alias\":\"a\"}],\"orderingKey\":\"p__id\",\"view\":\"jt_vslpersonswaddresss\",\"alias\":\"l\"}' WHERE `id`='249';
DROP VIEW `jtvsl_personswaddress`; 
CREATE  OR REPLACE VIEW jt_vslpersonswaddresss AS
SELECT 
CASE WHEN a.id IS NOT NULL THEN CONCAT_WS('', 'Calle: ', a.calle, ' # ', a.numero, '\nColonia: ', a.colonia, '\nC.P.: ', a.cp, '\n', a.municipio, ',', e.entidadfn) END 'a__address',
p.id 'p__id', p.id_field 'p__id_field', p.id_record 'p__id_record', p.isMoral 'p__isMoral', p.paterno 'p__paterno', 
p.materno 'p__materno', p.nombre 'p__nombre', CONCAT_WS(' ', p.paterno, p.materno, p.nombre) 'p__fullname',
a.id 'a__id', a.id_field 'a__id_field', a.id_record 'a__id_record', a.curp 'a__curp', a.rfc 'a__rfc', a.calle 'a__calle', a.numero 'a__numero', a.colonia 'a__colonia', a.cp 'a__cp', a.municipio 'a__municipio', a.id_entidadf 'a__id_entidadf'
FROM jt_slpersons p
LEFT JOIN jt_sladdresss a ON a.id_record = p.id AND a.id_field = 2104
LEFT JOIN jtc_entidadesf e ON e.id = a.id_entidadf
;

UPDATE `jtc_libros` SET `view`='jt_vsladdresss' WHERE `id`='250';
DROP VIEW `jtvsl_address`;
CREATE VIEW jt_vsladdresss AS

SELECT l.id,l.id_field, l.id_record 
,l.curp, l.rfc,l.calle,l.numero,l.colonia,l.cp,l.id_entidadf,l.municipio
FROM jt_sladdresss l;

#BC-03 el martes - cambio de etiqueta FECHA=>FECHA DE LA RESOLUCIÓN APELADA
UPDATE `jt3_campos` SET `columnText`='FECHA DE LA RESOLUCIÓN APELADA' WHERE `id`='2354';

#name alwayschange para lograr la validación
UPDATE `jt3_campos` SET `alwaysChange`='1' WHERE `id`='1966';

#T54.06 orden de los campos.
ALTER TABLE `jt_ljc01s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljc02s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljc03s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljc04s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljc05s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljc06s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljc07s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljc08s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljc09s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljc10s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljc12s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljc13s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljc14s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljc16s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljc17s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljc18s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljc19s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljc20s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljc21s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf01s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf04s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf05s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf06s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf07s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf08s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf09s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf10s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf11s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf12s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf13s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf14s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf15s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf16s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf17s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf18s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf19s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf20s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf21s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljf22s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljp01s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljp02s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljp04s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljp05s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljp06s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljp08s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljp09s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljp10s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljp11s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljp12s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljp13s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljp14s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljp16s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljp17s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljp18s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljp19s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljp20s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljp21s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljccm01s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljccm02s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljccm03s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljccm05s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljccm06s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljccm07s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljccm08s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljccm09s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljccm10s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljccm11s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljccm12s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljccm13s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljccm15s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljccm16s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;

ALTER TABLE `jt_ljccm17s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljoc01s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljoc04s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljoc05s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljoc06s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljoc07s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljoc08s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljoc09s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljoc10s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljoc11s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljoc12s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljoc13s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljoc14s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpdng01s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpdng02s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpdng03s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpdng04s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpdng05s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpdng06s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpdng07s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpdng08s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpdng09s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpdng10s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpdng11s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpdng12s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpdng13s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpdng14s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpdng15s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpdng16s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpdng17s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpdng18s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpes01s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpes02s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpes03s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpes04s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpes05s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpes06s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpes07s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpes08s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpes09s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpes10s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpes11s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpes12s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpes13s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpes14s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpes15s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpes16s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljpes17s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadng01s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadng02s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadng03s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadng04s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadng05s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadng06s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadng07s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadng08s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadng09s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadng10s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadng11s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadg01s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadg02s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadg03s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadg04s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadg05s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadg06s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadg09s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadg10s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadg11s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadg13s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadg14s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadg15s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadg16s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadg17s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadg18s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_ljjadng12s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp01s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp02s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp03s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp04s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp05s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp06s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp07s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp09s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp10s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp18s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp19s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp20s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp21s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp22s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp23s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp24s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp25s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp26s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp27s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp28s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp29s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp11s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp12s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp13s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp14s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp15s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp16s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp30s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp31s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp32s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp33s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp34s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp35s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp36s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp39s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp40s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lcp41s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsc01s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsc02s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsc03s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsc04s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsc05s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsc06s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsc07s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsc08s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsc09s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsc10s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsc11s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsc12s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsc13s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsc14s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lspe01s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lspe02s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lspe03s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lspe04s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lspe05s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lspe06s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lspe07s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lspe08s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsps01s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsps02s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsps03s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsps04s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsps05s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsps06s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsps07s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsps08s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsps09s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsps10s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsps11s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsps12s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsps13s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;
ALTER TABLE `jt_lsps14s` CHANGE COLUMN `id_expediente` `id_expediente` INT(11) NULL DEFAULT NULL AFTER `ordering`;