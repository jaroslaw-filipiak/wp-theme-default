<?php get_header('home') ?>

<section class="hero">
    <div class="hero--light">
        <img class="d-none d-lg-block  sj-logo-big" src="<?php echo get_theme_file_uri() ?>/img/sj-logo-big.svg"
            alt="Szymon Janiak">
        <h3 class="d-none d-lg-block">Venture Capital</h3>
    </div>
    <div class="hero--gray" style="background-image: url(<?php echo get_theme_file_uri() ?>/img/szymon-janiak-img.png)">

        <img class="sj-logo-vertical" src="<?php echo get_theme_file_uri() ?>/img/sj-logo-vertical.png" alt="">
    </div>
</section>

<section class="about-me pt-5 pb-5">
    <div class="container">
        <div class="row d-flex  align-items-center justify-content-between">
            <div class="col-12 col-lg-6">
                <?php the_field( 'content' ); ?>
                <a class="btn-default mt-3 d-inline-block" href="<?php echo get_home_url('', '/kim-jestem') ?>">Czytaj
                    więcej</a>
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-end mt-4 mt-lg-0">
                <?php if ( get_field( 'image' ) ) : ?>
                <img class="img-fluid" src="<?php the_field( 'image' ); ?>" />
                <?php endif ?>

            </div>
        </div>
    </div>
</section>

<section class="linkedin-feed">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php the_field( 'linkedin_code' ); ?>
            </div>
        </div>
    </div>
</section>

<section class="book-sell-cta">
    <div class="container">
        <div
            class="row d-flex flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-between pt-3 pb-3">
            <div class="col-12 col-lg-6  d-flex align-items-center justify-content-start mb-5 mb-lg-0">
                <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/book-sell-cta-img.png" alt="">
            </div>
            <div class="col-12 col-lg-6 ">
                <?php the_field( 'section_testimonials_content' ); ?>

                <div class="glider-contain glider-contain__front-page container p-0 mt-3">
                    <div class="row mb-4">
                        <div class="col">
                            <h3 class="subtitle">Eksperci o książce</h3>
                        </div>
                        <div class="col testimonials-nav">
                            <div class="testimonial-slide-prev ">
                                <img loading="lazy" src="<?php echo get_theme_file_uri() ?>/img/testimonial-arrow.svg"
                                    alt="prev">
                            </div>
                            <div class="testimonial--index"></div>
                            <div class="testimonial-slide-next ">
                                <img loading="lazy" src="<?php echo get_theme_file_uri() ?>/img/testimonial-arrow.svg"
                                    alt="prev">
                            </div>
                        </div>
                    </div>
                    <div class="glider">
                        <?php
                                // WP_Query arguments
                                $args = array(
                                    'post_type'              => array( 'opinie' ),
                                    'nopaging'               => true,
                                    'posts_per_page'         => '-1',
                                );

                                // The Query
                                $query = new WP_Query( $args );

                                // The Loop
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post(); ?>

                        <div class="testimonial">
                            <div class="testimonial--quote">
                                <img style="min-width: 84px;" src="<?php echo get_theme_file_uri() ?>/img/quote.png"
                                    alt="quote icon">
                            </div>
                            <div class="testimonial--content">
                                <div class="testimonial--txt">
                                    <p> <?php the_field( 'testimonial_content' ); ?></p>
                                </div>
                                <div class="testimonial--author">
                                    <p> <?php the_field( 'testimonial_person' ); ?></p>
                                </div>
                            </div>

                        </div>

                        <?php    }
                                 } else {
                                    // no posts found
                                }

                                // Restore original Post Data
                                wp_reset_postdata();
                        ?>

                    </div>

                </div>

                <div class="d-flex justify-content-center justify-content-lg-end mt-3">
                    <a class="btn-default" href="<?php echo get_home_url('', 'ksiazka') ?>">Czytaj więcej</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="media-logos">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="fancy-heading text-left">Media</h3>
                <div class="pt-5 ">
                    <h4 class="text-center">Regularnie komentuję wydarzenia dot. polskiej sceny technologicznej w
                        mediach.
                        Wypowiadałem się m.in. dla:</h4>
                </div>

            </div>
        </div>
        <div class="row">
            <div
                class="col-12 d-flex flex-wrap align-items-center justify-content-center bt-accent bb-accent pt-5 pb-5 mt-3 mb-5 media-logos--loop">
                <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/media-logos/forbes.png" alt="">
                <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/media-logos/money-pl.png" alt="">
                <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/media-logos/tech-crunch.png" alt="">
                <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/media-logos/puls-biznesu.png" alt="">
                <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/media-logos/wprost.png" alt="">
                <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/media-logos/mam-biznes.png" alt="">

                <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/media-logos/rp.png" alt="">
                <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/media-logos/mam-startup.png" alt="">
                <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/media-logos/parkiet.png" alt="">
                <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/media-logos/my-company-polska.png"
                    alt="">
                <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/media-logos/computer-world.png"
                    alt="">
            </div>
        </div>
    </div>
