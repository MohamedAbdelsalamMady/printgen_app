<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="" name="description">
  <meta content="3D ,Print ,3D printing ,AI ,Image, imagination" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="" href="home/image/Rectangle.png">
  <!--Style-->
  <link rel="stylesheet" href="home/css/all.min.css" />
  <link rel="stylesheet" href="home/css/bootstrap.min.css" />
  <link rel="stylesheet" href="home/css/About.css" />

  <link rel="stylesheet" href="home/css/services.css" />
  <title>About</title>
</head>


<!-- header -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      @include('home.nav')
    </div>
  </header>


  <main id="main">
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('home/images/services\ \(1\).jpg')">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
          <h2>About</h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>About</li>
          </ol>
        </div>
      </div>


      <section class="about ">
        <div class="container my-5" >
          <h1 class="d-flex justify-content-center">Latest <span> News</span></h1>

          <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
            <div class="col">
              <div class="card h-100">
                <img src="home/images/about (2).jpg" class="card-img-top" alt="3D" />
                <div class="card-body">
                  <h5 class="card-title">June 2024: Successful Beta Launch</h5>
                  <p class="card-text my-4">
                    PrintGen has successfully launched its beta version, allowing early users to explore the platform and provide valuable feedback. The beta launch includes the core functionalities of AI-driven character creation, customization options, and integration with 3D printing technology. Users have expressed enthusiasm about the intuitive interface and the quality of the 3D-printed products.
                  </p>

                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="home/images/about (1).jpg" class="card-img-top" alt="3D" />
                <div class="card-body">
                  <h5 class="card-title">May 2024: Partnership with Leading 3D Printing Company</h5>
                  <p class="card-text my-4">
                    PrintGen has announced a strategic partnership with a leading 3D printing company to enhance its production capabilities. This collaboration aims to ensure that all customized products meet the highest standards of quality and precision. The partnership will also help in scaling up the production to meet increasing user demand.
                  </p>

                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="home/images/about (3).jpg" class="card-img-top" alt="3D" />
                <div class="card-body">
                  <h5 class="card-title">April 2024: Expansion of Customization Options</h5>
                  <p class="card-text my-4">
                    In response to user feedback, PrintGen has expanded its range of customization options. Users can now choose from a broader selection of materials, colors, and finishes for their 3D-printed characters and other products. This update aims to provide more flexibility and creativity in the design process.
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="container">
        <section class="why-us">
          <div class="why-us-head" style="text-align: center; margin-bottom: 30px;">
            <h2>Why Choose Us</h2>
            <div class="sub-head-why" style="text-align: center;">
              <h5>PrintGen Advantages</h5>
            </div>
          </div>

          <div class="why-us-content">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card" style="height: 230px;">
                  <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">Innovation</h5>
                    <p class="card-text" style="text-align: center;">We're constantly exploring new technologies and
                      techniques to stay ahead of the curve.</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card" style="height: 230px;">
                  <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">Quality</h5>
                    <p class="card-text" style="text-align: center;">Our commitment to excellence ensures that every
                      project meets the highest standards of quality and craftsmanship.</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card" style="height: 230px;">
                  <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">Versatitly</h5>
                    <p class="card-text" style="text-align: center;">Our services cater to a wide range of industries and
                      purposes, from advertising and marketing to personal expression and creativity.</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card" style="height: 230px;">
                  <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">Personalization</h5>
                    <p class="card-text" style="text-align: center;">We understand that every project is unique, which is
                      why we offer customizable solutions tailored to your specific needs and preferences.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>


      <section class="services">
        <div class="container">
          <div class="content d-flex justify-content-between align-items-center">
            <div class="info">
              <div>
                <ul class="nav nav-pills mb-3 gap-3" id="pills-tab" role="tablist">
                  <li class="nav-item fw-semibold" role="presentation">
                    <button class="nav-link active" id="pills-Customer-tab" data-bs-toggle="pill"
                      data-bs-target="#pills-Customer" type="button" role="tab" aria-controls="pills-Customer"
                      aria-selected="true">
                      AI-Powered Photo Generation
                    </button>
                  </li>
                  <li class="nav-item fw-semibold" role="presentation">
                    <button class="nav-link" id="pills-Talent-tab" data-bs-toggle="pill" data-bs-target="#pills-Talent"
                      type="button" role="tab" aria-controls="pills-Talent" aria-selected="false">
                      Custom Stickers for Every Occasion
                    </button>
                  </li>
                  <li class="nav-item fw-semibold" role="presentation">
                    <button class="nav-link" id="pills-App-tab" data-bs-toggle="pill" data-bs-target="#pills-App"
                      type="button" role="tab" aria-controls="pills-App" aria-selected="false">
                      AI-Enhanced Image Manipulation
                    </button>
                  </li>
                </ul>
                <div class="tab-content gap-5 ps-5" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-Customer" role="tabpanel"
                    aria-labelledby="pills-Customer-tab" tabindex="0">
                    <div class="row mt-5 gy-3">
                      <h3>AI Generating Image</h3>

                      <p>
                        Transform your imagination into reality with our AI-powered photo generator. Our sophisticated algorithms analyze your input and produce stunning visuals that exceed your expectations. Whether you're a professional photographer or an amateur enthusiast, our intuitive platform makes it easy to create breathtaking images in seconds.
                      </p>

                      <div class="d-flex flex-column">
                        <a href="https://www.ibm.com/think/videos/generative-ai-for-application-modernization#:~:text=Generative%20AI%27s%20ability%20to%20understand,expertise%20to%20strategic%20decision%2Dmaking.&text=It%27s%20one%20thing%20to%20invest%20in%20AI." class="text-decoration-none">Learn about AI for app modernization
                            <i class="fa-solid fa-arrow-right"></i></a>
                          <a href="https://www.linkedin.com/pulse/customizing-future-how-ai-revolutionizing-products-services-ray-veras" class="text-decoration-none">Discover AI Product Customization
                            <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-Talent" role="tabpanel" aria-labelledby="pills-Talent-tab"
                    tabindex="0">
                    <div class="row mt-5 gy-3">
                      <h3>Custom Stickers</h3>

                      <p>
                        Make a statement with our wide selection of customizable stickers. Whether you're promoting your brand, decorating your belongings, or adding a personal touch to your projects, our stickers are the perfect solution. Choose from a variety of designs, shapes, and sizes to suit your needs and preferences.
                      </p>

                      <div class="d-flex flex-column">
                        <a href="https://www.ceiamerica.com/ai-solutions/ai-and-app-modernization/#:~:text=AI%2Dpowered%20testing%20tools%20can,free%20and%20maintain%20their%20functionality.&text=Break%20down%20monolithic%20applications%20into,applications%20more%20scalable%20and%20manageable." class="text-decoration-none">Learn about AI for app modernization
                          <i class="fa-solid fa-arrow-right"></i></a>
                        <a href="https://dev.nexright.com.au/products/ai-machine-learning/watson-code-assistant/#:~:text=IBM%20watsonx%20Code%20Assistant%20is,by%20unprecedented%20agility%20and%20effectiveness." class="text-decoration-none">Discover watsonx Code Assistant
                          <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-App" role="tabpanel" aria-labelledby="pills-App-tab" tabindex="0">
                    <div class="row mt-5 gy-3">
                      <h3>AI for application modernization</h3>

                      <p>
                        Elevate your photos to new heights with our AI-enhanced image manipulation services. Our advanced tools allow you to enhance colors, remove imperfections, and add artistic effects with ease. Whether you're editing portraits, landscapes, or product photos, our intuitive interface and powerful algorithms ensure exceptional results every time.
                      </p>

                      <div class="d-flex flex-column">
                        <a href="https://www.ibm.com/think/videos/generative-ai-for-application-modernization#:~:text=Generative%20AI%27s%20ability%20to%20understand,expertise%20to%20strategic%20decision%2Dmaking.&text=It%27s%20one%20thing%20to%20invest%20in%20AI." class="text-decoration-none">Learn about AI for app modernization
                          <i class="fa-solid fa-arrow-right"></i></a>
                        <a href="https://www.linkedin.com/pulse/customizing-future-how-ai-revolutionizing-products-services-ray-veras" class="text-decoration-none">Discover AI Product Customization
                          <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="image">
              <img src="home/images/about.jpg" class="w-100" alt="3D" />
            </div>
          </div>
        </div>
      </section>



    </main>


    @include('home.footer')


    <!-- fixed element -->
    <button id="UpBtn"><i class="fa-solid fa-arrow-up"></i></button>


    <script src="home/js/bootstrap.bundle.min.js"></script>
    <script src="home/js/index.js"></script>
  </body>

  </html>
