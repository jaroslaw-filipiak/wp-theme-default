<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package szymon-janiak
 */

 $switcher = get_field('lang_switcher', 'options');
 
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_theme_file_uri() ?>/img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_theme_file_uri() ?>/img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_theme_file_uri() ?>/img/fav/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_theme_file_uri() ?>/img/fav/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_theme_file_uri() ?>/img/fav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <section class="top-bar">
        <div class="container">
            <div class="row d-flex align-items-center top-bar--content">
                <div class="col  logo--wrapper d-flex align-items-center">
                    <!-- logo start -->
                    <a href="<?php echo get_home_url() ?>">
                        <img class="top-bar--logo is-hidden "
                            src="<?php echo get_theme_file_uri() ?>/img/logo-left-top-bar.svg" alt="">
                        <svg class="d-none" width="226" height="138" viewBox="0 0 226 138">
                            <g id="Group_147" data-name="Group 147" transform="translate(-140 -64)">
                                <g id="Group_3" data-name="Group 3" transform="translate(17 -2.167)">
                                    <g id="Component_1_28" data-name="Component 1 – 28"
                                        transform="translate(123 66.167)">
                                        <text id="SZYMON" transform="translate(17 34)" font-size="32"
                                            font-family="Poppins-Light, Poppins" font-weight="300">
                                            <tspan x="0" y="0">SZYMON</tspan>
                                        </text>
                                        <text id="JANIAK" transform="translate(0 80)" font-size="58"
                                            font-family="Poppins-ExtraBold, Poppins" font-weight="800">
                                            <tspan x="0" y="0">JANIAK</tspan>
                                        </text>
                                    </g>
                                </g>
                                <text id="Venture_Capital" data-name="Venture Capital" transform="translate(365 195)"
                                    font-size="20" font-family="Poppins-Light, Poppins" font-weight="300">
                                    <tspan x="-155.42" y="0">Venture Capital</tspan>
                                </text>
                                <line id="Line_2" data-name="Line 2" x1="224" transform="translate(140.5 173.5)"
                                    fill="none" stroke="#67d0ff" stroke-width="1" />
                            </g>
                        </svg>
                    </a>

                    <!-- logo end -->

                </div>
                <div class="col d-flex align-items-center justify-content-end">

                    <div class="multilang-menu--wrapper d-flex">
                        <?php if($switcher) {
                            echo do_shortcode('[custom-language-switcher]');
                        }  ?>
                    </div>
                    <div class="hamburger--wrapper">
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div id="menuScreen" class="row d-none"
                style="background-image: url(<?php echo get_theme_file_uri() ?>/img/szymon-janiak-img.png)">
                <div class="container d-flex flex-column flex-lg-row" style="max-width: 1320px;">
                    <div class="col-12 col-lg-4 col-xxl-6"></div>
                    <div class="col-12 col-lg-8 col-xxl-6 menu--inner col">
                        <?php 
                        wp_nav_menu( array(
                            'menu'           => 'Primary', 
                        ) );
                    ?>
                        <div style="border-top: 1px solid #707070; max-width: 450px;"
                            class="mt-3 mb-3 mt-xxl-5 mb-xxl-5 d-flex justify-content-center mx-auto"></div>
                        <div class="d-flex justify-content-center">
                            <a class="mx-auto text-center" target="_blank"
                                href="https://www.linkedin.com/in/szymon-janiak?original_referer=https%3A%2F%2Fwww%2Egoogle%2Ecom%2F&originalSubdomain=pl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                                    <path id="Icon_simple-linkedin" data-name="Icon simple-linkedin"
                                        d="M30.67,30.678H25.34V22.324c0-1.992-.041-4.556-2.778-4.556-2.779,0-3.2,2.167-3.2,4.409v8.5H14.026V13.5h5.121v2.342h.069a5.618,5.618,0,0,1,5.055-2.775c5.4,0,6.4,3.555,6.4,8.183v9.429ZM8.005,11.149a3.1,3.1,0,1,1,3.1-3.1A3.093,3.093,0,0,1,8.005,11.149Zm2.673,19.528H5.332V13.5h5.346ZM33.338,0H2.657A2.625,2.625,0,0,0,0,2.593V33.406A2.624,2.624,0,0,0,2.657,36H33.333A2.634,2.634,0,0,0,36,33.407V2.593A2.635,2.635,0,0,0,33.333,0Z" />
                                </svg>

                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="page" class="site">

        <script>
        window.addEventListener('DOMContentLoaded', function() {

            const hamburger = document.querySelector('.hamburger');
            const menu = document.querySelector('#menuScreen');
            const contactLink = document.querySelector('#menu-item-658');

            hamburger.addEventListener('click', () => {
                hamburger.classList.toggle('is-active');
                menu.classList.toggle('d-none')

            })

            contactLink.addEventListener('click', () => {
                menu.classList.add('d-none');
                hamburger.classList.remove('is-active');
            })


        })

        // ==================

        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            const topBar = document.querySelector('.top-bar');

            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                topBar.classList.add('top-bar__after-scroll')
            } else {
                topBar.classList.remove('top-bar__after-scroll')
            }
        }
        </script>