
<?php

include_once('conexao.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTILIZADOR</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body background="ListarAluno.png">
    <center>
<h1>Lista dos Alunos </h1>
<hr>

<table rules="all">


<thead>
    <tr>
    <th>CODIGO</th> 
    <th>NOME</th>
    <th>NUIT</th>
    <th>STATUS</th>
    <th>SEXO</th>
    <th>CODIGO DE CURSO</th>
    <th>CODIGO DE TURMA</th>
    <th>EMAIL</th>
    <th>WHATSAPP</th>

    </tr>
</thead>

<tbody>
<?php
$sql_consulta =mysqli_query($ligar, "select * from aluno " );

while($dados = mysqli_fetch_array($sql_consulta)){
    ?>

    <tr>
    <td> <?=$dados[0] ?> </td>
    <td> <?=$dados[1] ?> </td>
    <td> <?=$dados[2] ?> </td>
    <td> <?=$dados[3] ?> </td>
    <td> <?=$dados[4] ?> </td>
    <td> <?=$dados[5] ?> </td>
    <td> <?=$dados[6] ?> </td>
    <td> <?=$dados[7] ?> </td>
    <td> <?=$dados[8] ?> </td>
   
    
    <td> <a href ="eliminarAluno.php?codigo=<?= $dados[0] ?> "> Eliminar </a> </td>
    <td> <a href ="editarAluno.php?codigo=<?= $dados[0] ?> "> Editar </a> </td>
    </tr>

   <?php } ?>


</tbody>

</table>
    </center>
    <h3><a href="cadastroAluno.php"> Voltar </a></h3>
    <h3><a href="TelaPrincipal.php"> Voltar ao Inicio </a></h3>
</body>
</html>