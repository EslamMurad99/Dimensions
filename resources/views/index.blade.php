<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dimensions Company for Operation and Maintenance </title>
  <meta name="description" content="Dimensions Company is a leading provider of comprehensive manpower solutions and event 
              planning services for the hospitality industry in Saudi Arabia since 2003.">
  <meta name="keywords" content="Dimensions">

  <link href="{{ asset('images/LogoDimention.png') }}" rel="icon"> 
  <!-- <link href="images/LogoDimention.png" rel="icon"> -->
   
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/aos/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}"> 
  <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
  
  <!-- MAin CSS -->
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('css/mobile-nav.css') }}">

  <!-- Countup Section Styles -->
  <style>
    /* Countup Section Styles */
    #project-stats .countup-item {
      position: relative;
      transition: all 0.3s ease;
      opacity: 0;
      transform: translateY(30px);
      padding: 1rem 0;
    }

    #project-stats .countup-item.visible {
      opacity: 1;
      transform: translateY(0);
    }

    #project-stats .countup-item:hover {
      transform: translateY(-3px);
    }

    .countup-item {
      position: relative;
      transition: all 0.3s ease;
      opacity: 0;
      transform: translateY(30px);
      padding: 1rem 0;
    }

    .countup-item.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .countup-item:hover {
      transform: translateY(-3px);
    }

    .countup-icon {
      margin-bottom: 1.5rem;
      display: block;
    }

    .countup-icon i {
      font-size: 3rem;
      color: var(--accent-color);
      transition: all 0.3s ease;
    }

    .countup-item:hover .countup-icon i {
      transform: scale(1.1);
      color: var(--heading-color);
    }

    .countup-value {
      font-family: 'Fontalicious', sans-serif;
      font-size: 3.5rem;
      font-weight: 300;
      color: var(--heading-color);
      margin-bottom: 0.5rem;
      display: flex;
      align-items: baseline;
      justify-content: center;
      line-height: 1;
    }

    .countup-suffix {
      font-size: 1.8rem;
      margin-left: 5px;
      opacity: 0.8;
      color: var(--accent-color);
      font-weight: 300;
    }

    .countup-title {
      font-family: 'Fontalicious', sans-serif;
      font-size: 1.1rem;
      font-weight: 300;
      color: var(--heading-color);
      margin-bottom: 0.5rem;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .countup-desc {
      font-size: 0.9rem;
      opacity: 0.8;
      line-height: 1.5;
      color: var(--default-color);
      font-weight: 300;
      max-width: 200px;
      margin: 0 auto;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .countup-item {
        display: flex;
        align-items: center;
        text-align: left;
        padding: 1.5rem 0;
      }
      
      .countup-icon {
        margin-bottom: 0;
        margin-right: 1.5rem;
        flex-shrink: 0;
      }
      
      .countup-icon i {
        font-size: 2.5rem;
      }
      
      .countup-content {
        flex: 1;
      }
      
      .countup-value {
        font-size: 2.2rem;
        justify-content: flex-start;
        margin-bottom: 0.3rem;
      }
      
      .countup-title {
        font-size: 0.9rem;
        margin-bottom: 0.3rem;
      }
      
      .countup-desc {
        font-size: 0.8rem;
        max-width: none;
        margin: 0;
      }
    }

    /* Animation for counter */
    @keyframes countupPulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }

    .countup-value.animating {
      animation: countupPulse 0.5s ease-in-out;
    }

    /* Slogan Animation Styles */
    .slogan-container {
      padding: 4rem 0;
      position: relative;
    }

    .slogan-text {
      font-family: 'Fontalicious', serif;
      font-style: italic;
      font-weight: 300;
      font-size: 3.5rem;
      line-height: 1.2;
      color: var(--heading-color);
      margin: 0;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 0.5rem;
    }

    .slogan-word {
      opacity: 0;
      transform: translateY(30px);
      animation: sloganFadeIn 0.8s ease-out forwards;
      display: inline-block;
    }

    .slogan-quote {
      opacity: 0;
      transform: translateY(30px);
      animation: sloganFadeIn 0.8s ease-out forwards;
      display: inline-block;
      font-size: 4rem;
      color: var(--accent-color);
      font-weight: 400;
      margin: 0 0.3rem;
    }

    .slogan-quote:nth-child(1) { animation-delay: 0.1s; }
    .slogan-word:nth-child(2) { animation-delay: 0.3s; }
    .slogan-word:nth-child(3) { animation-delay: 0.5s; }
    .slogan-word:nth-child(4) { animation-delay: 0.7s; }
    .slogan-word:nth-child(5) { animation-delay: 0.9s; }
    .slogan-quote:nth-child(6) { animation-delay: 1.1s; }

    @keyframes sloganFadeIn {
      0% {
        opacity: 0;
        transform: translateY(30px) scale(0.9);
      }
      100% {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }

    .slogan-word:hover {
      color: var(--accent-color);
      transform: scale(1.05);
      transition: all 0.3s ease;
    }

    /* Responsive adjustments for slogan */
    @media (max-width: 768px) {
      .slogan-text {
        font-size: 2.5rem;
        flex-direction: column;
        gap: 0.3rem;
      }
      
      .slogan-container {
        padding: 3rem 0;
      }
    }

    @media (max-width: 480px) {
      .slogan-text {
        font-size: 2rem;
      }
    }
  </style>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body class="index-page">
  <!-- Splash screen should be here, before header -->
  <div class="intro">
    <h1 class="logo-header">
      <img src="{{ asset('images/DimensionsLogo.png') }}" alt="Dimensions Logo" class="logo">
    </h1>
  </div>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="{{ asset('images/DimensionsLogo.png') }}" alt="Dimensions Logo" class="logo">
      </a>
       <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}" class="active">Home</a></li>
          <li><a href="{{ route('about') }}">About Us</a></li>
          <li><a href="{{ route('services') }}">Our Services</a></li>
          <li><a href="{{ route('projects') }}">Our Projects</a></li>
          <li><a href="{{ route('contacts') }}">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="main">
      
   <section id="hero" class="hero section">
      <div class="hero-bg-image"> 
        <img src="{{ asset(path: 'images/WhatsApp Image 2024-12-26 at 15.35.42_e96285a6.jpg') }}" alt="Hero Background" class="bg-image">
        <div class="bg-overlay"></div>
      </div>
      <div class="container position-relative z-2">
        <div class="row gy-4 align-items-center">
          <!-- النص على اليسار -->
          <div class="col-lg-6 hero-text-content" data-aos="fade-right">
            <h1 class="hero-title">Dimensions Company for Operation and Maintenance</h1>
            <p class="hero-description">
              Dimensions Company is a leading provider of comprehensive manpower solutions and event
              planning services for the hospitality industry in Saudi Arabia since 2003.
            </p>
          </div>
          
          <!-- الصورة على اليمين -->
          <div class="col-lg-6" data-aos="fade-left">
            <div class="hero-image-container">
              <img src="{{ asset(path: 'images/DimensionsLogo.png') }}" alt="Dimensions Company" class="hero-image">
              <div class="image-overlay"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="about section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <div class="slogan-container" data-aos="fade-up">
              <h2 class="slogan-text">
                <span class="slogan-quote">"</span>
                <span class="slogan-word">Where</span>
                <span class="slogan-word">Hospitality</span>
                <span class="slogan-word">Meets</span>
                <span class="slogan-word">Expertise</span>
                <span class="slogan-quote">"</span>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /About Us Section -->

    <!-- Our Services Section -->
    <section id="services" class="services section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Services</h2>
        <p>
          Elevate your business to new heights with our hospitality-focused consultancy services.
          With over 20 years of experience and a vast network, we offer unparalleled solutions and guidance.
          Discover customized recruitment and outsourcing plans designed to streamline your operations and propel your success.
        </p>
      </div>

      <div class="container">
        <div class="row gy-4 gx-4 justify-content-center">
          <!-- Event Management -->
          <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative text-center">
              <div class="icon mb-3"><i class="bi bi-calendar-check"></i></div>
              <h4><a href="{{ route('services') }}" class="stretched-link">Event Management</a></h4>
              <p>
                "Effortless elegance. Unforgettable events." From pre-event planning to on-site management and budgeting, we handle every aspect of your event to ensure flawless execution.
              </p>
            </div>
          </div>

          <!-- Manpower Services -->
          <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative text-center">
              <div class="icon mb-3"><i class="bi bi-people-fill"></i></div>
              <h4><a href="{{ route('services') }}" class="stretched-link">Manpower Services</a></h4>
              <p>
                "Where Hospitality Meets Expertise." Comprehensive outsourcing, recruitment, and consultancy services to build your world-class workforce and optimize your operations.
              </p>
            </div>
          </div>

          <!-- Consultancy Service -->
          <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative text-center">
              <div class="icon mb-3"><i class="bi bi-lightbulb"></i></div>
              <h4><a href="{{ route('services') }}" class="stretched-link">Consultancy Service</a></h4>
              <p>
                With over 20 years of experience, we provide strategic guidance and customized solutions to elevate your hospitality business to new heights.
              </p>
            </div>
          </div>
        </div>
        
        <div class="row mt-5">
          <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="400">
            <a href="{{ route('services') }}" class="btn btn-services btn-lg">
              <span class="btn-text">View All Services</span>
              <span class="btn-icon">
                <i class="bi bi-arrow-right"></i>
              </span>
              <span class="btn-shine"></span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- / Our Services Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Clients</h2>
      </div>
      <div class="container" data-aos="zoom-in">
        <!-- Side positioned navigation buttons -->
        <button class="clients-prev" type="button">‹</button>
        <button class="clients-next" type="button">›</button>

        <div class="swiper init-swiper">
          <!-- Remove the JSON config script -->
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('images/clients/c1.png') }}" class="img-fluid" alt="client 1" loading="lazy"></div>
            <div class="swiper-slide"><img src="{{ asset('images/clients/c2.png') }}" class="img-fluid" alt="client 2" loading="lazy"></div>
            <div class="swiper-slide"><img src="{{ asset('images/clients/c3.png') }}" class="img-fluid" alt="client 3" loading="lazy"></div>
            <div class="swiper-slide"><img src="{{ asset('images/clients/c4.png') }}" class="img-fluid" alt="client 4" loading="lazy"></div>
            <div class="swiper-slide"><img src="{{ asset('images/clients/c5.png') }}" class="img-fluid" alt="client 5" loading="lazy"></div>
            <div class="swiper-slide"><img src="{{ asset('images/clients/c6.png') }}" class="img-fluid" alt="client 6" loading="lazy"></div>
            <div class="swiper-slide"><img src="{{ asset('images/clients/c7.png') }}" class="img-fluid" alt="client 7" loading="lazy"></div>
            <div class="swiper-slide"><img src="{{ asset('images/clients/c8.png') }}" class="img-fluid" alt="client 8" loading="lazy"></div>
            <div class="swiper-slide"><img src="{{ asset('images/clients/clients-1.webp') }}" class="img-fluid" alt="client 1" loading="lazy"></div>
            <div class="swiper-slide"><img src="{{ asset('images/clients/clients-2.webp') }}" class="img-fluid" alt="client 2" loading="lazy"></div>
            <div class="swiper-slide"><img src="{{ asset('images/clients/clients-3.webp') }}" class="img-fluid" alt="client 3" loading="lazy"></div>
            <div class="swiper-slide"><img src="{{ asset('images/clients/clients-4.webp') }}" class="img-fluid" alt="client 4" loading="lazy"></div>
            <div class="swiper-slide"><img src="{{ asset('images/clients/clients-5.webp') }}" class="img-fluid" alt="client 5" loading="lazy"></div>
            <div class="swiper-slide"><img src="{{ asset('images/clients/clients-6.webp') }}" class="img-fluid" alt="client 6" loading="lazy"></div>
            <div class="swiper-slide"><img src="{{ asset('images/clients/clients-7.webp') }}" class="img-fluid" alt="client 7" loading="lazy"></div>
            <div class="swiper-slide"><img src="{{ asset('images/clients/clients-8.webp') }}" class="img-fluid" alt="client 8" loading="lazy"></div>
          </div>
        </div>
      </div>
    </section><!-- /Clients Section -->

       <!-- Our Projects -->
    <section id="portfolio" class="portfolio section light-background">
      <div class="container section-title text-center" data-aos="fade-up">
        <h2>Our Projects</h2>
        <p>Not just participants, we're pioneers: Proud to be part of this project</p>
      </div>

      <div class="container">
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
          <!-- Project 1 -->
          <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-flip-card">
              <div class="portfolio-flip-card-inner">
                <div class="portfolio-flip-card-front"> 
                  <img src="{{ asset('images/projects/IMG-20250717-WA0053_image_repair_1752928851354.jpg') }}" class="img-fluid" alt="Formula 1 Project" loading="lazy">
                </div> 
                <div class="portfolio-flip-card-back">
                  <div class="portfolio-back-content">
                    <h4>GOLF SAUDI JEDDAH</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Project 2 -->
          <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-flip-card">
              <div class="portfolio-flip-card-inner">
                <div class="portfolio-flip-card-front">
                  <img src="{{ asset('images/projects/IMG-20250717-WA0054_image_repair_1752928741684.jpg') }}" class="img-fluid" alt="Al Mirkaz Project" loading="lazy">
                </div>
                <div class="portfolio-flip-card-back">
                  <div class="portfolio-back-content">
                    <h4>SWAROVSKI EVENTS RIYADH</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Project 3 -->
          <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-flip-card">
              <div class="portfolio-flip-card-inner">
                <div class="portfolio-flip-card-front">
                  <img src="{{ asset('images/projects/IMG-20250717-WA0055_image_repair_1752928896029.jpg') }}" class="img-fluid" alt="Fira Villas Project" loading="lazy">
                </div>
                <div class="portfolio-flip-card-back">
                  <div class="portfolio-back-content">
                    <h4>CITY WALK JEDDAH</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Project 4 -->
          <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-flip-card">
              <div class="portfolio-flip-card-inner">
                <div class="portfolio-flip-card-front">
                  <img src="{{ asset('images/projects/IMG-20250717-WA0056_image_repair_1752928931064.jpg') }}" class="img-fluid" alt="Banyan Tree Project" loading="lazy">
                </div>
                <div class="portfolio-flip-card-back">
                  <div class="portfolio-back-content">
                    <h4>AL BALAD-RAMADAN JEDDAH</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Project 5 -->
          <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-flip-card">
              <div class="portfolio-flip-card-inner">
                <div class="portfolio-flip-card-front">
                  <img src="{{ asset('images/projects/IMG-20250717-WA0057_image_repair_1752928966241.jpg') }}" class="img-fluid" alt="Jeddah Season Project" loading="lazy">
                </div>
                <div class="portfolio-flip-card-back">
                  <div class="portfolio-back-content">
                    <h4>FORMULA 1 JEDDAH</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Project 6 -->
          <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-flip-card">
              <div class="portfolio-flip-card-inner">
                <div class="portfolio-flip-card-front">
                  <img src="{{ asset('images/projects/IMG-20250717-WA0058_image_repair_1752928998433.jpg') }}" class="img-fluid" alt="FIFA Club World Cup Project" loading="lazy">
                </div>
                <div class="portfolio-flip-card-back">
                  <div class="portfolio-back-content">
                    <h4>FIFA Club World Cup</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Project 7 -->
          <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-flip-card">
              <div class="portfolio-flip-card-inner">
                <div class="portfolio-flip-card-front">
                  <img src="{{ asset('images/projects/snapedit_1752931408497.jpeg') }}" class="img-fluid" alt="Riyadh Season Project" loading="lazy">
                </div>
                <div class="portfolio-flip-card-back">
                  <div class="portfolio-back-content">
                    <h4>MDL BEAST RIYADH</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Project 8 -->
          <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-flip-card">
              <div class="portfolio-flip-card-inner">
                <div class="portfolio-flip-card-front">
                  <img src="{{ asset('images/projects/WhatsApp Image 2025-07-19 at 3.24.19 PM.png') }}" class="img-fluid" alt="Al Balad Project" loading="lazy">
                </div>
                <div class="portfolio-flip-card-back">
                  <div class="portfolio-back-content">
                    <h4>PLAY LAND RIYADH</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Numbers and Experience-->
    <section id="project-stats" class="section bg-white text-dark">
      <div class="container" data-aos="fade-up">
        <div class="section-title text-center mb-5">
          <h2 style="color: rgb(55, 81, 126);">Our Numbers and Experiences</h2>
          <p style="color: rgb(46, 44, 44);">Discover the progress and milestones of our major projects through the years</p>
        </div>
        
        <!-- Countup Numbers Section -->
        <div class="row gy-5 justify-content-center mb-5">
          <!-- Years of Experience -->
          <div class="col-lg-3 col-md-6 text-center">
            <div class="countup-item">
              <div class="countup-icon">
                <i class="bi bi-lightning-charge"></i>
              </div>
              <div class="countup-content">
                <div class="countup-value">
                  <span class="counter" data-target="22">0</span>
                  <span class="countup-suffix">+</span>
                </div>
                <div class="countup-title">Years Experience</div>
                <div class="countup-desc">Serving since 2003 with excellence</div>
              </div>
            </div>
          </div>
          
          <!-- Projects Completed -->
          <div class="col-lg-3 col-md-6 text-center">
            <div class="countup-item">
              <div class="countup-icon">
                <i class="bi bi-briefcase"></i>
              </div>
              <div class="countup-content">
                <div class="countup-value">
                  <span class="counter" data-target="500">0</span>
                  <span class="countup-suffix">+</span>
                </div>
                <div class="countup-title">Projects Completed</div>
                <div class="countup-desc">Successfully delivered across Saudi Arabia</div>
              </div>
            </div>
          </div>
          
          <!-- Events Managed -->
          <div class="col-lg-3 col-md-6 text-center">
            <div class="countup-item">
              <div class="countup-icon">
                <i class="bi bi-calendar-event"></i>
              </div>
              <div class="countup-content">
                <div class="countup-value">
                  <span class="counter" data-target="1000">0</span>
                  <span class="countup-suffix">+</span>
                </div>
                <div class="countup-title">Events Managed</div>
                <div class="countup-desc">From Formula 1 to major festivals</div>
              </div>
            </div>
          </div>
          
          <!-- Team Members -->
          <div class="col-lg-3 col-md-6 text-center">
            <div class="countup-item">
              <div class="countup-icon">
                <i class="bi bi-people"></i>
              </div>
              <div class="countup-content">
                <div class="countup-value">
                  <span class="counter" data-target="5000">0</span>
                  <span class="countup-suffix">+</span>
                </div>
                <div class="countup-title">Team Members</div>
                <div class="countup-desc">Skilled professionals deployed</div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Projects Timeline Swiper -->
        <div class="swiper projectStatsSwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="stat-card p-4 rounded shadow bg-light text-center">
                <h4 class="fw-bold">Formula 1</h4>
                <p>Dec 2021 - Mar 2022 - Mar 2023 - Mar 2024 - April 2025</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="stat-card p-4 rounded shadow bg-light text-center">
                <h4 class="fw-bold">Al Mirkaz</h4>
                <p>Ramadan 2022 - 2023 - 2024 - 2025</p>
              </div>
            </div>    
            <div class="swiper-slide">
              <div class="stat-card p-4 rounded shadow bg-light text-center">
                <h4 class="fw-bold">Fira Villas</h4>
                <p>Blvd 2024 - 2025</p>
              </div>
            </div>    
            <div class="swiper-slide">
              <div class="stat-card p-4 rounded shadow bg-light text-center">
                <h4 class="fw-bold">Banyan Tree</h4>
                <p>2023 - 2024 - 2025</p>
              </div>
            </div>            
            <div class="swiper-slide">
              <div class="stat-card p-4 rounded shadow bg-light text-center">
                <h4 class="fw-bold">Jeddah Season</h4>
                <p>June 2022 - June 2023</p>
              </div>
            </div>           
            <div class="swiper-slide">
              <div class="stat-card p-4 rounded shadow bg-light text-center">
                <h4 class="fw-bold">FIFA Club World Cup</h4>
                <p>2023</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="stat-card p-4 rounded shadow bg-light text-center">
                <h4 class="fw-bold">Riyadh Season</h4>
                <p>2021 - 2022 - 2023</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="stat-card p-4 rounded shadow bg-light text-center">
                <h4 class="fw-bold">Al Balad</h4>
                <p>Ramadan 2023</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Numbers and Experience-->





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
            <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Our Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="projects.html">Our Projects</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="services.blade.php">Event Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="services.blade.php">Manpower Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="services.blade.php">Consultancy Service</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Connect with us on social media for updates, insights, and more.</p>
          <div class="social-links d-flex">
            <a href="https://maps.app.goo.gl/LK2V14DhNsyyuKD77" target="_blank">
              <i class="bi bi-geo-alt-fill"></i>
            </a>
            <!-- <a href=""><i class="bi bi-facebook"></i></a> -->
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
  
  <!-- Main JS -->
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/mobile-nav.js') }}"></script>

  <script>
    var swiper = new Swiper(".projectStatsSwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      navigation: {
        nextEl: ".custom-next",
        prevEl: ".custom-prev",
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      breakpoints: {
        0: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        992: { slidesPerView: 3 }
      }
    });
  </script>

  <!-- Countup Animation Script -->
  <script>
    // Intersection Observer for countup cards
    const countupObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          
          // Start counter animation only when card is visible
          const counter = entry.target.querySelector('.counter');
          if (counter && !counter.classList.contains('animated')) {
            counter.classList.add('animated');
            const target = parseInt(counter.getAttribute('data-target'));
            animateCounter(counter, target);
          }
        }
      });
    }, {
      root: null,
      threshold: 0.3,
      rootMargin: '0px'
    });

    // Observe all countup items
    document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll('#project-stats .countup-item').forEach(item => {
        countupObserver.observe(item);
      });
    });

    // Counter animation function
    function animateCounter(counterElement, target) {
      const duration = 2000; // 2 seconds
      const startTime = performance.now();
      const formatNumber = num => {
        return new Intl.NumberFormat().format(Math.floor(num));
      };

      // Add animation class
      const valueElement = counterElement.closest('.countup-value');
      if (valueElement) {
        valueElement.classList.add('animating');
      }

      // Special handling for smaller numbers (less than 100)
      const increment = target <= 100 ? 1 : Math.ceil(target / 100);
      let current = 0;

      function updateCounter(currentTime) {
        const elapsedTime = currentTime - startTime;
        const progress = Math.min(elapsedTime / duration, 1);
        
        // Use easeOutExpo for smoother ending
        const easeOutExpo = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
        current = Math.floor(easeOutExpo * target);
        
        counterElement.textContent = formatNumber(current);
        
        if (progress < 1) {
          requestAnimationFrame(updateCounter);
        } else {
          counterElement.textContent = formatNumber(target);
          // Remove animation class after completion
          if (valueElement) {
            setTimeout(() => {
              valueElement.classList.remove('animating');
            }, 500);
          }
        }
      }
      
      requestAnimationFrame(updateCounter);
    }
  </script>


</body>

</html>
