<?php

include("{$_SERVER['DOCUMENT_ROOT']}/php/connection.php");


function stars($rating)
{
    $stars = "";

    if ($rating == 5) {
        for ($i = 0; $i < 5; $i++) {
            $stars = $stars . '<i class="fa-solid fa-star"></i>';
        }
    } else if ($rating == 4) {
        for ($i = 0; $i < 5; $i++) {
            $stars = $stars . '<i class="fa-solid fa-star"></i>';
        }
    } else if ($rating == 3) {
        for ($i = 0; $i < 3; $i++) {
            $stars = $stars . '<i class="fa-solid fa-star"></i>';
        }
    } else if ($rating == 2) {
        for ($i = 0; $i < 2; $i++) {
            $stars = $stars . '<i class="fa-solid fa-star"></i>';
        }
    } else if ($rating == 1) {

        $stars = $stars . '<i class="fa-solid fa-star"></i>';
    } else {
        $stars = '<i style="color:red"  class="fa-solid fa-face-frown"></i>';
    }

    return $stars;
}

function readDB()
{

    $conn = dbconn();

    $sql = " SELECT * FROM REVIEWS ORDER BY id DESC";

    $reviews = $conn->query($sql);

    if ($reviews->num_rows <= 0) {
        $conn->close();
        return;
    }

    while ($row = $reviews->fetch_assoc()) {

        echo "<div class ='new slide-up fade-style fade-up-scroll'>" .
            "<br><br>" .
            "<h3 id = 'username'>" . $row["name"]  . "</h3>" .
            "<h3 id = 'rating' class='rating'>" . stars($row["rating"])  . "</h3>" .
            "<br><hr>" .

            "<p id='review-text'>" . $row["comment"]  . "</p>" .

            "<hr></hr>" .
            "</div>";
    }

    $conn->close();
}
