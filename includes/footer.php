<?php
$message = ""; // Initialize an empty variable to hold the message

if (isset($_POST['submit'])) {
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $interests = isset($_POST['interests']) ? $_POST['interests'] : 'None'; // Get selected interests

  // Set up email headers
  $to = 'info@blizztechsolutions.com';
  $subject = 'Quotation Form';
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  // Compose the email body
  $body = "
<html>
    <body>
        <h2>QUERY FORM</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>I'm interested in:</strong> $interests</p>
        <p><strong>Message:</strong> $message</p>
    </body>
</html>";

  // Send email and check if successful
  if (mail($to, $subject, $body, $headers)) {
    // Redirect to thankyou.php if the email is sent successfully
    header("Location: thankyou.php");
    exit(); // Ensure no further code is executed after the redirect
  } else {
    $message = "Failed to send email. Please try again later.";
  }
}
?>

<footer id="main-footer-sections">
  <!-- FIRST WIDGET FOOTER START -->
  <div class="first-widgets-row">
    <div class="container">
      <div class="row">
        <div class="col-4 col-12-medium">
          <div class="footer-logo">
            <img src="images/blizz.webp" />
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
            <a target="_blank" href="https://wa.link/n0q4ii">
              <div class="contact_icon">
                <i class="fa fa-whatsapp my-float"></i>
              </div>
            </a>

          </div>
          <div class="footer-nav-1" style="padding-left: 70px;">
            <h4>Quick Links</h4>
            <ul class="nav-menu-links">
              <li><a href="#">Home</a></li>
              <li><a href="aboutus">About Us</a></li>
              <li><a href="">Services</a></li>
              <li><a href="portfolio">Portfolio</a></li>
              <li><a href="contact">Contact </a></li>
            </ul>
          </div>
        </div>

        <div class="col-2 col-12-medium">
          <div class="footer-nav-2">
            <h4>Useful Links</h4>
            <ul class="nav-menu-links">
              <li><a href="privacy-policy">Privacy Policy</a></li>
            </ul>
          </div>
        </div>

        <div class="col-4 col-12-medium">
          <div class="footer-nav-3">
            <h4>Contact Us</h4>
            <ul class="nav-menu-links">
              <li><span>Phone :</span> <em>+19722134007</em></li>
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
            <img src="./images/paymentcards.webp" />
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
          <p style="color: #fff;">@2024 <span style="color: #27D6FC;">Blizz Tech Solutions.</span> All Right Reserved.</p>
        </div>
        <div class="col-6 col-12-medium">
          <div class="social-links">
            <ul>
              <li><a href="https://www.facebook.com/profile.php?id=61563666846807"><i class="bi bi-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/blizztech.solutions/"><i class="bi bi-instagram"></i></a></li>
              <li><a href="https://www.linkedin.com/company/blizztech-solutions/"><i class="bi bi-linkedin"></i> </a></li>
              <li><a href=""><i class="bi bi-pinterest"></i></a></li>
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
            <li><button type="button" class="interest-btn" data-value="Logo Design">Logo Design</button></li>
            <li><button type="button" class="interest-btn" data-value="Website Design">Website Design</button></li>
            <li><button type="button" class="interest-btn" data-value="Content Creation">Content Creation</button></li>
            <li><button type="button" class="interest-btn" data-value="PPC">PPC</button></li>
            <li><button type="button" class="interest-btn" data-value="Mobile App">Mobile App</button></li>
            <li><button type="button" class="interest-btn" data-value="SEO">SEO</button></li>
            <li><button type="button" class="interest-btn" data-value="Social Media Marketing">Social M.M</button></li>
            <li><button type="button" class="interest-btn" data-value="Branding">Branding</button></li>
            <li><button type="button" class="interest-btn" data-value="Animation">Animation</button></li>
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script>
  $(function() {
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


<script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/66b3ecc0146b7af4a4374b0a/1i4nd9k8e';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>
<!--End of Tawk.to Script-->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.interest-btn');
    const selectedInterests = [];

    buttons.forEach(button => {
      button.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent form submission or page refresh

        const value = this.getAttribute('data-value');

        // Toggle selection
        if (selectedInterests.includes(value)) {
          selectedInterests.splice(selectedInterests.indexOf(value), 1);
          this.classList.remove('selected');
        } else {
          selectedInterests.push(value);
          this.classList.add('selected');
        }

        // Update the hidden input value
        document.getElementById('selected-interests').value = selectedInterests.join(', ');
      });
    });
  });
