-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 10-Jul-2022 às 09:27
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `repositorio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `nome` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `administrador`:
--

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`nome`, `senha`) VALUES
('admin', 'admin501a20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `numero` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL COMMENT 'nome do aluno',
  `curso_id` varchar(25) NOT NULL,
  `turma_id` varchar(6) NOT NULL COMMENT 'turma'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `alunos`:
--   `turma_id`
--       `turma` -> `id_turma`
--   `curso_id`
--       `cursos` -> `id_curso`
--

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`numero`, `nome`, `curso_id`, `turma_id`) VALUES
(15, ' Leo Robin Williams', 'Informática', '10ªA-M'),
(11, ' Minga Oliveira Barros', 'Informática', '10ªA-M'),
(21, 'Adriana Francisco Do Amaral', 'Informática', '10ªA-M'),
(25, 'Adriana Vinicius Buaiz', 'Informática', '10ªA-M'),
(12, 'Ana Fernanda Melo', 'Informática', '10ªA-M'),
(1, 'António Ferreira', 'Informática', '10ªA-M'),
(30, 'Augusto Figueredo', 'Informática', '10ªA-M'),
(10, 'Belucha Barbosa Correia', 'Informática', '10ªA-M'),
(4, 'Benvinda Cavalcanti Castro', 'Informática', '10ªA-M'),
(3, 'Benvinda Lima Almeida', 'Informática', '10ªA-M'),
(22, 'Carlos Ferreira Junior', 'Informática', '10ªA-M'),
(6, 'Celmo Gomes Rodrigues', 'Informática', '10ªA-M'),
(7, 'Dedé Souza Melo', 'Informática', '10ªA-M'),
(23, 'Elias Gomez Pedro', 'Informática', '10ªA-M'),
(2, 'Elisa Dias Gomes', 'Informática', '10ªA-M'),
(5, 'Elsa Souza Barbosa', 'Informática', '10ªA-M'),
(27, 'Filipe França De Carvalho', 'Informática', '10ªA-M'),
(29, 'Gabriela Harrys Pereira Silva', 'Informática', '10ªA-M'),
(14, 'Gia Hamilton Edilene Aparecida', 'Informática', '10ªA-M'),
(13, 'Gomes Ascencio Fernando', 'Informática', '10ªA-M'),
(16, 'Gorge Bárbara Menezes', 'Informática', '10ªA-M'),
(8, 'Isa Sousa Melo', 'Informática', '10ªA-M'),
(9, 'Jeovania Martins Alves', 'Informática', '10ªA-M'),
(18, 'Jõao Cristina Anselmo', 'Informática', '10ªA-M'),
(19, 'Joaquim De Almeida Costa', 'Informática', '10ªA-M'),
(28, 'José Espándola Do Amaral', 'Informática', '10ªA-M'),
(17, 'Marcos Fernando Anselmo', 'Informática', '10ªA-M'),
(20, 'Moisés Nelson Santana Mello', 'Informática', '10ªA-M'),
(24, 'Patrácia Martins  Santos', 'Informática', '10ªA-M'),
(26, 'Ricardo Da Gama Rosa', 'Informática', '10ªA-M');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `numeroCurso` int(11) NOT NULL COMMENT 'número curso',
  `id_curso` varchar(25) NOT NULL COMMENT 'nome do curso'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `cursos`:
--

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`numeroCurso`, `id_curso`) VALUES
(1, 'Contabilidade e Gestão'),
(2, 'Eletrecidade'),
(3, 'Eletromecânica'),
(4, 'Gestão Empresarial'),
(5, 'Informática');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `nome` varchar(50) NOT NULL COMMENT 'nome da disciplina'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `disciplinas`:
--

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`nome`) VALUES
('Base de dados e Rede Computadores'),
('Comportamento Organizacional'),
('Contabilidade das Instituições Financerias'),
('Contabilidade Gerencial'),
('Controladoria'),
('Desenho Técnico'),
('Direito'),
('Educação Física'),
('Eletecidade '),
('Empreendedorismo'),
('Física'),
('Formação de Atitudes Integradoras'),
('Gestão Tributária'),
('Informática Aplicada á Gestão'),
('Inglês'),
('Instalações Eléctricas'),
('Língua Portuguesa'),
('Macroeconomia'),
('Máquinas ELéctricas'),
('Matemática'),
('Mercado Financeiro'),
('Microeconomia'),
('Organização e Administração de Empresas'),
('Perícia, Avaliação e Aribitragem'),
('Prática Oficinais De Eletrecidade'),
('Projecto Tecnológico'),
('Redes de Computadores'),
('Sistemas de Informação'),
('Técnicas  e Linguagens de programação '),
('Tecnologia Elétrica'),
('Tecnologias de Informação e Comunicação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina_cursos`
--

