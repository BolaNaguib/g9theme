
<section id="<?php the_sub_field('section_id'); ?>" class="section section_theme_<?php the_sub_field('section_theme'); ?>">
<div class="uk-container">
  <div class="uk-child-width-1-2@m uk-child-width-1-1 uk-flex uk-flex-middle" uk-grid>
    <div class="">
      <h3 class="section__title uk-text-right@m uk-text-center"> <?php the_sub_field('card_title'); ?> </h3>
      <div class=" uk-text-right@m uk-text-center">
        <hr class="hr_type_section <?php if( get_sub_field('section_theme') !== 'sunflower' ): ?> hr_theme_sunflower <?php endif; ?> ">

      </div>

      <p> <?php the_sub_field('card_caption'); ?> </p>    </div>
    <div class="">
        <div class="uk-card-default card_type_form">
          <h3 class="section__title"> <?php the_sub_field('form_title'); ?> </h3>
          <?php echo do_shortcode( ' '. get_sub_field('contact_form') .' ' );?>

        </div>
    </div>
  </div>
</div>
</section>
