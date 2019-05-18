
<section id="<?php the_sub_field('section_id'); ?>" class="section section_theme_<?php the_sub_field('section_theme'); ?>">
  <div class="uk-container">

    <div class="uk-child-width-1-2@m uk-child-width-1-1 uk-flex uk-flex-middle" uk-grid>



<div class="">

  <?php

  // check if the flexible content field has rows of data
  if (have_rows('block')):

       // loop through the rows of data
      while (have_rows('block')) : the_row();

      if (get_row_layout() == 'contact_info'): ?>


  <h3 class="section__title"> <?php the_sub_field('block_title'); ?> </h3>
  <hr class="hr_type_section ">
  <?php

// check if the repeater field has rows of data
if (have_rows('list')):?>
<ul class="uk-list uk-list-divider">

<?php
    // loop through the rows of data
    while (have_rows('list')) : the_row(); ?>

        <li> <span class="icon_type_contactform"><?php the_sub_field('icon'); ?></span> <span class="uk-margin-left"><?php the_sub_field('title'); ?></span> </li>

  <?php  endwhile; ?>

  <?php if (get_sub_field('show_default_phone')): ?>

    <li><span class="icon_type_contactform"><i class="fas fa-headphones"></i></span> <span class="uk-margin-left">
      <?php if( get_field('phone_display') ): ?>
        <?php the_field('phone_display') ?>
        <?php else: ?>
          <?php the_field('phone_display', 'option'); ?>
      <?php endif; ?>
    </span> </li>
  <?php endif; ?>

  <?php if (get_sub_field('show_default_address')): ?>
    <li><span class="icon_type_contactform">
      <i class="fas fa-map-marker-alt"></i></span> <span class="uk-margin-left">
        <?php if( get_field('city') ): ?>
          <?php the_field('city') ?> , Florida , USA
          <?php else: ?>
            <?php the_field('address', 'option'); ?>
        <?php endif; ?>
      </span> </li>
    <?php endif; ?>

  <?php if (get_sub_field('show_default_email')): ?>
    <li><span class="icon_type_contactform"><i class="fas fa-envelope"></i></span> <span class="uk-margin-left"> <?php the_field('email','option'); ?> </span> </li>

<?php endif; ?>
</ul>
  <?php else :?>


<?php
    // no rows found

endif;

?>


      <?php  elseif (get_row_layout() == 'social_media'):   ?>

        <h3 class="section__title"> <?php the_sub_field('block_title'); ?> </h3>
        <hr class="hr_type_section">
        <ul class="uk-iconnav">
          <?php if (get_sub_field('show_facebook')): ?>

          <li>
             <a class="icon_type_social" style="color: #3b5998 !important;"> href="<?php the_field('facebook', 'option'); ?>" target="_blank">
              <i class="fab fa-facebook-square"></i>
              </a>
             </li>
        <?php endif; ?>
        <?php if (get_sub_field('show_youtube')): ?>

        <li>
           <a class="icon_type_social" style="color: #ff0000 !important;" href="<?php the_field('youtube', 'option'); ?>" target="_blank">
            <i class="fab fa-youtube"></i>
            </a>
           </li>
      <?php endif; ?>

    <?php if (get_sub_field('show_twitter')): ?>

    <li>
       <a class="icon_type_social" style="color: #259dec !important;" href="<?php the_field('twitter', 'option'); ?>" target="_blank">
        <i class="fab fa-twitter-square"></i>
        </a>
       </li>
  <?php endif; ?>
  <?php if (get_sub_field('show_google')): ?>

  <li>
     <a class="icon_type_social" style="color: #f4b703 !important;" href="<?php the_field('google', 'option'); ?>" target="_blank">
      <i class="fab fa-google"></i>
      </a>
     </li>
<?php endif; ?>
          </ul>



        <?php


        // check if the repeater field has rows of data
        if (have_rows('social')):?>
        <ul class="uk-iconnav">

        <?php

             // loop through the rows of data
            while (have_rows('social')) : the_row();?>

              <li> <a class="icon_type_social" href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('icon'); ?> </a> </li>

<?php
            endwhile;
?>            </ul>
<?php
        else :

            // no rows found

        endif;

        ?>



          <?php
endif;

endwhile;

else :

// no layouts found

endif;

?>


</div>


<div class="map">
<?php the_sub_field('map_iframe'); ?>
</div>
    </div>

  </div>
</section>
