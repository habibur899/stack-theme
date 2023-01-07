<?php
get_header();
?>

    <section id="blog" class="section-padding">
        <div class="container">
            <div class="row">
				<?php if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						?>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
                            <!-- Blog Item Starts -->
                            <div class="blog-item-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                                <div class="blog-item-img">
                                    <a href="<?php esc_url( the_permalink() ) ?>">
										<?php the_post_thumbnail( 'medium'); ?>
                                    </a>
                                </div>
                                <div class="blog-item-text">
                                    <h3>
                                        <a href="<?php esc_url( the_permalink() ) ?>"><?php the_title() ?></a>
                                    </h3>
                                    <p><?php echo wp_trim_words( get_the_content(), 20, ' ' ) ?>
                                    </p>
                                    <a href="<?php esc_url( the_permalink() ) ?>"
                                       class="btn btn-common btn-rm"><?php echo esc_html__( 'Read More', 'stack' ) ?></a>
                                </div>
                            </div>
                            <!-- Blog Item Wrapper Ends-->
                        </div>
					<?php }
				} ?>
            </div>
        </div>
    </section>
<?php
get_footer();