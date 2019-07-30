<?php
		include(welcome.php)
		$myuname=$uname;
		$myemail=$mail;
		$mypass=$pass;

		if(isset($_POST['rem']))
		{
			$user=$_POST['uname'];
			$email=$_POST['mail'];
			$password=$_POST['pass'];
			$rem=$_POST['rem'];
			if($email==$myemail and $pass==$mypass)
			{
				$rem=$_POST['remember'];
				if(isset($_POST['remember']))
				{setcookie('email',$email,time()+60*60*7);


				setcookie('password',$password,time()+60*60*7);
			}
				session_start();
				$_SESSION['email']=$email;
				header("location:welcome.php")
			
			}
			else
			{
				echo "Email or password is invalid.<br> click here to <a href='formtry.php'>try again</a>";

			}

		}
		else
		{

			header("location: formtry.php");
		}
?>






<?php
	
?>




