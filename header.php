
<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <meta name="key" content="value" />
        <meta name="keywords" content="keyword1, keyword2" />
        <meta name="description" content="this is the description of this page" />
        <?php wp_head(); ?>


    </head>
    <body>


      <div class="nav_theme_midnight" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
        <div class="" style="background-color:#000;">
          <div class="uk-container">
        <div class="uk-text-right@m uk-text-center">
          <span> <a style="    padding: 10px;
    display: -webkit-inline-box;
    font-size: 15px;" href="<?php the_field('phone_call') ?>"><i class="fas fa-phone-square"></i> | <?php the_field('phone_display') ?> </a> </span>
        </div>
          </div>
        </div>
        <div class="uk-container">

          <nav class="" uk-navbar style="position: relative; z-index: 980;">

              <div class="uk-navbar-left">


              <a href="#"> GarageDoorsTech </a>

              </div>
                <div class="uk-navbar-right">

                  <?php if( have_rows('head_menu', 'option') ): ?>

                    <ul class="uk-navbar-nav">

                      <?php while( have_rows('head_menu', 'option') ): the_row(); ?>

                        <li><a class="nav__link" href="<?php the_sub_field('nav_link'); ?>"><?php the_sub_field('nav_title'); ?></a>
                          <?php

// check if the flexible content field has rows of data
if( have_rows('sub_navs') ):?>
<div class="uk-width-expand nav_theme_midnight" uk-dropdown>
<div class="uk-dropdown-grid">
<?php

   // loop through the rows of data
  while ( have_rows('sub_navs') ) : the_row();

      if( get_row_layout() == 'sub_nav' ):?>



  <div class="uk-margin-large">
  <h3><?php the_sub_field('nav_block_title'); ?></h3>
  <hr>
  <?php if( have_rows('nav_block')): ?>

    <ul class="uk-nav uk-dropdown-nav uk-child-width-1-4" uk-grid>

    <?php while( have_rows('nav_block') ): the_row(); ?>

      <li class="uk-margin-remove">
        <a class="nav__link nav__link_type_city uk-button-text" href="<?php the_sub_field('nav_link_url'); ?>">
           <?php the_sub_field('nav_link_title'); ?></a></li>

    <?php endwhile; ?>

    </ul>

<?php endif; ?>
</div>



    <?php  elseif( get_row_layout() == 'download' ):

        $file = get_sub_field('file');

      endif;

  endwhile;

else :

  // no layouts found
?>
</div>
</div>
<?php
endif;

