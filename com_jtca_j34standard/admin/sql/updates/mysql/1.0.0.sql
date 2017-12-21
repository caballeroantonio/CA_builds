-- @version 		$Id:$
-- @name			TSJ CDMX Libros TxCA (Release 1.0.0)
-- @author			caballeroantonio (caballeroantonio.com)
-- @package			com_jtca
-- @subpackage		com_jtca.admin
-- @copyright		Copyright (c) 2017 - 2020. All Rights Reserved
-- @license			GNU General Public License version 3 or later - See http://www.gnu.org/copyleft/gpl.html 
--
-- The following Component Architect header section must remain in any distribution of this file
--
-- @CAversion		Id:1.0.0.sql 19 2012-01-12 16:33:49Z BrianWade $
-- @CAauthor		Component Architect (www.componentarchitect.com)
-- @CApackage		architectcomp
-- @CAsubpackage	architectcomp.admin
-- @CAtemplate		joomla_3_4_standard (Release 1.0.1)
-- @CAcopyright		Copyright (c)2013 - 2016  Simply Open Source Ltd. (trading as Component Architect). All Rights Reserved
-- @CAlicense		GNU General Public License version 3 or later - See http://www.gnu.org/copyleft/gpl.html
--
-- This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by
-- the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
--
-- This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY, without even the implied warranty of
-- MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
-- --------------------------------------------------------

#[%%START_CUSTOM_CODE%%]
INSERT INTO jos_content_types (`type_title`, `type_alias`, `table`, `rules`, `field_mappings`, `router`, `content_history_options`)
SELECT
'' AS 'type_title', CONCAT('com_jtca.', l.clave) AS 'type_alias', '' AS 'table', '' AS 'rules', '' AS 'field_mappings', '' AS 'router', '' AS 'content_history_options'
FROM jtc_libros l
LEFT JOIN jos_content_types c ON c.type_alias = CONCAT('com_jtca.', l.clave)
WHERE 1
AND l.published
AND l.id_materia
AND c.type_id IS NULL
;
#[%%END_CUSTOM_CODE%%]

