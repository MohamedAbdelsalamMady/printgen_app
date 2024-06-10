<!DOCTYPE html>
<html lang="en">

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
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('home/images/services (1).jpg')">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>AI</h2>
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>AI</li>
                </ol>
            </div>
        </div>

        <!-- Separate Container for AI Image Editor -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-4">AI Image Generator and Editor</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('generate.image') }}" method="POST" class="mb-4">
                        @csrf
                        <div class="mb-3">
                            <label for="text" class="form-label">Enter text to generate image:</label>
                            <input type="text" id="text" name="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="image_generator_version" class="form-label">Version:</label>
                            <select id="image_generator_version" name="image_generator_version" class="form-select">
                                <option value="standard">Standard</option>
                                <option value="hd">HD</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Generate Image</button>
                    </form>

                    <form action="{{ route('edit.image') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image:</label>
                            <input type="file" id="image" name="image" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary mb-5">Edit Image</button>
                    </form>
                </div>

                <div class="col-md-6">
                    @if(isset($image_url))
                        <h3 class="mt-4">Processed Image:</h3>
                        <img src="{{ $image_url }}" alt="Processed Image" class="img-fluid">
                        <a href="{{ route('process.order.form', ['id' => $order_id]) }}" class="btn btn-success mt-3">Process Order</a>
                    @endif
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
