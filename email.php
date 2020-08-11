<?php
if (isset($_POST['enviar'])) {
    // atribuição de valores
    $from    = $_POST['de'];
    $para    = "JMQcomercial@hotmail.com";
    $nome    = $_POST['nome'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    // chamando o arquivo que contém a classe
  

    // Instanciando a classe PHPMailer
    $mail = ;

    // definido para usar a função mail()
    $mail->IsMail();

    // define o remetente
    $mail->SetFrom($from, $nome);

    // define os destinatario(s)
    $mail->AddAddress($para);

    // define o assunto do email
    $mail->Subject = $assunto;

    // define a mensagem (HTML)
    $mail->MsgHTML($mensagem);

    // envia o e-mail
    $enviado = $mail->Send();

    // status do envio
    if (!$enviado) {
 
        echo "Erro: " . $mail->ErrorInfo;;
        header('Location: contacto.php');
    } else {
        echo "Enviado com sucesso";
        header('Location: contacto.php');
    }
}
 
?>