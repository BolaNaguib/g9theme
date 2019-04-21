
<section class="section section_theme_<?php the_sub_field('section_theme'); ?>">
<div class="uk-container">
  <div class="uk-child-width-1-2 uk-flex uk-flex-middle" uk-grid>
    <div class="">
      <h3 class="section__title"> <?php the_sub_field('card_title'); ?> </h3>
      <hr class="hr_type_section <?php if( get_sub_field('section_theme') !== 'sunflower' ): ?> hr_theme_sunflower <?php endif; ?> ">
      <p> <?php the_sub_field('card_caption'); ?> </p>    </div>
    <div class="">
        <div class="uk-card-default card_type_form">
          <h3 class="section__title"> <?php the_sub_field('form_title'); ?> </h3>
          <?php the_sub_field('contact_form'); ?>
          <!-- <form class="" action="index.html" method="post">
            <div class="uk-margin">
              <label>Enter Your name</label>
              <input class="input" type="text" name="" value="">
            </div>
            <div class="uk-margin">
              <label>Your Phone Number</label>
              <input class="input" type="text" name="" value="">
            </div>
            <div class="uk-margin">
              <label>When Would You Like Us To Call You?</label>
              <input class="input" type="text" name="" value="">
            </div>
            <div class="uk-margin uk-text-right">
              <button class="button_type_form" type="submit" name="button"> Submit </button>
            </div>

          </form> -->
        </div>
    </div>
  </div>
</div>
</section>
