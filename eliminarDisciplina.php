<?php 

include_once('conexao.php');

$CODIGO = $_GET['codigo'];

$sql_eliminar = mysqli_query($ligar, "DELETE from disciplina Where cod_disciplina='$CODIGO' ");

if($sql_eliminar==true){

    echo "<script>
    alert('Disciplina excluida com sucesso');
    window.location.href='listarDisciplina.php';

    </script> ";

}else{

    echo "<script>
    alert('Falha ao excluir disciplina');
    window.location.href='listarDisciplina.php';

    </script> ";
}

?>