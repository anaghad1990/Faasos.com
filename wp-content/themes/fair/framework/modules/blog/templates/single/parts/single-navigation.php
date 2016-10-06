<?php if(fair_edge_options()->getOptionValue('blog_single_navigation') == 'yes'){ ?>
	<?php $navigation_blog_through_category = fair_edge_options()->getOptionValue('blog_navigation_through_same_category') ?>
	<div class="edgtf-container edgtf-container-bottom-navigation">
		<div class="edgtf-container-inner">
			<div class="edgtf-blog-single-navigation">
				<div class="edgtf-blog-single-navigation-inner">
					<?php if(get_previous_post() != ""){ ?>
						<div class="edgtf-blog-single-prev">
							<?php
							if($navigation_blog_through_category == 'yes'){
								previous_post_link('%link','<span class="edgtf-single-navigation-arrow arrow_left"></span><span class="edgtf-single-navigation-text">'. esc_html__('Prev', 'fair') .'</span>', true,'','category');
							} else {
								previous_post_link('%link','<span class="edgtf-single-navigation-arrow arrow_left"></span><span class="edgtf-single-navigation-text">'. esc_html__('Prev', 'fair') .'</span>');
							}
							?>
						</div> <!-- close div.blog_prev -->
					<?php } ?>
					<?php if(get_next_post() != ""){ ?>
						<div class="edgtf-blog-single-next">
							<?php
							if($navigation_blog_through_category == 'yes'){
								next_post_link('%link','<span class="edgtf-single-navigation-text">'. esc_html__('Next', 'fair') .'</span><span class="edgtf-single-navigation-arrow arrow_right"></span>', true,'','category');
							} else {
								next_post_link('%link','<span class="edgtf-single-navigation-text">'. esc_html__('Next', 'fair') .'</span><span class="edgtf-single-navigation-arrow arrow_right"></span>');
							}
							?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>