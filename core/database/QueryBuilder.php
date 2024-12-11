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

    public function insert($table, $parametros)
    {
         $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)', 
             $table,
             implode(', ', array_keys($parametros)),
             ':'.implode(', :', array_keys($parametros))
         );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parametros);
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
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function delete($table, $id){
        $sql = sprintf('DELETE FROM %s WHERE %s',
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

    // public function join($author)
    // {
    //     $sql = sprintf('SELECT users.name FROM users INNER JOIN posts ON %s = users.id',
    //                     $author
    //     );

    //     echo "Estou na join";

    //     try {
    //         $stmt = $this->pdo->prepare($sql);
    //         $stmt->execute();
    //         echo $stmt->fetchAll(PDO::FETCH_CLASS);
    //         return $stmt->fetchAll(PDO::FETCH_CLASS);

    //     } catch (Exception $e) {
    //         die($e->getMessage());
    //     }
    // }

    public function selectOne($table, $id){
        $sql = "select * from {$table} where id= {$id}";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } 
            catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function selectAll($table, $inicio = null, $rows_count = null)
    {
        $sql = "select * from {$table}";
        if($inicio >= 0 && $rows_count > 0){
            $sql .= " LIMIT {$inicio}, {$rows_count}";
        }
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectAllList($table, $take = null, $skip = null)
{
    $sql = "SELECT * FROM {$table}";
    
    if (!is_null($take) && !is_null($skip)) {
        $sql .= " LIMIT :skip, :take";
    }

    try {
        $stmt = $this->pdo->prepare($sql);

        if (!is_null($take) && !is_null($skip)) {
            $stmt->bindValue(':skip', $skip, PDO::PARAM_INT);
            $stmt->bindValue(':take', $take, PDO::PARAM_INT);
        }

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

    public function countAll($table)
    {
        $sql = "select COUNT(*) from {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return intval( $stmt->fetch(PDO::FETCH_NUM)[0]);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function verificaLogin($email, $senha)
    {
        $sql = sprintf('SELECT * from users WHERE email = :email AND password = :password');

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['email'=>$email,
                 'password'=>$senha]);

            $user = $stmt->fetch(PDO::FETCH_OBJ);
                 
            return $user;
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectAllWhithSearch($table, $column, $search, $take, $skip)
    {
        $sql = "select * from {$table} WHERE {$column} LIKE '%{$search}%' LIMIT {$take} OFFSET {$skip}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function countWithSearch($table,$column, $search)
    {
        $sql = "SELECT COUNT(*) FROM {$table} WHERE {$column} LIKE '%{$search}%'";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return intval($stmt->fetch(PDO::FETCH_NUM)[0]);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function count($table)
    {
        $sql = "SELECT COUNT(*) FROM {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return intval($stmt->fetch(PDO::FETCH_NUM)[0]);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectWithOrder($table, $param)
    {
        $sql = "select * from {$table} order by {$param} DESC";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    

}