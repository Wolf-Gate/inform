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
@endcomponent