</script>

<script>
  function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
</script>



<script>
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>
<script>
  $('.center').slick({
    centerMode: false,
    slidesToShow: 3,
    arrows:true,
    autoplay:true,
    speed:1000,
    responsive: [{
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: false,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: true,
          centerMode: false,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
</script>
<script>
  $('.center2').slick({
    centerMode: false,
    slidesToShow: 4,
    arrows:true,
    responsive: [{
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: false,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: true,
          centerMode: false,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
</script>
<script>
  $('.center3').slick({
    centerMode: false,
    slidesToShow: 4,
    arrows:true,
    responsive: [{
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: false,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: true,
          centerMode: false,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
</script>
<script>
  $('.center-index').slick({
    centerMode: false,
    slidesToShow: 4,
    arrows:true,
    responsive: [{
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: false,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: true,
          centerMode: false,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
</script>
<script>
  // Function to animate counters
function animateCounters() {
  const counters = document.querySelectorAll('.counter');
  
  counters.forEach(counter => {
    const target = +counter.getAttribute('data-target');
    const speed = 200; // Adjust speed if necessary
    
    const updateCounter = () => {
      const current = +counter.innerText;
      const increment = target / speed;
      
      if (current < target) {
        counter.innerText = Math.ceil(current + increment);
        setTimeout(updateCounter, 10);
      } else {
        counter.innerText = target;
      }
    };
    
    updateCounter();
  });
}

// Run counter when it comes into view
function checkVisibility() {
  const countersSection = document.querySelector('.mile-function-code');
  const sectionPosition = countersSection.getBoundingClientRect().top;
  const screenPosition = window.innerHeight / 1.3;

  if (sectionPosition < screenPosition) {
    animateCounters();
    window.removeEventListener('scroll', checkVisibility);
  }
}

window.addEventListener('scroll', checkVisibility);

</script>
<script>
function animateNumber(finalNumber, duration = 4000, startNumber = 0, elementId) {
  const numberElement = document.getElementById(elementId);
  let currentNumber = startNumber;
  const incrementTime = Math.ceil(duration / finalNumber);
  
  const timer = setInterval(() => {
    currentNumber++;
    numberElement.textContent = currentNumber;
    if (currentNumber >= finalNumber) {
      clearInterval(timer);  // Stop the timer once the final number is reached
    }
  }, incrementTime);
}

// Use IntersectionObserver to trigger the animation on scroll
document.addEventListener('DOMContentLoaded', () => {
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Start the number animation when the element is in view
        animateNumber(80, 1500, 0, 'project-counter');  // 80 projects, 1.5 seconds duration
        observer.unobserve(entry.target);  // Stop observing after animation starts
      }
    });
  }, { threshold: 0.1 });  // Trigger when 10% of the element is visible
  
  // Observe the element with the ID 'project-counter'
  const numberElement = document.getElementById('project-counter');
  observer.observe(numberElement);
});

</script>
<script>
function animateMilestone(finalNumber, duration = 5000, startNumber = 0, elementId) {
  const counterElement = document.getElementById(elementId);

  // Check if the element exists
  if (!counterElement) {
    console.error(`Element with ID ${elementId} not found.`);
    return;
  }
  
  let currentNumber = startNumber;
  const incrementTime = Math.ceil(duration / finalNumber);

  const timer = setInterval(() => {
    currentNumber++;
    counterElement.textContent = currentNumber;
    if (currentNumber >= finalNumber) {
      clearInterval(timer);  // Stop the timer when final number is reached
    }
  }, incrementTime);
}

// Use IntersectionObserver to trigger the animation on scroll
document.addEventListener('DOMContentLoaded', () => {
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        console.log('Milestone counter in view, starting animation.');
        
        // Start the milestone animation when the element is in view
        animateMilestone(150, 2000, 0, 'milestone-counter');  // 150 milestones, 2 seconds duration, start from 0
        
        observer.unobserve(entry.target);  // Stop observing after animation starts
      }
    });
  }, { threshold: 0.1 });  // Trigger when 10% of the element is visible
  
  // Observe the element with the ID 'milestone-counter'
  const counterElement = document.getElementById('milestone-counter');
  
  if (counterElement) {
    observer.observe(counterElement);
    console.log('Observer set up on #milestone-counter.');
  } else {
    console.error('Milestone counter element not found.');
  }
});


</script>
<script>
 function animateMilestone(finalNumber, duration = 2000, elementId) {
  const counterElement = document.getElementById(elementId);
  let currentNumber = 0;
  const incrementTime = Math.ceil(duration / finalNumber);  // Calculate time per increment
  
  const timer = setInterval(() => {
    currentNumber++;
    counterElement.textContent = currentNumber;
    
    if (currentNumber >= finalNumber) {
      clearInterval(timer);  // Stop the timer once the final number is reached
    }
  }, incrementTime);
}

// Use IntersectionObserver to trigger the animation on scroll
document.addEventListener('DOMContentLoaded', () => {
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Start the milestone animation when the element is in view
        animateMilestone(90, 1500, 'milestone-timer');  // 90 projects, 1.5 seconds duration
        observer.unobserve(entry.target);  // Stop observing after animation starts
      }
    });
  }, { threshold: 0.1 });  // Trigger when 10% of the element is visible
  
  // Observe the element with the ID 'milestone-timer'
  const counterElement = document.getElementById('milestone-timer');
  observer.observe(counterElement);
});


</script>
<script>
 function animateMilestone(finalNumber, duration = 2000, elementId) {
  const counterElement = document.getElementById(elementId);
  let currentNumber = 0;
  const incrementTime = Math.ceil(duration / finalNumber);  // Time per increment
  
  const timer = setInterval(() => {
    currentNumber++;
    counterElement.textContent = currentNumber;
    
    if (currentNumber >= finalNumber) {
      clearInterval(timer);  // Stop the timer once the final number is reached
    }
  }, incrementTime);
}

// Use IntersectionObserver to trigger the animation on scroll
document.addEventListener('DOMContentLoaded', () => {
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Start the milestone animation when the element is in view
        animateMilestone(90, 2000, 'branding-counter');  // 90 for Branding Accomplished
        observer.unobserve(entry.target);  // Stop observing once animation starts
      }
    });
  }, { threshold: 0.1 });  // Trigger when 10% of the element is visible
  
  // Observe the element with the ID 'branding-counter'
  const counterElement = document.getElementById('branding-counter');
  observer.observe(counterElement);
});


