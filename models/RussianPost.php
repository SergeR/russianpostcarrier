<?php

class RussianPost extends ObjectModel {

    public $id;
    public $id_russian_post;
    public $id_state;
    public $id_post_zone;
    public $active;
    public $tableWithPrefix;
    protected $dbconn;
    public static $definition = array(
        'table' => 'russian_post',
        'primary' => 'id_russian_post',
        'multilang' => false,
        'fields' => array(
            'id_state' => array(
                'type' => ObjectModel::TYPE_INT,
                'required' => true
            ),
            'id_post_zone' => array(
                'type' => ObjectModel::TYPE_INT,
                'required' => true
            ),
            'active' => array(
                'type' => ObjectModel::TYPE_INT,
                'required' => false
            ),
        ),
    );

    public function __construct($id = null, $id_lang = null, $id_shop = NULL) {

        parent::__construct($id, $id_lang, $id_shop);

        $this->tableWithPrefix = _DB_PREFIX_ . RussianPost::$definition['table'];
    }

    public function dropTable() {

        $sql = "DROP TABLE IF EXISTS `{$this->tableWithPrefix}`;";

        if (!RussianPost::$db->execute($sql, false)) {
            return false;
        }

        return true;
    }

    public function getRpZone($addr) {

        if (!Country::containsStates($addr->id_country))
            return 0;

        if (!$addr->id_state)
            return 0;

        $row = RussianPost::$db->getRow("SELECT * FROM `{$this->tableWithPrefix}` WHERE `id_state` = {$addr->id_state} AND `active` = 1");

        if (!isset($row['id_post_zone']))
            return 0;

        return $row['id_post_zone'];

        //$row = $this->dbconn->getRow("SELECT ");
    }

}