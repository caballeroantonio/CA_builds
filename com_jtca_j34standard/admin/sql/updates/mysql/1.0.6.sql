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
CREATE OR REPLACE VIEW jt_vslpartescontenciosas AS

SELECT l.id,l.id_field, l.id_record 
,l.id_ijuridico,l.txt_ijuridico,l.isMoral,l.paterno,l.materno,l.nombre,l.curp,l.rfc,l.calle,l.numero,l.colonia,l.cp,l.id_entidadf,l.municipio
FROM jt_slpartescontenciosas l;