<header id="tt-header" class="tt-header-alter tt-header-scroll tt-header-filled">
    <div class="tt-header-inner tt-noise">

        <div class="tt-header-col tt-header-col-left">

            <div class="tt-logo">
                <a href="{{ route('welcome') }}" class="tt-magnetic-item">
                    <img src="{{ asset("images/settings/$setting->website_logo_dark") }}" class="tt-logo-light"
                        alt="Logo">
                    <!-- logo light -->
                    <img src="{{ asset("images/settings/$setting->website_logo_dark") }}" class="tt-logo-dark"
                        alt="Logo"> <!-- logo dark -->
                </a>
            </div>
            <!-- End logo -->

        </div> <!-- /.tt-header-col -->

        <div class="tt-header-col tt-header-col-center">
            <nav class="tt-main-menu tt-m-menu-center">
                <div class="tt-main-menu-holder">
                    <div class="tt-main-menu-inner">
                        <div class="tt-main-menu-content">

                            <!-- Begin main menu list -->
                            <ul class="tt-main-menu-list">

                                <!-- Begin submenu (submenu master)
                                    ==================================== -->
                                <li class="tt-submenu-wrap tt-submenu-master active">
                                    <div class="tt-submenu-trigger">
                                        <a href="{{ route('welcome') }}">Home</a>
                                    </div> <!-- /.tt-submenu-trigger -->

                                </li>
                                <!-- End submenu (sub-master) -->

                                <!-- Begin submenu (submenu master)
                                ==================================== -->
                                <li class="tt-submenu-wrap tt-submenu-master">
                                    <div class="tt-submenu-trigger">
                                        <a href="{{route("aboutme")}}">About</a>
                                    </div> <!-- /.tt-submenu-trigger -->

                                </li>
                                <!-- End submenu (sub-master) -->

                                <li><a href="">Work Experience</a></li>

                                <!-- Begin submenu (submenu master)
                                ==================================== -->
                                <li class="tt-submenu-wrap tt-submenu-master">
                                    <div class="tt-submenu-trigger">
                                        <a href="{{route("medias")}}">Media</a>
                                    </div> <!-- /.tt-submenu-trigger -->

                                </li>
                                <!-- End submenu (sub-master) -->

                                <!-- Begin submenu (submenu master)
                                         ==================================== -->
                                <li class="tt-submenu-wrap tt-submenu-master">
                                    <div class="tt-submenu-trigger">
                                        <a href="{{route("contactus")}}">Contact</a>
                                    </div> <!-- /.tt-submenu-trigger -->

                                </li>
                                <!-- End submenu (sub-master) -->

                                <!-- Begin submenu (submenu master)
                                    ==================================== -->
                                {{-- <li class="tt-submenu-wrap tt-submenu-master">
                                    <div class="tt-submenu-trigger">
                                        @auth
                                            <a href="{{ url('/home') }}">Dashboard</a>
                                        @else
                                            <a href="{{ route('login') }}">Login</a>
                                        </div>
                                        @endif

                                    </li> --}}
                                    <!-- End submenu (sub-master) -->

                                </ul>
                                <!-- End main menu list -->

                            </div> <!-- /.tt-main-menu-content -->
                        </div> <!-- /.tt-main-menu-inner -->
                    </div> <!-- /.tt-main-menu-holder -->

                </nav>
                <!-- End main menu -->

            </div>
            <div class="tt-header-col tt-header-col-right">

                <!-- Begin mobile menu toggle button (for "tt-main-menu") -->
                <div id="tt-m-menu-toggle-btn-wrap">
                    <div class="tt-m-menu-toggle-btn-text">
                        <span class="tt-m-menu-text-menu">Menu</span>
                        <span class="tt-m-menu-text-close">Close</span>
                    </div>
                    <div class="tt-m-menu-toggle-btn-holder">
                        <a href="#" class="tt-m-menu-toggle-btn"><span></span></a>
                    </div>
                </div>
                <!-- End mobile menu toggle button -->

                <!-- Begin header button (hidden on small screens!) -->
                <a href="{{route("contactus")}}" class="tt-btn tt-btn-secondary hide-from-xlg tt-magnetic-item">
                    <span data-hover="Contact">Contact</span>
                </a>
                <!-- End header button -->

                <!-- Begin style switch button -->
                <div class="tt-style-switch">
                    <div class="tt-style-switch-inner tt-magnetic-item">
                        <div class="tt-stsw-light">
                            <i class="fas fa-sun"></i>
                        </div>
                        <div class="tt-stsw-dark">
                            <i class="fas fa-moon"></i>
                        </div>
                    </div>
                </div>
                <!-- End style switch button -->

            </div> <!-- /.header-col -->
        </div> <!-- /.header-inner -->
    </header>
    