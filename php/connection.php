<?php


function dbconn()
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "db_reviews";


    $conn = mysqli_connect($host, $username, $password, $db);


    if ($conn->connect_error) {
        die("Connection to db failed");
    }

    return $conn;
}
