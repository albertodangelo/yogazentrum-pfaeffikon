<?php get_header(); ?>

	<article id="single-post-container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">

			<?php remove_filter( 'the_content', 'wpautop' );
$br = false;
add_filter( 'the_content', function( $content ) use ( $br ) { 
    return wpautop( $content, $br ); 
}, 10 );
			
			// if(get_the_ID() == 30 ) { remove_filter('the_content', 'wpautop'); } ?>
			

			<?php // include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php //edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
		
		<?php // comments_template(); ?>

		<?php endwhile; endif; ?>
	</article>				

<?php  get_footer(); ?>


<?php // get_sidebar(); ?>

