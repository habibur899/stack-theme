<?php
/*
 * Template Name: Home
 */
?>
<?php get_header() ?>

    <!-- Hero Area Start -->
    <div id="hero-area" class="hero-area-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="contents text-center">
                        <h2 class="head-title wow fadeInUp"><?php echo esc_html__( get_theme_mod( 'banner_heading_text' ), 'stack' ) ?></h2>
                        <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                            <a href="<?php echo esc_url( get_theme_mod( 'hero_button_url' ) ) ?>"
                               class="hero-button-text btn btn-common"><?php echo esc_html__( get_theme_mod( 'hero_button_text' ), 'stack' ) ?></a>
                        </div>
                    </div>
                    <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                        <img class="img-fluid" src="<?php echo esc_url( get_theme_mod( 'hero_image_url' ) ) ?>"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Feature Section Start -->
<?php
if ( get_theme_mod( 'about_show_hide', 'on' ) == true ) {
	?>
    <div id="feature">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="text-wrapper">
                        <div>
                            <h2 class="title-hl wow fadeInLeft"
                                data-wow-delay="0.3s"><?php echo esc_html__( get_theme_mod( 'about_heading' ), 'stack' ) ?></h2>
                            <p class="mb-4"><?php echo esc_html__( get_theme_mod( 'about_description' ), 'stack' ) ?></p>
                            <a href="<?php echo esc_url( get_theme_mod( 'about_button_url' ) ) ?>"
                               class="btn btn-common"><?php echo esc_html__( get_theme_mod( 'about_button_text' ), 'stack' ) ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 padding-none feature-bg">
                    <div class="feature-thumb">

						<?php $about_features = get_theme_mod( 'about_features' );
						if ( $about_features ) {
							foreach ( $about_features as $about_feature ) {
								?>
                                <div class="feature-item wow fadeInDown" data-wow-duration="1000ms"
                                     data-wow-delay="500ms">
                                    <div class="icon">
                                        <i class="<?php echo esc_attr( $about_feature['icon_class'] ) ?>"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h3><?php echo esc_html__( $about_feature['feature_heading'], 'stack' ) ?></h3>
                                        <p><?php echo esc_html__( $about_feature['description'], 'stack' ) ?></p>
                                    </div>
                                </div>
							<?php }
						} ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Section End -->
<?php } ?>
    <!-- Services Section Start -->
<?php if ( get_theme_mod( 'service_show_hide', 'on' ) == true ) { ?>
    <section id="services" class="section-padding bg-gray">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown"
                    data-wow-delay="0.3s"><?php echo esc_html__( get_theme_mod( 'service_heading' ), 'stack' ) ?></h2>
                <p><?php echo esc_html__( get_theme_mod( 'service_sub_heading' ), 'stack' ) ?></p>
            </div>
            <div class="row">
				<?php $service_lists = get_theme_mod( 'all_service' );
				if ( $service_lists ) {
					foreach ( $service_lists as $service_list ) {
						?>
                        <div class="col-md-6 <?php echo esc_attr( get_theme_mod( 'service_column' ) ) ?> col-xs-12">
                            <div class="<?php echo esc_attr( get_theme_mod( 'service_align' ) ) ?> services-item wow fadeInRight"
                                 data-wow-delay="0.3s">
                                <div class="icon">
                                    <i class="<?php echo esc_attr( $service_list['icon_class'] ) ?>"></i>
                                </div>
                                <div class="services-content">
                                    <h3>
                                        <a href="<?php esc_url( the_permalink() ) ?>"><?php echo esc_html__( $service_list['ser_heading'], 'stack' ) ?></a>
                                    </h3>
                                    <p><?php echo esc_html__( $service_list['description'], 'stack' ) ?></p>
                                </div>
                            </div>
                        </div>
						<?php
					}
				} ?>
            </div>
        </div>
    </section>
<?php } ?>
    <!-- Services Section End -->

    <!-- Start Video promo Section -->
