<?php
/**
 * The main template file.
 */

get_header(); ?>

<section role="main">
	<div class="wrapper">	
		<article>
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php else : ?>
					<h1>Nothing Found</h1>
					<p>Apologies, but no results were found for the requested archive</p>
				<?php endif; ?>
		</article>
	</div><?php //.wrapper ?>
</section>
<?php get_footer(); ?>