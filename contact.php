<?php
// Initialize an empty message variable for feedback
$user_message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and get form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $user_message = htmlspecialchars(trim($_POST['message']));
    $interests = isset($_POST['interests']) ? implode(", ", (array)$_POST['interests']) : 'None';

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }

    // Set up email details
    $to = 'info@blizztechsolutions.com';
    $subject = 'Quotation Form Submission';
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Email content
    $body = "
    <html>
        <body>
            <h2>QUERY FORM</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
   
            <p><strong>Message:</strong> $user_message</p>
        </body>
    </html>";

    // Send email & check if successful
    if (mail($to, $subject, $body, $headers)) {
        header("Location: thankyou.php");
        exit(); 
    } else {
        error_log("Mail sending failed to $to");
        $user_message = "Failed to send email. Please try again later.";
    }
}
?>

<!DOCTYPE HTML>
<html>
<?php include_once("includes/head.php"); ?>

<body class="homepage is-preload cnhhh">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T85BXSH6"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="page-wrapper">
		<!-- top-header -->

		<?php include_once("includes/header.php") ?>
		<!-- Service Logo first section -->
		<section id="contact-sec">
			<div class="service-logosection" style="padding-top: 50px; padding-left: 50px; padding-right: 50px;">
				<div class="container">
					<div class="row">

						<div class="first-inner-section-text social" style="text-align: center;">
							<h2 style="text-align: center;">CONTACT <b>US</b></h2>
							<p style="text-align: center;"> Get in touch if you
								need help with a project</p>
							<div class="about-banner-buttons animate__animated animate__bounce" style="padding-top: 30px; text-align: center;">
								<ul style="text-align: center;">
									<li>
										<div class="brand-button">
											<h6><a href="javascript:;" class="quote-button">Get Started</a></h6>
										</div>
									</li>
									<li>
										<div class="brand-button">
											<h6><a href="javascript:void(Tawk_API.toggle())"><i class="fa fa-message my-float"></i> Live Chat</a></h6>
										</div>
									</li>
								</ul>
							</div>
						</div>


					</div>
				</div>
			</div>
			<!-- END LOGO FIRST SECTION -->
		</section>
		<!-- LOGO CONTACT FORM START -->
		<section id="logo-contact-form" style="padding: 210px 0px;">
			<div class="container">
				<div class="row contact-inner">
					<div class="col-6 col-12-medium">
						<div class="logo-conactfomrinner">
						<form class="innerpagescalltoaction" method="post" action="" id="myform"> 
    <input type="text" class="form-control" name="name" placeholder="Name" required>
    <input type="email" class="form-control" name="email" placeholder="Email" required>
    <input type="text" class="form-control" name="phone" placeholder="Phone" required>
    <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
    <button class="btn btn-primary" type="submit" name="submit">Submit</button>

</form>
<div class="thankyoumessage"> <?php echo $message; ?> </div>
						</div>
					</div>

					<div class="col-6 col-12-medium">
						<div class="heading-text">
							<h1 style="text-align: left !important;"> Get in <b>touch</b></h1>
							<p style="color: #fff; text-align:left !important;"> Do not hesitate to reach out. Just fill in the contact form here
								and we’ll be sure to reply as fast as possible.</p>
							<div class="contact-div">
								<ul class="nav-menu-links">
									<li><span><i class="bi bi-telephone-fill"></i></span> +1(833) 944-1694</li>
									<li><span><i class="bi bi-envelope-fill"></i></span> info@blizztechsolutions.com</li>
									<li><span><i class="bi bi-geo-alt-fill"></i></span>
										913 Essex Blvd, Lewisville,
										Texas 75056, US</li>
								</ul>
							</div>
							<div class="social-links-2">
								<h2 style="text-align: left !important;">Follow us</h2>
								<ul class="">
									<li><a href="https://www.facebook.com/profile.php?id=61563666846807"><i class="bi bi-facebook"></i></a></li>
									<li><a href="https://www.instagram.com/blizztech.solutions/"><i class="bi bi-instagram"></i></a></li>
									<li><a href="https://www.linkedin.com/company/blizztech-solutions/"><i class="bi bi-linkedin"></i></a></li>
								</ul>
							</div>
							<div class="about-banner-buttons animate__animated animate__bounce" style="padding-top: 30px;">
								<ul>
									<li>
										<div class="brand-button">
											<h6><a href="javascript:;" class="quote-button">Get Started</a></h6>
										</div>
									</li>
									<li>
										<div class="brand-button">
											<h6><a href="javascript:void(Tawk_API.toggle())"><i class="fa fa-message my-float"></i> Live Chat</a></h6>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- LOGO CONTACT FORM END -->

		<!-- TESTIMONIAL START -->
	



		<!-- FOOTER START -->

		<?php include_once("includes/footer.php") ?>
</body>

</html>