<nav class="navbar navbar-expand-lg bb-1 navbar-light bg-white fixed-top" id="mainNav">

    <!-- Start Header -->
    <header class="header-logo bg-white bb-1 br-1">
        <a class="nav-link text-center mr-lg-3 hidden-xs" id="sidenavToggler"><i class="ti-align-left"></i></a>
        <a class="gredient-cl navbar-brand" href="{{url('/vendor/home')}}">Admin page</a>
    </header>
    <!-- End Header -->

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-align-left"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

        <!-- =============== Start Side Menu ============== -->
        <div class="navbar-side">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

                <li class="nav-item @yield('dashboard')" data-toggle="tooltip" data-placement="right" title="Projects">
                    <a class="nav-link" href="{{ url('/admin/home') }}">
                        <i class="ti i-cl-2 ti-dashboard"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>

                <!-- Master-->
                <li class="nav-item @yield('master')" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Dashboard" data-parent="#exampleAccordion">
                        <i class="ti i-cl-12 ti-layers-alt"></i>
                        <span class="nav-link-text">Categories</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="Dashboard">
                        <li>
                            <a href="{{ url('/admin/category/add') }}">Add Category</a>
                        </li>
                         <li>
                            <a href="{{ url('/admin/category/view') }}">View category</a>
                        </li>

                    </ul>
                </li>
                <!-- End Master -->

                <!-- Start Advance Apps -->
               {{--  <li class="nav-item @yield('vendor')" data-toggle="tooltip" data-placement="right" title="Advance Apps">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#advance-apps" data-parent="#exampleAccordion">
                        <i class="ti i-cl-9 ti ti-user"></i>
                        <span class="nav-link-text">Vendor</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="advance-apps">

                        <li>
                            <a href="{{ url('/admin/vendor/add') }}">Add Vendor</a>
                        </li>

                        <li>
                            <a href="{{ url('/admin/vendor/approve') }}">Approve Vendor <span class="a-nav__link-badge a-badge a-badge--pink"></span></a>
                        </li>

                        <li>
                            <a href="{{ url('/admin/vendor/') }}">View Vendor</a>
                        </li>
                        
                    </ul>

                </li> --}}
                <!-- End Advance Apps -->

                <!-- Start projects -->
            {{--     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Projects">
                    <a class="nav-link" href="#">
                        <i class="ti i-cl-2 ti-layers"></i>
                        <span class="nav-link-text">Projects</span>
                    </a>
                </li> --}}
                <!-- End Projects -->

            </ul>
        </div>
        <!-- =============== End Side Menu ============== -->

        <!-- =============== Search Bar ============== -->
        <!-- <ul class="navbar-nav ml-left">
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="button">
							  <i class="ti-search"></i>
							</button>
						</span>
                        <input class="form-control" type="text" placeholder="Type In TO Search">
                    </div>
                </form>
            </li>
        </ul> -->
        <!-- =============== End Search Bar ============== -->

        <!-- =============== Header Rightside Menu ============== -->
        @include('admin.layout.user_nav')
        <!-- =============== End Header Rightside Menu ============== -->
    </div>
</nav>