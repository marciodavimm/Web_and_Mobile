-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.27 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-04-04 17:32:23
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table bsiturismo.guias
DROP TABLE IF EXISTS `guias`;
CREATE TABLE IF NOT EXISTS `guias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `titulo` text NOT NULL,
  `local` text NOT NULL,
  `texto` text,
  `imagem` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table bsiturismo.guias: ~12 rows (approximately)
/*!40000 ALTER TABLE `guias` DISABLE KEYS */;
INSERT INTO `guias` (`id`, `data`, `titulo`, `local`, `texto`, `imagem`) VALUES
	(1, '2013-03-21', 'Novo Centro de Conven&ccedil;&otilde;es', 'Fortaleza', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec tellus lectus, nec malesuada justo. Nulla id nisi eget est aliquet ullamcorper. Duis eget sapien mi, id vehicula sapien. Duis eget lectus a eros venenatis lacinia eu ac ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Vivamus hendrerit risus blandit nisi molestie commodo sodales erat feugiat. Sed suscipit tellus ullamcorper risus aliquet eget porta dolor pharetra. Nulla dapibus ultrices.', 'midias/efeito-guiadeturismo'),
	(2, '2013-02-10', 'Praia do Futuro', 'Fortaleza', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut mi dolor. Sed dolor quam, tempus vel pulvinar ut, dapibus non ligula. Duis tempor risus nec nunc rutrum ornare. Duis feugiat nulla quis tellus viverra eget adipiscing metus ullamcorper. Nunc.', 'midias/efeito-guiadeturismo'),
	(3, '2013-03-31', 'Praia de Ponta Negra', 'Natal', 'Cras vel nisl et neque imperdiet blandit. Aliquam tincidunt turpis id est vehicula ut ultricies neque dignissim. Nam placerat vulputate mauris et varius. Suspendisse id purus in nibh scelerisque posuere eget at turpis. Ut ut nunc et nibh tincidunt tincidunt vel accumsan ipsum. Nam ultrices lobortis arcu, vel dignissim sem.', 'midias/efeito-guiadeturismo'),
	(4, '2012-12-30', 'Via Costeira', 'Natal', 'Cras vel nisl et neque imperdiet blandit. Aliquam tincidunt turpis id est vehicula ut ultricies neque dignissim. Nam placerat vulputate mauris et varius. Suspendisse id purus in nibh scelerisque posuere eget at turpis. Ut ut nunc et nibh tincidunt tincidunt vel accumsan ipsum. Nam ultrices lobortis arcu, vel dignissim sem.', 'midias/efeito-guiadeturismo'),
	(5, '2013-01-08', 'Cristo Redentor', 'Rio de Janeiro', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus consequat facilisis rhoncus. Proin justo neque, dapibus non consequat at, dictum quis purus. Praesent porttitor nibh mauris. Proin et augue nec odio fringilla cursus id sit amet leo. Nunc nec mauris vitae augue lacinia ultrices quis sit amet lorem. Pellentesque aliquam sapien ut lorem venenatis viverra. Quisque mattis porttitor volutpat. Vestibulum vel augue et nunc sodales ullamcorper vulputate sit amet urna.', 'midias/efeito-guiadeturismo'),
	(6, '2013-02-21', 'Forte dos Reis Magos', 'Natal', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, neque at fringilla lacinia, nisi libero rutrum neque, eget facilisis sem massa eget dui. Aliquam ut aliquam metus. Praesent nibh ante, semper vitae luctus sit amet, tincidunt ut lorem. Nulla eu lectus orci. Praesent lobortis dui ut ante mattis a convallis ligula suscipit. Suspendisse viverra massa ac lacus tincidunt viverra. Cras sit amet metus in velit adipiscing semper id id sapien. Vivamus vitae consectetur diam. Donec eget tellus est. Nulla convallis tempus felis, vitae adipiscing quam mollis nec. Praesent et turpis odio, sagittis volutpat quam. In fermentum auctor consectetur.', 'midias/efeito-guiadeturismo'),
	(7, '2013-04-02', 'Praia do Sancho', 'Fernando de Noronha', 'Foi escolhida pela revista Viagem e Turismo como o melhor destino tur&iacute;stico de praia em todo o Brasil,sendo considerada a uma das mais bonita do pa&iacute;s.Al&eacute;m disso, tamb&eacute;m um dos melhores pontos de mergulho do pa&iacute;s. As &aacute;guas cristalinas proporcionam excelente visibilidade e os bancos de corais tamb&eacute;m s&atilde;o repletos de vidas marinhas', 'bsitur-img-bd/Fernando de Noronha/Praia do Sancho'),
	(8, '2013-04-03', 'Ilhatur', 'Fernando de Noronha', 'O passeio mais tradicinal &eacute; o ilhatur, todo mundo faz pelo menos uma vez. &Eacute; o grande passeio ao redor da ilha que n&atilde;o vai a todo lugar, mas j&aacute; &eacute; bem completo. Fica de fora basicamente o centro hist&oacute;rico. &Eacute; a maneira mais r&aacute;pida de conhecer a ilha e &oacute;timo programa para o in&iacute;cio da viagem.', 'bsitur-img-bd/Fernando de Noronha/Ilhatur'),
	(9, '2013-04-03', 'Baia dos Porcos', 'Fernando de Noronha', 'Com apenas 100 metros de extens&atilde;o, &eacute; a praia mais charmosa de Noronha. Uma verdadeira obra&ndash;prima de manchas azuladas e rochas vulc&acirc;nicas. A beleza da ba&iacute;a, com faixa de areia que desaparece na mar&eacute; alta, vale cada uma das escorregadias pedras do caminho. As piscinas naturais ficam diante do Morro Dois Irm&atilde;os, cart&atilde;o&ndash;postal do arquip&eacute;lago. No fim da trilha para o Sancho h&aacute; um pequeno caminho &agrave; direita que leva ao mirante da Ba&iacute;a dos Porcos. &Eacute; o melhor &acirc;ngulo para ver a praia e o Dois Irm&atilde;os.', 'bsitur-img-bd/Fernando de Noronha/Baia dos Porcos'),
	(10, '2013-04-02', 'Cacimba do Padre', 'Fernando de Noronha', 'Uma da maiores praias da ilha &ndash; 900 metros de extens&atilde;o &ndash; a praia da Cacimba do Padre abriga outro cart&atilde;o&ndash;postal de Noronha: o Morro Dois Irm&atilde;os. E as belezas n&atilde;o terminam por a&iacute;. As &aacute;guas s&atilde;o verdes e repletas de vida marinha, a areia &eacute; clara, fofa e com b&uacute;zios, e a vegeta&ccedil;&atilde;o nativa dos morros avan&ccedil;a sobre a praia. No ver&atilde;o, as ondas chegam a cinco metros. Bom local para apreciar o pr&ndash;do&ndash;sol.', 'bsitur-img-bd/Fernando de Noronha/Cacimba do Padre'),
	(11, '2013-04-02', 'Mergulho', 'Fernando de Noronha', 'As &aacute;guas transparentes e a diversidade da fauna marinha fazem de Fernando de Noronha um dos melhores lugares do mundo para mergulhar. No card&aacute;pio &ndash; que traz alimentos para os olhos e a alma &ndash; est&atilde;o cardumes variados e coloridos, arraias, tubar&otilde;es, tartarugas, mor&eacute;ias, barracudas, golfinhos, esponjas e corais. A visibilidade chega a 50 metros e a ilha oferece ainda mergulhos noturnos &ndash; apenas para credenciados. Para quem n&atilde;o tem pr&aacute;tica, as operadoras locais oferecem o batismo, um mergulho de cerca de 15 metros de profundidade orientado por um instrutor e que inclui os equipamentos, como roupa de neoprene, cilindro, colete, m&aacute;scara e p&eacute;s&ndash;de&ndash;pato.', 'bsitur-img-bd/Fernando de Noronha/Mergulho'),
	(13, '2013-04-04', 'imagem address test', 'Teste 1', 'd addas dada dadsd', 'bsitur-img-bd/Teste 1/imagem address test');
/*!40000 ALTER TABLE `guias` ENABLE KEYS */;


-- Dumping structure for table bsiturismo.locais
DROP TABLE IF EXISTS `locais`;
CREATE TABLE IF NOT EXISTS `locais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `local` text NOT NULL,
  `data` date NOT NULL,
  `arquivo` text,
  `descricao` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table bsiturismo.locais: ~3 rows (approximately)
