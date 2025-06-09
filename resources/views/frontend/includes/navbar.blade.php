<header>
    <div id="navbar" class="navbar-container w-100 position-fixed bg-black opacity-10 transition-opacity" style="z-index: 1000;">  
        <div class="d-flex container py-3 align-items-center justify-content-between {{ app()->getLocale() == 'ar' ? 'flex-row-reverse' : '' }}"
    dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}  ">
            
            <!-- Menu Part -->
            <div class="nav-part-one d-flex align-items-center  {{ app()->getLocale() == 'ar' ? 'justify-content-end flex-row-reverse' : 'justify-content-start' }}"
    dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                <ul class="menu list-unstyled m-0">
                    <li>
                        <a href="#" class="openbtn text-decoration-none" onclick="openNav()">
                            <img loading="lazy" src="{{ asset('assets/website_images/menu_icon.svg') }}" width="86" height="30"
                               class="img-fluid" alt="steel galvanizing" data-retina="{{ asset('assets/website_images/menu_icon.svg') }}">
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Logo Part -->
            <div class="nav-part-two d-flex align-items-center justify-content-center">
                <a href="{{ route('homepageIndex') }}" title="steel galvanizing" rel="home" class="main-logo text-decoration-none">
                    <img loading="lazy" src="{{ asset('assets/website_images/logo-galva-2.webp') }}" width="130" height="10"
                    class="img-fluid" alt="steel galvanizing"
                         data-retina="{{ asset('assets/website_images/logo-galva-2.webp') }}">
                </a>
            </div>

            <!-- Contact, Language, Search Part -->
            <div class="nav-part-three d-flex align-items-center  {{ app()->getLocale() == 'ar' ? 'justify-content-start flex-row-reverse' : 'justify-content-end' }}"
    dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                <div class="row g-2 align-items-center">
                    <!-- Contact Button -->
                    <div class="col-auto">
                        <a class="btn btn-outline-light btn-sm rounded-pill px-3" href="/contact">{{__('messages.navbar.contact')}}</a>
                    </div>
                    
                    <!-- Language Dropdown -->
                    <div class="col-auto">
                        <div class="dropdown">
                            <a class="text-white text-decoration-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ app()->getLocale() == 'ar' ? 'عربي' : 'EN' }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end bg-black border-0">
                                @if(app()->getLocale() == 'ar')
                                    <li><a class="dropdown-item text-white bg-transparent" href="#">EN</a></li>
                                @else
                                    <li><a class="dropdown-item text-white bg-transparent" href="#">عربي</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Search Bar -->
                  
                </div>
            </div>
        </div>
    </div>
</header>