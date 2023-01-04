<?php

require_once('conexao.php');

$nome_aluno =$_POST['txt_nome_aluno'];
//$sobrenome_aluno = $_POST['txt_sobrenome_aluno'];
$cpf_aluno = $_POST['txt_cpf_aluno'];

$status_Aluno = $_POST['txt_status_Aluno'];
$cod_Turma = $_POST['txt_cod_Turma'];
$sexo_aluno = $_POST['txt_sexo_aluno'];
$cod_Curso = $_POST['txt_cod_Curso'];

//$nome_Pai = $_POST['txt_Nome_Pai'];
//$nome_Mae = $_POST['txt_Nome_Mae'];
$email_aluno = $_POST['txt_Email_aluno'];
$whatsapp_aluno = $_POST['txt_whatsapp_aluno'];



$sql_cadastro = mysqli_query($ligar, " INSERT INTO aluno (nome_al, nuit, estado, sexo, cod_curso_FK, cod_turma_FK, e_mail, whatsapp)
 values('$nome_aluno','$cpf_aluno','$status_Aluno','$sexo_aluno','$cod_Curso','$cod_Turma','$email_aluno','$whatsapp_aluno')" );

if($sql_cadastro==true){
echo "  <script>
alert('Aluno Cadastrado Com Sucesso');
window.location.href='cadastroAluno.php';


</script>";

}
else{

    echo "  <script>
alert('Falha No Cadastro Do Aluno');
window.location.href='cadastroAluno.php';
</script>";
}

?>