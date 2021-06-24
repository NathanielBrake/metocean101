@extends('layouts.site',['header' => 'transparent-header'])
@section('title', __('general.login'))
@section('description', __('general.home_description'))
@section('keywords', __('general.home_keywords'))

@section('slider')
    <section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix force-full-screen floating-header dont-deduct-height-off" data-autoplay="7000" data-speed="750" data-loop="false">

        <div class="slider-parallax-inner">

            <div class="swiper-container swiper-parent swiper-container-horizontal">
                <div class="swiper-wrapper">
                    <div class="d-flex flex-direction-nav align-items-center swiper-slide dark" style="background-image: url('{{ secure_asset('/img/home_background.jpg') }}') ; background-size: cover;" data-swiper-slide-index="0">
                        <div class="container clearfix">
                            <div class="row justify-content-center">
                                <div class="col-6 vertical-middle dark fright nobottommargin fadeIn animated" style="top: -63px; position: relative;">
                                    <form method="POST" action="{{ route('doLogin') }}">
                                        @honeypot
                                        {{ csrf_field() }}
                                        <h2 class="pb-2">{{ __('general.login') }}</h2>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <input name="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" aria-describedby="emailValidation">
                                            @if ($errors->has('email'))
                                                <span id="emailValidation" class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input name="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" aria-describedby="passwordValidation">
                                            @if ($errors->has('password'))
                                                <span id="passwordValidation" class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input name="remember" type="checkbox" class="form-check-input" id="rememberMe" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="rememberMe">Remember Me</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow">
                <i class="icon-angle-down infinite animated fadeInDown"></i>
            </a>
        </div>

    </section>
@endsection
