<?php

include_once("conexao.php");

if(!isset($_POST['nome'])){

    $_POST['nome']="";

    $buscar_nome=$_POST['nome'];
}

$buscar_nome = $_POST['nome'];

$SQL_READ = "SELECT * FROM aluno WHERE nome_al LIKE '%".$buscar_nome."%'" ;


$sql_query = mysqli_query($ligar, $SQL_READ);



?>