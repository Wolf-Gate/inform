@component('layouts.master')
    @slot('headerBlock')
        <link rel="canonical" href="http://www.inform-crailsheim.de/fitness-wellness-crailsheim">
        <meta name="og:url" content="http://www.inform-crailsheim.de/fitness-wellness-crailsheim">
        <title>Wellness Pur!</title>
        <meta name="og:title"
              content="Wellness Pur!">
        <meta name="description"
              content="Erholen Sie sich in unseren Massageräumen mit einer Wellnessmassage:">
        <meta name="og:description"
              content="Erholen Sie sich in unseren Massageräumen mit einer Wellnessmassage:">
    @endslot
    <section class="slide fade kenBurns" data-name="start" data-title="Startseite">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-11-12 margin-top-6 toCenter">
                        <h1 class="ae-1 bold ">Erholen Sie sich in unseren Massageräumen mit einer Wellnessmassage:</h1>
                    </div>
                    <div class="fix-12-12 article">
                        <ul class="flex grid-47 margin-top-3">
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <div class="fix-4-12 ae-3">
                                    <h3>27 €</h3>
                                    <p class="small">Rückenmassage <br/>(30 Min.)</p>
                                </div>
                            </li>
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <div class="fix-4-12 ae-4">
                                    <h3>35 €</h3>
                                    <p class="small">Große Rückenmassage <br/>( 45 Min.)</p>
                                </div>
                            </li>
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <div class="fix-4-12 ae-5">
                                    <h3>45 €</h3>
                                    <p class="small">Wohlfühlmassage Ganzkörper <br/>(60 Min.)</p>
                                </div>
                            </li>
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <div class="fix-4-12 ae-6">
                                    <h3>55 €</h3>
                                    <p class="small">Große Wohlfühlmassage <br/>(75 Min.)</p>
                                </div>
                            </li>
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <div class="fix-4-12 ae-7">
                                    <h3>27 €</h3>
                                    <p class="small">Honig Massage <br/>(30 Min.)</p>
                                </div>
                            </li>
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <div class="fix-4-12 ae-8">
                                    <h3>27 €</h3>
                                    <p class="small">Tibetische Rückenmassage <br/>(30 Min.)</p>
                                </div>
                            </li>
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <div class="fix-4-12 ae-8">
                                    <h3>27 €</h3>
                                    <p class="small">Garshan <br/>(30 Min.)</p>
                                </div>
                            </li>
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <div class="fix-4-12 ae-8">
                                    <h3>45 €</h3>
                                    <p class="small">Garshan und Öl <br/>(60 Min.)</p>
                                </div>
                            </li>
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <div class="fix-4-12 ae-8">
                                    <h3>45 €</h3>
                                    <p class="small">Breußmassage <br/>(60 Min.)</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="background" style="background-image:url({{asset('assets/assets/img/slide-wellness.jpg')}})"></div>
    </section>
@endcomponent