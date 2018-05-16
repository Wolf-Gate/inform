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
                        Attack, Scitec und Mr. Big.
                        Unser Hauptanliegen ist, dass unsere Mitglieder auch in Sachen Nahrungsergänzung (die 80 Prozent
                        des Trainingserfolges ausmacht), optimal versorgt sind. Sei es Muskelaufbau oder Fettreduktion.
                        Der Body Shop ist natürlich für jedermann zugänglich, dazu bedarf es keiner Mitgliedschaft in
                        unserem Studio. Verkauf auch über unsere Theke. Frank freut sich schon auf dich und berät dich gerne!</p>
                    <a href="http://www.inform-supps.de" target="_blank" class="button margin-top-2 rounded big white ae-4">Zum Online Shop</a>
                </div>
            </div>
        </div>
        <div class="background shown" style="background-image:url({{asset('assets/assets/img/slide-4.jpg')}})"></div>
        <div class="background" style="background-image:url({{asset('assets/assets/img/slide-5.jpg')}})"></div>
        <div class="background" style="background-image:url({{asset('assets/assets/img/slide-6.jpg')}})"></div>
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