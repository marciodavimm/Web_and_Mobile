<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "../index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "index3.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Painel de Controle</title>
<link href="estilo.css" rel="stylesheet" type="text/css"  />
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />

<!-- conecta ao banco de dados -->
<?php include"../Connections/config.php";

$conexao = mysql_connect("$hostname_config", "$username_config","$password_config")
	or die ("Erro ao connectar ao banco de dados.");
	
$db = mysql_select_db("$database_config")
	or die ("Erro ao selecionar a base de dados");
?>

<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
</head>

<body>
	<div id="box"> 
    <a href="<?php echo $logoutAction ?>">Deslogar</a>
	  <div id="painel">
      <?php
	  if(isset($_POST['cadastra']) && $_POST['cadastra'] == 'add') {
		  
			$cadastra = mysql_query("INSERT INTO guias (data, titulo, local, texto, imagem) VALUES ('$_POST[data]', '$_POST[titulo]', '$_POST[local]', '$_POST[texto]', 'bsitur-img-bd/$_POST[local]/$_POST[titulo]')");
			if($cadastra == '1'){ echo "<h3>Cadastrado com sucesso!</h3>"; }
			else { echo "<h3>Erro ao Cadastrar!\n"</h3>; }
	  }
      ?>
      
      
      
      <?php
	  if(isset($_POST['apagar']) && $_POST['apagar'] == 'excluir') {
			$deleta = mysql_query("DELETE FROM guias WHERE id = '$_POST[id]'");
			if($deleta == '1'){ echo "<h3>Deletado com sucesso!</h3>"; }
			else { echo "<h3>Erro ao deletar!</h3>"; }
	  }
	  ?>
      
      
       	  <form id="form1" action="" method="post" name="form1" enctype="multipart/form-data">
           	  <table border="0" align="center">
                  <tr>
                    <td colspan="2" align="center"><strong>Cadastrar novo Ponto Turístico</strong></td>
                  </tr>
                  <tr>
                    <td>Local:</td>
                    <td><span id="sprytextfield1">
                      <label>
                        <input name="local" type="text" id="local" size="51" />
                      </label>
                    <span class="textfieldRequiredMsg">Campo Obrigatório!</span></span></td>
                  </tr>
                  <tr>
                    <td>Título:</td>
                    <td><span id="sprytextfield2">
                      <label>
                        <input name="titulo" type="text" id="titulo" size="51" />
                      </label>
                    <span class="textfieldRequiredMsg">Campo Obrigatório!</span></span></td>
                  </tr>
                  <tr>
                    <td>Texto:</td>
                    <td><span id="sprytextarea1">
                      <label>
                        <textarea name="texto" cols="53" rows="3" id="texto"></textarea>
                      </label>
                    <span class="textareaRequiredMsg">Campo Obrigatório!</span></span></td>
                  </tr>
                  <tr>
                    <td align="left">Data:</td>
                    <td align="left"><label><input name="data" type="text" id="data" 
                    	value="<?php echo date('Y-m-d') ?>" size="51" readonly="readonly" /></label>
                    </td>
                </tr>
                
                  <tr>
                    <td>&nbsp;</td>
                    <td align="center"><label>
                	    <input name="imagem" type="hidden" id="imagem" size="51" readonly="readonly" value="" />
                    	<input	type="hidden" name="cadastra" value="add" />
                    	<input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar Ponto" />
                        </label>
                    </td>
                  </tr>
                </table>
		  </form>
      </div><!-- painel --> 
      
        <div id="painel">    
        <?php
		$sql = "SELECT id, titulo, local FROM guias ORDER BY local, data DESC";
		$resultado = mysql_query($sql)
						or die (mysql_error());
		if(@mysql_num_rows($resultado)==0) echo ("Não há nada cadastrado nos guias...");
		?>
        
            <form id="form2" action="" method="post" name="form2" enctype="multipart/form-data" >
           	  <table  border="0" align="center">
                    <tr>
                      <td><label><select name="id" id="id">
                        <option value="-1">Selecione Ponto Turístico</option>
        <?php 
		while($linha = mysql_fetch_array($resultado)) {
			$id = $linha[0];
			$titulo = $linha[1];
			$local = $linha[2]
        ?>
                        <option value="<?php echo $id; ?>"><?php echo $local; ?> / <?php echo $titulo; ?></option>
        <?php 
		}
        ?>
                        </select>
                      </label>
                      </td>
                      <td><label>
                      <input type="hidden" name="apagar" value="excluir" />
                      <input type="submit" name="excluir" id="excluir" value="Apagar Ponto" />
                      </label>
                      </td>
                    </tr>
                </table>

          </form>
            
      </div><!-- painel -->

    </div><!-- box -->

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
</script>
</body>
</html>
