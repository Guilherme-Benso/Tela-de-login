<?php
session_start();
// print_r($_REQUEST);
if (isset($_POST["submit"]) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once("conexao.php");
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    // testando se esta chegando a variavel
    // echo ($email."e a senha é". $senha);

    $sql = "SELECT * from usuarios where email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) < 1 ) {
        unset($_SESSION["email"]);
        unset($_SESSION["senha"]);
        header("Location: login.php");
    }
    else {
        $_SESSION["email"] = $email;
        $_SESSION["senha"] = $senha;
        header("Location:sistema.php");
    }
}else {
    header("Location: login.php");
}

?>