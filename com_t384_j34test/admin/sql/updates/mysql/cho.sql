--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__t384_wa_entry_conversations`
--
UPDATE `#__content_types` SET 
`type_title`='Module',
`table`='{"special":{"dbtable":"#__t384_modules","key":"id","type":"modules","prefix":"t384Table","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"state","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"description","core_hits":"null","core_publish_up":"publish_up","core_publish_down":"publish_down","core_access":"access","core_params":"params","core_featured":"null","core_metadata":"null","core_language":"language","core_images":"null","core_urls":"null","core_version":"null","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"asset_id"}}',
`router`='t384HelperRoute::getmoduleRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_t384\/models\/forms\/module.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_t384.module';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__t384_wa_entry_conversations`
--
UPDATE `#__content_types` SET 
`type_title`='Inmueble',
`table`='{"special":{"dbtable":"#__t384_houses","key":"id","type":"houses","prefix":"t384Table","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"state","core_alias":"null","core_created_time":"null","core_modified_time":"modified","core_body":"description","core_hits":"hits","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"featured","core_metadata":"null","core_language":"language","core_images":"images","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='t384HelperRoute::gethouseRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_t384\/models\/forms\/house.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_country","targetTable":"#__t384_countries","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_lstate","targetTable":"#__t384_lstates","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_lmunicipality","targetTable":"#__t384_lmunicipalities","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_rent","targetTable":"#__t384_rents","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_currency","targetTable":"#__remca_countries","targetColumn":"id","displayColumn":"currency"},{"sourceColumn":"owner_id","targetTable":"#__t384_jusers","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_t384.house';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__t384_wa_entry_conversations`
--
UPDATE `#__content_types` SET 
`type_title`='Título de la conversación Whatsapp',
`table`='{"special":{"dbtable":"#__t384_wa_title_conversations","key":"id","type":"wa_title_conversations","prefix":"t384Table","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"state","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"params","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"null","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='t384HelperRoute::getwa_title_conversationRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_t384\/models\/forms\/wa_title_conversation.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_t384.wa_title_conversation';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__t384_wa_entry_conversations`
--
UPDATE `#__content_types` SET 
`type_title`='Entrada de la conversación Whatsapp',
`table`='{"special":{"dbtable":"#__t384_wa_entry_conversations","key":"id","type":"wa_entry_conversations","prefix":"t384Table","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"description","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"params","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"null","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='t384HelperRoute::getwa_entry_conversationRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_t384\/models\/forms\/wa_entry_conversation.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_wa_title_conversation","targetTable":"#__t384_wa_title_conversations","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_t384.wa_entry_conversation';
