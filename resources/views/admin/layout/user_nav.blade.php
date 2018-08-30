<ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle mr-lg-0 user-img a-topbar__nav a-nav" id="userDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ url('assets\dist\img\user-10.jpg') }}" alt="user-img" width="36" class="img-circle">
            <b class="f-size-17">Admin</b>
        </a>
        <ul class="dropdown-menu dropdown-user animated flipInX" aria-labelledby="userDropdown">
            <li class="dropdown-header green-bg">
                <div class="header-user-pic">
                    <img src="{{ url('assets\dist\img\user-10.jpg') }}" alt="user-img" width="36" class="img-circle">
                </div>
                <div class="header-user-det">
                    <span class="a-dropdown__header-title">Admin</span>
                </div>
            </li>
            <li><a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a></li>
            {{--<li><a class="dropdown-item" href="#"><i class="ti-wallet"></i> My Balance</a></li>--}}
            {{--<li><a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a></li>--}}
            <li><a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a></li>
            
            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </ul>
    </li>
</ul>