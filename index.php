<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package swilder
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div id="category-featured" class="grid_7 grid_3">
		<?php $my_query = new WP_Query( 'category_name=featured&posts_per_page=1' );
		while ( $my_query->have_posts() ) : $my_query->the_post();
		$do_not_duplicate = $post->ID; ?>


	<?php	get_template_part( 'featuredContent', get_post_format() ); ?>
	 
				<!-- Do stuff... -->

<?php endwhile; ?>
		</div>

<div id="workContainer-left" class="grid_6 grid_3">
			<!-- Do other stuff... -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
			if ( $post->ID == $do_not_duplicate ) continue; ?>
			<!-- Do stuff... -->
			<?php	get_template_part( 'content', get_post_format() ); ?>
	
			
		<?php endwhile; endif; ?>

		<!-- Begin Loop -->
	</div>


</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
