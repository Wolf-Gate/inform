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
                            oder Ausdauerbereich (10 km, Halbmarathon oder Marathon) mit Kathrin. Muskelkater ist
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
    <section class="slide fade-5 gradient" data-name="trainer" data-title="Trainer &amp; Kurse">
        <div class="content">
            <div class="container">
                <div class="wrap">
                    <div class="fix-10-12">
                        <ul class="grid later equal">
                            <li class="col-6-12">
                                <div class="fix-5-12 crop">
                                    <div class="pad-2 shadow ae-1">
                                        <div class="fix-2-12">
                                            <img src="{{asset('assets/assets/img/frank.jpg')}}"
                                                 class="ae-4 margin-bottom-2 rounded"
                                                 alt="inform Trainer Team Fitness Studio">
                                        </div>
                                        <div class="ae-6"><p class="small equalElement">Gerne helfe ich dir deine Ziele
                                                in einem Personal Training zu erreichen! Fachgebiete: Ernährungsberatung
                                                , Gerätetraining, Körper formen.
                                            </p></div>
                                        <a class="button fit-red montserrat wide crop ae-7 popupTrigger"
                                           data-popup-id="kontakt">Personal Training anfragen</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-6-12">
                                <div class="fix-5-12 crop">
                                    <div class="pad-2 shadow ae-3">
                                        <div class="fix-2-12">
                                            <img src="{{asset('assets/assets/img/kathrin.jpg')}}"
                                                 class="ae-4 margin-bottom-2 rounded"
                                                 alt="inform Trainer Team Fitness Studio">
                                        </div>
                                        <div class="ae-6"><p class="small equalElement">Gerne helfe ich dir deine Ziele
                                                in einem Personal Training zu erreichen! Meine Fachgebiete: Trainieren
                                                von Sportmannschaften, Lauftraining, Einzel- oder Gruppentraining
                                            </p></div>
                                        <a class="button fit-red montserrat wide crop ae-7 popupTrigger"
                                           data-popup-id="kontakt">Personal Training anfragen</a>
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
    <div class="popup animated" data-popup-id="kontakt">
        <div class="close bold button center closeButton white opaque">
            <svg>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use>
            </svg>
            ZURÜCK
        </div>
        <div class="content popupContent black">
            <div class="padding-top-2">
                <div class="wrap">
                    <div class="center fix-11-12">
                        <h1 class="ae-1 big margin-top-10 ultraBold">Jetzt Kontakt aufnehmen</h1>
                        <div class="margin-top-8 ae-2">
                            <form role="form" method="POST" action="{{ route('kontakt_sended') }}"
                                  class="wide left">
                                {{ csrf_field() }}
                                <ul class="flex">
                                    <li class="col-6-12"><input class="stroke" id="vorname" type="text" name="vorname"
                                                                placeholder="Vorname" required/></li>
                                    <li class="col-6-12"><input class="stroke" id="nachname" type="text" name="nachname"
                                                                placeholder="Nachname" required/></li>
                                    <li class="col-6-12"><select class="stroke wide" id="mitglied" name="mitglied"
                                                                 required="">
                                            <option value="Sind Sie Mitglied?">Sind Sie Mitglied?</option>
                                            <option value="Ja">Mitglied</option>
                                            <option value="Nein">Kein Mitglied</option>
                                        </select></li>
                                    <li class="col-6-12"><select class="stroke wide" id="trainer" name="trainer"
                                                                 required="">
                                            <option value="Personal Trainer">Trainer auswählen</option>
                                            <option value="Frank">Frank</option>
                                            <option value="Kathrin">Kathrin</option>
                                        </select></li>
                                    <li class="col-6-12"><input class="stroke wide" id="email" type="email" name="email"
                                                                placeholder="Ihre E-Mail" required/></li>
                                    <li class="col-6-12"><input class="stroke wide" id="telefonnummer" type="text"
                                                                name="telefonnummer"
                                                                placeholder="Ihre Tel-Nr." required/></li>

                                    <li class="col-4-12"><select class="stroke wide" id="datum1" name="datum1"
                                                                 required="">
                                            <option value="Wunschtermin">Wunschtermin</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select></li>
                                    <li class="col-4-12"><select class="stroke wide" id="datum2" name="datum2"
                                                                 required="">
                                            <option value="Wunschtermin">Wunschtermin</option>
                                            <option value="Januar">Januar</option>
                                            <option value="Februar">Februar</option>
                                            <option value="März">März</option>
                                            <option value="April">April</option>
                                            <option value="Mai">Mai</option>
                                            <option value="Juni">Juni</option>
                                            <option value="Juli">Juli</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="Oktober">Oktober</option>
                                            <option value="November">November</option>
                                            <option value="Dezember">Dezember</option>
                                        </select></li>
                                    <li class="col-4-12"><select class="stroke wide" id="datum3" name="datum3"
                                                                 required="">
                                            <option value="Wunschtermin">Wunschtermin</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                        </select></li>
                                    <li class="col-12-12"><select class="stroke  wide" id="anfrage" name="anfrage"
                                                                  required="">
                                            <option value="Personal Training">Personal Training</option>
                                        </select></li>
                                    <li class="col-12-12">
                                        <button type="submit" class="button wide fit-red margin-top-1">Jetzt loslegen
                                        </button>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
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
                }, 5000); // <-- set your interval here
            });
        </script>
    @endslot
@endcomponent