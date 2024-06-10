<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <base href="/public">
    @include('admin.css');
    <title>High Tech Egypt - Update Employee</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            @include('admin.navbar')
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                @include('admin.sidebar')
            </div>
        </div>
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
                                <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ url('admin.index') }}" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Update Employee</li>
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
                            <h2>Update Employee</h2>
                        </div>
                        <div class="product-content">
                            <form action="{{ url('/update_employee_confirm',$employee->id) }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Employee Name</label>
                                    <input id="inputText3" type="text" class="form-control" name="employee_name" value="{{ $employee->employee_name }}"
                                        placeholder="Hossam" style="height: 60%; font-size: 20px;">
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Employee Email</label>
                                    <input id="inputText3" type="text" class="form-control" name="email" value="{{ $employee->email }}"
                                        placeholder="hossam213@gmail.com" style="height: 60%; font-size: 20px;">
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Employee Phone</label>
                                    <input id="inputText3" type="text" class="form-control" name="phone" value="{{ $employee->phone }}"
                                        placeholder="012345678" style="height: 60%; font-size: 20px;">
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Employee Position</label>
                                    <input id="inputText3" type="text" class="form-control" name="position" value="{{ $employee->position }}"
                                        placeholder="Senior" style="height: 60%; font-size: 20px;">
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Salary</label>
                                    <input id="inputText3" type="number" class="form-control" name="salary" value="{{ $employee->salary }}"
                                        placeholder="5000" style="height: 60%; font-size: 20px;">
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Years of Experience</label>
                                    <input id="inputText3" type="number" class="form-control" name="years_of_exp" value="{{ $employee->years_of_exp }}"
                                        placeholder="5" style="height: 60%; font-size: 20px;">
                                </div>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Date of Birth</label>
                                    <input id="inputText3" type="date" class="form-control" name="date_of_birth" value="{{ $employee->date_of_birth }}
                                        placeholder="3/5/1995" style="height: 60%; font-size: 20px;">
                                </div>








                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">Department</label>
                                    <select class="form-control" name="category" style="height: 60%; font-size: 20px;">
                                    @foreach ($department as $department)
                                            <option value="{{ $department->department_name }}">{{ $department->department_name }}</option>
                                        @endforeach

                                    </select>
                                </div>


                                <div class="current-image">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">
                                    Current Employee Image</label>
                                        <img src="/employee/{{ $employee->image }}" alt="" srcset="" style="width: 20%">
                                </div>


                                <div class="change-image">
                                    <label for="inputText3" class="col-form-label" style="font-size: 17px;">
                                    Change Employee Image</label>
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
    <!-- jquery 3.3.1 -->
    @include('admin.script')
</body>

</html>





