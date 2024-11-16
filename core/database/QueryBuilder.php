<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $sql = "select * from {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insert($table, $parametros)
    {
         $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)', 
             $table,
             implode(', ', array_keys($parametros)),
             ': '.implode(', :', array_keys($parametros))
         );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parametros);
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function update($table, $parametros, $id)
    {
         $sql = sprintf('UPDATE %s SET %s WHERE id = %s;', 
             $table,
             implode(',', array_map(function($param){
                return $param . '=:'. $param;
             }, array_keys($parametros))),
             $id
         );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parametros);
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }
}