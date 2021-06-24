<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}" dir="ltr">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="alternate" hreflang="en-NZ" href="{{ env('APP_URL') }}"/>
        <title>@yield('title') | {{ __('general.company') }}</title>
        <link rel="shortcut icon" href="{{ secure_asset('/img/favicon.ico') }}">
        <meta name="description" content="@yield('description')">
        <meta name="keywords"   content="@yield('keywords')" />
        <meta name="robots" content="index, follow" />
        <meta property="og:title" content="@yield('title') | {{ __('general.company') }}" />
        <meta property="og:description" content="@yield('description')" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="{{ app()->getLocale() }}-NZ" />
        <meta property="og:site_name" content="Met Ocean Analytics" />
        <meta property="og:url" content="{{ url()->full() }}" />
        <meta property="og:image" content="{{ secure_asset('/img/site/wonder-water-unit.png') }}" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ mix('css/moa.css') }}" type="text/css" />
    </head>
    <body class="stretched sticky-responsive-menu no-transition">
    <div id="wrapper" class="clearfix">
        <div id="moa-app">
            @include('partials.site.header')
            @yield('slider')
            <section id="content" class="ww-pd-0px">
                @yield('content')
            </section>
        </div>
    </div>
    <div id="gotoTop" data-mobile='true' class="icon-angle-up">
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>

    </body>
</html>
