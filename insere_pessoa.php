<?php

   //Criacação de uma instância de objeto,
   require_once('conexao.php');

   //recuperando as informações que vieram do form via post, guardando em um ARRAY associativo
   $pessoa = array(':nome'  => $_POST['nome'],
                   ':idade' => $_POST['idade']);

   if(isset($_GET['id'])){ //atualização dos dados
     $pessoa['id'] = $_GET['id'];
     $sql = "UPDATE pessoa SET nome = :nome, idade = :idade WHERE id = :id";
   }else{
     $sql = "INSERT INTO pessoa(nome, idade) VALUES(:nome, :idade)";
   }
   //comando de inserção no banco de dados

   //os campos no VALUES :nome, :idade ... são parametros que serão informados no execute na linha abaixo
   //print_r($pessoa);

   //este comando informa ao PDO que o comando SQL precisa ser analisado e receberá parâmetros
   $query = $con->prepare($sql);

   //executa o comando SQL e informa quais parametros devem ser inseridos com o array PESSOA
   $resposta = $query->execute($pessoa);

   if($resposta==true){
     echo "Cadastrado com Sucesso";
   } else{
     echo "Erro ao cadastrar" . print_r($query->errorInfo());
   }
?>
