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

    public function criar($parametros){
        $sql = sprintf('INSERT INTO USERS (%s) VALUES (%s) ', implode(', ', array_keys($parametros)), ':' . implode(', :' , array_keys($parametros)) );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parametros);

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function atualizar($table, $id, $parametros){
        $sql = sprintf ('UPDATE %s SET %s WHERE id = %s',
        $table,
        implode(', ', array_map(function($parametros){
            return $parametros . ' = :' . $parametros;
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
    

    public function deletar($table, $id){
            $sql = sprintf ('DELETE FROM %s WHERE %s',
            $table,
            'id = :id'
        );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(compact('id'));


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}