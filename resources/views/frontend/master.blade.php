<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta charset="utf-8">

    <title>EEC Galva - @yield('website_title')</title>


    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('css/header-search.css') }}">


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    @yield('website_styles')

    @include('frontend.includes.header')
</head>


<body class="front-page no-sidebar site-layout-full-width header-style-5 menu-has-search menu-has-cart header-sticky">


<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">

        <div id="site-header-wrap">
            @include('frontend.includes.navbar')
        </div><!-- /#site-header-wrap -->


    @yield('website_slider')


    <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                        <div class="page-content">


                            @yield('website_content')


                        </div><!-- /.page-content -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <div id="footer-widgets" class="container style-1">
                @include('frontend.includes.footer')
            </div>
        </footer>

        <!-- Bottom -->
        <div id="bottom" class="clearfix style-1">
            <div id="bottom-bar-inner" class="wprt-container">
                @include('frontend.includes.footer_below')
            </div>
        </div>

    </div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>


@yield('website_scripts')

@include('frontend.includes.scripts')

</body>
</html>


<div id="my-side-menu" class="side-menu">


    <div class="custom-side-menu">


        <div class="col-md-12">


            <div class="col-md-6">
                <a href="{{ route('homepageIndex') }}" class="menu-img">
                    <img src="{{ asset('assets/website_images/galva.png') }}" alt="" width="115"
                         style="margin-left: -12px;">

                </a>
            </div>


            <div class="col-md-6 row" style="float: right;">


                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                    <img src="{{ asset('assets/website_images/x-icon.svg') }}" alt="" width="20">
                </a>


                <a class="header-search-icon right-menu-icon-div" href="#">
                    <img src="{{ asset('assets/website_images/search-icon.svg') }}" alt="" width="20">
                </a>


                <div id="header-search" class="">


                    <form role="search" method="get" class="header-search-form custom-search-form" action="#"
                          style="display: none;">


                        <div class="input-group">


                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input type="text" value="" name="s" class="header-search-field custom-search-btn"
                                       placeholder="Search...">
                            </div>
                            <div class="col-md-1"></div>

                        </div>



                        <input type="hidden" name="post_type" value="post">
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <a><p class="side-menu-p-font">About Us </p></a>


            <button class="side-menu-p-font dropdown-btn">Our Services
                <i class="fa fa-caret-down"></i>
            </button>


            <div class="dropdown-container">
                @foreach ($services as $service)
                    <a target="_blank" href="{{ route('services.show', $service->id) }}">

                        <p class="side-menu-p-font2">
                            <i class="fa fa-angle-right text-success"></i>
                            {{ $service->title_en }}
                        </p>
                    </a>
                @endforeach
            </div>



            <a><p class="side-menu-p-font">News</p></a>
            <a><p class="side-menu-p-font">Careers</p></a>
            <a><p class="side-menu-p-font">Our Management</p></a>
            <a><p class="side-menu-p-font">Our Responsibility</p></a>
        </div>
    </div>
</div>



<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }

</script>
