<html> 
    <head>
        <!-- CSS only -->
        <link href='styles/styles.css' rel='stylesheet'/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<title>HTML with PHP</title>
</head>
 
 <body>
 <header class="top"class="mb-auto">
            <div>
              <h1 class="float-md-start mb-0"><a class="CC" href="home.html">C C</a></h1>
              <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link active" aria-current="page" href="home.html">Home</a>
                <a class="nav-link" href="login_page.php">Login</a>
                <a class="nav-link" href="signup_page.php">Sign Up</a>
              </nav>
            </div>
  </header>
    <form style="float:left" action="https://localhost/local_php/php/insert_post.php" method="POST">
        <div class="mb-3">
          <label for="title" class=" form-label"><b>Title</b></label>
          <input type="text" class=" form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
          <label for="content" class=" form-label"><b>Message</b></label>
          <textarea name="content" class="form-control" id="content" cols="30" rows="10" required></textarea>
        </div>
        <!-- <div class="mb-3">
          <label for="author" class="form-label">author</label>
          <input type="text" class="form-control" id="author" name="author" >
        </div> -->
        <button type="submit" name="submit" class="btn btn-dark">Submit</button>
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