CREATE TABLE `disciplina_cursos` (
  `curso_id` varchar(25) NOT NULL,
  `turma_id` varchar(6) NOT NULL,
  `professor_id` varchar(6) NOT NULL,
  `disciplina_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `disciplina_cursos`:
--   `curso_id`
--       `cursos` -> `id_curso`
--   `disciplina_id`
--       `disciplinas` -> `nome`
--   `professor_id`
--       `professores` -> `id_professor`
--   `turma_id`
--       `turma` -> `id_turma`
--

--
-- Extraindo dados da tabela `disciplina_cursos`
--

INSERT INTO `disciplina_cursos` (`curso_id`, `turma_id`, `professor_id`, `disciplina_id`) VALUES
('Eletrecidade', '10ªA-M', '501a50', 'Língua Portuguesa'),
('Eletrecidade', '10ªA-M', '501a50', 'Máquinas ELéctricas'),
('Informática', '10ªA-M', '501a50', 'Base de dados e Rede Computadores');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE `notas` (
  `numero` int(11) NOT NULL COMMENT 'número do aluno',
  `nome` varchar(30) NOT NULL,
  `pp` int(11) DEFAULT NULL COMMENT 'prova do professor',
  `mac` int(11) DEFAULT NULL COMMENT 'média de avaliação contínua',
  `pt` int(11) DEFAULT NULL COMMENT 'prova trimestral',
  `mt` int(11) DEFAULT NULL COMMENT 'média trimestral',
  `pp2` int(11) DEFAULT NULL,
  `mac2` int(11) DEFAULT NULL,
  `pt2` int(11) DEFAULT NULL,
  `mt2` int(11) DEFAULT NULL,
  `pp3` int(11) DEFAULT NULL,
  `mac3` int(11) DEFAULT NULL,
  `pt3` int(11) DEFAULT NULL,
  `mt3` int(11) DEFAULT NULL,
  `disciplina_id` varchar(25) NOT NULL,
  `professor_id` varchar(6) NOT NULL COMMENT 'id professor senha',
  `turma_id` varchar(6) NOT NULL,
  `curso_id` varchar(25) NOT NULL COMMENT 'nome do curso'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `notas`:
--   `professor_id`
--       `professores` -> `id_professor`
--   `curso_id`
--       `cursos` -> `id_curso`
--   `turma_id`
--       `turma` -> `id_turma`
--   `disciplina_id`
--       `disciplinas` -> `nome`
--   `nome`
--       `alunos` -> `nome`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `id_professor` varchar(6) NOT NULL COMMENT 'senha do professor',
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `professores`:
--

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id_professor`, `nome`) VALUES
('501a50', 'Gilvan Aires Bezerra'),
('502a51', 'Jerónimo Felipe Reis'),
('503a52', 'João Bosco Sombra'),
('504a53', 'José Almir Alcantara'),
('505a54', 'António Rodrigues Aragão'),
('506a55', 'Francisco Braga'),
('507a56', 'Sousa Do Nascimento'),
('508a57', 'Márcio José Costa'),
('509a58', 'Maria Félix Fátima'),
('510a59', 'Marylda Cesar Marcos'),
('511a60', 'Oséias Ferreira Freitas'),
('512a61', 'Vicente Paulo Braga'),
('513a62', 'Alberto Gonçalves'),
('514a63', 'Agnituis Kasseding');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id_turma` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `turma`:
--

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id_turma`) VALUES
('10ªA-M'),
('10ªA-N'),
('10ªA-T'),
('11ªA-M'),
('11ªA-N'),
('11ªA-T'),
('12ªA-M'),
('12ªA-N'),
('12ªA-T');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `curso_id` varchar(25) DEFAULT NULL,
  `turma_id` varchar(6) DEFAULT NULL,
  `professor_id` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `turmas`:
