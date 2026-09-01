@extends('layouts.main')

@section('content')
    <div class="stricky-header stricked-menu main-menu"><div class="sticky-header__content"></div></div>

    @php
        $policy = request()->route('policy');
        $isPolicyRules = in_array($policy, ['ecommerce', 'member'], true);
    @endphp

    <style>
        .app-policies { padding: 100px 0 110px; background: #f5f8fc; }
        .app-policies__intro { max-width: 760px; margin: 0 auto 45px; text-align: center; }
        .app-policies__eyebrow { color: #0b67c8; font-size: 14px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; }
        .app-policies__title { margin: 10px 0 14px; color: #172844; font-size: 42px; line-height: 1.15; }
        .app-policies__lead { margin: 0; color: #61708a; font-size: 17px; line-height: 1.7; }
        .app-policies__back { display: inline-flex; align-items: center; gap: 8px; margin-top: 22px; padding: 10px 18px; border: 1px solid #0b67c8; border-radius: 999px; color: #0b67c8; font-weight: 700; transition: .2s; }
        .app-policies__back:hover { background: #0b67c8; color: #fff; }
        .app-policies__nav { display: flex; justify-content: center; gap: 12px; flex-wrap: wrap; margin-bottom: 35px; }
        .app-policies__nav a { padding: 11px 20px; border: 1px solid #d7e2f0; border-radius: 999px; background: #fff; color: #172844; font-weight: 700; transition: .2s; }
        .app-policies__nav a:hover { background: #0b67c8; border-color: #0b67c8; color: #fff; }
        .app-policy-card { padding: 34px; border-radius: 14px; background: #fff; box-shadow: 0 12px 36px rgba(20, 57, 102, .08); }
        .app-policy-card__icon { display: flex; align-items: center; justify-content: center; width: 54px; height: 54px; margin-bottom: 20px; border-radius: 12px; background: #eaf4ff; color: #0b67c8; font-size: 24px; }
        .app-policy-card__brand { display: flex; align-items: center; justify-content: center; width: 210px; height: 90px; margin-bottom: 20px; overflow: hidden; border: 1px solid #dce9f8; border-radius: 12px; background: #fff; }
        .app-policy-card__brand img { width: 100%; height: 100%; object-fit: cover; object-position: center; }
        .app-policy-card__brand--member img { object-fit: contain; object-position: center; }
        .app-policy-card h2 { margin-bottom: 14px; color: #172844; font-size: 28px; }
        .app-policy-card__image { display: block; width: 100%; max-width: 290px; margin: 0 auto 24px; object-fit: contain; }
        .app-policy-card__visual { display: flex; align-items: center; justify-content: center; min-height: 210px; margin-bottom: 24px; overflow: hidden; border-radius: 12px; background: #172844; background-image: radial-gradient(circle at 20% 20%, transparent 0, transparent 45px, rgba(104, 137, 183, .18) 46px, transparent 48px), radial-gradient(circle at 90% 55%, transparent 0, transparent 75px, rgba(104, 137, 183, .18) 76px, transparent 78px); }
        .app-policy-card__visual .app-policy-card__image { max-width: 235px; margin: 0; }
        .app-policy-card h3 { margin: 24px 0 8px; color: #172844; font-size: 17px; }
        .app-policy-card p, .app-policy-card li { color: #5d6a7f; line-height: 1.75; }
        .app-policy-card ul { margin: 0; padding-left: 20px; }
        .app-policy-card a { color: #0b67c8; font-weight: 700; }
        .app-policies__notice { margin-top: 32px; padding: 20px 24px; border-left: 4px solid #0b67c8; border-radius: 8px; background: #eaf4ff; color: #42526b; line-height: 1.7; }
        .app-policies--selector .app-policies__nav,
        .app-policies--selector .app-policies__notice { display: none; }
        .app-policies--selector .app-policy-card { min-height: 240px; cursor: pointer; transition: transform .2s, box-shadow .2s; }
        .app-policies--selector .app-policy-card:hover { transform: translateY(-6px); box-shadow: 0 18px 42px rgba(20, 57, 102, .14); }
        .app-policies--selector .app-policy-card__visual,
        .app-policies--selector .app-policy-card__rules,
        .app-policies--selector .app-policy-card h3,
        .app-policies--selector .app-policy-card p,
        .app-policies--selector .app-policy-card ul { display: none; }
        .app-policies--selector .app-policy-card__brand { width: 100%; max-width: 260px; height: 120px; margin: 0 auto 22px; }
        .app-policies--selector .app-policy-card h2 { margin: 0; text-align: center; font-size: 24px; }
        .app-policies--ecommerce #member-app,
        .app-policies--member #ecommerce-app { display: none; }
        .app-policies--ecommerce .app-policies__nav,
        .app-policies--member .app-policies__nav { display: none; }
        .app-policies--ecommerce #ecommerce-app,
        .app-policies--member #member-app { width: 100%; flex: 0 0 100%; max-width: 100%; }
        .app-policies--ecommerce .app-policy-card > h3,
        .app-policies--ecommerce .app-policy-card > p,
        .app-policies--member .app-policy-card > h3,
        .app-policies--member .app-policy-card > p { display: none; }
        @media (max-width: 767px) { .app-policies { padding: 70px 0; } .app-policies__title { font-size: 32px; } .app-policy-card { padding: 25px; } }
    </style>

    <section class="app-policies app-policies--{{ $policy ?: 'selector' }}">
        <div class="container">
            <div class="app-policies__intro">
                <div class="app-policies__eyebrow">PRO 1 Global</div>
                <h1 class="app-policies__title">{{ $policy === 'ecommerce' ? __('app_policy.ecommerce_rules_title') : ($policy === 'member' ? __('app_policy.member_rules_title') : __('app_policy.selector_title')) }}</h1>
                <p class="app-policies__lead">{{ $isPolicyRules ? __('app_policy.rules_lead') : __('app_policy.selector_lead') }}</p>
                @if ($isPolicyRules)
                    <a class="app-policies__back" href="{{ route('our_app_policies') }}"><i class="fa fa-arrow-left"></i> {{ __('app_policy.back_to_policies') }}</a>
                @endif
            </div>

            <nav class="app-policies__nav" aria-label="App policy sections">
                <a href="#ecommerce-app">{{ __('app_policy.ecommerce_policy') }}</a>
                <a href="#member-app">{{ __('app_policy.member_policy') }}</a>
            </nav>

            <div class="row gutter-y-30">
                <div class="col-lg-6" id="ecommerce-app">
                    <article class="app-policy-card" @unless($isPolicyRules) role="link" tabindex="0" onclick="window.location.href='{{ route('app_policy_rules', 'ecommerce') }}'" onkeydown="if (event.key === 'Enter' || event.key === ' ') { event.preventDefault(); window.location.href='{{ route('app_policy_rules', 'ecommerce') }}'; }" @endunless>
                        <div class="app-policy-card__brand app-policy-card__brand--ecommerce">
                            <img src="{{ asset('assets/photos/online.png') }}" alt="PRO 1 Global Online Store">
                        </div>
                        <div class="app-policy-card__visual">
                            <img class="app-policy-card__image" src="{{ asset('assets/photos/onlinestore.png') }}" alt="PRO 1 Global Home Center Online Store App">
                        </div>
                        <h2>{{ __('app_policy.ecommerce_policy') }}</h2>
                        <div class="app-policy-card__rules">
                            @include('partials.app_policy_rules')
                        </div>
                        <h3>Term and Policy</h3>
                        <p>By downloading, accessing or using this application, you agree to be bound by these Terms &amp; Policy of use. <strong>PRO 1 Global Home Center</strong> reserve the right to amend these terms and policy at any time. Continued of use application will constitute acceptance of these terms and policy of use. Term and policy set in under with the laws of Myanmar, <strong>PRO 1 Global member application</strong> doesn't provide to use outside of Myanmar.</p>

                        <h3>Definitions</h3>
                        <p>In these term and policy, the following capitalized terms shall have the following meaning, except where the context otherwise requires:<br>“<strong>User</strong>” means users of this application, PRO 1 Global member, including you and “User” means any one of them.<br>“<strong>Application</strong>” means PRO 1 Global member application.<br>“<strong>We</strong>” and “<strong>Us</strong>” means to PRO 1 Global Co., Ltd.<br>“<strong>Account</strong>” means to member ID.<br>“<strong>Sender</strong>” means to the member who order to transfer his/her point to other member id.<br>“<strong>Receiver</strong>” means to the member who get or receive point from sender member id.</p>

                        <h3>Limitation and Intellectual Property</h3>
                        <p>All editorial content, information, photographs, illustrations, artwork and other graphic materials, and names, logos and trade marks on the application are protected by copyright laws and/or other laws and/or international treaties, and belong to us, as the case may be. These works, logos, graphics, sounds or images may not be copied, reproduced, retransmitted, distributed, disseminated, sold, published, broadcasted or circulated whether in whole or in part, unless expressly permitted by us, as the case may be. User will be allow to connect member id with only 1 mobile device.</p>

                        <h3>Privacy and Accountability</h3>
                        <p><strong>PRO 1 Global member application</strong> was created to support and service to PRO 1 Global member customer. User have to responsible to your member id and pin password from other people to prevent any cause problem and user have to responsible to all transactions were made by this application during your member id was log in. If user lost your mobile phone, user have to contact to <strong>PRO 1 Global Home Center</strong> immediately for inactive your member id, then after you find or get new mobile phone, user can contact to us to make an active member id. Meanwhile, when do you call to us, we will verify your status by asking some information for checking that you are the real own of that member id. We reserve the right to change, modify, substitute, suspend or remove without notice any information or services on the application from time to time. Your access to the application and/or the services may also be occasionally restricted to allow for repairs, maintenance or the introduction of new facilities or services. We will attempt to restore such access as soon as we reasonably can. For the avoidance of doubt, we reserve the right to withdraw any information or services from application at any time. While we may use reasonable efforts to include accurate and up-to-date information on the application, we make no warranties or representations as to its accuracy, timeliness or completeness.</p>

                        <h3>Benefit for members</h3>
                        <p>Member or user will get more benefit in this application than using physical member card such as e-coupon, wallet, gift card top up usage, point expire alert and so on. Benefit are based on individual preferences, so different things are available in each user.</p>

                        <h3>Notifications</h3>
                        <p>Application will send notification when it has new promotion, event, e-coupon, point nearly expire etc. So, we suggest to user to open notification.</p>

                        <h3>Login</h3>
                        <p>User need to input the <strong>PRO 1 Global Member ID</strong> number. Then application will send verify code to user via your register phone number or email. If your register phone number or email don't similar with actual or don't update, user can contact to <strong>PRO 1 Global Home Center</strong> customer service at branch to update your phone number in you register profile. By the way, you need to show your NRC card to verify yourself at PRO 1 Global customer service before request update your profile. After user success to verify, user can create the pin password for use to log in to PRO 1 Global member application and use to confirm your transaction in relate issue about wallet and point function. After user log in success, user can enjoy to use point, redemption, wallet, offer and e-coupon function.</p>

                        <h3>Points</h3>
                        <p>User will get 1 point in every purchase 5,000ks by including product list in member program only. (We have the right to change or revise the product list in member program at any time without notice in advance). When user return the product to us with any reasons, point will be deduct from user account. Point will expire in 1 year or 365 days with start counting from getting date. Point can't change or redeem to cash.</p>

                        <h3>Point Transfer</h3>
                        <p>User can transfer point to other PRO 1 Global member only. When user use function point of Member application transfer to other member id. That point which transfer to other member ID still has the same point expire date from sender. User have to ensure that user know and write down the correct phone number of receiver point when user would like to transfer point. If user write down non-member phone number, application will reject that point transfer request. Point transfer will transfer the point which nearest expire from sender account.</p>

                        <h3>Point Redemption</h3>
                        <p>User can enjoy to change your point to the redeem prize by use this function and contact to <strong>PRO 1 Global customer service</strong>.</p>

                        <h3>Wallet</h3>
                        <p>User can top up the money to his/her wallet account by inquiry to PRO 1 Global customer service. User have to request pay slip from PRO 1 Global customer service to recheck with top up balance in your account. User can add top up by scanning code or type code from gift card. In addition, after user scan or type code of that gift card, that gift card value will transfer to your account and that gift card can't use anymore. If user would like to pay by wallet, user have to type how much value would like to pay for generate QR code. Then user show your mobile screen to scan at POS to pay.</p>

                        <h3>E-Coupon</h3>
                        <p>We provide this E-coupon function for support and offer special benefit for member customer who using member application only. So, we deeply invite our member customer to download and use this application to get more benefit than using physical member card. User have to understand that each e-coupon has an expired date. So, please use that e-coupon before expire. Each user won't get same offer e-coupon accordingly to <strong>PRO 1 Global Home Center</strong> criteria.</p>

                        <h3>User Profile</h3>
                        <p>We suggest to user to update his/her profile to correct information to get the best offer benefit but some information with relate about privacy and account id, we don't allow user to change information in application such as birth day, email and phone number. So, if user would like to update or change information. User can contact to PRO 1 Global customer service and verify your identity for changing it.</p>

                        <h3>PRO 1 Global Member Application Usage</h3>
                        <p>We doesn't commit or guarantee that this application won't be shown any errors. So, if user find any errors, please feel free to contact our PRO 1 Global team via customer service counter, PRO 1 Global Facebook page or PRO 1 Global hotline. We will try as fast as we can to correct that error and solve it. During member application on process to upgrading the version. Sometimes might be stop running temporary or running slow but we will try to announce and let user know in advance. We don't take responsibility according from the problem of internet connection and mobile device.</p>

                        <h3>Privacy and protection</h3>
                        <p>We will keep user data as a secure and utilize the data for support user to get more convenience and offer, we intend accordingly with the Data Protection Act of Myanmar.</p>

                        <h3>Contact us</h3>
                        <p>If user have any query about PRO 1 Global Member Application, please feel free to contact to us.</p>
                    </article>
                </div>

                <div class="col-lg-6" id="member-app">
                    <article class="app-policy-card" @unless($isPolicyRules) role="link" tabindex="0" onclick="window.location.href='{{ route('app_policy_rules', 'member') }}'" onkeydown="if (event.key === 'Enter' || event.key === ' ') { event.preventDefault(); window.location.href='{{ route('app_policy_rules', 'member') }}'; }" @endunless>
                        <div class="app-policy-card__brand app-policy-card__brand--member">
                            <img src="{{ asset('assets/photos/member-logo-cropped.jpg') }}" alt="PRO 1 Membership">
                        </div>
                        <div class="app-policy-card__visual">
                            <img class="app-policy-card__image" src="{{ asset('assets/photos/memberapp.png') }}" alt="PRO 1 Membership">
                        </div>
                        <h2>{{ __('app_policy.member_policy') }}</h2>
                        <div class="app-policy-card__rules">
                            @include('partials.app_policy_rules')
                        </div>
                        <h3>Term and Policy</h3>
                        <p>By downloading, accessing or using this application, you agree to be bound by these Terms &amp; Policy of use. PRO 1 Global Home Center reserves the right to amend these terms and policy at any time. Continued use of the application constitutes acceptance of these terms and policy of use. Terms and policy are set under the laws of Myanmar. PRO 1 Global Member Application is not provided for use outside of Myanmar.</p>

                        <h3>Definitions</h3>
                        <p>“User” means users of this application, PRO 1 Global members, including you, and “User” means any one of them.<br>“Application” means PRO 1 Global Member Application.<br>“We” and “Us” means PRO 1 Global Co., Ltd.<br>“Account” means member ID.<br>“Sender” means the member who orders to transfer points to another member ID.<br>“Receiver” means the member who receives points from the sender member ID.</p>

                        <h3>Limitation and Intellectual Property</h3>
                        <p>All editorial content, information, photographs, illustrations, artwork and other graphic materials, and names, logos, and trademarks on the application are protected by copyright laws and/or other laws and/or international treaties, and belong to us. These works, logos, graphics, sounds or images may not be copied, reproduced, retransmitted, distributed, sold, published, broadcasted, or circulated without our permission. User will be allowed to connect a member ID with only 1 mobile device.</p>

                        <h3>Privacy and Accountability</h3>
                        <p>Users are responsible for their member ID and PIN to prevent any issues and are accountable for all transactions made while logged in. Lost devices must be reported immediately to PRO 1 Global Home Center for member ID deactivation. We reserve the right to modify or remove any information or services without notice. Access may be restricted for maintenance or updates.</p>

                        <h3>Benefit for Members</h3>
                        <p>Members enjoy additional benefits compared to using a physical card, such as e-coupons, wallet, gift card top-ups, and point alerts. Benefits vary by user preferences.</p>

                        <h3>Notifications</h3>
                        <p>The application will send notifications for promotions, events, e-coupons, or points nearing expiration. Users are advised to enable notifications.</p>

                        <h3>Login</h3>
                        <p>Users enter their PRO 1 Global Member ID, receive a verification code via registered phone/email, and set a PIN for login and transaction confirmation. Profile updates require identity verification at PRO 1 Global customer service.</p>

                        <h3>Points</h3>
                        <p>Users earn 1 point for every 5,000ks purchase (product list may change). Points are deducted on product returns and expire after 1 year. Points cannot be redeemed for cash.</p>

                        <h3>Point Transfer</h3>
                        <p>Points can be transferred to other PRO 1 Global members, retaining the original expiry date. Users must provide the correct receiver information; incorrect numbers will reject the transfer.</p>

                        <h3>Point Redemption</h3>
                        <p>Users can redeem points for prizes by using the application and contacting PRO 1 Global customer service.</p>

                        <h3>E-Coupon</h3>
                        <p>E-coupons provide special benefits for members. Each coupon has an expiry date, and offers vary based on PRO 1 Global Home Center criteria.</p>

                        <h3>User Profile</h3>
                        <p>Users should update profiles for best benefits. Certain fields like birthdate, email, and phone cannot be changed via the app. Profile changes require customer service verification.</p>

                        <h3>PRO 1 Global Member Application Usage</h3>
                        <p>We do not guarantee the app is error-free. Users should report issues via customer service, Facebook, or hotline. App performance may vary during upgrades. We are not responsible for internet or device issues.</p>

                        <h3>Privacy and Protection</h3>
                        <p>User data is securely stored and utilized to enhance convenience and offers in accordance with the Data Protection Act of Myanmar.</p>

                        <h3>Contact Us</h3>
                        <p>For any queries about PRO 1 Global Member Application, please contact us.</p>
                    </article>
                </div>
            </div>

            <div class="app-policies__notice">{{ __('app_policy.notice') }}</div>
        </div>
    </section>
@endsection
