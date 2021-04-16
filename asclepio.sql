-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2021 at 02:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asclepio`
--

-- --------------------------------------------------------

--
-- Table structure for table `Aluno`
--

CREATE TABLE `Aluno` (
  `Turma` varchar(35) NOT NULL,
  `Senha` char(128) NOT NULL,
  `BI` char(14) NOT NULL,
  `Sexo` enum('M','F') DEFAULT NULL,
  `Curso` enum('Enfermagem','Estomatologia','Farmacologia','Análises Clínicas') DEFAULT NULL,
  `Nome_Completo` varchar(70) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Data_Nascimento` date NOT NULL,
  `Telefone` char(13) NOT NULL,
  `Morada` varchar(35) NOT NULL,
  `BI_Coordenador` char(14) NOT NULL,
  `BI_Encarregado` char(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Aluno`
--

INSERT INTO `Aluno` (`Turma`, `Senha`, `BI`, `Sexo`, `Curso`, `Nome_Completo`, `Email`, `Data_Nascimento`, `Telefone`, `Morada`, `BI_Coordenador`, `BI_Encarregado`) VALUES
('Desconhecido', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '22222222222222', 'M', 'Estomatologia', 'Josias Pedro Junor', 'josiasjr@gmail.com', '2021-04-19', '2222222222222', 'Hoje Aenda', '123asd123asdas', '55555555555555'),
('Desconhecido', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '77777777777777', 'M', 'Estomatologia', 'John Lenon', 'johnlenon@gmail.com', '2021-04-29', '0988499885550', 'USA', '0077447711LA09', '99999999999999'),
('Desconhecido', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '88888888888888', 'F', 'Farmacologia', 'Rita Ora', 'ritaora@gmail.com', '2021-04-13', '1234451233333', 'USA', '0077447711LA09', '99999999999999');

-- --------------------------------------------------------

--
-- Table structure for table `Boletim`
--

CREATE TABLE `Boletim` (
  `Arquivo` varchar(200) NOT NULL,
  `ID_Boletim` int(11) NOT NULL,
  `BI_Coordenador` char(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Boletim`
--

INSERT INTO `Boletim` (`Arquivo`, `ID_Boletim`, `BI_Coordenador`) VALUES
('documents/teste.xlsx', 1, '0077447711LA09');

-- --------------------------------------------------------

--
-- Table structure for table `Comunicado`
--

CREATE TABLE `Comunicado` (
  `ID_Comunicado` int(11) NOT NULL,
  `BI_Coordenador` char(14) NOT NULL,
  `Titulo` varchar(100) NOT NULL DEFAULT 'Comunicado',
  `Mensagem` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Coordenador`
--

CREATE TABLE `Coordenador` (
  `BI_Coordenador` char(14) NOT NULL,
  `Nome_Completo` varchar(70) NOT NULL,
  `Morada` varchar(35) NOT NULL,
  `Sexo` enum('M','F') DEFAULT NULL,
  `Data_Nascimento` date NOT NULL,
  `Telefone` char(13) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Senha` char(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Coordenador`
--

INSERT INTO `Coordenador` (`BI_Coordenador`, `Nome_Completo`, `Morada`, `Sexo`, `Data_Nascimento`, `Telefone`, `Email`, `Senha`) VALUES
('0077447711LA09', 'Joaquim Caetano Almeida Pires Souza da Conceição Pedro', 'Samba', 'M', '1993-03-14', '+244998368013', 'joaquim555@gmail.com', '37c8f4485cac04e80ace7a588e07ad88c5ab30d5d05241329052f4097774e22e2ba685cef06bee5c0ce63590dea678f01cbf2b6b132ea7e5058e04fe7bf86538'),
('123123', 'Vadim Blyat', 'Local', 'F', '2021-03-23', '123', 'q@d.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
('12312312312312', 'Reboot Now', 'Lugar Nenhum', 'F', '2021-03-16', '123123', 'lebrom@james.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
('123asd123asdas', 'Bela Shopper', 'Ilha de Bié', 'F', '2021-04-15', '12398755555', 'glitch@gmail.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
('346923478LA12', 'Ermenegilda Ngunza Almeida Pires', 'Inorad 2', 'F', '1980-10-09', '977234432', 'enap@hotmail.com', 'f3fe86e4b09db558a55c2d5d4f3f612b16ca23baa70e277a793ddab321758ac11cf7f5d645f1ff87be8a928bdb4df6d7bbad7aca86c1e68049e3db1b75337298'),
('5544332244LA09', 'Ernesto Dartolomeu', 'Morro Bento', 'M', '1990-02-06', '998456123', 'ernestod@hotmail.com', '4e9394b4d2876b8741b10a2fb46589b60f1a1c121e9bc4c280fae85af75b75ae8609d49f0e4215f3b682306dc7f262b171ffc181f886f764d638210d6ff7ba28'),
('5549826244LA09', 'Cristiana Messa da Costa Lemos Mbapé', 'Morro Bento', 'F', '1996-04-21', '922455478', 'ronalda@gmail.com', '4bc230400611dbf623e966bb3d2bb8dac8602a24c05f25b9df90707671d706566ab3c39ebcc19e4df781049297de6f568f0c20ec7a2c090c249dd89c1df26743'),
('9922236244LA09', 'Jorgina Maxado Coelho', 'Kilamba', 'F', '1996-04-21', '93542112', 'jorginamc@gmail.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2');

-- --------------------------------------------------------

--
-- Table structure for table `Encarregado`
--

CREATE TABLE `Encarregado` (
  `BI_Encarregado` char(14) NOT NULL,
  `Nome_Completo` varchar(70) NOT NULL,
  `Morada` varchar(35) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Senha` char(128) NOT NULL,
  `Telefone` char(13) NOT NULL,
  `Sexo` enum('M','F') DEFAULT NULL,
  `BI_Coordenador` char(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Encarregado`
--

INSERT INTO `Encarregado` (`BI_Encarregado`, `Nome_Completo`, `Morada`, `Email`, `Senha`, `Telefone`, `Sexo`, `BI_Coordenador`) VALUES
('55555555555555', 'Josias Pedro Senior', 'Hoje Aenda', 'josias@gmail.com', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510a', '1111111111111', 'M', '123asd123asdas'),
('99999999999999', 'Pai ou Mãe', 'USA', 'test@test.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '9879874545454', 'F', '0077447711LA09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Aluno`
--
ALTER TABLE `Aluno`
  ADD PRIMARY KEY (`BI`),
  ADD UNIQUE KEY `Nome_Completo` (`Nome_Completo`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Telefone` (`Telefone`),
  ADD KEY `Aluno_ibfk_2` (`BI_Encarregado`),
  ADD KEY `Aluno_ibfk_1` (`BI_Coordenador`);

--
-- Indexes for table `Boletim`
--
ALTER TABLE `Boletim`
  ADD PRIMARY KEY (`ID_Boletim`),
  ADD UNIQUE KEY `Arquivo` (`Arquivo`),
  ADD KEY `BI_Coordenador` (`BI_Coordenador`);

--
-- Indexes for table `Comunicado`
--
ALTER TABLE `Comunicado`
  ADD PRIMARY KEY (`ID_Comunicado`),
  ADD KEY `BI_Coordenador` (`BI_Coordenador`);

--
-- Indexes for table `Coordenador`
--
ALTER TABLE `Coordenador`
  ADD PRIMARY KEY (`BI_Coordenador`),
  ADD UNIQUE KEY `Nome_Completo` (`Nome_Completo`),
  ADD UNIQUE KEY `Telefone` (`Telefone`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `Encarregado`
--
ALTER TABLE `Encarregado`
  ADD PRIMARY KEY (`BI_Encarregado`),
  ADD UNIQUE KEY `Nome_Completo` (`Nome_Completo`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Telefone` (`Telefone`),
  ADD KEY `Encarregado_ibfk_1` (`BI_Coordenador`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Boletim`
--
ALTER TABLE `Boletim`
  MODIFY `ID_Boletim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Comunicado`
--
ALTER TABLE `Comunicado`
  MODIFY `ID_Comunicado` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Aluno`
--
ALTER TABLE `Aluno`
  ADD CONSTRAINT `Aluno_ibfk_1` FOREIGN KEY (`BI_Coordenador`) REFERENCES `Coordenador` (`BI_Coordenador`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Aluno_ibfk_2` FOREIGN KEY (`BI_Encarregado`) REFERENCES `Encarregado` (`BI_Encarregado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Boletim`
--
ALTER TABLE `Boletim`
  ADD CONSTRAINT `Boletim_ibfk_1` FOREIGN KEY (`BI_Coordenador`) REFERENCES `Coordenador` (`BI_Coordenador`);

--
-- Constraints for table `Comunicado`
--
ALTER TABLE `Comunicado`
  ADD CONSTRAINT `Comunicado_ibfk_1` FOREIGN KEY (`BI_Coordenador`) REFERENCES `Coordenador` (`BI_Coordenador`);

--
-- Constraints for table `Encarregado`
--
ALTER TABLE `Encarregado`
  ADD CONSTRAINT `Encarregado_ibfk_1` FOREIGN KEY (`BI_Coordenador`) REFERENCES `Coordenador` (`BI_Coordenador`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
