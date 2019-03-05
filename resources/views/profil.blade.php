<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>My Profil</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('assets/css/resume.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Muhammad Wafi Irmansyah</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('assets/img/profile2.jpg') }}" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">Muhammad
          <span class="text-primary">Wafi Irmansyah</span>
        </h1>
        <div class="subheading mb-5">Bululawang · Malang ·
          <a href="mailto:name@email.com">wafi@example.com</a>
        </div>
        <p class="lead mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit itaque tenetur, quod sapiente atque, voluptates molestias quam accusamus, architecto enim magni dolores vero reiciendis harum commodi doloribus maxime illo ratione!</p>
        <div class="social-icons">
          <a href="https://github.com/mwafi06">
            <i class="fab fa-github"></i>
          </a>
          <a href="https://www.instagram.com/mwafii_/">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://facebook.com/mwafii06">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </section>

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="mb-5">Education</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Sman 1 Bululawang</h3>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">2014 - 2017</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h3 class="mb-0">Universitas Brawijaya</h3>
            <div class="subheading mb-3">Sistem Informasi</div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">2017 - Present</span>
          </div>
        </div>

      </div>
    </section>

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
      <div class="w-100">
        <h2 class="mb-5">Interests</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit dolor nisi dicta? Eum nihil, ullam, architecto deserunt eaque doloremque alias omnis qui labore voluptatem ducimus ad, earum veritatis doloribus nobis.</p>
      </div>
    </section>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('assets/js/resume.min.js') }}"></script>

</body>

</html>
