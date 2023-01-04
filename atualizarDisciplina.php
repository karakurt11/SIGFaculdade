
<?php

require_once('conexao.php');

$CODIGO = $_POST['codigo'];
$nome_disciplina =$_POST['txt_nome_disciplina'];
$cod_departamento = $_POST['txt_cod_departamento'];
$carga_horaria = $_POST['txt_carga_horaria'];

$descricao = $_POST['txt_descricao'];
$num_alunos = $_POST['txt_num_alunos'];




$sql_cadastro = mysqli_query($ligar, " UPDATE disciplina SET nome='$nome_disciplina', cod_departamento_FK='$cod_departamento',
 carga_horaria='$carga_horaria', descricao='$descricao', num_aluno='$num_alunos' WHERE cod_disciplina='$CODIGO' ");
 

if($sql_cadastro==true){
echo "  <script>
alert('Disciplina Atualizada Com Sucesso');
window.location.href='cadastroDisciplina.php';


</script>";

}
else{

    echo "  <script>
alert('Falha Ao Atualizar a Disciplina');
window.location.href='editarDisciplina.php';
</script>";
}

?>
