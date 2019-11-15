<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Inventory</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/images/logo.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="/home" class="d-block">Dr. MAC</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('inventory.create')}}" class="nav-link">
                        <i class="fas fa-plus nav-icon"></i>
                        <p>Add Inventory</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('inventory.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Current Inventory
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="fas fa-search nav-icon"></i>                        <p>
                            Search Inventory
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/search?type=barcode" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Scan Barcode</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/search?type=device" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>By Device Type</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/search?type=cpu" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>by CPU</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/search?type=gpu" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>by GPU</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/search?type=ram" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>by RAM</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/search?type=storage" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>by Storage Space</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/search?type=screen" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>by Screen Size</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/search?type=manufacturer" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>by Manufacturer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/search?type=usage" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>by Usage</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-pen"></i>
                        <p>
                            Categories
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('device.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Device Type</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('cpu.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>CPU</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('gpu.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>GPU</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('ram.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>RAM</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('storage.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Storage Space</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('screen.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Screen Size</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('manufacturer.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manufacturer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('usage.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Usage</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('barcodes.index')}}" class="nav-link">
                        <i class="fas fa-barcode nav-icon"></i>
                        <p>Barcodes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('billing.index')}}" class="nav-link">
                        <i class="fab fa-500px nav-icon"></i>
                        <p>Generate Bill</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('supplier.index')}}" class="nav-link">
                        <i class="fas fa-people-carry nav-icon"></i>
                        <p>Suppliers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('earnings.index')}}" class="nav-link">
                        <i class="fas fa-money-check-alt nav-icon"></i>
                        <p>Earnings</p>
                    </a>
                </li>






            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>