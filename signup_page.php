<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href='styles/styles.css' rel='stylesheet'/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">    
 <title>Document</title>
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
<div class="title">
    <h1>Sign Up</h1>
</div>
<form class="mt-5 " style="float:left" action="https://localhost/local_php/php/signup.php" method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">User Name</label>
          <input type="text" class="form-control" id="name" name="name"  required>
        </div>
        <div class="mb-3">
          <label for="mail" class="form-label">Email</label>
          <input name="mail" class="form-control" id="mail" required >
        </div>
        <div class="mb-3">
          <label for="password" class="form-label" >Password</label>
          <input type="password" class="form-control" id="password" name="password" required >
        </div>
        <button type="submit" name="submit" class="btn btn-dark">Submit</button>
      </form>
      <div>
       <?php 
         // require("./php/login.php");
       //   login();
        ?> 
         
      </div>
</body>
</html>