<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package szymon-janiak
 */

?>

<footer>
    <section id="kontakt" class="contact-form pb-5">
        <div class="container contact-form--inner">
            <div class="row">
                <div class="col-12 col-lg-6 mb-4 before-contact-form">
                    <h3><strong>Kontakt</strong></h3>
                    <h4>Chcesz porozmawiać o inwestycji, zaprosić mnie na wystąpienie, uzyskać komentarz lub potrzebujesz konsultacji w zakresie start-upu lub pozyskania finansowania? </h4>
                    <h4 class="d-none d-xxl-block">Napisz do mnie:</h4>

                    <div class="d-flex flex-column mb-3 mb-lg-0">
                        <span class="d-lg-none mb-2 email-label">Napisz do mnie:</span>
                        <a href="mailto:hello@szymonjaniak.pl">hello@szymonjaniak.pl</a>
                    </div>

                    <div class="d-flex flex-column mt-3">
                        <span class=" mb-2 email-label">W sprawach dotyczących książki</span>
                        <a href="mailto:ksiazka@szymonjaniak.pl">książka@szymonjaniak.pl</a>
                    </div>

                </div>
                <div class="col-12 col-lg-6 mb-4">
                    <?php echo do_shortcode('[contact-form-7 id="47" title="Footer"]') ?>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-bottom d-flex align-items-center justify-content-between">
        <div class="container">
            <div class="row">
                <div class="col-4  col-sm-6">
                    <img class="d-lg-none" src="<?php echo get_theme_file_uri() ?>/img/logo-footer.png" alt="">
                    <svg class="d-none d-lg-block" width="340.049" height="70" viewBox="0 0 340.049 70">
                        <g id="logo-footer" transform="translate(6837 -2550.786)">
                            <g id="Group_178" data-name="Group 178" transform="translate(-6837 2551.016)">
                                <g id="Component_1_46" data-name="Component 1 – 46" transform="translate(0 -0.23)">
                                    <text id="SZYMON" transform="translate(12 23)" font-size="22"
                                        font-family="Poppins-Light, Poppins" font-weight="300">
                                        <tspan x="0" y="0">SZYMON</tspan>
                                    </text>
                                    <text id="JANIAK" transform="translate(0 56)" font-size="41"
                                        font-family="Poppins-ExtraBold, Poppins" font-weight="800">
                                        <tspan x="0" y="0">JANIAK</tspan>
                                    </text>
                                </g>
                            </g>
                            <text id="Venture_Capital" data-name="Venture Capital"
                                transform="translate(-6505.29 2599.786)" font-size="13"
                                font-family="Poppins-Light, Poppins" font-weight="300">
                                <tspan x="-101.023" y="0">Venture Capital</tspan>
                            </text>
                            <line id="Line_79" data-name="Line 79" x1="158.525"
                                transform="translate(-6655.475 2605.602)" fill="none" stroke="#67d0ff"
                                stroke-width="1" />
                        </g>
                    </svg>

                </div>
                <div class="col-8  col-sm-6 d-flex align-items-center justify-content-end">
                    <div class="d-flex flex-column align-items-end justify-content-end">
                        <img class="d-lg-none" src="<?php echo get_theme_file_uri()?>/img/vc-footer.png" alt="">
                        <small class="d-block"> Copyright © <?php echo get_the_date('Y') ?> Szymon Janiak </small>
                    </div>

                </div>
            </div>
        </div>

    </section>
</footer>


</div><!-- #page -->

<script>
AOS.init();
</script>


<?php wp_footer(); ?>

</body>

</html>