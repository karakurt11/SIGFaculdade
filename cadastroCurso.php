<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURSO</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body background="image3.png">
<h1> TELA CURSO </h1>

<form method="POST" action="cadCurso.php">
           
            Nome do Curso:
            <input type="text" name="txt_nome_curso"><br><br>
          
            Codigo do Departamento:
            <input type="number" name="txt_cod_departamento"><br><br>
            
    
    <br>
            <input type="submit" value="CADASTRAR CURSO"><br>


</form>
<br>




<form action ="cadastroCurso.php" method="POST">
    <input type="text" name="nome" placeholder="Insira o nome do Curso">

    <input type="submit"  value="Procurar Por Nome">




</form>

<h3><a href="ListarCurso.php"> Lista Dos Cursos </a></h3>


<h1> Resultados</h1>

<table border = "2px">
    <thead>
    
    <th>CODIGO DO CURSO</th>
    <th>NOME DO CURSO</th>
    <th>CODIGO DO DEPARTAMENTO</th>
   
   
    </thead>

    <tbody>

<?php

include_once('buscarCurso.php');
while($row= mysqli_fetch_array($sql_query)){
?>
    <tr>
        <td><?= $row['cod_curso'] ?></td>
        <td><?= $row['nome']?></td>
        <td><?= $row['cod_departamento_FK']?></td>
       
    
        
    </tr>

<?php }

?>


    </tbody>
</table>


<h3><a href="TelaPrincipal.php"> Voltar ao Sistema </a></h3>
</body>

</html>