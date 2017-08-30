<?php
    session_start();

    include("db.php");
?>

<!DOCTYPE html">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Add data</title>
</head>

<body bgcolor="#8fbc8f">
<form action="submitcode.php" method="post" enctype="multipart/form-data" name="form" id="form">
    <div align="center">
        <table width="300" border="0">
            <tr>
                <td colspan="2" bgcolor="#999999"><div align="center">ENTER YOUR DATA</div></td>
            </tr>
            <tr>
                <td width="59"><div align="left">Name</div></td>
                <td width="231">
                        <div align="left">
                            <input name="name" type="text" id="name" />
                        </div>
                </td>
            </tr>

            <tr>
                <td width="59"><div align="left">Age</div></td>
                <td width="231">
                    <div align="left">
                        <input name="age" type="number" id="age" />
                    </div>
                </td>
            </tr>

            <tr>
                <td width="59"><div align="left">Sex</div></td>
                <td width="231">
                    <div align="left">
                        <input name="sex" type="radio" name="m" value="Male"/>Male
                        <input name="sex" type="radio" name="f" value="Female"/>Female
                        <input name="sex" type="radio" name="o" value="Other"/>Other

                    </div>
                </td>
            </tr>

            <tr>
                <td width="59"><div align="left">Phone Number</div></td>
                <td width="231">
                    <div align="left">
                        <input name="phone_no" type="number"/>
                    </div>
                </td>
            </tr>

            <tr>
                <td width="59"><div align="left">Email</div></td>
                <td width="231">
                    <div align="left">
                        <input name="email" type="email"/>
                    </div>
                </td>
            </tr>

            <tr>
                <td width="59"><div align="left">UserId</div></td>
                <td width="231">
                    <div align="left">
                        <input name="uid" type="text"/>
                    </div>
                </td>
            </tr>

            <tr>
                <td width="59"><div align="left">Password</div></td>
                <td width="231">
                    <div align="left">
                        <input name="password" type="password"/>
                    </div>
                </td>
            </tr>



            <tr>
                <td><div align="left">Photo</div></td>
                <td>
                            <input type="file" name="img" id="img"/>
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
