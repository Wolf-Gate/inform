@component('layouts.master')
    @slot('headerBlock')
        <link rel="canonical" href="http://www.inform-crailsheim.de/fitness-trainer-crailsheim">
        <meta name="og:url" content="http://www.inform-crailsheim.de/fitness-trainer-crailsheim">
        <title>Trainerteam - Dein größtes Fitnessstudio in Crailsheim und Umgebung.</title>
        <meta name="og:title"
              content="Trainerteam - Dein größtes Fitnessstudio in Crailsheim und Umgebung.">
        <meta name="description"
              content="Unser Trainerteam bietet neuen Mitgliedern eine individuelle und intensive Beratung und Betreuung an. Nach einer Eingewöhnungszeit wird ein den Bedürfnissen entsprechend maßgeschneiderter Trainingsplan erstellt. Das Fitnessprogramm wird altersgemäß, in unterschiedlicher Intensität den speziellen Wünschen angepasst und in regelmäßigen Abständen überprüft. Unsere Trainer unterstützen dich stets bei der Umsetzung deiner sportlichen und gesundheitlichen Ziele und beraten dich auch gerne näher zu den Themen Ernährung und Gesundheit.">
        <meta name="og:description"
              content="Unser Trainerteam bietet neuen Mitgliedern eine individuelle und intensive Beratung und Betreuung an. Nach einer Eingewöhnungszeit wird ein den Bedürfnissen entsprechend maßgeschneiderter Trainingsplan erstellt. Das Fitnessprogramm wird altersgemäß, in unterschiedlicher Intensität den speziellen Wünschen angepasst und in regelmäßigen Abständen überprüft. Unsere Trainer unterstützen dich stets bei der Umsetzung deiner sportlichen und gesundheitlichen Ziele und beraten dich auch gerne näher zu den Themen Ernährung und Gesundheit.">
    @endslot
    <section class="slide gradient" data-name="start" data-title="Startseite">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-6-12 fromBlur ae-1">
                        <img src="{{ asset('assets/assets/svg/logo.png') }}">
                    </div>
                    <div class="fix-12-12 ae-2 margin-top-2">
                        <p class="hero bold">Unser Trainerteam bietet neuen Mitgliedern eine individuelle und intensive
                            Beratung und Betreuung an. Nach einer Eingewöhnungszeit wird ein den Bedürfnissen
                            entsprechend maßgeschneiderter Trainingsplan erstellt. Das Fitnessprogramm wird altersgemäß,
                            in unterschiedlicher Intensität den speziellen Wünschen angepasst und in regelmäßigen
                            Abständen überprüft.</p>
                    </div>
                    <a href="#kontakt" class="button margin-top-2 rounded big white ae-4">Kontakt aufnehmen</a>
                    <a href="#trainer" class="button margin-top-2 rounded big black ae-5">Trainer Team</a>
                </div>
            </div>
        </div>
    </section>
    <section class="slide fade-5 gradient" data-name="trainer" data-title="Trainer">
        <div class="content">
            <div class="container">
                <div class="wrap">
                    <div class="fix-12-12">
                        <div class="pad shadow left ae-3 pad-59">
                            <div class=" ae-3">
                                <ul class="flex">
                                    <li class="col-4-12"><img class="rounded"
                                                              src="{{ asset('assets/assets/img/frank.jpg') }}"></li>
                                    <li class="col-8-12 article"><h3 class="uppercase small">Frank Mäschig</h3>
                                        <p class="bold">Frank Mäschigs Weg führte über Handball und Schwimmen
                                            1995
                                            schliesslich zum Fitnesssport, in dem er seit 2009 offizieller Trainer mit
                                            Qualifikationen wie der A und B - Lizenz im Fitness und medizinischen
                                            Gesundheitstraining ist.
                                            Zu seinen weiteren Qualifikationen zählen unter anderem:
                                        </p></li>
                                    <li class="col-12-12 margin-top-1 article">
                                        <ul>
                                            <li>Medizinischer Gesundheitstrainer A-Lizenz,</li>
                                            <li>Personal-Trainer und TRX-Trainer Lizenz,</li>
                                            <li>Senioren-Trainer A-Lizenz,</li>
                                            <li>TriggerPoint Zertifikat & Ernährungsberater</li>
                                        </ul>
                                        <p class="">
                                            Franks Anspruch in der Mitgliederbetreuung ist, den Mitgliedern ein
                                            präzises, richtiges und effektives Training zu vermitteln sowie auf die
                                            einzelnen Wünsche, physischen und psychischen Gegebenheiten einzugehen, sie
                                            fit und beweglich zu halten, für den Lebensalltag genauso wie für sportliche
                                            Ziele zu fördern und ihnen die Freude am Fitnesssport so lange wie sie bei
                                            uns trainieren zu vermitteln.</p></li>
                                </ul>
                                <ul class="flex margin-top-3">
                                    <li class="col-8-12 article"><h3 class="uppercase small">Kathrin Thomas</h3>
                                        <p class="bold">Unsere Kurstrainerin Kathrin Thomas. Sie hat die letzten 8 Jahre
                                            in den USA gelebt und als erfolgreiche Marathonläuferin, stolze Mutter von 2
                                            Kindern und leidenschaftliche Sportlerin in den USA ihr Hobby zum Beruf
                                            gemacht.Kathrin verfügt über Lizenzen für Strength & Conditioning Instructor, Group
                                            Exercise Instructor (Spinning, Bootcamp, Body Toning) und Healthy Lifestyle
                                            Trainer.
                                        </p></li>
                                    <li class="col-4-12"><img class="rounded"
                                                              src="{{ asset('assets/assets/img/kathrin.jpg') }}"></li>
                                    <li class="col-12-12 margin-top-1 article">
                                        <p class="">
                                            Sie ist sich sicher - "we will have a lot of fun together" - oder zu deutsch
                                            - "dass wir viel Spaß zusammen haben werden.</p></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background" style="background-image:url({{asset('assets/assets/img/image3.png')}})"></div>
    </section>
    <section class="slide fade scenic slideshow" data-name="Trainerqualifikationen" data-title="Trainerqualifikationen">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-10-12 toCenter">
                        <h1 class="ae-1 bold">Trainerqualifikationen</h1>
                    </div>
                    <div class="fix-12-12">
                        <ul class="grid grid-69 equal equalMobile popupTrigger controller" data-popup-id="69" data-slider-id="69" >
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <a href="#" class="box-69 ae-3 equalElement selected" style="background-image:url({{ asset('assets/assets/img/c-1.jpg') }});">
                                    <div class="table cell-69 equalElement">
                                        <div class="cell">
                                            <div class="category-69">InForm</div>
                                            <div class="title-69">Klicken für Fullscreen</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <a href="#" class="box-69 ae-4 equalElement" style="background-image:url({{ asset('assets/assets/img/c-2.jpg') }});">
                                    <div class="table cell-69 equalElement">
                                        <div class="cell">
                                            <div class="category-69">InForm</div>
                                            <div class="title-69">Klicken für Fullscreen</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <a href="#" class="box-69 ae-5 equalElement" style="background-image:url({{ asset('assets/assets/img/c-3.jpg') }});">
                                    <div class="table cell-69 equalElement">
                                        <div class="cell">
                                            <div class="category-69">InForm</div>
                                            <div class="title-69">Klicken für Fullscreen</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <a href="#" class="box-69 ae-6 equalElement" style="background-image:url({{ asset('assets/assets/img/c-4.jpg') }});">
                                    <div class="table cell-69 equalElement">
                                        <div class="cell">
                                            <div class="category-69">InForm</div>
                                            <div class="title-69">Klicken für Fullscreen</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <a href="#" class="box-69 ae-7 equalElement" style="background-image:url({{ asset('assets/assets/img/c-5.jpg') }});">
                                    <div class="table cell-69 equalElement">
                                        <div class="cell">
                                            <div class="category-69">InForm</div>
                                            <div class="title-69">Klicken für Fullscreen</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <a href="#" class="box-69 ae-8 equalElement" style="background-image:url({{ asset('assets/assets/img/c-6.jpg') }});">
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
        <div class="background shown" style="background-image:url({{asset('assets/assets/img/slide-1.jpg')}})"></div>
        <div class="background" style="background-image:url({{asset('assets/assets/img/slide-2.jpg')}})"></div>
        <div class="background" style="background-image:url({{asset('assets/assets/img/slide-3.jpg')}})"></div>
    </section>
    <div class="popup animated" data-popup-id="69">
        <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
        <div class="content">
            <div class="container">
                <div class="wrap spaces">

                    <ul class="slider inlineBlock clickable popupContent ae-1 fromCenter disableSelect" data-slider-id="69" style="display: inline-block;">
                        <li class="selected"><img src="{{ asset('assets/assets/img/c-1.jpg') }}" class="selected" alt="Image"/></li>
                        <li><img src="{{ asset('assets/assets/img/c-2.jpg') }}" alt="Image"/></li>
                        <li><img src="{{ asset('assets/assets/img/c-3.jpg') }}" alt="Image"/></li>
                        <li><img src="{{ asset('assets/assets/img/c-4.jpg') }}" alt="Image"/></li>
                        <li><img src="{{ asset('assets/assets/img/c-5.jpg') }}" alt="Image"/></li>
                        <li><img src="{{ asset('assets/assets/img/c-6.jpg') }}" alt="Image"/></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
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