</section>

<section class="media-posts">
    <div class="container">

        <div class="row d-flex flex-col flex-lg-row align-items-start justify-content-between">
            <?php echo do_shortcode('[template id=661]') ?>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center pt-5">
                <a class="btn-default" href="<?php echo get_home_url('', '/media') ?>">Zobacz wszystkie</a>
            </div>
        </div>
    </div>
</section>

<section class="home-podcasts">
    <div class="container mt-5">
        <div class="row mb-5 pb-3">
            <div class="col d-flex flex-column flex-sm-row align-items-center justify-content-between">
                <h3 class="fancy-heading mb-3 mb-sm-0">Podcast</h3>
                <a class="btn-default btn-default__small" href="<?php echo get_home_url('', 'podcasty') ?>">Zobacz
                    wszystkie</a>
            </div>
        </div>
        <div class="row bb-accent">
            <div class="col-12 col-lg-5  pt-3 pb-3">
                <h3 style="font-size: 34px; line-height: 44px;">
                    <strong>Wolisz słuchać niż czytać?</strong>
                    Posłuchaj mojego autorskiego
                    podcastu o venture capital na:
                </h3>
            </div>
            <div
                class="col-12 col-lg-7  d-flex align-items-center justify-content-center justify-content-xl-end gap-4 podcasts--providers-icons">
                <a target="_blank" href="<?php the_field('spotify', 'option'); ?>">
                    <img loading="lazy" class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/spotify-icon.jpg"
                        alt=""></a>

                <a target="_blank" href="<?php the_field('google_podcasts', 'option'); ?>"> <img loading="lazy"
                        class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/google-podcastrs-icon.jpg"
                        alt=""></a>

                <a target="_blank" href="<?php the_field('soundcloud', 'option'); ?>"> <img loading="lazy"
                        class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/soundcloud-icon.jpg" alt=""></a>

                <a target="_blank" href="<?php the_field('apple_podcasts', 'option'); ?>"> <img loading="lazy"
                        class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/apple-podcasts-icon.jpg" alt="">
                </a>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col home-podcasts--loop">
                <?php echo do_shortcode('[template id=665]') ?>
            </div>
        </div>

    </div>

    <script>
    window.addEventListener('DOMContentLoaded', () => {

        const podcastsItems = document.querySelectorAll('.podcast .podcast--btn');

        [...podcastsItems].map((podcast) => {
            podcast.addEventListener('click', (e) => {


                const audio = e.target.parentNode.parentNode.parentNode.parentNode.children[1]
                    .children[0]
                const isPlaying = e.target.dataset.play;


                const switchBTN = e.target;

                // false and true are String's  !

                if (isPlaying === 'false') {
                    audio.play();
                    e.target.dataset.play = 'true';
                    switchBTN.classList.toggle('sprite-anim')


                } else {
                    audio.pause();
                    e.target.dataset.play = 'false';
                    switchBTN.classList.toggle('sprite-anim')
                }

            })

        })
    })
    </script>
</section>

