<?php
  if (isset($_POST['email'])) {
          include "conn.php";
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $pass = $_POST['password'];
      $email = $_POST['email'];
    try {
        $sql = "INSERT INTO users (fname, lname, pass, email) VALUES (:fname,:lname,:pass,:email);";
        $query = $pdo->prepare($sql);
        $query->execute( array( ':fname'=>$fname, ':lname'=>$lname, ':pass'=>$pass, ':email'=>$email ) );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e) {
		echo "Ekki tókst að skrá gögnin". "<br>" . $e->getMessage();
	}
    header("../Verkefni7/");
  }
else{
    header("../Verkefni7/");
}
      
?>