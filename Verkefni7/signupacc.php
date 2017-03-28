<?php
  if (isset($_POST['email'])) {
          include "conn.php";
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $pass = $_POST['password'];
      $email = $_POST['email'];
    try {
        $sql = "
        INSERT INTO users
        (fname, lname, pass, email)
        VALUES
        (:fname,:lname,:pass,:email);
        ";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':fname', $fname);
        $statement->bindValue(':lname', $lname);
        $statement->bindValue(':pass', $pass);
        $statement->bindValue(':email', $email);
        $inserted = $statement->execute();	
        if($inserted){
    echo 'Row inserted!<br>';
}
	} catch (Exception $e) {
		echo "Ekki tókst að skrá gögnin". "<br>" . $e->getMessage();
	}
    header("Refresh: 2; URL=../Verkefni7/");
  }
else{
    header "../Verkefni7/";
}
      
?>