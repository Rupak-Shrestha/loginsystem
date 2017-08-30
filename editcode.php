<?php
	session_start();
	include('db.php');
?>

<?php
	if(isset($_POST['submit']))
	{
		$id=$_POST['id'];
        $name=$_POST['name'];
        $age=$_POST['age'];
        $sex=$_POST['sex'];
        $pnum=$_POST['phone_no'];
        $email=$_POST['email'];
        $uid=$_POST['uid'];
        $password=$_POST['password'];

        if (!empty($name) && !empty($age) && !empty($sex) && !empty($pnum) && !empty($email) && !empty($uid) && !empty($password))
        {
            $path='image/'.$_FILES['img']['name'];
            if(move_uploaded_file($_FILES['img']['tmp_name'],$path))
            {
                $image=basename( $_FILES["img"]["name"],"");
                $sql="update records set name='$name',age='$age',sex='$sex',phone_no='$pnum',email='$email',photo='$image',userid='$uid',password='$password' WHERE id=".$id;
                $result=mysqli_query($db,$sql);
            }
            header("Location:mainpage.php");
        }
	}
?>
