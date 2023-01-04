<?php

include_once('conexao.php');
$RA =$_GET['codigo'];

$sql_consulta = mysqli_query($ligar, "SELECT *FROM aluno WHERE cod_aluno='$RA' ");

$dados = mysqli_fetch_array($sql_consulta);




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body background="listarcurso.jpg">
<h1> TELA EDITAR ALUNO </h1>

<form method="POST" action="atualizarAluno.php">

            <input type="hidden" name = "codigo" value='<?= $dados[0] ?>'>
            Nome: 
            <input type ="text" name="txt_nome_aluno" value='<?= $dados[1] ?>' ><br>

            NUIT:
            <input type="text" name="txt_cpf_aluno" value='<?= $dados[2] ?>'><br>
            Status:
            <input type="number" name="txt_status_Aluno" value='<?= $dados[3] ?>'><br>
            Sexo:
            <input type="text" name="txt_sexo_aluno" value='<?= $dados[4] ?>'><br>
            Codigo do Curso:
            <input type="number" name="txt_cod_Curso" value='<?= $dados[5] ?>'><br>
            Codigo da Turma:
            <input type="number" name="txt_cod_Turma" value='<?= $dados[6] ?>'><br>
           Email:
            <input type="text" name="txt_Email_aluno" value='<?= $dados[7] ?>'><br>
            Whatsapp:
            <input type="text" name="txt_whatsapp_aluno" value='<?= $dados[8] ?>'><br>
         
    
    <br>
            <input type="submit" value="ACTUALIZAR"><br>


</form>
<br>







   



<h3><a href="TelaPrincipal.php"> Voltar ao Sistema </a></h3>
</body>

</html>