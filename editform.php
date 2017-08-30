<?php
    session_start();

    include("db.php");
?>

<html>
    <body bgcolor="#8fbc8f">
    <?php
        if(isset($_GET['editid']))
        {
            $id=$_GET['editid'];
            $sql="Select * from records where id=".$id;
            $result=mysqli_query($db,$sql);
            $row=mysqli_fetch_array($result);
        }
    ?>

    <form action="editcode.php" method="post" enctype="multipart/form-data" name="form" id="form">
        <div align="center">
            <table width="300" border="0">
                <tr>
                    <td colspan="2" bgcolor="#999999"><div align="center">ENTER YOUR DATA</div></td>
                </tr>
                <tr>
                    <td width="66">ID</td>
                    <td width="85"><label for="id"></label>
                        <input type="text" name="id" id="name" readonly="readonly" value="<?php echo $row[0];  ?>"  /></td>
                </tr>
                <tr>
                    <td width="59"><div align="left">Name</div></td>
                    <td width="231">
                        <div align="left">
                            <input name="name" type="text" id="name" value="<?php echo $row[1];?>"/>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td width="59"><div align="left">Age</div></td>
                    <td width="231">
                        <div align="left">
                            <input name="age" type="number" id="age" value="<?php echo $row[2];?>"/>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td width="59"><div align="left">Sex</div></td>
                    <td width="231">
                        <div align="left">
                            <input name="sex" type="radio" name="m" value="Male" <?php if($row[3]=='Male'){echo "checked";} ?>/>Male
                            <input name="sex" type="radio" name="f" value="Female" <?php if($row[3]=='Female'){echo "checked";} ?>/>Female
                            <input name="sex" type="radio" name="o" value="Other" <?php if($row[3]=='Other'){echo "checked";} ?>/>Other

                        </div>
                    </td>
                </tr>

                <tr>
                    <td width="59"><div align="left">Phone Number</div></td>
                    <td width="231">
                        <div align="left">
                            <input name="phone_no" type="number" value="<?php echo $row[4];?>"/>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td width="59"><div align="left">Email</div></td>
                    <td width="231">
                        <div align="left">
                            <input name="email" type="email" value="<?php echo $row[5];?>"/>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td width="59"><div align="left">UserId</div></td>
                    <td width="231">
                        <div align="left">
                            <input name="uid" type="text" value="<?php echo $row[7];?>"/>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td width="59"><div align="left">Password</div></td>
                    <td width="231">
                        <div align="left">
                            <input name="password" type="password" value="<?php echo $row[8];?>"/>
                        </div>
                    </td>
                </tr>



                <tr>
                    <td><div align="left">Photo</div></td>
                    <td>
                        <input type="file" name="img" id="img" value="<?php echo $row[6];?>"/>
                </tr>
                <tr>
                    <td colspan="2">
                        <div align="center">
                            <input type="submit" name="submit" value="Submit" />
                            <input type="reset" name="reset" value="Clear" />
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </form>
    </body>
</html>
