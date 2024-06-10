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
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('home/images/services\ \(1\).jpg')">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>{{ $product->title }}</h2>
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/product/printgen') }}">Products</a></li>
                    <li>{{ $product->title }}</li>
                </ol>
            </div>
        </div>

        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="product/{{ $product->image }}"
                            alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BST-498</div>
                        <h1 class="display-5 fw-bolder">{{ $product->title }}</h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through">{{ $product->discount_price }}</span>
                            <span>{{ $product->price }}</span>
                        </div>
                        <p class="lead">{{ $product->description }}</p>
                        <h5 class="">Available Quantity: {{ $product->quantity }}</h5>


                        <div class="d-flex" >

                            <form action="{{ url('add_cart', $product->id) }}" method="post">
                                @csrf

                                <div class="row">
                                    <div class="col">
                                        <label for="inputState" class="form-label" >Size</label>
                                        <select id="inputState" class="form-select" name="size">
                                            <option selected>Choose...</option>
                                            <option value="small">Small</option>
                                            <option value="medium">Medium</option>
                                            <option value="large">Large</option>
                                            <option value="x-large">X-Large</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="inputState" class="form-label" >Quantity</label>
                                        <select id="inputState" class="form-select" name="quantity">
                                            <option selected>Choose...</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="inputState" class="form-label" >Color</label>
                                        <select id="inputState" class="form-select" name="color">
                                            <option selected>Choose...</option>
                                            <option value="white">White</option>
                                            <option value="black">Black</option>
                                        </select>
                                    </div>
                                </div>


                                <button class="btn btn-outline-dark flex-shrink-0" type="submit" style="margin-top: 10px">
                                    <i class="bi-cart-fill me-1"></i>
                                    Add to cart
                                </button>



                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View
                                        options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add
                                        to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute"
                                style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add
                                        to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add
                                        to cart</a></div>
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
