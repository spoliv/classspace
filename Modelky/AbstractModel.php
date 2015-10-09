<?php

namespace App\Modelky;


abstract class AbstractModel
{

    static protected $table;
    static protected $columns;

    static public function findAll()
    {
        $sql = 'SELECT * FROM' . ' ' . static::$table;
        $res = new DBConnection;
        return $res->queryall($sql);
    }

    static public function findByPk($id)
    {
        $sql = 'SELECT * FROM' . ' ' . static::$table/*static::getTableName()*/ . ' ' . 'WHERE id = :id';
        $res = new DBConnection;
        return $res->queryone($sql, $id);
    }

    public function save()
    {
        $tokens = [];
        $values = [];
        foreach (static::$columns as $column) {

            $tokens[] = ':' . $column;
            $values[':' . $column] = $this->$column;
        }
        /*if (!isset($this->id)) {*/

        $sql = 'INSERT INTO' . ' ' . static::$table . '
            (' . implode(',', static::$columns) . ')
            VALUE(' . implode(',', $tokens) . ')';
        $res = new DBConnection;
        $res->queryadd($sql, $values);
    }
}