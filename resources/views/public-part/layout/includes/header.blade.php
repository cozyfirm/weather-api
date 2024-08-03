<header>
    <div class="inner__header">
        <div class="inner__h__links">
            <div class="ihl__logo">
                <img src="{{ asset('files/images/default/logo.svg') }}" alt="">
            </div>
            <div class="ihl__links">
                <div class="ihl__link">
                    <a href="#">{{ __('Product') }}</a>
                </div>
                <div class="ihl__link">
                    <p>{{ __('Naši proizvodi i usluge') }}</p>
                    <i class="fas fa-chevron-down"></i>

                    <div class="submenu__wrapper">
                        <div class="submenu__link">
                            <h6>{{ __('IT') }}</h6>
                        </div>
                        <div class="submenu__link">
                            <a href="#">{{ __('Web Development') }}</a>
                        </div>
                        <div class="submenu__link">
                            <a href="#">{{ __('Mobilne aplikacije') }}</a>
                        </div>

                        <hr>

                        <div class="submenu__link">
                            <h6>{{ __('Inženjering') }}</h6>
                        </div>
                        <div class="submenu__link">
                            <a href="#">{{ __('Embedded systems') }}</a>
                        </div>
                        <div class="submenu__link">
                            <a href="#">{{ __('PCBs') }}</a>
                        </div>
                    </div>
                </div>
                <div class="ihl__link">
                    <p>{{ __('Blog') }}</p>
                    <i class="fas fa-chevron-down"></i>

                    <div class="submenu__wrapper">
                        <div class="submenu__link">
                            <h6>{{ __('Najnovije') }}</h6>
                        </div>
                        <div class="submenu__link">
                            <a href="#">{{ __('Software') }}</a>
                        </div>
                        <div class="submenu__link">
                            <a href="#">{{ __('Embedded Systems') }}</a>
                        </div>

                        <hr>

                        <div class="submenu__link">
                            <h6>{{ __('Tehnologije') }}</h6>
                        </div>
                        <div class="submenu__link">
                            <a href="#">{{ __('Web Based') }}</a>
                        </div>
                        <div class="submenu__link">
                            <a href="#">{{ __('React Native') }}</a>
                        </div>
                        <div class="submenu__link">
                            <a href="#">{{ __('C / C++') }}</a>
                        </div>
                    </div>
                </div>
                <div class="ihl__link">
                    <a href="#">{{ __('Kontaktirajte nas') }}</a>
                </div>
            </div>
        </div>
        <div class="inner__h__btns">
            <a href="#">
                <div class="ihb__btn ihb__btn_borderless">
                    {{ __('FAQs') }}
                </div>
            </a>
            <a href="#">
                <div class="ihb__btn">
                    {{ __('Prijavite se') }}
                </div>
            </a>
        </div>
    </div>
</header>
