@extends('frontend.master')

@section('website_title')
    {{ trans('homepage.contact') }}
@endsection

@section('website_styles')

    <link href="{{asset('assets/css/contact.min.css')}}" rel="stylesheet">
@endsection

@section('website_scripts')
    <script src="{{ asset('assets/js/contact-form.min.js') }}"></script>
@endsection

@section('website_content')
    <section class="contact-section ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="contact-form-wrapper">
                        <div class="contact-header">
                            <h2 class="contact-title font-class">Get In Touch</h2>
                            <p class="contact-subtitle">We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                <i class="fas fa-check-circle me-2"></i>
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger" role="alert">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" id="contactForm">
                            @csrf
                            
                            <div class="row form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" 
                                               class="form-control @error('name') is-invalid @enderror" 
                                               placeholder="Your Full Name *" 
                                               name="name" 
                                               value="{{ old('name') }}"
                                               required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" 
                                               class="form-control @error('email') is-invalid @enderror" 
                                               placeholder="Your Email Address *" 
                                               name="email" 
                                               value="{{ old('email') }}"
                                               required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" 
                                       class="form-control @error('phone') is-invalid @enderror" 
                                       placeholder="Your Phone Number " 
                                       name="phone" 
                                       value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <textarea class="form-control @error('message') is-invalid @enderror" 
                                          rows="5" 
                                          placeholder="Your Message *" 
                                          name="message" 
                                          required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-submit">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection