<?php

 $db = mysqli_connect("localhost","root","","php-mysql");
 $mail = $_POST['mail'];
 $name = $_POST['name'];
 $pass = $_POST['password'];
 $query = "INSERT INTO author (name, mail ,password) VALUES ('$name','$mail','$pass')";
 $result = mysqli_query($db,$query);
 if($db == TRUE){
    echo'connected';
 }
 else{
   echo "<script>alert('login fail try again');</script>";
    header('Refresh: 0; url=https://localhost/local_php/signup_page.php');
     }

    header('location:https://localhost/local_php/login_page.php');
   
?>
