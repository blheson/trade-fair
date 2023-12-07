<?php

/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Studio_Grade
 */

get_header('home');
$products = wc_get_products(array(
    'category' => array('vendors'),
    'orderby' => 'menu_order',
    'order' => 'asc'
));

?>
<header style="transform: translateY(-43px);">
    <a class="c-banner__link" id="js-banner" href="https://www.paystack.com/terminal/" style="opacity: 0;">
        <div class="c-banner c-banner--header">
            <div class="c-banner__background"></div>
            <div class="c-banner__content">

            </div>
        </div>
    </a>

    <nav>
        <div class="c-nav c-nav--green">
            <div class="c-nav--left">
                <a href="https://blessingudor.com" class="c-nav__logo">
                    <img src="http://9jababytradefair.com/wp-content/uploads/2023/10/Logo-png-1.png" alt="" width="100">
                </a>
                <!-- <ul class="c-nav-menu c-nav-menu--horizontal">
                    <li class="c-nav-menu__item u-has-dropdown u-has-dropdown--two-sides">
                        <a href="#">Learn
                            <span class="u-icon-arrow"></span>
                        </a>
                        <div class="c-dropdown c-dropdown--flip c-dropdown--has-two-sides">
                            <div class="c-dropdown__side c-dropdown__side--darker c-dropdown__side--flex">
                                <ul class="c-nav-menu">
                                    <li class="c-nav-menu__item c-nav-menu__item--has-icon">
                                        <a target="_blank" rel="noopener" href="/blog">
                                            <div class="c-nav-menu__icon c-nav-menu__icon--md">
                                                <img class=" u-lazyload--is-done" data-src="/assets/img/icon/navigation/learn/blog_db.svg" alt="Blog icon" src="/assets/img/icon/navigation/learn/blog_db.svg">
                                            </div>
                                            <div class="c-nav-menu__text">
                                                <h4>Blog</h4>
                                                <p>Original lessons about making the internet work for your business</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="c-nav-menu__item c-nav-menu__item--has-icon">
                                        <a href="/guides">
                                            <div class="c-nav-menu__icon c-nav-menu__icon--md">
                                                <img class=" u-lazyload--is-done" data-src="/assets/img/icon/navigation/learn/guides_db.svg" alt="Guides icon" src="/assets/img/icon/navigation/learn/guides_db.svg">
                                            </div>
                                            <div class="c-nav-menu__text">
                                                <h4>Guides</h4>
                                                <p>Big ideas in payments, explained in simple English</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="c-nav-menu__item c-nav-menu__item--has-icon">
                                        <a target="_blank" rel="noopener" href="/tutorials">
                                            <div class="c-nav-menu__icon c-nav-menu__icon--md">
                                                <img class=" u-lazyload--is-done" data-src="/assets/img/icon/navigation/learn/tutorials_db.svg" alt="Tutorial icon" src="/assets/img/icon/navigation/learn/tutorials_db.svg">
                                            </div>
                                            <div class="c-nav-menu__text">
                                                <h4>Video Tutorials</h4>
                                                <p>Quick video tutorials on how to use Paystack</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="c-nav-menu__item c-nav-menu__item--has-icon">
                                        <a target="_blank" rel="noopener" href="https://decodefintech.com">
                                            <div class="c-nav-menu__icon c-nav-menu__icon--md">
                                                <img class=" u-lazyload--is-done" data-src="/assets/img/icon/navigation/learn/decode_fintech_db.svg" alt="Tutorial icon" src="/assets/img/icon/navigation/learn/decode_fintech_db.svg">
                                            </div>
                                            <div class="c-nav-menu__text">
                                                <h4>Decode Fintech</h4>
                                                <p>The trade email newsletter and podcast for leaders in African fintech</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="c-dropdown__side c-dropdown__side--light-grey">
                                <ul class="c-nav-menu c-nav-menu--vertical">
                                    <div class="c-nav-menu__label">Company</div>
                                    <li class="c-nav-menu__item">
                                        <a href="/about">About Us</a>
                                    </li>
                                    <li class="c-nav-menu__item">
                                        <a href="/subscribe">Subscribe</a>
                                    </li>
                                    <li class="c-nav-menu__item">
                                        <a href="/compliance">Compliance</a>
                                    </li>
                                    <li class="c-nav-menu__item">
                                        <a href="/careers">Careers</a>
                                    </li>
                                    <li class="c-nav-menu__item">
                                        <a href="/brand">Brand</a>
                                    </li>
                                    <li class="c-nav-menu__item">
                                        <a href="/media">Media Kit</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul> -->
            </div>
            <div class="c-nav--right">
                <ul class="c-nav-menu c-nav-menu--horizontal">

                    <!-- <li class="c-nav-menu__item u-has-dropdown">
                        <a href="#">Support
                            <span class="u-icon-arrow"></span>
                        </a>
                        <div class="c-dropdown c-dropdown--flip">
                            <ul class="c-nav-menu c-nav-menu--vertical">
                                <li class="c-nav-menu__item">
                                    <a target="_blank" rel="noopener" href="/help">Quick Help</a>
                                </li>
                                <li class="c-nav-menu__item">
                                    <a href="/contact">Contact Us</a>
                                </li>

                            </ul>
                        </div>
                    </li> -->
                    <li class="c-nav-menu__item c-nav-menu__item--green">
                        <a href="#">Contact Us</a>
                    </li>

                    <li class="c-nav-menu__item u-has-dropdown c-nav-menu__item--countries">
                        <a href="#">
                            <span class="u-flag-icon u-flag-icon--ng"></span>
                        </a>
                        <div class="c-dropdown c-dropdown--flip c-dropdown--reversed c-dropdown--sm u-text--no-wrap">
                            <ul class="c-nav-menu u-text--left">
                                <li class="c-nav-menu__item">
                                    <a href="https://blessingudor.comgh/?localeUpdate=true">
                                        <span class="u-flag-icon u-flag-icon--gh"></span><span>Ghana</span>
                                    </a>
                                </li>
                                <li class="c-nav-menu__item">
                                    <a href="https://blessingudor.comke/?localeUpdate=true">
                                        <span class="u-flag-icon u-flag-icon--ke"></span><span>Kenya</span>
                                    </a>
                                </li>
                                <li class="c-nav-menu__item">
                                    <a href="https://blessingudor.comza/?localeUpdate=true">
                                        <span class="u-flag-icon u-flag-icon--za"></span><span>South Africa</span>
                                    </a>
                                </li>
                                <li class="c-nav-menu__item">
                                    <a href="/countries">
                                        <span class="u-flag-icon u-flag-icon--paystack"></span><span>Others</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="c-nav c-nav--mobile-only c-nav--green">
            <div class="c-nav__header">
                <div class="c-nav--left">
                    <a href="https://blessingudor.com" class="c-nav__logo">
                        <img src="http://9jababytradefair.com/wp-content/uploads/2023/10/Logo-png-1.png" alt="" width="100">

                    </a>
                </div>
                <div class="c-nav--right">
                    <div id="js-mobile-nav-trigger" class="c-nav__trigger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="c-nav__body c-nav__body--parent u-animate u-animate--fade-in">
                <div class="c-nav__mask">
                    <div id="js-main-nav">
                        <ul class="c-nav-menu">
                            <li class="c-nav-menu__item js-nav-has-children" id="why-paystack">
                                <a href="#">
                                    Why Paystack
                                </a>
                            </li>
                            <li class="c-nav-menu__item">
                                <a href="/wall-of-love">
                                    Customers
                                </a>
                            </li>
                            <li class="c-nav-menu__item">
                                <a href="/pricing">
                                    Pricing
                                </a>
                            </li>
                            <li class="c-nav-menu__item js-nav-has-children" id="learn">
                                <a href="#">
                                    Learn
                                </a>
                            </li>
                            <li class="c-nav-menu__item js-nav-has-children" id="developers">
                                <a href="#">
                                    Developers
                                </a>
                            </li>
                            <li class="c-nav-menu__item js-nav-has-children" id="support">
                                <a href="#">
                                    Support
                                </a>
                            </li>
                            <li class="c-nav-menu__item c-nav-menu__item--cta">
                                <a class="u-text--secondary" href="https://dashboard.paystack.com/#/login">
                                    Login
                                </a>
                            </li>
                            <li class="c-nav-menu__item c-nav-menu__item--cta">
                                <a class="c-button c-button--primary u-text-center c-button--full-width c-button--lg" href="#" data-track="" data-track-section="Nav">
                                    Create free account
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="js-sub-nav">
                        <div class="c-header">
                            <button class="c-button c-button--link c-button" id="js-mobile-back-button">
                                <span class="c-button__icon c-button__icon--back">
                                    <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.41065 1.46931C5.66984 1.24252 5.69611 0.848545 5.46931 0.58935C5.24252 0.330155 4.84855 0.30389 4.58935 0.530686L5.41065 1.46931ZM4.58935 8.46931C4.84855 8.69611 5.24252 8.66984 5.46931 8.41065C5.69611 8.15145 5.66984 7.75748 5.41065 7.53069L4.58935 8.46931ZM1.26818 4.73466L1.67883 4.26534L1.26818 4.73466ZM5.41065 7.53069L1.67883 4.26534L0.857529 5.20397L4.58935 8.46931L5.41065 7.53069ZM1.67883 4.73466L5.41065 1.46931L4.58935 0.530686L0.85753 3.79603L1.67883 4.73466ZM1.67883 4.26534C1.8208 4.38957 1.8208 4.61043 1.67883 4.73466L0.85753 3.79603C0.431611 4.16871 0.431609 4.83129 0.857529 5.20397L1.67883 4.26534Z" fill="#011B33"></path>
                                    </svg>

                                </span>
                                <span class="c-button__text">Back</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>

