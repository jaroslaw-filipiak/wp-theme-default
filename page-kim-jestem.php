<?php get_header() ?>

<?php get_template_part('partials/page-title') ?>

<section data-aos="fade-up">
    <div class="container mt-5 pt-3 pb-5 ">
        <div class="row d-flex flex-column-reverse flex-lg-row justify-content-between">
            <div class="col-12 col-lg-6 col-xl-7 pe-5">
                <?php the_content() ?>
            </div>
            <div class="col-12 col-lg-6 col-xl-5 d-flex justify-content-end ">
                <div> <img class="img-fluid mb-3" src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></div>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>