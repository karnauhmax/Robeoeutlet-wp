<?php 
 /*
 Template Name: About
 */
?>

<?php get_header(); ?>

<main class="main">
        <!-- payment section -->

        <section class="about section-padding-top text text-300">
          <div class="container">
            <div class="about__inner">
              <div class="about__head about__content">
                <h1 class="about__title section-title">About Us</h1>
                  <?php the_field('text_above_first_image'); ?>
              </div>

              <div class="about__media about__content">
                <div class="about__media-img ibg">
                <?php 
                  $about_page_image = get_field('about_page_image');

                  $width = $about_page_image['width'];
                  $height = $about_page_image['height'];
                  $url = $about_page_image['url'];
                  $alt = $about_page_image['alt'];
    
                  ?>

                <img loading="lazy" src="<?php echo $url ?>" class="image" width="<?php echo $width ?>" height="<?php echo $height ?>" alt="<?php echo $alt ?>">
                </div>
                <?php the_field('text_below_first_image'); ?>
              </div>

              <div class="about__row">
                <?php the_field('text_in_one_row'); ?>
              </div>

              <div class="about__quality">
                <div class="about__quality-img ibg">
                <?php $about_page_image = get_field('about_page_image');

                $width = $about_page_image['width'];
                $height = $about_page_image['height'];
                $url = $about_page_image['url'];
                $alt = $about_page_image['alt'];

                ?>

                <img loading="lazy" src="<?php echo $url ?>" class="image" width="<?php echo $width ?>" height="<?php echo $height ?>" alt="<?php echo $alt ?>">
                </div>
                <div class="about__quality-info grid-flow">
                  <?php 
                  $near_second_image = get_field('text_near_second_image');
                  $title =  $near_second_image['title_near_second_image'];
                  $descr =  $near_second_image['description_near_second_image'];
                  ?>
                  <h2 class="about__quality-title section-subtitle">
                    <?php echo $title ?>
                  </h2>
                  <?php
                    echo $descr; 
                  ?>
                </div>
              </div>

              <div class="about__footer">
                <div class="about__footer-inner">

                <?php 
                  $below_second_image = get_field('text_below_second_image');
                  $title =  $below_second_image['title_below_second_image'];
                  $descr =  $below_second_image['description_below_second_image'];
                  ?>

                  <h2 class="about__title section-subtitle">
                   <?php echo $title ?>

                  </h2>
                  
                  <?php
                    echo $descr; 
                  ?>
                  
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- payment section -->

        <!-- contact-preview section -->
          <?php echo generateContactPreviewMarkup(); ?>

        <!-- contact-preview section -->

      </main>

<?php get_footer(); ?>
