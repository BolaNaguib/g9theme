<section class="section section_theme_<?php the_sub_field('section_theme') ?>">
  <div class="uk-container">
    <div class="uk-child-width-1-4" uk-grid>
      <?php

      // check if the repeater field has rows of data
      if( have_rows('value_proposation') ):

        // loop through the rows of data
          while ( have_rows('value_proposation') ) : the_row();?>
      <div class="uk-text-center">
        <h1><?php the_sub_field('value_icon'); ?></h1>
        <h5><?php the_sub_field('value_title'); ?></h5>
      </div>
    <?php  endwhile;
      else :
      // no rows found
    endif; ?>



    </div>
  </div>
</section>
