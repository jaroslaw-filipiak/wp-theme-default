<?php get_header() ;

$switcher = get_field('lang_switcher', 'options');
$wp_upload = wp_upload_dir();

?>



<?php get_template_part('partials/page-title') ?>

<section class="book-cover mt-5 container-fluid bg-gray-f7 pb-4 pb-xl-0">
    <div class="container ">
        <div class="row ">
            <div class="col-12 col-lg-6 position-relative">
                <img class="d-lg-none img-fluid book-cover--img__mobile mt-5"
                    src="<?php echo get_theme_file_uri() ?>/img/book-cover--mobile.png" alt="">
                <img class="book-cover--img d-none d-lg-block"
                    src="<?php echo get_theme_file_uri() ?>/img/book-cover.png" alt="">
            </div>
            <div class="col-12 col-lg-6 p-lg-5 position-relative">
                <p>Założyłeś start-up i zdecydowałeś się sięgnąć
                    po finansowanie od funduszy VC, ale nie wiesz od czego zacząć? To książka dla Ciebie. Autor w
                    pragmatyczny
                    i przystępny sposób opisuje w niej swoje doświadczenia zbudowane na pracy z tysiącami start-upów,
                    by końcowo uchylić rąbek tajemnicy i pokazać
                    krok po kroku jak pozyskać inwestora w Polsce.
                </p>
                <p>Jako aktywny założyciel funduszu venture capital dzieli się spostrzeżeniami w zakresie tego jak
                    przygotować spółkę, co jest ważne dla sektora VC i czego należy unikać. To jedyny w swoim rodzaju
                    autorski przewodnik po rodzimej scenie VC, który ma ułatwić founderom pozyskanie środków na rozwój
                    spółek.</p>
                <a class="btn-default d-inline-block z-30" href="#book">Zamów teraz</a>
            </div>
        </div>
    </div>
</section>

<section class="book-slogan">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="d-none d-lg-block col"></div>
            <div class="col-12 col-lg-9 text-center">
                <h3 class="book-slogan--title"><span>Pierwsza polska książka</span> o pozyskiwaniu kapitału na rynku
                    Venture Capital napisana z perspektywy współtwórcy funduszu VC!</h3>
            </div>
            <div class="d-none d-lg-block col"></div>
        </div>
    </div>
</section>

<section class="book-testimonials">
    <div class="glider-contain container">
        <div class="row mb-4">
            <div class="col">
                <h3 class="subtitle">Eksperci o książce</h3>
            </div>
            <div class="col testimonials-nav">
                <div class="testimonial-slide-prev ">
                    <img loading="lazy" src="<?php echo get_theme_file_uri() ?>/img/testimonial-arrow.svg" alt="prev">
                </div>
                <div class="testimonial--index"></div>
                <div class="testimonial-slide-next ">
                    <img loading="lazy" src="<?php echo get_theme_file_uri() ?>/img/testimonial-arrow.svg" alt="prev">
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
                        <p><?php the_field( 'testimonial_content' ); ?></p>
                    </div>
                    <div class="testimonial--author">
                        <p><?php the_field( 'testimonial_person' ); ?></p>
                    </div>
                </div>


            </div>

            <?php }
                    } else {
                        // no posts found
                    }

                    // Restore original Post Data
                    wp_reset_postdata();
            ?>


        </div>

    </div>
</section>

