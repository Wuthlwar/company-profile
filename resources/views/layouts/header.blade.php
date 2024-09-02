<header class="main-header clearfix">
    <div class="main-header__top">
        <div class="container">
            <div class="main-header__top-inner">
                <div class="main-header__top-address">
                    <ul class="list-unstyled main-header__top-address-list">
                        <li>
                            <i class="icon">
                                <span class="icon-pin"></span>
                            </i>
                            <div class="text">
                                <p>Near Arlain Ngar Sint Pagoda, Lanthit, Insein, Yangon</p>
                            </div>
                        </li>
                        <li>
                            <i class="icon">
                                <span class="icon-email"></span>
                            </i>
                            <div class="text">
                                <p><a href="mailto:info@pro1globalhomecenter.com">info@pro1globalhomecenter.com</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="text">
                                <p><i class="fa fa-phone" style="color: rgb(93, 93, 247);"></i> <a href="tel:+959777048315 , +959777048315">+959777048315</a>
                               {{__('header.menu_7')}}</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="main-header__top-right">
                    <div class="main-header__top-menu-box">
                        <ul class="list-unstyled main-header__top-menu">
                            <li>
                                <div class="languagebox">
                                    @php $locale = session()->get('locale');@endphp
                                    @switch($locale)
                                        @case('en')
                                            <a class="iq-sub-card" href="{{ route('lang','mm')}}">
                                                <img src="{{ asset('assets/photos/uk.png') }}" alt="" style="width:20px">
                                            </a>
                                             @break
                                        @case('mm')
                                        <a class="iq-sub-card" href="{{ route('lang','en')}}">
                                            <img src="{{ asset('assets/photos/myanmar.png') }}" alt="" style="width:20px">
                                        </a>
                                        @break
                                        @default
                                        <a class="iq-sub-card" href="{{ route('lang','en')}}">
                                            <img src="{{ asset('assets/photos/uk.png') }}" alt="" style="width:20px">
                                        </a>
                                    @endswitch
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-social-box">
                    @php $locale = session()->get('locale');@endphp
                    @switch($locale)
                        @case('en')
                        <a class="iq-sub-card" href="{{ route('lang','mm')}}">
                        <input type="checkbox" id="langSwitch1" checked>
                        <label for="langSwitch" class="onbtn languagefont">Eng</label>
                        <label for="langSwitch" class="ofbtn languagefont">Mya</label>
                        </a>
                        @break
                        @case('mm')
                        <a class="iq-sub-card" href="{{ route('lang','en')}}">
                        <input type="checkbox" id="langSwitch2">
                        <label for="langSwitch" class="onbtn languagefont">Eng</label>
                        <label for="langSwitch" class="ofbtn languagefont">Mya</label>
                        </a>
                        @break
                        @default
                        <a class="iq-sub-card" href="{{ route('lang','en')}}">
                            <input type="checkbox" id="langSwitch2">
                            <label for="langSwitch" class="onbtn languagefont">Eng</label>
                            <label for="langSwitch" class="ofbtn languagefont">Mya</label>
                        </a>
                    @endswitch
                    </div>
                    </div>
            </div>
        </div>
    </div>
    <nav class="main-menu clearfix">
        <div class="main-menu__wrapper clearfix">
            <div class="container">
                <div class="main-menu__wrapper-inner clearfix">
                    <div class="main-menu__left">
                        <div class="main-menu__logo">
                            <a href="{{ route('home') }}"><img src="{{asset('assets/photos/pro_1.png')}}" alt="" width="147px" height="48px"></a>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <div class="main-menu__main-menu-box-inner">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">

                                    <li class="dropdown {{ url()->current()==route('home')?'current':'' }}">
                                        <a href="{{route('home')}}" style="font-size: 15px;">{{__('header.menu_1')}}</a>
                                    </li>

                                    <li class="dropdown {{ url()->current()==url('/home#ourServices')?'current':'' }} ">
                                        <a href="{{route('home')}}#ourServices" style="font-size: 14px;">{{__('header.menu_2')}}</a>

                                    </li>
                                    <li class="dropdown ">
                                        <a href="{{route('home')}}#ourCenter" style="font-size: 14px;">{{__('header.menu_3')}}</a>

                                    </li>

                                    <li class="dropdown">
                                        <a href="{{route('home')}}#ourPatner" style="font-size: 14px;">{{__('header.menu_4')}}</a>

                                    </li>

                                    <li class="dropdown">
                                        <a href="{{route('home')}}#ouractivities" style="font-size: 14px;">{{__('header.menu_5')}}</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="{{route('our_photo_gallery')}}" style="font-size: 14px;">{{__('header.menu_15')}}</a>
                                    </li>


                                    <li class="dropdown">
                                        <a href="{{route('Knowledge_Sharing')}}" style="font-size: 14px;">{{__('header.menu_16')}}</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="{{route('our_opportunities')}}" style="font-size: 14px;">{{__('header.menu_8')}}</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="{{route('home')}}#contactus" style="font-size: 14px;">{{__('header.menu_6')}}</a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                    {{-- <div class="main-menu__right">
                        <div class="main-menu__call" style="width:60px;">
                            <div class="main-menu__call-icon" style="height:30px;">
                                <a href="tel:959777048315"><i class="fas fa-phone"></a></i>
                            </div>
                            <div class="main-menu__call-content mt-10">
                                <a href="tel:+959777048315 , +959777048315">+959777048315</a>
                                <p>{{__('header.menu_7')}}</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </nav>
</header>
