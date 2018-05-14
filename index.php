<?php
/*
Template Name: Home Template
*/
?>

<?php get_header(); ?>

<header class="superhero">
	<?php get_template_part( 'partials/superhero'); ?>
</header>

<section class="about-us-section">
	<?php get_template_part( 'partials/about-us-section'); ?>
</section>

<section class="instagram-carousel">
	<?php get_template_part( 'partials/instagram-feed'); ?>
</section>

<section class="quote-section">
	<?php get_template_part( 'partials/quote-carousel'); ?>
</section>

<section class="artists-section">
	<?php get_template_part( 'partials/artists-section'); ?>
</section>

<section class="tattoo-aftercare-section">
	<?php get_template_part( 'partials/aftercare-section'); ?>
</section>

<section class="contact-us-section">
	<?php get_template_part( 'partials/contact-us-section'); ?>
</section>

<footer class="site-footer">
	<?php get_template_part( 'partials/footer-section'); ?>
</footer>

<?php get_footer(); ?>
