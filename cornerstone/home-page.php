<?php
/* 
Template Name: Home Page
Template Post Type: page
*/

get_header();

?>

<section class="banner-section" style="background-image: url('<?php echo get_field("banner_backgound_image") ?>');">
    <div class="container">
        <h1><?php echo get_field("page_title") ?></h1>
        <h6><?php echo get_field("banner_sub_title") ?></h6>
    </div>
</section>

<section class="specialty-section">
    <div class="container">
        <h2><?php echo get_field("section_title") ?></h2>
        <p><?php echo get_field("specialty_description") ?></p>
        <div class="specialty-card">
            <?php
            if (have_rows('specialty_card')) {
                while (have_rows('specialty_card')) {
                    the_row(); ?>
                    <div class="specialty">
                        <img src="<?php echo get_sub_field("card_image") ?>" alt="">
                        <p><?php echo get_sub_field("card_text") ?></p>
                    </div>
            <?php  }
            }
            ?>
        </div>
    </div>
</section>

<section class="accreditation">
    <div class="container">
        <h2><?php echo get_field("accreditation_secction_title") ?></h2>
        <p><?php echo get_field("accreditation_secction_description") ?></p>
        <img src="<?php echo get_field("accreditation_secction_image") ?>" alt="">
    </div>
</section>

<section class="virtual-tour-section">
    <div class="container">
        <h2><?php echo get_field("virtual_tour_section_title") ?></h2>
        <div class="video-play">
            <iframe src="<?php echo get_field("video_link") ?>"
                width="698"
                height="334px"
                frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen>
            </iframe>
            <img src="<?php echo get_field("video_overlay_image") ?>" alt="" class="overlay-image">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="800px" width="800px" version="1.1" id="Layer_1" viewBox="0 0 512 512" xml:space="preserve">
                <g>
                    <g>
                        <path d="M256,0C114.608,0,0,114.608,0,256s114.608,256,256,256s256-114.608,256-256S397.392,0,256,0z M256,496    C123.664,496,16,388.336,16,256S123.664,16,256,16s240,107.664,240,240S388.336,496,256,496z" />
                    </g>
                </g>
                <g>
                    <g>
                        <polygon points="189.776,141.328 189.776,370.992 388.672,256.16   " />
                    </g>
                </g>
            </svg>
        </div>
    </div>
</section>

<section class="virtual-tour-section southwest-louisiana-section">
    <div class="container">
        <h2><?php echo get_field("louisiana_title") ?></h2>
        <div class="video-play">
            <iframe src="<?php echo get_field("louisiana_video_url") ?>"
                width="698"
                height="334px"
                frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen>
            </iframe>
            <img src="<?php echo get_field("louisiana_overlay_image") ?>" alt="" class="overlay-image">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="800px" width="800px" version="1.1" id="Layer_1" viewBox="0 0 512 512" xml:space="preserve">
                <g>
                    <g>
                        <path d="M256,0C114.608,0,0,114.608,0,256s114.608,256,256,256s256-114.608,256-256S397.392,0,256,0z M256,496    C123.664,496,16,388.336,16,256S123.664,16,256,16s240,107.664,240,240S388.336,496,256,496z" />
                    </g>
                </g>
                <g>
                    <g>
                        <polygon points="189.776,141.328 189.776,370.992 388.672,256.16   " />
                    </g>
                </g>
            </svg>
        </div>
    </div>
</section>

<section class="specialized-programs-section">
    <div class="container">
        <h2><?php echo get_field("specialized_title") ?></h2>
        <p><?php echo get_field("specialized_description") ?></p>
        <div class="specialized-card">
            <?php
            if (have_rows('specialized_card')) {
                while (have_rows('specialized_card')) {
                    the_row(); ?>
                    <div class="specialized">
                        <img src="<?php echo get_sub_field("card_image") ?>" alt="">
                        <p><?php echo get_sub_field("card_text") ?></p>
                    </div>
            <?php  }
            }
            ?>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="container">
        <h2><?php echo get_field("faq_section_title") ?></h2>
        <?php
        if (have_rows('faq_content')) {
            while (have_rows('faq_content')) {
                the_row(); ?>
                <div class="accordion">
                    <div class="question">
                        <h4><?php echo get_sub_field("faq_question") ?></h4>
                        <span class="open">+</span>
                        <span class="close">--</span>
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            <p><?php echo get_sub_field("faq_answer") ?></p>
                        </div>
                    </div>
                </div>
        <?php  }
        }
        ?>
        <div class="description">
            <?php echo get_field("faq_bottom") ?>
        </div>
        <div class="faq-btn">
            <?php
            $standard = get_field('standard');
            if ($standard) {
            ?>
                <a href="<?php echo esc_url($standard['url']); ?>" class="btn btn-standard">
                    <?php echo esc_html($standard['title']); ?>
                </a>
            <?php
            }
            ?>

            <?php
            $shoppable_services = get_field('shoppable_services');
            if ($shoppable_services) {
            ?>
                <a href="<?php echo esc_url($shoppable_services['url']); ?>" class="btn btn-standard">
                    <?php echo esc_html($shoppable_services['title']); ?>
                </a>
            <?php
            }
            ?>
        </div>

    </div>
</section>



<?php
get_footer();
?>