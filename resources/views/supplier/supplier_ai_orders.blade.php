<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <base href="/public">
    @include('admin.css')
    <title>PrintGen - Categories</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @include('supplier.navbar')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('supplier.sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">


                    <!-- pageheader  -->
                    <!-- ============================================================== -->

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">PrintGen Supplier Dashboard </h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"
                                                    class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">PrintGen Admin
                                                Dashboard</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================== -->
                    <!-- end pageheader  -->







                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light">
                                <tr class="border-0">
                                    <th>ID</th>
                                    <th>Text</th>
                                    <th>Image URL</th>
                                    <th>Width</th>
                                    <th>Height</th>
                                    <th>Size</th>
                                    <th>Category</th>
                                    <th>Version</th>
                                    <th>Price</th>
                                    <th>Order Total</th>
                                    <th>Status</th>
                                    <th>Order Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($aiOrders as $aiOrder)
                                    <tr>
                                        <td>{{ $aiOrder->id }}</td>
                                        <td>{{ $aiOrder->text }}</td>
                                        <td>{{ $aiOrder->image_url }}</td>
                                        <td>{{ $aiOrder->width }}</td>
                                        <td>{{ $aiOrder->height }}</td>
                                        <td>{{ $aiOrder->size }}</td>
                                        <td>{{ $aiOrder->category }}</td>
                                        <td>{{ $aiOrder->version }}</td>
                                        <td>{{ $aiOrder->price }}</td>
                                        <td>{{ $aiOrder->orderTotal }}</td>
                                        <td>{{ $aiOrder->status }}</td>
                                        <td>{{ $aiOrder->order_status }}</td>
                                        <td>
                                            <a href="{{ route('supplier.ai_orders.edit', $aiOrder->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('supplier.ai_orders.destroy', $aiOrder->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


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
