<?php
  if (isset($_POST['newpass']) && $_POST['newpass'] == $_POST['repass']) {
          include "conn.php";
              session_start();
      $new = $_POST['newpass'];
      $email = $_SESSION['email'];
    try {
        $sql = "UPDATE users
                SET pass = :newpass
                WHERE email = :email;";
        $query = $pdo->prepare($sql);
        $query->execute( array( ':newpass'=>$new, ':email'=>$email ) );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e) {
		echo "Ekki tókst að skrá gögnin". "<br>" . $e->getMessage();
	}
  }
          header("Refresh: 2; URL=../Verkefni7/");
?>
<h1>You are being redirected</h1>