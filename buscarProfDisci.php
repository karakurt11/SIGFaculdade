
<?php

include_once("conexao.php");

if(!isset($_POST['nome'])){

    $_POST['nome']="";

    $buscar_nome=$_POST['nome'];
}

$buscar_nome = $_POST['nome'];


$SQL_READ= " SELECT P.nome_prof, 
D.nome, D.carga_horaria
from professor P
inner join prof_disc PD
on P.cod_professor = PD.cod_prof
inner join disciplina D
on D.cod_disciplina = PD.cod_disciplina
order by P.nome_prof;  ";

$sql_query = mysqli_query($ligar, $SQL_READ);



?>