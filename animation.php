<!DOCTYPE HTML>
<html>
<?php include_once("includes/head.php"); ?>

<body class="animationservice is-preload">
    <div id="page-wrapper">
        <!-- top-header -->

        <?php include_once("includes/header.php") ?>
        <!-- Service Logo first section -->
        <div class="service-logosection animation" style="padding-top: 50px; padding-left: 50px; padding-right: 50px;">
						<div class="container">
							<div class="row">
								<div class="col-6 col-12-medium align-self-center" >
									<div class="first-inner-section-text">
									    <h1 class="first-inner-section-text-mian-h1"><img class="greenline" src="images/greenlinetext.png"/><b>Animation </b>Services</h1>
										<p>At Apex Creative Designs, we know that animation services are crucial to creating engaging and memorable brand experiences. Our expert team provides high-quality motion graphics, 2D and 3D animation services, and animated video production services tailored to your brand's needs. Whether you want to create eye-catching promotional videos or dynamic product animations, our animation services will bring your vision to life.</p>
										<div class="about-banner-buttons animate__animated animate__bounce" style="padding-top: 30px;">
											<ul>
												<li><div class="brand-button">
													<h6><a href="contact.html">Get Started</a></h6>
												</div></li>
												<li><div class="brand-button">
													<h6><a  target="_blank" href=""><i class="fa fa-message my-float"></i> Live Chat</a></h6> 
												</div></li>
											</ul>
										</div>
										
									</div>
								</div>
								<div class="col-6 col-12-medium d-none d-md-block" >
									<div class="log-quote-form">
										<script>
   // var url =  window.location.href;
    //url = url.split("/");
 //
 var urlParams = new URLSearchParams(window.location.search);
 var myParam = urlParams.get('thanks');
 //var thanks = document.getElementById("responce");
 //thanks.innerHtml(myParam);
    console.log(myParam);
</script>
           <form method="POST" action="https://apexcreativedesigns.com/thankyou.php" id="contact">
            <input type="text" name="full-name" id="name" placeholder="Enter Your Name" required>
            <input type="email" name="email" id="email" placeholder="Your Email Id" required>
            <input type="number" name="number" id="number" placeholder="Your Mobile Number" required>
            <textarea name="message" id="message" placeholder="Enter Your Message" required></textarea>

            <!-- Hidden input fields for SKU, product name, and price -->
            <!--<input type="text" name="product_name" id="product_name" readonly>-->
            <!--<input type="text" name="product_sku" id="product_sku" readonly>-->
            <!--<input type="text" name="product_price" id="product_price" readonly>-->

            <button type="submit" name="sended" class="primary_button" id="contact-submit">Submit</button>
            <p id="responce"></p>
            <!--<p style="background-color:#1EBA1B; color:#fff;" class="mt-3 text-center p-2" id="enquiry"></p>-->
        </form>
<script>
    document.getElementById("responce").innerHTML = myParam;
