<header id="header" class="navbar navbar-expand-md navbar-light bg-light bd-navbar">
    <nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
        <a href="{{route('web.site.home')}}" class="navbar-brand"
           data-dark-logo="{{ secure_asset("/img/logo.png") }}" >
            <img src="{{ secure_asset("/img/logo.png") }}" alt="{{__('general.company')}}" width="100" height="100">
        </a>
        <div class="collapse navbar-collapse" id="moa-navbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ set_active(['/']) }}" aria-current="page" href="{{route('web.site.home')}}" title="{{ __('general.home_page') }}">{{__('general.home_page')}}</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link {{ set_active(['data*']) }}" href="{{ route('web.site.data') }}" title="{{ __('general.data') }}">{{ __('general.data') }}</a>
                    </li>
                @endauth
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link {{ set_active(['contact*']) }}" href="{{ route('web.site.contact') }}" title="{{ __('general.contact') }}">{{ __('general.contact') }}</a>--}}
{{--                </li>--}}
            </ul>
            <div class="navbar-nav d-flex float-end">
                @auth
                    <span class="navbar-text pr-2">Welcome {{ Auth::user()->name }}</span>
                    <a class="nav-link" aria-current="page" href="{{route('logout')}}" title="{{ __('general.logout') }}">{{__('general.logout')}}?</a>
                @endauth

                @guest
                    <a class="nav-link {{ set_active(['login*']) }}" aria-current="page" href="{{route('login')}}" title="{{ __('general.login') }}">{{__('general.login')}}</a>
                    <a class="nav-link {{ set_active(['register*']) }}" aria-current="page" href="{{route('register')}}" title="{{ __('general.register') }}">{{__('general.register')}}</a>
                @endguest
            </div>
        </div>
    </nav>
</header>
