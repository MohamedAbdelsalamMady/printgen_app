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
                                    <th>Product Title</th>
                                    <th>User</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Size</th>
                                    <th>Street Name</th>
                                    <th>Build no/name</th>
                                    <th>Address</th>
                                    <th>Color</th>
                                    <th>Total Price</th>
                                    <th>Order Status</th>
                                    <th>Payment Status</th>
                                    <th>Delivery Status</th>
                                    <th>Delivery Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->product_title }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->quantity }}</td>
                                        <td>{{ $order->price }}</td>
                                        <td>{{ $order->size }}</td>
                                        <td>{{ $order->street_name }}</td>
                                        <td>{{ $order->building_name_no}}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>{{ $order->color }}</td>
                                        <td>{{ $order->total_price }}</td>
                                        <td>{{ $order->order_status }}</td>
                                        <td>{{ $order->payment_status }}</td>
                                        <td>{{ $order->delivery_status }}</td>
                                        <td>{{ $order->delivery_date }}</td>
                                        <td>
                                            <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" style="display:inline;">
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
