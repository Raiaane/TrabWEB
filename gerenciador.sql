-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Mar-2019 às 02:10
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gerenciador`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cpf` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `telefone`, `usuario`, `senha`, `email`, `cpf`) VALUES
(9, 'victor', '2147483647', 'vi', 'vi', 'victor@victor', '475859.554.32'),
(10, 'popiuiyt', 'qysusg567', 'ray', '654321', 'raiane@raiane.com', '9876543210'),
(11, 'eldson borges', '99999999', 'lourenco', '654321', 'eldsonlourenco@gmail.com', '9876543210'),
(16, 'Giovanny', '(22)28348-4484', 'giu', 'giu', 'giu@gmail.com', '234.443.334-44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `humanas`
--

CREATE TABLE `humanas` (
  `id` int(11) NOT NULL,
  `questao` varchar(300) NOT NULL,
  `a1` text NOT NULL,
  `a2` varchar(300) NOT NULL,
  `a3` varchar(300) NOT NULL,
  `a4` varchar(300) NOT NULL,
  `gab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `humanas`
--

INSERT INTO `humanas` (`id`, `questao`, `a1`, `a2`, `a3`, `a4`, `gab`) VALUES
(1, '(UEM – Inverno 2008)\r\n\r\nEm termos sociológicos, assinale o que for correto sobre o conceito de classes sociais:', 'Sua utilização visa explicar as formas pelas quais as desigualdades se estruturam e se reproduzem nas sociedades.', 'A afirmação “a história da humanidade é a história das lutas de classes” expressa a ideia de que as transformações sociais estão profundamente associadas às contradições existentes entre as classes.', 'A formação de uma classe social, como os proletários, só se realiza na sua relação com a classe opositora, no caso do exemplo, a burguesia.', 'As classes sociais, para Marx, definem-se, sobretudo, pelas relações de cooperação que se desenvolvem entre os diversos grupos envolvidos no sistema produtivo.', 'B'),
(2, 'Diante de sua visão materialista da história, Karl Marx descreve a luta de classes como:', 'Consequência direta do fenômeno de individualização do sujeito moderno.', 'Fenômeno fundamental para que uma democracia possa existir.', 'Fenômeno social inevitável diante das desigualdades materiais que existem entre as classes.', ' Parte essencial do processo de transição de monarquias no mundo feudal', 'C'),
(3, 'Para entendermos a ideia de lutas de classes e todos os desdobramentos que Marx atribuiu a esse importante aspecto social, devemos primeiro entender o que são as classes sociais a que tanto ele se referiu. Nesse sentido, Karl Marx defendia a ideia de classes a partir da noção de que:', 'as classes sociais são o conjunto de sujeitos unidos sob uma mesma ideologia política', 'as classes sociais são entendidas como os diferentes grupos que se formam em função de sua condição material e social.', 'as classes sociais estão ligadas pelo conceito de solidariedade orgânica.', ' as classes sociais existem apenas em espaços específicos e em sociedades altamente desenvolvidas.', 'B'),
(4, '(FUVEST 2014 - Primeira Fase) Com base na leitura da obra A cidade e as serras, de Eça de Queirós, publicada originalmente em 1901, é correto concluir que, nela, encontra-se:', 'o prenúncio de uma consciência ecológica que iria eclodir com força somente em finais do século XX, mas que, nessa obra, já mostrava um sentido visinário, inspirado pela invenção dos motores a vapor', 'uma concepção de hierarquia civilizacional entre as regiões do mundo, na qual, a Europa representaria a modernidade e um modelo a seguir, e a América, o atraso e um modelo a ser evitado.', 'a construção de uma associação entre indivíduo e divindade, já que, no livro, a natureza é, fundamentamente, símbolo de uma condição interior a ser alcançada por meio da resignação e penitência.', 'uma valorização do meio rural e de modos de vida a ele associados, nostalgia típica de um momento da história marcado pela consolidação da industrialização e da concentração da maior parte da população em áreas urbanas.', ' D');

-- --------------------------------------------------------

--
-- Estrutura da tabela `linguagens`
--

CREATE TABLE `linguagens` (
  `id` int(11) NOT NULL,
  `questao` varchar(300) NOT NULL,
  `a1` varchar(300) NOT NULL,
  `a2` varchar(300) NOT NULL,
  `a3` varchar(300) NOT NULL,
  `a4` varchar(300) NOT NULL,
  `gab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `linguagens`
--

INSERT INTO `linguagens` (`id`, `questao`, `a1`, `a2`, `a3`, `a4`, `gab`) VALUES
(1, 'qual palavra esta correta', 'arso', 'teste', 'TESTE', 'raiane', 'D');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matematica`
--

CREATE TABLE `matematica` (
  `id` int(11) NOT NULL,
  `questao` varchar(300) NOT NULL,
  `a1` varchar(300) NOT NULL,
  `a2` varchar(300) NOT NULL,
  `a3` varchar(300) NOT NULL,
  `a4` varchar(300) NOT NULL,
  `gab` varchar(300) NOT NULL,
  `id_aluno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `matematica`
--

INSERT INTO `matematica` (`id`, `questao`, `a1`, `a2`, `a3`, `a4`, `gab`, `id_aluno`) VALUES
(1, 'teste', 'teste', 'teste', 'teste', 'teste', 'a', ''),
(2, '(MACK SP) Num clube, dentre os 500 inscritos no departamento de natação, 30 são unicamente nadadores, entretento 310 também jogam futebol e 250 também jogam tênis. Os inscritos em natação que também praticam futebol e tenis são em número de:', '80', '90', '110', '120', 'B', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `natureza`
--

CREATE TABLE `natureza` (
  `id` int(11) NOT NULL,
  `questao` varchar(300) NOT NULL,
  `a1` varchar(300) NOT NULL,
  `a2` varchar(300) NOT NULL,
  `a3` varchar(300) NOT NULL,
  `a4` varchar(300) NOT NULL,
  `gab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `natureza`
--

INSERT INTO `natureza` (`id`, `questao`, `a1`, `a2`, `a3`, `a4`, `gab`) VALUES
(1, '(UDESC 2010) Na superfície de um planeta de massa M, um pêndulo simples de comprimento L tem período T duas vezes maior que o período na superfície da Terra. A aceleração, devido à gravidade neste planeta, é:', '20,0 m/s²', ' 15,0 m/s²', '5,0 m/s²', '2,5 m/s²', 'D');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `cpf` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `email`, `telefone`, `usuario`, `senha`, `cpf`) VALUES
(1, 'Professor', 'pro@pro', '1248555543', 'pro', 'pro', '13844987654'),
(10, 'eldson borges', 'eld@eldi.com', '123456787654', 'el', 'el', '135.456.789-70'),
(12, 'Giovanny', 'giovanny@gmail.com', '(88)82927-2827', 'gio', 'gio', '182.683.375-47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `humanas`
--
ALTER TABLE `humanas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linguagens`
--
ALTER TABLE `linguagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matematica`
--
ALTER TABLE `matematica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `natureza`
--
ALTER TABLE `natureza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `humanas`
--
ALTER TABLE `humanas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `linguagens`
--
ALTER TABLE `linguagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `matematica`
--
ALTER TABLE `matematica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `natureza`
--
ALTER TABLE `natureza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