<section class="book-patrons">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-patrons-media mb-5 mb-lg-0">
                <h3 class="subtitle text-center text-xxl-start">Patroni medialni</h3>
                <div
                    class="patrons--loop flex-col flex-lg-row flex-wrap justify-content-center  justify-content-xxl-start pb-lg-4">

                    <img loading="lazy" class="img-fluid"
                        src="<?php echo get_theme_file_uri() ?>/img/patroni-medialni/p1.jpg" alt="">

                    <img loading="lazy" class="img-fluid"
                        src="<?php echo get_theme_file_uri() ?>/img/patroni-medialni/p3.jpg" alt="">
                    <img loading="lazy" class="img-fluid"
                        src="<?php echo get_theme_file_uri() ?>/img/patroni-medialni/p4.jpg" alt="">


                    <img loading="lazy" class="img-fluid"
                        src="<?php echo get_theme_file_uri() ?>/img/patroni-medialni/p7.jpg" alt="">
                    <img loading="lazy" class="img-fluid"
                        src="<?php echo get_theme_file_uri() ?>/img/patroni-medialni/p8.jpg" alt="">
                    <img loading="lazy" class="img-fluid"
                        src="<?php echo get_theme_file_uri() ?>/img/patroni-medialni/p9.jpg" alt="">
                    <img loading="lazy" class="img-fluid"
                        src="<?php echo get_theme_file_uri() ?>/img/patroni-medialni/p10.jpg" alt="">
                    <img loading="lazy" class="img-fluid"
                        src="<?php echo get_theme_file_uri() ?>/img/patroni-medialni/p11.jpg" alt="">
                    <img loading="lazy" class="img-fluid"
                        src="<?php echo get_theme_file_uri() ?>/img/patroni-medialni/p12.jpg" alt="">
                    <img loading="lazy" class="img-fluid"
                        src="<?php echo get_theme_file_uri() ?>/img/patroni-medialni/p13.jpg" alt="">
                    <img loading="lazy" class="img-fluid"
                        src="<?php echo get_theme_file_uri() ?>/img/patroni-medialni/p14.jpg" alt="">
                    <img loading="lazy" class="img-fluid"
                        src="<?php echo get_theme_file_uri() ?>/img/patroni-medialni/p15.jpg" alt="">
                    <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/patroni-medialni/p2.jpg" alt="">
                    <img loading="lazy" class="img-fluid"
                        src="<?php echo get_theme_file_uri() ?>/img/patroni-medialni/p5.jpg" alt="">
                    <img loading="lazy" class="img-fluid"
                        src="<?php echo get_theme_file_uri() ?>/img/patroni-medialni/p6.jpg" alt="">

                </div>
            </div>
            <div class="col-12 col-lg-6 col-partners">
                <h3 class="subtitle text-center text-xxl-start">Partnerzy</h3>
                <div
                    class="patrons--loop flex-col flex-lg-row flex-wrap pb-lg-4 justify-content-center  justify-content-xxl-start bl-accent">
                    <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/evry-logo.jpg" alt="">
                    <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/czysta-logo.jpg" alt="">
                    <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/partnerzy/p16.jpg" alt="">
                    <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/partnerzy/p17.jpg" alt="">
                    <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/partnerzy/p18.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="book-cta <?php echo  $switcher ? '' : 'd-none' ?>"
    style="background-image: url(<?php echo get_theme_file_uri() ?>/img/uk-flag.png)">
    <div class="container pt-5 pb-5">
        <div class="row pt-2 pb-2">
            <div class="d-none d-xl-block col"></div>
            <div class="col-12 col-xl-7">
                <div class="d-flex flex-column align-items-center align-items-xl-end justify-content-center ">
                    <h3 class="text-center text-xl-end">Książka dostępna jest w polskiej oraz angielskiej wersji
                        językowej</h3>
                    <a class="btn-default d-inline-block" href="#book">Zamów teraz</a>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="book-content">
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-9">
                <h3 class="text-center fancy-heading">Dlaczego ?</h3>
                <p class="text-center">Polski rynek venture capital osiągnął historyczny szczyt. Rekordowe wyniki
                    dotyczą każdej z
                    kluczowych metryk: liczby inwestycji, ich wartości, odsetka rund kontynuacyjnych. Jeszcze nigdy
                    kapitał nie był dla start-upów tak dostępny, co znacząco przyczynia się do rozwoju innowacyjności w
                    Polsce. Wraz ze wzrostem rynku, uwypukla się luka edukacyjna. Start-upy zwracające się po
                    finansowanie do funduszy VC wciąż popełniają elementarne błędy, które przekreślają ich szansę na
                    pozyskanie inwestora. Brakuje ogólnodostępnych źródeł pragmatycznej wiedzy, która pochodzi z
                    polskiego rynku i nie jest jedynie teorią lub próbą zaszczepiania amerykańskich wzorców.</p>

                <h6 class="text-center">
                    <strong>Książka ta jest próbą rozwiązania powyższego problemu.</strong>
                </h6>

                <div class="d-flex justify-content-center mt-5 mb-5 pt-5 pb-5 iframe-wrapper">
                    <video controls src="<?php echo $wp_upload['baseurl'] ?>/video/szymon_janiak_1.mp4"></video>
                </div>


            </div>
            <div class="col"></div>
        </div>
    </div>
