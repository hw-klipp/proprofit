<?php

namespace app\models;

use app\core\Db;
use app\core\Model;

class Article extends Model
{
    public const TABLE = 'news';

    public $title;
    public $content;
    public $author_id;
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

    public function __get($name)
    {
        if($name == 'author') {
            if($this->author_id != 0) {
                $author = Author::findByID($this->author_id);
                return $author;
            }
        }

        return null;
    }

    public function __set($name, $value)
    {
        if('author' == $name) {
            $db = new Db();

            $author = new Author();
            $author->name = $value;
            $author->save();
            $this->author_id = $db->query(
                'SELECT * FROM authors WHERE name=:name',
                Author::class,
                [':name' => $value]
            )[0]->id;
        }
    }

}