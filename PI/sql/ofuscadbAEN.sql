-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Nov-2019 às 23:21
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ofuscadb`
--
CREATE DATABASE IF NOT EXISTS `ofuscadbAEN` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ofuscadbAEN`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ampersan`
--

CREATE TABLE `ampersan` (
  `id` int(11) NOT NULL,
  `valor` varchar(4) NOT NULL,
  `chave` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ampersan`
--

INSERT INTO `ampersan` (`id`, `valor`, `chave`) VALUES
(1, '\'', '&apos;'),
(2, '<', '&lt;'),
(3, '>', '&gt;'),
(4, ' ', '&nbsp;'),
(5, '¡', '&iexcl;'),
(6, '¢', '&cent;'),
(7, '£', '&pound;'),
(8, '¤', '&curren;'),
(9, '¥', '&yen;'),
(10, '¦', '&brvbar;'),
(11, '§', '&sect;'),
(12, '¨', '&uml;'),
(13, '©', '&copy;'),
(14, 'ª', '&ordf;'),
(15, '«', '&laquo;'),
(16, '¬', '&not;'),
(17, '®', '&reg;'),
(18, '¯', '&macr;'),
(19, '°', '&deg;'),
(20, '±', '&plusmn;'),
(21, '²', '&sup2;'),
(22, '³', '&sup3;'),
(23, '´', '&acute;'),
(24, 'µ', '&micro;'),
(25, '¶', '&para;'),
(26, '·', '&middot;'),
(27, '¸', '&cedil;'),
(28, '¹', '&sup1;'),
(29, 'º', '&ordm;'),
(30, '»', '&raquo;'),
(31, '¼', '&frac14;'),
(32, '½', '&frac12;'),
(33, '¾', '&frac34;'),
(34, '¿', '&iquest;'),
(35, 'À', '&Agrave;'),
(36, 'Á', '&Aacute;'),
(37, 'Â', '&Acirc;'),
(38, 'Ã', '&Atilde;'),
(39, 'Ä', '&Auml;'),
(40, 'Å', '&Aring;'),
(41, 'Æ', '&AElig;'),
(42, 'Ç', '&Ccedil;'),
(43, 'È', '&Egrave;'),
(44, 'É', '&Eacute;'),
(45, 'Ê', '&Ecirc;'),
(46, 'Ë', '&Euml;'),
(47, 'Ì', '&Igrave;'),
(48, 'Í', '&Iacute;'),
(49, 'Î', '&Icirc;'),
(50, 'Ï', '&Iuml;'),
(51, 'Ð', '&ETH;'),
(52, 'Ñ', '&Ntilde;'),
(53, 'Ò', '&Ograve;'),
(54, 'Ó', '&Oacute;'),
(55, 'Ô', '&Ocirc;'),
(56, 'Õ', '&Otilde;'),
(57, 'Ö', '&Ouml;'),
(58, '×', '&times;'),
(59, 'Ø', '&Oslash;'),
(60, 'Ù', '&Ugrave;'),
(61, 'Ú', '&Uacute;'),
(62, 'Û', '&Ucirc;'),
(63, 'Ü', '&Uuml;'),
(64, 'Ý', '&Yacute;'),
(65, 'Þ', '&THORN;'),
(66, 'ß', '&szlig;'),
(67, 'à', '&agrave;'),
(68, 'á', '&aacute;'),
(69, 'â', '&acirc;'),
(70, 'ã', '&atilde;'),
(71, 'ä', '&auml;'),
(72, 'å', '&aring;'),
(73, 'æ', '&aelig;'),
(74, 'ç', '&ccedil;'),
(75, 'è', '&egrave;'),
(76, 'é', '&eacute;'),
(77, 'ê', '&ecirc;'),
(78, 'ë', '&euml;'),
(79, 'ì', '&igrave;'),
(80, 'í', '&iacute;'),
(81, 'î', '&icirc;'),
(82, 'ï', '&iuml;'),
(83, 'ð', '&eth;'),
(84, 'ñ', '&ntilde;'),
(85, 'ò', '&ograve;'),
(86, 'ó', '&oacute;'),
(87, 'ô', '&ocirc;'),
(88, 'õ', '&otilde;'),
(89, 'ö', '&ouml;'),
(90, '÷', '&divide;'),
(91, 'ø', '&oslash;'),
(92, 'ù', '&ugrave;'),
(93, 'ú', '&uacute;'),
(94, 'û', '&ucirc;'),
(95, 'ü', '&uuml;'),
(96, 'ý', '&yacute;'),
(97, 'þ', '&thorn;'),
(98, 'ÿ', '&yuml;'),
(99, 'Œ', '&OElig;'),
(100, 'œ', '&oelig;'),
(101, 'Š', '&Scaron;'),
(102, 'š', '&scaron;'),
(103, 'Ÿ', '&Yuml;'),
(104, 'ƒ', '&fnof;'),
(105, 'ˆ', '&circ;'),
(106, '˜', '&tilde;'),
(107, 'Α', '&Alpha;'),
(108, 'Β', '&Beta;'),
(109, 'Γ', '&Gamma;'),
(110, 'Δ', '&Delta;'),
(111, 'Ε', '&Epsilon;'),
(112, 'Ζ', '&Zeta;'),
(113, 'Η', '&Eta;'),
(114, 'Θ', '&Theta;'),
(115, 'Ι', '&Iota;'),
(116, 'Κ', '&Kappa;'),
(117, 'Λ', '&Lambda;'),
(118, 'Μ', '&Mu;'),
(119, 'Ν', '&Nu;'),
(120, 'Ξ', '&Xi;'),
(121, 'Ο', '&Omicron;'),
(122, 'Π', '&Pi;'),
(123, 'Ρ', '&Rho;'),
(124, 'Σ', '&Sigma;'),
(125, 'Τ', '&Tau;'),
(126, 'Υ', '&Upsilon;'),
(127, 'Φ', '&Phi;'),
(128, 'Χ', '&Chi;'),
(129, 'Ψ', '&Psi;'),
(130, 'Ω', '&Omega;'),
(131, 'α', '&alpha;'),
(132, 'β', '&beta;'),
(133, 'γ', '&gamma;'),
(134, 'δ', '&delta;'),
(135, 'ε', '&epsilon;'),
(136, 'ζ', '&zeta;'),
(137, 'η', '&eta;'),
(138, 'θ', '&theta;'),
(139, 'ι', '&iota;'),
(140, 'κ', '&kappa;'),
(141, 'λ', '&lambda;'),
(142, 'μ', '&mu;'),
(143, 'ν', '&nu;'),
(144, 'ξ', '&xi;'),
(145, 'ο', '&omicron;'),
(146, 'π', '&pi;'),
(147, 'ρ', '&rho;'),
(148, 'ς', '&sigmaf;'),
(149, 'σ', '&sigma;'),
(150, 'τ', '&tau;'),
(151, 'υ', '&upsilon;'),
(152, 'φ', '&phi;'),
(153, 'χ', '&chi;'),
(154, 'ψ', '&psi;'),
(155, 'ω', '&omega;'),
(156, 'ϑ', '&thetasym;'),
(157, 'ϒ', '&Upsih;'),
(158, 'ϖ', '&piv;'),
(159, '–', '&ndash;'),
(160, '—', '&mdash;'),
(161, '‘', '&lsquo;'),
(162, '’', '&rsquo;'),
(163, '‚', '&sbquo;'),
(164, '“', '&ldquo;'),
(165, '”', '&rdquo;'),
(166, '„', '&bdquo;'),
(167, '†', '&dagger;'),
(168, '‡', '&Dagger;'),
(169, '•', '&bull;'),
(170, '…', '&hellip;'),
(171, '‰', '&permil;'),
(172, '′', '&prime;'),
(173, '″', '&Prime;'),
(174, '‹', '&lsaquo;'),
(175, '›', '&rsaquo;'),
(176, '‾', '&oline;'),
(177, '⁄', '&frasl;'),
(178, '€', '&euro;'),
(179, 'ℑ', '&image;'),
(180, '℘', '&weierp;'),
(181, 'ℜ', '&real;'),
(182, '™', '&trade;'),
(183, 'ℵ', '&alefsym;'),
(184, '←', '&larr;'),
(185, '↑', '&uarr;'),
(186, '→', '&rarr;'),
(187, '↓', '&darr;'),
(188, '↔', '&harr;'),
(189, '↵', '&crarr;'),
(190, '⇐', '&lArr;'),
(191, '⇑', '&UArr;'),
(192, '⇒', '&rArr;'),
(193, '⇓', '&dArr;'),
(194, '⇔', '&hArr;'),
(195, '∀', '&forall;'),
(196, '∂', '&part;'),
(197, '∃', '&exist;'),
(198, '∅', '&empty;'),
(199, '∇', '&nabla;'),
(200, '∈', '&isin;'),
(201, '∉', '&notin;'),
(202, '∋', '&ni;'),
(203, '∏', '&prod;'),
(204, '∑', '&sum;'),
(205, '−', '&minus;'),
(206, '∗', '&lowast;'),
(207, '√', '&radic;'),
(208, '∝', '&prop;'),
(209, '∞', '&infin;'),
(210, '∠', '&ang;'),
(211, '∧', '&and;'),
(212, '∨', '&or;'),
(213, '∩', '&cap;'),
(214, '∪', '&cup;'),
(215, '∫', '&int;'),
(216, '∴', '&there4;'),
(217, '∼', '&sim;'),
(218, '≅', '&cong;'),
(219, '≈', '&asymp;'),
(220, '≠', '&ne;'),
(221, '≡', '&equiv;'),
(222, '≤', '&le;'),
(223, '≥', '&ge;'),
(224, '⊂', '&sub;'),
(225, '⊃', '&sup;'),
(226, '⊄', '&nsub;'),
(227, '⊆', '&sube;'),
(228, '⊇', '&supe;'),
(229, '⊕', '&oplus;'),
(230, '⊗', '&otimes;'),
(231, '⊥', '&perp;'),
(232, '⋅', '&sdot;'),
(233, '⌈', '&lceil;'),
(234, '⌉', '&rceil;'),
(235, '⌊', '&lfloor;'),
(236, '⌋', '&rfloor;'),
(237, '⟨', '&lang;'),
(238, '⟩', '&rang;'),
(239, '◊', '&loz;'),
(240, '♠', '&spades;'),
(241, '♣', '&clubs;'),
(242, '♥', '&hearts;'),
(243, '♦', '&diams;');

