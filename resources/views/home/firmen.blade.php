@component('layouts.master')
    @slot('headerBlock')
        <link rel="canonical" href="http://www.inform-crailsheim.de/firmen-fitness-crailsheim">
        <meta name="og:url" content="http://www.inform-crailsheim.de/firmen-fitness-crailsheim">
        <title>Firmenfitness - Dein größtes Fitnessstudio in Crailsheim und Umgebung.</title>
        <meta name="og:title"
              content="Firmenfitness - Dein größtes Fitnessstudio in Crailsheim und Umgebung.">
        <meta name="description"
              content="Werden Sie Mitglied und profitieren Sie von unseren Firmenfitness-Angeboten. Jedes Unternehmen kann eine Kooperation mit unserem Studio eingehen und für ein gesundes Unternehmen und gesunde und motivierte Mitarbeiter sorgen. Wir bieten geeignete und flexible Programme der Gesundheitsförderung durch sportliche Betätigung, um Ausgleich zum Arbeitsleben zu schaffen und folgende Ziele zu erreichen:">
        <meta name="og:description"
              content="Werden Sie Mitglied und profitieren Sie von unseren Firmenfitness-Angeboten. Jedes Unternehmen kann eine Kooperation mit unserem Studio eingehen und für ein gesundes Unternehmen und gesunde und motivierte Mitarbeiter sorgen. Wir bieten geeignete und flexible Programme der Gesundheitsförderung durch sportliche Betätigung, um Ausgleich zum Arbeitsleben zu schaffen und folgende Ziele zu erreichen:">
    @endslot
    <section class="slide gradient" data-name="start" data-title="Startseite">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <h1 class="ae-1 bold big montserrat">Firmenfitness im InForm - Sonderkonditionen für Mitarbeiter</h1>
                    <div class="fix-12-12 ae-2 margin-top-2">
                        <p class="hero bold">Werden Sie Mitglied und profitieren Sie von unseren Firmenfitness-Angeboten. Jedes Unternehmen kann eine Kooperation mit unserem Studio eingehen und für ein gesundes Unternehmen und gesunde und motivierte Mitarbeiter sorgen. </p>
                    </div>
                    <a href="#kontakt" class="button margin-top-2 rounded big white ae-4">Kontakt aufnehmen</a>
                    <a href="#info" class="button margin-top-2 rounded big black ae-6">Mehr erfahren</a>
                </div>
            </div>
        </div>
    </section>
    <section class="slide gradient" data-name="info" data-title="Informationen">
        <div class="content">
            <div class="container">
                <div class="wrap">
                    <div class="fix-9-12">
                        <div class="fix-5-12 fromBlur ae-1">
                            <img src="{{ asset('assets/assets/svg/logo.png') }}">
                        </div>
                        <div class="pad shadow article left ae-3 pad-59">
                            <div class=" ae-3">
                                <p class="bold"> Wir bieten geeignete und flexible Programme der Gesundheitsförderung durch sportliche Betätigung, um Ausgleich zum Arbeitsleben zu schaffen und folgende Ziele zu erreichen:</p>

                                <h3 class="uppercase small">Vorteile für Arbeitnehmer</h3>
                               <ul class="cropTop">
                                   <li>mehr Ausgeglichenheit und Wohlbefinden</li>
                                   <li>Senkung von Übergewicht und Rückenleiden
                                   </li>
                                   <li>Stärkung des Immunsystems </li>
                                   <li>gesteigerte Identifikation mit dem Arbeitgeber</li>
                               </ul>
                                <h3 class="uppercase small">Vorteile für Arbeitgeber</h3>
                                <ul class="cropTop">
                                    <li>motiviertere Mitarbeiter</li>
                                    <li>den Krankenstand senken
                                    </li>
                                    <li>Fehlzeiten senken</li>
                                    <li>Imageverbesserung der Firma</li>
                                </ul>
                                <h3 class="uppercase small">Möglichkeiten der Firmenfitness:</h3>
                                <p class="crop">InForm bietet Sonderkontitionen bei Jahresmitgliedschaften, wenn das Unternehmen die Kommunikation an seine Mitarbeiter unternimmt.  Mitarbeiter erhalten eine Mitgliedschaft von 20 % Preisnachlass. Darin enthalten ist ein Gerätetraining inkl. Trainingsplan und den Kursen Bootcamp, Spinning, GetFitmix, Bodytoning, TRX und Drums Alive. Es besteht auch die Möglichkeit, dass Ihre Firma die Mitgliedschaft für Ihre Angestellten eingeht. Der Vorteil daraus ist, die MwSt. kann zurückerstattet werden und die Beiträge sind steuerlich absetzbar (ist mit dem Steuerberater nochmals abzuklären).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endcomponent