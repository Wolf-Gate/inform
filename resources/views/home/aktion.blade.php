@component('layouts.master')
    @slot('headerBlock')
        <link rel="canonical" href="http://www.inform-crailsheim.de/fitness-aktion-crailsheim">
        <meta name="og:url" content="http://www.inform-crailsheim.de/fitness-aktion-crailsheim">
        <title>Unsere Aktionen InForm - Dein größtes Fitnessstudio in Crailsheim und Umgebung.</title>
        <meta name="og:title"
              content="Unsere Aktionen InForm - Dein größtes Fitnessstudio in Crailsheim und Umgebung">
        <meta name="description"
              content="InForm Aktion - Dein größtes Fitnessstudio in Crailsheim und Umgebung.">
        <meta name="og:description"
              content="InForm Aktion - Dein größtes Fitnessstudio in Crailsheim und Umgebung.">
    @endslot
    <section class="slide gradient" data-name="start" data-title="Startseite">
        <div class="content">
            <div class="container">
                <div class="wrap">
                    <div class="fix-8-12 ae-2">
                        <img src="{{ asset('assets/assets/img/aktion.jpg') }}" class="rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slide fade gradient" data-name="kooperationspartner" data-title="Kooperationspartner">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-10-12 toCenter">
                        <h1 class="ae-1 bold">Unsere Kooperationspartner</h1>
                    </div>
                    <div class="fix-12-12">
                        <ul class="grid grid-69 equal equalMobile popupTrigger controller" data-popup-id="69" data-slider-id="69" >
                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1">
                                <a href="http://www.fitwell-gerabronn.de" target="_blank" class="box-69 ae-7 equalElement" style="background-image:url({{ asset('assets/assets/img/k-3.jpg') }});">
                                    <div class="table cell-69 equalElement">
                                        <div class="cell">
                                            <div class="category-69">InForm</div>
                                            <div class="title-69">Klicken für mehr Informationen</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1">
                                <a href="https://wolf-gate.com" target="_blank" class="box-69 ae-7 equalElement" style="background-image:url({{ asset('assets/assets/img/k-4.jpg') }});">
                                    <div class="table cell-69 equalElement">
                                        <div class="cell">
                                            <div class="category-69">InForm</div>
                                            <div class="title-69">Klicken für mehr Informationen</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1">
                                <a href="#" class="box-69 ae-6 equalElement" style="background-image:url({{ asset('assets/assets/img/k-1.jpg') }});">
                                    <div class="table cell-69 equalElement">
                                        <div class="cell">
                                            <div class="category-69">InForm</div>
                                            <div class="title-69">Klicken für Fullscreen</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1">
                                <a href="" class="box-69 ae-7 equalElement" style="background-image:url({{ asset('assets/assets/img/k-2.jpg') }});">
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
    </section>
    <div class="popup animated" data-popup-id="69">
        <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
        <div class="content">
            <div class="container">
                <div class="wrap spaces">

                    <ul class="slider inlineBlock clickable popupContent ae-1 fromCenter disableSelect" data-slider-id="69" style="display: inline-block;">
                        <li class="selected"><img src="{{ asset('assets/assets/img/k-1.jpg') }}" class="selected" alt="Image"/></li>
                        <li><img src="{{ asset('assets/assets/img/k-2.jpg') }}" alt="Image"/></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
@endcomponent