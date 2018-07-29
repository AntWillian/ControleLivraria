-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: db_livraria
-- ------------------------------------------------------
-- Server version	5.0.67-community-nt

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Not dumping tablespaces as no INFORMATION_SCHEMA.FILES table on this server
--

--
-- Table structure for table `tbl_livro`
--

DROP TABLE IF EXISTS `tbl_livro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_livro` (
  `idlivro` int(11) NOT NULL auto_increment,
  `titulo` text,
  `autor` varchar(45) default NULL,
  `descricao` text,
  `editora` varchar(45) default NULL,
  `numPaginas` varchar(45) default NULL,
  `numEdicoes` varchar(45) default NULL,
  `anoEdicao` varchar(45) default NULL,
  `estoque` varchar(45) default NULL,
  `preco` varchar(45) default NULL,
  `imagem` text,
  PRIMARY KEY  (`idlivro`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_livro`
--

LOCK TABLES `tbl_livro` WRITE;
/*!40000 ALTER TABLE `tbl_livro` DISABLE KEYS */;
INSERT INTO `tbl_livro` VALUES (1,'Harry Potter e o Prisioneiro De Azkaban - Ilustrado','Rowling,J. K.','Depois de Harry Potter e a Pedra Filosofal e Harry Potter e a C?mara Secreta, Harry Potter e o prisioneiro de Azkaban, o terceiro volume da s?rie do bruxo mais adorado do mundo, ganha edi??o ilustrada pela Rocco. Com projeto gr?fico sofisticado ? capa dura, sobrecapa e miolo em papel cuch? ? o livro traz o texto integral de J.K. Rowling acompanhado dos incr?veis desenhos do premiado ilustrador brit?nico Jim Kay, escolhido para recriar em imagens os sete livros da s?rie. Novamente, Kay apresenta um mundo encantado e repleto de detalhes a cada p?gina, agora para acompanhar o terceiro ano de Harry Potter na Escola de Magia de Hogwarts.','Rocco','336','1','2018','100','78,90','imagensLivro/pedraFilosofal.jpg'),(2,'Harry Potter e A Pedra Filosofal - Capa Dura','Rowling,J. K.','Harry Potter ? um garoto cujos pais, feiticeiros, foram assassinados por um poderos?ssimo bruxo quando ele ainda era um beb?. Ele foi levado, ent?o, para a casa dos tios que nada tinham a ver com o sobrenatural. Pelo contr?rio. At? os 10 anos, Harry foi uma esp?cie de gata borralheira: maltratado pelos tios, herdava roupas velhas do primo gorducho, tinha ?culos remendados e era tratado como um estorvo. No dia de seu anivers?rio de 11 anos, entretanto, ele parece deslizar por um buraco sem fundo, como o de Alice no pa?s das maravilhas, que o conduz a um mundo m?gico. Descobre sua verdadeira hist?ria e seu destino: ser um aprendiz de feiticeiro at? o dia em que ter? que enfrentar a pior for?a do mal, o homem que assassinou seus pais. O menino de olhos verde, magricela e desengon?ado, t?o habituado ? rejei??o, descobre, tamb?m, que ? um her?i no universo dos magos. Potter fica sabendo que ? a ?nica pessoa a ter sobrevivido a um ataque do tal bruxo do mal e essa ? a causa da marca em forma de raio que ele carrega na testa. Ele n?o ? um garoto qualquer, ele sequer ? um feiticeiro qualquer; ele ? Harry Potter, s?mbolo de poder, resist?ncia e um l?der natural entre os sobrenaturais. A f?bula, recheada de fantasmas, paredes que falam, caldeir?es, sapos, unic?rnios, drag?es e gigantes, n?o ?, entretanto, apenas um passatempo.','Rocco','208','1','2017','100','65,65','imagensLivro/pedraFilosofal.jpg'),(3,'Harry Potter e o Prisioneiro De Azkaban - Ilustrado','Rowling,J. K.','Depois de Harry Potter e a Pedra Filosofal e Harry Potter e a C?mara Secreta, Harry Potter e o prisioneiro de Azkaban, o terceiro volume da s?rie do bruxo mais adorado do mundo, ganha edi??o ilustrada pela Rocco. Com projeto gr?fico sofisticado ? capa dura, sobrecapa e miolo em papel cuch? ? o livro traz o texto integral de J.K. Rowling acompanhado dos incr?veis desenhos do premiado ilustrador brit?nico Jim Kay, escolhido para recriar em imagens os sete livros da s?rie. Novamente, Kay apresenta um mundo encantado e repleto de detalhes a cada p?gina, agora para acompanhar o terceiro ano de Harry Potter na Escola de Magia de Hogwarts.','Rocco','336','1','2018','100','78,90','imagensLivro/pedraFilosofal.jpg'),(4,'Harry Potter e A Pedra Filosofal ? Edi??o Ilustrada','Rowling, J. K.','Primeiro dos sete livros da s?rie que se tornou o maior fen?meno editorial de todos os tempos, com mais de 450 milh?es de exemplares vendidos em todo o mundo, Harry Potter e a pedra filosofal chega ?s livrarias brasileiras em 1? de junho em edi??o ilustrada. Perfeita para a legi?o de f?s da s?rie de J.K. Rowling e para as novas gera?es que est?o descobrindo a leitura, a nova edi??o ? ilustrada por Jim Kay, ganhador da Kate Greenaway Medal, que fez um trabalho minucioso ao recriar o universo de Harry Potter em imagens e cores. Com projeto gr?fico sofisticado, o livro, que traz o texto integral de J.K. Rowling, chega ?s lojas com capa dura, sobrecapa, miolo em papel couch? e protegido por uma luva ilustrada.','Rocco','256','1','2016','100','78,90','imagensLivro/pedraFilosofal.jpg');
/*!40000 ALTER TABLE `tbl_livro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_nivel`
--

DROP TABLE IF EXISTS `tbl_nivel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_nivel` (
  `idNivel` int(11) NOT NULL auto_increment,
  `nomeNivel` varchar(45) default NULL,
  PRIMARY KEY  (`idNivel`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_nivel`
--

LOCK TABLES `tbl_nivel` WRITE;
/*!40000 ALTER TABLE `tbl_nivel` DISABLE KEYS */;
INSERT INTO `tbl_nivel` VALUES (1,'adm'),(2,'visualizacao');
/*!40000 ALTER TABLE `tbl_nivel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuario`
--

DROP TABLE IF EXISTS `tbl_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuario` (
  `idUsuario` int(11) NOT NULL auto_increment,
  `nomeUser` varchar(45) default NULL,
  `cpf` varchar(45) default NULL,
  `senha` varchar(45) default NULL,
  `foto` text,
  `idNivel` int(11) default NULL,
  PRIMARY KEY  (`idUsuario`),
  KEY `fk_user_nivel_idx` (`idNivel`),
  CONSTRAINT `fk_user_nivel` FOREIGN KEY (`idNivel`) REFERENCES `tbl_nivel` (`idNivel`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuario`
--

LOCK TABLES `tbl_usuario` WRITE;
/*!40000 ALTER TABLE `tbl_usuario` DISABLE KEYS */;
INSERT INTO `tbl_usuario` VALUES (1,'willian','036.874.553-10','123','imagemUser\\imagem1.jpg',1),(2,'bianca','654.434.543-10','123','imagemUser\\imagem2.jpg',2);
/*!40000 ALTER TABLE `tbl_usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-29 20:04:20
