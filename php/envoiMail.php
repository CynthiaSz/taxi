<?php 

function sendMail($to, $subject, $body){

require_once "Mail.php";
 
 $from = "Taxi Lerm <cynthiaszarzynski30@gmail.com>";
 $to = "Taxi <taxi33@yopmail.com>";
 $host = "ssl://smtp.gmail.com";
 $port = "465";
 $username = "cynthiaszarzynski30";
 $password = "jet'aime33210";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'port' => $port,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 if (PEAR::isError($mail)) {
  throw new Exception($mail->getMessage(), 1);
  }
}
 ?>