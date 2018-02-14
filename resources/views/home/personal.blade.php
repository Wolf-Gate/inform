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