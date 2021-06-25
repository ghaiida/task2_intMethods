<?php


try{
	$con= mysqli_connect('localhost','root', 'abc123','control_arm');
}catch(PDOException $e){
    $error_message=$e->getMessage();
    exit();
	
}
/********************/
if(isset($_POST['submit'])){
    
   $motor1 = $_POST['volume1'];
   $motor2 = $_POST['volume2'];
   $motor3 = $_POST['volume3'];
   $motor4 = $_POST['volume4'];
   $motor5 = $_POST['volume5'];
   $motor6 = $_POST['volume6'];

$sql ="INSERT INTO motors(motor1, motor2, motor3, motor4, motor5, motor6) VALUES ('$motor1','$motor2','$motor3','$motor4','$motor5','$motor6')";

$run= mysqli_query($con,$sql) or die(mysqli_error($con));
}

/******************/

if(isset($_POST['run'])){
    
    $sql= "INSERT INTO run(move_arm) VALUES('on')"; 
    mysqli_query($con,$sql);
}

/*********************/
if(isset($_POST['left'])){
    
    $query2= "UPDATE directions SET
    direction='LEFT' " ;
     mysqli_query($con,$query2) ;
}
/*****************/
if(isset($_POST['right'])){
    
    $query2= "UPDATE directions SET
    direction='RIGHT' " ;
     mysqli_query($con,$query2) ;
}
/******************/
if(isset($_POST['forword'])){
    
    $query2= "UPDATE directions SET
    direction='FORWORD' " ;
     mysqli_query($con,$query2) ;
}
/**************/
if(isset($_POST['backword'])){
    
    $query2= "UPDATE directions SET
    direction='BACKWORD' " ;
     mysqli_query($con,$query2) ;
}
?>