var rate = 0;


// start rating
function startRating(item) {
    var name = document.getElementById("name").value;
    var reviewtext = document.getElementById("reviewtext").value;

    rate = item.id[0];
    sessionStorage.star = rate;
    for (var i = 0; i < 5; i++) {
        if (i < rate) {
            document.getElementById((i + 1)).style.color = "yellow";
        } else {
            document.getElementById((i + 1)).style.color = "black";
        }
    }

    var html = '<input type="hidden" class="rating-value" name="userRating" value="' + rate + '"></input>';

    document.getElementById('review').innerHTML += html;

    document.getElementById("name").value = name;
    document.getElementById("reviewtext").value = reviewtext;
}


// hide stuff when the review button is clicked
function openForm() {

    document.getElementById("leave-review").style.display = "none";
    document.getElementById("review").style.display = "flex";
    document.getElementById("old_reviews").style.display = "none";
}

function closeForm() {
    document.getElementById("review").style.display = "none";
    document.getElementById("leave-review").style.display = "flex";
    document.getElementById("old_reviews").style.display = "block";
}