</script>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END LOGO FIRST SECTION -->
				</section>

                <!-- ANIMATION TRUST SECTION START -->
                <section id="intro-section">
                    <div class="container">
                        <div class="row inner-section">
                            <h3>What Makes Site Unique
                                </h3>
                                <h3 style="padding-bottom: 30px;">Our <b>Trust Pilots</b></h3>
                        </div>
                        
                        <div>
                            <div>
                                
                            </div>
                        </div>
                        <div class="client-icons">
          <div class="carousel">
            <div>
              <div class="card">
                <img src="images/clogo1.png" />
              </div>
            </div>
            <div>
              <div class="card">
                <img src="images/clogo6.png" />
              </div>
            </div>
            <div>
              <div class="card">
                <img src="images/clogo5.png" />
              </div>
            </div>
            <div>
              <div class="card new">
                <img src="images/clogo4.png" />
              </div>
            </div>
            <div>
              <div class="card">
                <img src="images/clogo3.png" />
              </div>
            </div>
            <div>
              <div class="card">
                <img src="images/clogo2.png" />
              </div>
            </div>
            <div>
              <div class="card new">
                <img src="images/clogo4.png" />
              </div>
            </div>
          </div>
        </div>
                        <!--<div class="client-icons">-->
                        <!--      <div class="carousel slick-initialized slick-slider slick-dotted"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button>-->
                        <!--        <div class="slick-list draggable"  data-aos="fade-up" style="padding: 0px 50px;"><div class="slick-track" style="opacity: 1; width: 4200px; transform: translate3d(-1400px, 0px, 0px); transition: transform 500ms ease 0s;"><div class="slick-slide slick-cloned" data-slick-index="-7" aria-hidden="true" style="width: 180px;" tabindex="-1">-->
                        <!--          <div class="card" >-->
                        <!--            <img src="./images/clogo1.png">-->
                        <!--          </div>-->
                        <!--        </div><div class="slick-slide slick-cloned" data-aos="fade-up" data-slick-index="-6" aria-hidden="true" style="width: 180px;" tabindex="-1">-->
                        <!--            <div class="card">-->
                        <!--                <img src="./images/clogo6.png">-->
                        <!--            </div>-->
                        <!--        </div><div class="slick-slide slick-cloned" data-aos="fade-up" data-slick-index="-5" aria-hidden="true" style="width: 180px;" tabindex="-1">-->
                        <!--            <div class="card">-->
                        <!--                <img src="./images/clogo5.png">-->
                        <!--            </div> -->
                        <!--        </div><div class="slick-slide slick-cloned" data-aos="fade-up" data-slick-index="-4" aria-hidden="true" style="width: 180px;" tabindex="-1">-->
                        <!--            <div class="card new">-->
                        <!--                <img src="./images/clogo4.png">-->
                        <!--            </div> -->
                        <!--        </div><div class="slick-slide slick-cloned" data-aos="fade-up" data-slick-index="-3" aria-hidden="true" style="width: 180px;" tabindex="-1">-->
                        <!--            <div class="card">-->
                        <!--                <img src="./images/clogo3.png">-->
                        <!--            </div>-->
                        <!--        </div><div class="slick-slide slick-cloned" data-aos="fade-up" data-slick-index="-2" aria-hidden="true" style="width: 180px;" tabindex="-1">-->
                        <!--            <div class="card">-->
                        <!--                <img src="./images/clogo2.png">-->
                        <!--            </div>-->
                        <!--        </div><div class="slick-slide slick-cloned" data-aos="fade-up" data-slick-index="-1" aria-hidden="true" style="width: 180px;" tabindex="-1">-->
                        <!--            <div class="card new">-->
                        <!--                <img src="./images/clogo4.png">-->
                        <!--            </div> -->
                        <!--        </div><div class="slick-slide data-aos="fade-up"" data-slick-index="0" aria-hidden="true" style="width: 180px;" tabindex="-1" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00">-->
                        <!--          <div class="card">-->
                        <!--            <img src="./images/clogo1.png">-->
                        <!--          </div>-->
                        <!--        </div><div class="slick-slide slick-active" data-aos="fade-up" data-slick-index="1" aria-hidden="false" style="width: 180px;" tabindex="-1" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01">-->
                        <!--            <div class="card">-->
                        <!--                <img src="./images/clogo6.png">-->
                        <!--            </div>-->
                        <!--        </div><div class="slick-slide slick-active" data-aos="fade-up" data-slick-index="2" aria-hidden="false" style="width: 180px;" tabindex="0" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02">-->
                        <!--            <div class="card">-->
                        <!--                <img src="./images/clogo5.png">-->
                        <!--            </div> -->
                        <!--        </div><div class="slick-slide slick-current slick-active slick-center" data-aos="fade-up" data-slick-index="3" aria-hidden="false" style="width: 180px;" tabindex="0" role="tabpanel" id="slick-slide03" aria-describedby="slick-slide-control03">-->
                        <!--            <div class="card new">-->
                        <!--                <img src="./images/clogo4.png">-->
                        <!--            </div> -->
                        <!--        </div><div class="slick-slide slick-active" data-aos="fade-up" data-slick-index="4" aria-hidden="false" style="width: 180px;" tabindex="0" role="tabpanel" id="slick-slide04" aria-describedby="slick-slide-control04">-->
                        <!--            <div class="card">-->
                        <!--                <img src="./images/clogo3.png">-->
                        <!--            </div>-->
                        <!--        </div><div class="slick-slide slick-active" data-slick-index="5" aria-hidden="false" style="width: 180px;" tabindex="0" role="tabpanel" id="slick-slide05" aria-describedby="slick-slide-control05">-->
                        <!--            <div class="card">-->
                        <!--                <img src="./images/clogo2.png">-->
                        <!--            </div>-->
                        <!--        </div><div class="slick-slide slick-active" data-slick-index="6" aria-hidden="false" style="width: 180px;" tabindex="0" role="tabpanel" id="slick-slide06" aria-describedby="slick-slide-control06">-->
                        <!--            <div class="card new">-->
                        <!--                <img src="./images/clogo4.png">-->
                        <!--            </div> -->
                        <!--        </div><div class="slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" style="width: 180px;" tabindex="-1">-->
                        <!--          <div class="card">-->
                        <!--            <img src="./images/clogo1.png">-->
                        <!--          </div>-->
                        <!--        </div><div class="slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" style="width: 180px;" tabindex="-1">-->
                        <!--            <div class="card">-->
                        <!--                <img src="./images/clogo6.png">-->
                        <!--            </div>-->
                        <!--        </div><div class="slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" style="width: 180px;" tabindex="-1">-->
                        <!--            <div class="card">-->
                        <!--                <img src="./images/clogo5.png">-->
                        <!--            </div> -->
                        <!--        </div><div class="slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" style="width: 180px;" tabindex="-1">-->
                        <!--            <div class="card new">-->
                        <!--                <img src="./images/clogo4.png">-->
                        <!--            </div> -->
                        <!--        </div><div class="slick-slide slick-cloned" data-slick-index="11" aria-hidden="true" style="width: 180px;" tabindex="-1">-->
                        <!--            <div class="card">-->
                        <!--                <img src="./images/clogo3.png">-->
                        <!--            </div>-->
                        <!--        </div><div class="slick-slide slick-cloned" data-slick-index="12" aria-hidden="true" style="width: 180px;" tabindex="-1">-->
                        <!--            <div class="card">-->
                        <!--                <img src="./images/clogo2.png">-->
                        <!--            </div>-->
                        <!--        </div><div class="slick-slide slick-cloned" data-slick-index="13" aria-hidden="true" style="width: 180px;" tabindex="-1">-->
                        <!--            <div class="card new">-->
                        <!--                <img src="./images/clogo4.png">-->
                        <!--            </div> -->
                        <!--        </div>-->
                        <!--        </div></div>    -->
                                
                                
                                
                                
                                 
                                 
                        <!--      <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button><ul class="slick-dots" style="display: block;" role="tablist"><li class="" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 2" tabindex="-1">1</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 2" tabindex="-1">2</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 2" tabindex="0" aria-selected="true">3</button></li><li role="presentation" class="slick-active"><button type="button" role="tab" id="slick-slide-control03" aria-controls="slick-slide03" aria-label="4 of 2" tabindex="-1">4</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control04" aria-controls="slick-slide04" aria-label="5 of 2" tabindex="-1">5</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control05" aria-controls="slick-slide05" aria-label="6 of 2" tabindex="-1">6</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control06" aria-controls="slick-slide06" aria-label="7 of 2" tabindex="-1">7</button></li></ul></div>-->
                        <!--      </div>   -->
                    </div>
                </section>
                <!-- ANIMATION TRUST SECTION END -->
                
                <!-- LOGO ABOUT US START -->

				<section id="logo-about-us" style="padding: 0px;">
					<div class="container">
						<div class="row">

							<div class="col-12 align-self-center">
								<div class="logoabout-text animation-about">
									<h2 class="heading-text-h3"><b>Animation </b>Services</h2>
								</div> 
							</div>
						</div>
					</div>
				</section>
                
                <!-- LOGO ABOUT US START -->

				<section id="logo-about-us" style="padding: 10px 0px;">
					<div class="container">
						<div class="row">

							<div class="col-6 col-12-medium align-self-center" data-aos="fade-right">
								<div class="logoabout-text animation-about">
									<h2 class="logoabout-text-h2">Why Choose Animation Services?</h2>
									<p>
									    Animation services are crucial for modern businesses. Here's why:
									</p>
									<ol>
					                    <li>
						                    <p><b>Enhanced Engagement: </b>Animated content captures attention more effectively than static images or text. It keeps your audience engaged and interested in your brand.
                                            </p>
				                        </li>
				                        <li>
						                    <p><b>Simplified Communication: </b>Complex ideas are easier to understand when presented through animation. This makes it an ideal tool for explaining products, services, or concepts.
                                            </p>
				                        </li>
				                        <li>
						                    <p><b>Versatile Use: </b>Animations can be used across various platforms, including websites, social media, and presentations, making them a versatile marketing tool.
                                            </p>
				                        </li>
				                        <li>
						                    <p><b>Memorable Branding: </b>A unique and creative animation helps your brand stand out and be remembered by your audience.
                                            </p>
				                        </li>
			                    	</ol>
								</div> 
							</div>

							<div class="col-6 col-12-medium  d-none d-md-block " data-aos="fade-left">
                				<div  style="height: 100%; display: flex; justify-content: center; align-items: center">
                					<img class="animate__animated animate__pulse" style="height: 80%; width: auto;" src="images/animation/animation-img1.png"/>
                				</div>
                			</div>
						</div>
					</div>
				</section>
				
				
				
				<!-- LOGO ABOUT US START -->

				<section id="logo-about-us" style="padding: 10px 0px;">
					<div class="container">
						<div class="row">

							<div class="col-12 col-12-medium align-self-center"  data-aos="fade-right">
								<div class="logoabout-text animation-about">
									<h2 class="logoabout-text-h2">Our Animation Services</h2>
									<p>
									   At Apex Creative Designs, we offer a wide range of animation services designed to meet your specific needs. Our services include:
									</p>
									<ol>
					                    <li>
					                        <h6 style="font-size: 25px;">2D Animation Services</h6>
						                    <p>Our 2D animation services bring your ideas to life with simple yet engaging animations. We create explainer videos, educational content, and marketing materials that captivate your audience. Our team uses the latest techniques and software to ensure smooth and visually appealing animations. Whether you need short clips or full-length animated features, we deliver quality content that grabs attention.
                                            </p>
				                        </li>
				                        <li>
					                        <h6 style="font-size: 25px;">3D Animation Services</h6>
						                    <p>
						                        Our 3D animation services provide a more immersive and realistic experience. Whether a product demonstration or a virtual tour, our 3D animations add depth and dimension to your content. We specialize in creating lifelike characters, detailed environments, and intricate animations that enhance your brand's storytelling. Our 3D animations are perfect for showcasing products, creating engaging advertisements, or bringing complex concepts to life
                                            </p>
				                        </li>
				                        <li>
					                        <h6 style="font-size: 25px;">Motion Graphics Services</h6>
						                    <p>
						                        Motion graphics combine graphic design with animation to create visually appealing content. Our motion graphics services are perfect for promotional videos, social media content, and presentations. We focus on creating dynamic and engaging visuals that effectively communicate your message. From kinetic typography to animated infographics, our motion graphics make your content stand out and resonate with your audience.
                                            </p>
				                        </li>
				                        <li>
					                        <h6 style="font-size: 25px;">Animated Video Production Services</h6>
						                    <p>
						                        We handle the entire production process for animated videos, from concept to final delivery. Our animated video production services ensure your videos are high-quality and align with your brand's message. Our team works closely with you to develop storyboards, scripts, and animation sequences that bring your vision to life. We also offer voice-over, sound design, and post-production services to create a polished final product.
                                            </p>
				                        </li>
				                        <li>
					                        <h6 style="font-size: 25px;">Logo Animation Services</h6>
						                    <p>
						                        Give your logo a dynamic touch with our logo animation services. An animated logo adds a professional and modern feel to your brand's identity. Our designers create custom animations that reflect your brand's personality and values. Whether you need a subtle animation for your website or a bold intro for your videos, our logo animations leave a lasting impression.
                                            </p>
				                        </li>
				                        <li>
					                        <h6 style="font-size: 25px;">3D Product Animation Services</h6>
						                    <p>
						                        Showcase your products in the best light with our 3D product animation services. These animations highlight the features and benefits of your products, making them more appealing to customers. Our 3D product animations provide a detailed and realistic view of your products, helping potential customers understand their value. From virtual product demos to interactive 3D models, we help you present your products in the most compelling way.
                                            </p>
				                        </li>
				                        <li>
					                        <h6 style="font-size: 25px;">Motion Graphics Design Services</h6>
						                    <p>
						                        Our motion graphics design services focus on creating stunning visuals that convey your brand's message effectively. From animated infographics to title sequences, we have you covered. We blend creativity with technical expertise to produce motion graphics that are both visually striking and informative. Our designs are tailored to fit your brand's style and objectives, ensuring consistency across all your marketing materials.
                                            </p>
				                        </li>
				                        <li>
					                        <h6 style="font-size: 25px;">Video Animation Company</h6>
						                    <p>
						                        As a leading video animation company, we specialize in creating customized animated videos that resonate with your audience and drive engagement. Our team has extensive experience in various animation styles, including traditional, digital, and hybrid techniques. We collaborate with you throughout the production process to ensure the final video aligns with your brand's vision and goals. Our animated videos help you tell compelling stories, promote products, and enhance your brand's presence.
                                            </p>
				                        </li>
				                        <li>
					                        <h6 style="font-size: 25px;">Animation Production Agency</h6>
						                    <p>
						                        Our animation production agency offers end-to-end solutions for all your animation needs. We work closely with you to develop animations that align with your brand's goals. From initial concept development to final delivery, we manage every aspect of the production process. Our services include scriptwriting, storyboarding, animation, editing, and sound design. We are committed to delivering high-quality animations that exceed your expectations and help you achieve your marketing objectives.
                                            </p>
				                        </li>
			                    	</ol>
								</div> 
							</div>

							<!--<div class="col-6 col-12-medium">-->
							<!--	<img class="animate__animated animate__pulse" style="width: 100%;" src="./images/animation/about.png"/>-->
							<!--</div>-->
						</div>
					</div>
				</section>
				
				
				<!-- LOGO ABOUT US START -->

				<section id="logo-about-us" style="padding: 10px 0px;">
					<div class="container">
						<div class="row">

							<div class="col-6 col-12-medium align-self-center" data-aos="fade-right">
								<div class="logoabout-text animation-about">
									<h2 class="logoabout-text-h2">The Process of Creating Stunning Animations</h2>
									<ol>
					                    <li>
						                    <p><b>Consultation and Research: </b>We start by understanding your brand, audience, and goals. This helps us create animations that effectively communicate your message.
                                            </p>
				                        </li>
				                        <li>
						                    <p><b>Concept Development: </b>Our team brainstorms and develops multiple concepts. Each concept is crafted to capture your brand's essence and engage your audience.
                                            </p>
				                        </li>
				                        <li>
						                    <p><b>Design and Animation: </b>Once the concept is finalized, we begin the design and animation process. Our designers and animators work meticulously to create high-quality animations.
                                            </p>
				                        </li>
				                        <li>
						                    <p><b>Feedback and Refinement: </b>We present the initial animations to you and make necessary adjustments based on your feedback. This ensures the final product meets your expectations.
                                            </p>
				                        </li>
				                        <li>
						                    <p><b>Finalization and Delivery: </b>After refining the animations, we deliver the final files in various formats, making them easy for you to use across different platforms.
                                            </p>
				                        </li>
			                    	</ol>
								</div> 
							</div>

							<div class="col-6 col-12-medium  d-none d-md-block " data-aos="fade-left">
                				<div  style="height: 100%; display: flex; justify-content: center; align-items: center">
                					<img class="animate__animated animate__pulse" style="height: 80%; width: auto;"  src="images/animation/animation-img2.png"/>
                				</div>
                			</div>
						</div>
					</div>
				</section>
				
				
				
			<!-- LOGO ABOUT US START -->

				<section id="logo-about-us" style="padding: 10px 0px;">
					<div class="container">
						<div class="row">

							<!--<div class="col-6 col-12-medium  d-none d-md-block" data-aos="fade-right">-->
       <!--         				<div  style="height: 100%; display: flex; justify-content: center; align-items: center">-->
       <!--         					<img class="animate__animated animate__pulse" style="height: 80%; width: auto;" src="./images/animation/animation-img3.png"/>-->
       <!--         				</div>-->
       <!--         			</div>-->
							<div class="col-12 col-12-medium align-self-center" data-aos="fade-left">
								<div class="logoabout-text animation-about">
									<h2 class="logoabout-text-h2">Why Choose Apex Creative Designs for Animation Services?</h2>
									<ol>
					                    <li>
					                        <h6 style="font-size: 25px;">Expertise</h6>
						                    <p>
						                        Our team consists of skilled animators and designers with years of experience. We stay updated with the latest trends and technologies to provide top-notch animation services.
                                            </p>
				                        </li>
				                        <li>
					                        <h6 style="font-size: 25px;">Customization</h6>
						                    <p>
						                        We understand that every brand is unique. Our animation services are tailored to meet your specific needs and help you achieve your marketing goals.
                                            </p>
				                        </li>
				                        <li>
					                        <h6 style="font-size: 25px;">Collaboration</h6>
						                    <p>
						                        We believe in working closely with our clients. Your input is valuable to us, and we ensure your vision is reflected in the final product.
                                            </p>
				                        </li>
				                        <li>
					                        <h6 style="font-size: 25px;">Quality</h6>
						                    <p>
						                        We prioritize quality in every project. Our animations are visually stunning, engaging, and crafted with attention to detail.
                                            </p>
				                        </li>
			                    	</ol>
								</div> 
							</div>

						</div>
					</div>
				</section>
				
				
				<!-- LOGO ABOUT US START -->

				<section id="logo-about-us" style="padding: 10px 0px;">
					<div class="container">
						<div class="row">

							<div class="col-6 col-12-medium align-self-center" data-aos="fade-right">
								<div class="logoabout-text animation-about">
									<h2 class="logoabout-text-h2">Understanding Animation Service Costs</h2>
									<p>
									    The cost of animation services varies depending on factors like complexity, style, and length. At Apex Creative Designs, we offer competitive pricing without compromising on quality. Our goal is to provide affordable animation services that deliver exceptional value.
									</p>
								</div> 
							</div>

							<div class="col-6 col-12-medium  d-none d-md-block" data-aos="fade-left">
                				<div  style="height: 100%; display: flex; justify-content: center; align-items: center">
                					<img class="animate__animated animate__pulse" style="height: 80%; width: auto;" src="images/animation/animation-img4.png"/>
                				</div>
                			</div>
						</div>
					</div>
				</section>
				
				
				<!-- LOGO ABOUT US START -->

				<section id="logo-about-us" style="padding: 10px 0px;">
					<div class="container">
						<div class="row">

							<div class="col-6 col-12-medium  d-none d-md-block" data-aos="fade-right">
                				<div  style="height: 100%; display: flex; justify-content: center; align-items: center">
                					<img class="animate__animated animate__pulse" style="height: 80%; width: auto;" src="images/animation/animation-img5.png"/>
                				</div>
                			</div>
							<div class="col-6 col-12-medium align-self-center" data-aos="fade-left">
								<div class="logoabout-text animation-about">
									<h2 class="logoabout-text-h2">Case Studies and Testimonials</h2>
									<p>
									    Don't just take our word for it. Hear from our satisfied clients! We have worked with numerous businesses, helping them create animations that make a lasting impact. Our portfolio showcases a diverse range of animation projects, each tailored to the client's specific needs.
									</p>
								</div> 
							</div>

						</div>
					</div>
				</section>
				
				
				
				<!-- LOGO ABOUT US START -->

				<section id="logo-about-us" style="padding: 10px 0px;">
					<div class="container">
						<div class="row">

							<div class="col-6 col-12-medium align-self-center" data-aos="fade-right">
								<div class="logoabout-text animation-about">
									<h2 class="logoabout-text-h2">Elevate Your Brand with Animation Services</h2>
									<p>
									    Investing in professional animation services is one of the best decisions you can make for your business. High-quality animations not only enhance your brand's visibility but also build trust and recognition among your audience. At Apex Creative Designs, we are dedicated to providing top-tier animation services that help your business stand out. Let us help you create animations that truly represent your brand's identity and captivate your audience.
									</p>
								</div> 
							</div>

							<div class="col-6 col-12-medium  d-none d-md-block" data-aos="fade-left">
                				<div  style="height: 100%; display: flex; justify-content: center; align-items: center">
                					<img class="animate__animated animate__pulse" style="height: 80%; width: auto;" src="images/animation/animation-img6.png"/>
                				</div>
                			</div>
						</div>
					</div>
				</section>
				
				
				
				<!-- LOGO ABOUT US START -->

				<section id="logo-about-us" style="padding: 10px 0px;">
					<div class="container">
						<div class="row">

							<div class="col-6 col-12-medium  d-none d-md-block" data-aos="fade-right">
                				<div  style="height: 100%; display: flex; justify-content: center; align-items: center">
                					<img class="animate__animated animate__pulse" style="height: 80%; width: auto;" src="images/animation/animation-img7.png"/>
                				</div>
                			</div>
							<div class="col-6 col-12-medium align-self-center" data-aos="fade-left">
								<div class="logoabout-text animation-about">
									<h2 class="logoabout-text-h2">Get Started with Animation Services</h2>
									<p>
									    If you're looking for professional animation services that accurately reflect your brand, contact Apex Creative Designs today. Our team of experts is ready to help you create animations that set your business apart and drive success. Reach out to us at +1 (737) 377-5786 or visit our website at [apexcreativedesigns.com] (https://apexcreativedesigns.com) to learn more about our animation services.
									</p>
								</div> 
							</div>

						</div>
					</div>
				</section>
				
				
				
				
				

				<!-- LOGO ABOUT US START -->

				<section id="logo-about-us" style="padding: 10px 0px;">
					<div class="container">
						<div class="row">

							<div class="col-12 align-self-center">
								<div class="logoabout-text animation-about">
									<h2 class="heading-text-h3"><b>Animation </b>Services</h2>
									<p>We believe that great design should be accessible to everyone, regardless of their 
                                        budget or industry. Whether you’re a small start-up or a large corporation, 
                                        we have the expertise and resources to create a custom solution that
                                         fits your unique needs. Whether you’re just starting out or you’re an
                                          established business looking to revamp your online presence, we have the
                                           skills and expertise to help you succeed. So why wait? Contact us today to
                                            learn more about how we can help you take your business to the next level.</p>
								</div> 
							</div>
						</div>
					</div>
				</section>

				<!-- LOGO ABOUT US END -->
				

				<!-- LOGO CALL TO ACTIONS START -->
				<section id="logo-call-to-action" style="margin-top: 50px;">
					<div class="logo-cta animationcta">
						<div class="container">
							<div class="row">
							<div class="col-6 col-12-medium align-self-center">
								<div class="heading-text">
								<h3>Ready to <b>Solve</b> Your <br><b>Animation</b> Problems?</h3>
                                <div class="ready-solve-orderlist">
                                    <ul>
                                        <li><span><img src="images/animation/tick.png"/></span>Character animate</li>
                                        <li><span><img src="images/animation/tick.png"/></span>Conceptualize</li>
                                        <li><span><img src="images/animation/tick.png"/></span>Multiple revisions</li>
                                        <li><span><img src="images/animation/tick.png"/></span>Quick turn around time</li>
                                    </ul>
                                </div>
									<div class="about-banner-buttons animate__animated animate__bounce" style="padding-top: 30px; text-align: left;">
										<ul style="text-align: left;">
											<li><div class="brand-button">
												<h6><a href="contact.html">Get Started</a></h6>
											</div></li>
											<li><div class="brand-button">
												<h6><a target="_blank" href="https://wa.link/h8rwip"><i class="fa fa-message my-float"></i> Live Chat</a></h6>
											</div></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-6 col-12-medium align-self-center">
								<img width="100%" src="images/animation/calltoaction.png"/>
							</div>

						</div>
							
						</div>
					</div>
				</section>
				<!-- LOGO CALL TO ACTIONS END -->

                <!-- ANIMATED TABS SECTION START -->
                <section id="recent-past" class="d-none d-md-block">
      <div class="container">
        <div class="row">
          <div class="heading-text" style="color: #fff; padding-bottom: 60px;">
            <h3 class="heading-text-sm-h3">Work In
            </h3>
            <h3 class="heading-text-h3-main"><b>Recent </b>Past</h3>
          </div>
        </div>
      </div>

      <!--<ul class="nav nav-tabs d-lg-flex" id="myTab" role="tablist">-->
      <!--  <li class="nav-item" role="presentation">-->
      <!--    <button class="nav-link active" id="home-tab4" data-bs-toggle="tab" data-bs-target="#home-tab-pane4"-->
      <!--      type="button" role="tab" aria-controls="home-tab-pane4" aria-selected="true">Websites</button>-->
      <!--  </li>-->
      <!--  <li class="nav-item" role="presentation">-->
      <!--    <button class="nav-link" id="profile-tab4" data-bs-toggle="tab" data-bs-target="#profile-tab-pane4"-->
      <!--      type="button" role="tab" aria-controls="profile-tab-pane4" aria-selected="false">Logos</button>-->
      <!--  </li>-->
      <!--  <li class="nav-item" role="presentation">-->
      <!--    <button class="nav-link" id="profile-tab5" data-bs-toggle="tab" data-bs-target="#profile-tab-pane5"-->
      <!--      type="button" role="tab" aria-controls="profile-tab-pane5" aria-selected="false">Branding</button>-->
      <!--  </li>-->
      <!--  <li class="nav-item" role="presentation">-->
      <!--    <button class="nav-link" id="profile-tab6" data-bs-toggle="tab" data-bs-target="#profile-tab-pane6"-->
      <!--      type="button" role="tab" aria-controls="#profile-tab-pane6" aria-selected="false">Social Media-->
      <!--      Marketing</button>-->
      <!--  </li>-->

      <!--  <li class="nav-item" role="presentation">-->
      <!--    <button class="nav-link" id="profile-tab7" data-bs-toggle="tab" data-bs-target="#profile-tab-pane7"-->
      <!--      type="button" role="tab" aria-controls="#profile-tab-pane7" aria-selected="false">Mobile App Design</button>-->
      <!--  </li>-->
      <!--</ul>-->
