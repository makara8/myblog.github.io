<?php 
$server=mysqli_connect("localhost","root","","test");
if (!$server) {
  die ("not have");
}
if (isset($_POST["username"])&&isset($_POST["password"])) {
    $password= password_hash($_POST["password"],PASSWORD_DEFAULT);
    $query="SELECT * FROM editor WHERE username='{$_POST["username"]}'";
    $result=mysqli_query($server,$query);
    $editor=mysqli_fetch_assoc($result);
    mysqli_free_result($result); 
    if ($editor) {
        if (password_verify($_POST["password"],$editor['password'])) {
            header("Location: /php/index2.php");
        }else {
            header("Location: /php/login.php");
            exit();
        }
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-3">
    <div>
        <h1 style="text-align:center;">Login</h1>
    </div>
        <form method="post">
            <div class="mb-3 mt-3">
              <label for="uname" class="form-label">Username:</label>
              <input type="text" class="form-control" id="uname" placeholder="Enter username" name="username" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3">
              <label for="pwd" class="form-label">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          
          </form>
    </div>
</body>
</html>