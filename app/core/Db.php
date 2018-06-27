<?php

namespace app\core;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $data = include CONF . 'db.php';
        $this->dbh = new \PDO(
            "mysql:host={$data['host']}; dbname={$data['dbname']}",
            $data['login'],
            $data['password']
        );
    }

    public function query($sql, $class, $data = [])
    {
        $sth = $this->dbh->prepare($sql);

        if($sth->execute($data)) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }

        return false;
    }

    public function execute($sql, $data = [])
    {
        return $this->dbh->prepare($sql)->execute($data);
    }
}