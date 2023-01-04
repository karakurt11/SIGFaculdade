<?php

require_once('conexao.php');

$RelaCod_Prof =$_POST['txt_RelaCod_Prof'];
$RelaCod_Disci = $_POST['txt_RelaCod_Disci'];





$sql_cadastro = mysqli_query($ligar, " INSERT INTO prof_disc (cod_prof, cod_disciplina)
 values('$RelaCod_Prof','$RelaCod_Disci')" );

if($sql_cadastro==true)
{
echo "  <script>
alert('Professor-Disciplina Associado Com Sucesso');
window.location.href='cadastroProfessor.php';



</script>";

}
else{

    echo "  <script>
alert('Falha Ao Associar Professor a Disciplina');
window.location.href='cadastroProfessor.php';
</script>";
}

?>