<?php
    require 'db.php';
    $user_id = $_GET['id'];

    echo $user_id;
    echo "hello";

    $query = "DELETE FROM bio WHERE ID=$user_id";
    $delete_data = mysqli_query($connect,$query);
    
    header("Location:table.php");
?>