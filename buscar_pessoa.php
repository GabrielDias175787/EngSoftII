<?php

    require_once 'conexao.php';

    $id  = $_GET['id'];
    $sql = "SELECT * FROM pessoa WHERE id = " . $id;

    $query = $con->query($sql);
    $registro = $query->fetch();

    require ('form_pessoa.php');
 ?>
