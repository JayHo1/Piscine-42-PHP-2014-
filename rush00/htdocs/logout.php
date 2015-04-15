<?php
	session_start();
	echo "You are logged out.";
	echo "<a href=\"index.php\">Back to home</a>";
	$_SESSION = array();
	session_destroy();

?>