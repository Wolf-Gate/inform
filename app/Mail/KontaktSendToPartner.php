<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use GuzzleHttp\Client;

class KontaktSendToPartner extends Mailable
{
    use Queueable, SerializesModels;

    protected $request;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->request->email)->from('inform@inform-crailsheim.de')->subject("RE: Ihre Anfrage InForm Crailsheim")->markdown('emails.kontakt_send_to_partner')->with([
            'vorname' => $this->request->vorname,
            'nachname' => $this->request->nachname,
            'email' => $this->request->email,
            'telefonnummer' => $this->request->telefonnummer,
            'anfrage' => $this->request->anfrage,
        ]);
    }
}
