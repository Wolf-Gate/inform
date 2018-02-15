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
        <div class="background customBackground ae-5 hideForPhone hideForTablet hideForPhablet fromTopLeft"
             style="background-image:url({{ asset('assets/assets/svg/fly-gym-1.png') }}); background-position: top left;"></div>
        <div class="background customBackground ae-6 hideForPhone hideForTablet hideForPhablet fromTopRight"
             style="background-image:url({{ asset('assets/assets/svg/fly-gym-2.png') }}); background-position: top right;"></div>
        <div class="background customBackground ae-7 hideForPhone hideForTablet hideForPhablet fromBottomRight"
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
                        <a href="{{ route('probetraining') }}" class="button white ae-4">Probetraining</a>
                        <div class="ae-8 fromRight">
                            <p class="small">Finde heraus, ob InForm zu dir passt. <a class="bold fit-red-text"
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
    <section class="slide fade kenBurns zoomout" data-name="rundgang" data-title="Rundgang Crailsheim InForm">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-4-12">
                        <div class="embedContainer popupTrigger shadow" data-popup-id="maps" style="padding-bottom:70%">
                            <iframe class="scale disableClick" frameborder="0" style="border:0"
                                    src="https://www.google.com/maps/embed?pb=!4v1518606295969!6m8!1m7!1sI8b6EXuyP_wAAAQq3LChPQ!2m2!1d49.12202538049224!2d10.09339216866431!3f322.66!4f-1.1299999999999955!5f0.7794804030004345"
                                    allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="background">
            <iframe class="iframeBackground" frameBorder="0"
                    src="https://www.google.com/maps/embed?pb=!4v1518606295969!6m8!1m7!1sI8b6EXuyP_wAAAQq3LChPQ!2m2!1d49.12202538049224!2d10.09339216866431!3f322.66!4f-1.1299999999999955!5f0.7794804030004345"></iframe>
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
                                src="https://www.google.com/maps/embed?pb=!4v1518606295969!6m8!1m7!1sI8b6EXuyP_wAAAQq3LChPQ!2m2!1d49.12202538049224!2d10.09339216866431!3f322.66!4f-1.1299999999999955!5f0.7794804030004345"
                                allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
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
    <section class="slide fade video autoStop" data-name="eGym" data-title="eGym">
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
                </div>

            </div>
        </div>
        <div class="background">
            <video loop poster="{{ asset('assets/assets/img/img-video.jpg') }}">
                <source src="{{ asset('assets/assets/img/video.mp4') }}" type="video/mp4"/>
                <source src="{{ asset('assets/assets/img/video.webm') }}" type="video/webm"/>
            </video>
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
        <script>
            /* button to mute a background sound */
            $(function(){
                //mute button
                $('.muteToggle').click(function(){
                    var $this = $(this),
                        $video = $this.parents('.slide').find('video');

                    if ($video.prop('muted') === true){
                        $video.prop('muted', false);
                        $this.text('Mute');
                    } else {
                        $video.prop('muted', true);
                        $this.text('Unmute');
                    }
                });
            });

            /* pause video on slide change */
            $(window).on('slideChange',function(event, number, element){
                var $videoElement = $('.slide.video.autoStop');

                if ($videoElement.length > 0) {
                    $videoElement.each(function(){
                        var $element = $(this);
                        if ($element.index('section.slide') + 1 == number) {
                            $element.find('video')[0].play();
                        } else {
                            $element.find('video')[0].pause();
                        }
                    });
                }
            });
        </script>
    @endslot

@endcomponent