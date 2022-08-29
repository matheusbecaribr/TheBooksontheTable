<?php

    include('protect.php');

    /*session_start();
    print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: index.php');
    }

    $logado = $_SESSION['email'];*/

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="homestyle.css">
    <title>Início</title>
</head>
<body>
    <header>
        <nav class="nav1">
            <h3>the books on the table</h3>
        </nav>
        <nav class="nav2">
            <div id="config">
                <a onclick="" href="#">Config</a>
            </div>
            <div>
                <a id="entrar" href="index.html">Entrar</a>
            </div>
            <div>
                <a id="criarconta" href="register.html">Criar conta</a>
            </div>
            <div>
                <a id="sair" href="logout.php">Sair</a>
            </div>
        </nav>
    </header>
    <main>
        <nav class="wallpapernav">
            <h1>Seja bem-vindo ao nosso acervo!</h1>
            <h2>Veja no nosso acervo se o livro que você deseja está disponível na biblioteca.</h2>
            <h2>Aproveite!</h2>
        </nav>
        <nav class="acervo">
            <a href="#"></a>
            <nav class="div1">
                <div class="divimg"></div>
                <h1>Box Harry Potter edição limitada</h1>
                <div>
                    <a id="btn-vizualizar" href="book.html">Vizualizar</a>
                </div>
            </nav>
            <nav class="div2">
                <div class="divimg"></div>
                <h1>Box Livros Chatos do Fidélis</h1>
                <div>
                    <a id="btn-vizualizar" href="book.html">Vizualizar</a>
                </div>
            </nav>
            <nav class="div2">
                <div class="divimg"></div>
                <h1>Box Crepúsculo edição branca</h1>
                <div>
                    <a id="btn-vizualizar" href="book.html">Vizualizar</a>
                </div>
            </nav>
        </nav>
    </main>
</body>
</html>