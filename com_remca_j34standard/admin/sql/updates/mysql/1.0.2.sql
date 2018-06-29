/*
SET FOREIGN_KEY_CHECKS=0;
SET SESSION sql_mode='NO_AUTO_VALUE_ON_ZERO';
SET FOREIGN_KEY_CHECKS=1;
SET SESSION sql_mode='';
*/


##==

#uncategorised.published IN (0,1) entonces se muestra en los filtros la categoría.
UPDATE jos_rem_houses h
SET catid =  210 #uncategorised Archived
WHERE 1
AND h.catid IS NOT NULL
#y no hay categoría??
;




/** agregar
revisar que jos_rem_configs no genere tablas sino XML

*/