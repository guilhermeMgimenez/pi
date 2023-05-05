<?php include_once "header.php";?>

<?php
$email = $_POST["email"];
$senha = $_POST["senha"];

// $senha = md5($senha);
$sql = "INSERT INTO tb_pei(email, senha) VALUES ('$email', '$senha')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);
header('location: pei.php');

if($dados->num_rows > 0){
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("location:verifica.php");
}else{
    header("location:pei.php?msg=invalido");
}

?>


<?php include_once "footer.php";?>