<?php

namespace app\models;

use app\core\Model;

class Author extends Model
{
    public const TABLE = 'authors';

    public $name;
}