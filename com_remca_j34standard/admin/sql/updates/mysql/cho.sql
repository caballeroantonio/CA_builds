--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='house',
`table`='{"special":{"dbtable":"remca_houses","key":"id","type":"houses","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"state","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"description","core_hits":"hits","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"language","core_images":"images","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"catid","core_xreference":"null","asset_id":"asset_id"}}',
`router`='remcaHelperRoute::gethouseRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/house.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"id_currency","targetTable":"#__rem_countries","targetColumn":"id","displayColumn":"currency"}]}'
WHERE `type_alias`='com_remca.house';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='photo',
`table`='{"special":{"dbtable":"remca_photos","key":"id","type":"photos","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"images","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getphotoRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/photo.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.photo';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='mime_type',
`table`='{"special":{"dbtable":"remca_mime_types","key":"id","type":"mime_types","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getmime_typeRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/mime_type.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.mime_type';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='mls_for_delete',
`table`='{"special":{"dbtable":"remca_mls_for_delete","key":"id","type":"mls_for_delete","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getmls_for_deleteRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/mls_for_delete.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.mls_for_delete';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='order',
`table`='{"special":{"dbtable":"remca_orders","key":"id","type":"orders","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getorderRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/order.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.order';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='orders_detail',
`table`='{"special":{"dbtable":"remca_orders_details","key":"id","type":"orders_details","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getorders_detailRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/orders_detail.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.orders_detail';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='main_category',
`table`='{"special":{"dbtable":"remca_main_categories","key":"id","type":"main_categories","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"state","core_alias":"alias","core_created_time":"null","core_modified_time":"null","core_body":"description","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"access","core_params":"params","core_featured":"null","core_metadata":"null","core_language":"language","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"asset_id"}}',
`router`='remcaHelperRoute::getmain_categoryRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/main_category.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.main_category';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='rent',
`table`='{"special":{"dbtable":"remca_rent","key":"id","type":"rent","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getrentRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/rent.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.rent';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='rent_request',
`table`='{"special":{"dbtable":"remca_rent_request","key":"id","type":"rent_request","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getrent_requestRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/rent_request.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.rent_request';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='rent_sal',
`table`='{"special":{"dbtable":"remca_rent_sal","key":"id","type":"rent_sal","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getrent_salRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/rent_sal.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.rent_sal';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='review',
`table`='{"special":{"dbtable":"remca_review","key":"id","type":"review","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"state","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getreviewRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/review.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.review';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='track_source',
`table`='{"special":{"dbtable":"remca_track_source","key":"id","type":"track_source","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::gettrack_sourceRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/track_source.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.track_source';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='users_wishlist',
`table`='{"special":{"dbtable":"remca_users_wishlist","key":"id","type":"users_wishlist","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getusers_wishlistRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/users_wishlist.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.users_wishlist';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='video_source',
`table`='{"special":{"dbtable":"remca_video_source","key":"id","type":"video_source","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getvideo_sourceRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/video_source.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.video_source';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='buying_request',
`table`='{"special":{"dbtable":"remca_buying_request","key":"id","type":"buying_request","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getbuying_requestRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/buying_request.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.buying_request';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='category',
`table`='{"special":{"dbtable":"remca_categories","key":"id","type":"categories","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getcategoryRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/category.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.category';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='const',
`table`='{"special":{"dbtable":"remca_const","key":"id","type":"const","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getconstRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/const.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.const';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='const_language',
`table`='{"special":{"dbtable":"remca_const_language","key":"id","type":"const_language","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getconst_languageRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/const_language.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.const_language';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='feature',
`table`='{"special":{"dbtable":"remca_feature","key":"id","type":"feature","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"state","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getfeatureRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/feature.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.feature';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='feature_house',
`table`='{"special":{"dbtable":"remca_feature_houses","key":"id","type":"feature_houses","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getfeature_houseRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/feature_house.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.feature_house';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='language',
`table`='{"special":{"dbtable":"remca_languages","key":"id","type":"languages","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"version","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getlanguageRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/language.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.language';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='Municipality',
`table`='{"special":{"dbtable":"remca_lmunicipalities","key":"id","type":"lmunicipalities","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"state","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"null","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getlmunicipalityRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/lmunicipality.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.lmunicipality';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='State',
`table`='{"special":{"dbtable":"remca_lstates","key":"id","type":"lstates","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"state","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"null","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getlstateRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/lstate.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.lstate';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='country',
`table`='{"special":{"dbtable":"remca_countries","key":"id","type":"countries","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"name","core_state":"state","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"null","core_ordering":"ordering","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getcountryRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/country.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.country';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='config',
`table`='{"special":{"dbtable":"remca_configs","key":"id","type":"configs","prefix":"remcaTable","config":"array()"},"common":{"dbtable":"#__core_content","key":"ucm_id","type":"Corecontent","prefix":"JTable","config":"array()"}}',
`rules`='',
`field_mappings`='{"special":[],"common":{"core_content_item_id":"id","core_title":"null","core_state":"null","core_alias":"null","core_created_time":"null","core_modified_time":"null","core_body":"null","core_hits":"null","core_publish_up":"null","core_publish_down":"null","core_access":"null","core_params":"null","core_featured":"null","core_metadata":"null","core_language":"null","core_images":"null","core_urls":"null","core_version":"null","core_ordering":"null","core_metakey":"null","core_metadesc":"null","core_catid":"null","core_xreference":"null","asset_id":"null"}}',
`router`='remcaHelperRoute::getconfigRoute',
`content_history_options`='{"formFile":"administrator\/components\/com_remca\/models\/forms\/config.xml","hideFields":["asset_id","checked_out","checked_out_time","version"],"ignoreChanges":["checked_out","checked_out_time","hits","version"],"convertToInt":["publish_up","publish_down","featured","ordering"],"displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE `type_alias`='com_remca.config';
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates to table `#__rem_configs`
--
UPDATE `#__content_types` SET 
`type_title`='RealEstateManagerCA Category',
`table`='Array',
`rules`='',
`field_mappings`='Array',
`router`='remcaHelperRoute::getCategoryRoute',
`content_history_options`=''
WHERE `type_alias`='com_remca.category';
