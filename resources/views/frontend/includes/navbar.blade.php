{{-- resources/views/partials/header.blade.php --}}

<!-- Header -->
<header id="site-header" class="header-front-page style-5">
    <div id="site-header-inner" class="container">
        <div class="wrap-inner d-flex justify-content-between align-items-center">

            <nav id="main-nav" class="main-nav" style="left: 10px !important;">
                <ul class="menu ">
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
                    <div class="menu  ">
                        <ul class="row" >
                            <li class="col-md-5">
                                <a class="wprt-button outline small very-light rounded-30px margin-top-5" href="/contact">Contact Us</a>
                            </li>
                            <li class="col-md-2  lang-button" >
                                <a href="#">EN</a>
                                <ul class="sub-menu position-absolute bg-white">
                                <li class="menu-item"><a href="#">AR</a></li>
                                </ul>
                            </li>
                            <li class="col-md-5 search-bar ">
                                    <input type="text" name="s" class="header-search-field" placeholder="Search..." />
                                  
                                    <input type="hidden" name="post_type" value="post" />
                            </li>
                        </ul>


                    </div>
                </nav>

    
              

        </div>
    </div>
</header>

<span class="custom-border-bottom"></span>