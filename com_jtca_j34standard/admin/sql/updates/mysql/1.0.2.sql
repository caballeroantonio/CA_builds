#@BUG
CREATE OR REPLACE VIEW jtvr_h_accounts AS
SELECT 
a.id, a.e__id, a.e__id_rol, a.e__id_organo, a.e__id_secretaria, a.u__block, a.begin, a.end,
u.username 'u__username', u.name 'u__name'
, r.text 'rol', o.organo, s.secretaria
FROM jt_h_accounts a
LEFT JOIN jos_users u ON a.e__id = u.id
LEFT JOIN jtc_general r ON a.e__id_rol = r.id
LEFT JOIN jtc_organos o ON a.e__id_organo = o.id
LEFT JOIN jtc_secretarias s ON a.e__id_secretaria = s.id;

#catalogos para lsps__
INSERT IGNORE INTO `jtc_general` (`id`,`ordering`,`state`,`checked_out`,`checked_out_time`,`created_by`,`modified_by`,`id_catalogo`,`text`) VALUES 
(125,1,1,0,'0000-00-00 00:00:00',1,1,30,'Unitario'),
(126,2,1,0,'0000-00-00 00:00:00',1,1,30,'Colegiado');

INSERT IGNORE INTO `jtc_general` (`id`,`ordering`,`state`,`checked_out`,`checked_out_time`,`created_by`,`modified_by`,`id_catalogo`,`text`) VALUES (127,24,1,0,'0000-00-00 00:00:00',1,1,28,'Imputado'),
(128,25,1,0,'0000-00-00 00:00:00',1,1,28,'Acusado'),
(129,26,1,0,'0000-00-00 00:00:00',1,1,28,'Ofendido'),
(130,27,1,0,'0000-00-00 00:00:00',1,1,28,'Apelante');

#LIBROS lsps__
DELETE FROM `jtc_libros` WHERE AND clave LIKE 'lsps__';
INSERT INTO `jtc_libros` (`id`,`id_tipoorgano`,`id_materia`,`nombre`,`clave`,`tabla`,`view`,`url`,`published`,`ordering`,`distribution`,`json`,`exp_optional`) VALUES 
(288,2,5,'LIBRO DE GOBIERNO (SISTEMA TRADICIONAL)','lsps01','jt_lsps01s','jt_vlsps01s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsps01',1,1,1,NULL,0),
(289,2,5,'LIBRO DE GOBIERNO (NUEVO SISTEMA) (UNITARIO)','lsps02','jt_lsps02s','jt_vlsps02s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsps02',1,2,1,NULL,0),
(290,2,5,'LIBRO DE GOBIERNO (NUEVO SISTEMA) (COLEGIADO)','lsps03','jt_lsps03s','jt_vlsps03s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsps03',1,3,1,NULL,0),
(291,2,5,'LIBRO DE ACTUARIO','lsps04','jt_lsps04s','jt_vlsps04s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsps04',1,4,1,NULL,0),
(292,2,5,'LIBRO DE REGISTRO DE AMPAROS','lsps05','jt_lsps05s','jt_vlsps05s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsps05',1,5,1,NULL,0),
(293,2,5,'LIBRO DE CONTROL DE PEDIMENTOS','lsps06','jt_lsps06s','jt_vlsps06s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsps06',1,6,1,NULL,0),
(294,2,5,'REGISTRO DE BILLETES DE DEPÓSITO','lsps07','jt_lsps07s','jt_vlsps07s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsps07',1,7,1,NULL,0),
(295,2,5,'LIBRO DE TURNO DE ENTREGAS DE TOCAS','lsps08','jt_lsps08s','jt_vlsps08s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsps08',1,8,1,NULL,0),
(296,2,5,'LIBRO DE REMISIÓN AL ARCHIVO','lsps09','jt_lsps09s','jt_vlsps09s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsps09',1,9,1,NULL,0),
(297,2,5,'LIBRO DE CONTROL DE MULTAS','lsps10','jt_lsps10s','jt_vlsps10s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsps10',1,10,1,NULL,0),
(298,2,5,'LIBRO DE CONTROL DE FIANZA','lsps11','jt_lsps11s','jt_vlsps11s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsps11',1,11,1,NULL,0),
(299,2,5,'REGISTRO DE PROMOCIONES','lsps12','jt_lsps12s','jt_vlsps12s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsps12',1,12,1,NULL,0),
(300,2,5,'CONTROL DE FIRMAS DEL PROCESADO','lsps13','jt_lsps13s','jt_vlsps13s','index.php?option=com_tsjdf_libros2&view=v4&layout=lsps13',1,13,1,NULL,0),
(301,2,5,'LIBRO DE OFICIOS','lsps14','jt_lsps14s','jt_vlsps14s','index.php?option=com_tsjdf_libros2&view=v4&layout=libro&clave=lsps14',1,14,1,NULL,1);

