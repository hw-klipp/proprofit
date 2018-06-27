<?php

namespace app\models;

use app\core\CRUDInterface;
use app\core\Db;
use app\core\Model;

class Article extends Model implements CRUDInterface
{
    public const TABLE = 'news';

    public $title;
    public $content;
    public $date;

    public static function latestNews()
    {
        $db = new Db();

        return $db->query(
            'SELECT * FROM ' . self::TABLE . ' ORDER BY date DESC LIMIT 3',
            self::class,
            []
        );
    }

    public function insert()
    {
        $db = new Db();
        $data = get_object_vars($this);

        $cols = [];
        $params = [];

        foreach ($data as $k => $v) {
            if('id' == $k) {
                continue;
            }

            if('date' == $k) {
                $cols[] = $k;
                $params[':' . $k] = date('Y-m-d H:i:s', time());
                continue;
            }

            $cols[] = $k;
            $params[':' . $k] = $v;
        }

        $sql = 'INSERT INTO ' . self::TABLE .
            ' ('. implode(',', $cols) .') ' .
            'VALUES ('. implode(',', array_keys($params)) .')';

        $db->execute($sql, $params);

        $this->id = $db->getLastId();
    }


    public function update()
    {
        
    }
}