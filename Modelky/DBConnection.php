<?php

namespace App\Modelky;


class DBConnection
{

    public $pdo;

    static public function config()
    {
        return include __DIR__ . '/../config.php';
    }

    public function __construct()
    {

        $config = static::config();
        $dsn = 'mysql:dbname' . '=' . $config['db']['dbname'] . ';' . 'host' . '=' . $config['db']['host'];
        $dbh = new \PDO($dsn, $config['db']['user'], $config['db']['password']);
        $this->pdo = $dbh;
    }

    public function queryall($sql)
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }


    public function queryone($sql, $id)
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute([':id' => $id]);
        return $sth->fetch();
    }

    public function queryadd($sql, $values)
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute($values);
        header("Location: index.php");
    }

    public function queryedit($sql, $values, $id)
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute($values + [':id' => $id]);
        header("Location: index.php");
    }

    public function querydel($sql, $id)
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute([':id' => $id]);
        header("Location: index.php");
    }

} 