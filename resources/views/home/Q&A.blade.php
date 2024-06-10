<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <base href="/public">
  <!-- Favicons -->
  <link rel="icon" type="" href="home/image/Rectangle.png">

  <link rel="stylesheet" href="home/css/bootstrap.min.css">

  <link rel="stylesheet" href="home/css/all.min.css">

  <link rel="stylesheet" href="home/css/swiper-bundle.min.css">

  <link rel="stylesheet" href="home/css/style.css">

  <link rel="stylesheet" href="home/css/services.css">
  <title>Questions and Answers</title>


</head>

<body>
  <!-- header -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      @include('home.nav')
    </div>
  </header>


  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('home/images/services\ \(1\).jpg')">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>Questions and Answers</h2>
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>Questions and Answers</li>
        </ol>
      </div>
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
                    What Is PrintGen?
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">PrintGen is an AI-driven platform that allows users to design, customize, and order 3D-printed characters and other personalized items such as t-shirts, cups, medals, and stickers. The platform integrates advanced 3D printing technology and a user-friendly e-commerce store.</div>
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
                    Who can use PrintGen
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">PrintGen is designed for everyone, but it particularly targets students and young adults aged 18 to 25 who are interested in video game characters and personalized merchandise. The platform is user-friendly, making it accessible to both novice and experienced users.</div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    How do I create a character on PrintGen?
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Users can create characters using the AI-based character creation tool, which allows customization based on textual descriptions or uploaded images. The platform provides various options for modifying appearance, personality traits, and behaviors to create a unique character.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFour">
                    What customization options are available?
                  </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">PrintGen offers a wide range of customization options including different materials, colors, and finishes. Users can personalize their items extensively to match their preferences.</div>
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
