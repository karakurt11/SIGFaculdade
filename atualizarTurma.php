<?php

require_once('conexao.php');

$CODIGO = $_POST['codigo'];
$cod_curso =$_POST['txt_cod_curso'];
$periodo = $_POST['txt_periodo'];
$num_alunos = $_POST['txt_num_alunos'];

$data_inicio = $_POST['txt_data_inicio'];
$data_fim = $_POST['txt_data_fim'];




$sql_cadastro = mysqli_query($ligar, " UPDATE turma  set cod_curso='$cod_curso', periodo='$periodo', num_alunos='$num_alunos', 
data_inicio='$data_inicio', data_fim='$data_fim' where cod_turma ='$CODIGO'" );

if($sql_cadastro==true){
echo "  <script>
alert('Turma Atualizada Com Sucesso');
window.location.href='ListarTurma.php';


</script>";

}
else{

    echo "  <script>
alert('Falha Na Atualizacao Do Registro Da Turma');
window.location.href='editarTurma.php';
</script>";
}

?>