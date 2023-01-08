<?php
get_header();
?>

    <!-- Page header Start -->
    <section class="page-header">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper text-center">
                        <h2><?php esc_html( single_post_title() ) ?></h2>
                        <p><a href="<?php echo esc_url( site_url() ) ?>"><?php echo esc_html__( 'Home', 'stack' ) ?> </a>/
							<?php esc_html( single_post_title() ) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page header End -->

    <!-- Blog Section Start  -->
    <div id="blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="blog-post">
                        <div class="post-thumb">
							<?php the_post_thumbnail(); ?>
                        </div>
                        <div class="post-content">
                            <h3><?php the_title() ?></h3>
                            <p><?php the_content(); ?></p>
	                        <div class="stack-post-tags">
		                        <?php the_tags(__('Tags: ','stack'),' ',' ');?>
                            </div>
                        </div>

	                    <?php wp_link_pages( array(
		                    'before'           => '<div class="page-link-next-prev">',
		                    'after'            => '</div>',
		                    'next_or_number'   => 'next',
		                    'previouspagelink' =>
			                    __( 'Previous', 'stack' ),
		                    'nextpagelink'     => __( 'Next', 'stack' )
	                    ) ); ?>
                    </div>
	                <?php if ( comments_open() || get_comments_number() ) {
		                comments_template();
	                };
	                ?>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="widgets">
						<?php if ( is_active_sidebar( 'main-sidebar' ) ) {
							dynamic_sidebar( 'main-sidebar' );
						} ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End  -->

<?php
get_footer();