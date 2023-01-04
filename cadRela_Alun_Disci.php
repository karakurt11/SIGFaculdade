<?php

require_once('conexao.php');

$RelaCod_Aluno =$_POST['txt_RelaCod_Aluno'];
$RelaCod_Disci = $_POST['txt_RelaCod_Disci'];




$sql_cadastro = mysqli_query($ligar, " INSERT INTO aluno_disc (cod_aluno, cod_disciplina)
 values('$RelaCod_Aluno','$RelaCod_Disci')" );

if($sql_cadastro==true)
{
echo "  <script>
alert('Aluno associado Com Sucesso');
window.location.href='cadastroAluno.php';


</script>";

}
else{

    echo "  <script>
alert('Falha Na Associacao Do Aluno');
window.location.href='cadastroAluno.php';
</script>";
}

?>