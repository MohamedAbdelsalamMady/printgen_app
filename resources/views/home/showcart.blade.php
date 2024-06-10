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
    <title>Cart</title>


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
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('home/images/services\ \(1\).jpg')">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Cart</h2>
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Show Cart</li>
                </ol>
            </div>
        </div>

        <!--Show Cart Section-->

        <section class="h-100 h-custom" style="background-color: #d2c9ff;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                  <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                      <div class="row g-0">


                        <div class="col-lg-8">
                          <div class="p-5">
                            <div class="d-flex justify-content-between align-items-center mb-5">
                              <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>

                            </div>
                <?php $totalprice=0; ?>
                            @foreach ($cart as $cart )

                    <!--Start Product Section-->
                            <hr class="my-4">



                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                              <div class="col-md-2 col-lg-2 col-xl-2">
                                <img
                                  src="/product/{{ $cart->image }}"
                                  class="img-fluid rounded-3" alt="Cotton T-shirt">
                              </div>
                              <div class="col-md-3 col-lg-3 col-xl-3">
                                <h6 class="text-muted">{{ $cart->product_title }}</h6>
                                <h6 class="text-black mb-0">
                                    {{ $cart->product_title }}
                                </h6>
                                <h6 class="text-black mb-0">
                                    {{ $cart->color }}
                                </h6>
                                <h6 class="text-black mb-0">
                                    {{ $cart->size }}
                                </h6>

                              </div>
                              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">


                                <input id="form1" min="0" name="quantity" value="{{ $cart->quantity }}" type="number"
                                  class="form-control form-control-sm" />


                              </div>
                              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h6 class="mb-0">€ {{ $cart->price }}</h6>
                              </div>
                              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="{{ url('remove_cart',$cart->id) }}" class="text-muted"><i class="fa-solid fa-trash"></i></a>
                              </div>
                            </div>

                            <hr class="my-4">
                            <!--End Product Section-->
                        <?php $totalprice=$totalprice + $cart->price ?>
                            @endforeach





                            <div class="pt-5">
                              <h6 class="mb-0"><a href="{{ url('/product/printgen') }}" class="text-body"><i
                                    class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                            </div>
                          </div>
                        </div>



                        <div class="col-lg-4 bg-grey">
                          <div class="p-5">
                            <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                            <hr class="my-4">



                            <h5 class="text-uppercase mb-3">Shipping</h5>

                            <hr class="my-4">

                            <div class="d-flex justify-content-between mb-5">
                              <h5 class="text-uppercase">Total price</h5>
                              <h5>€ {{ $totalprice }}</h5>
                            </div>

                            <a href="{{ url('/check_out') }}" type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn- btn-primary block btn-lg"
                            data-mdb-ripple-color="dark">Proceed to Buy</a>
                            {{-- <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-block btn-lg"
                              data-mdb-ripple-color="dark">Proceed to Buy</button> --}}

                              {{-- <a class="btn btn-outline-dark mt-auto" href="{{ url('checkout') }}" style=" font-size: 14px; margin-left: 15%; width: 60%">View Product</a> --}}



                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          @include('home.footer')
        </div>
        </section>


    </main>

    <!-- fixed element -->
    <button id="UpBtn"><i class="fa-solid fa-arrow-up"></i></button>


    <script src="home/js/bootstrap.bundle.min.js"></script>
    <script src="home/js/index.js"></script>
</body>

</html>
