<?php get_header(); ?>

<div id="slideout">
  <div class="searchBTN"></div>
  <div id="slideout_inner">
    <?php get_search_form(); ?>
  </div>
</div>

<section id="searchResultsBody" class="col-lg-8 col-md-10 col-sm-10 col-xs-10">

	<?php if (have_posts()) : ?>

		<h2 class="searchResultsH2">Search Results</h2>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><?php the_title(); ?></h2>

				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<div class="entry">
					<?php the_excerpt(); ?>
				</div>

			</div>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>

</section>

<?php get_sidebar(); ?>

<?php get_footer('search'); ?>