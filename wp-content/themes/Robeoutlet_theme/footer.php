<?php
if (!is_404()) {
    ?>

<footer class="footer">
 <div class="container">
  <div class="footer__inner grid grid-12">
   <a href="/" class="footer__logo">
    <?php 
      $footer_logo = get_field('footer_logo', 'options');
      $url = $footer_logo['url'];
      $alt = $footer_logo['alt'];
    ?>

    <img loading="lazy" src="<?php echo $url?>" class="image" width="260" height="37" alt="<?php echo $alt ?>">

   </a>
   <div class="footer__newsletter">
    <h3 class="footer__newsletter-title">Stay in the know</h3>
    <?php echo do_shortcode('[contact-form-7 id="220" title="Footer Form" html_class="footer__form"]') ?>
   </div>
   <div class="footer-list footer-list-contact">
    <h3 class="footer__lists-title footer__title">contact</h3>
    <ul class="footer__list">
     <li class="footer__list-item">
      
     <?php 
        $mail = get_field('main_contact_email', 'option');
        $url = $mail['url'];
        $title = $mail['title'];
      ?>

      <a href="<?php echo $url?>" class="footer__list-link" target="_blank">
        <?php echo $title ?>
      </a>
     </li>
     <li class="footer__list-item">
      <a href="#" class="footer__list-link" target="_blank"> City, country</a>
     </li>
     <li class="footer__list-item">
      <?php 
        $instagram = get_field('main_instagram_link', 'option');
        $url = $instagram['url'];
        $title = $instagram['title'];
      ?>
      <a href="<?php echo $url ?>" class="footer__list-link" target="_blank"> <?php echo $title ?></a>
     </li>
     <li class="footer__list-item">

     <?php 
        $facebook = get_field('main_facebook_link', 'option');
        $url = $facebook['url'];
        $title = $facebook['title'];
      ?>

      <a href="<?php echo $url ?>" class="footer__list-link" target="_blank"> <?php echo $title  ?></a>
     </li>
    </ul>
   </div>
   <div class="footer-list footer-list-info">
    <ul class="footer__list">
     <li class="footer__list-item">
      <a href="<?php echo esc_url(get_page_link(21)); ?>" class="footer__list-link"> About us</a>
     </li>
     <li class="footer__list-item">
      <a href="<?php echo esc_url(get_page_link(21)); ?>" class="footer__list-link" target="_blank"> Privacy policy</a>
     </li>
     <li class="footer__list-item">
      <a href="<?php echo esc_url(get_page_link(21)); ?>" class="footer__list-link" target="_blank"> Terms and Conditions</a>
     </li>
     <li class="footer__list-item">
      <a href="<?php echo esc_url(get_page_link(14)); ?>" class="footer__list-link"> Payment and delivery</a>
     </li>
     <li class="footer__list-item">
      <a href="<?php echo esc_url(get_page_link(17)); ?>" class="footer__list-link"> Return&warranty</a>
     </li>
    </ul>
   </div>
   <div class="footer__payment">
    <div class="footer__payment-inner grid-flow">
     <h3 class="footer__payment-title footer__title">Payment options</h3>
     <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/logos/payments-list.png" width="167" height="30" alt="Payments options">
     <img src="<?php bloginfo('template_url'); ?>/assets/img/logos/paypal.svg" width="110" height="30" alt="Paypal">
    </div>
   </div>
  </div>
  <div class="footer__credits">
   <p>@2023, Robeoutlet</p>
  </div>
 </div>
</footer>

    <?php
}
?>




  </div>

  <?php wp_footer(); ?>
 </body>
</html>