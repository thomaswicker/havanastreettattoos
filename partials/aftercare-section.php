<h3 class="section-title">
  <img src="<?php bloginfo( 'template_directory' ); ?>/img/svg/aftercare-icon--orange.svg" alt="Tattoo Aftercare Icon">
  Tattoo Aftercare Tips
</h3>

<ul class="tattoo-aftercare-list">
  <?php
    $args = array(
      'post_type' => 'aftercare_tips',
      'order'=>'DESC'
    );
    $the_query = new WP_Query( $args );
  ?>

  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <li class="tattoo-aftercare--list-item">
      <div class="left-section">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"/></svg>
      </div>

      <div class="right-section">
        <?php the_field('aftercare_content'); ?>
      </div>
    </li>

    <?php endwhile; else: ?>
    <p class='warning-text'>There are no Aftercare Tips to show or something went wrong. Please try again later.</p>
  <?php endif; ?>
</ul>