<div class="gallery-container row">
              <div class="gallery-item col-lg-4" data-aos="flip-left" style="
    flex-basis: auto;
" data-index="1">
                <iframe style="
    object-fit: cover;
    width: 100%;
" height="315" src="https://www.youtube.com/embed/4Y0HQmpU6wI?si=HKwt5Xe77t4NVZy8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
              <div class="gallery-item col-lg-4" data-aos="flip-right" style="
    flex-basis: auto;
"  data-index="2">
                <iframe style="
    object-fit: cover;
    width: 100%;
" height="315" src="https://www.youtube.com/embed/oAjVHTCHZDI?si=FHoW8kd1Gy0962dI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
              <div class="gallery-item col-lg-4" data-aos="flip-left" style="
    flex-basis: auto;
" data-index="3">
                <iframe style="
    object-fit: cover;
    width: 100%;
" height="315" src="https://www.youtube.com/embed/Y7ZuQxKYslc?si=rCqwLmsMF3dx8qup" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
              <div class="gallery-item col-lg-4" data-aos="flip-right" style="
    flex-basis: auto;
" data-index="4">
               <iframe style="
    object-fit: cover;
    width: 100%;
" height="315" src="https://www.youtube.com/embed/ky1PGGdFCXo?si=1O2llFBQo5msOBXY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
              <div class="gallery-item col-lg-4" data-aos="flip-left" style="
    flex-basis: auto;
