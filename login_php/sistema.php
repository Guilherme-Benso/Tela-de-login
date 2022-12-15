<?php
session_start();
include_once("conexao.php");
// print_r($_SESSION);

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION["email"]);
    unset($_SESSION["senha"]);
    header("Location:login.php");
}
    $logado = $_SESSION["email"];




    if (!empty($_GET["search"])) {
        $data = $_GET["search"];
        $sql = "SELECT * FROM usuarios where id like '%$data%' or nome like '%$data%' or email like '%$data%' order by id desc";
    }

else {
    $sql = "SELECT * from usuarios ORDER BY id desc";
}

$result = $conexao->query($sql);


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

    .navbar {
        height: 70px;
        background-color: white !important;
        color: black;
        padding: 10px;
        width: 100%;
    }

    .containers {
        display: flex;
        /* justify-content: center; */
        align-items: center;
        flex-direction: column;
        height: calc(100vh - 70px);
        width: 100% !important;
        background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        margin: 0;
        padding: 0;
        color: white;
        font-size: 26px;
        gap: 80px;
    }
    .table{
        width: 70%;
        font-size: 16px;
    }
    .status-user{
        display: flex;
        flex-direction: column;
        width: 90vh;
        gap: 10px;
        align-items: center;
    }
    .box-search{
        display: flex;
        gap: 10px;
        width: 90%;
    }
    
    
</style>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="logo">
            <h2>Guilherme Benso</h2>
        </div>
        <div class="conta">
            <a href="sair.php" class="btn btn-danger">Sair</a>
        </div>
    </nav>
    <div class="containers">
        <div class="status-user">


            <?php
            echo "Bem vindo " . $logado;

            ?> 
            <br>
            <div class="box-search">
                <input type="search" name="pesquisar" id="pesquisar" class="form-control" placeholder="Pesquisar" >
                <button class="btn btn-info" onclick="search_data()">Pesquisar</button>
            </div>
        </div>

        <div class="tabela">

            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Senha</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Data de nascimento</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Ações</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    while ($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $user_data["id"] . "</td>";
                        echo "<td>" . $user_data["nome"] . "</td>";
                        echo "<td>" . $user_data["email"] . "</td>";
                        echo "<td>" . $user_data["senha"] . "</td>";
                        echo "<td>" . $user_data["telefone"] . "</td>";
                        echo "<td>" . $user_data["genero"] . "</td>";
                        echo "<td>" . $user_data["data"] . "</td>";
                        echo "<td>" . $user_data["cidade"] . "</td>";
                        echo "<td>" . $user_data["estado"] . "</td>";
                        echo "<td>" . $user_data["endereco"] . "</td>";
                        echo "<td>" . "<a class='btn btn-warning' href='edit.php?id=$user_data[id]'>". "Editar"."</a>"."</td>";
                        echo "<td>" . "<a class='btn btn-danger' href='delete.php?id=$user_data[id]'>". "Excluir"."</a>"."</td>";
                        
                    }

                    ?>
                </tbody>
            </table>
            <a href="formulario.php" class="btn btn-success">Cadastrar</a>
        </div>
    </div>
</body>
<script>
    var search = document.querySelector("#pesquisar");

    search.addEventListener("keydown", function(event){
        if (event.key === "Enter") {
            search_data();
        }
});

    function search_data(){
        window.location = "sistema.php?sarch="+search.value;
    }
    </script>

</html>