<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{asset('css/app.css')}}" rel = "stylesheet">
    <link href="{{asset('css/style.css')}}" rel = "stylesheet">
    <link href="{{asset('css/side-bar.css')}}" rel = "stylesheet">
    <meta name="csrf-token" content = "{{csrf_token()}}">
    <style>
        .listas_tabelas{
            position: absolute;
            background-color: #1C1C1C;
            left: 23%;
            top: 30%;
            width: 70%;
            box-shadow: #8F0808 0px 0px 15px;

        }

        .titulo{
            position: absolute;
            left: 38%;
            text-shadow: #350105 0px 0px 3px;
            top: 17%;
            font-size: 40pt;
            color: #A70C19;
        }

        .tela_registro{
            position: absolute;
            color: #A70C19;
            font-size: 15pt;
            text-shadow: black 0px 0px 2px;
            background-color: #e0d9da;
            left: 35%;
            top: 30%;
            width: 50%;
            box-shadow: #8F0808 0px 0px 15px;
        }

        .imagem{
            width: 150px;
            height: 100px;
        }
    </style>
    <title></title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>

   <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Bem-Vindos</h3>
            </div>

            <ul class="list-unstyled components">
                <li @if($current == "principal") class = "active" @endif>
                    <a href="/">Página Inicial</a>
                </li>
                <li @if($current == "funcionarios") class = "active" @endif>
                    <a href="#funcionariosSubmenu"  data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Funcionários</a>
                    <ul class="collapse list-unstyled" id="funcionariosSubmenu">
                        <li>
                            <a href="{{route('funcionarios.create')}}">Registrar um novo funcionário</a>
                        </li>
                        <li>
                            <a href="{{route('funcionarios.index')}}">Lista de funcionários</a>
                        </li>
                        <li>
                            <a href="{{route('funcionarios.restaurar')}}">Restaurar funcionário excluido</a>
                        </li>
                        <li>
                            <a href="{{route('cargos.create')}}">Adiciona um novo cargo</a>
                        </li>
                        <li>
                            <a href="{{route('cargos.index')}}">Listar todos os cargos registrados</a>
                        </li>
                    </ul>
                </li>
                <li @if($current == "departamentos") class = "active" @endif >
                    <a href="#departamentosSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Departamentos</a>
                    <ul class="collapse list-unstyled" id="departamentosSubmenu">
                        <li>
                            <a href="{{route('departamentos.create')}}">Novo departamento</a>
                        </li>
                        <li>
                            <a href="{{route('departamentos.index')}}">Listar departamentos</a>
                        </li>
                    </ul>
                </li>
                <li @if($current == "salas") class = "active" @endif >
                    <a href="#salasSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Salas</a>
                    <ul class="collapse list-unstyled" id="salasSubmenu">
                        <li>
                            <a href="{{route('salas.create')}}">Nova Sala</a>
                        </li>
                        <li>
                            <a href="{{route('salas.index')}}">Listar salas</a>
                        </li>                                              
                    </ul>
                </li>
                <li @if($current == "sair") class = "active" @endif>
                    <a href="#sairSubmenu"  data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Sair</a>
                    <ul class="collapse list-unstyled" id="sairSubmenu">
                        <li>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class = "btn btn-danger">Sair</button>
                            </form>      
                        </li>
                    </ul>  
                </li>
            </ul>
            
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <!--
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div>
                    -->
                </div>
            </nav>

            @hasSection('body')
                 @yield('body')
            @endif
        </div>
    </div>
    <script src="{{asset('js/app.js')}}" type = "text/javascript"></script>
    <script src="{{asset('js/side-bar.js')}}" type = "text/javascript"></script>
 
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

</body>
</html>