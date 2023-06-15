CREATE database site;
use site;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tb_tipo_usuario` (
    `ID_TipoUsu` int NOT NULL PRIMARY KEY,
    `Tipo` varchar(14)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_tipo_usuario` (`ID_TipoUsu`, `Tipo`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

CREATE TABLE `tb_usuario` (
    `ID_Usuario` int PRIMARY KEY AUTO_INCREMENT,
    `Nome` varchar(55),
    `Email` varchar(155),
    `Telefone` varchar(20),
    `Senha` varchar(40),
    `ID_TipoUsu` int DEFAULT 2,
    FOREIGN KEY (`ID_TipoUsu`) REFERENCES `tb_tipo_usuario`(`ID_TipoUsu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_usuario` (`Nome`, `Email`, `Senha`,`ID_TipoUsu`) VALUES
("LuisAdmin", "LuisAdmin", "202cb962ac59075b964b07152d234b70", 1);