<?php get_header(); ?>

<div id="slideout">
  <div class="searchBTN"></div>
  <div id="slideout_inner">
    <?php get_search_form(); ?>
  </div>
</div>

<section id="singlePostBody" class="col-lg-8 col-md-10 col-sm-10 col-xs-12">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h2><?php the_title(); ?></h2>
			
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</div>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>

</section>

<!-- BEGIN CONTACT MODAL BOX -->

<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="http://www.thomaswicker.com/btns/closeBTN_contactForm_up.png" alt=""></button>
        <h4 class="modal-title contactMeHeader" id="myModalLabel">Contact Me</h4>
      </div>
      <div class="modal-body" id="form">

        <form name="contact" action="http://www.thomaswicker.com/processForm.php" method="post" role="form">

          <fieldset>

            <p class="contactBlurb">Hit me up with the form below and include as many details as you can about your project — it will help me get back to you sooner.</p>

            <div class="form-group"> 
              <label id="formLabel" for="name">Name:</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name"  title="Please enter your name."/>
            </div>

            <div class="form-group">
              <label class="formLabel" for="phone"/>Phone:</label>
              <input name="phone" class="form-control required digits" type="tel" id="phone" size="30" value="" placeholder="Enter your phone #" title="Please enter a valid phone number."/>
            </div>

            <div class="form-group">
              <label id="formLabel" for="email"/>Email:</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" title="Please enter a valid email address."/>
            </div>

            <div class="form-group">
              <label class="formLabel" for="comments" id="comments">Comments:</label>
              <textarea class="form-control" name="comments" id="comments"></textarea>
            </div>

            <fieldset class="contactButtonContainer">
              <button type="submit" name="submit" class="submit btn btn-primary" >Send</button>
              <button type="reset" name="reset"  class="submit btn btn-default" >Reset</button>
            </fieldset>

          </fieldset>

        </form>
      </div>
    </div>
  </div>
</div>

<!--- END CONTACT MODAL BOX -->


<?php get_sidebar(); ?>

<?php get_footer('single'); ?>