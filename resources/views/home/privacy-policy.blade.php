<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/css/all.min.css">
    <link rel="stylesheet" href="home/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="home/css/style.css">
    <link rel="stylesheet" href="home/css/services.css">
    <link rel="stylesheet" href="home/css/privacy-policy-style.css">
    <title>Privacy Policy</title>
</head>
<body>

    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
          @include('home.nav')
        </div>
      </header>

      <main>
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
          style="background-image: url('images/main\ team.jpeg'); background-position: top 40% ; background-size: cover; height: 700px; ">
          <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Privacy Policy</h2>
            <ol>
              <li><a href="{{ url('/') }}">Home</a></li>
              <li>Privacy Policy</li>
            </ol>
          </div>
        </div>
        <!-- End Breadcrumbs -->

        <div id="sections-privacy">

            <section id="privacy">
              <div id="privacy-box">
                <div id="privacy-text">
                  <h2>Privacy policy</h2>
            <p>Last edit: 03/7/2024</p>
            <P>Greeting users</P>
                  <p>PrintGen Consumer Privacy Policy (Privacy Policy) describes the personal information that PrintGen collects from or about users of the websites,
                    widgets and other online and offline services that PrintGen operates (together, the Services)
                      and how we use and protect that personal information.  This Privacy Policy also explains how users can make choices about their personal information.  </p>

                     <p>When we refer to personal information (sometimes referred to as personal data under some laws) in this Privacy Policy,
                       we mean information that identifies or can be used to identify an individual human being.
                         This means that personal information includes direct identifiers (such as name)
                          and indirect identifiers.
                           When we refer to you or user, we mean someone who uses any of the Services.
                            When we refer to controller, we mean the person or entity that determines what personal information
                            is collected from or about you and how that personal information is used and protected.  </p>
                   <p>
                    <ol>
                      <li>This is a general example and may not address all aspects of data collection specific to your situation.</li>
                      <li>You should consult with a lawyer to ensure your privacy policy complies with all applicable laws and regulations.</li>
                      <li>A comprehensive privacy policy should include details about:</li>
                    </ol>
                  </p>
                  <p>Additional elements to consider including:</p>
                  <ol>
                    <li>Security: Outline measures taken to protect user information.</li>
                    <li>Data Retention: Specify how long information will be stored.</li>
                    <li>Children's Privacy: If applicable, include information regarding data collection from children.</li>
                  </ol>
                </div>
              </div>


            </section>
                      </div>

      </main>
      @include('home.footer')


  <!-- fixed element -->
  <button id="UpBtn"><i class="fa-solid fa-arrow-up"></i></button>


  <script src="home/js/bootstrap.bundle.min.js"></script>
  <script src="home/js/index.js"></script>
</body>

</html>


