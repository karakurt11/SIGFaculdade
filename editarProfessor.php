<?php

include_once('conexao.php');
$CODIGO =$_GET['codigo'];

$sql_consulta = mysqli_query($ligar, "SELECT *FROM professor WHERE cod_professor='$CODIGO' ");

$dados = mysqli_fetch_array($sql_consulta);




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar PROFESSOR</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body background="listarcurso.jpg">
<h1> TELA EDITAR PROFESSOR </h1>

<form method="POST" action="atualizarProfessor.php">

    <input type="hidden" name = "codigo" value='<?= $dados[0] ?>'>
            Nome do Professor:
            <input type="text" name="txt_nome_professor" value='<?= $dados[1] ?>'><br><br>
            Codigo do Departamento:
            <input type="number" name="txt_cod_departamento" value='<?= $dados[2] ?>'><br><br>
    
            
         
    
    <br>
            <input type="submit" value="ACTUALIZAR"><br>


</form>
<br>






   



<h3><a href="TelaPrincipal.php"> Voltar ao Sistema </a></h3>
</body>

</html>