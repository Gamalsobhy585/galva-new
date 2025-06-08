<div id="hero-section" data-number="1" data-effect="fade">


    <video autoplay muted loop id="myVideo" preload="metadata" loading="lazy" style="width: 100%">
  <source src="{{ asset('assets/website_images/galva_website2.webm') }}" type="video/webm">
    </video>

    <div class="hero-content">
        <div class="col-md-10">
            <div class="hero-title" data-min="" data-max="">
                <h1>{{__('messages.hero_section.title') }}</h1>

            </div>

        

            <div class="hero-text">
                <p class="">
                   {{ __('messages.hero_section.description')}}
                </p>
            </div>
        </div>


        <div class="col-md-12">
            <div class="hero-button">
                <a class="wprt-button outline very-light rounded-30px margin-top-30" href="#">
                   {{ __('messages.hero_section.get_in_touch')}}
                </a>
            </div>
        </div>

    </div>

    <a class="arrow scroll-target" href="#about"></a>
</div>