-- --------------------------------------------------------

--
-- Estrutura da tabela `percent`
--

CREATE TABLE `percent` (
  `id` int(11) NOT NULL,
  `valor` varchar(4) NOT NULL,
  `chave` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `percent`
--

INSERT INTO `percent` (`id`, `valor`, `chave`) VALUES
(1, ' ', '%20'),
(2, '!', '%21'),
(3, '\"', '%22'),
(4, '#', '%23'),
(5, '\\$', '%24'),
(6, '%', '%25'),
(7, '&', '%26'),
(8, '\'', '%27'),
(9, '(', '%28'),
(10, ')', '%29'),
(11, '*', '%2a'),
(12, '+', '%2b'),
(13, ',', '%2c'),
(14, '~', '%2d'),
(15, '.', '%2e'),
(16, '/', '%2f'),
(17, '0', '%30'),
(18, '1', '%31'),
(19, '2', '%32'),
(20, '3', '%33'),
(21, '4', '%34'),
(22, '5', '%35'),
(23, '6', '%36'),
(24, '7', '%37'),
(25, '8', '%38'),
(26, '9', '%39'),
(27, ':', '%3a'),
(28, ';', '%3b'),
(29, '<', '%3c'),
(30, '=', '%3d'),
(31, '>', '%3e'),
(32, '?', '%3f'),
(33, '@', '%40'),
(34, 'A', '%41'),
(35, 'B', '%42'),
(36, 'C', '%43'),
(37, 'D', '%44'),
(38, 'E', '%45'),
(39, 'F', '%46'),
(40, 'G', '%47'),
(41, 'H', '%48'),
(42, 'I', '%49'),
(43, 'J', '%4a'),
(44, 'K', '%4b'),
(45, 'L', '%4c'),
(46, 'M', '%4d'),
(47, 'N', '%4e'),
(48, 'O', '%4f'),
(49, 'P', '%50'),
(50, 'Q', '%51'),
(51, 'R', '%52'),
(52, 'S', '%53'),
(53, 'T', '%54'),
(54, 'U', '%55'),
(55, 'V', '%56'),
(56, 'W', '%57'),
(57, 'X', '%58'),
(58, 'Y', '%59'),
(59, 'Z', '%5a'),
(60, '[', '%5b'),
(61, '\\\\', '%5c'),
(62, ']', '%5d'),
(63, '^', '%5e'),
(64, '_', '%5f'),
(65, '`', '%60'),
(66, 'a', '%61'),
(67, 'b', '%62'),
(68, 'c', '%63'),
(69, 'd', '%64'),
(70, 'e', '%65'),
(71, 'f', '%66'),
(72, 'g', '%67'),
(73, 'h', '%68'),
(74, 'i', '%69'),
(75, 'j', '%6a'),
(76, 'k', '%6b'),
(77, 'l', '%6c'),
(78, 'm', '%6d'),
(79, 'n', '%6e'),
(80, 'o', '%6f'),
(81, 'p', '%70'),
(82, 'q', '%71'),
(83, 'r', '%72'),
(84, 's', '%73'),
(85, 't', '%74'),
(86, 'u', '%75'),
(87, 'v', '%76'),
(88, 'w', '%77'),
(89, 'x', '%78'),
(90, 'y', '%79'),
(91, 'z', '%7a'),
(92, '{', '%7b'),
(93, '|', '%7c'),
(94, '}', '%7d'),
(95, '~', '%7e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_char`
--

CREATE TABLE `tabela_char` (
  `id` int(11) NOT NULL,
  `valor` varchar(4) NOT NULL,
  `chave` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tabela_char`
--

INSERT INTO `tabela_char` (`id`, `valor`, `chave`) VALUES
(1, ' ', 'char(32)'),
(2, '!', 'char(33)'),
(3, '\"', 'char(34)'),
(4, '#', 'char(35)'),
(5, '$', 'char(36)'),
(6, '%', 'char(37)'),
(7, '&', 'char(38)'),
(8, '\'', 'char(39)'),
(9, '(', 'char(40)'),
(10, ')', 'char(41)'),
(11, '*', 'char(42)'),
(12, '+', 'char(43)'),
(13, ',', 'char(44)'),
(14, '~', 'char(45)'),
(15, '.', 'char(46)'),
(16, '/', 'char(47)'),
(17, '0', 'char(48)'),
(18, '1', 'char(49)'),
(19, '2', 'char(50)'),
(20, '3', 'char(51)'),
(21, '4', 'char(52)'),
(22, '5', 'char(53)'),
(23, '6', 'char(54)'),
(24, '7', 'char(55)'),
(25, '8', 'char(56)'),
(26, '9', 'char(57)'),
(27, ':', 'char(58)'),
(28, ';', 'char(59)'),
(29, '<', 'char(60)'),
(30, '=', 'char(61)'),
(31, '>', 'char(62)'),
(32, '?', 'char(63)'),
(33, '@', 'char(64)'),
(34, 'A', 'char(65)'),
(35, 'B', 'char(66)'),
(36, 'C', 'char(67)'),
(37, 'D', 'char(68)'),
(38, 'E', 'char(69)'),
(39, 'F', 'char(70)'),
(40, 'G', 'char(71)'),
(41, 'H', 'char(72)'),
(42, 'I', 'char(73)'),
(43, 'J', 'char(74)'),
(44, 'K', 'char(75)'),
(45, 'L', 'char(76)'),
(46, 'M', 'char(77)'),
(47, 'N', 'char(78)'),
(48, 'O', 'char(79)'),
(49, 'P', 'char(80)'),
(50, 'Q', 'char(81)'),
(51, 'R', 'char(82)'),
(52, 'S', 'char(83)'),
(53, 'T', 'char(84)'),
(54, 'U', 'char(85)'),
(55, 'V', 'char(86)'),
(56, 'W', 'char(87)'),
(57, 'X', 'char(88)'),
(58, 'Y', 'char(89)'),
(59, 'Z', 'char(90)'),
(60, '[', 'char(91)'),
(61, '\\', 'char(92)'),
(62, ']', 'char(93)'),
(63, '^', 'char(94)'),
(64, '_', 'char(95)'),
(65, '`', 'char(96)'),
(66, 'a', 'char(97)'),
(67, 'b', 'char(98)'),
(68, 'c', 'char(99)'),
(69, 'd', 'char(100)'),
(70, 'e', 'char(101)'),
(71, 'f', 'char(102)'),
(72, 'g', 'char(103)'),
(73, 'h', 'char(104)'),
(74, 'i', 'char(105)'),
(75, 'j', 'char(106)'),
(76, 'k', 'char(107)'),
(77, 'l', 'char(108)'),
(78, 'm', 'char(109)'),
(79, 'n', 'char(110)'),
(80, 'o', 'char(111)'),
(81, 'p', 'char(112)'),
(82, 'q', 'char(113)'),
(83, 'r', 'char(114)'),
(84, 's', 'char(115)'),
(85, 't', 'char(116)'),
(86, 'u', 'char(117)'),
(87, 'v', 'char(118)'),
(88, 'w', 'char(119)'),
(89, 'x', 'char(120)'),
(90, 'y', 'char(121)'),
(91, 'z', 'char(122)'),
(92, '{', 'char(123)'),
(93, '|', 'char(124)'),
(94, ']', 'char(125)'),
(95, '~', 'char(126)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ampersan`
--
ALTER TABLE `ampersan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `percent`
--
ALTER TABLE `percent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabela_char`
--
ALTER TABLE `tabela_char`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ampersan`
--
ALTER TABLE `ampersan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `percent`
--
ALTER TABLE `percent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `tabela_char`
--
ALTER TABLE `tabela_char`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
