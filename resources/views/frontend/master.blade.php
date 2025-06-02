<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <title>EEC Galva - @yield('website_title')</title>

    <meta name="description" content="EEC Galval Contnet">
    <meta name="keywords" content=" galvanizing, steel galvanizing, galvanize steel, hot dip galvanizing">
    <meta name="author" content="eecegypt.com">

    <!-- Mobile Specific Metas -->
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


<!-- side menu -->
<div id="my-side-menu" class="side-menu">


    <div class="custom-side-menu">
        {{--        <ul class="nav nav-pills nav-sidebar flex-column">--}}
        {{--            <li class="nav-item">--}}
        {{--                <a href="#" class="nav-link">--}}
        {{--                    <p>test <i class="right fas fa-angle-left"></i></p>--}}
        {{--                </a>--}}

        {{--            </li>--}}
        {{--        </ul>--}}

        <div class="col-md-12">


            <div class="col-md-6">
                <a href="{{ route('homepageIndex') }}" class="menu-img">
                    <img src="{{ asset('assets/website_images/galva.png') }}" alt="" width="115"
                         style="margin-left: -12px;">

                </a>
            </div>


            <div class="col-md-6 row" style="float: right;">


                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                    {{--                    <span class="fa fa-close font-size-17"></span>--}}
                    <img src="{{ asset('assets/website_images/x-icon.svg') }}" alt="" width="20">
                </a>


                <a class="header-search-icon right-menu-icon-div" href="#">
                    {{--                        <span class="fa fa-search font-size-17"></span>--}}
                    <img src="{{ asset('assets/website_images/search-icon.svg') }}" alt="" width="20">
                </a>


                <div id="header-search" class="">


                    <form role="search" method="get" class="header-search-form custom-search-form" action="#"
                          style="display: none;">


                        <div class="input-group">
                            {{--                            <div class="hero-title">--}}
                            {{--                                <h1 style="margin-left: 11px;">SEARCH</h1>--}}
                            {{--                            </div>--}}


                            {{--                            <div class="input-group-prepend" style="margin-top: 22px; margin-left: 12px;">--}}
                            {{--                                <img src="{{ asset('assets/website_images/search-icon.svg') }}" alt="" width="20">--}}
                            {{--                            </div>--}}

                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input type="text" value="" name="s" class="header-search-field custom-search-btn"
                                       placeholder="Search...">
                            </div>
                            <div class="col-md-1"></div>

                        </div>


                        {{--                        <button type="submit" class="header-search-submit wprt-button rounded-30px"--}}
                        {{--                                title="Search">--}}
                        {{--                            SEARCH--}}
                        {{--                        </button>--}}
                        <input type="hidden" name="post_type" value="post">
                    </form>
                </div>
            </div>
            {{--            <span class="custom-border"></span>--}}
        </div>

        <div class="col-md-12">
            {{--    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>--}}
            <a><p class="side-menu-p-font">About Us </p></a>
            {{--        <a href="#"><p class="side-menu-p-font dropdown-btn">Our Services <i class="fa fa-chevron-right"></i></p></a>--}}


            <button class="side-menu-p-font dropdown-btn">Our Services
                <i class="fa fa-caret-down"></i>
            </button>


            <div class="dropdown-container">
                @foreach ($services as $service)
                    <a href="#">
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


{{--<div id="my-right-side-menu" class="right-side-menu">--}}


{{--    <div class="col-md-6 right-menu-div6">--}}

{{--        <div id="header-search">--}}
{{--            <a class="header-search-icon right-menu-icon-div" href="#"><span--}}
{{--                    class="fa fa-search font-size-17"></span></a>--}}

{{--            <form role="search" method="get" class="header-search-form custom-search-form" action="#"--}}
{{--                  style="display: none;">--}}
{{--                <input type="text" value="" name="s" class="header-search-field" placeholder="Search...">--}}
{{--                <button type="submit" class="header-search-submit wprt-button light rounded-30px" title="Search">--}}
{{--                    Search--}}
{{--                </button>--}}
{{--                <input type="hidden" name="post_type" value="post">--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="col-md-6 right-menu-div6">--}}
{{--        <a href="javascript:void(0)" class="closebtn right-menu-icon-div" onclick="closeNav()">--}}
{{--            <span class="fa fa-close font-size-17"></span>--}}
{{--        </a>--}}
{{--    </div>--}}


{{--</div>--}}


<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
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
