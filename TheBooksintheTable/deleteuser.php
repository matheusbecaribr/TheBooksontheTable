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
    <title>Deletar Usuario</title>
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

    .nav2{
        height: 100vh;
    }

    .form{
        height: 100%;
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

    #buttondelete{
        font-size: 100pt;
        padding: 10px;
        border-radius: 5px;
        color: white;
        text-decoration: none;
        background-color: #5900ff;
        transition: 0.3s;
    }

    #buttondelete:hover{
        background-color: #262779;
    }

</style>
<body>
    <header>
        <nav>
            <div>
                <a id="buttonmenu" href="home.php">Home</a>
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
                <section id="sectionh1">
                    <h1>Excluindo usuário!</h1>
                </section>
                <section>
                    <h3>Rm: </h3>
                    <input type="number" name="rm" id="rm">
                </section>
                <section>
                    <input type="submit" id="buttondelete" name="excluir" value="Excluir">
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
        if(isset($_POST['excluir']))
        {

            $resultado = ExcluirUsuario($_POST['rm']);

        }else{

            header('Location: deleteuser.php');

        }
    }

?>