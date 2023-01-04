<?php

include_once('conexao.php');
$CODIGO =$_GET['codigo'];

$sql_consulta = mysqli_query($ligar, "SELECT *FROM turma WHERE cod_turma='$CODIGO' ");

$dados = mysqli_fetch_array($sql_consulta);




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Turma</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body background="listarcurso.jpg">
<h1> TELA EDITAR TURMA </h1>

<form method="POST" action="atualizarTurma.php">

    <input type="hidden" name = "codigo" value='<?= $dados[0] ?>'>

             Codigo do Curso:
            <input type="number" name="txt_cod_curso" value='<?= $dados[1] ?>'><br><br>
            Periodo:
            <input type="text" name="txt_periodo" value='<?= $dados[2] ?>'><br><br>
            Numero de Alunos:
            <input type="number" name="txt_num_alunos" value='<?= $dados[3] ?>'><br><br>
           
            Data de Inicio:
            <input type="date" name="txt_data_inicio" value='<?= $dados[4] ?>'><br><br>
            Data de Termino:
            <input type="date" name="txt_data_fim" value='<?= $dados[5] ?>'><br><br>
           


    
            
         
    
    <br>
            <input type="submit" value="ACTUALIZAR"><br>


</form>
<br>






   


<h3><a href="ListarTurma.php"> Voltar  </a></h3>
<h3><a href="TelaPrincipal.php"> Voltar ao Sistema </a></h3>
</body>

</html>