" data-index="4">
               <iframe style="
    object-fit: cover;
    width: 100%;
" height="315" src="https://www.youtube.com/embed/4Y0HQmpU6wI?si=HKwt5Xe77t4NVZy8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
              <div class="gallery-item col-lg-4" data-aos="flip-right" style="
    flex-basis: auto;
" data-index="4">
               <iframe style="
    object-fit: cover;
    width: 100%;
" height="315" src="https://www.youtube.com/embed/4Y0HQmpU6wI?si=HKwt5Xe77t4NVZy8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
              
            </div> 
<!--      <div class="tab-content accordion ghm" id="myTabContent">-->
<!--        <div class="tab-pane fade show active accordion-item" id="home-tab-pane4" role="tabpanel"-->
<!--          aria-labelledby="home-tab4" tabindex="0">-->
<!--          <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block about-us" aria-labelledby="headingOne"-->
<!--            data-bs-parent="#myTabContent">-->
<!--            <div class="gallery-container">-->
<!--              <div class="gallery-item" data-index="1">-->
<!--                <img src="./images/websitedesigns/portfolio/ecommerce/1.png">-->
<!--              </div>-->
<!--              <div class="gallery-item" data-index="2">-->
<!--                <img src="./images/websitedesigns/portfolio/ecommerce/2.jpg">-->
<!--              </div>-->
<!--              <div class="gallery-item" data-index="3">-->
<!--                <img src="./images/websitedesigns/portfolio/ecommerce/3.jpg">-->
<!--              </div>-->
<!--              <div class="gallery-item" data-index="4">-->
<!--                <img src="./images/websitedesigns/portfolio/ecommerce/4.jpg">-->
<!--              </div>-->
              
