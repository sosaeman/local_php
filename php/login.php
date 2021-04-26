<?php
 $db=mysqli_connect("localhost","root","","php-mysql");
 $mail=$_POST['mail']??"";
 $pass=$_POST['password']??"";
 $query= "SELECT id FROM author WHERE mail='$mail' AND pass= '$pass'";

if($db == TRUE){
    echo'connected';
}
?>
