<?php

namespace app\core;

abstract class Model implements CRUDInterface
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

        $sql = 'INSERT INTO ' . static::TABLE .
            ' ('. implode(',', $cols) .') ' .
            'VALUES ('. implode(',', array_keys($params)) .')';


        if($db->execute($sql, $params)) {
            $this->id = $db->getLastId();
            return true;
        } else {
            return false;
        }
    }


    public function update()
    {
        $db = new Db();
        $data = get_object_vars($this);

        $params = [];
        $vals = [];
        $str = '';

        foreach ($data as $k => $v) {
            if('id' == $k) {
                continue;
            }

            if('date' == $k) {
                $params[':' . $k] = date('Y-m-d H:i:s', time());
                $vals[$k] = ':' . $k;
                continue;
            }

            $params[':' . $k] = $v;
            $vals[$k] = ':' . $k;
        }


        foreach($vals as $k => $v) {
            $str .= $k . '=' . $v . ', ';
        }

        $str = substr($str, 0, strlen($str)-2);

        $sql = 'UPDATE ' . static::TABLE . ' SET '. $str .' WHERE id=' . $this->id;

        return $db->execute($sql, $params);
    }

    public function save()
    {
        if(self::findByID($this->id)) {
            return $this->update();
        }

        return $this->insert();
    }

    public function delete()
    {
        $db = new Db();
        $table = ':' . static::TABLE;
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=:id';
        $params = [':id' => $this->id];
        return $db->execute($sql, $params);
    }

}