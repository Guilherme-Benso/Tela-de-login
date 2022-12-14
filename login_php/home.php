<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
    }
    .titulo{
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
        color: white;
    }
    .container{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
        color: white;
    }
    .box{
        background-color: rgba(0, 0, 0, 0.6);
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid dodgerblue;
        width: 30vh;
        height: 100px;
        border-radius: 8px;
        margin-bottom: 40px;
        gap: 8px;
    }
    .box a{
        color: white;
        padding: 5px;
        text-decoration: none;
        border: 3px solid dodgerblue;
        border-radius: 8px;
        height: 20px;
    }

    a:hover{
        background-color: dodgerblue;
    }
</style>
<body>
    <div class="titulo">
    <h1>Olá seja bem vindo</h1>
    </div>
    <div class="container">
    <div class="box">
        <a href="">login</a>
        <a href="">cadastre-se</a>
    </div>
    </div>
</body>
</html>