#campos
DELETE FROM `jt3_campos` WHERE AND clave LIKE 'lsps__';
INSERT INTO `jt3_campos` (`id`,`published`,`ordering`,`clave`,`dataIndex`,`columnText`,`columnTooltip`,`dataType`,`store`,`displayField`,`alwaysChange`,`comments`) VALUES 
(2350,1,1,'lsps01','field2350','CLASIFICACIÓN',NULL,'ref2','30',NULL,1,NULL),
(2351,1,2,'lsps01','field2351','JUZGADO DE PROCEDENCIA',NULL,'suggest','organos_jp','organo',1,NULL),
(2352,1,3,'lsps01','field2352','MAGISTRADO PONENTE',NULL,'suggest','magistradop','u__name',1,NULL),
(2353,1,4,'lsps01','field2353','SENTENCIA (SENTIDO)',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2354,1,5,'lsps01','field2354','FECHA',NULL,'date',NULL,NULL,1,NULL),
(2355,1,6,'lsps01','field2355','RESOLUTIVOS',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2356,1,7,'lsps01','field2356','FECHA DE RESOLUCIÓN',NULL,'date',NULL,NULL,1,NULL),
(2357,1,8,'lsps01','field2357','FECHA DE REMISIÓN DEL TESTIMONIO Y DEVOLUCIÓN DE LA CAUSA',NULL,'date',NULL,NULL,1,NULL),
(2358,1,9,'lsps01','field2358','FECHA DE ARCHIVO',NULL,'date',NULL,NULL,1,NULL),
(2359,1,1,'lsps02','field2359','UNIDAD DE GESTIÓN',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2360,1,2,'lsps02','field2360','CARPETA ADMINISTRATIVA',NULL,NULL,NULL,NULL,1,NULL),
(2361,1,3,'lsps02','field2361','JUZGADOR',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2362,1,4,'lsps02','field2362','RESOLUCIÓN APELADA',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2363,1,5,'lsps02','field2363','CON AUDIENCIA DE ALEGATOS ACLARATORIOS',NULL,'boolean',NULL,NULL,1,NULL),
(2364,1,6,'lsps02','field2364','DOCUMENTACIÓN RECIBIDA',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2365,1,7,'lsps02','field2365','CON DETENIDO',NULL,'boolean',NULL,NULL,1,NULL),
(2366,1,8,'lsps02','field2366','MAGISTRADO UNITARIO',NULL,'suggest','magistradop','u__name',1,NULL),
(2367,1,9,'lsps02','field2367','FECHA SENT. SEG. INST.',NULL,'date',NULL,NULL,1,NULL),
(2368,1,10,'lsps02','field2368','RESOLUTIVOS',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2369,1,11,'lsps02','field2369','OBSERVACIONES',NULL,'multiline',NULL,NULL,1,NULL),
(2370,1,1,'lsps03','field2370','UNIDAD DE GESTIÓN',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2371,1,2,'lsps03','field2371','CARPETA ADMINISTRATIVA',NULL,NULL,NULL,NULL,1,NULL),
(2372,1,3,'lsps03','field2372','JUZGADOR',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2373,1,4,'lsps03','field2373','RESOLUCIÓN APELADA',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2374,1,5,'lsps03','field2374','CON AUDIENCIA DE ALEGATOS ACLARATORIOS',NULL,'boolean',NULL,NULL,1,NULL),
(2375,1,6,'lsps03','field2375','DOCUMENTACIÓN RECIBIDA',NULL,'multiline',NULL,NULL,1,NULL),
(2376,1,7,'lsps03','field2376','CON DETENIDO',NULL,'boolean',NULL,NULL,1,NULL),
(2377,1,8,'lsps03','field2377','MAGISTRADO RELATOR',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2378,1,9,'lsps03','field2378','FECHA SENT. SEG. INST.',NULL,'date',NULL,NULL,1,NULL),
(2379,1,10,'lsps03','field2379','RESOLUTIVOS',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2380,1,11,'lsps03','field2380','OBSERVACIONES',NULL,'multiline',NULL,NULL,1,NULL),
(2381,1,1,'lsps04','field2381','DESTINATARIO',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2382,1,2,'lsps04','field2382','FECHA DE ENTREGA',NULL,'date',NULL,NULL,1,NULL),
(2383,1,3,'lsps04','field2383','NOMBRE DEL ACTUARIO',NULL,'person',NULL,'1',1,NULL),
(2384,1,4,'lsps04','field2384','FECHA DEL AUTO POR DELIGENCIAR',NULL,'date',NULL,NULL,1,NULL),
(2385,1,5,'lsps04','field2385','FECHA DE DILIGENCIA',NULL,'date',NULL,NULL,1,NULL),
(2386,1,6,'lsps04','field2386','FECHA DE DEVOLUCIÓN',NULL,'date',NULL,NULL,1,NULL),
(2387,1,7,'lsps04','field2387','NOMBRE  DE QUIEN RECIBE LA DEVOLUCIÓN',NULL,'person',NULL,'1',1,NULL),
(2388,1,8,'lsps04','field2388','OBSERVACIONES',NULL,'multiline',NULL,NULL,1,NULL),
(2389,1,1,'lsps05','field2389','NO. DE AMPARO',NULL,NULL,NULL,NULL,1,NULL),
(2390,1,2,'lsps05','field2390','TIPO DE AMPARO',NULL,NULL,NULL,NULL,1,NULL),
(2391,1,3,'lsps05','field2391','QUEJOSO',NULL,'person',NULL,NULL,1,NULL),
(2392,1,4,'lsps05','field2392','ORGANO DE PROCEDENCIA',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2393,1,5,'lsps05','field2393','FECHA DE INGRESO',NULL,'date',NULL,NULL,1,NULL),
(2394,1,6,'lsps05','field2394','INFORME SOLICITADO',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2395,1,7,'lsps05','field2395','FECHA DE ENVIO DEL INFORME',NULL,'date',NULL,NULL,1,NULL),
(2396,1,8,'lsps05','field2396','SENTIDO DE RESOLUCIÓN DE AMPARO',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2397,1,9,'lsps05','field2397','RESOLUCIÓN DE AMPARO',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2398,1,10,'lsps05','field2398','OBSERVACIONES',NULL,'multiline',NULL,NULL,1,NULL),
(2399,1,1,'lsps06','field2399','CAUSA',NULL,NULL,NULL,NULL,1,NULL),
(2400,1,2,'lsps06','field2400','LUGAR DE RECLUSIÓN',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2401,1,3,'lsps06','field2401','FECHA Y HORA DE LA DILIGENCIA',NULL,'datetime',NULL,NULL,1,NULL),
(2402,1,4,'lsps06','field2402','NO. DE OFICIO',NULL,NULL,NULL,NULL,1,NULL),
(2403,1,5,'lsps06','field2403','MOTIVO DE LA SOLICITUD',NULL,NULL,NULL,NULL,1,NULL),
(2404,1,1,'lsps07','billete','NO. DE BILLETE',NULL,NULL,NULL,NULL,1,NULL),
(2405,1,2,'lsps07','field2405','FECHA EN QUE SE EXPIDE',NULL,'date',NULL,NULL,1,NULL),
(2406,1,3,'lsps07','field2406','FECHA EN QUE SE RECIBE',NULL,'date',NULL,NULL,1,NULL),
(2407,1,4,'lsps07','field2407','MONTO',NULL,'currency',NULL,NULL,1,NULL),
(2408,1,5,'lsps07','field2408','NOMBRE DE QUIEN DEPOSITA',NULL,'person',NULL,NULL,1,NULL),
(2409,1,6,'lsps07','field2409','MOTIVO',NULL,NULL,NULL,NULL,1,NULL),
(2410,1,7,'lsps08','field2410','PROCEDIMIENTO',NULL,NULL,NULL,NULL,1,NULL),
(2411,1,1,'lsps08','field2411','FECHA DE AUDIENCIA DE VISTA',NULL,'date',NULL,NULL,1,NULL),
(2412,1,2,'lsps08','field2412','NO. DE FOJAS',NULL,NULL,NULL,NULL,1,NULL),
(2413,1,3,'lsps08','field2413','FECHA DE TURNO AL PROYECTISTA',NULL,'date',NULL,NULL,1,NULL),
(2414,1,4,'lsps08','field2414','NOMBRE DEL PROYECTISTA',NULL,'person',NULL,'1',1,NULL),
(2415,1,5,'lsps08','field2415','FECHA DE VENCIMIENTO DE SENTENCIA',NULL,'date',NULL,NULL,1,NULL),
(2416,1,6,'lsps08','field2416','FECHA DE LA SENTENCIA',NULL,'date',NULL,NULL,1,NULL),
(2417,1,7,'lsps08','field2417','SENTIDO DE LA RESOLUCIÓN',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2418,1,1,'lsps09','field2418','FOJAS',NULL,NULL,NULL,NULL,1,NULL),
(2419,1,2,'lsps09','field2419','FECHA DEL AUTO DE REMISIÓN',NULL,'date',NULL,NULL,1,NULL),
(2420,1,3,'lsps09','field2420','ESTADO PROCESAL',NULL,NULL,NULL,NULL,1,NULL),
(2421,1,4,'lsps09','field2421','FECHA DE RECEPCIÓN AL ARCHIVO',NULL,'date',NULL,NULL,1,NULL),
(2422,1,5,'lsps09','field2422','PERSONA QUE RECIBIÓ DEL ARCHIVO',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2423,1,6,'lsps09','field2423','FECHA DE ARCHIVO',NULL,'date',NULL,NULL,1,NULL),
(2424,1,7,'lsps09','field2424','NO. DE FOLIO',NULL,NULL,NULL,NULL,1,NULL),
(2425,1,8,'lsps09','field2425','FECHA DE DEVOLUCIÓN',NULL,'date',NULL,NULL,1,NULL),
(2426,1,1,'lsps10','field2426','MONTO DE LA MULTA',NULL,'currency',NULL,NULL,1,NULL),
(2427,1,2,'lsps10','field2427','CONCEPTO DE LA MULTA',NULL,NULL,NULL,NULL,1,NULL),
(2428,1,3,'lsps10','field2428','FECHA DE RESOLUCIÓN QUE LA DECRETA',NULL,'date',NULL,NULL,1,NULL),
(2429,1,4,'lsps10','field2429','NOMBRE DE LA PERSONA A LA QUE SE LE IMPONE',NULL,'person',NULL,'1',1,NULL),
(2430,1,5,'lsps10','field2430','NO.  DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIÓN',NULL,NULL,NULL,NULL,1,NULL),
(2431,1,7,'lsps10','field2431','FECHA EN LA QUE ES ENTREGADO',NULL,'date',NULL,NULL,1,NULL),
(2432,1,8,'lsps10','field2432','OBSERVACIONES',NULL,'multiline',NULL,NULL,1,NULL),
(2446,1,6,'lsps10','field2446','FECHA DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIÓN',NULL,'date',NULL,NULL,1,NULL),
(2433,1,1,'lsps11','field2433','BENEFICIARIO',NULL,'person',NULL,NULL,1,NULL),
(2434,1,2,'lsps11','field2434','CONCEPTO DE FIANZA',NULL,NULL,NULL,NULL,1,NULL),
(2435,1,3,'lsps11','field2435','NO. DE BOLETA',NULL,NULL,NULL,NULL,1,NULL),
(2436,1,4,'lsps11','field2436','FECHA EN QUE SE RECIBE POLIZA DE FIANZA',NULL,'date',NULL,NULL,1,NULL),
(2437,1,5,'lsps11','field2437','MONTO',NULL,'currency',NULL,NULL,1,NULL),
(2438,1,6,'lsps11','field2438','NÚMERO DE PÓLIZA DE FIANZA',NULL,NULL,NULL,NULL,1,NULL),
(2439,1,7,'lsps11','field2439','FECHA DE DEVOLUCIÓN ',NULL,'date',NULL,NULL,1,NULL),
(2440,1,8,'lsps11','field2440','A QUIEN SE DEVUELVE',NULL,'person',NULL,NULL,1,NULL),
(2441,1,1,'lsps12','field2441','FECHA Y HORA DE RECEPCIÓN',NULL,'datetime',NULL,NULL,1,NULL),
(2442,1,2,'lsps12','field2442','PROMOVENTE',NULL,'person',NULL,NULL,1,NULL),
(2443,1,3,'lsps12','field2443','ASUNTO',NULL,NULL,NULL,NULL,1,NULL),
(2444,1,4,'lsps13','field2444','NOMBRE DEL INCULPADO',NULL,'person',NULL,'1',1,NULL),
(2445,1,5,'lsps13','field2445','FIRMA DEL PROCESADO',NULL,'Fexterna',NULL,NULL,1,NULL),
(2447,1,1,'lsps14','field2447','FECHA DEL OFICIO',NULL,'date',NULL,NULL,1,NULL),
(2448,1,2,'lsps14','field2448','DESTINATARIO',NULL,'VARCHAR255',NULL,NULL,1,NULL),
(2449,1,3,'lsps14','field2449','ASUNTO',NULL,NULL,NULL,NULL,1,NULL),
(2450,1,4,'lsps14','field2450','FECHA DE ENTREGA AL DESTINATARIO',NULL,'date',NULL,NULL,1,NULL),
(2451,1,5,'lsps14','field2451','FECHA DE DEVOLUCIÓN AL JUZGADO',NULL,'date',NULL,NULL,1,NULL);




