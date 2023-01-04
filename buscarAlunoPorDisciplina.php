<?php

include_once("conexao.php");

if(!isset($_POST['nomecurso'])){

    $_POST['nomecurso']="";

    $buscar_nome=$_POST['nomecurso'];
}

$buscar_nome = $_POST['nomecurso'];


$SQL_READ= "SELECT A.cod_aluno, A.nome_al, DI.nome, DI.cod_disciplina from aluno A inner join aluno_disc CD on
A.cod_aluno = CD.cod_aluno
 inner join disciplina DI
on DI.cod_disciplina= CD.cod_disciplina where DI.cod_disciplina='$buscar_nome' ";

$sql_query = mysqli_query($ligar, $SQL_READ);



?>