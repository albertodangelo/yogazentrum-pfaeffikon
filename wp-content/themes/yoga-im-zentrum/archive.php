<?php get_header(); ?>

		<?php if (have_posts()) : ?>

 			<?php // $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<!-- <h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2> -->

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?> 
				<!-- <h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2> -->

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<!-- <h2>Archive for <?php the_time('F jS, Y'); ?></h2> -->

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<!-- <h2>Archive for <?php the_time('F, Y'); ?></h2> -->

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<!-- <h2>Archive for <?php the_time('Y'); ?></h2> -->

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<!-- <h2>Author Archive</h2> -->

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<!-- <h2>Blog Archives</h2> -->
			
			<?php } ?>

			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

			<?php while (have_posts()) : the_post(); ?>
			
				<div <?php post_class() ?>>
					
					<div class="highlight-date"><p><?php echo get_post_meta($post->ID, "Datum", true); ?></p></div>
				
					<h2 id="post-<?php the_ID(); ?>"><!--<a href="<?php //the_permalink() ?>">--><?php the_title(); ?><!--</a>--></h2>
				
					<?php // include (TEMPLATEPATH . '/inc/meta.php' ); ?>

					<div class="entry">
						<?php the_content(); ?>
					</div>
	
				</div>
				<div class="spacer" style="height: 30px;"></div>
			<?php endwhile; ?>

			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>

 <?php // get_sidebar(); ?> 

<?php get_footer(); ?>