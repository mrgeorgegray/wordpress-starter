<?php
/* 
 * This is the template that displays all pages by default.
*/
get_header(); ?>

<section role="main">
	<div class="wrapper">	
		<article>
			<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</article>
	</div><?php //.wrapper ?>
</section>

<?php get_footer(); ?>