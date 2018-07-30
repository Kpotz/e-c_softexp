<?php
namespace controllers{

  include("Conexao.php");

  class Vendas extends Conexao{
    public function finalizar(){
      global $app;
      $dados = json_decode($app->request->getBody(), true);
      $dados = (sizeof($dados)==0)? $_POST : $dados;
      $keys = array_keys($dados);
      $sth = $this->conecta()->prepare("INSERT INTO sales
        (date, description, freight)
        VALUES (:date, :description, :freight)
        RETURNING id");
      $sth ->bindValue(':date',$dados['date']);
      $sth ->bindValue(':description',$dados['description']);
      $sth ->bindValue(':freight',$dados['freight']);

      $sth->execute();
      $data = $sth->fetch();
      $lastId = $data[0];

      unset($dados['date']);
      unset($dados['description']);
      unset($dados['freight']);

      $this->vincularVinho($lastId, $dados['vinhos']);

      $app->render('default.php',["data"=>['id'=>$lastId]],200);
    }

    private function vincularVinho($idVenda, $dados){
      $quantidade_vinhos = count($dados);
      for($i=0; $i<$quantidade_vinhos; $i++){
        $vinhos = $dados[$i];
        $keys = array_keys($vinhos);

        $sth = $this->conecta()->prepare("INSERT INTO sales_has_wines
          (sales_id ,".implode(',', $keys).")
          VALUES (:sales_id, :".implode(",:", $keys).")
          RETURNING id");
        $sth ->bindValue(':sales_id', $idVenda);
        foreach ($vinhos as $key => $value) {
          $sth ->bindValue(':'.$key,$value);
        }
        $sth->execute();
      }
    }
  }
}
 ?>
