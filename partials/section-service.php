<section class="section section_theme_<?php the_sub_field('section_theme'); ?>">
  <div class="uk-container">
    <div class="uk-child-width-1-6 " uk-grid>
      <?php
// check if the repeater field has rows of data
if( have_rows('service') ):
 	// loop through the rows of data
    while ( have_rows('service') ) : the_row();?>
      <div class="uk-text-center">
        <img class="icon" src="<?php the_sub_field('service_icon'); ?>" alt="">
        <h5>
          <?php the_sub_field('service_title'); ?>
        </h5>
      </div>
      <?php
    endwhile;
else :
endif;?>
    </div>
  </div>
</section>