?>














                        </li>



                      <?php endwhile; ?>

                      </ul>

                  <?php endif; ?>

                    <!-- <ul class="uk-navbar-nav">
                      <li><a class="nav__link" href="#">Home</a></li>
                      <li><a class="nav__link" href="#">About</a></li>
                      <li><a class="nav__link" href="#">Services</a></li>
                      <li><a class="nav__link" href="#">Reviews</a></li>
                      <li><a class="nav__link" href="#">Contact</a></li>
                        <li>
                            <a class="nav__link" href="#">Locations</a>
                            <div class="uk-width-expand nav_theme_midnight" uk-dropdown>
      <div class="uk-dropdown-grid">

          <div>
            <h3>CITIES WE SERVE</h3>
            <hr>
              <ul class="uk-nav uk-dropdown-nav uk-child-width-1-4" uk-grid>

                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> lorem ipsum </a></li>



              </ul>
              <h3>Counties WE SERVE</h3>
              <hr>
              <ul class="uk-nav uk-dropdown-nav uk-child-width-1-4" uk-grid>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#">Lorem ipsum, Florida </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#">Lorem ipsum, Florida </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#">Lorem ipsum, Florida </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#">Lorem ipsum, Florida </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#">Lorem ipsum, Florida </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#">Lorem ipsum, Florida </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#">Lorem ipsum, Florida </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#">Lorem ipsum, Florida </a></li>
                <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#">Lorem ipsum, Florida </a></li>

              </ul>
          </div>
      </div>
  </div>
                        </li>
                        <li><a class="nav__link" href="#">Services</a></li>
                        <li><a class="nav__link" href="#">Reviews</a></li>
                        <li><a class="nav__link" href="#">Contact</a></li>

                    </ul> -->

            </div>

          </nav>
        </div>

      </div>

            <!-- <div class="nav_theme_sunflower" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
              <div class="uk-container">

                <nav class="" uk-navbar style="position: relative; z-index: 980;">

                    <div class="uk-navbar-left">


                    <a href="#"> LOGO </a>

                    </div>
                      <div class="uk-navbar-right">

                          <ul class="uk-navbar-nav">
                            <li><a class="nav__link" href="#">Home</a></li>
                            <li><a class="nav__link" href="#">About</a></li>
                            <li><a class="nav__link" href="#">Services</a></li>
                            <li><a class="nav__link" href="#">Reviews</a></li>
                            <li><a class="nav__link" href="#">Contact</a></li>
                              <li>
                                  <a class="nav__link" href="#">Locations</a>
                                  <div class="uk-width-expand nav_theme_sunflower" uk-dropdown>
            <div class="uk-dropdown-grid">

                <div>
                  <h3>CITIES WE SERVE</h3>
                  <hr>
                    <ul class="uk-nav uk-dropdown-nav uk-child-width-1-4" uk-grid>

                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Orlando </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Kissimmee </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> The Villages </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Clermont </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Apopka </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Winter Garden </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Winter Park </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Sanford </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Casselberry </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Oviedo </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Lake Mary </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Altamonte Springs </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Longwood </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Windermere </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Leesburg </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Ocoee </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Pine Hills </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Groveland </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Eustis </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Maitland </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Wildwood </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Minneola </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Mount Dora </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Tavares </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Lockhart </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Saint Cloud </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Winter Springs </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Coleman </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Umatilla </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Fruitland Park </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Lady Lake </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Bushnell </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Mascotte </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Grand Island </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Webster </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Montverde </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Astatula </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Fairview Shores </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> CenterHill </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Oakland </a></li>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Gotha </a></li>


                    </ul>
                    <h3>Counties WE SERVE</h3>
                    <hr>
                    <ul class="uk-nav uk-dropdown-nav uk-child-width-1-4" uk-grid>
                      <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#">Orange County, Florida </a></li>
                  <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#">Seminole County, Florida </a></li>
                    <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#">Osceola County, Florida </a></li>
                    <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#">Lake County, Florida </a></li>
                  <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Volusia County, Florida </a></li>
                  <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Pinellas County, Florida </a></li>

                    </ul>
                </div>
            </div>
        </div>
                              </li>
                          </ul>

                  </div>

                </nav>
              </div>

            </div> -->

                  <!-- <div class="nav_theme_white" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
                    <div class="uk-container">

                      <nav class="" uk-navbar style="position: relative; z-index: 980;">

                          <div class="uk-navbar-left">


                          <a href="#"> LOGO </a>

                          </div>
                            <div class="uk-navbar-right">

                                <ul class="uk-navbar-nav">
                                  <li><a class="nav__link" href="#">Home</a></li>
                                  <li><a class="nav__link" href="#">About</a></li>
                                  <li><a class="nav__link" href="#">Services</a></li>
                                  <li><a class="nav__link" href="#">Reviews</a></li>
                                  <li><a class="nav__link" href="#">Contact</a></li>
                                    <li>
                                        <a class="nav__link" href="#">Locations</a>
                                        <div class="uk-width-expand nav_theme_white" uk-dropdown>
                  <div class="uk-dropdown-grid">

                      <div>
                        <h3>CITIES WE SERVE</h3>
                        <hr>
                          <ul class="uk-nav uk-dropdown-nav uk-child-width-1-4" uk-grid>

                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Orlando </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Kissimmee </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> The Villages </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Clermont </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Apopka </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Winter Garden </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Winter Park </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Sanford </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Casselberry </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Oviedo </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Lake Mary </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Altamonte Springs </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Longwood </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Windermere </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Leesburg </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Ocoee </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Pine Hills </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Groveland </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Eustis </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Maitland </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Wildwood </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Minneola </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Mount Dora </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Tavares </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Lockhart </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Saint Cloud </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Winter Springs </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Coleman </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Umatilla </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Fruitland Park </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Lady Lake </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Bushnell </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Mascotte </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Grand Island </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Webster </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Montverde </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Astatula </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Fairview Shores </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> CenterHill </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Oakland </a></li>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Gotha </a></li>


                          </ul>
                          <h3>Counties WE SERVE</h3>
                          <hr>
                          <ul class="uk-nav uk-dropdown-nav uk-child-width-1-4" uk-grid>
                            <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#">Orange County, Florida </a></li>
                        <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#">Seminole County, Florida </a></li>
                          <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#">Osceola County, Florida </a></li>
                          <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#">Lake County, Florida </a></li>
                        <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Volusia County, Florida </a></li>
                        <li class="uk-margin-remove"><a class="nav__link nav__link_type_city uk-button-text" href="#"> Pinellas County, Florida </a></li>

                          </ul>
                      </div>
                  </div>
              </div>
                                    </li>
                                </ul>

                        </div>

                      </nav>
                    </div>

                  </div> -->


                  <div class="uk-position-relative uk-visible-toggle uk-light " tabindex="-1"
                   uk-slideshow="animation: push; ratio: 5:2" >

                      <ul class="uk-slideshow-items ">
                                                  <li class="slider">
                              <img class="" src="<?php echo get_template_directory_uri(); ?>/images/garageone.jpeg" alt="" uk-cover>
                              <div class="uk-position-center uk-position-small uk-text-center" style="z-index:2;">
                                  <h1 class="hero__title" uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Garage Doors Tech</h1>
                                  <p uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">Thank You Bola For Your Hard Work</p>
                              </div>
                          </li>
                          <li class="slider">
      <img src="<?php echo get_template_directory_uri(); ?>/images/garageone.jpeg" alt="" uk-cover>
      <div class="uk-position-center uk-position-small uk-text-center" style="z-index:2;">
          <h1 class="hero__title" uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Garage Doors Tech</h1>
          <p uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">Thank You Bola For Your Hard Work</p>
      </div>
  </li>
                      </ul>

                      <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                      <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                  </div>
