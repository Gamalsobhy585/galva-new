<div class="row">
    <div class="col-md-4">
        <div class="widget widget_text">
            <h2 class="widget-title"><span class="">{{ __('messages.footer.about_us')}}</span></h2>
            <div class="textwidget">
                <img loading="lazy" src="{{ asset('assets/website_images/logo-galva.webp') }}" width="180" height="30" alt="image"
                     class="margin-top-5 margin-bottom-25"/>
                <p>

                </p>

            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="widget widget_links">
            <h2 class="widget-title "><span class="">{{ __('messages.footer.links')}}</span></h2>
            <ul class="wprt-links clearfix col4">
                <li class="style-2"><a href="#about">{{ __('messages.footer.about_us')}}</a></li>

                @foreach ($services as $service)
                    <li class="style-2">
                        <a target="_blank" href="{{ route('services.show', $service->id) }}">
                            {{-- {{ $service->title_en }} --}}
                            {{ app()->getLocale() === 'ar' ? $service->title_ar : $service->title_en }}
                        </a>
                    </li>
                @endforeach

                <li class="style-2"><a href="/careers">{{ __('messages.footer.careers')}}</a></li>
            </ul>

        </div>
    </div>


    <div class="col-md-4">
        <div class="widget  widget_information">
                <h2 dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
                   id="contact-info" class="widget-title ar-custom {{ app()->getLocale() === 'ar' ? 'text-right' : 'text-left' }}">
                    <span>{{ __('messages.footer.contact') }}</span>
                </h2>

                <ul class="style-2">
                <li class="address d-flex {{ app()->getLocale() === 'ar' ? 'flex-row-reverse' : '' }}">
                    <span class="hl {{app()->getLocale() === 'ar' ? 'text-right' : 'text-left'}}">{{app()->getLocale() === 'ar' ? ':العنوان' : 'Address :'}}</span>
                    <span
                        class="text {{app()->getLocale() === 'ar' ? 'text-right' : 'text-left'}}">{{ __('messages.footer.factory_address')}}</span>
                </li>
                <li class="phone  d-flex {{ app()->getLocale() === 'ar' ? 'flex-row-reverse' : '' }}">
                    <span class="hl {{app()->getLocale() === 'ar' ? 'text-right' : 'text-left'}}">{{app()->getLocale() === 'ar' ? ':الهاتف' : 'Phone :'}}</span>
                    <span class="text {{app()->getLocale() === 'ar' ? 'text-right' : 'text-left'}}">+02 43130285</span>
                </li>
                <li class="email  d-flex {{ app()->getLocale() === 'ar' ? 'flex-row-reverse' : '' }}">
                    <span class="hl {{app()->getLocale() === 'ar' ? 'text-right' : 'text-left'}}">{{app()->getLocale() === 'ar' ? ':الايميل' : 'Email :'}}</span>
                    <span class="text {{app()->getLocale() === 'ar' ? 'text-right' : 'text-left'}}">info@eecgalva.com</span>
                </li>
            </ul>
        </div>

        <div class="widget widget_spacer">
            <div class="wprt-spacer clearfix" data-desktop="10" data-mobi="10" data-smobi="10"></div>
        </div>

        <div class="widget widget_socials">
            <div class="socials">
                <a target="_blank" href="https://www.linkedin.com/company/engineering-co-for-metal-galvanization-eec-galva?originalSubdomain=eg" title="Linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                <a target="_blank" href="https://www.facebook.com/GalvaEEC/" title="Facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>
</div>
