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
                                                Eng
                                            </a>
                                        @break
                                        @case('mm')
                                        <a class="iq-sub-card" href="{{ route('lang','en')}}">
                                            Myan
                                        </a>
                                        @break
                                        @default
                                            <a class="iq-sub-card" href="{{ route('lang','mm')}}">
                                                Eng
                                            </a>
                                    @endswitch
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-social-box">
                        <div class="main-header__top-social">
                            <a target="_blank" href="https://www.facebook.com/pro1homecenter/"><i class="fab fa-facebook"></i></a>
                            <a target="_blank" href="https://www.youtube.com/channel/UCvTMpi4etgXlCdnIEMkO8Ig"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                            <a target="_blank" href="https://invite.viber.com/?g2=AQB%2BIxt%2BiHONWkjqz%2FbmgmTW2jaFd73U66dVh7ZdzTh5iUk5ZWHHexew8X%2F%2FPIXM"><i class="fab fa-viber"></i></a>
                            <a target="_blank" href="https://www.instagram.com/pro1_global_home_center/?igshid=YmMyMTA2M2Y%3D"><i class="fab fa-instagram"></i></a>
                        </div>
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
                            <a href="index.html"><img src="{{asset('assets/photos/pro1global_logo_blank.png')}}" alt=""></a>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <div class="main-menu__main-menu-box-inner">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="dropdown">
                                        <a href="{{route('home')}}">Home </a>

                                    </li>
                                    <li class="dropdown current ">
                                        <a href="{{route('home')}}#ourServices">Our Services</a>

                                    </li>
                                    <li class="dropdown ">
                                        <a href="{{route('home')}}#ourCenter">{{__('our_center.our_center')}}</a>

                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('home')}}#ourPatner">Our Partners</a>

                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('home')}}#ouractivities">Our Activities</a>

                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('home')}}#contactus">Contact Us</a>

                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="main-menu__right">
                        <div class="main-menu__call">
                            <div class="main-menu__call-icon">
                                <a href="tel:959428751328"><i class="fas fa-phone"></a></i>
                            </div>
                            <div class="main-menu__call-content">
                                <a href="tel:959428751328">+959428751328</a>
                                <p>Call to Our Head Office</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
