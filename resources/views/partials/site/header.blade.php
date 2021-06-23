<div id="header-wrap">
    <div class="container clearfix menu-main-container">
        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
        <div id="logo">
            <a href="{{route('web.site.home')}}" class="standard-logo"
               data-dark-logo="{{ secure_asset("/img/logo.png") }}" >
                <img src="{{ secure_asset("/img/logo.png") }}" alt="{{__('general.company')}}">
            </a>
            <a href="{{route('web.site.home')}}" class="retina-logo" data-dark-logo="{{ secure_asset("img/logo.png") }}" title="{{ __('general.home_page') }}">
                <img src="{{ secure_asset("img/logo.png") }}" alt="{{__('general.company')}}">
            </a>
        </div>
        <nav id="primary-menu"  class="dark">
            <ul>
                <li>
                    <a href="{{route('web.site.home')}}" title="{{ __('general.home_page') }}">
                        <div>{{__('general.home_page')}}</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('web.site.contact') }}" title="{{ __('general.contact') }}">
                        <div>{{ __('general.contact') }}</div>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
