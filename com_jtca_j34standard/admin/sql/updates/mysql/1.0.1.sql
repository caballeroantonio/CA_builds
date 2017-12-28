--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
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
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `jt_ljf22s`
--
UPDATE `#__content_types` SET 
`type_title`='LIBRO DE CONTROL DE RESTITUCIONES INTERNACIONALES',
`table`='{"special":{"dbtable":"jtca_ljf22s","key":"id","type":"ljf22s","prefix":"jtcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"created","core_modified_time":"modified","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='jtcaHelperRoute::getljf22Route',
`content_history_options`='{"formFile":"administrator\/components\/com_jtca\/models\/forms\/ljf22.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["modified_by","modified","checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_organo","targetTable":"jtc_organos","targetColumn":"id","displayColumn":"organo"},{"sourceColumn":"id_expediente","targetTable":"jt_expedientes","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_secretaria","targetTable":"jtc_secretarias","targetColumn":"id","displayColumn":"secretaria"},{"sourceColumn":"field4","targetTable":"jtc_country","targetColumn":"id","displayColumn":"country"}]}'
WHERE `type_alias`='com_jtca.ljf22';

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