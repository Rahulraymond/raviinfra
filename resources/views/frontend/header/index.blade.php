<!-- =========================
        Header
    =========================== -->
<header class="header header-layout2" id="home">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('../../assets/img/kshpl_logo.png') }}" class="logo-dark" alt="logo" />
            </a>
            <div class="header-topbar d-none d-lg-block">
                <div class="d-flex flex-wrap">
                    <ul class="header-topbar__contact d-flex flex-wrap list-unstyled mb-0">
                        <li>
                            <i class="icon-phone1"></i>
                            <div>
                                <span>Call Us:</span><strong><a href="tel:0294-2482238">0294-2482238</a></strong>
                            </div>
                        </li>
                        <li>
                            <i class="icon-envelope1"></i>
                            <div>
                                <span>Email Us:</span><strong><a
                                        href="mailto:vahpl@raviinfra.com">kshpl@raviinfra.com</a></strong>
                            </div>
                        </li>
                    </ul>
                    <button type="button" class="btn btn__secondary header__btn" data-toggle="modal"
                        data-target="#formplay">
                        <span>Grievances</span>
                    </button>
                </div>
            </div>
            <!-- /.header-topbar -->
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
        </div>
        <!-- /.container -->
        <div class="navbar__bottom sticky-navbar">
            <div class="container">
                <div class="collapse navbar-collapse" id="mainNavigation">
                    <ul class="navbar-nav">
                        <li class="nav__item">
                            <a  href="{{Route::currentRouteName() == 'show.progres' ? route('home') : "#home"}}" class="nav__item-link">Home</a>
                        </li>
                        @if (Route::currentRouteName() == 'show.progres')
                            <!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="{{route('show.progres')}}" class="nav__item-link">Progress</a>
                            </li>
                        @else
                            <!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="#about" class="nav__item-link">About</a>
                            </li>
                            <li class="nav__item">
                                <a href="{{route('show.progres')}}" class="nav__item-link">Progress</a>
                            </li>
                            <li class="nav__item">
                                <a href="#gallery" class="nav__item-link">Team</a>
                            </li>
                            <li class="nav__item">
                                <a href="#gallery" class="nav__item-link">Gallery</a>
                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="#contact" class="nav__item-link">Contact</a>
                            </li>
                            <!-- /.nav-item -->
                        @endif
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-collapse -->
                <div class="header-actions d-none d-lg-block">
                    <ul class="header-actions__list list-unstyled d-flex align-items-center mb-0">
                        <li>
                            <span class="project-nm">Project Location: Kshipra</span>
                        </li>
                    </ul>
                </div>
                <!-- /.header-actions -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.navbar-bottom -->
    </nav>
    <!-- /.navabr -->
</header>
<!-- /.Header -->
