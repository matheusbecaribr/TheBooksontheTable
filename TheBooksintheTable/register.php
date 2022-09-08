<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="registerstyle.css">
    <title>Criar Conta</title>
</head>
<style>

    #buttonmenu{
        padding: 10px;
        border-radius: 5px;
        color: white;
        text-decoration: none;
        background-color: #5900ff;
        transition: 0.3s;
    }

    #buttonmenu:hover{
        background-color: #262779;
    }
    
    .form{
        padding: 15%;
    }

    select{
        margin-bottom: 5%;
        padding: 10px;
        font-size: 12pt;
    }

    #criar{
        padding: 15px;
    }

    #buttoncriar{
        font-size: 12pt;
        padding: 10px;
        border-radius: 5px;
        color: white;
        text-decoration: none;
        background-color: #5900ff;
        transition: 0.3s;
    }

    #buttoncriar:hover{
        background-color: #262779;
    }
</style>
<body>
    <header>
        <nav>
            <div>
                <a id="buttonmenu" href="deleteuser.php">Excluir usuário</a>
            </div>
            <div>
                <a id="buttonmenu" href="index.html">Entrar</a>
            </div>
        </nav>
    </header>
    <nav class="navdasnavs">
        <nav class="nav1">
            <div>
                <h1>the books<br>on<br>the table</h1>
            </div>
        </nav>
        <nav class="nav2">
        <form action="" method="POST" class="form" name="form ">
            <div class="div1">
                <section>
                    <h1>Criando uma nova conta!</h1>
                </section>
                <section>
                    <h3>Rm: </h3>
                    <input type="text" name="rm" id="rm">
                </section>
                <section>
                    <h3>Nome:</h3>
                    <input type="text" name="nome" id="nome">
                </section>
                <section>
                    <h3>Email:</h3>
                    <input type="email" name="email" id="email">
                </section>
                <section>
                    <h3>Senha:</h3>
                    <input type="password" name="senha" id="senha">
                </section>
                <section>
                    <h3>Status do usuario: </h3>
                    <input type="text" name="userStatus" id="userStatus">
                </section>
                <section>
                    <h3>Administrador: </h3>
                    <select name="adm" id="adm">
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                </section>
                <section>
                <div class="div2">
                    <button name="usuario" id="buttoncriar">Cadastrar</button>
                </section>
            </div>
            </div>
            </form>
        </nav>
    </nav>
</body>
</html>

<?php

    include('config.php');

    if($_POST)
    {
        if(isset($_POST['usuario']))
        {

            $resultado = CadastrarUsuario($_POST['rm'],$_POST['nome'],$_POST['email'],$_POST['senha'],$_POST['userStatus'],$_POST['adm']);

        }else{

            echo "Erro ao cadastrar usuário";

        }
    }

?>