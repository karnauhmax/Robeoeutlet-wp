
<?php 
 /*
 Template Name: Payment
 */
?>
 <?php get_header(); ?>

 <main class="main">
    <!-- payment section -->
    <section class="payment section-padding-top text text-300">
     <div class="container">
      <div class="payment__inner">
       <h1 class="payment__title section-title">Payment and Delivery</h1>
       <?php the_field('payment_page_text_below_title'); ?>
       <div class="payment__options">
        <p class="text">
         <strong>
          Alternatively, please contact us directly, our team will
                    send you the invoice, that can be paid via:
         </strong>
        </p>
        <ul class="payment__list">
        <?php 
        $payment_options = get_field('payment_page_payment_options');
        $title = $payment_options['payment_page_payment_options_title'];
        $options_list = $payment_options['payment_options'];    

        if ($payment_options) {
              foreach ($options_list as $option_item) {
                      echo '
                      <li class="payment__list-item">
                       <p>
                       '. $option_item['payment_option'] .'
                       </p>
                     </li>
                      
                      ';
              }
        }

        ?>      
        </ul>
       </div>
       <div class="payment__info">
        <div class="payment__info-item">
         <h2 class="payment__info-title payment__subtitle">
          DELIVERY:
         </h2>
         <ul class="payment__list">
          <li class="payment__list-item">
           <p class="text text-300">
            We are offering a flat delivery rate $60 per one order
           </p>
           <p></p>
          </li>
          <?php 
          $payment_page_delivery_items = get_field('payment_page_delivery');

          if ($payment_page_delivery_items) {
                foreach ($payment_page_delivery_items as $payment_page_delivery_item) {
                        echo '
                        <li class="payment__list-item">
                         <p>
                         '. $payment_page_delivery_item['payment_page_delivery_list_item'] .'
                         </p>
                       </li>
                        ';
                }
          }
          
          ?>
         </ul>
        </div>
        <div class="payment__info-item">
         <h2 class="payment__info-title payment__subtitle">
          Pick ups:
         </h2>
         <ul class="payment__list">
         <?php 
          $payment_page_pick_ups_items = get_field('payment_page_pick_ups');

          if ($payment_page_pick_ups_items) {
                foreach ($payment_page_pick_ups_items as $payment_page_pick_ups_item) {
                        echo '
                        <li class="payment__list-item">
                         <p>
                         '. $payment_page_pick_ups_item['payment_page_pick_ups_list_item'] .'
                         </p>
                       </li>
                        
                        ';
                }
          }
          
          ?>
         </ul>
        </div>
       </div>
       <?php the_field('payment_page_notice'); ?>
       
      </div>
     </div>
    </section>
    <!-- payment section -->
    <!-- contact-preview section -->
      <?php echo generateContactPreviewMarkup();?>
<!-- contact-preview section -->

   </main>

 <?php get_footer(); ?>
