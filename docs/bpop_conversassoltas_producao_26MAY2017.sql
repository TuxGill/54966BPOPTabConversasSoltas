-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Jun-2017 às 19:44
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bpop_conversassoltas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name_category` varchar(200) DEFAULT NULL,
  `text_category` text,
  `slug_category` varchar(200) DEFAULT NULL,
  `img_category` varchar(200) DEFAULT NULL,
  `del_category` int(11) DEFAULT '0',
  `act_category` int(11) DEFAULT '1',
  `ts_category` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id_category`, `name_category`, `text_category`, `slug_category`, `img_category`, `del_category`, `act_category`, `ts_category`) VALUES
(1, 'Observamos Mais ', 'O Popular, em parceria com o Observador, está a organizar um conjunto de iniciativas para a promoção social, em áreas como cooperação, tempo, cidadania, educação e solidariedade.<br><br>\nNo espaço Conversas Soltas, na sede do Popular, irão realizar-se\n6 conversas sobre estas e outras questões sociais.', 'observamosmais', NULL, 0, 1, '2017-06-12 14:25:26'),
(2, 'Turismo em Portugal', 'O Popular, em parceria com o Jornal de Negócios, está a organizar\num conjunto de iniciativas para a análise do turismo em Portugal.<br><br>\nNo espaço Conversas Soltas, na sede do Popular, irão realizar-se 5 mesas redondas sobre 5 setores chave: transportes, hotelaria, gastronomia, novos negócios e entretenimento.', 'turismoemportugal', NULL, 0, 1, '2017-06-12 14:25:26'),
(3, 'Economia Ibérica', 'O Popular, em parceria com o DN, Jornal de Notícias e TSF, está a organizar um conjunto de iniciativas para a análise da economia ibérica, com foco no setor Agroalimentar.<br><br>\nNo espaço Conversas Soltas, na sede do Popular, irão realizar-se\n8 debates sobre múltiplos subsectores agrícolas, e com moderação de António Perez Metelo.', 'economiaiberica', NULL, 0, 1, '2017-06-12 14:25:26'),
(4, 'Próximo Nível', 'O Popular, em parceria com o Expresso, está a organizar um conjunto de iniciativas para a promoção das PME,\nem vários setores chave da economia portuguesa.<br><br>\nNo espaço Conversas Soltas, na sede do Popular, irão realizar-se 9 conversas sobre diferentes áreas\nde negócio, com a presença de diferentes empresas da mesma área, mas em diferentes patamares de crescimento.', 'proximonivel', NULL, 0, 1, '2017-06-12 14:25:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id_content` int(11) NOT NULL AUTO_INCREMENT,
  `title_content` varchar(300) DEFAULT NULL,
  `text_content` text,
  `img_content` varchar(200) DEFAULT NULL,
  `url_content` varchar(500) DEFAULT NULL,
  `date_content` datetime DEFAULT NULL,
  `del_content` int(11) DEFAULT '0',
  `act_content` int(11) DEFAULT '1',
  `ts_content` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_content`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Extraindo dados da tabela `content`
--

INSERT INTO `content` (`id_content`, `title_content`, `text_content`, `img_content`, `url_content`, `date_content`, `del_content`, `act_content`, `ts_content`) VALUES
(1, 'Transportes | Filipa Ribero', NULL, 'http://i.ytimg.com/vi/b-q1mpBMZmU/mqdefault.jpg', 'https://www.youtube.com/embed/b-q1mpBMZmU?autoplay=1', '2017-03-23 00:00:00', 0, 1, '2017-06-16 16:45:20'),
(2, 'Transportes | Susana Fernandes ', NULL, 'http://i.ytimg.com/vi/t-o9GJBfzTo/mqdefault.jpg', 'https://www.youtube.com/embed/t-o9GJBfzTo?autoplay=1', '2017-03-23 00:00:00', 0, 1, '2017-06-16 16:48:27'),
(3, 'Transportes | João Tarrana', NULL, 'http://i.ytimg.com/vi/0rmiQpciO24/mqdefault.jpg', 'https://www.youtube.com/embed/0rmiQpciO24?autoplay=1', '2017-03-23 00:00:00', 0, 1, '2017-06-16 16:48:28'),
(4, 'Transportes | Pedro Neto ', NULL, 'http://i.ytimg.com/vi/O-CbYC8UGEA/mqdefault.jpg', 'https://www.youtube.com/embed/O-CbYC8UGEA?autoplay=1', '2017-03-23 00:00:00', 0, 1, '2017-06-16 16:48:28'),
(5, 'Transportes | Carlos Álvares', NULL, 'http://i.ytimg.com/vi/82jtv5Sp2xs/mqdefault.jpg', 'https://www.youtube.com/embed/82jtv5Sp2xs?autoplay=1', '2017-03-23 00:00:00', 0, 1, '2017-06-16 16:48:28'),
(6, 'Transportes | Geral ', NULL, 'http://i.ytimg.com/vi/EncOLwdYYGQ/mqdefault.jpg', 'https://www.youtube.com/embed/EncOLwdYYGQ?autoplay=1', '2017-03-23 00:00:00', 0, 1, '2017-06-16 16:48:28'),
(7, 'Têxtil e Calçado | Geral ', NULL, 'http://i.ytimg.com/vi/jc5lHC6JLBE/mqdefault.jpg', 'https://www.youtube.com/embed/jc5lHC6JLBE?autoplay=1', '2017-04-10 00:00:00', 0, 1, '2017-06-16 16:50:23'),
(8, 'Alojamento | Carlos Álvares', NULL, 'http://i.ytimg.com/vi/NyJF15Y2xGM/mqdefault.jpg', 'https://www.youtube.com/embed/NyJF15Y2xGM?autoplay=1', '2017-04-11 00:00:00', 0, 1, '2017-06-16 16:54:27'),
(9, 'Alojamento | Guilherme Costa', NULL, 'http://i.ytimg.com/vi/m9yT8peZY_k/mqdefault.jpg', 'https://www.youtube.com/embed/m9yT8peZY_k?autoplay=1', '2017-04-11 00:00:00', 0, 1, '2017-06-16 16:54:27'),
(10, 'Alojamento | José Theotónio', NULL, 'http://i.ytimg.com/vi/-tmx-cUJ5TM/mqdefault.jpg', 'https://www.youtube.com/embed/-tmx-cUJ5TM?autoplay=1', '2017-04-11 00:00:00', 0, 1, '2017-06-16 16:54:27'),
(11, 'Alojamento | Rodrigo Machaz', NULL, 'http://i.ytimg.com/vi/jQD0hXIh0aI/mqdefault.jpg', 'https://www.youtube.com/embed/jQD0hXIh0aI?autoplay=1', '2017-04-11 00:00:00', 0, 1, '2017-06-16 16:54:27'),
(12, 'Alojamento | Eduardo Miranda', NULL, 'http://i.ytimg.com/vi/1dRetC2n4-s/mqdefault.jpg', 'https://www.youtube.com/embed/1dRetC2n4-s?autoplay=1', '2017-04-11 00:00:00', 0, 1, '2017-06-16 16:54:27'),
(13, 'Alojamento | Bernardo Corrêa de Barros', NULL, 'http://i.ytimg.com/vi/-dcPVlFYnxM/mqdefault.jpg', 'https://www.youtube.com/embed/-dcPVlFYnxM?autoplay=1', '2017-04-11 00:00:00', 0, 1, '2017-06-16 16:54:27'),
(14, 'Alojamento | Geral ', NULL, 'http://i.ytimg.com/vi/r3TAC6pJMKY/mqdefault.jpg', 'https://www.youtube.com/embed/r3TAC6pJMKY?autoplay=1', '2017-04-11 00:00:00', 0, 1, '2017-06-16 16:54:27'),
(15, 'Comércio | Joana Rafael ', NULL, 'http://i.ytimg.com/vi/3F0yt_Uqf5Q/mqdefault.jpg', 'https://www.youtube.com/embed/3F0yt_Uqf5Q?autoplay=1', '2017-05-02 00:00:00', 0, 1, '2017-06-16 16:58:22'),
(16, 'Comércio | Margarida Almeida', NULL, 'http://i.ytimg.com/vi/KwQh4Sqt4M0/mqdefault.jpg', 'https://www.youtube.com/embed/KwQh4Sqt4M0?autoplay=1', '2017-05-02 00:00:00', 0, 1, '2017-06-16 16:58:22'),
(17, 'Comércio | Miguel Stillwell', NULL, 'http://i.ytimg.com/vi/Atjhjr4g6NY/mqdefault.jpg', 'https://www.youtube.com/embed/Atjhjr4g6NY?autoplay=1', '2017-05-02 00:00:00', 0, 1, '2017-06-16 16:58:22'),
(18, 'Comércio | Carlos Álvares', NULL, 'http://i.ytimg.com/vi/1WlR3gSAIs8/mqdefault.jpg', 'https://www.youtube.com/embed/1WlR3gSAIs8?autoplay=1', '2017-05-02 00:00:00', 0, 1, '2017-06-16 16:58:22'),
(19, 'Comércio | Nuno Carvalho ', NULL, 'http://i.ytimg.com/vi/dEvK32duRK8/mqdefault.jpg', 'https://www.youtube.com/embed/dEvK32duRK8?autoplay=1', '2017-05-02 00:00:00', 0, 1, '2017-06-16 16:58:22'),
(20, 'Comércio | Rita Coelho do Vale ', NULL, 'http://i.ytimg.com/vi/bcZfghzf6Yo/mqdefault.jpg', 'https://www.youtube.com/embed/bcZfghzf6Yo?autoplay=1', '2017-05-02 00:00:00', 1, 1, '2017-06-16 16:58:22'),
(21, 'Comércio | Geral ', NULL, 'http://i.ytimg.com/vi/itbclVoHt_s/mqdefault.jpg', 'https://www.youtube.com/embed/itbclVoHt_s?autoplay=1', '2017-05-02 00:00:00', 0, 1, '2017-06-16 16:58:22'),
(22, 'Comércio | Debate ', NULL, 'http://i.ytimg.com/vi/GB17UQDCK3Y/mqdefault.jpg', 'https://www.youtube.com/embed/GB17UQDCK3Y?autoplay=1', '2017-05-02 00:00:00', 0, 1, '2017-06-16 16:58:22'),
(23, 'Entretenimento e Cultura | Carla Santos', NULL, 'http://i.ytimg.com/vi/-9cEraJFk5c/mqdefault.jpg', 'https://www.youtube.com/embed/-9cEraJFk5c?autoplay=1', '2017-05-09 00:00:00', 0, 1, '2017-06-16 17:05:33'),
(24, 'Entretenimento e Cultura | Manuel Carrasqueira Baptista', NULL, 'http://i.ytimg.com/vi/nByg2CMm_ag/mqdefault.jpg', 'https://www.youtube.com/embed/nByg2CMm_ag?autoplay=1', '2017-05-09 00:00:00', 0, 1, '2017-06-16 17:05:33'),
(25, 'Entretenimento e Cultura | Paula Araújo da Silva', NULL, 'http://i.ytimg.com/vi/o2mi2FJ5jKw/mqdefault.jpg', 'https://www.youtube.com/embed/o2mi2FJ5jKw?autoplay=1', '2017-05-09 00:00:00', 0, 1, '2017-06-16 17:05:33'),
(26, 'Entretenimento e Cultura | Mário Ferreira', NULL, 'http://i.ytimg.com/vi/LJtCgO3WIB0/mqdefault.jpg', 'https://www.youtube.com/embed/LJtCgO3WIB0?autoplay=1', '2017-05-09 00:00:00', 0, 1, '2017-06-16 17:05:33'),
(27, 'Entretenimento e Cultura | Sofia Escobar', NULL, 'http://i.ytimg.com/vi/W_B8wMz_gkc/mqdefault.jpg', 'https://www.youtube.com/embed/W_B8wMz_gkc?autoplay=1', '2017-05-09 00:00:00', 0, 1, '2017-06-16 17:05:33'),
(28, 'Entretenimento e Cultura | Carlos Vargas', NULL, 'http://i.ytimg.com/vi/muJ8OvlZzhc/mqdefault.jpg', 'https://www.youtube.com/embed/muJ8OvlZzhc?autoplay=1', '2017-05-09 00:00:00', 0, 1, '2017-06-16 17:05:33'),
(29, 'Entretenimento e Cultura | Bárbara Coutinho', NULL, 'http://i.ytimg.com/vi/u6eyz8Q1uNc/mqdefault.jpg', 'https://www.youtube.com/embed/u6eyz8Q1uNc?autoplay=1', '2017-05-09 00:00:00', 0, 1, '2017-06-16 17:05:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `content_has_categories`
--

CREATE TABLE IF NOT EXISTS `content_has_categories` (
  `id_content_has_categories` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_content` int(11) NOT NULL,
  `fk_id_categories` int(11) NOT NULL,
  PRIMARY KEY (`id_content_has_categories`),
  KEY `fk_content_has_categories_categories1_idx` (`fk_id_categories`),
  KEY `fk_content_has_categories_content_idx` (`fk_id_content`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Extraindo dados da tabela `content_has_categories`
--

INSERT INTO `content_has_categories` (`id_content_has_categories`, `fk_id_content`, `fk_id_categories`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 2),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(7, 7, 4),
(8, 8, 2),
(9, 9, 2),
(10, 10, 2),
(11, 11, 2),
(12, 12, 2),
(13, 13, 2),
(14, 14, 2),
(15, 15, 4),
(16, 16, 4),
(17, 17, 4),
(18, 18, 4),
(19, 19, 4),
(20, 20, 4),
(21, 21, 4),
(22, 22, 4),
(23, 23, 2),
(24, 24, 2),
(25, 25, 2),
(26, 26, 2),
(27, 27, 2),
(28, 28, 2),
(29, 29, 2);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `content_has_categories`
--
ALTER TABLE `content_has_categories`
  ADD CONSTRAINT `fk_content_has_categories_categories1` FOREIGN KEY (`fk_id_categories`) REFERENCES `categories` (`id_category`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_content_has_categories_content` FOREIGN KEY (`fk_id_content`) REFERENCES `content` (`id_content`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
