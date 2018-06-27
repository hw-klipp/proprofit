<?php

namespace app\models;

use app\core\CRUDInterface;
use app\core\Db;
use app\core\Model;

class Article extends Model
{
    public const TABLE = 'news';

    public $title;
    public $content;
    public $date;

    public static function latestNews()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . self::TABLE . ' ORDER BY date DESC LIMIT 3';
        return $db->query(
            $sql,
            self::class,
            []
        );
    }

}