@component('layouts.master')
    @slot('headerBlock')
        <link rel="canonical" href="http://www.inform-crailsheim.de/">
        <meta name="og:url" content="http://www.inform-crailsheim.de/">
        <title>InForm - Fitness- & Freizeitanlage</title>
        <meta name="og:title"
              content="InForm - Fitness- & Freizeitanlage">
        <meta name="description"
              content="Trainiere auf 1200m², von 07:00 - 23:00 Uhr, mit qualifizierten Trainern, abwechlungsreichem Kursprogramm und großem Gerätepark auf 2 Stockwerken!">
        <meta name="og:description"
              content="Trainiere auf 1200m², von 07:00 - 23:00 Uhr, mit qualifizierten Trainern, abwechlungsreichem Kursprogramm und großem Gerätepark auf 2 Stockwerken!">
    @endslot
    <section class="slide gradient" data-name="start" data-title="Startseite">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-6-12 fromBlur">
                        <img class="ae-2" src="{{ asset('assets/assets/svg/logo.png') }}">
                        <br/>
                        <a href="#überblick" class="button margin-top-5 rounded big black ae-4">Mehr erfahren</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="background customBackground ae-5 hideForPhone hideForPhablet fromTopLeft"
             style="background-image:url({{ asset('assets/assets/svg/fly-gym-1.png') }}); background-position: top left;"></div>
        <div class="background customBackground ae-6 hideForPhone hideForTablet hideForPhablet fromTopRight"
             style="background-image:url({{ asset('assets/assets/svg/fly-gym-2.png') }}); background-position: top right;"></div>
        <div class="background customBackground ae-7 hideForPhone hideForPhablet fromBottomRight"
             style="background-image:url({{ asset('assets/assets/svg/fly-gym-4.png') }}); background-position: bottom right;"></div>
        <div class="background customBackground ae-8 hideForPhone hideForTablet hideForPhablet fromBottomLeft"
             style="background-image:url({{ asset('assets/assets/svg/fly-gym-3.png') }}); background-position: bottom left;"></div>
    </section>
    <section class="slide fade scenic slideshow" data-name="überblick" data-title="Überblick">
        <div class="content">
            <div class="container">
                <div class="wrap article">

                    <div class="fix-10-12">
                        <div class="ae-2">
                            <p class="hero bold">Trainiere in unserem großen und modernen Gerätepark auf 2 Ebenen mit
                                über
                                1000 m², Kurzhanteln bis 60 kg und einer vielseitigen Auswahl an Cardiogeräten. Und all
                                das 7 Tage die Woche.</p>
                        </div>
                        <a href="{{ route('studio') }}" class="button fit-red ae-3">Unser Studio</a>
                        <a href="{{ route('preise') }}" class="button white ae-4">Preise</a>
                        <div class="ae-8 fromRight">
                            <p class="small">Finde heraus, ob inform zu dir passt. <a class="bold fit-red-text"
                                                                                      href="{{ route('kontakt') }}">Jetzt
                                    loslegen.</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="background shown" style="background-image:url({{asset('assets/assets/img/slide-1.jpg')}})"></div>
        <div class="background" style="background-image:url({{asset('assets/assets/img/slide-2.jpg')}})"></div>
        <div class="background" style="background-image:url({{asset('assets/assets/img/slide-3.jpg')}})"></div>
    </section>
    <section class="slide fade-5 gradient" data-name="trainer" data-title="Trainer & Kurse">
        <div class="content">
            <div class="container">
                <div class="wrap">
                    <div class="article">
                        <h1 class="ae-1 bold">Ausgezeichnete Betreuung.</h1>
                        <div class="ae-2 fix-10-12"><p class="hero">Bei uns wirst du von qualifizierten Trainern mit
                                langjähriger Erfahrung im Fitness- und Wettkampfsport betreut.</p></div>
                    </div>
                    <div class="fix-10-12">
                        <ul class="grid later equal">
                            <li class="col-6-12 margin-top-3">
                                <div class="fix-5-12 crop">
                                    <div class="pad shadow ae-3">
                                        <div class="fix-2-12">
                                            <img src="{{asset('assets/assets/svg/icon-1.svg')}}"
                                                 class="ae-4 margin-bottom-2" alt="inform Trainer Team Fitness Studio"/>
                                        </div>
                                        <h2 class="ae-5 montserrat bold">Trainer Team</h2>
                                        <div class="ae-6"><p class="small equalElement">Wir bietet neuen Mitgliedern
                                                eine individuelle Beratung an.</p></div>
                                        <a href="{{ route('trainer') }}"
                                           class="button fit-red montserrat wide crop ae-7">Mehr erfahren</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-6-12 margin-top-3">
                                <div class="fix-5-12 crop">
                                    <div class="pad shadow ae-4">
                                        <div class="fix-2-12 ">
                                            <img src="{{asset('assets/assets/svg/icon-6.svg')}}"
                                                 class="ae-5 margin-bottom-2" alt="Kursangebote inform Fitness Studio"/>
                                        </div>
                                        <h2 class="bold montserrat ae-6">Kursangebote</h2>
                                        <div class="ae-7"><p class="small equalElement">Sie finden unsere aktuellen
                                                Kursangebote ab Januar 2018 hier.</p></div>
                                        <a href="{{ route('kursplan') }}"
                                           class="button fit-red montserrat wide crop ae-8">Mehr erfahren</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="background" style="background-image:url({{asset('assets/assets/img/image3.png')}})"></div>
    </section>
    <section class="slide fade kenBurns" data-name="eGym" data-title="eGym">
        <div class="content">
            <div class="container">
                <div class="wrap article">

                    <div class="fix-10-12">
                        <h1 class="ae-1 big montserrat bold fromLeft">eGym - Neu bei uns!</h1>
                        <div class="ae-2 fromLeft">
                            <p class="hero bold">Erreiche jetzt Dein Trainingsziel – schnell, sicher, effektiv und mit
                                mehr Spaß. Mit dem intelligenten Kraftzirkel von eGym! Ab jetzt auch bei uns.</p>
                        </div>
                    </div>
                    <div class="fix-8-12 margin-top-5">
                        <div class="videoThumbnail videoThumbnail-82 noShadow popupTrigger ae-6" data-popup-id="82">
                            <img src="{{asset('assets/assets/img/img-video-thumb.jpg')}}" class="wide" alt="Thumbnail"/>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="background" style="background-image:url({{asset('assets/assets/img/img-video.jpg')}})"></div>
    </section>
    <div class="popup autoplay" data-popup-id="82">
        <div class="close">
            <svg>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use>
            </svg>
        </div>
        <div class="content">
            <div class="container">
                <div class="wrap">
                    <div class="fix-10-12">
                        <div class="embedVideo popupContent">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/U_9HZw5PC_M"
                                    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
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