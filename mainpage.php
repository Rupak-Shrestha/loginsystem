<?php
	session_start();

	$db=mysqli_connect("localhost","root","");
	mysqli_select_db($db,"logindata");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Main page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

        <header>
            <h1>This is main page</h1>
            This is the header of the document.
        </header>

        <div id="list">
            <ul>
                <?php
                   $charac = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
                   foreach ($charac as $display)
                   {
                       ?>
                        <li><a href="lettersearch.php?lid=<?php echo $display; ?>"><?php echo $display; ?></a></li>
                        <?php
                   }
                ?>
            </ul>
        </div>

        <div id="addbar">
                <a href="addnew.php">ADD NEW</a>

            <div id="searchbar">
                <form method="get" action="boxsearch.php">
                    <input name="keyword" type="text" id="keyword" style=" border:1px #000 solid"/>
                    <input type="submit" value="Search" style="background-color: greenyellow"  />
                </form>

            </div>

        </div>

        <div id="showdata">

            <?php
            if(!isset($_GET['lid']))
            {
                ?>

            <table width="300" border="1" cellspacing="5">
                <tr>
                    <th scope="col">Name</th>
                </tr>
                <?php

                $sql="select * from records";
                $record=mysqli_query($db,$sql);
                while($rows=mysqli_fetch_array($record))
                {
                    echo "<tr>";
                    echo "<td>".$rows['name']."&nbsp; </td>";
                    echo "<td><a href='editform.php?editid=$rows[0]'>Edit</a> &nbsp; </td>";
                    echo "<td><a href='deletecode.php?delid=$rows[0]'>Delete</a> &nbsp; </td>";
                    echo "</tr>";
                }

                ?>

            </table>

            <?php
            }
                else
                {
                    include("lettersearch.php");
                }
            ?>
        </div>

	<footer>
		<a href="logoutcode.php">LOG OUT</a>
	</footer>
</body>
</html>