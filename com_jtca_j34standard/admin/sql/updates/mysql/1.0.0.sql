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
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljc21s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE MINISTERIO PÚBLICO',
`table`='{"special":{"dbtable":"jtca_ljc21s","key":"id","type":"ljc21s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljc21Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljc21.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"}]}'
WHERE `type_alias`='com_jtca.ljc21';
