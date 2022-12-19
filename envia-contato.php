<?php

  session_start();
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];

  require_once ("PHPMailerAutoload.php");

  $mail = new PHPMailer();

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;
  $mail->SMTPSecure = 'tls';
  $mail->SMTPAuth = true;
  $mail->Username = 'email';
  $mail->Password = 'pass';

  //Add o teu email e o teu nome abaixo
  $mail->setFrom('email', 'email');
  $mail->addAddress('email');
  $mail->isHTML(true);

  //Add o titulo para a tua mensagem
  $mail->Subject = "Contato pelo Site";
  $mail->Body = "
      <strong>de:</strong> {$nome} <br>
      <strong>email:</strong> {$email} <br>
      <strong>Mensagem:</strong> <br>
      {$mensagem}
  ";
  $mail->AltBody = "de: {$nome}\n email: {$email} \n Mensagem \n {$mensagem}";

  if ($mail->send()) {
    $_SESSION['success'] = "Mensagem enviada com sucesso";
    header("Location: index.php");
  } else {
    $_SESSION['danger'] = "Erro ao enviar a mensagem" . $mail->ErrorInfo;
    header("Location: index.php");
  }

  die();

?>
