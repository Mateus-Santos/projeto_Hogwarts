<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/app.css">
    <script src="main.js"></script>
    <style>

    body{
        background-image: url("/imagens/login.png");
        background-repeat: no-repeat;
        background-size: 100%;
    }

    .div_login{
        position:absolute;
        left: 41%;
        top: 30%;
        width: 20%;     
        height: 30%;
        background-color:#E7DDF8;
        box-shadow: 0px 0px 25px purple;
        
    }
    .titulo{
        position: absolute;
        left: 38%;
        top: 10%;
        font-family:Georgia;
        text-align: center;
        font-size: 45pt;
        color:purple;
        text-shadow: 0px 0px 7px purple;

    }

    .info_login{
        position: absolute;
        left: 35%;
        font-size: 25pt;
        color:red;
        text-shadow: 0px 0px 2px black;
    }

    .bot_login{
        position: absolute;
        left: 15%;
        top: 10%;
        width: 72%;
    }
    
    </style>
</head>
<body>
    <h1 class="titulo">Seja Bem vindo!</h1>
    <div class="div_login">
    <form>
    <div class="bot_login">
    <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Usuario">
    <br>
    <input type="password" class="form-control mb-2 mr-sm-2" placeholder="Senha">
    <br>
    <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
    </div>
    </div>
</body>
</html>