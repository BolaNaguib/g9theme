



<section class="section section_theme_midnight">
  <div class="uk-container">
    <?php if( have_rows('top_footer', 'option') ): ?>
      <?php while( have_rows('top_footer', 'option') ): the_row(); ?>
        <div class="uk-margin-large">

      <h3> <?php the_sub_field('block_title'); ?> </h3>
      <hr>
      <div class="uk-child-width-1-4" uk-grid>

        <?php if( have_rows('link')): ?>
          <?php while( have_rows('link')): the_row(); ?>
          <li class="uk-margin-remove">
            <a class="footer__link footer__link_type_city uk-button-text"
             href="<?php the_sub_field('link_url'); ?>">
               <?php the_sub_field('link_title'); ?> </a></li>

                   <?php endwhile; ?>

                   <?php endif; ?>

      </div>
    </div>

    <?php endwhile; ?>

    <?php endif; ?>
</div>

</section>
<!-- UIkit JS -->
<script async src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>
<?php wp_footer(); ?>

<script type="text/javascript">
  $(".clickopen").click(function(){
    $(".dxd").css('opacity','1');
  });
</script>
</body>
</html>