-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsps01
DROP TABLE IF EXISTS `jt_lsps01s`;
CREATE TABLE IF NOT EXISTS `jt_lsps01s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_288_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_288_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_288_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_288_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_288_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_288_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_288_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_288_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_288_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field2350` INT NULL ,
	INDEX `c3_2350_idx` (`field2350` ASC),
	CONSTRAINT `c3_2350`
		FOREIGN KEY (`field2350`)
		REFERENCES `jtc_general` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE 
		, 
	`txt_field2351` VARCHAR(255) NULL COMMENT 'JUZGADO DE PROCEDENCIA',
	`id_field2351` INT(11) NULL COMMENT 'FK organos_jp'
        , 
	`txt_field2352` VARCHAR(255) NULL COMMENT 'MAGISTRADO PONENTE',
	`id_field2352` INT(11) NULL COMMENT 'FK magistradop'
        ,	`field2353` VARCHAR(255) NULL COMMENT 'SENTENCIA (SENTIDO)'
        , 
	`field2354` DATETIME NULL COMMENT 'FECHA'
        ,	`field2355` VARCHAR(255) NULL COMMENT 'RESOLUTIVOS'
        , 
	`field2356` DATETIME NULL COMMENT 'FECHA DE RESOLUCIÓN'
        , 
	`field2357` DATETIME NULL COMMENT 'FECHA DE REMISIÓN DEL TESTIMONIO Y DEVOLUCIÓN DE LA CAUSA'
        , 
	`field2358` DATETIME NULL COMMENT 'FECHA DE ARCHIVO'
         
)COMMENT = 'generado el 2017-12-29 19:09:05'; 


