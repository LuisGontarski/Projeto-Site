<?php
    session_start();
    if(isset($_SESSION['error'])) {
        echo '<script>alert("'.$_SESSION['error'].'");</script>';
        unset($_SESSION['error']);
    }

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        include_once('conexao.php');
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM `tb_usuario` WHERE login = '$login' and ID_TipoUsu = '$tipoUsuario'";

        $result = $conexao->query($sql);
        $usuario = $result->fetch_assoc();

        if(md5($senha) === $usuario['Senha']) {
            if ($_POST['escolha'] == 1){
                $_SESSION['login'] = $login;
                header('Location: sistema.php');
            }
            elseif ($_POST['escolha'] == 2){
                $_SESSION['login'] = $login;
                header('Location: locadorPerfil.php');
            }
        }
        else{
            $_SESSION['error'] = 'Usuário ou senha incorretos.';
            header('Location: login.php');
        }
    }
    else
    {
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login JPrendim Peças</title>
    <link rel="stylesheet" href="css/login_style.css" />
</head>

<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <h1><a href="principal.php" style="text-decoration: none; color: white;">JPrendim</a></h1>
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
            <div class="login-button">
                <button><a href="#">Entrar</a></button>
            </div>

            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="images/menu_white_36dp.svg" alt=""></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
            </ul>

            <div class="login-button">
                <button><a href="#">Entrar</a></button>
            </div>
        </div>
    </header>
    <br><br><br><br><br>
    <div class="login-box">
        <h1>Login</h1>
        <form>
            <label>Email</label>
            <input type="email" placeholder="" />
            <label>Senha</label>
            <input type="password" placeholder="" />
            <input type="button" value="Entrar" />
            <closeform></closeform>
        </form>
    </div>
    <p class="para-2">
        Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a>
    </p>
    <script src="js/principal_script.js"></script>
</body>

</html>