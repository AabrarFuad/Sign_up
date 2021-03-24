
<?php

    require 'dbconnection.php'; // For connetion
    $result = mysqli_query($conn,"SELECT * FROM student_info"); /// Retriveing all data from database to show
    if(isset($_POST['sub']))
    {
        header("location:profile.php?go");
    }


?>

<!-- View page HTML -->

<!DOCTYPE html>
<html>
<head>
    <title> Retrive data</title>
    <link rel="stylesheet" href="style.css" />
</head>
    <body>
        <?php
            if (mysqli_num_rows($result) > 0) {
        ?>
        <table>
            <tr>
                <td>ID</td>
                <td>Full Name</td>
                <td>Email</td>
                <<td>Action</td>
            </tr>
            <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><input type="submit" name="sub" value="Profile"> </td>
            </tr>
            <?php
                $i++;
                }
            ?>
        </table>
        <?php
        }
            else{
                echo "No result found";
            }
        ?>
    </body>
</html>