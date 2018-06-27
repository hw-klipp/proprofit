<?php

namespace app\models;

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

        return $db->query(
            'SELECT * FROM ' . self::TABLE . ' ORDER BY date DESC LIMIT 3',
            self::class,
            []
        );
    }

}