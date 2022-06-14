<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package szymon-janiak
 */

get_header();
?>

<main id="primary" class="site-main container">

    <div class="row">
        <div class="col-12 col-lg-8 pe-lg-5">

            <?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() ); ?>


            <div class="d-none">

                <?php

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'szymon-janiak' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'szymon-janiak' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>
            </div>


            <?php  ?>

        </div>
        <div class="col-12 col-lg-4 ps-lg-3 d-none d-lg-block sidebar--wrapper">
            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
            <?php get_sidebar(); ?>
        </div>
    </div>


</main><!-- #main -->

<section class="recent-blog-posts">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="recent-posts--title">Polecane artykuły</h3>
            </div>
        </div>
        <div class="row recent-blog-posts--loop">
            <?php
				$query_args = array(
					'post_type' => 'media',
					'post_status' => 'publish',
					'order' => 'ASC',
					'orderby' => 'date',
					'posts_per_page' => '4',
					'post__not_in' => array( get_the_ID())
				);
				
				// The Query
				$the_query = new WP_Query( $query_args );
				
				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>

            <div class="recent-post col-12 col-sm-6 col-md-3">
                <div class="square recent-post--bg"
                    style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">
                </div>
                <div class="recent-post--date"><?php echo get_the_date() ?></div>
                <div class="recent-post--title">
                    <a href="<?php echo get_the_permalink() ?>">
                        <h4><?php echo get_the_title() ?>
                        </h4>
                    </a>

                </div>
            </div>


            <?php } ?>

            <?php
					
					wp_reset_postdata();
				} else {
					
				}

			?>

        </div>
    </div>
</section>

<?php
endwhile; // End of the loop.

get_footer();