DROP TABLE IF EXISTS `jt_vlsps01s`;
DROP VIEW IF EXISTS `jt_vlsps01s`;
CREATE OR REPLACE VIEW jt_vlsps01s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2350,l.id_field2351, l.txt_field2351,l.id_field2352, l.txt_field2352,l.field2353,l.field2354,l.field2355,l.field2356,l.field2357,l.field2358
FROM jt_lsps01s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsps02
DROP TABLE IF EXISTS `jt_lsps02s`;
CREATE TABLE IF NOT EXISTS `jt_lsps02s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_289_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_289_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_289_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_289_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_289_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_289_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_289_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_289_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_289_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
	`field2359` VARCHAR(255) NULL COMMENT 'UNIDAD DE GESTIÓN'
        , 
	`field2360` VARCHAR(45) NULL COMMENT 'CARPETA ADMINISTRATIVA'
        ,	`field2361` VARCHAR(255) NULL COMMENT 'JUZGADOR'
        ,	`field2362` VARCHAR(255) NULL COMMENT 'RESOLUCIÓN APELADA'
        , 
	`field2363` TINYINT(1) NULL COMMENT 'CON AUDIENCIA DE ALEGATOS ACLARATORIOS'
        ,	`field2364` VARCHAR(255) NULL COMMENT 'DOCUMENTACIÓN RECIBIDA'
        , 
	`field2365` TINYINT(1) NULL COMMENT 'CON DETENIDO'
        , 
	`txt_field2366` VARCHAR(255) NULL COMMENT 'MAGISTRADO UNITARIO',
	`id_field2366` INT(11) NULL COMMENT 'FK magistradop'
        , 
	`field2367` DATETIME NULL COMMENT 'FECHA SENT. SEG. INST.'
        ,	`field2368` VARCHAR(255) NULL COMMENT 'RESOLUTIVOS'
        , 
	`field2369` TEXT NULL COMMENT 'OBSERVACIONES'
         
)COMMENT = 'generado el 2017-12-29 19:09:06'; 


DROP TABLE IF EXISTS `jt_vlsps02s`;
DROP VIEW IF EXISTS `jt_vlsps02s`;
CREATE OR REPLACE VIEW jt_vlsps02s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2359,l.field2360,l.field2361,l.field2362,l.field2363,l.field2364,l.field2365,l.id_field2366, l.txt_field2366,l.field2367,l.field2368,l.field2369
FROM jt_lsps02s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsps03
DROP TABLE IF EXISTS `jt_lsps03s`;
CREATE TABLE IF NOT EXISTS `jt_lsps03s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_290_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_290_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_290_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_290_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_290_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_290_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_290_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_290_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_290_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
	`field2370` VARCHAR(255) NULL COMMENT 'UNIDAD DE GESTIÓN'
        , 
	`field2371` VARCHAR(45) NULL COMMENT 'CARPETA ADMINISTRATIVA'
        ,	`field2372` VARCHAR(255) NULL COMMENT 'JUZGADOR'
        ,	`field2373` VARCHAR(255) NULL COMMENT 'RESOLUCIÓN APELADA'
        , 
	`field2374` TINYINT(1) NULL COMMENT 'CON AUDIENCIA DE ALEGATOS ACLARATORIOS'
        , 
	`field2375` TEXT NULL COMMENT 'DOCUMENTACIÓN RECIBIDA'
        , 
	`field2376` TINYINT(1) NULL COMMENT 'CON DETENIDO'
        ,	`field2377` VARCHAR(255) NULL COMMENT 'MAGISTRADO RELATOR'
        , 
	`field2378` DATETIME NULL COMMENT 'FECHA SENT. SEG. INST.'
        ,	`field2379` VARCHAR(255) NULL COMMENT 'RESOLUTIVOS'
        , 
	`field2380` TEXT NULL COMMENT 'OBSERVACIONES'
         
)COMMENT = 'generado el 2017-12-29 19:09:06'; 


