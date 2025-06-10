


    <!-- Enhanced Hero Section -->
    <div id="hero-section" data-number="1" data-effect="fade">
        <!-- Video Background -->
        <video autoplay muted loop id="myVideo" preload="metadata" loading="lazy">
            <source src="assets/website_images/galva_website2.webm" type="video/webm">
            <source src="assets/website_images/galva_website2.mp4" type="video/mp4">
        </video>
        
        <!-- Hero Content -->
        <div class="hero-content-wrapper d-flex align-items-center justify-content-center">
            <div class="container hero-content">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-8">
                        <!-- Hero Title -->
                        <div class="hero-title {{ app()->getLocale() == 'ar' ? 'text-end' : 'text-start' }} mb-4">
                            <h1 class="mb-0">
                        {{__('messages.hero_section.title') }}
                            </h1>
                        </div>
                        
                        <!-- Hero Description -->
                        <div class="hero-text {{ app()->getLocale() == 'ar' ? 'text-end' : 'text-start' }} mb-5">
                            <p class="lead mb-0">
                        {{ __('messages.hero_section.description')}}
                            </p>
                        </div>
                        
                        <!-- Hero CTA -->
                        <div class="hero-cta {{ app()->getLocale() == 'ar' ? 'text-end' : 'text-start' }}">
                            <a class="btn btn-lg rounded-pill px-5 py-3" 
                               href="#about" 
                               role="button">
                        {{ __('messages.hero_section.get_in_touch')}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Arrow -->
    <a class="arrow scroll-target" href="#about"></a>

    </div>
