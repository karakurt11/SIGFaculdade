<?php 

include_once('conexao.php');

$CODIGO = $_GET['codigo'];

$sql_eliminar = mysqli_query($ligar, "DELETE from professor Where Cod_Professor='$CODIGO' ");

if($sql_eliminar==true){

    echo "<script>
    alert('Professor excluido com sucesso');
    window.location.href='listarProfessor.php';

    </script> ";

}else{

    echo "<script>
    alert('Falha ao excluir Professor');
    window.location.href='listarProfessor.php';

    </script> ";
}

?>