DROP TABLE IF EXISTS `jt_vlsps03s`;
DROP VIEW IF EXISTS `jt_vlsps03s`;
CREATE OR REPLACE VIEW jt_vlsps03s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2370,l.field2371,l.field2372,l.field2373,l.field2374,l.field2375,l.field2376,l.field2377,l.field2378,l.field2379,l.field2380
FROM jt_lsps03s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsps04
DROP TABLE IF EXISTS `jt_lsps04s`;
CREATE TABLE IF NOT EXISTS `jt_lsps04s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_291_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_291_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_291_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_291_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_291_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_291_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_291_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_291_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_291_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
	`field2381` VARCHAR(255) NULL COMMENT 'DESTINATARIO'
        , 
	`field2382` DATETIME NULL COMMENT 'FECHA DE ENTREGA'
        , 
	`field2383_paterno` VARCHAR(255) NULL, `field2383_materno` VARCHAR(45) NULL, `field2383_nombre` VARCHAR(45) NULL, `field2383_isMoral` TINYINT(1) NOT NULL
        , 
	`field2384` DATETIME NULL COMMENT 'FECHA DEL AUTO POR DELIGENCIAR'
        , 
	`field2385` DATETIME NULL COMMENT 'FECHA DE DILIGENCIA'
        , 
	`field2386` DATETIME NULL COMMENT 'FECHA DE DEVOLUCIÓN'
        , 
	`field2387_paterno` VARCHAR(255) NULL, `field2387_materno` VARCHAR(45) NULL, `field2387_nombre` VARCHAR(45) NULL, `field2387_isMoral` TINYINT(1) NOT NULL
        , 
	`field2388` TEXT NULL COMMENT 'OBSERVACIONES'
         
)COMMENT = 'generado el 2017-12-29 19:09:06'; 


DROP TABLE IF EXISTS `jt_vlsps04s`;
DROP VIEW IF EXISTS `jt_vlsps04s`;
CREATE OR REPLACE VIEW jt_vlsps04s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2381,l.field2382,
 CONCAT_WS(' ',l.field2383_paterno, l.field2383_materno, l.field2383_nombre) AS field2383,
 l.field2383_paterno, l.field2383_materno, l.field2383_nombre, l.field2383_isMoral 
,l.field2384,l.field2385,l.field2386,
 CONCAT_WS(' ',l.field2387_paterno, l.field2387_materno, l.field2387_nombre) AS field2387,
 l.field2387_paterno, l.field2387_materno, l.field2387_nombre, l.field2387_isMoral 
,l.field2388
FROM jt_lsps04s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsps05
DROP TABLE IF EXISTS `jt_lsps05s`;
CREATE TABLE IF NOT EXISTS `jt_lsps05s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_292_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_292_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_292_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_292_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_292_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_292_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_292_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_292_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_292_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field2389` VARCHAR(45) NULL COMMENT 'NO. DE AMPARO'
        , 
	`field2390` VARCHAR(45) NULL COMMENT 'TIPO DE AMPARO'
        , 
	`field2391_paterno` VARCHAR(255) NULL, `field2391_materno` VARCHAR(45) NULL, `field2391_nombre` VARCHAR(45) NULL, `field2391_isMoral` TINYINT(1) NOT NULL
        ,	`field2392` VARCHAR(255) NULL COMMENT 'ORGANO DE PROCEDENCIA'
        , 
	`field2393` DATETIME NULL COMMENT 'FECHA DE INGRESO'
        ,	`field2394` VARCHAR(255) NULL COMMENT 'INFORME SOLICITADO'
        , 
	`field2395` DATETIME NULL COMMENT 'FECHA DE ENVIO DEL INFORME'
        ,	`field2396` VARCHAR(255) NULL COMMENT 'SENTIDO DE RESOLUCIÓN DE AMPARO'
        ,	`field2397` VARCHAR(255) NULL COMMENT 'RESOLUCIÓN DE AMPARO'
        , 
	`field2398` TEXT NULL COMMENT 'OBSERVACIONES'
         
)COMMENT = 'generado el 2017-12-29 19:09:06'; 


DROP TABLE IF EXISTS `jt_vlsps05s`;
DROP VIEW IF EXISTS `jt_vlsps05s`;
CREATE OR REPLACE VIEW jt_vlsps05s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2389,l.field2390,
 CONCAT_WS(' ',l.field2391_paterno, l.field2391_materno, l.field2391_nombre) AS field2391,
 l.field2391_paterno, l.field2391_materno, l.field2391_nombre, l.field2391_isMoral 
,l.field2392,l.field2393,l.field2394,l.field2395,l.field2396,l.field2397,l.field2398
FROM jt_lsps05s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsps06
DROP TABLE IF EXISTS `jt_lsps06s`;
CREATE TABLE IF NOT EXISTS `jt_lsps06s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_293_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_293_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_293_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_293_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_293_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_293_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_293_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_293_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_293_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field2399` VARCHAR(45) NULL COMMENT 'CAUSA'
        ,	`field2400` VARCHAR(255) NULL COMMENT 'LUGAR DE RECLUSIÓN'
        , 
	`field2401` DATETIME NULL COMMENT 'FECHA Y HORA DE LA DILIGENCIA'
        , 
	`field2402` VARCHAR(45) NULL COMMENT 'NO. DE OFICIO'
        , 
	`field2403` VARCHAR(45) NULL COMMENT 'MOTIVO DE LA SOLICITUD'
         
)COMMENT = 'generado el 2017-12-29 19:09:06'; 


DROP TABLE IF EXISTS `jt_vlsps06s`;
DROP VIEW IF EXISTS `jt_vlsps06s`;
CREATE OR REPLACE VIEW jt_vlsps06s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2399,l.field2400,l.field2401,l.field2402,l.field2403
FROM jt_lsps06s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsps07
DROP TABLE IF EXISTS `jt_lsps07s`;
CREATE TABLE IF NOT EXISTS `jt_lsps07s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_294_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_294_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_294_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_294_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_294_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_294_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_294_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_294_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_294_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`billete` VARCHAR(45) NULL COMMENT 'NO. DE BILLETE'
        , INDEX `idx_billete` (`billete` ASC), 
	`field2405` DATETIME NULL COMMENT 'FECHA EN QUE SE EXPIDE'
        , 
	`field2406` DATETIME NULL COMMENT 'FECHA EN QUE SE RECIBE'
        , 
	`field2407` DECIMAL(11,2) NULL COMMENT 'MONTO'
        , 
	`field2408_paterno` VARCHAR(255) NULL, `field2408_materno` VARCHAR(45) NULL, `field2408_nombre` VARCHAR(45) NULL, `field2408_isMoral` TINYINT(1) NOT NULL
        , 
	`field2409` VARCHAR(45) NULL COMMENT 'MOTIVO'
         
)COMMENT = 'generado el 2017-12-29 19:09:07'; 


