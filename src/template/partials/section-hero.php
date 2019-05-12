

<section id="<?php the_sub_field('section_id'); ?>">
  <?php

  $image = get_sub_field('hero_background');
  $alt = $image['alt'];
  if( !empty($image) ): ?>

  <div class="hero hero_theme_background uk-text-center" style="background-image:url('<?php echo $image['url']; ?>');">
      <?php endif; ?>
    <h1 class="hero__title"> <?php the_sub_field('hero_title'); ?> </h1>
    <p > <?php the_sub_field('hero_caption'); ?></p>
    <?php if (get_sub_field('call_back_button')): ?>
      <a style="background-color: #ffc800;
    padding: 10px 20px;
    border-radius: 10px;
    color: #1c1f2a;
    box-shadow: 5px 5px 5px 3px #00000069;
    margin: 10px 0px;
    display: -webkit-inline-box;" href="tel:<?php the_field('phone_call') ?>">        <?php the_field('phone_display', 'option'); ?>
</a>
<?php else : ?>

<?php endif; ?>
  </div>
</section>
