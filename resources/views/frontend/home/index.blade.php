@extends('frontend.master')

@section('website_title')
    {{ trans('homepage.homepage') }}
@endsection





@section('website_slider')
    @include('frontend.includes.slider')
@endsection

@section('website_content')


    <!-- who we are -->
    <section id="about" class="wprt-section">
        <div class="container">
            <div class="row">
                <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60" style="height:80px"></div>


                <div class="col-md-6 ">
                    <img loading="lazy" src="{{ asset('assets/website_images/home_galva.webp') }}" alt="image" style="height: 413px;">
                </div><!-- /.col-md-6 -->

                <div class="col-md-6 {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}">
                    <div >
                            <h3 class="line-height-normal margin-bottom-10">
                               {{app()->getLocale() == 'ar' ?$about->title_ar :$about->title_en }} 
                            </h3>         
                            <div class="wprt-lines position-relative style-1 custom-3">
                                <div class="line-1 position-absolute {{app()->getLocale()=='ar'?'end-0':'start-0'}}"></div>
                                <div class="line-2  position-absolute {{app()->getLocale()=='ar'?'end-0':'start-0'}}"></div>
                            </div>

                            <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"
                                style="height:25px"></div>

                            <p class="custom-font-p margin-bottom-20 custom-p-tag">
                                {{app()->getLocale() == 'ar' ?$about->description_ar :$about->description_en }} 

                            </p>


                            <u>
                                <a class="wprt-button light small rounded-30px custom-p-tag" target="_blank"
                                href="#">{{ __('messages.about_section.more_about')}}
                                </a>
                            </u>
                        </div>
                </div>
            </div>
        </div>
    </section>

{{-- {{ app()->getLocale() == 'ar' ? 'flex-row-reverse' : '' }} --}}


    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60" style="height:80px"></div>




    <section class="wprt-section facts parallax text-center">
        <div class="container">
            <!-- Main content row with conditional RTL/LTR layout -->
            <div class="row align-items-center">
                <!-- Title section - Order changes based on language direction -->
                <div class="col-md-3 {{ app()->getLocale() == 'ar' ? 'order-md-2' : 'order-md-1' }}">
                    <div class="wprt-spacer" data-desktop="80" data-mobi="80" data-smobi="60"></div>
                    <h5 class="text-white {{app()->getLocale()=='ar'?'text-right':'text-left'}} font-size-70 line-height-normal letter-spacing-1px">
                        <strong class=" ">{{ __('messages.info_section.title')}}</strong>
                    </h5>
                </div>
                
                <!-- Content section - Order changes based on language direction -->
  <div class="col-md-9 {{ app()->getLocale() == 'ar' ? 'order-md-1 text-start' : 'order-md-2 text-end' }}">
                <div class="wprt-spacer" data-desktop="80" data-mobi="80" data-smobi="60"></div>
                
                <!-- Description -->
                <div class="mb-4">
                    <h6 class="text-white font-size-50 line-height-normal margin-bottom-20 letter-spacing-1px">
                        <strong class="">{{ __('messages.info_section.desc')}}</strong>
                    </h6>
                </div>
                    
                <!-- Counters in single row with conditional alignment -->
                <div class="row {{ app()->getLocale() == 'ar' ? 'justify-content-start' : 'justify-content-end' }}">
                    <div class="col-md-6 {{ app()->getLocale() == 'ar' ? 'order-1' : 'order-0' }}"></div>
                    <div class="col-2">
                        <div class="wprt-counter {{ app()->getLocale() == 'ar' ? 'text-start' : 'text-end' }} white-type has-plus">
                            <div class="number"
                                data-speed="5000"
                                data-to="{{ $info->projects_count ?? 0 }}"
                                data-in-viewport="yes">
                                {{ number_format($info->projects_count ?? 0) }}
                            </div>
                            <div class="text">{{ __('messages.info_section.projects')}}</div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="wprt-counter {{ app()->getLocale() == 'ar' ? 'text-start' : 'text-end' }} white-type has-plus">
                            <div class="number"
                                data-speed="5000"
                                data-to="{{ $info->customers_count ?? 0 }}"
                                data-in-viewport="yes">
                                {{ number_format($info->customers_count ?? 0) }}
                            </div>
                            <div class="text">{{ __('messages.info_section.customers')}}</div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="wprt-counter {{ app()->getLocale() == 'ar' ? 'text-start' : 'text-end' }} white-type has-plus">
                            <div class="number"
                                data-speed="5000"
                                data-to="{{ $info->tons_per_month ?? 0 }}"
                                data-in-viewport="yes">
                                {{ number_format($info->tons_per_month ?? 0) }}
                            </div>
                            <div class="text">{{ __('messages.info_section.productivity')}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom spacer -->
        <div class="row">
            <div class="col-12">
                <div class="wprt-spacer" data-desktop="80" data-mobi="80" data-smobi="60"></div>
            </div>
            </div>
        </div>
    </section>

    <!-- TEAM -->
    <section class="wprt-section team" style="background-color: #f5f5f5 !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                    <h2 class="text-center margin-bottom-10">{{ __('messages.client_section.title')}}</h2>
                    <div class="wprt-lines position-absolute start-50 style-2 custom-1">
                        <div class="line-1"></div>
                    </div>
                    <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>

                    <div class="wprt-team has-bullets bullet-style-2 bullet30" data-layout="slider" data-column="4"
                         data-column2="3" data-column3="2" data-column4="1" data-gaph="30" data-gapv="30">
                        <div id="team-wrap" class="cbp"
                             style="background-color: white !important; border-radius: 20px; !important;">


                            @foreach ($clients as $client)
                                <div class="cbp-item">
                                    <div class="member">
                                        <div class="inner">
                                            <div class="image">
                                                <div class="inner">
                                                    <img loading="lazy" src="{{ asset('storage/clients/' . $client->logo) }}" alt="{{ $client->name_en }}" class="customer-img"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach



                         


                        </div><!-- /#team-wrap -->
                    </div><!-- /.wprt-team -->
                </div><!-- /.col-md-12 -->

                <div class="col-md-12">
                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
@endsection
