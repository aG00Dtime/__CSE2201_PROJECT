<?php

include("{$_SERVER['DOCUMENT_ROOT']}/php/connection.php");

function addRes()
{
    $name = "";
    $email = "";
    $phone = "";
    $to = "";
    $from = "";


    if (
        isset($_POST["visitor_name"])
        && isset($_POST["email"])
        && isset($_POST["phone"])
        && isset($_POST["to"])
        && isset($_POST["from"])
    ) {
        $name = $_POST["visitor_name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $to = $_POST["to"];
        $from = $_POST["from"];
    } else {
        echo ("<script LANGUAGE='JavaScript'>
                window.alert('Please ensure the form is filled out correctly.');
                window.location.href='.//reservation.html';
                </script>");
        exit;
    }

    // echo $name, $email, $phone, $from, $to;

    $conn = dbconn();

    $sql = $conn->prepare("INSERT INTO new_reservations (name, email, phone,date_from,date_to) VALUES (?,?,?,?,?) ");

    $sql->bind_param("ssiss", $name, $email, $phone, $from, $to);

    if ($sql->execute()) {

        echo ("<script LANGUAGE='JavaScript'>
                window.alert('Reservation request received! We will contact you soon!');
                window.location.href='..//index.html';
                </script>");
    } else {

        echo ("<script LANGUAGE='JavaScript'>
                window.alert('Something went wrong!');
                window.location.href='.//reservation.html';
                </script>");
    }

    $conn->close();
}

addRes();
