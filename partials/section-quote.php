
<section class="section section_theme_<?php the_sub_field('section_theme'); ?>">
  <div class="uk-container">

    <div class="uk-child-width-1-3" uk-grid>
      <?php

      // check if the repeater field has rows of data
      if( have_rows('quote') ):

       	// loop through the rows of data
          while ( have_rows('quote') ) : the_row(); ?>
      <div class="uk-text-center">
        <blockquote cite="#">
          <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
          <p class="uk-margin-small-bottom"><span uk-icon="icon: quote-right;"></span><?php the_sub_field('quote_caption'); ?> <span uk-icon="icon: quote-right;"></span></p>
          <footer><?php the_sub_field('quote_author'); ?><cite><a href="<?php the_sub_field('quote_source_url'); ?>"><?php the_sub_field('quote_source_title'); ?></a></cite></footer>
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
