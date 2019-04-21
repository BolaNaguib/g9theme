<?php /* Template Name: Landing Page Template */ ?>
<!-- START header -->
<?php get_header(); ?>



<?php  ?>

<?php

// check if the flexible content field has rows of data
if( have_rows('landing_page_template') ):

     // loop through the rows of data
    while ( have_rows('landing_page_template') ) : the_row();

        if( get_row_layout() == 'card' ):
          get_template_part( 'partials/section', 'card' );

        elseif( get_row_layout() == 'cta' ):
          get_template_part( 'partials/section', 'cta' );

        elseif( get_row_layout() == 'quote' ):
          get_template_part( 'partials/section', 'quote' );

        elseif( get_row_layout() == 'map' ):
          get_template_part( 'partials/section', 'map' );

        elseif( get_row_layout() == 'services' ):
          get_template_part( 'partials/section', 'service' );

        elseif( get_row_layout() == 'contact_section' ):
          get_template_part( 'partials/section', 'contactform' );

        elseif( get_row_layout() == 'reviews' ):
          get_template_part( 'partials/section', 'reviews' );

          elseif( get_row_layout() == 'value_proposations' ):
            get_template_part( 'partials/section', 'valueproposations' );

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>




















<!--
<section class="section section_theme_midnight">
  <div class="uk-container">
    <h3>CITIES WE SERVE</h3>
    <hr>
    <div class="uk-child-width-1-4" uk-grid>

      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Orlando </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Kissimmee </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> The Villages </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Clermont </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Apopka </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Winter Garden </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Winter Park </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Sanford </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Casselberry </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Oviedo </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lake Mary </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Altamonte Springs </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Longwood </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Windermere </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Leesburg </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Ocoee </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Pine Hills </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Groveland </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Eustis </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Maitland </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Wildwood </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Minneola </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Mount Dora </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Tavares </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lockhart </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Saint Cloud </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Winter Springs </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Coleman </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Umatilla </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Fruitland Park </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lady Lake </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Bushnell </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Mascotte </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Grand Island </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Webster </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Montverde </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Astatula </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Fairview Shores </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> CenterHill </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Oakland </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Gotha </a></li>
    </div>
    <h3>Counties WE SERVE</h3>
    <hr>
    <div class="uk-child-width-1-4" uk-grid>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Orange County, Florida </a></li>
  <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Seminole County, Florida </a></li>
    <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Osceola County, Florida </a></li>
    <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lake County, Florida </a></li>
  <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Volusia County, Florida </a></li>
  <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Pinellas County, Florida </a></li>
  </div>
</div>

</section> -->



<!--
<section class="section section_theme_white">
  <div class="uk-container">
    <h3>CITIES WE SERVE</h3>
    <hr>
    <div class="uk-child-width-1-4" uk-grid>

      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Orlando </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Kissimmee </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> The Villages </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Clermont </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Apopka </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Winter Garden </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Winter Park </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Sanford </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Casselberry </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Oviedo </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lake Mary </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Altamonte Springs </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Longwood </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Windermere </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Leesburg </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Ocoee </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Pine Hills </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Groveland </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Eustis </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Maitland </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Wildwood </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Minneola </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Mount Dora </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Tavares </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lockhart </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Saint Cloud </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Winter Springs </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Coleman </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Umatilla </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Fruitland Park </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lady Lake </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Bushnell </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Mascotte </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Grand Island </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Webster </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Montverde </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Astatula </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Fairview Shores </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> CenterHill </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Oakland </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Gotha </a></li>
    </div>
    <h3>Counties WE SERVE</h3>
    <hr>
    <div class="uk-child-width-1-4" uk-grid>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Orange County, Florida </a></li>
  <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Seminole County, Florida </a></li>
    <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Osceola County, Florida </a></li>
    <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lake County, Florida </a></li>
  <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Volusia County, Florida </a></li>
  <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Pinellas County, Florida </a></li>
  </div>
</div>

</section> -->

<!-- END header  -->
<?php get_footer(); ?>
