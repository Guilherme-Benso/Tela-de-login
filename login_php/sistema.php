<?php
session_start();
// print_r($_SESSION);

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    header("Location:login.php");
    unset($_SESSION["email"]);
    unset($_SESSION["senha"]);
} else {
    $logado = $_SESSION["email"];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Sistema</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        top: 0;
        left: 0;
    }

    .navbar{
        height: 70px;
        background-color: white !important;
        color: black;
        padding: 10px;
        width: 100%;
    }
    .containers{
        display: flex;
        justify-content: center;
        height: calc(100vh - 70px);
        width: 100% !important;
        background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
        margin: 0;
        padding: 0;
        color: white;
        font-size: 26px;
        padding-top: 15px;
    }

</style>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="logo">
            <h2>Guilherme Benso</h2>
        </div>
        <div class="conta">
            <a href="sair.php" class="btn btn-danger" >Sair</a>
        </div>
    </nav>
    <div class="containers">
    <?php
    echo "Bem vindo ". $logado ;
    ?>
    </div>
</body>

</html>