<?php 

include_once('conexao.php');

$RA = $_GET['codigo'];

$sql_eliminar = mysqli_query($ligar, "DELETE from aluno Where cod_aluno='$RA' ");

if($sql_eliminar==true){

    echo "<script>
    alert('Aluno excluido com sucesso');
    window.location.href='listarAluno.php';

    </script> ";

}else{

    echo "<script>
    alert('Falha ao excluir Aluno');
    window.location.href='listarAluno.php';

    </script> ";
}

?>