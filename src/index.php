<?php
session_start();

//init
include  "php/functions.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>EDEL</title>
	<?php include './template/includes.html' ?>

	<style>
		#splashScreen {
			background-color: #776bc9;
		}

		.w3-bar {
			color: white;
		}
		
		body {
			font-family: 'Raleway', sans-serif;
		}

		#navbar-background {
			background-color: rgba(54, 83, 46, 0.1);
			border-color: rgba(0,0,0,0);
		}

		.fa-search {
			color:white;
		}
	</style>
</head>

<body>
	<!-- navbar -->
	<?php include 'template/navbar.php' ?>

	<!-- big screen -->
	<div id="splashScreen">

		<h2 id="slogan"> Built for Refugees and Asylum Seekers </h2>

		<h4 id="subSlogan"> Get the answers you need in a simple and efficient way </h4>

	</div>

	<!-- Login -->
	<?php include './template/login.html' ?>
	<!-- Register -->
	<?php include './template/register.html' ?>

	<!-- add script -->
	<script src="js/register-modal.js"> </script>

	<!-- Page content -->
	<div class="w3-content" class="newStyle">
		<!-- The Band Section -->
		<div class="w3-container w3-content w3-center w3-padding-64" id="band">
			<h2 class="w3-wide">EDEL</h2>
			<p class="w3-opacity"><i>Find what you need when you need it</i></p>
			<p class="centered"> We have gathered here the information and tools you need for a smooth transition into your new home. </p>
			<p class="centered"> Choose from a variety of topics such as: </p>
			<div class="w3-row w3-padding-32">

				<div class="row">
					<a href="pages/tagPages.php?tagID=1">
					<div class="col-sm-4 floatLeft width33">
						<img class="pic" src="images/home.png" alt="Random Name">
						<svg height="100" width="100">
							<circle cx="50" cy="50" r="40" stroke="white" stroke-width="2" fill="#648ad1" />
						</svg>
					</div> </a>


					<a href="pages/tagPages.php?tagID=2">
					<div class="col-sm-4 floatLeft width33">
						<img class="pic" src="images/kit.png" alt="Random Name">
						<svg height="100" width="100">
							<circle cx="50" cy="50" r="41" stroke="white" stroke-width="2" fill="#648ad1" />
						</svg>
					</div></a>

					<a href="pages/tagPages.php?tagID=3">
					<div class="col-sm-4 floatRight width33">
						<img class="pic" src="images/books.png" alt="Random Name">
						<svg height="100" width="100">
							<circle cx="50" cy="50" r="40" stroke="white" stroke-width="2" fill="#648ad1" />
						</svg>
					</div></a>

				</div>
			</div>
		</div>


		<div class="contentBox">
			<svg class="shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 100" ><title>testshape</title>
				<polygon class="shape2" points="448 140 0 130 0 0 448 0 448 140"> </svg>

					<div class="row">

						<div class="col-sm-5 fiftyto100 floatLeft">
							<img src="images/Desktop+.png" alt="desktop" id="deskcell">
						</div>

						<div class="col-sm-5 fiftyto100 floatRight">
							<p id="header2"> Perfect for planning ahead <br>or using on the go </p>

							<p id="subSlogan"> Whether you are at home or on the street, access your account from the platform of your liking.
								Our chatbot and  forums can be accessed by web or by using our mobile application </p>
							</div>
						</div>
					</div>
					<br>

					<div class="w3-container w3-content w3-center w3-padding-64 maxWidth800" id="band">

     					<br>

						<div class="col-sm-5 floatLeft">
							<h3 class="blackeader">Connect with a community of peers and experts</h3>

								<h4 id="subSlogan2"> With this tool, you can get directed to the proper organisations that seek to help you.
									To find out why NGO's recommend our service <a href="pages/aboutus.php"> click here!</a> </h4>
								</div>
								<div class="col-sm-7 floatRight" id="boot1">
									<img src="images/forum.png" alt="forum" id="deskforum">

								</div>
						</div>
     					<br>
     					<br>

	</div>


						<div id="boot2" >
							<svg class="shape1" xmlns="http://www.w3.org/2000/svg" viewBox="0 50 448 190" id="Background2"><title>testshape</title>
								<polygon class="shape3" points="448 200 0 215 0 0 448 0 448 200" />
								<div class="row">
			     					<br>

									<p id="boot3"> <strong> CONTACT <strong></p>
									<p class="p2"><strong>If you have any question or comments you would like to share with us, feel free to reach out to us!</strong></p>
									<div class="w3-row w3-padding-32">

										<div class="w3-col m6 floatLeft fortyto100">
											<form action="/action_page.php" target="_blank">
												<div class="w3-row-padding div2">
													<div class="w3-half">
														<input class="name w3-input w3-border" type="text" placeholder="Name" required name="Name">
													</div>
													<div class="w3-half">
														<input class="email w3-input w3-border" type="text" placeholder="Email" required name="Email">
													</div>
													<input class="message w3-input w3-border" type="text" required name="Message">

												<button class="send w3-button w3-black w3-section w3-left" type="submit">SEND</button>
											</div>
											</form>

											<div>
											</div>
										</div>

										<div class="contactInfo col-sm-4 floatRight fortyto100 margin3em">

											<p class="p3"> <i class="fa fa-map-marker"></i> Montreal, Qc </p>
											<br>


											<p class="p3"> <i class="fa fa-phone width30px"></i> Phone: +00 1 (514)555-5555 </p>
											<br>


											<p class="p3"> <i class="fa fa-envelope width30px"> </i>Email: mail@mail.com </p>
											<br>


										</div>
									</div>

								</div>
							</svg>
							<!-- End Page Content -->
						</div>

						<!-- Subscribe Section -->
						<div class="w3-container w3-content w3-padding-64 maxWidth800">
							<h2 class="w3-wide w3-center">Never Miss A Thing </h2>
							<p class="w3-opacity w3-center">For regular updates about our products, subscribe to our newsletter</p>

							<button class="w3-button w3-black w3-section w3-right floatLeft" type="submit" >SUBSCRIBE</button>

						</div>
						<!-- End Page Content -->
					</div>

					<!-- Footer -->
					<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
						<i class="fa fa-facebook-official w3-hover-opacity"></i>
						<i class="fa fa-instagram w3-hover-opacity"></i>
						<i class="fa fa-snapchat w3-hover-opacity"></i>
						<i class="fa fa-pinterest-p w3-hover-opacity"></i>
						<i class="fa fa-twitter w3-hover-opacity"></i>
						<i class="fa fa-linkedin w3-hover-opacity"></i>
						<p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
					</footer>
					<script>
					//registering handlers
					registerBody();
					window.addEventListener("scroll", update);
					</script>
					</html>
