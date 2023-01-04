<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALUNO</title>
  
    <link rel="stylesheet" href="./style.css">
</head>
<body background="image2.jpg">
<h1> TELA ALUNO </h1>

<form method="POST" action="cadAluno.php">
            Nome: 
            <input type ="text" name="txt_nome_aluno" ><br><br>
           
            NUIT:
            <input type="text" name="txt_cpf_aluno"><br><br>
            Estado:
            <input type="number" name="txt_status_Aluno"><br><br>
            Sexo:
            <input type="text" name="txt_sexo_aluno"><br><br>
            Codigo do Curso:
            <input type="number" name="txt_cod_Curso"><br><br>
            Codigo da Turma:
            <input type="number" name="txt_cod_Turma"><br><br>
           
            Email:
            <input type="text" name="txt_Email_aluno"><br><br>
            Whatsapp:
            <input type="text" name="txt_whatsapp_aluno"><br><br>
         
    
    <br>
            <input type="submit" value="Cadastrar"><br>


</form>
<br>




<form action ="cadastroAluno.php" method="POST">
    <input type="text" name="nome" placeholder="Insira o nome do Aluno">

    <input type="submit"  value="Procurar">




</form>

<h3><a href="ListarAluno.php"> Lista Dos Alunos </a></h3>
<h3><a href="pesqAlunoPor.php"> Pesquisar Por... </a></h3>

<h1> Resultados</h1>

<table border = "2px">
    <thead>
    <th>NOME</th>
    
    <th>NUIT</th>
    <th>ESTADO</th>
    
    <th>SEXO</th>
    <th>CODIGO DE CURSO</th>
    <th>CODIGO DE TURMA</th>
    <th>EMAIL</th>
    <th>WHATSAPP</th>

    </thead>
    <tbody>

<?php

include_once('buscarAluno.php');
while($row= mysqli_fetch_array($sql_query)){
?>
    <tr>
        <td><?= $row['nome_al'] ?></td>
      
        <td><?= $row['nuit']?></td>
        <td><?= $row['estado'] ?></td>
        <td><?= $row['sexo']?></td>
        <td><?= $row['cod_curso_FK'] ?></td>
        <td><?= $row['cod_turma_FK']?></td>
       
        
        <td><?= $row['e_mail']?></td>
        <td><?= $row['whatsapp']?></td>
        
    </tr>

<?php }

?>


    </tbody>
</table>

<h1>Relacionamentos</h1>
<form action="cadRela_Alun_Disci.php" method="POST">
Codigo do Aluno:
<input type="number" name="txt_RelaCod_Aluno" placeholder="ID Aluno"></br>
Codigo da Disciplina:
<input type="number" name="txt_RelaCod_Disci" placeholder="ID Disciplina"></br>

    <input type="submit"  value="Associar">



</form>

<h3><a href="TelaPrincipal.php"> Voltar ao Sistema </a></h3>
</body>

</html>