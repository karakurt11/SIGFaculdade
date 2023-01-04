<?php

require_once('conexao.php');

$RA =$_POST['codigo'];
$nome_aluno =$_POST['txt_nome_aluno'];

$cpf_aluno = $_POST['txt_cpf_aluno'];

$status_Aluno = $_POST['txt_status_Aluno'];
$cod_Turma = $_POST['txt_cod_Turma'];
$sexo_aluno = $_POST['txt_sexo_aluno'];
$cod_Curso = $_POST['txt_cod_Curso'];


$email_aluno = $_POST['txt_Email_aluno'];
$whatsapp_aluno = $_POST['txt_whatsapp_aluno'];



$sql_atualizar = mysqli_query($ligar, " UPDATE aluno set nome_al='$nome_aluno', nuit='$cpf_aluno', 
estado='$status_Aluno', sexo='$sexo_aluno', cod_curso_FK='$cod_Curso', cod_turma_FK='$cod_Turma', 
e_mail='$email_aluno', whatsapp='$whatsapp_aluno' where cod_aluno='$RA' ");

if($sql_atualizar==true){
echo "  <script>
alert('Aluno Atualizado Com Sucesso');
window.location.href='listarAluno.php';


</script>";

}
else{

    echo "  <script>
alert('Falha Na Atualizacao Do Aluno');
window.location.href='editarAluno.php';
</script>";
}

?>