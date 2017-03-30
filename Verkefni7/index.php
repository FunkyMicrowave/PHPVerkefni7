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
        #lina{
            width: 2px;
            height: 400px;
            background: black;
            border-radius: 25px;
            float: left;
            margin: 25px;
        }
        #takki, #takki1{
            margin-left: 100px;
            margin-right: 100px;
            margin-top: 130px;
            width: 100px;
            height: 66px;
            border-radius: 25px;
            background: white;
        }
        #takki1{
            margin-top: 180px;
        }
    </style>
</head>

<body>
    <form action="signin.php" method="post">
      <h3>Sign In</h3>
          Email<br>
           <input type="email" name="email" required><br>
           Password<br>
           <input type="password" name="password" required>
           <input value="Sign in" id="takki" type="submit">
    </form>
    <div id="lina"></div>
    <form action="signup.php" method="post">
      <h3>Sign Up</h3>
          Code<br>
           <input type="password" name="code" required>
           <input value="Sign up" id="takki1" type="submit">
    </form>
</body>
</html>