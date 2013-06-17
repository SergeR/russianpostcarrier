<?php
/**
 * Changes since 1.0.6
 *
 *  [*] id column renamed to id_russian_post
 */

if (!defined(_PS_VERSION_))
    exit;

/**
 *
 * @param type $module
 * @return boolean
 */
function upgrade_module_1_2($module) {

    $sql = 'ALTER TABLE `' . _DB_PREFIX_ . 'russian_post` CHANGE `id` `id_russian_post` INTEGER';

    if (!Db::getInstance()->execute($sql))
        return FALSE;

    return TRUE;
}