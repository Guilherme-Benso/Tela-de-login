<?php

if (isset($_POST['enviar'])) {
    include_once ('conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $data = $_POST['data-nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, telefone, genero, data, cidade, estado) 
VALUES ('$nome', '$email','$telefone','$genero','$data','$cidade','$estado','$endereco');");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        width: 100%;
        background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
    }

    .box {
        display: flex;
        justify-content: center;
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        border-radius: 10px;
        padding: 15px;
        height: 650px;
        width: 50vh;
        align-items: center;
    }

    .box form {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
    }

    .box fieldset {
        display: flex;
        flex-direction: column;
        gap: 25px;
        height: 600px;
        width: 100%;
        border: 3px solid dodgerblue;
    }

    .box legend {
        border: 1px solid dodgerblue;
        padding: 12px;
        background-color: dodgerblue;
        text-align: center;
        border-radius: 8px;
        font-size: 15px;
        margin-bottom: 15px;
    }

    .input-box {
        position: relative;
    }

    /* .input-box input{
        color: white;
    } */
    .radio {
        margin-top: -30px;
    }

    .input-user {
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        width: 100%;
        letter-spacing: 2px;
        color: white;
    }


    .label-input {
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5s;
    }

    #botao {
        height: 40px;
        border: none;
        background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
        color: white;
        border: none;
        border-radius: 10px;
        margin-top: 20px;
        font-size: 16px;
    }

    #botao:hover {
        cursor: pointer;
    }

    .input-user:focus~.label-input,
    .input-user:valid~.label-input {
        top: -20px;
        font-size: 12px;
        color: dodgerblue;
    }

    #data-nascimento {
        border: none;
        padding: 8px;
        border-radius: 10px;
        width: 40%;
        background-color: white;
        color: black;
    }

    .input-data {
        display: flex;
        align-items: center;
        height: 30px;
        width: 100%;
        gap: 25px;
    }
</style>

<body>
    <div class="container">
        <div class="box">
            <form action="formulario.php" method="POST">
                <fieldset>
                    <legend> <b>Formulário de cliente</b> </legend>
                    <div class="input-box">
                        <input type="text" name="nome" id="nome" class="input-user" required>
                        <label class="label-input" for="nome">Nome completo</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="email" id="email" class="input-user" required>
                        <label class="label-input" for="nome">Email</label>
                    </div>
                    <div class="input-box">
                        <input type="tel" name="telefone" id="telefone" class="input-user" required>
                        <label class="label-input" for="nome">Telefone</label>
                    </div>
                    <p>Sexo:</p>
                    <div class="radio">
                        <input type="radio" name="genero" id="feminino" value="feminino" class="radio" required>
                        <label for="feminino">Feminino</label>
                        <br>
                        <input type="radio" name="genero" id="masculino" value="masculino" class="radio" required>
                        <label for="masculino">Masculino</label>
                        <br>
                        <input type="radio" name="genero" id="outro" value="outro" class="radio" required>
                        <label for="outro">Outro</label>
                        <br>
                    </div>
                    <div class="input-data">
                        <label for="data-nascimento">
                            <p>Data de Nascimento:</p>
                        </label>
                        <input type="date" name="data-nascimento" id="data-nascimento" class="input-user" required>
                    </div>

                    <div class="input-box">
                        <input type="text" name="cidade" id="cidade" class="input-user" required>
                        <label class="label-input" for="cidade">Cidade</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="estado" id="estado" class="input-user" required>
                        <label class="label-input" for="estado">Estado</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="endereco" id="endereco" class="input-user" required>
                        <label class="label-input" for="endereco">Endereço</label>
                    </div>
                    <input type="submit" value="Enviar" id="botao" name="enviar">

                </fieldset>
            </form>
        </div>

    </div>
</body>

</html>