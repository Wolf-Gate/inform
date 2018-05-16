@component('layouts.master')
    @slot('headerBlock')
        <link rel="canonical" href="http://www.inform-crailsheim.de/fitness-kursplan-crailsheim">
        <meta name="og:url" content="http://www.inform-crailsheim.de/fitness-kursplan-crailsheim">
        <title>Kurspläne - Dein größtes Fitnessstudio in Crailsheim und Umgebung.</title>
        <meta name="og:title"
              content="Kurspläne - Dein größtes Fitnessstudio in Crailsheim und Umgebung.">
        <meta name="description"
              content="InForm Kursplan ab Januar 2018 - Dein größtes Fitnessstudio in Crailsheim und Umgebung.">
        <meta name="og:description"
              content="InFrom Kursplan ab Januar 2018 - Dein größtes Fitnessstudio in Crailsheim und Umgebung.">
    @endslot
    <section class="slide gradient" data-name="start" data-title="Startseite">
        <div class="content">
            <div class="container">
                <div class="wrap">
                    <div class="fix-8-12 margin-bottom-2">
                        <div class="pad-2 shadow ae-1">
                            <div class=" ae-3">
                                <img  class="wide rounded" src="{{ asset('assets/assets/img/kursplan.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('probetraining') }}" class="button margin-top-2 rounded big white ae-4">Probetraining</a>
                    <a href="#trx" class="button margin-top-2 rounded big black ae-5">Kurse entdecken</a>
                </div>
            </div>
        </div>
    </section>

    <section class="slide gradient fade-2 fromLeft" data-name="trx" data-title="TRX Kurs">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-12-12">
                        <ul class="flex reverse">
                            <li class="col-6-12 left cell-32">
                                <h1 class="ae-2 montserrat bold">TRX:</h1>
                                <div class="ae-3 bold"><p>TRX Suspension Training ist ein hoch effektives Ganzkörper-Workout unter Einsatz eines nicht elastischen Gurtsystems, bei dem das eigene Körpergewicht als Trainingswiderstand sowohl im Stehen als auch im Liegen genutzt wird. Mit einer Variationsvielfalt von über 300 Übungen kann jeder Bereich des Körpers effektiv trainiert werden. Da die Gurte des TRX beim Training ständig in Bewegung sind, werden neben den großen Muskelketten auch die kleinen, gelenknahen Muskeln aktiviert. Durch diese „Instabilität“ kommt es zu einem wesentlich höheren Trainingsreiz. Somit zählt das TRX® Suspension Training zu den  effektivsten Trainingsformen der Welt.</p></div>
                                <a href="{{ route('probetraining') }}" class="button rounded big white ae-5">Probetraining</a>
                            </li>
                            <li class="col-6-12 left ae-1 fromRight">
                                <img class="ipad-32 rounded" data-action="zoom" width="1350" src="{{ asset('assets/assets/img/trx.jpg') }}" alt="TRX Kurs InForm - Dein größtes Fitnessstudio in Crailsheim und Umgebung."/>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="slide gradient fade-2 fromLeft" data-name="zumba" data-title="ZUMBA Kurs">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-12-12">
                        <ul class="flex reverse">
                            <li class="col-6-12 left cell-32">
                                <h1 class="ae-2 montserrat bold">ZUMBA:</h1>
                                <div class="ae-3 bold"><p>Dank der einfachen Tanzschritte kommt jeder schnell mit. Die Hüften kreisen lassen, bis der ganze Körper automatisch mitgeht. Locker bleiben und sich der fetzigen Latino-Musik hingeben. Bei Zumba kommt es nicht auf Perfektion an, sondern auf gute Stimmung und ein angenehmes Körpergefühl. Zumba ist ein bunter Bewegungs-Mix: Schritte lateinamerikanischer Tänze wie Salsa, Samba, Mambo und Merengue bilden die Basis. Elemente aus Aerobic, Hip-Hop, Bauchtanz und Kampfsportarten machen daraus ein abwechslungsreiches Ganzkörper-Workout.</p></div>
                                <a href="{{ route('probetraining') }}" class="button rounded big white ae-5">Probetraining</a>
                            </li>
                            <li class="col-6-12 left ae-1 fromRight">
                                <img class="ipad-32 rounded" data-action="zoom" width="1250" src="{{ asset('assets/assets/img/zumba.jpg') }}" alt="ZUMBA Kurs InForm - Dein größtes Fitnessstudio in Crailsheim und Umgebung."/>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="slide gradient fade-2 fromLeft" data-name="bootcamp" data-title="Bootcamp Kurs">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-12-12">
                        <ul class="flex reverse">
                            <li class="col-6-12 left cell-32">
                                <h1 class="ae-2 montserrat bold">Bootcamp:</h1>
                                <div class="ae-3 bold"><p>Immer mehr Teilnehmer gelangen zu dem Bootcamp-Training. Neben der körperlichen eigenen Fitness ist auch der Teamgeist von größter Wichtigkeit. Das Bootcamp-Training fördert die Widerstandskraft und das Durchhaltvermögen. Es ist für jede Altersgruppe umsetzbar. Die Voraussetzung ist die körperliche Gesundheit. Als Einsteiger kommt es im Bootcamp-Training nicht darauf an, wie super fit oder durchtrainiert man ist, sondern ob man bereit ist, an seine Grenzen zu gehen und auch darüber hinweg. Mit ausgefallenen Übungen und Trainingsvarianten werden Kraft, Ausdauer, Koordination und Beweglichkeit gleichermaßen trainiert. Durch die Abwechslung bringt das Training trotz körperlichen Strapazen Spaß mit sich.</p></div>
                                <a href="{{ route('probetraining') }}" class="button rounded big white ae-5">Probetraining</a>

                            </li>
                            <li class="col-6-12 margin-top-5 left ae-1 fromRight">
                                <img class="ipad-32 rounded" data-action="zoom" width="1300" src="{{ asset('assets/assets/img/slide-2.jpg') }}" alt="Bootcamp Kurs InForm - Dein größtes Fitnessstudio in Crailsheim und Umgebung."/>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="slide gradient fade-2 fromLeft" data-name="cycling" data-title="Indoor Cycling Kurs">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-12-12">
                        <ul class="flex reverse">
                            <li class="col-6-12 left cell-32">
                                <h1 class="ae-2 montserrat bold">Indoor Cycling:</h1>
                                <div class="ae-3 bold"><p>Indoor Cyclen kann jeder- egal welchen Alters oder Gewichts und unabhängig vom individuellen Fitnesslevel. Da beim Indoor Cycling die Belastung über den Widerstand von jedem individuell geregelt wird, kann jeder seinem Leistungsniveau entsprechend trainieren. Damit eignet es sich auch ideal für das Ausdauertraining. Hinzu kommt das bei diesem Training viele wichtige Muskelgruppen beansprucht werden. Außerdem ist das Indoor Cycling deutlich gelenkschonender als andere Ausdauersporten, da weniger Belastung auf Knie und Hüfte ausgeübt wird.</p></div>
                                <a href="{{ route('probetraining') }}" class="button rounded big white ae-5">Probetraining</a>

                            </li>
                            <li class="col-6-12 left ae-1 fromRight">
                                <img class="ipad-32 rounded" data-action="zoom" width="1200" src="{{ asset('assets/assets/img/cycling.jpg') }}" alt="Indoor Cycling Kurs InForm - Dein größtes Fitnessstudio in Crailsheim und Umgebung."/>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="slide gradient fade-1 fromLeft" data-name="yoga" data-title="YOGA Kurs">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-12-12">
                        <ul class="flex reverse">
                            <li class="col-6-12 left cell-32">
                                <h1 class="ae-2 montserrat bold">YOGA:</h1>
                                <div class="ae-3 bold"><p>Wir nutzen Yoga für mehr Lebensqualität, Ausgeglichenheit und Energie. Yoga bietet viele Instrumente wie Körperübungen, Atemübungen, Tiefenentspannung und Meditation. Yoga tut gut, macht Spaß und fördert die Gesundheit. Es als gilt eines der besten "Mittel" der Stressbewältigung. Das ist wissenschaftlich nachgewiesen. Verspannungen lösen sich, wodurch stressbedingte Rücken-, Nacken- und Kopfschmerzen gelindert werden oder gar nicht erst entstehen. Die Abwehrkräfte werden erhöht und das Immunsystem stärkt sich.
                                    </p></div>
                                <a href="{{ route('probetraining') }}" class="button rounded big white ae-5">Probetraining</a>

                            </li>
                            <li class="col-6-12 left ae-1 fromRight">
                                <img class="ipad-32 rounded" data-action="zoom" width="1200" src="{{ asset('assets/assets/img/yoga.jpg') }}" alt="YOGA Kurs InForm - Dein größtes Fitnessstudio in Crailsheim und Umgebung."/>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="slide gradient fade-2" data-name="PILATES" data-title="PILATES Kurs">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-12-12 margin-bottom-7 toCenter">
                        <h1 class="ae-2 big montserrat bold">PILATES:</h1>
                        <div class="ae-3"><p class="hero">PILATES ist eine sanfte, aber überaus wirkungsvolle Trainingsmethode für den Körper und auch den Geist - Muskelpartien werden ganz gezielt aktiviert, entspannt oder gedehnt. Nicht die Quantität, sondern die Qualität der PILATES-Übungen zählt und die Atmung wird mit den Bewegungen koordiniert.</p></div>
                        <a href="{{ route('probetraining') }}" class="button rounded big white ae-5">Probetraining</a>

                    </div>
                    <div class="fix-12-12 ae-7">
                        <img class="ipad-36 rounded" src="{{ asset('assets/assets/img/pilates.jpg') }}" data-action="zoom" alt="iPad App"/>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="slide gradient fade-2 fromLeft" data-name="REHA-Sport" data-title="REHA-Sport Kurs">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-12-12">
                        <ul class="flex reverse">
                            <li class="col-6-12 left cell-32">
                                <h1 class="ae-2 montserrat bold">REHA-Sport:</h1>
                                <div class="ae-3 bold"><p>Der REHA Sport Kurs bietet Ihnen die Möglichkeit, gemeinsam mit anderen durch Sport und Gymnastik Ihre Bewegungsfähigkeit wieder herzustellen. Ziel ist es die Ausdauer, Koordination und Flexibilität zu verbessern und den Verlauf zur Gesundung positiv zu beeinflussen. Das Angebot kommt grundsätzlich für alle Menschen mit drohender Einschränkung, sowie für chronisch Kranke in Frage. Die Qualität in den REHA Sport Gruppen wird durch ärztliche Betreuung und durch qualifizierte Übungsleiter/innen sichergestellt. Die Art und Intensität des Rehabilitationssport wird anhand einer ärztlichen Verordnung festgelegt</p></div>
                                <a href="{{ route('probetraining') }}" class="button rounded big white ae-5">Probetraining</a>

                            </li>
                            <li class="col-6-12 left ae-1 fromRight">
                                <img class="ipad-32 rounded" data-action="zoom" width="1350" src="{{ asset('assets/assets/img/reha.jpg') }}" alt="REHA-Sport InForm Crailsheim"/>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="slide gradient fade-2" data-name="dance" data-title="DANCE & TONE Kurs">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-12-12 margin-bottom-7 toCenter">
                        <h1 class="ae-2 big montserrat bold">DANCE & TONE:</h1>
                        <div class="ae-3"><p class="hero">Dance & Tone ist ein eigenentwickeltes Tanz- und Fitnessprogramm, welches Elemente aus Hip-Hop, Dancehall und Jazz mit Toning-Übungen aus dem Fitnessbereich vereint. Ein super effektives Cardioworkout, bei dem der Spaß nicht zu kurz kommt. Für dieses Programm ist keine Tanzvorerfahrung notwendig.</p></div>
                        <a href="{{ route('probetraining') }}" class="button rounded big white ae-5">Probetraining</a>
                    </div>
                    <div class="fix-12-12 ae-7">
                        <img class="ipad-36 rounded" src="{{ asset('assets/assets/img/dance.jpg') }}" data-action="zoom" alt="DANCE & TONE Kurs"/>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endcomponent