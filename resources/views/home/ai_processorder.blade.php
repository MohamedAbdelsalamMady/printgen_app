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
  <title>AI</title>

  <style>

    .result-container img {
        max-width: 100%;
    }
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
          <h2>AI</h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>AI</li>
          </ol>
        </div>
      </div>


      <div class="container mt-5">
        <h1 class="mb-4">Order Summary</h1>

        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-4">Generated Image:</h3>
                <img src="{{ $image_url }}" alt="Generated Image" class="img-fluid">
            </div>

            <div class="col-md-6">
                <p><strong>Description:</strong> {{ $text }}</p>
                <p><strong>Width:</strong> {{ $width }}</p>
                <p><strong>Height:</strong> {{ $height }}</p>
                <p><strong>Size:</strong> {{ $size }}</p>
                <p><strong>Version:</strong> {{ $version }}</p>

                <form action="{{ route('place.order') }}" method="POST">
                    @csrf
                    <input type="hidden" name="text" value="{{ $text }}">
                    <input type="hidden" name="image_url" value="{{ $image_url }}">
                    <input type="hidden" name="width" value="{{ $width }}">
                    <input type="hidden" name="height" value="{{ $height }}">
                    <input type="hidden" name="size" value="{{ $size }}">
                    <input type="hidden" name="version" value="{{ $version }}">

                    <div class="mb-3">
                        <label for="category" class="form-label">Choose Category</label>
                        <select id="category" name="category" class="form-select" required>
                            <option value="tshirt">T-shirt (300 EGP + 20 EGP fees)</option>
                            <option value="3d">3D (400 EGP + 30 EGP fees)</option>
                            <option value="medal">Medal (200 EGP + 10 EGP fees)</option>
                            <!-- Add more categories as needed -->
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Place Your Order</button>
                </form>
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

