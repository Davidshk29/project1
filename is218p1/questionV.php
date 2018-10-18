<?php
	$qname1 = $_GET['qname1'];
	$qbody1 = $_GET['qbody1'];
	$qskills = $_GET['qskills'];
  
  $questionV = true;
  
	if(empty($qname1)){
  		echo "Empty</br>";
     $questionV=false;
	}
	if(strlen($qname1)<3){
  		echo "Type more than 3 characters </br>";
     $questionV = false;
	}
	if(empty($qbody1)){
  		echo "Empty";
     $questionV=false;
	}
	if(strlen($qbody1)>500){
  		echo "Type less than 500 characters </br>";
     $questionV=false;
	}
 
  if($questionV){
    echo "Question Name: $qname1</br>";
    echo "Question Body: $qbody1</br>";
    echo "Skill List: $qskills</br>";
    }

?>