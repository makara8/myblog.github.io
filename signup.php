<?php 
$server=mysqli_connect("localhost","root","","test");
if (!$server) {
  die ("not have");
}
$passwordErr = $repasswordErr = "";
 if (isset($_POST["username"])&&isset($_POST["password"])&&isset($_POST["repassword"])) {
  if ($_POST["password"]==$_POST["repassword"]) {
    $password= password_hash($_POST["password"],PASSWORD_DEFAULT);
    $query="INSERT INTO editor";
    $query.=" (username,password)";
    $query.="VALUES ('{$_POST["username"]}','{$password}')";
    $result=mysqli_query($server,$query);
    header("Location: /php/login.php");
  }else {
    $repasswordErr="* Repassword is not match";
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
    <style>
      .error {color: #FF0000;}
      </style>
</head>
<body>
    <div>
        <h1 style="text-align: center;">Sign Up</h1>
    </div>
    <div class="container mt-3">
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
              <span class="error"><?php echo $passwordErr;?></span>
            </div>
            <div class="mb-3">
              <label for="repwd" class="form-label">Repassword:</label>
              <input type="password" class="form-control" id="repwd" placeholder="Enter password" name="repassword" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              <span class="error"><?php echo $repasswordErr;?></span>
            </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          
          </form>
    </div>
</body>
</html>