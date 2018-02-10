@component('layouts.master')
    @slot('headerBlock')
        <link rel="canonical" href="http://www.inform-crailsheim.de/fitness-preise-crailsheim">
        <meta name="og:url" content="http://www.inform-crailsheim.de/fitness-preise-crailsheim">
        <title>Preise InForm - Dein größtes Fitnessstudio in Crailsheim und Umgebung.</title>
        <meta name="og:title"
              content="Preise InForm - Dein größtes Fitnessstudio in Crailsheim und Umgebung">
        <meta name="description"
              content="InForm Preise und Pakete ab Januar 2018 - Dein größtes Fitnessstudio in Crailsheim und Umgebung.">
        <meta name="og:description"
              content="InForm Preise und Pakete ab Januar 2018 - Dein größtes Fitnessstudio in Crailsheim und Umgebung.">
    @endslot
    <section class="slide gradient" data-name="start" data-title="Startseite">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <h1 class="ae-1 bold montserrat big">Unsere aktuellen Preise</h1>
                    <div class="fix-10-12">
                        <ul class="grid later equal">
                            <li class="col-6-12">
                                <div class="fix-5-12 margin-bottom-3">
                                    <div class="pad shadow ae-3">
                                        <div class="price sourceSans ae-4"><span class="currency sourceSans">€</span>22</div>
                                        <h3 class="big ae-5">Paket</h3>
                                        <div class="ae-6"><p class="small equalElement">Beschreibung</p></div>
                                        <a href="#kontakt" class="button fit-red crop wide ae-7">Kontakt aufnehmen</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-6-12">
                                <div class="fix-5-12">
                                    <div class="pad shadow ae-4">
                                        <div class="price sourceSans ae-5"><span class="currency sourceSans">€</span>69</div>
                                        <h3 class="big ae-6">Paket</h3>
                                        <div class="ae-7"><p class="small equalElement">Beschreibung</p></div>
                                        <a href="#kontakt" class="button fit-red crop wide ae-8">Kontakt aufnehmen</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

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