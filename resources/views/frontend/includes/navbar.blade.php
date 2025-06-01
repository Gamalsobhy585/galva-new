<!-- Header -->
<header id="site-header" class="header-front-page style-5">
    <div id="site-header-inner" class="container">
        <div class="wrap-inner">

            <nav id="main-nav" class="main-nav" style="left: 10px !important;">
                <ul class="menu">

                    <a href="#" class="openbtn" onclick="openNav()">
                        <img src="{{ asset('assets/website_images/menu_icon.svg') }}" width="86" height="30"
                             alt="steel galvanizing" data-retina="{{ asset('assets/website_images/menu_icon.svg') }}">
                    </a>
                </ul>

            </nav>

            <div id="site-logo" class="clearfix">
                <div id="site-logo-inner">
                    <a href="{{ route('homepageIndex') }}" title="steel galvanizing" rel="home" class="main-logo">

                        <img src="{{ asset('assets/website_images/logo-galva-2.png') }}" width="130" height="10"
                             alt="steel galvanizing"
                             data-retina="{{ asset('assets/website_images/logo-galva-2.png') }}">
                    </a>
                </div>
            </div>

            <div class="mobile-button"><span></span></div>

            <nav id="main-nav" class="main-nav">
                <ul class="menu">
                    <a class="wprt-button outline small very-light rounded-30px margin-top-5" href="/contact-us">Contact Us</a>


                    <li class="menu-item menu-item-has-children"><a href="#">EN</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#">AR</a></li>
                        </ul>
                    </li>
                </ul>
        
            </nav>
            <div id="header-search">
                <a class="header-search-icon" href="#"><span class="fa fa-search"></span></a>

                <form role="search" method="get" class="header-search-form" action="#">
                    <input type="text" value="" name="s" class="header-search-field"
                           placeholder="Type and hit enter...">
                    <button type="submit" class="header-search-submit" title="Search">Search</button>
                    <input type="hidden" name="post_type" value="post">
                </form>
            </div>

        </div>
    </div>


</header>

<span class="custom-border-bottom"></span>

