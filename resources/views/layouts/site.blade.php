<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}" dir="ltr">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="alternate" hreflang="en-NZ" href="{{ env('APP_URL') }}"/>
        <title>@yield('title') | {{ __('general.company') }}</title>
        <link rel="shortcut icon" href="{{ secure_asset('/img/favicon.png') }}">
        <meta name="description" content="@yield('description')">
        <meta name="keywords"   content="@yield('keywords')" />
        <meta name="robots" content="index, follow" />
        <meta property="og:title" content="@yield('title') | {{ __('general.company') }}" />
        <meta property="og:description" content="@yield('description')" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="{{ app()->getLocale() }}-NZ" />
        <meta property="og:site_name" content="Wonder Water" />
        <meta property="og:url" content="{{ url()->full() }}" />
        <meta property="og:image" content="{{ secure_asset('/img/site/wonder-water-unit.png') }}" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="stretched sticky-responsive-menu no-transition">
    <div id="wrapper" class="clearfix">
        <div id="ww-app">
{{--            <div id="top-bar">--}}
{{--                @include('partials.site.topbar')--}}
{{--            </div>--}}
            <header id="header" class="{{ $header??'' }} full-header" data-sticky-class="dark" data-responsive-class="dark">
                @include('partials.site.header')
            </header>
            @yield('slider')
            <section id="content" class="ww-pd-0px">
                @yield('content')
            </section>
{{--            <footer id="footer" class="dark ww-dark-blue-bg-color noborder">--}}
{{--                @include('partials.site.footer')--}}
{{--            </footer>--}}
        </div>
    </div>
    <div id="gotoTop" data-mobile='true' class="icon-angle-up">
    </div>
{{--    <script src="{{ mix('js/vendor/site/vendors.js') }}"></script>--}}
{{--    <script src="{{ mix('js/bundles/site/jquery.js') }}"></script>--}}
{{--    <script src="{{ mix('js/bundles/site/plugins.js') }}"></script>--}}
{{--    <script src="{{ mix('js/bundles/site/functions.js') }}"></script>--}}
{{--    <script src="{{ mix('js/vendor/site/ww-functions.js') }}"></script>--}}

    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>

{{--    @yield('custom-script')--}}
{{--    @include('partials.toastr-init')--}}
    </body>
</html>
