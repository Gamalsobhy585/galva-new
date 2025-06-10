<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta charset="utf-8">

    <title>EEC Galva - @yield('website_title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/all-styles.css') }}">


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    @yield('website_styles')


    @include('frontend.includes.header')
</head>
<body 
    class="front-page no-sidebar site-layout-full-width header-style-5 menu-has-search menu-has-cart header-sticky ">
    {{-- <body class="front-page no-sidebar site-layout-full-width header-style-5 menu-has-search menu-has-cart header-sticky"> --}}



<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">

        <div id="site-header-wrap">
            @include('frontend.includes.navbar')
        </div>


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




 <div id="my-side-menu" class="side-menu">
        <div class="custom-side-menu">
            <div class="col-md-12">
                <div class="col-md-6">
                    <a href="{{ route('homepageIndex') }}" class="menu-img">
                        <img loading="lazy" src="{{ asset('assets/website_images/galva.webp') }}" alt="" width="115" style="margin-left: -12px;">
                    </a>
                </div>
                <div class="col-md-6 row" style="float: right;">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                        <img loading="lazy" src="{{ asset('assets/website_images/x-icon.svg') }}" alt="" width="20">
                    </a>
                </div>
            </div>
            <div class="col-md-12">
                 <a><p class="side-menu-p-font">{{ __('messages.sidebar.about')}}</p></a>


                <button class="side-menu-p-font  {{ app()->getLocale() == 'ar' ? 'text-start' : 'text-end' }} dropdown-btn"> {{ __('messages.sidebar.services')}}
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

            <a><p class="side-menu-p-font">{{ __('messages.sidebar.news')}}</p></a>
            <a><p class="side-menu-p-font"> {{ __('messages.sidebar.careers')}}</p></a>
            <a><p class="side-menu-p-font"> {{ __('messages.sidebar.management')}}</p></a>
            <a><p class="side-menu-p-font"> {{ __('messages.sidebar.responsibility')}}</p></a>
            </div>
        </div>
    </div>






@yield('website_scripts')


<script src="{{ asset('assets/js/app.min.js') }}"></script>


</body>
</html>



