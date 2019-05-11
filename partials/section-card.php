<section id="<?php the_sub_field('section_id'); ?>" class="section section_theme_<?php the_sub_field('card_theme'); ?>">
  <div class="uk-container ">
    <div class=" uk-flex uk-flex-middle" uk-grid>

      <div class="uk-width-1-1 uk-width-2-3@m">
        <h3 class="section__title"> <?php the_sub_field('card_title'); ?> , <?php the_field('city'); ?> </h3>
        <hr class="hr_type_section <?php if( get_sub_field('card_theme') !== 'sunflower' ): ?> hr_theme_sunflower <?php endif; ?> ">
        <p> <?php the_sub_field('card_caption'); ?></p>
      </div>

      <div class="uk-width-1-1 uk-width-1-3@m uk-flex-last <?php if( get_sub_field('card_direction')): ?> uk-flex-first@m <?php endif; ?>">
        <div class="card_type_media">
          <?php

          $image = get_sub_field('card_media');
          $alt = $image['alt'];
          if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="100%">
        <?php endif; ?>

        </div>

      </div>

    </div>
  </div>
</section>
