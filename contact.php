<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<link rel="icon" type="image/x-icon" href="/image/Drivex.png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="DriveX">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<style>
	<?php include "styles/contact_styles.css"?>
	<?php include"styles/contact_responsive.css"?>
</style>
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><img src="image/Drivex.png" alt=""></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php">home</a></li>
								<li class="main_nav_item"><a href="about.php">about us</a></li>
								<li class="main_nav_item"><a href="blog.php">blog</a></li>
								<li class="main_nav_item"><a href="index.php#contact">Our Team</a></li>
								<li class="main_nav_item"><a href="contact.php">contact us</a></li>
							</ul>
						</div>
						<div >
							
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						
						
						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><img src="image/Drivex.png" alt=""></div>
			<ul>
				<li class="menu_item"><a href="index.php">home</a></li>
				<li class="menu_item"><a href="about.php">about us</a></li>
				<li class="menu_item"><a href="blog.php">blog</a></li>
				<li class="menu_item"><a href="index.php#contact">our team</a></li>
				<li class="menu_item"><a href="contact.php">contact us</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="image/contact.jpg"></div>
		<div class="home_content">
			<div class="home_title">contact us</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Contact Form -->
					<div class="contact_form_container">
						<div class="contact_title text-center">get in touch</div>
						<form action="contactform.php" id="contact_form" class="contact_form text-center" method="post">
							<input type="text"  class="contact_form_name input_field" name="name" placeholder="Name" required="required" data-error="Name is required.">
							<input type="text" class="contact_form_email input_field" name="email" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" class="contact_form_subject input_field" name="subject" placeholder="Subject" required="required" data-error="Subject is required.">
							<textarea class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							<button type="submit" name="submit" class="form_submit_button button trans_200">send message<span></span><span></span><span></span></button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- About -->
	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					
					<!-- About - Image -->

					<div class="about_image">
						<img src="image/contact2.jpg" height="400" width="400" alt="">
					</div>

				</div>

				<div class="col-lg-4">
					
					<!-- About - Content -->

					<div class="about_content">
						<div class="logo_container about_logo">
							<div class="logo"><img src="image/Drivex.png" alt=""></div>
						</div>
						<br><br>
						<p class="about_text">We provide information about all types of cars in the world to all car addictors. We provide information about classic cars, luxury cars, sports cars, electric cars and new arrivals. Also we have a range of articles about cars as well as our social media pages provide you additional insights about all types of cars.</p>
						<ul class="about_social_list">
							<li class="about_social_item"><a href="https://instagram.com/drivex28?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							
						</ul>
					</div>

				</div>

				<div class="col-lg-3">
					
					<!-- About Info -->

					<div class="about_info">
						<ul class="contact_info_list">
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
								<div class="contact_info_text">NSBM Green University, Homagama, Sri Lanka</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
								<div class="contact_info_text">0094-77-5646-739</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
								<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">drivexsite@gmail.com</a></div>
							</li>
							
						</ul>
					</div>

				</div>

			</div>
		</div>
	</div>

	<!-- Google Map -->
		
	<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.5758403540012!2d80.03938421432719!3d6.8213290950699506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2523b05555555%3A0x546c34cd99f6f488!2sNSBM%20Green%20University!5e0!3m2!1sen!2slk!4v1668944978013!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
	<!-- Footer -->
	
	<footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand">DRIVEX<span class="dot">.</span></h4>
                        <p>We provide information about all types of cars in the world to all car addictors. We provide information about classic cars, luxury cars, sports cars, electric cars and new arrivals. Also we have a range of articles about cars as well as our social media pages provide you additional insights about all types of cars.</p>
                        <div class="col-auto social-icons">
                            <a href="#"><i class='fa fa-facebook-f'></i></a>
                            <a href="#"><i class='fa fa-linkedin'></i></a>
                            <a href="https://instagram.com/drivex28?igshid=YmMyMTA2M2Y="><i class='fa fa-instagram'></i></a>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="mb-0"></p> Made With <i class="fa fa-heart-o" aria-hidden="true"></i> By ICONS
                
        </div>
    </footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>

</body>

</html>
