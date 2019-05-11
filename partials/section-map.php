
<section id="<?php the_sub_field('section_id'); ?>" class="section section_theme_<?php the_sub_field('section_theme'); ?>">
  <div class="uk-container">

    <div class="uk-child-width-1-2@m uk-child-width-1-1 uk-flex uk-flex-middle" uk-grid>



<div class="">

  <?php

  // check if the flexible content field has rows of data
  if( have_rows('block') ):

       // loop through the rows of data
      while ( have_rows('block') ) : the_row();

      if( get_row_layout() == 'contact_info' ): ?>


  <h3 class="section__title"> <?php the_sub_field('block_title'); ?> </h3>
  <hr class="hr_type_section ">
  <?php

// check if the repeater field has rows of data
if( have_rows('list') ):?>
<ul class="uk-list uk-list-divider">

<?php
 	// loop through the rows of data
    while ( have_rows('list') ) : the_row(); ?>

        <li> <span class="icon_type_contactform"><?php the_sub_field('icon'); ?></span> <span class="uk-margin-left"><?php the_sub_field('title'); ?></span> </li>

  <?php  endwhile; ?>
  <li><span class="icon_type_contactform"><i class="fas fa-headphones"></i></span> <span class="uk-margin-left">(352) 321-9765</span> </li>
</ul>
  <?php else :?>


<?php
    // no rows found

endif;

?>


      <?php  elseif( get_row_layout() == 'social_media' ):   ?>

        <h3 class="section__title"> <?php the_sub_field('block_title'); ?> </h3>
        <hr class="hr_type_section">
        <?php

        // check if the repeater field has rows of data
        if( have_rows('social') ):?>
        <ul class="uk-iconnav">

        <?php

         	// loop through the rows of data
            while ( have_rows('social') ) : the_row();?>

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


<div class="">
<?php the_sub_field('map_iframe'); ?>
</div>
    </div>

  </div>
</section>
