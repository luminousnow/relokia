<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'phpmailer/src/Exception.php';
  require 'phpmailer/src/PHPMailer.php';

  $mail = new PHPMailer(true);
  $mail->CharSet = 'UTF-8';
  $mail->IsHTML(true);


  // Від кого лист
  $mail->setFrom('info@luminousnow.space');
  // Куди надіслати
  $mail->addAddress($_POST['email']);
  // Тема листа
  $mail->Subject = 'Relokia multi form';
  // Тіло листа
  $body = '<h1>Let`s check what we got</h1>';


  // перевірка введених даних
  if(trim(!empty($_POST['name']))){
    $body.='<p><strong>Name: </strong>'.$_POST['name'].'</p>';
  }
  if(trim(!empty($_POST['email']))){
      $body.='<p><strong>Email: </strong>'.$_POST['email'].'</p>';
  }
  if(trim(!empty($_POST['phone']))){
      $body.='<p><strong>Phone: </strong>'.$_POST['phone'].'</p>';
  }
  if(trim(!empty($_POST['calculate']))){
      $body.='<p><strong>Price: </strong>'.$_POST['calculate'].'</p>';
  }

  $mail->Body = $body;


  // відправка
  if(!$mail->send()){
    $message = '⚠️ We cannot send you email right now. Use alternative way to contact us';
  } else { 
    $message = '✅ Your email was send successfully';
  }

  // формуємо відповідь
  $response = ['message' => $message];

  // повертаємо в js
  header('Content-type: aplication/json');
  echo json_encode($response);

?>