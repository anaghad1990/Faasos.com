<?php
/**
 * (c) www.king-theme.com
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $devn;

get_header();

?>

	<?php $devn->breadcrumb(); ?>

	<div id="primary" class="site-content container-content content ">
		<div id="content" class="row row-content container">
			<div class="col-md-9">

				<?php if ( have_posts() ) : ?>
	
					<header>
						<h1 class="page-title">
							<?php if ( is_day() ) : ?>
								<?php printf( __( 'Daily Archives: %s', 'aaikadomain' ), '<span>' . get_the_date() . '</span>' ); ?>
							<?php elseif ( is_month() ) : ?>
								<?php printf( __( 'Monthly Archives: %s', 'aaikadomain' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'aaikadomain' ) ) . '</span>' ); ?>
							<?php elseif ( is_year() ) : ?>
								<?php printf( __( 'Yearly Archives: %s', 'aaikadomain' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'aaikadomain' ) ) . '</span>' ); ?>
							<?php else : ?>
								<?php _e( 'Blog Archives', 'aaikadomain' ); ?>
							<?php endif; ?>
						</h1>
					</header>
	
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
	
						<?php
							
							require 'content.php';   
							
						?>
	
					<?php endwhile; ?>
	
					<?php devn::pagination(); ?>
	
				<?php else : ?>
	
					<article id="post-0" class="post no-results not-found">
						<header class="entry-header">
							<h1 class="entry-title"><?php _e( 'Nothing Found', 'aaikadomain' ); ?></h1>
						</header><!-- .entry-header -->
	
						<div class="entry-content">
							<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'aaikadomain' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-0 -->
	
				<?php endif; ?>
				
			</div>
			<div class="col-md-3">
				<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
					<div id="sidebar" class="widget-area devn-sidebar">
						<?php dynamic_sidebar( 'sidebar' ); ?>
					</div><!-- #secondary -->
				<?php endif; ?>
			</div>
		</div>
	</div>
				
<?php get_footer(); ?>					
