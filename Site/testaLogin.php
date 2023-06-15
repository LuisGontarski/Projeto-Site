<?php
session_start();
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        include_once('sql/conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM `tb_usuario` WHERE email = '$email'";

        $result = $conexao->query($sql);
        $usuario = $result->fetch_assoc();
        $sqlSelectTipo = mysqli_query($conexao, "SELECT ID_TipoUsu FROM tb_usuario WHERE ID_Usuario = " . $usuario['ID_Usuario']);

        if (md5($senha) === $usuario['Senha'] and $sqlSelectTipo == 2) {
            $_SESSION['email'] = $email;
            header('Location: principal.php');
        } else if (md5($senha) === $usuario['Senha'] and $sqlSelectTipo == 1){
            $_SESSION['email'] = $email;
            header('Location: cadastro.php');
        }
    }
