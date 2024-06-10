<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="" href="home/image/Rectangle.png">

  <link rel="stylesheet" href="home/css/all.min.css" />

  <link rel="stylesheet" href="home/css/bootstrap.min.css" />


  <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="home/css/style.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet" />

  <script src="
    https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
    "></script>
  <title>PrintGen</title>
</head>

<body>

    @if(session('success'))
        <!-- Bootstrap Modal -->
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Order Placed Successfully</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ session('success') }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#successModal').modal('show');
            });
        </script>

@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

  <!-- header -->
  <header class="home">
    <div class="container">
      @include('home.nav')

      <div class="content">
        <h1>
          build Your <br />
          imagenation product <br />
          with AI
        </h1>
        <p class="text-start">
          Developing a product using Al is analogous to building a bridge
          towards the future. It can provide a distinct solution by selecting
          the appropriate Al technology and utilizing the necessary tools to
          shape the bridge.
        </p>

        <div class="btns gap-5 d-flex">
          <button class="button-85" role="button"><a href="{{ url('/ai-image') }}">Start Now</a></button>
          <button class="button-85" role="button"><a href="{{ url('/about-us') }}">Learn More</a></button>
        </div>
      </div>
      <div class="cards">
        <div class="image">
          <img src="home/images/header (2).jpg" class="card-img-top" alt="headerimage" />
        </div>

        <div class="image position-relative">
          <img src="home/images/header (1).jpg" class="card-img-top" alt="headerimage" />
          <div class="video position-absolute">
            <i class="fa-solid fa-play"></i>
          </div>
        </div>

        <div class="image">
          <img src="home/images/header (3).jpg" class="card-img-top" alt="headerimage" />
        </div>
      </div>
    </div>
  </header>

  <!--  Offer -->

  <section class="Offer">
    <div class="container">
      <h1 class="text-center">We <span>Offer</span> Best Services</h1>
      <div class="content d-flex justify-content-between align-items-center">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="box text-center">
              <i class="fa-regular fa-hand-peace"></i>
              <h2>Best Quality</h2>
              <p>Best Quality that fit your creativity</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="box text-center">
              <i class="fa-solid fa-plane-departure"></i>
              <h2>AI Generate</h2>
              <p>Engrossed listening. Park gate sell they west hard for the</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="box text-center">
              <i class="fa-solid fa-location-dot"></i>
              <h2>Local Brand</h2>
              <p>
                Barton vanity itself do in it. Preferd to men it engrossed
                listening
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="box text-center">
              <i class="fa-solid fa-gear"></i>
              <h2>Customization</h2>
              <p>
                We deliver outsourced aviation services for military customers
              </p>
            </div>
          </div>
        </div>




      </div>
    </div>
  </section>

  <!--  Categories -->
  <section class="Categories container" id="Categories">
    <div class="position-relative">
      <div class="d-flex justify-content-between align-items-center gap-3 fw-bold mb-3">
        <div class="d-flex justify-content-between align-items-center gap-3 fw-bold">
          <div class="shape"></div>
          <span>Categories</span>
        </div>
        <div class="custom-arrows">
          <button class="custom-next">
            <i class="fa-solid fa-angle-left"></i>
          </button>
          <button class="custom-prev">
            <i class="fa-solid fa-angle-right"></i>
          </button>
        </div>
      </div>

      <div class="heading">
        <h1 class="head-title">Browse By <span>Category</span></h1>
      </div>

      <div class="splide" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide ">
              <div class="thumb-wrapper  text-center w-75 py-3 position-relative">


                <div class="thumb-content">
                  <h4>3D Printer</h4>
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>
                  <a href="{{ url('/product/printgen') }}" class="btn btn-primary">Show Category</a>
                </div>
            </li>
            <li class="splide__slide">
              <div class="thumb-wrapper  text-center w-75 py-3 position-relative">


                <div class="thumb-content">
                  <h4>T-Shirt </h4>
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>
                  <a href="{{ url('/product/printgen') }}" class="btn btn-primary">Show Category</a>
                </div>
            </li>
            <li class="splide__slide">
              <div class="thumb-wrapper  text-center w-75 py-3 position-relative">


                <div class="thumb-content">
                  <h4>Medals</h4>
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>

                  <a href="{{ url('/product/printgen') }}" class="btn btn-primary">Show Category</a>
                </div>
            </li>
            <li class="splide__slide">
              <div class="thumb-wrapper  text-center w-75 py-3 position-relative">


                <div class="thumb-content">
                  <h4>Stickers</h4>
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>

                  <a href="{{ url('/product/printgen') }}" class="btn btn-primary">Show Category</a>
                </div>
            </li>
            <li class="splide__slide">
              <div class="thumb-wrapper  text-center w-75 py-3 position-relative">


                <div class="thumb-content">
                  <h4>Painting</h4>
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa-regular fa-star-half-stroke"></i></li>
                    </ul>
                  </div>

                  <a href="{{ url('/product/printgen') }}" class="btn btn-primary">Show Category</a>
                </div>
            </li>

            <li class="splide__slide">
              <div class="thumb-wrapper  text-center w-75 py-3 position-relative">


                <div class="thumb-content">
                  <h4>Cups</h4>
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa-regular fa-star-half-stroke"></i></li>
                    </ul>
                  </div>

                  <a href="{{ url('/product/printgen') }}" class="btn btn-primary">Show Category</a>
                </div>
            </li>
          </ul>



        </div>
      </div>
    </div>

    <div class="hr"></div>
  </section>

  <!-- Products -->

  <section class="Products">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-3">
          <div class="shape"></div>
          <h3 class="m-0">Best Selling <span>Products</span></h3>
        </div>

      </div>

      <div class="d-flex justify-content-between">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="ProductCart">
              <img src="home/images/sticker.jpeg" class="w-75" alt="" />
              <p class="fs-4 fw-medium">Sticker Ancient</p>
              <span class="price">70$</span>

              <span class="top borderAnimation"></span>
              <span class="right borderAnimation"></span>
              <span class="bottom borderAnimation"></span>
              <span class="left borderAnimation"></span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="ProductCart">
              <img src="home/images/t-shirt.jpeg" class="w-75" alt="" />
              <p class="fs-4 fw-medium">Ancient T-shirt</p>
              <span class="price">300$</span>
              <span class="top borderAnimation"></span>
              <span class="right borderAnimation"></span>
              <span class="bottom borderAnimation"></span>
              <span class="left borderAnimation"></span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="ProductCart">
              <img src="home/images/cups.jpeg" class="w-75" alt="" />
              <p class="fs-4 fw-medium">Air Buds</p>
              <span class="price">120$</span>
              <span class="top borderAnimation"></span>
              <span class="right borderAnimation"></span>
              <span class="bottom borderAnimation"></span>
              <span class="left borderAnimation"></span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="ProductCart">
              <img src="home/images/t-shirt girl.jpeg" class="w-75" alt="" />
              <p class="fs-4 fw-medium">T-shirt</p>
              <span class="price">300$</span>
              <span class="top borderAnimation"></span>
              <span class="right borderAnimation"></span>
              <span class="bottom borderAnimation"></span>
              <span class="left borderAnimation"></span>
            </div>
          </div>
        </div>




      </div>
    </div>
  </section>

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




  <!-- reward -->

  <section class="reward my-5">
    <div class="container">
      <div class="card mb-5">
        <div class="card-body p-5 gap-5">
          <div class="d-flex justify-content-between align-items-center">
            <div class="data w-100">
              <div class="row">
                <div class="col-lg-6">
                  <div class="left-creativity">
                    <h1 class="card-title py-5">
                      Enhance Your <br />
                      Creativity Experience
                    </h1>

                    <div class="timer">
                      <div class="days-container">
                        <div class="days"></div>
                        <div class="days-label">days</div>
                      </div>

                      <div class="hours-container">
                        <div class="hours"></div>
                        <div class="hours-label">hours</div>
                      </div>

                      <div class="minutes-container">
                        <div class="minutes"></div>
                        <div class="minutes-label">minutes</div>
                      </div>

                      <div class="seconds-container">
                        <div class="seconds"></div>
                        <div class="seconds-label">seconds</div>
                      </div>
                    </div>
                    <button class="btn mt-5">Buy Now!</button>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="right-creativity">
                    <div class="images d-flex justify-content-center align-items-center w-100">
                      <div>
                        <img src="home/images/products (5).png" alt="" />

                        <img src="home/images/products (7).png" alt="" />
                      </div>
                      <div>
                        <img src="home/images/products (9).png" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Customer sercices -->

  <section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="box-icon">
                <div class="icon">
                  <i class="fa-solid fa-truck-arrow-right"></i>
                </div>
              </div>
              <div class="content">
                <h2 class="card-text">FREE AND FAST DELIVERY</h2>
                <p>Free delivery for all orders over $140.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="box-icon">
                <div class="icon">
                  <i class="fa-brands fa-servicestack"></i>
                </div>
              </div>
              <div class="content">
                <h2 class="card-text">24/7 CUSTOMER SERVICE</h2>
                <p>Friendly 24/7 customer support.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="box-icon">
                <div class="icon">
                  <i class="fa-solid fa-money-bill-transfer"></i>
                </div>
              </div>
              <div class="content">
                <h2 class="card-text">MONEY BACK GUARANTEE</h2>
                <p>We reurn money within 30 days.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Customer contact -->

  @include('home.contact-section-home')

  @include('home.footer')



  <!-- fixed element -->
  <button id="UpBtn"><i class="fa-solid fa-arrow-up"></i></button>



  <script src="home/js/bootstrap.bundle.min.js"></script>

  <script src="home/js/index.js" type="module"></script>
  <!-- Google Translate API Script -->
  <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'ar,en,es,fr', // English, Arabic, Spanish, French
        }, 'google_translate_element');
    }

    function translatePage(language) {
        var translateElement = new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'ar,en,es,fr', // English, Arabic, Spanish, French
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
        var iframe = document.querySelector('.goog-te-menu-frame');
        if (iframe) {
            iframe.contentWindow.document.querySelector(`.goog-te-menu2-item span.text:contains(${language})`).click();
        }
    }
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>
