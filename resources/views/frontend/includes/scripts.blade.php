<!-- Javascript -->
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/animsition.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/countTo.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/fitText.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/flexslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/vegas.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/cube.portfolio.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>


<script>
    function openNav() {
        $("#page").find("#site-header-wrap").css("opacity", "0").css("transform", "translate(0px, 0px)");
        document.getElementById("my-side-menu").style.width = "405px";

        document.getElementById("my-right-side-menu").style.width = "180px";
        document.getElementById("main").style.marginLeft = "405px";

        // document.getElementById("site-header-wrap").style.opacity = "0 !important";
    }

    function closeNav() {
        $("#page").find("#site-header-wrap").css("opacity", "1").css("transition", "opacity 1s linear");
        document.getElementById("my-side-menu").style.width = "0";
        document.getElementById("my-right-side-menu").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }





</script>


@yield('website_scripts')
