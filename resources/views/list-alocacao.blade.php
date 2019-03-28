<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Lista Alocação</title>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

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
        .tabela{
            position:absolute;
            top: 15%;
            left: 35%;
            width: 30%;
            background-color: #D3D3D3;
            box-shadow: 0px 0px 25px blue;
        }
        .titulo_registro{
            position:absolute;
            top: 5%;
            left: 15%;
            font-weight:bold;
            font-size:20pt ;
        }
        .subtitulo_registro{
            position:absolute;
            top: 20%;
            left: 20%;
            font-weight:bold;
            font-size:15pt;
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
            top: 88%;
        }
    </style>
   
</head>
<body>
<div class="tabela">
<br>
<br>
<br>
<br>
    <div>
        <p class="titulo_registro">Lista das Salas Alocadas</p>
    </div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Número</th>
                    <th scope="col">Funcionário</th>
                    <th scope="col">Departamento</th>     
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Gandalf</td>
                    <td>Magia Branca</td>     
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Saruman</td>
                    <td>Magia Negra</td>    
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Merlin</td>
                    <td>Itens Mágicos</td>     
                    </tr>
                </tbody>
            </table>
    <br>
    <br>
    <br>    
    <div class="botao">
        <button type="submit" class="btn btn-primary">VOLTAR!</button>
    </div>
</div>
        


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>