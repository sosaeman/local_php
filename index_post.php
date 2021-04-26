<html> 
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<title>HTML with PHP</title>
</head>
 
 <body>
 <?php
// //function_alert( date_default_timezone_set("America/New_York")."Data inserted succesfully on ". date("d-m-y")." at ".date("h:i:a"));

// function function_alert() {
//      echo "<script type='text/javascript'>
//      alert('hello')
//     </script>";
//     // function myFunction() {
//     //   var x = document.getElementById('confirm');
//     //   if (x.style.display === 'none') {
//     //     x.style.display = 'block';
//     //   } else {
//     //     x.style.display = 'none';
//     //   }
//     // }
// }
?>
    <form style="float:left" action="https://localhost/local_php/php/insert_post.php" method="POST">
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" >
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Message</label>
          <textarea name="content" class="form-control" id="content" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
          <label for="author" class="form-label">author</label>
          <input type="text" class="form-control" id="author" name="author" >
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
     

      <table style="width:60%" class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Author</th>
          </tr>
        </thead>
        <tbody>
        <?php
          require_once("./php/get_post.php");
          getMainPosts();
        ?>
          
        </tbody>
      </table>
 </body>
 </html>