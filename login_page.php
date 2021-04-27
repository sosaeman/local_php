<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form style="float:left" action="https://localhost/local_php/php/login.php" method="POST">
        <div class="mb-3">
          <label for="mail" class="form-label">Email</label>
          <input type="text" class="form-control" id="mail" name="mail" >
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="text" class="form-control" id="password" name="password" >
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>