<section class="home-blog bg-gray-f7 pt-5 pb-5 ">
    <div class="container">
        <div class="row d-flex flex-column flex-sm-row align-items-center">
            <div class="col d-flex align-items-center  justify-content-center justify-content-sm-start">
                <h3 class="fancy-heading mb-3 mb-sm-0">Blog</h3>
            </div>
            <div class="col d-flex align-items-center justify-content-center justify-content-sm-end">
                <a class="btn-default btn-default__small" href="<?php echo get_home_url('', 'blog') ?>">Zobacz
                    wszystkie</a>
            </div>
        </div>
        <div class="row mt-5">
            <?php echo do_shortcode('[template id=667]') ?>

        </div>
        <div class="row mt-5 d-flex flex-col flex-lg-row align-items-start justify-content-between">
            <?php echo do_shortcode('[template id=666]') ?>
        </div>
    </div>
</section>


<section class="home-newsletter__mobile-header d-xl-none"
    style="background-image: url(<?php echo get_theme_file_uri() ?>/img/newsletter-bg.jpg)">

</section>

<section class="home-newsletter"
    style="background-image: url(<?php echo get_theme_file_uri() ?>/img/newsletter-bg.jpg)">
    <div class="container">
        <div class="row ">
            <div class="col-12 col-xl-6 "></div>
            <div class="col-12 col-xl-6 ">
                <h3>Interesują Cię moje treści?</h3>
                <p>Podaj swój adres e-mail, by dostawać powiadomienia o nowych artykułach.</p>
                <?php  echo do_shortcode('[contact-form-7 id="668" title="newsletter"]') ?>
            </div>
        </div>
    </div>
</section>

<section class="vc__mobile-header" style="background-image: url(<?php echo get_theme_file_uri() ?>/img/vc-bg.jpg)">
    <img class="d-xl-none img-fluid mb-3" src="<?php echo get_theme_file_uri() ?>/img/czysta-logo.png"
        alt="czysta3.vc logo">
</section>

<section class="vc" style="background-image: url(<?php echo get_theme_file_uri() ?>/img/vc-bg.jpg)">
    <div class="container">
        <div class="row d-flex flex-column flex-xl-row">
            <div class="d-none d-xl-block col-12 col-xl-6"></div>
            <div class="col-12 col-xl-6 text-center text-xl-left">
                <img style="margin: 0 auto;" class="d-none d-xl-block img-fluid mb-3"
                    src="<?php echo get_theme_file_uri() ?>/img/czysta-logo.png" alt="czysta3.vc logo">
                <p>Fundusz, który założyłem należy do najbardziej aktywnych tego typu podmiotów w Europie
                    Środkowo-Wschodniej.
                </p>
                <p><strong>Zdobyliśmy szereg wyróżnień i nagród.
                        Szukasz inwestora?</strong></p>
                <a target="_blank" class="btn-black btn-black__small" href="https://czysta3.vc/">Zobacz naszą stronę</a>
            </div>

        </div>
    </div>
</section>


<script>
window.addEventListener('DOMContentLoaded', function() {

    const gliderItems = document.querySelectorAll('.testimonial').length;
    const indexWrapper = document.querySelector('.testimonial--index');
    const length = gliderItems;

    indexWrapper.innerHTML = `1 / ${ length  }`

    var glider = new Glider(document.querySelector('.glider'), {
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: false,
        scrollLock: true,
        dots: false,
        arrows: {
            prev: '.testimonial-slide-prev',
            next: '.testimonial-slide-next'
        },
    })

    glider.refresh(true);

    const gliderElem = document.querySelector('.glider');

    gliderElem.addEventListener('glider-slide-visible', function(event) {
        var glider = Glider(this);
        const indexWrapper = document.querySelector('.testimonial--index');
        const length = glider.slides.length;
        indexWrapper.innerHTML = `${glider.slide + 1}  / ${ length  }`
    });

    // ===========
    // handle logo on homepage

    const hamburger = document.querySelector('.home .hamburger--wrapper');
    const logo = document.querySelector('.top-bar--logo');

    hamburger.addEventListener('click', (e) => {
        logo.classList.toggle('is-hidden')
    })

})
</script>



<?php get_footer() ?>