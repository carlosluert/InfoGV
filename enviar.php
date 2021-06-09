<title>Status de Envio</title>
<!DOCTYPE html>
<html>

    <head>

        <title>InfoGV | Mural Virtual</title> 
      
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="css/bulma.min.css"/>
        

    </head>

    <body>

<?php
date_default_timezone_set('America/Sao_Paulo');


require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if((isset($_POST['email']) && !empty(trim($_POST['email']))) && (isset($_POST['mensagem']) && !empty(trim($_POST['mensagem'])))) 

	$nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Não informado';
	$cod = !empty($_POST['cod']) ? $_POST['cod'] : 'Não informado';
	$email = $_POST['email'];
	$assunto = !empty($_POST['assunto']) ? utf8_decode($_POST['assunto']) : 'Não informado';
	$ano = !empty($_POST['ano']) ? utf8_decode($_POST['ano']) : 'Não informado';
	$mensagem = $_POST['mensagem'];
	$data = date('d/m/Y H:i:s');

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'carlosluert@gmail.com';
	$mail->Password = 'kadu2002';
	$mail->Port = 587;

	$mail->setFrom('carlosluert@gmail.com');
	$mail->addAddress('carlosluert@gmail.com');

	$mail->isHTML(true);
	$mail->Subject = $assunto;
	$mail->Body = "Nome: {$nome}<br>
				   Código InfoGV: {$cod}<br>	
				   Email: {$email}<br>
				   Ano: {$ano}<br>
				   Mensagem: {$mensagem}<br>
				   Data/hora: {$data}";

				  
	if($mail->send()) {
		echo '<center><div class="quebra-linha"><i>Email enviado com sucesso, aguarde o retorno.</i></div><center></br>';
	} 
	else {
		echo '<center><div class="quebra-linha"><i>Email não enviado, tente novamente.</i></div><center></br>';
	}
	

?>
<a href="form.php"><button class="button is-link is-small"><div>Voltar</div></button></a>
</body>

</html>
