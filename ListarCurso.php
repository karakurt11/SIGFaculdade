
<?php

include_once('conexao.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Curso</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body background="listarcurso.jpg">
    <center>
<h1>Lista dos Cursos</h1>
<hr>

<table rules="all">


<thead>
    <tr>
    <th>CODIGO </th> 
    <th>NOME DO CURSO </th>
    <th>CODIGO DO DEPARTAMENTO</th>
 
    </tr>
</thead>

<tbody>
<?php
$sql_consulta =mysqli_query($ligar, "select * from curso " );

while($dados = mysqli_fetch_array($sql_consulta)){
    ?>

    <tr>
    <td> <?=$dados[0] ?> </td>
    <td> <?=$dados[1] ?> </td>
    <td> <?=$dados[2] ?> </td>
    
  
    
    
    <td> <a href ="eliminarCurso.php?codigo=<?= $dados[0] ?> "> Eliminar </a> </td>
    <td> <a href ="editarCurso.php?codigo=<?= $dados[0] ?> "> Editar </a> </td>
    </tr>

   <?php } ?>


</tbody>

</table>
    </center>
    <h3><a href="cadastroCurso.php"> Voltar </a></h3>
    <h3><a href="TelaPrincipal.php"> Voltar ao Inicio </a></h3>
</body>
</html>