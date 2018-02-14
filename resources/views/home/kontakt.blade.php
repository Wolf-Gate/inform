@component('layouts.master')
    @slot('headerBlock')
        <link rel="canonical" href="http://www.inform-crailsheim.de/fitness-studio-kontakt">
        <meta name="og:url" content="http://www.inform-crailsheim.de/fitness-studio-kontakt">
        <title>KONTAKT - Dein größtes Fitnessstudio in Crailsheim und Umgebung.</title>
        <meta name="og:title" content="KONTAKT - Dein größtes Fitnessstudio in Crailsheim und Umgebung.">
        <meta name="description"
              content="Du hast Fragen zu einer Mitgliedschaft in unserem Studio, Tarifen oder einem kostenfreien Probetraining? Fülle einfach unser Kontaktformular aus und schon werden wir uns mit dir in Verbindung setzen. Du kannst uns auch gerne direkt im Studio anrufen oder besuchen kommen.">
        <meta name="og:description"
              content="Du hast Fragen zu einer Mitgliedschaft in unserem Studio, Tarifen oder einem kostenfreien Probetraining? Fülle einfach unser Kontaktformular aus und schon werden wir uns mit dir in Verbindung setzen. Du kannst uns auch gerne direkt im Studio anrufen oder besuchen kommen.">
    @endslot
    <section class="slide gradient" data-name="start" data-title="Startseite">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-6-12 fromBlur ae-1">
                        <img src="{{ asset('assets/assets/svg/logo.png') }}">
                    </div>
                    <div class="fix-10-12 ae-2 margin-top-2">
                        <p class="hero bold">Du hast Fragen zu einer Mitgliedschaft in unserem Studio, Tarifen oder
                            einem kostenfreien Probetraining? Fülle einfach unser Kontaktformular aus und schon werden
                            wir uns mit dir in Verbindung setzen. Du kannst uns auch gerne direkt im Studio anrufen oder
                            besuchen kommen.</p>
                    </div>
                    <a href="#kontakt" class="button margin-top-2 rounded big white ae-4">Kontakt aufnehmen</a>
                    <a href="#maps" class="button margin-top-2 rounded big black ae-5">Google Maps</a>


                </div>
            </div>
        </div>
    </section>
    <section class="slide fade kenBurns zoomout" data-name="maps" data-title="Google Maps Crailsheim InForm">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-4-12">
                        <div class="embedContainer popupTrigger shadow" data-popup-id="maps" style="padding-bottom:70%">
                            <iframe class="scale disableClick" frameborder="0" style="border:0"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4113.450562004452!2d10.094583202959807!3d49.12258343537918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xefc5579277ef14f6!2sFitness+Studio+Inform!5e1!3m2!1sde!2sbg!4v1518602861592"
                                    allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="background">
            <iframe class="iframeBackground" frameBorder="0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4113.450562004452!2d10.094583202959807!3d49.12258343537918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xefc5579277ef14f6!2sFitness+Studio+Inform!5e1!3m2!1sde!2sbg!4v1518602861592"></iframe>
        </div>
    </section>
    <div class="popup" data-popup-id="maps">
        <div class="close opaque">
            <svg>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use>
            </svg>
        </div>
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="embedVideo popupContent">
                        <iframe frameborder="0" style="border:0"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4113.450562004452!2d10.094583202959807!3d49.12258343537918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xefc5579277ef14f6!2sFitness+Studio+Inform!5e1!3m2!1sde!2sbg!4v1518602861592"
                                allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endcomponent