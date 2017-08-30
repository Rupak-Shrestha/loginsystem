<?php
	session_start();
?>

<?php
	echo "this is login code part!!!";

	$db=mysqli_connect("localhost","root","");
	mysqli_select_db($db,"logindata");
?>

<?php
	if (isset($_POST['submit']))
	{
			$userid=$_POST['userid'];
			$password=$_POST['password'];

			if (!empty($userid) && !empty($password))
			{
				$sql="select * from records where userid='$userid' && password='$password'";
				$result=mysqli_query($db,$sql);
				if(mysqli_num_rows($result)>0)
				{
					$row=mysqli_fetch_array($result);
					header("Location:mainpage.php");
				}
				else
				{
					header("Location:index.php");
				}
			}

			// elseif (empty($userid) || empty($password))
			// {
			// 	header("Location:index.php");
			// }
	}
?>