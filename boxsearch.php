<?php
    session_start();

    include("db.php");
?>

<?php
    if(isset($_GET['keyword']))
    {
        if ($_GET['keyword'] != '') {
            $key = $_GET['keyword'];
            $sql = "Select name from records where name like '%$key%'";
            $result = mysqli_query($db, $sql);
            $total = mysqli_num_rows($result);
        }

        ?>
        <div> <?php echo "Total Search= " . $total; ?></div>
        <div>
        <?php
        if ($total > 0)
        {
?>
        <html>
            <head>
                <link rel="stylesheet" type="text/css" href="style.css"/>
            </head>
                <body bgcolor="#3cb371">
                    <table width="300" border="1" cellspacing="5">
                        <tr>
                            <th>Name</th>
                        </tr>
                            <?php
                                while($row=mysqli_fetch_array($result))
                                {
                                    echo "<tr>";
                                    echo "<td>".$row['name']."&nbsp; </td>";
                                    echo "<td><a href='editform.php?editid=$row[0]'>Edit</a> &nbsp; </td>";
                                    echo "<td><a href='deletecode.php?delid=$row[0]'>Delete</a> &nbsp; </td>";
                                    echo "</tr>";
                                }

                            ?>

                    </table>
                </body>
        </html>
<?php
        } else {
            echo "<p>Not Found Any Record</p>";
        }
    }
?>
        </div>
