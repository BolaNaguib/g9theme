
<section id="<?php the_sub_field('section_id'); ?>" class="section section_theme_<?php the_sub_field('section_theme'); ?>">
  <div class="uk-container">
    <div class="uk-text-center">
      <h3 class="section__title"> <?php the_sub_field('section_title'); ?> </h3>
      <hr class="hr_type_section uk-display-inline-block <?php if( get_sub_field('section_theme') !== 'sunflower' ): ?> hr_theme_sunflower <?php endif; ?> " >
      </div>
    <div class="uk-child-width-1-3@m uk-child-width-1-1" uk-grid>
      <?php

      // check if the repeater field has rows of data
      if( have_rows('quote') ):

       	// loop through the rows of data
          while ( have_rows('quote') ) : the_row(); ?>
      <div class="uk-text-center">
        <blockquote cite="#">
          <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
          <p class="uk-margin-small-bottom"><span uk-icon="icon: quote-right;"></span><?php the_sub_field('quote_caption'); ?> <span uk-icon="icon: quote-right;"></span></p>
          <footer><?php the_sub_field('quote_author'); ?>, <?php the_field('city'); ?>&nbsp;&nbsp;<cite><a href="<?php the_sub_field('quote_source_url'); ?>"><?php the_sub_field('quote_source_title'); ?></a></cite></footer>
        </blockquote>
      </div>

          <?php endwhile;

      else :

          // no rows found

      endif;

      ?>
    </div>
  </div>
</section>
