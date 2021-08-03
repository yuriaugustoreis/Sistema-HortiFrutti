<?php
    session_start();

    if(!isset($_SESSION["autorizado"])){
        header("location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- icone -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Título -->
    <title>Hortifrutti - Sistema</title>
    <!-- JS altera e remover -->
    <script src="alterar_remover.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>

        @media only screen and (max-width: 600px) {

    #menu_superior {
        display: auto;
    }

    #collapsibleNavbar-right {
        text-align: center;
    }

    #pesquisar {
        text-align: center;
    }

    #btn_pesquisar {
        text-align: center;
        width: 100%;
        
    }

    #form_pesquisar{
        text-align: center;
    }

}
    </style>


<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="menu_superior">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="home.php">Início</a>
  
  <!-- Links -->
<ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Cadastrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Navegação</a>
            </li>
        </ul>

    <!-- Aqui vai o Procurar -->
    <div class="collapse-md-3 p-2 navbar-collapse justify-content-center" id="collapsibleNavbar">
        <form class="form-inline fmCenter" action="">
            <input class="form-control mr-sm-2" type="text" placeholder="Olá! Escreva algo aqui" id="form_pesquisar">
            <button class="btn btn-success" type="submit" id="btn_pesquisar">Pesquisar</button>
        </form>
    </div>
    <!-- Logout  -->
    <div class="collapse-md-3 p-2 navbar-collapse justify-content-between" id="collapsibleNavbar-right">
        <a class="far fa-user-circle ml-auto" href="logout.php" style="color: white; font-size:23px"> Logout</a>
</div>
</nav>
    

    <!-- Centro do Site -> 2 "Menu's" -->
<div class="row">
    <div class="col-md-3 border">
        <ul class="nav flex-column">
            <li class="nav-item">
                <div class="btn btn-light">
                    <i class='far fa-user-circle' style='font-size:30px'></i> 
                    Administrador
                </div><br><br>

        <!-- Especificando o Menu -->
        <center><p>Menu de Navegação</p></center>

        <!-- Continuando... -->
            <li class="nav-item">
                <a class="btn btn-light" href="home.php?acao=listFruta">
                    <i class='fas fa-layer-group' style='font-size:30px'></i> 
                    Conferir Estoque
                </a>
            <li class="nav-item">
                <a class="btn btn-light" href="home.php?acao=listFornecedor">
                    <i class='fas fa-people-carry' style='font-size:30px'></i> 
                    Fornecedores
                </a>
            <li class="nav-item">
                <a class="btn btn-light" href="home.php?acao=listFuncionario">
                    <i class='fas fa-users' style='font-size:30px'></i> 
                    Funcionários
                </a>
            <li class="nav-item">
                <a class="btn btn-light" href="home.php?acao=listEndereco">
                    <i class='fas fa-home' style='font-size:30px'></i> 
                    Endereços
                </a>
            <li class="nav-item">
                <a class="btn btn-light" href="home.php?acao=listAtribuicao">
                    <i class='fas fa-briefcase' style='font-size:30px'></i> 
                    Atribuições
                </a><br><br>

        <!-- Especificando o Menu -->
        <center><p>Menu de Cadastro</p></center>

        <!-- Continuando... -->
            <li class="nav-item">
                <a class="btn btn-light" href="home.php?acao=cadFornecedor">
                    <i class='fas fa-people-carry' style='font-size:30px'></i> 
                    Fornecedores
                </a>
            <li class="nav-item">
                <a class="btn btn-light" href="home.php?acao=cadFuncionario">
                    <i class='fas fa-users' style='font-size:30px'></i> 
                    Funcionários
                </a>
            <li class="nav-item">
                <a class="btn btn-light" href="home.php?acao=cadEndereco">
                    <i class='fas fa-home' style='font-size:30px'></i> 
                    Endereço
                </a>
            <li class="nav-item">
                <a class="btn btn-light" href="home.php?acao=cadAtribuicao">
                    <i class='fas fa-briefcase' style='font-size:30px'></i> 
                    Atribuições
                </a>
            <li class="nav-item">
                <a class="btn btn-light" href="home.php?acao=cadFruta">
                    <i class='fas fa-lemon' style='font-size:30px'></i> 
                    Frutas
                </a>
        </ul>
    </div>

    <!-- Parte menu de tratamento de dados -->
<div class="col-md-9 border">

    <?php
        if(isset($_GET["acao"])){
            $acao = $_GET["acao"];
            switch ($acao) {
                //Fornecedor
                case 'cadFornecedor':
                    include "cadastrar_fornecedor.php";
                    echo "<div id='msg'></div>";
                    break;
                case 'listFornecedor':
                    //Especificação superior
                    echo"<div class='container p-3 my-3 bg text-white' style='background-color:orange; text-align: center'> Lista de Fornecedores</div><br>";
                    include "listar_fornecedor.php";
                    echo "<div id='msg'></div>";
                    break;
                //Funcionário
                case 'cadFuncionario':
                    include "cadastrar_funcionario.php";
                    echo "<div id='msg'></div>";
                    break;
                case 'listFuncionario':
                    //Especificação superior
                    echo"<div class='container p-3 my-3 bg text-white' style='background-color:orange; text-align: center'> Lista de Funcionário</div><br>";
                    include "listar_funcionario.php";
                    echo "<div id='msg'></div>";
                    break;
                //Endereco
                case 'cadEndereco':
                    include "cadastrar_endereco.php";
                    echo "<div id='msg'></div>";
                    break;
                case 'listEndereco':
                    //Especificação superior
                    echo"<div class='container p-3 my-3 bg text-white' style='background-color:orange; text-align: center'> Lista de Endereços</div><br>";
                    include "listar_endereco.php";
                    echo "<div id='msg'></div>";
                    break;
                //Atribuições
                case 'cadAtribuicao':
                    include "cadastrar_atribuicao.php";
                    echo "<div id='msg'></div>";
                    break;
                case 'listAtribuicao':
                    //Especificação superior
                    echo"<div class='container p-3 my-3 bg text-white' style='background-color:orange; text-align: center'> Lista de Atribuições</div><br>";
                    include "listar_atribuicao.php";
                    echo "<div id='msg'></div>";
                    break;
                //Frutas
                case 'cadFruta':
                    include "cadastrar_fruta.php";
                    echo "<div id='msg'></div>";
                    break;
                case 'listFruta':
                    //Especificação superior
                    echo"<div class='container p-3 my-3 bg text-white' style='background-color:orange; text-align: center'> Lista de Frutas</div><br>";
                    include "listar_fruta.php";
                    echo "<div id='msg'></div>";
                    break;
                default:
                    echo "<p>Erro!</p>";
                    break;
            }
        } else {
            echo "<div class ='container p-3 my-3 bg'>";
            echo "<center><h3>.: Seja Bem vindo ao Sistema de HortiFrutti :.</h3></center>";
            echo "</div>";
        }
    ?>
    </div>
</div>
<script src="viacep.js"></script>
</body>
</html>
