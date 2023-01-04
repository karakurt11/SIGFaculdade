<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TURMA</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body background="cadastroTurma.jpg">
<h1> TELA TURMA </h1>

<form method="POST" action="cadTurma.php">
            Codigo do Curso:
            <input type="number" name="txt_cod_curso"><br><br>
            Periodo:
            <input type="text" name="txt_periodo"><br><br>
            Numero de Alunos:
            <input type="number" name="txt_num_alunos"><br><br>
            Data de Inicio:
            <input type="date" name="txt_data_inicio"><br><br>
            Data de Termino:
            <input type="date" name="txt_data_fim"><br><br>
           
    <br>
            <input type="submit" value="REGISTRAR TURMA"><br>


</form>
<br>




<form action ="cadastroTurma.php" method="POST">
    <input type="number" name="nome" placeholder="Insira o numero da Turma">

    <input type="submit"  value="Procurar">




</form>

<h3><a href="ListarTurma.php"> Lista Das Turmas </a></h3>


<h1> Resultados</h1>

<table border = "2px">
    <thead>
    
    <th>CODIGO DA TURMA</th>
    <th>CODIGO DO CURSO</th>
    <th>PERIODO</th>
    <th>NUMERO DE ALUNOS</th>
    <th>DATA DE INICIO</th>
    <th>DATA DE FIM</th>
   
    </thead>

    <tbody>

<?php

include_once('buscarTurma.php');
while($row= mysqli_fetch_array($sql_query)){
?>
    <tr>
     

        <td><?= $row['cod_turma'] ?></td>
        <td><?= $row['cod_curso_Fk'] ?></td>
        <td><?= $row['periodo']?></td>
        <td><?= $row['num_alunos']?></td>
        <td><?= $row['data_inicio']?></td>
        <td><?= $row['data_fim'] ?></td>
       
    
        
    </tr>

<?php }

?>


    </tbody>
</table>


<h3><a href="TelaPrincipal.php"> Voltar ao Sistema </a></h3>
</body>

</html>