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
        $sql = 'SELECT * FROM' . ' ' . static::$table . ' ' . 'WHERE id = :id';
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
        /*}else{
            $columns = [];
            foreach (static::$columns as $column) {

                $columns[] = $column . '=:' . $column;
            }

            $sql = 'UPDATE ' . static::$table . ' SET ' .
                implode(', ', $columns) . ' WHERE id = :id';
            $res = new DBConnection;
            $res->queryedit($sql, $values);
        }*/
    }

    public function update($id)
    {
        $columns = [];
        foreach (static::$columns as $column) {
            $tokens[] = ':' . $column;
            $values[':' . $column] = $this->$column;
            $columns[] = $column . '=:' . $column;
        }

        $sql = 'UPDATE ' . static::$table . ' SET ' .
            implode(', ', $columns) . ' WHERE id = :id';
        $res = new DBConnection;
        $res->queryedit($sql, $values, $id);
    }

    static public function delete($id)
    {

        $sql = 'DELETE FROM' . ' ' . static::$table . ' ' . 'WHERE id = :id';
        $res = new DBConnection;
        $res->querydel($sql, $id);
    }
}