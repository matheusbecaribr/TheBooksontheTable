<?php

    session_start();
        
    $prot = $_SESSION['email'];

    if(!isset($prot)){
        header('location: index.php');
    } else{
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="registerstyle.css">
    <title>Criar Conta</title>
</head>
<style>

    .nav2{
        padding-top: 10rem;
        padding-bottom: 12rem;
    }

    *{
        overflow: visible;
    }

    h1{
        padding: 5rem;
    }

    .nav2{
        width: 50%;
        height: 100vh;
    }

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
        padding: 10%;
    }

    select{
        display: flex;
        justify-content: center;
        width: 30rem;
        padding: 10px;
        font-size: 12pt;
    }
    
    #criar{
        padding: 15px;
    }

    #buttoncriar{
        width: 30rem;
        font-size: 12pt;
        padding: 10px;
        border-radius: 5px;
        color: white;
        text-decoration: none;
        background-color: #5900ff;
        transition: 0.3s;
        margin-bottom: rem;
    }

    #buttoncriar:hover{
        background-color: #262779;
    }
    
    h3{
        font-size: 10pt;
    }
    
    input{
        margin-bottom: none;
        padding: 6px;
        width: 30rem;
    }

</style>
<body>
    <header>
        <nav>
            <div>
                <a id="buttonmenu" href="home.php">Home</a>
            </div>
            <div>
                <a id="buttonmenu" href="deleteuser.php">Excluir usuário</a>
            </div>
        </nav>
    </header>
    <nav class="navdasnavs">
        <nav class="nav1">
            <div>
                <h1>cadastro<br>de<br>usuário</h1>
            </div>
        </nav>
        <nav class="nav2">
        <form action="" method="POST" class="form" name="form ">
            <div class="div1">
                <section>
                    <div class="dive">
                        <h3>Rm: </h3>
                        <input type="text" name="rm" id="rm">
                    </div>
                    <div class="dive">
                        <h3>Nome:</h3>
                        <input type="text" name="nome" id="nome">
                    </div>
                </section>
                <section>
                    <div class="dive">
                        <h3>Email:</h3>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="dive">
                        <h3>Senha:</h3>
                        <input type="password" name="senha" id="senha">
                    </div>
                </section>
                <section>
                    <div class="dive">
                        <h3>Data:</h3>
                        <input type="date" name="dt_nascimento" id="dt_nascimento">
                    </div>
                    <div class="dive">
                        <h3>Telefone:</h3>
                        <input type="number" name="telefone" id="telefone">
                    </div>
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
                    <input type="submit" name="usuario" id="buttoncriar" value="Cadastrar">
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

            $resultado = cadastrarUsuario($_POST['rm'],$_POST['nome'],$_POST['email'],$_POST['dt_nascimento'],$_POST['telefone'],$_POST['senha'],$_POST['userStatus'],$_POST['adm']);

            header('location: home.php');
        }else{

            echo "Erro ao cadastrar usuário";

        }
    }

?>