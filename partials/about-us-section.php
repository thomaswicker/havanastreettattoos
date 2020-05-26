<div class="about-us--left">
  <h3 class="section-title">
    <img src="<?php bloginfo( 'template_directory' ); ?>/img/svg/tattoo-icon--orange.svg" alt="About Us Icon">
    <?php the_field('about_us_title'); ?>
  </h3>
  <p class="about-us--blurb">
    <?php the_field('about_us_blurb'); ?>
  </p>

  <p class="about-us--blurb-tagline">
    <?php the_field('about_us_blurb_tagline'); ?>
  </p>
</div>

<div class="about-us--right">
  <iframe width='100%' height='300'
  allowfullscreen src='https://tourmkr.com/t5F3KnLdVM'></iframe>

  <!-- <?php if( have_rows('about_us_photos') ): ?>
  	<ul class="about-us-photos" data-orbit aria-label='Shop Photos'>
    	<?php while( have_rows('about_us_photos') ): the_row();
    		// vars
    		$image = get_sub_field('about_us_photo_image');
    		?>

    		<li class="about-us-photo" data-orbit-slide="<?php echo $image; ?>">
    			<img class="about-us-photo-image" src="<?php echo $image; ?>" alt="<?php echo $image; ?>" />
    		</li>

    	<?php endwhile; ?>
  	</ul>
  <?php endif; ?> -->
</div>
