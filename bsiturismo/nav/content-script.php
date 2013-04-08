<!-- include em conteudo -->
<?php
foreach($_REQUEST as $__opt =>$__val) {
	$$__opt = $__val;
}
if(empty($bsi)) {
	include("nav/home.php");
}
elseif(substr($bsi, 0, 4)=='http' or substr($bsi,0,1)=="/" or substr($bsi,0,1)=="."){
	echo '<br><font face=arial size=12px><br><b>A página não existe.</b>
			<br>Por favor, selecione uma página a partir do Menu Principal.</font>';
}
else {
	include("$bsi.php");
}
?>
<!-- include em conteudo -->
