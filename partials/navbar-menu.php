<div class="uk-navbar-right">

  <?php wp_nav_menu([
           'theme_location'  => '',
             'menu'            => '',
             'container'       => '',
             'container_class' => '',
             'container_id'    => '',
             'menu_class'      => '',
             'menu_id'         => '',
             'echo'            => true,
             'fallback_cb'     => '',
             'before'          => '',
             'after'           => '',
             'link_before'     => '',
             'link_after'      => '',
             'items_wrap'      => '<ul id="%1$s" class="%2$s uk-navbar-nav">%3$s</ul>',
             'depth'           => 0,
             'walker'          => new Bootstrap_Walker_Menu_Nav(),

           ]); ?>

  



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
