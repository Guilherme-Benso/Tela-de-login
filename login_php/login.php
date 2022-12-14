<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        left: 0;
        top: 0;
        background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));

    }
    .container{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));

    }
    .box{
        display: flex;
        gap: 10px;
        height: 300px;
        width: 25vw;
        text-align: center;
        justify-content: center;
        background-color: rgba(0, 0, 0, 0.6);
        border-radius: 10px;
        color: white;
    }
    .box form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 10px;
    }
    .box input{
        padding: 15px;
        border-radius: 5px;
        border: none;
    }

    #button{
        background-color: dodgerblue;
        border: none;
        border-radius: 5px;
    }
    #button:hover{
        cursor: pointer;
        background-color: rgba(255, 255, 255, 0.4);
    }


</style>

<body>
<a href="home.php">Voltar</a>
    <div class="container">
        
        <div class="box">
            <form action="testlogin.php" method="POST">
                <h1>Login</h1>
                <input type="text" placeholder="Email" name="email">
                <input type="password" placeholder="Senha" name="senha">
                <input type="submit" value="Entrar" id="button" name="submit">
            </form>
        </div>
    </div>
</body>

</html>