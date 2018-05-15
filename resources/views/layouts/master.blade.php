<!DOCTYPE html>
<html lang="de-DE">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114280826-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-114280826-1');
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700|Material+Icons"
          rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">
    <meta name="og:type" content="website">
    <meta name="og:site_name" content="InForm Crailsheim - Dein größtes Fitnessstudio in Crailsheim und Umgebung.">
    <link href="{{ asset('assets/css/slides.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    {{ $headerBlock or '' }}
</head>
<body class="slides zen simplifiedMobile animated">
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1191339764326043";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<svg xmlns="http://www.w3.org/2000/svg" style="display:none">

    <symbol id="close" viewBox="0 0 30 30">
        <path d="M15 0c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15zm5.7 19.3c.4.4.4 1 0 1.4-.2.2-.4.3-.7.3s-.5-.1-.7-.3l-4.3-4.3-4.3 4.3c-.2.2-.4.3-.7.3s-.5-.1-.7-.3c-.4-.4-.4-1 0-1.4l4.3-4.3-4.3-4.3c-.4-.4-.4-1 0-1.4s1-.4 1.4 0l4.3 4.3 4.3-4.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-4.3 4.3 4.3 4.3z"/>
    </symbol>

    <symbol id="close-small" viewBox="0 0 11 11">
        <path d="M6.914 5.5l3.793-3.793c.391-.391.391-1.023 0-1.414s-1.023-.391-1.414 0l-3.793 3.793-3.793-3.793c-.391-.391-1.023-.391-1.414 0s-.391 1.023 0 1.414l3.793 3.793-3.793 3.793c-.391.391-.391 1.023 0 1.414.195.195.451.293.707.293s.512-.098.707-.293l3.793-3.793 3.793 3.793c.195.195.451.293.707.293s.512-.098.707-.293c.391-.391.391-1.023 0-1.414l-3.793-3.793z"/>
    </symbol>

    <symbol id="arrow-left" viewBox="0 0 31 72">
        <path d="M30 72c-.3 0-.6-.1-.8-.4l-29-34c-.3-.4-.3-.9 0-1.3l29-36c.3-.4 1-.5 1.4-.2.4.3.5 1 .2 1.4l-28.5 35.5 28.5 33.4c.4.4.3 1.1-.1 1.4-.2.1-.5.2-.7.2z"/>
    </symbol>

    <symbol id="arrow-right" viewBox="0 0 31 72">
        <path d="M1 0c.3 0 .6.1.8.4l29 34c.3.4.3.9 0 1.3l-29 36c-.3.4-1 .5-1.4.2-.4-.3-.5-1-.2-1.4l28.5-35.5-28.5-33.4c-.4-.4-.3-1.1.1-1.4.2-.1.5-.2.7-.2z"/>
    </symbol>

    <symbol id="back" viewBox="0 0 20 20">
        <path d="M2.3 10.7l5 5c.4.4 1 .4 1.4 0s.4-1 0-1.4l-3.3-3.3h11.6c.6 0 1-.4 1-1s-.4-1-1-1h-11.6l3.3-3.3c.4-.4.4-1 0-1.4-.2-.2-.4-.3-.7-.3s-.5.1-.7.3l-5 5c-.2.2-.3.5-.3.7 0 .2.1.5.3.7z"/>
    </symbol>

    <symbol id="menu" viewBox="0 0 22 22">
        <path d="M1 5h20c.6 0 1-.4 1-1s-.4-1-1-1h-20c-.6 0-1 .4-1 1s.4 1 1 1zm20 5h-20c-.6 0-1 .4-1 1s.4 1 1 1h20c.6 0 1-.4 1-1s-.4-1-1-1zm0 7h-20c-.6 0-1 .4-1 1s.4 1 1 1h20c.6 0 1-.4 1-1s-.4-1-1-1z"/>
    </symbol>

    <symbol id="share" viewBox="0 0 22 22">
        <path d="M21 10c-.6 0-1 .4-1 1v7h-18v-7c0-.6-.4-1-1-1s-1 .4-1 1v7c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2v-7c0-.6-.4-1-1-1zM5.5 7.5c.3 0 .5-.1.7-.3l3.8-3.8v9.6c0 .6.4 1 1 1s1-.4 1-1v-9.6l3.8 3.8c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4l-5.5-5.5c-.1-.1-.2-.2-.3-.2-.2-.1-.5-.1-.8 0l-.3.2-5.5 5.5c-.4.4-.4 1 0 1.4.2.2.4.3.7.3z"/>
    </symbol>

    <symbol id="arrow-down" viewBox="0 0 24 24">
        <path d="M12 18c-.2 0-.5-.1-.7-.3l-11-10c-.4-.4-.4-1-.1-1.4.4-.4 1-.4 1.4-.1l10.4 9.4 10.3-9.4c.4-.4 1-.3 1.4.1.4.4.3 1-.1 1.4l-11 10c-.1.2-.4.3-.6.3z"/>
    </symbol>

    <symbol id="arrow-up" viewBox="0 0 24 24">
        <path d="M11.9 5.9c.2 0 .5.1.7.3l11 10c.4.4.4 1 .1 1.4-.4.4-1 .4-1.4.1l-10.4-9.4-10.3 9.4c-.4.4-1 .3-1.4-.1-.4-.4-.3-1 .1-1.4l11-10c.1-.2.4-.3.6-.3z"/>
    </symbol>

    <symbol id="arrow-top" viewBox="0 0 24 24">
        <path d="M20.7 10.3l-8-8c-.4-.4-1-.4-1.4 0l-8 8c-.4.4-.4 1 0 1.4s1 .4 1.4 0l6.3-6.3v15.6c0 .6.4 1 1 1s1-.4 1-1v-15.6l6.3 6.3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4z"/>
    </symbol>

    <symbol id="drop-down" viewBox="0 0 16 16">
        <polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                  points="1,5 8,12 15,5" fill="none"></polyline>
    </symbol>

    <symbol id="play" viewBox="0 0 30 30">
        <path d="M7 30v-30l22 15z"/>
    </symbol>

    <symbol id="login" viewBox="0 0 22 22">
        <path d="M13 2c0 .6.4 1 1 1h6v16h-6c-.6 0-1 .4-1 1s.4 1 1 1h6c1.1 0 2-.9 2-2v-16c0-1.1-.9-2-2-2h-6c-.6 0-1 .4-1 1zm-6.5 3.5c0 .3.1.5.3.7l3.8 3.8h-9.6c-.6 0-1 .4-1 1s.4 1 1 1h9.6l-3.8 3.8c-.2.2-.3.5-.3.7s.1.5.3.7c.4.4 1 .4 1.4 0l5.5-5.5c.1-.1.2-.2.2-.3.1-.2.1-.5 0-.8l-.2-.3-5.5-5.5c-.4-.4-1-.4-1.4 0-.2.2-.3.4-.3.7z"/>
    </symbol>

    <symbol id="chat" viewBox="0 0 22 22">
        <path d="M11 22c-.1 0-.3 0-.4-.1-.4-.1-.6-.5-.6-.9v-4h-7.8c-1.2 0-2.2-1-2.2-2.2v-11.6c0-1.2 1-2.2 2.2-2.2h17.7c1.1 0 2.1 1 2.1 2.2v11.7c0 1.2-1 2.2-2.2 2.2h-3.4l-4.7 4.7c-.2.1-.4.2-.7.2zm-8.8-19c-.1 0-.2.1-.2.2v11.7s.1.1.2.1h8.8c.6 0 1 .4 1 1v2.6l3.3-3.3c.2-.2.4-.3.7-.3h3.8c.1 0 .2-.1.2-.2v-11.6c0-.1-.1-.2-.2-.2h-17.6zM5 6h6v2h-6zM5 10h10v2h-10z"/>
    </symbol>

    <symbol id="mail" viewBox="0 0 22 22">
        <path d="M19.8 2h-17.6c-1.2 0-2.2 1-2.2 2.2v13.5c0 1.3 1 2.3 2.2 2.3h17.5c1.2 0 2.2-1 2.2-2.2v-13.6c.1-1.2-.9-2.2-2.1-2.2zm-17.6 2h17.5c.2 0 .3.1.3.2v.3l-9 6.3-9-6.3v-.3c0-.1.1-.2.2-.2zm17.6 14h-17.6c-.1 0-.2-.1-.2-.2v-10.9l8.1 5.7c.3.2.6.3.9.3.3 0 .6-.1.9-.3l8.1-5.7v10.9c0 .1-.1.2-.2.2z"/>
    </symbol>

    <symbol id="sound-on" viewBox="0 0 22 22">
        <path d="M15 15c-.2 0-.4-.1-.6-.2-.4-.3-.5-1-.2-1.4.5-.7.8-1.5.8-2.4s-.3-1.7-.8-2.4c-.3-.4-.2-1.1.2-1.4.4-.3 1.1-.2 1.4.2.8 1 1.2 2.3 1.2 3.6s-.4 2.6-1.2 3.6c-.2.3-.5.4-.8.4zm4 2.3c-.2 0-.5-.1-.7-.2-.4-.4-.5-1-.1-1.4 1.2-1.3 1.8-3 1.8-4.7 0-1.8-.7-3.5-1.9-4.8-.4-.4-.4-1 0-1.4s1-.4 1.4 0c1.6 1.7 2.5 3.9 2.5 6.2 0 2.2-.8 4.3-2.2 6-.2.2-.5.3-.8.3zm-9 2.7c-.2 0-.4-.1-.6-.2l-4.8-3.8h-2.1c-1.4 0-2.5-1.1-2.5-2.5v-5c0-1.4 1.1-2.5 2.5-2.5h2.2l4.7-3.8c.3-.2.7-.3 1.1-.1.3.2.5.5.5.9v16c0 .4-.2.7-.6.9-.1.1-.3.1-.4.1zm-7.5-12c-.3 0-.5.2-.5.5v5c0 .3.2.5.5.5h2.5c.2 0 .4.1.6.2l3.4 2.7v-11.8l-3.4 2.7c-.2.1-.4.2-.6.2h-2.5z"/>
    </symbol>

    <symbol id="sound-off" viewBox="0 0 22 22">
        <path d="M10.434 2.098c-.347-.165-.758-.119-1.058.121l-4.726 3.781h-2.154c-1.376 0-2.496 1.12-2.496 2.496v5.009c0 1.376 1.12 2.495 2.496 2.495h2.153l4.726 3.781c.181.145.402.219.625.219.147 0 .295-.032.433-.099.347-.167.567-.516.567-.901v-16c0-.384-.22-.735-.566-.902zm-1.434 14.821l-3.375-2.7c-.178-.142-.398-.219-.625-.219h-2.504c-.274 0-.496-.222-.496-.495v-5.009c0-.274.222-.496.496-.496h2.504c.227 0 .447-.077.625-.219l3.375-2.7v11.838zM19.414 11l2.293-2.293c.391-.391.391-1.023 0-1.414s-1.023-.391-1.414 0l-2.293 2.293-2.293-2.293c-.391-.391-1.023-.391-1.414 0s-.391 1.023 0 1.414l2.293 2.293-2.293 2.293c-.391.391-.391 1.023 0 1.414.195.195.451.293.707.293s.512-.098.707-.293l2.293-2.293 2.293 2.293c.195.195.451.293.707.293s.512-.098.707-.293c.391-.391.391-1.023 0-1.414l-2.293-2.293z"/>
    </symbol>

    <!-- social -->
    <symbol id="apple" viewBox="-1 1 24 24">
        <path d="M17.6 13.8c0-3 2.5-4.5 2.6-4.6-1.4-2.1-3.6-2.3-4.4-2.4-1.9-.2-3.6 1.1-4.6 1.1-.9 0-2.4-1.1-4-1-2 0-3.9 1.2-5 3-2.1 3.7-.5 9.1 1.5 12.1 1 1.5 2.2 3.1 3.8 3 1.5-.1 2.1-1 3.9-1s2.4 1 4 1 2.7-1.5 3.7-2.9c1.2-1.7 1.6-3.3 1.7-3.4-.1-.1-3.2-1.3-3.2-4.9zm-3.1-9c.8-1 1.4-2.4 1.2-3.8-1.2 0-2.7.8-3.5 1.8-.8.9-1.5 2.3-1.3 3.7 1.4.1 2.8-.7 3.6-1.7z"/>
    </symbol>

    <symbol id="dribbble" viewBox="0 0 24 24">
        <path d="M12 0c-6.7 0-12 5.3-12 12s5.3 12 12 12 12-5.3 12-12-5.3-12-12-12zm7.9 5.7c1.3 1.7 2.1 3.9 2.3 6.1-.4-.1-2.4-.4-4.7-.4-.8 0-1.5 0-2.3.1 0-.1-.1-.3-.3-.5l-.7-1.5c3.7-1.4 5.3-3.4 5.7-3.8zm-7.9-3.8c2.5 0 4.9.9 6.7 2.5-.3.4-1.9 2.3-5.2 3.6-1.6-2.9-3.3-5.3-3.7-5.9.6-.1 1.4-.2 2.2-.2zm-4.4 1c.4.6 2.1 3 3.7 5.8-4.4 1.2-8.2 1.2-9.2 1.2h-.1c.8-3.1 2.9-5.6 5.6-7zm-5.7 9.1v-.3h.3c1.2 0 5.6-.1 10.1-1.5l.8 1.6c-.1 0-.3 0-.4.1-5.1 1.6-7.9 6-8.3 6.7-1.6-1.7-2.5-4.1-2.5-6.6zm10.1 10.1c-2.3 0-4.4-.8-6.1-2.1.3-.5 2.4-4.4 7.9-6.3 1.3 3.6 2 6.7 2.1 7.6-1.2.6-2.6.8-3.9.8zm5.7-1.8c-.1-.8-.7-3.6-2-7.1.7-.1 1.3-.1 2-.1 2.1 0 3.7.4 4.1.5-.3 2.8-1.8 5.2-4.1 6.7z"/>
    </symbol>

    <symbol id="facebook" viewBox="0 0 24 24">
        <path d="M24 1.3v21.3c0 .7-.6 1.3-1.3 1.3h-6.1v-9.3h3.1l.5-3.6h-3.6v-2.2c0-1.1.3-1.8 1.8-1.8h1.9v-3.2c-.3 0-1.5-.1-2.8-.1-2.8 0-4.7 1.7-4.7 4.8v2.7h-3.1v3.6h3.1v9.2h-11.5c-.7 0-1.3-.6-1.3-1.3v-21.4c0-.7.6-1.3 1.3-1.3h21.3c.8 0 1.4.6 1.4 1.3z"/>
    </symbol>

    <symbol id="fb-like" viewBox="0 0 20 20">
        <path d="M0 8v12h5v-12h-5zm2.5 10.8c-.4 0-.8-.3-.8-.8 0-.4.3-.8.8-.8s.8.3.8.8c0 .4-.4.8-.8.8zm3.5-.8h9.5c1.1 0 1.7-1 1.7-1.7 0-.3-.4-1-.4-1 1.4-.3 1.7-1.2 1.7-1.7-.1-.5-.3-.9-.5-1 1-.4 1.5-1.1 1.4-1.9-.1-.8-1-1.5-1-1.5 1-.6.9-1.5.9-1.5-.3-1.3-1.5-1.7-1.7-1.7h-5.6s.3-.5.3-2.4-1.3-3.6-2.6-3.6c0 0-.7.1-1 .3v3.5l-2.7 4.4v9.8z"/>
    </symbol>

    <symbol id="googlePlus" viewBox="0 1 24 24">
        <path d="M7.8 13.5h4.6c-.6 2-2.5 3.4-4.6 3.4-2.7 0-4.9-2.2-4.9-4.9s2.2-4.9 4.9-4.9c1.1 0 2.1.3 3 1l1.8-2.4c-1.4-1.1-3-1.6-4.8-1.6-4.3 0-7.9 3.5-7.9 7.9s3.5 7.9 7.9 7.9 7.9-3.5 7.9-7.9v-1.5h-7.9v3zM21.7 11v-2.2h-2v2.2h-2.2v2h2.2v2.2h2v-2.2h2.2v-2z"/>
    </symbol>

    <symbol id="instagram" viewBox="0 0 24 24">
        <path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.2.4.4 1.1.4 2.2.1 1.3.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.2 1.8-.4 2.2-.2.6-.5 1-.9 1.4-.4.4-.8.7-1.4.9-.4.2-1.1.4-2.2.4-1.3.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-1.8-.2-2.2-.4-.6-.2-1-.5-1.4-.9-.4-.4-.7-.8-.9-1.4-.2-.4-.4-1.1-.4-2.2-.1-1.3-.1-1.6-.1-4.8s0-3.6.1-4.8c0-1.2.2-1.9.3-2.3.2-.6.5-1 .9-1.4.5-.4.9-.6 1.4-.9.4-.1 1.1-.3 2.3-.4h4.8m0-2.2c-3.3 0-3.7 0-4.9.1-1.3 0-2.2.2-3 .5-.7.3-1.4.7-2.1 1.4-.7.7-1.1 1.4-1.4 2.1-.3.8-.5 1.7-.5 3-.1 1.2-.1 1.6-.1 4.9 0 3.3 0 3.7.1 4.9.1 1.3.3 2.1.6 2.9.2.8.6 1.5 1.3 2.2.7.7 1.3 1.1 2.1 1.4.8.3 1.6.5 2.9.6h5s3.7 0 4.9-.1c1.3-.1 2.1-.3 2.9-.6.8-.3 1.5-.7 2.1-1.4.7-.7 1.1-1.3 1.4-2.1.3-.8.5-1.6.6-2.9.1-1.2.1-1.6.1-4.9s0-3.7-.1-4.9c-.1-1.3-.3-2.1-.6-2.9-.2-.8-.6-1.5-1.3-2.2-.7-.7-1.3-1.1-2.1-1.4-.8-.3-1.6-.5-2.9-.6h-5zM12 5.8c-3.4 0-6.2 2.8-6.2 6.2s2.8 6.2 6.2 6.2 6.2-2.8 6.2-6.2-2.8-6.2-6.2-6.2zm0 10.2c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"/>
        <circle class="st0" cx="18.4" cy="5.6" r="1.4"/>
    </symbol>

    <symbol id="linkedin" viewBox="0 0 24 24">
        <path d="M22.2 0h-20.4c-1 0-1.8.8-1.8 1.7v20.7c0 1 .8 1.7 1.8 1.7h20.5c1 0 1.8-.8 1.8-1.7v-20.7c-.1-.9-.9-1.7-1.9-1.7zm-14.9 20.2h-3.6v-10.9h3.6v10.9zm-1.8-12.4c-1.2 0-2-.8-2-1.9 0-1.1.8-1.9 2.1-1.9 1.2 0 2 .8 2 1.9-.1 1.1-.9 1.9-2.1 1.9zm14.8 12.4h-3.6v-5.8c0-1.5-.5-2.5-1.8-2.5-1 0-1.6.7-1.9 1.3-.1.2-.1.6-.1.9v6.1h-3.6v-10.9h3.6v1.5c.5-.7 1.3-1.8 3.3-1.8 2.4 0 4.2 1.6 4.2 4.9v6.3z"/>
    </symbol>

    <symbol id="medium" viewBox="0 0 24 24">
        <path d="M7.601 5.357c-2.305-1.137-4.6-2.294-6.899-3.444-.577-.289-.694-.216-.694.43-.001 5.147.005 10.294-.008 15.441-.001.57.224.911.726 1.158 2.126 1.047 4.242 2.116 6.362 3.176l.326.151c.308.115.494-.016.562-.315.032-.14.02-.283.02-.438l.009-15.482c.002-.337-.091-.523-.404-.677zm15.983-.001c-2.369-1.184-4.74-2.366-7.101-3.565-.368-.187-.559-.114-.769.231-1.431 2.356-2.876 4.703-4.328 7.046-.144.233-.15.4-.004.637 1.605 2.593 3.198 5.193 4.795 7.79l.238.36.107-.138c2.426-3.948 4.848-7.898 7.283-11.841.204-.33.01-.405-.221-.52zm.413 16.185c.001-4.694.001-9.387.001-14.081v-.38l-.076-.023-7.257 11.812.257.156c2.095 1.05 4.191 2.098 6.287 3.146l.219.097c.314.112.489-.032.554-.329.027-.128.015-.265.015-.398zm-15.273-14.526c-.001 2.547.003 5.093-.008 7.64-.001.234.105.321.285.411 2.204 1.1 4.405 2.205 6.608 3.307l.333.12-7.183-11.692-.035.214z"/>
    </symbol>

    <symbol id="pinterest" viewBox="0 0 24 24">
        <path d="M5.9 13.9c1.2-2-.4-2.5-.6-4-1-6.1 7.1-10.2 11.4-6 2.9 2.9 1 12-3.7 11-4.6-.9 2.2-8.1-1.4-9.5-3-1.1-4.6 3.6-3.2 5.9-.8 4-2.5 7.7-1.8 12.7 2.3-1.7 3.1-4.8 3.7-8.1 1.2.7 1.8 1.4 3.3 1.5 5.5.4 8.6-5.4 7.8-10.7-.7-4.7-5.5-7.1-10.6-6.6-4.1.4-8.1 3.7-8.3 8.3-.1 2.8.7 4.9 3.4 5.5z"/>
    </symbol>

    <symbol id="stumbleupon" viewBox="0 0 24 24">
        <path d="M13.3 9.6l1.6.8 2.5-.8v-1.4c0-3-2.4-5.4-5.4-5.4s-5.4 2.4-5.4 5.4v7.5c0 .7-.6 1.3-1.3 1.3s-1.3-.6-1.3-1.3v-3.2h-4v3.2c0 3 2.4 5.4 5.4 5.4s5.4-2.4 5.4-5.4v-7.5c0-.7.6-1.3 1.3-1.3s1.3.6 1.3 1.3l-.1 1.4zm6.6 2.9v3.2c0 .7-.6 1.3-1.3 1.3s-1.3-.6-1.3-1.3v-3.2l-2.5.8-1.6-.8v3.2c0 3 2.4 5.4 5.4 5.4s5.4-2.4 5.4-5.4v-3.2h-4.1z"/>
    </symbol>

    <symbol id="twitter" viewBox="0 1 24 23">
        <path d="M21.5 7.6v.6c0 6.6-5 14.1-14 14.1-2.8 0-5.4-.8-7.6-2.2l1.2.1c2.3 0 4.4-.8 6.1-2.1-2.2 0-4-1.5-4.6-3.4.3.1.6.1.9.1.5 0 .9-.1 1.3-.2-2.1-.6-3.8-2.6-3.8-5 .7.4 1.4.6 2.2.6-1.3-.9-2.2-2.4-2.2-4.1 0-.9.2-1.8.7-2.5 2.4 3 6.1 5 10.2 5.2-.1-.4-.1-.7-.1-1.1 0-2.7 2.2-5 4.9-5 1.4 0 2.7.6 3.6 1.6 1-.3 2.1-.7 3-1.3-.4 1.2-1.1 2.1-2.2 2.7 1-.1 1.9-.4 2.8-.8-.6 1.1-1.4 2-2.4 2.7z"/>
    </symbol>

    <symbol id="tumblr" viewBox="0 0 23 23">
        <path d="M12.573 4.94v-4.94h-3.188c-.072.183-.11.4-.11.622-.034.107-.072.184-.072.293-.328 1.829-1.28 3.11-2.892 3.807-.476.218-.914.253-1.39.218v3.987h2.342c.039 5.603.039 8.493.039 8.64v.332c.294 2.449 1.573 3.914 3.843 4.463.914.257 1.901.366 2.892.366 1.279-.036 2.525-.256 3.771-.659v-4.685c-.731.22-1.395.402-1.977.583-1.135.333-2.087.113-2.857-.619-.073-.11-.183-.257-.221-.403-.106-.586-.178-1.206-.178-1.795v-6.222h5.083v-3.988h-5.085z"/>
    </symbol>

    <symbol id="xing" viewBox="0 0 24 24">
        <path d="M3.647 4.74c-.208 0-.384.073-.472.216-.091.148-.077.338.02.531l2.34 4.051v.02l-3.678 6.49c-.096.191-.091.383 0 .531.088.142.244.236.452.236h3.461c.518 0 .767-.349.944-.669l3.737-6.608-2.38-4.15c-.172-.307-.433-.649-.964-.649h-3.46zm14.542-4.74c-.517 0-.741.326-.927.659l-7.702 13.658 4.918 9.023c.172.307.437.659.967.659h3.457c.208 0 .371-.079.459-.221.092-.148.09-.343-.007-.535l-4.88-8.915v-.023l7.664-13.551c.096-.191.098-.386.007-.534-.088-.142-.252-.221-.46-.221h-3.496z"/>
    </symbol>

    <symbol id="youtube" viewBox="0 0 24 24">
        <path d="M23.6 6.3c-.3-1.2-1.4-2.2-2.6-2.3-3-.3-6-.3-9-.3s-6 0-9 .3c-1.2.1-2.3 1.1-2.6 2.3-.4 1.8-.4 3.8-.4 5.7 0 1.9 0 3.9.4 5.7.3 1.2 1.4 2.2 2.6 2.3 3 .3 6 .3 9 .3s6 0 9-.3c1.3-.1 2.3-1.1 2.6-2.4.4-1.7.4-3.7.4-5.6 0-1.9 0-3.9-.4-5.7zm-14.1 9v-6.6l6.5 3.3-6.5 3.3z"/>
    </symbol>

