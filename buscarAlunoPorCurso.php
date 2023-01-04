<?php

include_once("conexao.php");

if(!isset($_POST['nome'])){

    $_POST['nome']="";

    $buscar_nome=$_POST['nome'];
}

$buscar_nome = $_POST['nome'];


$SQL_READ= " SELECT A.nome_al, A.cod_curso_FK, B.nome from aluno A inner join curso B on
A.cod_curso_FK = B.cod_curso where B.cod_curso ='$buscar_nome' ";

$sql_query = mysqli_query($ligar, $SQL_READ);



?>