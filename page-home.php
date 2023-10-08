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

get_header();
?>
<header style="transform: translateY(-43px);">
    <a class="c-banner__link" id="js-banner" href="https://www.paystack.com/terminal/" style="opacity: 0;">
        <div class="c-banner c-banner--header">
            <div class="c-banner__background"></div>
            <div class="c-banner__content">
                <div class="c-banner__text c-banner__text--desktop-only">
                    🎉 New: Paystack Virtual Terminal — accept blazing fast in-person payments at scale, with ZERO hardware costs.
                </div>
                <div class="c-banner__text c-banner__text--mobile-only">
                    🎉 New: Paystack Virtual Terminal — accept blazing fast in-person payments at scale, with ZERO hardware costs.
                </div>
            </div>
        </div>
    </a>







    <nav>
        <div class="c-nav c-nav--green">
            <div class="c-nav--left">
                <a href="https://paystack.com/" class="c-nav__logo">
                    LOGO

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

                    <li class="c-nav-menu__item u-has-dropdown">
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
                    </li>
                    <li class="c-nav-menu__item c-nav-menu__item--green">
                        <a href="https://dashboard.paystack.com/#/login">Login</a>
                    </li>
                    <li class="c-nav-menu__item--cta">
                        <a href="#" data-track="" data-track-section="Nav" class="c-button c-button c-button--primary">
                            Create free account
                        </a>
                    </li>
                    <li class="c-nav-menu__item u-has-dropdown c-nav-menu__item--countries">
                        <a href="#">
                            <span class="u-flag-icon u-flag-icon--ng"></span>
                        </a>
                        <div class="c-dropdown c-dropdown--flip c-dropdown--reversed c-dropdown--sm u-text--no-wrap">
                            <ul class="c-nav-menu u-text--left">
                                <li class="c-nav-menu__item">
                                    <a href="https://paystack.com/gh/?localeUpdate=true">
                                        <span class="u-flag-icon u-flag-icon--gh"></span><span>Ghana</span>
                                    </a>
                                </li>
                                <li class="c-nav-menu__item">
                                    <a href="https://paystack.com/ke/?localeUpdate=true">
                                        <span class="u-flag-icon u-flag-icon--ke"></span><span>Kenya</span>
                                    </a>
                                </li>
                                <li class="c-nav-menu__item">
                                    <a href="https://paystack.com/za/?localeUpdate=true">
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
                    <a href="https://paystack.com/" class="c-nav__logo">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 157 28">
                            <defs></defs>
                            <g>
                                <path d="M22.32 2.663H1.306C.594 2.663 0 3.263 0 3.985v2.37c0 .74.594 1.324 1.307 1.324h21.012c.73 0 1.307-.602 1.324-1.323V4.002c0-.738-.594-1.34-1.323-1.34zm0 13.192H1.306a1.3 1.3 0 00-.924.388 1.33 1.33 0 00-.383.935v2.37c0 .74.594 1.323 1.307 1.323h21.012c.73 0 1.307-.584 1.324-1.322v-2.371c0-.739-.594-1.323-1.323-1.323zm-9.183 6.58H1.307c-.347 0-.68.139-.924.387a1.33 1.33 0 00-.383.935v2.37c0 .74.594 1.323 1.307 1.323H13.12c.73 0 1.307-.6 1.307-1.322v-2.371a1.29 1.29 0 00-1.29-1.323zM23.643 9.258H1.307c-.347 0-.68.14-.924.387a1.33 1.33 0 00-.383.936v2.37c0 .739.594 1.323 1.307 1.323h22.32c.73 0 1.306-.601 1.306-1.323v-2.37a1.301 1.301 0 00-1.29-1.323z" fill="#00C3F7"></path>
                                <path d="M48.101 8.005a6.927 6.927 0 00-2.274-1.563 7.041 7.041 0 00-2.716-.55 5.767 5.767 0 00-2.63.567c-.55.263-1.046.63-1.46 1.082V7.13a.876.876 0 00-.22-.567.721.721 0 00-.56-.258h-2.937a.697.697 0 00-.56.258.796.796 0 00-.221.567v19.566c0 .206.085.412.22.566a.776.776 0 00.56.224h2.971c.204 0 .39-.086.543-.224a.7.7 0 00.238-.566v-6.683c.424.464.967.808 1.561 1.014.781.292 1.596.43 2.427.43.95 0 1.884-.173 2.75-.55a6.859 6.859 0 002.308-1.58 7.45 7.45 0 001.562-2.457 8.34 8.34 0 00.577-3.213 8.761 8.761 0 00-.577-3.229A7.775 7.775 0 0048.1 8.005zm-2.681 7.077a3.33 3.33 0 01-.696 1.117 3.177 3.177 0 01-2.36 1.013c-.458 0-.899-.086-1.306-.275a3.324 3.324 0 01-1.07-.738 3.673 3.673 0 01-.713-1.117 3.837 3.837 0 010-2.748c.153-.412.408-.79.713-1.1a3.576 3.576 0 011.07-.755 2.888 2.888 0 011.306-.275c.459 0 .9.086 1.324.274.39.19.747.43 1.053.74.305.326.526.686.696 1.099a3.976 3.976 0 01-.017 2.765zm20.808-8.778h-2.953a.728.728 0 00-.543.24.823.823 0 00-.237.585v.36a4.143 4.143 0 00-1.341-1.03 5.652 5.652 0 00-2.58-.567 7.222 7.222 0 00-5.075 2.096 7.733 7.733 0 00-1.63 2.456 8.036 8.036 0 00-.61 3.23 8.15 8.15 0 00.61 3.23 7.88 7.88 0 001.613 2.456 6.959 6.959 0 005.058 2.112c.9.018 1.782-.171 2.597-.567.509-.257.984-.6 1.358-1.03v.395c0 .206.084.412.237.567.153.137.34.223.543.223h2.953a.855.855 0 00.56-.223.768.768 0 00.221-.567V7.129a.796.796 0 00-.22-.567.697.697 0 00-.56-.258zm-3.988 8.761a3.33 3.33 0 01-.696 1.117 3.83 3.83 0 01-1.052.755c-.832.378-1.8.378-2.631 0a3.575 3.575 0 01-1.07-.755 3.326 3.326 0 01-.695-1.117 3.976 3.976 0 010-2.731c.152-.412.39-.773.696-1.1.305-.309.661-.566 1.069-.755a3.194 3.194 0 012.63 0c.391.189.748.429 1.053.738.289.327.526.687.696 1.1.34.893.34 1.872 0 2.748zm33.437-1.77a4.794 4.794 0 00-1.443-.875 10.054 10.054 0 00-1.731-.516l-2.258-.446c-.577-.103-.984-.258-1.205-.447a.712.712 0 01-.305-.567c0-.24.136-.446.424-.618.39-.206.815-.31 1.256-.275.577 0 1.154.12 1.68.343.51.224 1.019.482 1.477.79.662.413 1.222.344 1.612-.12l1.087-1.236c.203-.207.322-.481.34-.773a1.06 1.06 0 00-.408-.773c-.459-.395-1.188-.825-2.156-1.237-.967-.412-2.19-.636-3.632-.636a8.343 8.343 0 00-2.597.378 6.273 6.273 0 00-1.986 1.03 4.552 4.552 0 00-1.273 1.564 4.417 4.417 0 00-.441 1.907c0 1.22.373 2.216 1.103 2.954.73.739 1.698 1.22 2.903 1.46l2.342.516c.51.086 1.018.24 1.494.464.254.103.424.36.424.652 0 .258-.136.498-.424.705-.289.206-.764.343-1.375.343a4.051 4.051 0 01-1.85-.412 6.792 6.792 0 01-1.51-.996 2.037 2.037 0 00-.68-.378c-.271-.086-.594 0-.95.292l-1.29.979a1.147 1.147 0 00-.458 1.134c.067.43.424.858 1.086 1.357a9.543 9.543 0 005.516 1.632 8.993 8.993 0 002.699-.378 6.83 6.83 0 002.087-1.048c.56-.43 1.036-.98 1.358-1.615a4.543 4.543 0 00.475-2.01 4.168 4.168 0 00-.373-1.82 4.638 4.638 0 00-1.018-1.323zm12.899 3.574a.857.857 0 00-.645-.43c-.271 0-.543.086-.764.24a2.43 2.43 0 01-1.205.396c-.136 0-.288-.017-.424-.052a.777.777 0 01-.39-.206 1.43 1.43 0 01-.323-.446 2.092 2.092 0 01-.136-.79v-5.36h3.836a.86.86 0 00.594-.258.77.77 0 00.255-.567V7.13a.773.773 0 00-.255-.584.833.833 0 00-.577-.24h-3.836v-3.66a.736.736 0 00-.237-.584.814.814 0 00-.544-.223h-2.987a.817.817 0 00-.577.223.838.838 0 00-.254.584v3.66h-1.698a.697.697 0 00-.56.257.876.876 0 00-.22.567v2.267c0 .206.084.413.22.567a.65.65 0 00.56.258h1.698v6.373a5.14 5.14 0 00.441 2.199 4.575 4.575 0 001.137 1.477c.475.395 1.035.67 1.612.842a6.125 6.125 0 001.851.275 7.73 7.73 0 002.427-.396 4.802 4.802 0 001.918-1.202.999.999 0 00.101-1.271l-1.018-1.65zm16.175-10.565h-2.953a.728.728 0 00-.543.24.822.822 0 00-.238.585v.36a4.13 4.13 0 00-1.341-1.03 5.67 5.67 0 00-2.596-.567 7.152 7.152 0 00-5.058 2.096 7.468 7.468 0 00-1.63 2.456 8.017 8.017 0 00-.611 3.212 8.156 8.156 0 00.611 3.23c.374.91.934 1.752 1.613 2.456a7.006 7.006 0 005.041 2.13 5.884 5.884 0 002.596-.55c.51-.257.985-.6 1.358-1.03v.378c.002.21.084.41.23.557a.783.783 0 00.551.233h2.97a.78.78 0 00.781-.773V7.13a.795.795 0 00-.221-.567.696.696 0 00-.56-.258zm-3.988 8.761a3.34 3.34 0 01-.696 1.117 3.83 3.83 0 01-1.053.755 2.907 2.907 0 01-1.323.275c-.459 0-.9-.103-1.307-.275a3.576 3.576 0 01-1.07-.755 3.34 3.34 0 01-.696-1.117 3.982 3.982 0 010-2.731 3.27 3.27 0 01.696-1.1c.306-.309.662-.566 1.07-.755a3.077 3.077 0 011.307-.275c.458 0 .899.086 1.323.274.391.19.747.43 1.053.74.305.326.543.686.696 1.099a3.67 3.67 0 010 2.748zm20.198 1.615l-1.698-1.306c-.322-.257-.628-.326-.899-.223a1.82 1.82 0 00-.628.447 6.03 6.03 0 01-1.29 1.168c-.509.292-1.07.43-1.647.395a3.165 3.165 0 01-1.855-.575 3.224 3.224 0 01-1.183-1.555 4.046 4.046 0 01-.237-1.34c0-.464.067-.928.237-1.374.153-.413.374-.79.679-1.1.306-.309.662-.567 1.052-.739a3.175 3.175 0 011.324-.291 3.06 3.06 0 011.647.412 5.61 5.61 0 011.29 1.168c.169.189.373.343.611.447.271.103.577.034.882-.224l1.698-1.288c.203-.138.373-.344.441-.584a.923.923 0 00-.068-.79 7.35 7.35 0 00-2.614-2.457c-1.12-.635-2.461-.962-3.955-.962a8.163 8.163 0 00-3.072.601 7.65 7.65 0 00-2.495 1.65 7.357 7.357 0 00-1.663 2.473 8.154 8.154 0 000 6.133c.39.927.95 1.769 1.663 2.456a7.876 7.876 0 005.567 2.25c1.494 0 2.835-.326 3.955-.962a7.307 7.307 0 002.631-2.473.886.886 0 00.068-.773 1.167 1.167 0 00-.441-.584zm15.716 3.057l-4.667-6.854 3.989-5.273a.978.978 0 00.169-.86c-.068-.205-.254-.429-.746-.429h-3.157a1.39 1.39 0 00-.527.12 1.058 1.058 0 00-.458.447l-3.191 4.467h-.764V.79a.794.794 0 00-.22-.567.78.78 0 00-.56-.223h-2.954a.856.856 0 00-.56.223.72.72 0 00-.237.567v19.48c0 .223.084.43.237.567a.778.778 0 00.56.223h2.954a.856.856 0 00.56-.223.794.794 0 00.22-.567v-5.153h.849l3.479 5.342c.204.378.595.618 1.019.618h3.31c.509 0 .712-.24.797-.446a.933.933 0 00-.102-.894zM83.015 6.304h-3.31a.852.852 0 00-.662.258 1.178 1.178 0 00-.305.55l-2.445 9.104H75.7l-2.613-9.104a1.54 1.54 0 00-.255-.533.756.756 0 00-.594-.275h-3.429c-.44 0-.712.138-.831.43-.085.257-.085.55 0 .807l4.192 12.798c.068.189.17.378.323.515.17.155.39.24.627.223h1.766l-.153.413-.39 1.185c-.12.36-.34.687-.645.927a1.58 1.58 0 01-.985.327c-.305 0-.61-.069-.882-.19a3.618 3.618 0 01-.781-.463 1.29 1.29 0 00-.747-.24h-.034a.908.908 0 00-.747.463l-1.052 1.546c-.424.67-.187 1.1.085 1.34a5.36 5.36 0 001.952 1.151 7.679 7.679 0 002.495.412c1.51 0 2.783-.412 3.75-1.236a7.067 7.067 0 002.122-3.333l4.855-15.838c.102-.275.119-.567.017-.842-.085-.189-.272-.395-.73-.395z" fill="#011B33"></path>
                            </g>
                        </svg>

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
                        <div class="c-body">
                            <div class="c-nav-menu-links" data-menu-link-group="why-paystack">
                                <ul class="c-nav-menu__group">
                                    <li class="c-nav-menu__item"><a href="/why-choose-paystack">Why Choose Paystack</a></li>
                                    <li class="c-nav-menu__item"><a href="/success-rates">Success Rates</a></li>
                                    <li class="c-nav-menu__item"><a href="/demo">Demo</a></li>
                                </ul>
                                <ul class="c-nav-menu__group">
                                    <div class="c-nav-menu__label">Your Growth Stage</div>
                                    <li class="c-nav-menu__item"><a href="/entrepreneurs">For Entrepreneurs</a></li>
                                    <li class="c-nav-menu__item"><a href="/corporates">For Corporates</a></li>
                                    <li class="c-nav-menu__item"><a href="/internationals">For Global Brands</a></li>
                                    <li class="c-nav-menu__item"><a href="/startups">For Startups</a></li>
                                </ul>
                                <ul class="c-nav-menu__group">
                                    <div class="c-nav-menu__label">Your Business Type</div>
                                    <li class="c-nav-menu__item"><a href="/fintech">For Fintechs</a></li>
                                    <li class="c-nav-menu__item"><a href="/service-partners">For Agents</a></li>
                                    <li class="c-nav-menu__item"><a href="/schools">For Schools</a></li>
                                    <li class="c-nav-menu__item"><a href="/betting">For Betting</a></li>
                                </ul>
                            </div>
                            <div class="c-nav-menu-links" data-menu-link-group="learn">
                                <ul class="c-nav-menu__group">
                                    <li class="c-nav-menu__item"><a href="/blog">Blog</a></li>
                                    <li class="c-nav-menu__item"><a href="/guides">Guides</a></li>
                                    <li class="c-nav-menu__item"><a target="_blank" rel="noopener" href="/tutorials">Video Tutorials</a></li>
                                    <li class="c-nav-menu__item"><a target="_blank" rel="noopener" href="https://decodefintech.com">Decode Fintech</a></li>
                                    <li class="c-nav-menu__item"><a target="_blank" rel="noopener" href="/commerce">Commerce</a></li>
                                </ul>
                                <ul class="c-nav-menu__group">
                                    <div class="c-nav-menu__label">Company</div>
                                    <li class="c-nav-menu__item"><a href="/about">About Us</a></li>
                                    <li class="c-nav-menu__item"><a href="/compliance">Compliance</a></li>
                                    <li class="c-nav-menu__item"><a href="/careers">Careers</a></li>
                                    <li class="c-nav-menu__item"><a href="/brand">Brand</a></li>
                                    <li class="c-nav-menu__item"><a href="/media">Media Kit</a></li>
                                    <li class="c-nav-menu__item"><a href="/terms">Privacy &amp; Terms</a></li>
                                </ul>
                            </div>
                            <div class="c-nav-menu-links" data-menu-link-group="developers">
                                <ul class="c-nav-menu__group">
                                    <li class="c-nav-menu__item"><a href="/developers">Overview</a></li>
                                    <li class="c-nav-menu__item"><a href="https://developers.paystack.co/">Documentation</a></li>
                                    <li class="c-nav-menu__item"><a href="/integrations">Integrations</a></li>
                                    <li class="c-nav-menu__item"><a href="/status">Status</a></li>
                                </ul>
                            </div>
                            <div class="c-nav-menu-links" data-menu-link-group="support">
                                <ul class="c-nav-menu__group">
                                    <li class="c-nav-menu__item"><a target="_blank" rel="noopener" href="/help">Quick Help</a></li>
                                    <li class="c-nav-menu__item"><a href="/contact">Contact Us</a></li>
                                    <li class="c-nav-menu__item"><a href="/lookup">Why was I debited?</a></li>
                                </ul>
                            </div>
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
            <div id="js-homepage-animation-tooltip" class="c-homepage-animation__tooltip" style="top: 495.75px; left: 765.156px;">
                <h5 id="js-homepage-animation-tooltip-title">Get paid from <b>Rio, Brazil</b></h5>
                <p id="js-homepage-animation-tooltip-caption">Sell to customers all over the world</p>
            </div>
        </div>

        <div id="js-hero" class="c-hero c-hero--double-sided c-hero--has-video">
            <div class="l-container l-container--lg u-flex">
                <div class="c-hero__side">
                    <div class="c-hero__body">
                        <div class="c-hero__heading u-animate--slideUp">
                            <h1 class="u-animate u-animate__delay--300 u-animate--glide-up">First Baby Trade Fair</h1>
                            <p class="u-text-summary u-animate u-animate__delay--300 u-animate__duration--600 u-animate--glide-up">Register to join the numerous buyers and sellers attending the event</p>
                        </div>
                        <div class="c-hero__cta u-animate u-animate__ease--custom-1 u-animate__delay--400 u-animate__duration--1000 u-animate--fade-in">
                            <a href="#" class="c-button--lg c-button c-button--primary" data-track="" data-track-section="Hero">
                                Register as a buyer
                            </a>
                            <a href="https://paystack.com/contact/sales#form" class="c-button c-button--primary c-button--demo c-button--link" data-track="" data-track-section="Hero">
                                <span class="c-button__text">
                                    or register as a seller
                                </span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div id="js-hero-footer" class="c-hero__footer c-hero__footer-- u-animate--fade-in">
                <div class="l-container l-container--lg u-flex-center">
                    <!-- <div class="c-hero__logos">
                        <p>Trusted by over several businesses</p>
                        <div class="c-logo ">
                            <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/logos/merchants/Dominos-Plain.svg" alt="Domino's Pizza logo" src="https://assets.paystack.com/assets/img/logos/merchants/Dominos-Plain.svg">
                        </div>
                        <div class="c-logo ">
                            <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/logos/merchants/MTN-Plain.svg" alt="MTN logo" src="https://assets.paystack.com/assets/img/logos/merchants/MTN-Plain.svg">
                        </div>
                        <div class="c-logo ">
                            <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/logos/merchants/Bolt-Stack-Blue_200304_153027.svg" alt="Bolt logo" src="https://assets.paystack.com/assets/img/logos/merchants/Bolt-Stack-Blue_200304_153027.svg">
                        </div>
                        <div class="c-logo u-hidden--mobile">
                            <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/logos/merchants/Axa-mansard-_-Plain.svg" alt="AXA Mansard logo" src="https://assets.paystack.com/assets/img/logos/merchants/Axa-mansard-_-Plain.svg">
                        </div>
                    </div> -->
                    <div id="js-hero-video-summary" class="c-hero__video-summary" js-show-overlay="" data-overlay="hero-video" style="opacity: 1;">
                        <!-- <div>
                            <p>Watch MTN Chief Transformation Officer, Olubayo Adekanmbi, discuss working with Paystack</p>
                        </div> -->


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
                            <div js-animate-in-view="" data-offset="40" class="u-animate u-animate--play" style="opacity: 1;">
                                <img class=" u-lazyload--is-done" data-src="https://assets.paystack.com/assets/img/content/_400x357_crop_center-center_82_line/Robust-Suite-of-APIs-Opt.png" data-sizes="100vw" data-srcset="https://assets.paystack.com/assets/img/content/_400x357_crop_center-center_82_line/Robust-Suite-of-APIs-Opt.png 400w, https://assets.paystack.com/assets/img/content/_800x714_crop_center-center_82_line/Robust-Suite-of-APIs-Opt.png 800w, https://assets.paystack.com/assets/img/content/_300x267_crop_center-center_60_line/Robust-Suite-of-APIs-Opt.png 300w, https://assets.paystack.com/assets/img/content/_600x535_crop_center-center_60_line/Robust-Suite-of-APIs-Opt.png 600w, https://assets.paystack.com/assets/img/content/_768x685_crop_center-center_60_line/Robust-Suite-of-APIs-Opt.png 768w" alt="Robust Suite Of Apis Opt" sizes="100vw" srcset="https://assets.paystack.com/assets/img/content/_400x357_crop_center-center_82_line/Robust-Suite-of-APIs-Opt.png 400w, https://assets.paystack.com/assets/img/content/_800x714_crop_center-center_82_line/Robust-Suite-of-APIs-Opt.png 800w, https://assets.paystack.com/assets/img/content/_300x267_crop_center-center_60_line/Robust-Suite-of-APIs-Opt.png 300w, https://assets.paystack.com/assets/img/content/_600x535_crop_center-center_60_line/Robust-Suite-of-APIs-Opt.png 600w, https://assets.paystack.com/assets/img/content/_768x685_crop_center-center_60_line/Robust-Suite-of-APIs-Opt.png 768w" src="https://assets.paystack.com/assets/img/content/_400x357_crop_center-center_82_line/Robust-Suite-of-APIs-Opt.png">
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="c-feature__right">

                    <div class="c-feature__body">
                        <div class="c-feature__text">
                            <h3>WHO ARE WE</h3>
                            <p>Here, we can add a loitle story about the origin of the trade fair. For lack of content, we will leave this for now, till content is suppluied.</p>
                        </div>

                        <div class="c-feature__benefits u-flex">
                            <ul class="u-list u-list--green ">
                                <li>Provide platform for sellers to showcase their products</li>
                                <li>Another benefit here</li>

                            </ul>
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
                                    Maybe a link to a video??
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

    <section class="l-section l-section--pad-top l-section--pad-bottom l-section--blue">

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
                            <h4 class="u-h4-bolder">Lorem ipsum dolor sit amet consectetur <br>Lorem ipsum </h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime excepturi quisquam blanditiis nemo eligendi laudantium temporibus harum veniam</p>
                            <div class="c-card__link">
                                <a href="/internationals" class="c-button c-button--primary c-button--link">
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
                            <h4 class="u-h4-bolder">Biggest Event for <br>Baby Stores</h4>
                            <p>From startup to scale-up, we can support you at every stage of your businesses’ growth</p>
                            <div class="c-card__link">
                                <a href="/entrepreneurs" class="c-button c-button--primary c-button--link">
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
                            <h4 class="u-h4-bolder">Biggest Event for <br>Baby Stores</h4>
                            <p>From startup to scale-up, we can support you at every stage of your businesses’ growth</p>
                            <div class="c-card__link">
                                <a href="/corporates" class="c-button c-button--primary c-button--link">
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
    <section class="l-section l-section--pad-top l-section--pad-bottom l-section--white">

        <div class="c-section-pattern "></div>


        <div class="l-container l-container--lg">


            <div class="c-section-header c-section-header--left">
                <div class="c-section-header__body">
                    <h2>Powering growth for amazing businesses</h2>
                    <p class="u-text-summary">We are looking to connect users</p>

                </div>
            </div>



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
            </div>



            <div class="c-logo-row c-logo-row--has-grid">
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
            </div>
            <div> <a href="#" class="c-button--lg c-button c-button--primary" data-track="" data-track-section="Hero">
                    Register as a sponsor
                </a></div>

        </div>
    </section>
    <!-- SPONSOR SECTION -->
</div>

<?php
get_footer();
