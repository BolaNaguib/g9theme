

<section id="<?php the_sub_field('section_id'); ?>">
  <?php

  $image = get_sub_field('hero_background');
  $alt = $image['alt'];
  if( !empty($image) ): ?>

  <div class="hero hero_theme_background uk-text-center" style="background-image:url('<?php echo $image['url']; ?>');">
      <?php endif; ?>
    <h1 class="hero__title"> <?php the_sub_field('hero_title'); ?> </h1>
    <p > <?php the_sub_field('hero_caption'); ?></p>
  </div>
</section>
