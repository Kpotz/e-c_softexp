<?php
namespace controllers{
  abstract Class Conexao{

    protected function conecta(){
      try{
        $con = new \PDO("pgsql:host=localhost;dbname=e_commerce", "postgres", "qwe123");
        return $con;
      }catch(PDOException $e){
        return $e->getMessage();
      }
    }
  }
}
 ?>
