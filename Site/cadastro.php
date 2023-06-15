<?php

if (isset($_POST['submit'])) {
    include_once('sql/conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = md5($_POST['senha']);
    $confirmaSenha = md5($_POST['confirmaSenha']);

    if (empty($nome) || empty($email) || empty($telefone) || empty($senha) || empty($confirmaSenha)){

    } else {
        $sqlVerificaEmail = $conexao->query("SELECT Email FROM tb_usuario WHERE Email='$email'");
        $linhaEmail = $sqlVerificaEmail->num_rows;
        $sqlVerificaTelefone = $conexao->query("SELECT Telefone FROM tb_usuario WHERE Telefone='$telefone'");
        $linhaTelefone = $sqlVerificaTelefone->num_rows;
    }

    if ($confirmaSenha == $senha and $linhaEmail == 0 and $linhaTelefone == 0) {

        $result1 = mysqli_query($conexao, "INSERT INTO tb_usuario(Nome, Email, Telefone, Senha)
        VALUES ('$nome', '$email', '$telefone', '$senha')");

        $sqlSelectTipo = mysqli_query($conexao, "SELECT ID_TipoUsu FROM tb_usuario");

        if ($result1 and $sqlSelectTipo = 2) {
            header('Location: principal.php');
        } else if ($result1 and $sqlSelectTipo = 1){
            header('Location: login.php');
        }
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro JPrendim Peças</title>
    <link rel="stylesheet" href="css/cadastro_style.css" />
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
    <div class="signup-box">
        <h1>Cadastre-se</h1>
        <br>
        <form action="cadastro.php" method="post">
            <label>Primeiro Nome</label>
            <input type="text" placeholder="" name="nome" id="nome" />
            <label>Email</label>
            <input type="email" placeholder="" name="email" id="email" />
            <label>Telefone</label>
            <input type="tel" placeholder="" name="telefone" id="telefone" />
            <label>Senha</label>
            <input type="password" placeholder="" name="senha" id="senha" />
            <label>Confirme sua senha</label>
            <input type="password" placeholder="" name="confirmaSenha" id="senha" />
            <input type="submit" value="Submit" id="submit" name="submit"/>
        </form>

    </div>
    <p class="para-2">
        Already have an account? <a href="login.php">Login here</a>
    </p>
    <script src="js/principal_script.js"></script>
</body>

</html>