<?php

include("{$_SERVER['DOCUMENT_ROOT']}/php/connection.php");

function addR()
{
    $name = "";
    $rating = "";
    $comment = "";

    //  validation
    if (isset(($_POST["name"]))) {
        $name = $_POST["name"];
    } else {
        $name = "Anonymous";
    }

    if (isset(($_POST["userRating"]))) {
        $rating = $_POST["userRating"];
    } else {
        $rating = 0;
    }

    if (isset($_POST["reviewtext"])) {
        $comment = $_POST["reviewtext"];
    } else {
        header('Location: ' . $_SERVER["HTTP_REFERER"]);
        exit;
    }

    $conn = dbconn();

    $sql = $conn->prepare("INSERT INTO reviews (name, rating, comment) VALUES (?,?,?)");
    $sql->bind_param("sss", $name, $rating, $comment);


    if ($sql->execute()) {

        header('Location: ' . $_SERVER["HTTP_REFERER"]);
    } else {
        echo "SOMETHING WENT WRONG";
    }


    $conn->close();
}

addR();
