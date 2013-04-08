<div id="sidebar">
    <h1>Últimas Imagens</h1>
    <ul> 
<?php
$sql = "SELECT id, titulo, local, imagem
        FROM guias
        ORDER BY data DESC, id DESC
        LIMIT 8";
$resultados = mysql_query($sql)
    or die(mysql_error());
if(@mysql_num_rows($resultados)==0) echo("");
?>   
        
<!-- ABRE O WHILE-->
<?php
while($res=mysql_fetch_array($resultados)){
	$id = $res[0];
	$titulo = $res[1];
	$local = $res[2];
	$imagem = $res[3];
?>
	<li><a href="<?php echo $imagem.".jpg"; ?>" rel="lightbox[thumbs]" title="<?php echo $local.": ".$titulo; ?>">
      		<img src="<?php echo $imagem.".jpg"; ?>" /></a></li>	
<!-- FECHA O WHILE-->
<?php 
}
?>
<!--
      <li><a href="galeria/mundo a noite.jpg" rel="lightbox[thumbs]" title="Mundo a noite">
      		<img src="galeria/mundo a noite.jpg" /></a></li>
-->            
            
            
            <!--
      <li><a href="galeria/dubai.jpg" rel="lightbox[thumbs]" title="legenda 4"><img src="galeria/dubai.jpg" /></a></li>
      <li><a href="galeria/menina ninja.gif" rel="lightbox[thumbs]" title="legenda 5">
      		<img src="galeria/menina ninja.gif" /></a></li>
      <li><a href="bsitur-img-bd/Fernando De Noronha/Ilhatur.jpg" rel="lightbox[thumbs]" title="legenda 1"><img src="bsitur-img-bd/Fernando De Noronha/Ilhatur.jpg" /></a></li>
      <li><a href="bsitur-img-bd/Fernando De Noronha/Mergulho.jpg" rel="lightbox[thumbs]" title="legenda 3">
      		<img src="bsitur-img-bd/Fernando De Noronha/Mergulho.jpg" /></a></li>
      <li><a href="bsitur-img-bd/Fernando De Noronha/Praia do Sancho.jpg" rel="lightbox[thumbs]" title="legenda 6"><img src="bsitur-img-bd/Fernando De Noronha/Praia do Sancho.jpg" /></a></li>
      <li><a href="bsitur-img-bd/Fernando De Noronha/Cacimba do Padre.jpg" rel="lightbox[thumbs]" title="legenda 6"><img src="bsitur-img-bd/Fernando De Noronha/Cacimba do Padre.jpg" /></a></li>
      <li><a href="bsitur-img-bd/Fernando De Noronha/Baia dos Porcos.jpg" rel="lightbox[thumbs]" title="legenda 6"><img src="bsitur-img-bd/Fernando De Noronha/Baia dos Porcos.jpg" /></a></li>
      -->
    </ul>

	<h1>Últimos Pontos Turísticos</h1>
		
    <div id="mural">

<?php
$sql = "SELECT id, data, titulo, local, texto
        FROM guias
        ORDER BY data DESC, id DESC
        LIMIT 3";
$resultados = mysql_query($sql)
    or die(mysql_error());
if(@mysql_num_rows($resultados)==0) echo("");
?>

<!-- ABRE O WHILE-->
<?php
while($res=mysql_fetch_array($resultados)){
	$id = $res[0];
	$data = $res[1];
	$titulo = $res[2];
	$local = $res[3];
	$texto = $res[4];
?>
	<h2><?php echo date('d/m/Y', strtotime($data)); ?> - <?php echo $titulo; ?></h2>
	<p><b><?php echo $local; ?>:</b><br />
		<?php echo $texto; ?></p>
<!-- FECHA O WHILE-->
<?php 
}
?>

    </div> <!-- mural -->
    
</div><!-- sidebar -->
