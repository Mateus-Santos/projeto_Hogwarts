<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro Funcionario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/app.css">
    <script src="main.js"></script>
    <style>
        body{
            background-image:url("imagens/tela_registro.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
        }
        .div_principal{
            position: absolute;
            top: 2%;
            left: 34%;
        }
        .titulo_principal{
            font-family:Georgia;
            text-align: justify;
            font-size: 45pt;
            color:#AD0F12;
            text-shadow: 0px 0px 2px #BC2123;

        }

        .registro{
            position:absolute;
            top: 15%;
            left: 35%;
            width: 30%;
            background-color: #C5BEC5;
            box-shadow: 0px 0px 25px red;
        }

        .titulo_registro{
            position:absolute;
            left: 30%;
            font-weight:bold;
            font-size:30pt ;
        }

        .texto_registro{
            font-size:15pt;
            color:black;
            font-weight:bold;
            text-indent: 5px;
        }
        .botao{
            position:absolute;
            left: 41%;
            top: 92% ;


        }

    </style>
</head>
<body>
<div class="div_principal">
<h1 class="titulo_principal">Realize o cadastro:</h1>
</div>
<div class="registro">
<p class="titulo_registro">Cadastre-se</p>
<form>
  <div class="form-group">
    <br>
    <br>
    <br>
    <br>
    <label class="texto_registro" for="nome_completo">Escreva seu nome completo:</label>
    <input type="email" class="form-control" id="nome_completo" placeholder="nome@exemplo.com">
  </div>
  <div class="form-group">
    <label class="texto_registro" for="sexo">Escolha seu sexo:</label>
    <select class="form-control" id="sexo">
      <option>...</option>
      <option>Masculino</option>
      <option>Feminino</option>
      <option>Outro</option>
    </select>
    <div class="form-group">
    <br>
    <label class="texto_registro" for="endereco">Escreva seu endereço:</label>
    <input type="text" class="form-control" id="endereco">
    </div>
    <div class="form-group">
    <label class="texto_registro" for="foto">Mande uma foto (poderia ser um gif, né?)</label>
    <input type="file" class="form-control-file" id="foto">
    </div>
    <div class="form-group">
    <label class="texto_registro" for="rub">RUB (Registro Único do Bruxo)</label>
    <input type="text" class="form-control" id="rub">
    <br>
    <br>
    <div class="botao">
    <button type="submit" class="btn btn-primary">PRONTO</button>
    </div>
    </div>
    
</form>
</div>
</body>
</html>