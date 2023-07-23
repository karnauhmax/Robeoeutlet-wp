<?php 


add_action( 'wp_enqueue_scripts', 'robeoutlet_scripts' );
function robeoutlet_scripts(){
 wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
 wp_enqueue_style('vendor', get_template_directory_uri() . '/assets/css/vendor.css');

  wp_register_script( 'vue', 'https://cdn.jsdelivr.net/npm/vue', null, null, true );
  wp_register_script( 'vue-demi', 'https://unpkg.com/vue-demi', null, null, true );
  wp_register_script( 'pinia', 'https://cdnjs.cloudflare.com/ajax/libs/pinia/2.1.4/pinia.iife.js', null, '2.1.4', true );
  wp_register_script( 'sortable', 'https://cdn.jsdelivr.net/npm/sortablejs@1.10.2/Sortable.min.js', null, '1.10.2', true );
  wp_register_script( 'vuedraggable', 'https://unpkg.com/vuedraggable@4.0.1/dist/vuedraggable.umd.min.js', null, '4.0.1', true );


  wp_enqueue_script( 'vue' );
  wp_enqueue_script( 'vue-demi' );
  wp_enqueue_script( 'pinia' );
  wp_enqueue_script( 'sortable' );
  wp_enqueue_script( 'vuedraggable' );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), 'null', true); 
}


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter( 'wp_is_application_passwords_available', '__return_true' );

add_filter('upload_mimes', 'svg_upload_allow');

function svg_upload_allow($mimes) {
  $mimes['svg'] = 'image/svg+xml';

  return $mimes;
}


function debug_to_console($data) {
  $output = $data;
  if (is_array($output))
      $output = implode(',', $output);

  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}


if (function_exists('acf_add_options_page')) {


  acf_add_options_page();
  acf_add_options_sub_page('Main Options');
}


function generatePhotosMarkup($fieldParam) {
    $home_photos_tabs = get_field($fieldParam);

    if ($home_photos_tabs) {
        $markup = '
            <div class="photos__inner">
                <div class="photos__info grid-flow">
                    <div class="photos__info-head">
                        <h2 class="photos__title section-title">
                            inspiration photos
                        </h2>
                    </div>
                    <div class="photos__info-body grid-flow">';

        foreach ($home_photos_tabs as $index => $home_photos_tab) {
            $title = $home_photos_tab['title'];

            $markup .= '
                        <button class="photos__btn tabs-btn ' . ($index === 0 ? 'tabs-btn-active' : '') . '" data-content="' . $title . '" data-tabs-path="' . $title . '">
                            ' . $title . '
                        </button>';
        }

        $markup .= '
                    </div>
                </div>

                <div class="photos__content" data-aos="fade-right">';

        foreach ($home_photos_tabs as $index => $home_photos_tab) {
            $title = $home_photos_tab['title'];
            $image = $home_photos_tab['image'];

            $markup .= '
                    <div class="tabs-content ' . ($index === 0 ? 'tabs-content-active' : '') . '" data-tabs-target="' . $title . '">
                        <div class="ibg photos__img">
                            <img loading="lazy" src="' . $image['url'] . '" class="image" width="" height="" alt="' . $title . '">
                        </div>
                    </div>';
        }

        $markup .= '
                </div>

                <div class="photos__accordion" data-aos="fade-right">';

        foreach ($home_photos_tabs as $index => $home_photos_tab) {
            $title = $home_photos_tab['title'];
            $image = $home_photos_tab['image'];

            $markup .= '
                    <div class="photos__accordion-item grid-flow accordion-item">
                        <div class="photos__accordion-head accordion-item__head">
                            <button class="photos__btn" data-content="' . $title . '">
                                ' . $title . '
                            </button>
                        </div>
                        <div class="photos__accordion-body accordion-item__body">
                            <div class="photos__accordion-content">
                                <div class="ibg photos__img">
                                    <img loading="lazy" src="' . $image['url'] . '" class="image" width="' . $image['width'] . '" height="' . $image['height'] . '" alt="' . $image['alt'] . '">
                                </div>
                            </div>
                        </div>
                    </div>';
        }

        $markup .= '
                </div>
            </div>
        ';

        return $markup;
    }

    return $home_photos_tabs;
}




function generateContactPreviewMarkup() {
    $consultation_form_image = get_field('consultation_form_image', 'option');

    $width = $consultation_form_image['width'];
    $height = $consultation_form_image['height'];
    $url = $consultation_form_image['url'];
    $alt = $consultation_form_image['alt'];

    $markup = '
    <section class="contact-preview" data-aos="fade-up">
        <div class="container">
            <div class="contact-preview__inner">
                <div class="contact-preview__img ibg">
                    <img loading="lazy" src="' . $url . '" class="image" width="' . $width . '" height="' . $height . '" alt="' . $alt . '"> 
                </div>
                <div class="contact-preview__info">
                    <h2 class="contact-preview__title">
                        Need a free <span>consultation?</span>
                    </h2>
                    <a href="'. esc_url(get_page_link(24)) .'" class="arrow-link contact-preview__link white-arrow-link">Yes</a>  
                </div>
            </div>
        </div>
    </section>';

    return $markup;
}


add_filter('wpcf7_autop_or_not', '__return_false');




?>
