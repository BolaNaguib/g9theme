<section id="<?php the_sub_field('section_id'); ?>" class="section section_theme_<?php the_sub_field('section_theme'); ?>">
  <div class="uk-container">
    <?php
    $sectionTitle = get_sub_field('section_title');

    if( !empty($sectionTitle) ):?>
      <div class="uk-text-center">
        <h3 class="section__title"> <?php the_sub_field('section_title'); ?> </h3>
        <hr class="hr_type_section uk-display-inline-block <?php if( get_sub_field('section_theme') !== 'sunflower' ): ?> hr_theme_sunflower <?php endif; ?> " >
        </div>
    <?php endif; ?>

    <?php the_sub_field('content_wysiwyg') ?>
  </div>
</section>
