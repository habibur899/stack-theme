<?php
get_header();
?>
    <section class="page-header">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper text-center">
                        <h2><?php esc_html__( single_post_title(), 'stack' ) ?></h2>
                        <p><a href="<?php esc_url( site_url() ) ?>"><?php echo esc_html__( 'Home', 'stack' ) ?> </a>/
							<?php esc_html__( single_post_title(), 'stack' ) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-area">
        <div class="container">
            <div class="row">
				<?php the_content(); ?>
            </div>
        </div>
    </div>
<?php
get_footer();