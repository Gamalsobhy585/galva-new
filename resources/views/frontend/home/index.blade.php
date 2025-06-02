@extends('frontend.master')

@section('website_title')
    {{ trans('homepage.homepage') }}
@endsection

@section('website_styles')
    <style>
        .cbp-item-wrapper {
            width: 100% !important;
        }

        .cbp-item {
            width: 298px !important;
        }

        .font-class {
            font-family: "DM Serif Display", serif !important;
        }

    </style>
@endsection

@section('website_scripts')

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


                <div class="col-md-6">
                    <img src="{{ asset('assets/website_images/home_galva.png') }}" alt="image" style="height: 413px;">
                </div><!-- /.col-md-6 -->

                <div class="col-md-6">
                    <div class="">
                        <h3 class="line-height-normal margin-bottom-10">
                            {{ $about->title_en ?? 'Default Title' }}
                        </h3>         
                <div class="wprt-lines style-1 custom-3">
                            <div class="line-1"></div>
                            <div class="line-2"></div>
                        </div>

                        <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"
                             style="height:25px"></div>

                        <p class="custom-font-p margin-bottom-20 custom-p-tag">
                            {!! $about->description_en ?? 'Default description goes here...' !!}
                        </p>


                        <u>
                            <a class="wprt-button light small rounded-30px custom-p-tag" target="_blank"
                               href="#">More About Us
                            </a>
                        </u>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60" style="height:80px"></div>




    <!-- FACTS -->
    <section class="wprt-section facts parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="wprt-spacer" data-desktop="80" data-mobi="80"
                         data-smobi="60"></div>

                    <h5 class="text-left text-center-mobile text-white font-size-70 line-height-normal letter-spacing-1px">
                        <strong class="font-class">Revolutionize Your Projects</strong>
                    </h5>

                </div><!-- /.col-md-4 -->


                <div class="col-md-9">
                    <div class="wprt-spacer" data-desktop="130" data-mobi="80"
                         data-smobi="60"></div>
                    {{--                    <h2 class="text-right text-center-mobile text-white font-family-extend font-size-25 margin-bottom-0 line-height-normal letter-spacing-1px">--}}
                    {{--                        The Construction Company</h2>--}}
                    <h6 class="text-right text-center-mobile text-white font-size-50 line-height-normal margin-bottom-20 letter-spacing-1px">
                        <strong class="font-class">Facts And Figures</strong>
                    </h6>


                    <div class="col-md-4"></div><!-- /.col-md-6 -->

                    <div class="col-md-2"></div>

                    <div class="col-md-2">
                        <div class="wprt-counter text-center white-type has-plus">
                            <div class="number"
                                data-speed="5000"
                                data-to="{{ $info->projects_count ?? 0 }}"
                                data-in-viewport="yes">
                                {{ number_format($info->projects_count ?? 0) }}
                            </div>
                            <div class="text">Projects</div>
                        </div>

                        <div class="wprt-spacer" data-desktop="0" data-mobi="25"
                             data-smobi="25"></div>
                    </div><!-- /.col-md-2 -->


                    <div class="col-md-2">
                        <div class="wprt-counter text-center white-type has-plus">
                            <div class="number"
                                data-speed="5000"
                                data-to="{{ $info->customers_count ?? 0 }}"
                                data-in-viewport="yes">
                                {{ number_format($info->customers_count ?? 0) }}
                            </div>
                            <div class="text">Customers</div>
                        </div>
                        <div class="wprt-spacer" data-desktop="0" data-mobi="25"
                             data-smobi="25"></div>
                    </div><!-- /.col-md-2 -->


                  <div class="col-md-2">
                <div class="wprt-counter text-center white-type has-plus">
                    <div class="number"
                        data-speed="5000"
                        data-to="{{ $info->tons_per_month ?? 0 }}"
                        data-in-viewport="yes">
                        {{ number_format($info->tons_per_month ?? 0) }}
                    </div>
                    <div class="text">Ton / Month</div>
                </div><!-- /.col-md-2 -->


                </div><!-- /.col-md-8 -->


                <div class="col-md-12">
                    <div class="wprt-spacer" data-desktop="130" data-mobi="80"
                         data-smobi="60"></div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>




    <!-- TEAM -->
    <section class="wprt-section team" style="background-color: #f5f5f5 !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                    <h2 class="text-center margin-bottom-10">Our Clients</h2>
                    <div class="wprt-lines style-2 custom-1">
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
                                                    <img src="{{ asset('storage/clients/' . $client->logo) }}" alt="{{ $client->name_en }}" class="customer-img"/>
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
