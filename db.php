<?php
    $dbhost = "localhost";
    $dbuser = "test";
    $dbpass = "Daffa@1234";
    $dbname = "student";

    $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(!$connect) {
        echo "Error Occured";
    }
?>