</svg>
<nav class="side">
    <div class="navigation">
        <ul></ul>
    </div>
</nav>
<!-- Panel Top #01 -->
<nav class="panel top forceMobileView">
    <div class="sections desktop">
        <div class="left"><a href="{{ route('home') }}" title="Fitness Studio"><img style="width:120px;"
                        src="{{ asset('assets/assets/svg/logo.png') }}"></a>
        </div>
        <div class="center">
            <ul class="menu bold">
                <li><a href="{{ route('home') }}">Start</a></li>
                <li><a href="{{ route('studio') }}">Studio</a></li>
                <li><a href="{{ route('trainer') }}">Trainer</a></li>
                <li><a href="{{ route('kursplan') }}">Kurse & Pläne</a></li>
                <li><a href="{{ route('firmen') }}">Firmen Fitness</a></li>
                <li><a href="{{ route('aktion') }}">Unsere Aktionen</a></li>
            </ul>
        </div>
        <div class="right">
            <span class="button white round"><a href="{{ route('probetraining') }}">Probetraining</a></span>
            <span class="button actionButton white sidebarTrigger" data-sidebar-id="1"><svg><use
                            xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu"></use></svg></span>
        </div>
    </div>
    <div class="sections compact hidden">
        <div class="left"></div>
        <div class="right"><span class="button actionButton white rounded sidebarTrigger" data-sidebar-id="1"><svg><use
                            xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu"></use></svg></span></div>
    </div>
