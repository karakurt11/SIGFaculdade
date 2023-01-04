<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PESQUISAS</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body background="listarcurso.jpg">
    
<p>
    <marquee><h1>Pesquisar Aluno por Curso</h1></marquee>
<form action ="pesqAlunoPor.php" method="POST">
    <input type="number" name="nome" placeholder="Pesquisar codigo do curso">

    <input type="submit"  value="PESQUISAR">




</form>

<h1> Resultados</h1>

<table class=" table-bordered table-dark" border = "2px">
    <thead>
    <th  > NOME DOS ALUNOS</th>
    <th >CODIGO DO CURSO</th>
    <th> NOME DO CURSO </th>

    </thead>

    <tbody>

<?php

include_once('buscarAlunoPorCurso.php');
while($row= mysqli_fetch_array($sql_query)){
?>
    <tr>
        <td><?= $row['nome_al'] //nome do aluno// ?></td>
        <td><?= $row['cod_curso_FK'] ?></td>
        <td><?= $row['nome'] ?></td>
        
    </tr>

<?php }

?>


    </tbody>
</table>

<marquee><h1>Pesquisar Aluno Por Codigo de Disciplina</h1></marquee>

<form action ="pesqAlunoPor.php" method="POST">
    <input type="number" name="nomecurso" placeholder="Pesquisar codigo da Disciplina">

    <input type="submit"  value="PESQUISAR">

</form>

<h1> Resultados</h1>

<table class=" table-bordered table-dark" border = "2px">
    <thead>
    <th  > ID</th>
    <th >NOME DO ALUNO</th>
    <th> NOME DA DISCIPLINA </th>
    <th> CODIGO DA DISCIPLINA </th>

    </thead>

    <tbody>

<?php

include_once('buscarAlunoPorDisciplina.php');
while($row= mysqli_fetch_array($sql_query)){
?>
    <tr>
         <td><?= $row['cod_aluno'] ?></td>
        <td><?= $row['nome_al'] ?></td>
        <td><?= $row['nome'] ?></td>
        <td><?= $row['cod_disciplina'] ?></td>
        
    </tr>

<?php }

?>


    </tbody>
</table>

<h3><a href="cadastroAluno.php"> Voltar </a></h3>
<h3><a href="TelaPrincipal.php"> Voltar ao Sistema </a></h3>


</body>
</html>