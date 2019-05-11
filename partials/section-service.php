<section id="<?php the_sub_field('section_id'); ?>" class="section section_theme_<?php the_sub_field('section_theme'); ?>">
  <div class="uk-container">
    <div class="uk-child-width-1-6@m uk-child-width-1-1 " uk-grid>
      <?php
// check if the repeater field has rows of data
if( have_rows('service') ):
 	// loop through the rows of data
    while ( have_rows('service') ) : the_row();?>
      <div class="uk-text-center">
        <a href="<?php the_sub_field('url'); ?>" style="color:inherit !important;">
        <?php

        $image = get_sub_field('service_icon');
        $alt = $image['alt'];
        if( !empty($image) ): ?>
        <img class="icon" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
      <?php endif; ?>

        <h5>
          <?php the_sub_field('service_title'); ?>
        </h5>
        </a>
      </div>
      <?php
    endwhile;
else :
endif;?>
    </div>
  </div>
</section>
