<?php
if (!session_id()) session_start();
if (!$_SESSION['logon']){ 
    header("Location:index.php");
    die();
}//http://www.mustbebuilt.co.uk/php/insert-update-and-delete-with-pdo/
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
            float: right;
            background: lightgray;
            border-radius: 25px;
            padding: 10px;
        }
        #button{
            position: fixed;
            right: 0;
            top: 0;
            width: 200px;
            height: 100px;
            background: transparent;
            padding: 0;
            margin: 0;
            border-radius: 0;
        }
        #button input{
            width: 200px;
            height: 100px;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
  <h1><?php echo "<h1>" . $_SESSION['name'] . "</h1><h2>" . $_SESSION['email'] . "</h2>";
         ?>
    <form action="newpass.php" method="post"><br>
           New-Password<br>
        <input type="password" name="newpass" required><br>
           Retype-Password<br>
        <input type="password" name="repass" required><br>
           Old-Password<br>
        <input type="password" name="oldpass" required><br>
        <input value="Accept" type="submit">
    </form>
    <div>
        <?php for($i = 0; $i <= 4; $i++){
    echo "<img src='" .  . "'>";
}?>
    </div>
    <form id="button" action="logout.php" method="post"><br>
       <input value="Logout" type="submit" name="Logout">
    </form>
</body>
</html>
