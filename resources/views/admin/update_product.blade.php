<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <base href="/public">
    @include('admin.css')
    <title>PrintGen - Admin Dashboard</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @include('admin.navbar')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('admin.sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">PrintGen Admin Dashboard </h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"
                                                    class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">View Product</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="product-section">
                        @if (session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                            </div>
                        @endif
                        <div class="product-head">
                            <h2>Update Product</h2>
                        </div>
                        <div class="product-content">
                            <form action="{{ url('/update_product_confirm',$product->id) }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Product Title</label>
                                    <input id="inputText3" type="text" class="form-control" name="title" value="{{ $product->title }}"
                                        placeholder="Write Product Title" style="height: 60%; font-size: 20px;">
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Product
                                        Description</label>
                                    <input id="inputText3" type="text" class="form-control" name="description" value="{{ $product->description }}"
                                        placeholder="Write Product Description" style="height: 60%; font-size: 20px;">
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Product
                                        Price</label>
                                    <input id="inputText3" type="number" class="form-control" name="price" value="{{ $product->price }}"
                                        placeholder="Write Product Price" style="height: 60%; font-size: 20px;">
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Product
                                        Discount</label>
                                    <input id="inputText3" type="number" class="form-control" name="discount_price" value="{{ $product->discount_price }}"
                                        placeholder="Write Product Discount" style="height: 60%; font-size: 20px;"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Product
                                        Quantity</label>
                                    <input id="inputText3" type="number" class="form-control" min="0" value="{{ $product->quantity }}"
                                        name="quantity" placeholder="Write Product Quantity"
                                        style="height: 60%; font-size: 20px;">
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Product
                                        Category</label>
                                    <select class="form-control" name="category" style="height: 60%; font-size: 20px;">
                                        <option value="{{ $product->category }}" selected="">{{ $product->category }}</option>
                                    @foreach ($category as $category)
                                            <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                                        @endforeach

                                    </select>
                                </div>


                                <div class="current-image">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">
                                    Current Product Image</label>
                                        <img src="/product/{{ $product->image }}" alt="" srcset="" style="width: 20%">
                                </div>


                                <div class="change-image">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">
                                    Change Product Image</label>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" name="image">
                                    <label class="custom-file-label" for="customFile">Upload Image</label>
                                </div>
                                </div>





                                <input type="submit" value="Update Product" class="btn btn-primary"
                                    style="font-size: 15px; border-radius: 10px">

                            </form>
                        </div>
                    </div>



                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('admin.footer')
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    @include('admin.script')
</body>

</html>
