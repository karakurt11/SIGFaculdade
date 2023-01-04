<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFESSOR</title>
    
    <link rel="stylesheet" href="./style.css">
</head>
<body background="cadastroProfessor.jpg">
<h1> TELA PROFESSOR </h1>

<form method="POST" action="cadProfessor.php">
            Nome do Professor:
            <input type="text" name="txt_nome_professor"><br><br>
            
          
            Codigo do Departamento:
            <input type="number" name="txt_cod_departamento"><br><br>
            
    
    <br>
            <input type="submit" value="CADASTRAR PROFESSOR"><br>


</form>
<br>




<form action ="cadastroProfessor.php" method="POST">
    <input type="text" name="nome" placeholder="Insira o nome do Professor">

    <input type="submit"  value="Procurar Por Nome">




</form>

<h3><a href="ListarProfessor.php"> Lista Dos Professores </a></h3>


<h1> Resultados</h1>

<table border = "2px">
    <thead>
    <th>CODIGO-PROFESSOR</th>
    <th>NOME DO PROFESSOR</th>
 
  
    <th>CODIGO DO DEPARTAMENTO</th>
   
   
    </thead>

    <tbody>

<?php

include_once('buscarProfessor.php');
while($row= mysqli_fetch_array($sql_query)){
?>
    <tr>
        <td><?= $row['cod_professor'] ?></td>
        <td><?= $row['nome_prof'] ?></td>
       
        <td><?= $row['cod_departamento'] ?></td>
     
    
        
    </tr>

<?php }

?>


    </tbody>
</table>

<h1>Relacionamentos</h1>
<form action="cadRela_Prof_Disci.php" method="POST">
Codigo do Professor:
<input type="number" name="txt_RelaCod_Prof" placeholder="ID Professor"></br>
Codigo da Disciplina:
<input type="number" name="txt_RelaCod_Disci" placeholder="ID Disciplina"></br>

    <input type="submit"  value="Associar">


    

</form>

<h1>Disciplinas Ministradas</h1>


<h1> Resultados</h1>

<table border = "2px">
    <thead>
    
    <th>NOME DO PROFESSOR</th>
  
    <th>NOME DA DISCIPLINA</th>
    
   
   
    </thead>

    <tbody>

<?php

include_once('buscarProfDisci.php');
while($row= mysqli_fetch_array($sql_query)){
?>
    <tr>
        <td><?= $row['nome_prof'] ?></td>
       
        <td><?= $row['nome']?></td>
   
     
    
        
    </tr>

<?php }

?>


    </tbody>
</table>


<h3><a href="TelaPrincipal.php"> Voltar ao Sistema </a></h3>
</body>

</html>