DROP TABLE IF EXISTS `jt_vlsps07s`;
DROP VIEW IF EXISTS `jt_vlsps07s`;
CREATE OR REPLACE VIEW jt_vlsps07s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.billete,l.field2405,l.field2406,l.field2407,
 CONCAT_WS(' ',l.field2408_paterno, l.field2408_materno, l.field2408_nombre) AS field2408,
 l.field2408_paterno, l.field2408_materno, l.field2408_nombre, l.field2408_isMoral 
,l.field2409
FROM jt_lsps07s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsps08
DROP TABLE IF EXISTS `jt_lsps08s`;
CREATE TABLE IF NOT EXISTS `jt_lsps08s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_295_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_295_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_295_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_295_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_295_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_295_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_295_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_295_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_295_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field2411` DATETIME NULL COMMENT 'FECHA DE AUDIENCIA DE VISTA'
        , 
	`field2412` VARCHAR(45) NULL COMMENT 'NO. DE FOJAS'
        , 
	`field2413` DATETIME NULL COMMENT 'FECHA DE TURNO AL PROYECTISTA'
        , 
	`field2414_paterno` VARCHAR(255) NULL, `field2414_materno` VARCHAR(45) NULL, `field2414_nombre` VARCHAR(45) NULL, `field2414_isMoral` TINYINT(1) NOT NULL
        , 
	`field2415` DATETIME NULL COMMENT 'FECHA DE VENCIMIENTO DE SENTENCIA'
        , 
	`field2416` DATETIME NULL COMMENT 'FECHA DE LA SENTENCIA'
        , 
	`field2410` VARCHAR(45) NULL COMMENT 'PROCEDIMIENTO'
        ,	`field2417` VARCHAR(255) NULL COMMENT 'SENTIDO DE LA RESOLUCIÓN'
         
)COMMENT = 'generado el 2017-12-29 19:09:07'; 


DROP TABLE IF EXISTS `jt_vlsps08s`;
DROP VIEW IF EXISTS `jt_vlsps08s`;
CREATE OR REPLACE VIEW jt_vlsps08s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2411,l.field2412,l.field2413,
 CONCAT_WS(' ',l.field2414_paterno, l.field2414_materno, l.field2414_nombre) AS field2414,
 l.field2414_paterno, l.field2414_materno, l.field2414_nombre, l.field2414_isMoral 
