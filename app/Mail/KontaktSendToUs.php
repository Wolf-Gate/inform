<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class KontaktSendToUs extends Mailable
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
        return $this->from($this->request->email)->to('inform@inform-crailsheim.de')->subject("Neue Anfrage InForm")->markdown('emails.kontakt_send_to_us')->with([
            'vorname' => $this->request->vorname,
            'nachname' => $this->request->nachname,
            'email' => $this->request->email,
            'telefonnummer' => $this->request->telefonnummer,
            'anfrage' => $this->request->anfrage,
        ]);
    }
}
