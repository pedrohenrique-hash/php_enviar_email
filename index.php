    <?php 
      require_once('src/PHPMailer.php');
      require_once('src/SMTP.php');
      require_once('src/Exception.php');

      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\SMTP;
      use PHPMailer\PHPMailer\Exception;

      $mail = new PHPMailer(true);
      try{
        $mail-> SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail-> SMTPAuth = true;
        $mail -> Username ='email';
        $mail -> Password = 'password';
        $mail -> Port= 587;

        $mail-> setFrom('email');
        $mail->addAddress('email');
        $mail -> isHTML(true);
        $mail -> Subject = "Teste de email via gmail Canal Ti";
        $mail-> Body='Chegou o emaiol teste do <strong> Canal TI 
</strong>';
$mail-> AltBody = "Chegou o email teste do Canal TI";

if($mail -> send()){
  echo'Email enviado com sucesso';
}else{
  echo 'Email nao enviado';
}
        
        
      }catch(Exception $e){
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
      }
    ?> 
