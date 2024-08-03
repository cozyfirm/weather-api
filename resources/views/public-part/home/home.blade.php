@extends('public-part.layout.layout')

@section('content')
    <div class="slider">
        <div class="slider__inner inner_wrapper">
            <div class="slider__inner_center">
                <div class="slider__left__line">
                    <div class="circle__wrapper">
                        <div class="circle__"></div>
                    </div>
                    <div class="line__ line__top"></div>
                    <div class="middle__icon">
                        <img src="{{ asset('files/images/icons/code.png') }}" alt="">
                    </div>
                    <div class="line__ line__bottom"></div>
                </div>
                <div class="slider__right__text">
                    <h1> {{ __("Let's build it together") }} </h1>
                    <h4> {{ __('Taking to long? Contact us to improve your software') }} </h4>

                    <div class="forms__wrapper">
                        <input type="text" name="chat" id="chat" placeholder="{{ __('Pišite nam ..') }}">
                        <button>{{ __('Kontaktirajte nas') }}</button>
                    </div>

                    <h4> {{ __('We use') }} </h4>
                    <div class="technologies__wrapper">
                        <img src="{{ asset('files/images/icons/laravel.png') }}" alt="">
                        <img src="{{ asset('files/images/icons/php.png') }}" alt="">
                        <img src="{{ asset('files/images/icons/jquery.png') }}" alt="">
                        <img src="{{ asset('files/images/icons/cpp.png') }}" alt="">
                        <img src="{{ asset('files/images/icons/reaact_n.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <img class="right__img" src="{{ asset('files/images/icons/network.png') }}" alt="">
    </div>
@endsection
