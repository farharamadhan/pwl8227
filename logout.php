<?php
    session_start();
	unset($_SESSION['username']);
	unset($_SESSION['priority']);
	echo "<script>document.location='login.php';</script>";
?>