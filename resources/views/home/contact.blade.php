<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Explore our cutting-edge photo generator and sticker services powered by AI technology. Our AI photo generator creates stunning images with advanced algorithms. Customize your photos with our wide range of stickers for a unique touch. Transform your ideas into reality with our AI-powered image generation services.">
    <meta name="keywords"
        content="photo generator, stickers, AI images, AI photo generator, AI-powered services, image customization, advanced algorithms, image generation, personalized stickers">

    <link rel="icon" type="" href="home/image/Rectangle.png">
    <link rel="stylesheet" href="home/css/bootstrap.min.css" />
    <link rel="stylesheet" href="home/css/all.min.css" />
    <link rel="stylesheet" href="home/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="home/css/Contact.css" />
    <link rel="stylesheet" href="home/css/services.css" />
    <link href="{{ asset('css/chatify.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>Contact US</title>
</head>

<body>
    <!-- header -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            @include('home.nav')
            <!-- Add Chat Button Here -->

        </div>
    </header>

    <main id="main">
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('home/images/services\ \(1\).jpg')">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Contact US</h2>
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Contact US</li>
                </ol>
            </div>
        </div>

        <div class="map" style="width:px;">
            <iframe style="width: 1300px; margin-left: 20px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3412.853967606786!2d29.910657474844374!3d31.19706217436366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c38fd106be65%3A0xffa827124585b83f!2sAlexandria%20Stadium!5e0!3m2!1sen!2seg!4v1711144726181!5m2!1sen!2seg"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="container contact_container">
            <aside class="contact_aside" style="background-color: #0D6EFD">
                <div class="aside_image">
                    <img src="home/images/contact.svg" alt="AI photo generator" />
                </div>
                <h1>Contact Us</h1>
                <ul class="contact_details">
                    <li><i class="fa-solid fa-phone"></i><span>+20 101234567</span></li>
                    <li><i class="fa-solid fa-envelope"></i><span>PrintGen@gmail.com</span></li>
                    <li><i class="fa-solid fa-location-dot"></i><span>Egypt, Alexandria</span></li>
                </ul>
                <ul class="contact_social">
                    <li><a href="https://www.facebook.com/profile.php?id=61557074927159"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/print.gen_ai"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </aside>

            <form class="contact_form" action="{{ url('sendmessage') }}" method="post">
                @csrf
                <div class="form_name">
                    <input type="text" name="fname" placeholder="First Name" required />
                    <input type="text" name="lname" placeholder="Last Name" required />
                </div>
                <input type="email" name="email" placeholder="Your Email Address" required />
                <textarea name="message" rows="7" placeholder="Message" required></textarea>
                <div class="row">
                    <div class="col">
<button type="submit" class="btn" style="background-color: #0D6EFD; color: white">Send Message</button>
                    </div>
                    <div class="col">
<button id="chatButton" class="btn btn-primary" style="background-color: #0D6EFD; color:aliceblue">Chat with Us</button>
                    </div>
                </div>


            </form>

        </div>
        </div>


    </main>
    @include('home.footer')

    <!-- fixed element -->
    <button id="UpBtn"><i class="fa-solid fa-arrow-up"></i></button>

    <script src="home/js/bootstrap.bundle.min.js"></script>
    <script src="home/js/index.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/chatify.js') }}"></script>
    <script>
        document.getElementById('chatButton').addEventListener('click', function() {
            window.location.href = '{{ route("chatify") }}';  // Ensure this route name matches your route configuration
        });
    </script>
</body>

</html>
