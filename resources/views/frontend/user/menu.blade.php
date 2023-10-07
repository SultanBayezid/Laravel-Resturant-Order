<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f8f9fa;">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav flex-column" style="padding-left: 20px;">
            <li class="nav-item">
                <a class="nav-link{{ request()->routeIs('user.profile') ? ' active' : '' }}"
                    href="{{ route('user.profile') }}"
                    style="font-family: 'lato', sans-serif;{{ request()->routeIs('user.profile') ? ' font-size: 16px; font-weight: bold; color: #1a8917;' : ' font-size: 14px; font-weight: normal; color: #000;' }}">
                    <i class="ti ti-user" style="margin-right: 10px;"></i> My Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ request()->routeIs('user.order_history') ? ' active' : '' }}"
                    href="{{ route('user.order_history') }}"
                    style="font-family: 'lato', sans-serif;{{ request()->routeIs('user.order_history') ? ' font-size: 16px; font-weight: bold; color: #1a8917;' : ' font-size: 14px; font-weight: normal; color: #000;' }}">
                    <i class="ti ti-file" style="margin-right: 10px;"></i> Order History
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ request()->routeIs('user.review') ? ' active' : '' }}"
                    href="{{ route('user.review') }}"
                    style="font-family: 'lato', sans-serif;{{ request()->routeIs('user.review') ? ' font-size: 16px; font-weight: bold; color: #1a8917;' : ' font-size: 14px; font-weight: normal; color: #000;' }}">
                    <i class="ti ti-star" style="margin-right: 10px;"></i> Reviews
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ request()->routeIs('logout') ? ' active' : '' }}"
                    href="{{ route('logout') }}"
                    style="font-family: 'lato', sans-serif;{{ request()->routeIs('logout') ? ' font-size: 16px; font-weight: bold; color: #1a8917;' : ' font-size: 14px; font-weight: normal; color: #000;' }}">
                    <i class="ti ti-lock" style="margin-right: 10px;"></i> Log Out
                </a>
            </li>
        </ul>
    </div>
</nav>
