<section id="<?php the_sub_field('section_id'); ?>" class="section section_theme_<?php the_sub_field('section_theme'); ?>">
  <div class="uk-container uk-text-center">
    <h3>
      <?php the_sub_field('after_title'); ?>&nbsp;
      <a href="tel:+<?php the_field('phone_call') ?>"><?php the_field('phone_display') ?>&nbsp;</a><?php the_sub_field('after_number'); ?>&nbsp;<?php the_field('city') ?> </h3>

  </div>
</section>
