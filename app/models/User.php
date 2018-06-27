<?php
namespace app\models;

use app\core\Model;

class User extends Model
{
    public const TABLE = 'users';

    public $name;
    public $email;

}