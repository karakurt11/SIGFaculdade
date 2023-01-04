<?php

require_once('conexao.php');

$cod_curso =$_POST['txt_cod_curso'];
$periodo = $_POST['txt_periodo'];
$num_alunos = $_POST['txt_num_alunos'];
$data_inicio = $_POST['txt_data_inicio'];
$data_fim = $_POST['txt_data_fim'];




$sql_cadastro = mysqli_query($ligar, " INSERT INTO turma (cod_curso_Fk, periodo, num_alunos, data_inicio, data_fim)
 values('$cod_curso','$periodo','$num_alunos','$data_inicio','$data_fim')" );

if($sql_cadastro==true){
echo "  <script>
alert('Turma Registrada Com Sucesso');
window.location.href='cadastroTurma.php';


</script>";

}
else{

    echo "  <script>
alert('Falha No Registro Da Turma');
window.location.href='cadastroTurma.php';
</script>";
}

?>