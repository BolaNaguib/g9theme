

<section id="<?php the_sub_field('section_id'); ?>">
  <?php

  $image = get_sub_field('hero_background');
  $alt = $image['alt'];
  if( !empty($image) ): ?>

  <div class="hero hero_theme_background uk-text-center" style="background-image:url('<?php echo $image['url']; ?>');">
      <?php endif; ?>
      <div class="uk-container">

    <h1 class="hero__title"> <?php the_sub_field('hero_title'); ?> </h1>
    <p > <?php the_sub_field('hero_caption'); ?></p>
    <?php if (get_sub_field('call_back_button')): ?>
      <a style="    background-color: #1c1f2a;
    padding: 15px 30px;
    border-radius: 10px;
    color: #ffffff;
    box-shadow: 5px 5px 5px 3px #00000069;
    font-weight: bold;
    margin: 10px 0px;
    display: -webkit-inline-box;
    font-size: 24px;" href="tel:<?php if (get_field('phone_call')): ?>
        <?php the_field('phone_call') ?>
        <?php else: ?>
          <?php the_field('phone', 'option'); ?>
      <?php endif; ?>">    <?php if (get_field('phone_display')): ?>
        <?php the_field('phone_display') ?>
        <?php else: ?>
          <?php the_field('phone_display', 'option'); ?>
      <?php endif; ?>
</a>
</div>

<?php else : ?>

<?php endif; ?>
  </div>
</section>
