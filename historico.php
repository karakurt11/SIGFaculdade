<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISTORICO</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body background="listarcurso.jpg">
    

    <marquee> <h1>Disciplinas Cursadas Por Um Aluno</h1> </marquee>
<form action ="historico.php" method="POST">
    <input type="text" name="nome" placeholder="ID do Aluno">

    <input type="submit"  value="PESQUISAR">




</form>

<h1> Resultados</h1>

<table border = "2px">
    <thead>
    <th  > NOME DO ALUNO</th>
    <th >SOBRENOME</th>
    <th> NOME DA DISCIPLINA </th>
    <th> NOTA </th>

    </thead>

    <tbody>

<?php

include_once('disciCursada.php');
while($row= mysqli_fetch_array($sql_query)){
?>
    <tr>
        <td><?= $row['Nome_Aluno'] ?></td>
        <td><?= $row['Sobrenome_Aluno'] ?></td>
        <td><?= $row['Nome_Disciplina'] ?></td>
        <td><?= $row['Nota'] ?></td>
        
    </tr>

<?php }

?>


    </tbody>
</table>



<h3><a href="TelaPrincipal.php"> Voltar ao Sistema </a></h3>
<h3><a href="ListarRelac.php"> Listar Relacionamento </a></h3>


</body>
</html>