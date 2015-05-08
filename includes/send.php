<meta http-equiv="refresh" content="0;url=http://beta.cauealmeida.com/confirmacao-de-contato/">

<?php 
$ip = getenv("REMOTE_ADDR");

//1 – Definimos Para quem vai ser enviado o email 
$para = ""; 
//2 - resgatar o nome digitado no formulário e grava na variavel $nome 
$nome = $_POST['name']; 
$email = $_POST['emailaddress']; 
// 3 - resgatar o assunto digitado no formulário e grava na variavel //$assunto 
$assunto = $_POST['subject']; 
//4 – Agora definimos a mensagem que vai ser enviado no e-mail 
$mensagem = "<strong>Nome: </strong>".$nome."<br><strong>E-mail:</strong> ".$email."<br><strong>Assunto:</strong> ".$assunto; $mensagem .= "<br> <strong>Mensagem: </strong>".$_POST['message']."<br><strong>IP:</strong> ".$ip; 
//5 – agora inserimos as codificações corretas e tudo mais. 

$headers = "Content-Type:text/html; charset=UTF-8\n"; 
$headers .= "From: Contato hosting-here.com<name@hosting-here.com>\n"; 
//Vai ser //mostrado que o email partiu deste email e seguido do nome 
$headers .= "X-Sender: <name@your-hosting-here.com>\n"; 
//email do servidor //que enviou 
$headers .= "X-Mailer: PHP v".phpversion()."\n"; $headers .= "X-IP: ".$_SERVER['REMOTE_ADDR']."\n"; $headers .= "Return-Path: <caue@cauealmeida.com>\n"; 
//caso a msg //seja respondida vai para este email. 
$headers .= "MIME-Version: 1.0\n"; 
mail($para, $assunto, $mensagem, $headers); 
header("Location: http://something-here.com/confirmacao-de-contato/"); 
//função que faz o envio do email. 
?>