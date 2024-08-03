<!-- footer -->
<div class="con__black">
    <footer>
        <div class="footer__con-top">
            <div class="footer__con-left">
                <a href="{{ route('public-part.home') }}">
                    <img src="{{ asset('files/images/default/logo_full_white.svg') }}" alt="">
                </a>

                <div class="footer__address">
                    <h5 class="heading-h5">Adresa:</h5>
                    <a target="_blank" href="https://maps.app.goo.gl/JaxgLqWyqMFznR7J9"> Kolodvorska 12A, 71000 Sarajevo.</a>
                </div>
                <div class="footer__contact">
                    <h5 class="heading-h5">Kontakt:</h5>
                    <a class="underlined" href="tel:0038733741284">+387 61 225 883</a>
                    <a class="underlined" href="mailto:info@znzkvi.ba"> info@cozyfirm.com </a>
                </div>
                <div class="footer__socials">
                    <a href="https://www.facebook.com/kviz.znzkvi" target="_blank">
                        <img src="{{ asset('files/images/default/fb_1.png') }}" alt="Facebook icon"/>
                    </a>
                    <a href="https://www.instagram.com/kviz.znzkvi/" target="_blank">
                        <img src="{{ asset('files/images/default/ig_1.png') }}" alt="Instagram icon"/>
                    </a>
                    <a href="https://www.youtube.com/@KvizZNZKVI2023" target="_blank">
                        <img src="{{ asset('files/images/default/yt_1.png') }}" alt="Youtube icon"/>
                    </a>
                </div>
            </div>
            <div class="footer__con-right">
                <ul class="footer__list1">
                    <li class="footer__list1-item">
                        <h4 class="footer__list1-header">{{ __('O nama') }}</h4>
                    </li>
                    <li class="footer__list1-item">
                        <a class="footer__list1-link" href="#"> {{ __('Naš tim') }} </a>
                    </li>
                    <li class="footer__list1-item">
                        <a class="footer__list1-link" href="#">{{ __('Kontaktirajte nas') }}</a>
                    </li>
                    <li class="footer__list1-item">
                        <a class="footer__list1-link" href="#"> {{ __('Blog sekcija') }} </a>
                    </li>
                    <li class="footer__list1-item">
                        <a class="footer__list1-link" href="#"> {{ __('Ostalo') }} </a>
                    </li>
                </ul>
                <ul class="footer__list2">
                    <li class="footer__list1-item">
                        <h4 class="footer__list1-header">{{ __('Nekretnine') }}</h4>
                    </li>
                    <li class="footer__list2-item">
                        <a class="footer__list2-link" href="#">{{ __('Kuće') }}</a>
                    </li>
                    <li class="footer__list2-item">
                        <a class="footer__list2-link" href="#">{{ __('Stanovi') }}</a>
                    </li>
                    <li class="footer__list2-item">
                        <a class="footer__list2-link" href="#">{{ __('Apartmani') }}</a>
                    </li>
                    <li class="footer__list2-item">
                        <a class="footer__list2-link" href="#"> {{ __('Zemljišta') }} </a>
                    </li>
                    <li class="footer__list2-item">
                        <a class="footer__list2-link" href="#"> {{ __('Poslovni prostori') }} </a>
                    </li>
                    <li class="footer__list2-item">
                        <a class="footer__list2-link" href="#"> {{ __('Vikendice') }} </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__con-bottom">
            <p> <a href="https://cozyfirm.com/">© {{ date('Y') }} Cozy Firm d.o.o</a> <span>|</span> {{ __('Sva prava zadržana') }} </p>
            <ul class="con__bottom-list">
                <li class="con__bottom-item">
                    <a href="#" class="con__bottom-link underlined"> {{ __('Pravila privatnosti') }} </a>
                </li>
                <li class="con__bottom-item">
                    <a href="#" class="con__bottom-link underlined"> {{ __('Uslovi korištenja') }} </a>
                </li>
                <li class="con__bottom-item">
                    <a href="#" class="con__bottom-link underlined">{{ __('Korisnički kolačići') }}</a>
                </li>
            </ul>
        </div>
    </footer>
</div>