--   `curso_id`
--       `cursos` -> `id_curso`
--   `turma_id`
--       `turma` -> `id_turma`
--   `professor_id`
--       `professores` -> `id_professor`
--

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`curso_id`, `turma_id`, `professor_id`) VALUES
('Informática', '10ªA-M', '501a50'),
('Eletrecidade', '12ªA-N', '501a50');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`nome`),
  ADD KEY `alunos_ibfk_3` (`turma_id`),
  ADD KEY `alunos_ibfk_4` (`curso_id`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Índices para tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`nome`);

--
-- Índices para tabela `disciplina_cursos`
--
ALTER TABLE `disciplina_cursos`
  ADD KEY `curso_id` (`curso_id`),
  ADD KEY `disciplina_id` (`disciplina_id`),
  ADD KEY `professor_id` (`professor_id`),
  ADD KEY `turma_id` (`turma_id`);

--
-- Índices para tabela `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `notas_ibfk_2` (`professor_id`),
  ADD KEY `notas_ibfk_3` (`curso_id`),
  ADD KEY `notas_ibfk_4` (`turma_id`),
  ADD KEY `notas_ibfk_5` (`disciplina_id`),
  ADD KEY `notas_ibfk_6` (`nome`);

--
-- Índices para tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id_professor`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id_turma`);

--
-- Índices para tabela `turmas`
--
ALTER TABLE `turmas`
  ADD KEY `curso_id` (`curso_id`),
  ADD KEY `turma_id` (`turma_id`),
  ADD KEY `professor_id` (`professor_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `notas`
--
ALTER TABLE `notas`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT COMMENT 'número do aluno';

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `alunos_ibfk_3` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id_turma`),
  ADD CONSTRAINT `alunos_ibfk_4` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id_curso`);

--
-- Limitadores para a tabela `disciplina_cursos`
--
ALTER TABLE `disciplina_cursos`
  ADD CONSTRAINT `disciplina_cursos_ibfk_1` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id_curso`),
  ADD CONSTRAINT `disciplina_cursos_ibfk_2` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplinas` (`nome`),
  ADD CONSTRAINT `disciplina_cursos_ibfk_3` FOREIGN KEY (`professor_id`) REFERENCES `professores` (`id_professor`),
  ADD CONSTRAINT `disciplina_cursos_ibfk_4` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id_turma`);

--
-- Limitadores para a tabela `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ibfk_2` FOREIGN KEY (`professor_id`) REFERENCES `professores` (`id_professor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `notas_ibfk_3` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id_curso`) ON UPDATE CASCADE,
  ADD CONSTRAINT `notas_ibfk_4` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id_turma`) ON UPDATE CASCADE,
  ADD CONSTRAINT `notas_ibfk_5` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplinas` (`nome`) ON UPDATE CASCADE,
  ADD CONSTRAINT `notas_ibfk_6` FOREIGN KEY (`nome`) REFERENCES `alunos` (`nome`);

--
-- Limitadores para a tabela `turmas`
--
ALTER TABLE `turmas`
  ADD CONSTRAINT `turmas_ibfk_1` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id_curso`),
  ADD CONSTRAINT `turmas_ibfk_2` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id_turma`),
  ADD CONSTRAINT `turmas_ibfk_3` FOREIGN KEY (`professor_id`) REFERENCES `professores` (`id_professor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