,l.field2415,l.field2416,l.field2410,l.field2417
FROM jt_lsps08s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsps09
DROP TABLE IF EXISTS `jt_lsps09s`;
CREATE TABLE IF NOT EXISTS `jt_lsps09s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_296_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_296_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_296_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_296_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_296_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_296_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_296_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_296_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_296_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field2418` VARCHAR(45) NULL COMMENT 'FOJAS'
        , 
	`field2419` DATETIME NULL COMMENT 'FECHA DEL AUTO DE REMISIÓN'
        , 
	`field2420` VARCHAR(45) NULL COMMENT 'ESTADO PROCESAL'
        , 
	`field2421` DATETIME NULL COMMENT 'FECHA DE RECEPCIÓN AL ARCHIVO'
        ,	`field2422` VARCHAR(255) NULL COMMENT 'PERSONA QUE RECIBIÓ DEL ARCHIVO'
        , 
	`field2423` DATETIME NULL COMMENT 'FECHA DE ARCHIVO'
        , 
	`field2424` VARCHAR(45) NULL COMMENT 'NO. DE FOLIO'
        , 
	`field2425` DATETIME NULL COMMENT 'FECHA DE DEVOLUCIÓN'
         
)COMMENT = 'generado el 2017-12-29 19:09:07'; 


DROP TABLE IF EXISTS `jt_vlsps09s`;
DROP VIEW IF EXISTS `jt_vlsps09s`;
CREATE OR REPLACE VIEW jt_vlsps09s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2418,l.field2419,l.field2420,l.field2421,l.field2422,l.field2423,l.field2424,l.field2425
FROM jt_lsps09s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsps10
DROP TABLE IF EXISTS `jt_lsps10s`;
CREATE TABLE IF NOT EXISTS `jt_lsps10s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_297_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_297_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_297_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_297_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_297_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_297_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_297_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_297_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_297_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field2426` DECIMAL(11,2) NULL COMMENT 'MONTO DE LA MULTA'
        , 
	`field2427` VARCHAR(45) NULL COMMENT 'CONCEPTO DE LA MULTA'
        , 
	`field2428` DATETIME NULL COMMENT 'FECHA DE RESOLUCIÓN QUE LA DECRETA'
        , 
	`field2429_paterno` VARCHAR(255) NULL, `field2429_materno` VARCHAR(45) NULL, `field2429_nombre` VARCHAR(45) NULL, `field2429_isMoral` TINYINT(1) NOT NULL
        , 
	`field2430` VARCHAR(45) NULL COMMENT 'NO.  DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIÓN'
        , 
	`field2446` DATETIME NULL COMMENT 'FECHA DEL DOCUMENTO EN EL QUE SE COMUNICA LA SANCIÓN'
        , 
	`field2431` DATETIME NULL COMMENT 'FECHA EN LA QUE ES ENTREGADO'
        , 
	`field2432` TEXT NULL COMMENT 'OBSERVACIONES'
         
)COMMENT = 'generado el 2017-12-29 19:09:07'; 


DROP TABLE IF EXISTS `jt_vlsps10s`;
DROP VIEW IF EXISTS `jt_vlsps10s`;
CREATE OR REPLACE VIEW jt_vlsps10s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2426,l.field2427,l.field2428,
 CONCAT_WS(' ',l.field2429_paterno, l.field2429_materno, l.field2429_nombre) AS field2429,
 l.field2429_paterno, l.field2429_materno, l.field2429_nombre, l.field2429_isMoral 
,l.field2430,l.field2446,l.field2431,l.field2432
FROM jt_lsps10s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsps11
DROP TABLE IF EXISTS `jt_lsps11s`;
CREATE TABLE IF NOT EXISTS `jt_lsps11s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_298_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_298_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_298_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_298_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_298_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_298_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_298_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_298_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_298_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field2433_paterno` VARCHAR(255) NULL, `field2433_materno` VARCHAR(45) NULL, `field2433_nombre` VARCHAR(45) NULL, `field2433_isMoral` TINYINT(1) NOT NULL
        , 
	`field2434` VARCHAR(45) NULL COMMENT 'CONCEPTO DE FIANZA'
        , 
	`field2435` VARCHAR(45) NULL COMMENT 'NO. DE BOLETA'
        , 
	`field2436` DATETIME NULL COMMENT 'FECHA EN QUE SE RECIBE POLIZA DE FIANZA'
        , 
	`field2437` DECIMAL(11,2) NULL COMMENT 'MONTO'
        , 
	`field2438` VARCHAR(45) NULL COMMENT 'NÚMERO DE PÓLIZA DE FIANZA'
        , 
	`field2439` DATETIME NULL COMMENT 'FECHA DE DEVOLUCIÓN '
        , 
	`field2440_paterno` VARCHAR(255) NULL, `field2440_materno` VARCHAR(45) NULL, `field2440_nombre` VARCHAR(45) NULL, `field2440_isMoral` TINYINT(1) NOT NULL
         
)COMMENT = 'generado el 2017-12-29 19:09:07'; 


DROP TABLE IF EXISTS `jt_vlsps11s`;
DROP VIEW IF EXISTS `jt_vlsps11s`;
CREATE OR REPLACE VIEW jt_vlsps11s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,
 CONCAT_WS(' ',l.field2433_paterno, l.field2433_materno, l.field2433_nombre) AS field2433,
 l.field2433_paterno, l.field2433_materno, l.field2433_nombre, l.field2433_isMoral 
,l.field2434,l.field2435,l.field2436,l.field2437,l.field2438,l.field2439,
 CONCAT_WS(' ',l.field2440_paterno, l.field2440_materno, l.field2440_nombre) AS field2440,
 l.field2440_paterno, l.field2440_materno, l.field2440_nombre, l.field2440_isMoral 

