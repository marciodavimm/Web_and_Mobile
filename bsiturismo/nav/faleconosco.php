<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<h1>Fale Conosco</h1>
<img src="midias/efeito-faleconosco.jpg" />
<h2>Entre em contato para dúvidas, críticas ou sugestões</h2>

<?php

if(isset($_POST['enviar']) &&$_POST['enviar'] == 'send') {
	
	$date = date("d/m/Y h:i");
//	$telefone = $_POST['telefone'];
	
	// configurações do cabeçalho
	$nome_do_site = "BSITurismo";
	$email_para_onde_vai_a_mensagem = "marciodavimm@hotmail.com";
	$nome_de_quem_recebe_a_mensagem = "BSITurismo's Team";
	$exibir_apos_enviar = "";
	
	// mais configs da mensagem original
	$cabecalho_da_mensagem_original = "From: $nome <$email>\n";
	$assunto_da_mensagem_original = "Fale com BSITurismo";
	
	// formato do email a ser recebido
	$configuracao_da_mensagem_original = "
		Enviado por:\n
		Nome: $nome\n
		E-mail: $email\n
		Assunto: $assunto\n
		Telefone: $telefone\n\n\n
		Mensagem: $mensagem\n\n		
		ENVIADO EM: $date";
	
	// configs da mensagem de resposta
	$assunto_da_mensagem_de_resposta = "Confirmação - BSITurismo";
	$cabecalho_da_mensagem_de_resposta = "From: $nome_do_site <$email_para_onde_vai_a_mensagem>\n";
	$configuracao_da_mensagem_de_resposta = "Está é uma resposta automática, não é necessário respondê-la.\n
		Obrigado por entrar em contato conosco!\n
		Estaremos respondendo sua mensagem em breve.\n\n
		Mensagem original:\n\n
		Nome: $nome\n
		E-mail: $email\n
		Assunto: $assunto\n
		Telefone: $telefone\n\n\n
		Mensagem: $mensagem\n\n		
		ENVIADO EM: $date";
	
	//--------------- script para o formulário ---------------
	$assunto_digitado_pelo_usuario = "s";
	
	// envio da mensagem original
	$headers = "$cabecalho_da_mensagem_original";
	if($assunto_digitado_pelo_usuario=="s") {
		$assunto = "$assunto_da_mensagem_original";
	};
	$seuemail = "$email_para_onde_vai_a_mensagem";
	$mensagem = "$configuracao_da_mensagem_original";
	mail($seuemail,$assunto,$mensagem,$headers);
	
	// envio da mensagem de resposta automatica
	$headers = "$cabecalho_da_mensagem_de_resposta";
	if($assunto_digitado_pelo_usuario == "s") {
		$assunto = "$assunto_da_mensagem_de_resposta";
	}
	
	$mensagem = "$configuracao_da_mensagem_de_resposta";
	mail($email, $assunto, $mensagem, $headers);
	
	/* echo "<script>window.location='$exibir_apos_enviar'</script>"  */
	echo "Sua mensagem foi enviada com sucesso! Um e-mail de confirmação foi enviado para seu e-mail informado";
	
}
?>



<div id="formcontato">
    <form id="form1" action="" method="post" name="form1" enctype="multipart/form-data">
      <fieldset>
        <legend>Nome:</legend>
        <span id="sprytextfield1">
        <input name="nome" type="text" id="nome2" size="51" />
        <br />
		<span class="textfieldRequiredMsg">Informe seu Nome!</span></span>
      </fieldset> 
      <fieldset>
        <legend>E-mail:</legend>
        <span id="sprytextfield2">
        <input name="email" type="text" id="nome3" size="51" />
        <br />
        <span class="textfieldRequiredMsg">Informe seu e-mail!</span><span class="textfieldInvalidFormatMsg">Informe e-mail válido!</span></span>
      </fieldset> 
      <fieldset>
        <legend>Telefone:</legend>
        <span id="sprytextfield3">
        <input name="telefone" type="text" id="nome4" size="51" />
        <br />
		<span class="textfieldRequiredMsg">Informe seu telefone!</span><span class="textfieldInvalidFormatMsg">Número inválido!</span></span>
      </fieldset> 
      <fieldset>
        <legend>Assunto:</legend>
        <span id="sprytextfield4">
        <input name="assunto" type="text" id="nome" size="51" />
        <br />
		<span class="textfieldRequiredMsg">Informe um assunto!</span></span>
      </fieldset> 
      <fieldset>
        <legend>Mensagem:</legend>
        <span id="sprytextarea1">
        <textarea name="mensagem" id="mensagem" cols="55" rows="3"></textarea>
        <span id="countsprytextarea1">&nbsp;</span>
        <br />
		<span class="textareaMaxCharsMsg">Número máximo de caracteres excedido.</span><span class="textareaRequiredMsg">Digite sua mensagem aqui!</span></span>
      </fieldset> 
        <fieldset>
        	<input type="hidden" name="enviar" value="send" />
            <input name="send" type="submit" value="Enviar" id="send">
        </fieldset>
        	
    </form>
</div> <!-- formcontato -->
<p>Telefone: (84) 9999-9999<br>
  Email: marciodavimm@hotmail.com<br>
</p>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email", {useCharacterMasking:true});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "custom", {pattern:"(00) 0000-0000", useCharacterMasking:true});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {maxChars:500, counterId:"countsprytextarea1", counterType:"chars_remaining"});
</script>
