<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = $_POST['nome'];
$emailremetente    = trim($_POST['email']);
$emaildestinatario = 'fabianealmeida@gmail.com'; //Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
// $telefone          = $_POST['telefone'];
$assunto          = 'Formulário de Contato - Fabiane Almeida'; //$_POST['assunto'];
$mensagem          = $_POST['mensagem'];
 

if(isset($_POST['news']) && 
   $_POST['news'] == 'Sim') 
{
    $noticias = '<p style="color:blue; text-align:center; text-transform:uppercase"> Quero Receber Notícias!</p>';
}
else
{
    $noticias = '<p style="color:red; text-align:center; text-transform:uppercase"> NÃO quero receber notícias.</p>';
}


/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<p style="text-align:center; text-transform:uppercase"><b>Formulário de Contato<br> Fabiane Almeida</b></p>
<hr>
<p><b>Assunto:</b> '.$assunto.'</p>
<p><b>Mensagem:</b> '.$mensagem.'</p>
<p><b>Nome:</b> '.$nomeremetente.'</p>
<p><b>E-Mail:</b> '.$emailremetente.'</p>
<hr>
<b>'.$noticias.'</b>
<hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n"; // remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
$headers .= "Reply-To: $emailremetente\r\n"; // return-path
$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers); 
 
 if($envio)
echo "<script>location.href='sucesso.html'</script>"; // Página que será redirecionada

?>
