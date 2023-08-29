<?php

//Variáveis
$assunto = $_POST['assunto'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$to = "marketing@protocolxnetwork.com";
$from = $email;

//Headers config
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  afaferz.ml <".$email.">\n";
$headers .= "X-Sender:  <".$email.">\n";
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <".$email.">\n";
$headers .= "MIME-Version: 1.0\n";

//Conteúdo e-mail
$subject = "Contact Form Website ProtocolX Network";
$templateHTML = '<table style="margin-top: 3em; margin-bottom: 3em; font-family: "Times New Roman", Times, serif;" align="left" border="0" cellpadding="0" cellspacing="0" width="600" height="auto">
<tr>
 <td style="padding: .75em">
  <span style="font-size: 1.25em; font-weight: bold; text-transform: uppercase;">Nome:</span>
  <span style="margin-left: .5em; font-size: 1.25em">'.$nome.'</span>
 </td>
</tr>
<tr>
 <td style="padding: .75em">
  <span style="font-size: 1.25em; font-weight: bold; text-transform: uppercase;">Email:</span>
  <span style="margin-left: .5em; font-size: 1.25em">'.$email.'</span>
 </td>
</tr>
<tr>
 <td style="padding: .75em">
  <span style="font-size: 1.25em; font-weight: bold; text-transform: uppercase;">Assunto:</span>
  <span style="margin-left: .5em; font-size: 1.25em">'.$assunto.'</span>  
</td>
</tr>
<tr>
 <td style="padding: .75em">
    <span style="font-size: 1.25em; font-weight: bold; text-transform: uppercase;">Mensagem:</span><br>
    <span style="display:block; padding-top: .75em; font-size: 1.25em">'.$mensagem.'</span>
 </td>
</tr>
</table>';
$body = $templateHTML;

mail($to, $subject, $body, $headers);
?>