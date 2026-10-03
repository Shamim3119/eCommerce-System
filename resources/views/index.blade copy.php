<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ $settings->company_name ?? 'Home' }} - {{ $settings->tagline ?? 'Official Website' }}</title>
  <meta name="description" content="{{ $settings->tagline ?? '' }}">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('storage/' . ($settings->favicon ?? $settings->logo)) }}" rel="icon">
  <link href="{{ asset('storage/' . ($settings->favicon ?? $settings->logo)) }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <!-- Header -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center">
        @if($settings->logo)
          <img src="{{ asset('storage/' . $settings->logo) }}" alt="{{ $settings->company_name }}">
        @endif
        <h1 class="sitename ms-2">{{ $settings->company_name }}</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#portfolio">Products</a></li>
          <li><a href="#team">Management</a></li>
          <li><a href="#celebrity">Celebrity</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a href="https://portal.dreamvalleyint.com/" class="btn btn-success">Login</a>

    </div>
  </header>

  <!-- Main Content Area -->
  <main class="main">

    @include('partials.banner')

    @foreach($navigations as $navigation)
      @switch($navigation->slug)
          @case('about')
              @include('partials.about')
          @break
          @case('portfolio')
              @include('partials.product')
          @break
          @case('team')
              @include('partials.management')
          @break
          @case('celebrity')
              @include('partials.celebrity')
          @break
          @case('contact')
              @include('partials.contact')
          @break
      @endswitch
    @endforeach

  </main>

  <!-- Dynamic Footer Section -->
  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        
        <!-- Company About & Social Info -->
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="#" class="logo d-flex align-items-center mb-2">
            @if($settings->logo)
              <img src="{{ asset('storage/' . $settings->logo) }}" alt="{{ $settings->company_name }}" class="me-2" style="max-height: 40px;">
            @endif
            <span class="sitename">{{ $settings->company_name }}</span>
          </a>
          
          @if($settings->tagline)
            <p class="small text-muted mb-3">{{ $settings->tagline }}</p>
          @endif

          <div class="footer-contact pt-2">
            @if($settings->office_address)
              <p><i class="bi bi-geo-alt me-2"></i><strong>Office:</strong> {{ $settings->office_address }}</p>
            @endif

            @if($settings->factory_address)
              <p><i class="bi bi-building me-2"></i><strong>Factory:</strong> {{ $settings->factory_address }}</p>
            @endif

            @if($settings->phone)
              <p class="mt-2"><i class="bi bi-telephone me-2"></i><strong>Phone:</strong> <span>{{ $settings->phone }}</span></p>
            @endif

            @if($settings->email)
              <p><i class="bi bi-envelope me-2"></i><strong>Email:</strong> <span>{{ $settings->email }}</span></p>
            @endif
          </div>

          <!-- Dynamic Social Media Links -->
          <div class="social-links d-flex mt-4">
            @if($settings->facebook)
              <a href="{{ $settings->facebook }}" target="_blank" title="Facebook"><i class="bi bi-facebook"></i></a>
            @endif
            @if($settings->linkedin)
              <a href="{{ $settings->linkedin }}" target="_blank" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
            @endif
            @if($settings->instagram)
              <a href="{{ $settings->instagram }}" target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
            @endif
            @if($settings->youtube)
              <a href="{{ $settings->youtube }}" target="_blank" title="YouTube"><i class="bi bi-youtube"></i></a>
            @endif
            @if($settings->location)
              <a href="{{ $settings->location }}" target="_blank" title="Google Location"><i class="bi bi-geo-alt-fill"></i></a>
            @endif
          </div>
        </div>

        <!-- Quick Links -->
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#portfolio">Products</a></li>
            <li><a href="#team">Management</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>

        <!-- Quick Sections -->
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Quick Access</h4>
          <ul>
            <li><a href="#celebrity">Celebrities</a></li>
            <li><a href="https://portal.dreamvalleyint.com/" target="_blank">Portal Login</a></li>
          </ul>
        </div>

        <!-- Newsletter Subscription -->
        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about {{ $settings->company_name }}!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form">
              <input type="email" name="email" placeholder="Enter your email" required="">
              <input type="submit" value="Subscribe">
            </div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <!-- Copyright Bar -->
    <div class="container copyright text-center mt-4">
      <p>© {{ date('Y') }} <strong class="px-1 sitename">{{ $settings->company_name }}</strong> 
         <span>{{ $settings->copyright ?? 'All Rights Reserved.' }}</span>
      </p>
    </div>

  </footer><!-- /Footer Section -->

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>