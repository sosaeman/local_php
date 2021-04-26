<?php
$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];
//to fix Undefined array key use ??"

//connect db
$db=mysqli_connect("localhost","root","","php-mysql");

//check connection
if(!$db){
    echo "<h1><b> not connected</b></h1>";    
    die('could not connect'.mysql_error());
       
        }
else{echo"<h1><b> connection successfull</b></h1>";}

//insert form data to db
$query= "INSERT INTO post (title, content, author) 
VALUES ('$title','$content','$author')";

//show query result
echo $query;

//check data insertion and add to db
if($db->query($query)== TRUE)
    {
        date_default_timezone_set("America/New_York");
        echo "<br>Data inserted succesfully on ". date("d-m-y")." at ".date("h:i:a");
    }
else{ echo "data not inserted".mysql_error();}

header('location:https://localhost/local_php/index_post.php');
// add to db
// mysqli_query($db,$query);

?>