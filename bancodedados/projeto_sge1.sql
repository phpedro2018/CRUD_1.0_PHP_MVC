-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Out-2018 às 14:31
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_sge1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `cpf` varchar(30) DEFAULT NULL,
  `telefone1` varchar(100) DEFAULT NULL,
  `telefone2` varchar(100) DEFAULT NULL,
  `datanasc` varchar(50) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `data_cadastro_aluno` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`matricula`, `nome`, `email`, `cpf`, `telefone1`, `telefone2`, `datanasc`, `endereco`, `data_cadastro_aluno`) VALUES
(1044, 'Francisco da Silva', 'francisco@email.com', '681.948.915-89', '(98) 1.9849.8498', '(98) 9.8498.4948', '2000-04-30', 'Rua das Castanheiras 1234567', '2018-10-16 14:26:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_imagens`
--

CREATE TABLE `alunos_imagens` (
  `id` int(11) NOT NULL,
  `matricula_aluno` int(11) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunos_imagens`
--

INSERT INTO `alunos_imagens` (`id`, `matricula_aluno`, `url`) VALUES
(12, 1000, 'bb547df7d4cd88abc8569a7868a7943d.jpg'),
(14, 1030, '9f6920f0439ce2e21de2cd03e7474b0b.jpg'),
(15, 1031, '57c87be5a5e61f3ef751faa14e49523d.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `codigo_curso` int(11) NOT NULL,
  `descricao_curso` varchar(100) NOT NULL,
  `carga_horaria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id_curso`, `codigo_curso`, `descricao_curso`, `carga_horaria`) VALUES
(32, 978670, 'Design GrÃ¡fico', 240);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dia`
--

CREATE TABLE `dia` (
  `id_dia` int(11) NOT NULL,
  `dia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dia`
--

INSERT INTO `dia` (`id_dia`, `dia`) VALUES
(1, 'Segunda-feira'),
(2, 'Terça-feira'),
(3, 'Quarta-feira'),
(4, 'Quinta-feira'),
(5, 'Sexta-feira'),
(6, 'Sábado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` int(11) NOT NULL,
  `horario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `horarios`
--

INSERT INTO `horarios` (`id_horario`, `horario`) VALUES
(1, '08h - 10h'),
(2, '10h - 12h'),
(3, '14h - 16h'),
(4, '16h - 18h'),
(5, '18h - 20h ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matriculados`
--

CREATE TABLE `matriculados` (
  `idMatricula` int(11) NOT NULL,
  `idTurma` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `matriculaAluno` int(11) NOT NULL,
  `idProf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prof`
--

CREATE TABLE `prof` (
  `idProf` int(11) NOT NULL,
  `nomeProf` varchar(100) NOT NULL,
  `senhaProf` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prof`
--

INSERT INTO `prof` (`idProf`, `nomeProf`, `senhaProf`) VALUES
(6, 'Pedro Henrique Silva de Sousa', '27031989');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Criada'),
(2, 'Aberta'),
(3, 'Andamento'),
(4, 'Fechada'),
(5, 'Encerrada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `id_turma` int(11) NOT NULL,
  `codigo_turma` varchar(100) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `horario` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `idProf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id_turma`, `codigo_turma`, `id_curso`, `dia`, `horario`, `status`, `idProf`) VALUES
(59, '7657', 32, 4, 2, 1, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `nome`, `senha`) VALUES
(1, 'pedro', 'Pedro Henrique', 'e01990544e65e072602c9ba9a29f5c60'),
(2, 'pedrohenrique.ti', 'Pedro Henrique', '200820e3227815ed1756a6b531e7e0d2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`matricula`);

--
-- Indexes for table `alunos_imagens`
--
ALTER TABLE `alunos_imagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `dia`
--
ALTER TABLE `dia`
  ADD PRIMARY KEY (`id_dia`);

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indexes for table `matriculados`
--
ALTER TABLE `matriculados`
  ADD PRIMARY KEY (`idMatricula`);

--
-- Indexes for table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`idProf`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id_turma`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1045;
--
-- AUTO_INCREMENT for table `alunos_imagens`
--
ALTER TABLE `alunos_imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `dia`
--
ALTER TABLE `dia`
  MODIFY `id_dia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `matriculados`
--
ALTER TABLE `matriculados`
  MODIFY `idMatricula` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prof`
--
ALTER TABLE `prof`
  MODIFY `idProf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id_turma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