FROM jt_lsps11s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsps12
DROP TABLE IF EXISTS `jt_lsps12s`;
CREATE TABLE IF NOT EXISTS `jt_lsps12s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_299_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_299_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_299_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_299_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_299_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_299_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_299_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_299_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_299_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field2441` DATETIME NULL COMMENT 'FECHA Y HORA DE RECEPCIÓN'
        , 
	`field2442_paterno` VARCHAR(255) NULL, `field2442_materno` VARCHAR(45) NULL, `field2442_nombre` VARCHAR(45) NULL, `field2442_isMoral` TINYINT(1) NOT NULL
        , 
	`field2443` VARCHAR(45) NULL COMMENT 'ASUNTO'
         
)COMMENT = 'generado el 2017-12-29 19:09:08'; 


DROP TABLE IF EXISTS `jt_vlsps12s`;
DROP VIEW IF EXISTS `jt_vlsps12s`;
CREATE OR REPLACE VIEW jt_vlsps12s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2441,
 CONCAT_WS(' ',l.field2442_paterno, l.field2442_materno, l.field2442_nombre) AS field2442,
 l.field2442_paterno, l.field2442_materno, l.field2442_nombre, l.field2442_isMoral 
,l.field2443
FROM jt_lsps12s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsps13
DROP TABLE IF EXISTS `jt_lsps13s`;
CREATE TABLE IF NOT EXISTS `jt_lsps13s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_300_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_300_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_300_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_300_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_300_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_300_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_300_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_300_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_300_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field2444_paterno` VARCHAR(255) NULL, `field2444_materno` VARCHAR(45) NULL, `field2444_nombre` VARCHAR(45) NULL, `field2444_isMoral` TINYINT(1) NOT NULL
        , 
	`field2445` INT NULL COMMENT 'id_firma FIRMA DEL PROCESADO',
	INDEX `c3_2445_idx` (`field2445` ASC),
	CONSTRAINT `c3_2445`
		FOREIGN KEY (`field2445`)
		REFERENCES `jt_uploadedfiles` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE
         
)COMMENT = 'generado el 2017-12-29 19:09:08'; 


DROP TABLE IF EXISTS `jt_vlsps13s`;
DROP VIEW IF EXISTS `jt_vlsps13s`;
CREATE OR REPLACE VIEW jt_vlsps13s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,
 CONCAT_WS(' ',l.field2444_paterno, l.field2444_materno, l.field2444_nombre) AS field2444,
 l.field2444_paterno, l.field2444_materno, l.field2444_nombre, l.field2444_isMoral 
,
 field2445, calculatePath(f_2445.id,f_2445.filename) AS field2445_file , DATE_ADD(f_2445.created, INTERVAL -6 HOUR) AS  'f_2445_created'

FROM jt_lsps13s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 

LEFT JOIN jt_uploadedfiles f_2445 ON l.field2445 = f_2445.id 
;
-- http://localhost/gpcb/index.php?option=com_tsjdf_libros2&view=guest&layout=tortidb&showCreateTableX=false&clave=lsps14
DROP TABLE IF EXISTS `jt_lsps14s`;
CREATE TABLE IF NOT EXISTS `jt_lsps14s` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	 PRIMARY KEY (`id`),
	`state` TINYINT(1) NOT NULL DEFAULT 1,
	`created` DATETIME NULL,
	`created_by` INT NULL,
	INDEX `l3_301_createdby_idx` (`created_by` ASC),
	CONSTRAINT `l3_301_createdby`
		FOREIGN KEY (`created_by`)
		REFERENCES `jos_users` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
	`modified` DATETIME NULL,
	`modified_by` INT NULL,
	`id_expediente` INT NULL,
	INDEX `l3_301_expediente_idx` (`id_expediente` ASC),
	CONSTRAINT `l3_301_expediente`
		FOREIGN KEY (`id_expediente`)
		REFERENCES `jt_expedientes` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,

	`id_organo` INT NULL,
	INDEX `l3_301_organo_idx` (`id_organo` ASC),
	CONSTRAINT `l3_301_organo`
		FOREIGN KEY (`id_organo`)
		REFERENCES `jtc_organos` (`id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
        
	`id_secretaria` INT NULL,
	INDEX `l3_301_secretaria_idx` (`id_organo` ASC, `id_secretaria` ASC),
	CONSTRAINT `l3_301_secretaria`
		FOREIGN KEY (`id_organo` , `id_secretaria`)
		REFERENCES `jtc_secretarias` (`id_organo` , `id`)
		ON DELETE RESTRICT
		ON UPDATE CASCADE,
 	`anoj` YEAR NULL,
 	INDEX `l3_301_anoj_idx` (`anoj` ASC),
	`ordering` INT NOT NULL,
 
	`field2447` DATETIME NULL COMMENT 'FECHA DEL OFICIO'
        ,	`field2448` VARCHAR(255) NULL COMMENT 'DESTINATARIO'
        , 
	`field2449` VARCHAR(45) NULL COMMENT 'ASUNTO'
        , 
	`field2450` DATETIME NULL COMMENT 'FECHA DE ENTREGA AL DESTINATARIO'
        , 
	`field2451` DATETIME NULL COMMENT 'FECHA DE DEVOLUCIÓN AL JUZGADO'
         
)COMMENT = 'generado el 2017-12-29 19:09:08'; 


DROP TABLE IF EXISTS `jt_vlsps14s`;
DROP VIEW IF EXISTS `jt_vlsps14s`;
CREATE OR REPLACE VIEW jt_vlsps14s AS

SELECT l.id,l.id_organo, l.anoj, l.ordering, l.id_expediente 
,e.name 'e__name', e.txt_tipojuicio 'e__txt_tipojuicio', e.numero 'e__numero', e.ano 'e__ano' 
,l.field2447,l.field2448,l.field2449,l.field2450,l.field2451
FROM jt_lsps14s l
LEFT JOIN jt_expedientes e ON e.id = l.id_expediente 
;