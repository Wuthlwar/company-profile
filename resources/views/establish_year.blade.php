@extends('layouts.main')
@section('content')

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>
        <!-- /.sticky-header__content -->
    </div>
    <!-- /.stricky-header -->
    <!--News Details Start-->
    <section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <div class="news-details__img">
                            <img src="{{asset('assets/Photos/currentbranch.png')}}" alt="">
                        </div>
                        <div class="news-details__content">
                            <!-- <ul class="list-unstyled news-details__meta">
                                <li><a href="news-details.html"><i class="far fa-calendar"></i> 15 March, 2022 </a>
                                </li>
                                <li><a href="news-details.html"><i class="far fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul> -->
                            <h3 class="news-details__title">PRO 1 Global Home Center</h3>
                            <p class="news-details__text-1">PRO1 GLOBAL HOME CENTER has an experience of home building and living store center 10 years, which offers construction material, home decorative products, tools and equipment used in construction, home improvement, and
                                household and gardening decoration in modern trade warehouse style. Currently, PRO 1 Global Home Center has totally 11 branches and trying to expansion branches to cover all Myanmar region and become the leader of one
                                stop service home living product center</p>
                        </div>
                        <!-- <h3 class="news-details__title">Joint Venture</h3> -->

                        <!-- <div class="blgo-details__pagenation-box">
                            <ul class="list-unstyled news-details__pagenation">
                                <li>We proudly protect our loved ones life</li>
                                <li>Survived not only five centuries</li>
                            </ul>
                        </div> -->
                        <!-- <div class="comment-one">
                            <h3 class="comment-one__title">2 comments</h3>
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="assets/images/blog/comment-1-1.jpg" alt="">
                                </div>
                                <div class="comment-one__content">
                                    <h3>Kevin Martin</h3>
                                    <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod.</p>
                                    <a href="news-details.html" class="thm-btn comment-one__btn">Reply</a>
                                </div>
                            </div>
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="assets/images/blog/comment-1-2.jpg" alt="">
                                </div>
                                <div class="comment-one__content">
                                    <h3>Sarah Albert</h3>
                                    <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod.</p>
                                    <a href="news-details.html" class="thm-btn comment-one__btn">Reply</a>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="comment-form">
                            <h3 class="comment-form__title">Leave a comment</h3>
                            <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box text-message-box">
                                            <textarea name="message" placeholder="Write a comment"></textarea>
                                        </div>
                                        <div class="comment-form__btn-box">
                                            <button type="submit" class="thm-btn comment-form__btn">Submit comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <form action="#" class="sidebar__search-form">
                                <h5>If you want to go to PRO 1 Global Coampany's Social Media, click on the relevant Social Platform Photos below</h5>
                                <!-- <input type="search" placeholder="If you want to go to PRO 1's Social Media, click on the relevant Social Platform Photos below"> -->
                                <!-- <button type="submit"><i class="icon-magnifying-glass"></i></button> -->
                            </form>
                        </div>
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Latest Posts</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/pro1homecenter/">
                                        <div class="sidebar__post-image">
                                            <img src="{{asset('assets/Photos/facebook6.jpg')}}" alt="">
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
                                            <img src="{{asset('assets/Photos/viber2.jpg')}}" alt="">
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
                                            <img src="{{asset('assets/Photos/youtube7.jpg')}}" alt="">
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
                                            <img src="{{asset('assets/Photos/instagram2.jpg')}}" alt="">
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
                        <!-- <div class="sidebar__single sidebar__category">
                            <h3 class="sidebar__title">Categories</h3>
                            <ul class="sidebar__category-list list-unstyled">
                                <li><a href="news-details.html">Life Insurance <span class="fas fa-angle-double-right"></span></a></li>
                                <li class="active"><a href="news-details.html">Health <span class="fas fa-angle-double-right"></span></a></li>
                                <li><a href="news-details.html">Policies <span class="fas fa-angle-double-right"></span></a>
                                </li>
                                <li><a href="news-details.html">Payments <span class="fas fa-angle-double-right"></span></a></li>
                                <li><a href="news-details.html">Home Insurance <span class="fas fa-angle-double-right"></span></a>
                                </li>
                            </ul>
                        </div> -->
                        <!-- <div class="sidebar__single sidebar__tags">
                            <h3 class="sidebar__title">Tags</h3>
                            <div class="sidebar__tags-list">
                                <a href="#">Insurance</a>
                                <a href="#">Policies</a>
                                <a href="#">Financial</a>
                                <a href="#">Health Insurance</a>
                                <a href="#">Money</a>
                            </div>
                        </div> -->
                        <!-- <div class="sidebar__single sidebar__comments">
                            <h3 class="sidebar__title">Comments</h3>
                            <ul class="sidebar__comments-list list-unstyled">
                                <li>
                                    <div class="sidebar__comments-icon">
                                        <i class="fas fa-comment"></i>
                                    </div>
                                    <div class="sidebar__comments-text-box">
                                        <p>A Wordpress Commenter <br> on Launch New Mobile App</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__comments-icon">
                                        <i class="fas fa-comment"></i>
                                    </div>
                                    <div class="sidebar__comments-text-box">
                                        <p><span>John Doe</span> on Template:</p>
                                        <h5>Comments</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__comments-icon">
                                        <i class="fas fa-comment"></i>
                                    </div>
                                    <div class="sidebar__comments-text-box">
                                        <p>A Wordpress Commenter <br> on Launch New Mobile App</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__comments-icon">
                                        <i class="fas fa-comment"></i>
                                    </div>
                                    <div class="sidebar__comments-text-box">
                                        <p> <span>John Doe</span> on Template:</p>
                                        <h5>Comments</h5>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Details End-->
        
@endsection

       