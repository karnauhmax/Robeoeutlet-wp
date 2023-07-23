<?php 
 /*
 Template Name: Home
 */
?>

 <?php get_header(); ?>

<main class="main">
    <!-- hero section -->
    <section class="hero">
     <div class="container">
      <h1 class="hero__title">
       Design your
       <br>
       <span>own wardrobe</span>
      </h1>
      <?php 
      $mainHeroImage = get_field('main_hero_image');
      
      echo '<img src="' . $mainHeroImage['url'] . '" class="hero__img" width="' . $mainHeroImage['width'] . '" height="' . $mainHeroImage['height'] . '" alt="' . $mainHeroImage['alt'] . '">';      

      ?>
     </div>
     <div class="hero__warranty">
      <h2 class="hero__warranty-title"><?php the_field('home_page_warranty'); ?></h2>
     </div>
    </section>
    <!-- hero section -->

    <div class="main-sections-wrapper">
     <!-- partners section -->
     <section class="partners">
      <div class="partners__inner">
       <h2 class="partners__title section-title">Our partners</h2>
       <div class="swiper partners__slider">
        <div class="swiper-wrapper">
         <!-- Slides -->

      <?php
        $partners = get_field('partners_logos');

        if ($partners) {
            foreach ($partners as $partner) {
                $logo = $partner['partners_logo'];
        ?>

        <div class="swiper-slide">
            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" width="<?php echo $logo['width']; ?>" height="<?php echo $logo['height']; ?>">
        </div>

        <?php
            }
        }
        ?>

         
        </div>
       </div>
      </div>
     </section>
     <!-- partners section -->
     <!-- preview section -->
     <section class="preview">
      <div class="container">
       <div class="preview__inner">
        <div class="preview__item grid grid-12" data-aos="fade-up">
         <div class="preview__info grid-flow">
          <h2 class="preview__title">Framed Sliding doors</h2>
          <p class="preview__descr text text-300">
           Durable DIY classic KIT for everyday use
          </p>
          <a href="<?php echo esc_url(get_page_link(173)); ?>" class="arrow-link dark-arrow-link preview__link">
           Start order
          </a
                   >
         </div>

         <?php 
         
         $framed_sliding_doors_image = get_field('framed_sliding_doors_image');
         $width = $framed_sliding_doors_image['width'];
         $height = $framed_sliding_doors_image['height'];
         $url = $framed_sliding_doors_image['url'];
         $alt = $framed_sliding_doors_image['alt'];
         
         
         ?>
         
         <a href="<?php echo esc_url(get_page_link(173)); ?>" class="preview__img ibg">
          <img loading="lazy" src="<?php echo $url?>" class="image" width="<?php echo $width?>" height="<?php echo $height?>" alt="<?php echo $alt?>">
         </a>
        </div>
        <div class="preview__item grid grid-12" data-aos="fade-up">
         <div class="preview__info grid-flow">
          <h2 class="preview__title">Frameless Sliding doors</h2>
          <p class="preview__descr text text-300">
           Premium DIY setup for modern ultimate designs
          </p>
          <a href="<?php echo esc_url(get_page_link(162)); ?>" class="arrow-link dark-arrow-link preview__link">
           Start order
          </a
                   >
         </div>


         <?php 
         
         $frameless_sliding_doors_image = get_field('frameless_sliding_doors_image');
         $width = $frameless_sliding_doors_image['width'];
         $height = $frameless_sliding_doors_image['height'];
         $url = $frameless_sliding_doors_image['url'];
         $alt = $frameless_sliding_doors_image['alt'];
         
         
         ?>
         
         <a href="<?php echo esc_url(get_page_link(162)); ?>" class="preview__img ibg">
          <img loading="lazy" src="<?php echo $url?>" class="image" width="<?php echo $width?>" height="<?php echo $height?>" alt="<?php echo $alt?>">
         </a>


        </div>
        <div class="preview__item grid grid-12" data-aos="fade-up">
         <div class="preview__info grid-flow">
          <h2 class="preview__title">Wardrobe shelving system</h2>
          <p class="preview__descr text text-300">
           DIY melamine contemporary system, suspended from the rail
          </p>
          <a href="<?php echo esc_url(get_page_link(46)); ?>" class="arrow-link dark-arrow-link preview__link">
           Start order
          </a
                   >
         </div>


         <?php 
         
         $wardrobe_system_image = get_field('wardrobe_system_image');
         $width = $wardrobe_system_image['width'];
         $height = $wardrobe_system_image['height'];
         $url = $wardrobe_system_image['url'];
         $alt = $wardrobe_system_image['alt'];
         
         
         ?>
         
         <a href="<?php echo esc_url(get_page_link(46)); ?>" class="preview__img ibg">  
          <img loading="lazy" src="<?php echo $url?>" class="image" width="<?php echo $width?>" height="<?php echo $height?>" alt="<?php echo $alt?>">
         </a>


        </div>
        <div class="preview__process" data-aos="fade-up">
         <div class="preview__process-inner">
          <div class="preview__process-info grid-flow preview__process-item">
           <h3 class="preview__process-title">It will take up to</h3>
           <p class="preview__process-text">
            5 minutes to order your custom wardrobe
           </p>
          </div>
          <div class="preview__process-item item-with-number">
           <p class="preview__process-descr">Pick up the product</p>
          </div>
          <div class="preview__process-item item-with-number">
           <p class="preview__process-descr">Customize</p>
          </div>
          <div class="preview__process-item item-with-number">
           <p class="preview__process-descr">
            We guide your installation
           </p>
          </div>
          <div class="preview__process-item item-with-number">
           <p class="preview__process-descr">We produce and deliver</p>
          </div>
          <div class="preview__process-item item-with-number">
           <p class="preview__process-descr">Order & pay</p>
          </div>
         </div>
        </div>
       </div>
      </div>
     </section>
     <!-- preview section -->
     <!-- photos component -->
     <section class="photos">
      <div class="container">
      <?php echo generatePhotosMarkup('home_photos_tabs') ?>
      </div>
     </section>
     <!-- photos component -->
     <section class="advantages list-section" data-aos="fade-up">
      <div class="container">
       <div class="list-section__wrapper">
        <h2 class="list-section__title section-title">Our advantages</h2>
        <ul class="list-section__inner advantages__inner">
         <li class="advantages__item list-section__item grid-flow" data-aos="fade-right" data-aos-delay="100">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/5.svg" class="list-section__img advantages__img" width="70" height="70" alt="Warranty">
          <h3 class="advantages__item-title list-section__item-title">
           Years warranty
          </h3>
         </li>
         <li class="advantages__item list-section__item grid-flow" data-aos="fade-right" data-aos-delay="200">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/card.svg" class="list-section__img advantages__img" width="70" height="70" alt="Warranty">
          <h3 class="advantages__item-title list-section__item-title">
           Secure payments
          </h3>
         </li>
         <li class="advantages__item list-section__item grid-flow" data-aos="fade-right" data-aos-delay="300">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/clock.svg" class="list-section__img advantages__img" width="70" height="70" alt="Warranty">
          <h3 class="advantages-title list-section__item-title">
           Quick turnaround 7-15 days
          </h3>
         </li>
         <li class="advantages__item list-section__item grid-flow" data-aos="fade-right" data-aos-delay="400">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/price.svg" class="list-section__img advantages__img" width="70" height="70" alt="Warranty">
          <h3 class="advantages-title list-section__item-title">
           Best price from manufacturer
          </h3>
         </li>
         <li class="advantages__item list-section__item grid-flow" data-aos="fade-right" data-aos-delay="500">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/gear.svg" class="list-section__img advantages__img" width="70" height="70" alt="Warranty">
          <h3 class="advantages-title list-section__item-title">
           Only high quality materials
          </h3>
         </li>
         <li class="advantages__item list-section__item grid-flow" data-aos="fade-right" data-aos-delay="600">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/map.svg" class="list-section__img advantages__img" width="70" height="70" alt="Warranty">
          <h3 class="advantages-title list-section__item-title">
           Australian made
          </h3>
         </li>
         <li class="advantages__item list-section__item grid-flow" data-aos="fade-right" data-aos-delay="700">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/delivery.svg" class="list-section__img advantages__img" width="70" height="70" alt="Warranty">
          <h3 class="advantages__item-title list-section__item-title">
           Delivery or pickup
          </h3>
         </li>
         <li class="advantages__item list-section__item grid-flow" data-aos="fade-right" data-aos-delay="800">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/call.svg" class="list-section__img advantages__img" width="70" height="70" alt="Warranty">
          <h3 class="advantages__item-title list-section__item-title">
           24/7 customer support
          </h3>
         </li>
         <li class="advantages__item list-section__item grid-flow" data-aos="fade-right" data-aos-delay="900">
          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/chat.svg" class="list-section__img advantages__img" width="70" height="70" alt="Warranty">
          <h3 class="advantages__item-title list-section__item-title">
           Online FB chat
          </h3>
         </li>
        </ul>
       </div>
      </div>
     </section>
     <!-- contact-preview section -->
      <?php echo generateContactPreviewMarkup();?>

    <!-- contact-preview section -->

     <!-- reviews component -->
     <section class="reviews" id="reviews" data-aos="fade-up">
      <div class="container">
       <h2 class="reviews__title section-title title-margin-bottom">
        Google reviews
       </h2>
       <div class="reviews__inner">
        <?php echo do_shortcode('[trustindex no-registration=google]') ?>

        
       </div>
      </div>
     </section>
     <!-- reviews component -->
     <!-- guide section -->
     <section class="guide" data-aos="fade-up">
      <div class="container">
        <div class="guide__head">
        <h2 class="guide__title section-title">
         DIY Guide — how to measure and install
        </h2>
        <div class="guide__btns">
         <button class="guide__btn tabs-btn tabs-btn-active" data-tabs-path="video">
          Video
         </button>
         <button class="guide__btn tabs-btn" data-tabs-path="brochure">
          Brochure, articles
         </button>
        </div>
        <div class="guide-slider-buttons active" data-slider-arrows="video">
         <button class="guide-slider-prev guide-slider-button test-1" data-slider-prev="video">
          <svg width="31" height="8" viewBox="0 0 31 8" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.8417 30.3536 3.64644L27.1716 0.464461C26.9763 0.269199 26.6597 0.269199 26.4645 0.464461C26.2692 0.659724 26.2692 0.976306 26.4645 1.17157L29.2929 3.99999L26.4645 6.82842C26.2692 7.02368 26.2692 7.34027 26.4645 7.53553C26.6597 7.73079 26.9763 7.73079 27.1716 7.53553L30.3536 4.35355ZM8.74228e-08 4.5L30 4.49999L30 3.49999L-8.74228e-08 3.5L8.74228e-08 4.5Z" fill="#303030"/>
          </svg>
         </button>
         <button class="guide-slider-next guide-slider-button test-2" data-slider-next="video">
          <svg width="31" height="8" viewBox="0 0 31 8" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.8417 30.3536 3.64644L27.1716 0.464461C26.9763 0.269199 26.6597 0.269199 26.4645 0.464461C26.2692 0.659724 26.2692 0.976306 26.4645 1.17157L29.2929 3.99999L26.4645 6.82842C26.2692 7.02368 26.2692 7.34027 26.4645 7.53553C26.6597 7.73079 26.9763 7.73079 27.1716 7.53553L30.3536 4.35355ZM8.74228e-08 4.5L30 4.49999L30 3.49999L-8.74228e-08 3.5L8.74228e-08 4.5Z" fill="#303030"/>
          </svg>
         </button>
        </div>
        <div class="guide-slider-buttons" data-slider-arrows="brochure">
         <button class="guide-slider-prev guide-slider-button test-3" data-slider-prev="brochure">
          <svg width="31" height="8" viewBox="0 0 31 8" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.8417 30.3536 3.64644L27.1716 0.464461C26.9763 0.269199 26.6597 0.269199 26.4645 0.464461C26.2692 0.659724 26.2692 0.976306 26.4645 1.17157L29.2929 3.99999L26.4645 6.82842C26.2692 7.02368 26.2692 7.34027 26.4645 7.53553C26.6597 7.73079 26.9763 7.73079 27.1716 7.53553L30.3536 4.35355ZM8.74228e-08 4.5L30 4.49999L30 3.49999L-8.74228e-08 3.5L8.74228e-08 4.5Z" fill="#303030"/>
          </svg>
         </button>
         <button class="guide-slider-next guide-slider-button test-4" data-slider-next="brochure">
          <svg width="31" height="8" viewBox="0 0 31 8" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.8417 30.3536 3.64644L27.1716 0.464461C26.9763 0.269199 26.6597 0.269199 26.4645 0.464461C26.2692 0.659724 26.2692 0.976306 26.4645 1.17157L29.2929 3.99999L26.4645 6.82842C26.2692 7.02368 26.2692 7.34027 26.4645 7.53553C26.6597 7.73079 26.9763 7.73079 27.1716 7.53553L30.3536 4.35355ZM8.74228e-08 4.5L30 4.49999L30 3.49999L-8.74228e-08 3.5L8.74228e-08 4.5Z" fill="#303030"/>
          </svg>
         </button>
        </div>
       </div>
       <div class="guide__content">
        <div class="tabs-content tabs-content-active" data-tabs-target="video">
         <div class="swiper guide__videos">
          <div class="swiper-wrapper">
           <div class="swiper-slide guide__videos-item">
            <div class="guide__videos-media">
             <div class="guide__videos-video"></div>
             <button class="guide__videos-btn"></button>
            </div>
            <div class="guide__videos-info">
             <h3 class="guide__videos-title">
              Wardrobe shelving system
             </h3>
             <p class="guide__videos-descr text text-300">
              DIY melamine contemporary system, suspended from the
                           rail
             </p>
            </div>
           </div>
           <div class="swiper-slide guide__videos-item">
            <div class="guide__videos-media">
             <div class="guide__videos-video"></div>
             <button class="guide__videos-btn"></button>
            </div>
            <div class="guide__videos-info">
             <h3 class="guide__videos-title">
              Wardrobe shelving system
             </h3>
             <p class="guide__videos-descr text text-300">
              DIY melamine contemporary system, suspended from the
                           rail
             </p>
            </div>
           </div>
           <div class="swiper-slide guide__videos-item">
            <div class="guide__videos-media">
             <div class="guide__videos-video"></div>
             <button class="guide__videos-btn"></button>
            </div>
            <div class="guide__videos-info">
             <h3 class="guide__videos-title">
              Wardrobe shelving system
             </h3>
             <p class="guide__videos-descr text text-300">
              DIY melamine contemporary system, suspended from the
                           rail
             </p>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="tabs-content" data-tabs-target="brochure">
         <div class="swiper guide__brochures">
          <div class="swiper-wrapper">
           <div class="swiper-slide guide__brochures-item">
            <p class="text text-300">
             Lorem ipsum dolor sit, amet consectetur adipisicing
                         elit. Eaque reprehenderit, vel distinctio similique est
                         non alias error. Nesciunt, quae. Facere nihil alias
                         ipsam accusamus quo.
            </p>
            <p class="text text-300">
             Lorem ipsum dolor sit, amet consectetur adipisicing
                         elit. Eaque reprehenderit, vel distinctio similique est
                         non alias error. Nesciunt, quae. Facere nihil alias
                         ipsam accusamus quo.
            </p>
            <p class="text text-300">
             Lorem ipsum dolor sit, amet consectetur adipisicing
                         elit. Eaque reprehenderit, vel distinctio similique est
                         non alias error. Nesciunt, quae. Facere nihil alias
                         ipsam accusamus quo.
            </p>
            <p class="text text-300">
             Lorem ipsum dolor sit, amet consectetur adipisicing
                         elit. Eaque reprehenderit, vel distinctio similique est
                         non alias error. Nesciunt, quae. Facere nihil alias
                         ipsam accusamus quo.
            </p>
            <p class="text text-300">
             Lorem ipsum dolor sit, amet consectetur adipisicing
                         elit. Eaque reprehenderit, vel distinctio similique est
                         non alias error. Nesciunt, quae. Facere nihil alias
                         ipsam accusamus quo.
            </p>
            <p class="text text-300">
             Lorem ipsum dolor sit, amet consectetur adipisicing
                         elit. Eaque reprehenderit, vel distinctio similique est
                         non alias error. Nesciunt, quae. Facere nihil alias
                         ipsam accusamus quo.
            </p>
            <p class="text text-300">
             Lorem ipsum dolor sit, amet consectetur adipisicing
                         elit. Eaque reprehenderit, vel distinctio similique est
                         non alias error. Nesciunt, quae. Facere nihil alias
                         ipsam accusamus quo.
            </p>
            <p class="text text-300">
             Lorem ipsum dolor sit, amet consectetur adipisicing
                         elit. Eaque reprehenderit, vel distinctio similique est
                         non alias error. Nesciunt, quae. Facere nihil alias
                         ipsam accusamus quo.
            </p>
           </div>
           <div class="swiper-slide guide__brochures-item">
            <p class="text text-300">
             Lorem ipsum dolor sit, amet consectetur adipisicing
                         elit. Eaque reprehenderit, vel distinctio similique est
                         non alias error. Nesciunt, quae. Facere nihil alias
                         ipsam accusamus quo.
            </p>
            <p class="text text-300">
             Lorem ipsum dolor sit, amet consectetur adipisicing
                         elit. Eaque reprehenderit, vel distinctio similique est
                         non alias error. Nesciunt, quae. Facere nihil alias
                         ipsam accusamus quo.
            </p>
            <p class="text text-300">
             Lorem ipsum dolor sit, amet consectetur adipisicing
                         elit. Eaque reprehenderit, vel distinctio similique est
                         non alias error. Nesciunt, quae. Facere nihil alias
                         ipsam accusamus quo.
            </p>
            <p class="text text-300">
             Lorem ipsum dolor sit, amet consectetur adipisicing
                         elit. Eaque reprehenderit, vel distinctio similique est
                         non alias error. Nesciunt, quae. Facere nihil alias
                         ipsam accusamus quo.
            </p>
            <p class="text text-300">
             Lorem ipsum dolor sit, amet consectetur adipisicing
                         elit. Eaque reprehenderit, vel distinctio similique est
                         non alias error. Nesciunt, quae. Facere nihil alias
                         ipsam accusamus quo.
            </p>
            <p class="text text-300">
             Lorem ipsum dolor sit, amet consectetur adipisicing
                         elit. Eaque reprehenderit, vel distinctio similique est
                         non alias error. Nesciunt, quae. Facere nihil alias
                         ipsam accusamus quo.
            </p>
            <p class="text text-300">
             Lorem ipsum dolor sit, amet consectetur adipisicing
                         elit. Eaque reprehenderit, vel distinctio similique est
                         non alias error. Nesciunt, quae. Facere nihil alias
                         ipsam accusamus quo.
            </p>
            <p class="text text-300">
             Lorem ipsum dolor sit, amet consectetur adipisicing
                         elit. Eaque reprehenderit, vel distinctio similique est
                         non alias error. Nesciunt, quae. Facere nihil alias
                         ipsam accusamus quo.
            </p>
           </div>
          </div>
         </div>
        </div>
       </div>

      </div>

     </section>
     <!-- guide section -->
     <!-- faq section -->
     <section class="faq" data-aos="fade-up">
      <div class="container">
       <div class="faq__inner">
        <h2 class="faq__title section-title">faq</h2>
        <div class="faq__questions">


                <?php 
        $faqs = get_field('faq');

        if ($faqs) {
            foreach ($faqs as $faq) {
                $title = $faq['faq_title'];
                $text = $faq['faq_text'];

                echo '
                <div class="faq__item accordion-item" data-aos="fade-right" data-aos-delay="100">
                  <button class="faq__item-head accordion-item__head">
                    ' . $title . '
                  </button>
                  <div class="faq__item-body accordion-item__body">
                    <div class="faq__item-content">
                      <p class="faq__item-descr text text-300">
                        ' . $text . '
                      </p>
                    </div>
                  </div>
                </div>
                ';
            }
        }
        ?>


         <div class="faq__item accordion-item" data-aos="fade-right" data-aos-delay="100">
          <button class="faq__item-head accordion-item__head">
            How long will it take to install wardrobe doors myself?
          </button>
          <div class="faq__item-body accordion-item__body">
           <div class="faq__item-content">
            <p class="faq__item-descr text text-300">
             Lorem ipsum dolor sit amet consectetur, adipisicing
                         elit. Alias voluptates pariatur eius nobis, veritatis
                         eum ipsum velit suscipit ea obcaecati corrupti fuga
                         nihil commodi magnam.
            </p>
           </div>
          </div>
         </div>
         
         
        </div>
       </div>
      </div>
     </section>

     <!-- faq section -->
    </div>
   </main>

 <?php get_footer(); ?>

 
