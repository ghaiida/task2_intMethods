<?php

$con= mysqli_connect('localhost','root', 'abc123','control_arm');


    $sql="SELECT motor1, motor2, motor3, motor4, motor5, motor6 from motors ";
    $result=mysqli_query($con,$sql)or die(mysqli_error($con));
    
    if($result->num_rows >0){
          $row=$result->fetch_assoc();
              echo" $row[motor1].' '.$row[motor2].' '$row[motor3].' '$row[motor4].' '$row[motor5].' '$row[motor6] ";
   }

?>