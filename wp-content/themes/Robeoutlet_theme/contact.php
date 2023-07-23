<?php 
 /*
 Template Name: Contact
 */
?>

<?php get_header(); ?>

<main class="main">
  <section class="contact section-padding-top">
                    <div class="container">
                        <h1 class="contact__title section-title">Contact Us</h1>
                        <div class="contact__inner">
                            <div class="contact__details grid-flow">
                                <div class="contact__details-info grid-flow">
                                    <div class="contact__item">
                                        <p class="contact__item-name">phone</p>
                                        <div class="contact__item-content">

                                           <?php 
                                           $phone = get_field('contact_page_phone');
                                           $url = $phone['url'];
                                           $title = $phone['title'];
                                           
                                           
                                           ?>

                                            <strong>
                                                <a href="<?php echo $url ?>"><?php echo $title ?></a>
                                            </strong
                      >
                                        </div>
                                    </div>
                                    <div class="contact__item">
                                        <p class="contact__item-name">mail</p>
                                        <div class="contact__item-content">
                                         <?php 
                                         $mail = get_field('main_contact_email', 'option');
                                         $url = $mail['url'];
                                         $title = $mail['title'];
                                         ?>
                                            <strong><a href="<?php echo $url ?>"><?php echo $title ?></a></strong>
                                        </div>
                                    </div>
                                    <div class="contact__item">
                                        <p class="contact__item-name">Location</p>
                                        <div class="contact__item-content">
                                            <strong><?php the_field('contact_page_location') ?></strong>
                                        </div>
                                    </div>
                                    <div class="contact__item">
                                        <p class="contact__item-name">time</p>
                                        <div class="contact__item-content">
                                            <strong><?php the_field('contact_page_time') ?></strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact__details-socials">
                                 <?php 
                                  $instagram = get_field('main_instagram_link', 'option');
                                  $url = $instagram['url'];
                                  $title = $instagram['title'];
                                 ?>
                                    <a href="<?php echo $url ?>" class="contact__link"><?php echo $title ?></a>

                                    <?php 
                                    $facebook = get_field('main_facebook_link', 'option');
                                    $url = $facebook['url'];
                                    $title = $facebook['title'];
                                    ?>
                                    <a href="<?php echo $url ?>" class="contact__link"><?php echo $title ?></a>
                                </div>
                            </div>
                            <?php echo do_shortcode('[contact-form-7 id="219" title="Footer Form" html_class="form contact__form"]') ?>
                            
                            <div class="contact__img ibg">
                             <?php 
                             $image = get_field('contact_page_image');
                             $url = $image['url'];
                             $alt = $image['alt'];
                             $width = $image['width'];
                             $height = $image['height'];
                             ?>
                                <img
                                    loading="lazy"
                                    src="<?php echo $url?>"
                                    class="image"
                                    width="<?php echo $width?>"
                                    height="<?php echo $height?>"
                                    alt="<?php echo $alt?>"
                                >
                            </div>
                        </div>
                    </div>
                </section>
</main>

<?php get_footer(); ?>