</nav>
<!-- Sidebar -->
<nav class="sidebar gradient animated" data-sidebar-id="1">
    <div class="close">
        <svg>
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use>
        </svg>
    </div>
    <div class="content">
        <a href="{{ route('home') }}" title="InForm Crailsheim" class="logo"><img class="ae-1"
                                                                                  src="{{ asset('assets/assets/svg/logo.png') }}"></a>
        <ul class="mainMenu uppercase">
            <li class="ae-1"><a href="{{ route('home') }}">Start</a></li>
            <li class="ae-2"><a href="{{ route('studio') }}">Unser Studio</a></li>
            <li class="ae-3"><a href="{{ route('trainer') }}">Trainer Team</a></li>
            <li class="ae-4"><a href="{{ route('kursplan') }}">Kurse & Kursplan</a></li>
            <li class="ae-5"><a href="{{ route('probetraining') }}">Probetraining</a></li>
            <li class="ae-6"><a href="{{ route('aktion') }}">Aktionen</a></li>
        </ul>
        <ul class="subMenu">
            <li class="ae-6"><a href="{{ route('rundgang') }}">Studio Rundgang</a></li>
            <li class="ae-6"><a href="{{ route('shop') }}">InForm Body Shop</a></li>
            <li class="ae-6"><a href="{{ route('wellness') }}">Wellness</a></li>
            <li class="ae-7"><a href="{{ route('personal') }}">Personal Training</a></li>
            <li class="ae-7"><a href="{{ route('firmen') }}">Firmen Fitness</a></li>
            <li class="ae-7"><a href="{{ route('kontakt') }}">Kontakt</a></li>
        </ul>
        <div class="margin-bottom-3 ae-8">
            <div class="fb-page" data-href="https://www.facebook.com/Fitnessstudio-InForm-202088929814490/"
                 data-width="245" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false"
                 data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/Fitnessstudio-InForm-202088929814490/"
                            class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/Fitnessstudio-InForm-202088929814490/">InForm Fitness
                        Studio</a></blockquote>
            </div>
        </div>
        <ul class="subMenu ae-9">
            <li><a href="{{ route('impressum') }}">Impressum</a></li>
            <li><a href="{{ route('datenschutz') }}">Datenschutz</a></li>
        </ul>
        <ul class="subMenu margin-top-6 ae-9">
            <li><a class="micro bold" href="https://wolf-gate.com">Web Design made in Crailsheim</a></li>
            <li><a class="underline bold micro" href="https://wolf-gate.com">Wolf-Gate</a></li>
        </ul>
    </div>
