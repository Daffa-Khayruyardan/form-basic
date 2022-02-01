<?php
    require 'db.php';
?>

<html>
    <head>
        <link rel="stylesheet" href="../public/style.css">
        <title>Regristation</title>
    </head>
    <body>
        <h1>Login</h1>
        <form action="/add.php" method="post" id="regist">
            <label>Username</label>
            <input type="text" name="username" required>
            <label>Email</label>
            <input type="text" name="email" required>
            <button type="submit" value="submit" name="submit">Submit</button>
        </form>
        <a href="/table.php" id="table-user-list">User List</a>
    </body>
</html>

<?php
    if(isset($_POST["submit"])) {
        $FullName = $_POST["username"];
        $Email = $_POST["email"];

        $query = mysqli_query($connect,"INSERT INTO bio(FullName,Email) VALUES('$FullName','$Email')");
    }
?>