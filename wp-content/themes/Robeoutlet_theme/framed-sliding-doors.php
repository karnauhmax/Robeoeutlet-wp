<?php 
 /*
 Template Name: Framed Sliding Doors
 */
?>

<?php get_header(); ?>

   <main class="main">
    <div class="single-head">
     <div class="container">
      <h1 class="single__title uppercase-bold title-with-margin section-title title-margin-bottom">
       Framed Sliding Doors
      </h1>

     </div>
    </div>
    <!-- photos section -->
    <section class="photos">
     <div class="container">
      <?php echo generatePhotosMarkup('framed_sliding_doors_photos_tabs') ?>
     </div>
    </section>

    <section class="process" data-stepper-type="quiz" data-quiz-type="framed-sliding-doors">
      <div class="container">
       <h2 class="process__title title-with-margin uppercase-bold section-title  ">
        Start ordering Framed Sliding Doors
       </h2>
       <div class="process__inner grid">
        <div class="process__steps process__steps-desktop">
          <step-btn v-for="(step, index) in stepBtns" @click="selectStep(index + 1)" :key="index" :index="index + 1" />
        </div>
        <!-- select component -->

        <custom-select @click="selectStep" :options="stepBtns"></custom-select>

        <!-- select component -->

        <!-- step component -->

        <step v-for="(step, index) in steps" v-show="index + 1 === currentStep"
            :title="step.title"
            :items="step.items"
            :items-type="step.itemsType"
            :show-selected="step.showSelected"
            :index="index"
            :selected="selectedArr"
            :img-path="imgPath"
          ></step>

        <!-- step component -->

       </div>
      </div>
     </section>

    <!-- list-section component -->
    <section class="features list-section ">
     <div class="list-section__wrapper features__wrapper white-block">
      <div class="container">
       <h2 class="list-section__title section-title">Main features</h2>
       <ul class="list-section__inner features__inner">
        <li class="features__item list-section__item grid-flow">
         <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/5.svg" class="list-section__img features__img" width="70" height="70" alt="Warranty">
         <h3 class="features__item-title list-section__item-title">
          Powder coated durable aluminium frames and tracks
         </h3>
        </li>
        <li class="features__item list-section__item grid-flow">
         <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/card.svg" class="list-section__img features__img" width="70" height="70" alt="Warranty">
         <h3 class="features__item-title list-section__item-title">
          Toughened safety glass
         </h3>
        </li>
        <li class="features__item list-section__item grid-flow">
         <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/clock.svg" class="list-section__img features__img" width="70" height="70" alt="Warranty">
         <h3 class="features__item-title list-section__item-title">
          Premium safety mirror with vinyl back
         </h3>
        </li>
        <li class="features__item-title features__item list-section__item grid-flow">
         <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/price.svg" class="list-section__img features__img" width="70" height="70" alt="Warranty">
         <h3 class="features__item-title list-section__item-title">
          Reliable long lasting wheels
         </h3>
        </li>
        <li class="features__item list-section__item grid-flow">
         <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/gear.svg" class="list-section__img features__img" width="70" height="70" alt="Warranty">
         <h3 class="features__item-title list-section__item-title">
          Modern noise-free & soft sliding mechanism
         </h3>
        </li>
        <li class="features__item list-section__item grid-flow">
         <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/map.svg" class="list-section__img features__img" width="70" height="70" alt="Warranty">
         <h3 class="features__item-title list-section__item-title">
          Light-weight rust-free materials
         </h3>
        </li>
        <li class="features__item list-section__item grid-flow">
         <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/delivery.svg" class="list-section__img features__img" width="70" height="70" alt="Warranty">
         <h3 class="features__item-title list-section__item-title">
          Easy to fit, factory pre-assembled KIT
         </h3>
        </li>
        <li class="features__item list-section__item grid-flow">
         <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/call.svg" class="list-section__img features__img" width="70" height="70" alt="Warranty">
         <h3 class="features__item-title list-section__item-title">
          Made in Australia
         </h3>
        </li>
        <li class="features__item list-section__item grid-flow">
         <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/chat.svg" class="list-section__img features__img" width="70" height="70" alt="Warranty">
         <h3 class="features__item-title list-section__item-title">
          Quick production,
7-15 working days
         </h3>
        </li>
        <li class="features__item list-section__item grid-flow">
         <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/svg/chat.svg" class="list-section__img features__img" width="70" height="70" alt="Warranty">
         <h3 class="features__item-title list-section__item-title">
          Years warranty
         </h3>
        </li>
       </ul>
      </div>
     </div>
    </section>
    <!-- list-section component -->

    <!-- contact-preview section -->
      <?php echo generateContactPreviewMarkup() ?>
    <!-- contact-preview section -->

   </main>

<?php get_footer(); ?>
