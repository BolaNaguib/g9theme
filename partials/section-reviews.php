

<section id="<?php the_sub_field('section_id'); ?>" class=" section section_theme_<?php the_sub_field('section_theme') ?>">
  <div class="uk-container">
    <div class="uk-text-center">
      <h3 class="section__title"> <?php the_sub_field('section_title'); ?> </h3>
      <hr class="hr_type_section uk-display-inline-block <?php if( get_sub_field('section_theme') !== 'sunflower' ): ?> hr_theme_sunflower <?php endif; ?> " >
      </div>
    <div class="uk-child-width-1-4@m uk-child-width-1-1" uk-grid>

      <?php

      // check if the repeater field has rows of data
      if( have_rows('review') ):

       	// loop through the rows of data
          while ( have_rows('review') ) : the_row();?>

          <div class="">
            <div class="uk-card-header">
          <div class="uk-grid-small uk-flex-middle" uk-grid>
              <div class="uk-width-auto">
                  <img class="uk-border-circle" width="60" height="60" src="<?php the_sub_field('review_image'); ?>">
              </div>
              <div class="uk-width-expand">
                  <h4 class=" uk-margin-remove-bottom"><?php the_sub_field('review_title'); ?></h4>
                  <p class="uk-text-meta uk-margin-remove-top star">
                    <?php if( get_sub_field('review_rating') == 'one' ): ?>
                    <i class="fas fa-star"></i>
                    <?php elseif( get_sub_field('review_rating') == 'two' ): ?>
                      <i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <?php elseif( get_sub_field('review_rating') == 'three' ): ?>
                      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <?php elseif( get_sub_field('review_rating') == 'four' ): ?>
                      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <?php elseif( get_sub_field('review_rating') == 'five' ): ?>
                      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <?php endif; ?>
                  </p>
              </div>
          </div>

      </div>
          </div>

        <?php  endwhile;
          else :
          // no rows found
        endif; ?>







    </div>

    <div class="uk-text-center uk-padding">
          <span style="color:#ffc600" class="rating-desc" itemscope="" itemtype="http://schema.org/<?php if( get_field('schema_organization_type') ): ?>
          <?php the_field('schema_organization_type') ?>
          <?php else: ?>
            <?php the_field('schema_organization_type', 'option'); ?>
          <?php endif; ?>">
              <span style="color:#ffc600" itemprop="name">
                <?php if( get_field('schema_organization_name') ): ?>
                <?php the_field('schema_organization_name') ?>
                <?php else: ?>
                  <?php the_field('schema_organization_name', 'option'); ?>
                <?php endif; ?>
              </span>
            <span itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">Rated
             <span itemprop="ratingValue">  <?php if( get_field('rating') ): ?>
               <?php the_field('rating') ?>
               <?php else: ?>
                 <?php the_field('rating', 'option'); ?>
               <?php endif; ?></span>/  <?php if( get_field('rating_total') ): ?>
                 <?php the_field('rating_total') ?>
                 <?php else: ?>
                   <?php the_field('rating_total', 'option'); ?>
                 <?php endif; ?> Based On
             <span itemprop="reviewCount">  <?php if( get_field('rating_based_on') ): ?>
               <?php the_field('rating_based_on') ?>
               <?php else: ?>
                 <?php the_field('rating_based_on', 'option'); ?>
               <?php endif; ?></span>
             <a class="ratings" href="  <?php if( get_field('rating_source_url') ): ?>
               <?php the_field('rating_source_url') ?>
               <?php else: ?>
                 <?php the_field('rating_source_url', 'option'); ?>
               <?php endif; ?>">  <?php if( get_field('rating_source') ): ?>
                 <?php the_field('rating_source') ?>
                 <?php else: ?>
                   <?php the_field('rating_source', 'option'); ?>
                 <?php endif; ?></a>
          </span>
        </span>
    </div>
  </div>
</section>
