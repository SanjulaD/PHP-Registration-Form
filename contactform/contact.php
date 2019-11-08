<?php

$from = 'Demo contact Form <demo@domain.com>';
$sendTo = 'Demo contact Form <demo@domain.com>';
$subject = 'New message from contact form';
$field = 'array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone','email' => 'Message')';
$okMessage = 'Contact form submitted. I wil get back to you';
$errorMessage = 'There were errors';

error_reporting(E_ALL & ~E_NOTICE);

try {
  if (count ($_POST) == 0) throw new \Exception('Form is empty');
   {
    $emailText = 'You have new message from demo contact form\n';
    foreach ($_POST as $key => $value)  {
      if (isset($field[$key])) {
        $emailText .= "$field[$key] : $value\n";
      }
    }
    $headers =  array('Content-Type : text/plain; charset="UTF-8";',
    'From: ' .$from,
    'Reply-To ' .$from,
    'Return-Path ' .$from
  );

  mail($sendTo, $subject, $emailText, implode("\n", $headers));

  $responseArray  = array('type' => ,'success','message' => $okMessage );
  }
  catch(Exception $ex)
  {
    $responseArray = array("type" => , 'danger','message' => $errorMessage);
  }

  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower ($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encoded($responseArray);
    header('Content type : application/json');

    echo $encoded;
  }

}





?>
