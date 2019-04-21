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


        endif;

    endwhile;

else :

    // no layouts found

endif;

?>







<section class="section section_theme_white">
<div class="uk-container">
  <div class="uk-child-width-1-2 uk-flex uk-flex-middle" uk-grid>
    <div class="">
      <h3 class="section__title"> Title </h3>
      <hr class="hr_type_section hr_theme_sunflower">
      <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
        specimen book.</p>    </div>
    <div class="">
        <div class="uk-card-default card_type_form">
          <h3 class="section__title"> Fill The Form Below </h3>
          <form class="" action="index.html" method="post">
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

          </form>
        </div>
    </div>
  </div>
</div>
</section>






<section class="section section_theme_sunflower">
<div class="uk-container">
  <div class="uk-child-width-1-2 uk-flex uk-flex-middle" uk-grid>
    <div class="">
      <h3 class="section__title"> Title </h3>
      <hr class="hr_type_section">
      <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
        specimen book.</p>    </div>
    <div class="">
        <div class="uk-card-default card_type_form">
          <h3 class="section__title"> Fill The Form Below </h3>
          <form class="" action="index.html" method="post">
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

          </form>
        </div>
    </div>
  </div>
</div>
</section>
<section class="section section_theme_midnight">
<div class="uk-container">
  <div class="uk-child-width-1-2 uk-flex uk-flex-middle" uk-grid>
    <div class="">
      <h3 class="section__title"> Title </h3>
      <hr class="hr_type_section hr_theme_sunflower">
      <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
        specimen book.</p>    </div>
    <div class="">
        <div class="uk-card-default card_type_form">
          <h3 class="section__title"> Fill The Form Below </h3>
          <form class="" action="index.html" method="post">
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

          </form>
        </div>
    </div>
  </div>
</div>
</section>





<section class=" section section_theme_white">
  <div class="uk-container">
    <div class="uk-child-width-1-4" uk-grid>
      <div class="">
        <div class="uk-card-header">
      <div class="uk-grid-small uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
              <img class="uk-border-circle" width="60" height="60" src="<?php echo get_template_directory_uri(); ?>/images/yelp.png">
          </div>
          <div class="uk-width-expand">
              <h4 class=" uk-margin-remove-bottom">Yelp</h4>
              <p class="uk-text-meta uk-margin-remove-top star">
<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </p>
          </div>
      </div>
  </div>
      </div>
      <div class="">
        <div class="uk-card-header">
      <div class="uk-grid-small uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
              <img class="uk-border-circle" width="60" height="60" src="<?php echo get_template_directory_uri(); ?>/images/google+.png">
          </div>
          <div class="uk-width-expand">
              <h4 class=" uk-margin-remove-bottom">Google</h4>
              <p class="uk-text-meta uk-margin-remove-top star">
<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </p>
          </div>
      </div>
  </div>
      </div>
      <div class="">
        <div class="uk-card-header">
      <div class="uk-grid-small uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
              <img class="uk-border-circle" width="60" height="60" src="<?php echo get_template_directory_uri(); ?>/images/facebook.png">
          </div>
          <div class="uk-width-expand">
              <h4 class=" uk-margin-remove-bottom">Facebook</h4>
              <p class="uk-text-meta uk-margin-remove-top star">
<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </p>
          </div>
      </div>
  </div>
      </div>
      <div class="">
        <div class="uk-card-header">
      <div class="uk-grid-small uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
              <img class="uk-border-circle" width="60" height="60" src="<?php echo get_template_directory_uri(); ?>/images/angieslist.png">
          </div>
          <div class="uk-width-expand">
              <h4 class=" uk-margin-remove-bottom">Angies List</h4>
              <p class="uk-text-meta uk-margin-remove-top star">
<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </p>
          </div>
      </div>
  </div>
      </div>

    </div>
  </div>
</section>

<section class=" section section_theme_midnight">
  <div class="uk-container">
    <div class="uk-child-width-1-4" uk-grid>
      <div class="">
        <div class="uk-card-header">
      <div class="uk-grid-small uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
              <img class="uk-border-circle" width="60" height="60" src="<?php echo get_template_directory_uri(); ?>/images/yelp.png">
          </div>
          <div class="uk-width-expand">
              <h4 class=" uk-margin-remove-bottom">Yelp</h4>
              <p class="uk-text-meta uk-margin-remove-top star">
<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </p>
          </div>
      </div>
  </div>
      </div>
      <div class="">
        <div class="uk-card-header">
      <div class="uk-grid-small uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
              <img class="uk-border-circle" width="60" height="60" src="<?php echo get_template_directory_uri(); ?>/images/google+.png">
          </div>
          <div class="uk-width-expand">
              <h4 class=" uk-margin-remove-bottom">Google</h4>
              <p class="uk-text-meta uk-margin-remove-top star">
<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </p>
          </div>
      </div>
  </div>
      </div>
      <div class="">
        <div class="uk-card-header">
      <div class="uk-grid-small uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
              <img class="uk-border-circle" width="60" height="60" src="<?php echo get_template_directory_uri(); ?>/images/facebook.png">
          </div>
          <div class="uk-width-expand">
              <h4 class=" uk-margin-remove-bottom">Facebook</h4>
              <p class="uk-text-meta uk-margin-remove-top star">
<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </p>
          </div>
      </div>
  </div>
      </div>
      <div class="">
        <div class="uk-card-header">
      <div class="uk-grid-small uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
              <img class="uk-border-circle" width="60" height="60" src="<?php echo get_template_directory_uri(); ?>/images/angieslist.png">
          </div>
          <div class="uk-width-expand">
              <h4 class=" uk-margin-remove-bottom">Angies List</h4>
              <p class="uk-text-meta uk-margin-remove-top star">
