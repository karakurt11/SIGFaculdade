<?php

include_once('conexao.php');
$CODIGO =$_GET['codigo'];

$sql_consulta = mysqli_query($ligar, "SELECT *FROM disciplina WHERE cod_disciplina='$CODIGO' ");

$dados = mysqli_fetch_array($sql_consulta);




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar DISCIPLINA</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body background="listarcurso.jpg">
<h1> TELA EDITAR DISCIPLINA </h1>

<form method="POST" action="atualizarDisciplina.php">

    <input type="hidden" name = "codigo" value='<?= $dados[0] ?>'>
            Nome da Disciplina:
            <input type="text" name="txt_nome_disciplina" value='<?= $dados[1] ?>' ><br><br>
            Codigo do Departamento:
            <input type="number" name="txt_cod_departamento" value='<?= $dados[2] ?>'><br><br>
            Carga  Horaria
            <input type="number" name="txt_carga_horaria" value='<?= $dados[3] ?>'><br><br>
            Descricao:
            <input type="text" name="txt_descricao" value='<?= $dados[4] ?>'><br><br>
            Numero de Alunos:
            <input type="number" name="txt_num_alunos" value='<?= $dados[5] ?>'><br><br>
           
    
            
         
    
    <br>
            <input type="submit" value="ACTUALIZAR"><br>


</form>
<br>






   



<h3><a href="TelaPrincipal.php"> Voltar ao Sistema </a></h3>
</body>

</html>