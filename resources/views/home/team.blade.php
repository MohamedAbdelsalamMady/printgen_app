<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="" href="home/image/Rectangle.png">
  <link rel="stylesheet" href="home/css/bootstrap.min.css">
  <link rel="stylesheet" href="home/css/all.min.css">
  <link rel="stylesheet" href="home/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="home/css/style.css">
  <link rel="stylesheet" href="home/css/services.css">

  <title>Team</title>
</head>
<body>
    <!-- header -->
    <header id="header" class="header d-flex align-items-center">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        @include('home.nav')
      </div>
    </header>

<main>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
      style="background-image: url('home/images/main\ team.jpeg'); background-position: top 40% ; background-size: cover; height: 700px; ">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>Our Team</h2>
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>Our Team</li>
        </ol>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <div class="py-5 team4">
      <div class="container">
        <div class="row justify-content-center mb-4">
          <div class="col-md-7 text-center">
            <h3 class="mb-3">Experienced & Professional Team</h3>
            <h6 class="subtitle">You can relay on our amazing features list and also our customer services will be great
              experience for you without doubt and in no-time</h6>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 mb-4" style="margin-right: auto; margin-left: auto;">
            <!-- Row -->
            <div class="row">
              <div class="col-md-12">
                <img src="home/images/mady.jpeg" alt="wrapkit" class="img-fluid rounded-circle" />
              </div>
              <div class="col-md-12 text-center">
                <div class="pt-2">
                  <h5 class="mt-4 font-weight-medium mb-0">Mohamed Mady</h5>
                  <h6 class="subtitle mb-3">Team Leader / Backend Developer</h6>
                </div>
              </div>
            </div>
            <!-- Row -->
          </div>
        </div>
        <div class="row">
          <!-- column  -->
          <div class="col-lg-3 mb-4">
            <!-- Row -->
            <div class="row">
              <div class="col-md-12">
                <img src="home/images/3adli.jpeg" alt="wrapkit" class="img-fluid rounded-circle" style="width: 90%;" />
              </div>
              <div class="col-md-12 text-center">
                <div class="pt-2">
                  <h5 class="mt-4 font-weight-medium mb-0">Youssef Adli</h5>
                  <h6 class="subtitle mb-3">Team Member/ Backend Dev</h6>
                </div>
              </div>
            </div>
            <!-- Row -->
          </div>
          <!-- column  -->
          <!-- column  -->
          <div class="col-lg-3 mb-4">
            <!-- Row -->
            <div class="row">
              <div class="col-md-12">
                <img src="home/images/hisham.jpeg" alt="wrapkit" class="img-fluid rounded-circle" style="width: 90%;" />
              </div>
              <div class="col-md-12 text-center">
                <div class="pt-2">
                  <h5 class="mt-4 font-weight-medium mb-0">Mohamed Hisham</h5>
                  <h6 class="subtitle mb-3">Team Member/ Frontend Dev</h6>

                </div>
              </div>
            </div>
            <!-- Row -->
          </div>
          <!-- column  -->
          <!-- column  -->
          <div class="col-lg-3 mb-4">
            <!-- Row -->
            <div class="row">
              <div class="col-md-12">
                <img src="home/images/mariem.jpeg" alt="wrapkit" class="img-fluid rounded-circle" />
              </div>
              <div class="col-md-12 text-center">
                <div class="pt-2">
                  <h5 class="mt-4 font-weight-medium mb-0">Mariem Tarek</h5>
                  <h6 class="subtitle mb-3">Team Member/ Frontend Dev</h6>

                </div>
              </div>
            </div>
            <!-- Row -->
          </div>
          <!-- column  -->
          <!-- column  -->
          <div class="col-lg-3 mb-4">
            <!-- Row -->
            <div class="row">
              <div class="col-md-12">
                <img src="home/images/sharaf.jpeg" alt="wrapkit" class="img-fluid rounded-circle" />
              </div>
              <div class="col-md-12 text-center">
                <div class="pt-2">
                  <h5 class="mt-4 font-weight-medium mb-0">Youssef Sharaf</h5>
                  <h6 class="subtitle mb-3">Team Member/ Frontend Dev</h6>
                </div>
              </div>
            </div>
            <!-- Row -->
          </div>


        </div>
      </div>
    </div>


  </main>

  @include('home.footer')


  <!-- fixed element -->
  <button id="UpBtn"><i class="fa-solid fa-arrow-up"></i></button>


  <script src="home/js/bootstrap.bundle.min.js"></script>
  <script src="home/js/index.js"></script>
</body>

</html>