</section>

<section id="book" class="book-product">
    <div class="container">
        <div class="row d-flex flex-column flex-lg-row align-items-center justify-content-center gap-2">

            <div class="book">
                <div class="book--img">
                    <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/ebook.jpg" alt="">
                </div>
                <div class="book--footer" style="margin-top: -90px;">
                    <div class="book--title mb-3">Ebook</div>
                    <div class="book--price-box">
                        <div class="book--price">
                            <div class="d-flex book--price-col-1">
                                <a data-link="ebook-pl" href="<?php echo get_field('ebook_pl', 'options'); ?>"
                                    class="price-act pointer-none">44 zł</a>
                                <a data-link="ebook-en" href="<?php echo get_field('ebook_en', 'options'); ?>"
                                    class="price-act d-none pointer-none">44 zł</a>
                            </div>
                        </div>
                    </div>
                    <div class="book--version">
                        <p>Wybierz wersję językową *</p>
                        <form action="
                            ">
                            <div class="ebook-switcher d-flex align-items-center justify-content-center gap-4">
                                <label class="d-flex align-items-center" for="pl">

                                    <input name="18+" value="ebook-pl" id="18" type="radio" class="me-1">
                                    <img class="ms-2 me-3" src="<?php echo get_theme_file_uri() ?>/img/flag_pl.png"
                                        alt="pl flag">

                                    <label class="d-flex align-items-center" for="pl">
                                        <input name="18+" value="ebook-en" id="bel" type="radio" class="me-1">
                                        <img class="ms-2" src="<?php echo get_theme_file_uri() ?>/img/flag_uk.png"
                                            alt="pl flag">
                                    </label>
                            </div>
                        </form>


                        <script>
                        window.addEventListener('DOMContentLoaded', () => {
                            const ebookInputs = document.querySelectorAll('.ebook-switcher input');
                            const ebooks = [...ebookInputs];
                            const ebookBTN_PL = document.querySelector('a[data-link="ebook-pl"]');
                            const ebookBTN_EN = document.querySelector('a[data-link="ebook-en"]');

                            const is_lang_selected = false;


                            ebooks.map(item => {
                                item.addEventListener('click', (e) => {


                                    if (e.target.value === 'ebook-pl') {
                                        ebookBTN_EN.classList.add('d-none');
                                        ebookBTN_PL.classList.remove('d-none');
                                        ebookBTN_PL.classList.remove('pointer-none');
                                        ebookBTN_EN.classList.remove('pointer-none');
                                    } else if (e.target.value === 'ebook-en') {
                                        ebookBTN_PL.classList.add('d-none');;
                                        ebookBTN_EN.classList.remove('d-none');
                                        ebookBTN_PL.classList.remove('pointer-none');
                                        ebookBTN_EN.classList.remove('pointer-none');
                                    }
                                })
                            })
                        })
                        </script>


                    </div>
                </div>

            </div>

            <div class="book book__featured">
                <div class="book--img">
                    <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/book.jpg" alt="">
                </div>
                <div class="book--footer" style="margin-top: -90px;">
                    <div class="book--title mb-3">Książka</div>
                    <div class="book--price-box">
                        <div class="book--price">
                            <div class="d-flex book--price-col-1">
                                <a data-link="book-pl" href="<?php echo get_field('book_pl', 'options'); ?>"
                                    class="price-act pointer-none">44 zł</a>
                                <a data-link="book-en" href="<?php echo get_field('book_en', 'options'); ?>"
                                    class="price-act d-none pointer-none">44 zł</a>
                            </div>
                        </div>
                    </div>
                    <div class="book--version">
                        <p>Wybierz wersję językową *</p>
                        <form action="
                            ">
                            <div class="book-switcher d-flex align-items-center justify-content-center gap-4">
                                <label class="d-flex align-items-center" for="pl">

                                    <input name="18+" value="book-pl" id="18" type="radio" class="me-1">
                                    <img class="ms-2 me-3" src="<?php echo get_theme_file_uri() ?>/img/flag_pl.png"
                                        alt="pl flag">

                                    <label class="d-flex align-items-center" for="pl">
                                        <input name="18+" value="book-en" id="bel" type="radio" class="me-1">
                                        <img class="ms-2" src="<?php echo get_theme_file_uri() ?>/img/flag_uk.png"
                                            alt="pl flag">
                                    </label>
                            </div>
                        </form>

                        <script>
                        window.addEventListener('DOMContentLoaded', () => {
                            const bookInputs = document.querySelectorAll('.book-switcher input');
                            const books = [...bookInputs];
                            const bookBTN_PL = document.querySelector('a[data-link="book-pl"]');
                            const bookBTN_EN = document.querySelector('a[data-link="book-en"]');

                            const is_lang_selected = false;


                            books.map(item => {
                                item.addEventListener('click', (e) => {


                                    if (e.target.value === 'book-pl') {
                                        bookBTN_EN.classList.add('d-none');
                                        bookBTN_PL.classList.remove('d-none');
                                        bookBTN_PL.classList.remove('pointer-none');
                                        bookBTN_EN.classList.remove('pointer-none');
                                    } else if (e.target.value === 'book-en') {
                                        bookBTN_PL.classList.add('d-none');;
                                        bookBTN_EN.classList.remove('d-none');
                                        bookBTN_PL.classList.remove('pointer-none');
                                        bookBTN_EN.classList.remove('pointer-none');
                                    }
                                })
                            })
                        })
                        </script>


                    </div>
                </div>

            </div>

            <div class="book">
                <div class="book--img">
                    <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/book-3.jpg" alt="">
                </div>
                <div class="book--footer" style="margin-top: -90px;">
                    <div class="book--title mb-3">Książka + Ebook</div>
                    <div class="book--price-box">
                        <div class="book--price">
                            <div class="d-flex book--price-col-1">
                                <a data-link="book-ebook-pl" href="<?php echo get_field('book_ebook_pl', 'options'); ?>"
                                    class="price-act pointer-none">62 zł</a>
                                <a data-link="book-ebook-en" href="<?php echo get_field('book_ebook_en', 'options'); ?>"
                                    class="price-act d-none pointer-none">62 zł</a>
                            </div>
                        </div>
                    </div>
                    <div class="book--version">
                        <p>Wybierz wersję językową *</p>
                        <form action="
                            ">
                            <div class="books-set-switcher d-flex align-items-center justify-content-center gap-4">
                                <label class="d-flex align-items-center" for="pl">

                                    <input name="18+" value="set-pl" id="18" type="radio" class="me-1">
                                    <img class="ms-2 me-3" src="<?php echo get_theme_file_uri() ?>/img/flag_pl.png"
                                        alt="pl flag">

                                    <label class="d-flex align-items-center" for="pl">
                                        <input name="18+" value="set-en" id="bel" type="radio" class="me-1">
                                        <img class="ms-2" src="<?php echo get_theme_file_uri() ?>/img/flag_uk.png"
                                            alt="pl flag">
                                    </label>
                            </div>
                        </form>



                        <script>
                        window.addEventListener('DOMContentLoaded', () => {
                            const booksSetInputs = document.querySelectorAll('.books-set-switcher input');
                            const booksSet = [...booksSetInputs];
                            const book_set_BTN_PL = document.querySelector('a[data-link="book-ebook-pl"]');
                            const book_set_BTN_EN = document.querySelector('a[data-link="book-ebook-en"]');

                            const is_lang_selected = false;


                            booksSet.map(item => {
                                item.addEventListener('click', (e) => {


                                    if (e.target.value === 'set-pl') {
                                        book_set_BTN_EN.classList.add('d-none');
                                        book_set_BTN_PL.classList.remove('d-none');
                                        book_set_BTN_PL.classList.remove('pointer-none');
                                        book_set_BTN_EN.classList.remove('pointer-none');
                                    } else if (e.target.value === 'set-en') {
                                        book_set_BTN_PL.classList.add('d-none');;
                                        book_set_BTN_EN.classList.remove('d-none');
                                        book_set_BTN_PL.classList.remove('pointer-none');
                                        book_set_BTN_EN.classList.remove('pointer-none');
                                    }
                                })
                            })
                        })
                        </script>



                    </div>
                </div>

            </div>

        </div>
