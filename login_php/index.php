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
    }
    .container{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100vh;
        background: linear-gradient(45deg, cyan, yellow);
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
    <div class="container">
        <div class="box">
            <form action="">
                <h1>Login</h1>
                <input type="text" placeholder="Nome">
                <input type="password" placeholder="Senha">
                <input type="submit" value="Entrar" id="button">
            </form>
        </div>
    </div>
</body>

</html>