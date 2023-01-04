<?php

require_once('conexao.php');

$nome_disciplina =$_POST['txt_nome_disciplina'];
$cod_departamento = $_POST['txt_cod_departamento'];
$carga_horaria = $_POST['txt_carga_horaria'];

$descricao = $_POST['txt_descricao'];
$num_alunos = $_POST['txt_num_alunos'];




$sql_cadastro = mysqli_query($ligar, " INSERT INTO disciplina (nome, cod_departamento_FK, carga_horaria, descricao, num_aluno)
 values('$nome_disciplina','$cod_departamento','$carga_horaria','$descricao','$num_alunos')" );

if($sql_cadastro==true){
echo "  <script>
alert('Disciplina Registrada Com Sucesso');
window.location.href='cadastroDisciplina.php';


</script>";

}
else{

    echo "  <script>
alert('Falha No Registro Da Disciplina');
window.location.href='cadastroDisciplina.php';
</script>";
}

?>