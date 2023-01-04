<?php 

include_once('conexao.php');

$CODIGO = $_GET['codigo'];

$sql_eliminar = mysqli_query($ligar, "DELETE from curso Where Cod_Curso='$CODIGO' ");

if($sql_eliminar==true){

    echo "<script>
    alert('Curso excluido com sucesso');
    window.location.href='listarCurso.php';

    </script> ";

}else{

    echo "<script>
    alert('Falha ao excluir Curso');
    window.location.href='listarCurso.php';

    </script> ";
}

?>