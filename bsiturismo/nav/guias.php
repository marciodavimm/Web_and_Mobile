<h1>Guias Turísticos</h1>

<?php
$sql = "SELECT id, data, titulo, local, texto, imagem
        FROM guias
        ORDER BY data DESC, id DESC
        LIMIT 10";
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
