<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Nexus</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


 <!-- Vendor CSS Files -->
 <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

 <!-- Main CSS File -->
 <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">
    <!-- Preloader -->
<div id="preloader">
    <div class="spinner">
      <div class="spinner1"></div>
    </div>
  </div>

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:nexusagency00@gmail.com">nexusagency00@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+20 104 067 7295</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.facebook.com/profile.php?id=61563763409781&mibextid=ZbWKwL" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/nexus-agency-694211321/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            <a href="" class="behance"><i class="fab fa-behance"></i></a>
          </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <img src="assets/img/logo.png" alt="">
          <h1 class="sitename">Nexus</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="assets/img/space4.jpg" alt="" data-aos="fade-in">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row justify-content-start">
            <div class="col-lg-8">
              <h2>Welcome to Nexus</h2>
              <p>We are a team of talented developers and designers for making mobile applications, websites and designs</p>
              <button onclick="window.location.href='#about'" style="margin-top: 30px;">Get Started</button>
<style>
  button {
    --glow-color: rgb(217, 176, 255);
    --glow-color: rgb(255, 99, 71); /* Tomato Red */
    --glow-spread-color: rgba(255, 99, 71, 0.781); /* Lighter Tomato Red */
    --enhanced-glow-color: rgb(255, 182, 193); /* Light Pink */
    --btn-color: rgb(139, 0, 0); /* Dark Red */
    border: .25em solid var(--glow-color);
    padding: 1em 3em;
    color: #FFFFFF; /* White text color */
    font-size: 15px;
    font-weight: bold;
    background-color: var(--btn-color);
    border-radius: 1em;
    outline: none;
    box-shadow: 0 0 1em .25em var(--glow-color),
                0 0 4em 1em var(--glow-spread-color),
                inset 0 0 .75em .25em var(--glow-color);
    text-shadow: 0 0 .5em var(--glow-color);
    position: relative;
    transition: all 0.3s;
  }

  button::after {
    pointer-events: none;
    content: "";
    position: absolute;
    top: 120%;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: var(--glow-spread-color);
    filter: blur(2em);
    opacity: .7;
    transform: perspective(1.5em) rotateX(35deg) scale(1, .6);
  }

  button:hover {
    color: var(--btn-color);
    background-color: var(--glow-color);
    box-shadow: 0 0 1em .25em var(--glow-color),
                0 0 4em 2em var(--glow-spread-color),
                inset 0 0 .75em .25em var(--glow-color);
  }

  button:active {
    box-shadow: 0 0 0.6em .25em var(--glow-color),
                0 0 2.5em 2em var(--glow-spread-color),
                inset 0 0 .5em .25em var(--glow-color);
  }
</style>

            </div>
          </div>
        </div>
      </section><!-- /Hero Section -->
      

   <!-- About Section -->
<section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>About Us<br></span>
      <h2>About Us<br></h2>
      <p>Welcome to Nexus, where technology meets innovation!</p>
    </div><!-- End Section Title -->
  
    <div class="container">
  
      <div class="row gy-4">
  
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/prog.webp" class="img-fluid" alt="">
        </div>
  
        <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
          <h3>Our Commitment to Excellence</h3>
          <p class="fst-italic">
            At Nexus, we pride ourselves on transforming ideas into reality with our innovative tech solutions and exceptional services.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> <span>Expertise in Mobile App Development, Website Design and Development, Advanced Tech Consulting, and Data Analysis.</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Dedicated to delivering innovative technology solutions that empower our clients to achieve their goals.</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Collaborative approach to ensure we understand your vision and bring it to life.</span></li>
          </ul>
          <a href="#services" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>
  
      </div>
  
    </div>
  
  </section><!-- /About Section -->
  
   <!-- Services Section -->