</nav>
{{ $slot }}
<section class="slide fade zoomout kenBurns" data-name="kontakt" data-title="Kontakt">
    <div class="content">
        <div class="container">
            <div class="wrap">

                <ul class="flex padding-top-5">
                    <li class="col-6-12 ae-4 article left">
                        <h3 class="bold montserrat">Öffnungszeiten:</h3>
                        <p class="bold">
                            <strong>Montag bis Donnerstag:</strong> 7.00 Uhr bis 23.00 Uhr<br/>
                            <strong>Freitag:</strong> 9.00 Uhr bis 23.00 Uhr<br/>
                            <strong>Samstag & Sonntag:</strong> 10.00 Uhr bis 17.00 Uhr<br/>
                            <strong>Feiertag:</strong> 10.00 Uhr bis 14.00 Uhr
                        </p>
                        <h3 class="bold montserrat">Kontakt:</h3>
                        <p class="bold">
                            <strong>InForm: Fitness - & Freizeitanlage</strong><br/>
                            <strong>Wittauer Str. 1</strong><br/>
                            <strong>74564 Crailsheim</strong><br/>
                            <strong>Telefon:</strong> 07951 4713830<br/>
                            <strong>Email:</strong> inform@inform-crailsheim.de
                        </p>

                        <div class="fb-page"
                             data-href="https://www.facebook.com/Fitnessstudio-InForm-202088929814490/"
                             data-width="500" data-small-header="false" data-adapt-container-width="false"
                             data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/Fitnessstudio-InForm-202088929814490/"
                                        class="fb-xfbml-parse-ignore"><a
                                        href="https://www.facebook.com/Fitnessstudio-InForm-202088929814490/">InForm
                                    Fitness Studio</a></blockquote>
                        </div>

                    </li>
                    <li class="col-6-12  padding-top-10 ">
                        <div class="pad-2 ae-5 shadow fix-7-12 selected">
                            <form role="form" method="POST" action="{{ route('kontakt_sended') }}"
                                  class="wide left">
                                {{ csrf_field() }}
                                <h2 class="bold center">Und wann kommst du InForm...</h2>
                                <input class="stroke pair" id="vorname" type="text" name="vorname"
                                       placeholder="Vorname" required/>
                                <input class="stroke pair" id="nachname" type="text" name="nachname"
                                       placeholder="Nachname" required/>
                                <input class="stroke wide" id="email" type="email" name="email"
                                       placeholder="Ihre E-Mail" required/>
                                <input class="stroke wide" id="telefonnummer" type="text" name="telefonnummer"
                                       placeholder="Ihre Tel-Nr." required/>
                                <select class="stroke  wide" id="anfrage" name="anfrage" required="">
                                    <option value="Anfrage auswählen">Bitte Anfrage auswählen</option>
                                    <option value="Probetraining">Probetraining</option>
                                    <option value="Personal Training">Personal Training</option>
                                    <option value="Firmen Fitness">Firmen Fitness</option>
                                    <option value="Andere">Andere</option>
                                </select>
                                <button type="submit" class="button wide fit-red margin-top-1">Jetzt loslegen
                                </button>
                                <p class="micro bold center cropBottom margin-top-1">schnell - kostenlos -
                                    unverbindlich</p>
                            </form>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <div class="background">
        <iframe class="iframeBackground" frameBorder="0"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4113.450562004452!2d10.094583202959807!3d49.12258343537918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xefc5579277ef14f6!2sFitness+Studio+Inform!5e1!3m2!1sde!2sbg!4v1518602861592"></iframe>
    </div>