</section>

<section class="book-contents mt-5">
    <div class="container">
        <div class="row ">
            <div class="col d-flex justify-content-center">
                <img class="img-fluid" src="<?php echo get_theme_file_uri() ?>/img/spis.jpg" alt="">
            </div>
        </div>
    </div>
</section>


<section class="free-chapter bg-accent d-none">
    <div class="container p-4">
        <div class="row d-flex align-items-center justify-content-center free-chapter--header  pt-3 flex-lg-nowrap">
            <div class="col-12 col-lg-3 position-relative d-flex align-items-center justify-content-center">
                <img class="img-fluid free-chapter--img"
                    src="<?php echo get_theme_file_uri() ?>/img/book-cover-small.png" alt="">
            </div>
            <div class="col-12 col-lg-9">
                <h3 class="mb-5">Bezpłatny rozdział</h3>

                <p class="d-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, officiis odit.
                    Dolorem voluptate
                    tempore magnam nobis dignissimos facere ducimus? Eius, porro atque.</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center free-chapter--form">
            <div class="col-12 p-0">
                <?php echo do_shortcode( '[contact-form-7 id="659" title="Bezpłatny rozdział"]')?>
                <label for="checkbok-2" class="checkbox checkbox-circular has-label">
                    <!-- <div>
                        <input type="checkbox" name="checkbok-2" id="checkbok-2" />
                        <span class="check-icon"></span>
                    </div> -->

                </label>
            </div>
        </div>
    </div>
