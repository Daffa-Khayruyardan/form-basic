<?php
    require 'db.php';
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../public/style.css">
        <title>User Data</title>
    </head>
    <body>
        <table id="user-list">
            <tr id="table-head">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
                $query = mysqli_query($connect,'SELECT * FROM bio ORDER BY id');

                while($user_array = mysqli_fetch_array($query)) {
                    echo "<tr id='table-body'>";
                    echo "<td>" . $user_array['ID'] . "</td>";
                    echo "<td>" . $user_array['FullName'] . "</td>";
                    echo "<td>" . $user_array['Email'] . "</td>";

                    $ID_USER = $user_array['ID'];

                    echo "<td> <a href='/edit.php?id=$user_array[ID]' class='edit'>Edit</a> <a href='/delete.php?id=$user_array[ID]'class='delete'>Delete</a> <td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <a href="/add.php" id="reg">Regristration</a>
    </body>
</html>