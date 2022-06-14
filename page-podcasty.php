<?php get_header() ?>

<?php get_template_part('partials/page-title') ?>

<section>
    <div class="container pb-5 mt-5 pt-3">
        <div class="row">
            <div class="col-12 col-lg-6 d-flex align-items-start">
                <p><strong>Wolisz słuchać niż czytać?</strong> Posłuchaj mojego autorskiego podcastu o venture capital
                    na:</p>
            </div>
            <div
                class="col-12 col-lg-6 d-flex flex-wrap flex-lg-nowrap align-items-center align-items-md-start justify-content-center justify-content-lg-end gap-2 podcasts--providers-icons">

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
</section>

<section id="content" class="podcasts--wrapper">
    <div class="container">
        <div class="row">
            <div class="col podcasts--table-header d-none">
                <p>Czas trwania:</p>
            </div>
        </div>
        <div class="row">
            <?php echo do_shortcode('[template id=635]') ?>
        </div>
    </div>
</section>

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
                console.log(isPlaying)
                switchBTN.classList.toggle('sprite-anim')

            } else {
                audio.pause();
                e.target.dataset.play = 'false';
                console.log(isPlaying)
                switchBTN.classList.toggle('sprite-anim')
            }

        })

    })
})
</script>


<?php get_footer() ?>