@component('layouts.master')
    @slot('headerBlock')
        <link rel="canonical" href="http://www.inform-crailsheim.de/fitness-rundgang-crailsheim">
        <meta name="og:url" content="http://www.inform-crailsheim.de/fitness-rundgang-crailsheim">
        <title>Studiorundgang - Dein größtes Fitnessstudio in Crailsheim und Umgebung.</title>
        <meta name="og:title"
              content="Studiorundgang - Dein größtes Fitnessstudio in Crailsheim und Umgebung.">
        <meta name="description"
              content="InForm Studiorundgang - Dein größtes Fitnessstudio in Crailsheim und Umgebung.">
        <meta name="og:description"
              content="InForm Studiorundgang - Dein größtes Fitnessstudio in Crailsheim und Umgebung.">
    @endslot
    <section class="slide gradient" data-name="start" data-title="Startseite">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-6-12 fromBlur ae-1">
                        <img src="{{ asset('assets/assets/svg/logo.png') }}">
                    </div>
                    <div class="fix-10-12 ae-2 margin-top-2">
                        <p class="hero bold">Herzlich Willkommen im InForm Studiorundgang! Wir sind Dein größtes
                            Fitnessstudio in Crailsheim und Umgebung.
                            Verschaffe Dir einen Einblick und kontaktiere uns für dein erstes Probetraining.</p>
                    </div>
                    <a href="#kontakt" class="button margin-top-2 rounded big white ae-4">Kontakt aufnehmen</a>
                    <a href="#impressionen" class="button margin-top-2 rounded big black ae-5">Impressionen</a>
                </div>
            </div>
        </div>
    </section>
    <section class="slide fade scenic slideshow" data-name="impressionen" data-title="Impressionen">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-10-12 toCenter">
                        <h1 class="ae-1 big montserrat bold">Impressionen</h1>
                    </div>
                    <div class="fix-12-12">
                        <ul class="grid grid-69 equal equalMobile popupTrigger controller" data-popup-id="69"
                            data-slider-id="69">
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <a href="#" class="box-69 ae-3 equalElement selected"
                                   style="background-image:url({{ asset('assets/assets/img/i-1.jpg') }});">
                                    <div class="table cell-69 equalElement">
                                        <div class="cell">
                                            <div class="category-69">InForm</div>
                                            <div class="title-69">Klicken für Fullscreen</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <a href="#" class="box-69 ae-4 equalElement"
                                   style="background-image:url({{ asset('assets/assets/img/i-2.jpg') }});">
                                    <div class="table cell-69 equalElement">
                                        <div class="cell">
                                            <div class="category-69">InForm</div>
                                            <div class="title-69">Klicken für Fullscreen</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <a href="#" class="box-69 ae-5 equalElement"
                                   style="background-image:url({{ asset('assets/assets/img/i-3.jpg') }});">
                                    <div class="table cell-69 equalElement">
                                        <div class="cell">
                                            <div class="category-69">InForm</div>
                                            <div class="title-69">Klicken für Fullscreen</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <a href="#" class="box-69 ae-6 equalElement"
                                   style="background-image:url({{ asset('assets/assets/img/i-4.jpg') }});">
                                    <div class="table cell-69 equalElement">
                                        <div class="cell">
                                            <div class="category-69">InForm</div>
                                            <div class="title-69">Klicken für Fullscreen</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <a href="#" class="box-69 ae-7 equalElement"
                                   style="background-image:url({{ asset('assets/assets/img/i-5.jpg') }});">
                                    <div class="table cell-69 equalElement">
                                        <div class="cell">
                                            <div class="category-69">InForm</div>
                                            <div class="title-69">Klicken für Fullscreen</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <a href="#" class="box-69 ae-8 equalElement"
                                   style="background-image:url({{ asset('assets/assets/img/i-6.jpg') }});">
                                    <div class="table cell-69 equalElement">
                                        <div class="cell">
                                            <div class="category-69">InForm</div>
                                            <div class="title-69">Klicken für Fullscreen</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="background shown" style="background-image:url({{asset('assets/assets/img/slide-1.jpg')}})"></div>
        <div class="background" style="background-image:url({{asset('assets/assets/img/slide-2.jpg')}})"></div>
        <div class="background" style="background-image:url({{asset('assets/assets/img/slide-3.jpg')}})"></div>
    </section>
    <div class="popup animated" data-popup-id="69">
        <div class="close">
            <svg>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use>
            </svg>
        </div>
        <div class="content">
            <div class="container">
                <div class="wrap spaces">

                    <ul class="slider inlineBlock clickable popupContent ae-1 fromCenter disableSelect"
                        data-slider-id="69" style="display: inline-block;">
                        <li class="selected"><img src="{{ asset('assets/assets/img/i-1.jpg') }}" class="selected"
                                                  alt="Image"/></li>
                        <li><img src="{{ asset('assets/assets/img/i-2.jpg') }}" alt="Image"/></li>
                        <li><img src="{{ asset('assets/assets/img/i-3.jpg') }}" alt="Image"/></li>
                        <li><img src="{{ asset('assets/assets/img/i-4.jpg') }}" alt="Image"/></li>
                        <li><img src="{{ asset('assets/assets/img/i-5.jpg') }}" alt="Image"/></li>
                        <li><img src="{{ asset('assets/assets/img/i-6.jpg') }}" alt="Image"/></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <section class="slide gradient" data-name="panoramabilder" data-title="Panoramabilder">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <h1 class="bold big montserrat ae-1">Panoramabilder</h1>
                    <div class="fix-11-12 fromBlur ae-3">
                        <img class="rounded" src="{{ asset('assets/assets/img/p-1.jpg') }}">
                    </div>
                    <div class="fix-11-12 margin-top-2 fromBlur ae-5">
                        <img class="rounded" src="{{ asset('assets/assets/img/p-2.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endcomponent