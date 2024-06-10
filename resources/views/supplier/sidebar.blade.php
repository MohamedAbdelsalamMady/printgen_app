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
                    <a href="index.html">
                        <li class="nav-link">Supplier Home Page</li>
                    </a>




                    <li class="nav-item">


                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('supplier.orders.index') }}"><i
                                        class="fas fa-fw fa-chart-pie"></i>Orders</a>
                            </li>

                        </ul>


                    </li>

                    <li class="nav-item">


                        <ul class="nav flex-column">
                            <li class="nav-item">
            <a class="nav-link" href="{{ route('supplier.ai_orders.index') }}"><i
                    class="fas fa-fw fa-chart-pie"></i>AI Orders</a>
        </li>

                        </ul>


                    </li>







                </ul>
            </div>
        </nav>
    </div>
</div>
