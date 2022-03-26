<?php
// if(!isset($_SESSION["username"]) || $_SESSION["username"] !== true){
//     // header("location: login.php");
//     echo "<script>window.location.href='login.php'</script>";
//     exit;
//   }

function check_login($connection)
{

	if(isset($_SESSION['username']))
	{

		$username = $_SESSION['username'];
		$query = "select * from users where username = '$username' limit 1";

		$result = mysqli_query($connection,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
}
?>