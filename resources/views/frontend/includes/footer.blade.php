<div class="row">
    <div class="col-md-4">
        <div class="widget widget_text">
            <h2 class="widget-title"><span class="">ABOUT US</span></h2>
            <div class="textwidget">
                <img src="{{ asset('assets/website_images/logo-galva.webp') }}" width="180" height="30" alt="image"
                     class="margin-top-5 margin-bottom-25"/>
                <p>

                </p>

            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="widget widget_links">
            <h2 class="widget-title"><span class="">COMPANY LINKS</span></h2>
            <ul class="wprt-links clearfix col4">
                <li class="style-2"><a href="#about">About Us</a></li>

                @foreach ($services as $service)
                    <li class="style-2">
                        <a target="_blank" href="{{ route('services.show', $service->id) }}">
                            {{ $service->title_en }}
                        </a>
                    </li>
                @endforeach

                <li class="style-2"><a href="/careers">Careers</a></li>
            </ul>

        </div>
    </div>


    <div class="col-md-4">
        <div class="widget widget_information">
            <h2 class="widget-title"><span class="">CONTACT INFO</span></h2>
            <ul class="style-2">
                <li class="address clearfix">
                    <span class="hl">Address:</span>
                    <span
                        class="text">Second Industrial Zone - Block No. 27013 - Obour City, Cairo, Egypt</span>
                </li>
                <li class="phone clearfix">
                    <span class="hl">Phone:</span>
                    <span class="text">+02 43130285</span>
                </li>
                <li class="email clearfix">
                    <span class="hl">E-mail:</span>
                    <span class="text">info@eecgalva.com</span>
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
