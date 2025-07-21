<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact Us - Dimensions Company for Operation and Maintenance</title>
  <meta name="description" content="Contact Dimensions Company for event management and manpower services in Saudi Arabia. Get in touch with our expert team.">
  <meta name="keywords" content="Dimensions, Contact, Event Management, Manpower Services, Saudi Arabia">

  <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->

  <link href="{{ asset('images/LogoDimention.png') }}" rel="icon">

  <!-- Vendor CSS Files -->
   <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/aos/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}"> 
  <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('css/mobile-nav.css') }}">

</head>

<body>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="{{ asset('images/DimensionsLogo.png') }}" alt="Dimensions Logo" class="logo">
      </a>
       <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About Us</a></li>
          <li><a href="{{ route('services') }}">Our Services</a></li>
          <li><a href="{{ route('projects') }}">Our Projects</a></li>
          <li><a href="{{ route('contact') }}" class="active">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Page Title Section with Parallax -->
    <section class="page-title parallax-section">
      <div class="parallax-bg"></div>
      <div class="floating-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
      </div>
      <div class="container position-relative z-2">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1 data-aos="fade-up">Contact Us</h1>
            <div class="breadcrumbs" data-aos="fade-up" data-aos-delay="200">
              <ol>
                <li><a href="index.html">Home</a></li>
                <li>Contact Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Information Section -->
    <section class="section light-background parallax-section">
      <div class="parallax-bg-light"></div>
      <div class="container position-relative z-2">
        <div class="row gy-5">
          <div class="col-lg-6 col-md-12" data-aos="fade-right">
            <div class="section-title text-start">
              <h2>Get In Touch</h2>
              <p class="lead mb-4">Ready to discuss your event management and manpower needs?</p>
            </div>
            <div class="contact-info">
              <div class="contact-item mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="d-flex align-items-center">
                  <div class="contact-icon me-3">
                    <i class="bi bi-telephone-fill text-primary"></i>
                  </div>
                  <div>
                    <h5 class="mb-1">Phone</h5>
                    <p class="mb-0">+966 560 890 016</p>
                  </div>
                </div>
              </div>

              <div class="contact-item mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="d-flex align-items-center">
                  <div class="contact-icon me-3">
                    <i class="bi bi-whatsapp text-primary"></i>
                  </div>
                  <div>
                    <h5 class="mb-1">WhatsApp</h5>
                    <p class="mb-0">+966 594 815 110</p>
                  </div>
                </div>
              </div>

              <div class="contact-item mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="d-flex align-items-center">
                  <div class="contact-icon me-3">
                    <i class="bi bi-envelope-fill text-primary"></i>
                  </div>
                  <div>
                    <h5 class="mb-1">Email</h5>
                    <p class="mb-0">info@dimen.jobs</p>
                  </div>
                </div>
              </div>

              <div class="contact-item mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="d-flex align-items-center">
                  <div class="contact-icon me-3">
                    <i class="bi bi-geo-alt-fill text-primary"></i>
                  </div>
                  <div>
                    <h5 class="mb-1">Location</h5>
                    <p class="mb-0">Saudi Arabia</p>
                    <a href="https://maps.app.goo.gl/LK2V14DhNsyyuKD77" target="_blank" class="btn btn-outline-primary btn-sm mt-2">
                      <i class="bi bi-map me-1"></i>View on Map
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-12" data-aos="fade-left">
            <div class="contact-form-container">
              <div class="section-title text-start">
                <h3>Send Us a Message</h3>
                <p class="mb-4">Fill out the form below and we'll get back to you as soon as possible.</p>
              </div>
              
              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row gy-4">
                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="phone" placeholder="Your Phone">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                  </div>
                  <div class="col-12">
                    <select class="form-select" name="service" required>
                      <option value="">Select Service</option>
                      <option value="Event Management">Event Management</option>
                      <option value="Manpower Services">Manpower Services</option>
                      <option value="Consultancy">Consultancy</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                  </div>
                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Social Media Section -->
    <section class="section parallax-section dark-background">
      <div class="parallax-bg-dark"></div>
      <div class="container position-relative z-2">
        <div class="row justify-content-center text-center">
          <div class="col-lg-8 col-md-12" data-aos="fade-up">
            <div class="section-title">
              <h2>Follow Us</h2>
              <p class="lead mb-4">Connect with us on social media for updates, insights, and more.</p>
            </div>
            <div class="social-links d-flex justify-content-center gap-4">
              <a href="https://maps.app.goo.gl/LK2V14DhNsyyuKD77" target="_blank" class="social-link">
                <i class="bi bi-geo-alt-fill"></i>
                <span>Location</span>
              </a>
              <a href="https://www.instagram.com/dimen.hospitality?igsh=MXFycGY5bGEycndoaQ==" target="_blank" class="social-link">
                <i class="bi bi-instagram"></i>
                <span>Instagram</span>
              </a>
              <a href="https://www.linkedin.com/company/dimensions_2/" target="_blank" class="social-link">
                <i class="bi bi-linkedin"></i>
                <span>LinkedIn</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
 
  <footer id="footer" class="footer">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.blade.php" class="d-flex align-items-center">
            <span class="sitename">Dimensions</span>
          </a>
          <div class="footer-contact pt-3">
            <p class="mt-3 d-flex align-items-center">
              <i class="bi bi-telephone-fill me-2"></i>
              <strong>Phone:</strong> <span class="ms-1">+966560890016</span>
            </p>
            <p class="mt-3 d-flex align-items-center">
              <i class="bi bi-whatsapp me-2"></i>
              <strong>WhatsApp:</strong> <span class="ms-1">+966594815110</span>
            </p>
            <p class="d-flex align-items-center">
              <i class="bi bi-envelope-fill me-2"></i>
              <strong>Email:</strong> <span class="ms-1">info@dimen.jobs</span>
            </p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="index.html">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="index.html#about">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="services.html">Our Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="projects.html">Our Projects</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="services.html">Event Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="services.html">Manpower Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="services.html">Consultancy Service</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Connect with us on social media for updates, insights, and more.</p>
          <div class="social-links d-flex">
            <a href="https://maps.app.goo.gl/LK2V14DhNsyyuKD77" target="_blank">
              <i class="bi bi-geo-alt-fill"></i>
            </a>
            <a href="https://www.instagram.com/dimen.hospitality?igsh=MXFycGY5bGEycndoaQ=="><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/company/dimensions_2/"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Dimensions</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://www.facebook.com/share/16vthP4Fac/">Alt Mate</a>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a> 

  <!-- Preloader -->
  <div id="preloader"></div> 

   <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/mobile-nav.js') }}"></script>

  <!-- Parallax Effect Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize AOS
      AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
      }); 
    });
  </script>

</body>
</html> 