</section>


<div class="dialogContainer bottom">
    <div class="dialog" data-dialog-id="dialog" data-set-cookie="30">
        <div class="close" data-dialog-action="close"></div>
        <div class="dialogContent">
            <div class="text center">
                <p class="small uppercase montserrat bold">7 Tage Probetraining und Rückenratgeber als Ebook
                    sichern!</p>
                <a href="http://inform-crailsheim.mein-probetraining.de" class="button wide fit-red crop"
                   data-dialog-action="close">Jetzt testen!</a>
            </div>
        </div>
    </div>
</div>
<nav class="panel bottom">
    <div class="sections">
        <div class="left"><a target="_blank" href="https://wolf-gate.com"><h6 class="small semiBold uppercase">Web-Entwicklung</h6><h6 class="small uppercase">Wolf-Gate Crailsheim</h6></a></div>
        <div class="center"><span class="nextSlide"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                              xlink:href="#arrow-down"></use></svg></span></div>
        <div class="right"></div>
    </div>
</nav>
<script src="{{ asset('assets/js/jquery.js') }}" type="text/javascript" name="plugins"></script>
<script src="{{ asset('assets/js/slides.js') }}" type="text/javascript" name="plugins"></script>
<script src="{{ asset('assets/js/plugins.js') }}" type="text/javascript" name="plugins"></script>
<script src="{{ asset('assets/js/custom.js') }}" type="text/javascript" name="plugins"></script>
{{ $bottomBlock or '' }}
</body>
</html>

