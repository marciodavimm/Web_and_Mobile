<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- efeito lightbox nos thumbs -->
<link rel="stylesheet" href="scripts/css/lightbox.css" type="text/css" media="screen" />
<script src="scripts/js/jquery-1.7.2.min.js"></script>
<script src="scripts/js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="scripts/js/jquery.smooth-scroll.min.js"></script>
<script src="scripts/js/lightbox.js"></script>

<!-- conecta ao banco de dados -->
<?php include"Connections/config.php";

$conexao = mysql_connect("$hostname_config", "$username_config","$password_config")
	or die ("Erro ao connectar ao banco de dados.");
	
$db = mysql_select_db("$database_config")
	or die ("Erro ao selecionar a base de dados");
		
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BSI 2013 - Pontos Tutísticos</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="box">
    <div id="header">
    	<div id="logo">
        <img src="images/logo.jpg" />
        </div> <!-- logo -->
        <div id="banner">
            <a target="_top" href="http://my.dot.tk/cgi-bin/amb/landing.dottk?nr=659140::12395609::100"><img src="http://images.dot.tk/tkit/0/468x60_tkitpromo_banner-2.gif" border="0" /></a>
        </div>
    </div> <!-- header -->
	
	<div id="headersp">
    </div><!-- headersp -->

	<div id="menu">
        <img src="images/separador_menu.jpg" />
        <a href="index.php?bsi=nav/home">Início</a>
        <img src="images/separador_menu.jpg" />
    	<a href="index.php?bsi=nav/locais">Locais</a>
        <img src="images/separador_menu.jpg" />
    	<a href="index.php?bsi=nav/guias">Pontos Turísticos</a>
        <img src="images/separador_menu.jpg" />
    	<a href="index.php?bsi=nav/links">Links</a>
        <img src="images/separador_menu.jpg" />
    	<a href="index.php?bsi=nav/faleconosco">Fale Conosco</a>
        <img src="images/separador_menu.jpg" />
    
    
    	<div id="search">
        	<form id="form1" name="form1" method="post" action="index.php?bsi=nav/pesquisa">
            	<table border="0" align="right" cellpadding="3" cellspacing="3">
                	<tr>
                    	<td><span class="pesquisar">Pesquisar por:</span></td>
                        <td><input name="search" type="text" id="search" size="35" /></td>
                        <td><input type="submit" name="buscar" id="buscar" value="Buscar" /></td>
                    </tr>
                </table>
            </form>
        </div> <!-- search -->
    
    </div><!-- menu -->
    
    <div id="spacer">
    </div><!-- spacer  -->
