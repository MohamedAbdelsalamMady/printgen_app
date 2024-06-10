<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <base href="/public">
    <link rel="stylesheet" href="home/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/css/all.min.css">
    <link rel="stylesheet" href="home/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="home/css/style.css">
    <link rel="stylesheet" href="home/css/services.css">
    <title>Process Order</title>
</head>

<body>
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
          @include('home.nav')
        </div>
      </header>

      <main id="main">
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('home/images/services (1).jpg')">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>AI</h2>
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>AI</li>
                </ol>
            </div>
        </div>
<div class="container mt-5">
            <h1>Process Order</h1>
            <form action="{{ route('process.order', ['id' => $order->id]) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="customer_name" class="form-label">Customer Name</label>
                    <input type="text" id="customer_name" name="customer_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="customer_email" class="form-label">Customer Email</label>
                    <input type="email" id="customer_email" name="customer_email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="customer_address" class="form-label">Customer Address</label>
                    <input type="text" id="customer_address" name="customer_address" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category:</label>
                    <select id="category" name="category" class="form-select">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="size" class="form-label">Size:</label>
                    <select id="size" name="size" class="form-select">
                        <option value="Small">Small</option>
                        <option value="Medium">Medium</option>
                        <option value="Large">Large</option>
                        <!-- Add other size options as needed -->
                    </select>
                </div>
                


                <button type="submit" class="btn btn-primary">Submit Order</button>
            </form>
        </div>



      </main>



    @include('home.footer')

    <button id="UpBtn"><i class="fa-solid fa-arrow-up"></i></button>
    <script src="home/js/bootstrap.bundle.min.js"></script>
    <script src="home/js/index.js"></script>
</body>
</html>
