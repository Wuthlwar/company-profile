@extends('layouts.main')
@section('content')

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>
    </div>
    <section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <div class="news-details__img">
                            <img src="{{asset('assets/photos/currentbranch.jpg')}}" alt="">
                        </div>
                        <div class="news-details__content">
                            <h3 class="news-details__title">PRO 1 Global Home Center</h3>
                            <p class="news-details__text-1">{{__('establishyear.establish_detail')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <form action="#" class="sidebar__search-form">
                                <h5>{{__('establishyear.establish_social')}}</h5>
                            </form>
                        </div>
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Latest Posts</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/pro1homecenter/">
                                        <div class="sidebar__post-image">
                                            <img src="{{asset('assets/photos/facebook6.jpg')}}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i class="far fa-user-circle"></i> by Admin</span>
                                                <a target="_blank" href="https://www.facebook.com/pro1homecenter/">Facebook
                                                </a>
                                            </h3>
                                        </div>

                                    </a>

                                </li>
                                <li>
                                    <a target="_blank" href="https://invite.viber.com/?g2=AQB%2BIxt%2BiHONWkjqz%2FbmgmTW2jaFd73U66dVh7ZdzTh5iUk5ZWHHexew8X%2F%2FPIXM">
                                        <div class="sidebar__post-image">
                                            <img src="{{asset('assets/photos/viber2.jpg')}}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i class="far fa-user-circle"></i> by Admin</span>
                                                <a target="_blank" href="https://invite.viber.com/?g2=AQB%2BIxt%2BiHONWkjqz%2FbmgmTW2jaFd73U66dVh7ZdzTh5iUk5ZWHHexew8X%2F%2FPIXM">Viber</a>
                                            </h3>
                                        </div>
                                    </a>

                                </li>
                                <li>
                                    <a target="_blank" href="https://www.youtube.com/channel/UCvTMpi4etgXlCdnIEMkO8Ig">
                                        <div class="sidebar__post-image">
                                            <img src="{{asset('assets/photos/youtube7.jpg')}}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i class="far fa-user-circle"></i> by Admin</span>
                                                <a target="_blank" href="https://www.youtube.com/channel/UCvTMpi4etgXlCdnIEMkO8Ig">youtube</a>
                                            </h3>
                                        </div>
                                    </a>

                                </li>
                                <li>
                                    <a target="_blank" href="https://instagram.com/pro1_global_home_center?igshid=YmMyMTA2M2Y=">
                                        <div class="sidebar__post-image">
                                            <img src="{{asset('assets/photos/instagram2.jpg')}}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i class="far fa-user-circle"></i> by Admin</span>
                                                <a target="_blank" href="https://instagram.com/pro1_global_home_center?igshid=YmMyMTA2M2Y=">Instagram</a>
                                            </h3>
                                        </div>
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Details End-->

@endsection

