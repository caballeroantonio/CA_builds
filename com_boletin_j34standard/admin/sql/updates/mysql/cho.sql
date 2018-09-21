        
--
-- Unified Content Model (UCM) Content History Options (CHO) Updates com_boletin.category
--
UPDATE `#__content_types` SET 
`type_title`='Boletines Category',
`table`='Array',
`rules`='',
`field_mappings`='Array',
`router`='boletinHelperRoute::getCategoryRoute',
`content_history_options`=''
WHERE `type_alias`='com_boletin.category';