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

##end automatic UCHO 

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