<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISCIPLINA</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body background="cadastroDisciplina.jpg">
<h1> TELA DISCIPLINA </h1>

<form method="POST" action="cadDisciplina.php">
            Nome da Disciplina:
            <input type="text" name="txt_nome_disciplina"><br><br>
            Codigo do Departamento:
            <input type="number" name="txt_cod_departamento"><br><br>
            Carga  Horaria
            <input type="number" name="txt_carga_horaria"><br><br>
            Descricao:
            <input type="text" name="txt_descricao"><br><br>
            Numero de Alunos:
            <input type="number" name="txt_num_alunos"><br><br>
           
    
    <br>
            <input type="submit" value="REGISTRAR DISCIPLINA"><br>


</form>
<br>




<form action ="cadastroDisciplina.php" method="POST">
    <input type="text" name="nome" placeholder="Insira o nome da Disciplina">

    <input type="submit"  value="Procurar">




</form>

<h3><a href="ListarDisciplina.php"> Lista Das Disciplinas </a></h3>


<h1> Resultados</h1>

<table border = "2px">
    <thead>
    
    <th>NOME DA DISCIPLINA</th>
    <th>CODIGO DO DEP</th>
    <th>CARGA HORARIA</th>
    <th>DESCRICAO</th>
    <th>NUMERO DE ALUNOS</th>
   
    </thead>

    <tbody>

<?php

include_once('buscarDisciplina.php');
while($row= mysqli_fetch_array($sql_query)){
?>
    <tr>
        <td><?= $row['nome'] ?></td>
        <td><?= $row['cod_departamento_FK']?></td>
        <td><?= $row['carga_horaria']?></td>
        <td><?= $row['descricao'] ?></td>
        <td><?= $row['num_aluno']?></td>
    
        
    </tr>

<?php }

?>


    </tbody>
</table>


<h3><a href="TelaPrincipal.php"> Voltar ao Sistema </a></h3>
</body>

</html>