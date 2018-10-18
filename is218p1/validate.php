<?php
//registration 
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$birthday=$_GET['birthday'];
$email=$_GET['email'];

$validateS=true;

if(empty($fname)){
  echo "Please enter a first name.<br/>";
  $validateS=false;
}
if(empty($lname)){
  echo "Please enter a last name.<br/>";
  $validateS=false;  
}
if(empty($birthday)){
  echo "Please enter a birthday.<br/>";
  $validateS=false;
}
if(empty($email1)){
  echo "Please enter a email.<br/>";
  $validLogin=false;
}
if(strpos($email1,'@')== false){
  echo "ERROR: Invalid Email<br/>";
  $validLogin=false;
}
	
if($validateS){
  echo "First name: $fname<br/>";
  echo "Last name : $lname<br/>";
  echo "Birthday  : $birthday<br/>";
  echo "Email     : $email<br/>";
  echo "Password  : can't share that with you<br/>";
} 
?> 
