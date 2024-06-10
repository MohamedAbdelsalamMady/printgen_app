<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">

                    <li class="nav-divider">
                        Menu
                    </li>
                    <a href="{{ url('printgen') }}">
                        <li class="nav-link active"> <i class="fa fa-fw fa-user-circle"></i>Admin Home Page</li>
                    </a>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-2" aria-controls="submenu-2">
                            <i class="fa fa-fw fa-rocket"></i>Products</a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/show_product') }}"> Show Products
                                        <span class="badge badge-secondary"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/view_product') }}">Add Products <span class="badge badge-secondary"></span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">


                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('view_category') }}"><i
                                        class="fas fa-fw fa-chart-pie"></i>Category</a>
                            </li>

                        </ul>

                    </li>




                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-6" aria-controls="submenu-6"><i
                                class="fab fa-fw fa-wpforms"></i>Emails</a>
                        <div id="submenu-6" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('all_messages')}}">View Emails</a>
                                </li>


                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-5" aria-controls="submenu-5"><i
                                class="fas fa-fw fa-table"></i>Orders</a>
                        <div id="submenu-5" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.orders.index') }}">Show Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.ai_orders.index') }}">Show AI Orders</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-divider">
                        Others
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-3" aria-controls="submenu-3">
                            <i class="fa fa-fw fa-rocket"></i>Employees</a>
                        <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/show_employee') }}"> Show Employee
                                        <span class="badge badge-secondary"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/add_new_employee') }}">Add Employee <span class="badge badge-secondary"></span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">


                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('view_department') }}"><i
                                        class="fas fa-fw fa-chart-pie"></i>Department</a>
                            </li>

                        </ul>

                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
