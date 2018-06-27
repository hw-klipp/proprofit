<?php

namespace app\core;

abstract class Model
{
    public const TABLE = '';

    public $id;

    public static function findAll()
    {
        $db = new Db();

        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class,
            []
        );
    }

    public static function findByID($id) {
        $db = new Db();

        $result =  $db->query(
            'SELECT * FROM ' . static::TABLE . ' WHERE id=' . $id,
            static::class,
            []
        );

        if(!empty($result)) {
            return $result[0];
        } else {
            return false;
        }
    }
}