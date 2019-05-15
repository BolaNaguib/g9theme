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
             'items_wrap'      => '<ul id="%1$s" class="%2$s uk-navbar-nav dxd" style="display: none;">%3$s</ul>',
             'depth'           => 0,
             'walker'          => new Bootstrap_Walker_Menu_Nav(),

           ]); ?>
  <ul class="uk-navbar-nav">             <li><a class=" button_type_toggle clickopen uk-visible@m" uk-toggle>
    <span class="" uk-navbar-toggle-icon>

    </span>
  </a>
</li>

        
           </ul>


           <ul class="uk-navbar-nav uk-inline">

           <li><a  href="#offcanvas-nav" class=" button_type_toggle  uk-hidden@m" uk-toggle>
               <span class="" uk-navbar-toggle-icon>

               </span>
             </a>
             <div class="nav_theme_midnight uk-padding-small"  uk-drop="mode: click; boundary: !nav; boundary-align: true; pos: bottom-justify;">
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
                          'items_wrap'      => '<ul id="%1$s" class="%2$s uk-nav-parent-icon" uk-nav>%3$s</ul>',
                          'depth'           => 0,
                          'walker'          => new Bootstrap_Walker_Menu_Mobile(),

                        ]); ?>

             </div>

           </li>


         </ul>


</div>
