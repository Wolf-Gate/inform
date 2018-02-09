@component('layouts.master')
    @slot('headerBlock')
        <link rel="canonical" href="http://www.inform-crailsheim.de/inform-body-shop">
        <meta name="og:url" content="http://www.inform-crailsheim.de/inform-body-shop">
        <title>Gerade in Überarbeitung</title>
        <meta name="og:title"
              content="Gerade in Überarbeitung">
        <meta name="description"
              content="Gerade in Überarbeitung">
        <meta name="og:description"
              content="Gerade in Überarbeitung">
    @endslot
    <section class="slide gradient" data-name="start" data-title="Startseite">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-6-12 fromBlur ae-1">
                        <img src="{{ asset('assets/assets/svg/logo.png') }}">
                    </div>
                    <div class="fix-10-12 ae-2 margin-top-2">
                        <p class="hero bold">Diese Seite ist gerade in Überarbeitung!</p>
                    </div>
                    <a href="#kontakt" class="button margin-top-2 rounded big white ae-4">Kontakt aufnehmen</a>
                </div>
            </div>
        </div>
    </section>
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