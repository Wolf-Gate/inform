@component('layouts.master')
    @slot('headerBlock')
        <link rel="canonical" href="http://www.inform-crailsheim.de/inform-body-shop">
        <meta name="og:url" content="http://www.inform-crailsheim.de/inform-body-shop">
        <title>Super Angebote & professionelle Beratung! InForm Body Shop</title>
        <meta name="og:title"
              content="Super Angebote & professionelle Beratung! InForm Body Shop">
        <meta name="description"
              content="Wir führen ausschliesslich hochwertige Produkte der Hersteller Body Attack, Rich Piana's 5% Nutrition, Frey Nutrition und Mr. Big. Unser Hauptanliegen ist, dass unsere Mitglieder auch in Sachen Nahrungsergänzung (die 80 Prozent des Trainingserfolges ausmacht), optimal versorgt sind. Sei es Muskelaufbau oder Fettreduktion. Der Body Shop ist natürlich für jedermann zugänglich, dazu bedarf es keiner Mitgliedschaft in unserem Studio. Verkauf auch über unsere Theke. Frank und Fabian freuen sich schon auf dich und beraten dich gerne!">
        <meta name="og:description"
              content="Wir führen ausschliesslich hochwertige Produkte der Hersteller Body Attack, Rich Piana's 5% Nutrition, Frey Nutrition und Mr. Big. Unser Hauptanliegen ist, dass unsere Mitglieder auch in Sachen Nahrungsergänzung (die 80 Prozent des Trainingserfolges ausmacht), optimal versorgt sind. Sei es Muskelaufbau oder Fettreduktion. Der Body Shop ist natürlich für jedermann zugänglich, dazu bedarf es keiner Mitgliedschaft in unserem Studio. Verkauf auch über unsere Theke. Frank und Fabian freuen sich schon auf dich und beraten dich gerne!">
    @endslot
    <section class="slide scenic fade-8 slideshow" data-name="start" data-title="Startseite">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <h1 class="bold big montserrat ae-1">Super Angebote & professionelle Beratung!</h1>
                    <p class="hero ae-2 bold">Wir führen ausschliesslich hochwertige Produkte der Hersteller Body
                        Attack, Rich Piana's 5% Nutrition, Frey Nutrition und Mr. Big.
                        Unser Hauptanliegen ist, dass unsere Mitglieder auch in Sachen Nahrungsergänzung (die 80 Prozent
                        des Trainingserfolges ausmacht), optimal versorgt sind. Sei es Muskelaufbau oder Fettreduktion.
                        Der Body Shop ist natürlich für jedermann zugänglich, dazu bedarf es keiner Mitgliedschaft in
                        unserem Studio. Verkauf auch über unsere Theke.

                        Frank und Fabian freuen sich schon auf dich und beraten dich gerne!</p>
                    <a href="http://www.inform-supps.de" target="_blank" class="button margin-top-2 rounded big white ae-4">Zum Online Shop</a>
                </div>
            </div>
        </div>
        <div class="background shown" style="background-image:url({{asset('assets/assets/img/slide-4.jpg')}})"></div>
        <div class="background" style="background-image:url({{asset('assets/assets/img/slide-5.jpg')}})"></div>
        <div class="background" style="background-image:url({{asset('assets/assets/img/slide-6.jpg')}})"></div>
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
                }, 4000); // <-- set your interval here
            });
        </script>
    @endslot

@endcomponent