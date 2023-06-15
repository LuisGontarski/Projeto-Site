<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/principal_style.css">
    <title>Menu Responsivo</title>
</head>

<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <h1><a href="" style="text-decoration: none; color: white;">JPrendim</a></h1>
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item" style="background-color: #1c1c1c; padding: 10px; border-radius: 10px;"><a href="cadastro.php" class="nav-link" style="background-color: #1c1c1c;">Cadastre-se</a></li>
                    <li class="nav-item" style="background-color: #1c1c1c; padding: 10px; border-radius: 10px;"><a href="#" class="nav-link" style="background-color: #1c1c1c;">Pesquisar</a></li>
                </ul>
            </div>
            <div class="login-button">
                <button><a href="login.php" style="background-color: #1c1c1c;">Entrar</a></button>
            </div>

            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="images/menu_white_36dp.svg" alt=""></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="cadastro.php" class="nav-link">Cadastre-se</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Pesquisar</a></li>
            </ul>

            <div class="login-button">
                <button><a href="login.php" style="background-color: #1c1c1c;">Entrar</a></button>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <h1>Cadastre-se para anunciar suas peças</h1>
            <p class="description">Faça parte do nosso sistema de anúncios de peças de veículos. Cadastre-se agora para começar a vender suas peças online. <br> Se já possui cadastro, basta clicar em "Entrar" ou "Pesquisar" para visualizar as peças disponíveis!</p>
        </div>

    </main>

    <script src="js/principal_script.js"></script>
</body>

</html>
