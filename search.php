<?php
/**
 * The template for displaying Search Results pages.
 *
 */
get_header(); ?>

<section role="main">
	<div class="wrapper">	
			<?php if ( have_posts() ) : ?>
			<h1><?php printf( __( 'Search Results for: "%s"' ), get_search_query() ); ?></h1>
			<?php while ( have_posts() ) : the_post(); ?>
				<article>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
					<p class="date">posted on the <?php the_time('jS F, Y') ?></p>
					<?php $teaser = get_the_content(); ?>
					<p><?php echo WordLimiter($teaser, 30) ?></p>
					<p><a href="<?php the_permalink(); ?>">Read more</a></p>
				</article>
			<?php endwhile; ?>
			<?php else : ?>
				<article>
					<h1><?php _e( 'Nothing Found'); ?></h1>
					<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
					<form method="get" id="searchform" class="main_search2" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input type="text" name="s" id="s" placeholder="Search the site" />
						<input type="submit" class="submit" name="submit" id="searchsubmit" value="Search" title="search" />
					</form>
				</article>
			<?php endif; ?>
	</div><?php //.wrapper ?>
</section>

<?php get_footer(); ?>