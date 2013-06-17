CREATE TABLE IF NOT EXISTS `PREFIX_russian_post` (
    `id_russian_post` INT(11) NOT NULL AUTO_INCREMENT,
    `id_state` INT(11) NOT NULL,
    `id_post_zone` INT(11) NOT NULL,
    `active` INT(11) NOT NULL,
    PRIMARY KEY (`id_russian_post`)
    ) ENGINE=ENGINE_TYPE DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PREFIX_russian_post_exclude_range` (
`id_russian_post_exclude_range` INT(11) NOT NULL AUTO_INCREMENT,
`id_carrier` INT(11) NOT NULL,
`start_zip` CHAR(6) NOT NULL,
`end_zip` CHAR(6) NOT NULL,
`active` INT(1) NOT NULL DEFAULT 1,
PRIMARY KEY(`id_russian_post_exclude_range`),
KEY `range` (`start_zip`, `end_zip`, `active`)
) ENGINE=ENGINE_TYPE DEFAULT CHARSET=utf8;