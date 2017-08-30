<?php
    session_start();

    include("db.php");
?>

<?php
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $age=$_POST['age'];
        $sex=$_POST['sex'];
        $pnum=$_POST['phone_no'];
        $email=$_POST['email'];
        $uid=$_POST['uid'];
        $password=$_POST['password'];

        if (!empty($name) && !empty($age) && !empty($sex) && !empty($pnum) && !empty($email) && !empty($uid) && !empty($password))
        {
            // $sql="Insert into records(name,age,sex,phone_no,email,userid,password)values('$name','$age','$sex','$pnum','$email','$uid','$password')";
            // $result=mysqli_query($db,$sql);

            $path='image/'.$_FILES['img']['name'];
            if(move_uploaded_file($_FILES['img']['tmp_name'],$path))
            {
                $image=basename( $_FILES["img"]["name"],"");
                // $img=$_FILES['img']['name'];
                $sql="insert into records(name,age,sex,phone_no,email,photo,userid,password)values('$name','$age','$sex','$pnum','$email','$image','$uid','$password')";
                $result=mysqli_query($db,$sql);
            }
            header("Location:msg.php");
        }

    }

?>