/*!40000 ALTER TABLE `locais` DISABLE KEYS */;
INSERT INTO `locais` (`id`, `local`, `data`, `arquivo`, `descricao`) VALUES
	(1, 'Florianópolis', '2013-04-03', 'Florianopolis/', 'dasd sddadasd dsdasd adsd'),
	(2, 'Fernando de Noronha', '2013-04-02', 'Fernando de Noronha/', 'O Arquip&eacute;lago de Fernando de Noronha &eacute; formado por vinte e uma ilhas, numa extens&atilde;o de 26 km&sup2;, tendo uma principal &ndash; a maior de todas tamb&eacute;m chamada &ldquo;Fernando de Noronha&rdquo; &ndash;, como &uacute;nica ilha habitada. As demais est&atilde;o contidas na &aacute;rea do Parque Nacional Marinho e s&atilde;o desabitadas, s&oacute; podendo ser visitadas com licen&ccedil;a oficial do IBAMA. S&atilde;o 17 quil&ocirc;metros quadrados &agrave; 545 km da costa, onde vive uma popula&ccedil;&atilde;o de apenas 2.100 habitantes e o turismo &eacute; desenvolvido de forma sustent&aacute;vel, criando a oportunidade do encontro equilibrado do homem com a natureza em um dos santu&aacute;rios ecol&oacute;gicos mais importantes do mundo.'),
	(3, 'Natal', '2013-03-26', 'Natal/', 'sadadasd as dad  ad dsdasdad asda sdadasd a d ad ad da dasdad sa asd');
/*!40000 ALTER TABLE `locais` ENABLE KEYS */;


-- Dumping structure for table bsiturismo.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usuario` text NOT NULL,
  `senha` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table bsiturismo.usuarios: ~1 rows (approximately)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES
	(1, 'bsimobile', 'bsimobile');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
