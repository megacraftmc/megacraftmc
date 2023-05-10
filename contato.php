<?php


if (isset($_POST['BTSend'])) {
 
 //POST variables, change only if necessary
 //====================================================
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone']; 
 $assunto = $_POST['assunto']; 
 $message = $_POST['message'];
 //====================================================
 
 //SENDER --> THIS EMAIL MUST BE A VALID DOMAIN
 //==================================================== 
 $email_sender = "contato@megacraft.com.br"; // must be an email account on your domain
 //====================================================
 
 //Email settings, adjust as needed
 //==================================================== 
 $email_sender = "contato@megacraft.com.br"; // can be any email that will receive the messages
 $email_reply = "$email"; 
 $email_subject = "Contato MegaCraft! - $assunto"; // This will be the subject of the message
 //====================================================
 
 //Assemble the Message Body
 //====================================================
 $email_content = "Nome = $name \n"; 
 $email_content .= "Email = $email \n";
 $email_content .= "Telefone = $phone \n"; 
 $email_content .= "Assunto = $assunto \n"; 
 $email_content .= "Mensagem = $message \n"; 
 //====================================================
 
 //Set the Headers (Change only if necessary) 
 //==================================================== 
 $email_headers = implode ( "\n",array ( "From: $email_sender", "Reply-To: $email_reply", "Return-Path: $email_sender","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 //====================================================
 
 //Sending the email
 //==================================================== 
 if (mail ($email_sender, $email_subject, nl2br($email_content), $email_headers)){ 
 echo "</b>Email enviado com sucesso.<br>Você pode fechar essa janela!</b>"; 
 } 
 else{ 
 echo "</b>Email não foi enviado!</b>"; } 
 //====================================================
} 
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MEGACRAFT - CONTATO</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons )-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>	
		<link rel="shortcut icon" href="assets/css/images/icon.ico">
		<style>
		* {
			margin-left: 10px;
		}
		
		</style>
	
	
	</head>
	
<body>

				
			<h3>ENTRE EM CONTATO</h3>
			<form action="<? $PHP_SELF; ?>" method="POST"> 
			 <p> 
			 Nome:<br /> 
			 <input type="text" size="25" name="name"> 
			 </p>   
			 <p> 
			 E-mail:<br /> 
			 <input type="text" size="25" name="email"> 
			 </p>   
			 <p> 
			 Telefone:<br /> 
			 <input type="text" size="25" name="phone"> 
			 </p>  
			 <p> 
			 Assunto:<br /> 
			 <input type="text" size="25" name="assunto"> 
			 </p> 			 
			 <p> 
			 Menssagem:<br /> 
			 <input type="text" size="25" name="message"> 
			 </p>   <br>
			 <p>
					  <input type="submit" name="BTSend" value="Enviar"> 
			   <input type="reset" name="BTClear" value="Limpar">
			   
			   <button><a href="javascript:window.open('','_self').close();" class="video-close">Fechar</a></button>
					</p>     
					
				 


    </body>
</html>		