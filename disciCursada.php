<?php

include_once("conexao.php");

if(!isset($_POST['nome'])){

    $_POST['nome']="";

    $buscar_nome=$_POST['nome'];
}

$buscar_nome = $_POST['nome'];


$SQL_READ= " SELECT A.Nome_Aluno, A.Sobrenome_Aluno, D.Nome_Disciplina, DH.Nota 
from Aluno A 
 inner join Aluno_Disc AD
 on A.RA = AD.RA
 inner join Disciplina D
 on D.Cod_Disciplina = AD.Cod_Disciplina
 inner join Historico H 
 on A.RA = H.RA
 inner join Disc_Hist DH 
 on H.Cod_Historico = DH.Cod_Historico
 where A.RA like '%".$buscar_nome."%' ";

$sql_query = mysqli_query($ligar, $SQL_READ);



?>