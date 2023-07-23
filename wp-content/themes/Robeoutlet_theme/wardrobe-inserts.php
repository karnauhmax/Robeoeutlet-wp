<?php 
 /*
 Template Name: Wardrobe Inserts
 */
?>

<?php get_header(); ?>

<main class="main">

    <section class="process section-padding-top" data-stepper-type="constructor" data-constructor-type="wardrobe-inserts">
     <div class="container">
      <div class="process__inner grid">
       <h1 class="process__title title-with-margin uppercase-bold section-title  ">
        Start ordering Wardrobe inserts DIY
       </h1>
       <p class="text text-300">
        Our white melamine robe system hangs on the top rail and supports itself against the back wall, which is extremely easy and quick to install and makes the setup rigid and stable
       </p>
       <div class="process__steps process__steps-desktop">
        <step-btn v-for="(step, index) in stepBtns" @click="selectStep(index + 1)" :key="index" :index="index + 1" />
       </div>

       <custom-select @click="selectStep" :options="stepBtns"></custom-select>

       <!-- step component for constructor page  -->

       <constructor-step v-for="(step, index) in steps"
       v-show="currentStep === index + 1"
       :type="step.type"
       :img="step.img"
       :checkboxes="step.checkboxes"
       :hanging-rail="step.hangingRail"
       :notice="step.notice"
       :title="step.title"
       :label="step.label"
       :units="step.items"
       ></constructor-step>

       <!-- step component for constructor page  -->

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
<section class="contact-preview" data-aos="fade-up">
 <div class="container">
  <div class="contact-preview__inner">
   <div class="contact-preview__img ibg">
    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/content/framed-silver-doors.jpg" class="image" width="640" height="570" alt="">
   </div>
   <div class="contact-preview__info">
    <h2 class="contact-preview__title">
     Need a free
     <span>consultation?</span>
    </h2>
    <a href="#" class="arrow-link contact-preview__link white-arrow-link">Yes
    </a
        >
   </div>
  </div>
 </div>
</section>
<!-- contact-preview section -->

   </main>

<?php get_footer(); ?>