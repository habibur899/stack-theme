<?php
get_header();
get_template_part( 'inc/breadcrumb-template' );
?>

    <section id="blog" class="section-padding">
        <div class="container">
            <div class="row">
				<?php if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						?>
                        <div <?php echo esc_attr( post_class( 'col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item' ) ) ?>>
                            <!-- Blog Item Starts -->
                            <div class="blog-item-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                                <div class="blog-item-img">
                                    <a href="<?php esc_url( the_permalink() ) ?>">
										<?php the_post_thumbnail( 'medium' ); ?>
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
            <div class="row">
                <div class="com-md-12 custom-pagenation">
					<?php echo get_the_posts_pagination( array(
						'prev_text'          => __( 'Previous', 'stack' ),
						'next_text'          => __( 'Next', 'stack' ),
						'screen_reader_text' => ' ',
						'mid_size'           => 4
					) ); ?>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();