<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">aquAPARRIculture</h1>
            
        </a>
         <!-- nav ng agri-->
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home<br></a></li>
                <li><a href="{{ url('guest/fruits') }}" class="{{ request()->is('/') ? 'active' : '' }}">Fruits</a></li>
                <li><a href="{{ url('guest/vegetables') }}"
                        class="{{ request()->is('/') ? 'active' : '' }}">Vegetables</a></li>
                <li> <a href="{{ url('guest/equipments') }}" class="{{ request()->is('/') ? 'active' : '' }}">Equipments</a></li>
                       <!-- nav ng fisheries -->
                <li> <a href="{{ url('guest/aquipments') }}"
                        class="{{ request()->is('/') ? 'active' : '' }}">Aqua-Equipments</a></li>
                <li> <a href="{{ url('guest/fisheries') }}" class="{{ request()->is('/') ? 'active' : '' }}">Fish</a>
                </li>
                <li> <a href="{{ url('guest/about') }}" class="{{ request()->is('/') ? 'active' : '' }}">About</a>
                </li>
                <li> <a href="{{ url('guest/contact') }}" class="{{ request()->is('/') ? 'active' : '' }}">Contact</a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>


    </div>
</header>
