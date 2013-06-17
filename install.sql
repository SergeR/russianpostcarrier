CREATE TABLE IF NOT EXISTS `_PREFIX_russian_post` (
    `id_russian_post` INT(11) NOT NULL AUTO_INCREMENT,
    `id_state` INT(11) NOT NULL,
    `id_post_zone` INT(11) NOT NULL,
    `active` INT(11) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=ENGINE_TYPE DEFAULT CHARSET=utf8;
