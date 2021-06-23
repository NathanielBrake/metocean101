<header id="header" class="navbar navbar-expand-md navbar-light bg-light bd-navbar">
    <nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
        <a href="{{route('web.site.home')}}" class="navbar-brand"
           data-dark-logo="{{ secure_asset("/img/logo.png") }}" >
            <img src="{{ secure_asset("/img/logo.png") }}" alt="{{__('general.company')}}" width="100" height="100">
        </a>
        <div class="collapse navbar-collapse" id="moa-navbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('web.site.home')}}" title="{{ __('general.home_page') }}">{{__('general.home_page')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('web.site.contact') }}" title="{{ __('general.contact') }}">{{ __('general.contact') }}</a>
                </li>
            </ul>
            <div class="d-flex float-end">
                <a class="nav-link" aria-current="page" href="{{route('login')}}" title="{{ __('general.login') }}">{{__('general.login')}}</a>
                <a class="nav-link" aria-current="page" href="{{route('register')}}" title="{{ __('general.register') }}">{{__('general.register')}}</a>
            </div>
        </div>
    </nav>
</header>