<!--            </div> -->
<!--          </div>-->

<!--        </div>-->

<!--      </div>-->

<!--      <div class="tab-pane fade accordion-item prr" id="profile-tab-pane4" role="tabpanel"-->
<!--        aria-labelledby="profile-tab4" tabindex="0">-->
<!--        <div id="collapseTwo" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTwo"-->
<!--          data-bs-parent="#myTabContent">-->
<!--          <div class="gallery-container">-->
<!--            <div class="gallery-item" data-index="5">-->
<!--              <img src="./images/Logodesign/portfolio/logo1.jpg">-->
<!--            </div>-->
<!--            <div class="gallery-item" data-index="6">-->
<!--              <img src="./images/Logodesign/portfolio/logo2.jpg">-->
<!--            </div>-->
<!--            <div class="gallery-item" data-index="7">-->
<!--              <img src="./images/Logodesign/portfolio/logo3.jpg">-->
<!--            </div>-->
<!--            <div class="gallery-item" data-index="8">-->
<!--              <img src="./images/Logodesign/portfolio/logo4.jpg">-->
<!--            </div>-->
            
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->

<!--      <div class="tab-pane fade accordion-item prr" id="profile-tab-pane5" role="tabpanel"-->
<!--        aria-labelledby="profile-tab5" tabindex="0">-->
<!--        <div id="collapseTwo" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTwo"-->
<!--          data-bs-parent="#myTabContent">-->
<!--          <div class="gallery-container">-->
<!--            <div class="gallery-item" data-index="9">-->
<!--              <img style="-->
<!--    object-fit: cover;-->
<!--    width: 100%;-->
<!--    border:6px solid #3e9475;-->
<!--" src="./images/portfolioOne.jpg" /> -->
<!--            </div>-->
<!--            <div class="gallery-item" data-index="10">-->
<!--              <img style="-->
<!--    object-fit: cover;-->
<!--    width: 100%;-->
<!--    border:6px solid #3e9475;-->
<!--" src="./images/portfolioTwo.jpg" /> -->
<!--            </div>-->
<!--            <div class="gallery-item" data-index="11">-->
<!--             <img style="-->
<!--    object-fit: cover;-->
<!--    width: 100%;-->
<!--    border:6px solid #3e9475;-->
<!--" src="./images/portfolioThree.jpg" /> -->
<!--            </div>-->
<!--            <div class="gallery-item" data-index="12">-->
<!--              <img style="-->
<!--    object-fit: cover;-->
<!--    width: 100%;-->
<!--    border:6px solid #3e9475;-->
<!--" src="./images/portfolioFour.jpg" /> -->
<!--            </div>-->
         
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->


