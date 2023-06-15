<?php
    session_start();
    if(isset($_SESSION['error'])) {
        echo '<script>alert("'.$_SESSION['error'].'");</script>';
        unset($_SESSION['error']);
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
        <form action="testaLogin.php" method="post">
            <label>Email</label>
            <input type="text" placeholder="" name="email" id="email"/>
            <label>Senha</label>
            <input type="password" placeholder="" name="senha" id="senha"/>
            <input type="submit" value="Entrar" name="submit" id="submit"/>
        </form>
    </div>
    <p class="para-2">
        Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a>
    </p>
    <script src="js/principal_script.js"></script>
</body>

</html>