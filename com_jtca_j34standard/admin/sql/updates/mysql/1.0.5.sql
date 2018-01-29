# asociar cuentas existentes de magistrados a las ponencias
UPDATE 
jtc_organos o 
INNER JOIN jtc_secretarias s ON s.id_organo = o.id
INNER JOIN jt_empleados e ON e.id_organo = o.id AND o.id_tipoorgano = 2 #AND o.id_materia = 14 
INNER JOIN jos_users u ON u.id = e.id
INNER JOIN jtc_general g ON e.id_rol = g.id
SET e.id_secretaria = s.id
WHERE 1
AND e.id_rol = 91
AND u.username LIKE '%m1' AND s.secretaria LIKE '% 1'
AND e.id_secretaria IS NULL
;

UPDATE 
jtc_organos o 
INNER JOIN jtc_secretarias s ON s.id_organo = o.id
INNER JOIN jt_empleados e ON e.id_organo = o.id AND o.id_tipoorgano = 2 #AND o.id_materia = 14 
INNER JOIN jos_users u ON u.id = e.id
INNER JOIN jtc_general g ON e.id_rol = g.id
SET e.id_secretaria = s.id
WHERE 1
AND e.id_rol = 91
AND u.username LIKE '%m2' AND s.secretaria LIKE '% 2'
AND e.id_secretaria IS NULL
;
UPDATE 
jtc_organos o 
INNER JOIN jtc_secretarias s ON s.id_organo = o.id
INNER JOIN jt_empleados e ON e.id_organo = o.id AND o.id_tipoorgano = 2 #AND o.id_materia = 14 
INNER JOIN jos_users u ON u.id = e.id
INNER JOIN jtc_general g ON e.id_rol = g.id
SET e.id_secretaria = s.id
WHERE 1
AND e.id_rol = 91
AND u.username LIKE '%m3' AND s.secretaria LIKE '% 3'
AND e.id_secretaria IS NULL
;


# lsps01 - change T44.5 id_user -> id_secretaria 
UPDATE `jt3_campos` SET `displayField`='txt' WHERE `id`='2352';
UPDATE `jt3_campos` SET `displayField`='txt' WHERE `id`='2366';

# No modifiqué el contenido de lsps01.txt_field2352, lsps02.txt_field2366, porque no se usa id_field

# T44.2 Todos los libros de materia penal, cambiar actor(109) por ofendido(129) y demandado(110) por imputado(127)

UPDATE
jtsl_partescontenciosas ij
LEFT JOIN jt_expedientes e ON ij.id_record = e.id AND ij.id_field = 2156
LEFT JOIN jtc_organos o ON e.id_organo = o.id
SET ij.id_ijuridico = 129, ij.txt_ijuridico = 'Ofendido'
WHERE 1
AND ij.id_ijuridico = 109
AND o.id_tipoorgano*1000+o.id_materia IN (1005, 1006, 1010, 3005, 2005);

UPDATE
jtsl_partescontenciosas ij
LEFT JOIN jt_expedientes e ON ij.id_record = e.id AND ij.id_field = 2156
LEFT JOIN jtc_organos o ON e.id_organo = o.id
SET ij.id_ijuridico = 127, ij.txt_ijuridico = 'Imputado'
WHERE 1
AND ij.id_ijuridico = 110
AND o.id_tipoorgano*1000+o.id_materia IN (1005, 1006, 1010, 3005, 2005);

/*
Se quita actor y demandado de Sala Ejecución de Sanciones Penales
arbitrariamente voy a cambiar actores y demandados por sentenciados
como son libros que no se han puesto en producción solo afecta a los datos
de ejemplo y pruebas
*/

UPDATE
jtsl_partescontenciosas ij
LEFT JOIN jt_expedientes e ON ij.id_record = e.id AND ij.id_field = 2156
LEFT JOIN jtc_organos o ON e.id_organo = o.id
SET ij.id_ijuridico = 117, ij.txt_ijuridico = 'Sentenciado'
WHERE 1
AND ij.id_ijuridico IN (109,110) 
AND o.id_tipoorgano*1000+o.id_materia IN (2014);

# rol de soporte técnico
INSERT INTO `jtc_general` (`id`,`ordering`,`state`,`checked_out`,`checked_out_time`,`created_by`,`modified_by`,`id_catalogo`,`text`) VALUES 
(131,16,1,0,NOW(),1,1,25,'Soporte técnico');

# T44.6 condiciones iniciales en lsps01 y lsps02
UPDATE `jtc_libros` SET `url`='index.php?option=com_tsjdf_libros2&view=v4&layout=lsps01' WHERE `id`='288';
UPDATE `jtc_libros` SET `url`='index.php?option=com_tsjdf_libros2&view=v4&layout=lsps02' WHERE `id`='289';
