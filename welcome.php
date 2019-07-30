
<?php
	if(isset($_COOKIE['email']) and isset($_COOKIE['password']))
	{	$email=$_COOKIE['email'];
		$password=$_COOKIE['password'];
		echo "<script>
			document.getElementById('email').value='$email';

			document.getElementById('pass').value='$password';
		</script>";
	}
	$host="localhost";
	$user="root";
	$password="";
	$db="demo";
	
	$conn= new mysqli($host,$user,$password,$db);
	if ($conn->connect_error)
	 {
    	die("Connection failed: " . $conn->connect_error);
	} 
	$uname=$_POST["uname"];
	$mail=$_POST['mail'];
	$password=$_POST['pass'];
	
if(isset($_POST['uname']))
{	
	$sql = "SELECT * FROM loginform WHERE username='".$uname."' AND email='".$mail."' AND password='".$password."'";
	$result = mysqli_query($conn, $sql);
	$row= mysqli_fetch_array($result);
		if(mysqli_num_rows($result)==1)
		{

			echo "logged in   <br> ";
	$login_session = $row['username'];
			session_start();
			
	echo "welcome<br>"; 
	echo "<a href='logout.php'>logout</a>";

		}
			
		else
		{

			die('Invalid query:' . mysqli_error($conn));
		}
		
}
?>
