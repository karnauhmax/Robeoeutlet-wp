<?php 
 /*
 Template Name: Refund
 */
?>

<?php get_header(); ?>


<main class="main">
    <section class="refund section-padding-top">
     <div class="container">
      <div class="refund__inner">
       <h1 class="refund__title section-title">
        Return and Refund policy
       </h1>
       <div class="refund__descr text text-300">
        <?php the_field('refund_page_text') ?>
       </div>

       <!--  -->

         <?php 
            $notes = get_field('refund_page_notes');

            if ($notes) {
                foreach ($notes as $note) {
                    echo '<div class="refund__note">';
                    echo '<div class="refund__note-descr">';
                    echo $note['refund_page_note'];
                    echo '</div>';
                    echo '</div>';  
                }
            }
            ?>

      </div>
     </div>
    </section>
    <!-- contact-preview section -->
<section class="contact-preview" data-aos="fade-up">
 <div class="container">
  <div class="contact-preview__inner">
   <div class="contact-preview__img ibg">
   <?php 
    $consultation_form_image = get_field('consultation_form_image', 'option');

    $width = $consultation_form_image['width'];
    $height = $consultation_form_image['height'];
    $url = $consultation_form_image['url'];
    $alt = $consultation_form_image['alt'];
    
    ?>

    <img loading="lazy" src="<?php echo $url ?>" class="image" width="<?php echo $width ?>" height="<?php echo $height ?>" alt="<?php echo $alt ?>">
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
