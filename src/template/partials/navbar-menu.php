<div class="uk-navbar-right">
<!-- START head_menu -->
  <?php if (have_rows('head_menu', 'option')): ?>

  <ul class="uk-navbar-nav">

    <?php while (have_rows('head_menu', 'option')): the_row(); ?>

    <li class="uk-visible@m"><a class="nav__link" href="<?php the_sub_field('nav_link'); ?>">
        <?php the_sub_field('nav_title'); ?></a>
      <?php
        // check if the flexible content field has rows of data
        //  START sub_navs
        if (have_rows('sub_navs')):?>
              <div class="uk-width-expand nav_theme_midnight" uk-dropdown>
                <div class="uk-dropdown-grid">
                  <?php
        // loop through the rows of data
        while (have_rows('sub_navs')) : the_row();
        if (get_row_layout() == 'sub_nav'):?>
                  <div class="uk-margin-large">
            <h3>
              <?php the_sub_field('nav_block_title'); ?>
            </h3>
            <hr>
            <?php if (have_rows('nav_block')):

              ?>

            <ul class="uk-nav uk-dropdown-nav uk-child-width-1-4" uk-grid>

        <?php while (have_rows('nav_block')): the_row(); ?>
              <li class="uk-margin-remove">
                <a class="nav__link nav__link_type_city uk-button-text" href="<?php the_sub_field('nav_link_url'); ?>">
                  <?php the_sub_field('nav_link_title'); ?></a></li>

              <?php endwhile; ?>
  </ul>
            <?php endif; ?>
          </div>
          <?php endif; endwhile;?>
        </div>
      </div>
      <?php
endif; // END sub_navs?>
    </li>
    <?php endwhile; ?>

                <li><a href="#offcanvas-nav" class="uk-hidden@m button_type_toggle" uk-toggle>
                    <span class="" uk-navbar-toggle-icon>

                    </span>
                  </a>
                </li>
  </ul>

<?php endif; ?><!-- END head_menu -->



</div>











  <div id="offcanvas-nav" uk-offcanvas="overlay: true">
      <div class="uk-offcanvas-bar">
        <?php if (have_rows('head_menu', 'option')): ?>

        <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
          <?php while (have_rows('head_menu', 'option')): the_row(); ?>

      <li class=" <?php if (get_sub_field('nav_block_title')): ?> uk-parent <?php endif; ?> ">
          <a href="<?php the_sub_field('nav_link'); ?>">  <?php the_sub_field('nav_title'); ?></a>
          <?php
            // check if the flexible content field has rows of data
            //  START sub_navs
            if (have_rows('sub_navs')):?>
            <?php
  // loop through the rows of data
  while (have_rows('sub_navs')) : the_row();
  if (get_row_layout() == 'sub_nav'):?>

          <ul class="uk-nav-sub">
            <b> <?php the_sub_field('nav_block_title'); ?></b>
            <?php while (have_rows('nav_block')): the_row(); ?>

              <li class="uk-margin-remove">
                <a class="nav__link nav__link_type_city uk-button-text" href="<?php the_sub_field('nav_link_url'); ?>">
                  <?php the_sub_field('nav_link_title'); ?></a></li>
                            <?php endwhile; ?>


          </ul>
        <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>
      </li>

    <?php endwhile; ?>

  </ul>
<?php endif; ?><!-- END head_menu -->


      </div>
  </div>
