@component('layouts.master')
    @slot('headerBlock')
        <link rel="canonical" href="http://www.inform-crailsheim.de/fitness-personal-training-crailsheim">
        <meta name="og:url" content="http://www.inform-crailsheim.de/fitness-personal-training-crailsheim">
        <title>InForm - Personaltraining im Fitness- und Ausdauerbereich</title>
        <meta name="og:title"
              content="InForm - Personaltraining im Fitness- und Ausdauerbereich">
        <meta name="description"
              content="Individuelles und nur auf Dich und Deine Ziele angepasstes und optimiertes Personaltraining im Fitnessbereich (Gerätepark und freie Gewichte) mit Frank oder Ausdauerbereich (10 km, Halbmarathon oder Marathon) mit Kathie. Muskelkater ist garantiert, aber Spaß und ein hoher Trainingseffekt ebenso.">
        <meta name="og:description"
              content="Individuelles und nur auf Dich und Deine Ziele angepasstes und optimiertes Personaltraining im Fitnessbereich (Gerätepark und freie Gewichte) mit Frank oder Ausdauerbereich (10 km, Halbmarathon oder Marathon) mit Kathie. Muskelkater ist garantiert, aber Spaß und ein hoher Trainingseffekt ebenso.">
    @endslot
    <section class="slide scenic fade-8 slideshow" data-name="start" data-title="Startseite">
        <div class="content">
            <div class="container">
                <div class="wrap">
                    <div class="fix-12-12">
                        <h1 class="bold big montserrat ae-1">Personaltraining im Fitness- und Ausdauerbereich</h1>
                        <p class="hero ae-2 bold">Individuelles und nur auf Dich und Deine Ziele angepasstes und
                            optimiertes Personaltraining im Fitnessbereich (Gerätepark und freie Gewichte) mit Frank
                            oder Ausdauerbereich (10 km, Halbmarathon oder Marathon) mit Kathie. Muskelkater ist
                            garantiert, aber Spaß und ein hoher Trainingseffekt ebenso.</p>
                        <a href="#kontakt" class="button margin-top-2 rounded big white ae-4">Kontakt
                            aufnehmen</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="background shown" style="background-image:url({{asset('assets/assets/img/slide-7.jpg')}})"></div>
        <div class="background" style="background-image:url({{asset('assets/assets/img/slide-8.jpg')}})"></div>
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
    @slot('bottomBlock')
        <script>
            $(function () {
                setInterval(function () {
                    if ($('.slideshow').hasClass('selected')) {
                        $('.slideshow.selected .background.shown').removeClass('shown').nextOrFirst('.background').addClass('shown');
                    }
                }, 5000); // <-- set your interval here
            });
        </script>
    @endslot
@endcomponent