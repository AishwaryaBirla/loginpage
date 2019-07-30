<?php
	session_start();
	session_destroy();
	echo "you have logged out succesfully";
	echo "click here to login again <a href='formtry.php'>login</a>";
	
?>