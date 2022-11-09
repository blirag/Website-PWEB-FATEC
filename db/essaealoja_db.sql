-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 09-Nov-2022 às 12:44
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `essaealoja_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE IF NOT EXISTS `carrinho` (
  `sessionId` varchar(200) NOT NULL,
  `clientId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitPrice` decimal(18,2) NOT NULL,
  `totalPrice` decimal(18,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`sessionId`, `clientId`, `productId`, `quantity`, `unitPrice`, `totalPrice`) VALUES
('jrjh6q1uti85ca3io0006o3fb6', 2, 8, 1, '36.90', '36.90'),
('jrjh6q1uti85ca3io0006o3fb6', 2, 13, 2, '6.99', '13.98'),
('jrjh6q1uti85ca3io0006o3fb6', 2, 6, 1, '139.99', '139.99');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `name`, `cpf`, `email`, `password`) VALUES
(1, '', 48806709879, 'hiwuzyv@mailinator.com', '123456'),
(2, 'ginutulyga', 48806709879, 'zuxogig@mailinator.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `summary` varchar(250) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `theme` varchar(60) NOT NULL,
  `category` varchar(60) NOT NULL,
  `price` decimal(18,2) NOT NULL,
  `img` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `name`, `summary`, `description`, `theme`, `category`, `price`, `img`) VALUES
(1, 'Darth Vader', 'Camiseta Star Wars Darth Vader, unissex preta.', 'Camiseta Unissex Preta.<br />\r\n\r\nMaterial: Malha fria 100% Poliéster <br />\r\n\r\nCor: Conforme imagem <br />\r\n\r\nTamanhos Disponíveis: Largura x Altura (cm) P 51x65 | M 54x67 | G 57x69 | GG 60x71', 'Star Wars', 'Camiseta', '39.90', 'camisetas/starwars-vader-preta.jpg'),
(2, 'Relíquias da Morte', 'Camiseta Harry Potter Relíquias da Morte, unissex raglan com mangas curtas pretas.', 'Camiseta Unissex Raglan com Mangas Curtas Pretas. <br />\r\n\r\nMaterial: Malha fria 100% Poliéster <br />\r\n\r\nCor: Conforme imagem <br />\r\n\r\nTamanhos Disponíveis: Largura x Altura (cm) P 51x65 | M 54x67 | G 57x69 | GG 60x71 \r\n\r\n', 'Harry Potter', 'Camiseta', '39.90', 'camisetas/reliquias-da-morte.jpeg'),
(5, 'Hermione Granger', 'Funko POP Hermione Granger Harry Potter', 'Funko pop veio para enlouquecer os apaixonados por animes, filmes, séries de tvs e desenhos animados. São bonecos de diversos personagens, lindos e cabeçudinhos. Muitos deles tornam-se raro devido a baixa tiragem de peças. A funko já produziu mais de 3 mil modelos diferentes e mensalmente lançam novos personagens. não perca tempo, entre logo nessa onda e colecione os funko pop. <br />\r\n\r\nMaterial: Plástico <br />\r\n\r\nCor: Conforme imagem <br />\r\n\r\nTamanhos Disponíveis: 17.2 x 12.9 x 10 centímetros', 'Harry Potter', 'Funko Pop', '118.99', 'funkos/hermione.jpg'),
(6, 'Stormtrooper', 'Funko POP Stormtrooper Star Wars', 'Funko pop veio para enlouquecer os apaixonados por animes, filmes, séries de tvs e desenhos animados. São bonecos de diversos personagens, lindos e cabeçudinhos. Muitos deles tornam-se raro devido a baixa tiragem de peças. A funko já produziu mais de 3 mil modelos diferentes e mensalmente lançam novos personagens. não perca tempo, entre logo nessa onda e colecione os funko pop. <br />\r\n\r\nMaterial: Plástico <br />\r\n\r\nCor: Conforme imagem <br />\r\n\r\nTamanhos Disponíveis: 17.2 x 12.9 x 10 centímetros', 'Star Wars', 'Funko Pop', '139.99', 'funkos/stormtrooper.jpg'),
(7, 'Hogwarts', 'Shorts Hogwarts Harry Potter', 'Os Shorts sao confeccionados com os melhores materiais do mercado. Os modelos estao super em alta e e a moda do momento. Estampas digitais de otima durabilidade e tecidos com modelagens confortaveis e resistentes. <br />\r\n\r\n02 Bolsos Dianteiros Cos anatomico em elastico Otima Qualidade, Estampas e Cores Lindas, Ideal para Praia ou Piscina! Costura Reforcada Otimo Acabamento. <br />\r\n\r\nMaterial: 100% Poliester (Tactel)', 'Harry Potter', 'Shorts', '39.99', 'bermudas_calcas/hp.png'),
(8, 'Super Mario', 'Shorts Super Mario', 'Os Shorts sao confeccionados com os melhores materiais do mercado. Os modelos estao super em alta e e a moda do momento. Estampas digitais de otima durabilidade e tecidos com modelagens confortaveis e resistentes.\r\n\r\n02 Bolsos Dianteiros Cos anatomico em elastico Otima Qualidade, Estampas e Cores Lindas, Ideal para Praia ou Piscina! Costura Reforcada Otimo Acabamento\r\nMaterial: 100% Poliester (Tactel)\r\n\r\n', 'Super Mario', 'Shorts', '36.90', 'bermudas_calcas/mario.png'),
(9, 'Homem Aranha', 'Shorts Homem Aranha', 'Os Shorts sao confeccionados com os melhores materiais do mercado. Os modelos estao super em alta e e a moda do momento. Estampas digitais de otima durabilidade e tecidos com modelagens confortaveis e resistentes. <br />\r\n\r\n02 Bolsos Dianteiros Cos anatomico em elastico Otima Qualidade, Estampas e Cores Lindas, Ideal para Praia ou Piscina! Costura Reforcada Otimo Acabamento <br />\r\n\r\nMaterial: 100% Poliester (Tactel) <br />\r\n\r\nCor: Conforme imagem <br />\r\n\r\nTamanhos Disponíveis: Quadril x Perna x Cintura x Altura (cm): P 56x30x80x38 | M 58x32x82x40 | G 60x34x83x42 | GG 62x36x85x44', 'Marvel', 'Shorts', '39.90', 'bermudas_calcas/homem_Aranha.png'),
(10, 'Plataforma 9 ¾', 'Mousepad Plataforma 9 ¾', 'Mousepad é um componente importante para quem quer trabalhar ou simplesmente se divertir. Ele influencia na precisão e velocidade de seus movimentos, Deixe a sua casa ou ambiente de trabalho mais bonito com esse lindo mousepad personalizado. <br />\r\n\r\nBase para mouse com revestimento em tecido estampado. Estampa: Impressão digital de alta definição, garantimos sua satisfação. <br />\r\n\r\nMaterial: tecido e borracha sintética <br />\r\n\r\nCor: Conforme imagem <br />\r\n\r\nDimensões: 18 x 18 centímetros\r\n\r\nEspessura: 4mm', 'Harry Potter', 'Mousepad', '24.90', 'mousepad/plataform934.png'),
(11, 'Star Wars BB8', 'Mousepad BB8 Star Wars', 'Mousepad é um componente importante para quem quer trabalhar ou simplesmente se divertir. Ele influencia na precisão e velocidade de seus movimentos, Deixe a sua casa ou ambiente de trabalho mais bonito com esse lindo mousepad personalizado. <br />\r\n\r\nBase para mouse com revestimento em tecido estampado. Estampa: Impressão digital de alta definição, garantimos sua satisfação. <br />\r\n\r\nMaterial: tecido e borracha sintética <br />\r\n\r\nCor: Conforme imagem <br />\r\n\r\nDimensões: 18 x 18 centímetros <br />\r\n\r\nEspessura: 4mm', 'Star Wars', 'Mousepad', '23.90', 'mousepad/bb8.png'),
(12, 'Darth Vader', 'Chaveiro Darth Vader Star Wars', 'O chaveiro emborrachado possui um acabamento de alta qualidade, material resistente e durável. Um excelente item para usar, colecionar e presentear, seja para você ou seus amigos. Acompanha argola e corrente. <br />\r\n\r\nInstruções de conservação: Limpar com pano seco. Não utilizar produtos químicos ou abrasivos. <br />\r\n\r\nMaterial: borracha sintética <br />\r\n \r\nCor: Conforme imagem <br />\r\n\r\nDimensões: Altura: 6 cm | Largura: 5 cm | Profundidade: 1 cm', 'Star Wars', 'Chaveiro', '7.19', 'chaveiro/darth_vader.png'),
(13, 'Dumbledore', 'Chaveiro Dumbledore Harry Potter', 'O chaveiro emborrachado possui um acabamento de alta qualidade, material resistente e durável. Um excelente item para usar, colecionar e presentear, seja para você ou seus amigos. Acompanha argola e corrente. <br />\r\n\r\nInstruções de conservação: Limpar com pano seco. Não utilizar produtos químicos ou abrasivos. <br />\r\n\r\nMaterial: borracha sintética <br />\r\n\r\nCor: Conforme imagem <br />\r\n\r\nDimensões: Altura: 6 cm | Largura: 5 cm | Profundidade: 1 cm', 'Harry Potter', 'Chaveiro', '6.99', 'chaveiro/dumbledore.png'),
(14, 'Super Mario', 'Chaveiro Super Mario', 'O chaveiro emborrachado possui um acabamento de alta qualidade, material resistente e durável. Um excelente item para usar, colecionar e presentear, seja para você ou seus amigos. Acompanha argola e corrente. <br />\r\n\r\nInstruções de conservação: Limpar com pano seco. Não utilizar produtos químicos ou abrasivos. <br />\r\n\r\nMaterial: borracha sintética <br />\r\n\r\nCor: Conforme imagem <br />\r\n\r\nDimensões: Altura: 6 cm | Largura: 5 cm | Profundidade: 1 cm', 'Super Mario', 'Chaveiro', '6.50', 'chaveiro/mario.png'),
(15, 'Homem Aranha', 'Chaveiro Homem Aranha Marvel', 'O chaveiro emborrachado possui um acabamento de alta qualidade, material resistente e durável. Um excelente item para usar, colecionar e presentear, seja para você ou seus amigos. Acompanha argola e corrente. <br />\r\n\r\nInstruções de conservação: Limpar com pano seco. Não utilizar produtos químicos ou abrasivos. <br />\r\n\r\nMaterial: borracha sintética <br />\r\n\r\nCor: Conforme imagem <br />\r\n\r\nDimensões: Altura: 6 cm | Largura: 5 cm | Profundidade: 1 cm', 'Marvel', 'Chaveiro', '6.99', 'chaveiro/homem_aranha.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
