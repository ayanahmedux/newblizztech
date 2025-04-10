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
<section id="top-header">
	<div class="header-top-nav">
		<div class="custom-section">
			<div class="container">
				<div class="row">
					<div class="col-3 col-12-medium">
						<p class="p1"><img src="./images/icon-top.webp" /> Reach us out +1(833) 944-1694</p>
					</div>
					<div class="col-6 col-12-medium">
						<p class="p2"><img src="./images/icon-top3.webp" /> 913 Essex Blvd, Lewisville,
							Texas 75056, US</p>
					</div>
					<div class="col-3 col-12-medium">
						<p class="p3"><img src="./images/icon-top2.webp" /> info@blizztechsolutions.com</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Header -->

<nav class="navbar navbar-expand-lg ">
	<div class="container-fluid">
		<a class="navbar-brand" href="/"><img src="images/blizz.webp" alt="" /></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				<li class="nav-item current">
					<a class="nav-link " aria-current="page" href="/">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="aboutus">About Us</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Services
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="logo-designs">Logo Designs</a></li>
						<li><a class="dropdown-item" href="website-designs">Website Designs And Development</a></li>
						<li><a class="dropdown-item" href="animation">Animation & Character Art</a></li>
						<li><a class="dropdown-item" href="socialmediamarketing">Social Media Marketing</a></li>
						<li><a class="dropdown-item" href="branding">Branding</a></li>
						<li><a class="dropdown-item" href="ppc">Pay Per Click</a></li>
						<li><a class="dropdown-item" href="seo">SEO</a></li>
						<li><a class="dropdown-item" href="content-creation">Content Creation</a></li>
						<li><a class="dropdown-item" href="mobileapplication">Mobile Applications</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="pricing">Pricing</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="portfolio">Portfolio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact">Contact</a>
				</li>

			</ul>
			<div class="mx-auto">
				<li class="nav-item">
					<button class=" get-a-button quote-button">Get a Quote</button>
				</li>
			</div>
		</div>
	</div>
</nav>