<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
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
                            <h2>Add New Product</h2>
                        </div>
                        <div class="product-content">
                            <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Product Title</label>
                                    <input id="inputText3" type="text" class="form-control" name="title"
                                        placeholder="Write Product Title" style="height: 60%; font-size: 20px;">
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Product
                                        Description</label>
                                    <input id="inputText3" type="text" class="form-control" name="description"
                                        placeholder="Write Product Description" style="height: 60%; font-size: 20px;">
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Product
                                        Price</label>
                                    <input id="inputText3" type="number" class="form-control" name="price"
                                        placeholder="Write Product Price" style="height: 60%; font-size: 20px;">
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Product
                                        Discount</label>
                                    <input id="inputText3" type="number" class="form-control" name="discount_price"
                                        placeholder="Write Product Discount" style="height: 60%; font-size: 20px;"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Product
                                        Quantity</label>
                                    <input id="inputText3" type="number" class="form-control" min="0"
                                        name="quantity" placeholder="Write Product Quantity"
                                        style="height: 60%; font-size: 20px;">
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Product
                                        Category</label>
                                    <select class="form-control" name="category" style="height: 60%; font-size: 20px;">
                                        <option value="" selected="">Select Category</option>
                                        @foreach ($category as $category)
                                            <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <label for="inputText3" class="col-form-label" style="font-size: 17px;">Product
                                    Image</label>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" name="image">
                                    <label class="custom-file-label" for="customFile">Upload Image</label>
                                </div>


                                <input type="submit" value="Add Product" class="btn btn-primary"
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
