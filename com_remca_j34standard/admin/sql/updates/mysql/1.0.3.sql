DROP TABLE IF EXISTS `jos_rem_wa_title_conversations`;
CREATE TABLE IF NOT EXISTS `jos_rem_wa_title_conversations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL DEFAULT '',
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in jos_users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `remca_wa_title_conversation_createdby` FOREIGN KEY (`created_by`) REFERENCES `jos_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Table structure for table `jos_rem_wa_entry_conversations`
--

DROP TABLE IF EXISTS `jos_rem_wa_entry_conversations`;
CREATE TABLE IF NOT EXISTS `jos_rem_wa_entry_conversations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` MEDIUMTEXT NOT NULL,
  `phone` VARCHAR(50) NOT NULL DEFAULT '' COMMENT 'Teléfono',
  `id_wa_title_conversation` INT(10) UNSIGNED  NOT NULL DEFAULT '0' COMMENT 'Tema de la conversación Whatsapp',
  `catid` INT(10) UNSIGNED DEFAULT NULL COMMENT 'FK to categories in jos_categories', # NOT NULL DEFAULT '0'
  KEY `idx_catid` (`catid`),
  CONSTRAINT `remca_wa_entry_conversation_catid` FOREIGN KEY (`catid`) REFERENCES `jos_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `state` TINYINT(1) NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'FK to user in jos_users',
  KEY `idx_createdby` (`created_by`),
  CONSTRAINT `remca_wa_entry_conversation_createdby` FOREIGN KEY (`created_by`) REFERENCES `jos_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  `ordering` INT(11) NOT NULL DEFAULT '0',
  KEY `idx_state` (`state`),
  KEY `idx_ordering` (`ordering`),
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;