<!DOCTYPE html>
<html>
<head>
  <title>Load PHP File with JavaScript Example</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    function loadPHP() {
      $.ajax({
        url: 'signup.php',
        success: function(data) {
          console.log(data);
        }
      });
    }
  </script>
</head>
<body>
  <a href="#" onclick="loadPHP()">Click here to load example.php</a>
</body>
</html>