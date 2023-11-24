<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <style>
        .m-1{
            margin:10px
        }
        .c-banner__link {
            display: block;
            transition: opacity 0.4s cubic-bezier(0.075, 0.82, 0.165, 1);
            opacity: 1
        }

        .c-banner__text--desktop-only {
            display: block
        }

        @media screen and (max-width: 600px) {
            .c-banner__text--desktop-only {
                display: none
            }
        }

        .c-banner__text--mobile-only {
            display: none
        }

        @media screen and (max-width: 600px) {
            .c-banner__text--mobile-only {
                display: block
            }
        }

        .c-banner__text::after {
            position: relative;
            content: "  →";
            font-weight: 600;
            vertical-align: middle;
            transform: translateX(2px);
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center;
            animation: horizontalPulse 2.8s ease-in 3s infinite
        }

        @keyframes horizontalPulse {

            0%,
            10% {
                transform: translateX(2px)
            }

            5% {
                transform: translateX(50%)
            }
        }

        .c-banner.c-banner--header {
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center;
            text-align: center;
            background-color: transparent;
            position: relative;
            border-bottom: 1px solid rgba(0, 0, 0, 0.03)
        }

        .c-banner.c-banner--header .c-banner__background {
            background-color: #011b33;
            position: absolute;
            left: 0;
            width: 100%;
            top: 0;
            height: 100%;
            z-index: -1;
            opacity: 0.95
        }

        .c-banner.c-banner--header .c-banner__content {
            margin: 0 auto;
            padding: 10px 16px;
            position: relative;
            color: white;
            letter-spacing: 0.02px;
            font-size: 1.4rem
        }
    </style>
    <style>
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 100;
            transform: translateY(0);
            transition: transform 0.3s cubic-bezier(0.075, 0.82, 0.165, 1)
        }

        .c-nav {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: justify;
            justify-content: space-between;
            width: 100%;
            padding: 1.2rem 4.8rem;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            position: relative;
            transition: background linear 0.1s
        }

        @media screen and (max-width: 1240px) {
            .c-nav {
                padding: 1.2rem
            }
        }

        @media screen and (max-width: 1020px) {
            .c-nav {
                display: none
            }
        }

        .c-nav__logo {
            display: -ms-inline-flexbox;
            display: inline-flex;
            margin-right: 24px;
            position: relative;
            z-index: 200
        }

        .c-nav__logo svg {
            height: 22px
        }

        .c-nav--mobile {
            position: absolute
        }

        .c-nav--left,
        .c-nav--right {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center
        }

        .c-nav--center {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .c-nav--blue {
            background: rgba(234, 246, 252, 0.95)
        }

        .c-nav--green {
            background: rgb(245 241 254 / 95%)
        }

        .c-nav--white {
            background: rgba(255, 255, 255, 0.95)
        }

        .c-nav--offwhite {
            background: rgba(249, 251, 252, 0.95)
        }

        .c-nav--grey {
            background: rgba(238, 242, 245, 0.9)
        }

        .c-nav--dark-blue {
            background: rgba(1, 27, 51, 0.85)
        }

        .c-nav--dark-blue .c-nav--left>.c-nav-menu>.c-nav-menu__item>a,
        .c-nav--dark-blue .c-nav--right>.c-nav-menu>.c-nav-menu__item>a {
            color: white
        }

        .c-nav--dark-blue .c-nav--left>.c-nav-menu>.c-nav-menu__item>a .u-icon-arrow,
        .c-nav--dark-blue .c-nav--right>.c-nav-menu>.c-nav-menu__item>a .u-icon-arrow {
            border-color: #eaf6fc transparent transparent transparent
        }

        .c-nav--dark-blue .c-nav__logo svg path[fill="#011B33"] {
            fill: white
        }

        @media screen and (max-width: 600px) {
            .c-nav {
                padding: 16px 0
            }
        }

        .c-nav-menu>li {
            margin-bottom: 0
        }

        .c-nav-menu--horizontal {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center
        }

        .c-nav-menu--vertical~.c-nav-menu--vertical {
            margin-top: 35px
        }

        .c-nav-menu__label {
            font-size: 1rem;
            color: #3d5e69;
            text-transform: uppercase;
            margin-bottom: 10px;
            display: block;
            letter-spacing: 0.5px;
            line-height: 1.2;
            font-weight: 500
        }

        .c-nav-menu__item a {
            font-size: 1.5rem;
            font-weight: 500;
            color: #011b33;
            line-height: 1.3;
            vertical-align: middle;
            letter-spacing: -0.01em
        }

        .c-nav-menu__item a .u-icon-arrow {
            margin-left: 4px;
            color: #011b33;
            transition: border linear 0.1s
        }

        .c-nav-menu__item a:hover {
            color: #0ba4db
        }

        .c-nav-menu__item a:hover .u-icon-arrow {
            border-color: #0ba4db transparent transparent transparent
        }

        .c-nav-menu__item[href="#"] .c-nav-menu__item a:hover {
            color: rgba(1, 27, 51, 0.5)
        }

        .c-nav-menu--horizontal>.c-nav-menu__item {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 0;
            margin-right: 20px;
            height: 40px
        }

        .c-nav-menu--horizontal>.c-nav-menu__item:last-child {
            margin-right: 0
        }

        .c-nav-menu--horizontal>.c-nav-menu__item--countries {
            cursor: pointer;
            margin-left: 16px;
            position: relative;
            padding: 5px
        }

        .c-nav-menu--horizontal>.c-nav-menu__item--countries span:not(.u-flag-icon) {
            color: rgba(1, 27, 51, 0.7)
        }

        .c-nav-menu--horizontal>.c-nav-menu__item--countries .u-flag-icon {
            border-radius: 50%;
            width: 20px;
            border-radius: 4px;
            width: 16px
        }

        .c-nav-menu--horizontal>.c-nav-menu__item--countries .c-nav-menu__item .u-flag-icon {
            display: inline-block;
            margin-right: 10px
        }

        .c-nav-menu--horizontal>.c-nav-menu__item--countries li.c-nav-menu__item {
            margin-bottom: 5px
        }

        .c-nav-menu--vertical>.c-nav-menu__item {
            margin-bottom: 5px;
            width: 100%
        }

        .c-nav-menu--vertical>.c-nav-menu__item:last-child {
            margin-bottom: 0
        }

        .c-nav-menu__item--has-icon {
            margin-bottom: 15px
        }

        .c-nav-menu__item--has-icon a {
            display: -ms-flexbox;
            display: flex
        }

        .c-nav-menu__item--has-icon .c-nav-menu__icon {
            margin-right: 20px
        }

        .c-nav-menu__item--has-icon .c-nav-menu__text {
            -ms-flex: 1;
            flex: 1
        }

        .c-nav-menu--horizontal .c-nav-menu__item--has-icon,
        .c-nav-menu--vertical .c-nav-menu__item--has-icon {
            margin-bottom: 20px
        }

        .c-nav-menu--horizontal .c-nav-menu__item--has-icon:last-child,
        .c-nav-menu--vertical .c-nav-menu__item--has-icon:last-child {
            margin-bottom: 0
        }

        .c-nav-menu__icon {
            width: 60px;
            height: 60px;
            background: whitesmoke;
            border-radius: 50%;
            overflow: hidden
        }

        .c-nav-menu__icon--md {
            width: 50px;
            height: 50px
        }

        .c-nav-menu__icon img {
            width: 100%;
            transition: transform .3s
        }

        .c-nav-menu__item--has-icon:hover .c-nav-menu__icon img {
            transform: scale(1.2)
        }

        .c-nav-menu__text h4 {
            font-size: 1.6rem;
            font-weight: 500;
            margin: 0 0 5px
        }

        .c-nav-menu__item--has-icon:hover .c-nav-menu__text h4 {
            color: #0ba4db
        }

        .c-nav-menu__text p {
            font-size: 1.4rem;
            margin: 0;
            letter-spacing: 0;
            line-height: 1.5
        }

        .c-nav-menu__item--has-icon:hover .c-nav-menu__text p {
            color: #011b33
        }

        .c-nav.c-nav--mobile-only {
            display: none;
            padding: 0
        }

        @media screen and (max-width: 1020px) {
            .c-nav.c-nav--mobile-only {
                top: -17px;
                display: block;
                overflow-x: hidden
            }
        }

        .c-nav.c-nav--mobile-only.c-nav--dark-blue .c-nav__trigger span {
            background-color: #eaf6fc
        }

        .c-nav.c-nav--mobile-only.c-nav--dark-blue .c-nav__header {
            border-bottom-color: rgba(234, 246, 252, 0.1)
        }

        .c-nav.c-nav--mobile-only.c-nav--dark-blue .c-nav-menu__item a {
            color: #eaf6fc
        }

        .c-nav.c-nav--mobile-only.c-nav--dark-blue .c-nav-menu__item--cta .u-text--secondary {
            color: #0ba4db
        }

        .c-nav.c-nav--mobile-only .c-nav__body--parent {
            overflow-x: hidden;
            transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
            position: relative;
            display: none
        }

        .c-nav.c-nav--mobile-only .c-nav__body .c-header {
            margin-bottom: 10px
        }

        .c-nav.c-nav--mobile-only .c-nav__body .c-header .c-button {
            opacity: 0.7;
            transform: translateY(-8px)
        }

        .c-nav.c-nav--mobile-only .c-nav__body .c-header .c-button__text {
            color: #55717b
        }

        .c-nav.c-nav--mobile-only .c-nav__body .c-header .c-button__icon svg path {
            fill: #55717b
        }

        .c-nav.c-nav--mobile-only .c-nav__body .c-header .c-button__icon {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .c-nav.c-nav--mobile-only.c-nav--is-opened .c-nav__body--parent {
            display: block
        }

        .c-nav.c-nav--mobile-only .c-nav__mask {
            width: 200%;
            transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1)
        }

        .c-nav.c-nav--mobile-only .c-nav__mask>div {
            width: 50%;
            float: left;
            padding: 16px
        }

        .c-nav.c-nav--mobile-only .c-nav__body--is-opened .c-nav__mask {
            transform: translateX(-50%)
        }

        .c-nav.c-nav--mobile-only .c-nav__header {
            padding: 16px;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: justify;
            justify-content: space-between;
            width: 100%;
            justify-content: space-between;
            border-bottom: 1px solid rgba(240, 242, 243, 0.6);
            position: relative;
            z-index: 999
        }

        .c-nav.c-nav--mobile-only .c-nav__header .c-nav--right .c-button {
            display: none
        }

        .c-nav.c-nav--mobile-only .c-nav__trigger {
            cursor: pointer;
            display: inline-block;
            position: relative;
            margin: 10px 5px;
            z-index: 20;
            margin-left: 15px
        }

        .c-nav.c-nav--mobile-only .c-nav__trigger--is-active span:nth-child(2) {
            opacity: 0
        }

        .c-nav.c-nav--mobile-only .c-nav__trigger--is-active span:first-child {
            top: 0.438em;
            transform: rotate(45deg)
        }

        .c-nav.c-nav--mobile-only .c-nav__trigger--is-active span:last-child {
            top: -0.313em;
            transform: rotate(-45deg)
        }

        .c-nav.c-nav--mobile-only .c-nav__trigger span {
            background-color: rgba(1, 27, 51, 0.95);
            display: block;
            height: 0.133em;
            margin-bottom: .250em;
            position: relative;
            top: 0;
            transition: all 0.3s ease-in-out;
            width: 1.25em
        }

        .c-nav.c-nav--mobile-only .c-nav__trigger span:last-child {
            margin-bottom: 0
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__group {
            margin-bottom: 30px
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__group:last-child {
            margin-bottom: 0
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__item {
            margin-bottom: 16px;
            position: relative;
            transition: .3s all
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__item:last-child {
            margin-bottom: 0;
            margin-top: 20px
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__item:only-child {
            margin: 8px 0
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__item a[href="#"]:before {
            content: "";
            position: absolute;
            right: 0;
            width: 0;
            height: 0;
            top: 50%;
            transform: translateY(-50%) rotate(0);
            border-style: solid;
            border-width: 3px 0 3px 5.2px;
            border-color: transparent transparent transparent #5c6a6e;
            transition: ease-in-out 0.1s transform
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__item:hover {
            color: #000
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__item--cta::before {
            content: none
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__item--cta .u-text--secondary {
            color: #3bb75e
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__item--cta .c-button {
            text-align: center;
            height: 40px;
            line-height: 40px;
            color: white
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__group .c-nav-menu__item:last-child {
            margin-top: 0
        }
    </style>
    <style>
        .c-homepage-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden
        }

        .c-homepage-animation__curve {
            position: absolute;
            top: calc(50% - 200px);
            left: 0;
            width: 100%;
            height: 400px;
            background-size: auto 350px;
            display: none
        }

        .c-homepage-animation--play .c-homepage-animation__curve {
            -webkit-clip-path: polygon(0 0, 0 0, 0 100%, 0 100%);
            clip-path: polygon(0 0, 0 0, 0 100%, 0 100%);
            animation: moveCurve 4s;
            animation-iteration-count: 1
        }

        .c-homepage-animation__curve:before {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 0.2;
            background-size: inherit;
            background-image: url("/assets/img/patterns/curved-pattern.png");
            background-repeat: repeat-x
        }

        @keyframes moveCurve {
            0% {
                -webkit-clip-path: polygon(0 0, 0 0, 0 100%, 0 100%);
                clip-path: polygon(0 0, 0 0, 0 100%, 0 100%)
            }

            50% {
                -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%)
            }

            100% {
                -webkit-clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%);
                clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%)
            }
        }

        .c-homepage-animation__worldmap {
            position: absolute;
            top: 0;
            left: 45%;
            height: 100%;
            width: 55%;
            overflow: hidden;
            border-radius: 50%;
            transition: .3s ease-in;
            z-index: 2
        }

        @media all and (max-width: 800px) {
            .c-homepage-animation__worldmap {
                left: 0;
                top: -50%;
                width: 100%
            }
        }

        .c-homepage-animation--play .c-homepage-animation__worldmap {
            opacity: 1
        }

        .c-homepage-animation__worldmap svg {
            position: absolute;
            transition: 2s cubic-bezier(0.075, 0.82, 0.165, 1);
            left: -30%;
            top: 0;
            height: 100%
        }

        @media all and (max-width: 800px) {
            .c-homepage-animation__worldmap svg {
                left: -600px;
                top: 100px
            }
        }

        .c-homepage-animation--americas .c-homepage-animation__worldmap svg {
            top: 10%;
            left: 0
        }

        .c-homepage-animation--africa .c-homepage-animation__worldmap svg {
            left: -35%;
            top: 5%
        }

        .c-homepage-animation--europe .c-homepage-animation__worldmap svg {
            left: -50%;
            top: 15%
        }

        .c-homepage-animation__worldmap svg .map-pointer {
            opacity: 0;
            transform: scale(0.5);
            transition: .2s ease-in;
            pointer-events: none
        }

        .c-homepage-animation__worldmap svg .map-pointer#united-states {
            transform-origin: 159px 212px
        }

        .c-homepage-animation__worldmap svg .map-pointer#canada {
            transform-origin: 229px 82px
        }

        .c-homepage-animation__worldmap svg .map-pointer#brazil {
            transform-origin: 375px 432px
        }

        .c-homepage-animation__worldmap svg .map-pointer#nigeria {
            transform-origin: 658px 334px
        }

        .c-homepage-animation__worldmap svg .map-pointer#egypt {
            transform-origin: 773px 260px
        }

        .c-homepage-animation__worldmap svg .map-pointer#south-africa {
            transform-origin: 744px 531px
        }

        .c-homepage-animation__worldmap svg .map-pointer#uk {
            transform-origin: 674px 161px
        }

        .c-homepage-animation__worldmap svg .map-pointer#china {
            transform-origin: 1084px 201px
        }

        .c-homepage-animation__worldmap svg .map-pointer#india {
            transform-origin: 1014px 271px
        }

        .c-homepage-animation__worldmap svg .map-pointer#norway {
            transform-origin: 754px 41px
        }

        .c-homepage-animation--europe .c-homepage-animation__worldmap svg .map-pointer#norway,
        .c-homepage-animation--europe .c-homepage-animation__worldmap svg .map-pointer#china,
        .c-homepage-animation--europe .c-homepage-animation__worldmap svg .map-pointer#uk,
        .c-homepage-animation--europe .c-homepage-animation__worldmap svg .map-pointer#india {
            opacity: 1;
            transform: scale(1)
        }

        .c-homepage-animation--europe .c-homepage-animation__worldmap svg .map-pointer#uk {
            transition-delay: .6s
        }

        .c-homepage-animation--europe .c-homepage-animation__worldmap svg .map-pointer#norway {
            transition-delay: 1s
        }

        .c-homepage-animation--europe .c-homepage-animation__worldmap svg .map-pointer#india {
            transition-delay: 1.5s
        }

        .c-homepage-animation--europe .c-homepage-animation__worldmap svg .map-pointer#china {
            transition-delay: 2.1s
        }

        .c-homepage-animation--americas .c-homepage-animation__worldmap svg .map-pointer#canada,
        .c-homepage-animation--americas .c-homepage-animation__worldmap svg .map-pointer#united-states,
        .c-homepage-animation--americas .c-homepage-animation__worldmap svg .map-pointer#brazil {
            opacity: 1;
            transform: scale(1)
        }

        .c-homepage-animation--americas .c-homepage-animation__worldmap svg .map-pointer#canada {
            transition-delay: .6s
        }

        .c-homepage-animation--americas .c-homepage-animation__worldmap svg .map-pointer#united-states {
            transition-delay: 1s
        }

        .c-homepage-animation--americas .c-homepage-animation__worldmap svg .map-pointer#brazil {
            transition-delay: 1.5s
        }

        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer {
            cursor: e-resize;
            pointer-events: all
        }

        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer#brazil,
        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer#nigeria,
        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer#south-africa,
        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer#egypt,
        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer#norway {
            opacity: 1;
            transform: scale(1) rotate(0)
        }

        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer#norway {
            transition-delay: .6s
        }

        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer#egypt {
            transition-delay: 1s
        }

        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer#south-africa {
            transition-delay: 1.5s
        }

        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer#nigeria {
            transition-delay: 2s
        }

        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer:hover {
            transform: scale(1.1)
        }

        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer--left {
            cursor: w-resize
        }

        .c-homepage-animation__tooltip {
            position: absolute;
            z-index: 20;
            background: #f1fdf4;
            max-width: 180px;
            transition: transform .3s, opacity .3s;
            opacity: 0;
            transform: translateY(-10px) rotate(-2deg)
        }

        .c-homepage-animation__tooltip--on-left {
            transform: translateY(-10px) rotate(2deg);
            text-align: right
        }

        .c-homepage-animation__tooltip--is-visible {
            opacity: 1;
            transform: translateY(0) rotate(0)
        }

        .c-homepage-animation__tooltip h5 {
            font-size: 1.2rem;
            line-height: 1;
            margin: 0
        }

        .c-homepage-animation__tooltip h5 b {
            color: #3bb75e
        }

        .c-homepage-animation__tooltip p {
            font-size: 1.2rem;
            line-height: 1.4;
            margin: 5px 0
        }
    </style>
    <style>
        .c-hero-video {
            width: 90%;
            max-width: 1024px;
            position: relative;
            z-index: 1000;
            transition: all .3s linear;
            opacity: 0
        }

        @media screen and (max-width: 600px) {
            .c-hero-video {
                width: 100%
            }
        }

        @keyframes video-in {
            to {
                opacity: 1
            }
        }

        @keyframes video-out {
            to {
                opacity: 0
            }
        }

        .u-overlay--is-entering .c-hero-video {
            animation: video-in .3s;
            animation-delay: .5s
        }

        .u-overlay--is-visible .c-hero-video {
            opacity: 1
        }

        .u-overlay--is-leaving .c-hero-video {
            animation: video-out .5s
        }

        .c-hero-video--is-visible {
            opacity: 1
        }

        .c-hero-video__iframe {
            height: 0;
            padding-bottom: 56.25%;
            position: relative;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 1px 8px 29px rgba(0, 0, 0, 0.4)
        }

        .c-hero-video__iframe iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .c-hero-video .c-button--close {
            width: 24px;
            height: 34px;
            position: absolute;
            right: -32px;
            border-radius: 60px;
            top: -2px;
            opacity: 0.6;
            transition: opacity linear 0.3s
        }

        .c-hero-video .c-button--close:hover {
            opacity: 0.8
        }

        @media screen and (max-width: 600px) {
            .c-hero-video .c-button--close {
                position: fixed;
                bottom: 40px;
                left: 50%;
                transform: translateX(-50%);
                opacity: 0.5;
                position: fixed;
                top: auto
            }

            .c-hero-video .c-button--close:before,
            .c-hero-video .c-button--close:after {
                content: none
            }
        }

        .c-hero-video .c-button--close span {
            padding: 0 25px;
            border-radius: 4px;
            background-color: #ffffff30;
            border: 1px solid #ffffff29;
            line-height: 2.6;
            color: white
        }
    </style>
    <style>
        .c-logo-row {
            display: -ms-flexbox;
            display: flex;
            min-height: 100px;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
            z-index: 2
        }

        @media screen and (max-width: 750px) {
            .c-logo-row {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap
            }
        }

        @media screen and (max-width: 600px) {
            .c-logo-row {
                -ms-flex-pack: start;
                justify-content: flex-start
            }
        }

        .c-logo-row--has-grid {
            margin-bottom: 5px
        }

        .c-logo-row--has-grid:last-child {
            margin-bottom: 0
        }

        @media screen and (max-width: 600px) {
            .c-logo-row--has-grid {
                display: -ms-flexbox;
                display: flex
            }

            .c-logo-row--has-grid~.c-logo-row--has-grid {
                display: none
            }
        }

        .c-logo-row--has-grid .c-logo {
            width: 100%;
            max-width: 150px;
            line-height: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            position: relative
        }

        .c-logo-row--has-grid .c-logo:first-child {
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .c-logo-row--has-grid .c-logo:last-child {
            -ms-flex-pack: end;
            justify-content: flex-end
        }

        @media screen and (max-width: 600px) {
            .c-logo-row--has-grid .c-logo:last-child {
                -ms-flex-pack: start;
                justify-content: flex-start
            }
        }

        .c-logo {
            display: -ms-flexbox;
            display: flex;
            position: relative;
            height: 28px;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .c-logo:first-child {
            padding-left: 0
        }

        .c-logo:last-child {
            padding-right: 0
        }

        @media screen and (max-width: 750px) {
            .c-logo {
                -ms-flex: 0 1 50%;
                flex: 0 1 50%
            }

            .c-logo:first-child {
                padding-left: 35px
            }

            .c-logo:last-child {
                padding-right: 35px
            }
        }

        @media screen and (max-width: 600px) {
            .c-logo {
                margin: 15px 0;
                height: 18px;
                -ms-flex-pack: start;
                justify-content: flex-start
            }

            .c-logo:first-child {
                padding-left: 0
            }

            .c-logo:last-child {
                padding-right: 0
            }
        }

        .c-logo>img {
            max-height: 100%
        }

        @media screen and (max-width: 600px) {
            .c-logo.u-hidden--mobile {
                display: none
            }
        }
    </style>
    <style>
        .js-scaling-overlay {
            position: fixed;
            height: 200px;
            width: 200px;
            border-radius: 50%;
            transform: scale(0.1);
            margin: -100px 0 0 -100px;
            z-index: 100;
            opacity: 0;
            background-color: #0ba4db;
            pointer-events: none;
            transition: transform .6s ease-in-out, background-color .6s ease-in-out
        }

        .js-scaling-overlay--expanded {
            transform: scale(32);
            background-color: rgba(0, 0, 0, 0.75)
        }

        .c-hero {
            display: -ms-flexbox;
            display: flex;
            position: relative
        }

        @media screen and (max-width: 600px) {
            .c-hero {
                display: block
            }
        }

        .c-hero__body {
            max-width: 64rem;
            width: 100%;
            opacity: 1;
            transition: opacity ease-in-out 0.3s
        }

        .l-section--dark-blue .c-hero__body h1,
        .l-section--dark-blue .c-hero__body p {
            color: white
        }

        .l-section--dark-blue .c-hero__body .c-hero__label {
            color: rgba(234, 246, 252, 0.9)
        }

        .c-hero__side {
            -ms-flex: 1;
            flex: 1
        }

        .c-hero__cta {
            margin-top: 28px
        }

        .c-hero__cta .c-button {
            margin-right: 20px
        }

        .c-hero__cta .c-button:last-child {
            margin-right: 0
        }

        @keyframes promptContinue {

            0%,
            70%,
            90% {
                transform: translateY(0)
            }

            80% {
                transform: translateY(12px)
            }
        }

        .c-hero__continue {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            margin: 50px auto;
            text-align: center;
            color: #011b33;
            animation: promptContinue infinite ease-in-out 3s;
            font-family: sans-serif;
            z-index: 2
        }

        .c-hero--404 h1 {
            font-size: 16rem
        }

        .c-hero--404 .c-hero__heading {
            margin-bottom: 30px
        }

        .c-hero--maintenance h1 {
            font-size: 10rem;
            line-height: 0.96
        }

        @media screen and (max-width: 600px) {
            .c-hero--maintenance h1 {
                font-size: 6rem
            }
        }

        .c-hero--maintenance .c-hero__heading {
            margin-bottom: 30px
        }

        .c-hero--maintenance p.u-text-summary {
            margin-left: auto;
            margin-right: auto;
            max-width: 40ch
        }

        .c-hero--central {
            text-align: center
        }

        .c-hero--central .c-hero__body {
            padding: 200px 0 150px
        }

        @media screen and (max-width: 600px) {
            .c-hero--central .c-hero__body {
                padding-bottom: 100px
            }
        }

        .c-hero--central-no-float:before {
            content: none
        }

        .c-hero--has-overflow:before {
            content: '';
            position: absolute;
            left: -48px;
            right: -48px;
            bottom: -80px;
            height: 120px;
            border-radius: 6px 6px 0 0;
            background: white;
            box-shadow: 2px 0px 1px rgba(0, 0, 0, 0.02), -2px -2px 1px rgba(0, 0, 0, 0.02);
            z-index: 1
        }

        .c-hero--central,
        .c-hero--pricing,
        .c-hero--form {
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center
        }

        .c-hero--central .c-hero__body,
        .c-hero--pricing .c-hero__body,
        .c-hero--form .c-hero__body {
            margin: 0 auto
        }


        .c-hero--has-video .c-hero__body {
            transition-delay: 0.3s
        }

        .c-hero--has-video+.u-overlay {
            background-color: transparent
        }

        .c-hero--pricing {
            display: block;
            padding-bottom: 0
        }

        .c-hero--pricing .c-hero__body {
            margin: 0 auto;
            padding: 200px 0 0;
            max-width: none
        }

        .c-hero--pricing .c-hero__heading {
            max-width: 64rem;
            margin: 0 auto;
            text-align: center
        }

        .c-hero--pricing .c-pricing-cards {
            margin: 0 auto;
            transform: translateY(48px)
        }

        .c-hero__pricing-switch {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center
        }

        .c-hero__pricing-switch--select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            cursor: pointer;
            padding: 3px 6px;
            padding-right: 16px;
            margin-left: 3px;
            font-family: inherit;
            color: inherit;
            background-color: #E9FCED;
            border-color: #E4F6E7;
            font-weight: 500;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 7 4'%3E%3Cdefs/%3E%3Cpath fill='%23011B33' d='M3.5 4L.5.2h6L3.5 4z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: 7px;
            background-position: right 6px center
        }

        .c-hero__pricing-switch--select:focus,
        .c-hero__pricing-switch--select:hover {
            outline: none;
            border-color: #3bb75e
        }

        .c-hero__pricing-switch--select-is-blue {
            background-color: #e2f3fa;
            border-color: #d8eaf5
        }

        .c-hero__pricing-switch--select-is-blue:focus,
        .c-hero__pricing-switch--select-is-blue:hover {
            outline: none;
            border-color: #A0B5C5
        }

        .c-hero--demo {
            display: block;
            padding-bottom: 0;
            margin-bottom: 50px
        }

        .c-hero--demo .c-hero__body {
            margin: 0 auto;
            padding: 200px 0 0;
            max-width: none
        }

        .c-hero--demo .c-hero__heading {
            max-width: 64rem;
            margin: 0 auto;
            text-align: center
        }

        .c-hero--demo .c-hero__body {
            margin-bottom: 60px
        }

        .c-hero--integrations {
            display: block;
            padding-bottom: 0
        }

        .c-hero--integrations .c-hero__body {
            margin: 0 auto;
            padding: 10px 0 0;
            max-width: none;
            box-shadow: #eef2f5 0px -1px 50px 50px
        }

        .c-hero--integrations .c-hero__image {
            width: 100%;
            overflow-x: hidden;
            padding-top: 5rem
        }

        .c-hero--integrations .c-hero__image img {
            width: 100%;
            max-width: 1200px;
            max-height: calc(100vh - 550px);
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: top;
            object-position: top
        }

        .c-hero--integrations .c-hero__heading {
            max-width: 64rem;
            margin: 0 auto;
            text-align: center
        }

        .c-hero--integrations .u-text-summary {
            margin: 0 auto;
            max-width: 33ch;
            margin-top: 2.4rem
        }

        .c-hero--integrations .c-form__control--input {
            position: relative;
            z-index: 2;
            margin-top: 2rem;
            transform: translateY(48%);
            background-color: #fff;
            text-align: center;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 15 15'%3E%3Cdefs/%3E%3Cpath fill='%23000' fill-rule='evenodd' d='M1.5 6.75a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0zm9.46 5.27a6.75 6.75 0 111.06-1.06l2.76 2.76a.75.75 0 11-1.06 1.06l-2.76-2.76z' clip-rule='evenodd' opacity='.2'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: 18px;
            background-position: 2rem 48%;
            padding-left: 5rem
        }

        .c-hero--integrations .c-form__control--input:active,
        .c-hero--integrations .c-form__control--input:focus {
            text-align: left
        }

        .c-hero--contact {
            margin-bottom: 100px
        }

        .c-hero--contact .c-hero__body {
            margin: 0 auto;
            padding: 200px 0 0;
            max-width: none
        }

        .c-hero--contact .c-hero__heading {
            max-width: 64rem;
            margin: 0 auto;
            text-align: center
        }

        .c-hero--contact .c-contact-cards {
            margin: 0 auto;
            transform: translateY(80px)
        }

        .c-hero--double-sided {
            min-height: 690px;
            padding-bottom: 80px
        }

        @media screen and (max-width: 600px) {
            .c-hero--double-sided {
                padding-bottom: 0
            }
        }

        .c-hero--double-sided .c-hero__heading {
            text-align: left
        }

        .c-hero--double-sided .c-hero__side:first-child {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: end;
            align-items: flex-end
        }

        .c-hero--double-sided .c-hero__body {
            padding: 240px 0 180px;
            max-width: 56rem;
            position: relative;
            z-index: 4
        }

        @media screen and (max-width: 600px) {
            .c-hero--double-sided .c-hero__body {
                padding: 160px 0 100px
            }
        }

        .c-hero--central-video {
            display: block;
            padding-bottom: 0;
            z-index: 10
        }

        .c-hero--central-video .c-hero__body {
            margin: 0 auto;
            padding: 150px 0 0;
            max-width: none
        }

        .c-hero--central-video .c-hero__heading {
            max-width: 64rem;
            margin: 0 auto;
            text-align: center
        }

        .c-hero--central-video .c-hero-video {
            margin: 0 auto;
            transform: translateY(80px);
            opacity: 1;
            width: 100%
        }

        @media screen and (max-width: 600px) {
            .c-hero--central-video .c-hero-video {
                transform: translateY(40px)
            }
        }

        .c-hero--form {
            display: block;
            padding-bottom: 0
        }

        .c-hero--form .c-hero__body {
            margin: 0 auto;
            max-width: none
        }

        .c-hero--form .c-hero__heading {
            max-width: 64rem;
            padding: 200px 0 70px;
            margin: 0 auto;
            text-align: center
        }

        .c-hero--form .c-card--form {
            margin-bottom: 150px
        }

        @media screen and (max-width: 600px) {
            .c-hero--form .c-card--form {
                margin-bottom: 100px
            }
        }

        .c-hero--support {
            display: block;
            padding-bottom: 0;
            z-index: 10
        }

        .c-hero--support .c-hero__body {
            margin: 0 auto;
            padding: 200px 0 150px;
            max-width: none
        }

        @media screen and (max-width: 600px) {
            .c-hero--support .c-hero__body {
                padding-bottom: 100px
            }
        }

        .c-hero--support .c-hero__heading {
            max-width: 64rem;
            margin: 0 auto;
            text-align: center;
            margin-bottom: 60px
        }

        .c-hero__footer {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            display: -ms-flexbox;
            display: flex;
            padding: 0 0 48px;
            transition: 0.6s ease-in;
            z-index: 3
        }

        .c-hero__footer--blue {
            background-color: #eaf6fc
        }

        .c-hero__footer--offwhite {
            background: #F9FBFC
        }

        .c-hero__footer--green {
            background-color: #F1FEF4
        }

        @media screen and (max-width: 600px) {
            .c-hero__footer {
                display: block;
                position: relative
            }

            .c-hero__footer .l-container {
                display: block
            }
        }

        .c-hero__video-summary {
            text-align: right;
            display: -ms-flexbox;
            display: flex;
            width: 450px;
            -ms-flex-align: center;
            align-items: center;
            cursor: pointer;
            transition: opacity 0.5s ease-in
        }

        @media screen and (max-width: 600px) {
            .c-hero__video-summary {
                opacity: 1;
                width: 100%;
                border-top: 1px solid rgba(0, 0, 0, 0.05);
                padding-top: 30px;
                margin-top: 30px;
                display: block;
                text-align: left
            }
        }

        .c-hero__video-summary:hover .c-button {
            transform: scale(1.1);
            box-shadow: -2px 1px 5px 0px rgba(0, 0, 0, 0.05), -1px 2px 2px rgba(0, 0, 0, 0.08)
        }

        .c-hero__video-summary p {
            font-weight: 500;
            margin: 0
        }

        .c-hero__video-summary .c-button {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: #0ba4db;
            margin: 0 0 0 10px;
            padding: 0;
            -webkit-appearance: none;
            transition: all 0.25s cubic-bezier(0.17, 0.635, 0.54, 1.435);
            will-change: box-shadow;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center;
            pointer-events: none
        }

        .c-hero__video-summary .c-button svg {
            padding-left: 0.6px;
            pointer-events: none
        }

        .c-hero__video-summary .u-mobile-only .c-button--reset {
            padding: 0;
            outline: 0;
            height: auto;
            background: none;
            -webkit-appearance: none;
            line-height: 1;
            color: #0ba4db;
            margin-top: 10px;
            font-size: 1.6rem
        }

        .c-hero__video-summary .u-mobile-only .c-button--reset svg>path {
            fill: #0ba4db
        }

        @media screen and (max-width: 600px) {
            .c-hero__video-summary .u-mobile-only .c-button--reset {
                padding: 10px 0
            }
        }

        .c-hero__video-summary svg>path {
            fill: white
        }

        .c-hero__logos {
            -ms-flex: 1;
            flex: 1
        }

        @media screen and (max-width: 600px) {
            .c-hero__logos {
                display: inline-block;
                width: 100%
            }
        }

        .c-hero__logos p {
            font-size: 1.4rem;
            font-weight: 500;
            margin: 0 0 12px
        }

        .c-hero__logos .c-logo {
            width: auto;
            margin: 0 24px 0 0;
            float: left
        }

        @media screen and (max-width: 600px) {
            .c-hero__logos .c-logo {
                margin-right: 15px
            }
        }

        .c-hero__media {
            width: 100%;
            height: 80%;
            transform: translateX(50px) translateY(150px);
            border-radius: 6px;
            background-size: cover;
            background-repeat: no-repeat;
            transition: transform ease-in-out 0.5s;
            position: relative;
            z-index: 2
        }

        .c-hero__media:before {
            content: '';
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: -1;
            width: 100%;
            height: 100%;
            border-radius: 6px;
            border: dashed 2px rgba(0, 0, 0, 0.1)
        }

        .c-hero__media--no-border::before {
            content: none
        }

        .c-hero__label {
            display: inline-block;
            display: inline-block;
            border-radius: 4px;
            font-size: 1.2rem;
            letter-spacing: 0.5px;
            margin-bottom: 20px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            opacity: 0.5
        }

        .l-section--green .c-hero__label {
            color: rgba(1, 27, 51, 0.9)
        }

        .l-section--blue .c-hero__label {
            color: rgba(1, 27, 51, 0.9)
        }

        .c-hero__backlink {
            left: 4.8rem;
            top: 12rem;
            position: absolute;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-align: center;
            align-items: center;
            z-index: 1
        }

        .c-hero__backlink>svg {
            fill: currentColor
        }

        .c-hero__backlink>span {
            margin-left: .8rem
        }

        .c-hero__backlink:hover {
            color: #0ba4db
        }

        .c-hero__backlink:hover>svg {
            animation: leftPulse 2.5s ease-in 0.5s infinite
        }

        @keyframes leftPulse {

            0%,
            10% {
                transform: translateX(0px)
            }

            5% {
                transform: translateX(-50%)
            }
        }
    </style>
    <style>
        .c-section-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .c-section-pattern:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 0.2;
            background-repeat: no-repeat
        }

        .c-hero--blue .c-section-pattern {
            opacity: 0.2
        }

        .c-hero--blue .c-section-pattern:before {
            -webkit-filter: hue-rotate(900deg) invert(0.5);
            filter: hue-rotate(900deg) invert(0.5)
        }

        .c-section-pattern--straight:before {
            background-image: url("/assets/img/patterns/straight-pattern.png");
            background-size: auto 200px;
            background-repeat: repeat-x
        }

        .c-section-pattern--curved {
            height: 400px;
            background-size: auto 350px
        }

        .c-section-pattern--curved:before {
            background-size: inherit;
            background-image: url("/assets/img/patterns/curved-pattern.png");
            background-position: 0 50px;
            background-repeat: repeat-x
        }

        .l-section--hero .c-section-pattern--curved {
            top: 25%
        }

        .l-section--blue .c-section-pattern--curved:before {
            background-image: url("/assets/img/patterns/curved-pattern-blue.png")
        }

        .c-section-pattern--curved.u-animate--play {
            animation: moveCurve linear 3s
        }

        @media screen and (max-width: 600px) {
            .c-section-pattern--curved.u-animate--play {
                animation: moveCurve linear 1s
            }
        }

        @keyframes moveCurve {

            0%,
            20% {
                -webkit-clip-path: polygon(100% 0, 0 0, 0 100%, 100% 100%);
                clip-path: polygon(100% 0, 0 0, 0 100%, 100% 100%)
            }

            50% {
                -webkit-clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%);
                clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%)
            }

            51%,
            60% {
                -webkit-clip-path: polygon(0 0, 0 0, 0 100%, 0 100%);
                clip-path: polygon(0 0, 0 0, 0 100%, 0 100%)
            }

            100% {
                -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%)
            }
        }

        .c-section-pattern--circular:before {
            background-image: url("/assets/img/patterns/circular-pattern.png");
            background-size: 600px 600px;
            background-position: -300px 0
        }

        .l-section--blue .c-section-pattern--circular:before {
            background-image: url("/assets/img/patterns/circular-pattern-blue.png")
        }

        .l-section--white .c-section-pattern--circular:before,
        .l-section--offwhite .c-section-pattern--circular:before {
            -webkit-filter: hue-rotate(800deg) invert(0.4);
            filter: hue-rotate(800deg) invert(0.4);
            opacity: 0.1
        }

        .c-section-pattern--circular-right:before {
            top: -100px;
            background-size: 700px 700px;
            background-position: calc(100% + 200px)
        }

        .c-section-pattern--circular-bottom:before {
            background-size: 600px 600px;
            background-position: 50% calc(100% + 480px)
        }

        .l-section--blue .c-section-pattern--checked {
            opacity: 0.3
        }

        /* 
        .c-section-pattern--checked:before {
            background-image: url("/assets/img/patterns/checked-pattern-blue.png");
            background-size: 100% 100%;
            background-repeat: no-repeat
        } */

        @media screen and (max-width: 600px) {
            .c-section-pattern--checked:before {
                background-size: auto;
                background-repeat: repeat-y
            }
        }
    </style>
    <style>
        .c-section-header {
            position: relative;
            margin-bottom: 50px
        }

        .c-section-header--spaced-top {
            margin-top: 100px
        }

        @media screen and (max-width: 600px) {
            .c-section-header--spaced-top {
                margin-top: 50px
            }
        }

        .c-section-header--spaced-bottom {
            margin-bottom: 100px
        }

        @media screen and (max-width: 600px) {
            .c-section-header--spaced-bottom {
                margin-bottom: 50px
            }
        }

        @media screen and (max-width: 980px) {
            .c-section-header {
                display: block
            }
        }

        @media screen and (max-width: 600px) {
            .c-section-header {
                margin-bottom: 50px;
                display: block
            }
        }

        .c-section-header__body {
            max-width: 64rem;
            width: 60%
        }

        @media screen and (max-width: 600px) {
            .c-section-header__body {
                width: 100%
            }
        }

        .c-section-header--center .c-section-header__body {
            margin: 0 auto;
            text-align: center
        }

        .c-section-header--right .c-section-header__body {
            margin-left: auto;
            text-align: right
        }

        .c-section-header__cta {
            margin-top: 24px
        }

        .c-section-header--caption {
            margin: 0 100px 0 0
        }

        @media screen and (max-width: 600px) {
            .c-section-header--caption {
                margin-right: 0
            }
        }
    </style>
    <style>
        .c-feature {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            margin-bottom: 150px
        }

        @media screen and (max-width: 600px) {
            .c-feature {
                display: block;
                margin-bottom: 50px
            }
        }

        .c-feature:last-child {
            margin-bottom: 0
        }

        .c-feature__left,
        .c-feature__right {
            -ms-flex: 1;
            flex: 1;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-pack: center;
            justify-content: center
        }

        @media screen and (max-width: 600px) {

            .c-feature__left,
            .c-feature__right {
                display: block;
                width: 100%;
                margin-top: 50px
            }
        }

        .c-feature__left {
            margin-right: 50px;
            -ms-flex-align: center;
            align-items: center
        }

        .c-feature--reversed .c-feature__left {
            -ms-flex-order: 2;
            order: 2;
            margin-left: 50px;
            margin-right: 0
        }

        @media screen and (max-width: 600px) {
            .c-feature--reversed .c-feature__left {
                margin: 0
            }
        }

        .c-feature__right {
            -ms-flex-align: center;
            align-items: center
        }

        .c-feature--reversed .c-feature__right {
            -ms-flex-align: center;
            align-items: center
        }

        .c-feature__body {
            width: 100%;
            max-width: 500px
        }

        .c-feature__text {
            margin-bottom: 10px
        }

        .c-feature__text p {
            font-size: 1.9rem;
            line-height: 1.5;
            letter-spacing: -0.01em
        }

        @media screen and (max-width: 600px) {
            .c-feature__text p {
                font-size: 1.7rem
            }
        }

        .c-feature__benefits {
            margin: 30px 0
        }

        .c-feature__entry {
            margin-bottom: 50px
        }

        .c-feature__entry:last-of-type {
            margin-bottom: 0
        }

        .c-feature__media {
            position: relative;
            z-index: 2;
            transition: all 0.3s ease
        }

        .c-feature__media--small .c-feature__image,
        .c-feature__media--small .c-feature__video {
            transform: scale(0.4)
        }

        .c-feature__media--medium .c-feature__image,
        .c-feature__media--medium .c-feature__video {
            transform: scale(0.8)
        }

        .c-feature__media figcaption {
            position: absolute;
            width: 100%
        }

        .c-feature__image,
        .c-feature__video {
            position: relative
        }

        .c-feature__image figcaption,
        .c-feature__video figcaption {
            padding: 12px;
            padding-left: 2px;
            font-size: 1.2rem;
            color: rgba(87, 111, 127, 0.8);
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
            color: rgba(87, 111, 127, 0.95)
        }

        .c-feature--reversed .c-feature__image figcaption,
        .c-feature--reversed .c-feature__video figcaption {
            text-align: left
        }

        .c-feature__image img,
        .c-feature__image video,
        .c-feature__video img,
        .c-feature__video video {
            max-width: 100%;
            vertical-align: middle
        }

        .c-feature__image img,
        .c-feature__video img {
            border-radius: 4px;
            transition: all 0.5s
        }

        @media screen and (max-width: 600px) {

            .c-feature__image video,
            .c-feature__video video {
                display: none
            }
        }

        .c-feature__image--small-radius img,
        .c-feature__video--small-radius img {
            border-radius: 6px
        }

        .c-feature__image--dash:after,
        .c-feature__video--dash:after {
            content: "";
            position: absolute;
            left: 24px;
            top: 24px;
            height: 100%;
            border-radius: 6px;
            width: 100%;
            border: 1.2px dashed rgba(59, 183, 94, 0.5)
        }

        .c-feature__image--dash__group,
        .c-feature__video--dash__group {
            transform: translateX(24px) translateY(24px)
        }

        .c-feature__image--dash__group.u-animate-in-view--play,
        .c-feature__video--dash__group.u-animate-in-view--play {
            transform: translateX(0) translateY(0)
        }

        .c-feature--reversed .c-feature__image--dash__group.u-animate-in-view--play,
        .c-feature--reversed .c-feature__video--dash__group.u-animate-in-view--play {
            transform: translateX(48px) translateY(0)
        }

        .c-feature__image--ring:after,
        .c-feature__video--ring:after {
            content: "";
            position: absolute;
            left: 50px;
            top: -50px;
            width: 250px;
            height: 250px;
            background-image: url("/assets/img/patterns/ring-xs.png");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            opacity: 0.1
        }

        .c-feature--reversed .c-feature__image--ring::after,
        .c-feature--reversed .c-feature__video--ring::after {
            left: auto;
            right: -50px
        }

        .c-feature__subscript {
            font-size: 2.8rem;
            font-weight: 700;
            font-family: "Boing", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            color: rgba(1, 27, 51, 0.2);
            margin-bottom: 10px;
            letter-spacing: 1px
        }

        .c-feature__cta {
            margin-bottom: 24px
        }

        .c-feature__cta .c-button--link {
            font-size: 1.6rem
        }

        .c-feature-testimonial {
            margin-top: 15px
        }

        .c-feature-testimonial__message {
            padding: 6px 20px;
            background-color: #F9FBFC;
            border-radius: 4px;
            border: 1px solid rgba(1, 27, 51, 0.06);
            box-shadow: 0px 1px 2px rgba(1, 27, 51, 0.02);
            position: relative;
            margin-bottom: 24px;
            max-width: 450px
        }

        .c-feature-testimonial__message::before,
        .c-feature-testimonial__message::after {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            border-style: solid;
            border-color: transparent;
            border-bottom: 0
        }

        .c-feature-testimonial__message::before {
            bottom: -17px;
            left: 21px;
            border-top-color: rgba(1, 27, 51, 0.06);
            border-width: 16px
        }

        .c-feature-testimonial__message::after {
            bottom: -15px;
            left: 22px;
            border-top-color: #F9FBFC;
            border-width: 15px
        }

        .l-section--offwhite .c-feature-testimonial__message {
            background-color: white
        }

        .l-section--offwhite .c-feature-testimonial__message::after {
            border-top-color: white
        }

        .c-feature-testimonial__author {
            padding-left: 10px;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-align: center;
            align-items: center
        }

        .c-feature-testimonial__author-name {
            font-family: "Boing", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            line-height: 1.1;
            margin-bottom: 2px;
            font-size: 1.8rem
        }

        .c-feature-testimonial__author-role {
            font-size: 1.2rem
        }

        .c-feature-testimonial__author-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #F4F7F9;
            margin-right: 12px;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            overflow: hidden;
            display: -ms-flexbox;
            display: flex
        }

        .c-feature-testimonial__author-image>img {
            -o-object-fit: cover;
            object-fit: cover;
            max-width: 100%
        }

        .c-feature-testimonial__author-image--sm {
            width: 48px;
            height: 48px
        }

        .c-feature-testimonial__meta {
            font-size: 1.4rem
        }
    </style>
    <style>
        .l-section--blue .c-testimonial,
        .l-section--green .c-testimonial {
            background: rgba(255, 255, 255, 0.85)
        }

        .c-testimonial .c-card__header {
            height: 16px;
            margin: 0 0 12px
        }

        .c-testimonial .c-card__body {
            margin: 0 0 12px;
            margin: 0;
            -ms-flex: 1;
            flex: 1;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        .c-testimonial__company {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            display: flex
        }

        .c-testimonial__company .c-logo {
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .c-testimonial__text {
            margin: 32px 0 16px;
            margin: 32px 0
        }

        .c-testimonial__author {
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 10px
        }

        .c-testimonial__author-name {
            font-family: "Boing", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            line-height: 1.1;
            margin-bottom: 4px;
            font-size: 1.8rem
        }

        .c-testimonial__author-role {
            font-size: 1.3rem
        }

        .c-testimonial__author-image {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background-color: #eaf6fc;
            margin-right: 12px;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            overflow: hidden;
            display: -ms-flexbox;
            display: flex
        }

        .c-testimonial__author-image>img {
            -o-object-fit: cover;
            object-fit: cover;
            max-width: 100%
        }

        .c-testimonial__author-image--sm {
            width: 50px;
            height: 50px
        }

        .c-testimonial__meta {
            font-weight: normal;
            font-size: 1.4rem;
            color: #3d5e69
        }

        .c-testimonial__footnote {
            font-size: 1.4rem;
            color: #74848A;
            line-height: 1.5
        }

        .c-testimonial-block {
            margin-bottom: 30px
        }
    </style>
    <style>
        .c-card {
            overflow: hidden;
            height: 100%;
            border-radius: 6px;
            border: 1px solid #f0f2f3;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-positive: 1;
            flex-grow: 1;
            padding: 48px 32px;
            box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.02);
            background: white;
            position: relative;
            z-index: 2
        }

        .c-card:hover {
            box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.05)
        }

        @media screen and (max-width: 600px) {
            .c-card {
                padding: 32px 24px
            }

            .c-card:not(last-child) {
                margin-bottom: 20px
            }
        }

        .c-card--integrations {
            cursor: pointer;
            transition: box-shadow 0.2s ease
        }

        .c-card--integrations:hover {
            box-shadow: 0px 3px 8px 1px rgba(0, 0, 0, 0.07)
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translate3d(4rem, 1rem, 0) scale(0.8)
            }
        }

        .c-card--integrations.active {
            animation: slideIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) backwards;
            animation-delay: calc(var(--delay-index) * 35ms)
        }

        .c-card--integrations .c-logo-wrap {
            display: -ms-flexbox;
            display: flex;
            max-width: 20rem;
            width: 100%;
            height: 32px;
            margin-bottom: 2.4rem
        }

        .c-card--integrations svg {
            margin-right: auto;
            height: auto;
            max-height: 100%;
            width: unset
        }

        .c-card--integrations h4 {
            font-size: 2rem;
            margin-bottom: .8rem
        }

        .c-card--integrations p {
            margin: 0;
            opacity: .5;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3
        }

        .c-card--padded {
            padding: 72px 32px
        }

        .c-card--centered {
            text-align: center
        }

        .c-card__icon {
            display: -ms-inline-flexbox;
            display: inline-flex;
            position: relative;
            height: 80px;
            margin-top: -10px;
            -ms-flex-align: center;
            align-items: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            margin-bottom: 30px;
            position: relative;
            transition: 0.3s all;
            width: 100%;
            width: -moz-available;
            width: -webkit-stretch;
            width: -webkit-fill-available;
            width: stretch
        }

        .c-card__icon>img {
            max-height: 100%
        }

        .c-card__footer {
            display: -ms-flexbox;
            display: flex;
            -ms-flex: 1;
            flex: 1;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding-top: 20px;
            transform: translateY(24px)
        }

        .c-card__link {
            font-size: 1.6rem;
            font-weight: 500;
            color: #3bb75e;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-align: center;
            align-items: center
        }

        .c-card__body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex: 1;
            flex: 1;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        .c-card--article .c-card__body>p {
            margin-top: 0;
            margin-bottom: auto
        }

        .c-card--article.c-card--engineering {
            padding: 32px;
            box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.06)
        }

        .c-card--article.c-card--engineering .c-card__author {
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 24px;
            border-top: 1px solid rgba(189, 222, 244, 0.2);
            padding-top: 24px
        }

        .c-card--article.c-card--engineering .c-card__author-name {
            font-family: "Boing", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            line-height: 1.1;
            margin-bottom: 2px;
            font-size: 1.8rem
        }

        .c-card--article.c-card--engineering .c-card__author-role {
            font-size: 1.3rem
        }

        .c-card--article.c-card--engineering .c-card__author-image {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background-color: #eaf6fc;
            margin-right: 12px;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            overflow: hidden;
            display: -ms-flexbox;
            display: flex
        }

        .c-card--article.c-card--engineering .c-card__author-image>img {
            -o-object-fit: cover;
            object-fit: cover;
            max-width: 100%
        }

        .c-card--article.c-card--engineering .c-card__author-image--sm {
            width: 48px;
            height: 48px
        }

        .c-card--s {
            max-width: 700px;
            margin: 0 auto
        }

        .c-card--sm {
            max-width: 540px;
            margin: 0 auto;
            padding: 35 30
        }

        .c-card--sm header {
            margin-bottom: 3rem
        }

        .c-card--sm header h1 {
            font-size: 2.6rem;
            line-height: 3rem;
            margin-bottom: 0
        }

        .c-card--sm header p {
            margin-top: 10px;
            line-height: 2.4rem
        }

        .c-card-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden
        }

        .c-card-pattern:before,
        .c-card-pattern:after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 0.3;
            background-repeat: no-repeat
        }

        .c-card-pattern--straight {
            height: 400px
        }

        .c-card-pattern--straight:before,
        .c-card-pattern--straight:after {
            background-image: url("/assets/img/patterns/straight-pattern.png");
            -webkit-filter: hue-rotate(900deg) invert(0.5);
            filter: hue-rotate(900deg) invert(0.5)
        }

        .c-card-pattern--curved {
            height: 800px
        }

        @media screen and (max-width: 600px) {
            .c-card-pattern--curved {
                height: 400px
            }
        }

        .c-card-pattern--curved:before,
        .c-card-pattern--curved:after {
            background-size: 90% auto;
            background-image: url("/assets/img/patterns/curved-pattern.png");
            background-position: 0 -50%;
            animation-duration: 1000s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            -webkit-filter: hue-rotate(40deg) invert(0.2);
            filter: hue-rotate(40deg) invert(0.2)
        }

        .c-card-pattern--curved:before {
            animation-name: curved-pattern-animation-before;
            left: -100%
        }

        .c-card-pattern--curved:after {
            animation-name: curved-pattern-animation-after
        }

        @media screen and (max-width: 600px) {

            .c-card-pattern--curved:before,
            .c-card-pattern--curved:after {
                animation: none
            }
        }

        .c-card-pattern--circle {
            width: 600px;
            height: 600px;
            opacity: 0.2;
            left: -50%;
            top: -150%
        }

        .c-card-pattern--circle:before {
            background-image: url("/assets/img/patterns/circular-pattern.png");
            background-size: 100% auto;
            background-position: 0 100%;
            -webkit-filter: hue-rotate(900deg) invert(0.5);
            filter: hue-rotate(900deg) invert(0.5);
            animation: spin 300s infinite
        }
    </style>
    <style>
        .c-signup {
            display: -ms-flexbox;
            display: flex;
            padding: 100px 0 0
        }

        @media screen and (max-width: 600px) {
            .c-signup {
                display: block;
                padding: 0
            }
        }

        .c-signup__left {
            width: 100%;
            max-width: 600px
        }

        @media screen and (max-width: 600px) {
            .c-signup__left {
                text-align: center;
                margin-bottom: 50px
            }
        }

        .c-signup__left>p {
            margin-bottom: 20px
        }

        .c-signup__right {
            -ms-flex: 1;
            flex: 1;
            width: 300px;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: end;
            justify-content: flex-end;
            -ms-flex-align: center;
            align-items: center
        }

        @media screen and (max-width: 600px) {
            .c-signup__right {
                width: 100%;
                -ms-flex-pack: center;
                justify-content: center
            }
        }
    </style>
    <style>
        .c-footer__row {
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 48px
        }

        @media screen and (max-width: 750px) {
            .c-footer__row {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                display: -ms-flexbox;
                display: flex;
                margin-bottom: 24px
            }
        }

        .c-footer__row--no-padder {
            padding: 0
        }

        .c-footer__row:last-child {
            padding-top: 48px;
            margin-bottom: 0;
            border-top: 1px solid rgba(240, 242, 243, 0.85)
        }

        @media screen and (max-width: 600px) {
            .c-footer__row:last-child {
                padding-top: 24px
            }

            .c-footer__row:last-child .c-footer-menu__group {
                display: block
            }

            .c-footer__row:last-child .c-footer__column {
                margin-bottom: 30px
            }

            .c-footer__row:last-child .c-footer__column:last-child {
                margin-bottom: 0
            }
        }

        .c-footer__column {
            -ms-flex: 0 1 33.33%;
            flex: 0 1 33.33%;
            padding: 0 16px;
            transition: 0.4s
        }

        @media screen and (max-width: 750px) {
            .c-footer__column:last-of-type {
                margin-bottom: 24px
            }
        }

        @media screen and (max-width: 600px) {
            .c-footer__column {
                -ms-flex: 0 1 100%;
                flex: 0 1 100%;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
                padding: 0
            }

            .c-footer__column:last-of-type {
                margin-bottom: 0
            }
        }

        .c-footer__column .c-country+.c-country {
            margin-top: 48px
        }

        @media screen and (max-width: 600px) {
            .c-footer__column .c-country+.c-country {
                margin-top: 30px
            }
        }

        .c-footer__group {
            margin-bottom: 20px
        }

        @media screen and (max-width: 600px) {
            .c-footer__group {
                margin-bottom: 0
            }

            .c-footer__group .c-footer__header:before {
                display: block
            }

            .c-footer__group .c-footer-list {
                max-height: 0
            }
        }

        .c-footer__header {
            position: relative;
            color: #011b33;
            display: inline-block;
            font-size: 1.8rem
        }

        .c-footer__header--muted {
            color: #3d5e69;
            font-weight: 500
        }

        .c-footer__header:before {
            display: none;
            content: "";
            position: absolute;
            right: 0;
            width: 0;
            height: 0;
            top: 50%;
            transform: translateY(-50%) rotate(0);
            border-style: solid;
            border-width: 3px 0 3px 5.2px;
            border-color: transparent transparent transparent #011b33;
            transition: ease-in-out 0.1s transform
        }

        @media screen and (max-width: 600px) {
            .c-footer__header {
                margin-bottom: 16px;
                display: block
            }

            .c-footer__header--active:before {
                transform: translateY(-50%) rotate(90deg)
            }
        }

        .c-footer-list {
            margin-bottom: 48px
        }

        @media screen and (max-width: 600px) {
            .c-footer-list {
                overflow: hidden;
                padding-right: 16px;
                margin-bottom: 8px;
                transition: max-height 0.2s ease-out
            }
        }

        .c-footer-list:last-of-type {
            margin-bottom: 0
        }

        .c-footer-list__item {
            color: rgba(1, 27, 51, 0.9);
            margin-bottom: 6px;
            line-height: 1.6;
            text-transform: capitalize
        }

        @media screen and (max-width: 600px) {
            .c-footer-list__item {
                margin-bottom: 8px
            }

            .c-footer-list__item:last-child {
                margin-bottom: 16px
            }
        }

        .c-footer-list__item a:hover {
            color: #0ba4db
        }

        .c-footer-list__item--link {
            color: #0ba4db;
            text-transform: none
        }

        .c-footer-list__item--link a:hover {
            color: #0980aa
        }

        .c-footer-list__item--lowercase {
            text-transform: lowercase
        }

        .c-footer-list--social {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center
        }

        .c-footer-list--social .c-footer-list__item {
            padding-right: 20px;
            margin-bottom: 0;
            list-style-type: none;
        }

        .c-footer-list--social .c-footer-list__item svg {
            max-width: 20px;
            display: -ms-flexbox;
            display: flex;
            vertical-align: middle;
            -o-object-fit: cover;
            object-fit: cover;
            opacity: 0.87;
            transition: 0.25s ease-in-out opacity
        }

        .c-footer-list--social .c-footer-list__item svg:hover {
            opacity: 1
        }

        .c-footer-list--social .c-footer-list__item:last-child {
            padding-right: 0
        }

        .c-footer-footnote {
            display: -ms-flexbox;
            display: flex;
            padding: 24px 16px;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between;
            font-size: 1.3rem;
            color: #3d5e69;
            box-shadow: inset 0 1px 1px rgba(240, 242, 243, 0.05)
        }

        .c-footer-footnote__item {
            position: relative
        }

        .c-footer-footnote__item select {
            font-size: 1.2rem;
            display: -ms-inline-flexbox;
            display: inline-flex;
            font-family: "Graphik", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            height: 48px;
            background-color: transparent;
            border: 0;
            -ms-flex-align: center;
            align-items: center;
            padding: 12px;
            color: #3d5e69;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            width: 100%;
            -moz-appearance: none;
            appearance: none;
            -webkit-appearance: none;
            font-weight: 500;
            outline: none
        }

        .c-footer-footnote__item--countries {
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center;
            cursor: pointer
        }

        .c-footer-footnote__item--countries .u-flag-icon {
            margin-right: 8px;
            border-radius: 2px
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">