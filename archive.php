<?php
/**
 * The template for displaying Archive pages.
 */

get_header(); ?>

<section role="main">
	<div class="wrapper">	
			<?php if ( have_posts() ) : ?>
				<?php /* If this is a category archive */ if (is_category()) { ?>
					<h1>Filtered by &#8216;<?php /*single_cat_title();*/$this_category = get_category($cat);
					echo $this_category->category_nicename;  ?>&#8217; Category</h1>
				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
					<h1>Posts tagged with &#8216;<?php single_tag_title(); ?>&#8217;</h1>
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
					<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					<h1>Archive for <?php the_time('F, Y'); ?></h1>
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
					<h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>
				<?php /* If this is an author archive */ } elseif (is_author()) { ?>
					<h1 class="pagetitle">Author Archives</h1>
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
					<h1 class="pagetitle">Archives</h1>
				<?php } ?>
				<?php while (have_posts()) : the_post(); ?>
					<article>
						<h1><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
						<p class="date">posted on the <?php the_time('jS F, Y') ?></p>
						<p>
							<?php 
							$teaser = get_the_content();
							$teaser = preg_replace("/<img[^>]+\>/i", "", $teaser);
							$teaser = strip_tags($teaser);										
							echo wp_trim_words( $teaser, $num_words = 28, $more = null );
							?>
						</p>
						<p><a href="<?php the_permalink(); ?>">Read more</a></p>
					</article>
			<?php endwhile; ?>
			
			<?php else : ?>
					<h1>No results</h1>
					<p>Sorry nothing was found for the requested archive.</p>
			<?php endif; ?>
		<?php get_sidebar(); ?>

	</div><?php //.wrapper ?>
</section>

<?php get_footer(); ?>