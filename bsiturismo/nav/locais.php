<h1>Localidades</h1>
<img src="midias/efeito-turismo.jpg" />

<h2>Local 1</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vehicula, ante ut facilisis scelerisque, erat est gravida lorem, sed eleifend diam mi et lacus. Duis rhoncus faucibus velit, eu consequat nunc mollis vulputate. Proin eget eros ipsum. Donec vulputate auctor hendrerit. Pellentesque vehicula scelerisque lacinia. Nulla vitae ligula at magna convallis interdum ac ac leo. Duis at accumsan nunc. Donec euismod fermentum dui a mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nec massa ut quam placerat venenatis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut imperdiet, eros eget mollis congue, erat est gravida diam, a tempus sapien elit non orci. Curabitur semper turpis eu orci hendrerit quis consequat justo tincidunt. Quisque bibendum est eget felis porta gravida.
</p>

<?php
$sql = "SELECT id, local, data, arquivo, descricao
        FROM locais
        ORDER BY data DESC, id DESC
        LIMIT 5";
$resultados = mysql_query($sql)
    or die(mysql_error());
if(@mysql_num_rows($resultados)==0) echo("");
?>

<!-- ABRE O WHILE -->
<?php
while($res=mysql_fetch_array($resultados)){
	$id = $res[0];
	$local = $res[1];
	$data = $res[2];
	$arquivo = $res[3];
	$descricao = $res[4];
?>
	<h2><?php echo date('d/m/Y', strtotime($data)); ?> &ndash; <?php echo $local; ?></h2>
		<?php echo $descricao; ?></p>
<!-- FECHA O WHILE -->
<?php 
}
?>

