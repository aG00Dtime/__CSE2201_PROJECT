<?php

include("{$_SERVER['DOCUMENT_ROOT']}/php/get_reviews.php");
?>

<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!--fontawesome for icons-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!--Style-->
	<link rel="stylesheet" href="../css/index.css" />

	<link rel="stylesheet" href="../css/custom_animations.css" />

	<link rel="icon" type="image/x-icon" href="../assets/fav-icon/favicon.ico" />

	<title>Reviews</title>
</head>

<!--Content-->

<body class="review-page-background">

	<!--Navigation Menu-->
	<header>
		<div class="brand">
			<a href="../index.html">Eden Island Villa</a>
		</div>

		<input type="checkbox" id="menu-bar" />
		<label for="menu-bar"><i class="fa-solid fa-bars"></i></label>

		<nav class="navbar">
			<ul>
				<li><a href="../index.html">HOME</a></li>

				<li><a href="./services.html">SERVICES</a></li>

				<li>
					<a href="#">RESERVATIONS <i class="fa fa-caret-down"></i></a>
					<ul>
						<li><a href="./reservation.html">RESERVATIONS</a></li>
						<li><a href="./calender.html">CALENDER</a></li>
					</ul>
				</li>

				<li><a href="./reviews.php">REVIEWS</a></li>

				<li>
					<a href="#">BLOG <i class="fa fa-caret-down"></i></a>
					<ul>
						<li><a href="./blog.html">BLOGS</a></li>
						<li><a href="./gallery.html">GALLERY</a></li>
					</ul>
				</li>

				<li>
					<a href="#">ABOUT <i class="fa fa-caret-down"></i></a>
					<ul>
						<li><a href="./about.html">ABOUT US</a></li>
						<li><a href="./contact.html">CONTACT</a></li>
						<li><a href="./visit_jamaica.html">VISIT JAMAICA</a></li>

						<li>
							<a href="https://www.facebook.com/EdenIslandvilla" target="_blank" rel="noreferrer">
								<i class="fa-brands fa-facebook-f"></i> Facebook</a>
						</li>
						<li>
							<a href="https://twitter.com/Edenislandvilla" target="_blank" rel="noreferrer"><i class="fa-brands fa-twitter"></i> Twitter</a>
						</li>
						<li>
							<a href="https://www.instagram.com/edenislandvilla/" target="_blank" rel="noreferrer"><i class="fa-brands fa-instagram-square"></i> Instagram</a>
						</li>
					</ul>
				</li>

				<li class="hide">
					<a href="https://www.facebook.com/EdenIslandvilla" target="_blank" rel="noreferrer"><i class="fa-brands fa-facebook-f"></i></a>
				</li>
				<li class="hide">
					<a href="https://twitter.com/Edenislandvilla" target="_blank" rel="noreferrer"><i class="fa-brands fa-twitter"></i></a>
				</li>
				<li class="hide">
					<a href="https://www.instagram.com/edenislandvilla/" target="_blank" rel="noreferrer"><i class="fa-brands fa-instagram-square"></i></a>
				</li>
				<li class="hide">
					<a href="tel:123-456-7890"><i class="fa-solid fa-phone"></i> 123-456</a>
				</li>
			</ul>
		</nav>
	</header>

	<main>
		<section class="review-page" id="review-page-content">
			<div class="review-page-title slide-down">
				<h3>Reviews</h3>
			</div>

			<div class="button">
				<button class="add-review slide-up" onclick="openForm()" id="leave-review">
					Leave a review
				</button>
			</div>

			<form action="../php/add_review.php" method="POST" class="review-form slide-up" id="review">
				<div class="close">
					<i class="fa-solid fa-circle-xmark" onclick="closeForm()"></i>

				</div>
				<input type="text" class="username" id="name" name="name" placeholder="Name" required />

				<div class="start-rating">

					<h3 class="rating-title">Rating</h3>

					<span id="1" class="fa fa-star" onclick="startRating(this)" startRating="starmark(this)"></span>
					<span id="2" class="fa fa-star" onclick="startRating(this)" startRating="starmark(this)"></span>
					<span id="3" class="fa fa-star" onclick="startRating(this)" startRating="starmark(this)"></span>
					<span id="4" class="fa fa-star" onclick="startRating(this)" startRating="starmark(this)"></span>
					<span id="5" class="fa fa-star" onclick="startRating(this)" startRating="starmark(this)"></span>
				</div>

				<textarea class="text-area" id="reviewtext" name="reviewtext" cols="30" rows="5" placeholder="Leave a review" required></textarea>

				<div class="button">
					<button class="add-review" type="submit">
						Submit Review
					</button>
				</div>
			</form>

			<div class="added-reviews" id="old_reviews">

				<?php readDB(); ?>
			</div>
		</section>
	</main>

	<script src="../js/index.js"></script>
	<script src="../js/review.js"></script>

</body>

</html>