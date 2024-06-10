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
  <title>Products</title>


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
        <h2>Products</h2>
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>Products</li>
        </ol>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder" style="color: black;">Shop in style</h1>
            </div>
        </div>

        <div class="container px-4 px-lg-5 mt-5">
            <form action="{{ route('product.index') }}" method="GET" class="mb-5">
                <div class="row">
                    <div class="col-md-4">
                        <select name="category" class="form-control">
                            <option value="">All Categories</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->category }}" {{ request('category') == $category->category ? 'selected' : '' }}>{{ $category->category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="number" name="min_price" class="form-control" placeholder="Min Price" value="{{ request('min_price') }}">
                    </div>
                    <div class="col-md-3">
                        <input type="number" name="max_price" class="form-control" placeholder="Max Price" value="{{ request('max_price') }}">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </form>

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="product/{{ $product->image }}" alt="{{ $product->title }}" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">{{ $product->title }}</h5>
                                    @if ($product->discount_price != 0)
                                        <h6 style="color: red">{{ $product->discount_price }}$</h6>
                                        <h6 style="text-decoration: line-through;">{{ $product->price }}$</h6>
                                    @else
                                        <h6>{{ $product->price }}$</h6>
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="row">
                                    <div class="col-12">
                                        <a class="btn btn-outline-dark mt-auto" href="{{ url('product_details', $product->id) }}" style="font-size: 14px; margin-left: 15%; width: 60%">View Product</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
             <!-- Pagination links -->
        <div class="d-flex justify-content-center">
            {{ $products->links() }}
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
