<?php
//registration 
$email1 =  $_GET['email'];

$validLogin =true;

if(empty($email1)){
  echo "Please enter a email.<br/>";
  $validLogin=false;
}
if(strpos($email1,'@')== false){
  echo "ERROR: Invalid Email<br/>";
  $validLogin=false;
}

if($validLogin){
  echo "Email: $email1<br/>";
  echo "Password: Can't tell you the password lol<br/>";
}
?> 
