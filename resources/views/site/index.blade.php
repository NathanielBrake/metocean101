@extends('layouts.site',['header' => 'transparent-header'])
@section('title', __('general.home_page_title'))
@section('description', __('general.home_page_description'))
@section('keywords', __('general.home_page_keywords'))

@section('slider')
    <section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix force-full-screen floating-header dont-deduct-height-off" data-autoplay="7000" data-speed="750" data-loop="false">

        <div class="slider-parallax-inner">

            <div class="swiper-container swiper-parent swiper-container-horizontal">
                <div class="swiper-wrapper">
                    <div class="d-flex flex-direction-nav align-items-center swiper-slide dark" style="background-image: url('{{ secure_asset('/img/home_background.jpg') }}') ; background-size: cover;" data-swiper-slide-index="0">
                        <div class="container clearfix">
                            <div class="col_full vertical-middle dark fright nobottommargin fadeIn animated text-center" style="top: -63px; position: relative;">
                                <h1 class="pb-3">Make a more informed decision today.</h1>
                                <h3 class="pb-3">Get the best interactive data with MetOcean Analytics</h3>
                                <a href="{{ route('web.site.data') }}" class="btn btn-primary btn-lg">You Won't Look Back!</a>
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