<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>Services</span>
      <h2>Our Services</h2>
      <p>Discover our range of innovative tech solutions designed to help you achieve your goals.</p>
    </div><!-- End Section Title -->
  
    <div class="container">
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-phone"></i>
                    </div>
                    <h3>Mobile App Development</h3>
                    <p>Create user-friendly and feature-rich mobile applications for both iOS and Android platforms.</p>
                </div>
            </div><!-- End Service Item -->
        
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-globe"></i>
                    </div>
                    <h3>Website Design and Development</h3>
                    <p>Design and develop aesthetically pleasing, responsive, and functional websites.</p>
                </div>
            </div><!-- End Service Item -->
        
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-bar-chart"></i>
                    </div>
                    <h3>Advanced Tech Consulting</h3>
                    <p>Provide expert advice and strategies to leverage the latest technologies for your business.</p>
                </div>
            </div><!-- End Service Item -->
        
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-pie-chart"></i>
                    </div>
                    <h3>Data Analysis and Insights</h3>
                    <p>Analyze your data to provide actionable insights and help you make informed decisions.</p>
                </div>
            </div><!-- End Service Item -->
        </div>
        
    </div>
  
  </section><!-- /Services Section -->
  
  
  
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Contact</span>
        <h2>Contact</h2>
        <p>We'd love to hear from you! Reach out to us with any inquiries or feedback.</p>
    </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>Egypt, Dakahlia, Mansoura City</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+20 104 067 7295</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>nexusagency00@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54695.309313162674!2d31.424039360839576!3d31.04137960554228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79db7a9053547%3A0xf8dab3bbed766c97!2z2KfZhNmF2YbYtdmI2LHYqdiMINin2YTZhdmG2LXZiNix2KkgKNmC2LPZhSAyKdiMINin2YTZhdmG2LXZiNix2KnYjCDZhdit2KfZgdi42Kkg2KfZhNiv2YLZh9mE2YrYqQ!5e0!3m2!1sar!2seg!4v1722869645717!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>          </div><!-- End Google Maps -->

            <div class="col-lg-6">
                <form action="{{ route('contact.send') }}" method="post" class="" data-aos="fade-up" data-aos-delay="400">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            @if (session('success'))
                                <div class="sent-message" style="color: green;">{{ session('success') }}</div>
                                <br>
                            @endif
                            <div class="error-message"></div>
                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            
        

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6">
          <div class="footer-about">
            <a href="index.html" class="logo sitename">Nexus</a>
            <div class="footer-contact pt-3">
              <p>Dakahlia, Mansoura City</p>
              <p class="mt-3"><strong>Phone:</strong> <span>+20 104 067 7295</span></p>
              <p><strong>Email:</strong> <span>nexusagency00@gmail.com</span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href="https://www.facebook.com/profile.php?id=61563763409781&mibextid=ZbWKwL"><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/in/nexus-agency-694211321/"><i class="bi bi-linkedin"></i></a>
              <a href="" class="behance"><i class="fab fa-behance"></i></a>

            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="/privacy">Privacy policy</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li>Web Design</li>
              <li>Web Development</li>
              <li>Product Management</li>
              <li>Marketing</li>
              <li>Graphic Design</li>
            </ul>
          </div>
          <style>
            .footer-links ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }
    
            .footer-links li {
                padding: 5px 0;
                cursor: default; /* Prevents pointer cursor */
                transition: color 0.3s ease;
            }
    
            .footer-links li:hover {
                color: #007bff; /* Change to desired hover color */
            }
        </style>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Nexus</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="/">Nexus</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="{{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/php-email-form/validate.js") }}"></script>
  <script src="{{ asset("assets/vendor/aos/aos.js") }}"></script>
  <script src="{{ asset("assets/vendor/swiper/swiper-bundle.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/glightbox/js/glightbox.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/imagesloaded/imagesloaded.pkgd.min.js") }}"></script>
  <script src="{{ asset("assets/vendor/isotope-layout/isotope.pkgd.min.js") }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset("assets/js/main.js") }}"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const sentMessage = document.querySelector('.sent-message');
        if (sentMessage) {
            setTimeout(() => {
                sentMessage.style.display = 'none';
            }, 10000);
        }
    });
</script>
</body>
</html>
