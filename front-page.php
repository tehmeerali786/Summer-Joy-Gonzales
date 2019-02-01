<?php
/**
 * The template for displaying front page
 * @package WordPress
 * @subpackage SummerJoyGonzales
 * @since 1.0
 * @version 0.1
 */

get_header(); ?>

<?php do_action( 'negocio_business_above_header_page' ); ?>

<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



			<section id="section-carousel">

			<div id="front-carousel" >


				<?php echo do_shortcode("[slide-anything id='133']"); ?>

			</div>

			</section>

														<section id="testimonials">
																<div class="indent clear">
																	<?php
																	$args = array(
																		'posts_per_page' => 3,
																		'orderby' => 'rand',
																		'category_name' => 'testimonials'
																	);

																	$query = new WP_Query( $args );
																	// The Loop
																	if ( $query->have_posts() ) {
																		echo '<ul class="testimonials">';
																		while ( $query->have_posts() ) {
																			$query->the_post();
																			echo '<li class="clear">';
																			echo '<figure class="testimonial-thumb">';
																			the_post_thumbnail('testimonial-tax');
																			echo '</figure>';
																			echo '<aside class="testimonial-text">';
																			echo '<h3 class="testimonial-name">' . get_the_title() . '</h3>';
																			echo '<div class="testimonial-excerpt">';
																			the_excerpt('');
																			echo '</div>';
																			echo '</aside>';
																			echo '</li>';
																		}
																		echo '</ul>';
																	}

																	/* Restore original Post Data */
																	wp_reset_postdata();
																	?>
																</div><!-- .indent -->
															</section><!-- #testimonials -->


				<section id="aboutof" >

														<div class="indent clear">
																				<?php
																					$query = new WP_Query( 'pagename=About Our Firm' );
																					// The Loop
																					if ( $query->have_posts() ) {
																						while ( $query->have_posts() ) {
																							$query->the_post();
																							echo '<h2 class="section-title">' . get_the_title() . '</h2>';
																							echo '<div class="entry-content">';
																							the_content();
																							echo '</div>';
																						}
																					}

																					/* Restore original Post Data */
																					wp_reset_postdata();
																					?>
															 </div><!-- .indent -->





				</section>

				<section id="ourwork" >

														<div class="indent clear">
																				<?php
																					$query = new WP_Query( 'pagename=Our Work' );
																					// The Loop
																					if ( $query->have_posts() ) {
																						while ( $query->have_posts() ) {
																							$query->the_post();
																							echo '<h2 class="section-title">' . get_the_title() . '</h2>';
																							echo '<div class="entry-content">';
																							the_content();
																							echo '</div>';
																						}
																					}

																					/* Restore original Post Data */
																					wp_reset_postdata();
																					?>
															 </div><!-- .indent -->





				</section>




		</main>
	</div>
</div>

<?php do_action( 'negocio_business_above_footer_page' ); ?>

<?php get_footer();
