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
							<?php printf( __( 'Search Results for: %s', 'aaikadomain' ), '<span>' . get_search_query() . '</span>' ); ?>
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
					<br />
					<article id="post-0" class="post no-results not-found">
						<header>
							<h3 class="widget-title">
								<?php _e( 'Nothing Found', 'aaikadomain' ); ?>
							</h3>
						</header><!-- .entry-header -->
	
						<div class="entry-content">
							<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'aaikadomain' ); ?></p>
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
