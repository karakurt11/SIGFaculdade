<?php

require_once('conexao.php');

$nome_professor =$_POST['txt_nome_professor'];
//$sobrenome_professor = $_POST['txt_sobrenome_professor'];

$cod_departamento = $_POST['txt_cod_departamento'];




$sql_cadastro = mysqli_query($ligar, " INSERT INTO professor (nome_prof, cod_departamento)
 values('$nome_professor','$cod_departamento')" );

if($sql_cadastro==true)
{
echo "  <script>
alert('Professor Registrado Com Sucesso');
window.location.href='cadastroProfessor.php';


</script>";

}
else{

    echo "  <script>
alert('Falha No Registro Do Professor');
window.location.href='cadastroProfessor.php';
</script>";
}

?>