<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Principal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/app.css">
    <script src="main.js"></script>
    <style>
        body{
            background-image: URL("imagens/fundo2.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
        }

        .titulo{
            position:absolute;
            top: 5%;
            left: 25%;  
        }

        h1{
            color: black;
            text-shadow: 0px 0px 10px #FB0408;
            font-size: 30pt;
            text-align: center;

        }
        .principal{
            width: 500px;
            position:absolute;
            top:25%;
            left:40%;
        }
        p{
            
            color:white;
            text-shadow:0px 0px 10px red;
            font-size:20pt;

        }

        .botoes{
            top: 200%;
            left: 12%;
            width: 43%;
            position:absolute;

        }
    </style>
</head>
<body>
<div class="titulo">
        <h1>Bem-vindo ao Ministério da Magia de Hogwarts</h1>

</div>
<div class="principal">
       <p>Escolha uma dessas opções:</p>
       <div class="botoes">
       <div class="btn-group-vertical">
       <a class="btn btn-primary" href="/registro_funcionario" role="button">Cadastrar Funcionário</a>
       <br>
       <a class="btn btn-primary" href="/sala" role="button">Cadastrar Sala</a>
       <br>
       <a class="btn btn-primary" href="/registro_funcionario" role="button">Alocação de um Funcionário</a>
       <br>
       <a class="btn btn-primary" href="#" role="button">Cadastrar Departamento</a>
       </div>
       </div>
</div>
</body>
</html>