<section class="section section_theme_<?php the_sub_field('card_theme'); ?>">
  <div class="uk-container ">
    <div class=" uk-flex uk-flex-middle" uk-grid>

      <div class="uk-width-1-1 uk-width-2-3@m">
        <h3 class="section__title"> <?php the_sub_field('card_title'); ?> , <?php the_field('city'); ?> </h3>
        <hr class="hr_type_section <?php if( get_sub_field('card_theme') !== 'sunflower' ): ?> hr_theme_sunflower <?php endif; ?> ">
        <p> <?php the_sub_field('card_caption'); ?></p>
      </div>

      <div class="uk-width-1-1 uk-width-1-3@m <?php if( get_sub_field('card_direction')): ?> uk-flex-first <?php endif; ?>">
        <div class="card_type_media">
          <img src="<?php the_sub_field('card_media'); ?>" alt="<?php the_title(); ?>" width="100%">

        </div>

      </div>

    </div>
  </div>
</section>
