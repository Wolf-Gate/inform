@component('layouts.master')
    @slot('headerBlock')
        <link rel="canonical" href="http://www.inform-crailsheim.de/fitness-studio-kontakt">
        <meta name="og:url" content="http://www.inform-crailsheim.de/fitness-studio-kontakt">
        <title>KONTAKT - Dein größtes Fitnessstudio in Crailsheim und Umgebung.</title>
        <meta name="description"
              content="Du hast Fragen zu einer Mitgliedschaft in unserem Studio, Tarifen oder einem kostenfreien Probetraining? Fülle einfach unser Kontaktformular aus und schon werden wir uns mit dir in Verbindung setzen. Du kannst uns auch gerne direkt im Studio anrufen oder besuchen kommen.">
        <meta name="og:site_name" content="KONTAKT - Dein größtes Fitnessstudio in Crailsheim und Umgebung.">
        <meta name="og:title"
              content="Du hast Fragen zu einer Mitgliedschaft in unserem Studio, Tarifen oder einem kostenfreien Probetraining? Fülle einfach unser Kontaktformular aus und schon werden wir uns mit dir in Verbindung setzen. Du kannst uns auch gerne direkt im Studio anrufen oder besuchen kommen.">
    @endslot
    <section class="slide gradient" data-name="start" data-title="Startseite">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-6-12 fromBlur">
                        <img class="ae-2" src="{{ asset('assets/assets/svg/logo.png') }}">
                    </div>
                        <a href="#kontakt" class="button margin-top-5 rounded big white ae-4">Kontakt aufnehmen</a>
                        <a class="button margin-top-5 rounded big black ae-5 popupTrigger" data-popup-id="maps">Google Maps</a>


                </div>
            </div>
        </div>
        <div class="background">
            <iframe class="iframeBackground" frameBorder="0" src="https://www.google.com/maps/embed/v1/search?q=49.1220576231%2C10.0935754536&center=49.1227436906%2C10.0933557507&zoom=17&key=AIzaSyASzqnCrYBWXhFtdlXXBg_KCLxQTa1I5Y4&maptype=satellite"></iframe>
        </div>
    </section>
    <div class="popup" data-popup-id="maps">
        <div class="close opaque"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="embedVideo popupContent">
                        <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?q=49.1220576231%2C10.0935754536&center=49.1227436906%2C10.0933557507&zoom=17&key=AIzaSyASzqnCrYBWXhFtdlXXBg_KCLxQTa1I5Y4&maptype=satellite" allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <section class="slide gradient" data-name="kontakt" data-title="Kontakt">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <ul class="flex padding-top-5">
                        <li class="col-6-12 ae-4 article left">
                            <h2 class="bold montserrat">Öffnungszeiten:</h2>
                            <p class="hero">
                                <strong>Montag bis Donnerstag:</strong> 7.00 Uhr bis 23.00 Uhr<br/>
                                <strong>Freitag:</strong> 9.00 Uhr bis 23.00 Uhr<br/>
                                <strong>Samstag & Sonntag:</strong> 10.00 Uhr bis 17.00 Uhr<br/>
                                <strong>Feiertag:</strong> 10.00 Uhr bis 14.00 Uhr
                            </p>
                            <h2 class="bold montserrat">Kontakt:</h2>
                            <p class="hero">
                                <strong>InForm: Fitness - & Freizeitanlage</strong><br/>
                                <strong>Wittauer Str. 1</strong><br/>
                                <strong>74564 Crailsheim</strong><br/>
                                <strong>Telefon:</strong> 07951 4713830
                            </p>
                        </li>
                        <li class="col-6-12 padding-top-10">
                            <div class="pad-2 ae-5 shadow fix-7-12 selected">
                                <form role="form" method="POST" action="{{ route('kontakt_sended') }}"
                                      class="wide left">
                                    {{ csrf_field() }}
                                    <h2 class="bold center">Und wann kommst du InForm...</h2>
                                    <input class="stroke pair" id="vorname" type="text" name="vorname"
                                           placeholder="Vorname" required/>
                                    <input class="stroke pair" id="nachname" type="text" name="nachname"
                                           placeholder="Nachname" required/>
                                    <input class="stroke wide" id="email" type="email" name="email"
                                           placeholder="Ihre E-Mail" required/>
                                    <input class="stroke wide" id="telefonnummer" type="text" name="telefonnummer"
                                           placeholder="Ihre Tel-Nr." required/>
                                    <select class="stroke  wide" id="anfrage" name="anfrage" required="">
                                        <option value="Anfrage auswählen">Bitte Anfrage auswählen</option>
                                        <option value="Probetraining">Probetraining</option>
                                        <option value="Personal Training">Personal Training</option>
                                        <option value="Firmen Fitness">Firmen Fitness</option>
                                        <option value="Andere">Andere</option>
                                    </select>
                                    <button type="submit" class="button wide fit-red margin-top-1">Jetzt loslegen
                                    </button>
                                    <p class="micro bold center cropBottom margin-top-1">schnell - kostenlos -
                                        unverbindlich</p>
                                </form>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
@endcomponent