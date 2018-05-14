<ul class="quote-carousel" data-orbit aria-label='Shop Testimonials'>
  <?php
    $args = array(
      'post_type' => 'quote',
      'order'=>'DESC'
    );
    $the_query = new WP_Query( $args );
  ?>

  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <li class="quote" data-orbit-slide="<?php the_field('quotee_name'); ?>">
      <div class="quote-content"><?php the_field('quote_content'); ?></div>
      <div class="quotee">
        <p class="quotee-name"><?php the_field('quotee_name'); ?></p>
        <p class="quotee-from">from</p>
        <p class="quotee-source"><?php the_field('quotee_source'); ?></p>
      </div>
    </li>

    <?php endwhile; else: ?>
    <p class='warning-text'>There are no Quotes/Testimonials to show or something went wrong. Please try again later.</p>
  <?php endif; ?>
</ul>
