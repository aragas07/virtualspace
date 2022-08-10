<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-angle-down mr-2"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"></a>
                        <p></p>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <form action="database/auth.php" method="post">
                    <input type="submit" value="Log Out" name="logout" class="logout">
                </form>
            </div>
        </li>
    </ul>
</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <a href="" class="brand-link">
        <img src="img/dorsu.png" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Alumni Tracer</span>
    </a>

    <!-- Sidebar -->
    <!-- Sidebar user (optional) -->
    <div class="sidebar">
        <div class="user-panel mt-3 mb-3 d-flex">
            @foreach($user as $us)
                <div class="image">
                    <img src="@if($us->profile == '') img/businessperson.png @else {{$us->profile}} @endif" class="img-circle elevation-2 spi" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="fontweight d-block">{{auth()->user()->name}}</a>
                    <a href="#" id="userid">{{$us->id}}</a>
                </div>
            @endforeach
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- <li class="nav-item  has-treeview">
                    <a href="#information" class="nav-link"><i class="nav-icon fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li> -->
                <li class="nav-item has-treeview">
                    <a href="alumni" class="@if($active == 'job') active @endif nav-link"><i class="nav-icon fa fa-briefcase"></i>
                        <p>Job</p>
                    </a>
                </li>
                <li class="nav-item  has-treeview">
                    <a href="alumniinfo" class="@if($active == 'info') active @endif nav-link"><i class="nav-icon fa fa-user"></i>
                        <p>Personal Information</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>