--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRETA DE REGISTRO DE SENTENCIAS -TURNO- (OFICIAL)',
`table`='{"special":{"dbtable":"jtca_lsc01s","key":"id","type":"lsc01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlsc01Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"field2347","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field2348","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"}]}'
WHERE `type_alias`='com_jtca.lsc01';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE GOBIERNO',
`table`='{"special":{"dbtable":"jtca_ljc01s","key":"id","type":"ljc01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc01Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_cuantia","targetColumn":"id","displayColumn":"cuantia"},{"sourceColumn":"field14","targetTable":"jtc_currency","targetColumn":"id","displayColumn":"currency"},{"sourceColumn":"field8","targetTable":"jtc_resolucion6","targetColumn":"id","displayColumn":"resolucion"}]}'
WHERE `type_alias`='com_jtca.ljc01';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE GOBIERNO',
`table`='{"special":{"dbtable":"jtca_ljf01s","key":"id","type":"ljf01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf01Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_resolucion6","targetColumn":"id","displayColumn":"resolucion"}]}'
WHERE `type_alias`='com_jtca.ljf01';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE GOBIERNO',
`table`='{"special":{"dbtable":"jtca_ljp01s","key":"id","type":"ljp01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp01Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field19","targetTable":"jtc_situacion5","targetColumn":"id","displayColumn":"situacion"},{"sourceColumn":"field10","targetTable":"jtc_resolucion6","targetColumn":"id","displayColumn":"resolucion"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljp01';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE GOBIERNO',
`table`='{"special":{"dbtable":"jtca_ljccm01s","key":"id","type":"ljccm01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljccm01Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_cuantia","targetColumn":"id","displayColumn":"cuantia"}]}'
WHERE `type_alias`='com_jtca.ljccm01';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE GOBIERNO',
`table`='{"special":{"dbtable":"jtca_ljoc01s","key":"id","type":"ljoc01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljoc01Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6_divisa","targetTable":"jtc_currency","targetColumn":"id","displayColumn":"currency"},{"sourceColumn":"field7","targetTable":"jtc_asunto","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field8","targetTable":"jtc_baja","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field9","targetTable":"jtc_enviados","targetColumn":"id","displayColumn":"text"}]}'
WHERE `type_alias`='com_jtca.ljoc01';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE GOBIERNO',
`table`='{"special":{"dbtable":"jtca_ljpdng01s","key":"id","type":"ljpdng01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpdng01Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljpdng01';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE GOBIERNO',
`table`='{"special":{"dbtable":"jtca_ljpes01s","key":"id","type":"ljpes01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpes01Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljpes01';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE GOBIERNO',
`table`='{"special":{"dbtable":"jtca_ljjadng01s","key":"id","type":"ljjadng01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadng01Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field7","targetTable":"jtc_ejecucion","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field8","targetTable":"jtc_situacion5","targetColumn":"id","displayColumn":"situacion"},{"sourceColumn":"field11","targetTable":"jtc_acuerdo","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field27","targetTable":"jtc_resolucion8","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field28","targetTable":"jtc_resolucion8","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field29","targetTable":"jtc_resolucion8","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field35","targetTable":"jtc_resolucion8","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field36","targetTable":"jtc_resolucion8","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field37","targetTable":"jtc_resolucion8","targetColumn":"id","displayColumn":"text"}]}'
WHERE `type_alias`='com_jtca.ljjadng01';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE GOBIERNO',
`table`='{"special":{"dbtable":"jtca_ljjadg01s","key":"id","type":"ljjadg01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadg01Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field7","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"}]}'
WHERE `type_alias`='com_jtca.ljjadg01';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES CON DETENIDO',
`table`='{"special":{"dbtable":"jtca_lcp01s","key":"id","type":"lcp01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp01Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp01';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES SIN DETENIDO',
`table`='{"special":{"dbtable":"jtca_lcp02s","key":"id","type":"lcp02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp02Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp02';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO DE REMISIONES CON DETENIDO DE JUZGADOS ADOLESCENTES',
`table`='{"special":{"dbtable":"jtca_lcp03s","key":"id","type":"lcp03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp03Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp03';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES CON DETENIDO DE PGR',
`table`='{"special":{"dbtable":"jtca_lcp04s","key":"id","type":"lcp04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp04Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp04';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO DE JUSTICIA PARA ADOLESCENTES SIN DETENIDO DE PGR',
`table`='{"special":{"dbtable":"jtca_lcp05s","key":"id","type":"lcp05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp05Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp05';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO PARA INCOMPETENCIAS ADOLESCENTES',
`table`='{"special":{"dbtable":"jtca_lcp06s","key":"id","type":"lcp06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp06Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"field8","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp06';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO PARA EXCUSAS DE ADOLESCENTES',
`table`='{"special":{"dbtable":"jtca_lcp07s","key":"id","type":"lcp07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp07Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp07';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ETAPA DE EJECUCIÓN PARA ADOLESCENTES',
`table`='{"special":{"dbtable":"jtca_lcp09s","key":"id","type":"lcp09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp09Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp09';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO DE BENEFICIOS PENITENCIARIOS.',
`table`='{"special":{"dbtable":"jtca_lcp10s","key":"id","type":"lcp10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp10Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp10';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO PARA CONSIGNACIONES CON DETENIDO PRIMERA INSTANCIA.',
`table`='{"special":{"dbtable":"jtca_lcp18s","key":"id","type":"lcp18s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp18Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp18.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp18';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO PARA CONSIGNACIONES SIN DETENIDO PRIMERA INSTANCIA.',
`table`='{"special":{"dbtable":"jtca_lcp19s","key":"id","type":"lcp19s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp19Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp19.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp19';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO PARA INCOMPETENCIAS PRIMERA INSTANCIA.',
`table`='{"special":{"dbtable":"jtca_lcp20s","key":"id","type":"lcp20s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp20Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp20.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"field9","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp20';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO DE EXCUSAS PARA JUZGADOS DE PRIMERA INSTANCIA.',
`table`='{"special":{"dbtable":"jtca_lcp21s","key":"id","type":"lcp21s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp21Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp21.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp21';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ORDENES DE ARRAIGOS Y DE CATEOS PRIMERA INSTANCIA.',
`table`='{"special":{"dbtable":"jtca_lcp22s","key":"id","type":"lcp22s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp22Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp22.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp22';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ORDENES DE APREHENSIÓN, REAPREHENSION Y TRASLADO.',
`table`='{"special":{"dbtable":"jtca_lcp23s","key":"id","type":"lcp23s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp23Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp23.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field4","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp23';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO DE LA LEY DE ACCESO A LAS MUJERES A UNA VIDA LIBRE DE VIOLENCIA.',
`table`='{"special":{"dbtable":"jtca_lcp24s","key":"id","type":"lcp24s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp24Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp24.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field4","targetTable":"jtc_delegaciones","targetColumn":"id","displayColumn":"delegacion"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp24';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO PARA CONSIGNACIONES CON DETENIDO DELITOS NO GRAVES',
`table`='{"special":{"dbtable":"jtca_lcp25s","key":"id","type":"lcp25s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp25Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp25.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp25';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO PARA CONSIGNACIONES SIN DETENIDO DELITOS NO GRAVES',
`table`='{"special":{"dbtable":"jtca_lcp26s","key":"id","type":"lcp26s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp26Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp26.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp26';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO PARA INCOMPETENCIAS DELITOS NO GRAVES',
`table`='{"special":{"dbtable":"jtca_lcp27s","key":"id","type":"lcp27s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp27Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp27.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"field8","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp27';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO DE EXCUSAS PARA JUZGADOS  DE DELITOS NO GRAVES',
`table`='{"special":{"dbtable":"jtca_lcp28s","key":"id","type":"lcp28s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp28Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp28.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp28';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ORDENES PARA ARRAIGOS Y CATEOS DELITOS NO GRAVES',
`table`='{"special":{"dbtable":"jtca_lcp29s","key":"id","type":"lcp29s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp29Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp29.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp29';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRETA DE OFICIOS.',
`table`='{"special":{"dbtable":"jtca_lcp11s","key":"id","type":"lcp11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp11Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.lcp11';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRETA DE TURNO DE SALAS PARA JUZGADOS ORALES.',
`table`='{"special":{"dbtable":"jtca_lcp12s","key":"id","type":"lcp12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp12Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp12';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRETA DE EXPEDIENTILLOS DE JUZGADOS DE EJECUCIÓN PARA JUZGADOS PENAL O NO GRAVES.',
`table`='{"special":{"dbtable":"jtca_lcp13s","key":"id","type":"lcp13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp13Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp13';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRETA DE CUMPLIMIENTO DE EJECUTORIAS PARA JUZGADOS DE EJECUCIÓN.',
`table`='{"special":{"dbtable":"jtca_lcp14s","key":"id","type":"lcp14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp14Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp14';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRETA DE OFICIOS DE AMPAROS DE TRAMITE.',
`table`='{"special":{"dbtable":"jtca_lcp15s","key":"id","type":"lcp15s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp15Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp15.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp15';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRETA DE  OFICIOS DE AMPAROS DE CONOCIMIENTO.',
`table`='{"special":{"dbtable":"jtca_lcp16s","key":"id","type":"lcp16s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp16Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp16.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.lcp16';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRETA DE LIBERTADES JUZGADOS DE PRIMERA INSTANCIA',
`table`='{"special":{"dbtable":"jtca_lcp30s","key":"id","type":"lcp30s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp30Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp30.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp30';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRETA DE LIBERTADES JUZGADOS DE DELITOS NO GRAVES',
`table`='{"special":{"dbtable":"jtca_lcp31s","key":"id","type":"lcp31s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp31Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp31.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp31';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRETA DE LIBERTADES JUZGADOS DE EJECUCIÓN DE SENTENCIA',
`table`='{"special":{"dbtable":"jtca_lcp32s","key":"id","type":"lcp32s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp32Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp32.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp32';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRETA DE LIBERTADES DE SALAS PENALES',
`table`='{"special":{"dbtable":"jtca_lcp33s","key":"id","type":"lcp33s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp33Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp33.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.lcp33';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRETA DE LIBERTADES JUZGADOS DE ADOLESCENTES',
`table`='{"special":{"dbtable":"jtca_lcp34s","key":"id","type":"lcp34s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp34Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp34.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp34';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRETA DE LIBERTADES DE SALAS DE ADOLESCENTES',
`table`='{"special":{"dbtable":"jtca_lcp35s","key":"id","type":"lcp35s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp35Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp35.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.lcp35';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRETA DE RETURNO DE ADOLESCENTES',
`table`='{"special":{"dbtable":"jtca_lcp36s","key":"id","type":"lcp36s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp36Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp36.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.lcp36';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO DE EXCUSAS PARA JUZGADOS DE JUSTICIA PARA ADOLESCENTES',
`table`='{"special":{"dbtable":"jtca_lcp39s","key":"id","type":"lcp39s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp39Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp39.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"organo2","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp39';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ORDENES DE DETENCIÓN PARA JUZGADOS DE JUSTICIA PARA ADOLESCENTES',
`table`='{"special":{"dbtable":"jtca_lcp40s","key":"id","type":"lcp40s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp40Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp40.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp40';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO DE REMISIONES SIN DETENIDO DE JUZGADOS ADOLESCENTES',
`table`='{"special":{"dbtable":"jtca_lcp41s","key":"id","type":"lcp41s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlcp41Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lcp41.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"organo1","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.lcp41';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE GOBIERNO',
`table`='{"special":{"dbtable":"jtca_ljomf01s","key":"id","type":"ljomf01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf01Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf01';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE GOBIERNO',
`table`='{"special":{"dbtable":"jtca_ljemst01s","key":"id","type":"ljemst01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljemst01Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljemst01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljemst01';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE GOBIERNO',
`table`='{"special":{"dbtable":"jtca_lspe01s","key":"id","type":"lspe01s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlspe01Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lspe01.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.lspe01';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE RESOLUCIONES DE PLANO',
`table`='{"special":{"dbtable":"jtca_lspe02s","key":"id","type":"lspe02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlspe02Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lspe02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.lspe02';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE RESOLUCIONES',
`table`='{"special":{"dbtable":"jtca_lspe03s","key":"id","type":"lspe03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlspe03Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lspe03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.lspe03';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE BENEFICIOS REVOCADO Y O/A',
`table`='{"special":{"dbtable":"jtca_lspe04s","key":"id","type":"lspe04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlspe04Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lspe04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.lspe04';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE DESISTIMIENTO',
`table`='{"special":{"dbtable":"jtca_lspe05s","key":"id","type":"lspe05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlspe05Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lspe05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.lspe05';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ARCHIVO',
`table`='{"special":{"dbtable":"jtca_lspe06s","key":"id","type":"lspe06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlspe06Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lspe06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.lspe06';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE FINANZAS',
`table`='{"special":{"dbtable":"jtca_lspe07s","key":"id","type":"lspe07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlspe07Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lspe07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.lspe07';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE INGRESO Y EGRESO DE BILLETES',
`table`='{"special":{"dbtable":"jtca_lspe08s","key":"id","type":"lspe08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlspe08Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lspe08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.lspe08';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRETA DE REGISTRO DE ASISTENCIA (OFICIAL)',
`table`='{"special":{"dbtable":"jtca_lsc02s","key":"id","type":"lsc02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlsc02Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.lsc02';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE INGRESOS DE VALORES',
`table`='{"special":{"dbtable":"jtca_ljc02s","key":"id","type":"ljc02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc02Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljc02';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE INGRESOS DE VALORES',
`table`='{"special":{"dbtable":"jtca_ljf02s","key":"id","type":"ljf02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf02Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljf02';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO DE BILLETES DE DEPÓSITO (INGRESOS)',
`table`='{"special":{"dbtable":"jtca_ljp02s","key":"id","type":"ljp02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp02Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljp02';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE INGRESO DE VALORES',
`table`='{"special":{"dbtable":"jtca_ljccm02s","key":"id","type":"ljccm02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljccm02Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljccm02';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CERTIFICADO DE DEPÓSITOS DE INGRESO',
`table`='{"special":{"dbtable":"jtca_ljpdng02s","key":"id","type":"ljpdng02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpdng02Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljpdng02';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE PROMOCIONES',
`table`='{"special":{"dbtable":"jtca_ljpes02s","key":"id","type":"ljpes02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpes02Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljpes02';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE PROMOCIONES',
`table`='{"special":{"dbtable":"jtca_ljjadng02s","key":"id","type":"ljjadng02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadng02Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadng02';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE PROMOCIONES',
`table`='{"special":{"dbtable":"jtca_ljjadg02s","key":"id","type":"ljjadg02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadg02Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field7","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"}]}'
WHERE `type_alias`='com_jtca.ljjadg02';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE INGRESOS DE VALORES',
`table`='{"special":{"dbtable":"jtca_ljomf02s","key":"id","type":"ljomf02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf02Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf02';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE PROMOCIONES',
`table`='{"special":{"dbtable":"jtca_ljemst02s","key":"id","type":"ljemst02s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljemst02Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljemst02.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljemst02';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='Libro de ejemplo',
`table`='{"special":{"dbtable":"jtca_lejemplos","key":"id","type":"lejemplos","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlejemploRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lejemplo.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"my_ref2","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"my_ref","targetTable":"gpcb.jtc_country","targetColumn":"id","displayColumn":"country"}]}'
WHERE `type_alias`='com_jtca.lejemplo';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRETA DE VISTAS AL M.P (OFICIAL)',
`table`='{"special":{"dbtable":"jtca_lsc03s","key":"id","type":"lsc03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlsc03Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_jtca.lsc03';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE EGRESOS DE VALORES',
`table`='{"special":{"dbtable":"jtca_ljc03s","key":"id","type":"ljc03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc03Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljc03';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE EGRESOS DE VALORES',
`table`='{"special":{"dbtable":"jtca_ljf03s","key":"id","type":"ljf03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf03Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljf03';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE EGRESOS DE VALORES',
`table`='{"special":{"dbtable":"jtca_ljp03s","key":"id","type":"ljp03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp03Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljp03';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE EGRESOS DE VALORES',
`table`='{"special":{"dbtable":"jtca_ljccm03s","key":"id","type":"ljccm03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljccm03Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljccm03';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CERTIFICADO DE DEPÓSITOS DE INGRESOS Y EGRESOS',
`table`='{"special":{"dbtable":"jtca_ljoc03s","key":"id","type":"ljoc03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljoc03Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljoc03';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CERTIFICADO DE DEPÓSITOS DE EGRESO',
`table`='{"special":{"dbtable":"jtca_ljpdng03s","key":"id","type":"ljpdng03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpdng03Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljpdng03';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE RECURSOS DE APELACIÓN',
`table`='{"special":{"dbtable":"jtca_ljpes03s","key":"id","type":"ljpes03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpes03Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljpes03';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='AGENDA DE AUDIENCIAS',
`table`='{"special":{"dbtable":"jtca_ljjadng03s","key":"id","type":"ljjadng03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadng03Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadng03';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE INGRESOS',
`table`='{"special":{"dbtable":"jtca_ljjadg03s","key":"id","type":"ljjadg03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadg03Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadg03';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE EGRESOS DE VALORES',
`table`='{"special":{"dbtable":"jtca_ljomf03s","key":"id","type":"ljomf03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf03Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf03';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='AGENDA DE AUDIENCIAS',
`table`='{"special":{"dbtable":"jtca_ljemst03s","key":"id","type":"ljemst03s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljemst03Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljemst03.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljemst03';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE MULTAS (OFICIAL)',
`table`='{"special":{"dbtable":"jtca_lsc04s","key":"id","type":"lsc04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlsc04Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_jtca.lsc04';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO DE PROMOCIONES',
`table`='{"special":{"dbtable":"jtca_ljc04s","key":"id","type":"ljc04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc04Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljc04';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE PROMOCIONES',
`table`='{"special":{"dbtable":"jtca_ljf04s","key":"id","type":"ljf04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf04Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljf04';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO DE PROMOCIONES',
`table`='{"special":{"dbtable":"jtca_ljp04s","key":"id","type":"ljp04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp04Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljp04';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO DE PROMOCIONES',
`table`='{"special":{"dbtable":"jtca_ljccm04s","key":"id","type":"ljccm04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljccm04Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljccm04';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE PROMOCIONES',
`table`='{"special":{"dbtable":"jtca_ljoc04s","key":"id","type":"ljoc04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljoc04Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljoc04';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE PROMOCIONES',
`table`='{"special":{"dbtable":"jtca_ljpdng04s","key":"id","type":"ljpdng04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpdng04Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljpdng04';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE OFICIOS',
`table`='{"special":{"dbtable":"jtca_ljpes04s","key":"id","type":"ljpes04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpes04Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljpes04';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE SENTENCIAS',
`table`='{"special":{"dbtable":"jtca_ljjadng04s","key":"id","type":"ljjadng04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadng04Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadng04';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE EGRESOS',
`table`='{"special":{"dbtable":"jtca_ljjadg04s","key":"id","type":"ljjadg04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadg04Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadg04';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE PROMOCIONES',
`table`='{"special":{"dbtable":"jtca_ljomf04s","key":"id","type":"ljomf04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf04Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf04';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE SENTENCIAS',
`table`='{"special":{"dbtable":"jtca_ljemst04s","key":"id","type":"ljemst04s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljemst04Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljemst04.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljemst04';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='AGENDA (OFICIAL)',
`table`='{"special":{"dbtable":"jtca_lsc05s","key":"id","type":"lsc05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlsc05Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_jtca.lsc05';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO PARA SENTENCIA',
`table`='{"special":{"dbtable":"jtca_ljc05s","key":"id","type":"ljc05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc05Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field10","targetTable":"jtc_resolucion6","targetColumn":"id","displayColumn":"resolucion"}]}'
WHERE `type_alias`='com_jtca.ljc05';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE SENTENCIAS',
`table`='{"special":{"dbtable":"jtca_ljf05s","key":"id","type":"ljf05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf05Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljf05';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO PARA SENTENCIA',
`table`='{"special":{"dbtable":"jtca_ljp05s","key":"id","type":"ljp05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp05Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljp05';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO PARA SENTENCIA',
`table`='{"special":{"dbtable":"jtca_ljccm05s","key":"id","type":"ljccm05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljccm05Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field10","targetTable":"jtc_resolucion6","targetColumn":"id","displayColumn":"resolucion"}]}'
WHERE `type_alias`='com_jtca.ljccm05';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE SENTENCIAS',
`table`='{"special":{"dbtable":"jtca_ljoc05s","key":"id","type":"ljoc05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljoc05Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field8","targetTable":"jtc_resolucion6","targetColumn":"id","displayColumn":"resolucion"}]}'
WHERE `type_alias`='com_jtca.ljoc05';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO PARA SENTENCIAS',
`table`='{"special":{"dbtable":"jtca_ljpdng05s","key":"id","type":"ljpdng05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpdng05Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljpdng05';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ACTUARIOS',
`table`='{"special":{"dbtable":"jtca_ljpes05s","key":"id","type":"ljpes05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpes05Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljpes05';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE RECURSOS DE APELACIÓN',
`table`='{"special":{"dbtable":"jtca_ljjadng05s","key":"id","type":"ljjadng05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadng05Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadng05';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE SENTENCIAS',
`table`='{"special":{"dbtable":"jtca_ljjadg05s","key":"id","type":"ljjadg05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadg05Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadg05';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE SENTENCIAS',
`table`='{"special":{"dbtable":"jtca_ljomf05s","key":"id","type":"ljomf05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf05Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf05';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE RECURSOS DE APELACIÓN',
`table`='{"special":{"dbtable":"jtca_ljemst05s","key":"id","type":"ljemst05s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljemst05Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljemst05.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljemst05';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE BILLETES Y PÓLIZAS (OFICIAL)',
`table`='{"special":{"dbtable":"jtca_lsc06s","key":"id","type":"lsc06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlsc06Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.lsc06';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE RECURSOS DE APELACIÓN',
`table`='{"special":{"dbtable":"jtca_ljc06s","key":"id","type":"ljc06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc06Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljc06';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE RECURSOS DE APELACIÓN',
`table`='{"special":{"dbtable":"jtca_ljf06s","key":"id","type":"ljf06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf06Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field17","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljf06';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE RECURSOS DE APELACIÓN',
`table`='{"special":{"dbtable":"jtca_ljp06s","key":"id","type":"ljp06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp06Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljp06';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE RECURSOS DE APELACIÓN',
`table`='{"special":{"dbtable":"jtca_ljccm06s","key":"id","type":"ljccm06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljccm06Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field16","targetTable":"jtc_admision","targetColumn":"id","displayColumn":"admision"},{"sourceColumn":"field12","targetTable":"jtc_tipoapelacion","targetColumn":"id","displayColumn":"tipo"}]}'
WHERE `type_alias`='com_jtca.ljccm06';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE EXHORTOS',
`table`='{"special":{"dbtable":"jtca_ljoc06s","key":"id","type":"ljoc06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljoc06Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field4","targetTable":"jtc_exhortos","targetColumn":"id","displayColumn":"exhorto"},{"sourceColumn":"field11","targetTable":"jtc_devueltos","targetColumn":"id","displayColumn":"text"}]}'
WHERE `type_alias`='com_jtca.ljoc06';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE RECURSOS DE APELACIÓN',
`table`='{"special":{"dbtable":"jtca_ljpdng06s","key":"id","type":"ljpdng06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpdng06Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljpdng06';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE AMPAROS',
`table`='{"special":{"dbtable":"jtca_ljpes06s","key":"id","type":"ljpes06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpes06Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljpes06';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE EXHORTOS',
`table`='{"special":{"dbtable":"jtca_ljjadng06s","key":"id","type":"ljjadng06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadng06Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadng06';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE RECURSOS DE APELACIÓN',
`table`='{"special":{"dbtable":"jtca_ljjadg06s","key":"id","type":"ljjadg06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadg06Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadg06';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE RECURSOS DE APELACIÓN',
`table`='{"special":{"dbtable":"jtca_ljomf06s","key":"id","type":"ljomf06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf06Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf06';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE EXHORTOS',
`table`='{"special":{"dbtable":"jtca_ljemst06s","key":"id","type":"ljemst06s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljemst06Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljemst06.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljemst06';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE EGRESOS (OFICIAL)',
`table`='{"special":{"dbtable":"jtca_lsc07s","key":"id","type":"lsc07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlsc07Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.lsc07';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE EXHORTOS',
`table`='{"special":{"dbtable":"jtca_ljc07s","key":"id","type":"ljc07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc07Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljc07';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE EXHORTOS',
`table`='{"special":{"dbtable":"jtca_ljf07s","key":"id","type":"ljf07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf07Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljf07';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE EXHORTOS',
`table`='{"special":{"dbtable":"jtca_ljccm07s","key":"id","type":"ljccm07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljccm07Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljccm07';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE OFICIOS',
`table`='{"special":{"dbtable":"jtca_ljoc07s","key":"id","type":"ljoc07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljoc07Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljoc07';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE EXHORTOS',
`table`='{"special":{"dbtable":"jtca_ljpdng07s","key":"id","type":"ljpdng07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpdng07Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljpdng07';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE AMPAROS CIRCULANTES',
`table`='{"special":{"dbtable":"jtca_ljpes07s","key":"id","type":"ljpes07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpes07Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljpes07';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE OFICIOS',
`table`='{"special":{"dbtable":"jtca_ljjadng07s","key":"id","type":"ljjadng07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadng07Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadng07';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE EXHORTOS',
`table`='{"special":{"dbtable":"jtca_ljjadg07s","key":"id","type":"ljjadg07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadg07Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadg07';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE EXHORTOS',
`table`='{"special":{"dbtable":"jtca_ljomf07s","key":"id","type":"ljomf07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf07Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf07';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE OFICIOS',
`table`='{"special":{"dbtable":"jtca_ljemst07s","key":"id","type":"ljemst07s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljemst07Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljemst07.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljemst07';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE PÓLIZAS Y FIANZAS (OFICIAL) - ingresos',
`table`='{"special":{"dbtable":"jtca_lsc08s","key":"id","type":"lsc08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlsc08Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_jtca.lsc08';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE OFICIOS',
`table`='{"special":{"dbtable":"jtca_ljc08s","key":"id","type":"ljc08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc08Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljc08';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE OFICIOS',
`table`='{"special":{"dbtable":"jtca_ljf08s","key":"id","type":"ljf08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf08Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljf08';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE EXHORTOS',
`table`='{"special":{"dbtable":"jtca_ljp08s","key":"id","type":"ljp08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp08Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljp08';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE OFICIOS',
`table`='{"special":{"dbtable":"jtca_ljccm08s","key":"id","type":"ljccm08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljccm08Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljccm08';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ACTUARIOS',
`table`='{"special":{"dbtable":"jtca_ljoc08s","key":"id","type":"ljoc08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljoc08Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field10","targetTable":"jtc_tipodiligencia","targetColumn":"id","displayColumn":"tipo"},{"sourceColumn":"field13","targetTable":"jtc_lanzamientos","targetColumn":"id","displayColumn":"text"}]}'
WHERE `type_alias`='com_jtca.ljoc08';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE OFICIOS',
`table`='{"special":{"dbtable":"jtca_ljpdng08s","key":"id","type":"ljpdng08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpdng08Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljpdng08';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE PEDIMENTOS',
`table`='{"special":{"dbtable":"jtca_ljpes08s","key":"id","type":"ljpes08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpes08Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljpes08';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE AMPAROS',
`table`='{"special":{"dbtable":"jtca_ljjadng08s","key":"id","type":"ljjadng08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadng08Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field3","targetTable":"jtc_amparo2","targetColumn":"id","displayColumn":"text"}]}'
WHERE `type_alias`='com_jtca.ljjadng08';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE OFICIOS',
`table`='{"special":{"dbtable":"jtca_ljjadg08s","key":"id","type":"ljjadg08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadg08Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadg08';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE OFICIOS',
`table`='{"special":{"dbtable":"jtca_ljomf08s","key":"id","type":"ljomf08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf08Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf08';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE AMPAROS',
`table`='{"special":{"dbtable":"jtca_ljemst08s","key":"id","type":"ljemst08s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljemst08Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljemst08.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljemst08';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE PÓLIZAS Y FIANZAS (OFICIAL) - egresos',
`table`='{"special":{"dbtable":"jtca_lsc14s","key":"id","type":"lsc14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlsc14Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.lsc14';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE GOBIERNO (OFICIAL)',
`table`='{"special":{"dbtable":"jtca_lsc09s","key":"id","type":"lsc09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlsc09Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_jtca.lsc09';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ACTUARIOS',
`table`='{"special":{"dbtable":"jtca_ljc09s","key":"id","type":"ljc09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc09Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljc09';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ACTUARIOS',
`table`='{"special":{"dbtable":"jtca_ljf09s","key":"id","type":"ljf09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf09Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljf09';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE OFICIOS',
`table`='{"special":{"dbtable":"jtca_ljp09s","key":"id","type":"ljp09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp09Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljp09';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ACTUARIOS',
`table`='{"special":{"dbtable":"jtca_ljccm09s","key":"id","type":"ljccm09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljccm09Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljccm09';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTICIA',
`table`='{"special":{"dbtable":"jtca_ljoc09s","key":"id","type":"ljoc09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljoc09Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field5","targetTable":"jtc_tipoauxiliar","targetColumn":"id","displayColumn":"tipo"},{"sourceColumn":"field7","targetTable":"jtc_especialidades","targetColumn":"id","displayColumn":"especialidad"}]}'
WHERE `type_alias`='com_jtca.ljoc09';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ACTUARIOS',
`table`='{"special":{"dbtable":"jtca_ljpdng09s","key":"id","type":"ljpdng09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpdng09Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljpdng09';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE MULTAS JUDICIALES',
`table`='{"special":{"dbtable":"jtca_ljpes09s","key":"id","type":"ljpes09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpes09Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljpes09';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ACTUARIO',
`table`='{"special":{"dbtable":"jtca_ljjadng09s","key":"id","type":"ljjadng09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadng09Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadng09';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ACTUARIOS',
`table`='{"special":{"dbtable":"jtca_ljjadg09s","key":"id","type":"ljjadg09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadg09Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadg09';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ACTUARIOS',
`table`='{"special":{"dbtable":"jtca_ljomf09s","key":"id","type":"ljomf09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf09Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf09';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ACTUARIO',
`table`='{"special":{"dbtable":"jtca_ljemst09s","key":"id","type":"ljemst09s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljemst09Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljemst09.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljemst09';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ACTUARIO (OFICIAL)',
`table`='{"special":{"dbtable":"jtca_lsc10s","key":"id","type":"lsc10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlsc10Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_jtca.lsc10';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTICIA',
`table`='{"special":{"dbtable":"jtca_ljc10s","key":"id","type":"ljc10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc10Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_especialidades","targetColumn":"id","displayColumn":"especialidad"}]}'
WHERE `type_alias`='com_jtca.ljc10';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTICIA, TUTORES Y CURADORES',
`table`='{"special":{"dbtable":"jtca_ljf10s","key":"id","type":"ljf10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf10Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field7","targetTable":"jtc_especialidades","targetColumn":"id","displayColumn":"especialidad"}]}'
WHERE `type_alias`='com_jtca.ljf10';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ACTUARIO',
`table`='{"special":{"dbtable":"jtca_ljp10s","key":"id","type":"ljp10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp10Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljp10';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO PARA NOTARIOS',
`table`='{"special":{"dbtable":"jtca_ljccm10s","key":"id","type":"ljccm10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljccm10Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljccm10';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE AMPAROS',
`table`='{"special":{"dbtable":"jtca_ljoc10s","key":"id","type":"ljoc10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljoc10Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_amparo","targetColumn":"id","displayColumn":"amparo"},{"sourceColumn":"field11","targetTable":"jtc_informe","targetColumn":"id","displayColumn":"informe"}]}'
WHERE `type_alias`='com_jtca.ljoc10';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO DE AMPAROS',
`table`='{"special":{"dbtable":"jtca_ljpdng10s","key":"id","type":"ljpdng10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpdng10Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljpdng10';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='AGENDA DE AUDIENCIAS PARA JUICIOS ORALES',
`table`='{"special":{"dbtable":"jtca_ljpes10s","key":"id","type":"ljpes10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpes10Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljpes10';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE PEDIMENTOS',
`table`='{"special":{"dbtable":"jtca_ljjadng10s","key":"id","type":"ljjadng10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadng10Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadng10';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE AMPAROS',
`table`='{"special":{"dbtable":"jtca_ljjadg10s","key":"id","type":"ljjadg10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadg10Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field12","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field6","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"}]}'
WHERE `type_alias`='com_jtca.ljjadg10';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE AUXILIARES DE LA ADMINISTRACIÓN DE JUSTICIA, TUTORES Y CURADORES',
`table`='{"special":{"dbtable":"jtca_ljomf10s","key":"id","type":"ljomf10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf10Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf10';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE PEDIMENTOS',
`table`='{"special":{"dbtable":"jtca_ljemst10s","key":"id","type":"ljemst10s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljemst10Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljemst10.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljemst10';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRETA DE OFICIOS (OFICIAL)',
`table`='{"special":{"dbtable":"jtca_lsc11s","key":"id","type":"lsc11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlsc11Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_jtca.lsc11';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO PARA NOTARIOS',
`table`='{"special":{"dbtable":"jtca_ljc11s","key":"id","type":"ljc11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc11Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljc11';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO PARA NOTARIOS',
`table`='{"special":{"dbtable":"jtca_ljf11s","key":"id","type":"ljf11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf11Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljf11';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO DE AMPAROS',
`table`='{"special":{"dbtable":"jtca_ljp11s","key":"id","type":"ljp11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp11Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljp11';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO DE AMPAROS',
`table`='{"special":{"dbtable":"jtca_ljccm11s","key":"id","type":"ljccm11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljccm11Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field7","targetTable":"jtc_procedencia","targetColumn":"id","displayColumn":"procedencia"},{"sourceColumn":"field12","targetTable":"jtc_informe","targetColumn":"id","displayColumn":"informe"}]}'
WHERE `type_alias`='com_jtca.ljccm11';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE MULTAS',
`table`='{"special":{"dbtable":"jtca_ljoc11s","key":"id","type":"ljoc11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljoc11Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljoc11';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE AMPAROS CIRCULANTES O NEGADOS',
`table`='{"special":{"dbtable":"jtca_ljpdng11s","key":"id","type":"ljpdng11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpdng11Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljpdng11';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE INGRESOS Y EGRESOS DE BILLETES DE DEPÓSITO',
`table`='{"special":{"dbtable":"jtca_ljpes11s","key":"id","type":"ljpes11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpes11Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljpes11';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REMISIÓN AL ARCHIVO',
`table`='{"special":{"dbtable":"jtca_ljjadng11s","key":"id","type":"ljjadng11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadng11Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field6","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"}]}'
WHERE `type_alias`='com_jtca.ljjadng11';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE FIANZAS',
`table`='{"special":{"dbtable":"jtca_ljjadg11s","key":"id","type":"ljjadg11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadg11Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadg11';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO PARA NOTARIOS',
`table`='{"special":{"dbtable":"jtca_ljomf11s","key":"id","type":"ljomf11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf11Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf11';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REMISIÓN AL ARCHIVO',
`table`='{"special":{"dbtable":"jtca_ljemst11s","key":"id","type":"ljemst11s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljemst11Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljemst11.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljemst11';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO DE AMPAROS (OFICIAL)',
`table`='{"special":{"dbtable":"jtca_lsc12s","key":"id","type":"lsc12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlsc12Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_jtca.lsc12';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO DE AMPAROS',
`table`='{"special":{"dbtable":"jtca_ljc12s","key":"id","type":"ljc12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc12Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field7","targetTable":"jtc_procedencia","targetColumn":"id","displayColumn":"procedencia"},{"sourceColumn":"field12","targetTable":"jtc_informe","targetColumn":"id","displayColumn":"informe"}]}'
WHERE `type_alias`='com_jtca.ljc12';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO DE AMPAROS',
`table`='{"special":{"dbtable":"jtca_ljf12s","key":"id","type":"ljf12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf12Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field7","targetTable":"jtc_amparo","targetColumn":"id","displayColumn":"amparo"},{"sourceColumn":"field9","targetTable":"jtc_procedencia","targetColumn":"id","displayColumn":"procedencia"},{"sourceColumn":"field11","targetTable":"jtc_informe","targetColumn":"id","displayColumn":"informe"}]}'
WHERE `type_alias`='com_jtca.ljf12';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO DE AMPAROS CIRCULANTES O NEGADOS',
`table`='{"special":{"dbtable":"jtca_ljp12s","key":"id","type":"ljp12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp12Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljp12';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE FIANZAS',
`table`='{"special":{"dbtable":"jtca_ljccm12s","key":"id","type":"ljccm12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljccm12Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljccm12';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='AGENDA DE AUDIENCIAS',
`table`='{"special":{"dbtable":"jtca_ljoc12s","key":"id","type":"ljoc12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljoc12Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field5","targetTable":"jtc_tipoaudiencia","targetColumn":"id","displayColumn":"tipo"}]}'
WHERE `type_alias`='com_jtca.ljoc12';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE FIANZAS',
`table`='{"special":{"dbtable":"jtca_ljpdng12s","key":"id","type":"ljpdng12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpdng12Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljpdng12';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE FIANZAS',
`table`='{"special":{"dbtable":"jtca_ljpes12s","key":"id","type":"ljpes12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpes12Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljpes12';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE MULTAS',
`table`='{"special":{"dbtable":"jtca_ljjadg12s","key":"id","type":"ljjadg12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadg12Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadg12';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBROS DE VALORES',
`table`='{"special":{"dbtable":"jtca_ljjadng12s","key":"id","type":"ljjadng12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadng12Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadng12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadng12';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO DE AMPAROS',
`table`='{"special":{"dbtable":"jtca_ljomf12s","key":"id","type":"ljomf12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf12Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf12';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBROS DE VALORES',
`table`='{"special":{"dbtable":"jtca_ljemst12s","key":"id","type":"ljemst12s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljemst12Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljemst12.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljemst12';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='PAPELETAS PARA EL PRÉSTAMO DE EXPEDIENTES',
`table`='{"special":{"dbtable":"jtca_lsc13s","key":"id","type":"lsc13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getlsc13Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/lsc13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_jtca.lsc13';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE FIANZAS',
`table`='{"special":{"dbtable":"jtca_ljc13s","key":"id","type":"ljc13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc13Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljc13';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE FIANZAS',
`table`='{"special":{"dbtable":"jtca_ljf13s","key":"id","type":"ljf13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf13Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljf13';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE FIANZAS',
`table`='{"special":{"dbtable":"jtca_ljp13s","key":"id","type":"ljp13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp13Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljp13';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE MULTAS',
`table`='{"special":{"dbtable":"jtca_ljccm13s","key":"id","type":"ljccm13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljccm13Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljccm13';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE NOTARIOS',
`table`='{"special":{"dbtable":"jtca_ljoc13s","key":"id","type":"ljoc13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljoc13Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljoc13';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE MULTAS',
`table`='{"special":{"dbtable":"jtca_ljpdng13s","key":"id","type":"ljpdng13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpdng13Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljpdng13';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE RESOLUCIONES EN AUDIENCIA',
`table`='{"special":{"dbtable":"jtca_ljpes13s","key":"id","type":"ljpes13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpes13Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljpes13';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='AGENDA DE AUDIENCIAS',
`table`='{"special":{"dbtable":"jtca_ljjadg13s","key":"id","type":"ljjadg13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadg13Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadg13';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE FIANZAS',
`table`='{"special":{"dbtable":"jtca_ljomf13s","key":"id","type":"ljomf13s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf13Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf13.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf13';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE MULTAS',
`table`='{"special":{"dbtable":"jtca_ljc14s","key":"id","type":"ljc14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc14Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljc14';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE MULTAS',
`table`='{"special":{"dbtable":"jtca_ljf14s","key":"id","type":"ljf14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf14Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljf14';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE MULTAS',
`table`='{"special":{"dbtable":"jtca_ljp14s","key":"id","type":"ljp14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp14Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljp14';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE FIANZAS',
`table`='{"special":{"dbtable":"jtca_ljoc14s","key":"id","type":"ljoc14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljoc14Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljoc14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljoc14';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='AGENDA DE AUDIENCIAS',
`table`='{"special":{"dbtable":"jtca_ljpdng14s","key":"id","type":"ljpdng14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpdng14Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljpdng14';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE RESOLUCIONES DE PLANO',
`table`='{"special":{"dbtable":"jtca_ljpes14s","key":"id","type":"ljpes14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpes14Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljpes14';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE PEDIMENTOS',
`table`='{"special":{"dbtable":"jtca_ljjadg14s","key":"id","type":"ljjadg14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadg14Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadg14';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE MULTAS',
`table`='{"special":{"dbtable":"jtca_ljomf14s","key":"id","type":"ljomf14s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf14Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf14.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf14';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO A CARGO DE LOS SECRETARIOS DE ACUERDOS',
`table`='{"special":{"dbtable":"jtca_ljf15s","key":"id","type":"ljf15s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf15Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf15.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljf15';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='AGENDA DE AUDIENCIAS',
`table`='{"special":{"dbtable":"jtca_ljccm15s","key":"id","type":"ljccm15s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljccm15Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm15.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljccm15';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE PEDIMENTOS',
`table`='{"special":{"dbtable":"jtca_ljpdng15s","key":"id","type":"ljpdng15s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpdng15Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng15.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljpdng15';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE BENEFICIOS REVOCADOS Y ORDENES DE RE-APREHENSIÓN',
`table`='{"special":{"dbtable":"jtca_ljpes15s","key":"id","type":"ljpes15s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpes15Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes15.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljpes15';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='ARTICULO 36 o ARTICULO 28 LJADF',
`table`='{"special":{"dbtable":"jtca_ljjadg15s","key":"id","type":"ljjadg15s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadg15Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg15.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadg15';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO A CARGO DE LOS SECRETARIOS DE ACUERDOS',
`table`='{"special":{"dbtable":"jtca_ljomf15s","key":"id","type":"ljomf15s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf15Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf15.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf15';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='AGENDA DE AUDIENCIAS',
`table`='{"special":{"dbtable":"jtca_ljc16s","key":"id","type":"ljc16s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc16Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc16.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljc16';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='AGENDA DE AUDIENCIAS',
`table`='{"special":{"dbtable":"jtca_ljf16s","key":"id","type":"ljf16s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf16Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf16.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljf16';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='AGENDA DE AUDIENCIAS',
`table`='{"special":{"dbtable":"jtca_ljp16s","key":"id","type":"ljp16s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp16Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp16.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field5","targetTable":"jtc_procedimiento","targetColumn":"id","displayColumn":"procedimiento"}]}'
WHERE `type_alias`='com_jtca.ljp16';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REMISIÓN DE EXPEDIENTES AL ARCHIVO',
`table`='{"special":{"dbtable":"jtca_ljccm16s","key":"id","type":"ljccm16s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljccm16Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm16.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljccm16';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO EN QUE SE HAYA OBSEQUIADO O NEGADO LA ORDEN DE APREHENSIÓN, COMPARECENCIA, PRESENTACIÓN, ARTÍCULO 36 DEL CÓDIGO DE PROCEDIMIENTOS PENALES Y OTROS',
`table`='{"special":{"dbtable":"jtca_ljpdng16s","key":"id","type":"ljpdng16s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpdng16Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng16.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljpdng16';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE DESISTIMIENTOS',
`table`='{"special":{"dbtable":"jtca_ljpes16s","key":"id","type":"ljpes16s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpes16Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes16.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljpes16';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE PRESENTACIÓN DE ADOLESCENTES EN LIBERTAD ANTE EL JUEZ',
`table`='{"special":{"dbtable":"jtca_ljjadg16s","key":"id","type":"ljjadg16s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadg16Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg16.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadg16';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='AGENDA DE AUDIENCIAS',
`table`='{"special":{"dbtable":"jtca_ljomf16s","key":"id","type":"ljomf16s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf16Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf16.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf16';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REMISIÓN AL ARCHIVO',
`table`='{"special":{"dbtable":"jtca_ljc17s","key":"id","type":"ljc17s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc17Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc17.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field15","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"}]}'
WHERE `type_alias`='com_jtca.ljc17';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REMISIÓN AL ARCHIVO',
`table`='{"special":{"dbtable":"jtca_ljf17s","key":"id","type":"ljf17s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf17Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf17.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljf17';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE PEDIMENTOS',
`table`='{"special":{"dbtable":"jtca_ljp17s","key":"id","type":"ljp17s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp17Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp17.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljp17';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO',
`table`='{"special":{"dbtable":"jtca_ljccm17s","key":"id","type":"ljccm17s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljccm17Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljccm17.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljccm17';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE FIRMAS PROCESADOS',
`table`='{"special":{"dbtable":"jtca_ljpdng17s","key":"id","type":"ljpdng17s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpdng17Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng17.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljpdng17';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ARCHIVO',
`table`='{"special":{"dbtable":"jtca_ljpes17s","key":"id","type":"ljpes17s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpes17Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes17.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljpes17';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REMISIÓN AL ARCHIVO',
`table`='{"special":{"dbtable":"jtca_ljjadg17s","key":"id","type":"ljjadg17s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadg17Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg17.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljjadg17';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REMISIÓN AL ARCHIVO',
`table`='{"special":{"dbtable":"jtca_ljomf17s","key":"id","type":"ljomf17s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf17Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf17.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf17';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO',
`table`='{"special":{"dbtable":"jtca_ljc18s","key":"id","type":"ljc18s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc18Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc18.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljc18';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO',
`table`='{"special":{"dbtable":"jtca_ljf18s","key":"id","type":"ljf18s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf18Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf18.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljf18';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REGISTRO EN QUE SE HAYA OBSEQUIADO O NEGADO LA ORDEN DE APREHENSIÓN, COMPARECENCIA, PRESENTACIÓN, ARTÍCULO 36 DEL CÓDIGO DE PROCEDIMIENTOS PENALES Y OTROS',
`table`='{"special":{"dbtable":"jtca_ljp18s","key":"id","type":"ljp18s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp18Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp18.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljp18';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REMISIÓN AL ARCHIVO',
`table`='{"special":{"dbtable":"jtca_ljpdng18s","key":"id","type":"ljpdng18s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpdng18Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpdng18.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"jorigen","targetTable":"jtc_organosextintos","targetColumn":"id","displayColumn":"organo"}]}'
WHERE `type_alias`='com_jtca.ljpdng18';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE AMPAROS *LOCOS*',
`table`='{"special":{"dbtable":"jtca_ljjadg18s","key":"id","type":"ljjadg18s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljjadg18Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljjadg18.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field12","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"},{"sourceColumn":"field6","targetTable":"jtc_jtc_general","targetColumn":"id","displayColumn":"text"}]}'
WHERE `type_alias`='com_jtca.ljjadg18';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REMISIÓN DE DOCUMENTOS AL ARCHIVO',
`table`='{"special":{"dbtable":"jtca_ljomf18s","key":"id","type":"ljomf18s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf18Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf18.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf18';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE EXHORTOS',
`table`='{"special":{"dbtable":"jtca_ljpes18s","key":"id","type":"ljpes18s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljpes18Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljpes18.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljpes18';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ENVÍO DE EXPEDIENTES AL ARCHIVO JUDICIAL PARA SU DESTRUCCIÓN',
`table`='{"special":{"dbtable":"jtca_ljc19s","key":"id","type":"ljc19s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc19Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc19.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljc19';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ENVÍO DE EXPEDIENTES AL ARCHIVO JUDICIAL PARA SU DESTRUCCIÓN',
`table`='{"special":{"dbtable":"jtca_ljf19s","key":"id","type":"ljf19s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf19Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf19.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljf19';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE FIRMAS DE PROCESADOS',
`table`='{"special":{"dbtable":"jtca_ljp19s","key":"id","type":"ljp19s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp19Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp19.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljp19';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE ENVÍO DE EXPEDIENTES AL ARCHIVO JUDICIAL PARA SU DESTRUCCIÓN',
`table`='{"special":{"dbtable":"jtca_ljomf19s","key":"id","type":"ljomf19s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf19Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf19.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf19';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE ASUNTOS CONFORME A LOS ARTÍCULOS 13 FRACCIÓN XIV Y 25 DE LA LEY DE TRANSPARENCIA Y ACCESO A LA INFORMACIÓN PÚBLICA',
`table`='{"special":{"dbtable":"jtca_ljc20s","key":"id","type":"ljc20s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc20Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc20.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljc20';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE ASUNTOS CONFORME A LOS ARTÍCULOS 13 FRACCIÓN XIV Y 25 DE LA LEY DE TRANSPARENCIA Y ACCESO A LA INFORMACIÓN PÚBLICA',
`table`='{"special":{"dbtable":"jtca_ljf20s","key":"id","type":"ljf20s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf20Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf20.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljf20';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE TURNO PARA CONCLUSIONES',
`table`='{"special":{"dbtable":"jtca_ljp20s","key":"id","type":"ljp20s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp20Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp20.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljp20';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE ASUNTOS CONFORME A LOS ARTÍCULOS 13 FRACCIÓN XIV Y 25 DE LA LEY DE TRANSPARENCIA Y ACCESO A LA INFORMACIÓN PÚBLICA',
`table`='{"special":{"dbtable":"jtca_ljomf20s","key":"id","type":"ljomf20s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf20Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf20.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf20';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE MINISTERIO PÚBLICO',
`table`='{"special":{"dbtable":"jtca_ljc21s","key":"id","type":"ljc21s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc21Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc21.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljc21';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE ADOPCIONES INTERNACIONALES',
`table`='{"special":{"dbtable":"jtca_ljf21s","key":"id","type":"ljf21s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf21Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf21.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field5","targetTable":"jtc_country","targetColumn":"id","displayColumn":"country"}]}'
WHERE `type_alias`='com_jtca.ljf21';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE REMISIÓN AL ARCHIVO',
`table`='{"special":{"dbtable":"jtca_ljp21s","key":"id","type":"ljp21s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljp21Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljp21.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljp21';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE ADOPCIONES INTERNACIONALES',
`table`='{"special":{"dbtable":"jtca_ljomf21s","key":"id","type":"ljomf21s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf21Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf21.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf21';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE RESTITUCIONES INTERNACIONALES',
`table`='{"special":{"dbtable":"jtca_ljf22s","key":"id","type":"ljf22s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf22Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf22.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field4","targetTable":"jtc_country","targetColumn":"id","displayColumn":"country"}]}'
WHERE `type_alias`='com_jtca.ljf22';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljomf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE RESTITUCIONES INTERNACIONALES',
`table`='{"special":{"dbtable":"jtca_ljomf22s","key":"id","type":"ljomf22s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljomf22Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljomf22.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljomf22';
