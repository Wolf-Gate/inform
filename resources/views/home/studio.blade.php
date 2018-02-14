@component('layouts.master')
    @slot('headerBlock')
        <link rel="canonical" href="http://www.inform-crailsheim.de/fitness-studio-crailsheim">
        <meta name="og:url" content="http://www.inform-crailsheim.de/fitness-studio-crailsheim">
        <title>Das InForm Studio - Dein größtes Fitnessstudio in Crailsheim und Umgebung.</title>
        <meta name="og:title"
              content="Das InForm Studio - Dein größtes Fitnessstudio in Crailsheim und Umgebung.">
        <meta name="description"
              content="Trainiere in unserem großen und modernen Gerätepark auf 2 Ebenen mit über 1000 m², Kurzhanteln bis 60 kg und einer vielseitigen Auswahl an Cardiogeräten.">
        <meta name="og:description"
              content="Trainiere in unserem großen und modernen Gerätepark auf 2 Ebenen mit über 1000 m², Kurzhanteln bis 60 kg und einer vielseitigen Auswahl an Cardiogeräten.">
    @endslot

    <section class="slide gradient" data-name="start" data-title="Startseite">
        <div class="content">
            <div class="container">
                <div class="wrap">
                    <div class="fix-9-12">
                        <div class="fix-6-12 fromBlur ae-1">
                            <img src="{{ asset('assets/assets/svg/logo.png') }}">
                        </div>
                        <div class="pad shadow article left ae-3 pad-59">
                            <div class=" ae-3">
                                <p>Trainiere in unserem großen und modernen Gerätepark auf 2 Ebenen mit über 1000 m²,
                                    Kurzhanteln bis 60 kg und einer vielseitigen Auswahl an Cardiogeräten. Und all das 7
                                    Tage die Woche in hellen, freundlichen Räumlichkeiten und entspanntem Ambiente.
                                    Sollte dein Trainingsgerät einmal besetzt sein, wird das dein Training nicht
                                    unterbrechen. Weiche doch einfach auf das zweite Gerät aus, denn wir bieten die
                                    Trainingsgeräte in doppelter Ausführung an.</p>

                                <h3 class="uppercase small">Betreuung</h3>
                                <p class="cropBottom">Betreut wirst du von qualifizierten Trainern mit langjähriger
                                    Erfahrung im Fitness- und Wettkampfsport. Du bist Neueinsteiger und hast noch keine
                                    Erfahrung mit Fitnesstraining? Entscheidest du dich nach einem kostenfreien
                                    Probetraining für eine Mitgliedschaft, erhältst du eine Trainingseinweisung durch
                                    einen unserer Trainer samt individuellem Trainingsplan, den du mit zunehmender
                                    Erfahrung nach einigen Monaten an deine Bedürfnisse weiter anpassen lassen
                                    kannst.</p>
                                <h3 class="uppercase small">Preis & Probetraining</h3>
                                <p class="cropBottom">Wir sind in weitem Umkreis das größte Fitnessstudio aber klein im Preis. Wir bieten günstige und flexible Mitgliedsbeiträge und besondere Partner-, Rentner- und Studentenbeiträge.
                                    Wir freuen uns, dich auf ein Probetraining in unserem Studio zu begrüßen.
                                    Lass dich von unseren attraktiven und vielfältigen Angeboten überzeugen</p>
                                <h3 class="uppercase small">Zusammenfassung</h3>
                                <ul>
                                    <li>trainiere auf über 1000 m²</li>
                                    <li>mit qualifizierten Trainern</li>
                                    <li>7 Tage die Woche</li>
                                    <li>abwechslungsreiches Kursprogramm</li>
                                    <li>großer Kurzhantelbereich bis 60kg</li>
                                    <li>Sauna und Erholungsbereich</li>
                                    <li>Bodyshop für Nahrungsergänzung</li>
                                    <li>freies WLAN im gesamten Studio</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endcomponent