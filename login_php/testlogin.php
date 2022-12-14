<?php
// print_r($_REQUEST);
if (isset($_POST["submit"]) && !empty($_POST["email"]) && !empty($_POST["senha"])) {
    include_once("conexao.php");
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    // testando se esta chegando a variavel
    echo ($email."e a senha é". $senha);

    $sql = "select * from usuarios where email = $email and senha = $senha";
}else {
    print_r("erro");
}

?>