<?php
if ( get_theme_mod( 'video_show_hide', 'on' ) == true ) {
	?>
    <section class="video-promo section-padding">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="video-promo-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <a href="<?php echo esc_url( get_theme_mod( 'video_link' ) ) ?>" class="video-popup"><i
                                    class="lni-film-play"></i></a>
                        <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms"
                            data-wow-delay="100ms"><?php echo esc_html__( get_theme_mod( 'video_heading' ), 'stack' ) ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
    <!-- End Video Promo Section -->

    <!-- Team Section Start -->
<?php if ( get_theme_mod( 'team_show_hide', 'on' ) == true ) { ?>
    <section id="team" class="section-padding text-center">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown"
                    data-wow-delay="0.3s"><?php echo esc_html__( get_theme_mod( 'team_heading' ), 'stack' ) ?></h2>
                <p><?php echo esc_html__( get_theme_mod( 'team_subheading' ), 'stack' ) ?></p>
            </div>
            <div class="row">

				<?php
				$teams = get_theme_mod( 'all_team' );
				if ( $teams ) {
					foreach ( $teams as $team ) {
						?>
                        <div class="col-sm-6 col-md-6 <?php echo esc_attr( get_theme_mod( 'team_column' ) ) ?>">
                            <!-- Team Item Starts -->
                            <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
                                <div class="team-img">
                                    <img class="img-fluid"
                                         src="<?php echo esc_url( $team['image'] ) ?>"
                                         alt="">
                                    <div class="team-overlay">
                                        <div class="overlay-social-icon text-center">
                                            <ul class="social-icons">
												<?php
												if ( $team['facebook_url'] ) {
													?>
                                                    <li><a href="<?php echo esc_url( $team['facebook_url'] ) ?>"><i
                                                                    class="lni-facebook-filled"
                                                                    aria-hidden="true"></i></a></li>
													<?php
												}
												?>

												<?php
												if ( $team['twitter_url'] ) {
													?>
                                                    <li><a href="<?php echo esc_url( $team['twitter_url'] ) ?>"><i
                                                                    class="lni-twitter-filled"
                                                                    aria-hidden="true"></i></a></li>
													<?php
												}
												?>

												<?php
												if ( $team['instagram_url'] ) {
													?>
                                                    <li><a href="<?php echo esc_url( $team['instagram_url'] ) ?>"><i
                                                                    class="lni-instagram-filled" aria-hidden="true"></i></a>
                                                    </li>
													<?php
												}
												?>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-text">
                                    <h3>
                                        <a href="<?php esc_url( the_permalink() ) ?>"><?php echo esc_html__( $team['name'], 'stack' ) ?></a>
                                    </h3>
                                    <p><?php echo esc_html__( $team['designation'], 'stack' ) ?></p>
                                </div>
                            </div>
                            <!-- Team Item Ends -->
                        </div>
					<?php }
				} ?>

            </div>
        </div>
    </section>
<?php } ?>
    <!-- Team Section End -->

    <!-- Counter Section Start -->
<?php
if ( get_theme_mod( 'counter_show_hide', 'on' ) == true ) {
	?>
    <section id="counter" class="section-padding">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="row">
                        <!-- Start counter -->
						<?php
						$counters = get_theme_mod( 'all_counter' );
						if ( $counters ) {
							foreach ( $counters as $counter ) {
								?>
                                <div class="<?php echo esc_attr( get_theme_mod( 'counter_column' ) ) ?> col-md-6 col-xs-12">
                                    <div class="counter-box wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="icon-o"><i
                                                    class="<?php echo esc_attr( $counter['icon_class'] ) ?>"></i></div>
                                        <div class="fact-count">
                                            <h3>
                                                <span class="counter"><?php echo esc_html__( $counter['counter_heading'], 'stack' ) ?></span>
                                            </h3>
                                            <p><?php echo esc_html__( $counter['sub_heading'], 'stack' ) ?></p>
                                        </div>
                                    </div>
                                </div>
								<?php
							}
						} ?>
                        <!-- End counter -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
    <!-- Counter Section End -->

    <!-- Pricing section Start -->
<?php
if ( get_theme_mod( 'price_show_hide', 'on' ) == true ) {
	?>
    <section id="pricing" class="section-padding bg-gray">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown"
                    data-wow-delay="0.3s"><?php echo esc_html__( get_theme_mod( 'price_title' ), 'stack' ) ?></h2>
                <p><?php echo esc_html__( get_theme_mod( 'price_sub_title' ), 'stack' ) ?></p>
            </div>
            <div class="row">
				<?php
				$prices = get_theme_mod( 'all_price_list' );
				if ( $prices ) {
					foreach ( $prices as $price ) {
						?>

                        <div class="<?php echo esc_attr( get_theme_mod( 'price_column' ) ) ?> col-md-6 col-xs-12 active">
                            <div class="table wow fadeInLeft"
                                 id="<?php if ( true == get_theme_mod( $price['price_active'], true ) ) {
								     echo esc_attr( 'active-tb' );
							     } ?>" data-wow-delay="1.2s">
                                <div class="title">
                                    <h3><?php echo esc_html__( $price['price_heading'], 'stack' ) ?></h3>
                                </div>
                                <div class="pricing-header">
                                    <p class="price-value"><?php echo esc_html__( $price['price_amount'], 'stack' ) ?>
                                        <span><?php echo esc_html__( $price['price_time'], 'stack' ) ?></span></p>
                                </div>
                                <ul class="description">
                                    <li><?php echo esc_html__( $price['price_feature_1'], 'stack' ) ?></li>
                                    <li><?php echo esc_html__( $price['price_feature_2'], 'stack' ) ?></li>
                                    <li><?php echo esc_html__( $price['price_feature_3'], 'stack' ) ?></li>
                                    <li><?php echo esc_html__( $price['price_feature_4'], 'stack' ) ?></li>
                                    <li><?php echo esc_html__( $price['price_feature_5'], 'stack' ) ?></li>
                                    <li><?php echo esc_html__( $price['price_feature_6'], 'stack' ) ?></li>
                                </ul>
                                <a href="<?php echo esc_url( $price['price_button_url'] ) ?>"
                                   class="btn btn-primary btn-common"><?php echo esc_html__( $price['price_button_text'], 'stack' ) ?></a>
                            </div>
                        </div>
					<?php }
				} ?>

            </div>
        </div>
    </section>
<?php } ?>
    <!-- Pricing Table Section End -->
<?php if ( get_theme_mod( 'skill_show_hide', 'on' ) == true ) { ?>
    <div class="skill-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
                    <img class="img-fluid" src="<?php echo esc_url( get_theme_mod( 'skill_image' ) ) ?>"
                         alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12 info wow fadeInRight" data-wow-delay="0.3s">
                    <div class="site-heading">
                        <h2 class="section-title">
                            <span><?php echo esc_html__( get_theme_mod( 'skill_heading' ), 'stack' ) ?></span></h2>
                        <p><?php echo esc_html__( get_theme_mod( 'skill_description' ), 'stack' ) ?></p>
                    </div>
                    <div class="skills-section">
                        <!-- Progress Bar Start -->
						<?php
						$skills = get_theme_mod( 'skill_lists' );
						if ( $skills ) {
							foreach ( $skills as $skill ) {
								?>
                                <div class="progress-box">
                                    <h5><?php echo esc_html__( $skill['skill_heading'], 'stack' ) ?><span
                                                class="pull-right"><?php echo esc_html__( $skill['number'], 'stack' ) ?>%</span>
                                    </h5>
                                    <div class="progress" style="opacity: 1; left: 0px;">
                                        <div class="progress-bar" role="progressbar" data-width="87"
                                             style="width: <?php echo esc_attr( $skill['number'] ) ?>%;"></div>
                                    </div>
                                </div>
							<?php }
						} ?>
                        <!-- End Progressbar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

    <!-- Portfolio Section -->
<?php if ( get_theme_mod( 'work_show_hide', 'on' ) == true ) { ?>
    <section id="portfolios" class="section-padding">
        <!-- Container Starts -->
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown"
                    data-wow-delay="0.3s"><?php echo esc_html__( get_theme_mod( 'work_heading' ), 'stack' ) ?></h2>
                <p><?php echo esc_html__( get_theme_mod( 'work_sub_heading' ), 'stack' ) ?></p>
            </div>

            <!-- Portfolio Recent Projects -->
            <div id="portfolio" class="row">
				<?php
				$works = get_theme_mod( 'all_works' );
				if ( $works ) {
					foreach ( $works as $work ) {
						?>
                        <div class="<?php echo esc_attr( get_theme_mod( 'work_column' ) ) ?> col-md-6 col-xs-12 mix development print">
                            <div class="portfolio-item">
                                <div class="shot-item">
                                    <img src="<?php echo esc_url( $work['small_image'] ) ?>"
                                         alt=""/>
                                    <div class="single-content">
                                        <div class="fancy-table">
                                            <div class="table-cell">
                                                <div class="zoom-icon">
                                                    <a class="lightbox"
                                                       href="<?php echo esc_url( $work['big_image'] ) ?>"><i
                                                                class="lni-eye item-icon"></i></a>
                                                </div>
                                                <a href="<?php echo esc_url( the_permalink() ) ?>"><?php echo esc_html__( $work['heading'], 'stack' ) ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					<?php }
				} ?>
            </div>
        </div>
        <!-- Container Ends -->
    </section>
<?php } ?>
    <!-- Portfolio Section Ends -->

    <!-- Testimonial Section Start -->
<?php if ( get_theme_mod( 'testimonial_show_hide', 'on' ) == true ) { ?>
    <section id="testimonial" class="testimonial section-padding">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">

						<?php
						$testimonials = get_theme_mod( 'all_testimonial' );
						if ( $testimonials ) {
							foreach ( $testimonials as $testimonial ) {
								?>
                                <div class="item">
                                    <div class="testimonial-item">
                                        <div class="img-thumb">
                                            <img src="<?php echo esc_url( $testimonial['image'] ) ?>"
                                                 alt="">
                                        </div>
                                        <div class="info">
                                            <h2>
                                                <a href="<?php echo esc_url( the_permalink() ) ?>"><?php echo esc_html__( $testimonial['name'], 'stack' ) ?></a>
                                            </h2>
                                            <h3>
                                                <a href="<?php echo esc_url( the_permalink() ) ?>"><?php echo esc_html__( $testimonial['designation'], 'stack' ) ?></a>
                                            </h3>
                                        </div>
                                        <div class="content">
                                            <p class="description"><?php echo esc_html__( $testimonial['content'], 'stack' ) ?></p>
                                        </div>
                                    </div>
                                </div>
							<?php }
						} ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
    <!-- Testimonial Section End -->

    <!-- Blog Section -->
<?php if ( get_theme_mod( 'blog_show_hide', 'on' ) == true ) { ?>
    <section id="blog" class="section-padding">
        <!-- Container Starts -->
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Latest blog</h2>
                <p>A desire to help and empower others between community contributors in technology <br> began to grow
                    in
                    2020.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="blog-item-img">
                            <a href="single-post.html">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/img1.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <h3>
                                <a href="single-post.html">Suspendisse dictum non velit</a>
                            </h3>
                            <p>
                                Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum
                                lacinia.
                                Integer varius ornare egestas.
                            </p>
                            <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
                        </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-item-img">
                            <a href="single-post.html">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/img2.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <h3>
                                <a href="single-post.html">Remarkably Did Increasing</a>
                            </h3>
                            <p>
                                Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum
                                lacinia.
                                Integer varius ornare egestas.
                            </p>
                            <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
                        </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper wow fadeInRight" data-wow-delay="0.3s">
                        <div class="blog-item-img">
                            <a href="single-post.html">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/img3.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <h3>
                                <a href="single-post.html">Changing the topic scope</a>
                            </h3>
                            <p>
                                Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum
                                lacinia.
                                Integer varius ornare egestas.
                            </p>
                            <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
                        </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>
            </div>
        </div>
    </section>
<?php } ?>
    <!-- blog Section End -->

    <!-- Clients Section Start -->
    <div id="clients" class="section-padding bg-gray">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">NOTABLE CLIENTS</h2>
                <p>Over the last 20 years, we have helped and guided organisations to achieve outstanding results</p>
            </div>
            <div class="row text-align-">
                <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="client-item-wrapper">
                        <img class="img-fluid"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/clients/img1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="client-item-wrapper">
                        <img class="img-fluid"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/clients/img2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="client-item-wrapper">
                        <img class="img-fluid"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/clients/img3.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="1.2s">
                    <div class="client-item-wrapper">
                        <img class="img-fluid"
                             src="<?php echo get_template_directory_uri() ?>/assets/img/clients/img4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Clients Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="contact-block">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                               required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" id="email" class="form-control"
                                               name="email"
                                               required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Subject" id="msg_subject" class="form-control"
                                               required data-error="Please enter your subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message" rows="5"
                                              data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button">
                                        <button class="btn btn-common" id="form-submit" type="submit">Send Message
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="contact-right-area wow fadeIn">
                        <div class="contact-title">
                            <h1>We're a friendly bunch..</h1>
                            <p>We create projects for companies and startups with a passion for quality</p>
                        </div>
                        <h2>Contact Us</h2>
                        <div class="contact-right">
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <i class="lni-map-marker"></i>
                                </div>
                                <p>ADDRESS: 28 Green Tower, New York City, USA</p>
                            </div>
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <i class="lni-envelope"></i>
                                </div>
                                <p><a href="#">Email: contact@stuck.com</a></p>
                            </div>
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <i class="lni-phone-handset"></i>
                                </div>
                                <p><a href="#">Phone: +84 846 250 592</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

<?php get_footer() ?>