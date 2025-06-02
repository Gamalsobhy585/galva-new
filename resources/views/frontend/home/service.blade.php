@extends('frontend.master')

@section('website_title')
    {{ trans('homepage.service') }}
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
        .mb-5 {
            margin-bottom: 5rem !important;
        }
        .mt-5 {
            margin-top: 5rem !important;
        }

    </style>
@endsection

@section('website_scripts')

@endsection
@section('website_content')
    
    <section>
        <div class="container ">
            <div class="row mb-5 mt-5">
                <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60" style="height:80px"></div>
                <div class="col-md-6">
                    <img src="{{ asset('storage/services/' . $service->image) }}" alt="image" style="height: 413px;">
                </div>
                <div class="col-md-6">
                    <div class="">
                            <h3 class="line-height-normal margin-bottom-10">
                                {{ $service->title_en ?? 'Default Title' }}
                            </h3>
                            <div class="wprt-lines style-1 custom-3">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                            </div>
                            <p>{{$service->desc_en??'service description'}}</p>
                            <p> Price : {{$service->price ??'price'}}  <span>{{$service->currency->name ?? 'Currency'}}</span></p>


                            
                
                    </div>
                </div>
                </div>
            </div>
    </section>
@endsection
