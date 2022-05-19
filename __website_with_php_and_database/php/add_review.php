<?php

include("{$_SERVER['DOCUMENT_ROOT']}/php/connection.php");

function addR()
{

    // messy validation
    if ($_POST["name"] == NULL) {
        $postName = "Anonymous";
    } else {
        $postName = $_POST["name"];
    }

    if (($_POST["userRating"]) == NULL) {
        $postRating = 0;
    } else {
        $postRating = $_POST["userRating"];
    }

    if ($_POST["reviewtext"] == NULL) {
        exit;
    } else {
        $postComment = $_POST["reviewtext"];
    }

    $conn = dbconn();

    $sql = $conn->prepare("INSERT INTO reviews (name, rating, comment) VALUES (?,?,?)");
    $sql->bind_param("sss", $postName, $postRating, $postComment);


    if ($sql->execute()) {

        header('Location: ' . $_SERVER["HTTP_REFERER"]);
    } else {
        echo "SOMETHING WENT WRONG";
    }


    $conn->close();
}

addR();
