<h3 class="section-title">
  <img src="<?php bloginfo( 'template_directory' ); ?>/img/svg/artists-icon--orange.svg" alt="Artists Us Icon">
  The Artists
</h3>

<ul class="artists">
  <?php
    $args = array(
      'post_type' => 'artist_profile',
      'order'=>'DESC'
    );
    $the_query = new WP_Query( $args );
  ?>

  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <li class="artist">
      <div class="artist--left">
          <?php if( get_field('artist_profile_photo') ): ?>
            <img src="<?php the_field( 'artist_profile_photo' ); ?>" alt="Photo of <?php the_field( 'artist_name' ); ?>">
          <?php endif; ?>
      </div>
      <div class="artist--right">
        <?php if( get_field('artist_name') ): ?>
          <h4><?php the_field( 'artist_name' ); ?></h4>

          <a href="mailto:<?php the_field( 'artist_email_address' ); ?>" title="Email <?php the_field( 'artist_name' ); ?>" class="email-link">
          <?php the_field( 'artist_email_address' ); ?>
          </a>

          <?php if( get_field('artist_rate') ): ?>
            <div class="artist-rate">
              <span class="rate-label">
                See My Rate
              </span>

              <span class="rate-amount">
                <?php the_field( 'artist_rate' ); ?>
              </span>
            </div>
          <?php endif; ?>

        <?php endif; ?>

        <?php if( get_field('artist_bio') ): ?>
          <p class="artist-bio"><?php the_field( 'artist_bio' ); ?></p>
        <?php endif; ?>

        <ul class="artist-links">
          <li>
            <?php echo do_shortcode('[envira-link id="' . get_field( 'artist_envira_gallery_id' ).'"]PORTFOLIO[/envira-link]'); ?>
          </li>

          <?php if( get_field('url_for_artist_facebook_page') ): ?>
            <li>
                <a href="<?php the_field( 'url_for_artist_facebook_page' ); ?>" target="_blank" title="Check Out My Facebook" class="facebook-link">
                  Facebook
                </a>
            </li>
          <?php endif; ?>

          <?php if( get_field('url_for_artist_instagram') ): ?>
            <li>
                <a href="<?php the_field( 'url_for_artist_instagram' ); ?>" target="_blank" title="Check Out My Instagram" class="instagram-link">
                  Instagram
                </a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </li>

    <?php endwhile; else: ?>
    <p class='warning-text'>There are no events to show or something went wrong. Please try again later.</p>
  <?php endif; ?>
</ul>
