<!DOCTYPE html>
<html lang="en">
<head>
<title>Drivex</title>
<link rel="icon" type="image/x-icon" href="/image/Drivex.png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="DriveX">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<style>
	<?php include "styles/main_styles.css"?>
	<?php include "styles/responsive.css"?>
	
	</style>
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<?php include "header.php"?>
	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image-->
					<div class="home_slider_background" style="background-image:url(image/home1.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>car</h1>
							<h1>addiction</h1>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(image/home2.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>car</h1>
							<h1>addiction</h1>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(image/home3.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>car</h1>
							<h1>addiction</h1>
						</div>
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2"  x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 "/>
				</svg>
			</div>
			
			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 "/>
				</svg>
			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01</li>
					<li class="home_slider_custom_dot"><div></div>02</li>
					<li class="home_slider_custom_dot"><div></div>03</li>
				</ul>
			</div>
			
		</div>

	</div>

	<!-- Search -->

	<div class="search">
		

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Tabs -->

					<div class="search_tabs_container">
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							
							<a class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start" href="classic/classic.php"><img src="image/clasicon.png">&nbsp Classic</a>
							<a class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start" href="luxury/luxury.php"><img src="image/luxicon.png" alt=""> &nbsp luxury</a>
							<a class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start" href="sports/Sport.php"><img src="image/spoicon.png" alt=""> &nbsp sports</a>
							<a class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start" href="Electric/electric.php"><img src="image/eleicon.png" alt=""> &nbsp Electric</a>
							<a class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start" href="admin/new1.php"><img src="image/newicon.png" alt=""> &nbspnew arrivals</a>
							
							
						</div>	
						
					</div>
					
					</div>
					
				</div>
			
			</div>
	
		</div>
				
	</div>
	
	<!-- Intro -->
	
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="intro_title text-center">What We Offer?</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro_text text-center">
						<p>We provide information about all types of cars in the world to all car addictors. We provide information about classic cars, luxury cars, sports cars, electric cars and new arrivals. Also we have a range of articles about cars as well as our social media pages provide you additional insights about all types of cars. </p>
					</div>
				</div>
			</div>
			<div class="row intro_items">

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image-->
						<div class="intro_item_background" style="background-image:url(image/classic2.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							
							<div><div></div><span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								
								
								
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image -->
						<div class="intro_item_background" style="background-image:url(image/new1.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div></div>
							<div><div></div><span></span><span></span><span></span></a></div>
							<div>
								
								<div></div>
								<div>
									
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image-->
						<div class="intro_item_background" style="background-image:url(image/classic1.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div></div>
							<div><div></div><span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								
								<div></div>
								<div>
									
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- CTA -->

	<div class="cta">
		<!-- Image -->
		<div class="cta_background" style="background-image:url(image/steer.jpg)"></div>
		
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- CTA Slider -->
					
					<div class="cta_slider_container">
						<div class="owl-carousel owl-theme cta_slider">

							<!-- CTA Slider Item -->
							
							<div class="owl-item cta_item text-center">
								<div class="cta_title"><i>"Cars are not a suit of clothes;<br>cars are an avatar"</i></div>
								<div>
									
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text"> - Chris Bangle -</p>
								<div class="button cta_button"><div></div><span></span><span></span><span></span></a></div>
							</div>
							
							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="cta_title"><i>"All of those cars were once just a dream of somebody's head"</i></div>
								<div>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text">- Peter Gabriel -</p>
								<div class="button cta_button"><div></div><span></span><span></span><span></span></a></div>
							</div>

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="cta_title"><i>"i love fast cars<br>and to go too fast in them"</i></div>
								<div>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text">Lara Flynn Boyle</p>
								<div class="button cta_button"><div></div><span></span><span></span><span></span></a></div>
							</div>
							
						</div>

						<!-- CTA Slider Nav - Prev -->
						<div class="cta_slider_nav cta_slider_prev">
							<svg version="1.1" id="Layer_4" x="0px" y="0px"
								width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_prev'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
								<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
								<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 "/>
							</svg>
						</div>
						
						<!-- CTA Slider Nav - Next -->
						<div class="cta_slider_nav cta_slider_next">
							<svg version="1.1" id="Layer_5" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_next'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
							<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
							<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 "/>
							</svg>
						</div>

					</div>

				</div>
			</div>
		</div>
					
	</div>

		
										
	<!-- Team -->

	<div class="testimonials" id="contact">
		<div class="test_border"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">Our Team</h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					
					<!-- Team Slider -->

					<div class="demo">
  <div class="container">
    <div class="row">
      <div id="testimonial-slider" class="owl-carousel">
        <div class="testimonial">
          <span class="icon fa fa-quote-left"></span>
          <p class="description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
          </p>
          <div class="testimonial-content">
            <div class="pic">
              <img src="https://picsum.photos/130/130?image=1027" alt="">
            </div>
            <h3 class="name">Michele Miller</h3>
            <span class="title">Project Manager</span>
          </div>
        </div>
        <div class="testimonial">
          <span class="icon fa fa-quote-left"></span>
          <p class="description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
          </p>
          <div class="testimonial-content">
            <div class="pic">
              <img src="https://picsum.photos/130/130?image=839" alt="">
            </div>
            <h3 class="name">Patricia Knott</h3>
            <span class="title">Web Developer</span>
          </div>
        </div>
        <div class="testimonial">
          <span class="icon fa fa-quote-left"></span>
          <p class="description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
          </p>
          <div class="testimonial-content">
            <div class="pic">
              <img src="https://picsum.photos/130/130?image=856" alt="">
            </div>
            <h3 class="name">Justin Ramos</h3>
            <span class="title">Web Developer</span>
          </div>
        </div>
        <div class="testimonial">
          <span class="icon fa fa-quote-left"></span>
          <p class="description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
          </p>
          <div class="testimonial-content">
            <div class="pic">
              <img src="https://picsum.photos/130/130?image=836" alt="">
            </div>
            <h3 class="name">Mary Huntley</h3>
            <span class="title">Web Developer</span>
          </div>
        </div>
        <div class="testimonial">
          <span class="icon fa fa-quote-left"></span>
          <p class="description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
          </p>
          <div class="testimonial-content">
            <div class="pic">
              <img src="https://picsum.photos/130/130?image=883" alt="">
            </div>
            <h3 class="name">Aaron Newell</h3>
            <span class="title">Web Developer</span>
          </div>
        </div>
                <div class="testimonial">
          <span class="icon fa fa-quote-left"></span>
          <p class="description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
          </p>
          <div class="testimonial-content">
            <div class="pic">
              <img src="https://picsum.photos/130/130?image=777" alt="">
            </div>
            <h3 class="name">Lizzie Geren</h3>
            <span class="title">Web Developer</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
			
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--Feedback-->
	<div class="contact" id="feedback">
		<div class="contact_background" style="background-image:url(image/feedback.jpeg)"></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="contact_image">
						
					</div>
				</div>
				<div class="col-lg-7">
					<div class="contact_form_container">
						<div class="contact_title">we value your feedback</div>
						<form action="feedbackform.php" id="contact_form" class="contact_form" method="post">
							<input type="text" name="name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
							<input type="text" name="email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" name="subject"  class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="feedback" rows="4" placeholder="Feedback" required="required" data-error="Please, write us a feedback."></textarea>
							<button type="submit" name="submit" class="form_submit_button button">send feedback<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	
	<?php include "footer.php" ?>

	
	</div>

</div>



</body>

</html>

