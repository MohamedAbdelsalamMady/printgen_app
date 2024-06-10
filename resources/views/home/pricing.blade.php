<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Packages</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="" href="home/image/Rectangle.png">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="home/css/bootstrap.min.css" rel="stylesheet">
  <link href="home/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="home/css/all.min.css" rel="stylesheet">
  <link href="home/css/glightbox.min.css" rel="stylesheet">
  <link href="home/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="home/css/services.css" />

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="home/css/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet" />
  <script src="
    https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
    "></script>

  <style>

  </style>
</head>

<body>
<!-- header -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
          @include('home.nav')
        </div>
      </header>


      <main id="main">
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('home/images/services\ \(1\).jpg')">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
              <h2>Packages Methods</h2>
              <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Packages Method</li>
              </ol>
            </div>
          </div>

          <div class="container" style="margin-top: 90px;">
            <!-- Packages -->

  <section class="Packages text-center" id="Packages">
    <h1>Check Our <span>Packages</span></h1>
    <h3 class="py-3">Tailored plans to fit businesses of all sizes</h3>
    <div class="container">
        <div class="content my-5">
            <div class="row">
                <!-- Starter Package -->
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3 mb-sm-0">
                    <div class="pricing_design">
                        <div class="single-pricing">
                            <div class="price-head">
                                <h2>Starter</h2>
                                <h1>$0</h1>
                                <span>/Monthly</span>
                            </div>
                            <ul>
                                <li><b>10</b> Calls for AI Generation (Text to Image & Image to Image)</li>
                                <li>Must <b>Sign Up</b></li>

                            </ul>
                            <div class="pricing-price"></div>
                            <a href="{{ url('/signup') }}" class="price_btn">Sign Up Now</a>
                        </div>
                    </div>
                </div>
                <!-- Personal Package -->
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3 mb-sm-0">
                    <div class="pricing_design">
                        <div class="single-pricing">
                            <div class="price-head">
                                <h2>Personal</h2>
                                <h1>250 EGP</h1>
                                <span>/Monthly</span>
                            </div>
                            <ul>
                                <li><b>50</b> Calls for AI Generation (Text to Image & Image to Image)</li>

                            </ul>
                            <div class="pricing-price"></div>
                            <a href="{{ url('/product/printgen') }}" class="price_btn">Order Now</a>
                        </div>
                    </div>
                </div>
                <!-- Ultimate Package -->
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3 mb-sm-0">
                    <div class="pricing_design">
                        <div class="single-pricing">
                            <div class="price-head">
                                <h2>Ultimate</h2>
                                <h1>450 EGP</h1>
                                <span>/Monthly</span>
                            </div>
                            <ul>
                                <li><b>100</b> Calls for AI Generation (Text to Image & Image to Image)</li>

                            </ul>
                            <div class="pricing-price"></div>
                            <a href="{{ url('/product/printgen') }}" class="price_btn">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hr"></div>
    </div>
</section>
          </div>

          <div class="questions" style="text-align: center; margin-bottom: 50px; margin-top: 50px;">
            <div class="container">
              <div class="questions-head">
                <h1>Most Frequent <span>Questions </span></h1>
              </div>
              <div class="questions-content">
                <div class="accordion accordion-flush" id="accordionFlushExample">

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        What packages does PrintGen offer?
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">PrintGen offers three comprehensive pricing packages designed to meet a
                        variety of needs and budgets: Basic, Pro, and Premium. Each package includes a range of features and
                        services tailored to suit different levels of usage and requirements.</div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        What features are included in each package?
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Basic Package: Ideal for individuals and small businesses, the Basic package
                        includes essential features such as access to our AI-powered photo generation tool, a limited
                        selection of customizable stickers, and basic image manipulation capabilities.<br>

                        Pro Package: Designed for professional users, the Pro package offers expanded features such as a
                        broader selection of customizable stickers, advanced AI-powered image manipulation tools, priority
                        customer support, and enhanced customization options.<br>

                        Premium Package: Our most comprehensive package, the Premium package is perfect for businesses and
                        enterprises. It includes all features from the Pro package, along with additional perks such as
                        unlimited access to our full library of customizable stickers, priority access to new features and
                        updates, dedicated account management, and exclusive discounts on bulk orders.</div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Can I upgrade or downgrade my package?
                      </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Yes, you can easily upgrade or downgrade your package at any time to better
                        suit your evolving needs. Simply contact our customer support team, and they will assist you in making
                        the necessary changes to your subscription.</div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Are there any hidden fees or contracts?
                      </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">No, there are no hidden fees or long-term contracts with PrintGen. Our
                        pricing is transparent, and you only pay for the package you choose on a month-to-month basis. You
                        have the flexibility to cancel or modify your subscription at any time without any penalties.</div>
                    </div>
                  </div>
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
