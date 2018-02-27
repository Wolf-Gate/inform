<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\KontaktSendToUs;
use App\Mail\KontaktSendToPartner;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function studio()
    {
        return view('home.studio');
    }
    public function wellness()
    {
        return view('home.wellness');
    }
    public function trainer()
    {
        return view('home.trainer');
    }
    public function kursplan()
    {
        return view('home.kursplan');
    }
    public function preise()
    {
        return view('home.preise');
    }
    public function rundgang()
    {
        return view('home.rundgang');
    }
    public function shop()
    {
        return view('home.shop');
    }
    public function personal()
    {
        return view('home.personal');
    }
    public function firmen()
    {
        return view('home.firmen');
    }
    public function kontakt()
    {
        return view('home.kontakt');
    }
    public function kontakt_sended(Request $request)
    {
        $rules = [
            'vorname' => 'required',
            'nachname' => 'required',
            'email' => 'required|email',
        ];

        $this->validate($request, $rules);

        try {
            Mail::send(new KontaktSendToUs($request));
            Mail::send(new KontaktSendToPartner($request));
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', '<h4>' . trans('app.smtp_error_message') . '</h4>' . $exception->getMessage());
        }
        return redirect('kontakt-conversion');
    }
    public function conversion()
    {
        return view('home.conversion');
    }
    public function impressum()
    {
        return view('home.impressum');
    }
    public function aktion()
    {
        return view('home.aktion');
    }
    public function datenschutz()
    {
        return view('home.datenschutz');
    }


}
