<?php

require_once('conexao.php');

$CODIGO = $_POST['codigo'];
$nome_curso =$_POST['txt_nome_curso'];
$cod_departamento = $_POST['txt_cod_departamento'];




$sql_cadastro = mysqli_query($ligar, " UPDATE curso SET nome='$nome_curso', cod_departamento_FK='$cod_departamento'
 WHERE cod_curso='$CODIGO' " );

if($sql_cadastro==true)
{
echo "  <script>
alert('Registro Do Curso Atualizado Com Sucesso');
window.location.href='ListarCurso.php';


</script>";

}
else{

    echo "  <script>
alert('Falha Ao Atualizar O Registro Do Curso');
window.location.href='editarCurso.php';
</script>";
}

?>