</header>
<div class="sg-home">
    <!-- //HERO SECTION -->
    <section class="l-section l-section--hero l-section-- l-section--green" id="hero">
        <div id="js-homepage-animation" class="c-homepage-animation c-homepage-animation--play c-homepage-animation--africa">
            <div class="c-homepage-animation__curve"></div>
            <div class="c-homepage-animation__worldmap">
                <svg width="1565" height="712" viewBox="0 0 1565 712" fill="none" xmlns="http://www.w3.org/2000/svg">

                    <defs>
                        <filter id="filter0_d" x="145" y="205" width="60" height="60" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                            <feOffset dx="-3" dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="5.5"></feGaussianBlur>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"></feColorMatrix>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                        </filter>
                        <filter id="filter1_d" x="215" y="75" width="60" height="60" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                            <feOffset dx="-3" dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="5.5"></feGaussianBlur>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"></feColorMatrix>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                        </filter>
                        <filter id="filter2_d" x="644" y="327" width="60" height="60" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                            <feOffset dx="-3" dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="5.5"></feGaussianBlur>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"></feColorMatrix>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                        </filter>
                        <filter id="filter3_d" x="759" y="253" width="60" height="60" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                            <feOffset dx="-3" dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="5.5"></feGaussianBlur>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"></feColorMatrix>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                        </filter>
                        <filter id="filter4_d" x="361" y="425" width="60" height="60" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                            <feOffset dx="-3" dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="5.5"></feGaussianBlur>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"></feColorMatrix>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                        </filter>
                        <filter id="filter5_d" x="730" y="524" width="60" height="60" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                            <feOffset dx="-3" dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="5.5"></feGaussianBlur>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"></feColorMatrix>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                        </filter>
                        <filter id="filter6_d" x="660" y="154" width="60" height="60" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                            <feOffset dx="-3" dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="5.5"></feGaussianBlur>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"></feColorMatrix>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                        </filter>
                        <filter id="filter7_d" x="1070" y="194" width="60" height="60" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                            <feOffset dx="-3" dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="5.5"></feGaussianBlur>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"></feColorMatrix>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                        </filter>
                        <filter id="filter8_d" x="1000" y="264" width="60" height="60" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                            <feOffset dx="-3" dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="5.5"></feGaussianBlur>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"></feColorMatrix>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                        </filter>
                        <filter id="filter9_d" x="740" y="34" width="60" height="60" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                            <feOffset dx="-3" dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="5.5"></feGaussianBlur>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"></feColorMatrix>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                        </filter>
                    </defs>
                </svg>
            </div>
            <!-- <div id="js-homepage-animation-tooltip" class="c-homepage-animation__tooltip" style="top: 495.75px; left: 765.156px;">
                <h5 id="js-homepage-animation-tooltip-title">Get paid from <b>Rio, Brazil</b></h5>
                <p id="js-homepage-animation-tooltip-caption">Sell to customers all over the world</p>
            </div> -->
        </div>

        <div id="js-hero" class="c-hero c-hero--double-sided c-hero--has-video hero-bg">
            <div class="l-container l-container--lg u-flex">
                <div class="c-hero__side">
                    <div class="c-hero__body">
                        <div class="c-hero__heading u-animate--slideUp">
                            <h1 class="u-animate u-animate__delay--700 u-animate--glide-up hero-title">Nigeria's biggest baby trade fair.</h1>
                            <p class="u-text-summary u-animate u-animate__delay--300 u-animate__duration--600 u-animate--glide-up">Register to join the numerous buyers and sellers attending the event</p>
                        </div>
                        <div class="c-hero__cta u-animate u-animate__ease--custom-1 u-animate__delay--400 u-animate__duration--1000 u-animate--fade-in">
                            <span href="#" class="c-button--lg c-button c-button--primary" data-track="" data-track-section="Hero" onclick="BabyFairTheme.triggerBuyerForm('buyer')">
                                Register as a Buyer
                            </span>
                            <style>

                            </style>
                            <span class="c-button c-button--primary c-button--demo c-button--link" data-track="" data-track-section="Hero">
                                <a href="#vendor-option">
                                    <span class="c-button__text seller-reg-text-white">
                                        or Register as a Seller
                                    </span>
                                </a>
                                <!-- <span class="c-button__text seller-reg-text-white" onclick="BabyFairTheme.triggerBuyerForm('seller')">
                                    or Register as a Seller
                                </span> -->
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="js-hero-footer" class="c-hero__footer c-hero__footer-- u-animate--fade-in">
                <div class="l-container l-container--lg u-flex-center">

                    <div id="js-hero-video-summary" class="c-hero__video-summary" js-show-overlay="" data-overlay="hero-video" style="opacity: 1;">

                    </div>
                </div>
            </div>
        </div>
        <div class="u-overlay" id="hero-video">
            <div class="c-hero-video">
                <button class="c-button c-button--close" js-hide-overlay="" data-overlay="hero-video">
                    <span class="u-mobile-only">Close</span>
                </button>
                <div class="c-hero-video__iframe">
                    <iframe id="js-hero-iframe" src="//www.youtube.com/embed/aQ06f8vARhw?rel=0&amp;amp;controls=0&amp;enablejsapi=1&amp;html5=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="" data-gtm-yt-inspected-6="true" title="MTN Chief Transformation Officer, on Working with Paystack"></iframe>
                </div>
            </div>
        </div>



    </section>
    <!-- HERO SECTION -->

    <!-- ABOUT SECTION -->

    <section class="l-section l-section--pad-top l-section--pad-bottom l-section--white">

        <div class="c-section-pattern "></div>


        <div class="l-container l-container--lg">

            <div class="c-feature c-feature--reversed">
                <div class="c-feature__left">
                    <div class="c-feature__media">

                        <figure class="c-feature__image">
                            <div js-animate-in-view="" data-offset="40" class="u-animate u-animate--play" style="opacity: 1;
    height: 470px;
    overflow: hidden;
    border-radius: 30px;">

                                <img src="<?= get_stylesheet_directory_uri() . '/assets/img/partner.jpg'; ?>" alt="partner" loading='lazy'>

                            </div>
                        </figure>
                    </div>
                </div>
                <div class="c-feature__right u-animate u-animate__delay--300 u-animate--glide-up" style="align-items: flex-start;">

                    <div class="c-feature__body">
                        <div class="c-feature__text">
                            <h3>WHO ARE WE</h3>
                            <p>In 2023, Abimbola and Mujidat, business partners and parents, noticed a growing challenge for both businesses and families in Nigeria. Businesses struggled to reach their target audience effectively, and parents faced difficulties finding quality baby products. To bridge this gap, they launched the 9jababy Trade Fair.</p>
                        </div>


                        <div class="c-feature__cta">
                            <a href="#" target="_blank" class="c-button c-button--primary c-button--link">
                                <span class="c-button__icon">

                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="16" height="16" fill="#3BB75E" fill-opacity="0" transform="translate(2 2)"></rect>
                                        <circle cx="10" cy="10" r="8.72781" fill="#3BB75E" fill-opacity="0" stroke="#3BB75E" stroke-width="1.45563"></circle>
                                        <path d="M9 6.37524L12.5355 9.91078L9 13.4463" stroke="#3BB75E" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <span class="c-button__text">
                                    Learn more
                                </span>
                            </a>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section>
    <!-- ABOUT SECTION -->
    <!-- TESTIMONIAL SECTION -->

    <section class="l-section l-section--pad-top l-section--pad-bottom l-section--blue team-section">

        <div class="c-section-pattern c-section-pattern--checked"></div>
        <div class="l-container l-container--lg">
            <div class="c-section-header c-section-header--left">
                <div class="c-section-header__body">
                    <h2>Our Team</h2>
                    <!-- <p class="u-text-summary">Businesses of all sizes trust  to grow their business.</p> -->
                </div>
            </div>
            <div class="u-flex ">
                <div class="u-flex-child u-flex-child--w-33">
                    <div class="team-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/img/team/team3.jpg'; ?>" alt="" width="100%">
                    </div>
                    <h2>Abimbola Anifowose</h2>
                    <small>Coordinator and Baby sector representative</small>

                </div>
                <div class="u-flex-child u-flex-child--w-33">
                    <div class="team-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/img/team/team4.jpg'; ?>" alt="" width="100%">
                    </div>
                    <h2>Sulaimon Mujidat</h2>
                    <small>Coordinator and Baby sector representative</small>

                </div>
                <div class="u-flex-child u-flex-child--w-33">
                    <div class="team-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/img/team/team1.jpg'; ?>" alt="" width="100%">
                    </div>
                    <h2>Olakunle Ajila</h2>
                    <small>Project Manager</small>

                </div>
                <div class="u-flex-child u-flex-child--w-33 ">
                    <div class="team-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/img/team/team2.jpeg'; ?>" alt="" width="100%">
                    </div>

                    <h2>Winifred Godwin-Odeh</h2>
                    <small>Digital Marketing Executive</small>
                </div>
                <!-- <div class="u-flex-child u-flex-child--w-33">
                </div> -->
            </div>
        </div>
    </section>
    <!-- TESTIMONIAL SECTION -->
    <!-- PRODUCT SECTION -->
    <section class="l-section l-section--pad-top l-section--pad-bottom l-section--white" id="vendor-option">



        <div class="l-container l-container--lg">
            <div class="c-section-header c-section-header--lft" style="text-align: center;">
                <div class="c-section-header__body" style="margin: auto;">
                    <h2>
                        Vendor Options
                    </h2>
                    <!-- <p class="u-text-summary">Businesses of all sizes trust  to grow their business.</p> -->
                </div>
            </div>
            <div class="c-feature c-feature--reversed">
                <?php

                // var_dump($products);
                foreach ($products as $product) {
                    $product_details = json_encode(array('id' => $product->get_id(), 'price' => $product->get_price(), 'name' => $product->get_name()));
                ?>
                    <div class="m-1" style="    padding: 20px 10px;
    border: 1px solid #c2bcbc;
    text-align: center;
    border-radius: 30px;box-shadow: 2px 8px 16px 0 rgb(47 113 167 / 19%);">
                        <div class="product-image">
                            <?= $product->get_image('thumbnail'); ?>
                        </div>
                        <h3><?= $product->get_name(); ?></h3>
                        <p><?= $product->get_price_html() ?></p>

                        <button id="product_buy_<?= $product->get_id(); ?>" style="padding:10px" onclick="BabyFairTheme.triggerFormByProduct('product_buy_<?= $product->get_id(); ?>')" data-product-price="<?= $product->get_price(); ?>" data-product-id="<?= $product->get_id(); ?>" data-product-name="<?= $product->get_name(); ?>">
                            Purchase
                        </button>
                    </div>
                    <!-- // var_dump($product->name);
                    // var_dump($product->ID);
                    var_dump($product);
                    var_dump($product->get_ca); -->
                <?php
                }
                ?>
            </div>

        </div>
    </section>
    <!-- PRODUCT SECTION -->

    <!-- TESTIMONIAL SECTION -->

    <section class="l-section l-section--pad-top l-section--pad-bottom l-section--blue business-trust-section">

        <div class="c-section-pattern c-section-pattern--checked"></div>


        <div class="l-container l-container--lg">


            <div class="c-section-header c-section-header--left">
                <div class="c-section-header__body">
                    <h2>Trusted by <ins>several</ins> businesses</h2>
                    <!-- <p class="u-text-summary">Businesses of all sizes trust  to grow their business.</p> -->

                </div>
            </div>



            <div class="u-flex ">
                <div class="u-flex-child u-flex-child--w-33">


                    <div class="c-card c-card--article">
                        <div class="c-card__header">
                            <div class="c-card__icon">
                                <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/content/For-International-Businesses_180823_165939.svg" alt="For International Businesses" src="https://assets.paystack.com/assets/img/content/For-International-Businesses_180823_165939.svg">
                            </div>
                        </div>
                        <div class="c-card__body">
                            <!-- libero provident, debitis quasi ullam impedit aspernatur placeat iste pariatur eveniet itaque.
                            Aspernatur dignissimos quod, aut ipsum ab repudiandae voluptates odit quae nemo assumenda eaque possimus accusamus illum ducimus libero recusandae nulla incidunt consectetur cum provident architecto natus porro iusto. Earum, quae. -->
                            <h4 class="u-h4-bolder">Exposure Amplification: </h4>
                            <p> The 9jababy Trade Fair provides vendors with a high-visibility platform to showcase their products to a diverse and engaged audience. This exposure amplification significantly boosts brand recognition and drives sales.</p>
                            <div class="c-card__link">
                                <a href="#" class="c-button c-button--primary c-button--link">
                                    <span class="c-button__icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="16" height="16" fill="#3BB75E" fill-opacity="0" transform="translate(2 2)"></rect>
                                            <circle cx="10" cy="10" r="8.72781" fill="#3BB75E" fill-opacity="0" stroke="#3BB75E" stroke-width="1.45563"></circle>
                                            <path d="M9 6.37524L12.5355 9.91078L9 13.4463" stroke="#3BB75E" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                    <span class="c-button__text">
                                        Learn More
                                    </span>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="u-flex-child u-flex-child--w-33">


                    <div class="c-card c-card--article">
                        <div class="c-card__header">
                            <div class="c-card__icon">
                                <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/content/For-Entrepreneurs_180823_165709.svg" alt="For Entrepreneurs" src="https://assets.paystack.com/assets/img/content/For-Entrepreneurs_180823_165709.svg">
                            </div>
                        </div>
                        <div class="c-card__body">
                            <h4 class="u-h4-bolder">Targeted Marketing:</h4>
                            <p> Vendors benefit from a tailored environment where their products are directly exposed to parents and caregivers. This targeted marketing ensures that their offerings reach the right audience, resulting in higher conversion rates.</p>
                            <div class="c-card__link">
                                <a href="#" class="c-button c-button--primary c-button--link">
                                    <span class="c-button__icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="16" height="16" fill="#3BB75E" fill-opacity="0" transform="translate(2 2)"></rect>
                                            <circle cx="10" cy="10" r="8.72781" fill="#3BB75E" fill-opacity="0" stroke="#3BB75E" stroke-width="1.45563"></circle>
                                            <path d="M9 6.37524L12.5355 9.91078L9 13.4463" stroke="#3BB75E" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                    <span class="c-button__text">
                                        Learn More
                                    </span>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="u-flex-child u-flex-child--w-33">


                    <div class="c-card c-card--article">
                        <div class="c-card__header">
                            <div class="c-card__icon">
                                <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/content/For-Large-Corporations_180823_165502.svg" alt="For Large Corporations" src="https://assets.paystack.com/assets/img/content/For-Large-Corporations_180823_165502.svg">
                            </div>
                        </div>
                        <div class="c-card__body">
                            <h4 class="u-h4-bolder">Networking Opportunities:</h4>
                            <p> The trade fair fosters valuable connections among vendors, industry experts, and potential collaborators. These networking opportunities facilitate knowledge exchange and potential partnerships, enhancing vendors' growth and innovation in the baby product market.</p>
                            <div class="c-card__link">
                                <a href="#" class="c-button c-button--primary c-button--link">
                                    <span class="c-button__icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="16" height="16" fill="#3BB75E" fill-opacity="0" transform="translate(2 2)"></rect>
                                            <circle cx="10" cy="10" r="8.72781" fill="#3BB75E" fill-opacity="0" stroke="#3BB75E" stroke-width="1.45563"></circle>
                                            <path d="M9 6.37524L12.5355 9.91078L9 13.4463" stroke="#3BB75E" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                    <span class="c-button__text">
                                        Learn More
                                    </span>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- TESTIMONIAL SECTION -->
    <!-- //SPONSOR SECTION -->
    <section class="l-section l-section--pad-top l-section--pad-bottom l-section--white sponsor-section">

        <div class="c-section-pattern "></div>


        <div class="l-container l-container--lg">


            <div class="c-section-header c-section-header--left">
                <div class="c-section-header__body">
                    <h2>Powering growth for amazing businesses</h2>
                    <p class="u-text-summary">We are looking to connect users</p>

                </div>
            </div>


            <!-- 
            <div class="c-logo-row c-logo-row--has-grid">
                <div class="c-logo">
                    <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/Air-Peace-Stack-Blue_200305_154114.svg" alt="Air Peace logo" src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/Air-Peace-Stack-Blue_200305_154114.svg">
                </div>
                <div class="c-logo">
                    <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/FilmHouse-Stack-Blue_200304_153641.svg" alt="Filmhouse Cinemas logo" src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/FilmHouse-Stack-Blue_200304_153641.svg">
                </div>
                <div class="c-logo">
                    <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/Piggyvest-Stack-Blue_200304_153734.svg" alt="PiggyVest logo" src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/Piggyvest-Stack-Blue_200304_153734.svg">
                </div>
                <div class="c-logo">
                    <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/Ibom-Air-Stack-Blue_200304_154259.svg" alt="Ibom Air logo" src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/Ibom-Air-Stack-Blue_200304_154259.svg">
                </div>
                <div class="c-logo">
                    <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/kuda-Stack-Blue_200304_154345.svg" alt="Kuda logo" src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/kuda-Stack-Blue_200304_154345.svg">
                </div>
                <div class="c-logo">
                    <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/Ariiya-Stack-Blue_200304_155307.svg" alt="Ariiya Tickets logo" src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/Ariiya-Stack-Blue_200304_155307.svg">
                </div>
            </div> -->



            <!-- <div class="c-logo-row c-logo-row--has-grid">
                <div class="c-logo">
                    <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/Dominos-Plain.svg" alt="Domino's Pizza logo" src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/Dominos-Plain.svg">
                </div>
                <div class="c-logo">
                    <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/MTN-Plain.svg" alt="MTN logo" src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/MTN-Plain.svg">
                </div>
                <div class="c-logo">
                    <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/Lagos-Internal-Revenue-Service.svg" alt="LIRS logo" src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/Lagos-Internal-Revenue-Service.svg">
                </div>
                <div class="c-logo">
                    <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/Bolt-Stack-Blue_200304_153027.svg" alt="Bolt logo" src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/Bolt-Stack-Blue_200304_153027.svg">
                </div>
                <div class="c-logo">
                    <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/Betway-Plain.svg" alt="Betway logo" src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/Betway-Plain.svg">
                </div>
                <div class="c-logo">
                    <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/carbon-dark.svg" alt="Carbon logo" src="https://assets.paystack.com/assets/img/logos/merchants/_300xAUTO_crop_center-center_none/carbon-dark.svg">
                </div>
            </div> -->
            <div> <a href="https://forms.gle/XyZxHBnRgNK25Nsn7" class="c-button--lg c-button c-button--primary" data-track="" data-track-section="Hero">
                    Register as a sponsor
                </a></div>

        </div>
    </section>
    <!-- SPONSOR SECTION -->
</div>

<?php
get_footer('home', array('products' => $products));
