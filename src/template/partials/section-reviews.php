

<section id="<?php the_sub_field('section_id'); ?>" class=" section section_theme_<?php the_sub_field('section_theme') ?>">
  <div class="uk-container">
    <div class="uk-text-center">
      <h3 class="section__title"> <?php the_sub_field('section_title'); ?> </h3>
      <hr class="hr_type_section uk-display-inline-block <?php if( get_sub_field('section_theme') !== 'sunflower' ): ?> hr_theme_sunflower <?php endif; ?> " >
      </div>
    <div class="uk-child-width-1-4@m uk-child-width-1-1" uk-grid>

      <?php

      // check if the repeater field has rows of data
      if( have_rows('review') ):

       	// loop through the rows of data
          while ( have_rows('review') ) : the_row();?>

          <div class="">
            <div class="uk-card-header">
          <div class="uk-grid-small uk-flex-middle" uk-grid>
              <div class="uk-width-auto">
                  <img class="uk-border-circle" width="60" height="60" src="<?php the_sub_field('review_image'); ?>">
              </div>
              <div class="uk-width-expand">
                  <h4 class=" uk-margin-remove-bottom"><?php the_sub_field('review_title'); ?></h4>
                  <p class="uk-text-meta uk-margin-remove-top star">
                    <?php if( get_sub_field('review_rating') == 'one' ): ?>
                    <i class="fas fa-star"></i>
                    <?php elseif( get_sub_field('review_rating') == 'two' ): ?>
                      <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <?php elseif( get_sub_field('review_rating') == 'three' ): ?>
                      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <?php elseif( get_sub_field('review_rating') == 'four' ): ?>
                      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <?php elseif( get_sub_field('review_rating') == 'five' ): ?>
                      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <?php endif; ?>
                  </p>
              </div>
          </div>
      </div>
          </div>

        <?php  endwhile;
          else :
          // no rows found
        endif; ?>







    </div>
  </div>
</section>