</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const counters = document.querySelectorAll('.counter');
    
    // Function to update the counter
    const updateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const speed = target / 200; // Adjust speed here
        
        if (count < target) {
            counter.innerText = Math.ceil(count + speed);
            setTimeout(() => updateCounter(counter), 20); // Adjust delay here
        } else {
            counter.innerText = target; // Ensure it stops at the target number
        }
    };

    // Set up the IntersectionObserver to watch when the section comes into view
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                updateCounter(counter);
                observer.unobserve(counter); // Stop observing once the animation starts
            }
        });
    }, {
        threshold: 0.1 // Start animation when 10% of the element is visible
    });

    // Observe each counter
    counters.forEach(counter => {
        observer.observe(counter);
    });
});


</script>
<script>
  function animateNumberRolling(finalNumber, duration = 2000, elementId) {
  const numberElement = document.getElementById(elementId);
  let startNumber = 0;
  const incrementTime = Math.ceil(duration / finalNumber); // Calculate the time per increment

  const timer = setInterval(() => {
    startNumber++;
    numberElement.textContent = startNumber;
    
    if (startNumber >= finalNumber) {
      clearInterval(timer);  // Stop the animation when final number is reached
    }
  }, incrementTime);
}

// Use IntersectionObserver to trigger the animation when the section appears
document.addEventListener('DOMContentLoaded', () => {
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Trigger the animation when the section is in view
        animateNumberRolling(150, 2000, 'milestone-counter');  // 150 as final number, 2 seconds duration
        observer.unobserve(entry.target);  // Stop observing once the animation has started
      }
    });
  }, { threshold: 0.1 });  // Start when 10% of the element is visible
  
  // Observe the element with the ID 'milestone-counter'
  const counterElement = document.getElementById('milestone-counter');
  observer.observe(counterElement);
});

</script>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '540437431813350');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=540437431813350&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