<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </p>
          </div>
      </div>
  </div>
      </div>

    </div>
  </div>
</section>

<section class=" section section_theme_sunflower">
  <div class="uk-container">
    <div class="uk-child-width-1-4" uk-grid>
      <div class="">
        <div class="uk-card-header">
      <div class="uk-grid-small uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
              <img class="uk-border-circle" width="60" height="60" src="<?php echo get_template_directory_uri(); ?>/images/yelp.png">
          </div>
          <div class="uk-width-expand">
              <h4 class=" uk-margin-remove-bottom">Yelp</h4>
              <p class="uk-text-meta uk-margin-remove-top star">
<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </p>
          </div>
      </div>
  </div>
      </div>
      <div class="">
        <div class="uk-card-header">
      <div class="uk-grid-small uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
              <img class="uk-border-circle" width="60" height="60" src="<?php echo get_template_directory_uri(); ?>/images/google+.png">
          </div>
          <div class="uk-width-expand">
              <h4 class=" uk-margin-remove-bottom">Google</h4>
              <p class="uk-text-meta uk-margin-remove-top star">
<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </p>
          </div>
      </div>
  </div>
      </div>
      <div class="">
        <div class="uk-card-header">
      <div class="uk-grid-small uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
              <img class="uk-border-circle" width="60" height="60" src="<?php echo get_template_directory_uri(); ?>/images/facebook.png">
          </div>
          <div class="uk-width-expand">
              <h4 class=" uk-margin-remove-bottom">Facebook</h4>
              <p class="uk-text-meta uk-margin-remove-top star">
<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </p>
          </div>
      </div>
  </div>
      </div>
      <div class="">
        <div class="uk-card-header">
      <div class="uk-grid-small uk-flex-middle" uk-grid>
          <div class="uk-width-auto">
              <img class="uk-border-circle" width="60" height="60" src="<?php echo get_template_directory_uri(); ?>/images/angieslist.png">
          </div>
          <div class="uk-width-expand">
              <h4 class=" uk-margin-remove-bottom">Angies List</h4>
              <p class="uk-text-meta uk-margin-remove-top star">
<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </p>
          </div>
      </div>
  </div>
      </div>

    </div>
  </div>
</section>
<!--
<section class="section section_theme_midnight">
  <div class="uk-container">
    <div class="uk-child-width-1-4" uk-grid>
      <div class="uk-text-center">
        <h1><i class="fas fa-dollar-sign"></i></h1>
        <h5>Best Price Guaranteed</h5>
      </div>
      <div class="uk-text-center">
        <h1><i class="far fa-clock"></i></h1>
        <h5>24/7 Emergency Service</h5>
      </div>
      <div class="uk-text-center">
        <h1><i class="far fa-smile"></i></h1>
        <h5>Satisfaction Guarantee</h5>
      </div>
      <div class="uk-text-center">
        <h1><i class="fas fa-flag-usa"></i></h1>
        <h5>American Made</h5>
      </div>


    </div>
  </div>
</section> -->
<!-- <section class="section section_theme_sunflower">
  <div class="uk-container">
    <div class="uk-child-width-1-4" uk-grid>
      <div class="uk-text-center">
        <h1><i class="fas fa-dollar-sign"></i></h1>
        <h5>Best Price Guaranteed</h5>
      </div>
      <div class="uk-text-center">
        <h1><i class="far fa-clock"></i></h1>
        <h5>24/7 Emergency Service</h5>
      </div>
      <div class="uk-text-center">
        <h1><i class="far fa-smile"></i></h1>
        <h5>Satisfaction Guarantee</h5>
      </div>
      <div class="uk-text-center">
        <h1><i class="fas fa-flag-usa"></i></h1>
        <h5>American Made</h5>
      </div>


    </div>
  </div>
</section> -->
<section class="section section_theme_white">
  <div class="uk-container">
    <div class="uk-child-width-1-4" uk-grid>
      <div class="uk-text-center">
        <h1><i class="fas fa-dollar-sign"></i></h1>
        <h5>Best Price Guaranteed</h5>
      </div>
      <div class="uk-text-center">
        <h1><i class="far fa-clock"></i></h1>
        <h5>24/7 Emergency Service</h5>
      </div>
      <div class="uk-text-center">
        <h1><i class="far fa-smile"></i></h1>
        <h5>Satisfaction Guarantee</h5>
      </div>
      <div class="uk-text-center">
        <h1><i class="fas fa-flag-usa"></i></h1>
        <h5>American Made</h5>
      </div>


    </div>
  </div>
</section>
<!--========================================================================= -->








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



<section class="section section_theme_sunflower">
  <div class="uk-container">
    <h3>CITIES WE SERVE</h3>
    <hr>
    <div class="uk-child-width-1-4" uk-grid>

      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#"> Lorem Ipsum </a></li>

    </div>
    <h3>Counties WE SERVE</h3>
    <hr>
    <div class="uk-child-width-1-4" uk-grid>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lorem Ipsum, Florida </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lorem Ipsum, Florida </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lorem Ipsum, Florida </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lorem Ipsum, Florida </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lorem Ipsum, Florida </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lorem Ipsum, Florida </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lorem Ipsum, Florida </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lorem Ipsum, Florida </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lorem Ipsum, Florida </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lorem Ipsum, Florida </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lorem Ipsum, Florida </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lorem Ipsum, Florida </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lorem Ipsum, Florida </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lorem Ipsum, Florida </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lorem Ipsum, Florida </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lorem Ipsum, Florida </a></li>
      <li class="uk-margin-remove"><a class="footer__link footer__link_type_city uk-button-text" href="#">Lorem Ipsum, Florida </a></li>
</div>
</div>

</section>

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
