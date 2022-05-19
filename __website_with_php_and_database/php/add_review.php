<?php

include("{$_SERVER['DOCUMENT_ROOT']}/php/connection.php");

function addR()
{
    $conn = dbconn();

    $postName = ($_POST["name"]);
    $postRating = ($_POST["userRating"]);
    $postComment = ($_POST["reviewtext"]);



    $sql = "INSERT INTO reviews (name, rating, comment) VALUES ('$postName', '$postRating', '$postComment')
    ";


    if ($conn->query($sql) == true) {
        header('Location: ' . $_SERVER["HTTP_REFERER"]);
    } else {
        echo "failed";
    }


    $conn->close();
}

addR();
