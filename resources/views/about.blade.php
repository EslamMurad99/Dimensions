<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>About Us - Dimensions Company for Operation and Maintenance</title>
  <meta name="description"
    content="Learn about Dimensions Company, a leading provider of comprehensive manpower solutions and event planning services for the hospitality industry in Saudi Arabia since 2003.">
  <meta name="keywords" content="Dimensions, About Us, Hospitality, Manpower Solutions, Event Planning">

  <!--  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->

  <link href="{{ secure_asset('images/LogoDimention.png') }}" rel="icon">

  <!-- Fontalicious Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fontalicious:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ secure_asset('vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('vendor/aos/aos.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('vendor/glightbox/css/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('vendor/swiper/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('css/main.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('css/mobile-nav.css') }}">

  <!-- About Page Styles -->
  <style>
    .about-content {
      padding: 80px 0;
      background: var(--background-color);
    }

    .about-text {
      font-size: 1.1rem;
      line-height: 1.8;
      color: var(--default-color);
      margin-bottom: 2rem;
    }

    .about-text p {
      margin-bottom: 1.5rem;
    }

    @media (max-width: 768px) {
      .about-text {
        font-size: 1rem;
      }
    }
  </style>
</head>

<body>
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="{{ secure_asset('images/DimensionsLogo.png') }}" alt="Dimensions Logo" class="logo">
      </a>
       <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about') }}" class="active">About Us</a></li>
          <li><a href="{{ route('services') }}">Our Services</a></li>
          <li><a href="{{ route('projects') }}">Our Projects</a></li>
          <li><a href="{{ route('contact') }}">Contact Us</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
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
            <h1 data-aos="fade-up">About Us</h1>
            <div class="breadcrumbs" data-aos="fade-up" data-aos-delay="200">
              <ol>
                <li><a href="index..blade.php">Home</a></li>
                <li>About Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Content Section -->
    <section class="about-content section light-background">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="about-text" data-aos="fade-up">
              <p>
                Dimensions Company is a leading provider of comprehensive manpower solutions and event
                planning services for the hospitality industry in Saudi Arabia since 2003.
              </p>

              <p>
                Dimensions Company is committed to exceeding your expectations. We've been the go-to partner
                for hotels, resorts, restaurants, and event management companies, ensuring seamless
                operations and exceptional guest experience.
              </p>

              <p>
                We partner with you to understand your event goals and vision, then provide the skilled
                workforce and expertise needed to bring them to life. By combining our proven hospitality staffing
                solutions with our dedicated event management services, we ensure your event is a resounding
                success.
              </p>

                <!-- Upload + Saved Articles UI -->
                <div class="text-center mt-4">
                  <button class="btn btn-primary mb-2 me-2" onclick="document.getElementById('uploadModal').style.display='block'">
                    Upload Article
                  </button>
                  <button class="btn btn-danger mb-2" onclick="resetSavedFiles()">
                    Reset Saved Files
                  </button>
                  <div id="savedArticles" class="d-flex flex-wrap justify-content-center gap-2 mt-3"></div>
                </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal To Read Articles Files -->
    <div id="uploadModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.7); z-index:9999; overflow:auto;">
      <div style="background:#fff; margin:10% auto; padding:20px; border-radius:10px; width:80%; max-width:600px; position:relative;">
        <h4>Read Article</h4>
        <input type="file" accept=".txt,.pdf" onchange="handleFile(this)" class="form-control mb-3">
        <div id="fileContent" style="max-height:400px; overflow:auto; border:1px solid #ccc; padding:10px; border-radius:5px;"></div>
        <div class="text-end mt-3">
          <button class="btn btn-danger" onclick="document.getElementById('uploadModal').style.display='none'">Close</button>
        </div>
      </div>
    </div>

    <!-- About Us Section from Home Page -->
    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
      </div>
      <div class="container">
        <div class="row gy-5 justify-content-center">
          <!-- VALUE -->
          <div class="col-lg-3 col-md-6 text-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="p-4 shadow-sm rounded bg-white h-100 card-hover">
              <h3 class="text-primary mb-3">Our <span class="text-dark">Value</span></h3>
              <p>Diverse work environment,<br>passion for working,<br>with honesty and integrity,<br>and one team</p>
            </div>
          </div>
          <!-- MISSION -->
          <div class="col-lg-3 col-md-6 text-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="p-4 shadow-sm rounded bg-white h-100 card-hover">
              <h3 class="text-primary mb-3">Our <span class="text-dark">Mission</span></h3>
              <p>To be the leading partner that clients and candidates always choose to connect with.</p>
            </div>
          </div>
          <!-- VISION -->
          <div class="col-lg-3 col-md-6 text-center" data-aos="zoom-in" data-aos-delay="300">
            <div class="p-4 shadow-sm rounded bg-white h-100 card-hover">
              <h3 class="text-primary mb-3">Our <span class="text-dark">Vision</span></h3>
              <p>We strive to deliver what we promise the first time every time.</p>
            </div>
          </div>
          <!-- ACHIEVEMENT -->
          <div class="col-lg-3 col-md-6 text-center" data-aos="zoom-in" data-aos-delay="400">
            <div class="p-4 shadow-sm rounded bg-white h-100 card-hover">
              <h3 class="text-primary mb-3">Our <span class="text-dark">Achievement</span></h3>
              <p>
                Manpower: Participated in all F1 events<br>
                Project: Fira Villas in BLVD World<br>
                Recruitment: Hired top executive positions locally & internationally
              </p>
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
              <strong>Phone:</strong> <span class="ms-1"><a href="tel:+966530330398"
                  class="footer-phone-link">+966530330398</a></span>
            </p>
            <p class="d-flex align-items-center">
              <i class="bi bi-whatsapp me-2"></i>
              <strong>WhatsApp:</strong> <span class="ms-1"><a href="https://wsend.co/966530330398" target="_blank"
                  rel="noopener" class="footer-whatsapp-link">+966530330398</a></span>
            </p>
            <p class="d-flex align-items-center">
              <i class="bi bi-envelope-fill me-2"></i>
              <strong>Email:</strong> <span class="ms-1"><a href="mailto:info@dimen.jobs"
                  class="mobile-nav-contact-link">info@dimen.jobs</a></span>
            </p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="index.blade.php">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="about.blade.php">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="services.blade.php">Our Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="projects.blade.php">Our Projects</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="contact.blade.php">Contact Us</a></li>
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
            <a href="https://www.instagram.com/dimen.hospitality?igsh=MXFycGY5bGEycndoaQ=="><i
                class="bi bi-instagram"></i></a>
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
  <!-- Swiper JS from CDN to ensure HTTPS and latest version -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ secure_asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ secure_asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ secure_asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ secure_asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ secure_asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ secure_asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ secure_asset('js/main.js') }}"></script>
  <script src="{{ secure_asset('js/mobile-nav.js') }}"></script>

  
  <!-- Script To Articles Files -->
  <script>
    // حفظ الملف
    function handleFile(input) {
      const file = input.files[0];
      if (!file) return;

      const fileContentDiv = document.getElementById('fileContent');
      fileContentDiv.innerHTML = '<em>Loading...</em>';

      const reader = new FileReader();

      if (file.type === "application/pdf") {
        reader.onload = function (e) {
          const pdfData = e.target.result;
          fileContentDiv.innerHTML = `<embed src="${pdfData}" type="application/pdf" width="100%" height="400px"/>`;
          saveFile(file.name, pdfData, 'pdf');
        };
        reader.readAsDataURL(file);
      } else if (file.type === "text/plain") {
        reader.onload = function (e) {
          const text = e.target.result;
          fileContentDiv.textContent = text;
          saveFile(file.name, text, 'text');
        };
        reader.readAsText(file);
      } else {
        fileContentDiv.innerHTML = "<span class='text-danger'>Unsupported file type. Please upload .pdf or .txt</span>";
      }
    }

    // حفظ في localStorage
    function saveFile(name, content, type) {
      const saved = JSON.parse(localStorage.getItem('savedArticles') || '[]');
      saved.push({ name, content, type });
      localStorage.setItem('savedArticles', JSON.stringify(saved));
      renderSavedArticles();
    }

    // عرض المقالات المحفوظة
    function renderSavedArticles() {
      const container = document.getElementById('savedArticles');
      container.innerHTML = '';
      const saved = JSON.parse(localStorage.getItem('savedArticles') || '[]');

      if (saved.length === 0) return;

      saved.forEach((file, index) => {
        const btn = document.createElement('button');
        btn.className = 'btn btn-outline-secondary';
        btn.textContent = file.name;
        btn.onclick = () => openSavedArticle(file);
        container.appendChild(btn);
      });
    }

    // فتح المقال المحفوظ داخل الـ Modal
    function openSavedArticle(file) {
      const fileContentDiv = document.getElementById('fileContent');
      if (file.type === 'pdf') {
        fileContentDiv.innerHTML = `<embed src="${file.content}" type="application/pdf" width="100%" height="400px"/>`;
      } else {
        fileContentDiv.textContent = file.content;
      }
      document.getElementById('uploadModal').style.display = 'block';
    }

    // زرار الريست لحذف كل الملفات المحفوظة
      function resetSavedFiles() {
        if (confirm("Are you sure you want to delete all saved articles?")) {
          localStorage.removeItem('savedArticles');
          renderSavedArticles(); // إعادة تحديث واجهة العرض
        }
      }

    // عند تحميل الصفحة
    document.addEventListener('DOMContentLoaded', renderSavedArticles);
  </script>

</body>

</html>