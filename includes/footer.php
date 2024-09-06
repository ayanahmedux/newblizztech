<footer id="main-footer-sections" >
				<!-- FIRST WIDGET FOOTER START -->
				<div class="first-widgets-row">
					<div class="container">
						<div class="row">
							<div class="col-4 col-12-medium">
								<div class="footer-logo">
									<img src="images/blizz.png"/>
								</div>
								<div class="footer-about-us">
									<p>We are passionate about what we do, and we take 
										pride in the work we deliver. Our goal is to create 
										designs that not only meet our clients’ expectations 
										but exceed them. We look forward to the opportunity to 
										work with you and help bring your vision to life.</p>
								</div>
							</div>

							<div class="col-2 col-12-medium">
								<div class="floating_btn">
									<a target="_blank" href="https://wa.me/">
									  <div class="contact_icon">
										<i class="fa fa-whatsapp my-float"></i>
									  </div>
									</a>
								
								  </div>
								<div class="footer-nav-1" style="padding-left: 70px;">
									<h4>Quick Links</h4>
									<ul class="nav-menu-links">
										<li><a href="#">Home</a></li>
										<li><a href="#">About Us</a></li>
										<li><a href="#">Services</a></li>
										<li><a href="#">Portfolio</a></li>
										<li><a href="#">Contact </a></li>
									</ul>
								</div>
							</div>

							<div class="col-2 col-12-medium">
								<div class="footer-nav-2">
									<h4>Useful Links</h4>
									<ul class="nav-menu-links">
										<li><a href="#">Terms & Condition</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Refund Policy</a></li>
										<li><a href="#">Site Map</a></li>
									</ul>
								</div>
							</div>

							<div class="col-4 col-12-medium">
								<div class="footer-nav-3">
									<h4>Contact Us</h4>
									<ul class="nav-menu-links">
										<li><span>Phone :</span> <em>(737) 377-5786</em></li>
										<li><span>Email :</span> <em> info@blizztechsolutions.com</em></li>
										<li><span>Address :</span> <em> 913 Essex Blvd, Lewisville,
Texas 75056, US</em></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- PAYMENT SECTION START -->

				<div class="footer-payment-section" style="margin: 20px 0px 30px 0px;">
					<div class="container">
						<div class="payment-inner">
						<div class="row">
							<div class="col-5 col-12-medium">
								<h4>Accepted Merchants</h4>
							</div>
							<div class="col-7 col-12-medium">
								<img src="./images/paymentcards.png"/>
							</div>
						</div>
					</div>
					</div>
				</div>
				<!-- PAYMENT SECTION END -->
				<!-- FIRST WIDGET FOOTER END -->

				<!-- FOOTER-COPYRIGHT START -->

				<div class="copyright-section">
					<div class="container">
						<div class="row">
							<div class="col-6 col-12-medium align-self-center">
								<p style="color: #fff;">@2023 <span style="color: #27D6FC;">Apex Creative Designs.</span> All Right  Reserved.</p>
							</div>
							<div class="col-6 col-12-medium">
								<div class="social-links">
									<ul>
										<li><a href="#"><img src="./images/social/social1.png"/></a></li>
										<li><a href="#"><img src="./images/social/social2.png"/></a></li>
										<li><a href="#"><img src="./images/social/social3.png"/></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- FOOTER COPYRIGHT END -->
			</footer>
			<div id="quoteModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="col-lg-12">
      <div class="modal-lines">
        <h2 class="modal-heading">Request an <br>
          <span>Appointment</span>
        </h2>
        <p class="modal-subheading">Signup and get free consultation</p>
      </div>
      <form method="post" action="">
    <h4>I'm interested in</h4>
    <div class="mycustom-buttons">
        <ul>
            <li><button type="button" class="interest-btn" data-value="Custom Software">Custom Software</button></li>
            <li><button type="button" class="interest-btn" data-value="Mobile App">Mobile App</button></li>
            <li><button type="button" class="interest-btn" data-value="UX/UI">UX/UI</button></li>
            <li><button type="button" class="interest-btn" data-value="Web Development">Web Development</button></li>
            <li><button type="button" class="interest-btn" data-value="Social Media Marketing">Social Media Marketing</button></li>
        </ul>
    </div>
    <!-- Hidden input to store selected interests -->
    <input type="hidden" name="interests" id="selected-interests">

    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Name" required>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="phone" placeholder="Phone" required>
    </div>
    <div class="mb-3">
        <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
    </div>
    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
</form>
<div class="thankyoumessage"> <?php echo $message; ?> </div>

    </div>
  </div>
</div>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Slick -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(function(){	
	initSlider();
});


function initSlider() {
		
	var slider = $(".slider");
		
	slider.on("init", function(slick) {
		checkSlides(this, 0);
	});
	
	slider.on("beforeChange", function(event, slick, currentSlide, nextSlide) {
		$(this).addClass("changing");
	});
	
	slider.on("afterChange", function(event, slick, currentSlide) {
		$(this).removeClass("changing");
		checkSlides(this, currentSlide);
	});
	
	
	slider.slick({
		prevArrow: "<button type='button' class='slick-prev' aria-label='Previous picture'></button>",
		nextArrow: "<button type='button' class='slick-next' aria-label='Next Picture'></button>",
		centerMode: true,
		variableWidth: true,
		dots: true,
    autoplay: true,
    slidesToShow: 1,
	});
	
}

function checkSlides(slider, currentSlide) {
	var slides = $(".slide", $(slider));
	slides.removeClass("prev");
	slides.filter(function(index) {
		return $(this).attr("data-slick-index") < currentSlide;
	}).addClass("prev");;
}

</script>
<script>
  var modal = document.getElementById("quoteModal");
  var buttons = document.getElementsByClassName("quote-button");
  var span = document.getElementsByClassName("close")[0];

  function openModal() {
    modal.style.display = "block";
  }

  function closeModal() {
    modal.style.display = "none";
  }
  for (var i = 0; i < buttons.length; i++) {
    buttons[i].onclick = openModal;
  }
  span.onclick = closeModal;
  window.onclick = function(event) {
    if (event.target == modal) {
      closeModal();
    }
  }
  $(".phone-country").intlTelInput({
    geoIpLookup: function(s) {
      $.get("https://ipinfo.io", function() {}, "jsonp").always(function(i) {
        s(i && i.country ? i.country : ""), (e = i.ip);
      });
    },
    initialCountry: "auto",
    nationalMode: !0,
    separateDialCode: !0,
  });
</script>