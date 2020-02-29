<?php
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');
// Inicia a classe PHPMailer
$mail = new PHPMailer();
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.office365.com"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->Username = 'no-reply.vestibular@unespar.edu.br'; // Usuário do servidor SMTP
$mail->Password = 'Bupu2516'; // Senha do servidor SMTP
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "no-reply.vestibular@unespar.edu.br"; // Seu e-mail
$mail->FromName = "Sistema de Redações"; // Seu nome
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress($email, 'Redações');
//$mail->AddAddress('edvancc@gmail.com', 'Edvan');
//$mail->AddAddress('ciclano@site.net');
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Confirmação de Cadastro"; // Assunto da mensagem
$mail->Body = $mensagemHTML;
$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)";
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
// Envia o e-mail
$enviado = $mail->Send();
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
// Exibe uma mensagem de resultado
if ($enviado) {
  $msg= "<div class='ls-alert-success'>E-mail enviado com sucesso!</div>";
} else {
  $msg= "<div class='ls-alert-danger'>Não foi possível enviar o e-mail.</div>";
  $msg .= "<div class='ls-alert-danger'><b>Informações do erro:</b> " . $mail->ErrorInfo."</div>";
}