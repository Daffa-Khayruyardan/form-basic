<?php 
    require 'db.php';

    $user_id = $_GET['id'];

    $query = mysqli_query($connect, "SELECT * FROM bio WHERE ID=$user_id");
    while($user_array = mysqli_fetch_array($query)) {
        $name = $user_array['FullName'];
        $email = $user_array['Email'];
    }

?>

<html>
    <head>
        <link rel="stylesheet" href="../public/style.css">
        <title>Regristation</title> 
    </head>
    <body>
        <h1>Login</h1>
        <form id="regist" action="" method="post">
            <label>Username</label>
            <input type="text" name="username" value=<?php echo $name?> required>
            <label>Email</label>
            <input type="text" name="email" value=<?php echo $email?> required>
            <button type="submit" name="update">Submit</button>
        </form>
    </body>
</html>

<?php
    if(isset($_POST['update'])) {
        $name_new = $_POST['username'];
        $email_new = $_POST['email'];

        $update = mysqli_query($connect,"UPDATE bio SET FullName='$name_new',Email='$email_new' WHERE ID=$user_id");

        header("Location: table.php");
    }
?>