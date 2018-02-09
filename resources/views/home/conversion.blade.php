@component('layouts.master')
    @slot('headerBlock')
        <title>InForm Fitness Studio Crailsheim</title>
    @endslot
    <section class="slide fade-5 gradient" data-name="danke" data-title="Vielen Dank">
        <div class="content">
            <div class="container">
                <div class="wrap">
                    <div class="fix-6-12">
                        <div class="margin-top-3">
                            <div class="crop">
                                <div class="pad shadow ae-3">
                                    <h2 class="ae-5 montserrat bold">Sehr geehrte Kundin, sehr geehrter Kunde,</h2>
                                    <div class="ae-6"><p class="small equalElement">vielen Dank für Ihre E-Mail, deren Eingang wir hiermit bestätigen.</p></div>
                                    <a href="{{ route('kontakt') }}"
                                       class="button fit-red montserrat wide crop ae-7">Zurück</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background" style="background-image:url({{asset('assets/assets/img/image3.png')}})"></div>
    </section>
@endcomponent