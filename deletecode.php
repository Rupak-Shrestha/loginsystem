<?php
	session_start();
?>

<?php
	include("db.php");
?>

<?php
	if(isset($_GET['delid']))
	{
		$del=$_GET['delid'];
		$sql="Delete from records where id=".$del;
		$result=mysqli_query($db,$sql);
		header("Location:mainpage.php");
	}

?>