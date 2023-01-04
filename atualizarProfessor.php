
<?php

require_once('conexao.php');

$CODIGO = $_POST['codigo'];

$nome_professor =$_POST['txt_nome_professor'];

$cod_departamento = $_POST['txt_cod_departamento'];

$sql_cadastro = mysqli_query($ligar, " UPDATE professor SET nome_prof='$nome_professor',
 cod_departamento='$cod_departamento'  WHERE cod_professor='$CODIGO' ");
 

if($sql_cadastro==true){
echo "  <script>
alert('Professor Atualizado Com Sucesso');
window.location.href='cadastroProfessor.php';


</script>";

}
else{

    echo "  <script>
alert('Falha Ao Atualizar o Professor');
window.location.href='editarProfessor.php';
</script>";
}

?>
