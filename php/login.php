<?php
session_start();
$db = mysqli_connect("localhost","root","","php-mysql");
$mail = $_POST['mail']??"";
$name = $_POST['name']??"";
$pass = $_POST['password']??"";
$query = " SELECT id FROM author WHERE mail = '$mail' AND password = '$pass'";
$result = mysqli_query($db,$query);
 

 if(mysqli_num_rows($result) == 1){
    foreach($result as $item){
        $row= $item['id'];
    }
       $_SESSION['author'] = $row;
    
     header('location:https://localhost/local_php/index_post.php');
    }
      else{
         
        echo "<script>alert('login fail try again');</script>";
        //  header('location:https://localhost/local_php/login_page.php?error=1');
         header('Refresh: 0; url=https://localhost/local_php/login_page.php');

    }
?>
