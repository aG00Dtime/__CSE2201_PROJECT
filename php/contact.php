<?php


function sendMail()
{
    $company_email = "";
    $name = "";
    $email = "";
    $message = "";

    if (isset($_POST["formName"])) {
        $name = $_POST["formName"];
    } else {
        $name = "Anonymous";
    }

    if (isset($_POST["formEMail"])) {
        $email = $_POST["formEMail"];
    }

    if (isset($_POST["formMessage"])) {
        $message = $_POST["formMessage"];
    } else {
        exit;
    }

    $headers  = 'MIME-Version: 1.0' . "\r\n"
        . 'Content-type: text/html; charset=utf-8' . "\r\n"
        . 'From: ' . $email . "\r\n";

    if (mail($company_email, "New Message from" . $name, $message, $headers)) {

        header('Location: ' . $_SERVER["HTTP_REFERER"]);
    } else {
        echo '<p>Error sending message</p>';
    }

    header('Location: ' . $_SERVER["HTTP_REFERER"]);
}
sendMail();
