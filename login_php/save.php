<?php
    include_once("conexao.php");

    if (isset($_POST['update'])) {
        $id = $_POST["id"];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $data = $_POST['data'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

            $sql_update  = "UPDATE usuarios SET nome='$nome', senha='$senha' ,email='$email',telefone='$telefone' ,genero='$genero',data='$data' ,cidade='$cidade', estado='$estado', endereco='$endereco' WHERE id='$id'";

            $result = $conexao->query($sql_update);
    }

    header("Location: sistema.php");
