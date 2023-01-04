<?php

require_once('conexao.php');

$nome_curso =$_POST['txt_nome_curso'];
$cod_departamento = $_POST['txt_cod_departamento'];




$sql_cadastro = mysqli_query($ligar, " INSERT INTO curso (nome, cod_departamento_FK)
 values('$nome_curso','$cod_departamento')" );

if($sql_cadastro==true)
{
echo "  <script>
alert('Curso Registrado Com Sucesso');
window.location.href='cadastroCurso.php';


</script>";

}
else{

    echo "  <script>
alert('Falha No Registro Do Curso');
window.location.href='cadastroCurso.php';
</script>";
}

?>