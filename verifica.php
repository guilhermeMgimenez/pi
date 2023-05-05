<?php include_once "header.php";?>

<?php
$usuario = $_POST["email"];
$senha = $_POST["senha"];

// $senha = md5($senha);
$sql = "SELECT * FROM tb_pei WHERE email = '$usuario' and senha = '$senha'";

$dados = mysqli_query($conexao, $sql);

if($dados->num_rows > 0){
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("location:legal.php");
}else{
    header("location:login.php?msg=invalido");
}

?>


<?php include_once "footer.php";?>