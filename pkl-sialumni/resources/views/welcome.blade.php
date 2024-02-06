<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Landing Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</head>

<body>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
            {{-- <h1><a href="index.html">Scaffold</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#" style="display: inline-block;"><img src="https://ir.elitery.com/uploads/media/ELITERY%20LOGO%20V2-05%20(1)%20(3).png" alt="" class="img-fluid"></a>
      </div>
        
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <ul>
              <li><a class="nav-link scrollto" href="#about">About Us</a></li>
              <li><a class="nav-link scrollto" href="#agenda">Agenda</a></li>
              <li><a class="nav-link scrollto" href="#alumni">Alumni</a></li>
              <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </div>
  </header><!-- End Header -->

  <style>
    #hero {
      background: url('assets/img/bgelitery.png') center center/cover no-repeat;
      height: 100vh;
      display: flex;
      align-items: center;
    }

    #hero .container {
      position: relative;
      z-index: 2;
    }

    #hero h1,
    #hero h2,
    #hero .btn-get-started {
      color: #fff;
    }
  </style>
</head>
<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <div>
            <h1>Alumni</h1>
            <h2>Your presence within Elitery is enduring, and Elitery's presence within you is everlasting.</h2>
            <a href="{{ route('register') }}" class="btn-get-started scrollto">Join Our Online Community</a>
          </div>
        {{-- </div>
        <div class="col-lg-6 order-1 order-lg-2 " data-aos="fade-left">
          <!-- You can keep this img tag or remove it based on your needs -->
          <img src="assets/img/bgelitery.png" class="img-fluid" alt="">
        </div>
      </div> --}}
    </div>

  </section><!-- End Hero -->

  <main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">
  
      <div class="row">
        <div class="col-lg-6" data-aos="zoom-in">
          <img src="assets/img/about.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
          <div class="content pt-4 pt-lg-0">
            <h3>Why Join Us?</h3>
            <p class="fst-italic">
              At Elitery, we are committed to creating a comfortable workplace. Joining us means being part of a passionate team where innovation, collaboration, and personal growth are at the heart of what we do.
            
              Explore exciting opportunities to contribute your skills and talents in a forward-thinking environment. From cutting-edge projects to a supportive community, we offer a workplace where your ideas matter.
            
              Embrace a culture that values diversity, creativity, and continuous learning. At Elitery, we are committed to your success, providing not just a job, but a fulfilling journey where you can grow both personally and professionally.
            
              Interested in recommending Elitery as an employer? Participate in our referral program and benefit from attractive rewards.
            
              Have you worked with Elitery before and are interested in returning? We welcome you to explore reentry opportunities. Come back to a place that values your experience and supports your career growth.
            
              Join us on this adventure of innovation and excellence. Let's build the future together!
            </p>
            
          </div>
        </div>
      </div>
  
    </div>
  </section>
  <!-- End About Section -->

 <!-- ======= Agenda Section ======= -->
  <section id="agenda" class="agenda">
      <div class="container" style="display: flex; text-align: center;">
        <div class="section-title" data-aos="fade-up" style="margin-top: 50px; width: 100%;">
            {{-- <h2 style="margin: 0 auto;">Agenda</h2> --}}
                <!-- ======= Agenda Section ======= -->
            <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
            <div class="elfsight-app-a8a23565-b70e-4b1b-b458-d76849f29843" data-elfsight-app-lazy></div>
        </div>
      </div>
  </section>

    <!-- End Agenda Section -->

<!-- Testimonials Section -->
@php 
  use App\Models\Testimony;
  $testimonies = Testimony::with('alumni')->get();
@endphp

    <section id="alumni" class="alumni">
      <div class="container bg-white pb-1">
        <div class="section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach($testimonies as $testimony)
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          {{ $testimony->content }}
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{asset('/storage/photos/'.$testimony->alumni->photo)}}" class="testimonial-img" alt="">
                        <h3>{{ $testimony->alumni->first_name }} {{ $testimony->alumni->last_name }}</h3>
                        <h4>{{ $testimony->alumni->current_job }}</h4>
                      </div>
                    </div><!-- End testimonial item -->
                @endforeach
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

<!-- ======= F.A.Q Section ======= -->
@php 
  use App\Models\Faq;
  $faqs = Faq::all();
@endphp
<section id="faq" class="faq">
    <div class="container">
  
      <div class="section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
      </div>
  
      <div class="row">
        <div class="col-lg-8" data-aos="fade-right">
          <ul class="faq-list">
            @foreach($faqs as $faq)
              @if($faq->status == 'approved')
                  <li>
                      <div data-bs-toggle="collapse" class="collapsed question" href="#faq{{ $faq->id }}">
                          {{ $faq->question }}<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                      </div>
                      <div id="faq{{ $faq->id }}" class="collapse" data-bs-parent=".faq-list">
                          <p>
                              {{ $faq->answer }}
                          </p>
                      </div>
                  </li>
              @endif
            @endforeach
          </ul>
        </div>
        <!-- Section Question (sebelah kanan FAQ) -->
        <div class="col-lg-4" data-aos="fade-left">
          <form action="" method="post" role="form">
            @csrf
            <!-- Additional Question Card -->
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Additional Question</h5>
                    <p class="card-text">What additional information or questions do you have for us?</p>
                    <textarea class="form-control" name="additionalQuestion" rows="4" required></textarea>
                </div>
            </div>
            <!-- End Additional Question Card -->
        
            <div class="my-3">
                {{-- ... --}}
            </div>
            <div class="text-center">
              <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mx-auto">Submit</button>
            </div>
        </form>        
        </div>
        <!-- End Section Question -->
      </div>
    </div>
  </section><!-- End Frequently Asked Questions Section -->
  
  
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="social-links ml-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  
    <div class="container"></div>
  </footer><!-- End Footer -->  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>