@extends('layouts.site',['header' => 'transparent-header'])
@section('title', __('general.home_page_title'))
@section('description', __('general.home_page_description'))
@section('keywords', __('general.home_page_keywords'))

@section('slider')
    <section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix force-full-screen floating-header dont-deduct-height-off" data-autoplay="7000" data-speed="750" data-loop="false">

        <div class="slider-parallax-inner">

            <div class="swiper-container swiper-parent swiper-container-horizontal">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark" style="background-image: url('{{ secure_asset('/img/home_background.jpg') }}') ; background-size: cover;" data-swiper-slide-index="0">
                        <div class="container clearfix">
                            <div class="col_full vertical-middle dark fright nobottommargin fadeIn animated ww-top-85-per text-center">
                                <h3 class="slogan">It's a matter</h3>
                                <div class="emphasis-title">
                                    <h2 class="slogan ww-fw-900 text-uppercase">Of taste</h2>
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
