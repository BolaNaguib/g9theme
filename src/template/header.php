<!DOCTYPE html>
<html>

<head>
  <title> <?php the_title(); ?> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- UIkit CSS -->
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="canonical" href="<?php the_permalink(); ?>"/>
  <meta name="key" content="" />
  <meta name="title" content=" <?php the_field('meta_title'); ?> " />
  <meta name="keywords" content=" <?php the_field('meta_keywords'); ?> " />
  <meta name="description" content=" <?php the_field('meta_description'); ?> " />

  <?php wp_head(); ?>
  <?php the_field('header_js_general', 'option'); ?>
  <!-- Global site tag (gtag.js) - Google Ads: 803502113 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-803502113"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-803502113'); </script>
<script> gtag('config', 'AW-803502113/dWF3CJ-J5oQBEKHwkf8C', { 'phone_conversion_number': '(813) 344-1766' }); </script>
  <?php the_field('header_js'); ?>
</head>

<body>



  <div class="nav_theme_midnight" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <div class="" style="background-color:#000;">
      <div class="uk-container">
        <div class="uk-text-left@m uk-text-center">
          <span> <a class="top_contact_phone" href="tel:<?php if (get_field('phone_call')): ?>
              <?php the_field('phone_call') ?>
              <?php else: ?>
                <?php the_field('phone', 'option'); ?>
            <?php endif; ?>">
            <i class="fa fa-phone"></i>
    <?php if (get_field('phone_display')): ?>
      <?php the_field('phone_display') ?>
      <?php else: ?>
        <?php the_field('phone_display', 'option'); ?>
    <?php endif; ?></a> </span>
    <span  class="top_contact_mail"  ><i class="fas fa-envelope"></i>
<?php if (get_field('email')): ?>
<?php the_field('email') ?>
<?php else: ?>
  <?php the_field('email', 'option'); ?>
<?php endif; ?></span>
        </div>
      </div>
    </div>
    <div class="uk-container">

      <nav class="" uk-navbar style="position: relative; z-index: 980;">

        <div class="uk-navbar-left">
          <?php

          $image = get_field('logo', 'option');
          $alt = $image['alt'];
          if (!empty($image)): ?>

          <a href="/"> <img style="max-height: 60px;" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"> </a>
        <?php endif; ?>


        </div>
        <?php if (get_field('lpmenu')): ?>
          <?php get_template_part('partials/navbar', 'lpmenu'); ?>
	<?php else : ?>
    <?php get_template_part('partials/navbar', 'menu'); ?>

<?php endif; ?>




      </nav>
    </div>

  </div>
