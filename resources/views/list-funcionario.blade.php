<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/app.css">
    <script src="main.js"></script>
    <style>
    body{
        background-image: URL("imagens/tela_registro.jpg");
        background-repeat: no-repeat;
        background-size: 100%;


    }

    .div_centro{
        position: absolute;
        left: 35%;
        top: 26%;
        width: 30%;
        background-color:white;
        box-shadow: 0px 0px 25px purple;
    }
    .titulo{
        font-size: 40pt;
        position: absolute;
        left: 36%;
        top: 5%;
        color: red;
        text-shadow: 0px 0px 15px red;
    }
    
    </style>


</head>
<body>
<h1 class="titulo">Lista de Funcionários</h1>
<div class="div_centro">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Sala</th>
      <th scope="col">Sexo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Son Goku</td>
      <td>Sala do tempo</td>
      <td>Masculino</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Vegeta</td>
      <td>Sala da Bulma</td>
      <td>Masculino</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Kuririn</td>
      <td>Cemitério</td>
      <td>Masculino</td>
    </tr>

  </tbody>

</table>
</div>
</body>
</html>