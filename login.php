<?php


include_once('conexao.php');

$usuario = $_POST['txt_usuario'];
$senha = $_POST['txt_senha'];


$sql_logar= mysqli_query($ligar, "SELECT *FROM tb_usuario WHERE usuario='$usuario' and senha=$senha");

if(mysqli_num_rows($sql_logar) !=0){
    header('location:TelaPrincipal.php');

}
else{
    echo "  <script>
    alert('Usuario nao cadastro');
    window.location.href='index.html';
    </script>";
}

?>