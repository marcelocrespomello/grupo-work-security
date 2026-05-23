<?php

if (isset($_POST['email'])) {

    $email_to = "SEU_EMAIL_AQUI@exemplo.com";
    $email_subject = "Contato pelo site — Grupo Work Security";

    function died($error) {
        echo "Ocorreu um erro no formulário: " . $error;
        die();
    }

    if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['message'])) {
        died('Campos obrigatórios não preenchidos.');
    }

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = isset($_POST['phone']) ? $_POST['phone'] : '';
    $message = $_POST['message'];

    function clean_string($string) {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message  = "Novo contato pelo site do Grupo Work Security.\n\n";
    $email_message .= "Nome: "     . clean_string($name)    . "\n";
    $email_message .= "E-mail: "   . clean_string($email)   . "\n";
    $email_message .= "Telefone: " . clean_string($phone)   . "\n";
    $email_message .= "Mensagem: " . clean_string($message) . "\n";

    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    @mail($email_to, $email_subject, $email_message, $headers);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mensagem enviada — Grupo Work Security</title>
</head>
<body style="font-family: sans-serif; text-align: center; padding: 4rem; color: #0D2137;">
    <h2>Mensagem recebida!</h2>
    <p>Obrigado pelo contato. Retornaremos em breve.</p>
    <a href="index.html" style="color: #FFB300;">Voltar ao site</a>
</body>
</html>

<?php
}
?>
