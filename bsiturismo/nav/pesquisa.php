
<?php

$search = $_POST['search'];

$sql = "SELECT id, data, titulo, local, texto, imagem
        FROM guias
        WHERE titulo LIKE '%$search%' OR local LIKE '%$search%' OR data LIKE '%$search%'
		ORDER BY Local DESC, data DESC";
		
$resultados = mysql_query($sql)
    or die(mysql_error());

$count = @mysql_num_rows($resultados);
if($count == 0) echo("<h1>Sua pesquisa não retornou resultados. Tente novamente.</h1>");
else {
	if($count>=1) echo "<h1>Sua pesquisa retornou $count resultado(s)!!</h1><br />";
}
?>

<!-- ABRE O WHILE-->
<?php
while($res=mysql_fetch_array($resultados)){
	$id = $res[0];
	$data = $res[1];
	$titulo = $res[2];
	$local = $res[3];
	$texto = $res[4];
	$imagem = $res[5];
?>
	<div id="muralpg">
        <span class="muralimg"><img src="<?php echo $imagem; ?>.jpg" /></span>
        
        <h2><?php echo date('d/m/Y', strtotime($data)); ?> - <?php echo $titulo; ?></h2>
        <p><b><?php echo $local; ?>:</b></p>
            <p><?php echo $texto; ?></p>
    </div>
<!-- FECHA O WHILE-->
<?php 
}
?>