</section>

<script>
window.addEventListener('load', function() {
    new Glider(document.querySelector('.glider'), {
        slidesToShow: 1,
        slidesToScroll: 3,
        draggable: false,
        scrollLock: true,
        dots: false,
        arrows: {
            prev: '.testimonial-slide-prev',
            next: '.testimonial-slide-next'
        },
        responsive: [{
            // screens greater than >= 775px
            breakpoint: 775,
            settings: {
                // Set to `auto` and provide item width to adjust to viewport
                slidesToShow: 1,
                slidesToScroll: 3,

            }
        }, {
            // screens greater than >= 1024px
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,

            }
        }]
    });


    document.querySelector('.glider').addEventListener('glider-slide-visible', function(event) {
        var glider = Glider(this);
        const indexWrapper = document.querySelector('.testimonial--index');
        const length = glider.slides.length;
        indexWrapper.innerHTML = `${glider.slide + 1} -  ${glider.slide + 3}  / ${ length  }`

    });


    const index = document.querySelector('.testimonial--index');
    index.innerHTML = ``;

    fetch('<?php echo get_home_url() ?>/wp-json/wp/v2/opinie').then(response => response.json()).then(
        data => {
            index.innerHTML = `1 - 3 / ${data.length}`;
        }


    )


})
</script>

<?php get_footer() ?>