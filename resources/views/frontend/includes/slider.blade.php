<div id="hero-section" data-number="1" data-effect="fade">


    <video autoplay muted loop id="myVideo" preload="metadata" loading="lazy" style="width: 100%">
  <source src="{{ asset('assets/website_images/galva_website2.webm') }}" type="video/webm">
    </video>

<div id="hero-section" class="hero-content d-flex flex-column justify-content-center align-items-center min-vh-100 py-5">
    <div class="container hero-content">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <!-- Hero Title -->
                <div class="hero-title mb-4 {{ app()->getLocale() == 'ar' ? 'text-end' : 'text-start' }}">
                    <h1 class="display-3 fw-bold mb-0">
                        {{__('messages.hero_section.title') }}
                    </h1>
                </div>

                <!-- Hero Description -->
                <div class="hero-text mb-5 {{ app()->getLocale() == 'ar' ? 'text-end' : 'text-start' }}">
                    <p class="lead fs-4 text-muted mb-0">
                        {{ __('messages.hero_section.description')}}
                    </p>
                </div>

                <!-- Hero Button -->
                <div class="hero-cta {{ app()->getLocale() == 'ar' ? 'text-end' : 'text-start' }}">
                    <a class="btn btn-outline-primary btn-lg rounded-pill px-5 py-3 fw-semibold text-uppercase letter-spacing-1" 
                       href="#" 
                       role="button">
                        {{ __('messages.hero_section.get_in_touch')}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

    <a class="arrow scroll-target" href="#about"></a>
</div>
