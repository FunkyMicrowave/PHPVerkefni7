<?php
$code = 626;
  if (isset($_POST['code'])) {
      if ($_POST['code'] == $code) {
?>
          <!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body{
            padding: auto;
            margin: none;
        }
        form{
            width: 300px;
            height: 400px;
            margin: 25px;
            float: left;
            background: lightgray;
            border-radius: 25px;
            padding: 10px;
        }
        #takki{
            margin-left: 100px;
            margin-right: 100px;
            margin-top: 60px;
            width: 100px;
            height: 66px;
            border-radius: 25px;
            background: white;
        }
    </style>
</head>

<body>
    <form action="signupacc.php" method="post">
      <h3>Sign Up</h3>
          Email<br>
           <input type="email" name="email" required><br>
          First name<br>
           <input type="text" name="fname" required><br>
          Last name<br>
           <input type="text" name="lname" required><br>
          Password<br>
           <input type="password" name="password" required>
           <input id="takki" type="submit">
    </form>
</body>
</html>

<?php
      }
      else{
          echo "<h1>Not right code</h1>";
          header("Refresh: 2; URL=../Verkefni7/");
      }
  }
      
?>