<!--      <div class="tab-pane fade accordion-item prr" id="profile-tab-pane6" role="tabpanel"-->
<!--        aria-labelledby="profile-tab6" tabindex="0">-->
<!--        <div id="collapseTwo" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTwo"-->
<!--          data-bs-parent="#myTabContent">-->
<!--          <div class="gallery-container">-->
<!--            <div class="gallery-item" data-index="13">-->
<!--              <img src="./images/portfolioimages/1.png">-->
<!--            </div>-->
<!--            <div class="gallery-item" data-index="14">-->
<!--              <img src="./images/portfolioimages/2.png">-->
<!--            </div>-->
<!--            <div class="gallery-item" data-index="15">-->
<!--              <img src="./images/portfolioimages/3.png">-->
<!--            </div>-->
<!--            <div class="gallery-item" data-index="16">-->
<!--              <img src="./images/portfolioimages/4.png">-->
<!--            </div>-->
            
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->


<!--      <div class="tab-pane fade accordion-item prr" id="profile-tab-pane7" role="tabpanel"-->
<!--        aria-labelledby="profile-tab7" tabindex="0">-->
<!--        <div id="collapseTwo" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTwo"-->
<!--          data-bs-parent="#myTabContent">-->
<!--           <div class="gallery-container">-->
<!--            <div class="gallery-item" data-index="17">-->
<!--              <img style="width:70%" src="./images/portfolioimages/mok1.png">-->
<!--            </div>-->
<!--            <div class="gallery-item" data-index="18">-->
<!--              <img style="width:70%" src="./images/portfolioimages/mok2.png">-->
<!--            </div>-->
<!--            <div class="gallery-item" data-index="19">-->
<!--              <img style="width:70%" src="./images/portfolioimages/mok3.png">-->
<!--            </div>-->
<!--            <div class="gallery-item" data-index="20">-->
<!--              <img style="width:70%" src="./images/portfolioimages/mok4.png">-->
<!--            </div>-->
            
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->

      <div class="custom-portoflio-button" style="padding-top: 40px;">
        <ul>
          <li>
            <div class="brand-button">
              <h6><a href="contact.html">Get Started</a></h6>
            </div>
          </li>
          <li>
            <div class="brand-button">
              <h6><a href="portfolio.html">View Portfolio</a></h6>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <?php include_once("testimonial-global.php"); ?>
            <!-- BLOGS START -->
            <section id="blog-animation" style="padding: 50px 0px; display: none;">
                <div class="container">
                    <div class="heading-text" style="text-align: center;">
                        <h3>Testimonials</h3>
                        <h3><b>INSIGHTS</b> FROM OUR<br> COMPANY EXPERTS
                        </h3>
                    </div>
                    <div class="row" style="padding: 20px 0px;">
                        <div class="col-6 col-12-medium">
                            <div class="card-blog" style="color: #fff;">
                                <h2 style="color: #fff; font-family: 
                                Anek Tamil;">Search Engine Rankings</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    Lorem Ipsum has been the industry's standard dummy text ever since 
                                    the 1500s, when an unknown printer took a galley of type and scrambled
                                     it to make a type specimen book</p>
                            </div>
                        </div>

                        <div class="col-6 col-12-medium">
                            <div class="card-blog" style="color: #fff;">
                                <h2 style="color: #fff; font-family: 
                                Anek Tamil;">Search Engine Rankings</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    Lorem Ipsum has been the industry's standard dummy text ever since 
                                    the 1500s, when an unknown printer took a galley of type and scrambled
                                     it to make a type specimen book</p>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="padding: 20px 0px;">
                        <div class="col-6 col-12-medium">
                            <div class="card-blog" style="color: #fff;">
                                <h2 style="color: #fff; font-family: 
                                Anek Tamil;">Search Engine Rankings</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    Lorem Ipsum has been the industry's standard dummy text ever since 
                                    the 1500s, when an unknown printer took a galley of type and scrambled
                                     it to make a type specimen book</p>
                            </div>
                        </div>

                        <div class="col-6 col-12-medium">
                            <div class="card-blog" style="color: #fff;">
                                <h2 style="color: #fff; font-family: 
                                Anek Tamil;">Search Engine Rankings</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    Lorem Ipsum has been the industry's standard dummy text ever since 
                                    the 1500s, when an unknown printer took a galley of type and scrambled
                                     it to make a type specimen book</p>
                            </div>
                        </div>
                    </div>


                    <div class="row" style="padding: 20px 0px;">
                        <div class="col-6 col-12-medium">
                            <div class="card-blog" style="color: #fff;">
                                <h2 style="color: #fff; font-family: 
                                Anek Tamil;">Search Engine Rankings</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    Lorem Ipsum has been the industry's standard dummy text ever since 
                                    the 1500s, when an unknown printer took a galley of type and scrambled
                                     it to make a type specimen book</p>
                            </div>
                        </div>

                        <div class="col-6 col-12-medium">
                            <div class="card-blog" style="color: #fff;">
                                <h2 style="color: #fff; font-family: 
                                Anek Tamil;">Search Engine Rankings</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    Lorem Ipsum has been the industry's standard dummy text ever since 
                                    the 1500s, when an unknown printer took a galley of type and scrambled
                                     it to make a type specimen book</p>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding: 20px 0px;">
                        <div class="col-6 col-12-medium">
                            <div class="card-blog" style="color: #fff;">
                                <h2 style="color: #fff; font-family: 
                                Anek Tamil;">Search Engine Rankings</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    Lorem Ipsum has been the industry's standard dummy text ever since 
                                    the 1500s, when an unknown printer took a galley of type and scrambled
                                     it to make a type specimen book</p>
                            </div>
                        </div>

                        <div class="col-6 col-12-medium">
                            <div class="card-blog" style="color: #fff;">
                                <h2 style="color: #fff; font-family: 
                                Anek Tamil;">Search Engine Rankings</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    Lorem Ipsum has been the industry's standard dummy text ever since 
                                    the 1500s, when an unknown printer took a galley of type and scrambled
                                     it to make a type specimen book</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!-- FOOTER START -->
        <?php include_once("includes/footer.php") ?>

</body>

</html>