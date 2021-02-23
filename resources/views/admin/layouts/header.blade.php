



<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

<!-- begin:: Header Menu -->
<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>

<!-- end:: Header Menu -->

<!-- begin:: Header Topbar -->
<div class="kt-header__topbar col-md-12">

    <!--begin: Search -->
    <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown col-md-6 head_search_top">
        <div class="form-group has-search head_parent">
            <span class="fa fa-search form-control-feedback"></span>
            <input type="text" class="form-control" placeholder="Search">
        </div>
        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-top-unround dropdown-menu-anim dropdown-menu-lg">
            <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact" id="kt_quick_search_dropdown">
                <form method="get" class="kt-quick-search__form">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
                        <input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
                        <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
                    </div>
                </form>
                <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325" data-mobile-height="200">
                </div>
            </div>
        </div>
    </div>

    <!--end: Search -->

    <!--begin: User Bar -->
    <div class="kt-header__topbar-item kt-header__topbar-item--user col-md-6 head_admin_name">
        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">

            <!--use "kt-rounded" class for rounded avatar style-->
            <div class="kt-header__topbar-user kt-rounded-">
                <span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
                <span class="kt-header__topbar-username kt-hidden-mobile">Allen</span>
                <img alt="Pic" src="assets/media/users/300_25.jpg" class="kt-rounded-" />

                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                <span class="kt-badge kt-badge--username kt-badge--lg kt-badge--brand kt-hidden kt-badge--bold">S</span>
            </div>
        </div>

        
        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-sm">
            <div class="kt-user-card kt-margin-b-40 kt-margin-b-30-tablet-and-mobile" style="background-image: url(assets/media/misc/head_bg_sm.jpg)">
                <div class="kt-user-card__wrapper">
                    <div class="kt-user-card__pic">

                        <!--use "kt-rounded" class for rounded avatar style-->
                        <img alt="Pic" src="assets/media/users/300_21.jpg" class="kt-rounded-" />
                    </div>
                    <div class="kt-user-card__details">
                        <div class="kt-user-card__name">Alex Stone</div>
                        <div class="kt-user-card__position">CTO, Loop Inc.</div>
                    </div>
                </div>
            </div>
            <ul class="kt-nav kt-margin-b-10">
                <li class="kt-nav__item">
                    <a href="custom/profile/personal-information.html" class="kt-nav__link">
                        <span class="kt-nav__link-icon"><i class="flaticon2-calendar-3"></i></span>
                        <span class="kt-nav__link-text">My Profile</span>
                    </a>
                </li>
                <li class="kt-nav__item">
                    <a href="custom/profile/overview-1.html" class="kt-nav__link">
                        <span class="kt-nav__link-icon"><i class="flaticon2-browser-2"></i></span>
                        <span class="kt-nav__link-text">My Tasks</span>
                    </a>
                </li>
                <li class="kt-nav__item">
                    <a href="custom/profile/overview-2.html" class="kt-nav__link">
                        <span class="kt-nav__link-icon"><i class="flaticon2-mail"></i></span>
                        <span class="kt-nav__link-text">Messages</span>
                    </a>
                </li>
                <li class="kt-nav__item">
                    <a href="custom/profile/account-settings.html" class="kt-nav__link">
                        <span class="kt-nav__link-icon"><i class="flaticon2-gear"></i></span>
                        <span class="kt-nav__link-text">Settings</span>
                    </a>
                </li>
                <li class="kt-nav__separator kt-nav__separator--fit"></li>
                <li class="kt-nav__custom kt-space-between">
                    <a href="custom/login/login-v1.html" target="_blank" class="btn btn-label-brand btn-upper btn-sm btn-bold">Sign Out</a>
                    <i class="flaticon2-information kt-label-font-color-2" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                </li>
            </ul>
        </div>
    </div>
    <!--end: User Bar -->
</div>

<!-- end:: Header Topbar -->
</div>